<?php

namespace Home\Model;

use Think\Model;

class UserModel extends Model {

    function init() {
        header("Content-type:text / html;charset = utf-8");
    }

    //表单验证部分
    protected $patchValidate = true;
    protected $_validate = array(
        array('user_id', 'require', '帐号不能为空', self::EXISTS_VALIDATE),
        array('user_id', '6,16', '帐号长度不正确(6-16位)', 0, 'length'),
        array('user_id', 'check_user_id', '帐号已经存在！', 0, 'callback'),
        array('user_id_lost', 'require', '帐号不能为空', self::EXISTS_VALIDATE),
        array('user_id_lost', '6,16', '帐号长度不正确(6-16位)', 0, 'length'),
        array('user_id_lost', 'check_lost_user_id', '帐号已经存在！', 0, 'callback'),
        array('password', 'require', '密码不能为空', self::EXISTS_VALIDATE),
        array('password2', 'require', '确认密码不能为空', self::EXISTS_VALIDATE),
        array('password2', 'password', '确认密码不正确', 0, 'confirm'), // 验证确认密码是否和密码一致
        array('password', '6,16', '密码长度不正确(6-16位)', 0, 'length'),
        array('email', 'require', 'email不能为空', self::EXISTS_VALIDATE),
        array('email', 'email', 'email格式不对'), // 
        array('user_name', 'require', '姓名不能为空', self::EXISTS_VALIDATE),
        array('telphone_num', 'require', '电话号码不能为空', self::EXISTS_VALIDATE),
        array('telphone_num', 'number', '电话号码格式不对'), // 
        array('telphone_num', '11', '电话号码长度不正确(11位)', 0, 'length'),
        array('address', 'require', '地址不能为空', self::EXISTS_VALIDATE),
        array('address', '5,100', '地址长度不正确', 0, 'length'),
    );

    //表单验证，检查注册的用户名是否存在
    protected function check_user_id($user_id) {
        $this->field(array('user_id'));
        $this->where(array('user_id' => $user_id));
        if ($this->field(array('user_id'))->where(array('user_id' => $user_id))->select()) {
            return false;
        }
        return true;
    }
     //表单验证，检查注册的用户名是否存在
    protected function check_lost_user_id($user_id) {
        $this->field(array('user_id'));
        $this->where(array('user_id' => $user_id));
        if ($this->field(array('user_id'))->where(array('user_id' => $user_id))->select()) {
            return true;
        }
        return false;
    }

    //注册
    public function register($data) {
        return $this->add($data);
    }

    //登录
    public function login($data) {
        $result = $this->where(array('user_id' => $data['user_id'], 'password' => $data['password']))->select();
        if ($result) {
            return $result[0]['user_name'];
        } else {
            return false;
        }
    }
    //找回密码
    public function resetpass($data){
        $change['password']=$data['password'];
        $result = $this->where(array('user_id' => $data['user_id_lost']))->save($change);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
    //查询当前购物车的价格总额
    public function get_shopping_cart_money() {
        //设置查询字段为个数和单价
        $this->field('num,per_price');
        //设置查询条件
        $condition['user_id'] = session('user_id');
        $this->where($condition);
        
        $result=$this->select();
        if(!$result){
            return '0元';
        }
        $total=0.0;
        foreach ($result as $row) {
            $total+=$row['num']*$row['per_price'];
        }
        return $total.'元';
        
    }

}
