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
		
		
		
		
		
		<div class="details_banner" style="background:url(<?php echo APP_CONFIG['__index__']; ?>images/news_banner.jpg) no-repeat 50%/cover;"></div>
		
		
		
		
		
		<div class="IndexService NewsDetails">
			<div class="IndexService_content all">
				<div class="NewsDetails_title">
					<h1>以下几种链接是不会被百度抓取的，交换友情链接的时候要注意！</h1>
					<div class="NewsDetails_title_sort clear vertical">
						<span class="fl">发布时间：2019-01-11</span>
						<span class="fl">浏览：1457</span>
					</div>
				</div>
				<div class="NewsDetails_content">
					<div class="NewsDetails_content_top">
						<p><img src="<?php echo APP_CONFIG['__index__']; ?>images/d72401dd036a2b92e431354943bd8ef1.jpg" alt="timg (5).jpg" width="500" height="300" /></p>
		<p>做SEO的同学都知道友情链接可以很好的引蜘蛛，但是偏偏有一些站长就是喜欢在友情链接上做手脚，这里列举常见的作弊手段，大家可以在交换友情链接的时候防范一下。</p>
		<p>作弊一：robots文件屏蔽链接</p>
		<p>对方网站robots屏蔽了所有的友情链接或者你的链接，那么这样百度是不会抓取你的网站的，这种交换没有意义，Disallow 意思就是不让抓取，看下对方robots文件是否有这样的写法。</p>
		<p>作弊二：友情链接加入nofollow属性</p>
		<p>nofollow的意思是百度不传递权重，这样的链接也是没有意义的，F12看链接的代码即可分辨。</p>
		<p>作弊三：框架嵌套iframe</p>
		<p>这是比较低端的手法，使用F12也能看代码。</p>
		<p>作弊四：虚假首页的链接</p>
		<p>对方给你做链接的网址压根可能不是权重高的那个，只是看起来是一样网站，其实并不是一个网站，使用站长工具查询即可。</p>
		<p>作弊五：JS生成的友情链接</p>
		<p>这种连接蜘蛛也是不会抓取的，要查看这种连接，需要看网页的源代码，搜索一下里面是否有你的友情链接即可，因为按F12是可以看到的，但是源代码里是没有的。</p>
		<p>其他还有一些垃圾站点，作弊站点也要注意。</p>
					</div>
					<div class="NewsDetails_content_bottom clear">
						<div class="content_bottom_left fl">
						 <div class='bottom_left_copyright'>此内容来源于网络，如涉及版权问题请与我们联系。</div>				
						
							
							<div class="bottom_left_TAG clear">
								<dd class="fl">TAG</dd>
								<dt class="fl clear">
															</dt>
							</div>
						</div>
						<div class="content_bottom_help fl">
							<a href="javascript:;">
								<dd class="iconfont">&#xe605;</dd>
								<dt>0</dt>
							</a>
							<div class="bottom_help_content">该内容对我有帮助</div>
						</div>
					</div>
				</div>
				<div class="NewsDetails_page clear">
					<div class="NewsDetails_page_left fl">
						<div class="page_left_list clear">
							<dd class="fl">上一篇：</dd>
							<a href='news/show.html'>传统企业为什么需要做网站</a>
						</div>
						<div class="page_left_list clear">
							<dd class="fl">下一篇：</dd>
							<a href='news/show.html'>返回列表</a>
						</div>
					</div>
					<a href="/news.html" onclick="javascript:history.back(-1);" class="NewsDetails_page_back fr"><span class="iconfont">&#xe6eb;</span>返回列表</a>
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
