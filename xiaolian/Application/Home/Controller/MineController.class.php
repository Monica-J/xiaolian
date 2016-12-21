<?php
namespace Home\Controller;
use Think\Controller;
class MineController extends Controller {
    public function mine(){
        $userModel = M("user");

        $username=session('username');
        // dump($username);exit;
        if($username==""){
                echo "<script>";
                echo "alert('请先登录');";
                echo "location.href='../denglu/enter.html';";
                echo "</script>";            
        }
        // dump($userModel);exit;
        
        $user=$userModel->where("username='$username'")->select();       
        $this->assign('user',$user);
    


    	$dynamicModel = M("dynamic");
        $username=session('username');
        $currentuser=$dynamicModel->where("username='$username'")->order('addtime desc')->select();       
        $this->assign('dynamic',$currentuser);
        
        $friendsModel = M("friends");
        $username=session('username');
        $haoyou=$friendsModel->where("username='$username'")->select();  
        $this->assign('friends',$haoyou);
        $fcount=$friendsModel->where("username='$username'")->count();
        $this->assign("fc",$fcount);
        // dump($fcount);exit;

        $collctionModel=M("collection");
        $username=session('username');
        $collectionResult=$collctionModel->where("username='$username'")->select();
        $this->assign('collection',$collectionResult);
        $ccount=$collctionModel->where("username='$username'")->count();
        $this->assign("cc",$ccount);

        $dianzanModel=M("dianzan");
        $username=session('username');
        // dump($username);exit;
        $dianzanResult=$dianzanModel->where("username='$username'")->select();
        // dump($dianzanResult);exit;
        $this->assign('dianzan',$dianzanResult);
        $dcount=$dianzanModel->where("username='$username'")->count();
        // dump($dcount);exit;
        // dump($dt);exit;
        $this->assign("dt",$dcount);



       $this->display();
    }
    public function haoyou(){
        $friendsModel = M("friends");
        $username=session('username');
        $haoyou=$friendsModel->where("username='$username'")->select();  
        $this->assign('friends',$haoyou);
        $url='http://'.$_SERVER['SERVER_NAME'];
        $this->assign("url",$url);
        $this->display();
    }

    public function grzl($id=''){
        $id= isset($_GET['id']) ? intval($_GET['id']) : '';
        if($id !== ''){
            $friendsModel=M("friends");
            $friendsResult = $friendsModel->find("$id");
            $this->assign("friends",$friendsResult);
            $username=session('username');
            // dump($friendsResult);exit;
            $id=I("get.id");
            $friendsResult = $friendsModel->where("id='$id'")->select();
            $this->assign("friends",$friendsResult);

            $id=(int)$id;
            $fname = $friendsModel->getFieldById($id,'fname');

            session('fname',$fname);

            // dump($fname);exit;
        

        $dynamicModel = M("dynamic");
        $fname=session('fname');
        // dump($fname);exit;
        $currentuser=$dynamicModel->where("username='$fname'")->order('addtime desc')->select();   

        $this->assign('dynamic',$currentuser);
        // dump($currentuser);exit;


        $userModel=M("user");
        $userResult=$userModel->where("username='$fname'")->select();
        $this->assign('user',$userResult);
        // dump($userResult);exit;
        $url='http://'.$_SERVER['SERVER_NAME'];
        $this->assign("url",$url);


           $this->display();
                     
        }else{
            $this->error("id值为空",U("index/index"));
        }
        $this->display();
    }

    public function shoucang(){
        $collctionModel=M("collection");
        $username=session('username');
        // dump($username);exit;
        $collectionResult=$collctionModel->where("username='$username'")->select();
        $this->assign('collection',$collectionResult);
        $url='http://'.$_SERVER['SERVER_NAME'];
        $this->assign("url",$url);
        // dump($collectionResult);exit;
        $this->display();
    }

    public function dongtai(){
       //  $dynamicModel=M("dynamic");
       //  $username=session('username');
       // $content=trim($_POST['content']);
       //  // dump($username);exit;
       //  // $content=I("post.content");
       //  // dump($content);exit;

       //  // session('content',$content);

       //  $this->display();
        // $session('content',null);
        // dump($content);
        // dump(session('?username'));
        
        // $content=I("post.content");
        // dump($content);exit;
        // session('content',$content);
        // dump($content);exit;
        $this->display();
    }
      

      public function adddongtai(){
        if(IS_POST){
            // var_dump($_POST);exit;
            $dynamicModel=M("dynamic");
            $username=session('username');
            $userpic=session('userpic');
            // var_dump($username);exit; 
            // dump($dynamicModel->create());exit;
            if($dynamicModel->create()){
                $upload = new \Home\Controller\Upload();// 实例化上传类
                $upload->maxSize  = 3145728 ;// 设置附件上传大小
                $upload->allowExts  = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
                $upload->rootPath = './Public';
                $upload->savePath =  '/uploads/';// 设置附件上传目录    
                $uploadPic = $upload->upload(); 

                $url='http://'.$_SERVER['SERVER_NAME'];
                $this->assign("url",$url); 
                
                $data['username']=$username;
                $data['pic'] =  __ROOT__.'/Public'.$uploadPic['pic']['savepath'].$uploadPic['pic']['savename'];
                $data['addtime']=date('Y-m-d H:i:s');   
                $data['content']=I("post.content");
                $data['scantime']=1;
                $data['userpic']=$userpic;

 // dump($data['pic']);exit;
                 $result=$dynamicModel->add($data);
                 $this->redirect("mine/mine");

                // if($dynamicModel->add($data)){
                //     // $this->redirect("mine/mine");

                // echo "<script>";
                // echo "alert('发表成功');";
                // echo "location.href='mine.html';";
                // echo "</script>";

                // }else{
                //         echo "<script>";
                //         echo "alert('发表动态失败!');";
                //         echo "location.href='mine.html';";
                //         echo "</script>";                    
                // }  

            }
     $this->display();

            // $content=I("post.content");
            // // dump($content);exit;
            // $condition=array(
            //        "username"=>$username,
            //        "content"=>$content,
            //        "addtime"=>date('Y-m-d H:i:s')
            //     );
            // // dump($condition);exit;
            // // dump($dynamicModel->create($condition));exit;
            // if($dynamicModel->create($condition)){
            //     if($dynamicModel->add($condition)){
            //         $this->redirect("index/index");
            //     }
            //     else{
            //         $this->error("发表失败");
            //     }
            //     $this->display();
            // }


        }else{
           exit("bad request"); 
        }
      }
    
   public function shezhi(){
        $username=session('username');
        // dump($username);exit;
        $userModel=M('user');
        $userResult=$userModel->where("username='$username'")->select();
        // dump($userResult);exit;
        $this->assign('user',$userResult);
        $url='http://'.$_SERVER['SERVER_NAME'];
        $this->assign("url",$url);
        $this->display();
   }
   public function xiugai(){
        if(IS_POST){
            $username=session('username');
            // dump($username);exit;
            $birthday=I("post.birthday");
            $gender=I("post.gender");
            $school=I("post.school");
            $introduce=I("post.introduce");
            // $data=I("post.");
            $data = array('birthday'=>$birthday,
                'gender'=>$gender,'school'=>$school,'introduce'=>$introduce);

            // dump($data);exit;
            $userModel=M("user");
            // $userModel->where("username='$username'")->setField('realname','liwenlong');
            $result=$userModel->where("username='$username'")->setField($data);

            $this->redirect("mine/shezhi");        
            // dump($result);exit;
            if($result==1){
                echo "<script>";
                echo "alert('修改成功');";
                echo "location.href='mine.html';";
                echo "</script>";
                // $this->redirect("index/index");
            }
            else{
                dump("error");
            }

            $this->display();
            
        }else{
            exit("bad request");
        }
   }
   
   public function del(){
        $id = isset($_GET['id']) ? intval($_GET['id']) : '';
        // dump($id);exit;
        if($id==''){
            exit("bad param!");
        }
        if(M("dynamic")->delete($id)){
            $this->redirect("mine/mine");
        }
        $this->display();
   }

   public function chengjiu(){
       $this->display();
   }

   public function tixing(){
    $dianzanModel=M("dianzan");
    $username=session('username');
    // dump($username);exit;
    $dianzanResult=$dianzanModel->where("username='$username'")->select();
     $this->assign("dianzan",$dianzanResult);
    // dump($dianzanResult);exit;
     $dname =$dianzanModel->where("username='$username'")->getField('dname');
     // dump($dname);exit;
    $this->display();
   }

   public function clear(){
    
    $dt=session('dt');
    // dump($dt);exit;
    $this->redirect("mine/mine");
    $this->display();
   }

   // public function logout(){
    
   //  $this->display();
   // }

}