<?php
namespace Admin\Controller;

class StatisticsController extends BaseAdminController {
    /**
     * 统计记录
     */

    /*访问统计列表*/
    public function operation(){
    	/*调用继承方法*/
        $this->top();                      //调取公共方法
        $this->navigation(8,1);               //调取左侧导航颜色
		/*调用继承方法*/
		/*时间查询*/
		$start=strtotime($_POST['query_start_time']);
		$end=strtotime($_POST['query_end_time']);
		if($_POST['query_start_time'] && $_POST['query_end_time']){
			$where['create_at'] = array('BETWEEN',array($start,$end));
		}else if($_POST['query_start_time']){
			$where['create_at'] = array('EGT',$start);
		}else if($_POST['query_end_time']){
			$where['create_at'] = array('ELT',$end);
		}
		/*时间查询*/
        $count1=M('loginip')->where($where)->count();
        $Page = new \Think\Page1($count1,12);// 实例化分页类 传入总记录数和每页显示的记录数
        $result=M('loginip')->where($where)->order('id')->page($_GET['p'].',12')->select();
        $show = $Page->show();// 分页显示输出
        $this->assign('result',$result);
        $this->assign('page',$show);// 赋值分页输出
        $this->display();
    }

    /*清空访问统计列表*/
    public function deleteAllOperation(){
        M('loginip')->where('id!=0')->delete();
        $this->redirect('Statistics/operation');
    }

    /*清空单个访问统计列表*/
    public function deleteOperation($id){
       if(empty($id)){
           $this->error('不存在记录ID');
       }
       $where['id']=$id;
       $result=M('loginip')->where($where)->delete();
       if($result){
           $this->redirect('Statistics/operation');
       }else{
           $this->error('删除失败');
       }


    }
}