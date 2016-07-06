<?php
/**
 * Created by PhpStorm.
 * User: Teemo
 * Date: 2016/7/5
 * Time: 11:19
 */

namespace Admin\Controller;
use Model\GoodsModel;
use Think\Controller;


class GoodsController extends Controller{

    //后台商品展示页
    public function showList()
    {
        //测试数据库连接
        $goods = new \Model\GoodsModel();  //完全限定名称 方式实例化类对象
        dump($goods);
        $this -> display();
    }

    //商品添加
    public function add()
    {
        $this -> display();
    }

}