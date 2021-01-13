<?php
#author : pujiermanto
#github : puji1903
#pujiermanto@gmail as author / coder / scripting
namespace Loader\Loader;

class Loader {
	const __PATH__ = 'Assets/';
    private $file=;
	private $LoadPage;

public function Jalankan($file){

    $this->file=$file;

  if(is_readable($this->file)):
$this->LoadPage = spl_autoload_register(
  function($class){ require_once (dirname(__FILE__)).'/../'.Loader::__PATH__.'/'.$class.'.php';
		});
		return $this->LoadPage;
  else:
  echo "File not found";
  endif;

	}

}