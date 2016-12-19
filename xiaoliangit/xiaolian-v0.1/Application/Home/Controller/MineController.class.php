<?php
namespace Home\Controller;
use Think\Controller;
class MineController extends Controller {
    public function mine(){
        $userModel = M("user");

        $username=session('username');
        // dump($userModel);exit;
        $user=$userModel->where("username='$username'")->select();       
        $this->assign('user',$user);
    


    	$dynamicModel = M("dynamic");
        $username=session('username');
        $currentuser=$dynamicModel->where("username='$username'")->select();       
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
        $currentuser=$dynamicModel->where("username='$fname'")->select();   

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
            // var_dump($username);exit;  
            $content=I("post.content");
            // dump($content);exit;
            $condition=array(
                   "username"=>$username,
                   "content"=>$content,
                   "addtime"=>date('Y-m-d H:i:s')
                );
            // dump($condition);exit;
            // dump($dynamicModel->create($condition));exit;
            if($dynamicModel->create($condition)){
                if($dynamicModel->add($condition)){
                    $this->redirect("index/index");
                }
                else{
                    $this->error("发表失败");
                }
                $this->display();
            }


        }else{
           exit("bad request"); 
        }
      }

    // public function adddongtai(){
    //     if(IS_POST){
    //         // var_dump($_POST);exit;
    //         $dynamicModel=M("dynamic");
    //         $username=session('username');
    //         $content=I("post.content");
    //         // dump($content);exit;
    //         $condition = array(
    //                     "username"=>$username,
    //                     "content"=>$content,
    //                     "addtime"=>date('Y-m-d H:i:s')
    //                 );
           
    //         if($dynamicModel->create($condition)){
    //             if($dynamicModel->add($condition)){
    //                 $this->redirect("index/index");
    //             }
    //             else{
    //                 $this->error("发表失败");
    //             }
    //         }
    //     }else{
    //         exit("bad request");
    //     }
    // }

            // $username=session('username');
            // $content=session('content');
            // dump($content);exit;
        // $content=session('content');
        // // dump($content);exit;
        // $username=session('username');
        // // dump($username);exit;
        // $dynamicModel=M("dynamic");
        // $dynamicResult=$dynamicModel->select();
        // $this->assign('dynamic',$dynamicResult);
        // // dump($dynamicResult);exit;
        // $condition = array(
        //             "username"=>$username,
        //             "content"=>$content,
        //             "addtime"=>date('Y-m-d H:i:s')
        //         );
        // if($dynamicModel->create($condition)){
        //     if($dynamicModel->add($condition)){
        //         $this->redirect("index/index");
        //     }
        //     else{
        //         $this->errot("发表失败");
        //     }
        // }

        // $this->display();
    
    

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
            $password=I("post.password");
            $birthday=I("post.birthday");
            $gender=I("post.gender");
            $school=I("post.school");
            $introduce=I("post.introduce");
            // $data=I("post.");
            $data = array('password'=>$password,'birthday'=>$birthday,
                'gender'=>$gender,'school'=>$school,'introduce'=>$introduce);

            // dump($data);exit;
            $userModel=M("user");
            // $userModel->where("username='$username'")->setField('realname','liwenlong');
            $result=$userModel->where("username='$username'")->setField($data);
            // dump($result);exit;
            if($result==1){
                $this->redirect("index/index");
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
            $this->redirect("index/index");
        }
        $this->display();
   }

   public function chengjiu(){
       $this->display();
   }
  

}