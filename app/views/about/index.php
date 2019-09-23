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
		
		
		
		<div class="about_banner">
			<div class="about_banner_img"><img src="<?php echo APP_CONFIG['__index__']; ?>images/about_banner.jpg"></div>
			<div class="about_banner_content">
				<dd>致力于互联网品牌建设与网络营销</dd>
				<div class="banner_content_logo"><img src="<?php echo APP_CONFIG['__index__']; ?>images/about_logo.png"></div>
				<dt>
					<p>李志立开发团队——致力于互联网技术服务、开发及应用，为企事业单位提供一站式、完善的整合网络品牌服务。</p>
					<p>从网络品牌的策划、创建、品牌推广，发展到品牌维护和管理，对网络资源进行分析、诊断、整合，为提升品牌价值提供策略、创意、设计、顾问服务，并专注于对网络品牌、网络策划、设计视觉等方面的探索和研究，保证了策划、开发、设计、方案实施、研究等完善的专业化运作，根据客户具体情况制定系列专业和规范的客户服务和保障体系，为企业提供周到、放心的一站式服务。</p>
				</dt>
			</div>
		</div>
		
		
		
		<div class="AboutDetails">
			<div class="AboutDetails_innovate clear">
				<div class="AboutDetails_innovate_left fl"><img src="<?php echo APP_CONFIG['__index__']; ?>images/bg18.jpg" class="tra"></div>
				<div class="AboutDetails_innovate_right fl">
					<div class="innovate_right_list clear">
						<div class="right_list_img fl"><img src="<?php echo APP_CONFIG['__index__']; ?>images/bg19.jpg" class="tra"></div>
						<div class="right_list_content fl">
							<div class="list_content_img"><img src="<?php echo APP_CONFIG['__index__']; ?>images/bn26.png"></div>
							<div class="list_content_txt">
								<dd>科技<span>technology</span></dd>
								<dt>服务客户的尖端武器</dt>
							</div>
						</div>
					</div>
					<div class="innovate_right_list clear">
						<div class="right_list_img fr"><img src="<?php echo APP_CONFIG['__index__']; ?>images/bg20.jpg" class="tra"></div>
						<div class="right_list_content fl">
							<div class="list_content_img"><img src="<?php echo APP_CONFIG['__index__']; ?>images/bn27.png"></div>
							<div class="list_content_txt">
								<dd>创新 <span>innovate</span></dd>
								<dt>领跑行业的动力源</dt>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="AboutDetails_culture clear all" id="qywh" name="qywh">
				<div class="AboutDetails_culture_left fl">
					<div class="culture_left_img"><img src="<?php echo APP_CONFIG['__index__']; ?>images/bn29.png"></div>
					<div class="culture_left_title">
						<dd>李志立<span>TEAM CULTURE</span></dd>
						<dt>
							<p>曾经，工匠是一个中国老百姓日常生活须臾不可离的职业，木匠、铜匠、铁匠、石匠、篾匠等，各类手工匠人用他们精湛的技艺为传统生活景图定下底色。随着农耕时代结束，社会进入后工业时代，一些与现代生活不相适应的老手艺、老工匠逐渐淡出日常生活，但工匠精神永不过时。</p>
							<p>工匠精神就是要求红火团队人员如同一个工匠一样，雕琢研发的产品，精益求精，经得起市场的考验和推敲。工匠精神的核心是红火要追求科技创新，技术进步。古语云：“玉不琢，不成器”。工匠精神不仅体现了对产品精心打造、精工制作的理念和追求，更是要不断吸收最前沿的技术，创造出新成果。</p>
						</dt>
					</div>
				</div>
				<div class="AboutDetails_culture_right fr"><img src="<?php echo APP_CONFIG['__index__']; ?>images/bg21.jpg" class="tra"></div>
			</div>
			<div class="AboutDetails_culture AboutDetails_provider clear all">
				<div class="AboutDetails_culture_left fr">
					<div class="culture_left_img"><img src="<?php echo APP_CONFIG['__index__']; ?>images/bg22.jpg"></div>
					<div class="culture_left_title">
						<dd>成为受大众信赖和喜爱的服务商</dd>
						<dt>
							<p>李志立的众多业务都与客户互联网业务的发展息息相关，成为受客户信赖和喜爱的诚信企业，是我们不变的愿景。我们致力于提供优质、安全的产品和服务，主动发掘客户的潜在需求；我们以开放的方式激励更多人参与创新，将新技术与卓越的商业模式相结合，不断创造出动人心弦的惊喜；我们高度重视客户体验和他们的意见，不断完善客户关系管理体系，与客户共同成长，并将这一过程视为成就卓越的价值所在。</p>
						</dt>
					</div>
				</div>
				<div class="AboutDetails_culture_right fl"><img src="<?php echo APP_CONFIG['__index__']; ?>images/bn30.png"></div>
			</div>
			<div class="AboutDetails_culture AboutDetails_honor clear all" id="zzry" name="zzry">
				<div class="AboutDetails_culture_left fl">
					<div class="culture_left_img"><img src="<?php echo APP_CONFIG['__index__']; ?>images/bg24.jpg" class="tra"></div>
					<div class="culture_left_title">
						<dd>资质荣誉</dd>
						<dt>
							<p>为客户提供稳定安全的产品服务，是我们不变的宗旨。互联网发展速度是最快的行业，在这个行业中又有着数不胜数的互联网公司。那么我们从产品安全上为客户提供保障，XX科技与阿里云合作为客户产品提供稳定的运行环境。同时我们获得自己的CMS软件著作权，产品产权使用更放心！</p>
						</dt>
						<div class="AboutDetails_honor_content clear">
							<div class="fl"><img src="<?php echo APP_CONFIG['__index__']; ?>images/honor1.jpg"></div>
							<div  class="fl"><img src="<?php echo APP_CONFIG['__index__']; ?>images/honor2.jpg"></div>
							<div  class="fl"><img src="<?php echo APP_CONFIG['__index__']; ?>images/honor3.jpg"></div>
						</div>
					</div>
				</div>
				<div class="AboutDetails_culture_right fr"><img src="<?php echo APP_CONFIG['__index__']; ?>images/bg23.jpg" class="tra"></div>
			</div>
		</div>
		
		
		<div class="IndexService partner partner_detail">
			<div class="IndexService_content all wow fadeIn">
				<div class="IndexService_content_title">
					<dd>我们的合作伙伴</dd>
				</div>
				<div class="partner_content clear">
					<div class="partner_content_list fl"><img src="<?php echo APP_CONFIG['__index__']; ?>images/bn8.png" class="gray"></div>	
					<div class="partner_content_list fl"><img src="<?php echo APP_CONFIG['__index__']; ?>images/bn9.png" class="gray"></div>	
					<div class="partner_content_list fl"><img src="<?php echo APP_CONFIG['__index__']; ?>images/bn10.png" class="gray"></div>	
					<div class="partner_content_list fl"><img src="<?php echo APP_CONFIG['__index__']; ?>images/bn11.png" class="gray"></div>	
					<div class="partner_content_list fl"><img src="<?php echo APP_CONFIG['__index__']; ?>images/bn12.png" class="gray"></div>	
					<div class="partner_content_list fl"><img src="<?php echo APP_CONFIG['__index__']; ?>images/bn13.png" class="gray"></div>	
					<div class="partner_content_list fl"><img src="<?php echo APP_CONFIG['__index__']; ?>images/bn14.png" class="gray"></div>	
					<div class="partner_content_list fl"><img src="<?php echo APP_CONFIG['__index__']; ?>images/bn15.png" class="gray"></div>	
					<div class="partner_content_list fl"><img src="<?php echo APP_CONFIG['__index__']; ?>images/bn16.png" class="gray"></div>	
					<div class="partner_content_list fl"><img src="<?php echo APP_CONFIG['__index__']; ?>images/bn17.png" class="gray"></div>	
					<div class="partner_content_list fl"><img src="<?php echo APP_CONFIG['__index__']; ?>images/bn18.png" class="gray"></div>	
					<div class="partner_content_list fl"><img src="<?php echo APP_CONFIG['__index__']; ?>images/bn19.png" class="gray"></div>	
					<div class="partner_content_list fl"><img src="<?php echo APP_CONFIG['__index__']; ?>images/bn20.png" class="gray"></div>	
					<div class="partner_content_list fl"><img src="<?php echo APP_CONFIG['__index__']; ?>images/bn21.png" class="gray"></div>	
					<div class="partner_content_list fl"><img src="<?php echo APP_CONFIG['__index__']; ?>images/bn22.png" class="gray"></div>	
					<div class="partner_content_list fl"><img src="<?php echo APP_CONFIG['__index__']; ?>images/bn23.png" class="gray"></div>	
					<div class="partner_content_list fl"><img src="<?php echo APP_CONFIG['__index__']; ?>images/bn24.png" class="gray"></div>	
					<div class="partner_content_list fl"><img src="<?php echo APP_CONFIG['__index__']; ?>images/bn25.png" class="gray"></div>		
				</div>
			</div>
		</div>
		
		
		
		<div class="IndexService AboutNews">
			<div class="IndexService_content all wow fadeIn">
				<div class="IndexService_content_title">
					<dd>新闻动态</dd>
					<dt>
						<p>我们会定期发布一些关于SEO的优化文章，让您对网站优化有更深入的了解</p>
					</dt>
				</div>
				<div class="AboutNews_content clear">
					<div class="AboutNews_content_left fl">
									<a href="newsinfo.html#hyxw/1564.html" class="content_left_list fl" title="企业网站做SEO很长时间了，但是却没有什么效果"><img src="<?php echo APP_CONFIG['__index__']; ?>images/94d336d09f42268ec1d7771a91eb3e8d.jpg" alt="企业网站做SEO很长时间了，但是却没有什么效果" class="tra"></a>
									<a href="newsinfo.html#hyxw/1563.html" class="content_left_list fl" title="互联网又进入“寒冬” 坚守网站运营却没有感觉到呢"><img src="<?php echo APP_CONFIG['__index__']; ?>images/28cd1c78667e0f54f50839cc3dfcb477.jpg" alt="互联网又进入“寒冬” 坚守网站运营却没有感觉到呢" class="tra"></a>
									<a href="newsinfo.html#hyxw/1562.html" class="content_left_list fl" title="定制型网站具有什么特点?有哪些优势?"><img src="<?php echo APP_CONFIG['__index__']; ?>images/8f6768d7ebbaf047dba8b2b06171e7ea.jpg" alt="定制型网站具有什么特点?有哪些优势?" class="tra"></a>
									<a href="newsinfo.html#xuetang/1561.html" class="content_left_list fl" title="新网站运营四大误区 看你有没有"><img src="<?php echo APP_CONFIG['__index__']; ?>images/011a8a8d743873e174a9c23aec3b06bd.jpg" alt="新网站运营四大误区 看你有没有" class="tra"></a>
					 
						
					</div>
					<div class="AboutNews_content_right fr clear">
									<a href="newsinfo.html#hyxw/1566.html" class="content_right_list fl">
							<dd>以下几种链接是不会被百度抓取的，交换友情链接的时候要注意！</dd>
							<dt>01-11</dt>
							<p>做SEO的同学都知道友情链接可以很好的引蜘蛛，但是偏偏有一些站长就是喜欢在友情链接上做手脚，这里列举常见的作弊手段，大家可以在交换友情链接的时候防范一下。作弊一：robots文件屏蔽链接对方网站robots屏蔽了所有的友情链接或者你的链接，那么这样百度是不会抓取你的网站的，这种交换没有意义，Disallow 意思就是不让抓取，看下对方robots文件是否有这样的写</p>
						</a>
									<a href="newsinfo.html#hyxw/1565.html" class="content_right_list fl">
							<dd>传统企业为什么需要做网站</dd>
							<dt>01-11</dt>
							<p>企业需要做网站相信很多企业老板也都意识到了，但是还是有一些老板并怎么了解如何运用网站实现网络营销直接给公司带来利润。只是看到别的企业有网站，也就随大流随便的做了个网站，还有一个传统企业的老板根本就没有做网站的意识，任务纯粹是在浪费钱。鉴于还有很多客户朋友的这种误区，在此我们向客户朋友简单的介绍下传统企业为什么需要做网站。网站建设</p>
						</a>
					 
					
						
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
