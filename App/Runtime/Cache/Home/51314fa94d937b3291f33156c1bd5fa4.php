<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh">
<head>
    <title>添加用户</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <script src="/Public/Common/jquery-3.0.0.min.js"></script>
    <script src="/Vendor/bootstrap/js/bootstrap.js"></script>
    <link rel="stylesheet" href="/Vendor/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="/Public/common.css">
</head>

<body id="bg-style-common">
<!--布局容器：类用于固定宽度并支持响应式布局的容器-->
<div class="container-fluid" padding-top="100px" >

    <!------------------------------------header------------------------------------------>
    <header >
        <nav class="navbar-fixed-top navbar-collapse navbar-inverse  ">
            <ul class="list-inline navbar-nav " >
                <li><a href="#" class="btn btn-link btn6 "> 编程 </a></li>
                <li><a href="#" class="btn btn1"> 阅读 </a></li>
                <li><a href="#" class="btn btn2">ThinkPHP教程</a></li>
                <li><a href="#" class="btn btn3">Linux(CentOS)教程</a></li>
                <Li><a href="#" class="btn  btn4 ">Ajax教程</a></Li>
                <li><a href="#" class="btn btn6">问答</a></li>
                <li><a href="#" class="btn btn6">赞助</a></li>
                <li><a href="#" class=" btn  btn6 " id='loginIn'>登陆</a></li>
                <li><a href="#" class=" btn  btn6" id='loginup'>注册</a></li>
            </ul>
        </nav>
    </header>

    <!--==============================content================================-->
    <section>
        <aside>
            <form  name="useradd" method="post" action="">
                <table class="table" >
                    <tr>
                        <th colspan="2"  bgcolor="#f0f0f0">
                            <h2>添加用户信息</h2>
                            <p><input type="button" value="返回列表页" onClick="location.href='list.php'"></p>
                        </th>
                    </tr>
                    <tr>
                        <td width="80" align="right">用户名：</td>
                        <td><input type="text" name="username"></td>
                    </tr>
                    <tr>
                        <td width="80" align="right">密码：</td>
                        <td><input type="password" name="username"></td>
                    </tr>
                    <tr>
                        <td width="80" align="right">请重复输入密码：</td>
                        <td><input type="password" name="reusername"></td>
                    </tr>
                    <tr>
                        <td align="right">年龄：</td>
                        <td><input type="text" name="age" value="21" size="2" maxlength="2"></td>
                    </tr>
                    <tr>
                        <td align="right">：</td>
                        <td>
                            <input type="radio" name="sex" value="1">男
                            <input type="radio" name="sex" value="2" checked="checked">女
                        </td>
                    </tr>
                    <tr>
                        <td align="right">安全邮箱：</td>
                        <td><input type="email" name="email" size="32" maxlength="32"></td>
                    </tr>
                    <tr>
                        <td align="right">安全手机：</td>
                        <td><input type="text" name="tel" size="11" maxlength="11"></td>
                    </tr>
                    <tr>
                        <td align="right">&nbsp;</td>
                        <td>
                            <input type="hidden" name="last_login_IP" value="$_SERVER['REMOTE_ADDR']">
                            <input type="hidden" name="last_login_time" value="$_SERVER['REQUEST_TIME']">
                            <input type="submit" name="useradd" value="提交表单">
                            <input type="hidden" name="ac" value="add">
                        </td>
                    </tr>
                </table>
            </form>
        </aside>

        <!--==============================footer================================-->
        <nav class="navbar-fixed-bottom navbar-collapse navbar-inverse">
            <div align="center" class="footerwordStyle">
                <span>Teemo</span> &copy; 2016<br/>
                <strong>
                    Website Template by
                    <a rel="nofollow" class="link" target="_blank" href="http//www.jx818.com/">jx818.com</a> |
                    <a href="http//www.bootstrip.com" target="_blank">bootstrip.com</a>
                </strong>
            </div>
            <hr>
            <div style="text-align:center" class="footerwordStyle">
                <p>友情链接:
                    <a href="http://www.thinkphp.cn/" target="_blank">ThinkPHP</a>
                    - <a href="www.github.com" target="_blank">GitHub</a>
                    - <a href="http://mitpress.mit.edu/sicp/full-text/book/book.html" target="_blank">SICP</a>
                    - <a href="http://www.jx818.top/" target="_blank">jx818</a>
                </p>
            </div>
        </nav>



</div>
</body>
</html>