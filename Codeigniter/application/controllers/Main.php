<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Main extends CI_Controller {


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
		$this->template->viewnya('contents/home', $data);
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

		$this->template->viewnya('contents/about', $data);
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

		$this->template->viewnya('contents/blog', $data);
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
		$this->template->viewnya('contents/contact', $data);
	}

}
