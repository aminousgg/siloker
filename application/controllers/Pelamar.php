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
		$data['judul']="Home Pelamar";
		$data['file']="pelamar/home";
		$data['subjudul']="Halaman Uatma Pelamar";
		$data['table']="";
		$this->load->view('pelamar/utama',$data);
	}
	function logout(){
		$this->session->unset_userdata('sesi');
        redirect(base_url('pelamar'));
	}
}
