<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('Template');
	}

	public function login()
	{
		$data['title'] = "Login Member";

		$this->template->template('content/auth/login', $data);
	}

	public function register()
	{
		$data['title'] = "Register Member";
		$this->template->template('content/auth/register', $data);
	}


}