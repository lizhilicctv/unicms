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
		
		<div class="case_banner" style="background:url(<?php echo APP_CONFIG['__index__']; ?>images/case_banner.jpg) no-repeat 50%/cover;"></div>
		
		
		
		
		<div class="IndexService IndexCase case">
			<div class="IndexService_content all">
				<div class="case_content_title clear">
					<a href="/case.html#" class="fl on">全部案例</a>
					
					
					
							<a href="/case.html#上市公司/" title="上市公司网站建设案例" class="fl ">上市公司</a>
					
							<a href="/case.html#集团公司/" title="集团公司网站建设案例" class="fl ">集团公司</a>
					
							<a href="/case.html#手机.微信/" title="手机.微信网站建设案例" class="fl ">手机.微信</a>
					
							<a href="/case.html#H5响应式/" title="H5响应式网站建设案例" class="fl ">H5响应式</a>
					
							<a href="/case.html#电子商务/" title="电子商务网站建设案例" class="fl ">电子商务</a>
					
							<a href="/case.html#行业门户/" title="行业门户网站建设案例" class="fl ">行业门户</a>
					
							<a href="/case.html#生物医药/" title="生物医药网站建设案例" class="fl ">生物医药</a>
					
							<a href="/case.html#外贸/" title="外贸网站建设案例" class="fl ">外贸</a>
					
							<a href="/case.html#机械工程/" title="机械工程网站建设案例" class="fl ">机械工程</a>
					
							<a href="/case.html#教育培训/" title="教育培训网站建设案例" class="fl ">教育培训</a>
					
							<a href="/case.html#金融理财/" title="金融理财网站建设案例" class="fl ">金融理财</a>
					
							<a href="/case.html#酒店旅游/" title="酒店旅游网站建设案例" class="fl ">酒店旅游</a>
					
							<a href="/case.html#食品餐饮/" title="食品餐饮网站建设案例" class="fl ">食品餐饮</a>
					
							<a href="/case.html#健康美容/" title="健康美容网站建设案例" class="fl ">健康美容</a>
					
							<a href="/case.html#建筑地产/" title="建筑地产网站建设案例" class="fl ">建筑地产</a>
					
							<a href="/case.html#设计装饰/" title="设计装饰网站建设案例" class="fl ">设计装饰</a>
					
							<a href="/case.html#商务服务/" title="商务服务网站建设案例" class="fl ">商务服务</a>
					
							<a href="/case.html#交通物流/" title="交通物流网站建设案例" class="fl ">交通物流</a>
					
							<a href="/case.html#石油化工能源/" title="石油化工能源网站建设案例" class="fl ">石油化工能源</a>
					
							<a href="/case.html#环保科技/" title="环保科技网站建设案例" class="fl ">环保科技</a>
					
							<a href="/case.html#电子科技/" title="电子科技网站建设案例" class="fl ">电子科技</a>
					
							<a href="/case.html#IT科技/" title="IT科技网站建设案例" class="fl ">IT科技</a>
					
							<a href="/case.html#工艺礼品/" title="工艺礼品网站建设案例" class="fl ">工艺礼品</a>
					
							
				</div>
				<div class="IndexCase_content clear">
				
				
				
				
					<div  class="IndexCase_content_list fl" >
						<div class="content_list_img">
							<div><img src="<?php echo APP_CONFIG['__index__']; ?>images/86e26d9d34b8c1c36184b63e195451a7.jpg" class="tra" ></div>
							<div class="content_list_hover iconfont">
								<dd></dd>
								<dt>&#xe657;</dt>
								<div class="hr"><a href="/case/show.html"  title="创力股份"  ><img src="<?php echo APP_CONFIG['__index__']; ?>images/bn7.png"></a></div>
							</div>
						</div>
						<div class="content_list_title clear">
							<div class="list_title_left fl">
								<dd><a href="/case/show.html"   >创力股份</a><i>|</i><span>上海民营制造业企业50强</span></dd>
								<dt>上市公司 / 集团公司</dt>
							</div>
							<div class="list_title_icon fr iconfont">&#xe614;</div>
						</div>
					</div><div  class="IndexCase_content_list fl" >
						<div class="content_list_img">
							<div><img src="<?php echo APP_CONFIG['__index__']; ?>images/cfc51b65bafbd226b61a4ccb5d4b65f2.jpg" class="tra" ></div>
							<div class="content_list_hover iconfont">
								<dd></dd>
								<dt>&#xe657;</dt>
								<div class="hr"><a href="/case/show.html"  title="上海医明康德医疗"  ><img src="<?php echo APP_CONFIG['__index__']; ?>images/bn7.png"></a></div>
							</div>
						</div>
						<div class="content_list_title clear">
							<div class="list_title_left fl">
								<dd><a href="/case/show.html"   >上海医明康德医疗</a><i>|</i><span>坚持创新驱动，致力推动健康管理模式的变革</span></dd>
								<dt>集团公司 / H5响应式 / 生物医药 / 健康美容</dt>
							</div>
							<div class="list_title_icon fr iconfont">&#xe614;</div>
						</div>
					</div><div  class="IndexCase_content_list fl" >
						<div class="content_list_img">
							<div><img src="<?php echo APP_CONFIG['__index__']; ?>images/e18abc9b62f0c7e4b3ee9206cda92655.jpg" class="tra" ></div>
							<div class="content_list_hover iconfont">
								<dd></dd>
								<dt>&#xe657;</dt>
								<div class="hr"><a href="/case/show.html"  title="普天集团"  ><img src="<?php echo APP_CONFIG['__index__']; ?>images/bn7.png"></a></div>
							</div>
						</div>
						<div class="content_list_title clear">
							<div class="list_title_left fl">
								<dd><a href="/case/show.html"   >普天集团</a><i>|</i><span>一光一线，联结世界</span></dd>
								<dt>上市公司 / 集团公司 / 电子科技</dt>
							</div>
							<div class="list_title_icon fr iconfont">&#xe614;</div>
						</div>
					</div><div  class="IndexCase_content_list fl" >
						<div class="content_list_img">
							<div><img src="<?php echo APP_CONFIG['__index__']; ?>images/c14851212d5287fcc601134278ee21b7.jpg" class="tra" ></div>
							<div class="content_list_hover iconfont">
								<dd></dd>
								<dt>&#xe657;</dt>
								<div class="hr"><a href="/case/show.html"  title="捷易生物"  ><img src="<?php echo APP_CONFIG['__index__']; ?>images/bn7.png"></a></div>
							</div>
						</div>
						<div class="content_list_title clear">
							<div class="list_title_left fl">
								<dd><a href="/case/show.html"   >捷易生物</a><i>|</i><span>GEMPLE,让世界更好</span></dd>
								<dt>生物医药</dt>
							</div>
							<div class="list_title_icon fr iconfont">&#xe614;</div>
						</div>
					</div><div  class="IndexCase_content_list fl" >
						<div class="content_list_img">
							<div><img src="<?php echo APP_CONFIG['__index__']; ?>images/d085393e8372299373e7fe7b8cc6d8ea.jpg" class="tra" ></div>
							<div class="content_list_hover iconfont">
								<dd></dd>
								<dt>&#xe657;</dt>
								<div class="hr"><a href="/case/show.html"  title="高捷联"  ><img src="<?php echo APP_CONFIG['__index__']; ?>images/bn7.png"></a></div>
							</div>
						</div>
						<div class="content_list_title clear">
							<div class="list_title_left fl">
								<dd><a href="/case/show.html"   >高捷联</a><i>|</i><span>建筑电气产品研发、生产、和销售服务</span></dd>
								<dt>上市公司 / 集团公司 / 机械工程</dt>
							</div>
							<div class="list_title_icon fr iconfont">&#xe614;</div>
						</div>
					</div><div  class="IndexCase_content_list fl" >
						<div class="content_list_img">
							<div><img src="<?php echo APP_CONFIG['__index__']; ?>images/cb55325e5367d95424247a3cad88919f.jpg" class="tra" ></div>
							<div class="content_list_hover iconfont">
								<dd></dd>
								<dt>&#xe657;</dt>
								<div class="hr"><a href="/case/show.html"  title="上海欧仕格压缩机有限公司"  ><img src="<?php echo APP_CONFIG['__index__']; ?>images/bn7.png"></a></div>
							</div>
						</div>
						<div class="content_list_title clear">
							<div class="list_title_left fl">
								<dd><a href="/case/show.html"   >上海欧仕格压缩机有限公司</a><i>|</i><span></span></dd>
								<dt>H5响应式 / 机械工程</dt>
							</div>
							<div class="list_title_icon fr iconfont">&#xe614;</div>
						</div>
					</div><div  class="IndexCase_content_list fl" >
						<div class="content_list_img">
							<div><img src="<?php echo APP_CONFIG['__index__']; ?>images/5e23cfd19d6136e84c64a6141ea4e674.jpg" class="tra" ></div>
							<div class="content_list_hover iconfont">
								<dd></dd>
								<dt>&#xe657;</dt>
								<div class="hr"><a href="/case/show.html"  title="上海瑞派机械有限公司"  ><img src="<?php echo APP_CONFIG['__index__']; ?>images/bn7.png"></a></div>
							</div>
						</div>
						<div class="content_list_title clear">
							<div class="list_title_left fl">
								<dd><a href="/case/show.html"   >上海瑞派机械有限公司</a><i>|</i><span></span></dd>
								<dt>上市公司 / 机械工程</dt>
							</div>
							<div class="list_title_icon fr iconfont">&#xe614;</div>
						</div>
					</div><div  class="IndexCase_content_list fl" >
						<div class="content_list_img">
							<div><img src="<?php echo APP_CONFIG['__index__']; ?>images/6099282337b10515f6c2d7dd099dcb51.jpg" class="tra" ></div>
							<div class="content_list_hover iconfont">
								<dd></dd>
								<dt>&#xe657;</dt>
								<div class="hr"><a href="/case/show.html"  title="上海圣华国际物流股份有限公司"  ><img src="<?php echo APP_CONFIG['__index__']; ?>images/bn7.png"></a></div>
							</div>
						</div>
						<div class="content_list_title clear">
							<div class="list_title_left fl">
								<dd><a href="/case/show.html"   >上海圣华国际物流股份有限公司</a><i>|</i><span></span></dd>
								<dt>集团公司 / 交通物流</dt>
							</div>
							<div class="list_title_icon fr iconfont">&#xe614;</div>
						</div>
					</div><div  class="IndexCase_content_list fl" >
						<div class="content_list_img">
							<div><img src="<?php echo APP_CONFIG['__index__']; ?>images/4cac23a4923abbc5fd55263276b5af06.jpg" class="tra" ></div>
							<div class="content_list_hover iconfont">
								<dd></dd>
								<dt>&#xe657;</dt>
								<div class="hr"><a href="/case/show.html"  title="上海首信信息科技有限公司"  ><img src="<?php echo APP_CONFIG['__index__']; ?>images/bn7.png"></a></div>
							</div>
						</div>
						<div class="content_list_title clear">
							<div class="list_title_left fl">
								<dd><a href="/case/show.html"   >上海首信信息科技有限公司</a><i>|</i><span></span></dd>
								<dt>商务服务 / IT科技</dt>
							</div>
							<div class="list_title_icon fr iconfont">&#xe614;</div>
						</div>
					</div>
					
					
					
				
				</div>
				<div class="page vertical">
					  &nbsp;<li class='active'><a class='page_class'>1</a></li>&nbsp;<li ><a href="/case.html#index_2.html">2</a></li>&nbsp;<li ><a href="/case.html#index_3.html">3</a></li>&nbsp;<li ><a href="/case.html#index_4.html">4</a></li>&nbsp;<li ><a href="/case.html#index_5.html">5</a></li>&nbsp;<li ><a href="/case.html#index_6.html">6</a></li><li><a  class="next iconfont" href="/case.html#index_2.html"><span>&#xe602;</span></a></a></li>
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
