<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
   
    public function index(){
    	//推荐新闻部分
      $userModel = M("user");
      $username=session('username');
      if($username!=''){
         $newsModel = M("news");
        $newsResult = $newsModel->where('recommended=1')->limit(3)->select();
        $this->assign("news",$newsResult);

        $postersModel=M("posters");
        $postersResult = $postersModel->limit(3)->select();
        $this->assign("posters",$postersResult);

        $userModel = M("user");
        $username=session('username');
        // dump($username);exit;
        $userResult = $userModel->where('recommended=1')->where("username!='$username'")->limit(4)->select();
        $this->assign("user",$userResult);

        $url='http://'.$_SERVER['SERVER_NAME'];
        $this->assign("url",$url);

      }else{
         echo "<script>";
         echo "alert('请先登录');";
         echo "location.href='./home/denglu/enter.html';";
         echo "</script>";
      }
        
       
        // $userModel=M("user");
       
       $this->display();
    }
    public function activity_more(){
        $newsModel = M("news");
       
		$newsResult = $newsModel->select();

		$this->assign("news",$newsResult);

    	$this->display();
    }
    public function activity_specific($id=''){
    	$id= isset($_GET['id']) ? intval($_GET['id']) : '';
		if($id !== ''){
			//具体内容
			$newsModel = M("news");
			$newsResult = $newsModel->find("$id");
			$this->assign("news",$newsResult);
        session('id',$id);
        // dump($id);exit;
			
			$this->display();
		}else{
			$this->error("id值为空",U("index/index"));
		}
    	
  //   	$newsModel = M("news");
  //   	$where = I('get.');
		// $newsResult = $newsModel->where($where)->select();
		// $this->assign("news",$newsResult);


    	$this->display();
    }

public function collection(){
  $newsModel=M("news");
  $id=session("id");
  $newsResult=$newsModel->select();
  $this->assign('news',$newsResult);
  $id=(int)$id; 
 
    $username=session('username');
  
    $title = $newsModel->where("id='$id'")->getField('title');
    $newspic = $newsModel->where("id='$id'")->getField('newspic');
    $content = $newsModel->where("id='$id'")->getField('content');
    $scantime = $newsModel->where("id='$id'")->getField('scantime');
    // $title=$newsModel->getFieldById($id,'title');
    // $newspic=$newsModel->getFieldById($id,'newspic');
    // $content=$newsModel->getFieldById($id,'content');
    // $scantime=$newsModel->getFieldById($id,'scantime');

    $condition = array(
                    "username"=>$username,
                    "title"=>$title,
                    "newspic"=>$newspic,
                    "content"=>$content,
                    "scantime"=>$scantime
                );
    // dump($id); dump($condition);exit;
    $collectionModel=M("collection");
    $check=$collectionModel->where("username='$username' and title='$title'")->count();
    // dump($check);exit;
    if($check>0){
                echo "<script>";
                echo "alert('该内容已收藏!');";
                echo "location.href='index.html';";
                echo "</script>";
    }else{
       if($collectionModel->create($condition)){
        if($collectionModel->add($condition)){
          // dump($scantime);exit;
          $newsModel->scantime;
          $scantime=$scantime+1;
          $newsModel->where("id='$id'")->setInc('scantime');
           // dump($scantime);exit;
          
          $newsResult=$newsModel->where("id='$id'")->select();
          // dump($newsResult);exit;
          $this->redirect("index/index");
        }
        else{
                 $this->errot("收藏失败");
            }
    }
    }
   

}
   
public function user_data($id=''){
        $id= isset($_GET['id']) ? intval($_GET['id']) : '';
        session('id',$id);
        // dump($id);exit;
        if($id !== ''){
            //具体内容
            $userModel = M("user");        
            $userResult = $userModel->find("$id");
            $this->assign("user",$userResult);
            $url='http://'.$_SERVER['SERVER_NAME'];
            $this->assign("url",$url);
            $this->display();
        }else{
            $this->error("id值为空",U("index/index"));
        }       
        $this->display();
    }
    public function addUser(){
        $id=session("id");
        // dump($id);exit;
        $userModel=M("user");
        $userResult=$userModel->where("id='$id'")->select();
        $this->assign("user",$userResult);
        // dump($userResult);exit;
            $id=(int)$id;
            $username=session('username');
            $fname = $userModel->getFieldById($id,'username');
            $fschool = $userModel->getFieldById($id,'school');
            $fgender = $userModel->getFieldById($id,'gender');
            $fbirthday = $userModel->getFieldById($id,'birthday');
            $pic=$userModel->getFieldById($id,'userpic');

            $condition = array(
                    "username"=>$username,
                    "fname"=>$fname,
                    "fschool"=>$fschool,
                    "fgender"=>$fgender,
                    "fbirthday"=>$fbirthday,
                    "pic"=>$pic
                );
            // dump($condition);exit;
            $result = $userModel->where($condition)->count();
            // dump($result);exit;
 /*1*/           if($result>0){
              $friendsModel=M("friends");
              $check=$friendsModel->where("username='$username' and fname='$fname'")->count();
              // dump($check);exit;
              if($check>0){
                echo "<script>";
                echo "alert('该好友已关注!');";
                echo "location.href='index.html';";
                echo "</script>";
                // dump('shibai');exit;
              }
              else{
                if($friendsModel->create($condition)){
                   // $data['username']=$username;
                   // $data['fname']=$fname;
                   // $data['fschool']=$fschool;
                   // $data['fgender']=$fgender;
                   // $data['birthday']=$birthday;
                   // $data['pic']=$pic;
                  if($friendsModel->add($condition)){
                       $this->redirect("index/index");
                   }
                   else{
                        $this->errot("关注失败");
                   }

                  }

              }
              // dump($username);exit;    li
              // dump($friendsModel->create($condition));exit;
                  
 /*1*/      }
   






    }
}

 
