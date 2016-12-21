<?php
namespace Admin\Controller;
use Think\Controller;

class AdminController extends Controller{
	//显示登录页
//	public function index(){
//		$this->display();
//	}	
	public function login(){
		if(IS_POST){
			$adminUsersModel = M('adminUsers');
			$condition = array(
					"username" => I("post.username"),
					"password" => I("post.password")
				);

			$result = $adminUsersModel->where($condition)->count();//得到数据条数

			//dump($condition);exit;
			if($result > 0){
				session("username",I("post.username"));//session赋值
				$this->success("登录成功！",U("user/user_list"));

				
			}else{
				$this->error("用户名或密码不正确");//第二个参数不写，返回上一页
			}
		}
		else{
			$this->display();
		}
	}
	
	public function logout(){
		session(null);
	}
}

	
?>