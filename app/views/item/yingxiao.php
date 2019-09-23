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
		
		
		
		
		<div class="ServiceBanner MarketingBanner">
			<div class="ServiceBanner_content clear">
				<div class="ServiceBanner_content_left fl">
					<div class="content_left_title">
						<dd>网络营销服务</dd>
						<dt>集团、政府、教育、产品等网站需要与公众媒体，上级领导，内部员工，投资合作者，应聘者，消费者和供应商，子公司或下级部门等目标人群进行沟通。如何满足这些人群的需求，是网站需要解决的问题。尚品中国结合多年网站建设和维护经验，推出适合各行业网站...</dt>
					</div>
					<div class="content_left_bottom clear">
						<div class="left_bottom_list fl">
							<dd class="iconfont">&#xe634;</dd>
							<dt>口碑营销</dt>
						</div>
						<div class="left_bottom_list fl">
							<dd class="iconfont">&#xe62d;</dd>
							<dt>SEO优化</dt>
						</div>
						<div class="left_bottom_list fl">
							<dd class="iconfont">&#xe6af;</dd>
							<dt>SEM托管</dt>
						</div>
						<div class="left_bottom_list fl">
							<dd class="iconfont">&#xe62b;</dd>
							<dt>舆情公关</dt>
						</div>
					</div>
				</div>
				<div class="ServiceBanner_content_left ServiceBanner_content_right fr"><img src="<?php echo APP_CONFIG['__index__']; ?>images/bn88.png"></div>
			</div>
		</div>
		
		
		
		
		
		
		
		
		
		<div class="IndexService Marketing_idea">
			<div class="IndexService_content all">
				<div class="IndexService_content_title">
					<dd>红火SEO优化理念</dd>
					<dt>
						<p>将搜索引擎优化（SEO）服务与企业的网络营销战略紧密结合，不仅仅提升企业网站在搜索引擎上的排名获取有效流量，并终将</p>
						<p>流量转化为企业销售额，我们更在意品牌形象的塑造及品牌潜在价值的提升，多方位为您打造全新品牌形象。</p>
					</dt>
				</div>
				<div class="Marketing_idea_content clear">
					<div class="idea_content_list fl">
						<div class="content_list_title">
							<dd>引流</dd>
							<dt>建立长效精确流量来源</dt>
						</div>
						<div class="content_list_icon iconfont">&#xe622;</div>
						<div class="content_list_txt">
							<p>关键词引流、网站内容引流、</p>
							<p>论坛引流、第三方平台引流、</p>
							<p>帮助企业获得持久的自然流量</p>
						</div>
					</div>
					<div class="idea_content_list fl">
						<div class="content_list_title">
							<dd>转化</dd>
							<dt>提升访客转化率</dt>
						</div>
						<div class="content_list_icon iconfont">&#xe6dc;</div>
						<div class="content_list_txt">
							<p>获得精准目标客户，提升网站易用性，</p>
							<p>符合用户体验度，彰显企业品牌实力，</p>
							<p>让百度等搜索引擎为企业的品牌权威背书</p>
						</div>
					</div>
					<div class="idea_content_list fl">
						<div class="content_list_title">
							<dd>再营销</dd>
							<dt>数据分析流量效果，实现再营销</dt>
						</div>
						<div class="content_list_icon iconfont">&#xe6b1;</div>
						<div class="content_list_txt">
							<p>数据分析与优化 ，建立访客找回</p>
							<p>系统，积累精准数据，为企业获取</p>
							<p>更多合作伙伴</p>
						</div>
					</div>
				</div>
				<div class="Marketing_idea_button">
					<a href="#">我要优化</a>
				</div>
			</div>
		</div>
		
		
		
		<div class="IndexService Marketing_idea Marketing_seo">
			<div class="IndexService_content all">
				<div class="IndexService_content_title">
					<dd>红火SEO优化内容</dd>
				</div>
				<div class="Marketing_seo_content clear carousel">
					<div class="seo_content_list">
						<div class="content_list_icon iconfont shadow10">&#xe631;</div>
						<div class="content_list_txt">
							<dd>网站结构优化</dd>
							<dt>
								<p>整体架构优化</p>
								<p>URL结构优化</p>
								<p>导航结构优化</p>
								<p>内链结构优化</p>
								<p>聚合页优化</p>
							</dt>
						</div>
					</div>
					<div class="seo_content_list">
						<div class="content_list_icon iconfont shadow10">&#xe611;</div>
						<div class="content_list_txt">
							<dd>技术优化</dd>
							<dt>
								<p>网页代码优化</p>
								<p>robots文件</p>
								<p>H标签优化</p>
								<p>图片优化</p>
								<p>网站地图优化</p>
							</dt>
						</div>
					</div>
					<div class="seo_content_list">
						<div class="content_list_icon iconfont shadow10">&#xe622;</div>
						<div class="content_list_txt">
							<dd>关键词分析</dd>
							<dt>
								<p>关键词布局策略</p>
								<p>关键词选择</p>
								<p>关键词密度</p>
								<p>关键词趋势波动</p>
								<p>用户搜索词分析</p>
							</dt>
						</div>
					</div>
					<div class="seo_content_list">
						<div class="content_list_icon iconfont shadow10">&#xe728;</div>
						<div class="content_list_txt">
							<dd>外部优化</dd>
							<dt>
								<p>外链分析</p>
								<p>外链建设</p>
								<p>友链优化</p>
								<p>百度产品优化</p>
								<p>第三方平台优化</p>
							</dt>
						</div>
					</div>
					<div class="seo_content_list">
						<div class="content_list_icon iconfont shadow10">&#xe617;</div>
						<div class="content_list_txt">
							<dd>数据分析</dd>
							<dt>
								<p>关键词排名报告</p>
								<p>流量报告</p>
								<p>收录报告</p>
								<p>外链报告</p>
								<p>竞争对手分析</p>
								<p>swot分析</p>
							</dt>
						</div>
					</div>
				</div>
				<div class="Marketing_idea_button">
					<a href="#">我要优化</a>
				</div>
			</div>
		</div>
		
		
		
		
		
		
		
		
		
		
		<div class="IndexService Marketing_partner">
			<div class="IndexService_content all">
				<div class="IndexService_content_title">
					<dd>他们选择了我们</dd>
				</div>
				<div class="Marketing_partner_content clear">
					<div class="partner_content_list fl shadow7"><img src="<?php echo APP_CONFIG['__index__']; ?>images/bn91.png"></div>
					<div class="partner_content_list fl shadow7"><img src="<?php echo APP_CONFIG['__index__']; ?>images/bn92.png"></div>
					<div class="partner_content_list fl shadow7"><img src="<?php echo APP_CONFIG['__index__']; ?>images/bn93.png"></div>
					<div class="partner_content_list fl shadow7"><img src="<?php echo APP_CONFIG['__index__']; ?>images/bn94.png"></div>
					<div class="partner_content_list fl shadow7"><img src="<?php echo APP_CONFIG['__index__']; ?>images/bn95.png"></div>
					<div class="partner_content_list fl shadow7"><img src="<?php echo APP_CONFIG['__index__']; ?>images/bn96.png"></div>
					<div class="partner_content_list fl shadow7"><img src="<?php echo APP_CONFIG['__index__']; ?>images/bn97.png"></div>
					<div class="partner_content_list fl shadow7"><img src="<?php echo APP_CONFIG['__index__']; ?>images/bn98.png"></div>
				</div>
			</div>
		</div>
		
		
		<div class="IndexService Marketing_team">
			<div class="IndexService_content all">
				<div class="IndexService_content_title">
					<dd>我们的SEO服务团队</dd>
				</div>
				<div class="Marketing_team_content clear">
					<div class="team_content_left fl clear">
						<div class="content_left_list fl">
							<dd>项目经理</dd>
							<dt>PROJECT MANAGER</dt>
						</div>
						<div class="content_left_list fl">
							<dd>品牌策划顾问</dd>
							<dt>BRAND PLANNING CONSULTAN</dt>
						</div>
						<div class="content_left_list fl">
							<dd>交互体验专员</dd>
							<dt>INTERACTIVE EXPERIENCE SPECIALIST</dt>
						</div>
						<div class="content_left_list fl">
							<dd>渠道整合专员</dd>
							<dt>CHANNEL INTEGRATION SPECIALIST</dt>
						</div>
					</div>
					<div class="team_content_center fl">
						<dd><img src="<?php echo APP_CONFIG['__index__']; ?>images/bn99.png"></dd>
						<dt><img src="<?php echo APP_CONFIG['__index__']; ?>images/bn100.png"></dt>
					</div>
					<div class="team_content_left fl clear">
						<div class="content_left_list fl">
							<dd>数据分析专员</dd>
							<dt>ANALYST</dt>
						</div>
						<div class="content_left_list fl">
							<dd>优化顾问</dd>
							<dt>OPTIMIZATION CONSULTANT</dt>
						</div>
						<div class="content_left_list fl">
							<dd>资深优化</dd>
							<dt>SENIOR OPTIMIZATION</dt>
						</div>
						<div class="content_left_list fl">
							<dd>执行专员</dd>
							<dt>EXECUTIVE COMMISSIONER</dt>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		
		
		
		
		
		
		
		<div class="IndexService ServiceCooperation MarketingCooperation">
			<div class="IndexService_content all">
				<div class="IndexService_content_title">
					<dd>服务流程</dd>
				</div>
				<div class="ServiceCooperation_content_mo"><img src="<?php echo APP_CONFIG['__index__']; ?>images/bg39.jpg"></div>
				<div class="ServiceCooperation_content clear">
					<div class="ServiceCooperation_content_list fl xqsj">
						<div class="content_list_title">
							<dd>01. 需求征集</dd>
							<dt>充分了解客户需求</dt>
						</div>
						<div class="content_list_icon"><img src="<?php echo APP_CONFIG['__index__']; ?>images/bn37.png"></div>
					</div>
					<div class="ServiceCooperation_content_list fl fxch">
						<div class="content_list_title">
							<dd>02. 分析策划</dd>
							<dt>创意构思，合理脑图</dt>
						</div>
						<div class="content_list_icon"><img src="<?php echo APP_CONFIG['__index__']; ?>images/bn39.png"></div>
					</div>
					<div class="ServiceCooperation_content_list fl hzqd">
						<div class="content_list_title">
							<dd>03. 合作签订</dd>
							<dt>签订合同，保障双方权益</dt>
						</div>
						<div class="content_list_icon"><img src="<?php echo APP_CONFIG['__index__']; ?>images/bn40.png"></div>
					</div>
					<div class="ServiceCooperation_content_list fl ymsj">
						<div class="content_list_title">
							<dd>04. 页面设计</dd>
							<dt>一对一设计，让客户满意为止</dt>
						</div>
						<div class="content_list_icon"><img src="<?php echo APP_CONFIG['__index__']; ?>images/bn41.png"></div>
					</div>
					<div class="ServiceCooperation_content_list fl kfzz">
						<div class="content_list_title">
							<dd>05. 开发制造</dd>
							<dt>专业开发团队，用代码写诗</dt>
						</div>
						<div class="content_list_icon"><img src="<?php echo APP_CONFIG['__index__']; ?>images/bn42.png"></div>
					</div>
					<div class="ServiceCooperation_content_list fl sxcs">
						<div class="content_list_title">
							<dd>06. 上线测试</dd>
							<dt>多轮测试，杜绝BUG和漏洞</dt>
						</div>
						<div class="content_list_icon"><img src="<?php echo APP_CONFIG['__index__']; ?>images/bn43.png"></div>
					</div>
					<div class="ServiceCooperation_content_list fl fkxg">
						<div class="content_list_title">
							<dd>07. 反馈修改</dd>
							<dt>发现问题，及时修改绝不拖延</dt>
						</div>
						<div class="content_list_icon"><img src="<?php echo APP_CONFIG['__index__']; ?>images/bn44.png"></div>
					</div>
					<div class="ServiceCooperation_content_list fl ktsx">
						<div class="content_list_title">
							<dd>08. 开通上线</dd>
							<dt>客户验收通过后方才上线</dt>
						</div>
						<div class="content_list_icon"><img src="<?php echo APP_CONFIG['__index__']; ?>images/bn45.png"></div>
					</div>
					<div class="ServiceCooperation_content_list fl qnwh">
						<div class="content_list_title">
							<dd>09. 全年维护</dd>
							<dt>一年365天，全天候积极维护</dt>
						</div>
						<div class="content_list_icon"><img src="<?php echo APP_CONFIG['__index__']; ?>images/bn46.png"></div>
					</div>
				</div>
			</div>
		</div>
		
		
		
		
		
		
		
		
		
		
		
		
		<div class="app_footer Marketing_footer">
			<a href="http://wpa.qq.com/msgrd?v=3&uin=821642832&site=qq&menu=yes" target="_blank">想要建站？立即咨询我们</a>
		</div>


		
		<?php include dirname(__FILE__).'/../common/_footer.php'; ?>

		
		<script type="text/javascript" src="<?php echo APP_CONFIG['__index__']; ?>js/jquery-1.8.3.min.js"></script>
		<script src="<?php echo APP_CONFIG['__index__']; ?>js/canvas.js"></script>
		<script src="<?php echo APP_CONFIG['__index__']; ?>js/global.js"></script>
		<script src="<?php echo APP_CONFIG['__index__']; ?>js/iconfont.js"></script>
		<script src="<?php echo APP_CONFIG['__index__']; ?>js/carousel.js"></script>
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
					1200:{items:5},
				}
			});
		});
		</script>
		<script>
		$(document).ready(function($) {
			$('.Marketing_idea_content').owlCarousel({
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
					960:{items:2},//当屏幕大小缩小到960的时候变5个
					1200:{items:3},
				}
			});
		});
		</script>
		<script type="text/javascript">
			$(function(){
				time();
			});
			function time(){
		        setTimeout(function(){
			      $(".xqsj").addClass("on");
			      $(".qnwh").removeClass("on");
			    }, 1000);
			    setTimeout(function(){
			      $(".fxch").addClass("on");
			      $(".xqsj").removeClass("on");
			    }, 2000);
			    setTimeout(function(){
			      $(".hzqd").addClass("on");
			      $(".fxch").removeClass("on");
			      $(".xqsj").removeClass("on");
			    }, 3000);
			    setTimeout(function(){
			      $(".ymsj").addClass("on");
			      $(".hzqd").removeClass("on");
			      $(".fxch").removeClass("on");
			      $(".xqsj").removeClass("on");
			    }, 4000);
			    setTimeout(function(){
			      $(".kfzz").addClass("on");
			      $(".ymsj").removeClass("on");
			      $(".hzqd").removeClass("on");
			      $(".fxch").removeClass("on");
			      $(".xqsj").removeClass("on");
			    }, 5000);
			    setTimeout(function(){
			      $(".sxcs").addClass("on");
			      $(".kfzz").removeClass("on");
			      $(".ymsj").removeClass("on");
			      $(".hzqd").removeClass("on");
			      $(".fxch").removeClass("on");
			      $(".xqsj").removeClass("on");
			    }, 6000);
			    setTimeout(function(){
			      $(".fkxg").addClass("on");
			      $(".sxcs").removeClass("on");
			      $(".kfzz").removeClass("on");
			      $(".ymsj").removeClass("on");
			      $(".hzqd").removeClass("on");
			      $(".fxch").removeClass("on");
			      $(".xqsj").removeClass("on");
			    }, 7000);
			    setTimeout(function(){
			      $(".ktsx").addClass("on");
			      $(".fkxg").removeClass("on");
			      $(".sxcs").removeClass("on");
			      $(".kfzz").removeClass("on");
			      $(".ymsj").removeClass("on");
			      $(".hzqd").removeClass("on");
			      $(".fxch").removeClass("on");
			      $(".xqsj").removeClass("on");
			    }, 8000);
			    setTimeout(function(){
			      $(".qnwh").addClass("on");
			      $(".ktsx").removeClass("on");
			      $(".fkxg").removeClass("on");
			      $(".sxcs").removeClass("on");
			      $(".kfzz").removeClass("on");
			      $(".ymsj").removeClass("on");
			      $(".hzqd").removeClass("on");
			      $(".fxch").removeClass("on");
			      $(".xqsj").removeClass("on");
			      time();
			    }, 9000);
		    }
		</script>

	</body> 
</html>
