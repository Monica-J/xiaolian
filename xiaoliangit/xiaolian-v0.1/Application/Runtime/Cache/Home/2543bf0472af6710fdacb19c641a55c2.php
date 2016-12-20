<?php if (!defined('THINK_PATH')) exit();?><DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>设置</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black"> 
    <link rel="stylesheet" href="/xiaoliangit/xiaolian-v0.1/Public/front/css/jquery.mobile-1.4.5.min.css" />
    <script src="/xiaoliangit/xiaolian-v0.1/Public/front/js/jquery-2.2.2.js"></script>
    <script src="/xiaoliangit/xiaolian-v0.1/Public/front/js/jquery.mobile-1.4.5.min.js"></script>
    <script src="/xiaoliangit/xiaolian-v0.1/Public/front/js/action-sheet.js"></script>
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
			<a href="/xiaoliangit/xiaolian-v0.1/index.php/Home/mine/mine.html"  onclick="location.href='/xiaoliangit/xiaolian-v0.1/index.php/Home/mine/mine'" data-icon="arrow-l" data-iconpos="notext"></a>
			<h1 style="font-weight:200;">完善个人资料</h1>
		</div>

		<div data-role="content" style="overflow-x:visible;">
			<div class="user" style="height:200px;">
                <!--实现点击头像或者相机可以更改头像-->
	            <div class="avatar"> 
	            <?php if(is_array($user)): $i = 0; $__LIST__ = $user;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$u): $mod = ($i % 2 );++$i;?><img src="<?php echo ($url); echo ($u["userpic"]); ?>"  width="90px" height="90px" style="margin:10px 0 0 0;border-radius:50%" style="clear:both; display: block; margin:auto;">
	                <a href=""><button type="button" id="open" style="background:url(/xiaoliangit/xiaolian-v0.1/Public/front/images/mine-shezhi-cam.png); width:10px; margin:-25px 0 0 200px; border:none;"></button></a>
	            </div>

	           <div class="infor">
	           
	            	<form method="post" action="/xiaoliangit/xiaolian-v0.1/index.php/Home/mine/xiugai" style="margin:50px 0 0 0;">						
						<div>
							
							<div class="ui-grid-a">
								<div class="ui-block-a">
									<img src="/xiaoliangit/xiaolian-v0.1/Public/front/images/mine-shezhi-uname.png" style="float:left; margin:14px 0 0 0;">
									<label for="username" style="margin:20px 90px 0 0px;" >用户名</label>
								</div>
								<div class="ui-block-b" style="margin:0px 0px 0 -60px;">
									<input type="text" name="username" id="username" value="<?php echo ($u["username"]); ?>">
								</div>
							</div>
							
							<div class="ui-grid-a">
								<div class="ui-block-a">
									<img src="/xiaoliangit/xiaolian-v0.1/Public/front/images/mine-shezhi-sex.png" style="float:left; margin:14px 0 0 0;">
									<label for="sex" style="margin:20px 107px 0 0px;">性别</label>
								</div>
								<div class="ui-block-b" style="margin:0px 0px 0 -60px;">
									<fieldset>
										<select name="gender" id="sex" style="heigth:80px;" value="<?php echo ($u["gender"]); ?>">
											<option value="男">男</option>
											<option value="女">女</option>
										</select>
									</fieldset>
								</div>								
							</div>
							
							<div class="ui-grid-a">
								<div class="ui-block-a">
									<img src="/xiaoliangit/xiaolian-v0.1/Public/front/images/mine-shezhi-birth.png" style="float:left; margin:14px 0 0 0;">
									<label for="birth" style="margin:20px 107px 0 0px;">生日</label>
								</div>
								<div class="ui-block-b" style="margin:0px 0px 0 -60px;">
									<input type="date" name="birthday" id="birth" value="<?php echo ($u["birthday"]); ?>">
								</div>
							</div>
							
							<div class="ui-grid-a">
								<div class="ui-block-a">
									<img src="/xiaoliangit/xiaolian-v0.1/Public/front/images/mine-shezhi-univer.png" style="float:left; margin:14px 0 0 0;">
									<label for="univer" style="margin:20px 107px 0 0px;">大学</label>
								</div>
								<div class="ui-block-b" style="margin:0px 0px 0 -60px;">
									<input type="text" name="school" id="univer" value="<?php echo ($u["school"]); ?>">
								</div>
							</div>
							
							<div class="ui-grid-a">
								<div class="ui-block-a">
									<img src="/xiaoliangit/xiaolian-v0.1/Public/front/images/mine-shezhi-gq.png" style="float:left; margin:14px 0 0 0;">
									<label for="gq" style="margin:20px 75px 0 0px;">个性签名</label>
								</div>
								<div class="ui-block-b" style="margin:0px 0px 0 -60px;">
									<input type="text" name="introduce" id="gq" value="<?php echo ($u["introduce"]); ?>">
								</div>
							</div>
							
							<input type="submit" data-inline="true" value="提交" class="submit">
							
						</div>
					</form>
					
	            </div><?php endforeach; endif; else: echo "" ;endif; ?>

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