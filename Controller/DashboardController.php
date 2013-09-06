<?php //die("here");
class DashboardController extends AppController {
	public $name 		= 'dashboard';
	public $components  = array('RequestHandler','Email','Auth','Session','Cookie');
	var $helpers        = array('Html', 'Form','Paginator','Js','JqueryEngine','Session');
	//var $uses         = array ('User','Emailnotification','Userprofile','Account','Prediction','Category');
function beforeFilter(){
	$this->Auth->allow();
	}

	public function index() {
		$this->layout='front';
	}
}
