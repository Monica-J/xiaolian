<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>     
<html>     
<head>     
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>登陆</title>     
	<meta name="viewport" content="width=device-width, initial-scale=1">     
	
    <script src="/xiaoliangit/xiaolian-v0.1/Public/front/js/jquery-2.2.2.js"></script>
  
    <link rel="stylesheet" type="text/css" href="/xiaoliangit/xiaolian-v0.1/Public/front/css/dl-style.css">  
	<script>
	  // function but_click()
	// {
	// 	var temp1=$("#zhanghao").val();
	// 	if(temp1=="账号：")
	// 	{
	// 		alert("请输入账号！")
	// 	}
	// 	else
	// 	{
	// 		var zhanghao=temp1.substring(3,temp1.length);
	// 		var temp2=$("#mima").val();
	// 		if(temp2=="密码：")
	// 		{
	// 			alert("请输入密码！");
	// 		}
	// 		else
	// 		{
	// 			var mima=temp2.substring(3,temp2.length);
	// 			alert("登录成功");
	// 		}
	// 	}
	// alert("登录成功");
	// location.href='/xiaoliangit/xiaolian-v0.1/index.php/Home/index/index'
	// }	
	
	// </script>
</head>               
<body>
	<div data-role="page">
		<div data-role="content">
			<div data-role="controlgroup" data-type="vertical">
            <div style="text-align:center">
                <br/>
                <br/>
                <br/>
                <img src="/xiaoliangit/xiaolian-v0.1/Public/front/images/dl-avatar.png">
            </div>
            </div>
              <form action="#" method="post">  
            <div class="line1">
                <img src="/xiaoliangit/xiaolian-v0.1/Public/front/images/dl-zhanghao.png">
                <input type="text"  class="zhanghao" placeholder="账号" name="username" data-role="none">
            </div>

            <div class="line2">
                <img src="/xiaoliangit/xiaolian-v0.1/Public/front/images/dl-mima.png">
                <input type="text"  class="mima" placeholder="密码" name="password" data-role="none">
            </div>
            
          	<br/>
						
				<!-- <a href="#" data-role="button" data-theme="b" id="login" onclick="but_click();" style="background:#6fd7ca; border:none;">登录</a> -->
				<button type="submit" class="btn btn-primary " style="background:#6fd7ca; border:none;color:white" > &nbsp;&nbsp;登&nbsp;&nbsp;录&nbsp;&nbsp;</button>
			
			<div data-role="fieldcontain">
            	<fieldset data-role="controlgroup">
                	<input type="checkbox" name="blue" id="effect1" class="custom"/ checked="checked"> 
                	<label for="effect1" style="font-size:10px; margin-top:-10px;">我已阅读并同意<a href="#" style="color:#6fd7ca;">《服务条款》</a></label>         
            	</fieldset>
        	</div>
		</div>
        </form>
        <div class="footer" data-position="fixed">
	        <div style="margin-bottom:150px;">
		        
		        <a href="register.html" data-ajax="false" style="float:right; color:#6fd7ca;">新用户注册</a>
	        </div>
        </div>
    </div>
</body>
</html>