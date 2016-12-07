<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
	<meta charset="utf-8" />
    <title>校客推荐-校客信息</title>
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <link rel="stylesheet" href="/xiaolianV0.1/xiaolian-v0.1/Public/front/css/jquery.mobile-1.4.5.min.css" />
    <script src="/xiaolianV0.1/xiaolian-v0.1/Public/front/js/jquery-2.2.2.js"></script>
    <script src="/xiaolianV0.1/xiaolian-v0.1/Public/front/js/jquery.mobile-1.4.5.min.js"></script>

<style type="text/css">
	*{margin:0;padding:0;list-style:none;border:0;}
	p{font-weight:200;}
	.panel-1 img{clear:both; display:block; margin:auto;}
	.panel-1 p{text-align:center;}
</style>
  </head>

<body>
	<div data-role="page">
		<div data-role="header" style="background-color:#6fd7ca;color:#fff;">
			<a href="/xiaolianV0.1/xiaolian-v0.1/index.php/Home/index/index.html" data-role="button" data-icon="arrow-l" data-iconpos="notext"></a>
			<h1 style="font-weight:200;">李真心自由的资料</h1>

		</div>

		<div data-role="content" style="background:url(/xiaolianV0.1/xiaolian-v0.1/Public/front/images/user-data-bg.png);">
			<div class="panel-1">
				<img src="/xiaolianV0.1/xiaolian-v0.1/Public/front/images/mine-user.png">
				<p style="margin-top:10px;">我叫李自由</p>
				<p style="color:#8E8E8E;font-size:12px;margin-top:5px;">没有谁是一座孤岛，在大海里独居</p>
			</div>
		</div>
        <div data-role="content" style="margin-top: -18px;">
        	<div class="panel-2">
				<ul>
					<li><img src="/xiaolianV0.1/xiaolian-v0.1/Public/front/images/user-data-sex.png">性别</li>
					<li><img src="/xiaolianV0.1/xiaolian-v0.1/Public/front/images/user-data-birthday.png">生日</li>
					<li><img src="/xiaolianV0.1/xiaolian-v0.1/Public/front/images/user-data-school.png">大学</li>
				</ul>
			</div>
		</div>        	
		<div data-role="footer" data-position="fixed">
			
		</div>
	</div>

</body>


</html>