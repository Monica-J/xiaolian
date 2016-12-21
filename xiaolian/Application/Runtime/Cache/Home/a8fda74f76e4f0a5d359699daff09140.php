<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html> 
<html> 
<head> 
    <meta charset="utf-8" />
    <title>我的</title>
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <link rel="stylesheet" href="/Public/front/css/jquery.mobile-1.4.5.min.css" />
    <script src="/Public/front/js/jquery-2.2.2.js"></script>
    <script src="/Public/front/js/jquery.mobile-1.4.5.min.js"></script>
</head>

<body> 
    <div data-role="page"> 
        <div data-role="header" data-position="fixed">              
            <?php if(is_array($user)): $i = 0; $__LIST__ = $user;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$u): $mod = ($i % 2 );++$i;?><!--用户部分信息-->
            <div class="user" style="height:200px; background:url(/Public/front/images/mine-bg.png);" >
                <button type="button" id="open" style="background:url(/Public/front/images/mine-logout.png); width:25px; height:25px; float:left; margin-left:7px; border:none;" onclick="logOutIn()"></button>
                <a href="/index.php/Home/mine/shezhi.html" onclick="location.href='/index.php/Home/mine/shezhi'"><img src="/Public/front/images/mine-shezhi.png" style="float:right; margin:5px 5px 0 0;"></a>
                <br/>
                <br/>
                <a href="#"><img src="<?php echo ($url); echo ($u["userpic"]); ?>"  width="90px"  height="90px" style="clear: both; display: block; margin:auto;border-radius:50%"></a>
                <p style="margin:4px 0 0 0; font-size:14px; text-align:center;"><?php echo ($u["username"]); ?></p>
                <p style="font-size:10px; color:#7d8180; text-align: center;"><?php echo ($u["introduce"]); ?></p><?php endforeach; endif; else: echo "" ;endif; ?>
            </div>

            <!--导航条-->
            <div data-role="navbar">
                <ul>
                    <li>
                        <a href="haoyou.html" onclick="location.href='/index.php/Home/mine/haoyou'" ><img src="/Public/front/images/mine-haoyou.png" style="margin:4px 0 3px -50px;"><p style="margin:-24px 0 0 25px;">好友 <?php echo ($fc); ?></p></a>
                    </li>
                    <li>
                        <a href="shoucang.html" onclick="location.href='/index.php/Home/mine/shoucang'"><img src="/Public/front/images/mine-shoucang.png" style="margin:4px 0 3px -50px;"><p style="margin:-24px 0 0 25px;">收藏 <?php echo ($cc); ?></p></a>
                    </li>
                    <li>
                        <a href="chengjiu.html"><img src="/Public/front/images/mine-chengjiu.png" style="margin:4px 0 3px -50px;"><p style="margin:-24px 0 0 25px;">成就 5</p></a>
                    </li>
                    <li>
                        <a href="tixing.html"><img src="/Public/front/images/mine-tixing.png" style="margin:4px 0 3px -50px;"><p style="margin:-24px 0 0 25px;">提醒 <?php echo ($dt); ?></p></a>
                    </li>
                </ul>
            </div>
        
        </div>


        <div data-role="content"> 
            
            <!--我的动态-->
            <div style="margin:2px 0 0 0;">
                <h5 style="margin:-10px 0 0 0;">我的动态</h5>
                <!--发布动态-->
                <div>
                    <img src="<?php echo ($url); echo ($u["userpic"]); ?>" width="50px" height="50px" style="margin:10px 0 0 0;border-radius:50%">
                    <form style="margin:-55px 0 0 70px;">
                        <label for="text"></label>
                        <a href="#page2" onclick="location.href='/index.php/Home/mine/dongtai'"><input type="text" name="text" id="text" placeholder="说说你想说的吧！" style="background:url(/Public/front/images/mine-talkbg.png);"></a>
                    </form>
                </div>
                <img src="/Public/front/images/longline.png" style="margin:0 0 0 -15px; width:1500px;">
                <!--历史动态-->
                <div>
                    
                    <div>
                    <?php if(is_array($dynamic)): $i = 0; $__LIST__ = $dynamic;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$d): $mod = ($i % 2 );++$i;?><img src="<?php echo ($url); echo ($u["userpic"]); ?>" width="50px" height="50px" style="margin:10px 0 0 0;border-radius:50%">
                        <p style="margin:-38px 0 0 60px; font-size:10px;"><?php echo ($d["username"]); ?></p>
                        <p style="float:right; margin:-13px 0 0 0; font-size:8px;"><?php echo ($d["addtime"]); ?></p>
                        <div class="content">
                            <p style="margin:24px 0 0 20px;"><?php echo ($d["content"]); ?></p>
                            <img src="<?php echo ($url); echo ($d["pic"]); ?>" width="300px" height="150px" style="margin:6px 0 0 20px;">
                        </div>
                        <br/>
                        &nbsp;<img src="/Public/front/images/mine-dianzan.png"><small style="color:#8E8E8E;font-size:12px;font-weight:200;"><?php echo ($d["scantime"]); ?></small>
                        &nbsp;<a href=""><img src="/Public/front/images/mine-pinglun.png"></a>
                        &nbsp;<a href=""><img src="/Public/front/images/mine-zhuanfa.png"></a>
                        <a href="" onclick="location.href='/index.php/Home/mine/del/id/<?php echo ($d["id"]); ?>'"><p style="float:right; margin:1px 0 0 0; color:gray; font-size:6px;">删除</p></a>
                        <img src="/Public/front/images/longline.png" style="margin:0 0 0 -15px; width:1500px;"><?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
                    

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
    <script type="text/javascript">
        function logOutIn(){
            var r = confirm("是否退出登录？");
            if (r == true) {

                window.location.href = '/index.php/Home/denglu/enter.html'
            }
            else{

            }
        }
    </script>
</body> 
</html>