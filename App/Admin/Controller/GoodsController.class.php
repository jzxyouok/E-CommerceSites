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
        //获取商品数据
        $goods = D('goods')
            -> field(`goods_id,goods_name,goods_price,goods_number,goods_weight,goods_introduce`)
            -> select();
        $this -> assign('goods',$goods);

        $this -> display();
    }

    //商品添加
    public function add()
    {
        //展示添加表单页，收集数据
        $goods = D('goods');
        if (IS_POST){

            $shuju = $goods -> create();
            //单独收集富文本编辑器信息,过滤信息！
            $shuju['goods_introduce'] = \fangXSS($_POST['goods_introduce']);

            $shuju['add_time'] = $shuju['upd_time'] = time();
            if ($goods -> add($shuju)){
                $this -> success('添加商品成功',U('showList'));
            }else{
                $this -> error('添加商品失败',U('showList'));
            }
        }else{
            $this -> display();
        }

    }

}