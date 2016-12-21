<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html> 
<html> 
<head> 
    <meta charset="utf-8" />
    <title><?php if(is_array($user)): $i = 0; $__LIST__ = $user;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$u): $mod = ($i % 2 );++$i; echo ($u["username"]); endforeach; endif; else: echo "" ;endif; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <link rel="stylesheet" href="/Public/front/css/jquery.mobile-1.4.5.min.css" />
    <script src="/Public/front/js/jquery-2.2.2.js"></script>
    <script src="/Public/front/js/jquery.mobile-1.4.5.min.js"></script>
</head>

<body> 
    <div data-role="page"> 
        <div data-role="header" data-position="fixed">              
            <a href="/index.php/Home/mine/haoyou.html" data-icon="arrow-l" data-iconpos="notext"></a>
            <!--用户部分信息-->
            <div class="user" style="height:200px; background:url(/Public/front/images/mine-bg.png);" >
                <br/>
                <br/>
                <?php if(is_array($user)): $i = 0; $__LIST__ = $user;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$u): $mod = ($i % 2 );++$i;?><img src="<?php echo ($u["userpic"]); ?>" width="90px" width="90px" style="clear: both; display: block; margin:auto;border-radius:50%">
                <p style="margin:4px 0 0 0; font-size:14px; text-align:center;"><?php echo ($u["username"]); ?></p>
                <p style="font-size:10px; color:#7d8180; text-align: center;"><?php echo ($u["introduce"]); ?></p><?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
        
        </div>


        <div data-role="content"> 
            <!--历史动态-->
                <div style="margin:-10px 0 0 0;">     
                    <?php if(is_array($dynamic)): $i = 0; $__LIST__ = $dynamic;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$dy): $mod = ($i % 2 );++$i;?><div>
                        <img src="<?php echo ($dy["userpic"]); ?>" width="50px" height="50px" style="margin:10px 0 0 0;border-radius:50%" style="margin:10px 0 0 0;">
                        <p style="margin:-38px 0 0 60px; font-size:10px;"><?php echo ($dy["username"]); ?></p>
                        <p style="float:right; margin:-13px 0 0 0; font-size:8px;"><?php echo ($dy["addtime"]); ?></p>
                        <div class="content">
                            <p style="margin:24px 0 0 20px;"><?php echo ($dy["content"]); ?></p>
                            <img src="/Public/front/images/mine-hsd.png" width="300px" height="150px" style="margin:6px 0 0 20px;">
                        </div>
                        <br/>
                        &nbsp;<img src="/Public/front/images/mine-dianzan.png"><small style="color:#8E8E8E;font-size:12px;font-weight:200;"><?php echo ($dy["scantime"]); ?></small>
                        &nbsp;<a href=""><img src="/Public/front/images/mine-pinglun.png"></a>
                        &nbsp;<a href=""><img src="/Public/front/images/mine-zhuanfa.png"></a>
                        
                    </div>
                    <img src="/Public/front/images/longline.png" style="margin:0 0 0 -15px; width:1500px;"><?php endforeach; endif; else: echo "" ;endif; ?>
                    <!-- <div>
                        <img src="/Public/front/images/mine-luser.png" style="margin:10px 0 0 0;">
                        <p style="margin:-38px 0 0 60px; font-size:10px;">我叫李自由</p>
                        <p style="float:right; margin:-13px 0 0 0; font-size:8px;">2016.11.22 15:06</p>
                        <div class="content">
                            <p style="margin:24px 0 0 20px;">我在河北师范大学！</p>
                            <img src="/Public/front/images/mine-hsd.png" width="300px" height="150px" style="margin:6px 0 0 20px;">
                        </div>
                        <br/>
                        &nbsp;<a href=""><img src="/Public/front/images/mine-dianzan.png"></a>
                        &nbsp;<a href=""><img src="/Public/front/images/mine-pinglun.png"></a>
                        &nbsp;<a href=""><img src="/Public/front/images/mine-zhuanfa.png"></a>
                        <a href=""><p style="float:right; margin:1px 0 0 0; font-size:6px; color:gray;">删除</p></a>
                    </div>
                    <img src="/Public/front/images/longline.png" style="margin:0 0 0 -15px; width:1500px;">

                    <div>
                        <img src="/Public/front/images/mine-luser.png" style="margin:10px 0 0 0;">
                        <p style="margin:-38px 0 0 60px; font-size:10px;">我叫李自由</p>
                        <p style="float:right; margin:-13px 0 0 0; font-size:8px;">2016.11.22 15:06</p>
                        <div class="content">
                            <p style="margin:24px 0 0 20px;">我在河北师范大学！</p>
                            <img src="/Public/front/images/mine-hsd.png" width="300px" height="150px" style="margin:6px 0 0 20px;">
                        </div>
                        <br/>
                        &nbsp;<a href=""><img src="/Public/front/images/mine-dianzan.png"></a>
                        &nbsp;<a href=""><img src="/Public/front/images/mine-pinglun.png"></a>
                        &nbsp;<a href=""><img src="/Public/front/images/mine-zhuanfa.png"></a>
                        <a href=""><p style="float:right; margin:1px 0 0 0; color:gray; font-size:6px;">删除</p></a>
                    </div> -->

                </div>
            </div>

        </div>

        <div data-role="footer" data-position="fixed"> 
            
            <div data-role="navbar">
              <ul>
                <li >
                    <a href="/index.php/Home/index/index.html"  onclick="location.href='/index.php/Home/index/index'" style="background-color:#6fd7ca;">
                        <img src="/Public/front/images/shouye.png" style="width:24px; height:24px;">
                        <p style="margin:1px 0px -5px 0px;color: #fff;font-size:12px;font-weight:100;font-family:'微软雅黑';">首页</p>
                    </a>
                </li>
                <li>
                    <a href="/index.php/Home/task/task.html"  style="background-color:#6fd7ca;" onclick="location.href='/index.php/Home/task/task'">
                        <img src="/Public/front/images/renwu.png" style="width:24px; height:24px;">
                        <p style="margin:1px 0px -5px 0px;color: #fff;font-size:12px;font-weight:100;font-family:'微软雅黑';">匹配任务</p>
                    </a>
                </li>
                <li>
                    <a href="/index.php/Home/kankan/kankan.html"  style="background-color:#6fd7ca;" onclick="location.href='/index.php/Home/kankan/kankan'">
                        <img src="/Public/front/images/kankan.png" style="width:24px; height:24px;">
                        <p style="margin:1px 0px -5px 0px;color: #fff;font-size:12px;font-weight:100;font-family:'微软雅黑';">看看</p>
                    </a>
                </li>
                <li>
                    <a href="/index.php/Home/foot/foot.html"  style="background-color:#6fd7ca;" onclick="location.href='/index.php/Home/foot/foot'">
                        <img src="/Public/front/images/zuji.png" style="width:24px; height:24px;">
                        <p style="margin:1px 0px -5px 0px;color: #fff;font-size:12px;font-weight:100;font-family:'微软雅黑';">足迹</p>
                    </a>
                </li>
                <li>
                    <a href="/index.php/Home/mine/mine.html"  style="background-color:#6fd7ca;">
                        <img src="/Public/front/images/wode.png" onclick="location.href='/index.php/Home/mine/mine'" style="width:24px; height:24px;">
                        <p style="margin:1px 0px -5px 0px;color: #fff;font-size:12px;font-weight:100;font-family:'微软雅黑';">我的</p>
                    </a>
                </li>
              </ul>
            </div>

        </div>
    </div>
</body> 
</html>