<?php
namespace Home\Controller;
use Think\Controller;
class KankanController extends Controller {
    public function kankan(){
  //       $dynamicModel = M("dynamic");
		// // $dynamicResult = $dynamicModel->where('username!=')->select();
		//  $dynamicResult = $dynamicModel->select();
		// $this->assign("dynamic",$dynamicResult);
		   $dynamicModel = M("dynamic");
        $username=session('username');
        // dump($username);exit;
        $currentuser=$dynamicModel->where("username!='$username'")->order('addtime desc')->select();       
        $this->assign('dynamic',$currentuser);
        $url='http://'.$_SERVER['SERVER_NAME'];
        $this->assign("url",$url);
        // $id=$dynamicModel->getField('username');
        // dump($id);exit;
        $this->display();
  
    
       
    }
 
  public function wzdt(){
  	    $dynamicModel = M("dynamic");
        $username=session('username');
        $currentuser=$dynamicModel->where("username!='$username'")->select();       
        $this->assign('dynamic',$currentuser);
        $this->display();
	
		$this->display();
  }
  public function tpdt(){
  	    $dynamicModel = M("dynamic");
        $username=session('username');
        $currentuser=$dynamicModel->where("username!='$username'")->select();       
        $this->assign('dynamic',$currentuser);
        $url='http://'.$_SERVER['SERVER_NAME'];
        $this->assign("url",$url);
        $this->display();
	
		$this->display();
  }
 
  public function dianzan($id=''){
    $id= isset($_GET['id']) ? intval($_GET['id']) : '';
    // dump($id);exit;
    // $username=session('username');
    // if($username);exit;
    if($id!==''){
      $dianzanModel=M('dianzan');
       $dynamicModel=M("dynamic");
       $dynamicResult=$dynamicModel->find($id);
       // dump($dynamicResult);exit;
       $id=(int)$id; 
       $scantime=$dynamicModel->getFieldById($id,'scantime');
       // dump($scantime);exit; 
       
       $username=session('username');
       // dump($username);exit;
       if($username==''){
                echo "<script>";
                echo "alert('请先登录');";
                echo "location.href='/xiaoliangit/xiaolian-v0.1/index.php/Home/denglu/enter';";
                echo "</script>";
       }
       $dynamicResult=$dynamicModel->where("id='$id'")->select();
       $dname =$dynamicModel->where("id='$id'")->getField('username');
       $content =$dynamicModel->where("id='$id'")->getField('content');
       $check=$dianzanModel->where("username='$dname' and content='$content'")->count();
       // dump($check);exit;
        // dump($username);dump($dname);dump($content);exit;
      if($check>0){
                echo "<script>";
                echo "alert('该内容已点赞!');";
                echo "location.href='index.html';";
                echo "</script>";
              }else{

           
           $result=$dynamicModel->where("id='$id'")->setInc('scantime',1);
          
       if($result==1){
          $condition = array(
                    "username"=>$dname,
                    "dname"=>$username,
                    "content"=>$content                 
                );
          $dianzanModel->add($condition);
           // dump($condition);exit;
          $this->redirect("kankan/kankan");
       }else{
           $this->redirect("kankan/kankan");
       }
      
    }
              }
       
          
// else{
//       $this->error("id值为空",U("index/index"));
//     }
 
  }


}