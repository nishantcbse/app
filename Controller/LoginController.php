<?php //die("here");
class LoginController extends AppController {
	public $name 		= 'login';
	public $components  = array('RequestHandler','Email','Auth','Session','Cookie');
	var $helpers        = array('Html', 'Form','Paginator','Js','JqueryEngine','Session');
	//var $uses         = array ('users');
function beforeFilter(){
	$this->Auth->allow('login')
	;}

	public function login() {
	//$users = $this->users->find('all');
		///debug($users);
		$this->layout='login';
	
	}
}
