<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {

    public function _initialize(){
        if(session('name') && session('userid')) $this->redirect('Index/index');
    }

    public function index(){

        if($_POST){
            $MyUser = D('MyUser');

            $verify = new \Think\Verify();
            if(!$verify->check($_POST['verify'])) $this->ajerror('验证码不正确');

            $ck = $MyUser->create();
            if(!$ck) $this->ajerror($MyUser->getError());

            $info = $MyUser->checkLogin($_POST['name'],$_POST['password']);

            if(!$info) $this->ajerror('用户名或密码错误');

            session('name',$info['name']);
            session('userid',$info['id']);

            $this->ajLogin('登陆成功');

        }else{
            $this->display();
        }
    }

    protected function ajLogin($title){
        $info['title']=$title;
        $info['status']=3;
        $this->ajaxReturn($info);
        exit;
    }



    //验证码
    public function verifyImg(){
        $config =array(
            'imageH'	=>	30,
            'imageW'	=>	120,
            'fontSize'	=>	15,
            'useCurve'  =>  false,
            'length'	=>	4
        );
        $verify = new \Think\Verify($config);
        $verify->entry();
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