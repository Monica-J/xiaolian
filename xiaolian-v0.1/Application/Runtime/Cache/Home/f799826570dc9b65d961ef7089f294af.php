<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="initial-scale=1.0, user-scalable=no, width=device-width">
      <title>足迹</title>
      <link rel="stylesheet" href="http://cache.amap.com/lbs/static/main1119.css"/>
<<<<<<< HEAD
      <link rel="stylesheet" href="/xiaolian/xiaolian-v0.1/Public/front/css/jquery.mobile-1.4.5.min.css" />
      <link rel="stylesheet" href="http://cache.amap.com/lbs/static/main1119.css"/>
    
      <script src="/xiaolian/xiaolian-v0.1/Public/front/js/jquery-2.2.2.js"></script>
      <script src="/xiaolian/xiaolian-v0.1/Public/front/js/jquery.mobile-1.4.5.min.js"></script>
=======
      <link rel="stylesheet" href="/xiaolian-git/xiaolian-v0.1/Public/front/css/jquery.mobile-1.4.5.min.css" />
      <link rel="stylesheet" href="http://cache.amap.com/lbs/static/main1119.css"/>
    
      <script src="/xiaolian-git/xiaolian-v0.1/Public/front/js/jquery-2.2.2.js"></script>
      <script src="/xiaolian-git/xiaolian-v0.1/Public/front/js/jquery.mobile-1.4.5.min.js"></script>
>>>>>>> a395b3bdc5e799d223ae44c46677b2bb66dec3fd
      <script type="text/javascript" src="http://webapi.amap.com/maps?v=1.3&key=00128980e7295d01238e56ed1e839e92"></script>
      <script type="text/javascript" src="http://cache.amap.com/lbs/static/addToolbar.js"></script>
  </head>


  <body>
    <div data-role="page"> 

        <div data-role="content"> 
            <div id='container'></div>
            <div id="tip"></div>
        </div>        
<script type="text/javascript">
    var map, geolocation;
    //加载地图，调用浏览器定位服务
    map = new AMap.Map('container', {
        resizeEnable: true
    });
    map.plugin('AMap.Geolocation', function() {
        geolocation = new AMap.Geolocation({
            enableHighAccuracy: true,//是否使用高精度定位，默认:true
            timeout: 10000,          //超过10秒后停止定位，默认：无穷大
            buttonOffset: new AMap.Pixel(10, 20),//定位按钮与设置的停靠位置的偏移量，默认：Pixel(10, 20)
            zoomToAccuracy: true,      //定位成功后调整地图视野范围使定位位置及精度范围视野内可见，默认：false
            buttonPosition:'RB'
        });
        map.addControl(geolocation);
        geolocation.getCurrentPosition();
        AMap.event.addListener(geolocation, 'complete', onComplete);//返回定位信息
        AMap.event.addListener(geolocation, 'error', onError);      //返回定位出错信息
    });
    //解析定位结果
    function onComplete(data) {
        var str=['定位成功'];
        str.push('经度：' + data.position.getLng());
        str.push('纬度：' + data.position.getLat());
        //str.push('精度：' + data.accuracy + ' 米');
        //str.push('是否经过偏移：' + (data.isConverted ? '是' : '否'));
        document.getElementById('tip').innerHTML = str.join('<br>');
    }
    //解析定位错误信息
    function onError(data) {
        document.getElementById('tip').innerHTML = '定位失败';
    }
</script>
        <div data-role="footer" data-position="fixed"> 
            <div data-role="navbar">
              <ul>
                <li>
<<<<<<< HEAD
                    <a href="/xiaolian/xiaolian-v0.1/index.php/Home/index/index.html" onclick="location.href='/xiaolian/xiaolian-v0.1/index.php/Home/index/index.html'"  style="background-color:#6fd7ca;">
                        <img src="/xiaolian/xiaolian-v0.1/Public/front/images/shouye.png" style="width:24px; height:24px;">
=======
                    <a href="/xiaolian-git/xiaolian-v0.1/index.php/Home/index/index.html" onclick="location.href='/xiaolian-git/xiaolian-v0.1/index.php/Home/index/index.html'"  style="background-color:#6fd7ca;">
                        <img src="/xiaolian-git/xiaolian-v0.1/Public/front/images/shouye.png" style="width:24px; height:24px;">
>>>>>>> a395b3bdc5e799d223ae44c46677b2bb66dec3fd
                        <p style="margin:1px 0px -5px 0px;color: #fff;font-size:12px;font-weight:100;font-family:'微软雅黑';">首页</p>
                    </a>
                </li>
                <li>
<<<<<<< HEAD
                    <a href="/xiaolian/xiaolian-v0.1/index.php/Home/task/task.html" onclick="location.href='/xiaolian/xiaolian-v0.1/index.php/Home/task/task.html'" style="background-color:#6fd7ca;">
                        <img src="/xiaolian/xiaolian-v0.1/Public/front/images/renwu.png" style="width:24px; height:24px;">
=======
                    <a href="/xiaolian-git/xiaolian-v0.1/index.php/Home/task/task.html" onclick="location.href='/xiaolian-git/xiaolian-v0.1/index.php/Home/task/task.html'" style="background-color:#6fd7ca;">
                        <img src="/xiaolian-git/xiaolian-v0.1/Public/front/images/renwu.png" style="width:24px; height:24px;">
>>>>>>> a395b3bdc5e799d223ae44c46677b2bb66dec3fd
                        <p style="margin:1px 0px -5px 0px;color: #fff;font-size:12px;font-weight:100;font-family:'微软雅黑';">匹配任务</p>
                    </a>
                </li>
                <li>
<<<<<<< HEAD
                    <a href="/xiaolian/xiaolian-v0.1/index.php/Home/kankan/kankan.html" onclick="location.href='/xiaolian/xiaolian-v0.1/index.php/Home/kankan/kankan.html'" style="background-color:#6fd7ca;">
                        <img src="/xiaolian/xiaolian-v0.1/Public/front/images/kankan.png" style="width:24px; height:24px;">
=======
                    <a href="/xiaolian-git/xiaolian-v0.1/index.php/Home/kankan/kankan.html" onclick="location.href='/xiaolian-git/xiaolian-v0.1/index.php/Home/kankan/kankan.html'" style="background-color:#6fd7ca;">
                        <img src="/xiaolian-git/xiaolian-v0.1/Public/front/images/kankan.png" style="width:24px; height:24px;">
>>>>>>> a395b3bdc5e799d223ae44c46677b2bb66dec3fd
                        <p style="margin:1px 0px -5px 0px;color: #fff;font-size:12px;font-weight:100;font-family:'微软雅黑';">看看</p>
                    </a>
                </li>
                <li>
<<<<<<< HEAD
                    <a href="/xiaolian/xiaolian-v0.1/index.php/Home/foot/foot.html" onclick="location.href='/xiaolian/xiaolian-v0.1/index.php/Home/foot/foot.html'" style="background-color:#6fd7ca;">
                        <img src="/xiaolian/xiaolian-v0.1/Public/front/images/zuji.png" style="width:24px; height:24px;">
=======
                    <a href="/xiaolian-git/xiaolian-v0.1/index.php/Home/foot/foot.html" onclick="location.href='/xiaolian-git/xiaolian-v0.1/index.php/Home/foot/foot.html'" style="background-color:#6fd7ca;">
                        <img src="/xiaolian-git/xiaolian-v0.1/Public/front/images/zuji.png" style="width:24px; height:24px;">
>>>>>>> a395b3bdc5e799d223ae44c46677b2bb66dec3fd
                        <p style="margin:1px 0px -5px 0px;color: #fff;font-size:12px;font-weight:100;font-family:'微软雅黑';">足迹</p>
                    </a>
                </li>
                <li>
<<<<<<< HEAD
                    <a href="/xiaolian/xiaolian-v0.1/index.php/Home/mine/mine.html" onclick="location.href='/xiaolian/xiaolian-v0.1/index.php/Home/mine/mine.html'" style="background-color:#6fd7ca;">
                        <img src="/xiaolian/xiaolian-v0.1/Public/front/images/wode.png" style="width:24px; height:24px;">
=======
                    <a href="/xiaolian-git/xiaolian-v0.1/index.php/Home/mine/mine.html" onclick="location.href='/xiaolian-git/xiaolian-v0.1/index.php/Home/mine/mine.html'" style="background-color:#6fd7ca;">
                        <img src="/xiaolian-git/xiaolian-v0.1/Public/front/images/wode.png" style="width:24px; height:24px;">
>>>>>>> a395b3bdc5e799d223ae44c46677b2bb66dec3fd
                        <p style="margin:1px 0px -5px 0px;color: #fff;font-size:12px;font-weight:100;font-family:'微软雅黑';">我的</p>
                    </a>
                </li>
              </ul>
            </div>
        </div>
    </div>
    
  </body>  
</html>