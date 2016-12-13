<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
<<<<<<< HEAD

    <!--<link rel="stylesheet" href="/xiaolian-git/xiaolian-v0.1/Public/front/css/jquery.mobile-1.4.5.min.css" />-->
	<script src="/xiaolian-git/xiaolian-v0.1/Public/front/js/jquery-2.2.2.js"></script>
    <script src="/xiaolian-git/xiaolian-v0.1/Public/front/js/jquery.mobile-1.4.5.min.js"></script>
    <script src="/xiaolian-git/xiaolian-v0.1/Public/front/js/iscroll-zoom.js"></script>
	<script src="/xiaolian-git/xiaolian-v0.1/Public/front/js/hammer.js"></script>
	<script src="/xiaolian-git/xiaolian-v0.1/Public/front/js/jquery.photoClip.js"></script>

=======
    <!--<link rel="stylesheet" href="/xiaolianV0.1/xiaolian-v0.1/Public/front/css/jquery.mobile-1.4.5.min.css" />-->
	<script src="/xiaolianV0.1/xiaolian-v0.1/Public/front/js/jquery-2.2.2.js"></script>
    <script src="/xiaolianV0.1/xiaolian-v0.1/Public/front/js/jquery.mobile-1.4.5.min.js"></script>
    <script src="/xiaolianV0.1/xiaolian-v0.1/Public/front/js/iscroll-zoom.js"></script>
	<script src="/xiaolianV0.1/xiaolian-v0.1/Public/front/js/hammer.js"></script>
	<script src="/xiaolianV0.1/xiaolian-v0.1/Public/front/js/jquery.photoClip.js"></script>
>>>>>>> 01b57ce9fa315e0ea71222318892f143ea1e8fb8
	<title>修改头像</title>
</head>
<body ontouchstart="">
	<div data-role="page">
<<<<<<< HEAD
		<div data-role="header" style="background-color:#6fd7ca; color:white;">

		
			<a href="/xiaolian-git/xiaolian-v0.1/index.php/Home/mine/shezhi.html" data-icon="arrow-l" data-iconpos="notext"></a>

			<h1 style="font-weight:200;">修改头像</h1>
		</div>
=======
>>>>>>> 01b57ce9fa315e0ea71222318892f143ea1e8fb8
		<div data-role="content">
			<a href=""></a>
			<article class="zzsc-container">
				<div id="clipArea" style="margin: 30px;	height: 200px;"></div>
				<input type="file" id="file" style="float:left; margin-top:0px;">
				<button id="clipBtn" style="float:right; margin-top:-2px;">截取</button>
				<div id="view" style="margin:70px 0 0 105px; width: 150px; height: 150px;"></div>
			</article>
			<br/>
			<h3 style="text-align:center;"><button>保存头像</button></h3>
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