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
		
		
		<div class="ServiceBanner ServiceBanner_website">
			<div class="ServiceBanner_content clear">
				<div class="ServiceBanner_content_left fl">
					<div class="content_left_title">
						<dd>高端网站定制</dd>
						<dt>集团、政府、教育、产品等网站需要与公众媒体，上级领导，内部员工，投资合作者，应聘者，消费者和供应商，子公司或下级部门等目标人群进行沟通。如何满足这些人群的需求，是网站需要解决的问题。尚品中国结合多年网站建设和维护经验，推出适合各行业网站...</dt>
					</div>
					<div class="content_left_bottom clear">
						<div class="left_bottom_list fl">
							<dd class="iconfont">&#xe70b;</dd>
							<dt>企业官网</dt>
						</div>
						<div class="left_bottom_list fl">
							<dd class="iconfont">&#xe6d2;</dd>
							<dt>外贸网站</dt>
						</div>
						<div class="left_bottom_list fl">
							<dd class="iconfont">&#xe659;</dd>
							<dt>综合门户</dt>
						</div>
						<div class="left_bottom_list fl">
							<dd class="iconfont">&#xe606;</dd>
							<dt>电商网站</dt>
						</div>
						<div class="left_bottom_list fl">
							<dd class="iconfont">&#xe620;</dd>
							<dt>智慧党建</dt>
						</div>
					</div>
				</div>
				<div class="ServiceBanner_content_left ServiceBanner_content_right fr"><img src="<?php echo APP_CONFIG['__index__']; ?>images/bn35.png"></div>
			</div>
		</div>
		
		
		
		
		
		
		
		
		
		
		
		
		
		<div class="IndexService ServiceWebsite">
			<div class="IndexService_content all">
				<div class="IndexService_content_title">
					<dd>服务项目 / SERVICE Items</dd>
					<dt>百分百定制开发，一对一的专业设计，全程项目跟踪，红火用专业和态度为您提供优质的服务！</dt>
				</div>
				<div class="ServiceWebsite_content clear">
					<div class="ServiceWebsite_content_left fl clear">
						<div class="content_left_list fl clear">
							<div class="left_list_icon fl iconfont">&#xe669;</div>
							<div class="left_list_contnet fl">
								<dd>分析策划</dd>
								<dt>
									<p>结合品牌理念及品牌诉求</p>
									<p>编撰策划分析提案</p>
								</dt>
							</div>
						</div>
						<div class="content_left_list fl clear">
							<div class="left_list_icon fl iconfont">&#xe7ab;</div>
							<div class="left_list_contnet fl">
								<dd>页面设计</dd>
								<dt>
									<p>依据行业特点定制设计100%</p>
									<p>贴合设计</p>
								</dt>
							</div>
						</div>
						<div class="content_left_list fl clear">
							<div class="left_list_icon fl iconfont">&#xe6b0;</div>
							<div class="left_list_contnet fl">
								<dd>前端制作</dd>
								<dt>
									<p>采用HTML5将效果图制作成</p>
									<p>静态面页</p>
								</dt>
							</div>
						</div>
						<div class="content_left_list fl clear">
							<div class="left_list_icon fl iconfont">&#xe60f;</div>
							<div class="left_list_contnet fl">
								<dd>SEO配置</dd>
								<dt>
									<p>遵循搜索引擎技术标准</p>
									<p>全站静态化</p>
								</dt>
							</div>
						</div>
						<div class="content_left_list fl clear">
							<div class="left_list_icon fl iconfont">&#xe60e;</div>
							<div class="left_list_contnet fl">
								<dd>网站域名</dd>
								<dt>
									<p>国际顶级或者国家顶级域名，</p>
									<p>全球无障碍互联互通</p>
								</dt>
							</div>
						</div>
						<div class="content_left_list fl clear">
							<div class="left_list_icon fl iconfont">&#xe625;</div>
							<div class="left_list_contnet fl">
								<dd>网络主机</dd>
								<dt>
									<p>2型阿里云BGP多线云主机，</p>
									<p>配置独立IP地址</p>
								</dt>
							</div>
						</div>
						<div class="content_left_list fl clear">
							<div class="left_list_icon fl iconfont">&#xe60a;</div>
							<div class="left_list_contnet fl">
								<dd>功能开发</dd>
								<dt>
									<p>购物车，订单系统，物流查询</p>
									<p>积分系统，在线支付，手机短信</p>
								</dt>
							</div>
						</div>
						<div class="content_left_list fl clear">
							<div class="left_list_icon fl iconfont">&#xe6ea;</div>
							<div class="left_list_contnet fl">
								<dd>兼容标准</dd>
								<dt>
									<p>不同操作系统、不同浏览器、</p>
									<p>不同浏览终端实现零像素差异</p>
								</dt>
							</div>
						</div>
						<div class="content_left_list fl clear">
							<div class="left_list_icon fl iconfont">&#xe655;</div>
							<div class="left_list_contnet fl">
								<dd>采用技术</dd>
								<dt>
									<p>PHP+MySQL+Html5+CSS+</p>
									<p>JavaScript</p>
								</dt>
							</div>
						</div>
					</div>
					<div class="ServiceWebsite_content_right fr">
						<div class="content_right_title">
							<dd>安全防护</dd>
							<dt>safety protection</dt>
							<p>智能实时防护，防DDOS,CC,DNS等攻击</p>
						</div>
						<div class="content_right_img"><img src="<?php echo APP_CONFIG['__index__']; ?>images/bn36.png"></div>
					</div>
				</div>
			</div>
		</div>
		
		
		
		
		
		
		<div class="IndexService ServiceCooperation">
			<div class="IndexService_content all">
				<div class="IndexService_content_title">
					<dd>合作流程 / Online translation</dd>
				</div>
				<div class="ServiceCooperation_content_mo"><img src="<?php echo APP_CONFIG['__index__']; ?>images/bg36.jpg"></div>
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
		
		
		
		
		
		
		
		
		
		<div class="IndexService IndexCase case ServiceCase">
			<div class="IndexService_content all">
				<div class="IndexService_content_title">
					<dd>相关案例 / related cases</dd>
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
				</div>
			</div>
		</div>
		
		
		
		<div class="app_footer website_footer">
			<a  href="http://wpa.qq.com/msgrd?v=3&uin=821642832&site=qq&menu=yes" target="_blank">想要建站？立即咨询我们</a>
		</div>

		
		<?php include dirname(__FILE__).'/../common/_footer.php'; ?>

		
		<script type="text/javascript" src="<?php echo APP_CONFIG['__index__']; ?>js/jquery-1.8.3.min.js"></script>
		<script src="<?php echo APP_CONFIG['__index__']; ?>js/canvas.js"></script>
		<script src="<?php echo APP_CONFIG['__index__']; ?>js/global.js"></script>
		<script src="<?php echo APP_CONFIG['__index__']; ?>js/iconfont.js"></script>
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
