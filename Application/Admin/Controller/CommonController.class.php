<?php
namespace Admin\Controller;
use Think\Controller;
class CommonController extends Controller {
	public function _empty(){
		echo '卧槽，方法找不到，别乱写';
	}

	protected function a(){
		echo '333';
	}



	
}


