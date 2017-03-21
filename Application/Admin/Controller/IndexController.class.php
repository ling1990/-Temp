<?php
namespace Admin\Controller;
//use Think\Controller;
class IndexController extends AdminController {

	public function index(){
		$m=M('Shop_member');

		$count=$m->count();

		$p=getpage($m,10,$count);

		$list=$m->order('id desc')->select();

		$this->list=$list;
		$this->page=$p->show();

		if(IS_AJAX){
			exit($this->fetch('member_page'));
		}

		$this->display();
	}



	/*public function index(){

		$Mmember=M();

		$table=array('c_shop_member'=>'a','c_member'=>'b','c_shop_member_group'=>'c');
		$where="a.userid=b.id and a.shopid=1 and a.groupid=c.id";

		$count      = $Mmember->table($table)->where($where)->count();

		$p=getpage($Mmember,5,$count);

		$list = $Mmember->table($table)->where($where)->field('a.*,b.phone,b.creat_time,c.name as groupname')->order('id desc')->select();

		$this->list=$list;
		$this->page=$p->show();

		if(IS_AJAX){
			exit($this->fetch('member_page'));
		}


		$this->display();
	}*/




	public function imageUpload(){
		if(empty($_FILES)) $this->ajerror('请选择上传图片');
		$config = array(
			'rootPath'	=>	'./Public/',
			'savePath'	=>	'upload/'
		);
		$upload = new \Think\Upload($config);
		$z = $upload->uploadOne($_FILES['logo']);
		if(!$z) $this->ajerror($upload->getError());

		$bigimg = $z['savepath'].$z['savename'];
		//生成缩略图
		$image = new \Think\Image();
		$srcimg = $upload->rootPath.$bigimg;
		$image->open($srcimg);
		$image->thumb(150,150);
		$smallimg = $z['savepath'].'small_'.$z['savename'];
		$image->save($upload->rootPath.$smallimg);

		$this->ajsuccess('上传成功');
	}



	public function logout(){
		session(null);
		$this->redirect('Login/index');
	}




	
}


