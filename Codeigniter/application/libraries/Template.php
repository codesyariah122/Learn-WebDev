<?php 

class Template {
	protected $ci_;

	function __construct()
	{
		$this->ci_ =&get_instance();
	}

	function viewnya($content, $data=null)
	{
		$data['header'] = $this->ci_->load->view('template/header', $data, TRUE);

		$data['content'] = $this->ci_->load->view($content, $data, TRUE);
		
		$data['footer'] = $this->ci_->load->view('template/footer', $data, TRUE);

		$this->ci_->load->view('template/index', $data);

	}
}
