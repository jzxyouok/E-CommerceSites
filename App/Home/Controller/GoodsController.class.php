<?php
/**
 * Created by PhpStorm.
 * User: Teemo
 * Date: 2016/7/5
 * Time: 9:33
 */

namespace Home\Controller;
use Think\Controller;

class GoodsController extends Controller{

    //商品列表页展示
    public function showList()
    {
        $this -> display();
    }

    //商品详情页展示
    public function detail()
    {
        $this -> display();
    }
}