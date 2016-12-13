<?php if (!defined('THINK_PATH')) exit();?><html> 
<head> 
    <meta charset="utf-8" />
    <title>匹配任务</title>
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
<<<<<<< HEAD
    <link rel="stylesheet" href="/xiaolian/xiaolian-v0.1/Public/front/css/jquery.mobile-1.4.5.min.css" />
    <script src="/xiaolian/xiaolian-v0.1/Public/front/js/jquery-2.2.2.js"></script>
    <script src="/xiaolian/xiaolian-v0.1/Public/front/js/jquery.mobile-1.4.5.min.js"></script>
=======
    <link rel="stylesheet" href="/xiaolianV0.1/xiaolian-v0.1/Public/front/css/jquery.mobile-1.4.5.min.css" />
    <!--弹出框插件css-->
    <link href="/xiaolianV0.1/xiaolian-v0.1/Public/front/css/normalize.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="/xiaolianV0.1/xiaolian-v0.1/Public/front/css/animate.min.css">
    <link rel="stylesheet" href="/xiaolianV0.1/xiaolian-v0.1/Public/front/css/jquery.gDialog.css">

    <script src="/xiaolianV0.1/xiaolian-v0.1/Public/front/js/jquery-2.2.2.js"></script>
    <script src="/xiaolianV0.1/xiaolian-v0.1/Public/front/js/jquery.mobile-1.4.5.min.js"></script>    
    <!--弹出框插件js-->
    <script src="/xiaolianV0.1/xiaolian-v0.1/Public/front/js/jquery.gDialog.js"></script>
    <!--高德地图-->
>>>>>>> 01b57ce9fa315e0ea71222318892f143ea1e8fb8
    <script type="text/javascript" src="http://webapi.amap.com/maps?v=1.3&key=1157f74e5a00352a7aaccfe6a879557c"></script>
    <style type="text/css">
        body {
            font-size: 12px;
        }
        #tip {
            background-color: #ddf;
            color: #333;
            border: 1px solid silver;
            box-shadow: 3px 4px 3px 0px silver;
            position: absolute;
            top: 10px;
            right: 10px;
            border-radius: 5px;
            overflow: hidden;
            line-height: 20px;
        }
        #tip input[type="text"] {
            height: 25px;
            border: 0;
            padding-left: 5px;
            width: 280px;
            border-radius: 3px;
            outline: none;
        }
        .btn {
            background-color:#ED5565; 
            color:#fff; 
            padding:20px; 
            margin:10px 30px; 
            border-radius:5px; 
            border-bottom:3px solid #DA4453;
        }
    </style>
</head> 

<body>  
    <div data-role="page">
       <div data-role="content">
            <div id="container" style="width:1500px; height:1500px;">
            </div>
            <div id="tip1">
            </div>
            <div id="tip" style="float:right;">
                <input type="text" id="keyword" name="keyword" value="请输入关键字：(选定后搜索)" onfocus='this.value=""'/ style="">
                <button type="button" id="open" class="btn start" style="background:url(/xiaolianV0.1/xiaolian-v0.1/Public/front/images/task-start.png); width: 0px; float: right; margin: -35px 0 0 300px; border: none;"></button>
            </div>
       </div>

        <div data-role="footer" data-position="fixed"> 
            <div data-role="navbar">
              <ul>
                <li>
<<<<<<< HEAD
                    <a href="/xiaolian/xiaolian-v0.1/index.php/Home/index/index.html" onclick="location.href='/xiaolian/xiaolian-v0.1/index.php/Home/index/index.html'" style="background-color:#6fd7ca;">
                        <img src="/xiaolian/xiaolian-v0.1/Public/front/images/shouye.png" style="width:24px; height:24px;">
=======
                    <a href="/xiaolianV0.1/xiaolian-v0.1/index.php/Home/index/index.html" onclick="location.href='/xiaolianV0.1/xiaolian-v0.1/index.php/Home/index/index.html'" style="background-color:#6fd7ca;">
                        <img src="/xiaolianV0.1/xiaolian-v0.1/Public/front/images/shouye.png" style="width:24px; height:24px;">
>>>>>>> 01b57ce9fa315e0ea71222318892f143ea1e8fb8
                        <p style="margin:1px 0px -5px 0px;color: #fff;font-size:12px;font-weight:100;">首页</p>
                    </a>
                </li>
                <li>
<<<<<<< HEAD
                    <a href="/xiaolian/xiaolian-v0.1/index.php/Home/indextask/task.html"  style="background-color:#6fd7ca;" onclick="location.href='/xiaolian/xiaolian-v0.1/index.php/Home/task/task.html'">
                        <img src="/xiaolian/xiaolian-v0.1/Public/front/images/renwu.png" style="width:24px; height:24px;">
=======
                    <a href="/xiaolianV0.1/xiaolian-v0.1/index.php/Home/indextask/task.html"  style="background-color:#6fd7ca;" onclick="location.href='/xiaolianV0.1/xiaolian-v0.1/index.php/Home/task/task.html'">
                        <img src="/xiaolianV0.1/xiaolian-v0.1/Public/front/images/renwu.png" style="width:24px; height:24px;">
>>>>>>> 01b57ce9fa315e0ea71222318892f143ea1e8fb8
                        <p style="margin:1px 0px -5px 0px;color: #fff;font-size:12px;font-weight:100;">匹配任务</p>
                    </a>
                </li>
                <li>
<<<<<<< HEAD
                    <a href="/xiaolian/xiaolian-v0.1/index.php/Home/kankan/kankan.html" onclick="location.href='/xiaolian/xiaolian-v0.1/index.php/Home/kankan/kankan.html'" style="background-color:#6fd7ca;">
                        <img src="/xiaolian/xiaolian-v0.1/Public/front/images/kankan.png" style="width:24px; height:24px;">
=======
                    <a href="/xiaolianV0.1/xiaolian-v0.1/index.php/Home/kankan/kankan.html" onclick="location.href='/xiaolianV0.1/xiaolian-v0.1/index.php/Home/kankan/kankan.html'" style="background-color:#6fd7ca;">
                        <img src="/xiaolianV0.1/xiaolian-v0.1/Public/front/images/kankan.png" style="width:24px; height:24px;">
>>>>>>> 01b57ce9fa315e0ea71222318892f143ea1e8fb8
                        <p style="margin:1px 0px -5px 0px;color: #fff;font-size:12px;font-weight:100;">看看</p>
                    </a>
                </li>
                <li>
<<<<<<< HEAD
                    <a href="/xiaolian/xiaolian-v0.1/index.php/Home/foot/foot.html"  style="background-color:#6fd7ca;" onclick="location.href='/xiaolian/xiaolian-v0.1/index.php/Home/foot/foot.html'">
                        <img src="/xiaolian/xiaolian-v0.1/Public/front/images/zuji.png" style="width:24px; height:24px;">
=======
                    <a href="/xiaolianV0.1/xiaolian-v0.1/index.php/Home/foot/foot.html"  style="background-color:#6fd7ca;" onclick="location.href='/xiaolianV0.1/xiaolian-v0.1/index.php/Home/foot/foot.html'">
                        <img src="/xiaolianV0.1/xiaolian-v0.1/Public/front/images/zuji.png" style="width:24px; height:24px;">
>>>>>>> 01b57ce9fa315e0ea71222318892f143ea1e8fb8
                        <p style="margin:1px 0px -5px 0px;color: #fff;font-size:12px;font-weight:100;">足迹</p>
                    </a>
                </li>
                <li>
<<<<<<< HEAD
                    <a href="/xiaolian/xiaolian-v0.1/index.php/Home/mine/mine.html"  onclick="location.href='/xiaolian/xiaolian-v0.1/index.php/Home/mine/mine.html'" style="background-color:#6fd7ca;">
                        <img src="/xiaolian/xiaolian-v0.1/Public/front/images/wode.png" style="width:24px; height:24px;">
=======
                    <a href="/xiaolianV0.1/xiaolian-v0.1/index.php/Home/mine/mine.html"  style="background-color:#6fd7ca;">
                        <img src="/xiaolianV0.1/xiaolian-v0.1/Public/front/images/wode.png" style="width:24px; height:24px;">
>>>>>>> 01b57ce9fa315e0ea71222318892f143ea1e8fb8
                        <p style="margin:1px 0px -5px 0px;color: #fff;font-size:12px;font-weight:100;">我的</p>
                    </a>
                </li>
              </ul>
            </div>
        </div>
    </div>       

    <script type="text/javascript">
        //高德地图
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
            str.push('精度：' + data.accuracy + ' 米');
            str.push('是否经过偏移：' + (data.isConverted ? '是' : '否'));
            document.getElementById('tip1').innerHTML = str.join('<br>');
            
        }
        //解析定位错误信息
        function onError(data) {
            document.getElementById('tip').innerHTML = '定位失败';
        }
        
        //输入提示
        var windowsArr = [];
        var marker = [];
        AMap.plugin(['AMap.Autocomplete','AMap.PlaceSearch'],function(){
            var autoOptions = {
            city: "北京", //城市，默认全国
            input: "keyword"//使用联想输入的input的id
          };
          autocomplete= new AMap.Autocomplete(autoOptions);
            var placeSearch = new AMap.PlaceSearch({
                city:'北京',
                map:map
          })
          AMap.event.addListener(autocomplete, "select", function(e){
             //TODO 针对选中的poi实现自己的功能
             placeSearch.search(e.poi.name)
          });
        });

        //弹出框js
        $('.start').click(function(){
            $.gDialog.prompt("", "河北师范大学", {
                title: "请输入您想去的大学",
                required: true,
                animateIn : "rollIn",
                animateOut: "rollOut"
            });
        }); 

    </script>
    <script type="text/javascript" src="http://webapi.amap.com/demos/js/liteToolbar.js"></script>
</body> 
</html>