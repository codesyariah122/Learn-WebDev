<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Main extends CI_Controller {
	protected $brandData;

	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$data = [
			'brand'=> 'assets/images/brand.png',
			'jumbotron' => 'assets/images/jumbotron/home.jpg',
			'banner' => 'first <span> serve </span> <br/> first <span> come </span>',
			'method' => $this->router->fetch_method(),
			'uri' => $this->uri->segment(1),
			'title' => 'MyArtisan Website'
		];
		$this->template->view('contents/home', $data);
	}

	public function about()
	{
		$data = [
			'brand'=> 'assets/images/brand.png',
			'jumbotron' => 'assets/images/jumbotron/about.jpg',
			'banner' => 'Your <span> life </span> <br/> your <span> passion </span>',
			'method' => $this->router->fetch_method(),
			'uri' => $this->uri->segment(1),
			'title' => 'AboutMe Page'
		];

		$this->template->view('contents/about', $data);
	}

	public function blog()
	{
		$data = [
			'brand'=> 'assets/images/brand.png',
			'jumbotron' => 'assets/images/jumbotron/blog.jpg',
			'banner' => 'Archived <span> story </span> <br/> Saved <span> dream </span>',
			'method' => $this->router->fetch_method(),
			'uri' => $this->uri->segment(1),
			'title' => 'MyBlog Page'
		];

		$this->template->view('contents/blog', $data);
	}

	public function contact()
	{
		$data = [
			'brand'=> 'assets/images/brand.png',
			'jumbotron' => 'assets/images/jumbotron/contact.jpg',
			'banner' => 'First <span> commit </span> <br/> First <span> moment </span>',
			'method' => $this->router->fetch_method(),
			'uri' => $this->uri->segment(1),
			'title' => 'MyContact Page'
		];
		$this->template->view('contents/contact', $data);
	}

}