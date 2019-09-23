<?php if(!defined('UNI_V')){exit;}?>
<?php include dirname(__FILE__).'/../common/_meta.php'; ?>

<title>添加管理员 - 管理员管理</title>
<meta name="keywords" content="uniphp">
<meta name="description" content="uniphp,轻量级php框架.">
</head>
<body>
<article class="cl pd-20">
	<form action="" method="post" class="form form-horizontal" id="form-admin-add">
		<input type="hidden" name="id" value="<?php echo $this->data['id']; ?>" />
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>管理员：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="<?php echo $this->data['username']; ?>" placeholder="" id="username" name="username">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3">留空不修改密码：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" autocomplete="off" value="" placeholder="密码" id="password" name="password">
			</div>
		</div>
		<!--本来有性别手机和邮箱，都删了-->
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3">角色：</label>
			<div class="formControls col-xs-8 col-sm-9"> <span class="select-box" style="width:150px;">
				<select class="select" name="role" size="1" <?php if($this->data['id']==1){ echo 'disabled';} ?>>
					<?php foreach($this->res as $k=>$v) { ?>
					<option value="<?php echo $v['id']; ?>" <?php if($this->data['role']==$v['id']){ echo 'selected';} ?> ><?php echo $v['title'] ?></option>
					<?php } ?>
				</select>
				</span> </div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3">备注：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<textarea name="mark" cols="" rows="" id="mark" class="textarea" <?php if($this->data['id']==1){ echo 'disabled';} ?>  placeholder="说点什么...120个字符以内" dragonfly="true" onKeyUp="textlength()"><?php echo $this->data['mark']; ?></textarea>
				<p class="textarea-numberbar"><em class="textarea-length">0</em>/120</p>
			</div>
		</div>
		<div class="row cl">
			<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
				<input id="tijiao" class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
			</div>
		</div>
	</form>
</article>

<!--_footer 作为公共模版分离出去-->
<?php include dirname(__FILE__).'/../common/_footer.php'; ?>
<!--/_footer /作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="<?php echo APP_CONFIG['__manage__']; ?>lib/jquery.validation/1.14.0/jquery.validate.js"></script> 
<script type="text/javascript" src="<?php echo APP_CONFIG['__manage__']; ?>lib/jquery.validation/1.14.0/validate-methods.js"></script> 
<script type="text/javascript" src="<?php echo APP_CONFIG['__manage__']; ?>lib/jquery.validation/1.14.0/messages_zh.js"></script> 
<script type="text/javascript">
$(function(){
	$('.skin-minimal input').iCheck({
		checkboxClass: 'icheckbox-blue',
		radioClass: 'iradio-blue',
		increaseArea: '20%'
	});
	$("#form-admin-add").validate({
		rules:{
			username:{
				required:true,
				minlength:4,
				maxlength:16,
			},
		
			adminRole:{
				required:true,
			},
		}
	});
	
});

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
<!--/请在上方写此页面业务相关的脚本-->
</body>
</html>