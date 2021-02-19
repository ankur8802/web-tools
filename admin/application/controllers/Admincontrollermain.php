<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admincontrollermain extends CI_Controller {

	function __construct()
	{
		parent:: __construct();

		if(!$this->session->userdata('email'))
		{
            return redirect('Admincontroller/index');
		}
	}
public function logout()
{
	session_destroy();
	return redirect('Admincontroller/index');
}

public function index()
{
   $this->load->view('index');
}
public function application()
{
	$this->load->view('data');
}

public function form()
{
	$this->load->view('form');
}



}
