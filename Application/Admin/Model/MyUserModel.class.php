<?php
namespace Admin\Model;
use Think\Model;
class MyUserModel extends Model {
    //protected $patchValidate = true;//一次性获得全部验证的错误信息
    protected $_validate = array(
        array('name','require','请填写用户名'),
        array('password','require','请填写密码'),
       // array('repassword','require','请填写确认密码'),
        //array('password','repassword','密码和确认密码不一致',0,'confirm'),
    );

    //登陆验证
    public function checkLogin($name,$pass){
        $info = $this->getByName($name);

        if(!$info || ($info['password'] != $pass)) return false;

        return $info;
    }
}