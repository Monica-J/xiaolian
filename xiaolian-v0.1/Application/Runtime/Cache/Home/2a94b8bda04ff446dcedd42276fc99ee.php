<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html> 
<html> 
  <head> 
    <meta charset="utf-8" />
    <title>首页</title>
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <link rel="stylesheet" href="/xiaoliangit/xiaolian-v0.1/Public/front/css/jquery.mobile-1.4.5.min.css" />
    <script src="/xiaoliangit/xiaolian-v0.1/Public/front/js/jquery-2.2.2.js"></script>
    <script src="/xiaoliangit/xiaolian-v0.1/Public/front/js/jquery.mobile-1.4.5.min.js"></script>

    <link type="text/css" href="/xiaoliangit/xiaolian-v0.1/Public/front/css/style.css" rel="stylesheet"/>

    <script type="text/javascript" src="/xiaoliangit/xiaolian-v0.1/Public/front/js/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="/xiaoliangit/xiaolian-v0.1/Public/front/js/jquery.event.drag-1.5.min.js"></script>
    <script type="text/javascript" src="/xiaoliangit/xiaolian-v0.1/Public/front/js/jquery.touchSlider.js"></script>
<script type="text/javascript">
$(document).ready(function(){

    $(".main_visual").hover(function(){
        $("#btn_prev,#btn_next").fadeIn()
    },function(){
        $("#btn_prev,#btn_next").fadeOut()
    });
    
    $dragBln = false;
    
    $(".main_image").touchSlider({
        flexible : true,
        speed : 200,
        btn_prev : $("#btn_prev"),
        btn_next : $("#btn_next"),
        paging : $(".flicking_con a"),
        counter : function (e){
            $(".flicking_con a").removeClass("on").eq(e.current-1).addClass("on");
        }
    });
    
    $(".main_image").bind("mousedown", function() {
        $dragBln = false;
    });
    
    $(".main_image").bind("dragstart", function() {
        $dragBln = true;
    });
    
    $(".main_image a").click(function(){
        if($dragBln) {
            return false;
        }
    });
    
    timer = setInterval(function(){
        $("#btn_next").click();
    }, 5000);
    
    $(".main_visual").hover(function(){
        clearInterval(timer);
    },function(){
        timer = setInterval(function(){
            $("#btn_next").click();
        },5000);
    });
    
    $(".main_image").bind("touchstart",function(){
        clearInterval(timer);
    }).bind("touchend", function(){
        timer = setInterval(function(){
            $("#btn_next").click();
        }, 5000);
    });
    
});
</script>
  </head>

<body> 
    <div data-role="page" theme="b"> 
        <div data-role="header">   
          <!--顶部轮播图-->
          <div class="main_visual">
            <div class="flicking_con"><!--小的不才，这里的图片位置是固定的，需要去style.css里面改-->
                <a href="#">1</a>
                <a href="#">2</a>
                <a href="#">3</a>
            </div>
            <div class="main_image">
                <ul>
                    <li><img src="/xiaoliangit/xiaolian-v0.1/Public/front/images/index-banner.png" class="img"></li>
                    <li><img src="/xiaoliangit/xiaolian-v0.1/Public/front/images/index-banner.png" class="img"></li>
                    <li><img src="/xiaoliangit/xiaolian-v0.1/Public/front/images/index-banner.png" class="img"></li>
                </ul>
                <a href="javascript:;" id="btn_prev"></a>
                <a href="javascript:;" id="btn_next"></a>
            </div>
          </div>
        <!--顶部轮播图 结束-->
        </div>

        <div data-role="content">
            <!--校客推荐--> 
            <div class="panel-1">
                <div style="margin: -5px -5px 0px 0px;">
                    <h4 style="font-family:'黑体';font-weight:bold;">校客推荐</h4>
                </div>
                <!--推荐用户-->
                <div class="ui-grid-c" style="margin-top: 10px;">
                    <div class="ui-block-a">
<<<<<<< HEAD
                        <a href="user-data.html"><img src="/xiaoliangit/xiaolian-v0.1/Public/front/images/index-user.png" style="width: 60px;height: 60px;"></a>
                    </div>
                    <div class="ui-block-b">
                        <a href="user-data.html"><img src="/xiaoliangit/xiaolian-v0.1/Public/front/images/index-user.png" style="width: 60px;height: 60px;"></a>
                    </div>
                    <div class="ui-block-c">
                        <a href="user-data.html"><img src="/xiaoliangit/xiaolian-v0.1/Public/front/images/index-user.png" style="width: 60px;height: 60px;"></a>
                    </div>
                    <div class="ui-block-d">
                        <a href="user-data.html"><img src="/xiaoliangit/xiaolian-v0.1/Public/front/images/index-user.png" style="width: 60px;height: 60px;"></a>
=======
                        <a href="/xiaoliangit/xiaolian-v0.1/index.php/Home/index/user-data.html"><img src="/xiaoliangit/xiaolian-v0.1/Public/front/images/index-user.png" style="width: 60px;height: 60px;"></a>
                    </div>
                    <div class="ui-block-b">
                        <a href="/xiaoliangit/xiaolian-v0.1/index.php/Home/index/user-data.html"><img src="/xiaoliangit/xiaolian-v0.1/Public/front/images/index-user.png" style="width: 60px;height: 60px;"></a>
                    </div>
                    <div class="ui-block-c">
                        <a href="/xiaoliangit/xiaolian-v0.1/index.php/Home/index/user-data.html"><img src="/xiaoliangit/xiaolian-v0.1/Public/front/images/index-user.png" style="width: 60px;height: 60px;"></a>
                    </div>
                    <div class="ui-block-d">
                        <a href="/xiaoliangit/xiaolian-v0.1/index.php/Home/index/user-data.html"><img src="/xiaoliangit/xiaolian-v0.1/Public/front/images/index-user.png" style="width: 60px;height: 60px;"></a>
>>>>>>> 81c3ae0a68e941c4ac1ced05089dbd71632b69ab
                    </div>
                </div>
            </div>
            <!--校客推荐 结束-->          
            <img src="/xiaoliangit/xiaolian-v0.1/Public/front/images/shadow.png" style="width:1500px;height:10px;margin-left:-20px;">
            <!--热门活动-->
            <div class="panel-2">
                <div class="ui-grid-a" style="margin-top: 5px;">
                    <div class="ui-block-a" style="margin-right:-5px;">
                        <h4 style="font-family:'黑体';font-weight:bold;">热门活动</h4>
                    </div>
                    <div class="ui-block-b" style="margin: 0 -5px 5px 0;">
<<<<<<< HEAD
                        <a href="activity--more.html" style="float:right;color:#6fd7ca;font-size:14px;text-decoration:none;"><span>更多<img src="/xiaoliangit/xiaolian-v0.1/Public/front/images/index-more.png" style="width:14px;height:14px;"></span></a>
=======
                        <a href="/xiaoliangit/xiaolian-v0.1/index.php/Home/index/activity-more.html" style="float:right;color:#6fd7ca;font-size:14px;text-decoration:none;"><span>更多<img src="/xiaoliangit/xiaolian-v0.1/Public/front/images/index-more.png" style="width:14px;height:14px;"></span></a>
>>>>>>> 81c3ae0a68e941c4ac1ced05089dbd71632b69ab
                    </div>
                </div>
                <!--热门活动推荐-->
                <div class="panel-2-1"><!--应该做成轮播效果 但目前还没有实现-->
<<<<<<< HEAD
                    <a href="activity-specific.html" style="text-decoration:none;"><span>
=======
                    <a href="/xiaoliangit/xiaolian-v0.1/index.php/Home/index/activity-specific.html" style="text-decoration:none;"><span>
>>>>>>> 81c3ae0a68e941c4ac1ced05089dbd71632b69ab
                        <img src="/xiaoliangit/xiaolian-v0.1/Public/front/images/index-activity.png" style="width:100%">
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
<<<<<<< HEAD
                    <a href="index.html" style="background-color:#6fd7ca;">
=======
                    <a href="/xiaoliangit/xiaolian-v0.1/index.php/Home/index/index.html" style="background-color:#6fd7ca;">
>>>>>>> 81c3ae0a68e941c4ac1ced05089dbd71632b69ab
                        <img src="/xiaoliangit/xiaolian-v0.1/Public/front/images/shouye.png" style="width:24px; height:24px;">
                        <p style="margin:1px 0px -5px 0px;color: #fff;font-size:12px;font-weight:100;font-family:'微软雅黑';">首页</p>
                    </a>
                </li>
                <li>
<<<<<<< HEAD
                    <a href="task.html"  style="background-color:#6fd7ca;">
=======
                    <a href="/xiaoliangit/xiaolian-v0.1/index.php/Home/task/task.html"  style="background-color:#6fd7ca;">
>>>>>>> 81c3ae0a68e941c4ac1ced05089dbd71632b69ab
                        <img src="/xiaoliangit/xiaolian-v0.1/Public/front/images/renwu.png" style="width:24px; height:24px;">
                        <p style="margin:1px 0px -5px 0px;color: #fff;font-size:12px;font-weight:100;font-family:'微软雅黑';">匹配任务</p>
                    </a>
                </li>
                <li>
<<<<<<< HEAD
                    <a href="kankan.html"  style="background-color:#6fd7ca;">
=======
                    <a href="/xiaoliangit/xiaolian-v0.1/index.php/Home/kankan/kankan.html"  style="background-color:#6fd7ca;">
>>>>>>> 81c3ae0a68e941c4ac1ced05089dbd71632b69ab
                        <img src="/xiaoliangit/xiaolian-v0.1/Public/front/images/kankan.png" style="width:24px; height:24px;">
                        <p style="margin:1px 0px -5px 0px;color: #fff;font-size:12px;font-weight:100;font-family:'微软雅黑';">看看</p>
                    </a>
                </li>
                <li>
<<<<<<< HEAD
                    <a href="foot.html"  style="background-color:#6fd7ca;">
=======
                    <a href="/xiaoliangit/xiaolian-v0.1/index.php/Home/foot/foot.html"  style="background-color:#6fd7ca;">
>>>>>>> 81c3ae0a68e941c4ac1ced05089dbd71632b69ab
                        <img src="/xiaoliangit/xiaolian-v0.1/Public/front/images/zuji.png" style="width:24px; height:24px;">
                        <p style="margin:1px 0px -5px 0px;color: #fff;font-size:12px;font-weight:100;font-family:'微软雅黑';">足迹</p>
                    </a>
                </li>
                <li>
<<<<<<< HEAD
                    <a href="mine.html"  style="background-color:#6fd7ca;">
=======
                    <a href="/xiaoliangit/xiaolian-v0.1/index.php/Home/mine/mine.html"  style="background-color:#6fd7ca;">
>>>>>>> 81c3ae0a68e941c4ac1ced05089dbd71632b69ab
                        <img src="/xiaoliangit/xiaolian-v0.1/Public/front/images/wode.png" style="width:24px; height:24px;">
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