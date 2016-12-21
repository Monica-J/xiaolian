<?php
namespace Admin\Controller;
use Think\Controller;

class PostersController extends Controller{
	
	public function __construct(){
    	parent::__construct();
		if(!isLogin()){
			$this->error("请先登录",U("Admin/login"));
		}
    }
	
	public function Posters_add(){
		$this->display();
	}

    public function doAdd(){
		if(!IS_POST){
			exit("bad request");
		}
		
		$PostersModel = D("Posters");
		
		if(!$PostersModel->create()){
			$this->error($PostersModel->getError());
		}
	    $upload = new \Admin\Controller\Upload();// 实例化上传类
	    $upload->maxSize  = 3145728 ;// 设置附件上传大小
	    $upload->allowExts  = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
	    $upload->rootPath = './Public';
	    $upload->savePath =  '/uploads/';// 设置附件上传目录	
	    $uploadPic = $upload->upload();	
		if(!$uploadPic) {// 上传错误提示错误信息
	        $this->error($upload->getError());
	    }else{

			$Postersdata['id'] = I("post.id");
			$Postersdata['img'] =  __ROOT__.'/Public'.$uploadPic['img']['savepath'].$uploadPic['img']['savename'];
			$Postersdata['pname'] = I("post.pname");
			$Postersdata['addtime'] = I("post.addtime");
			$Postersdata['content'] = I("post.content");

		
			
			if($PostersModel->filter('strip_tags')->add($Postersdata)){
				$this->success("添加成功",U("Posters/Posters_list"));
			}else{
				$this->error("添加失败");
			}
		}
	}


	
	// public function doAdd(){
	// 	if(!IS_POST){
	// 		exit("bad request");
	// 	}
		
	// 	$PostersModel = D("Posters");
		
	// 	if(!$PostersModel->create()){
	// 		$this->error($PostersModel->getError());
	// 	}
	// 	if($PostersModel->filter('strip_tags')->add()){
	// 		$this->success("添加成功",U("Posters_list"));
	// 	}else{
	// 		$this->error("添加失败");
	// 	}
	// }
	
	public function Posters_list(){
		// $PostersModel = D("Posters");

		// //页码
		// $count  = $PostersModel->count();    //计算总数
		// $Page   = new \Admin\Controller\Page($count, 5);
		// $posters  = $PostersModel->limit($Page->firstRow. ',' . $Page->listRows)->order('id desc')->select();
		// $page = $Page->show();
		// $this->assign("page",$page);
		// $this->assign("Posters",$posters);		
		// $this->display();

		$PostersModel = M("posters");
        
		
		//页码
		$count  = $PostersModel->count();    //计算总数

		$Page   = new \Admin\Controller\Page($count, 5);
		
		$Posters   = $PostersModel->limit($Page->firstRow.','.$Page->listRows)->order('id desc')->select();
         
		//$Posters = $PostersModel->order('create_time')->limit($Page->firstRow.','.$Page->listRows)->select();
		$page = $Page->show();

		$this->assign("page",$page);
		
		$this->assign("Posters",$Posters);
		
		$this->display();
	}

	public function Posters_edit($id=''){
		if (IS_POST) {
    		$model = M("Posters");
    		if($model->create()){
    			$result = $model->filter('strip_tags')->save();
				if($result !== false){
					$this->success("修改成功", U("Posters/Posters_list"));
				}else{
					$this->error($model->getError());
				}
    		}
    	}
    	else {
    		if ($id == '') {
    			exit("bad param!");
    		}
    		$Posters = M("Posters")->find($id);
    		$this->assign("Posters", $Posters);
    		$this->display();
    	}
	}
	
	public function del() {
    	$id = isset($_GET['id']) ? intval($_GET['id']) : '';
		if ($id == '') {
			exit("bad param!");
		}
		if(M("Posters")->delete($id)){
			$this->success("删除成功！");
		}
    }
}

?>