<div class="pc_header">
			<div class="circle"></div>
			<div class="pc_header_content clear">
				<a href="index.html" class="header_content_logo fl"><img src="<?php echo APP_CONFIG['__index__']; ?>images/logo.png"></a>
				<div class="header_content_right clear fr">
					<div class="menu fl clear">
					    <ul>
							
							<li class="fl <?php if(!isset($_SERVER["REDIRECT_URL"]) or $_SERVER["REDIRECT_URL"] == 'index' or $_SERVER["REDIRECT_URL"] == 'index.html') echo 'on';?>"><a href="/index.html" class="menu_title">首页</a></li>
							<?php foreach($this->cate as $k=>$v){ ?>
								<?php if($v['id']==2){ ?>
									<li class="fl <?php if(explode("/",$_SERVER["REDIRECT_URL"])[1] == $v['en_name'] ) echo 'on'; ?>">
										<a href="javascript:;" class="menu_title service_items">服务项目</a>
										<div class="DropDown clear">
											<div class="DropDown_content">
												<a href="/item/service.html" class="fl ">
													<dd class="iconfont">&#xe70b;</dd>
													<dt>高端网站定制</dt>
												</a>
												 <a href="/item/weixin.html" class="fl ">
													<dd class="iconfont">&#xe629;</dd>
													<dt>微信定制</dt>
												</a>
												<a href="/item/app.html" class="fl ">
													<dd class="iconfont">&#xe6c0;</dd>
													<dt>APP开发服务</dt>
												</a>
												 <a href="/item/yingxiao.html" class="fl ">
													<dd class="iconfont">&#xe634;</dd>
													<dt>网络营销服务</dt>
												</a>
											</div>
										</div>
									</li> 
								<?php }else{ ?>
									<li class="fl <?php if(substr(explode("/",$_SERVER["REDIRECT_URL"])[1],0,-5) == $v['en_name'] ) echo 'on'; ?>"><a href="/<?php echo $v['en_name']; ?>.html" class="menu_title"><?php echo $v['catename']; ?></a></li>
								<?php } ?>
							<?php } ?>
					    </ul>
					</div>
					<div class="header_content_phone fr">
						<span class="iconfont">&#xe6ee;</span>18633456271
					</div>
				</div>
				<div class="burger fr">
				    <div class="x"></div>
				    <div class="y"></div>
				    <div class="z"></div>
				</div>
			</div>
		</div>