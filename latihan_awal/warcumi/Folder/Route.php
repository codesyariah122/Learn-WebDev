<?php
#pujiermanto@gmail as author / coder / scripting
class Route {
	protected $index;
	protected $main;
	private $form;
	private $portfolio;
	protected $footer;
	
	protected function myindex(){
		return $this->index;
	}
	protected function mymain(){
		return $this->main;
	}
	private function myform(){
		return $this->form;
	}
	protected function myportfolio(){
		return $this->portfolio;
	}
	protected function myfooter(){
		return $this->footer;
	}
}

