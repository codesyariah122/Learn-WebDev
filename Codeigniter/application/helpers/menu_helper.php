<?php 
function show_current_class($args = "",$class = "active") {
		$route_obj = new CI_Router;
		$get_page = $route_obj->method;

		if($get_page == $args) {
			echo $class;
	}
}