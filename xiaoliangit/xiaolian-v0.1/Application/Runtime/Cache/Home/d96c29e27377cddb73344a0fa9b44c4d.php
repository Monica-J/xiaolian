<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
 <head>
	<title>注册界面</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="/xiaoliangit/xiaolian-v0.1/Public/front/css/dl-style.css">   
    <!-- <link rel="stylesheet" href="/xiaoliangit/xiaolian-v0.1/Public/front/css/jquery.mobile-1.4.5.min.css" /> -->
    <script src="/xiaoliangit/xiaolian-v0.1/Public/front/js/jquery-2.2.2.js"></script>
    <!-- <script src="/xiaoliangit/xiaolian-v0.1/Public/front/js/jquery.mobile-1.4.5.min.js"></script> -->
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
               
                <!-- <form action="upload_file.php" method="post" enctype="multipart/form-data" data-ajax="false"> -->
                       <!--  <input  id="uploadimg" name="file"  type="file"  runat="server" method="post"
                                       enctype="multipart/form-data" data-inline="true"  data-ajax="false" />
 -->
                <form action="" method="post" enctype="multipart/form-data"  >
                 <input type="file" name="userpic" class="form-control" >

            </div>
            </div>
               
            <div class="line1">
                <img src="/xiaoliangit/xiaolian-v0.1/Public/front/images/zc-phone.png">
                <input type="text"  id="zhanghao" class="zhanghao" name="tel" placeholder="手机号" data-role="none">
            </div>

            <div class="line2">
                <img src="/xiaoliangit/xiaolian-v0.1/Public/front/images/dl-zhanghao.png">
                <input type="text"  id="mima" class="mima" name="username" placeholder="用户名" data-role="none">
            </div>

            <div class="line3">
                <img src="/xiaoliangit/xiaolian-v0.1/Public/front/images/dl-mima.png">
                <input type="text"  id="mima" class="mima" name="password" placeholder="密码" data-role="none">
            </div>
            
            <br/>       
                <input type="submit"  data-role="button" data-theme="b" id="login" onclick="but_click();" style="background:#6fd7ca; border:none;" value="注册"/>   
                <!-- <a href="register1.html" data-role="button" data-theme="b" id="login" onclick="but_click();" style="background:#6fd7ca; border:none;">注册</a> -->
            </form>
            <div data-role="fieldcontain">
                <fieldset data-role="controlgroup">
                    <input type="checkbox" name="blue" id="effect1" class="custom"/ checked="checked"> 
                    <label for="effect1" style="font-size:10px; margin-top:-10px;">注册后表示您同意校脸的<a href="#" style="color:#6fd7ca;">《使用协议》</a></label>         
                </fieldset>
            </div>
        </div>
    </div>
</body>
</html>