<?php
namespace Admin\Model;
use Think\Model;

class TypeModel extends Model{
    //添加数据验证，入库前的验证，保证数据的合法性
    protected $_validate=array(
        //定义表单里面的选项
        array('type_name','require','商品类型不能为空')
        //语法：array(验证字段1,验证规则,错误提示,[验证条件,附加规则,验证时间])
    );
    //在insertFields属性里面，定义允许提交的字段，可以是数组，也可以是字符串
}



/**
 * Created by PhpStorm.
 * User: Teemo
 * Date: 2016/6/27
 * Time: 1:47
 */