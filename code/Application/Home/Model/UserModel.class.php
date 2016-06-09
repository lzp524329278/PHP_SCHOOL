<?php
namespace Home\Model;
use Think\Model;
class UserModel extends Model{
     public function register($data) {
         return $this->add($data);
     }
}
