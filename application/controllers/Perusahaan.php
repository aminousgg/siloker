<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perusahaan extends CI_Controller {
	//functions
	function index(){
		$this->load->view('perusahaan/index-perusahaan');
	}
}
