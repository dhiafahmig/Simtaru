<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{


	public function index()
	{
		$this->load->view('welcome_message');
		$this->load->view('templates/landing_pages/header');
		$this->load->view('templates/landing_pages/footer');
	}
}
