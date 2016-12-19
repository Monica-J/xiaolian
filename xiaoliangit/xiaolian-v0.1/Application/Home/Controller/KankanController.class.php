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
        $currentuser=$dynamicModel->where("username!='$username'")->select();       
        $this->assign('dynamic',$currentuser);
        $url='http://'.$_SERVER['SERVER_NAME'];
        $this->assign("url",$url);
        // $id=$dynamicModel->getField('username');
        // dump($id);exit;
        $this->display();
	
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
    if($id!==''){
       $dynamicModel=M("dynamic");
       $dynamicResult=$dynamicModel->find($id);
       // dump($dynamicResult);exit;
       $id=(int)$id; 
       $scantime=$dynamicModel->getFieldById($id,'scantime');
       // dump($scantime);exit; 
       $result=$dynamicModel->where("id='$id'")->setInc('scantime',1);
        // dump($result);exit;
       if($result==1){
          $this->redirect("index/index");
       }else{
           dump("error");
       }
      
    }else{
      $this->error("id值为空",U("index/index"));
    }
    // $username=session('username');
    // $dynamicModel=M("dynamic");
    // // $dynamicResult=$dynamicModel->where("username!='$username'")->select();       
    // $this->assign('dynamic',$dynamicResult);
    // // dump($dynamicResult);exit;
    // $dynamicModel->where()->setInc('scantime',1); 
    // $this->display();

  }


}