<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
var_dump($_POST); ?>
 <form method="post" enctype="multipart/form-data" action="/xiaoliangit/xiaolian-v0.1/index.php/Home/mine/adddynamic">
 	<input type="text" name="content" >
 	<input type="submit" value="提交" >
 </form>
</body>
</html>