<?php
namespace Admin\Controller;
use Think\Controller;

class UserController extends Controller {
	
	public function __construct() {
		parent::__construct();
		if(!isLogin()){
			$this->error("请先登录",U("Admin/login"));
		}
	}
	
	public function user_add(){
		$this->display();
	}
	//添加管理员
	// public function doAdd(){
	// 	if(!IS_POST){
	// 		exit("bad request");
	// 	}
		
	// 	$userModel = D("adminUsers");
		
	// 	if(!$userModel->create()){
	// 		$this->error($userModel->getError());
	// 	}
	// 	if($userModel->filter('strip_tags')->add()){
	// 		$this->success("添加成功",U("user_list"));
	// 	}else{
	// 		$this->error("添加失败");
	// 	}
	// }
	
	//用户管理
	public function user_list(){
		$userModel = D("user");
		
		//页码
		$count  = $userModel->count();    //计算总数
		$Page   = new \Admin\Controller\Page($count, 5);
		$users   = $userModel->limit($Page->firstRow. ',' . $Page->listRows)->order('id desc')->select();
		$page = $Page->show();

		$this->assign("page",$page);
		$this->assign("users",$users);
		
		$this->display();
	}
	
	//修改个人信息
	public function user_edit($id=''){
		if (IS_POST) {
    		$model = M("user");
    		if($model->create()){
    			$result = $model->filter('strip_tags')->save();
				if($result !== false){
					$this->success("修改成功", U("User/user_list"));
				}else{
					$this->error($model->getError());
				}
    		}
    	}
    	else {
    		if ($id == '') {
    			exit("bad param!");
    		}
    		$Users = M("user")->find($id);
    		$this->assign("users", $Users);
    		$this->display();
    	}
	}

	// public function user_edit($id=''){
	// 	if (IS_POST) {
 //    		$model = M("user");
 //    		if($model->create()){
 //    			$result = $model->filter('strip_tags')->save();
	// 			if($result !== false){
	//                 $where=I("post.tel");
	//                 $pattern = '/^1[3|5|7|8|][0-9]{9}$/';
	//                $tel=preg_match($pattern, $where);
                    
                    
	//                $where2=I("post.email");
	//                 $pattern2 = '/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/';
	//                $email=preg_match($pattern2, $where2);
	               


	//                $where3=I("post.realname");
	//                 $pattern3 = '/^[\u4E00-\u9FA5]{2,5}(?:·[\u4E00-\u9FA5]{2,5})*$/';
	//                $realname=preg_match($pattern3, $where3);
	               

	//                if($tel!=0&&$email!=0&&$realname!=0){
	//                	$this->success("修改成功", U("User/user_list"));
	//                }else if($tel==0){
	//                	  echo "手机号码格式不对！！！";
	//                	  $this->error($model->getError());
	//                }else if($email==0){
	//                	  echo "邮箱格式不对！！！";
	//                	  $this->error($model->getError());
	//                }else if($realname==0) {
	//                	  echo "真实姓名格式不对！！！";
 //                     $this->error($model->getError());
	//                }
	//                // exit;

					
	// 			}else{
	// 				$this->error($model->getError());
	// 			}
 //    		}
 //    	}
 //    	else {
 //    		if ($id == '') {
 //    			exit("bad param!");
 //    		}
 //    		$Users = M("user")->find($id);
 //    		$this->assign("users", $Users);
 //    		$this->display();
 //    	}
	// }
	
	//修改个人密码
	// public function user_pass($id=''){
	// 	$this->display();
	// }
	
	// public function del($id){
	// 	$id = isset($_GET['id']) ? intval($_GET['id']) : '';
	// 	if ($id == '') {
	// 		exit("bad param!");
	// 	}
	// 	if(M("user")->delete($id)){
	// 		$this->success("删除成功！");
	// 	}
	// }
	
	//信息修改
	// public function user_modi(){
	// 	$this->display();
	// }
	
	
	
	//用户注册
// 	public function reg(){
// 		$this->display();
// 	}
}
?>