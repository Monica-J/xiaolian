<?php
namespace Admin\Controller;
use Think\Controller;
class TaskController extends Controller {
   public function __construct() {
		parent::__construct();
		if(!isLogin()){
			$this->error("请先登录",U("Admin/login"));
		}
	}

	public function task_add(){
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
		$taskModel = M('task');

		$where = I("post.");

		$result = $taskModel->add($where);
		if($result){
			$this->success("添加成功",U("task/task_list"));
		}else{
			$this->error("添加失败");
		}
	}

	public function task_list(){
		$taskModel = M("task");

		
		//页码
		$count  = $taskModel->count();    //计算总数
		$Page   = new \Admin\Controller\Page($count, 5);
		$task   = $taskModel->limit($Page->firstRow.','.$Page->listRows)->order('id desc')->select();
		//$task = $taskModel->order('create_time')->limit($Page->firstRow.','.$Page->listRows)->select();
		$page = $Page->show();

		$this->assign("page",$page);
		$this->assign("task",$task);
		
		$this->display();
	}

public function task_edit($id=''){
		if (IS_POST) {
    		$model = M("task");
    		if($model->create()){
    			$result = $model->filter('strip_tags')->save();
				if($result !== false){
					$this->success("修改成功", U("Task/task_list"));
				}else{
					$this->error($model->getError());
				}
    		}
    	}
    	else {
    		if ($id == '') {
    			exit("bad param!");
    		}
    		$Users = M("task")->find($id);
    		$this->assign("task", $task);
    		$this->display();
    	}
	}

	public function del($id){
		$id = isset($_GET['id']) ? intval($_GET['id']) : '';
		if ($id == '') {
			exit("bad param!");
		}
		if(M("task")->delete($id)){
			$this->success("删除成功！");
		}
	}
}
?>