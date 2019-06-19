<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	//functions
	function login(){
		$this->load->view('pelamar/login-pelamar');
    }
    function login_perusahaan(){
        $this->load->view('perusahaan/login-perusahaan');
    }
}
