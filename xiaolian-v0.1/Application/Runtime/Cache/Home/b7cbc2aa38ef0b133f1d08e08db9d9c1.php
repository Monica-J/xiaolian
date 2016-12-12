<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
 <head>
	<title>注册界面</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="/xiaolian/xiaolian-v0.1/Public/front/css/dl-style.css">   
    <link rel="stylesheet" href="/xiaolian/xiaolian-v0.1/Public/front/css/jquery.mobile-1.4.5.min.css" />
    <script src="/xiaolian/xiaolian-v0.1/Public/front/js/jquery-2.2.2.js"></script>
    <script src="/xiaolian/xiaolian-v0.1/Public/front/js/jquery.mobile-1.4.5.min.js"></script>
</head>
<body>
    <div data-role="page">
        <div data-role="controlgroup" data-type="vertical">
            <div style="text-align:center">
  
             <img src="/xiaolian/xiaolian-v0.1/Public/front/images/dl-avatar.png">
                <form action="upload_file.php" method="post" enctype="multipart/form-data" data-ajax="false">
                        <input  id="uploadimg" name="file"  type="file"  runat="server" method="post"
                                       enctype="multipart/form-data" data-inline="true"  data-ajax="false" />
            </div>
        </div>
        <div class="line1">
                <img src="/xiaolian/xiaolian-v0.1/Public/front/images/zc-phone.png">
                <input type="text" class="user" value="请输入您的手机号" onfocus="if(value=='请输入您的手机号') {value=''}" onblur="if (value=='') {value='请输入您的手机号'}" data-role="none">
        </div>
        <div class="line2">
                <img src="/xiaolian/xiaolian-v0.1/Public/front/images/dl-zhanghao.png">
                <input type="text" class="user" value="请输入您的用户名" onfocus="if(value=='请输入您的用户名') {value=''}" onblur="if (value=='') {value='请输入您的用户名'}" data-role="none">
        </div>
        <div class="line3">
                <img src="/xiaolian/xiaolian-v0.1/Public/front/images/dl-mima.png">
                <input type="text" class="lock" value="请输入您的密码" onfocus="if(value=='请输入您的密码') {value=''}" onblur="if (value=='') {value='请输入您的密码'}" data-role="none">
        </div>
        <div class="chose">
                <a class="register" data-role="none" ></a>
                <a class="forgive" data-role="none"></a>
                <a  href="register1.html" data-rel="dialog" data-ajax="false"  data-role="none" class="login" data-theme="b" style="background-color:#6fd7ca; border:none; ">注册</a>
        </div>
        <div data-role="fieldcontain">
            <fieldset data-role="controlgroup">
                <input type="checkbox" name="blue" id="effect1" class="custom" /> 
                <label for="effect1" style="font-size:10px;">注册后表示您同意校脸的<a href="#" style="color:#6fd7ca;">《使用协议》</a></label>         
            </fieldset>
        </div>
</body>
</html>