<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>提醒</title>
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
    <link rel="stylesheet" href="/Public/front/css/jquery.mobile-1.4.5.min.css" />
    <script src="/Public/front/js/jquery-2.2.2.js"></script>
    <script src="/Public/front/js/jquery.mobile-1.4.5.min.js"></script>
</head>
<body>
	<div data-role="page">
		<div data-role="header" style="background-color:#6fd7ca; color:white;">
			<a href="/index.php/Home/mine/mine.html" data-icon="arrow-l" data-iconpos="notext"></a>
			<h1 style="font-weight:200;">提醒</h1>
			<p style="font-size:12px; float:right; margin:-28px 5px 0 0; font-weight:200;" onclick="location.href='/index.php/Home/mine/clear'">忽略全部</p>			
		</div>
		<div data-role="content">
		<?php if(is_array($dianzan)): $i = 0; $__LIST__ = $dianzan;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$d): $mod = ($i % 2 );++$i;?><div>
				<img src="/Public/front/images/tixing-zan.png">
				<p style="margin:-34px 0 0 50px;">你被<?php echo ($d["dname"]); ?>赞了</p>
				<img src="/Public/front/images/longline.png" style="margin:20px 0 0 -15px;">
			</div><?php endforeach; endif; else: echo "" ;endif; ?>	
			<!-- <div>
				<img src="/Public/front/images/tixing-zan.png" style="margin:8px 0 0 0;">
				<p style="margin:-34px 0 0 50px;">你被李真心自由赞了</p>
				<img src="/Public/front/images/longline.png" style="margin:20px 0 0 -15px;">
			</div>
			<div>
				<img src="/Public/front/images/tixing-zan.png" style="margin:8px 0 0 0;">
				<p style="margin:-34px 0 0 50px;">你被李真心自由赞了</p>
				<img src="/Public/front/images/longline.png" style="margin:20px 0 0 -15px;">
			</div>
			<div>
				<img src="/Public/front/images/tixing-zan.png" style="margin:8px 0 0 0;">
				<p style="margin:-34px 0 0 50px;">你被李真心自由赞了</p>
				<img src="/Public/front/images/longline.png" style="margin:20px 0 0 -15px;">
			</div> -->
		</div>
	</div>
</body>
</html>