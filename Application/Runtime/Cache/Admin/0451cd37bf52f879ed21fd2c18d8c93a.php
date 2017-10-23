<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="洪壮贤">
    <meta name="keyword" content="洪壮贤">
    <link rel="shortcut icon" href="/person/Public/admin/img/favicon.html">
    <title>后台管理</title>  
    <!-- Bootstrap core CSS -->
    <link href="/person/Public/admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="/person/Public/admin/css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="/person/Public/admin/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="/person/Public/admin/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
    <link rel="stylesheet" href="/person/Public/admin/css/owl.carousel.css" type="text/css">
    <!-- Custom styles for this template -->
    <link href="/person/Public/admin/css/style.css" rel="stylesheet">
    <link href="/person/Public/admin/css/style-responsive.css" rel="stylesheet" />
    <!-- 图标  -->
    <link rel="shortcut icon" href="/person/Public/home/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/person/Public/home/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/person/Public/home/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/person/Public/home/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="/person/Public/home/images/ico/apple-touch-icon-57-precomposed.png">
    <style type="text/css">
   .fontsize{  
    display: block;
    width:250px;
    overflow: hidden;
    white-space: nowrap;
    text-overflow: ellipsis;
   } 
   .usersize{  
    display: block;
    width:80px;
    overflow: hidden;
    white-space: nowrap;
    text-overflow: ellipsis;
   } 
  a{
    color:#797979;
   }
  a:hover, a:visited,a:link,a:active {
    color:#797979;
   }
    </style>
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
                        <span class="photo"><img alt="avatar" src="/person/Public/img/uploads/userimg/<?php echo ($vo["img"]); ?>"></span>
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
                                      <img alt="avatar" src="/person/Public/img/uploads/userimg/<?php echo ($vo["userimg"]); ?>" style="width: 29px;height: 29px;">
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
                            <img alt="" src="/person/Public/img/uploads/admin/<?php echo ($_SESSION['adminimg']); ?>" style="width: 20px;height: 25px;">
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
                  <li class="sub-menu <?php echo ($color_statistics); ?>">
                      <a href="javascript:;" class="">
                          <i class="glyphicon glyphicon-book"></i>
                          <span>统计记录</span>
                          <span class="arrow"></span>
                      </a>
                      <ul class="sub">
                          <li class="<?php echo ($color_operation); ?>"><a class="" href="<?php echo U('Admin/Statistics/operation');?>">访问统计</a></li>
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
              <!--mail inbox start-->
              <div class="mail-box">
                  <aside class="sm-side">
                      <div class="user-head">
                          <a href="javascript:;" class="inbox-avatar">
                              <img src="/person/Public/img/uploads/admin/<?php echo ($_SESSION['adminimg']); ?>" style="width: 65px;height: 60px;" alt="">
                          </a>
                          <div class="user-name">
                              <h5><?php echo ($_SESSION['adminname']); ?>
                              </h5>
                              <span><?php echo ($_SESSION['adminname']); ?>@xxqq.com
                              </span>
                          </div>
                          <a href="javascript:;" class="mail-dropdown pull-right">
                              <i class="icon-chevron-down"></i>
                          </a>
                      </div>
                      <div class="inbox-body">
                        <span class="btn btn-compose" data-toggle="modal" href="#myModal">
                              回复留言
                          </span> 
                          <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">回复留言</h4>
          </div>
          <div class="modal-body">
            <form class="form-horizontal" role="form">
              <div class="form-group">
                <label  class="col-lg-2 control-label">留言用户</label>
                <div class="col-lg-10">
                   <select class="form-control m-bot15" name="userid" id="userid"  onChange="getremess()">
                       <option value="">请选择</option>
                     <?php if(is_array($userdata)): $i = 0; $__LIST__ = $userdata;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["uid"]); ?>"><?php echo ($vo["username"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                   </select>
                </div>
              </div>
              <div class="form-group">
                <label  class="col-lg-2 control-label">最新留言</label>
                <div class="col-lg-10" id="message">
                  
                </div>
              </div>
              <div class="form-group">
                <label class="col-lg-2 control-label">回复留言</label>
                <div class="col-lg-10">
                  <textarea name="content" id="content" ></textarea>
                </div>
              </div>
              <div class="form-group">
                <div class="col-lg-offset-2 col-lg-10">
                    <button type="button" class="btn btn-send" onclick="dopostmessage()">回复</button>
                </div>
              </div>
            </form>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
              </div>
              <!-- 回复留言结束 -->
                      <ul class="inbox-nav inbox-divider">
                          <li>
                              <a href="<?php echo U('Message/lst','','');?>/status/2"><i class="icon-inbox"></i>未回复留言<span class="label label-danger pull-right"><?php echo ($norecount); ?></span></a>

                          </li>
                          <li>
                              <a href="<?php echo U('Message/lst','','');?>"><i class="icon-envelope-alt"></i>留言箱</a>
                          </li>
                          <li>
                              <a href="<?php echo U('Message/lst','','');?>/status/1"><i class=" icon-external-link"></i>已回复留言 </a>
                          </li>
                          <li>
                              <a href="<?php echo U('Message/lst','','');?>/garbage/1"><i class=" icon-trash"></i>垃圾箱</a>
                          </li>
                      </ul>
                      <ul class="nav nav-pills nav-stacked labels-info inbox-divider">
                          <li> <h4>用户组</h4> </li>
                    <?php if(is_array($usergroup)): $key = 0; $__LIST__ = $usergroup;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key; if($key == 1): ?><li><a href="<?php echo U('Message/lst','','');?>/groupid/<?php echo ($vo["id"]); ?>">
                <i class=" icon-sign-blank text-danger"></i> <?php echo ($vo["name"]); ?></a> </li>      
                      <?php elseif($key == 2): ?>
                <li> <a href="<?php echo U('Message/lst','','');?>/groupid/<?php echo ($vo["id"]); ?>"> <i class=" icon-sign-blank text-success"></i><?php echo ($vo["name"]); ?></a> </li>
                      <?php elseif($key == 3): ?>
                <li> <a href="<?php echo U('Message/lst','','');?>/groupid/<?php echo ($vo["id"]); ?>"> <i class=" icon-sign-blank text-info "></i><?php echo ($vo["name"]); ?></a></li>
                      <?php elseif($key == 4): ?>
                <li> <a href="<?php echo U('Message/lst','','');?>/groupid/<?php echo ($vo["id"]); ?>"> <i class=" icon-sign-blank text-info "></i><?php echo ($vo["name"]); ?></a></li>
                      <?php elseif($key == 5): ?>
                <li> <a href="<?php echo U('Message/lst','','');?>/groupid/<?php echo ($vo["id"]); ?>"> <i class=" icon-sign-blank text-warning "></i><?php echo ($vo["name"]); ?></a></li>
                      <?php else: ?>
                <li> <a href="<?php echo U('Message/lst','','');?>/groupid/<?php echo ($vo["id"]); ?>"> <i class=" icon-sign-blank text-primary "></i><?php echo ($vo["name"]); ?></a>
                          </li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                      </ul>
                  </aside>
                  <aside class="lg-side">
                      <div class="inbox-head">
                          <h3>留言箱</h3>
                          <form class="pull-right position" action="http://www.dinghongzx.cn/Admin/Message/lst" method="post">
                              <div class="input-append">
                                  <input type="text"  placeholder="搜索留言" class="sr-input" id="meTitle" name="meTitle" value="<?php echo I('get.meTitle');?>">
                                  <button type="submit" class="btn sr-btn"><i class="icon-search"></i></button>
                              </div>
                          </form>
                      </div>
                      <div class="inbox-body">
                          <table class="table table-inbox table-hover">
                            <tbody>
                              <tr class="" style="cursor:default !important;">
                                  <td class="inbox-small-cells">
                                     序号<?php echo ($isgroup); ?>
                                  </td>
                                  <td class="inbox-small-cells">状态</td>
                                  <td class="view-message dont-show">留言者</td>
                                  <td class="view-message view-message ">
                                    <span class="fontsize">
                                    留言内容
                                    </span>
                                    </td>
                                  <td class="view-message inbox-small-cells"></td>
                                  <td class="view-message inbox-small-cells">留言时间</td>
                                  <td class="view-message inbox-small-cells">操作</td>
                              </tr>
        
                          <?php if(is_array($data)): $key = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?><tr class="">
                                <td class="inbox-small-cells">
                                <a href="<?php echo U('Admin/Message/remess','','');?>/id/<?php echo ($vo["id"]); ?>"><?php echo ($key); ?></a>
                                </td>
                                <td class="inbox-small-cells">
                            <?php if($vo["status"] == 2): ?><a href="<?php echo U('Admin/Message/remess','','');?>/id/<?php echo ($vo["id"]); ?>">
                              <i class="icon-star"></i>
                              </a>
                            <?php else: ?>
                              <a href="<?php echo U('Admin/Message/remess','','');?>/id/<?php echo ($vo["id"]); ?>">
                              <i class="icon-star inbox-started"></i>
                              </a><?php endif; ?>
                                </td>
                                <td class="view-message dont-show">
                                 <a href="<?php echo U('Admin/Message/remess','','');?>/id/<?php echo ($vo["id"]); ?>">
                                 <span class="usersize">
                                 <?php echo ($vo["usersname"]); ?>
                                 </span>
                                 </a>
                              </a>
                                </td>
                                <td class="view-message">
                                  <a href="<?php echo U('Admin/Message/remess','','');?>/id/<?php echo ($vo["id"]); ?>">
                                  <span class="fontsize">
                                    <?php echo ($vo["content"]); ?>
                                  </span>
                                  </a>
                                </td>
                                <td class="view-message inbox-small-cells"></td>
                                <td class="view-message inbox-small-cells">
                                <a href="<?php echo U('Admin/Message/remess','','');?>/id/<?php echo ($vo["id"]); ?>">
                                <?php echo ($vo["time"]); ?>
                                </a>
                                </td>
                                <td class="view-message inbox-small-cells">
                                    <?php if($vo["biaozhi"] == 1): ?><span class="label label-default" style="cursor:pointer;" onClick="window.location.href='<?php echo U('Message/deleteMessage','','');?>/id/<?php echo ($vo["id"]); ?>'">删除</span>
                                    <?php else: ?>
                                        <span class="label label-primary" style="cursor:pointer;" onClick="window.location.href='<?php echo U('Message/recoveryMessage','','');?>/id/<?php echo ($vo["id"]); ?>'">恢复</span>
                                        <span class="label label-danger" style="cursor:pointer;" onClick="window.location.href='<?php echo U('Message/removeMessage','','');?>/id/<?php echo ($vo["id"]); ?>'">清理</span><?php endif; ?>
                                </td>
                              </tr><?php endforeach; endif; else: echo "" ;endif; ?>

                          </tbody>
                          </table>
                          <div style="text-align: center;">
                             <?php echo ($page); ?>
                          </div>
                      </div>
                  </aside>
              </div>
              <!--mail inbox end-->
          </section>
      </section>
      <!--main content end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="/person/Public/admin/js/jquery.js"></script>
    <script src="/person/Public/admin/js/bootstrap.min.js"></script>
    <script src="/person/Public/admin/js/jquery.scrollTo.min.js"></script>
    <script src="/person/Public/admin/js/jquery.nicescroll.js" type="text/javascript"></script>

  <!-- BEGIN:File Upload Plugin JS files-->
  <script src="/person/Public/admin/assets/jquery-file-upload/js/vendor/jquery.ui.widget.js"></script>
  <!-- The Templates plugin is included to render the upload/download listings -->
  <script src="/person/Public/admin/assets/jquery-file-upload/js/vendor/tmpl.min.js"></script>
  <!-- The Load Image plugin is included for the preview images and image resizing functionality -->
  <script src="/person/Public/admin/assets/jquery-file-upload/js/vendor/load-image.min.js"></script>
  <!-- The Canvas to Blob plugin is included for image resizing functionality -->
  <script src="/person/Public/admin/assets/jquery-file-upload/js/vendor/canvas-to-blob.min.js"></script>
  <!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
  <script src="/person/Public/admin/assets/jquery-file-upload/js/jquery.iframe-transport.js"></script>
  <!-- The basic File Upload plugin -->
  <script src="/person/Public/admin/assets/jquery-file-upload/js/jquery.fileupload.js"></script>
  <!-- The File Upload file processing plugin -->
  <script src="/person/Public/admin/assets/jquery-file-upload/js/jquery.fileupload-fp.js"></script>
  <!-- The File Upload user interface plugin -->
  <script src="/person/Public/admin/assets/jquery-file-upload/js/jquery.fileupload-ui.js"></script>


    <!--common script for all pages-->
    <script src="/person/Public/admin/js/common-scripts.js"></script>
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
<!--弹框样式-->
  <link rel="stylesheet" type="text/css" href="/person/Public/layer/skin/layer.css">
  <script src="/person/Public/layer/layer.js"></script>
<!--弹框样式-->
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
  function  getremess(){
	  var userid=$('#userid').val();
	  var ajaxremesspwdUrl='<?php echo U("Message/remessage");?>'; 
	  ////
	  $.ajax({
      //提交数据的类型 POST GET
        type: "POST",
      //提交的网址
        url: ajaxremesspwdUrl,
      //提交的数据
        data: {userid:userid},
      //返回数据的格式
        datatype: "json",
      //成功返回之后调用的函数
        success: function (data) {
      ////根据ajax返回参数判断验证码发送情况
        if(data['status']=="ok"){
            ///
			$('#message').html(data['msg']);
			///
        }else{
            layer.msg('没有修改！');   
        }
      ////根据ajax返回参数判断验证码发送情况
        }
     });  
	  ////
  }
</script>
<!-- 留言 -->
<!-- 配置文件 -->
<script type="text/javascript" src="/person/Public/admin/ueditor/ueditor.config.js"></script>
<!-- 编辑器源码文件 -->
<script type="text/javascript" src="/person/Public/admin/ueditor/ueditor.all.js"></script>
<script type="text/javascript">
      $(function(){
        var ue = UE.getEditor('content',{
            elementPathEnabled :false,
            autoHeightEnabled: false,
            "initialFrameHeight" : 150,
            toolbars: [
    ['fullscreen','undo', 'redo','bold', 'italic', 'underline', 'fontborder', 'cleardoc','simpleupload','insertimage']
],
        });
      });
</script>
<!-- 配置文件 -->
<script type="text/javascript">
     function dopostmessage(){
       var messid=$('#messid').val();
       var content=UE.getEditor('content').getContent();
       var ajaxmessageUrl='<?php echo U("Message/dopostmessage");?>'; 
        if(!messid){
           layer.msg('请选择留言用户');
           return false;
        }
        if(content==''){
           layer.msg('亲，请说点什么吧！');
           return false;
        }
      /**/
      /*ajax提交*/
      $.ajax({
      //提交数据的类型 POST GET
        type: "POST",
      //提交的网址
        url: ajaxmessageUrl,
      //提交的数据
        data: {content: content,messid:messid},
      //返回数据的格式
        datatype: "json",
      //成功返回之后调用的函数
        success: function (data) {
      ////根据ajax返回参数判断验证码发送情况
        if(data['status']=="1"){
            layer.msg('回复成功!'); 
            window.location.reload();
        }else{
            layer.msg('回复失败!');   
        }
      ////根据ajax返回参数判断验证码发送情况
        }
      });
      /*ajax提交*/  
      /**/
     }
</script>
  </body>
</html>