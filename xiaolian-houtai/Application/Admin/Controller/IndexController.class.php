<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function __construct(){
    	parent::__construct();
		if(!isLogin()){
			$this->error("请先登录",U("Admin/login"));
		}
    }
    public function index(){
		// $task = M("task");
		// $news = M("news");
		// $user = M("user");
		// $school = M("school");
		
		// $userCount = $user->count();
		// $newsCount = $news->count();
		// $taskCount = $task->count();
		// $schoolCount = $school->count();

		// $this->assign("bc",$booksCount);
		// $this->assign("nc",$newsCount);
		// $this->assign("tc",$tagCount);
		// $this->assign("sc",$keyCount);
		
		// $this->display();
		echo "IndexController index()";
	}

    
}