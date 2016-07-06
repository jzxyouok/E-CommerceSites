<?php
/**
 * Created by PhpStorm.
 * User: Teemo
 * Date: 2016/7/5
 * Time: 10:33
 */

namespace Admin\Controller;
use Think\Controller;

//后台管理员控制器
class ManagerController extends Controller{

    //登陆系统
    public function login()
    {
        $this -> display();
    }
}