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
		<link href="<?php echo APP_CONFIG['__index__']; ?>css/banner.css" rel="stylesheet">
		<link href="<?php echo APP_CONFIG['__index__']; ?>css/iconfont.css" rel="stylesheet">
		<link href="<?php echo APP_CONFIG['__index__']; ?>css/animate.min.css" rel="stylesheet">
		<link href="<?php echo APP_CONFIG['__index__']; ?>css/carousel.css" rel="stylesheet">
		<link href="<?php echo APP_CONFIG['__index__']; ?>css/global.css" rel="stylesheet">
		
	</head>
	<body>
		<?php include dirname(__FILE__).'/../common/_header.php'; ?>
		<?php include dirname(__FILE__).'/../common/_chat.php'; ?>
		<div class="banner">
			<div class="slick-hero-slider-wrapper">
			    <div class="slider slick-hero-slider slick-slider-center-mode slick-animation slick-inner-dot alt-dot-position with-main-search-wrapper-2">
			         <div class="slick-item">
			            <div class="image-bg" style=" background:url(<?php echo APP_CONFIG['__index__']; ?>images/index_banner.jpg) no-repeat 50%/cover">
		                    <div class="container">
		                        <div class="row">
		                            <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-10">
		                                <div class="slick-hero-slider-caption">
		                                    <dd class="animation fromBottom transitionDelay2"><img src="<?php echo APP_CONFIG['__index__']; ?>images/bn1.png"></dd>
		                                    <div class="animation fromBottom transitionDelay4">十余载致力于互联网技术服务、开发及应用，为企事业单位提供一站式、完善的整合网络品牌服务</div>
		                                    <dd class="animation fromBottom transitionDelay6">
		                                        <p>More than ten years dedicated to Internet technology services, development and application,</p>
		                                        <p>providing a one-stop, integrated network brand service for enterprises and institutions.</p>
		                                    </dd>
		                                </div>
		                            </div>
		                        </div>
		                    </div>
		                </div>
			        </div>
		            <div class="slick-item">
			            <div class="image-bg Network_bg" style=" background:url(<?php echo APP_CONFIG['__index__']; ?>images/index_banner4.jpg) no-repeat 50%/cover">
		                	<div class="container">
		                        <div class="row">
		                            <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-10">
		                                <div class="slick-hero-slider-caption Network">
		                                    <dd class="animation fromBottom transitionDelay2">Lizhili</dd>
		                                    <div class="animation fromBottom transitionDelay4">致力于做服务最好的网站建设公司</div>
		                                    <div class="animation fromBottom transitionDelay4">已服务客户2000+</div>
		                                </div>
		                            </div>
		                        </div>
		                    </div>
		                </div>
			        </div>
		            <div class="slick-item">
			            <div class="image-bg" style=" background:url(<?php echo APP_CONFIG['__index__']; ?>images/index_banner5.jpg) no-repeat 50%/cover">
		                	<div class="container">
		                        <div class="row">
		                            <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-10">
		                                <div class="slick-hero-slider-caption year">
		                                    <b class="bg2"><img src="<?php echo APP_CONFIG['__index__']; ?>images/banner_yuan.png"></b>
		                                    <dd><img src="<?php echo APP_CONFIG['__index__']; ?>images/banner_title.png"></dd>
		                                </div>
		                            </div>
		                        </div>
		                    </div>
		                </div>
			        </div>
			    </div>
			</div>
		</div>
		
		
		
		<div class="IndexService">
			<div class="IndexService_content all wow fadeIn">
				<div class="IndexService_content_title">
					<dd>服务项目 / SERVICE Items</dd>
					<dt>专业团队打造精品网站</dt>
				</div>
				<div class="IndexService_content_body clear carousel">
					<a href="service.html#" class="content_body_list fl" target="_blank">
						<div class="body_list_title">高端网站定制</div>
						<div class="body_list_content">需求分析-创意设计-程序制作-资料添加-测试交付每一步我们都追求精致</div>
						<div class="body_list_classification clear">
							<div class="list_classification_list fl">
								<dd class="iconfont">&#xe70b;</dd>
								<dt>企业官网</dt>
							</div>
							<div class="list_classification_list fl">
								<dd class="iconfont">&#xe6d2;</dd>
								<dt>外贸网站</dt>
							</div>
							<div class="list_classification_list fl">
								<dd class="iconfont">&#xe659;</dd>
								<dt>综合门户</dt>
							</div>
							<div class="list_classification_list fl">
								<dd class="iconfont">&#xe606;</dd>
								<dt>电商网站</dt>
							</div>
						</div>
					</a>
					<a href="weixin.html#" class="content_body_list fl" target="_blank">
						<div class="body_list_title">微信开发</div>
						<div class="body_list_content">基于微信为企业提供开发、运营、培训、推广一体化解决方案，帮助企业实现线，上线下互通</div>
						<div class="body_list_classification clear">
							<div class="list_classification_list fl">
								<dd class="iconfont">&#xe62e;</dd>
								<dt>吸粉系统</dt>
							</div>
							<div class="list_classification_list fl">
								<dd class="iconfont">&#xe61e;</dd>
								<dt>分销系统</dt>
							</div>
							<div class="list_classification_list fl">
								<dd class="iconfont">&#xe600;</dd>
								<dt>互动系统</dt>
							</div>
							<div class="list_classification_list fl">
								<dd class="iconfont">&#xe601;</dd>
								<dt>交易系统</dt>
							</div>
						</div>
					</a>
					<a href="app.html" class="content_body_list fl" target="_blank">
						<div class="body_list_title">APP开发</div>
						<div class="body_list_content">完全个性化设计，专属定制研发应用软件，安全稳定的技术运维服务，为您提供多方位解决方案</div>
						<div class="body_list_classification clear">
							<div class="list_classification_list fl">
								<dd class="iconfont">&#xe633;</dd>
								<dt>HTML5开发</dt>
							</div>
							<div class="list_classification_list fl">
								<dd class="iconfont">&#xe60b;</dd>
								<dt>安卓APP开发</dt>
							</div>
							<div class="list_classification_list fl">
								<dd class="iconfont">&#xe6c0;</dd>
								<dt>IOS APP开发</dt>
							</div>
							<div class="list_classification_list fl">
								<dd class="iconfont">&#xe748;</dd>
								<dt>运维管理</dt>
							</div>
						</div>
					</a>
					<a href="yingxiao.html" class="content_body_list fl" target="_blank">
						<div class="body_list_title">网络营销</div>
						<div class="body_list_content">根据企业行业特点和自身需求整合企业网络资源提供长期的网络营销服务支持</div>
						<div class="body_list_classification clear">
							<div class="list_classification_list fl">
								<dd class="iconfont">&#xe634;</dd>
								<dt>口碑营销</dt>
							</div>
							<div class="list_classification_list fl">
								<dd class="iconfont">&#xe62d;</dd>
								<dt>Seo优化</dt>
							</div>
							<div class="list_classification_list fl">
								<dd class="iconfont">&#xe6af;</dd>
								<dt>SEM托管</dt>
							</div>
							<div class="list_classification_list fl">
								<dd class="iconfont">&#xe62b;</dd>
								<dt>舆情公关</dt>
							</div>
						</div>
					</a>
				</div>
			</div>
		</div>
		
		
		
		<div class="IndexService IndexCase" id="digital">
			<div class="IndexService_content all wow fadeIn">
				<div class="IndexService_content_title">
					<dd>案例展示 / case show</dd>
					<dt>
						<p>累计为超过2000家客户提供互联网技术解决或咨询服务，包含国际知名企业，如：Polylink，海尔集团，普天集团；国有事业单位：如上海应用物理研究所、</p>
						<p>上海海洋大学等；涉及：金融、地产、物业、制造、家居、营销、传媒文化、餐饮、电子科技数码等多个行业</p>
					</dt>
				</div>
				<div class="IndexCase_content clear">
				
								<div  class="IndexCase_content_list fl wow fadeInUp" data-wow-delay="0.1s">
						<div class="content_list_img">
							<div><img src="<?php echo APP_CONFIG['__index__']; ?>images/0ff736644b534cafcbdd74a5142ed34f.jpg" class="tra" alt="友医"></div>
							<div class="content_list_hover iconfont">
								<dd></dd>
								<dt>&#xe657;</dt>
								<div class="hr"><a href="caseinfo.html#/142.html" title="友医" target="_blank"><img src="<?php echo APP_CONFIG['__index__']; ?>images/bn7.png"></a></div>
							</div>
						</div>
						<div class="content_list_title clear">
							<div class="list_title_left fl">
								<dd><a href="caseinfo.html#/142.html" target="_blank">友医</a><i>|</i><span>提供持续、高效、可信赖健康服务</span></dd>
								<dt>上市公司 / 集团公司 / 生物医药 / 健康美容</dt>
							</div>
							<div class="list_title_icon fr iconfont">&#xe614;</div>
						</div>
					</div>
					 			<div  class="IndexCase_content_list fl wow fadeInUp" data-wow-delay="0.1s">
						<div class="content_list_img">
							<div><img src="<?php echo APP_CONFIG['__index__']; ?>images/a508783125e32eaf262081062d2a5c34.jpg" class="tra" alt="上海应用物理研究所"></div>
							<div class="content_list_hover iconfont">
								<dd></dd>
								<dt>&#xe657;</dt>
								<div class="hr"><a href="caseinfo.html#/141.html" title="上海应用物理研究所" target="_blank"><img src="<?php echo APP_CONFIG['__index__']; ?>images/bn7.png"></a></div>
							</div>
						</div>
						<div class="content_list_title clear">
							<div class="list_title_left fl">
								<dd><a href="caseinfo.html#/141.html" target="_blank">上海应用物理研究所</a><i>|</i><span>性能检测、质量评定、失效分析</span></dd>
								<dt>上市公司 / 集团公司 / H5响应式</dt>
							</div>
							<div class="list_title_icon fr iconfont">&#xe614;</div>
						</div>
					</div>
					 			<div  class="IndexCase_content_list fl wow fadeInUp" data-wow-delay="0.1s">
						<div class="content_list_img">
							<div><img src="<?php echo APP_CONFIG['__index__']; ?>images/ff645b93f5d384a8c68c5fb0bb2a0b74.jpg" class="tra" alt="亲巢网"></div>
							<div class="content_list_hover iconfont">
								<dd></dd>
								<dt>&#xe657;</dt>
								<div class="hr"><a href="caseinfo.html#dianshang/134.html" title="亲巢网" target="_blank"><img src="<?php echo APP_CONFIG['__index__']; ?>images/bn7.png"></a></div>
							</div>
						</div>
						<div class="content_list_title clear">
							<div class="list_title_left fl">
								<dd><a href="caseinfo.html#dianshang/134.html" target="_blank">亲巢网</a><i>|</i><span>为中产阶级造幸福之城</span></dd>
								<dt>行业门户 / 建筑地产 / 商务服务</dt>
							</div>
							<div class="list_title_icon fr iconfont">&#xe614;</div>
						</div>
					</div>
					 			<div  class="IndexCase_content_list fl wow fadeInUp" data-wow-delay="0.1s">
						<div class="content_list_img">
							<div><img src="<?php echo APP_CONFIG['__index__']; ?>images/86300c9b1be42e1123f2f966db554ccf.jpg" class="tra" alt="洛克磁业"></div>
							<div class="content_list_hover iconfont">
								<dd></dd>
								<dt>&#xe657;</dt>
								<div class="hr"><a href="caseinfo.html#/133.html" title="洛克磁业" target="_blank"><img src="<?php echo APP_CONFIG['__index__']; ?>images/bn7.png"></a></div>
							</div>
						</div>
						<div class="content_list_title clear">
							<div class="list_title_left fl">
								<dd><a href="caseinfo.html#/133.html" target="_blank">洛克磁业</a><i>|</i><span>稀土永磁发电机的高新技术企业</span></dd>
								<dt>集团公司 / H5响应式 / 机械工程</dt>
							</div>
							<div class="list_title_icon fr iconfont">&#xe614;</div>
						</div>
					</div>
					 			<div  class="IndexCase_content_list fl wow fadeInUp" data-wow-delay="0.1s">
						<div class="content_list_img">
							<div><img src="<?php echo APP_CONFIG['__index__']; ?>images/f56f2de50bdabfe755ef046891df6b9b.jpg" class="tra" alt="聚领信息（Polylink）"></div>
							<div class="content_list_hover iconfont">
								<dd></dd>
								<dt>&#xe657;</dt>
								<div class="hr"><a href="caseinfo.html#/132.html" title="聚领信息（Polylink）" target="_blank"><img src="<?php echo APP_CONFIG['__index__']; ?>images/bn7.png"></a></div>
							</div>
						</div>
						<div class="content_list_title clear">
							<div class="list_title_left fl">
								<dd><a href="caseinfo.html#/132.html" target="_blank">聚领信息（Polylink）</a><i>|</i><span>专注于开发基于网络技术的新一代通信平台</span></dd>
								<dt>集团公司 / H5响应式 / 电子科技</dt>
							</div>
							<div class="list_title_icon fr iconfont">&#xe614;</div>
						</div>
					</div>
					 			<div  class="IndexCase_content_list fl wow fadeInUp" data-wow-delay="0.1s">
						<div class="content_list_img">
							<div><img src="<?php echo APP_CONFIG['__index__']; ?>images/86e26d9d34b8c1c36184b63e195451a7.jpg" class="tra" alt="创力股份"></div>
							<div class="content_list_hover iconfont">
								<dd></dd>
								<dt>&#xe657;</dt>
								<div class="hr"><a href="caseinfo.html#/110.html" title="创力股份" target="_blank"><img src="<?php echo APP_CONFIG['__index__']; ?>images/bn7.png"></a></div>
							</div>
						</div>
						<div class="content_list_title clear">
							<div class="list_title_left fl">
								<dd><a href="caseinfo.html#/110.html" target="_blank">创力股份</a><i>|</i><span>上海民营制造业企业50强</span></dd>
								<dt>上市公司 / 集团公司</dt>
							</div>
							<div class="list_title_icon fr iconfont">&#xe614;</div>
						</div>
					</div>
					 			<div  class="IndexCase_content_list fl wow fadeInUp" data-wow-delay="0.1s">
						<div class="content_list_img">
							<div><img src="<?php echo APP_CONFIG['__index__']; ?>images/cfc51b65bafbd226b61a4ccb5d4b65f2.jpg" class="tra" alt="上海医明康德医疗"></div>
							<div class="content_list_hover iconfont">
								<dd></dd>
								<dt>&#xe657;</dt>
								<div class="hr"><a href="caseinfo.html#/138.html" title="上海医明康德医疗" target="_blank"><img src="<?php echo APP_CONFIG['__index__']; ?>images/bn7.png"></a></div>
							</div>
						</div>
						<div class="content_list_title clear">
							<div class="list_title_left fl">
								<dd><a href="caseinfo.html#/138.html" target="_blank">上海医明康德医疗</a><i>|</i><span>坚持创新驱动，致力推动健康管理模式的变革</span></dd>
								<dt>集团公司 / H5响应式 / 生物医药 / 健康美容</dt>
							</div>
							<div class="list_title_icon fr iconfont">&#xe614;</div>
						</div>
					</div>
					 			<div  class="IndexCase_content_list fl wow fadeInUp" data-wow-delay="0.1s">
						<div class="content_list_img">
							<div><img src="<?php echo APP_CONFIG['__index__']; ?>images/e18abc9b62f0c7e4b3ee9206cda92655.jpg" class="tra" alt="普天集团"></div>
							<div class="content_list_hover iconfont">
								<dd></dd>
								<dt>&#xe657;</dt>
								<div class="hr"><a href="caseinfo.html#/124.html" title="普天集团" target="_blank"><img src="<?php echo APP_CONFIG['__index__']; ?>images/bn7.png"></a></div>
							</div>
						</div>
						<div class="content_list_title clear">
							<div class="list_title_left fl">
								<dd><a href="caseinfo.html#/124.html" target="_blank">普天集团</a><i>|</i><span>一光一线，联结世界</span></dd>
								<dt>上市公司 / 集团公司 / 电子科技</dt>
							</div>
							<div class="list_title_icon fr iconfont">&#xe614;</div>
						</div>
					</div>
					 			<div  class="IndexCase_content_list fl wow fadeInUp" data-wow-delay="0.1s">
						<div class="content_list_img">
							<div><img src="<?php echo APP_CONFIG['__index__']; ?>images/c14851212d5287fcc601134278ee21b7.jpg" class="tra" alt="捷易生物"></div>
							<div class="content_list_hover iconfont">
								<dd></dd>
								<dt>&#xe657;</dt>
								<div class="hr"><a href="caseinfo.html#/123.html" title="捷易生物" target="_blank"><img src="<?php echo APP_CONFIG['__index__']; ?>images/bn7.png"></a></div>
							</div>
						</div>
						<div class="content_list_title clear">
							<div class="list_title_left fl">
								<dd><a href="caseinfo.html#/123.html" target="_blank">捷易生物</a><i>|</i><span>GEMPLE,让世界更好</span></dd>
								<dt>生物医药</dt>
							</div>
							<div class="list_title_icon fr iconfont">&#xe614;</div>
						</div>
					</div>
					 			
				</div>
				<div class="IndexCase_more">
					<a href="caseinfo.html#"><span>Read More</span></a>
				</div>
			</div>
		</div>
		
		
		
		
		
		<div class="advantage clear">
			<div class="advantage_content all">
				<div class="advantage_content_list fl">
					<div class="content_list_title"><span class="counter-demo-4 box"
		data-lem-counter='{"value_from": 0, "value_to": 9, "animate_duration": 2}'>9</span></div>
					<div class="content_list_body">
						<p>李志立科技9年专注于网站建设</p>
						<p>因为专注，所以专业</p>
					</div>
				</div>
				<div class="advantage_content_list fl">
					<div class="content_list_title"><span class="counter-demo-4 box"
		data-lem-counter='{"value_from": 0, "value_to": 1000, "animate_duration": 2}'>1000</span></div>
					<div class="content_list_body">
						<p>迄今为止我们服务的客户超过</p>
						<p>1000家，遍及各大行业</p>
					</div>
				</div>
				<div class="advantage_content_list fl">
					<div class="content_list_title"><span class="counter-demo-4 box"
		data-lem-counter='{"value_from": 0, "value_to": 100, "animate_duration": 2}'>100</span>%</div>
					<div class="content_list_body">
						<p>百分百的独特创意设计，纯定制</p>
						<p>开发，让您的网站与众不同</p>
					</div>
				</div>
				<div class="advantage_content_list fl">
					<div class="content_list_title"><span class="counter-demo-4 box"
		data-lem-counter='{"value_from": 0, "value_to": 99, "animate_duration": 2}'>99</span>%</div>
					<div class="content_list_body">
						<p>良好的口碑是我们立足业界</p>
						<p>的根本，客户满意度超99%</p>
					</div>
				</div>
			</div>
		</div>
		
		
		
		
		
		
		
		<div class="IndexService IndexNews">
			<div class="IndexService_content all wow fadeIn">
				<div class="IndexService_content_title clear">
					<dd class="fl">新闻动态 / news information</dd>
					<div class="fr IndexNews_title clear">
						<a href="newsinfo.html#hyxw/" class="fl">行业新闻</a>
						<a href="newsinfo.html#xuetang/" class="fl">建站学堂</a>
						<a href="newsinfo.html#wenti/" class="fl">常见问题</a>
					</div>
				</div>
				<div class="IndexNews_content clear">
					<div class="IndexNews_content_video fl">
						<div class="content_video_title look_video">
							<div class="videobox">
		                         <div class="videobox_nei">
		                              <div id="video_button"></div>
		                              <div class="video">
		                                <video id="video_button2"  loop="loop" controls>
		                                    <source src="banner/video.mp4" type="video/mp4">
		                                 </video>
		                              </div>
		                        </div>
		                    </div>
							<div class="video_title_item">
								<dd class="iconfont">&#xe60c;</dd>
								<dt></dt>
							</div>
						</div>
						<div class="content_video_body">
							<dd><span class="iconfont">&#xe61b;</span>专业网站建设必须要了解的目标问题</dd>
							<dt>为了可以更好的确定自己企业网站的搭建效果，同时也可以让网站的功能性和美观性都能提升就必须要了解在整个网站建设过程中的目标关键点。</dt>
						</div>
					</div>
					<div class="IndexNews_content_right fr clear">
					  
						<div class="content_right_list clear fl">
							<div class="right_list_img fl"><a href="newsinfo.html#hyxw/1566.html"><img src="<?php echo APP_CONFIG['__index__']; ?>images/d72401dd036a2b92e431354943bd8ef1.jpg" class="tra" alt="以下几种链接是不会被百度抓取的，交换友情链接的时候要注意！"></a></div>
							<div class="right_list_content fr clear">
								<div class="list_content_title clear">
									<dd class="fl"><a href="newsinfo.html#hyxw/1566.html">以下几种链接是不会被百度抓取的，交换友情链接的时候要注意！</a></dd>
									<dt class="fr">01-11</dt>
								</div>
								<p>做SEO的同学都知道友情链接可以很好的引蜘蛛，但是偏偏有一些站长就是喜欢在友情链接上做手脚，这里列举常见的作弊手段，大家可以在交换友情链接的时候防范一下。作弊一：robots文件屏蔽链接对方网站robots屏蔽了所有的友情链接或者你的链接，那么这样百度是不会抓取你的网站的，这种交换没有意义，Disallow 意思就是不让抓取，看下对方robots文件是否有这样的写</p>
							</div>
						</div>
						
						<div class="content_right_list clear fl">
							<div class="right_list_img fl"><a href="newsinfo.html#hyxw/1565.html"><img src="<?php echo APP_CONFIG['__index__']; ?>images/5059fc3fb46c9509e61194dfafd21263.jpg" class="tra" alt="传统企业为什么需要做网站"></a></div>
							<div class="right_list_content fr clear">
								<div class="list_content_title clear">
									<dd class="fl"><a href="newsinfo.html#hyxw/1565.html">传统企业为什么需要做网站</a></dd>
									<dt class="fr">01-11</dt>
								</div>
								<p>企业需要做网站相信很多企业老板也都意识到了，但是还是有一些老板并怎么了解如何运用网站实现网络营销直接给公司带来利润。只是看到别的企业有网站，也就随大流随便的做了个网站，还有一个传统企业的老板根本就没有做网站的意识，任务纯粹是在浪费钱。鉴于还有很多客户朋友的这种误区，在此我们向客户朋友简单的介绍下传统企业为什么需要做网站。网站建设</p>
							</div>
						</div>
						
						<div class="content_right_list clear fl">
							<div class="right_list_img fl"><a href="newsinfo.html#hyxw/1564.html"><img src="<?php echo APP_CONFIG['__index__']; ?>images/94d336d09f42268ec1d7771a91eb3e8d.jpg" class="tra" alt="企业网站做SEO很长时间了，但是却没有什么效果"></a></div>
							<div class="right_list_content fr clear">
								<div class="list_content_title clear">
									<dd class="fl"><a href="newsinfo.html#hyxw/1564.html">企业网站做SEO很长时间了，但是却没有什么效果</a></dd>
									<dt class="fr">01-10</dt>
								</div>
								<p>很多企业网站做了官方网站，但是在经过一段时间以后，却发现自己文章也做了，外链也发了，但是网站排名还是没啥变化，这是咋回事呢，我们来分析一下大多企业网站的问题出在哪。第一点问题：对seo的策略问题网站建设初期可能直接外包了一家网站制作机构，这时候肯定非专业人士并没有关于SEO的概念，这就造成了前期网站没有针对SEO做布局，这时候招聘了一个SEO专员，但是</p>
							</div>
						</div>
						 
						
						
					
					</div>
				</div>
			</div>
		</div>
		
		
		
		
		
		
		
		
		<div class="IndexService partner">
			<div class="IndexService_content all wow fadeIn">
				<div class="IndexService_content_title">
					<dd>我们与您携手共进</dd>
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
		
		<?php include dirname(__FILE__).'/../common/_footer.php'; ?>
		
		
		
		
		
		
		
		
		
		<script type="text/javascript" src="<?php echo APP_CONFIG['__index__']; ?>js/jquery-1.8.3.min.js"></script>
		<script src="<?php echo APP_CONFIG['__index__']; ?>js/banner.js"></script>
		<script src="<?php echo APP_CONFIG['__index__']; ?>js/global.js"></script>
		<script src="<?php echo APP_CONFIG['__index__']; ?>js/iconfont.js"></script>
		<script src="<?php echo APP_CONFIG['__index__']; ?>js/digital.js"></script>
		<script src="<?php echo APP_CONFIG['__index__']; ?>js/wow.js"></script>
		<script src="<?php echo APP_CONFIG['__index__']; ?>js/canvas.js"></script>
		<script src="<?php echo APP_CONFIG['__index__']; ?>js/carousel.js"></script>
		
		<!--视频播放-->
		<script type="text/javascript">
		$(document).ready(function(e) {
			var video1=document.getElementById("video_button");
			var video2=document.getElementById("video_button2");
				video1.onclick=function(){
					   video2.play();
					   video2.muted=false;
					   video2.volume="0.4"
					   video1.style.display="none";
			
				}
				video2.onclick=function(){
				   video2.pause();
				   video1.style.display="block";
				}
		    
		});
		</script>
		
		
		<!--服务项目-->
		<script>
		$(document).ready(function($) {
			$('.carousel').owlCarousel({
				loop:false,
				margin:0,
				nav:true,
				lazyLoad:true, 
				autoplay:false,//是否开启自动播放
		        autoplayTimeout:1000,//控制自动播放的速度
		        merge: true, 
				video: true,
		        responsive:{	
				    120:{items:1},//当屏幕大小缩小到480的时候变2个
		            480:{items:1},//当屏幕大小缩小到480的时候变2个
					678:{items:2},//当屏幕大小缩小到678的时候变3个
					960:{items:3},//当屏幕大小缩小到960的时候变5个
					1200:{items:4},
				}
			});
		});
		</script>
		
		
		<!--动态特效-->
		<script>
		    wow = new WOW(
		      {
		        animateClass: 'animated',
		        offset:       200
		      }
		    );
		    wow.init();
		    
		    
		    //判断浏览器大小加上事件
			var width=$(window).width();
			if(width <= 700) {
				   wow = new WOW(
			      {
			        animateClass: 'animated',
			        offset:       10
			      }
			    );
			    wow.init();
			    function fixed_gun(obj){
					var m_top=$(obj).offset().top;
					$(window).scroll(function(){
						if($(window).scrollTop() >= m_top -300){
							onlyOne();
						};
					});	
				};
			}
			
			//数字滚动
			fixed_gun("#digital");	
			var flag = 1;
			function onlyOne() {
				if(flag == 1) {
					$('.counter-demo-4').lemCounter();
				}
				flag = 0;
			};
			function fixed_gun(obj){
				var m_top=$(obj).offset().top;
				$(window).scroll(function(){
					if($(window).scrollTop() >= m_top + 300){
						onlyOne();
					};
				});	
			};
		
		</script>
		
		<!--首页banner图-->
		<script type="text/javascript">
		    $('.slick-hero-slider').slick({
		        dots: true,
		        speed: 500,
		        slidesToShow: 1,
		        slidesToScroll: 1,
		        centerMode: true,
		        infinite: true,
		        centerPadding: '0',
		        focusOnSelect: true,
		        adaptiveHeight: false,
		        autoplay: true,
		        autoplaySpeed: 6000,
		        pauseOnHover: false,
		    });
		</script>
		
		
		
		
		
		
	</body> 
</html>
