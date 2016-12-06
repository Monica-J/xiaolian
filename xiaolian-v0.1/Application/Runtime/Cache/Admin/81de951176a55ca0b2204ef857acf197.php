<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>校脸系统用户管理</title>
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
        </div>
      </div>
    	<div class="col-md-10 col-md-offset-2 ">
        <ol class="breadcrumb">
          <li><a href="/xiaoliangit/xiaolian-v0.1/index.php/Admin">首页</a></li>
          <li><a href="/xiaoliangit/xiaolian-v0.1/index.php/Admin/News/lists">新闻管理</a></li>
          <li class="active">修改新闻</li>
        </ol>
        <h3 class="down">修改新闻 <small>News Edit</small></h3>
        <div class="list-group form">
          <form enctype="multipart/form-data" class="form-horizontal" role="form" method="post" >
            <input type="hidden" name="ID" value="<?php echo ($news["id"]); ?>" />
            <div class="list-group-item">
              <label for="inputEmail3" class="col-sm-2 control-label">新闻标题</label>
              <div class="col-sm-10">
                <input type="input" name="title" class="form-control" id="inputEmail3" placeholder="" value="<?php echo ($news["title"]); ?>">
              </div>
            </div>
            <div class="list-group-item">
              <label for="inputEmail3" class="col-sm-2 control-label">发布时间</label>
              <div class="col-sm-10"><input type="input" name="posttime" class="form-control" id="inputEmail3" value="<?php echo date('Y-m-d  H:i');?>" ></div>
            </div>
           
            <div class="list-group-item">
              <label for="inputEmail3" class="col-sm-2 control-label">发布人/作者</label>
              <div class="col-sm-10">
                <input type="input" name="author" class="form-control" id="inputEmail3" placeholder="张明亮" value="<?php echo ($news["author"]); ?>">
              </div>
            </div>
           
          
            <div class="list-group-item">
               <label for="inputEmail3" class="col-sm-2 control-label">内容</label>
              <div class="col-sm-10">
                
                <textarea id="editor_id" name="content" style="width:90%;height:300px;">
<?php echo ($news["content"]); ?></textarea>
              </div>
            </div>
            <div class="list-group-item">
              <div class="col-sm-offset-2 col-sm-5">
              <div class="row">
              <div class=" col-sm-5">
                <input type="submit" name="submit" class="btn btn-primary" value="保 存 新 闻">
              </div>
              <div class=" col-sm-5">
                <button type="submit" class="btn btn-warning">重 置 内 容</button>
              </div>
              </div>
              </div>
            </div>
          </form>
        </div>
      </div>
  </div>
          
  
</div>

<script charset="utf-8" src="/xiaoliangit/xiaolian-v0.1/Public/end/js/editor/kindeditor.js"></script>
<script charset="utf-8" src="/xiaoliangit/xiaolian-v0.1/Public/end/js/editor/lang/zh_CN.js"></script>
<script>
        KindEditor.ready(function(K) {
                window.editor = K.create('#editor_id');
        });
</script>
<script src="/xiaoliangit/xiaolian-v0.1/Public/end/js/jquery-ui.js"></script>
<script>
$( "#accordion" ).accordion({
      heightStyle: "content"
    });
</script>
</body>
</html>