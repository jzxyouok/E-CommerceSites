<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
  <style type="text/css">
  <!--
  body {
      margin-left: 3px;
      margin-top: 0px;
      margin-right: 3px;
      margin-bottom: 0px;
  }
  .STYLE1 {
      color: #e1e2e3;
      font-size: 12px;
  }
  .STYLE6 {color: #000000; font-size: 12; }
  .STYLE10 {color: #000000; font-size: 12px; }
  .STYLE19 {
      color: #344b50;
      font-size: 12px;
  }
  .STYLE21 {
      font-size: 12px;
      color: #3b6375;
  }
  .STYLE22 {
      font-size: 12px;
      color: #295568;
  }
  a:link{
      color:#e1e2e3; text-decoration:none;
  }
  a:visited{
      color:#e1e2e3; text-decoration:none;
  }
  -->
  </style>

  <!--为使用富文本编辑器，引入JS文件-->
  <script type="text/javascript" src="<?php echo C('PLUGIN_URL');?>ueditor/ueditor.config.js"></script>
  <script type="text/javascript" src="<?php echo C('PLUGIN_URL');?>ueditor/ueditor.all.min.js"> </script>
  <script type="text/javascript" src="<?php echo C('PLUGIN_URL');?>ueditor/lang/zh-cn/zh-cn.js"></script>
</head>

<body>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="30"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="24" bgcolor="#353c44"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="6%" height="19" valign="bottom"><div align="center"><img src="<?php echo C('AD_IMG_URL');?>tb.gif" width="14" height="14" /></div></td>
                <td width="94%" valign="bottom"><span class="STYLE1"> 商品管理 -> 添加商品</span></td>
              </tr>
            </table></td>
            <td><div align="right"><span class="STYLE1"> 
            <a href="<?php echo U('showlist');?>" target="_self">返回</a>   &nbsp; </span>
              <span class="STYLE1"> &nbsp;</span></div></td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td>
      <form action="/index.php/Admin/Goods/add.html" method="post">

      <table width="100%" border="0" cellpadding="0" cellspacing="1" bgcolor="#a8c7ce">
      <tr>
        <td height="20" bgcolor="#FFFFFF" class="STYLE6"><div align="right"><span class="STYLE19">商品名称：</span></div></td>
        <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="left">
        <input type="text" name="goods_name" />
        </div></td>
      </tr>
        <tr>
          <td height="20" bgcolor="#FFFFFF" class="STYLE6"><div align="right"><span class="STYLE19">商品类型：</span></div></td>
          <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="left">
            <input type="text" name="type_id" />
          </div></td>
        </tr>
      <tr>
        <td height="20" bgcolor="#FFFFFF" class="STYLE6"><div align="right"><span class="STYLE19">价格：</span></div></td>
        <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="left"><input type="text" name="goods_price" /></div></td>
      </tr>
      <tr>
        <td height="20" bgcolor="#FFFFFF" class="STYLE6"><div align="right"><span class="STYLE19">数量：</span></div></td>
        <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="left"><input type="text" name="goods_number" /></div></td>
      </tr>
      <tr>
        <td height="20" bgcolor="#FFFFFF" class="STYLE6"><div align="right"><span class="STYLE19">重量：</span></div></td>
        <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="left"><input type="text" name="goods_weight" /></div></td>
      </tr>
      <tr>
        <td height="20" bgcolor="#FFFFFF" class="STYLE6"><div align="right"><span class="STYLE19">详情描述：</span></div></td>
        <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="left">
        <textarea id="goods_introduce" name="goods_introduce" style="width:520px; height:210px;"></textarea>
        </div></td>
      </tr>
        <tr>
          <td height="20" bgcolor="#FFFFFF" class="STYLE6" colspan="100"><div align="center">
            <input type="submit" value="添加商品"/>
          </div></td>

        </tr>
    </table>
        </form>
    </td>
  </tr>
</table>
</body>
</html>

<script type="text/javascript">
  var ue = UE.getEditor('goods_introduce',
          {toolbars: [[
            'undo', 'redo', 'removeformat','|',
            'bold', 'forecolor','italic', 'underline', 'strikethrough',
            'superscript', 'subscript','|','autotypeset', 'blockquote','|',
            'insertorderedlist', 'insertunorderedlist', '|', 'simpleupload', 'insertimage',
      ]]}
  );
</script>