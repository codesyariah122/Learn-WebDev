<?php
#pujiermanto@gmail as author / coder / scripting
class Config {
	protected $webindex;
	protected $webmain;
	private $webform;
	private $webportfolio;
	protected $webfooter;

	const css1="View/css/style.css";
	const css2="View/css/warcumi_style.css";
	const css3="View/vendor/bootstrap/css/bootstrap.min.css";
	const css4="View/css/warcumi.min.css";
	const css5="View/vendor/font-awesome/css/font-awesome.min.css";
	const js1="View/js/myjs.js";
	const js2="View/vendor/jquery/jquery.min.js";
	const js3="View/vendor/bootstrap/js/bootstrap.bundle.min.js";
	const js4="View/js/jqBootstrapValidation.js";
	const js5="View/vendor/jquery-easing/jquery.easing.min.js";
	const js6="View/js/jqBootstrapValidation.js";
	const js7="View/js/contact_me.js";
	const js8="View/js/agency.min.js";
	const LOGOS1="View/IMG/neon.jpg";
	const SYMBOL1="&#x262e;";
	const TITTLE="WARCUMI";

	protected function __construct(){
		$this->webindex=new RouteIndex();
		$this->webmain=new RouteMain();
		$this->webform=new RouteForm();
		$this->webfooter=new RouteFooter();
		$this->webportfolio=new RoutePortFolio();
		$this->webindex->myindex="View/index.php";
		$this->webmain->mymain="View/main.php";
		$this->webform->myform="View/form.php";
		$this->webportfolio->myportfolio="View/portfolio_modal.php";
		$this->webfooter->myfooter="View/footer.php";

		define('MYCSS1', self::css1);
		define('MYCSS2', self::css2);
		define('MYCSS3', self::css3);
		define('MYCSS4', self::css4);
		define('MYCSS5', self::css5);
		define('MYJS1', self::js1);
		define('MYJS2', self::js2);
		define('MYJS3', self::js3);
		define('MYJS4', self::js4);
		define('MYJS5', self::js5);
		define('MYJS6', self::js6);
		define('MYJS7', self::js7);
		define('MYJS8', self::js8);

		define('MYLOGO1', self::LOGOS1);
		define('MYSYMBOL1', self::SYMBOL1);
		define('MYTITTLE', self::TITTLE);
	}
	protected function AccessConfig(){
		return
          $this->webindex->get_myindex().
		  $this->webmain->get_mymain().
		//$this->webform->get_myform();
		  $this->webportfolio->get_myportfolio().
		  $this->webfooter->get_myfooter();
	}


}