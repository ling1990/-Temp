<?php
namespace Common\Model;
use Think\Model;
class ShopMemberModel extends Model {


    //会员信息数据
    public function member_list(){
        $member_list = $this->where('id<3')->select();
        return $member_list;
    }
}