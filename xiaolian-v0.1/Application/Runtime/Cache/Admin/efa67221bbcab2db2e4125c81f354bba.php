<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>校脸系统用户管理</title>
<<<<<<< HEAD
<link rel="stylesheet" href="/xiaolian-git/xiaolian-v0.1/Public/end/css/bootstrap.css">
<link href="/xiaolian-git/xiaolian-v0.1/Public/end/css/jquery-ui.css" rel="stylesheet">
<link href="/xiaolian-git/xiaolian-v0.1/Public/end/css/mystyle.css" rel="stylesheet">
<script src="/xiaolian-git/xiaolian-v0.1/Public/end/js/jquery.js"></script>    
<script src="/xiaolian-git/xiaolian-v0.1/Public/end/js/bootstrap.min.js"></script>
=======
<link rel="stylesheet" href="/xiaoliangit/xiaolian-v0.1/Public/end/css/bootstrap.css">
<link href="/xiaoliangit/xiaolian-v0.1/Public/end/css/jquery-ui.css" rel="stylesheet">
<link href="/xiaoliangit/xiaolian-v0.1/Public/end/css/mystyle.css" rel="stylesheet">
<script src="/xiaoliangit/xiaolian-v0.1/Public/end/js/jquery.js"></script>    
<script src="/xiaoliangit/xiaolian-v0.1/Public/end/js/bootstrap.min.js"></script>
>>>>>>> 8af6d6ad8e447244080793c9cc00d4754b9ff296


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
<<<<<<< HEAD
            <li  ><a href="/xiaolian-git/xiaolian-v0.1/index.php/Admin/user/user_list.html">用户管理</a></li>
              <!-- <li  ><a href="/xiaolian-git/xiaolian-v0.1/index.php/Admin/user/user_add.html">添加管理员</a></li>
            <li ><a href="/xiaolian-git/xiaolian-v0.1/index.php/Admin/user/user_pass.html">修改个人密码</a></li>
            <li ><a href="/xiaolian-git/xiaolian-v0.1/index.php/Admin/user/user_edit.html">修改个人信息</a></li> -->
          </ul>
          <h3><a href="#"><span class="glyphicon glyphicon-file"></span>任务管理<span class="glyphicon glyphicon-chevron-down"></span></a></h3>
          <ul>
            <li><a href="/xiaolian-git/xiaolian-v0.1/index.php/Admin/task/task_add.html">添加任务</a></li>
            <li><a href="/xiaolian-git/xiaolian-v0.1/index.php/Admin/task/task_list.html">推荐任务</a></li>
          </ul>
          <h3><a href="#"><span class="glyphicon glyphicon-book"></span>新闻管理<span class="glyphicon glyphicon-chevron-down"></span></a></h3>
          <ul>
            <li><a href="/xiaolian-git/xiaolian-v0.1/index.php/Admin/news/news_add.html">添加新闻</a></li>
            <li><a href="/xiaolian-git/xiaolian-v0.1/index.php/Admin/news/news_list.html">管理新闻</a></li>
          </ul>
          <h3><a href="#"><span class="glyphicon glyphicon-tags"></span>大学管理<span class="glyphicon glyphicon-chevron-down"></span></a></h3>
          <ul>
            <li ><a href="/xiaolian-git/xiaolian-v0.1/index.php/Admin/school/school_add.html">添加大学</a></li>
            <li ><a href="/xiaolian-git/xiaolian-v0.1/index.php/Admin/school/school_list.html">大学列表</a></li>
          </ul>
          <h3><a href="#"><span class="glyphicon glyphicon-star"></span>动态管理<span class="glyphicon glyphicon-chevron-down"></span></a></h3>
          <ul>
            <li><a href="/xiaolian-git/xiaolian-v0.1/index.php/Admin/news/dynamic_add.html">添加动态</a></li>
            <li><a href="/xiaolian-git/xiaolian-v0.1/index.php/Admin/news/dynamic_list.html">管理动态</a></li>
=======
            <li  ><a href="/xiaoliangit/xiaolian-v0.1/index.php/Admin/user/user_list.html">用户管理</a></li>
              <!-- <li  ><a href="/xiaoliangit/xiaolian-v0.1/index.php/Admin/user/user_add.html">添加管理员</a></li>
            <li ><a href="/xiaoliangit/xiaolian-v0.1/index.php/Admin/user/user_pass.html">修改个人密码</a></li>
            <li ><a href="/xiaoliangit/xiaolian-v0.1/index.php/Admin/user/user_edit.html">修改个人信息</a></li> -->
          </ul>
          <h3><a href="#"><span class="glyphicon glyphicon-file"></span>任务管理<span class="glyphicon glyphicon-chevron-down"></span></a></h3>
          <ul>
            <li><a href="/xiaoliangit/xiaolian-v0.1/index.php/Admin/task/task_add.html">添加任务</a></li>
            <li><a href="/xiaoliangit/xiaolian-v0.1/index.php/Admin/task/task_list.html">推荐任务</a></li>
          </ul>
          <h3><a href="#"><span class="glyphicon glyphicon-book"></span>新闻管理<span class="glyphicon glyphicon-chevron-down"></span></a></h3>
          <ul>
            <li><a href="/xiaoliangit/xiaolian-v0.1/index.php/Admin/news/news_add.html">添加新闻</a></li>
            <li><a href="/xiaoliangit/xiaolian-v0.1/index.php/Admin/news/news_list.html">管理新闻</a></li>
          </ul>
          <h3><a href="#"><span class="glyphicon glyphicon-tags"></span>大学管理<span class="glyphicon glyphicon-chevron-down"></span></a></h3>
          <ul>
            <li ><a href="/xiaoliangit/xiaolian-v0.1/index.php/Admin/school/school_add.html">添加大学</a></li>
            <li ><a href="/xiaoliangit/xiaolian-v0.1/index.php/Admin/school/school_list.html">大学列表</a></li>
>>>>>>> 8af6d6ad8e447244080793c9cc00d4754b9ff296
          </ul>
        </div>
      </div>
    	<div class="col-md-10 col-md-offset-2 ">
    	  <ol class="breadcrumb">
    	    <li><a href="#">首页</a></li>
    	    <li><a href="#">帐户管理</a></li>
    	    <li class="active">用户管理</li>
  	    </ol>
    	  <div class="table-responsive ">
    	    <h3>用户管理列表 <small>User List</small></h3>
    	    <table width="100%" border="0" cellspacing="0" cellpadding="0"  class="table  table-striped table-hover ">
    	      <tr>
              <th width="4%"><input type="checkbox" name="checkbox10" id="checkbox10"></th>
              <th width="13%">用户名</th>
              <th width="10%">真实姓名</th>
              <th width="13%">手机号</th>
              <th width="11%">邮箱</th>
              <th width="11%">注册时间</th>
              <th width="10%">审核状态</th>
              
            </tr>
    	      <?php if(is_array($users)): $i = 0; $__LIST__ = $users;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$u): $mod = ($i % 2 );++$i;?><tr>
              <td><input type="checkbox" name="checkbox" id="checkbox">
                <label for="checkbox"></label></td>
              <td><?php echo ($u["username"]); ?></td>
              <td><?php echo ($u["realname"]); ?></td>
              <td><?php echo ($u["tel"]); ?></td>
              <td><?php echo ($u["email"]); ?></td>
              <td><?php echo ($u["addtime"]); ?></td>

<<<<<<< HEAD
              <td><a href="/xiaolian-git/xiaolian-v0.1/index.php/Admin/User/user_edit/id/<?php echo ($u["id"]); ?>">修改</a><a href="#"></a> <a href="/xiaolian-git/xiaolian-v0.1/index.php/Admin/User/del/id/<?php echo ($u["id"]); ?>">删除</a></td>
=======
              <td><a href="/xiaoliangit/xiaolian-v0.1/index.php/Admin/User/user_edit/id/<?php echo ($u["id"]); ?>">修改</a><a href="#"></a> <a href="/xiaoliangit/xiaolian-v0.1/index.php/Admin/User/del/id/<?php echo ($u["id"]); ?>">删除</a></td>
>>>>>>> 8af6d6ad8e447244080793c9cc00d4754b9ff296
            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
  	      </table>
  	    </div>
    	  <div class="input-group pull-left form">
<<<<<<< HEAD
    	    <button type="submit" class="btn btn-danger "> <a href="/xiaolian-git/xiaolian-v0.1/index.php/Admin/User/del/id/<?php echo ($u["id"]); ?>" style="color:white"> 删除</a></button>
=======
    	    <button type="submit" class="btn btn-danger "> <a href="/xiaoliangit/xiaolian-v0.1/index.php/Admin/User/del/id/<?php echo ($u["id"]); ?>" style="color:white"> 删除</a></button>
>>>>>>> 8af6d6ad8e447244080793c9cc00d4754b9ff296
  	    </div>
    	  <ul class="pagination pull-right" >
    	    <li class="disabled"><a href="#">&laquo;</a></li>
    	    <li class="active"><a href="#">1</a></li>
    	    <li><a href="#">2</a></li>
    	    <li><a href="#">3</a></li>
    	    <li><a href="#">4</a></li>
    	    <li><a href="#">&raquo;</a></li>
  	    </ul>
  	  </div>
	</div>
        	
	
</div>
<<<<<<< HEAD
<script src="/xiaolian-git/xiaolian-v0.1/Public/end/js/jquery-ui.js"></script>
=======
<script src="/xiaoliangit/xiaolian-v0.1/Public/end/js/jquery-ui.js"></script>
>>>>>>> 8af6d6ad8e447244080793c9cc00d4754b9ff296
<script>
$( "#accordion" ).accordion({
      heightStyle: "content"
    });
</script>
</body>
</html>