<?php
#pujiermanto@gmail as author / coder / scripting
class RouteIndex extends Route {
	public function get_myindex(){
		require_once $this->myindex;
	}

}