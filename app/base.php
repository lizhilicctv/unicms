<?php
use UNI\tools\Db;
$_system=Db::name('system')->getall('enname,value');
foreach( $_system as $k => $v){
	$system[$v['enname']]=$v["value"];
}
if($system['value']!='开启'){
	die('网站已经关闭');
}
setSession('system',$system);
//公共的头
$_cate =Db::name('cate')->getall('id,fid,catename,en_name');
foreach($_cate as $k=>$v){
	if($v['fid']==0){
		$cate[]=$v;
	}else{
		foreach($cate as $k1=>$v1){
			if($v['fid']==$v1['id']){
				$cate[$k1]['son'][]=$v;
			}
		}
	}
}
$this->cate=$cate; //分配到首页
