<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelamar extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('M_auth');
        if(!$this->session->userdata('sesi')){
			redirect(base_url('auth/login'));
		}
	}
	//functions
	function index(){
		$email=$this->session->userdata('sesi')['username'];
		$cek=$this->db->get_where('pelamar',array('email'=>$email))->num_rows();
		// var_dump($cek); die;
		if($cek>0){
			$data['judul']="Home Pelamar";
			$data['file']="pelamar/home";
			$data['subjudul']="Halaman Uatma Pelamar";
			$data['table']=$this->M_auth->profile($email);
			$data['post']=$this->M_auth->home();
			$this->load->view('pelamar/utama',$data);
		}else{
			redirect(base_url('pelamar/data_diri'));
		}
	}
	function logout(){
		$this->session->unset_userdata('sesi');
        redirect(base_url('pelamar'));
	}
	// 
	function data_diri(){
		if(!$this->input->post('masuk')){
			$email=$this->session->userdata('sesi')['username'];
			$cek=$this->db->get_where('pelamar',array('email'=>$email))->num_rows();
			if($cek>0){
				echo "Asdfjhbv";
				redirect(base_url('pelamar'));
			}else{
				echo "sadfkjb";
				$this->load->view('pelamar/data-diri');
			}
		}else{
			$data=array(
				'email'		=> $this->input->post('email'),
				'nama'		=> $this->input->post('nama'),
				'alamat'	=> $this->input->post('alamat'),
				'tempat_lahir' => $this->input->post('tmp_lahir'),
				'tgl_lahir'	=> $this->input->post('tgl_lahir'),
				'pendidikan'=> $this->input->post('pend'),
				'tahun_lulus' => $this->input->post('thn_lulus'),
				'status'	=> $this->input->post('status'),
			);
			if($this->db->insert('pelamar',$data)){
				$this->session->set_flashdata('success', 'Data Berhasil di simpan !');
				redirect(base_url('pelamar'));
			}
		}
		
	}

	function melamar(){
		$email_pel=$this->session->userdata('sesi')['username'];
		$cek=$this->db->get_where('minat_perusahaan',array('email_pelamar'=>$email_pel))->num_rows();
		$haha=array(
			'email_pelamar' 	=> $email_pel,
			'email_perusahaan'	=> $this->input->post('email_peru')
		);
		$cek_minat=$this->db->get_where('minat_perusahaan',$haha)->num_rows();
		if($cek_minat>0){
			$this->session->set_flashdata('error', 'Anda sudah mendaftar di perusahaan ini !');
			redirect(base_url('pelamar'));
		}

		if($cek<4){
			$in=array(
				'email_pelamar'		=> $email_pel,
				'email_perusahaan'	=> $this->input->post('email_peru'),
			);
			if($this->db->insert('minat_perusahaan',$in)){
				$this->session->set_flashdata('success', 'Berhasil Mendaftar !');
				redirect(base_url('pelamar'));
			}else{
				$this->session->set_flashdata('error', 'Gagal Mendaftar !');
				redirect(base_url('pelamar'));
			}
		}else{
			$this->session->set_flashdata('error', 'Kesempatan mendaftar anda sudah habis');
			redirect(base_url('pelamar'));
		}
	}
}
