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
</style>
  </head>

  <body>
	<div data-role="page">
		<div data-role="header" style="background-color:#6fd7ca;color:#fff;">
			<a href="/xiaolianV0.1/xiaolian-v0.1/index.php/Home/index/index.html" data-role="button" data-icon="arrow-l" data-iconpos="notext"></a>
			<h1 style="font-weight:200;">我叫李自由</h1>
		</div>
		<!--顶部信息-->
		<div class="user" style="height:200px; background:url(/xiaolianV0.1/xiaolian-v0.1/Public/front/images/mine-bg.png);" >
            <br/>
            <br/>
            <a href="#"><img src="/xiaolianV0.1/xiaolian-v0.1/Public/front/images/mine-user.png" style="clear: both; display: block; margin:auto;"></a>
            <p style="margin:4px 0 0 0; font-size:14px; text-align:center;">我叫李自由</p>
            <p style="font-size:10px; color:#7d8180; text-align: center;">没有谁是一座孤岛，在大海里独居。</p>
        </div>
		<!--具体信息-->
        <div data-role="content">
			<ul style="margin-left:40px;">
				<li style="list-style-image:url(/xiaolianV0.1/xiaolian-v0.1/Public/front/images/user-data-sex.png);">
					<p style="margin-bottom:-10px;font-size:16px;">性别</p>
					<img src="/xiaolianV0.1/xiaolian-v0.1/Public/front/images/longline.png" style="width:1500px;height:1px;margin-left:-150px;">
				</li>
				<li style="list-style-image:url(/xiaolianV0.1/xiaolian-v0.1/Public/front/images/user-data-birthday.png);">
					<p style="margin:10px 0 -10px 0;font-size:16px;">生日</p>
					<img src="/xiaolianV0.1/xiaolian-v0.1/Public/front/images/longline.png" style="width:1500px;height:1px;margin-left:-150px;">
				</li>
				<li style="list-style-image:url(/xiaolianV0.1/xiaolian-v0.1/Public/front/images/user-data-school.png);">
					<p style="margin:10px 0 -10px 0;font-size:16px;">大学</p>
					<img src="/xiaolianV0.1/xiaolian-v0.1/Public/front/images/longline.png" style="width:1500px;height:1px;margin-left:-150px;">
				</li>
			</ul>
			<button style="color:#fff; background-color:#6fd7ca; margin-top:50px; height:40px; padding-top:7px; font-weight:200; font-size:18px;">加关注</button>
		</div>
	</div>

  </body>


</html>