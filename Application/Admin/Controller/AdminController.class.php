<?php
namespace Admin\Controller;
use Think\Controller;
class AdminController extends Controller {
	
	public function _initialize(){
		if(!session('name') || !session('userid')) $this->redirect('Login/index');
	}


	public function ajsuccess($title){
		$info['title']=$title;
		$info['status']=1;
		$this->ajaxReturn($info);
		exit;
	}

	public function ajerror($title){
		$info['title']=$title;
		$info['status']=2;
		$this->ajaxReturn($info);
		exit;
	}

}


