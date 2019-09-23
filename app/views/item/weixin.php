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
		
		
		
		<div class="WeChatBanner" style="background:url(<?php echo APP_CONFIG['__index__']; ?>images/WeChatBanner.jpg) no-repeat 50%/cover;"></div>
		
		
		
		<div class="IndexService WeChat">
			<div class="IndexService_content all">
				<div class="IndexService_content_title">
					<dd>零售行业痛点</dd>
				</div>
				<div class="WeChat_content clear carousel">
					<div class="WeChat_content_list">
						<dd><img src="<?php echo APP_CONFIG['__index__']; ?>images/bn49.png"></dd>
						<dt>传统纸质宣传方式成本高，效果欠佳</dt>
					</div>
					<div class="WeChat_content_list">
						<dd><img src="<?php echo APP_CONFIG['__index__']; ?>images/bn50.png"></dd>
						<dt>坐等顾客上门，传统门店逐步沦为“试用店”</dt>
					</div>
					<div class="WeChat_content_list">
						<dd><img src="<?php echo APP_CONFIG['__index__']; ?>images/bn51.png"></dd>
						<dt>暴力刷屏推产品，客户信任度低</dt>
					</div>
					<div class="WeChat_content_list">
						<dd><img src="<?php echo APP_CONFIG['__index__']; ?>images/bn52.png"></dd>
						<dt>缺少数据支撑，顾客难成“回头客”</dt>
					</div>
				</div>
				<div class="WeChat_fan">
					<dd>粉丝经济时代击破痛点 — 做真正的移动零售</dd>
					<dt><img src="<?php echo APP_CONFIG['__index__']; ?>images/bn53.png"></dt>
				</div>
			</div>
		</div>
		
		
		
		
		
		<div class="profit">
			<div class="profit_title">健全的盈利模式--促销粉丝互动亮点</div>
			<div class="profit_content clear">
				<div class="profit_content_list fl">
					<div class="content_list_title">会员推广赚收益</div>
					<div class="content_list_icon"><img src="<?php echo APP_CONFIG['__index__']; ?>images/bn54.png" class="flip"></div>
					<div class="content_list_txt">平台已注册的会员，可以在会员中心复制自己的专属链接/二维码，在外部社交平台、朋友圈微博等进行推广，外部用户点击或扫描注册后，推荐人会获得相应的奖励（具体奖励由平台方进行设置）</div>
				</div>
				<div class="profit_content_list fl">
					<div class="content_list_title">红包发放模式（卡号+密码）</div>
					<div class="content_list_icon"><img src="<?php echo APP_CONFIG['__index__']; ?>images/bn56.png" class="flip"></div>
					<div class="content_list_txt">后台可设置红包卡号加密码，线下发给会员，会员即可凭卡号密码兑换红包，红火对红包的钻研一直在加深，为商家在红包促销模式上带来</div>
				</div>
				<div class="profit_content_list fl">
					<div class="content_list_title">红包发放模式（卡号+密码）</div>
					<div class="content_list_icon"><img src="<?php echo APP_CONFIG['__index__']; ?>images/bn57.png" class="flip"></div>
					<div class="content_list_txt">为了平台能够吸引更多新用户注册，特别为商家开启新手注册送红包功能，相应金额或者明细，商家可以自己在后台调整为平台更好的引流</div>
				</div>
				<div class="profit_content_list fl">
					<div class="content_list_title">首页秒杀商品推荐</div>
					<div class="content_list_icon"><img src="<?php echo APP_CONFIG['__index__']; ?>images/bn61.png" class="flip"></div>
					<div class="content_list_txt">首页作为用户对平台的入口，在顶部加上秒杀商品，以低价销售的形式，快速提高购买率，册后，推荐人会获得相应的奖励增加人气，带来销量</div>
				</div>
				<div class="profit_content_list fl">
					<div class="content_list_title">积分商城换购</div>
					<div class="content_list_icon"><img src="<?php echo APP_CONFIG['__index__']; ?>images/bn58.png" class="flip"></div>
					<div class="content_list_txt">平台已注册的会员，可以在会员中心复制自己的专属链接/二维码，在外部社交平台、朋友圈微博等进行推广，外部用户点击或扫描注册后，推荐人会获得相应的奖励（具体奖励由平台方进行设置）</div>
				</div>
				<div class="profit_content_list fl">
					<div class="content_list_title">商城团购功能</div>
					<div class="content_list_icon"><img src="<?php echo APP_CONFIG['__index__']; ?>images/bn59.png" class="flip"></div>
					<div class="content_list_txt">后台可设置红包卡号加密码，线下发给会员，会员即可凭卡号密码兑换红包，红火对红包的钻研一直在加深，为商家在红包促销模式上带来</div>
				</div>
				<div class="profit_content_list fl">
					<div class="content_list_title">商城砍价功能</div>
					<div class="content_list_icon"><img src="<?php echo APP_CONFIG['__index__']; ?>images/bn60.png" class="flip"></div>
					<div class="content_list_txt">为了平台能够吸引更多新用户注册，特别为商家开启新手注册送红包功能，相应金额或者明细，商家可以自己在后台调整为平台更好的引流</div>
				</div>
				<div class="profit_content_list fl">
					<div class="content_list_title">商品预售功能</div>
					<div class="content_list_icon"><img src="<?php echo APP_CONFIG['__index__']; ?>images/bn62.png" class="flip"></div>
					<div class="content_list_txt">首页作为用户对平台的入口，在顶部加上秒杀商品，以低价销售的形式，快速提高购买率，册后，推荐人会获得相应的奖励增加人气，带来销量</div>
				</div>
			</div>
		</div>
		
		
		
		
		
		
		
		
		<div class="IndexService program">
			<div class="IndexService_content all">
				<div class="program_title">电商系统方案</div>
				<div class="program_content clear">
					<div class="program_content_left fl clear">
						<div class="content_left_list fl">
							<dd><img src="<?php echo APP_CONFIG['__index__']; ?>images/bg37.jpg"></dd>
							<dt>微官网</dt>
						</div>
						<div class="content_left_list fl">
							<dd><img src="<?php echo APP_CONFIG['__index__']; ?>images/bg37.jpg"></dd>
							<dt>微商城</dt>
						</div>
						<div class="content_left_list fl">
							<dd><img src="<?php echo APP_CONFIG['__index__']; ?>images/bg37.jpg"></dd>
							<dt>O2O平台</dt>
						</div>
					</div>
					<div class="program_content_center fl"><img src="<?php echo APP_CONFIG['__index__']; ?>images/bn63.png"></div>
					<div class="program_content_left fr">
						<div class="content_left_list fl">
							<dd><img src="<?php echo APP_CONFIG['__index__']; ?>images/bg37.jpg"></dd>
							<dt>微官网</dt>
						</div>
						<div class="content_left_list fl">
							<dd><img src="<?php echo APP_CONFIG['__index__']; ?>images/bg37.jpg"></dd>
							<dt>微商城</dt>
						</div>
						<div class="content_left_list fl">
							<dd><img src="<?php echo APP_CONFIG['__index__']; ?>images/bg37.jpg"></dd>
							<dt>O2O平台</dt>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		
		<div class="IndexService program_service">
			<div class="IndexService_content all">
				<div class="program_service_title">
					<dd>千锤百炼 精益求精 - 给您优质的服务</dd>
					<dt>
						<p>只有想不到，没有做不到，提升优化后的功能，不止为了好的用户体验，更是希望把产品推向一个新的高度 拥有诸多特色而又实用的强</p>
						<p>大功能，打造不凡的微商城，让你轻轻松松做微商！</p>
					</dt>
				</div>
				<div class="program_service_content clear">
					<div class="service_content_list fl shadow7">
						<dd><img src="<?php echo APP_CONFIG['__index__']; ?>images/bn64.png"></dd>
						<dt>首页</dt>
					</div>
					<div class="service_content_list fl shadow7">
						<dd><img src="<?php echo APP_CONFIG['__index__']; ?>images/bn65.png"></dd>
						<dt>分类</dt>
					</div>
					<div class="service_content_list fl shadow7">
						<dd><img src="<?php echo APP_CONFIG['__index__']; ?>images/bn66.png"></dd>
						<dt>搜索</dt>
					</div>
					<div class="service_content_list fl shadow7">
						<dd><img src="<?php echo APP_CONFIG['__index__']; ?>images/bn67.png"></dd>
						<dt>购物车</dt>
					</div>
					<div class="service_content_list fl shadow7">
						<dd><img src="<?php echo APP_CONFIG['__index__']; ?>images/bn68.png"></dd>
						<dt>我</dt>
					</div>
					<div class="service_content_list fl shadow7">
						<dd><img src="<?php echo APP_CONFIG['__index__']; ?>images/bn69.png"></dd>
						<dt>专题</dt>
					</div>
					<div class="service_content_list fl shadow7">
						<dd><img src="<?php echo APP_CONFIG['__index__']; ?>images/bn70.png"></dd>
						<dt>我的关注</dt>
					</div>
					<div class="service_content_list fl shadow7">
						<dd><img src="<?php echo APP_CONFIG['__index__']; ?>images/bn71.png"></dd>
						<dt>物流查询</dt>
					</div>
					<div class="service_content_list fl shadow7">
						<dd><img src="<?php echo APP_CONFIG['__index__']; ?>images/bn72.png"></dd>
						<dt>待付款</dt>
					</div>
					<div class="service_content_list fl shadow7">
						<dd><img src="<?php echo APP_CONFIG['__index__']; ?>images/bn73.png"></dd>
						<dt>评价</dt>
					</div>
					<div class="service_content_list fl shadow7">
						<dd><img src="<?php echo APP_CONFIG['__index__']; ?>images/bn74.png"></dd>
						<dt>品牌节</dt>
					</div>
					<div class="service_content_list fl shadow7">
						<dd><img src="<?php echo APP_CONFIG['__index__']; ?>images/bn75.png"></dd>
						<dt>积分换购</dt>
					</div>
					<div class="service_content_list fl shadow7">
						<dd><img src="<?php echo APP_CONFIG['__index__']; ?>images/bn76.png"></dd>
						<dt>充值提现</dt>
					</div>
					<div class="service_content_list fl shadow7">
						<dd><img src="<?php echo APP_CONFIG['__index__']; ?>images/bn77.png"></dd>
						<dt>浏览历史</dt>
					</div>
					<div class="service_content_list fl shadow7">
						<dd><img src="<?php echo APP_CONFIG['__index__']; ?>images/bn78.png"></dd>
						<dt>消息</dt>
					</div>
					<div class="service_content_list fl shadow7">
						<dd><img src="<?php echo APP_CONFIG['__index__']; ?>images/bn79.png"></dd>
						<dt>促销活动</dt>
					</div>
					<div class="service_content_list fl shadow7">
						<dd><img src="<?php echo APP_CONFIG['__index__']; ?>images/bn80.png"></dd>
						<dt>团购系统</dt>
					</div>
					<div class="service_content_list fl shadow7">
						<dd><img src="<?php echo APP_CONFIG['__index__']; ?>images/bn81.png"></dd>
						<dt>我的收藏</dt>
					</div>
					<div class="service_content_list fl shadow7">
						<dd><img src="<?php echo APP_CONFIG['__index__']; ?>images/bn82.png"></dd>
						<dt>待发货</dt>
					</div>
					<div class="service_content_list fl shadow7">
						<dd><img src="<?php echo APP_CONFIG['__index__']; ?>images/bn83.png"></dd>
						<dt>我的钱包</dt>
					</div>
				</div>
			</div>
		</div>
		
		
		
		
		
		
		
		
		
		<div class="IndexService WeChat Mall">
			<div class="IndexService_content all">
				<div class="IndexService_content_title">
					<dd>为什么选择红火的微商城</dd>
					<dt>依托微信群众传播优势，快速扩展品牌知名度，打造符合企业自身的微信营销方式</dt>
				</div>
				<div class="WeChat_content clear carousel Mall_content">
					<div class="WeChat_content_list">
						<dd><img src="<?php echo APP_CONFIG['__index__']; ?>images/bn84.png"></dd>
						<dt>经验丰富</dt>
						<p>多年从事微信开发服务、开发团队技术过硬</p>
					</div>
					<div class="WeChat_content_list">
						<dd><img src="<?php echo APP_CONFIG['__index__']; ?>images/bn85.png"></dd>
						<dt>一站式服务</dt>
						<p>包含微商城、微分销、微拼团、微众筹的一站式服务</p>
					</div>
					<div class="WeChat_content_list">
						<dd><img src="<?php echo APP_CONFIG['__index__']; ?>images/bn86.png"></dd>
						<dt>提供产品源码</dt>
						<p>拥有产品的系统源码才是完全属于自己的系统</p>
					</div>
					<div class="WeChat_content_list">
						<dd><img src="<?php echo APP_CONFIG['__index__']; ?>images/bn87.png"></dd>
						<dt>支持二次开发</dt>
						<p>让企业可以发挥自己的想象力去对产品进行二次开发定制</p>
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
							<div class="list_img_title"><img src="<?php echo APP_CONFIG['__index__']; ?>images/ptj_2.jpg" class="tra"></div>
		                    <div class="content_list_txt">
		                    	<div class="list_txt_logo"><img src="<?php echo APP_CONFIG['__index__']; ?>images/ptj.jpg" alt="" title=""></div>
		                        <div class="list_txt_title">进口葡萄酒商城</div>
		                        <div class="list_txt_content">
		                        	随着中国经济崛起，人民生活水平提高，红酒市场空间迅速扩大。但在当下市场存在品牌质量价格虚假严峻。我公司秉承对消费者负责任的心态，致力打造 集葡萄酒文化，葡萄酒种植 酿制 进口 分享经济 消费创业 质优价实为一体的物联网葡萄酒平台。
		                        </div>
		                    </div>
						</div>
					</div>
					<div class="IndexCase_content_list fl">
						<div class="content_list_img">
							<div class="list_img_title"><img src="<?php echo APP_CONFIG['__index__']; ?>images/sp2.jpg" class="tra"></div>
		                    <div class="content_list_txt">
		                    	<div class="list_txt_logo"><img src="<?php echo APP_CONFIG['__index__']; ?>images/sp.jpg" alt="" title=""></div>
		                        <div class="list_txt_title">东北小子</div>
		                        <div class="list_txt_content">
		                        	本公司专业生产烤冷面、朝鲜冷面、米线、土豆粉等各种东北特色小吃原料、调料。 全国各地拥有2000余家由我们长期直供货源的小吃店，我们不收加盟费，免费提供技术，出厂价格出售原料、调料 ，几百元就可以成就您的事业梦 ，欢迎有识之士加入 .
		                        </div>
		                    </div>
						</div>
					</div>
					<div class="IndexCase_content_list fl">
						<div class="content_list_img">
							<div class="list_img_title"><img src="<?php echo APP_CONFIG['__index__']; ?>images/zb2.jpg" class="tra"></div>
		                    <div class="content_list_txt">
		                    	<div class="list_txt_logo"><img src="<?php echo APP_CONFIG['__index__']; ?>images/zb.jpg" alt="" title=""></div>
		                        <div class="list_txt_title">龙凤珠宝</div>
		                        <div class="list_txt_content">
		                        	龙凤珠宝是一家现代化大型珠宝首饰综合性企业，业务涵盖至采购、研发、生产、批发和零售等领域。龙凤对整个珠宝产业链深度渗透，能够最大限度的实现顾客利益最大化。
		                        </div>
		                    </div>
						</div>
					</div>
					<div class="IndexCase_content_list fl">
						<div class="content_list_img">
							<div class="list_img_title"><img src="<?php echo APP_CONFIG['__index__']; ?>images/dq2.jpg" class="tra"></div>
		                    <div class="content_list_txt">
		                    	<div class="list_txt_logo"><img src="<?php echo APP_CONFIG['__index__']; ?>images/dq.jpg" alt="" title=""></div>
		                        <div class="list_txt_title">这有电工电器</div>
		                        <div class="list_txt_content">
		                        	本商城位于中国物流发达、交通便利的中心城市。河南省会--郑州。是集开发，生产，销售，服务为一体的综合型企业。
		                        </div>
		                    </div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		
		
		
		<div class="app_footer WeChat_footer">
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
				margin:90,
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
