<?php if (!defined('THINK_PATH')) exit();?> <!DOCTYPE html> 
<html>
  <head>
	<title>注册界面</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="/xiaolian/xiaolian-v0.1/Public/front/css/dl-style.css">   
</head>
<body>
    <div data-role="page">
        <div data-role="content">
            <div data-role="controlgroup" data-type="vertical">
            <div style="text-align:center">
                <br/>
                <br/>
                <br/>
                <br/>
                <br/>
               
                <form action="upload_file.php" method="post" enctype="multipart/form-data" data-ajax="false">
                        <input  id="uploadimg" name="file"  type="file"  runat="server" method="post"
                                       enctype="multipart/form-data" data-inline="true"  data-ajax="false" />

            </div>
            </div>
             <div class="line1">
                <img src="/xiaolian/xiaolian-v0.1/Public/front/images/dl-zhanghao.png">
                <input type="text"  id="mima" class="mima" value="请输入您的用户名" onfocus="if(value=='请输入您的用户名') {value=''}" onblur="if (value=='') {value='请输入您的用户名'}" data-role="none">
            </div>

            <div class="line2">
                <img src="/xiaolian/xiaolian-v0.1/Public/front/images/mine-shezhi-sex.png">
                <input type="text"  id="zhanghao" class="zhanghao" value="性别" onfocus="if(value=='性别') {value=''}" onblur="if (value=='') {value='性别'}" data-role="none">
            </div>

            <div class="line3">
                <img src="/xiaolian/xiaolian-v0.1/Public/front/images/mine-shezhi-birth.png">
                <input type="text"  id="zhanghao" class="zhanghao" value="出生日期" onfocus="if(value=='出生日期') {value=''}" onblur="if (value=='') {value='出生日期'}" data-role="none">
            </div>   

            <div class="line4">
                <img src="/xiaolian/xiaolian-v0.1/Public/front/images/zc-phone.png">
                <input type="text"  id="zhanghao" class="zhanghao" value="请输入您的手机号" onfocus="if(value=='请输入您的手机号') {value=''}" onblur="if (value=='') {value='请输入您的手机号'}" data-role="none">
            </div>          

            <div class="line5">
                <img src="/xiaolian/xiaolian-v0.1/Public/front/images/dl-mima.png">
                <input type="text"  id="mima" class="mima" value="请输入您的密码" onfocus="if(value=='请输入您的密码') {value=''}" onblur="if (value=='') {value='请输入您的密码'}" data-role="none">
            </div>
            
            <br/>
           <div class="chose">                
                <a class="login" href="register1.html"data-ajax="false" data-role="none" data-transition="slide">注册</a>
            </div>

            <div data-role="fieldcontain">
                    <input type="checkbox" name="blue" id="effect1" class="custom"/> 
                    <label for="effect1" style="font-size:10px; margin-top:-10px;">注册后表示您同意校脸的<a href="#" style="color:#6fd7ca;">《使用协议》</a></label>         
            </div>
        </div>
    </div>
</body>
</html>