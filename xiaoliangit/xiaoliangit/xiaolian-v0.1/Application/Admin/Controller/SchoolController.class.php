<?php
namespace Admin\Controller;
use Think\Controller;
class SchoolController extends Controller {
   public function __construct() {
		parent::__construct();
		if(!isLogin()){
			$this->error("请先登录",U("Admin/login"));
		}
	}

	public function school_add(){
		$this->display();
	}

	public function doAdd(){
		$schoolModel = M('school');

		$where = I("post.");

		$result = $schoolModel->add($where);
		if($result){
			$this->success("添加成功",U("school/school_list"));
		}else{
			$this->error("添加失败");
		}
	}

	public function school_list(){
		$schoolModel = M("school");

		
		//页码
		$count  = $schoolModel->count();    //计算总数
		$Page   = new \Admin\Controller\Page($count, 5);
		$school   = $schoolModel->limit($Page->firstRow.','.$Page->listRows)->order('id desc')->select();
		//$task = $taskModel->order('create_time')->limit($Page->firstRow.','.$Page->listRows)->select();
		$page = $Page->show();

		$this->assign("page",$page);
		$this->assign("school",$school);
		
		$this->display();
	}

public function school_edit($id=''){
		if (IS_POST) {
    		$model = M("school");

    		if($model->create()){
    			$result = $model->filter('strip_tags')->save();
    			// dump($result);exit;
				if($result !== false){
					$this->success("修改成功", U("school/school_list"));
				}else{
					$this->error($model->getError());
				}
    		}
    	}
    	else {
    		if ($id == '') {
    			exit("bad param!");
    		}
    		$school = M("school")->find($id);
    		$this->assign("school", $school);
    		$this->display();
    	}
	}

	public function del($id){
		$id = isset($_GET['id']) ? intval($_GET['id']) : '';
		if ($id == '') {
			exit("bad param!");
		}
		if(M("school")->delete($id)){
			$this->success("删除成功！");
		}
	}
}
?>