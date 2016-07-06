<?php
/**
 * Created by PhpStorm.
 * User: Teemo
 * Date: 2016/7/5
 * Time: 9:48
 */

namespace Home\Controller;
use Think\Controller;


class UserController extends Controller{

    //用户登陆页面展示
    public function login()
    {
        $this -> display();
    }

    //用户注册页展示
    public function register()
    {
        $this -> display();
    }
}