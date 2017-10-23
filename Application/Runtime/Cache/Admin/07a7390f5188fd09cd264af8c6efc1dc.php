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
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                           <!-- 查询记录-->
                               <div class="panel-body">
                                 <form class="form-inline" role="form" action="http://www.dinghongzx.cn/Admin/User/lists" method="POST">
                                     <div class="form-group">
                                         <input type="text" class="form-control" id="title" name="title" placeholder="用户名">
                                     </div>
                                     <div class="form-group">
                                         <input type="text" class="form-control form-date" placeholder="开始时间" id="query_start_time"  name='query_start_time' value="<?php echo ($query_start_time); ?>" >
                                     </div>
                                      <div class="form-group">
                                          <input type="text" class="form-control form-date" placeholder="结束时间" id="query_end_time"  name='query_end_time' value="<?php echo ($query_end_time); ?>">
                                      </div>
                                     <!-- 状态 -->
                                     <div class="form-group">
                                         <select size="1"  aria-controls="sample_1" class="form-control" id="status" name="status">
                                             <option value="2">全部
                                             </option>
                                             <option value="1">发言
                                             </option>
                                             <option value="0">禁言
                                             </option>
                                         </select>
                                     </div>
                                      <button type="submit" class="btn btn-success">查询</button>
                                      <button type="button" class="btn btn-info" onClick="window.location.href='<?php echo U('User/adminlists');?>'"><i class="icon-refresh"></i>管理员</button>
                                  </form>
                               </div>
                           <!-- 查询记录 -->
                          </header>
                          <table class="table table-striped border-top" id="sample_1">
                          <thead>
                          <tr>
                              <th class="hidden-phone">序号</th>
                              <th>用户名</th>
                              <th class="hidden-phone">手机号</th>
                              <th class="hidden-phone">状态</th>
                              <th class="hidden-phone">用户组</th>
                              <th class="hidden-phone">操作</th>
                          </tr>
                          </thead>
                          <tbody>
                    <?php if(is_array($result)): $key = 0; $__LIST__ = $result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?><tr class="odd gradeX">
                              <td><?php echo ($key); ?></td>
                              <td><?php echo ($vo["username"]); ?></td>
                              <td class="hidden-phone"><?php echo ($vo["phone"]); ?></td>
                              <td class="hidden-phone">
                                  <?php if($vo["status"] == 1): ?>发言
                                  <?php else: ?>
                                      禁言<?php endif; ?>
                              </td>
                              <td class="center hidden-phone"><?php echo ($vo["groupname"]); ?></td>
                              <td class="hidden-phone">
                                <?php if($vo["status"] == 1): ?><span class="label label-default" style="cursor:pointer;" onClick="window.location.href='<?php echo U('User/jy','','');?>/id/<?php echo ($vo["id"]); ?>'">禁言</span>
                                <?php else: ?>
                                   <span class="label label-primary" style="cursor:pointer;" onClick="window.location.href='<?php echo U('User/fy','','');?>/id/<?php echo ($vo["id"]); ?>'">发言</span><?php endif; ?>
                                   <span class="label label-info" style="cursor:pointer;" onClick="window.location.href='<?php echo U('User/update','','');?>/id/<?php echo ($vo["id"]); ?>'">修改</span>
                                   <span class="label label-danger" style="cursor:pointer;" onClick="window.location.href='<?php echo U('User/deleteuser','','');?>/id/<?php echo ($vo["id"]); ?>'">删除</span>
                              </td>
                          </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                          </tbody>
                          </table>
                          <div style="text-align:center;padding-top:30px;">
                            <?php echo ($page); ?>
                          </div>
                      </section>
                  </div>
              </div>
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="/person/Public/admin/js/jquery.js"></script>
    <script src="/person/Public/admin/js/bootstrap.min.js"></script>
    <script src="/person/Public/admin/js/jquery.scrollTo.min.js"></script>
    <script src="/person/Public/admin/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script type="text/javascript" src="/person/Public/adminassets/data-tables/jquery.dataTables.js"></script>
    <script type="text/javascript" src="/person/Public/adminassets/data-tables/DT_bootstrap.js"></script>


    <!--common script for all pages-->
    <script src="/person/Public/admin/js/common-scripts.js"></script>

    <!--script for this page only-->
    <script src="/person/Public/admin/js/dynamic-table.js"></script>
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
<!-- 日期选择 -->
<!-- lib -->
<link rel="stylesheet" type="text/css" href="/person/Public/zui/lib/datetimepicker/datetimepicker.min.css">
<script type="text/javascript" src="/person/Public/zui/lib/datetimepicker/datetimepicker.min.js"></script>

<script type="text/javascript">
    $(".form-date").datetimepicker(
        {
            language:  "zh-CN",
            weekStart: 1,
            todayBtn:  1,
            autoclose: 1,
            todayHighlight: 1,
            startView: 2,
            minView: 2,
            forceParse: 0,
            format: "yyyy-mm-dd"
        });
</script>
<!-- 日期选择-->
  </body>
</html>