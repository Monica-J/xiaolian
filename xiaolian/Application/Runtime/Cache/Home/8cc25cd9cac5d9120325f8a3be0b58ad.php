<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>发表动态</title>
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <link rel="stylesheet" href="/Public/front/css/jquery.mobile-1.4.5.min.css" />
    <script src="/Public/front/js/jquery-2.2.2.js"></script>
    <!-- <script src="/Public/front/js/jquery.mobile-1.4.5.min.js"></script>  -->
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
       <form method="post" action="/index.php/Home/mine/adddongtai" enctype="multipart/form-data">
        <div data-role="header" style="background-color:#6fd7ca; color:white;">
            <br/>
            <p style="font-size:17px; font-family:'微软雅黑'; margin:-10px 0 0 -20px;">&nbsp;说说你想说的吧</p>
            <div style="margin:-25px 0 0 -320px;"><a href="mine.html" onclick="location.href='/index.php/Home/mine/mine'"><img src="/Public/front/images/dongtai-back.png"></a></div>  
        </div>
        
        <div data-role="content">
           
                <div class="ui-field-contain">
                    <label for="textarea"></label>
                    <br/>
                    <textarea cols="50" rows="5" id="textarea" name="content" style="width:300px;">说点什么吧...</textarea>
                    
                    <!-- <input type="text"  id="mima" class="mima" name="content"  data-role="none" > -->
                </div>
          <!--   </form> -->
            
            <div style="height:40px;">
                <form method="post" action="" id="open">
                    <br/>
                    <input type="file" name="pic" style="margin:0px 0 0 90px;" value="选取文件">
                    <img src="/Public/front/images/dongtai-pic.png" style="float:left; margin:-35px 0 0 30px;">
                    <p style="margin-top:5px; color:#6fd7ca; font-size:13px; text-align:center;">（可以选择图片上传哦）</p>
                </form>             
            </div>
            
            <br/>
            <br/>
            <br/>
            <input type="submit"  value="提交" style="background-color:#6fd7ca;">
           
    </div>
    
</body>
</html>