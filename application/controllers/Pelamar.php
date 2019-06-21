<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelamar extends CI_Controller {
	function __construct(){
		parent::__construct();
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
			$data['table']="";
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
}
