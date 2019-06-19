<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perusahaan extends CI_Controller {
	function __construct(){
		parent::__construct();
        
	}
	//functions
	function index(){
		$data['judul']="Dashboard";
		$data['subjudul']="Home SiLoker akses Perusahaan";
		$data['file']="perusahaan/dashboard";
		$data['table']="";
		$this->load->view('perusahaan/index-perusahaan',$data);
	}
}
