<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>校脸个人密码修改</title>
<link rel="stylesheet" href="/xiaolian/thinkphp_3.2.3/Public/end/css/bootstrap.css">
<link href="/xiaolian/thinkphp_3.2.3/Public/end/css/jquery-ui.css" rel="stylesheet">
<link href="/xiaolian/thinkphp_3.2.3/Public/end/css/mystyle.css" rel="stylesheet">
<script src="/xiaolian/thinkphp_3.2.3/Public/end/js/jquery.js"></script>    
<script src="/xiaolian/thinkphp_3.2.3/Public/end/js/bootstrap.min.js"></script>


</head>

<body>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
   
    <span class="navbar-logo" > 校脸</span>
   </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    
    
    <ul class="nav navbar-nav navbar-right mr">
      <li><a href="#" class="navbar-brand"><span class="glyphicon glyphicon-star"></span>欢迎：Administrator</a></li>
      <li><a href="#" class="navbar-brand"><span class="glyphicon glyphicon-log-out"></span>退出系统</a></li>
    </ul>
  </div><!-- /.navbar-collapse -->
</nav> 

  <div class="row">
      <div class=" col-md-2 sidebar">
        <div id="accordion">
          <h3><a href="#"><span class="glyphicon glyphicon-lock"></span>账户管理<span class="glyphicon glyphicon-chevron-down"></span></a></h3>
          <ul>
            <li  ><a href="/xiaolian/thinkphp_3.2.3/index.php/Admin/user/user_list.html">用户管理</a></li>
              <li  ><a href="/xiaolian/thinkphp_3.2.3/index.php/Admin/user/user_add.html">添加管理员</a></li>
            <li ><a href="/xiaolian/thinkphp_3.2.3/index.php/Admin/user/user_pass.html">修改个人密码</a></li>
            <li ><a href="/xiaolian/thinkphp_3.2.3/index.php/Admin/user/user_edit.html">修改个人信息</a></li>
          </ul>
          <h3><a href="#"><span class="glyphicon glyphicon-file"></span>任务管理<span class="glyphicon glyphicon-chevron-down"></span></a></h3>
          <ul>
            <li><a href="/xiaolian/thinkphp_3.2.3/index.php/Admin/task/task_add.html">添加任务</a></li>
            <li><a href="/xiaolian/thinkphp_3.2.3/index.php/Admin/task/task_list.html">推荐任务</a></li>
          </ul>
          <h3><a href="#"><span class="glyphicon glyphicon-book"></span>新闻管理<span class="glyphicon glyphicon-chevron-down"></span></a></h3>
          <ul>
            <li><a href="/xiaolian/thinkphp_3.2.3/index.php/Admin/news/news_add.html">添加新闻</a></li>
            <li><a href="/xiaolian/thinkphp_3.2.3/index.php/Admin/news/news_list.html">管理新闻</a></li>
          </ul>
          <h3><a href="#"><span class="glyphicon glyphicon-tags"></span>大学管理<span class="glyphicon glyphicon-chevron-down"></span></a></h3>
          <ul>
            <li ><a href="/xiaolian/thinkphp_3.2.3/index.php/Admin/school/school_add.html">添加大学</a></li>
            <li ><a href="/xiaolian/thinkphp_3.2.3/index.php/Admin/school/school_list.html">大学列表</a></li>
          </ul>
        </div>
      </div>
    	<div class="col-md-10 col-md-offset-2 ">
    	  <ol class="breadcrumb">
    	    <li><a href="#">首页</a></li>
    	    <li><a href="#">帐户管理</a></li>
    	    <li class="active">个人密码修改</li>
  	    </ol>
    	  <div class="table-responsive ">
    	    <h3>个人密码修改 <small>Password Modify</small></h3>
    	    <div class="list-group ">
    	      <div class="list-group-item">
    	        <form role="form" >
    	          <div class="input-group"> <span class="input-group-addon">用户名：</span>
    	            <input type="text" class="form-control" placeholder="" >
  	            </div>
    	          <div class="input-group "> <span class="input-group-addon" for="inputWarning1">真实姓名：</span>
    	            <input type="text" class="form-control" placeholder="" >
  	            </div>
    	          <div class="input-group"> <span class="input-group-addon">旧密码：</span>
    	            <input type="text" class="form-control" placeholder="">
  	            </div>
    	          <div class="input-group"> <span class="input-group-addon">新密码：</span>
    	            <input type="text" class="form-control" placeholder="">
  	            </div>
    	          <div class="input-group"> <span class="input-group-addon">确认新密码：</span>
    	            <input type="text" class="form-control" placeholder="" >
  	            </div>
    	          <div class="input-group">
    	            <button type="submit" class="btn btn-primary "> &nbsp;&nbsp;保<img src="/xiaolian/thinkphp_3.2.3/Public/end/images/em.png" alt="" width="20" height="20">存&nbsp;&nbsp;</button>
  	            </div>
  	          </form>
  	        </div>
  	      </div>
  	    </div>
  	  </div>
	</div>
        	
	
</div>
<script src="/xiaolian/thinkphp_3.2.3/Public/end/js/jquery-ui.js"></script>
<script>
$( "#accordion" ).accordion({
      heightStyle: "content"
    });
</script>
</body>
</html>