<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
	<meta charset="utf-8" />
    <title>首页</title>
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <link rel="stylesheet" href="/xiaoliangit/xiaolian-v0.1/Public/front/css/jquery.mobile-1.4.5.min.css" />
    <script src="/xiaoliangit/xiaolian-v0.1/Public/front/js/jquery-2.2.2.js"></script>
    <script src="/xiaoliangit/xiaolian-v0.1/Public/front/js/jquery.mobile-1.4.5.min.js"></script>

<style type="text/css">
	*{margin:0;padding:0;list-style:none;border:0;}
	p{color:#8E8E8E;font-size:12px;font-weight:200;}
</style>
  </head>

  <body>
	<div data-role="page">
		<div data-role="header" style="background-color:#6fd7ca;color:#fff;">
			<a href="/xiaoliangit/xiaolian-v0.1/index.php/Home/index/index.html" data-role="button" data-icon="arrow-l" data-iconpos="notext"></a>
			<h1 style="font-weight:200;">更多活动</h1>
		</div>

		<div data-role="content">
			<div class="panel-1" style="margin-bottom: -10px">
				<!-- <a href="/xiaoliangit/xiaolian-v0.1/index.php/Home/index/activity-specific.html" style="text-decoration:none;">
                    <span><img src="/xiaoliangit/xiaolian-v0.1/Public/front/images/index-activity.png" style="width:100%">
                    <p style="color:#8E8E8E;">河北师范大学2016年度迎新送老晚会将于9月23日在软件楼门口举行，届时将会有精彩的演出，欢迎同学们前来观看</p>
                	</span>
                </a> -->
                    <?php if(is_array($news)): $i = 0; $__LIST__ = $news;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$n): $mod = ($i % 2 );++$i;?><!-- <span><img src="<?php echo ($n["newspic"]); ?>"  style="width:100%">
                         <p style="color:#8E8E8E;font-size:12px;font-family:'微软雅黑';font-weight:200;"><?php echo ($n["content"]); ?></p>
                         </span> -->
                         <?php echo ($n["content"]); endforeach; endif; else: echo "" ;endif; ?>
			</div>
			<img src="/xiaoliangit/xiaolian-v0.1/Public/front/longline.png" style="width:1500px;height:1px;margin-left:-20px;">
			<div class="panel-2" style="margin-bottom: -10px; margin-top: 10px;">
				<a href="/xiaoliangit/xiaolian-v0.1/index.php/Home/index/activity-specific.html" style="text-decoration:none;">
                    <img src="/xiaoliangit/xiaolian-v0.1/Public/front/images/index-activity.png" style="width:100%">
                    <p style="color:#8E8E8E;">河北师范大学2016年度迎新送老晚会将于9月23日在软件楼门口举行，届时将会有精彩的演出，欢迎同学们前来观看</p>
                </a>
			</div>
			<img src="/xiaoliangit/xiaolian-v0.1/Public/front/longline.png" style="width:1500px;height:1px;margin-left:-20px;">
		</div>

		<div data-role="footer" data-position="fixed">
			
		</div>
	</div>

  </body>


</html>