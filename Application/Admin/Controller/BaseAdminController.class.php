<?php
namespace Admin\Controller;
use Think\Controller;
class  BaseAdminController  extends Controller {
    public function top(){
      $this->checklogin();   //令牌机制
      $this->getmessage();   //获取顶部留言数据
      $this->pinglundate();  //获取顶部评论数据
	  }


    /************************导航共用***********************************/


    /*判断用户登陆机制*/
    public function checklogin(){
      if($_SESSION['adminid']==''){
         $this->redirect('/Admin/Login/login');
      }
      /*令牌机制*/
      $adminTokenId=cookie('adminId');
      $adminToken=cookie('adminToken');
      $whereToken['id']=$adminTokenId;
      $token=M('admin')->where($whereToken)->getField('token');
      $tokenTime=M('admin')->where($whereToken)->getField('tokentime');
      if($token!=$adminToken){
          cookie('adminId',null);
          cookie('adminToken',null);
          cookie('adminTokenTime',null);
          $this->redirect('/Admin/Login/login');
      }else{
        if($tokenTime<time()){
          cookie('adminId',null);
          cookie('adminToken',null);
          cookie('adminTokenTime',null);
          $this->redirect('/Admin/Login/login');
        }
      }
      /*令牌机制*/
    }

    /*获取顶部用户留言信息*/
    public function getmessage(){
      $where['status']=2;
      $where['biaozhi']=1;
      $datacount=M('message')->where($where)->count(); //未回复留言信息
      $data=M('message')->where($where)->select();
      foreach ($data as $key => $value) {
        $content=$data[$key]['content'];
        $me=preg_replace("/\<p/",'<span',$content);
        $data[$key]['content']=preg_replace("/\[(\S)*\]/",'',$me);
        $me=preg_replace("/\<\/p\>/",'</span>',$data[$key]['content']);
        $data[$key]['content']=preg_replace("/\[(\S)*\]/",'',$me);
        //获取用户名与头像
        $arr=explode(',',$value['uid']);
        $whe['id']=$value['uid'];
        $re=M('user')->where($whe)->getField('username');
        $img=M('user')->where($whe)->getField('img');
        $data[$key]['img']=$img;
        $data[$key]['username']=$re;
        //转换时间格式
        $arrs=explode(',',$value['creattime']);
        $res=date("Y-m-d H:i:s",$value['creattime']);
        $data[$key]['time']=$res;
      }
      $this->assign('messdata',$data);
      $this->assign('datacount',$datacount);
    }
    /*获取顶部用户留言信息*/

    /*获取顶部评论状态*/
    public function pinglundate(){
      $plwhe['status']='0';
      $pldata=M('pinglun')->where($plwhe)->select();
      $plcount=M('pinglun')->where($plwhe)->count();
      foreach ($pldata as $key => $value) {
        //进行优化//
        $content=$pldata[$key]['content'];
        $me=preg_replace("/\<p/",'<span',$content);
        $pldata[$key]['content']=preg_replace("/\[(\S)*\]/",'',$me);
        $me=preg_replace("/\<\/p\>/",'</span>',$pldata[$key]['content']);
        $pldata[$key]['content']=preg_replace("/\[(\S)*\]/",'',$me);
        //进行优化//
        $plid['id']=$value['uid'];
        $username=M('user')->where($plid)->getField('username');
        $userimg=M('user')->where($plid)->getField('img');
        $pldata[$key]['username']=$username;
        $pldata[$key]['userimg']=$userimg;
      }
      $this->assign('pldata',$pldata);
      $this->assign('plcount',$plcount);
    }
    /*获取顶部评论状态*/


	/**************************************调取左侧导航颜色***************************************/

	/**左侧导航样式
	 * @param $id
	 * @param $item
	 */
	public function navigation($id,$item){

		if($id==1){                      //首页
            $this->indexColor($item);
		}else if($id==2){                //文章管理
			$this->articleColor($item);
		}else if($id==3){                //用户管理
			$this->userColor($item);
		}else if($id==4){                //图片管理
			$this->imageColor($item);
		}else if($id==5){                //视频管理
			$this->videoColor($item);
		}else if($id==6){                //留言管理
			$this->messageColor($item);
		}else if($id==7){                //系统管理
            $this->statisticsColor($item);
        }else if($id==8){                //访问统计
            $this->statisticsColor($item);
        }



		//
	}

	/**首页样式返回
	 * @param $item
	 */
	public function indexColor($item){
       if($item==1){
		   $color_index="active";
		   $this->assign('color_index',$color_index);
	   }

	}

	/**文章管理样式返回
	 * @param $item
	 */
	public function articleColor($item){
		$color_article="active";
		if($item=='1'){
			$color_articletype="active";
			$color_articlelist="";
		}else if($item=='2'){
			$color_articletype="";
			$color_articlelist="active";
		}
		$this->assign('color_article',$color_article);
		$this->assign('color_articletype',$color_articletype);
		$this->assign('color_articlelist',$color_articlelist);
	}

	/**用户管理样式返回
	 * @param $item
	 */
	public function userColor($item){
		$color_user="active";
		if($item==1){
			$color_users="active";
			$color_lists="";
			$color_group="";
		}else if($item==2){
			$color_users="";
			$color_lists="active";
			$color_group="";
		}else if($item==3){
			$color_users="";
			$color_lists="";
			$color_group="active";
		}
		$this->assign('color_user',$color_user);
		$this->assign('color_users',$color_users);
		$this->assign('color_lists',$color_lists);
		$this->assign('color_group',$color_group);
	}

	/**图片管理样式返回
	 * @param $item
	 */
	public function imageColor($item){
		$color_image="active";
		if($item==1){
			$color_imglist="active";
			$color_typelist="";
		}else if($item==2){
			$color_imglist="";
			$color_typelist="active";
		}
		$this->assign('color_image',$color_image);
		$this->assign('color_imglist',$color_imglist);
		$this->assign('color_typelist',$color_typelist);
	}

	/**视频管理样式返回
	 * @param $item
	 */
	public function videoColor($item){
		$color_video="active";
		if($item==1){
			$color_audiolist="active";
			$color_typelists="";
		}else if($item==2){
			$color_audiolist="";
			$color_typelists="active";
		}
		$this->assign('color_video',$color_video);
		$this->assign('color_audiolist',$color_audiolist);
		$this->assign('color_typelists',$color_typelists);
	}

	/**留言样式返回
	 * @param $item
	 */
	public function messageColor($item){
        if($item==1){
			$color_message="active";
			$this->assign('color_message',$color_message);
		}

	}

	/**系统设置样式返回
	 * @param $item
	 */
	public  function settingColor($item){
		$color_setting="active";
		if($item==1){
			$color_lunbo="active";
			$color_sms="";
			$color_settinglst="";
			$color_indexlst="";
		}else if($item==2){
			$color_lunbo="";
			$color_sms="active";
			$color_settinglst="";
			$color_indexlst="";
		}else if($item==3){
			$color_lunbo="";
			$color_sms="";
			$color_settinglst="active";
			$color_indexlst="";
		}else if($item==4){
			$color_lunbo="";
			$color_sms="";
			$color_settinglst="";
			$color_indexlst="active";
		}
		$this->assign('color_setting',$color_setting);
		$this->assign('color_lunbo',$color_lunbo);
		$this->assign('color_sms',$color_sms);
		$this->assign('color_settinglst',$color_settinglst);
		$this->assign('color_indexlst',$color_indexlst);
	}

	/**
     * 访问统计样式返回
     */
    public  function statisticsColor($item)
    {
        $color_statistics="active";
        if($item==1){
            $color_operation="active";
        }
        $this->assign('color_statistics',$color_statistics);
        $this->assign('color_operation',$color_operation);
    }
}