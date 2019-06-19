<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelamar extends CI_Controller {
	//functions
	function index(){
		$this->load->view('pelamar/utama');
	}
}
