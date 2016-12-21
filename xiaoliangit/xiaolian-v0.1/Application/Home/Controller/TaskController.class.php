<?php
namespace Home\Controller;
use Think\Controller;
class TaskController extends Controller {
    public function task(){
    	$username=session('username');
    	// dump($username);exit;
    	if($username==""){
                echo "<script>";
                echo "alert('请先登录');";
                echo "location.href='../denglu/enter.html';";
                echo "</script>";    		
    	}
       $this->display();
    }
   
}