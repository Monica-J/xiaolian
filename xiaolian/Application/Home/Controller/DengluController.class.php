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
					"tel" => I("post.tel"),
					"password" => I("post.password")
				);
          // dump($condition);exit;
			$result = $UsersModel->where($condition)->count();//得到数据条数
			// dump($result);exit;
			if($result > 0){
				
				$username =$UsersModel->where($condition)->getField('username');
				$userpic =$UsersModel->where($condition)->getField('userpic');

				session("username",$username);
				session("userpic",$userpic);
				// dump($username);exit;
				// dump($Userresult);exit;
				// $Userresult=$UsersModel->where("username=".session("username"))->select();
				// $this->assign("user",$Userresult);
				// //session赋值
				// var_dump($Userresult);
    //                     exit;
				$this->redirect("mine/mine");
										
			}else{
				// $this->error("用户名或密码不正确");//第二个参数不写，返回上一页
				echo "<script>";
                echo "alert('密码错误!');";
                echo "location.href='enter.html';";
                echo "</script>";
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
	                  // $this->error($upload->getError());
				echo "<script>";
                echo "alert('头像没有被上传!');";
                echo "location.href='register.html';";
                echo "</script>";	            	
	              }
	              else{
	              	  $data['username']=I("post.username");
		    	      $data['tel']=I("post.tel");
		    	      $data['userpic'] =  __ROOT__.'/Public'.$uploadPic['userpic']['savepath'].$uploadPic['userpic']['savename'];
		    	      $data['password']=I("post.password");
		    	      $data['gender']=I("post.gender");
		    	      $data['birthday']=I("post.birthday");
		    	      $data['addtime']=date('Y-m-d H:i:s');
		    	      $data['introduce']='我是'.I("post.username");

		    	      $username=$data['username'];
		    	      $tel=$data['tel'];
		    	      // dump($username);dump($tel);exit;

                     $UsersModel=M('user');
                     $Userresult=$UsersModel->where("username='$username' or tel='$tel'")->count();
		    	      // dump($data['username']);
		    	      // dump($data['tel']);
                     // dump($Userresult);exit;
                     if($Userresult=0){
                     	$UsersModel->add($data);
                        echo "<script>";
                        echo "alert('注册成功!');";
                        echo "location.href='register.html';";
                        echo "</script>";
                     }
		    	      else{
		    	      	    // $this->errot("注册失败");
		    	      	echo "<script>";
                        echo "alert('用户名或手机号已存在，注册失败!');";
                        echo "location.href='register.html';";
                        echo "</script>";
		    	      }
	              }

	    		
	    	}
	    	
    	}else{
    		$this->display();
    	}
    	
    	
    	

    }
  
}