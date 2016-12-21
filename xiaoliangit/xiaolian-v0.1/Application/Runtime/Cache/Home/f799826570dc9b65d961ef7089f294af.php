<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="initial-scale=1.0, user-scalable=no, width=device-width">
      <title>足迹</title>
      <link rel="stylesheet" href="/xiaoliangit/xiaolian-v0.1/Public/front/css/jquery.mobile-1.4.5.min.css" />
      <link rel="stylesheet" href="http://cache.amap.com/lbs/static/main1119.css"/>
    
      <script src="/xiaoliangit/xiaolian-v0.1/Public/front/js/jquery-2.2.2.js"></script>
      <script src="/xiaoliangit/xiaolian-v0.1/Public/front/js/jquery.mobile-1.4.5.min.js"></script>
      <script type="text/javascript" src="http://webapi.amap.com/maps?v=1.3&key=1157f74e5a00352a7aaccfe6a879557c"></script>
      <script type="text/javascript" src="http://cache.amap.com/lbs/static/addToolbar.js"></script>

      <style type="text/css">
        #panel {
            position: absolute;
            background-color: white;
            max-height: 90%;
            overflow-y: auto;
            top: 10px;
            right: 10px;
            width: 280px;
        }
    </style>
  </head>

  <body>
    <div data-role="page"> 

        <div data-role="content"> 
            <div id='container'></div>
            <div id="panel"></div>
        </div>        
<script type="text/javascript">
    var map = new AMap.Map("container", {
        resizeEnable: true
    });
    AMap.service(["AMap.PlaceSearch"], function() {
        var placeSearch = new AMap.PlaceSearch({ //构造地点查询类
            pageSize: 1,
            city: "0311", //城市-石家庄
            map: map,
            panel: "panel"
        });
        //关键字查询
        placeSearch.search('河北科技大学｜河北师范大学');
    });
</script>
        <div data-role="footer" data-position="fixed"> 
            <div data-role="navbar">
              <ul>
                <li>
                    <a href="/xiaoliangit/xiaolian-v0.1/index.php/Home/index/index.html" onclick="location.href='/xiaoliangit/xiaolian-v0.1/index.php/Home/index/index.html'" style="background-color:#6fd7ca;">
                        <img src="/xiaoliangit/xiaolian-v0.1/Public/front/images/shouye.png" style="width:24px; height:24px;">
                        <p style="margin:1px 0px -5px 0px;color: #fff;font-size:12px;font-weight:100;font-family:'微软雅黑';">首页</p>
                    </a>
                </li>
                <li>
                    <a href="/xiaoliangit/xiaolian-v0.1/index.php/Home/task/task.html" onclick="location.href='/xiaoliangit/xiaolian-v0.1/index.php/Home/task/task.html'" style="background-color:#6fd7ca;">
                        <img src="/xiaoliangit/xiaolian-v0.1/Public/front/images/renwu.png" style="width:24px; height:24px;">
                        <p style="margin:1px 0px -5px 0px;color: #fff;font-size:12px;font-weight:100;font-family:'微软雅黑';">匹配任务</p>
                    </a>
                </li>
                <li>
                    <a href="/xiaoliangit/xiaolian-v0.1/index.php/Home/kankan/kankan.html" onclick="location.href='/xiaoliangit/xiaolian-v0.1/index.php/Home/kankan/kankan.html'" style="background-color:#6fd7ca;">
                        <img src="/xiaoliangit/xiaolian-v0.1/Public/front/images/kankan.png" style="width:24px; height:24px;">
                        <p style="margin:1px 0px -5px 0px;color: #fff;font-size:12px;font-weight:100;font-family:'微软雅黑';">看看</p>
                    </a>
                </li>
                <li>
                    <a href="/xiaoliangit/xiaolian-v0.1/index.php/Home/foot/foot.html" onclick="location.href='/xiaoliangit/xiaolian-v0.1/index.php/Home/foot/foot.html'" style="background-color:#6fd7ca;">
                        <img src="/xiaoliangit/xiaolian-v0.1/Public/front/images/zuji.png" style="width:24px; height:24px;">
                        <p style="margin:1px 0px -5px 0px;color: #fff;font-size:12px;font-weight:100;font-family:'微软雅黑';">足迹</p>
                    </a>
                </li>
                <li>
                    <a href="/xiaoliangit/xiaolian-v0.1/index.php/Home/mine/mine.html" onclick="location.href='/xiaoliangit/xiaolian-v0.1/index.php/Home/mine/mine.html'" style="background-color:#6fd7ca;">
                        <img src="/xiaoliangit/xiaolian-v0.1/Public/front/images/wode.png" style="width:24px; height:24px;">
                        <p style="margin:1px 0px -5px 0px;color: #fff;font-size:12px;font-weight:100;font-family:'微软雅黑';">我的</p>
                    </a>
                </li>
              </ul>
            </div>
        </div>
    </div>
    
  </body>  
</html>