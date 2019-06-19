<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	//functions

	function index(){
		$this->load->view('pelamar/utama');
	}
	function login(){
		$this->load->view('pelamar/daftar-pelamar');
	}
}
