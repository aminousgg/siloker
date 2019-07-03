<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perusahaan extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('M_auth');
        if(!$this->session->userdata('sesi')){
			redirect(base_url('auth/login_perusahaan'));
		}
	}
	//functions
	function index(){
		$email=$this->session->userdata('sesi')['username'];
		$cek=$this->db->get_where('perusahaan',array('email'=>$email))->num_rows();
		if($cek>0){
			$data['judul']="Dashboard";
			$data['subjudul']="Home SiLoker akses Perusahaan";
			$data['file']="perusahaan/dashboard";
			$data['table']="";
			$this->load->view('perusahaan/index-perusahaan',$data);
		}else{
			redirect(base_url('perusahaan/kelengkapan'));
		}
	}
	function logout(){
		$this->session->unset_userdata('sesi');
        redirect(base_url('perusahaan'));
	}
	function kelengkapan(){
		if(!$this->input->post('masuk')){
			$email=$this->session->userdata('sesi')['username'];
			$cek=$this->db->get_where('perusahaan',array('email'=>$email))->num_rows();
			if($cek>0){
				redirect(base_url('perusahaan'));
			}else{
				$this->load->view('perusahaan/bio-perusahaan');
			}
		}else{
			//var_dump($this->input->post('nama_per')); die;
			$config['upload_path'] 		= './upload/foto_perusahaan/';
			$config['allowed_types'] 	= 'jpg|jpeg|png|gif';
			$this->load->library('upload',$config);
			$this->upload->do_upload('file');
			$hasil = $this->upload->data();
			$data=array(
				'email'				=> $this->input->post('email'),
				'nama_perusahaan'	=> $this->input->post('nama_per'),
				'alamat'			=> $this->input->post('alamat'),
				'kota'				=> $this->input->post('kota'),
				'foto_profile'		=> $hasil['file_name']
			);
			if($this->db->insert('perusahaan', $data)){
				$this->session->set_flashdata('success', 'Data berhasil disimpan !');
                redirect(base_url('perusahaan'));
			}
		}
	}

	function post_lowongan(){
		if(!$this->input->post('post')){
			$data['judul']="Posting Lowongan";
			$data['subjudul']="Informasikan Lowongan untuk mendapatkan pegawai";
			$data['file']="perusahaan/post-lowongan";
			$data['table']="";
			$this->load->view('perusahaan/index-perusahaan',$data);
		}else{
			$post=array(
				'email'		  => $this->session->userdata('sesi')['username'],
				'jabatan'	  => $this->input->post('jabatan'),
				'gaji'		  => $this->input->post('gaji'),
				'isi_post'	  => $this->input->post('isi_post'),
				'status_post' => 1
			);
			if($this->db->insert('posting',$post)){
				$this->db->select('id');
				$id_post=$this->db->get_where('posting',array('email'=>$this->session->userdata('sesi')['username']))->row_array();
				$this->db->where('email',$this->session->userdata('sesi')['username']);
				$up_id=array('id_post'=>$id_post['id']);
				if($this->db->update('perusahaan',$up_id)){
					$this->session->set_flashdata('success', 'Data berhasil disimpan !');
                	redirect(base_url('perusahaan/post_lowongan'));
				}
			}
		}
	}

	function edit_post(){
		$post=array(
			'jabatan'	=> $this->input->post('jabatan'),
			'gaji'		=> $this->input->post('gaji'),
			'isi_post'		=> $this->input->post('isi'),
		);
		$id=$this->input->post('id');
		$this->db->where('id',$id);
		if($this->db->update('posting',$post)){
			$data=array('cek'=>true);
			echo json_encode($data);
		}
	}

	function set_status_pos($aksi){
		if($aksi=="post"){
			$set=array('status_post'=>1);
			$id=$this->input->post('id');
			$this->db->where('id',$id);
			if($this->db->update('posting',$set)){
				$data=array('cek'=>true);
				echo json_encode($data);
			}
		}elseif($aksi=="unpost"){
			$set=array('status_post'=>0);
			$id=$this->input->post('id');
			$this->db->where('id',$id);
			if($this->db->update('posting',$set)){
				$data=array('cek'=>true);
				echo json_encode($data);
			}
		}
	}

	function daftar_pelamar(){
		$data['judul']="Posting Lowongan";
		$data['subjudul']="Informasikan Lowongan untuk mendapatkan pegawai";
		$data['file']="perusahaan/daftar_pelamar";
		$data['table']=$this->M_auth->daftar_lamaran($this->session->userdata('sesi')['username']);
		$this->load->view('perusahaan/index-perusahaan',$data);
	}

	function hubungi($email,$nama_peru){
		$nama_peru=urldecode($nama_peru);
		$pelamar=$this->db->get_where('pelamar',array('email'=>$email))->row_array();
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
        $isi .= '<tr><td><h4>Halo '.$pelamar['nama'].'</h4></td></tr>';
        $isi .= '<tr><td><p>Anda Telah masuk kriteria di perusahaan kami. <br> Kami beritahukan kepada Anda untuk mengikuti tes seleksi selanjutnya.</p></td></tr>';
        $isi .= '<tr><td>Silahkan Hubungi pihak '.$pelamar['nama'].'</td></tr>';
        $isi .= '<tr><td><p>Hormat Kami <br><br><br> '.$nama_peru.'</p></td></tr>';
        $isi .= '</table>';
        $ci->email->from('noreply@printmedia.com', $nama_peru);
        $ci->email->to($email);
        $ci->email->subject('Balasan Lamaran');
        $ci->email->message($isi);
        if( $this->email->send() ){
			$this->session->set_flashdata('success','Pelamar Berhasil dihubungi');
			redirect(base_url('perusahaan/daftar_pelamar'));
		}else{
			$this->session->set_flashdata('error','Gagal Menghubungi Pelamar silahkan cek jaringan anda');
			redirect(base_url('perusahaan/daftar_pelamar'));
		}
	}

	function profile(){
		if(!$this->input->post('id')){
			$data['judul']="Profile Perusahaan";
			$data['subjudul']="Akun Dan Profile";
			$data['file']="perusahaan/profile";
			$email=$this->session->userdata('sesi')['username'];
			$data['table']=$this->M_auth->pro_per($email);
			$this->load->view('perusahaan/index-perusahaan',$data);
		}else{
			$id=$this->input->post('id');
			$up = array(
				'email'				=> $this->input->post('email'),
				'nama_perusahaan'	=> $this->input->post('nama'),
				'alamat'			=> $this->input->post('alamat')
			);
			$this->db->where('id',$id);
			if($this->db->update('perusahaan',$up)){
				$isi=$this->db->get_where('perusahaan',array('id'=>$id))->row_array();
				$isi['cek']=true;
				echo json_encode($isi);
			}else{
				$data=array('cek'=>false);
				echo json_encode($data);
			}
			
		}
		
	}
}
