<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
    //functions
    function __construct(){
        parent::__construct();
        $this->load->model('M_auth');
        if($this->session->userdata('sesi')){
            if($this->session->userdata('sesi')['level']=="pelamar"){
                redirect(base_url('pelamar'));
            }elseif($this->session->userdata('sesi')['level']=="perusahaan"){
                redirect(base_url('perusahaan'));
            }
        }
	}
	function login(){
        if(!$this->input->post('login')){
            //$this->session->unset_userdata('sesi');
            $this->load->view('pelamar/login-pelamar');
        }else{
            $cek=$this->db->get_where('users',array('username'=>$this->input->post('email')))->row_array();
            if($cek!=null&&$cek['level']==0){
                // cek status
                if($cek['status']==0){
                    $this->session->set_flashdata('pesan_login', 'Akun anda belum terverifikasi ! silahkan cek email anda');
                    redirect(base_url('auth/login'));
                }
                //cek pass
                if($cek['password']==md5($this->input->post('pass'))){
                    $sesi=array(
                        'username' => $cek['username'],
                        'nama'     => $cek['nama'],
                        'level'    => 'pelamar',
                    );
                    $this->session->set_userdata('sesi', $sesi);
                    redirect(base_url('auth/login'));
                }else{
                    $this->session->set_flashdata('pesan_login', 'username/passord salah !');
                    redirect(base_url('auth/login'));
                }
            }else{
                $this->session->set_flashdata('pesan_login', 'username/passord salah !');
                redirect(base_url('auth/login'));
            }
        }
    }
    function login_perusahaan(){
        if(!$this->input->post('login')){
            $this->load->view('perusahaan/login-perusahaan');
        }else{
            $cek=$this->db->get_where('users',array('username'=>$this->input->post('email')))->row_array();
            if($cek!=null&&$cek['level']==1){
                // cek status
                if($cek['status']==0){
                    $this->session->set_flashdata('pesan_login', 'Akun anda belum terverifikasi ! silahkan cek email anda');
                    redirect(base_url('auth/login_perusahaan'));
                }
                //cek pass
                if($cek['password']==md5($this->input->post('pass'))){
                    $sesi=array(
                        'username' => $cek['username'],
                        'nama'     => $cek['nama'],
                        'level'    => 'perusahaan',
                    );
                    $this->session->set_userdata('sesi', $sesi);
                    redirect(base_url('auth/login_perusahaan'));
                }else{
                    $this->session->set_flashdata('pesan_login', 'username/passord salah !');
                    redirect(base_url('auth/login_perusahaan'));
                }
            }else{
                $this->session->set_flashdata('pesan_login', 'Akses Denied wrong level !');
                redirect(base_url('auth/login_perusahaan'));
            }
        }
    }
    function reg_pelamar(){
        if(!$this->input->post('daftar')){
            $this->load->view('pelamar/reg-pelamar');
        }else{
            $this->db->select('username');
            $where=array(
                'username' => $this->input->post('email'),
                'level'    => 0
            );
            $cek_mail=$this->db->get_where('users',$where);
            if($cek_mail->num_rows()>0){
                $this->session->set_flashdata('error', 'Email ini telah digunakan !');
                redirect(base_url('auth/reg_pelamar'));
            }
            $data=array(
                'username' => $this->input->post('email'),
                'nama'     => $this->input->post('nama1')." ".$this->input->post('nama2'),
                'password' => md5($this->input->post('pass')),
                'token'    => md5($this->input->post('email')),
                'status'   => 0
            );
            // kirim email
            $this->send_mail($this->input->post('email'));
            if($this->M_auth->insert('users', $data)){
                $this->session->set_flashdata('success', 'Berhasil Mendaftar silahkan cek email anda untuk verifikasi');
                redirect(base_url('auth/reg_pelamar'));
            }
        }
        
    }
    function reg_perusahaan(){
        if(!$this->input->post('daftar')){
            $this->load->view('perusahaan/reg-perusahaan');
        }else{
            // cek username
            $this->db->select('username');
            $where=array(
                'username' => $this->input->post('email'),
                'level'    => 1
            );
            $cek_mail=$this->db->get_where('users',$where);
            if($cek_mail->num_rows()>0){
                $this->session->set_flashdata('error', 'Email ini telah digunakan !');
                redirect(base_url('auth/reg_perusahaan'));
            }
            $data=array(
                'username' => $this->input->post('email'),
                'nama'     => $this->input->post('nama'),
                'password' => md5($this->input->post('pass')),
                'token'    => md5($this->input->post('email')),
                'status'   => 0,
                'level'    => 1
            );
            // kirim email
            $this->send_mail_perusahaan($this->input->post('email'));
            if($this->M_auth->insert('users', $data)){
                $this->session->set_flashdata('success', 'Berhasil Mendaftar silahkan cek email anda untuk verifikasi');
                redirect(base_url('auth/reg_perusahaan'));
            }
        }
        
    }
    //
    function send_mail($email){
        $ci = get_instance();
        $ci->load->library('email');
        $code = md5($email);
        $config['protocol'] = "smtp";
        $config['smtp_host'] = "ssl://smtp.gmail.com";
        $config['smtp_port'] = "465";
        $config['smtp_user'] = "cobasekolahku@gmail.com";
        $config['smtp_pass'] = "123akusayangkamu";
        $config['charset'] = "utf-8";
        $config['mailtype'] = "html";
        $config['newline'] = "\r\n";
        $ci->email->initialize($config);
        $isi = '<table>';
        $isi .= '<tr><td><h4>Aktifasi akun Pelamar SILOKER</h4></td></tr>';
        $isi .= '<tr><td><p>Halo <b>' . $email . '</b> terima kasih telah bergabung dengan SILOKER. Kami beritahukan kepada Anda untuk melakukan aktivasi akun agar bisa digunakan.</p></td></tr>';
        $isi .= '<tr><td><a href="http://localhost/siloker/auth/aktivasi/'.$code.' ">AKTIVASI AKUN</a></td></tr>';
        $isi .= '<tr><td><p>Terima Kasih</p></td></tr>';
        $isi .= '</table>';
        $ci->email->from('noreply@printmedia.com', 'SiLoker');
        $ci->email->to($email);
        $ci->email->subject('AKTIFASI AKUN');
        $ci->email->message($isi);
        $this->email->send();
    }
    function send_mail_perusahaan($email){
        $ci = get_instance();
        $ci->load->library('email');
        $code = md5($email);
        $config['protocol'] = "smtp";
        $config['smtp_host'] = "ssl://smtp.gmail.com";
        $config['smtp_port'] = "465";
        $config['smtp_user'] = "cobasekolahku@gmail.com";
        $config['smtp_pass'] = "123akusayangkamu";
        $config['charset'] = "utf-8";
        $config['mailtype'] = "html";
        $config['newline'] = "\r\n";
        $ci->email->initialize($config);
        $isi = '<table>';
        $isi .= '<tr><td><h4>Aktifasi akun Perusahaan SILOKER</h4></td></tr>';
        $isi .= '<tr><td><p>Halo <b>' . $email . '</b> terima kasih telah bergabung dengan SILOKER. <br> Kami beritahukan kepada Anda untuk melakukan aktivasi akun agar bisa digunakan.</p></td></tr>';
        $isi .= '<tr><td><a href="http://localhost/siloker/auth/aktivasi/'.$code.' ">AKTIVASI AKUN</a></td></tr>';
        $isi .= '<tr><td><p>Terima Kasih</p></td></tr>';
        $isi .= '</table>';
        $ci->email->from('noreply@printmedia.com', 'SiLoker');
        $ci->email->to($email);
        $ci->email->subject('AKTIFASI AKUN');
        $ci->email->message($isi);
        $this->email->send();
        // var_dump($this->email->send()); die;
    }

    function notif_aktif(){
        $data['judul']="Aktifasi";
        $this->load->view('global/aktivasi',$data);
    }

    function aktivasi($token){
        $cek=$this->db->get_where('users',array('token'=>$token));
        if($cek->num_rows()>0){
            $this->db->where('token',$token);
            if( $this->db->update('users',array('status'=>1)) ){
                $cek=$cek->row_array();
                if($cek['level']==0){
                    $this->session->set_flashdata('link', '');
                }elseif($cek['level']==1){
                    $this->session->set_flashdata('link', '_perusahaan');
                }
                $this->session->set_flashdata('success', 'Akun anda berhasil diaktifkan');
                redirect(base_url('auth/notif_aktif'));
            }
        }else{
            $this->session->set_flashdata('error', 'Gagal Mendaftar');
            redirect(base_url('auth/notif_aktif'));
        }
    }
}
