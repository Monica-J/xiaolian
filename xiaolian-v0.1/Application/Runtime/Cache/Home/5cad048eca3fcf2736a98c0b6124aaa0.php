<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no, minimal-ui" />
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="format-detection" content="telephone=no, email=no" />
	<script src="/xiaolian-git/xiaolian-v0.1/Public/front/js/jquery-2.2.2.js"></script>
    <script src="/xiaolian-git/xiaolian-v0.1/Public/front/js/jquery.mobile-1.4.5.min.js"></script>
	<script src="/xiaolian-git/xiaolian-v0.1/Public/front/js/iscroll-zoom.js"></script>
	<script src="/xiaolian-git/xiaolian-v0.1/Public/front/js/hammer.js"></script>
	<script src="/xiaolian-git/xiaolian-v0.1/Public/front/js/jquery.photoClip.js"></script>
	<title>修改头像</title>
</head>
<body ontouchstart="">
	<div data-role="page">
		<div data-role="header" style="background-color:#6fd7ca; color:white;">
			<a href="/xiaolian-git/xiaolian-v0.1/index.php/Home/mine/shezhi.html" data-icon="arrow-l" data-iconpos="notext"></a>
			<h1 style="font-weight:200;">修改头像</h1>
		</div>
		<div data-role="content">
			<article class="zzsc-container">
				<div id="clipArea" style="margin: 30px;	height: 200px;"></div>
				<input type="file" id="file" style="float:left; margin-top:0px;">
				<button id="clipBtn" style="float:right; margin-top:-2px;">截取</button>
				<div id="view" style="margin:70px 0 0 105px; width: 150px; height: 150px;"></div>
			</article>
		</div>
	</div>
	<script>
		//document.addEventListener('touchmove', function (e) { e.preventDefault(); }, false);
		$("#clipArea").photoClip({
			width: 150,
			height: 150,
			file: "#file",
			view: "#view",
			ok: "#clipBtn",
			loadStart: function() {
				console.log("照片读取中");
			},
			loadComplete: function() {
				console.log("照片读取完成");
			},
			clipFinish: function(dataURL) {
				console.log(dataURL);
			}
		});
	</script>
</body>
</html>