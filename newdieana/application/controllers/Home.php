<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('Template');
    }

    public function index()
    {
        $data['title'] = "Home dieana";
        $this->template->template('content/index', $data);
    }

    

}