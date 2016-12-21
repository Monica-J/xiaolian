<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
    <title>看看</title>
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <link rel="stylesheet" href="/xiaoliangit/xiaolian-v0.1/Public/front/css/jquery.mobile-1.4.5.min.css" />
    <script src="/xiaoliangit/xiaolian-v0.1/Public/front/js/jquery-2.2.2.js"></script>
    <script src="/xiaoliangit/xiaolian-v0.1/Public/front/js/jquery.mobile-1.4.5.min.js"></script>
</head>
<body>
	<div data-role="page">
        <div data-role="header" style="background-color:#6fd7ca;color:#fff;">
            <h1 style="font-weight:200;">看看其他人</h1>
        </div>		

		<div data-role="content">
			
			<div style="margin:-30px 0 0 0;">
				
                <br/>
                <?php if(is_array($dynamic)): $i = 0; $__LIST__ = $dynamic;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$d): $mod = ($i % 2 );++$i;?><div>
                    <img src="<?php echo ($url); echo ($d["userpic"]); ?>"  width="50px" height="50px" style="margin:10px 0 0 0;border-radius:50%">
                    <p style="margin:-38px 0 0 60px; font-size:10px;"><?php echo ($d["username"]); ?></p>
                    <p style="float:right; margin:-13px 0px 0 24px; font-size:8px;"><?php echo ($d["addtime"]); ?></p>
                    <div class="content">
                        <p style="margin:24px 0 0 20px;"><?php echo ($d["content"]); ?></p>
                        <img src="/xiaoliangit/xiaolian-v0.1/Public/front/images/mine-hsd.png" width="300px" height="150px" style="margin:6px 0 0 20px;">
                        </div>
                        <br/>
                        &nbsp;<img src="/xiaoliangit/xiaolian-v0.1/Public/front/images/mine-dianzan.png" onclick="location.href='/xiaoliangit/xiaolian-v0.1/index.php/Home/kankan/dianzan/id/<?php echo ($d["id"]); ?>'"><small style="color:#8E8E8E;font-size:12px;font-weight:200;"><?php echo ($d["scantime"]); ?></small>
                        &nbsp;<a href=""><img src="/xiaoliangit/xiaolian-v0.1/Public/front/images/mine-pinglun.png"></a>
                        &nbsp;<a href=""><img src="/xiaoliangit/xiaolian-v0.1/Public/front/images/mine-zhuanfa.png"></a>
                    </div>
                    <img src="/xiaoliangit/xiaolian-v0.1/Public/front/images/longline.png" style="margin:0 0 0 -15px; width:1500px;"><?php endforeach; endif; else: echo "" ;endif; ?>
                   <!--  <img src="/xiaoliangit/xiaolian-v0.1/Public/front/images/longline.png" style="margin:0 0 0 -15px; width:1500px; ">

                    <div>
                    <img src="/xiaoliangit/xiaolian-v0.1/Public/front/images/kankan-user.png" style="margin:10px 0 0 0;">
                    <p style="margin:-38px 0 0 60px; font-size:10px;">liberté</p>
                    <p style="float:right; margin:-13px 0px 0 240px; font-size:8px;">2016.11.22 15:06</p>
                    <div class="content">
                    	<p style="margin:24px 0 0 20px;">我在河北师范大学！</p>
                    	<img src="/xiaoliangit/xiaolian-v0.1/Public/front/images/mine-hsd.png" width="300px" height="150px" style="margin:6px 0 0 20px;">
                        </div>
                        <br/>
                        &nbsp;<a href=""><img src="/xiaoliangit/xiaolian-v0.1/Public/front/images/mine-dianzan.png"></a>
                        &nbsp;<a href=""><img src="/xiaoliangit/xiaolian-v0.1/Public/front/images/mine-pinglun.png"></a>
                        &nbsp;<a href=""><img src="/xiaoliangit/xiaolian-v0.1/Public/front/images/mine-zhuanfa.png"></a>
                    </div>
                    <img src="/xiaoliangit/xiaolian-v0.1/Public/front/images/longline.png" style="margin:0 0 0 -15px; width:1500px;">

                    <div>
                    <img src="/xiaoliangit/xiaolian-v0.1/Public/front/images/kankan-user.png" style="margin:10px 0 0 0;">
                    <p style="margin:-38px 0 0 60px; font-size:10px;">liberté</p>
                    <p style="float:right; margin:-13px 0px 0 240px; font-size:8px;">2016.11.22 15:06</p>
                    <div class="content">
                    	<p style="margin:24px 0 0 20px;">我在河北师范大学！</p>
                    	<img src="/xiaoliangit/xiaolian-v0.1/Public/front/images/mine-hsd.png" width="300px" height="150px" style="margin:6px 0 0 20px;">
                        </div>
                        <br/>
                        &nbsp;<a href=""><img src="/xiaoliangit/xiaolian-v0.1/Public/front/images/mine-dianzan.png"></a>
                        &nbsp;<a href=""><img src="/xiaoliangit/xiaolian-v0.1/Public/front/images/mine-pinglun.png"></a>
                        &nbsp;<a href=""><img src="/xiaoliangit/xiaolian-v0.1/Public/front/images/mine-zhuanfa.png"></a>
                    </div>
                    <img src="/xiaoliangit/xiaolian-v0.1/Public/front/images/longline.png" style="margin:0 0 0 -15px; width:1500px;">

                    <div>
                    <img src="/xiaoliangit/xiaolian-v0.1/Public/front/images/kankan-user.png" style="margin:10px 0 0 0;">
                    <p style="margin:-38px 0 0 60px; font-size:10px;">liberté</p>
                    <p style="float:right; margin:-13px 0px 0 240px; font-size:8px;">2016.11.22 15:06</p>
                    <div class="content">
                    	<p style="margin:24px 0 0 20px;">我在河北师范大学！</p>
                    	<img src="/xiaoliangit/xiaolian-v0.1/Public/front/images/mine-hsd.png" width="300px" height="150px" style="margin:6px 0 0 20px;">
                        </div>
                        <br/>
                        &nbsp;<a href=""><img src="/xiaoliangit/xiaolian-v0.1/Public/front/images/mine-dianzan.png"></a>
                        &nbsp;<a href=""><img src="/xiaoliangit/xiaolian-v0.1/Public/front/images/mine-pinglun.png"></a>
                        &nbsp;<a href=""><img src="/xiaoliangit/xiaolian-v0.1/Public/front/images/mine-zhuanfa.png"></a>
                    </div>
 -->
			</div>
		</div>

		<div data-role="footer" data-position="fixed"> 
            <div data-role="navbar">
              <ul>
                <li >
                    <a href="/xiaoliangit/xiaolian-v0.1/index.php/Home/index/index.html"  onclick="location.href='/xiaoliangit/xiaolian-v0.1/index.php/Home/index/index'" style="background-color:#6fd7ca;">
                        <img src="/xiaoliangit/xiaolian-v0.1/Public/front/images/shouye.png" style="width:24px; height:24px;">
                        <p style="margin:1px 0px -5px 0px;color: #fff;font-size:12px;font-weight:100;font-family:'微软雅黑';">首页</p>
                    </a>
                </li>
                <li>
                    <a href="/xiaoliangit/xiaolian-v0.1/index.php/Home/task/task.html"  style="background-color:#6fd7ca;" onclick="location.href='/xiaoliangit/xiaolian-v0.1/index.php/Home/task/task'">
                        <img src="/xiaoliangit/xiaolian-v0.1/Public/front/images/renwu.png" style="width:24px; height:24px;">
                        <p style="margin:1px 0px -5px 0px;color: #fff;font-size:12px;font-weight:100;font-family:'微软雅黑';">匹配任务</p>
                    </a>
                </li>
                <li>
                    <a href="/xiaoliangit/xiaolian-v0.1/index.php/Home/kankan/kankan.html"  style="background-color:#6fd7ca;" onclick="location.href='/xiaoliangit/xiaolian-v0.1/index.php/Home/kankan/kankan'">
                        <img src="/xiaoliangit/xiaolian-v0.1/Public/front/images/kankan.png" style="width:24px; height:24px;">
                        <p style="margin:1px 0px -5px 0px;color: #fff;font-size:12px;font-weight:100;font-family:'微软雅黑';">看看</p>
                    </a>
                </li>
                <li>
                    <a href="/xiaoliangit/xiaolian-v0.1/index.php/Home/foot/foot.html"  style="background-color:#6fd7ca;" onclick="location.href='/xiaoliangit/xiaolian-v0.1/index.php/Home/foot/foot'">
                        <img src="/xiaoliangit/xiaolian-v0.1/Public/front/images/zuji.png" style="width:24px; height:24px;">
                        <p style="margin:1px 0px -5px 0px;color: #fff;font-size:12px;font-weight:100;font-family:'微软雅黑';">足迹</p>
                    </a>
                </li>
                <li>
                    <a href="/xiaoliangit/xiaolian-v0.1/index.php/Home/mine/mine.html"  style="background-color:#6fd7ca;">
                        <img src="/xiaoliangit/xiaolian-v0.1/Public/front/images/wode.png" onclick="location.href='/xiaoliangit/xiaolian-v0.1/index.php/Home/mine/mine'" style="width:24px; height:24px;">
                        <p style="margin:1px 0px -5px 0px;color: #fff;font-size:12px;font-weight:100;font-family:'微软雅黑';">我的</p>
                    </a>
                </li>
              </ul>
            </div>
        </div>

	</div>

</body>
</html>