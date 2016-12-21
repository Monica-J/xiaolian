<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>发表动态</title>
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
    <link rel="stylesheet" href="/xiaoliangit/xiaolian-v0.1/Public/front/css/jquery.mobile-1.4.5.min.css" />
    <script src="/xiaoliangit/xiaolian-v0.1/Public/front/js/jquery-2.2.2.js"></script>
    <!-- // <script src="/xiaoliangit/xiaolian-v0.1/Public/front/js/jquery.mobile-1.4.5.min.js"></script>  -->
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
       <form method="post" action="/xiaoliangit/xiaolian-v0.1/index.php/Home/mine/adddongtai" enctype="multipart/form-data">
        <div data-role="header" style="background-color:#6fd7ca; color:white;">
            <a href="mine.html"  onclick="location.href='/xiaoliangit/xiaolian-v0.1/index.php/Home/mine/mine'" data-icon="arrow-l" data-iconpos="notext"></a>
            <h1 style="font-weight:200">说说你想说的吧</h1>  
        </div>
        
        <div data-role="content">
           
                <div class="ui-field-contain">
                    <label for="textarea"></label>
                    <textarea cols="50" rows="5" id="textarea" name="content" >说点什么吧...100字以内哦</textarea>
                    
                    <!-- <input type="text"  id="mima" class="mima" name="content"  data-role="none" > -->
                </div>
          <!--   </form> -->
            
            <div style="width:300px;height:40px;">
                <form method="post" action="" id="open">
                    <br/>
                    <br/>
                    <br/>
                    <img src="/xiaoliangit/xiaolian-v0.1/Public/front/images/dongtai-pic.png" style="float:left; margin-top:-35px;">
                    <p style="margin-top:5px; color:#6fd7ca; font-size:13px; text-align:center;">（可以选择图片上传哦）</p>
                    <input type="file" name="pic" style=" position:absolute; left:100px;top:170px;" value="选取文件">
                </form>             
            </div>
            
            <br/>
            <br/>
            <br/>
            <input type="submit"  value="提交" style="background-color:#6fd7ca;">
           
    </div>
    <SCRIPT type="text/javascript">    
        function textdown(e) {
            textevent = e;
            if (textevent.keyCode == 8) {
                return;
            }
            if (document.getElementById('textarea').value.length >= 100) {
                alert("大侠，手下留情，此处限字100")
                if (!document.all) {
                    textevent.preventDefault();
                } else {
                    textevent.returnValue = false;
                }
            }
        }
        function textup() {
            var s = document.getElementById('textarea').value;
            //判断ID为text的文本区域字数是否超过100个 
            if (s.length > 100) {
                document.getElementById('textarea').value = s.substring(0, 100);
            }
        }
</SCRIPT>     
</body>
</html>