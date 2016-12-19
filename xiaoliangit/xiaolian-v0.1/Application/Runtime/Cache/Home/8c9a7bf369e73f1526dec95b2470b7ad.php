<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>好友</title>
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
    <link rel="stylesheet" href="/xiaoliangit/xiaolian-v0.1/Public/front/css/jquery.mobile-1.4.5.min.css" />
    <script src="/xiaoliangit/xiaolian-v0.1/Public/front/js/jquery-2.2.2.js"></script>
    <script src="/xiaoliangit/xiaolian-v0.1/Public/front/js/jquery.mobile-1.4.5.min.js"></script>
</head>
<body>
	<div data-role="page">
		<div data-role="header" style="background-color:#6fd7ca; color:white;">
			<a href="/xiaoliangit/xiaolian-v0.1/index.php/Home/mine/mine.html" data-icon="arrow-l" data-iconpos="notext"></a>
			<h1 style="font-weight:200;">好友</h1>			
		</div>
		<div data-role="content">
			<div>
			<?php if(is_array($friends)): $i = 0; $__LIST__ = $friends;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$f): $mod = ($i % 2 );++$i;?><a href="/xiaoliangit/xiaolian-v0.1/index.php/Home/mine/grzl/id/<?php echo ($f["id"]); ?>" onclick="location.href='/xiaoliangit/xiaolian-v0.1/index.php/Home/mine/grzl/id/<?php echo ($f["id"]); ?>'"><img src="<?php echo ($url); echo ($f["pic"]); ?>" width="50px" height="50px" style="margin:10px 0 0 0;border-radius:50%"></a>
				<p class="name" style="margin: -60px 0 0 80px; font-weight: bold;"><?php echo ($f["fname"]); ?></p>
				<p class="school" style="margin: 10px 0 0 80px; font-size: 14px;">来自<?php echo ($f["fschool"]); ?></p>
				<img src="/xiaoliangit/xiaolian-v0.1/Public/front/images/longline.png" style="margin:20px 0 0 -15px;"><?php endforeach; endif; else: echo "" ;endif; ?>
			</div>
			<!-- <div>
				<a href="/xiaoliangit/xiaolian-v0.1/index.php/Home/mine/grzl.html"><img src="/xiaoliangit/xiaolian-v0.1/Public/front/images/haoyou-user.png" style="margin:10px 0 0 0;"></a>
				<p class="name" style="margin: -60px 0 0 80px; font-weight: bold;">我叫李自由</p>
				<p class="school" style="margin: 10px 0 0 80px; font-size: 14px;">来自河北师范大学</p>
				<img src="/xiaoliangit/xiaolian-v0.1/Public/front/images/longline.png" style="margin:20px 0 0 -15px;">
			</div>
			<div>
				<a href="/xiaoliangit/xiaolian-v0.1/index.php/Home/mine/grzl.html"><img src="/xiaoliangit/xiaolian-v0.1/Public/front/images/haoyou-user.png" style="margin:10px 0 0 0;"></a>
				<p class="name" style="margin: -60px 0 0 80px; font-weight: bold;">我叫李自由</p>
				<p class="school" style="margin: 10px 0 0 80px; font-size: 14px;">来自河北师范大学</p>
				<img src="/xiaoliangit/xiaolian-v0.1/Public/front/images/longline.png" style="margin:20px 0 0 -15px;">
			</div>
			<div>
				<a href="/xiaoliangit/xiaolian-v0.1/index.php/Home/mine/grzl.html"><img src="/xiaoliangit/xiaolian-v0.1/Public/front/images/haoyou-user.png" style="margin:10px 0 0 0;"></a>
				<p class="name" style="margin: -60px 0 0 80px; font-weight: bold;">我叫李自由</p>
				<p class="school" style="margin: 10px 0 0 80px; font-size: 14px;">来自河北师范大学</p>
				<img src="/xiaoliangit/xiaolian-v0.1/Public/front/images/longline.png" style="margin:20px 0 0 -15px;">
			</div>
			<div>
				<a href="/xiaoliangit/xiaolian-v0.1/index.php/Home/mine/grzl.html"><img src="/xiaoliangit/xiaolian-v0.1/Public/front/images/haoyou-user.png" style="margin:10px 0 0 0;"></a>
				<p class="name" style="margin: -60px 0 0 80px; font-weight: bold;">我叫李自由</p>
				<p class="school" style="margin: 10px 0 0 80px; font-size: 14px;">来自河北师范大学</p>
				<img src="/xiaoliangit/xiaolian-v0.1/Public/front/images/longline.png" style="margin:20px 0 0 -15px;">
			</div>
			<div>
				<a href="/xiaoliangit/xiaolian-v0.1/index.php/Home/mine/grzl.html"><img src="/xiaoliangit/xiaolian-v0.1/Public/front/images/haoyou-user.png" style="margin:10px 0 0 0;"></a>
				<p class="name" style="margin: -60px 0 0 80px; font-weight: bold;">我叫李自由</p>
				<p class="school" style="margin: 10px 0 0 80px; font-size: 14px;">来自河北师范大学</p>
				<img src="/xiaoliangit/xiaolian-v0.1/Public/front/images/longline.png" style="margin:20px 0 0 -15px;">
			</div> -->
		</div>
	</div>
</body>
</html>