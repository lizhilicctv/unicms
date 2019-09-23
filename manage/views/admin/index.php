<?php if(!defined('UNI_V')){exit;}?>
<?php include dirname(__FILE__).'/../common/_meta.php'; ?>
<title>管理员列表</title>
<meta name="keywords" content="uniphp">
<meta name="description" content="uniphp,轻量级php框架.">
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 管理员管理 <span class="c-gray en">&gt;</span> 管理员列表 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container">
	<div class="text-c"> 
		<form action="" method="post">
		<input type="text" class="input-text" style="width:250px" placeholder="输入管理员名称" id="" name="key">
		<button type="submit" class="btn btn-success" id="" name=""><i class="Hui-iconfont">&#xe665;</i> 搜用户</button>
		</form>
	</div>
	<div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l"><a href="javascript:;" onclick="data_del()" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a> <a href="javascript:;" onclick="admin_add('添加管理员','<?php echo u('admin','add'); ?>','800','500')" class="btn btn-primary radius"><i class="Hui-iconfont">&#xe600;</i> 添加管理员</a></span> <span class="r">共有数据：<strong><?php echo $this->count; ?></strong> 条</span> </div>
		<table class="table table-border table-bordered table-bg">
				<thead>
					<tr>
						<th scope="col" colspan="9">管理员列表</th>
					</tr>
					<tr class="text-c">
						<th width="25"><input type="checkbox" name="all" value=""></th>
						<th width="40">ID</th>
						<th width="100">登录名</th>
						<th width="100">角色</th>
						<th width="100">加入时间</th>
						<th width="100">最后修改时间</th>
						<th width="300">备注</th>
						<th width="80">是否已启用</th>
						<th width="80">操作</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($this->data[0] as $k=>$v){ ?>
					<tr class="text-c">
						<td><input type="checkbox" class="all" value="<?php echo $v['id']; ?>" name=""></td>
						<td><?php echo $v['id']; ?></td>
						<td><?php echo $v['username']; ?></td>
						<td><?php echo $v['title']; ?></td>
						<td>
							<?php if( $v['id'] ==1){
								echo '不能修改';
							}else{
								echo date('Y-m-d H:i:s',$v['in_time']);
							} ?>
						</td>
						<td>
							<?php if( $v['id'] ==1){
								echo '不能修改';
							}else{
								if($v['up_time']){
									echo date('Y-m-d H:i:s',$v['up_time']);
								}else{
									echo '没有修改过';
								}
							} ?>
						</td>
						<td>
							<?php if($v['mark']){
								echo $v['mark'];
							}else{
								echo '暂未填写';
							} ?>
						</td>
						<td class="td-status">
							<?php if($v['isopen'] ==1){ ?>
								<span class="label label-success radius">已启用</span>
							<?php }else{ ?>
								<span class="label label-default radius">已禁用</span>
							<?php } ?>
						</td>
						<td class="td-manage">
							<?php if( $v['id'] !=1){
								if($v['isopen'] ==1){ ?>
									<a style="text-decoration:none" onClick="admin_stop(this,<?php echo $v['id']; ?>)" href="javascript:;" title="停用"><i class="Hui-iconfont">&#xe631;</i></a> 
							<?php	}else{ ?>
									<a onClick="admin_start(this,<?php echo $v['id']; ?>)" href="javascript:;" title="启用" style="text-decoration:none"><i class="Hui-iconfont">&#xe615;</i></a>
						<?php }
							} ?>
							
							<a title="编辑" href="javascript:;" onclick="admin_edit('管理员编辑','<?php echo u('admin','edit',$v['id']); ?>','1','800','500')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i></a> 
							<?php if( $v['id'] !=1){ ?>
							<a title="删除" href="javascript:;" onclick="admin_del(this,<?php echo $v['id']; ?>)" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a>
							<?php } ?>
						</td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
			<?php echo $this->data[1]; ?>
</div>
<?php include dirname(__FILE__).'/../common/_footer.php'; ?>

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="<?php echo APP_CONFIG['__manage__']; ?>lib/My97DatePicker/4.8/WdatePicker.js"></script> 
<script type="text/javascript" src="<?php echo APP_CONFIG['__manage__']; ?>lib/datatables/1.10.0/jquery.dataTables.min.js"></script> 
<script type="text/javascript" src="<?php echo APP_CONFIG['__manage__']; ?>lib/laypage/1.2/laypage.js"></script>
<script type="text/javascript">
/*
	参数解释：
	title	标题
	url		请求的url
	id		需要操作的数据id
	w		弹出层宽度（缺省调默认值）
	h		弹出层高度（缺省调默认值）
*/
/*管理员-增加*/
function admin_add(title,url,w,h){
	layer_show(title,url,w,h);
}
/*管理员-删除*/
function admin_del(obj,id){
	layer.confirm('确认要删除吗？',function(index){
		//此处请求后台程序，下方是成功后的前台处理……
		$.post(
			"<?php echo u('admin','ajax');?>",
		{
			id:id,
			type:'admin_del',
		},
		function(result){
	        if(result===0){
	        	layer.msg('删除失败!',{icon: 5,time:1000});
	        }else{
	        	$(obj).parents("tr").remove();
				layer.msg('已删除!',{icon:1,time:1000});
	        }
	    });	
	});
}
/*自己编写管理员-批量删除*/
function data_del(){
	var arr= new Array();
	$("input[type='checkbox']:gt(0):checked").each(function(){
    	arr.push($(this).attr("value"));
 });
   if(arr.length<1){
    layer.msg('至少选择一个',{icon:5,time:1000});
   }else{
	   	layer.confirm('确认要删除吗？',function(index){
			$.post(
				"<?php echo u('admin','ajax');?>",
			{
				id:arr,
				type:'admin_all',
			},
			function(result){
				console.log(result);
		        if(result===0){
		        	layer.msg('批量删除失败!',{icon: 5,time:1000});
		        }else{
					layer.msg('批量删除成功!',{icon:1,time:1000});
					history.go(0);
		        }
		    });	
		});
   }
}
/*管理员-编辑*/
function admin_edit(title,url,id,w,h){
	layer_show(title,url,w,h);
}
/*管理员-停用*/
function admin_stop(obj,id){
	layer.confirm('确认要停用吗？',function(index){
		//此处请求后台程序，下方是成功后的前台处理……
		$.post(
			"<?php echo u('admin','ajax');?>",
		{
			id:id,
			type:'admin_stop',
		},
		function(result){
	        if(result===0){
	        	layer.msg('停用失败!',{icon: 5,time:1000});
	        }else{
	        	$(obj).parents("tr").find(".td-manage").prepend('<a onClick="admin_start(this,{$vo.id})" href="javascript:;" title="启用" style="text-decoration:none"><i class="Hui-iconfont">&#xe615;</i></a>');
				$(obj).parents("tr").find(".td-status").html('<span class="label label-default radius">已禁用</span>');
				$(obj).remove();
				layer.msg('已停用!',{icon: 5,time:1000});
	        }
	    });	
	});
}

/*管理员-启用*/
function admin_start(obj,id){
	layer.confirm('确认要启用吗？',function(index){
		//此处请求后台程序，下方是成功后的前台处理……
		$.post(
			"<?php echo u('admin','ajax');?>",
		{
			id:id,
			type:'admin_start',
		},
		function(result){
	        if(result===0){
	        	layer.msg('启动失败!',{icon: 5,time:1000});

	        }else{
	        	$(obj).parents("tr").find(".td-manage").prepend('<a onClick="admin_stop(this,{$vo.id})" href="javascript:;" title="停用" style="text-decoration:none"><i class="Hui-iconfont">&#xe631;</i></a>');
				$(obj).parents("tr").find(".td-status").html('<span class="label label-success radius">已启用</span>');
				$(obj).remove();
				layer.msg('已启用!', {icon: 6,time:1000});
	        }
	    });
	});
}
//输入字符更改特效
function textlength(obj,max){
	var nmb=$('#mark').val().length;
	$('.textarea-length').text(nmb);
	if(nmb>120){
		$('#mark').css("background-color","orangered");
	}else{
		$('#mark').css("background-color","white");
	}
}
</script>
</body>
</html>