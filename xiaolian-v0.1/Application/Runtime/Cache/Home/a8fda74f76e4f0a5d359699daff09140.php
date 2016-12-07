<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html> 
<html> 
<head> 
    <meta charset="utf-8" />
    <title>我的</title>
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <link rel="stylesheet" href="/xiaolianV0.1/xiaolian-v0.1/Public/front/css/jquery.mobile-1.4.5.min.css" />
    <script src="/xiaolianV0.1/xiaolian-v0.1/Public/front/js/jquery-2.2.2.js"></script>
    <script src="/xiaolianV0.1/xiaolian-v0.1/Public/front/js/jquery.mobile-1.4.5.min.js"></script>
</head>

<body> 
    <div data-role="page"> 
        <div data-role="header" data-position="fixed">              
        
            <!--用户部分信息-->
            <div class="user" style="height:200px; background:url(/xiaolianV0.1/xiaolian-v0.1/Public/front/images/mine-bg.png);" >
                <a href="/xiaolianV0.1/xiaolian-v0.1/index.php/Home/mine/shezhi.html"><img src="/xiaolianV0.1/xiaolian-v0.1/Public/front/images/mine-shezhi.png" style="float:right; margin:5px 5px 0 0;"></a>
                <br/>
                <a href="#"><img src="/xiaolianV0.1/xiaolian-v0.1/Public/front/images/mine-user.png" style="clear: both; display: block; margin:auto;"></a>
                <p style="margin:4px 0 0 0; font-size:14px; text-align:center;">我叫李自由</p>
                <p style="font-size:10px; color:#7d8180; text-align: center;">没有谁是一座孤岛，在大海里独居。</p>
            </div>

            <!--导航条-->
            <div data-role="navbar">
                <ul>
                    <li>
                        <a href="haoyou.html"><img src="/xiaolianV0.1/xiaolian-v0.1/Public/front/images/mine-haoyou.png" style="margin:4px 0 3px -50px;"><p style="margin:-24px 0 0 25px;">好友 21</p></a>
                    </li>
                    <li>
                        <a href="shoucang.html"><img src="/xiaolianV0.1/xiaolian-v0.1/Public/front/images/mine-shoucang.png" style="margin:4px 0 3px -50px;"><p style="margin:-24px 0 0 25px;">收藏 8</p></a>
                    </li>
                    <li>
                        <a href="chengjiu.html"><img src="/xiaolianV0.1/xiaolian-v0.1/Public/front/images/mine-chengjiu.png" style="margin:4px 0 3px -50px;"><p style="margin:-24px 0 0 25px;">成就 2</p></a>
                    </li>
                    <li>
                        <a href="tixing.html"><img src="/xiaolianV0.1/xiaolian-v0.1/Public/front/images/mine-tixing.png" style="margin:4px 0 3px -50px;"><p style="margin:-24px 0 0 25px;">提醒 3</p></a>
                    </li>
                </ul>
            </div>
        
        </div>


        <div data-role="content"> 
            
            <!--我的动态-->
            <div style="margin:0px 0 0 0;">
                <h5>我的动态</h5>
                <br/>
                <!--发布动态-->
                <div>
                    <img src="/xiaolianV0.1/xiaolian-v0.1/Public/front/images/mine-luser.png" style="margin:-15px 0 0 0;">
                    <form style="margin:-55px 0 0 70px;">
                        <label for="text"></label>
                        <a href="#page2"><input type="text" name="text" id="text" placeholder="说说你想说的吧！" style="background:url(/xiaolianV0.1/xiaolian-v0.1/Public/front/images/mine-talkbg.png);"></a>
                    </form>
                </div>
                <img src="/xiaolianV0.1/xiaolian-v0.1/Public/front/images/longline.png" style="margin:0 0 0 -15px; width:1500px;">
                <!--历史动态-->
                <div>
                    
                    <div>
                        <img src="/xiaolianV0.1/xiaolian-v0.1/Public/front/images/mine-luser.png" style="margin:10px 0 0 0;">
                        <p style="margin:-38px 0 0 60px; font-size:10px;">我叫李自由</p>
                        <p style="float:right; margin:-13px 0 0 0; font-size:8px;">2016.11.22 15:06</p>
                        <div class="content">
                            <p style="margin:24px 0 0 20px;">我在河北师范大学！</p>
                            <img src="/xiaolianV0.1/xiaolian-v0.1/Public/front/images/mine-hsd.png" width="300px" height="150px" style="margin:6px 0 0 20px;">
                        </div>
                        <br/>
                        &nbsp;<a href=""><img src="/xiaolianV0.1/xiaolian-v0.1/Public/front/images/mine-dianzan.png"></a>
                        &nbsp;<a href=""><img src="/xiaolianV0.1/xiaolian-v0.1/Public/front/images/mine-pinglun.png"></a>
                        &nbsp;<a href=""><img src="/xiaolianV0.1/xiaolian-v0.1/Public/front/images/mine-zhuanfa.png"></a>
                        &nbsp;<a href=""><img src="/xiaolianV0.1/xiaolian-v0.1/Public/front/images/mine-dianzan.png"></a>
                        &nbsp;<a href=""><img src="/xiaolianV0.1/xiaolian-v0.1/Public/front/images/mine-pinglun.png"></a>
                        &nbsp;<a href=""><img src="/xiaolianV0.1/xiaolian-v0.1/Public/front/images/mine-zhuanfa.png"></a>
                        <a href=""><p style="float:right; margin:1px 0 0 0; color:gray; font-size:6px;">删除</p></a>
                    </div>
                    <img src="/xiaolianV0.1/xiaolian-v0.1/Public/front/images/longline.png" style="margin:0 0 0 -15px; width:1500px;">

                    <div>
                        <img src="/xiaolianV0.1/xiaolian-v0.1/Public/front/images/mine-luser.png" style="margin:10px 0 0 0;">
                        <p style="margin:-38px 0 0 60px; font-size:10px;">我叫李自由</p>
                        <p style="float:right; margin:-13px 0 0 0; font-size:8px;">2016.11.22 15:06</p>
                        <div class="content">
                            <p style="margin:24px 0 0 20px;">我在河北师范大学！</p>
                            <img src="/xiaolianV0.1/xiaolian-v0.1/Public/front/images/mine-hsd.png" width="300px" height="150px" style="margin:6px 0 0 20px;">
                        </div>
                        <br/>
                        &nbsp;<a href=""><img src="/xiaolianV0.1/xiaolian-v0.1/Public/front/images/mine-dianzan.png"></a>
                        &nbsp;<a href=""><img src="/xiaolianV0.1/xiaolian-v0.1/Public/front/images/mine-pinglun.png"></a>
                        &nbsp;<a href=""><img src="/xiaolianV0.1/xiaolian-v0.1/Public/front/images/mine-zhuanfa.png"></a>
                        &nbsp;<a href=""><img src="/xiaolianV0.1/xiaolian-v0.1/Public/front/images/mine-dianzan.png"></a>
                        &nbsp;<a href=""><img src="/xiaolianV0.1/xiaolian-v0.1/Public/front/images/mine-pinglun.png"></a>
                        &nbsp;<a href=""><img src="/xiaolianV0.1/xiaolian-v0.1/Public/front/images/mine-zhuanfa.png"></a>
                        <a href=""><p style="float:right; margin:1px 0 0 0; font-size:6px; color:gray;">删除</p></a>
                    </div>
                    <img src="/xiaolianV0.1/xiaolian-v0.1/Public/front/images/longline.png" style="margin:0 0 0 -15px; width:1500px;">

                    <div>
                        <img src="/xiaolianV0.1/xiaolian-v0.1/Public/front/images/mine-luser.png" style="margin:10px 0 0 0;">
                        <p style="margin:-38px 0 0 60px; font-size:10px;">我叫李自由</p>
                        <p style="float:right; margin:-13px 0 0 0; font-size:8px;">2016.11.22 15:06</p>
                        <div class="content">
                            <p style="margin:24px 0 0 20px;">我在河北师范大学！</p>
                            <img src="/xiaolianV0.1/xiaolian-v0.1/Public/front/images/mine-hsd.png" width="300px" height="150px" style="margin:6px 0 0 20px;">
                        </div>
                        <br/>
                        &nbsp;<a href=""><img src="/xiaolianV0.1/xiaolian-v0.1/Public/front/images/mine-dianzan.png"></a>
                        &nbsp;<a href=""><img src="/xiaolianV0.1/xiaolian-v0.1/Public/front/images/mine-pinglun.png"></a>
                        &nbsp;<a href=""><img src="/xiaolianV0.1/xiaolian-v0.1/Public/front/images/mine-zhuanfa.png"></a>
                        &nbsp;<a href=""><img src="/xiaolianV0.1/xiaolian-v0.1/Public/front/images/mine-dianzan.png"></a>
                        &nbsp;<a href=""><img src="/xiaolianV0.1/xiaolian-v0.1/Public/front/images/mine-pinglun.png"></a>
                        &nbsp;<a href=""><img src="/xiaolianV0.1/xiaolian-v0.1/Public/front/images/mine-zhuanfa.png"></a>
                        <a href=""><p style="float:right; margin:1px 0 0 0; color:gray; font-size:6px;">删除</p></a>
                    </div>

                </div>
            </div>

        </div>

        <div data-role="footer" data-position="fixed"> 
            
            <div data-role="navbar">
              <ul>
                <li>
                    <a href="show.html" style="background-color:#6fd7ca;">
                    <a href="/xiaolianV0.1/xiaolian-v0.1/index.php/Home/index/index.html" style="background-color:#6fd7ca;">
                        <img src="/xiaolianV0.1/xiaolian-v0.1/Public/front/images/shouye.png" style="width:24px; height:24px;">
                        <p style="margin:1px 0px -5px 0px;color: #fff;font-size:12px;font-weight:100;">首页</p>
                    </a>
                </li>
                <li>
                    <a href="task.html"  style="background-color:#6fd7ca;">
                    <a href="/xiaolianV0.1/xiaolian-v0.1/index.php/Home/task/task.html"  style="background-color:#6fd7ca;">
                        <img src="/xiaolianV0.1/xiaolian-v0.1/Public/front/images/renwu.png" style="width:24px; height:24px;">
                        <p style="margin:1px 0px -5px 0px;color: #fff;font-size:12px;font-weight:100;">匹配任务</p>
                    </a>
                </li>
                <li>
                    <a href="kankan.html"  style="background-color:#6fd7ca;">
                    <a href="/xiaolianV0.1/xiaolian-v0.1/index.php/Home/kankan/kankan.html"  style="background-color:#6fd7ca;">
                        <img src="/xiaolianV0.1/xiaolian-v0.1/Public/front/images/kankan.png" style="width:24px; height:24px;">
                        <p style="margin:1px 0px -5px 0px;color: #fff;font-size:12px;font-weight:100;">看看</p>
                    </a>
                </li>
                <li>
                    <a href="foot.html"  style="background-color:#6fd7ca;">
                    <a href="/xiaolianV0.1/xiaolian-v0.1/index.php/Home/foot/foot.html"  style="background-color:#6fd7ca;">
                        <img src="/xiaolianV0.1/xiaolian-v0.1/Public/front/images/zuji.png" style="width:24px; height:24px;">
                        <p style="margin:1px 0px -5px 0px;color: #fff;font-size:12px;font-weight:100;">足迹</p>
                    </a>
                </li>
                <li>
                    <a href="mine.html"  style="background-color:#6fd7ca;">
                    <a href="/xiaolianV0.1/xiaolian-v0.1/index.php/Home/mine/mine.html"  style="background-color:#6fd7ca;">
                        <img src="/xiaolianV0.1/xiaolian-v0.1/Public/front/images/wode.png" style="width:24px; height:24px;">
                        <p style="margin:1px 0px -5px 0px;color: #fff;font-size:12px;font-weight:100;">我的</p>
                    </a>
                </li>
              </ul>
            </div>

        </div>
    </div>
</body> 
</html>