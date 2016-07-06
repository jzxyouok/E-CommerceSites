<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {

    //前台首页展示
    public function index()
    {
        $this->display();
    }
}