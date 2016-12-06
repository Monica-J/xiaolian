<?php
namespace Admin\Controller;
use Think\Controller;
class DynamicController extends Controller {
   public function __construct() {
		parent::__construct();
		if(!isLogin()){
			$this->error("请先登录",U("Admin/login"));
		}
	}

	public function dynamic_add(){
		$this->display();
	}

	public function doAdd(){
		// if(!IS_POST){
		// 	exit("bad request");
		// }
		
		// $taskModel = M("task");
		
		// if(!$taskModel->create()){
		// 	$this->error($taskModel->getError());
		// }
		// if($taskModel->filter('strip_tags')->add()){
		// 	$this->success("添加成功",U("task/task_list"));
		//else{
		// 	$this->error("添加失败");
		// }
		$dynamicModel = M('dynamic');

		$where = I("post.");

		$result = $dynamicModel->add($where);
		if($result){
			$this->success("添加成功",U("dynamic/dynamic_list"));
		}else{
			$this->error("添加失败");
		}
	}

	public function dynamic_list(){
		$dynamicModel = M("dynamic");

		
		//页码
		$count  = $taskModel->count();    //计算总数
		$Page   = new \Admin\Controller\Page($count, 5);
		$dynamic   = $dynamicModel->limit($Page->firstRow.','.$Page->listRows)->order('id desc')->select();
		//$task = $taskModel->order('create_time')->limit($Page->firstRow.','.$Page->listRows)->select();
		$page = $Page->show();

		$this->assign("page",$page);
		$this->assign("dynamic",$dynamic);
		
		$this->display();
	}

public function dynamic_edit($id=''){
		if (IS_POST) {
    		$Model = M("dynamic");
    		// var_dump($Model);
    		// exit;
    		if($Model->create()){
    			$result = $Model->filter('strip_tags')->save();

       //      var_dump($result);
    			// exit;
    			
				if($result !== false){
					$this->success("修改成功", U("dynamic/dynamic_list"));
				}else{
					$this->error($Model->getError());
				}
    		}
    	}
    	else {
    		if ($id == '') {
    			exit("bad param!");
    		}
    		$dynamic = M("dynamic")->find($id);
    		$this->assign("dynamic", $dynamic);
    		$this->display();
    	}
	}

	public function del($id){
		$id = isset($_GET['id']) ? intval($_GET['id']) : '';
		if ($id == '') {
			exit("bad param!");
		}
		if(M("dynamic")->delete($id)){
			$this->success("删除成功！");
		}
	}
}
?>