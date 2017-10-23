<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="洪壮贤">
    <meta name="keyword" content="洪壮贤">
    <link rel="shortcut icon" href="img/favicon.html">

    <title>管理员登陆</title>

    <!-- Bootstrap core CSS -->
    <link href="/bridge/Public/admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="/bridge/Public/admin/css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="/bridge/Public/admin/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="/bridge/Public/admin/css/style.css" rel="stylesheet">
    <link href="/bridge/Public/admin/css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

  <body class="login-body">

    <div class="container">

      <form class="form-signin">
        <h2 class="form-signin-heading">sign in now</h2>
        <div class="login-wrap">
            <input type="text" class="form-control" placeholder="用户账号" autofocus name="adminname" id="adminname">
            <input type="password" class="form-control" placeholder="用户密码" name="adminpwd" id="adminpwd">
            <label class="checkbox">
                <span class="pull-right"> <a href="<?php echo U('Admin/login/login');?>"> Existing Account?</a></span>
            </label>
            <button class="btn btn-lg btn-login btn-block" type="button" onclick="dologin()">登陆</button>
            <!-- <p>or you can sign in via social network</p>
            <div class="login-social-link">
                <a href="index.html" class="facebook">
                    <i class="icon-facebook"></i>
                    Facebook
                </a>
                <a href="index.html" class="twitter">
                    <i class="icon-twitter"></i>
                    Twitter
                </a> -->
            </div>

        </div>

      </form>

    </div>
<script src="/bridge/Public/admin/js/jquery.js"></script>
<script src="/bridge/Public/admin/js/jquery-1.8.3.min.js"></script>
<!--弹框样式-->
<link rel="stylesheet" type="text/css" href="/bridge/Public/layer/skin/layer.css">
<script src="/bridge/Public/layer/layer.js"></script>
<!--弹框样式-->
<script type="text/javascript">
    //处理管理员登陆
    function dologin(){
        var adminname=$('#adminname').val();
        var adminpwd=$('#adminpwd').val();
        var ajaxadminUrl='<?php echo U("Login/dologin");?>'; 
        if(adminname==''){
           layer.msg('用户名不允许为空！');
           return false;
        }
        if(adminpwd==''){
           layer.msg('密码不允许为空！');
           return false;
        }

    /*ajax提交*/
      $.ajax({
      //提交数据的类型 POST GET
        type: "POST",
      //提交的网址
        url: ajaxadminUrl,
      //提交的数据
        data: {adminname: adminname,adminpwd:adminpwd},
      //返回数据的格式
        datatype: "json",
      //成功返回之后调用的函数
        success: function (data) {
      ////根据ajax返回参数判断验证码发送情况
        if(data['status']=="1"){
            layer.msg('登陆成功!'); 
            window.location.href="<?php echo U('/Admin/Index/index');?>";
        }else if(data['status']=="-1"){
            layer.msg('用户名或密码错误!');      
        }else{
            layer.msg('未知错误!');   
        }
      ////根据ajax返回参数判断验证码发送情况
        }
     });
    /*ajax提交*/
    }
</script>
  </body>
</html>