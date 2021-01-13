<?php
class About extends Controller{
    public function index($nama="puji ermanto", $jobs="web developer")
    {
    	$data['judul'] = "About Me";
    	$data['nama'] = $nama;
    	$data['jobs'] = $jobs;

    	$this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }

    public function page()
    {
    	$data['judul'] = "My Page";
    	$this->view('templates/header', $data);
        $this->view('about/page', $data);
        $this->view('templates/footer');
    }

}