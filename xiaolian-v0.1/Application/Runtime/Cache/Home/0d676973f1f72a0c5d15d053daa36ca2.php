<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>     
<html>     
<head>     
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>登陆</title>     
	<meta name="viewport" content="width=device-width, initial-scale=1">     
	<link rel="stylesheet" href="/xiaolian/xiaolian-v0.1/Public/front/css/jquery.mobile-1.4.5.min.css" />
    <script src="/xiaolian/xiaolian-v0.1/Public/front/js/jquery-2.2.2.js"></script>
    <script src="/xiaolian/xiaolian-v0.1/Public/front/js/jquery.mobile-1.4.5.min.js"></script>     
    <link rel="stylesheet" type="text/css" href="/xiaolian/xiaolian-v0.1/Public/front/css/dl-style.css">  
	<script>
	  function but_click()
	{
		var temp1=$("#zhanghao").val();
		if(temp1=="账号：")
		{
			alert("请输入账号！")
		}
		else
		{
			var zhanghao=temp1.substring(3,temp1.length);
			var temp2=$("#mima").val();
			if(temp2=="密码：")
			{
				alert("请输入密码！");
			}
			else
			{
				var mima=temp2.substring(3,temp2.length);
				alert("登录成功");
			}
		}
	}	
	</script>
</head>               
<body>
	<div data-role="page">
		<div data-role="content">
			<div data-role="controlgroup" data-type="vertical">
            <div style="text-align:center">
                <br/>
                <br/>
                <br/>
                <img src="/xiaolian/xiaolian-v0.1/Public/front/images/dl-avatar.png">
            </div>
            </div>
               
            <div class="line1">
                <img src="/xiaolian/xiaolian-v0.1/Public/front/images/dl-zhanghao.png">
                <input type="text"  id="zhanghao" class="zhanghao" value="账号" onfocus="if(value=='账号') {value=''}" onblur="if (value=='') {value='账号'}" data-role="none">
            </div>

            <div class="line2">
                <img src="/xiaolian/xiaolian-v0.1/Public/front/images/dl-mima.png">
                <input type="text"  id="mima" class="mima" value="密码" onfocus="if(value=='密码') {value=''}" onblur="if (value=='') {value='密码'}" data-role="none">
            </div>
            
          	<br/>
			<form action="#" method="post"> 			
				<a href="#" data-role="button" data-theme="b" id="login" onclick="but_click();" style="background:#6fd7ca; border:none;">登录</a>
			</form>
			<div data-role="fieldcontain">
            	<fieldset data-role="controlgroup">
                	<input type="checkbox" name="blue" id="effect1" class="custom"/> 
                	<label for="effect1" style="font-size:10px; margin-top:-10px;">我已阅读并同意<a href="#" style="color:#6fd7ca;">《服务条款》</a></label>         
            	</fieldset>
        	</div>
		</div>
        
        <div class="footer" data-position="fixed">
	        <div style="margin-bottom:150px;">
		        <a href="#" data-ajax="false"  style="float:left; color:#6fd7ca;">无法登录？</a>
		        <a href="register.html" data-ajax="false" style="float:right; color:#6fd7ca;">新用户注册</a>
	        </div>
        </div>
    </div>
</body>
</html>