<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perusahaan extends CI_Controller {
	function __construct(){
		parent::__construct();
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
				echo "Asdfjhbv";
				redirect(base_url('perusahaan'));
			}else{
				echo "sadfkjb";
				$this->load->view('perusahaan/bio-perusahaan');
			}
		}else{
			//var_dump($this->input->post('nama_per')); die;
			$data=array(
				'email'				=> $this->input->post('email'),
				'nama_perusahaan'	=> $this->input->post('nama_per'),
				'alamat'			=> $this->input->post('alamat'),
				'kota'				=> $this->input->post('kota')
			);
			if($this->db->insert('perusahaan', $data)){
				$this->session->set_flashdata('success', 'Data berhasil disimpan !');
                redirect(base_url('perusahaan'));
			}
		}
		
	}
}
