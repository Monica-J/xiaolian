<?php if (!defined('THINK_PATH')) exit();?><DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>设置</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black"> 
    <link rel="stylesheet" href="css/jquery.mobile-1.4.5.min.css" />
<<<<<<< HEAD
    <script src="/xiaolianV0.1/xiaolian-v0.1/Public/front/js/jquery-2.2.2.js"></script>
    <script src="/xiaolianV0.1/xiaolian-v0.1/Public/front/js/jquery.mobile-1.4.5.min.js"></script>
    <script src="/xiaolianV0.1/xiaolian-v0.1/Public/front/js/action-sheet.js"></script>
=======
    <script src="/xiaolian-git/xiaolian-v0.1/Public/front/js/jquery-2.2.2.js"></script>
    <script src="/xiaolian-git/xiaolian-v0.1/Public/front/js/jquery.mobile-1.4.5.min.js"></script>
    <script src="/xiaolian-git/xiaolian-v0.1/Public/front/js/action-sheet.js"></script>
>>>>>>> 605cf8d45551c7c332b7cb95c5813a7eda74bc56
    <style>
        body{
            margin: 0;
            text-align: center;
        }

        button{
            margin: 100px auto;
            padding: 2em;
            border: 1px solid #CCC;
            border-radius: 5px;
            background: #FFF;
        }
    </style>
</head>
<body>
	<div data-role="page">
		
		<div data-role="header" style="background-color:#6fd7ca; color:white;">
<<<<<<< HEAD
			<a href="/xiaolianV0.1/xiaolian-v0.1/index.php/Home/mine/mine.html" data-icon="arrow-l" data-iconpos="notext"></a>
=======
			<a href="/xiaolian-git/xiaolian-v0.1/index.php/Home/mine/mine.html" data-icon="arrow-l" data-iconpos="notext"></a>
>>>>>>> 605cf8d45551c7c332b7cb95c5813a7eda74bc56
			<h1 style="font-weight:200;">完善个人资料</h1>
		</div>

		<div data-role="content" style="overflow-x:visible;">
			<div class="user" style="height:200px;">
                <!--实现点击头像或者相机可以更改头像-->
	            <div class="avatar">    
<<<<<<< HEAD
	                <img src="/xiaolianV0.1/xiaolian-v0.1/Public/front/images/mine-user.png" style="clear:both; display: block; margin:auto;">
	                <a href="/xiaolianV0.1/xiaolian-v0.1/index.php/Home/mine/avatar.html" onclick="location.href='/xiaolianV0.1/xiaolian-v0.1/index.php/Home/mine/avatar.html'"><button type="button" id="open" style="background:url(/xiaolianV0.1/xiaolian-v0.1/Public/front/images/mine-shezhi-cam.png); width:10px; margin:-25px 0 0 200px; border:none;"></button></a>
=======
	                <img src="/xiaolian-git/xiaolian-v0.1/Public/front/images/mine-user.png" style="clear:both; display: block; margin:auto;">
	                <a href="/xiaolian-git/xiaolian-v0.1/index.php/Home/mine/avatar.html" onclick="location.href='/xiaolian-git/xiaolian-v0.1/index.php/Home/mine/avatar.html'"><button type="button" id="open" style="background:url(/xiaolian-git/xiaolian-v0.1/Public/front/images/mine-shezhi-cam.png); width:10px; margin:-25px 0 0 200px; border:none;"></button></a>
>>>>>>> 605cf8d45551c7c332b7cb95c5813a7eda74bc56
	            </div>

	           <div class="infor">
	            	<form method="post" action="" style="margin:50px 0 0 0;">						
						<div>
							
							<div class="ui-grid-a">
								<div class="ui-block-a">
<<<<<<< HEAD
									<img src="/xiaolianV0.1/xiaolian-v0.1/Public/front/images/mine-shezhi-uname.png" style="float:left; margin:14px 0 0 0;">
=======
									<img src="/xiaolian-git/xiaolian-v0.1/Public/front/images/mine-shezhi-uname.png" style="float:left; margin:14px 0 0 0;">
>>>>>>> 605cf8d45551c7c332b7cb95c5813a7eda74bc56
									<label for="username" style="margin:20px 0px 0 35px;">用户名</label>
								</div>
								<div class="ui-block-b" style="margin:0px 0px 0 -60px;">
									<input type="text" name="username" id="username" >
								</div>
							</div>
							
							<div class="ui-grid-a">
								<div class="ui-block-a">
<<<<<<< HEAD
									<img src="/xiaolianV0.1/xiaolian-v0.1/Public/front/images/mine-shezhi-sex.png" style="float:left; margin:14px 0 0 0;">
=======
									<img src="/xiaolian-git/xiaolian-v0.1/Public/front/images/mine-shezhi-sex.png" style="float:left; margin:14px 0 0 0;">
>>>>>>> 605cf8d45551c7c332b7cb95c5813a7eda74bc56
									<label for="sex" style="margin:20px 0px 0 35px;">性别</label>
								</div>
								<div class="ui-block-b" style="margin:0px 0px 0 -60px;">
									<fieldset>
										<select name="sex" id="sex" style="heigth:80px;">
											<option value="boy">男</option>
											<option value="girl">女</option>
										</select>
									</fieldset>
								</div>								
							</div>
							
							<div class="ui-grid-a">
								<div class="ui-block-a">
<<<<<<< HEAD
									<img src="/xiaolianV0.1/xiaolian-v0.1/Public/front/images/mine-shezhi-birth.png" style="float:left; margin:14px 0 0 0;">
=======
									<img src="/xiaolian-git/xiaolian-v0.1/Public/front/images/mine-shezhi-birth.png" style="float:left; margin:14px 0 0 0;">
>>>>>>> 605cf8d45551c7c332b7cb95c5813a7eda74bc56
									<label for="birth" style="margin:20px 0px 0 35px;">生日</label>
								</div>
								<div class="ui-block-b" style="margin:0px 0px 0 -60px;">
									<input type="date" name="birth" id="birth" >
								</div>
							</div>
							
							<div class="ui-grid-a">
								<div class="ui-block-a">
<<<<<<< HEAD
									<img src="/xiaolianV0.1/xiaolian-v0.1/Public/front/images/mine-shezhi-univer.png" style="float:left; margin:14px 0 0 0;">
=======
									<img src="/xiaolian-git/xiaolian-v0.1/Public/front/images/mine-shezhi-univer.png" style="float:left; margin:14px 0 0 0;">
>>>>>>> 605cf8d45551c7c332b7cb95c5813a7eda74bc56
									<label for="univer" style="margin:20px 0px 0 35px;">大学</label>
								</div>
								<div class="ui-block-b" style="margin:0px 0px 0 -60px;">
									<input type="text" name="univer" id="univer" >
								</div>
							</div>
							
							<div class="ui-grid-a">
								<div class="ui-block-a">
<<<<<<< HEAD
									<img src="/xiaolianV0.1/xiaolian-v0.1/Public/front/images/mine-shezhi-gq.png" style="float:left; margin:14px 0 0 0;">
=======
									<img src="/xiaolian-git/xiaolian-v0.1/Public/front/images/mine-shezhi-gq.png" style="float:left; margin:14px 0 0 0;">
>>>>>>> 605cf8d45551c7c332b7cb95c5813a7eda74bc56
									<label for="gq" style="margin:20px 0px 0 35px;">个性签名</label>
								</div>
								<div class="ui-block-b" style="margin:0px 0px 0 -60px;">
									<input type="text" name="gq" id="gq">
								</div>
							</div>
							
							<input type="submit" data-inline="true" value="提交" class="submit">
							
						</div>
					</form>
	            </div> 

            </div>
		</div>

	</div>
<!--
	<script>
        var as = new ActionSheet({
            buttons: {
                '从相册选择图片': function(e){
                    
                    //if(!confirm('确定吗？')) return;

                    this.hide();
                },
                '拍照': 'http://www.baidu.com',
            }
        });

        document.getElementById('open').addEventListener('click', function(){
            as.show();
        });
    </script>
-->
</body>
</html>