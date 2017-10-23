<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?php echo ($webTitle); ?></title>
    <!--
    <link href="http://apps.bdimg.com/libs/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
    -->
    <link href="/person/Public/home/css/bootstrap.min.css" rel="stylesheet">
    <link href="/person/Public/home/css/font-awesome.min.css" rel="stylesheet">
    <link href="/person/Public/home/css/animate.min.css" rel="stylesheet"> 
    <link href="/person/Public/home/css/lightbox.css" rel="stylesheet"> 
    <link href="/person/Public/home/css/main.css" rel="stylesheet">
    <link href="/person/Public/home/css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="/person/Public/home/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/person/Public/home/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/person/Public/home/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/person/Public/home/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="/person/Public/home/images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body oncontextmenu=self.event.returnValue=false onselectstart="return false">
    <header id="header">      
        <div class="container">
            <div class="row">
                <div class="col-sm-12 overflow">
                   <div class="social-icons pull-right">
                        <ul class="nav nav-pills">
                         <?php if($_SESSION['username'] != ''): ?><a href="<?php echo U('Home/User/lst');?>">
                            <img src="/person/Public/img/uploads/userimg/<?php echo ($_SESSION['userimg']); ?>" alt="..." class="img-circle" style="width:30px;height:30px;margin-left:15px;margin-botton:20px;">
                        </a>
                            <li><a href="<?php echo U('Login/doout');?>" style="font-size:10px;margin-top:5px;">退出</a></li>
                        <?php else: ?>
                            <li><a href="<?php echo U('Login/login');?>" style="font-size:10px;margin-top:5px;">登陆</a></li>
                            <li><a href="<?php echo U('Login/reg');?>" style="font-size:10px;margin-top:5px;">注册</a></li><?php endif; ?>
                        </ul>
                    </div> 
                </div>
             </div>
        </div>
        <div class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                        <h1><img src="/person/Public/home/images/logo.png" alt="logo"></h1>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="<?php echo ($topStatusOne); ?>"><a href="<?php echo U('Index/index');?>">首页</a></li>
                        <li class="dropdown <?php echo ($topStatustwo); ?>"><a href="">相册 <i class="fa fa-angle-down"></i></a>
                            <ul role="menu" class="sub-menu">
                              <?php if(is_array($imgtype)): $key = 0; $__LIST__ = $imgtype;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?><li><a href="<?php echo U('Image/lst','','');?>/id/<?php echo ($vo["id"]); ?>"><?php echo ($vo["type"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                            </ul>
                        </li>                    
                        <li class="dropdown <?php echo ($topStatusthree); ?>"><a href="">日记 <i class="fa fa-angle-down"></i></a>
                            <ul role="menu" class="sub-menu">
                              <?php if(is_array($articletype)): $key = 0; $__LIST__ = $articletype;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?><li><a href="<?php echo U('Article/lst','','');?>/type/<?php echo ($vo["id"]); ?>"><?php echo ($vo["type"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                            </ul>
                        </li>
                        <li class="dropdown <?php echo ($topStatusfour); ?>"><a href="portfolio.html">视频 <i class="fa fa-angle-down"></i></a>
                            <ul role="menu" class="sub-menu">
                              <?php if(is_array($viedotype)): $key = 0; $__LIST__ = $viedotype;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?><li><a href="<?php echo U('Video/lst','','');?>/id/<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                            </ul>
                        </li>                         
                        <li class="<?php echo ($topStatusfive); ?>"><a href="<?php echo U('Home/Message/lst');?>">留言</a></li>                    
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!--/#header-->


    <section id="page-breadcrumb">
        <div class="vertical-center sun">
             <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12">
                        <?php if(is_array($webinformation)): $i = 0; $__LIST__ = $webinformation;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($vo["type"] == videotype): ?><h1 class="title"><?php echo ($vo["title"]); ?></h1>
                            <p><?php echo ($vo["caption"]); ?></p><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </section>
    <!--/#page-breadcrumb-->

    <section id="projects">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-8">
                    <div class="row">
                        <ul class="portfolio-filter text-center">
                         <li><a class="btn btn-default <?php echo ($ops); ?>"  onClick="window.location.href='<?php echo U('Video/lst','','');?>/id/<?php echo ($vid); ?>'" data-filter="*">All</a></li>
                 <?php if(is_array($theme)): $i = 0; $__LIST__ = $theme;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a class="btn btn-default <?php echo ($vo["op"]); ?>" href="#" onClick="window.location.href='<?php echo U('Video/lst','','');?>/id/<?php echo ($vid); ?>/tid/<?php echo ($vo["id"]); ?>'"><?php echo ($vo["name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul><!--/#portfolio-filter-->
                        
                        <div class="portfolio-items">
                 <?php if(is_array($videodata)): $i = 0; $__LIST__ = $videodata;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($vo["open"] == '1' ): ?><div class="col-xs-6 col-sm-6 col-md-4 portfolio-item branded logos">
                                <div class="portfolio-wrapper">
                                 <!--*****视频******-->
              <div class="img-thumbnail" style="width: 261px;height: 269px;margin-left: 10px;">
                <link href="/person/Public/video/css/video-js.css" rel="stylesheet">
                <!-- If you'd like to support IE8 -->
                <script src="/person/Public/video/js/videojs-ie8.min.js"></script>
                   <div style="width: 261px;height: 269px;">
                     <video id="my-video" class="video-js" controls preload="auto" width="251" height="259"
                         poster="MY_VIDEO_POSTER.jpg" data-setup="{}">
                        <source src="/person/Public/img/uploads/video/<?php echo ($vo["video"]); ?>" type="video/mp4">
                        <source src="/person/Public/img/uploads/video/<?php echo ($vo["video"]); ?>" type="video/webm">
                        <source src="/person/Public/img/uploads/video/<?php echo ($vo["video"]); ?>" type="video/ogg">
                     </video>
                     <script src="http://vjs.zencdn.net/5.18.4/video.min.js"></script> 
                     <script type="text/javascript">
                       var myPlayer = videojs('my-video');
                       videojs("my-video").ready(function(){
                          var myPlayer = this;
                          myPlayer.play();
                       });
                     </script>
                  </div>
              </div>
                                  <!--*****视频******-->  
                                   
                                </div>
                            </div><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                        </div>
                        <div class="portfolio-pagination" style="text-align:center;clear:both;">
                              <?php echo ($page); ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 padding-top">
                    <div class="sidebar portfolio-sidebar">
                        <div class="sidebar-item categories">
                            <h3>分类</h3>
                            <ul class="nav navbar-stacked">
                           <?php if(is_array($viedotype)): $key = 0; $__LIST__ = $viedotype;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?><li><a href="<?php echo U('Video/lst','','');?>/id/<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                            </ul>
                        </div>
                        <div class="sidebar-item  recent">
                            <h3>主题</h3>
                        <?php if(is_array($theme)): $i = 0; $__LIST__ = $theme;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="media">
                                <div class="pull-left">
                                    <a href="<?php echo U('Video/lst','','');?>/id/<?php echo ($vid); ?>/tid/<?php echo ($vo["id"]); ?>"><img src="/person/Public/img/uploads/theme/<?php echo ($vo["img"]); ?>" alt="" style="width:52px;height:52px;"></a>
                                </div>
                                <div class="media-body">
                                    <h4><a href="#"><?php echo ($vo["name"]); ?></a></h4>
                                    <p><?php echo ($vo["name"]); ?></p>
                                </div>
                            </div><?php endforeach; endif; else: echo "" ;endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#projects-->
    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center bottom-separator">
                    <img src="/person/Public/home/images/home/under.png" class="img-responsive inline" alt="">
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="testimonial bottom">
                        <h2>视频</h2>
                        <div class="media">
                <?php if(is_array($newvideo)): $i = 0; $__LIST__ = $newvideo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="media-body">
                           <!-- 存放视频 -->
            <div class="img-thumbnail" style="width: 300px;height:160px;">
                <link href="/person/Public/video/css/video-js.css" rel="stylesheet">
                <!-- If you'd like to support IE8 -->
                <script src="/person/Public/video/js/videojs-ie8.min.js"></script>
                <div style="width: 300px;height: 160px;">
                  <video id="my-videos" class="video-js" controls preload="auto" width="290" height="150"
                      poster="MY_VIDEO_POSTER.jpg" data-setup="{}">
                    <source src="/person/Public/img/uploads/lastvideo/<?php echo ($vo["video"]); ?>" type="video/mp4">
                    <source src="/person/Public/img/uploads/lastvideo/<?php echo ($vo["video"]); ?>" type="video/webm">
                    <source src="/person/Public/img/uploads/lastvideo/<?php echo ($vo["video"]); ?>" type="video/ogg">
                  </video>
                 <script src="http://vjs.zencdn.net/5.18.4/video.min.js"></script> 
                 <script type="text/javascript">
                   var myPlayer = videojs('my-video');
                   videojs("my-video").ready(function(){
                      var myPlayer = this;
                      myPlayer.play();
                   });
                  </script>
                </div>
            </div>           
                                <!-- 存放视频 -->       
                      </div><?php endforeach; endif; else: echo "" ;endif; ?>
                         </div>  
                    </div> 
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="contact-info bottom">
                        <h2>说明</h2>
                        <address>
                        本网站只属于个人, <br> 
                        用于记录我们的日常, <br> 
                        不涉及商业运营 <br> 
                        不喜勿喷 <br> 
                        </address>

                        <h2>警告</h2>
                        <address>
                        <a href="<?php echo U('Admin/Index/index');?>">
                          <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                        </a>
                        如若发现账号违规将被禁言 <br> 
                        请遵守规则 <br> 
                        </address>
 
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="contact-form bottom">
                        <h2>你想对博主说的</h2>
                        <form id="main-contact-form" name="contact-form" method="post">
                            <div class="form-group">
                                <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="留言内容"></textarea>
                            </div>                        
                            <div class="form-group">
                               <?php if($_SESSION['username']!=''): ?><input type="type"  class="btn btn-submit" value="留言" onclick="pomessage()">
                               <?php else: ?>
                                 <input type="type"  class="btn btn-submit" value="留言" onClick="window.location.href='<?php echo U('Home/Login/login');?>'"><?php endif; ?>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="copyright-text text-center">
                <?php if(is_array($webfooter)): $i = 0; $__LIST__ = $webfooter;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><p><?php echo ($vo["titlefrist"]); ?></p>
                        <p><?php echo ($vo["titletwo"]); ?></p><?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--/#footer-->

    
    <script type="text/javascript" src="http://apps.bdimg.com/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript" src="http://apps.bdimg.com/libs/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/person/Public/home/js/lightbox.min.js"></script>
    <script type="text/javascript" src="/person/Public/home/js/wow.min.js"></script>
    <script type="text/javascript" src="/person/Public/home/js/main.js"></script>   
</body>
</html>
<!--弹框样式-->
  <link rel="stylesheet" type="text/css" href="/person/Public/layer/skin/layer.css">
  <script src="/person/Public/layer/layer.js"></script>
<!--弹框样式-->
	<script type="text/javascript">
	function pomessage(){
		var content=$('#message').val();
		var ajaxMessageUrl='<?php echo U("Home/Message/domessage");?>'; 
		if(content==''){
			layer.msg('亲，请输入点内容吧！');
			return false;
		}
		///
		 $.ajax({
      //提交数据的类型 POST GET
        type: "POST",
      //提交的网址
        url: ajaxMessageUrl,
      //提交的数据
        data: {content:content},
      //返回数据的格式
        datatype: "json",
      //成功返回之后调用的函数
        success: function (data) {
      ////根据ajax返回参数判断验证码发送情况
        if(data['status']=="1"){
            layer.msg('留言成功!'); 
			window.location.reload(); 
        }else if(data['status']=="-2"){
        	layer.msg('您已被禁言！');  
        }else{
            layer.msg('留言成功失败！');   
        }
      ////根据ajax返回参数判断验证码发送情况
        }
     });
		///
	}
</script>
	</script>
	<!-- Footer -->