<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>校脸系统动态管理</title>
<link rel="stylesheet" href="/xiaoliangit/xiaolian-v0.1/Public/end/css/bootstrap.css">
<link href="/xiaoliangit/xiaolian-v0.1/Public/end/css/jquery-ui.css" rel="stylesheet">
<link href="/xiaoliangit/xiaolian-v0.1/Public/end/css/mystyle.css" rel="stylesheet">
<script src="/xiaoliangit/xiaolian-v0.1/Public/end/js/jquery.js"></script>    
<script src="/xiaoliangit/xiaolian-v0.1/Public/end/js/bootstrap.min.js"></script>


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
          </ul>
          <h3><a href="#"><span class="glyphicon glyphicon-star"></span>动态管理<span class="glyphicon glyphicon-chevron-down"></span></a></h3>
          <ul>
            <li><a href="/xiaoliangit/xiaolian-v0.1/index.php/Admin/dynamic/dynamic_add.html">添加动态</a></li>
            <li><a href="/xiaoliangit/xiaolian-v0.1/index.php/Admin/dynamic/dynamic_list.html">管理动态</a></li>
          </ul>
        </div>
      </div>
    	<div class="col-md-10 col-md-offset-2 ">
    	  <ol class="breadcrumb">
    	    <li><a href="#">首页</a></li>
    	    <li><a href="#">新闻管理</a></li>
    	    <li class="active">新闻管理列表</li>
  	    </ol>
    	  <div class="table-responsive ">
    	    <h3>新闻管理列表 <small>News List</small></h3>
    	    <table width="100%" border="0" cellspacing="0" cellpadding="0"  class="table  table-striped table-hover ">
    	      <tr>
    	        <th width="5%"><input type="checkbox" name="checkbox10" id="checkbox10"></th>
    	        <th width="59%">用户名</th>
    	        <th width="20%">添加时间</th>
    	        <th width="21%">操作</th>
  	        </tr>
    	      <?php if(is_array($news)): $i = 0; $__LIST__ = $news;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$d): $mod = ($i % 2 );++$i;?><tr>
              <td><input type="checkbox" name="checkbox" id="checkbox"><label for="checkbox"></label></td>
              <td><?php echo ($d["title"]); ?></td>
              <td><?php echo ($d["author"]); ?></td>
              <td><?php echo ($d["posttime"]); ?></td>
              <td><?php echo ($d["scantime"]); ?></td>
              <td><a href="/xiaoliangit/xiaolian-v0.1/index.php/Admin/News/news_edit/id/<?php echo ($d["id"]); ?>">修改</a><a href="#"></a> <a href="/xiaoliangit/xiaolian-v0.1/index.php/Admin/News/del/id/<?php echo ($d["id"]); ?>">删除</a></td>
            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
  	      </table>
  	    </div>
    	  <div class="input-group pull-left form">
    	    <button type="submit" class="btn btn-danger "> <a href="/xiaoliangit/xiaolian-v0.1/index.php/Admin/news/del/id/<?php echo ($u["id"]); ?>" style="color:white"> 删除</a></button>
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
<script src="/xiaoliangit/xiaolian-v0.1/Public/end/js/jquery-ui.js"></script>
<script>
$( "#accordion" ).accordion({
      heightStyle: "content"
    });
</script>
</body>
</html>