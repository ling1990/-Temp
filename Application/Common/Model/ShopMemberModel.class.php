<?php
namespace Common\Model;
use Think\Model;
class ShopMemberModel extends Model {


    //��Ա��Ϣ����
    public function member_list(){
        $member_list = $this->where('id<3')->select();
        return $member_list;
    }
}