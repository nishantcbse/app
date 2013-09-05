<?php //die("here");
class ProfileController extends AppController {
	public $name 		= 'profile';
	public $components  = array('RequestHandler','Email','Auth','Session','Cookie');
	var $helpers        = array('Html', 'Form','Paginator','Js','JqueryEngine','Session');
	//var $uses         = array ('User','Emailnotification','Userprofile','Account','Prediction','Category');
function beforeFilter(){
	$this->Auth->allow('index')
	;}

	public function index() {
		$this->layout='front';
	}
}
