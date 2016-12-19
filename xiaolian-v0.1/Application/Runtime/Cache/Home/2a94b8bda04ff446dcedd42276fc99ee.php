<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html> 
<html> 
  <head> 
    <meta charset="utf-8" />
    <title>首页</title>
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <link rel="stylesheet" href="/xiaolian-git/xiaolian-v0.1/Public/front/css/jquery.mobile-1.4.5.min.css" />
    <script src="/xiaolian-git/xiaolian-v0.1/Public/front/js/jquery-2.2.2.js"></script>
    <script src="/xiaolian-git/xiaolian-v0.1/Public/front/js/jquery.mobile-1.4.5.min.js"></script>

    <link rel="stylesheet" href="/xiaolian-git/xiaolian-v0.1/Public/front/css/sangarSlider.css" type="text/css" media="all">
    <link rel="stylesheet" href="/xiaolian-git/xiaolian-v0.1/Public/front/css/default.css" type="text/css" media="all">

    <script type="text/javascript" src="/xiaolian-git/xiaolian-v0.1/Public/front/js/jquery.js"></script>
    <script type="text/javascript" src="/xiaolian-git/xiaolian-v0.1/Public/front/js/jquery.velocity.min.js"></script>
    <script type="text/javascript" src="/xiaolian-git/xiaolian-v0.1/Public/front/js/jquery.touchSwipe.min.js"></script>
    <script type="text/javascript" src="/xiaolian-git/xiaolian-v0.1/Public/front/js/imagesloaded.min.js"></script>

    <!-- jQuery Sangar Slider -->
    <script type="text/javascript" src="/xiaolian-git/xiaolian-v0.1/Public/front/js/sangarSlider/sangarBaseClass.js"></script>
    <script type="text/javascript" src="/xiaolian-git/xiaolian-v0.1/Public/front/js/sangarSlider/sangarSetupLayout.js"></script>
    <script type="text/javascript" src="/xiaolian-git/xiaolian-v0.1/Public/front/js/sangarSlider/sangarSizeAndScale.js"></script>
    <script type="text/javascript" src="/xiaolian-git/xiaolian-v0.1/Public/front/js/sangarSlider/sangarShift.js"></script>
    <script type="text/javascript" src="/xiaolian-git/xiaolian-v0.1/Public/front/js/sangarSlider/sangarSetupBulletNav.js"></script>
    <script type="text/javascript" src="/xiaolian-git/xiaolian-v0.1/Public/front/js/sangarSlider/sangarSetupNavigation.js"></script>
    <script type="text/javascript" src="/xiaolian-git/xiaolian-v0.1/Public/front/js/sangarSlider/sangarSetupSwipeTouch.js"></script>
    <script type="text/javascript" src="/xiaolian-git/xiaolian-v0.1/Public/front/js/sangarSlider/sangarSetupTimer.js"></script>
    <script type="text/javascript" src="/xiaolian-git/xiaolian-v0.1/Public/front/js/sangarSlider/sangarBeforeAfter.js"></script>
    <script type="text/javascript" src="/xiaolian-git/xiaolian-v0.1/Public/front/js/sangarSlider/sangarLock.js"></script>
    <script type="text/javascript" src="/xiaolian-git/xiaolian-v0.1/Public/front/js/sangarSlider/sangarResponsiveClass.js"></script>
    <script type="text/javascript" src="/xiaolian-git/xiaolian-v0.1/Public/front/js/sangarSlider/sangarResetSlider.js"></script>
    <script type="text/javascript" src="/xiaolian-git/xiaolian-v0.1/Public/front/js/sangarSlider/sangarTextbox.js"></script>
    <script type="text/javascript" src="/xiaolian-git/xiaolian-v0.1/Public/front/js/sangarSlider/sangarVideo.js"></script>
    <script type="text/javascript" src="/xiaolian-git/xiaolian-v0.1/Public/front/js/sangarSlider.js"></script>

    <script type='text/javascript'>
        jQuery(document).ready(function($) {
            $('.sangar-example').sangarSlider({
                timer : false, // true or false to have the timer
                //width : 850, // slideshow width
                //height : 500, // slideshow height
                /*这里的宽度高度有没有都无所谓 真正要调宽度高度的话要去sangarSlider.js里面改*/
                fullWidth : true, // slider will scale to the container size 改为true 使宽度铺满整个屏幕
                fullHeight : false, // slideshow height will resize to browser height
                //minHeight : 400, // slideshow min height
                //maxHeight : 500, // slideshow max height, set to '0' (zero) to make it unlimited   
                continousSliding : false, // only works for horizontal-slide and vertical-slide      
                jsOnly : false,                 
                directionalNav : 'autohide',
                themeClass : 'default'
            });
        })      
    </script>
  </head>

  <body> 
    <div data-role="page">
        <div data-role="header" style="width:100%; margin:0px; padding:0px;">   
          <!--顶部轮播图-->
            <div class='sangar-example'>
                <div class='sangar-content'>
                    <img src='/xiaolian-git/xiaolian-v0.1/Public/front/images/index-banner.png' />
                    <!--这里不用改样式 改了也没用哈哈哈！调整图片高度的话要去sangarSlider.js里面改-->
                </div>
                <div class='sangar-content'>
                    <img src='/xiaolian-git/xiaolian-v0.1/Public/front/images/index-activity.png' />
                </div>              
                <div class='sangar-content'>
                    <img src='/xiaolian-git/xiaolian-v0.1/Public/front/images/index-banner.png' />
                </div>
            </div>
          <!--顶部轮播图 结束-->
        </div>

        <div data-role="content">
            <!--校客推荐--> 
            <div class="panel-1">
                <div style="margin: -25px -5px 0px 0px;">
                    <h4 style="font-family:'黑体';font-weight:bold;">校客推荐</h4>
                </div>
                <!--推荐用户-->
                <div class="ui-grid-c" style="margin-top: 10px;">
                    <div class="ui-block-a">
                        <a href="/xiaolian-git/xiaolian-v0.1/index.php/Home/index/user-data.html" onclick="location.href='/xiaolian-git/xiaolian-v0.1/index.php/Home/index/user-data.html'"><img src="/xiaolian-git/xiaolian-v0.1/Public/front/images/index-user.png" style="width: 60px;height: 60px;"></a>
                    </div>
                    <div class="ui-block-b">
                        <a href="/xiaolian-git/xiaolian-v0.1/index.php/Home/index/user-data.html" onclick="location.href='/xiaolian-git/xiaolian-v0.1/index.php/Home/index/user-data.html'"><img src="/xiaolian-git/xiaolian-v0.1/Public/front/images/index-user.png" style="width: 60px;height: 60px;"></a>
                    </div>
                    <div class="ui-block-c">
                        <a href="/xiaolian-git/xiaolian-v0.1/index.php/Home/index/user-data.html" onclick="location.href='/xiaolian-git/xiaolian-v0.1/index.php/Home/index/user-data.html'"><img src="/xiaolian-git/xiaolian-v0.1/Public/front/images/index-user.png" style="width: 60px;height: 60px;"></a>
                    </div>
                    <div class="ui-block-d">
                        <a href="/xiaolian-git/xiaolian-v0.1/index.php/Home/index/user-data.html" onclick="location.href='/xiaolian-git/xiaolian-v0.1/index.php/Home/index/user-data.html'"><img src="/xiaolian-git/xiaolian-v0.1/Public/front/images/index-user.png" style="width: 60px;height: 60px;"></a>
                    </div>
                </div>
            </div>
            <!--校客推荐 结束-->          
            <img src="/xiaolian-git/xiaolian-v0.1/Public/front/images/shadow.png" style="width:1500px;height:10px;margin-left:-20px;">
            <!--热门活动-->
            <div class="panel-2">
                <div class="ui-grid-a">
                    <div class="ui-block-a" style="margin: -12px -5px 0 0;">
                        <h4 style="font-family:'黑体';font-weight:bold;">热门活动</h4>
                    </div>
                    <div class="ui-block-b" style="margin: 10px -5px 5px 0;">
                        <a href="/xiaolian-git/xiaolian-v0.1/index.php/Home/index/activity-more.html" onclick="location.href='/xiaolian-git/xiaolian-v0.1/index.php/Home/index/activity-more.html'"style="float:right;color:#6fd7ca;font-size:14px;text-decoration:none;"><span>更多<img src="/xiaolian-git/xiaolian-v0.1/Public/front/images/index-more.png" style="width:14px;height:14px;"></span></a>
                    </div>
                </div>
                <!--热门活动推荐-->
                <div class="panel-2-1"><!--应该做成轮播效果 但目前还没有实现-->
                    <a href="/xiaolian-git/xiaolian-v0.1/index.php/Home/index/activity-specific.html" onclick="location.href='/xiaolian-git/xiaolian-v0.1/index.php/Home/index/activity-specific.html'" style="text-decoration:none;"><span>
                        <img src="/xiaolian-git/xiaolian-v0.1/Public/front/images/index-activity.png" style="width:100%">
                        <p style="color:#8E8E8E;font-size:12px;font-family:'微软雅黑';font-weight:200;">河北师范大学2016年度迎新送老晚会将于9月23日在软件楼门口举行，届时将会有精彩的演出，欢迎同学们前来观看</p>
                    </span></a>
                </div>
                <!--热门活动推荐 结束-->
            <!--热门活动 结束-->
            </div>
        </div>

        <div data-role="footer" data-position="fixed">
            <!--底部导航栏-->
            <div data-role="navbar">
              <ul>
                <li >
                    <a href="/xiaolian-git/xiaolian-v0.1/index.php/Home/index/index.html" onclick="location.href='/xiaolian-git/xiaolian-v0.1/index.php/Home/index/index.html'" style="background-color:#6fd7ca;">
                        <img src="/xiaolian-git/xiaolian-v0.1/Public/front/images/shouye.png" style="width:24px; height:24px;">
                        <p style="margin:1px 0px -5px 0px;color: #fff;font-size:12px;font-weight:100;font-family:'微软雅黑';">首页</p>
                    </a>
                </li>
                <li>
                    <a href="/xiaolian-git/xiaolian-v0.1/index.php/Home/task/task.html" onclick="location.href='/xiaolian-git/xiaolian-v0.1/index.php/Home/task/task.html'" style="background-color:#6fd7ca;" onclick="location.href='/xiaolian-git/xiaolian-v0.1/index.php/Home/task/task.html'">
                        <img src="/xiaolian-git/xiaolian-v0.1/Public/front/images/renwu.png" style="width:24px; height:24px;">
                        <p style="margin:1px 0px -5px 0px;color: #fff;font-size:12px;font-weight:100;font-family:'微软雅黑';">匹配任务</p>
                    </a>
                </li>
                <li>
                    <a href="/xiaolian-git/xiaolian-v0.1/index.php/Home/kankan/kankan.html" onclick="location.href='/xiaolian-git/xiaolian-v0.1/index.php/Home/kankan/kankan.html'" style="background-color:#6fd7ca;">
                        <img src="/xiaolian-git/xiaolian-v0.1/Public/front/images/kankan.png" style="width:24px; height:24px;">
                        <p style="margin:1px 0px -5px 0px;color: #fff;font-size:12px;font-weight:100;font-family:'微软雅黑';">看看</p>
                    </a>
                </li>
                <li>
                    <a href="/xiaolian-git/xiaolian-v0.1/index.php/Home/foot/foot.html"  onclick="location.href='/xiaolian-git/xiaolian-v0.1/index.php/Home/foot/foot.html'" style="background-color:#6fd7ca;">
                    <!--onclick是为了能保证放到thingphp里也能正常跳转过去 为了统一就把其他的<a>标签页也都加上了-->
                        <img src="/xiaolian-git/xiaolian-v0.1/Public/front/images/zuji.png" style="width:24px; height:24px;">
                        <p style="margin:1px 0px -5px 0px;color: #fff;font-size:12px;font-weight:100;font-family:'微软雅黑';">足迹</p>
                    </a>
                </li>
                <li>
                    <a href="/xiaolian-git/xiaolian-v0.1/index.php/Home/mine/mine.html"  onclick="location.href='/xiaolian-git/xiaolian-v0.1/index.php/Home/mine/mine.html'" style="background-color:#6fd7ca;">
                        <img src="/xiaolian-git/xiaolian-v0.1/Public/front/images/wode.png" style="width:24px; height:24px;">
                        <p style="margin:1px 0px -5px 0px;color: #fff;font-size:12px;font-weight:100;font-family:'微软雅黑';">我的</p>
                    </a>
                </li>
              </ul>
            </div>
            <!--底部导航栏 结束-->
        </div>
    </div>

  </body>

</html>