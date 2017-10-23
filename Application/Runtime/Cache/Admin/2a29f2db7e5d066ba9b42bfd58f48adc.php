<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="洪壮贤">
    <meta name="keyword" content="洪壮贤">
    <link rel="shortcut icon" href="/Public/admin/img/favicon.html">
    <title>后台管理</title>  
    <!-- Bootstrap core CSS -->
    <link href="/Public/admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="/Public/admin/css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="/Public/admin/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="/Public/admin/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
    <link rel="stylesheet" href="/Public/admin/css/owl.carousel.css" type="text/css">
    <!-- Custom styles for this template -->
    <link href="/Public/admin/css/style.css" rel="stylesheet">
    <link href="/Public/admin/css/style-responsive.css" rel="stylesheet" />
    <!-- 图标  -->
    <link rel="shortcut icon" href="/Public/home/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/Public/home/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/Public/home/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/Public/home/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="/Public/home/images/ico/apple-touch-icon-57-precomposed.png">
    <!-- 图标  -->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" class="">
      <!--header start-->
      <header class="header white-bg">
            <div class="sidebar-toggle-box">
                <div data-original-title="Toggle Navigation" data-placement="right" class="icon-reorder tooltips"></div>
            </div>
            <!--logo start-->
            <a href="#" class="logo"><span>香香</span>球球</a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                <ul class="nav top-menu">
                    <!-- inbox dropdown start-->
                    <li id="header_inbox_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="icon-envelope-alt"></i>
                            <span class="badge bg-important"><?php echo ($datacount); ?></span>
                        </a>
                        <ul class="dropdown-menu extended inbox" id="getmessage">
                            <div class="notify-arrow notify-arrow-red"></div>
                            <li>
                                <p class="red">你有条
                                <span id="messcount"><?php echo ($datacount); ?>
                                </span>留言信息
                                </p>
                            </li>
                <?php if(is_array($messdata)): $i = 0; $__LIST__ = $messdata;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                      <a href="<?php echo U('Admin/Message/remess','','');?>/id/<?php echo ($vo["id"]); ?>">
                        <span class="photo"><img alt="avatar" src="/Public/img/uploads/userimg/<?php echo ($vo["img"]); ?>"></span>
                        <span class="subject">
                          <span class="from"><?php echo ($vo["username"]); ?></span>
                          <span class="time"><?php echo ($vo["time"]); ?></span>
                        </span>
                        <span class="message">
                          <?php echo ($vo["content"]); ?>
                        </span>
                      </a>
                    </li><?php endforeach; endif; else: echo "" ;endif; ?>
                    <li>
                      <a href="<?php echo U('Admin/Message/lst');?>">回复留言</a>
                    </li>
                        </ul>
                    </li>
                    <!-- inbox dropdown end -->
                    <!-- notification dropdown start-->
                    <li id="header_notification_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                            <i class="icon-bell-alt"></i>
                            <span class="badge bg-warning"><?php echo ($plcount); ?></span>
                        </a>
                        <ul class="dropdown-menu extended notification">
                            <div class="notify-arrow notify-arrow-yellow"></div>
                            <li>
                                <p class="yellow">你有<?php echo ($plcount); ?>条新的评论</p>
                            </li>
              <?php if(is_array($pldata)): foreach($pldata as $key=>$vo): ?><li>
                                <a href="<?php echo U('Article/articledetails','','');?>/aid/<?php echo ($vo["fid"]); ?>">
                                    <span>
                                      <img alt="avatar" src="/Public/img/uploads/userimg/<?php echo ($vo["userimg"]); ?>" style="width: 29px;height: 29px;">
                                    </span>
                                    <?php echo ($vo["content"]); ?>
                                    <span class="small italic"><?php echo (date('Y-m-d H:i:s',$vo["time"])); ?></span>
                                </a>
                            </li><?php endforeach; endif; ?>               
                            <li>
                                <a href="<?php echo U('Admin/Article/articlelist');?>">日记管理</a>
                            </li>
                        </ul>
                    </li>
                    <!-- notification dropdown end -->
                </ul>
                <!--  notification end -->
            </div>
            <div class="top-nav ">
                <!--search & user info start-->
                <ul class="nav pull-right top-menu">
                    <!-- user login dropdown start-->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <img alt="" src="/Public/img/uploads/admin/<?php echo ($_SESSION['adminimg']); ?>" style="width: 20px;height: 25px;">
                            <span class="username"><?php echo ($_SESSION['adminname']); ?></span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                            <li><a href="<?php echo U('Admin/Image/imglist');?>"><i class=" icon-suitcase"></i>相册</a></li>
                            <li><a data-toggle="modal" data-target=".bs-example-modal-sm"><i class="icon-cog"></i> 密码</a></li>
                            <li><a href="<?php echo U('Admin/Message/lst');?>"><i class="icon-bell-alt"></i>留言</a></li>
                            <li><a href="<?php echo U('Admin/Login/loginout');?>"><i class="icon-key"></i>退出</a></li>
                        </ul>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!--search & user info end-->
            </div>
        </header>
      <!--header end-->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu">
                  <li class="<?php echo ($color_index); ?>">
                      <a class="" href="<?php echo U('Admin/Index/index');?>">
                          <i class="icon-dashboard"></i>
                          <span>首页</span>
                      </a>
                  </li>
                  <li class="sub-menu <?php echo ($color_article); ?>">
                      <a href="javascript:;" class="">
                          <i class="icon-book"></i>
                          <span>文章管理</span>
                          <span class="arrow"></span>
                      </a>
                      <ul class="sub">
                          <li class="<?php echo ($color_articletype); ?>"><a class="" href="<?php echo U('Admin/Article/articletype');?>">日记分类</a></li>
                          <li class="<?php echo ($color_articlelist); ?>"><a class="" href="<?php echo U('Admin/Article/articlelist');?>">日记管理</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu <?php echo ($color_user); ?>">
                      <a href="javascript:;" class="">
                          <i class="icon-group"></i>
                          <span>用户管理</span>
                          <span class="arrow"></span>
                      </a>
                      <ul class="sub">
                          <li class="<?php echo ($color_users); ?>"><a class="" href="<?php echo U('Admin/User/user');?>">新增用户</a></li>
                          <li class="<?php echo ($color_lists); ?>"><a class="" href="<?php echo U('Admin/User/lists');?>">用户列表</a></li>
                          <li class="<?php echo ($color_group); ?>"><a class="" href="<?php echo U('Admin/User/group');?>">用户组</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu <?php echo ($color_image); ?>">
                      <a href="javascript:;" class="">
                          <i class="icon-tasks"></i>
                          <span>图片管理</span>
                          <span class="arrow"></span>
                      </a>
                      <ul class="sub">
                          <li class="<?php echo ($color_imglist); ?>"><a class="" href="<?php echo U('Admin/Image/imglist');?>">图片管理</a></li>
                          <li class="<?php echo ($color_typelist); ?>"><a class="" href="<?php echo U('Admin/Image/typelist');?>">分类管理</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu  <?php echo ($color_video); ?>">
                      <a href="javascript:;" class="">
                          <i class="icon-th"></i>
                          <span>视频管理</span>
                          <span class="arrow"></span>
                      </a>
                      <ul class="sub">
                          <li class="<?php echo ($color_audiolist); ?>"><a class="" href="<?php echo U('Admin/Audio/audiolist');?>">视频管理</a></li>
                          <li class="<?php echo ($color_typelists); ?>"><a class="" href="<?php echo U('Admin/Audio/typelist');?>">分类管理</a></li>
                      </ul>
                  </li>
                  <li class="<?php echo ($color_message); ?>">
                      <a class="" href="<?php echo U('Admin/Message/lst');?>">
                          <i class="icon-envelope"></i>
                          <span>留言管理</span>
                          <span id="messcount" class="label label-danger pull-right mail-info"><?php echo ($datacount); ?></span>
                      </a>
                  </li>
                  <li class="sub-menu <?php echo ($color_setting); ?>">
                      <a href="javascript:;" class="">
                          <i class="icon-glass"></i>
                          <span>系统设置</span>
                          <span class="arrow"></span>
                      </a>
                      <ul class="sub">
                          <li class="<?php echo ($color_lunbo); ?>"><a class="" href="<?php echo U('Admin/Setting/lunbo');?>">轮播设置</a></li>
                          <li class="<?php echo ($color_sms); ?>"><a class="" href="<?php echo U('Admin/Setting/sms');?>">短信配置</a></li>
                          <li class="<?php echo ($color_settinglst); ?>"><a class="" href="<?php echo U('Admin/Setting/lst');?>">标题设置</a></li>
                          <li class="<?php echo ($color_indexlst); ?>"><a class="" href="<?php echo U('Admin/Setting/indexlst');?>">底部设置</a></li>
                          <li class="<?php echo ($color_operation); ?>"><a class="" href="<?php echo U('Admin/Setting/operation');?>">访问统计</a></li>
                      </ul>
                  </li>
                  <li>
                      <a class="" href="<?php echo U('Admin/Login/loginout');?>">
                          <i class="icon-user"></i>
                          <span>用户退出</span>
                      </a>
                  </li>
              </ul>
  <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <!-- page start-->
              <div class="row">
              <!--普通用户添加-->
                  <div class="col-lg-6">
                      <section class="panel">
                          <header class="panel-heading">
                              后台管理者添加
                          </header>
                          <div class="panel-body">
                              <form role="form">
                                  <div class="form-group">
                                      <label for="exampleInputEmail1">用户名</label>
                                      <input type="text" class="form-control" id="adminname" placeholder="用户名" name="adminname">
                                  </div>
                                  <div class="form-group">
                                      <label for="exampleInputPassword1">密码</label>
                                      <input type="password" class="form-control" id="adminpwd" placeholder="密码" name="adminpwd">
                                  </div>
                                  <div class="form-group">
                                      <label for="exampleInputPassword1">重复密码</label>
                                      <input type="password" class="form-control" id="adminpwds" placeholder="密码" name="adminpwds">
                                  </div>
                                  <div class="form-group">
                                      <label for="">联系方式</label>
                                      <input type="text" class="form-control" id="adminphone" placeholder="手机号码" name="adminphone">
                                  </div>
                                  <button type="button" class="btn btn-info" onClick="addadmin()">添加</button>
                              </form>
                          </div>
                      </section>
                  </div>
                <!--普通用户添加-->
                  <div class="col-lg-6">
                      <section class="panel">
                          <header class="panel-heading">
                              普通用户添加
                          </header>
                          <div class="panel-body">
                              <form class="form-horizontal" role="form">
                                  <div class="form-group">
                                      <label for="inputEmail1" class="col-lg-2 control-label">用户名</label>
                                      <div class="col-lg-10">
                                          <input type="text" class="form-control" id="username" placeholder="用户名" name="username">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label for="inputPassword1" class="col-lg-2 control-label">密码</label>
                                      <div class="col-lg-10">
                                          <input type="password" class="form-control" id="userpwd" placeholder="密码" name="userpwd">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label for="inputPassword1" class="col-lg-2 control-label">重复密码</label>
                                      <div class="col-lg-10">
                                          <input type="password" class="form-control" id="userpwds" placeholder="重复密码" name="userpwds">
                                      </div>
                                  </div>
                                  <!---->
                                  <div class="form-group">
                                      <label class="control-label col-lg-2" for="inputSuccess">用户组</label>
                                      <div class="col-lg-10">
                                          <select class="form-control m-bot15" id="groupid" name="groupid">
                                            <?php if(is_array($usergroup)): $i = 0; $__LIST__ = $usergroup;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                          </select>
                                      </div>
                                  </div>
                                  <!---->
                                  <div class="form-group">
                                      <div class="col-lg-offset-2 col-lg-10">
                                          <button type="button" class="btn btn-danger" onClick="adduser()">添加</button>
                                      </div>
                                  </div>
                              </form>
                          </div>
                      </section> 
            </div>
           <!---普通用户添加 -->
              </div>
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="/Public/admin/js/jquery.js"></script>
    <script src="/Public/admin/js/bootstrap.min.js"></script>
    <script src="/Public/admin/js/jquery.scrollTo.min.js"></script>
    <script src="/Public/admin/js/jquery.nicescroll.js" type="text/javascript"></script>

    <script src="/Public/admin/js/jquery-ui-1.9.2.custom.min.js"></script>

    <!--custom switch-->
    <script src="/Public/admin/js/bootstrap-switch.js"></script>
    <!--custom tagsinput-->
    <script src="/Public/admin/js/jquery.tagsinput.js"></script>
    <!--custom checkbox & radio-->
    <script type="text/javascript" src="/Public/admin/js/ga.js"></script>

    <script type="text/javascript" src="/Public/admin/assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
    <script type="text/javascript" src="/Public/admin/assets/bootstrap-daterangepicker/date.js"></script>
    <script type="text/javascript" src="/Public/admin/assets/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script type="text/javascript" src="/Public/admin/assets/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
    <script type="text/javascript" src="/Public/admin/assets/ckeditor/ckeditor.js"></script>


  <!--common script for all pages-->
    <script src="/Public/admin/js/common-scripts.js"></script>

  <!--script for this page-->
  <script src="/Public/admin/js/form-component.js"></script>
  <!--弹框样式-->
  <link rel="stylesheet" type="text/css" href="/Public/layer/skin/layer.css">
  <script src="/Public/layer/layer.js"></script>
  <!--弹框样式-->
  <!-- 密码修改 -->
<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
       <!--  -->
      <section class="panel">
        <header class="panel-heading">
                              密码修改
        </header>
        <div class="panel-body">
          <form class="form-horizontal" role="form">
            <div class="form-group">
              <label for="inputEmail1" class="col-lg-2 control-label">密码</label>
              <div class="col-lg-10">
               <input type="password" class="form-control" id="pwd" name="pwd" placeholder="密码">
              </div>
            </div>
            <div class="form-group">
              <label for="inputPassword1" class="col-lg-2 control-label">重复密码</label>
              <div class="col-lg-10">
                <input type="password" class="form-control" id="pwds" name="pwds" placeholder="重复密码">
              </div>
            </div>
            <div class="form-group">
              <div class="col-lg-offset-2 col-lg-10">
                <button type="button" class="btn btn-danger" onclick="editpwd()">修改</button>
              </div>
            </div>
          </form>
        </div>
      </section>
       <!--  -->
    </div>
  </div>
</div>
<script type="text/javascript">
    function editpwd(){
      var pwd=$('#pwd').val();
      var pwds=$('#pwds').val();
      var ajaxeditpwdUrl='<?php echo U("Index/editpwd");?>'; 
      if((pwd=='')||(pwds=='')){
          layer.msg('密码不允许为空');
      }
      if((pwd!='')&&(pwds!='')){
          if(pwd!=pwds){
            layer.msg('两次密码不一致');
          }else{
        /*ajax提交*/
        $.ajax({
      //提交数据的类型 POST GET
        type: "POST",
      //提交的网址
        url: ajaxeditpwdUrl,
      //提交的数据
        data: {pwd:pwd},
      //返回数据的格式
        datatype: "json",
      //成功返回之后调用的函数
        success: function (data) {
      ////根据ajax返回参数判断验证码发送情况
        if(data['status']=="1"){
            layer.msg('修改成功!'); 
            window.location.href="<?php echo U('/Admin/Login/login');?>";
        }else{
            layer.msg('没有修改！');   
        }
      ////根据ajax返回参数判断验证码发送情况
        }
     });
        /*ajax提交*/ 
          }
      }
    }
</script>
<!-- 密码修改 -->
  <!-- 管理员添加  -->
  <script type="text/javascript">
    function addadmin(){
		var adminname=$('#adminname').val();
		var adminpwd=$('#adminpwd').val();
		var adminpwds=$('#adminpwds').val();
    var adminphone=$('#adminphone').val();
		var ajaxadminUrl='<?php echo U("User/addadmin");?>'; 
		if(adminname==''){
			layer.msg('用户名不允许为空');
			return false;
		}
		if(adminpwd==''){
			layer.msg('密码不允许为空');
			return false;
		}
		if(adminpwds==''){
			layer.msg('重复密码不允许为空');
			return false;
		}
		if((adminpwd!='')&&(adminpwds!='')){
			if(adminpwd!=adminpwds){
				layer.msg('两次密码不相同');
			    return false;
			}
		}
    if(adminphone==''){
      layer.msg('手机号码不允许为空');
      return false;
    }else{
      var reg=/^(13[0-9]|15[012356789]|17[678]|18[0-9]|14[57])[0-9]{8}$/;
      isok= reg.test(adminphone);
      if (!isok) {
        layer.msg('请输入正确的手机号!');        
        return false;
      }
    }
    // <!-- ajax提交 -->
	    $.ajax({
      //提交数据的类型 POST GET
        type: "POST",
      //提交的网址
        url: ajaxadminUrl,
      //提交的数据
        data: {adminname: adminname,adminpwd:adminpwd,adminphone:adminphone},
      //返回数据的格式
        datatype: "json",
      //成功返回之后调用的函数
        success: function (data) {
      ////根据ajax返回参数判断验证码发送情况
        if(data['status']=="1"){
            layer.msg('添加成功!'); 
			window.location.reload();
        }else if(data['status']=="-1"){
            layer.msg('已存在该用户名!');           
        }else if(data['status']=="-3"){
            layer.msg('已存在该手机号!');           
        }else{
            layer.msg('未知错误!');   
        }
      ////根据ajax返回参数判断验证码发送情况
        }
     });
	// <!--ajax提交-->
	}
  </script>
  <!-- 管理员添加   -->
  <!-- 普通用户添加-->
  <script type="text/javascript">
      function adduser(){
		var username=$('#username').val();
		var userpwd=$('#userpwd').val();
		var userpwds=$('#userpwds').val();
		var groupid=$('#groupid').val();
		var ajaxuserUrl='<?php echo U("User/adduser");?>';
		if(username==''){
			layer.msg('用户名不允许为空');
			return false;
		}
		if(userpwd==''){
			layer.msg('密码不允许为空');
			return false;
		}
		if(userpwds==''){
			layer.msg('重复密码不允许为空');
			return false;
		}
		if((userpwd!='')&&(userpwds!='')){
			if(userpwd!=userpwds){
				layer.msg('两次密码不相同');
			    return false;
			}
		}
		<!--ajax提交-->
	    $.ajax({
      //提交数据的类型 POST GET
        type: "POST",
      //提交的网址
        url: ajaxuserUrl,
      //提交的数据
        data: {username: username,userpwd:userpwd,groupid:groupid},
      //返回数据的格式
        datatype: "json",
      //成功返回之后调用的函数
        success: function (data) {
      ////根据ajax返回参数判断验证码发送情况
        if(data['status']=="1"){
            layer.msg('添加成功!'); 
			window.location.reload();
        }else if(data['status']=="-1"){
            layer.msg('已存在该用户名!');           
        }else{
            layer.msg('未知错误!');   
        }
      ////根据ajax返回参数判断验证码发送情况
        }
     });
	<!--ajax提交-->
	}
  </script>
  <!-- 普通用户添加-->
  </body>
</html>