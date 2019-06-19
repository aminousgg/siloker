<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelamar extends CI_Controller {
	//functions
	function index(){
		$data['judul']="Home Pelamar";
		$data['file']="pelamar/home";
		$data['subjudul']="Halaman Uatma Pelamar";
		$data['table']="";
		$this->load->view('pelamar/utama',$data);
	}
}
