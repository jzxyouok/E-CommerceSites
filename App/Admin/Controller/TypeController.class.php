<?php
namespace Admin\Controller;
use Org\Util\Date;
use Think\Controller;
class TypeController extends Controller {
    //添加商品类型
    public function add()
    {
        if(IS_POST){
            $typemodel = D('Type');
            //$typemodel -> create()在创建数据验证时完成自动验证功能
            if ($typemodel -> create()){
                
                if ($typemodel->add()){
                    $this-> success('添加成功',U('lst'));
                    exit;
                }else{
                    $this-> error('添加失败！');
                }
            }else{
                $this->error($typemodel -> getError());
            }
        }
        $this ->display();
    }
}




/**
 * Created by PhpStorm.
 * User: Teemo
 * Date: 2016/6/27
 * Time: 0:10
 */