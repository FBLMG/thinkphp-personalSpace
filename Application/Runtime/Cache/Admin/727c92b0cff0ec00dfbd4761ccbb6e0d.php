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
                  <aside class="col-lg-3">
                <!--图片总类-->
                      <h4 class="drg-event-title">相册编辑</h4>
                      <div id='external-events'>
                      <!-- 相册修改 -->
  <section class="panel">
      <header class="panel-heading">
           相册基本信息                 
      </header>
      <div class="panel-body">
  <?php if(is_array($alumbdata)): $i = 0; $__LIST__ = $alumbdata;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ab): $mod = ($i % 2 );++$i;?><form role="form">
          <div class="form-group">
            <label for="exampleInputEmail1">封面</label>
        <!-- 封面 -->
        <div class="ibox-content">
          <div class="row">
              <?php if($ab["imgwidth"] == 1): ?><img src="/Public/img/uploads/alumb/<?php echo ($ab["img"]); ?>" alt="点击修改图片" class="img-thumbnail" style="width:70px;height:93px;margin-left:18px;">
              <?php elseif($ab["imgwidth"] == 2): ?> 
                <img src="/Public/img/uploads/alumb/<?php echo ($ab["img"]); ?>" alt="点击修改图片" class="img-thumbnail" style="width:93px;height:70px;margin-left:18px;">
              <?php else: ?>
                <img src="/Public/img/uploads/alumb/<?php echo ($ab["img"]); ?>" alt="点击修改图片" class="img-thumbnail" style="width:93px;height:93px;margin-left:18px;"><?php endif; ?>
  
          </div>
        </div>
        <!-- 封面 -->
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">相册名</label>
            <input type="text" class="form-control" id="alubmname" name="alubmname" placeholder="相册名" value="<?php echo ($ab["name"]); ?>">
            <input type="hidden" class="form-control" id="alubmid" name="alubmid"  value="<?php echo ($ab["id"]); ?>">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">相册分类</label>
            <select class="form-control m-bot15" id="alumbtypes" name="alumbtypes">
            <?php if(is_array($alumbType)): $i = 0; $__LIST__ = $alumbType;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vos): $mod = ($i % 2 );++$i; if($ab['tid'] == $vos['id']){ $sel="selected='selected'"; }else{ $sel=""; } ?>
              <option <?php echo ($sel); ?> value="<?php echo ($vos["id"]); ?>"><?php echo ($vos["type"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
            </select>    
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">相册状态</label><br/>
    <?php if($ab["status"] == 1): ?><select class="form-control m-bot15" id="status" name="status">
              <option  value="1">公开</option>
              <option  value="0">保密</option>
            </select>
    <?php else: ?> 
            <select class="form-control m-bot15" id="status" name="status">
              <option  value="0">保密</option>
              <option  value="1">公开</option>   
            </select><?php endif; ?>
          </div>
          <button type="button" class="btn btn-info" onclick="editalumb()">修改</button>
          <button type="button" class="btn btn-danger" onclick="deletealumb()">删除</button>
          <button type="button" class="btn btn-success" data-toggle="modal" data-target="#editalumb">修改封面</button>
          <button type="button" class="btn btn-warning" onClick="window.location.href='<?php echo U('Image/imglist','','');?>/mid/<?php echo ($ab["tid"]); ?>'">返回
          </button>
        </form><?php endforeach; endif; else: echo "" ;endif; ?>
      </div>
  </section>                    
                      <!-- 相册修改 -->
                      </div>
                 <!--图片总类-->
                  </aside>
                  <aside class="col-lg-9">
                      <section class="panel">
                          <div class="panel-body">
                              <div class="panel-body">
                                 <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">上传图片</button>
                              </div>
                              <div id="calendar" class="has-toolbar"></div>
                             <!--相册-->
                      <!-- **************-->
  <div class="bs-example" data-example-id="thumbnails-with-custom-content">
    <div class="row">
    <?php if(is_array($data)): foreach($data as $key=>$vo): ?><!-- 竖屏  -->
    <?php if($vo["imgwidth"] == 1): ?><div class="col-sm-6 col-md-4" style="width: 245px;height: 310px;margin-top:10px;">
        <div class="thumbnail" style="padding-left: 15px;">
          <a href="/Public/img/uploads/imgs/<?php echo ($vo["img"]); ?>">
          <img src="/Public/img/uploads/imgs/<?php echo ($vo["img"]); ?>" alt="" data-holder-rendered="true" style="height: 240px; width:180px; display: block;text-align: center;">
          </a>
          <div class="caption" style="padding-left:32px;">
            <p><a  class="btn btn-primary" role="button" onClick="window.location.href='<?php echo U('Image/update','','');?>/id/<?php echo ($vo["id"]); ?>'">修改</a> 
            <a onClick="window.location.href='<?php echo U('Image/deleteimg','','');?>/id/<?php echo ($vo["id"]); ?>'" class="btn btn-default" role="button">删除</a></p>
          </div>
        </div>
      </div>
    <?php elseif($vo["imgwidth"] == 2): ?>
    <!-- 横屏 -->
      <div class="col-sm-6 col-md-4" style="width: 310px;height: 310px;margin-top:10px;">
        <div class="thumbnail" style="padding-left: 15px;">
          <a href="/Public/img/uploads/imgs/<?php echo ($vo["img"]); ?>">
          <img src="/Public/img/uploads/imgs/<?php echo ($vo["img"]); ?>" alt="" data-holder-rendered="true" style="height: 180px; width:240px; display: block;text-align: center;">
          </a>
          <div class="caption" style="padding-left:64px;">
            <p><a  class="btn btn-primary" role="button" onClick="window.location.href='<?php echo U('Image/update','','');?>/id/<?php echo ($vo["id"]); ?>'">修改</a> 
            <a onClick="window.location.href='<?php echo U('Image/deleteimg','','');?>/id/<?php echo ($vo["id"]); ?>'" class="btn btn-default" role="button">删除</a></p>
          </div>
        </div>
      </div>
    <!--  -->
    <?php else: ?>
    <!-- 正方 -->
      <div class="col-sm-6 col-md-4" style="width: 245px;height: 310px;margin-top:10px;">
        <div class="thumbnail" style="padding-left: 15px;">
          <a href="/Public/img/uploads/imgs/<?php echo ($vo["img"]); ?>">
          <img src="/Public/img/uploads/imgs/<?php echo ($vo["img"]); ?>" alt="" data-holder-rendered="true" style="height: 180px; width:180px; display: block;text-align: center;">
          </a>
          <div class="caption" style="padding-left:32px;">
            <p><a  class="btn btn-primary" role="button" onClick="window.location.href='<?php echo U('Image/update','','');?>/id/<?php echo ($vo["id"]); ?>'">修改</a> 
            <a onClick="window.location.href='<?php echo U('Image/deleteimg','','');?>/id/<?php echo ($vo["id"]); ?>'" class="btn btn-default" role="button">删除</a></p>
          </div>
        </div>
      </div><?php endif; ?>
    <!-- --><?php endforeach; endif; ?>
      <!--  -->
    </div>
    <div style="text-align:center;padding-top:30px;">
       <?php echo ($page); ?>
    </div>
  </div>
              <!-- ************* -->
                             <!--相册-->
                          </div>
                      </section>
                  </aside>
              </div>
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
  <script src="/Public/admin/js/jquery.js"></script>

 <!-- <script src="/Public/admin/assets/fullcalendar/fullcalendar/fullcalendar.min.js"></script>  -->
  <script src="/Public/admin/js/bootstrap.min.js"></script>
  <script src="/Public/admin/js/jquery.scrollTo.min.js"></script>
  <script src="/Public/admin/js/jquery.nicescroll.js" type="text/javascript"></script>

    <!--common script for all pages-->
    <script src="/Public/admin/js/common-scripts.js"></script>

    <!--script for this page only-->
    <script src="/Public/admin/js/external-dragging-calendar.js"></script>
 <!---修改相册封面模态框-->
<div class="modal fade" id="editalumb" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">上传图片</h4>
      </div>
   <form role="form" action="<?php echo U('Image/postalubmimg');?>" enctype="multipart/form-data" method="post">
      <div class="modal-body">
        <!--内容区-->
            <div class="form-group">
               <input type="hidden" class="form-control" id="aid" name="aid" value="<?php echo ($aid); ?>">
            </div>
            <div class="form-group">
               <label for="exampleInputFile">图片地址</label>
               <input type="file" id="alumbimg" name="alumbimg"> 
            </div>
            <div class="form-group">
               <label for="exampleInputFile">图片形式(根据照片是竖屏还是横屏决定)</label>
               <select class="form-control m-bot15" id="imgwidth" name="imgwidth">
                  <option value="1">竖屏</option>
                  <option value="2">横屏</option>
                  <option value="3">正方</option>
               </select>
            </div>
        <!--内容区-->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
        <button type="submit" class="btn btn-primary">修改</button>
      </div>
   </form>
    </div>
  </div>
</div>
<!---修改相册封面模态框-->
 <!--新增相册模态框-->
 <!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">上传图片</h4>
      </div>
   <form role="form" action="<?php echo U('Image/addimg');?>" enctype="multipart/form-data" method="post">
      <div class="modal-body">
        <!--内容区-->
            <div class="form-group">
               <label for="exampleInputEmail1">描述</label>
               <input type="text" class="form-control" id="describe" name="describe" placeholder="描述">
               <input type="hidden" class="form-control" id="aid" name="aid" value="<?php echo ($aid); ?>">
            </div>
            <div class="form-group">
               <label for="exampleInputFile">图片地址</label>
               <input type="file" id="img" name="img"> 
            </div>
            <div class="form-group">
               <label for="exampleInputFile">图片形式(根据照片是竖屏还是横屏决定)</label>
               <select class="form-control m-bot15" id="imgwidth" name="imgwidth">
                  <option value="1">竖屏</option>
                  <option value="2">横屏</option>
                  <option value="3">正方</option>
               </select>
            </div>
        <!--内容区-->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
        <button type="submit" class="btn btn-primary">添加</button>
      </div>
   </form>
    </div>
  </div>
</div>
<!--新增相册模态框-->
<!-- 修改相册信息 -->
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
<script type="text/javascript">
//修改相册信息
    function editalumb(){
       var alubmid=$('#alubmid').val();
       var alubmname=$('#alubmname').val();
       var alubmstatus=$('#status').val();
       var alumbtypes=$('#alumbtypes').val();
       var ajaxalumbUrl='<?php echo U("Image/editalumb");?>'; 
       if(alubmname==''){
         layer.msg('请填写相册名称');
         window.location.reload();
       }
      // <!-- ajax提交 -->
      $.ajax({
      //提交数据的类型 POST GET
        type: "POST",
      //提交的网址
        url: ajaxalumbUrl,
      //提交的数据
        data: {alubmid: alubmid,alubmname:alubmname,alubmstatus:alubmstatus,alumbtypes:alumbtypes},
      //返回数据的格式
        datatype: "json",
      //成功返回之后调用的函数
        success: function (data) {
      ////根据ajax返回参数判断验证码发送情况
        if(data['status']=="1"){
            layer.msg('修改成功!'); 
            window.location.reload();
        }else{
            layer.msg('没有修改！');   
        }
      ////根据ajax返回参数判断验证码发送情况
        }
     });
  // <!-- ajax提交 -->
    }
//删除相册
  function deletealumb(){
    var alubmid=$('#alubmid').val();
    var ajaxalumbUrl='<?php echo U("Admin/Image/deletealumb");?>';
    // <!-- ajax提交 -->
      $.ajax({
      //提交数据的类型 POST GET
        type: "POST",
      //提交的网址
        url: ajaxalumbUrl,
      //提交的数据
        data: {alubmid: alubmid},
      //返回数据的格式
        datatype: "json",
      //成功返回之后调用的函数
        success: function (data) {
      ////根据ajax返回参数判断验证码发送情况
        if(data['status']=="1"){
            layer.msg('删除成功!'); 
            window.location.href="<?php echo U('Image/imglist');?>";
        }else{
            layer.msg('删除失败！');   
        }
      ////根据ajax返回参数判断验证码发送情况
        }
     });
  // <!-- ajax提交 --> 
  }
</script>
<!-- 修改相册信息 -->
  </body>
</html>