<?php //die("here");
class LoginController extends AppController {
	public $name 		= 'login';
	public $components  = array('RequestHandler','Email','Auth','Session','Cookie');
	var $helpers        = array('Html', 'Form','Paginator','Js','JqueryEngine','Session');
	var $uses         = array ('User');
	
	function beforeFilter(){
		$this->Auth->allow('login','logout');
	}


function beforeFilter(){
	$this->Auth->allow('login')
	;}

	public function login(){

		$this->layout='login';
		if($this->request->is('post')){//checking post//
		if (empty($this->data['Post']['username']) || empty($this->data['Post']['username'])) {
					$this->Session->setFlash("Sorry, the username or password is not valid, please try again");
					$this->redirect(array('controller'=>'login','action'=> 'login'));
				}else{
					$Auth = $this->User->find('first',array(
					     'conditions'=>array(array('OR'=>array('User.email'=>$this->data['Post']['username'],'User.username'=>$this->data['Post']['username']))
						 )));
					$validAccount = $this->User->find('first',array(
							'conditions'=>array(array('OR'=>array('User.email'=>$this->data['Post']['username'],'User.username'=>$this->data['Post']['username'])),'User.password'=>($this->data['Post']['password']))));
					if(count($validAccount)){			   
						$user = $this->Auth->login($Auth);
			// after login checking  rememberme functionality
						if($this->data['Post']['rememberme'] == '1'){
								$cookie = array();  
								$cookie['username'] = $this->data['Post']['username'];  
								$this->Cookie->write('rememberme', $cookie, false, 365*24*3600);
								$this->Cookie->time = 365*24*3600;
							}
							if ($this->Auth->user()) {//check auth user
								$this->Session->write('Auth',$this->Session->read('Auth.User'));
								parent::rediretComingUrl();
							
								}
							}else{
								$this->Session->setFlash("Sorry, the username or password is not valid, please try again");
								$this->redirect(array('controller'=>'login','action'=> 'login'));
							}
				  }
			}//checking post//
	}//func end login//
	function logout(){
			$this->Session->destroy();
			$this->Auth->logout();
			$this->Cookie->delete('rememberme');
			$this->redirect(array('controller'=>'login','action'=> 'login'));
		}
}//class ends//
