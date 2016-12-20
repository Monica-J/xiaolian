<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>发表动态</title>
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black"> 
<<<<<<< HEAD
<<<<<<< HEAD
    <link rel="stylesheet" href="/xiaolian/xiaolian-v0.1/Public/front/css/jquery.mobile-1.4.5.min.css" />
    <script src="/xiaolian/xiaolian-v0.1/Public/front/js/jquery-2.2.2.js"></script>
    <script src="/xiaolian/xiaolian-v0.1/Public/front/js/jquery.mobile-1.4.5.min.js"></script> 
     <script src="/xiaolian/xiaolian-v0.1/Public/front/js/action-sheet.js"></script> 
=======
    <link rel="stylesheet" href="/xiaolianV0.1/xiaolian-v0.1/Public/front/css/jquery.mobile-1.4.5.min.css" />
    <script src="/xiaolianV0.1/xiaolian-v0.1/Public/front/js/jquery-2.2.2.js"></script>
    <script src="/xiaolianV0.1/xiaolian-v0.1/Public/front/js/jquery.mobile-1.4.5.min.js"></script> 
     <script src="/xiaolianV0.1/xiaolian-v0.1/Public/front/js/action-sheet.js"></script> 
>>>>>>> b97616b8f36e0ed1bc87c2648e5395d0fc655134
=======
    <link rel="stylesheet" href="/xiaolian-git/xiaolian-v0.1/Public/front/css/jquery.mobile-1.4.5.min.css" />
    <script src="/xiaolian-git/xiaolian-v0.1/Public/front/js/jquery-2.2.2.js"></script>
    <script src="/xiaolian-git/xiaolian-v0.1/Public/front/js/jquery.mobile-1.4.5.min.js"></script> 
     <script src="/xiaolian-git/xiaolian-v0.1/Public/front/js/action-sheet.js"></script> 
>>>>>>> 8630cda394b621ceff84fa35cb1dfdf74c31f2bf
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
<<<<<<< HEAD
            <a href="/xiaolian/xiaolian-v0.1/index.php/Home/mine/mine.html"  onclick="location.href='/xiaolian/xiaolian-v0.1/index.php/Home/mine/mine.html'" data-icon="arrow-l" data-iconpos="notext"></a>
=======
            <a href="/xiaolianV0.1/xiaolian-v0.1/index.php/Home/mine/mine.html"  onclick="location.href='/xiaolianV0.1/xiaolian-v0.1/index.php/Home/mine/mine.html'" data-icon="arrow-l" data-iconpos="notext"></a>
>>>>>>> b97616b8f36e0ed1bc87c2648e5395d0fc655134
=======
            <a href="/xiaolian-git/xiaolian-v0.1/index.php/Home/mine/mine.html"  onclick="location.href='/xiaolian-git/xiaolian-v0.1/index.php/Home/mine/mine.html'" data-icon="arrow-l" data-iconpos="notext"></a>
>>>>>>> 8630cda394b621ceff84fa35cb1dfdf74c31f2bf
            <h1 style="font-weight:200">说说你想说的吧</h1>  
            <a href="">发表</a>          
        </div>
        <div data-role="content">
            <form method="post" action="demo_form.php">
				<div class="ui-field-contain">
					<label for="info"></label>
					<textarea cols="40" rows="8" name="addinfo" id="info" >
					说点什么吧……
					</textarea>
				</div>
			</form>
			<br>
 			<!--实现点击头像或者相机可以更改头像-->
 			<div style="width:90px">
 				<form method="post" action="demoform.asp" id="open">
<<<<<<< HEAD
<<<<<<< HEAD
                	<img src="/xiaolian/xiaolian-v0.1/Public/front/images/mine-shezhi-cam.png"  height=40px>
=======
                	<img src="/xiaolianV0.1/xiaolian-v0.1/Public/front/images/mine-shezhi-cam.png"  height=40px>
>>>>>>> b97616b8f36e0ed1bc87c2648e5395d0fc655134
=======
                	<img src="/xiaolian-git/xiaolian-v0.1/Public/front/images/mine-shezhi-cam.png"  height=40px>
>>>>>>> 8630cda394b621ceff84fa35cb1dfdf74c31f2bf
             
                </form>
 			</div>
	      	<hr>
	     
	      	<a href="#" data-role="button">显示地点</a>
        	<div data-role="fieldcontain" >
	            <label for="select-choice-1" class="select">谁能看见</label>
	            <select data-native-menu="false" name="select-choice-2" id="select-choice-2">
	                <option value="12h">所有人</option>
	                <option value="1d">仅自己</option>
	                <option value="2d">好友</option>
	                
	            </select>	
        	</div>
	      	
    </div> 
    <script>
        var as = new ActionSheet({
            buttons: {
            	// '从相册选择图片'：<input type="file" accept="image/*;capture=camera"
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
</body>
</html>