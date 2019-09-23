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
		<link href="<?php echo APP_CONFIG['__index__']; ?>css/carousel.css" rel="stylesheet">
		<link href="<?php echo APP_CONFIG['__index__']; ?>css/global.css" rel="stylesheet">
		
		<style>
		
		.pc_header .pc_header_content .header_content_right .menu ul li .DropDown{
			-webkit-transform: scale(1);
		   -moz-transform: scale(1);
		    -ms-transform: scale(1);
		     -o-transform: scale(1);
		           filter: scale(1);
		           filter: transform;
		       transition: all 0.5s ease 0s;
		-webkit-transform: all 0.5s ease 0s; 
			cursor:pointer;
			opacity: 1;
		}
		</style>
		
	</head>
	<body>
		<?php include dirname(__FILE__).'/../common/_header.php'; ?>
		<?php include dirname(__FILE__).'/../common/_chat.php'; ?>
		
		
		
		
		
		
		<div class="ServiceBanner">
			<div class="ServiceBanner_content clear">
				<div class="ServiceBanner_content_left fl">
					<div class="content_left_title">
						<dd>APP开发服务</dd>
						<dt>集团、政府、教育、产品等网站需要与公众媒体，上级领导，内部员工，投资合作者，应聘者，消费者和供应商，子公司或下级部门等目标人群进行沟通。如何满足这些人群的需求，是网站需要解决的问题。尚品中国结合多年网站建设和维护经验，推出适合各行业网站...</dt>
					</div>
					<div class="content_left_bottom clear">
						<div class="left_bottom_list fl">
							<dd class="iconfont">&#xe6c0;</dd>
							<dt>IOS开发</dt>
						</div>
						<div class="left_bottom_list fl">
							<dd class="iconfont">&#xe60b;</dd>
							<dt>安卓开发</dt>
						</div>
						<div class="left_bottom_list fl">
							<dd class="iconfont">&#xe659;</dd>
							<dt>原生开发</dt>
						</div>
						<div class="left_bottom_list fl">
							<dd class="iconfont">&#xe606;</dd>
							<dt>混合开发</dt>
						</div>
						<div class="left_bottom_list fl">
							<dd class="iconfont">&#xe620;</dd>
							<dt>智慧党建</dt>
						</div>
					</div>
				</div>
				<div class="ServiceBanner_content_left ServiceBanner_content_right fr"><img src="<?php echo APP_CONFIG['__index__']; ?>images/bn32.png"></div>
			</div>
		</div>
		
		
		
		
		
		
		<div class="IndexService ServiceApp_title">
			<div class="IndexService_content all carousel">
				<div class="ServiceApp_title_list">
					<div class="title_list_top">
						<dd>
							<span>新</span>
						</dd>
					</div>
					<div class="title_list_content">
						<dd>新趋势、新技术</dd>
						<dt>为业务的开区、扩缩容、发布等复杂场景快速的提供解决方案，助您轻松实现一站式调度</dt>
					</div>
				</div>
				<div class="ServiceApp_title_list">
					<div class="title_list_top">
						<dd>
							<span>易</span>
						</dd>
					</div>
					<div class="title_list_content">
						<dd>易浏览、易分享</dd>
						<dt>同时支持Windows/Linux两种操作系统；同时支持公有云、私有云、混合云的服务器</dt>
					</div>
				</div>
				<div class="ServiceApp_title_list">
					<div class="title_list_top">
						<dd>
							<span>快</span>
						</dd>
					</div>
					<div class="title_list_content">
						<dd>响应快、加载快</dd>
						<dt>完整的开发框架、调度引擎和丰富的组件、页面样例，降低了运维开发的门槛和难度</dt>
					</div>
				</div>
				<div class="ServiceApp_title_list">
					<div class="title_list_top">
						<dd>
							<span>好</span>
						</dd>
					</div>
					<div class="title_list_content">
						<dd>兼容好、好转化</dd>
						<dt>为业务的开区、扩缩容、发布等复杂场景快速的提供解决方案，助您轻松实现一站式调度</dt>
					</div>
				</div>
			</div>
		</div>
		
		
		
		
		
		
		<div class="IndexService ServiceApp_application">
			<div class="IndexService_content clear all">
				<div class="ServiceApp_application_left fl">
					<div class="application_left_title">
						<dd>属于你的APP应用</dd>
						<dt>灵活的产品架构，您既可使用平台上的工具和系统快速运维，也可自建运维工具和系统</dt>
					</div>
					<div class="application_left_content"><img src="<?php echo APP_CONFIG['__index__']; ?>images/bn33.png"></div>
				</div>
				<div class="ServiceApp_application_right fr">
					<div class="application_right_top">
						<dd>李志立</dd>
						<dt>我们专注网站优化、品牌网站设计、APP开发、协助客户提升企业形象、丰富用户体验，结合网站行业特性， 为企业提供精准的策划、设计、营销一站式服务方案。</dt>
					</div>
					<div class="application_right_bottom">
						<div class="right_bottom_list">
							<dd>IOS开发</dd>
							<dt>为客户提供专业的APP软件开发解决方案,为企业吸引、留住用户。</dt>
						</div>
						<div class="right_bottom_list">
							<dd>android开发</dd>
							<dt>提供高品质APP开发方案！使企业服务更加便捷智能，提升企业品牌价值。</dt>
						</div>
						<div class="right_bottom_list">
							<dd>原生开发</dd>
							<dt>基于智能手机操作系统，使用原生程序编写运行的第三方移动应用程序。</dt>
						</div>
						<div class="right_bottom_list">
							<dd>混合开发</dd>
							<dt>使用H5技术框架开发APP应用，适合于创业公司或者资金短缺的小型公司。</dt>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		
		
		
		
		<div class="App">
			<div class="App_content all">
				<div class="App_content_title">
					<dd>APP应用开发</dd>
					<dt>提供APP开发、运维、及技术架构优化一站式服务</dt>
				</div>
				<div class="App_content_nav clear vertical">
					<a href="javascript:;" class="fl on">IOS应用开发</a>
					<a href="javascript:;" class="fl">Android开发</a>
					<a href="javascript:;" class="fl">原生开发</a>
					<a href="javascript:;" class="fl">混合开发</a>
				</div>
				<div class="App_body">
					<div class="App_content_body clear">
						<div class="content_body_left fl">
							<div class="body_left_img"><img src="<?php echo APP_CONFIG['__index__']; ?>images/bn34.png"></div>
							<div class="body_left_txt">
								<dd>现状痛点</dd>
								<dt>
									<p>产品需求不明确；产品目标不明确；预算不清楚；</p>
									<p>不懂技术；不懂市场；不懂运营；看不清方向；</p>
									<p>开发费用不可控；开发进度不可控；开发时间不可控；</p>
								</dt>
								<dd>解决方案</dd>
								<dt>
									<p>李志立专业产品实施顾问与您一对一对接、分析、调研；</p>
									<p>李志立拥有国内专业的UI设计师与开发工程师；</p>
									<p>李志立拥有严格的项目管控方案，为企业把控好每一个节点；</p>
								</dt>
							</div>
						</div>
						<div class="content_body_right fr">
							<div class="body_right_top">
								<dd>苹果APP开发</dd>
								<dt>为客户提供全专业的APP软件开发解决方案, 凭借多年的行业开发经验,从品牌和市场的角度, 用专业的研发技术,为企业吸引、留住用户。</dt>
							</div>
							<div class="body_right_bottom">
								<dd>开发流程</dd>
								<dt>
									<p>01. 用户需求分析</p>
									<p>02. 产品原型设计</p>
									<p>03. UI视觉设计</p>
									<p>04. 数据库搭建</p>
									<p>05. 服务端开发</p>
									<p>06. IOS客户端开发</p>
									<p>07. APP程序测试</p>
									<p>08. 上传到应用商店</p>
									<p>09. APP的维护及更新</p>
								</dt>
							</div>
						</div>
					</div>
					<div class="App_content_body clear">
						<div class="content_body_left fl">
							<div class="body_left_img"><img src="<?php echo APP_CONFIG['__index__']; ?>images/Android.jpg"></div>
							<div class="body_left_txt">
								<dd>现状痛点</dd>
								<dt>
									<p>产品上线难；产品无人维护；产品无法升级...</p>
									<p>准备自建团队开发产品,但是不完全懂...</p>
									<p>面对众多软件开发公司,不知如何选择...</p>
								</dt>
								
								<dd>解决方案</dd>
								<dt>
									<p>李志立致力于提供一站式IT运维解决方案，团队成员来源于腾讯、阿里等，具有丰富的海量互联网一线运维经验，同时也是其核心运维系统的设计者、研发者和践行</p>
								
								</dt>
							</div>
						</div>
						<div class="content_body_right fr">
							<div class="body_right_top">
								<dd>Android APP开发</dd>
								<dt>我们拥有专业的研发团对，可根据客户提出的 各项需求提供高品质APP开发解决方案！熟练的掌握着安卓开发技术，已先后为上百家企业提供Android手机开发服务。</dt>
							</div>
							<div class="body_right_bottom">
								<dd>开发流程</dd>
								<dt>
									<p>01. 用户需求分析</p>
									<p>02. 产品原型设计</p>
									<p>03. UI视觉设计</p>
									<p>04. 数据库搭建</p>
									<p>05. 服务端开发</p>
									<p>06. Android客户端开发</p>
									<p>07. APP程序测试</p>
									<p>08. 上传到应用商店</p>
									<p>09. APP的维护及更新</p>
								</dt>
							</div>
						</div>
					</div>
					
					
					<div class="App_content_body clear">
						<div class="content_body_left fl">
							<div class="body_left_img"><img src="<?php echo APP_CONFIG['__index__']; ?>images/yskf.jpg"></div>
							<div class="body_left_txt">
								<dd>现状痛点</dd>
								<dt>
									<p>移动互联网瞬息万变，而你没有一款好的产品快速抢占市场； 众多软件开发公司良莠不齐,一不小心投资就会打了水漂! 所以,必须慎重选择</p>
								
								</dt>
								
								<dd>解决方案</dd>
								<dt>
									<p>李志立拥有详尽的需求分析，形成思维导图及原型框架，合理规范的合同报价、完整的产品UI设计、高效严密的团队、严格的测试环节、完善的售后服务为您保驾护航</p>
								
								</dt>
							</div>
						</div>
						<div class="content_body_right fr">
							<div class="body_right_top">
								<dd>原生版APP开发</dd>
								<dt>基于智能手机操作系统，使用原生程序编写运行的第三方移动应用程序。</dt>
							</div>
							<div class="body_right_bottom">
								<dd>开发流程</dd>
								<dt>
									<p>01. 用户需求分析</p>
									<p>02. 产品原型设计</p>
									<p>03. UI视觉设计</p>
									<p>04. 数据库搭建</p>
									<p>05. 服务端开发</p>
									<p>06. iOS/Android客户端开发</p>
									<p>07. APP程序测试</p>
									<p>08. 上传到应用商店</p>
									<p>09. APP的维护及更新</p>
								</dt>
							</div>
						</div>
					</div>
					
					
					
					
					<div class="App_content_body clear">
						<div class="content_body_left fl">
							<div class="body_left_img"><img src="<?php echo APP_CONFIG['__index__']; ?>images/hhkf.jpg"></div>
							<div class="body_left_txt">
								<dd>现状痛点</dd>
								<dt>
									<p>产品上线难；产品无人维护；产品无法升级...</p>
									<p>准备自建团队开发产品,但是不完全懂...</p>
									<p>面对众多软件开发公司,不知如何选择...</p>
								</dt>
								
								<dd>解决方案</dd>
								<dt>
									<p>李志立致力于提供一站式IT运维解决方案，团队成员来源于腾讯、阿里等，具有丰富的海量互联网一线运维经验，同时也是其核心运维系统的设计者、研发者和践行</p>
								
								</dt>
							</div>
						</div>
						<div class="content_body_right fr">
							<div class="body_right_top">
								<dd>混合版APP开发</dd>
								<dt>使用H5技术框架开发APP应用，适合于创业公司或者资金短缺的公司。</dt>
							</div>
							<div class="body_right_bottom">
								<dd>开发流程</dd>
								<dt>
									<p>01. 用户需求分析</p>
									<p>02. 产品原型设计</p>
									<p>03. UI视觉设计</p>
									<p>04. 数据库搭建</p>
									<p>05. 服务端开发</p>
									<p>06. iOS/Android客户端开发</p>
									<p>07. APP程序测试</p>
									<p>08. 上传到应用商店</p>
									<p>09. APP的维护及更新</p>
								</dt>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		
		
		
		<div class="IndexService IndexCase case app_case">
			<div class="IndexService_content all">
				<div class="app_case_title">相关案例 / related cases</div>
				<div class="IndexCase_content clear">
					<div class="IndexCase_content_list fl">
						<div class="content_list_img">
							<div class="list_img_title"><img src="<?php echo APP_CONFIG['__index__']; ?>images/bg31.jpg" class="tra"></div>
		                    <div class="content_list_txt">
		                    	<div class="list_txt_logo"><img src="<?php echo APP_CONFIG['__index__']; ?>images/cj.png" alt="" title=""></div>
		                        <div class="list_txt_title">醇酒</div>
		                        <div class="list_txt_content">
		                        	醇酒是专门为手机用户量身订制的酒类手机应用软件，为手机用户提供各种酒类资讯、酒类产品推荐、酒类商城类信息，并拥有资讯发布、酒类商城 、酒类推荐等功能，提供优良的用户使用体验。相信您能在使用中，体验到我们作为APP制作运行商的用心及诚意。
		                        </div>
		                    </div>
						</div>
					</div>
					<div class="IndexCase_content_list fl">
						<div class="content_list_img">
							<div class="list_img_title"><img src="<?php echo APP_CONFIG['__index__']; ?>images/bg32.jpg" class="tra"></div>
		                    <div class="content_list_txt">
		                    	<div class="list_txt_logo"><img src="<?php echo APP_CONFIG['__index__']; ?>images/cyys.jpg" alt="" title=""></div>
		                        <div class="list_txt_title">医口袋</div>
		                        <div class="list_txt_content">
		                        	医口袋APP，免费且全面的手机临床资料库；在临床工作中，可以查药典，看指南和图书，还可以看大牛们的病例，同时还有计量工具和检验手册等。
		                        </div>
		                    </div>
						</div>
					</div>
					<div class="IndexCase_content_list fl">
						<div class="content_list_img">
							<div class="list_img_title"><img src="<?php echo APP_CONFIG['__index__']; ?>images/bg33.jpg" class="tra"></div>
		                    <div class="content_list_txt">
		                    	<div class="list_txt_logo"><img src="<?php echo APP_CONFIG['__index__']; ?>images/xfd.png" alt="" title=""></div>
		                        <div class="list_txt_title">幸福道</div>
		                        <div class="list_txt_content">
		                        	幸福道是一款婚庆类手机应用软件。倾力打造，云集婚庆商店、婚礼服务、婚庆酒店、婚礼咨询为一体的信息类服务云平台！是APP制作界的拳头产品。
		                        </div>
		                    </div>
						</div>
					</div>
					<div class="IndexCase_content_list fl">
						<div class="content_list_img">
							<div class="list_img_title"><img src="<?php echo APP_CONFIG['__index__']; ?>images/bg34.jpg" class="tra"></div>
		                    <div class="content_list_txt">
		                    	<div class="list_txt_logo"><img src="<?php echo APP_CONFIG['__index__']; ?>images/ssy.jpg" alt="" title=""></div>
		                        <div class="list_txt_title">塞上云社区</div>
		                        <div class="list_txt_content">
		                        	塞上云社区app是一款掌上社区管理应用。塞上云社区app开发是为物业工作人员服务的，你可以通过塞上云社区app进行业主管理，车辆管理，智能门禁等功能。
		                        </div>
		                    </div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		
		
		
		
		
		
		
		<div class="app_footer">
			<a href="http://wpa.qq.com/msgrd?v=3&uin=821642832&site=qq&menu=yes" target="_blank">想要建站？立即咨询我们</a>
		</div>


		
		<?php include dirname(__FILE__).'/../common/_footer.php'; ?>

		
		
		<script type="text/javascript" src="<?php echo APP_CONFIG['__index__']; ?>js/jquery-1.8.3.min.js"></script>
		<script src="<?php echo APP_CONFIG['__index__']; ?>js/canvas.js"></script>
		<script src="<?php echo APP_CONFIG['__index__']; ?>js/global.js"></script>
		<script src="<?php echo APP_CONFIG['__index__']; ?>js/iconfont.js"></script>
		<script src="<?php echo APP_CONFIG['__index__']; ?>js/carousel.js"></script>
		<script src="<?php echo APP_CONFIG['__index__']; ?>js/plugin.js"></script>
		<script type="text/javascript">
			jQuery(".App_content").slide({mainCell:".App_body",autoPlay:false,titCell:".App_content_nav a",trigger:'click'});
		</script>
		
		<script>
		$(document).ready(function($) {
			$('.carousel').owlCarousel({
				loop:false,
				margin:120,
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
	</body> 
</html>
