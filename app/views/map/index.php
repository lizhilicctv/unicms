<?php use UNI\tools\Db;

?>
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="keywords" content="百度地图,百度地图API，百度地图自定义工具，百度地图所见即所得工具">
<meta name="description" content="百度地图API自定义地图，帮助用户在可视化操作下生成百度地图">
<title>百度地图API自定义地图</title>
<!--引用百度地图API-->
<style type="text/css">
    html,body{margin:0;padding:0;}
    .iw_poi_title {color:#CC5522;font-size:14px;font-weight:bold;overflow:hidden;padding-right:13px;white-space:nowrap}
    .iw_poi_content {font:12px 'Microsoft Yahei',sans-serif;overflow:visible;padding-top:4px;white-space:-moz-pre-wrap;word-wrap:break-word}
</style>
<script type="text/javascript" defer="" async="" src="https://track.uc.cn/uaest.js"></script><script type="text/javascript" src="http://api.map.baidu.com/api?key=&amp;v=1.1&amp;services=true"></script><style type="text/css">
:root .footer > #box[style="width:100%;height:100%;position:fixed;top:0"]
{ display: none !important; }</style><script type="text/javascript" src="http://api.map.baidu.com/getscript?v=1.1&amp;ak=&amp;services=true&amp;t=20130716024058"></script><link rel="stylesheet" type="text/css" href="http://api.map.baidu.com/res/11/bmap.css">
<style>@font-face{font-family:uc-nexus-iconfont;src:url(chrome-extension://pogijhnlcfmcppgimcaccdkmbedjkmhi/res/font_9qmmi8b8jsxxbt9.woff) format('woff'),url(chrome-extension://pogijhnlcfmcppgimcaccdkmbedjkmhi/res/font_9qmmi8b8jsxxbt9.ttf) format('truetype')}</style></head>

<body>
  <!--百度地图容器-->
  <div style="width: 100%; height: 651px; overflow: hidden; position: relative; z-index: 0; background-image: url(&quot;http://api.map.baidu.com/images/bg.png&quot;); color: rgb(0, 0, 0); text-align: left;" id="dituContent"><div id="platform" style="overflow: visible; position: absolute; z-index: 0; left: 0px; top: 0px; cursor: url(&quot;http://api.map.baidu.com/images/openhand.cur&quot;) 8 8, default;"><div id="mask" class=" BMap_mask" style="position: absolute; left: 0px; top: 0px; z-index: 9; overflow: hidden; user-select: none; width: 1466px; height: 651px;"></div><div style="position: absolute; height: 0px; width: 0px; left: 0px; top: 0px; z-index: 200;"><div style="position: absolute; height: 0px; width: 0px; left: 0px; top: 0px; z-index: 800;"><div class="pop" style="position: absolute; cursor: default; left: 683px; top: 269px;"><div style="overflow: hidden; z-index: 1; position: absolute; left: 0px; top: 0px; width: 25px; height: 25px;"><img style="border:none;margin:0px;padding:0px;position:absolute;left:0px;top:0px;width:690px;height:786px;" src="http://api.map.baidu.com/images/iw3.png"></div><div class="top" style="overflow: hidden; z-index: 1; position: absolute; left: 25px; top: 0px; width: 327px; height: 25px;"><img src="http://api.map.baidu.com/images/iw3.png" style="position:absolute; left: -65px; top: -60px;"></div><div style="overflow: hidden; z-index: 1; position: absolute; left: 352px; top: 0px; width: 25px; height: 25px;"><img style="border:none;margin:0px;padding:0px;position:absolute;left:-665px;top:0px;width:690px;height:786px;" src="http://api.map.baidu.com/images/iw3.png"></div><div class="center" style="overflow: hidden; z-index: 1; position: absolute; left: 0px; top: 25px; width: 375px; height: 47px;"><img src="http://api.map.baidu.com/images/iw3.png" style="position:absolute;left:-65px;top:-60px;"></div><div style="overflow: hidden; z-index: 1; position: absolute; left: 0px; top: 72px; width: 25px; height: 25px;"><img style="border:none;margin:0px;padding:0px;position:absolute;left:0px;top:-665px;width:690px;height:786px;" src="http://api.map.baidu.com/images/iw3.png"></div><div class="bottom" style="overflow: hidden; z-index: 1; position: absolute; left: 25px; top: 72px; width: 327px; height: 24px;"><img src="http://api.map.baidu.com/images/iw3.png" style="position:absolute;left:-65px;top:-146px;"></div><div style="overflow: hidden; z-index: 1; position: absolute; left: 352px; top: 72px; width: 25px; height: 25px;"><img style="border:none;margin:0px;padding:0px;position:absolute;left:-665px;top:-665px;width:690px;height:786px;" src="http://api.map.baidu.com/images/iw3.png"></div><div style="overflow: hidden; z-index: 1; position: absolute; left: 172px; top: 72px; width: 34px; height: 50px;"><img style="border:none;margin:0px;padding:0px;position:absolute;left:-186px;top:-691px;width:690px;height:786px;" src="http://api.map.baidu.com/images/iw3.png"></div><div style="width: 345px; height: 65px; position: absolute; left: 16px; top: 16px; z-index: 10; overflow: hidden;"><div class="BMap_bubble_title" style="display: none; overflow: hidden; height: auto; line-height: 24px; white-space: nowrap; width: auto;"></div><div class="BMap_bubble_content" style="width: auto; height: auto;"><b class="iw_poi_title" title="上海XX信息科技有限公司">上海XX信息科技有限公司</b><div class="iw_poi_content">地址：中国上海环球金融国际中心99F<br>电话：400-888-8888<br>网址：www.jsdaima.com</div></div><div class="BMap_bubble_max_content" style="display:none;position:relative"></div></div><img style="position: absolute; top: 12px; width: 12px; height: 12px; cursor: pointer; z-index: 10000; left: 352px;" src="http://api.map.baidu.com/images/iw_close.gif"><img style="position: absolute; top: 12px; width: 12px; height: 12px; cursor: pointer; z-index: 10000; display: none; left: 332px;" src="http://api.map.baidu.com/images/iw_plus.gif"></div></div><div style="position: absolute; height: 0px; width: 0px; left: 0px; top: 0px; z-index: 700;"><span class="BMap_Marker BMap_noprint" unselectable="on" "="" style="position: absolute; padding: 0px; margin: 0px; border: 0px; cursor: pointer; background: url(&quot;http://api.map.baidu.com/images/blank.gif&quot;); width: 21px; height: 21px; left: 845px; top: 389px; z-index: -6262220;" title=""></span></div><div style="position: absolute; height: 0px; width: 0px; left: 0px; top: 0px; z-index: 600;"><div class="shadow" style="position: absolute; left: 661px; top: 318px;" type="infowindow_shadow"><div style="overflow: hidden; z-index: 1; position: absolute; left: 41px; top: 0px; width: 70px; height: 30px;"><img onmousedown="return false" style="left: -323px; top: 0px;" src="http://api.map.baidu.com/images/iws3.png"></div><div style="overflow: hidden; z-index: 1; position: absolute; left: 111px; top: 0px; width: 289px; height: 30px;"><img onmousedown="return false" style="left: -393px; top: 0px;" src="http://api.map.baidu.com/images/iws3.png"></div><div style="overflow: hidden; z-index: 1; position: absolute; left: 400px; top: 0px; width: 70px; height: 30px;"><img onmousedown="return false" style="left: -1033px; top: 0px;" src="http://api.map.baidu.com/images/iws3.png"></div><div style="overflow: hidden; z-index: 1; position: absolute; left: 29px; top: 30px; width: 82px; height: 12px;"><img onmousedown="return false" style="top: -30px; left: -311px;" src="http://api.map.baidu.com/images/iws3.png"></div><div style="overflow: hidden; z-index: 1; position: absolute; left: 111px; top: 30px; width: 306px; height: 12px;"><img onmousedown="return false" style="left: -360px; top: -30px;" src="http://api.map.baidu.com/images/iws3.png"></div><div style="overflow: hidden; z-index: 1; position: absolute; left: 417px; top: 30px; width: 82px; height: 12px;"><img onmousedown="return false" style="top: -30px; left: -1051px;" src="http://api.map.baidu.com/images/iws3.png"></div><div style="overflow: hidden; z-index: 1; position: absolute; left: 0px; top: 42px; width: 50px; height: 60px;"><img onmousedown="return false" style="left: -14px; top: -310px;" src="http://api.map.baidu.com/images/iws3.png"></div><div style="overflow: hidden; z-index: 1; position: absolute; left: 50px; top: 42px; width: 74px; height: 60px;"><img onmousedown="return false" style="left: -255px; top: -310px;" src="http://api.map.baidu.com/images/iws3.png"></div><div style="overflow: hidden; z-index: 1; position: absolute; left: 124px; top: 42px; width: 140px; height: 60px;"><img onmousedown="return false" style="left: -440px; top: -310px;" src="http://api.map.baidu.com/images/iws3.png"></div><div style="overflow: hidden; z-index: 1; position: absolute; left: 264px; top: 42px; width: 124px; height: 60px;"><img onmousedown="return false" style="left: -255px; top: -310px;" src="http://api.map.baidu.com/images/iws3.png"></div><div style="overflow: hidden; z-index: 1; position: absolute; left: 388px; top: 42px; width: 70px; height: 60px;"><img onmousedown="return false" style="left: -754px; top: -310px;" src="http://api.map.baidu.com/images/iws3.png"></div></div></div><div style="position: absolute; height: 0px; width: 0px; left: 0px; top: 0px; z-index: 500;"></div><div style="position: absolute; height: 0px; width: 0px; left: 0px; top: 0px; z-index: 400;"><span class="BMap_Marker" unselectable="on" style="position: absolute; padding: 0px; margin: 0px; border: 0px; width: 0px; height: 0px; left: 851px; top: 410px; z-index: -6262220;"><div style="position: absolute; margin: 0px; padding: 0px; width: 21px; height: 21px; left: -6px; top: -21px; overflow: hidden;"><img src="http://api.map.baidu.com/lbsapi/creatmap/images/us_mk_icon.png" style="border:none;left:0px; top:0px; position:absolute;"></div><label class=" BMapLabel" unselectable="on" style="position: absolute; display: none; cursor: pointer; background-color: rgb(255, 255, 255); border: 1px solid rgb(128, 128, 128); padding: 1px; white-space: nowrap; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: arial, simsun; z-index: 80; color: rgb(51, 51, 51); user-select: none; left: 9px; top: -20px;">上海XX信息科技有限公司</label></span></div><div style="position: absolute; height: 0px; width: 0px; left: 0px; top: 0px; z-index: 200;"></div></div><div style="position: absolute; z-index: -1; left: 733px; top: 326px;"><img src="http://online0.map.bdimg.com/tile/?qt=tile&amp;x=52814&amp;y=14261&amp;z=18&amp;styles=pl&amp;udt=20140928" style="position: absolute; border: none; width: 256px; height: 256px; left: -73px; top: -180px;"><img src="http://online0.map.bdimg.com/tile/?qt=tile&amp;x=52813&amp;y=14262&amp;z=18&amp;styles=pl&amp;udt=20140928" style="position: absolute; border: none; width: 256px; height: 256px; left: -329px; top: -436px;"><img src="http://online0.map.bdimg.com/tile/?qt=tile&amp;x=52815&amp;y=14260&amp;z=18&amp;styles=pl&amp;udt=20140928" style="position: absolute; border: none; width: 256px; height: 256px; left: 183px; top: 76px;"><img src="http://online4.map.bdimg.com/tile/?qt=tile&amp;x=52812&amp;y=14262&amp;z=18&amp;styles=pl&amp;udt=20140928" style="position: absolute; border: none; width: 256px; height: 256px; left: -585px; top: -436px;"><img src="http://online4.map.bdimg.com/tile/?qt=tile&amp;x=52813&amp;y=14261&amp;z=18&amp;styles=pl&amp;udt=20140928" style="position: absolute; border: none; width: 256px; height: 256px; left: -329px; top: -180px;"><img src="http://online4.map.bdimg.com/tile/?qt=tile&amp;x=52814&amp;y=14260&amp;z=18&amp;styles=pl&amp;udt=20140928" style="position: absolute; border: none; width: 256px; height: 256px; left: -73px; top: 76px;"><img src="http://online1.map.bdimg.com/tile/?qt=tile&amp;x=52814&amp;y=14262&amp;z=18&amp;styles=pl&amp;udt=20140928" style="position: absolute; border: none; width: 256px; height: 256px; left: -73px; top: -436px;"><img src="http://online1.map.bdimg.com/tile/?qt=tile&amp;x=52815&amp;y=14261&amp;z=18&amp;styles=pl&amp;udt=20140928" style="position: absolute; border: none; width: 256px; height: 256px; left: 183px; top: -180px;"><img src="http://online1.map.bdimg.com/tile/?qt=tile&amp;x=52816&amp;y=14260&amp;z=18&amp;styles=pl&amp;udt=20140928" style="position: absolute; border: none; width: 256px; height: 256px; left: 439px; top: 76px;"><img src="http://online2.map.bdimg.com/tile/?qt=tile&amp;x=52817&amp;y=14260&amp;z=18&amp;styles=pl&amp;udt=20140928" style="position: absolute; border: none; width: 256px; height: 256px; left: 695px; top: 76px;"><img src="http://online3.map.bdimg.com/tile/?qt=tile&amp;x=52812&amp;y=14261&amp;z=18&amp;styles=pl&amp;udt=20140928" style="position: absolute; border: none; width: 256px; height: 256px; left: -585px; top: -180px;"><img src="http://online2.map.bdimg.com/tile/?qt=tile&amp;x=52815&amp;y=14262&amp;z=18&amp;styles=pl&amp;udt=20140928" style="position: absolute; border: none; width: 256px; height: 256px; left: 183px; top: -436px;"><img src="http://online3.map.bdimg.com/tile/?qt=tile&amp;x=52813&amp;y=14260&amp;z=18&amp;styles=pl&amp;udt=20140928" style="position: absolute; border: none; width: 256px; height: 256px; left: -329px; top: 76px;"><img src="http://online2.map.bdimg.com/tile/?qt=tile&amp;x=52816&amp;y=14261&amp;z=18&amp;styles=pl&amp;udt=20140928" style="position: absolute; border: none; width: 256px; height: 256px; left: 439px; top: -180px;"><img src="http://online3.map.bdimg.com/tile/?qt=tile&amp;x=52811&amp;y=14262&amp;z=18&amp;styles=pl&amp;udt=20140928" style="position: absolute; border: none; width: 256px; height: 256px; left: -841px; top: -436px;"><img src="http://online3.map.bdimg.com/tile/?qt=tile&amp;x=52817&amp;y=14261&amp;z=18&amp;styles=pl&amp;udt=20140928" style="position: absolute; border: none; width: 256px; height: 256px; left: 695px; top: -180px;"><img src="http://online3.map.bdimg.com/tile/?qt=tile&amp;x=52816&amp;y=14262&amp;z=18&amp;styles=pl&amp;udt=20140928" style="position: absolute; border: none; width: 256px; height: 256px; left: 439px; top: -436px;"><img src="http://online2.map.bdimg.com/tile/?qt=tile&amp;x=52812&amp;y=14260&amp;z=18&amp;styles=pl&amp;udt=20140928" style="position: absolute; border: none; width: 256px; height: 256px; left: -585px; top: 76px;"><img src="http://online2.map.bdimg.com/tile/?qt=tile&amp;x=52811&amp;y=14261&amp;z=18&amp;styles=pl&amp;udt=20140928" style="position: absolute; border: none; width: 256px; height: 256px; left: -841px; top: -180px;"><img src="http://online1.map.bdimg.com/tile/?qt=tile&amp;x=52811&amp;y=14260&amp;z=18&amp;styles=pl&amp;udt=20140928" style="position: absolute; border: none; width: 256px; height: 256px; left: -841px; top: 76px;"><img src="http://online4.map.bdimg.com/tile/?qt=tile&amp;x=52817&amp;y=14262&amp;z=18&amp;styles=pl&amp;udt=20140928" style="position: absolute; border: none; width: 256px; height: 256px; left: 695px; top: -436px;"></div></div><div id="zoomer" style="position:absolute;z-index:0;top:0px;left:0px;overflow:hidden;visibility:hidden;cursor:url(http://api.map.baidu.com/images/openhand.cur) 8 8,default"><div class="BMap_zoomer" style="top:0;left:0;"></div><div class="BMap_zoomer" style="top:0;right:0;"></div><div class="BMap_zoomer" style="bottom:0;left:0;"></div><div class="BMap_zoomer" style="bottom:0;right:0;"></div></div><div class=" anchorBL" style="height: 32px; position: absolute; z-index: 10; bottom: 0px; right: auto; top: auto; left: 1px;"><a title="到百度地图首页" target="_blank" href="http://map.baidu.com/?sr=1" style="outline: none;"><img style="border:none;width:77px;height:32px" src="http://api.map.baidu.com/images/copyright_logo.png"></a></div><div unselectable="on" class=" BMap_cpyCtrl anchorBL" style="cursor: default; white-space: nowrap; bottom: 2px; right: auto; top: auto; left: 81px; position: absolute; z-index: 10;"><span style="-webkit-text-size-adjust:none;color:#000;background:none;line-height:15px;font:11px arial,simsun" _cid="1">© 2015 Baidu</span></div><div unselectable="on" class=" BMap_stdMpCtrl BMap_stdMpType0 BMap_noprint anchorTL" style="width: 52px; height: 226px; bottom: auto; right: auto; top: 10px; left: 10px; position: absolute; z-index: 1100;"><div class="BMap_stdMpPan"><div class="BMap_button BMap_panN" title="向上平移"></div><div class="BMap_button BMap_panW" title="向左平移"></div><div class="BMap_button BMap_panE" title="向右平移"></div><div class="BMap_button BMap_panS" title="向下平移"></div><div class="BMap_stdMpPanBg BMap_smcbg"></div></div><div class="BMap_stdMpZoom" style="height: 167px; width: 52px;"><div style="height: 167px; width: 37px;"><div class="BMap_button BMap_stdMpZoomIn" title="放大一级"><div class="BMap_smcbg"></div></div><div class="BMap_button BMap_stdMpZoomOut" title="缩小一级"><div class="BMap_smcbg"></div></div></div><div class="BMap_stdMpSlider" style="height: 133px;"><div class="BMap_stdMpSliderBgTop" style="height: 124px;"><div class="BMap_smcbg"></div></div><div class="BMap_stdMpSliderBgBot" style="top: 124px;"><div class="BMap_smcbg"></div></div><div class="BMap_stdMpSliderMask" title="放置到此级别"></div><div class="BMap_stdMpSliderBar" title="拖动缩放" style="cursor: url(&quot;http://api.map.baidu.com/images/openhand.cur&quot;) 8 8, default; top: 1px;"><div class="BMap_smcbg"></div></div></div><div class="BMap_zlHolder"><div class="BMap_zlSt"><div class="BMap_smcbg"></div></div><div class="BMap_zlCity"><div class="BMap_smcbg"></div></div><div class="BMap_zlProv"><div class="BMap_smcbg"></div></div><div class="BMap_zlCountry"><div class="BMap_smcbg"></div></div></div></div></div><div unselectable="on" class=" BMap_omCtrl BMap_noprint anchorBR quad4" style="width: 150px; height: 150px; bottom: 0px; right: 0px; top: auto; left: auto; position: absolute; z-index: 10;"><div class="BMap_omOutFrame" style="width: 149px; height: 149px;"><div class="BMap_omInnFrame" style="bottom: auto; right: auto; top: 8px; left: 8px; width: 139px; height: 139px;"><div class="BMap_omMapContainer" style="overflow: hidden; background-image: url(&quot;http://api.map.baidu.com/images/bg.png&quot;); color: rgb(0, 0, 0); text-align: left;"><div id="platform" style="overflow: visible; position: absolute; z-index: 0; left: 1px; top: 0px; cursor: url(&quot;http://api.map.baidu.com/images/openhand.cur&quot;) 8 8, default;"><div id="mask" class=" BMap_mask" style="position: absolute; left: -1px; top: 0px; z-index: 9; overflow: hidden; user-select: none; width: 139px; height: 139px;"></div><div style="position: absolute; height: 0px; width: 0px; left: 0px; top: 0px; z-index: 200;"><div style="position: absolute; height: 0px; width: 0px; left: 0px; top: 0px; z-index: 800;"></div><div style="position: absolute; height: 0px; width: 0px; left: 0px; top: 0px; z-index: 700;"><div class="BMap_Division" style="position: absolute; width: 92px; display: block; overflow: hidden; border-width: 1px; border-style: solid; border-color: rgb(173, 207, 244) rgb(39, 75, 139) rgb(39, 75, 139) rgb(132, 176, 223); border-image: initial; opacity: 1; z-index: 60; user-select: none; left: 22px; top: 48px; height: 41px;"><div class="BMap_omViewInnFrame" style="width: 90px; height: 39px;"><div class="BMap_omViewMask"></div></div></div></div><div style="position: absolute; height: 0px; width: 0px; left: 0px; top: 0px; z-index: 600;"></div><div style="position: absolute; height: 0px; width: 0px; left: 0px; top: 0px; z-index: 500;"></div><div style="position: absolute; height: 0px; width: 0px; left: 0px; top: 0px; z-index: 400;"></div><div style="position: absolute; height: 0px; width: 0px; left: 0px; top: 0px; z-index: 200;"></div></div><div style="position: absolute; z-index: -1; left: 69px; top: 69px;"><img src="http://online1.map.bdimg.com/tile/?qt=tile&amp;x=3300&amp;y=891&amp;z=14&amp;styles=pl&amp;udt=20140928" style="position: absolute; border: none; width: 256px; height: 256px; left: -229px; top: -171px;"><img src="http://online2.map.bdimg.com/tile/?qt=tile&amp;x=3301&amp;y=891&amp;z=14&amp;styles=pl&amp;udt=20140928" style="position: absolute; border: none; width: 256px; height: 256px; left: 27px; top: -171px;"></div></div></div><div class="BMap_omViewMv" style="cursor: url(&quot;http://api.map.baidu.com/images/openhand.cur&quot;) 8 8, default; width: 92px; height: 41px; left: 23px; top: 48px;"><div class="BMap_omViewInnFrame" style="width: 90px; height: 39px;"><div></div></div></div></div></div><div class="BMap_omBtn" style="bottom: 0px; right: 0px; top: auto; left: auto;"></div></div><div unselectable="on" class=" BMap_scaleCtrl BMap_noprint anchorBL" style="bottom: 18px; right: auto; top: auto; left: 81px; width: 62px; position: absolute; z-index: 10;"><div class="BMap_scaleTxt" unselectable="on">50&nbsp;米</div><div class="BMap_scaleBar BMap_scaleHBar"><img style="border:none" src="http://api.map.baidu.com/images/mapctrls11.png"></div><div class="BMap_scaleBar BMap_scaleLBar"><img style="border:none" src="http://api.map.baidu.com/images/mapctrls11.png"></div><div class="BMap_scaleBar BMap_scaleRBar"><img style="border:none" src="http://api.map.baidu.com/images/mapctrls11.png"></div></div></div>

<script type="text/javascript">
    //创建和初始化地图函数：
    function initMap(){
        createMap();//创建地图
        setMapEvent();//设置地图事件
        addMapControl();//向地图添加控件
        addMarker();//向地图中添加marker
    }
    
    //创建地图函数：
    function createMap(){
        var map = new BMap.Map("dituContent");//在百度地图容器中创建一个地图
        var point = new BMap.Point(114.496286, 38.006214);//定义一个中心点坐标
        map.centerAndZoom(point,18);//设定地图的中心点和坐标并将地图显示在地图容器中
        window.map = map;//将map变量存储在全局
    }
    
    //地图事件设置函数：
    function setMapEvent(){
        map.enableDragging();//启用地图拖拽事件，默认启用(可不写)
        map.disableScrollWheelZoom();//禁用地图滚轮放大缩小，默认禁用(可不写)
        map.enableDoubleClickZoom();//启用鼠标双击放大，默认启用(可不写)
        map.enableKeyboard();//启用键盘上下左右键移动地图
    }
    
    //地图控件添加函数：
    function addMapControl(){
        //向地图中添加缩放控件
	var ctrl_nav = new BMap.NavigationControl({anchor:BMAP_ANCHOR_TOP_LEFT,type:BMAP_NAVIGATION_CONTROL_LARGE});
	map.addControl(ctrl_nav);
        //向地图中添加缩略图控件
	var ctrl_ove = new BMap.OverviewMapControl({anchor:BMAP_ANCHOR_BOTTOM_RIGHT,isOpen:1});
	map.addControl(ctrl_ove);
        //向地图中添加比例尺控件
	var ctrl_sca = new BMap.ScaleControl({anchor:BMAP_ANCHOR_BOTTOM_LEFT});
	map.addControl(ctrl_sca);
    }
    
    //标注点数组
    var markerArr = [{title:"李志立",content:"地址：河北石家庄<br/>电话：18633456271",point:"114.496286|38.006214",isOpen:1,icon:{w:21,h:21,l:0,t:0,x:6,lb:5}}
		 ];
    //创建marker
    function addMarker(){
        for(var i=0;i<markerArr.length;i++){
            var json = markerArr[i];
            var p0 = json.point.split("|")[0];
            var p1 = json.point.split("|")[1];
            var point = new BMap.Point(p0,p1);
			var iconImg = createIcon(json.icon);
            var marker = new BMap.Marker(point,{icon:iconImg});
			var iw = createInfoWindow(i);
			var label = new BMap.Label(json.title,{"offset":new BMap.Size(json.icon.lb-json.icon.x+10,-20)});
			marker.setLabel(label);
            map.addOverlay(marker);
            label.setStyle({
                        borderColor:"#808080",
                        color:"#333",
                        cursor:"pointer"
            });
			
			(function(){
				var index = i;
				var _iw = createInfoWindow(i);
				var _marker = marker;
				_marker.addEventListener("click",function(){
				    this.openInfoWindow(_iw);
			    });
			    _iw.addEventListener("open",function(){
				    _marker.getLabel().hide();
			    })
			    _iw.addEventListener("close",function(){
				    _marker.getLabel().show();
			    })
				label.addEventListener("click",function(){
				    _marker.openInfoWindow(_iw);
			    })
				if(!!json.isOpen){
					label.hide();
					_marker.openInfoWindow(_iw);
				}
			})()
        }
    }
    //创建InfoWindow
    function createInfoWindow(i){
        var json = markerArr[i];
        var iw = new BMap.InfoWindow("<b class='iw_poi_title' title='" + json.title + "'>" + json.title + "</b><div class='iw_poi_content'>"+json.content+"</div>");
        return iw;
    }
     //创建一个Icon
    function createIcon(json){
        var icon = new BMap.Icon("http://api.map.baidu.com/lbsapi/creatmap/images/us_mk_icon.png", new BMap.Size(json.w,json.h),{imageOffset: new BMap.Size(-json.l,-json.t),infoWindowOffset:new BMap.Size(json.lb+5,1),offset:new BMap.Size(json.x,json.h)})
        return icon;
    }

    
    initMap();//创建和初始化地图
</script>
<div id="cli_dialog_div"></div></body></html>
