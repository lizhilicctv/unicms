<?php use UNI\tools\Db;?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title><?php echo getSession('system')["webname"]; ?></title>
		<meta name="keywords" content="<?php echo getSession('system')["keyword"]; ?>" />
		<meta name="description" content="<?php echo getSession('system')["miaoshu"]; ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<meta name="generator" content="lizhili team" />
		<meta name="author" content="lizhili team" />
		<meta name="copyright" content="lizhili team." />
		<link rel="stylesheet" href="<?php echo APP_CONFIG['__index__']; ?>css/font-awesome.min.css">
		<link href="<?php echo APP_CONFIG['__index__']; ?>css/iconfont.css" rel="stylesheet">
		<link href="<?php echo APP_CONFIG['__index__']; ?>css/animate.min.css" rel="stylesheet">
		<link href="<?php echo APP_CONFIG['__index__']; ?>css/global.css" rel="stylesheet">
		
	</head>
	<body>
		<?php include dirname(__FILE__).'/../common/_header.php'; ?>
		<?php include dirname(__FILE__).'/../common/_chat.php'; ?>
		
		
		
		
		<div class="case_banner CaseDetai_banner" style="background:url(<?php echo APP_CONFIG['__index__']; ?>images/casedetails_banenr.jpg) no-repeat 50%/cover;">
			<div class="case_banner_content">
				<div class="banner_content_left">
					<div class="content_left_title">李志立演示</div>
					<div class="content_left_txt"></div>
					<div class="content_left_button clear">
					
		
		
		                				<a href="#" class="fl iconfont"><span>&#xe602;</span>Prev Case</a>
														<a href="#"  class="fl iconfont">Next Case<span>&#xe602;</span></a>
										
						
					</div>
				</div>
				<div class="banner_content_right">
					<div class="content_right_img"><img src="<?php echo APP_CONFIG['__index__']; ?>images/3a4c98e06a97d13b41fa0f8f8ed4c2d6.jpg"></div>
					
					 				
						 <a href="http://www.biaotian.net/" class="content_right_more" target="_blank"><span class="iconfont">&#xe62f;</span>访问该网站</a>
						 			
					
					
					<div class="content_right_share">
						<dd>分享到</dd>
						<dt class="bdsharebuttonbox clear vertical" id="share">
							<a href="#" class="bds_tsina iconfont fl" data-cmd="tsina" title="分享到新浪微博">&#xe632;</a>
							<a href="#" class="bds_sqq iconfont fl" data-cmd="sqq" title="分享到QQ好友">&#xe663;</a>
							<a href="#" class="bds_weixin iconfont fl" data-cmd="weixin" title="分享到微信">&#xe603;</a>
							<a href="#" class="bds_weixin iconfont fl" data-cmd="tieba" title="分享到贴吧">&#xe683;</a>
						</dt>
					</div>
				</div>
			</div>
		</div>
		
		
		
		<div class="IndexService CaseDetail">
			<div class="IndexService_content all">
				<div class="IndexService_content_title clear">
					<dd class="fl">案例展示 / cases show</dd>
				</div>
				<div class="CaseDetail_content">
					<div class="CaseDetail_content_top">
					<p class='shadow10'><img src='<?php echo APP_CONFIG['__index__']; ?>images/3e6d66c8e2af606edf966a140f990f3e.jpg' alt='创力股份'/></p><p class='shadow10'><img src='<?php echo APP_CONFIG['__index__']; ?>images/02dc389991dcc7ec0f088f00a320229f.jpg' alt='创力股份'/></p><p class='shadow10'><img src='<?php echo APP_CONFIG['__index__']; ?>images/99c4dd468895a5dff84eed712e3b3135.jpg' alt='创力股份'/></p><p class='shadow10'><img src='<?php echo APP_CONFIG['__index__']; ?>images/0fb5950954faf30cc1c33f8c1cd1aff1.jpg' alt='创力股份'/></p><p class='shadow10'><img src='<?php echo APP_CONFIG['__index__']; ?>images/06bfe0c205f26cd06660b99ff4b186d9.jpg' alt='创力股份'/></p><p class='shadow10'><img src='<?php echo APP_CONFIG['__index__']; ?>images/c179866a64ba14a0a2598d53d93a64f5.jpg' alt='创力股份'/></p>			</div>
					
					<div class="CaseDetail_content_contact">
						<a href="http://wpa.qq.com/msgrd?v=3&uin=821642832&site=qq&menu=yes" target="_blank">+我也有这样的需求+</a>
					</div>
				</div>
			</div>
		</div>
		

		
		<?php include dirname(__FILE__).'/../common/_footer.php'; ?>
		<script type="text/javascript" src="<?php echo APP_CONFIG['__index__']; ?>js/jquery-1.8.3.min.js"></script>
		<script src="<?php echo APP_CONFIG['__index__']; ?>js/canvas.js"></script>
		<script src="<?php echo APP_CONFIG['__index__']; ?>js/global.js"></script>
		<script src="<?php echo APP_CONFIG['__index__']; ?>js/iconfont.js"></script>	
		
		
	</body> 
</html>
