<?php
namespace Admin\Controller;
use Think\Controller;

class DynamicController extends Controller{
	
	public function __construct(){
    	parent::__construct();
		if(!isLogin()){
			$this->error("请先登录",U("Admin/login"));
		}
    }
	
	public function news_add(){
		$this->display();
	}
	
	public function doAdd(){
		if(!IS_POST){
			exit("bad request");
		}
		
		$newsModel = D("news");
		
		if(!$newsModel->create()){
			$this->error($newsModel->getError());
		}
		if($newsModel->filter('strip_tags')->add()){
			$this->success("添加成功",U("news_list"));
		}else{
			$this->error("添加失败");
		}
	}
	
	public function news_list(){
		$newsModel = D("news");
		//页码
		$count  = $newsModel->count();    //计算总数
		$Page   = new \Admin\Controller\Page($count, 5);
		$new   = $newsModel->limit($Page->firstRow. ',' . $Page->listRows)->order('id desc')->select();
		$page = $Page->show();
		$this->assign("page",$page);
		$this->assign("news",$new);
		
		$this->display();
	}

	public function news_edit($id=''){
		if (IS_POST) {
    		$model = M("news");
    		if($model->create()){
    			$result = $model->filter('strip_tags')->save();
				if($result !== false){
					$this->success("修改成功", U("News/news_list"));
				}else{
					$this->error($model->getError());
				}
    		}
    	}
    	else {
    		if ($id == '') {
    			exit("bad param!");
    		}
    		$news = M("news")->find($id);
    		$this->assign("news", $news);
    		$this->display();
    	}
	}
	
	public function del() {
    	$id = isset($_GET['id']) ? intval($_GET['id']) : '';
		if ($id == '') {
			exit("bad param!");
		}
		if(M("news")->delete($id)){
			$this->success("删除成功！");
		}
    }
}

?>