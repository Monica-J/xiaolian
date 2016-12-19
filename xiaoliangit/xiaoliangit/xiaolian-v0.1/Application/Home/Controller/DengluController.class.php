<?php
namespace Home\Controller;
use Think\Controller;
class DengluController extends Controller {
    public function enter(){
       if(IS_POST){
			$UsersModel = M('User');
			// dump($UsersModel);
			// exit;
			$condition = array(
					"username" => I("post.username"),
					"password" => I("post.password")
				);

			$result = $UsersModel->where($condition)->count();//得到数据条数
			if($result > 0){
				
				
				session("username",I("post.username"));
				// $Userresult=$UsersModel->where("username=".session("username"))->select();
				// $this->assign("user",$Userresult);
				// //session赋值
				// var_dump($Userresult);
    //                     exit;
				$this->redirect("mine/mine");
										
			}else{
				$this->error("用户名或密码不正确");//第二个参数不写，返回上一页
			}
		}
		else{
			$this->display();
		}
    }

    public function register(){
    	if(IS_POST){
    		$UsersModel=M('user');
    		// dump($UsersModel->create());exit;
	    	if($UsersModel->create()){
	    		$upload = new \Home\Controller\Upload();// 实例化上传类
	            $upload->maxSize  = 3145728 ;// 设置附件上传大小
	            $upload->allowExts  = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
	            $upload->rootPath = './Public';
	            $upload->savePath =  '/uploads/';// 设置附件上传目录	
	            $uploadPic = $upload->upload();	

	            $url='http://'.$_SERVER['SERVER_NAME'];
		        $this->assign("url",$url);

	            if(!$uploadPic) {// 上传错误提示错误信息
	                  $this->error($upload->getError());
	              }
	              else{
	              	  $data['username']=I("post.username");
		    	      $data['tel']=I("post.tel");
		    	      $data['userpic'] =  __ROOT__.'/Public'.$uploadPic['userpic']['savepath'].$uploadPic['userpic']['savename'];
		    	      $data['password']=I("post.password");
		    	      $data['addtime']=date('Y-m-d H:i:s');
		    	      if($UsersModel->add($data)){
		    	      	$this->redirect("denglu/enter");
		    	      }else{
		    	      	    $this->errot("注册失败");
		    	      }
	              }

	    		
	    	}
	    	
    	}else{
    		$this->display();
    	}
    	
    	
    	

    }
  
}