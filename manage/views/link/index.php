<?php if(!defined('UNI_V')){exit;}?>
<?php include dirname(__FILE__).'/../common/_meta.php'; ?>
<title>友情链接管理</title>
<meta name="keywords" content="uniphp">
<meta name="description" content="uniphp,轻量级php框架.">
</head>
<body>
	<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 友情链接<span class="c-gray en">&gt;</span> 链接管理 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
		<div class="pd-20 text-c">
			<div class="text-c">
				<form action="" method="post">
					<input type="text" name="key" id="" placeholder="友情链接名称" style="width:250px" class="input-text">
					<button name="" id="" class="btn btn-success" type="submit"><i class="Hui-iconfont">&#xe665;</i> 搜索</button>
				</form>
			</div>
			<div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l"><a href="javascript:;" onclick="catesort()" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 更新排序</a> <a class="btn btn-primary radius" onclick="system_category_add('添加友情链接','<?php echo u('link','add'); ?>')" href="javascript:;"><i class="Hui-iconfont">&#xe600;</i> 添加友情链接</a></span> <span class="r">共有数据：<strong><?php echo $this->count; ?></strong> 条</span> </div>
			<div class="mt-20">
				<table class="table table-border table-bordered table-hover table-bg table-sort">
					<thead>
						<tr class="text-c">
							<th width="20">ID</th>
							<th width="20">排序</th>
							<th width="40">友情链接名称</th>
							<th width="100">友情链接LOGO</th>
							<th width="100">友情链接地址</th>
							<th width="200">友情链接备注</th>
							<th width="10">操作</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($this->data[0] as $k=>$v){ ?>
						<tr class="text-c">
							<td><?php echo $v['id']; ?></td>
							<td style="width: 15px;"><input type="text" name="<?php echo $v['id']; ?>" class="input-text lizhi"  value="<?php echo $v['sort']; ?>"></td>
							<td><?php echo $v['title']; ?></td>
							<td> 
								<?php if($v['pic']){?>
									<img src="<?php echo $v['pic']; ?>" height="60" />
								<?php }else{ ?>
									暂无图片
								<?php } ?>
							</td>
							<td><a href="<?php echo $v['linkurl']; ?>" target="_blank"><?php echo $v['linkurl']; ?></a></td>
							<td><?php echo $v['desc']; ?></td>
							<td class="f-14"><a title="编辑" href="javascript:;" onclick="system_category_edit('修改连接','<?php echo u('link','edit',$v['id']); ?>')" style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i></a> <a title="删除" href="javascript:;" onclick="system_category_del(this,<?php echo $v['id']; ?>)" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
						</tr>
						<?php } ?>
					</tbody>
				</table>
				
			</div>
			<?php echo $this->data[1]; ?>
		</div>
<!--_footer 作为公共模版分离出去-->
<?php include dirname(__FILE__).'/../common/_footer.php'; ?>
<!--/_footer /作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="<?php echo APP_CONFIG['__manage__']; ?>lib/My97DatePicker/4.8/WdatePicker.js"></script>
<script type="text/javascript" src="<?php echo APP_CONFIG['__manage__']; ?>lib/datatables/1.10.0/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?php echo APP_CONFIG['__manage__']; ?>lib/laypage/1.2/laypage.js"></script>
<script type="text/javascript">
/*系统-友情链接-添加*/
function system_category_add(title,url,w,h){
	layer_show(title,url,w,h);
}
/*系统-友情链接-编辑*/
function system_category_edit(title,url,id,w,h){
	layer_show(title,url,w,h);
}
/*系统-友情链接-删除*/
function system_category_del(obj,id){
	layer.confirm('确认要删除吗？',function(index){
		$.post(
			"<?php echo u('link','ajax');?>",
		{
			id:id,
			type:'link_del',
		},
		function(result){
	        if(result===0){
	        	layer.msg('删除失败!',{icon: 5,time:1000});
	        }else if(result===1){
	        	$(obj).parents("tr").remove();
				layer.msg('已删除!',{icon:1,time:1000});
	        }
	    });	

	});
}
//自己编写更新排序

function catesort(){
	layer.confirm('确认要更新排序吗？',function(index){	
	 	var x=document.getElementsByClassName("lizhi");
	 	var sortarr= new Array();
	 	var idarr= new Array();
	 	for(var i=0;i<x.length;i++){
	 		sortarr.push(x[i].value);
	 		idarr.push(x[i].name);
	 	}
		$.post(
			"<?php echo u('link','ajax');?>",
		{
			'sort':sortarr,
			'id':idarr,
			type:'link_sort',
		},
		function(result){
			//console.log(result);
	        if(result===1){
	        	layer.msg('更新成功!',{icon:1,time:1000});
	        	history.go(0);
	        }else{
				layer.msg('更新失败!',{icon: 5,time:1000});
				history.go(0);
	        }
	    });	
	});
}
</script>
<!--/请在上方写此页面业务相关的脚本-->
</body>
</html>