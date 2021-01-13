<?php
#author : pujiermanto
#github : puji122 
#pujiermanto@gmail as author / coder / scripting
namespace Loader\Load;
abstract class Load_ {
	abstract function __construct();
}

class LoaderPage extends Load_ {
	private static $Page='Folder';
	private $LoadPage;
	
	public function __construct(){
		define('__PATH_FILE__', self::$Page);
			$this->LoadPage=spl_autoload_register(function($class_){
			require_once (dirname(__FILE__)).'/../'.__PATH_FILE__.'/'.$class_.'.php';
		});
		return $this->LoadPage;
	}
	
}
