<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:64:"D:\wamp\www\Demo\public/../application/test\view\test\index.html";i:1509009328;}*/ ?>
﻿<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>新界面</title>
	<script src="__PUBLIC__/js/jquery-1.8.0.js"></script>

</head>
<style type="text/css">
	*{margin: 0;padding:0;font-family: 'microsoft Yahei';font-size: 18px;}
	html,body{width: 100%;height: 100%;display: block;background-color: #fffdef;}
	header{width: 100%;height: 40%;}
	hgroup{width: 22%;height: 100%;display: inline-block;float: left;background-color: #d7edb5;border-right: 1px solid white;text-align: center;box-sizing:border-box;}
	hgroup.current{background-color: #fffdef;}
	hgroup h1{background-color: #97d334;color: #fff;padding-bottom: 1%;letter-spacing: 2px;}
	hgroup dl{width: 100%;height: 8%;float: left;display: inline-block;}
	hgroup dl dt{width: 40%;height: 100%;display: inline-block;float: left;text-align: left;padding-left: 10%;}

	nav{width: 34%;height: 100%;background-color: #fffdef;float: right;}
	nav ul{width: 100%;height: 100%;}
	nav ul li{width: 50%;height: 45%;float: left;box-sizing:border-box;list-style: none;text-align: center;}
	nav ul li:nth-child(1){border-right: 1px solid white;}
	nav ul li:nth-child(3){border-left:1px solid #dfdfdf;border-right: 1px solid #dfdfdf;}

	nav ul li.news{width: 100%;height: 12%;text-align: center;border:1px solid #dfdfdf;line-height: 200%;padding: 1% auto;color: red;}

	nav ul li p{width: 50%;height: 25%;float: left;line-height: 36px;}
	nav ul li p:nth-child(1){width: 50%;height: 100%;display: inline-block;float: left;padding-top: 5%;}
	nav ul li p:nth-child(2){padding-top: 5%;}
	nav ul li p img{width: 40%;}
	nav ul li p span{width: 100%;height: 40%;display: inline-block;font-size: 26px;line-height: 32px;}
	nav ul li h1{width: 100%;height: 50%;font-size: 46px;padding-top: 5%;}
	nav ul li pre{width: 50%;height: 40%;float: left;text-align: center;line-height: 38px;}
	
	nav ul li b{width: 100%;height: 20%;background-color: #97d334;display: inline-block;padding-bottom: 1%;}
	nav ul li b:nth-child(1){box-sizing:border-box;border-left: 1px solid white;}

	article{text-align: left;padding-left: 10%;line-height: 27px;}
	article a{padding-left: 10%;}
	article a.red{color: red;}
	article a.green{color: green;}

	section{width: 66%;height: 60%;background-color: #fffdef;float: left;}
	section article {width: 100%;height: 100%;display: inline-block;}
	section article header{background: none;}

	aside{width: 34%;height: 60%;background-color: #fffdef;float: right;}
	
	aside nav{width: 100%;height:100%;display: inline-block;}
	aside nav ul li{width: 100%;height: 10%;display: inline-block;list-style: none;}

	.lists ul h3{height:10%;line-height: 42px;}
	.title{height:10%;background-color: #97d334;color: #fff;}


	#echarts-pie,#echarts-rose{width: 100%;height: 55%;}
	#china-map{width: 98%;height: 98%;display: inline-block;float: left;}

    aside nav ul li span{width: 30%;height: auto;display: inline-block;line-height: 42px;}
    aside nav ul li span:nth-child(1){width: 30%;text-align: left;}
    aside nav ul li:nth-child(1) span:nth-child(1){text-align: center;}
    aside nav ul li span img{vertical-align: middle;}
</style>
<body>
	<header>
		  <hgroup class="current" id="header1">
			<h1>航班</h1>
			<div id="echarts-pie"></div>
			<div>
				<?php if(is_array($statis_air) || $statis_air instanceof \think\Collection): $ko = 0; $__LIST__ = $statis_air;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($ko % 2 );++$ko;?>
				<dl><dt><?php echo $vo['name']; ?></dt><dd><?php echo $vo['value']; ?></dd></dl>
				<?php endforeach; endif; else: echo "" ;endif; ?>
			</div>

		    </hgroup>
		  <hgroup>
			<h1>火车</h1>
			<div id="echarts-rose"></div>	
			<div>
			<?php if(is_array($statis_train) || $statis_train instanceof \think\Collection): $ko = 0; $__LIST__ = $statis_train;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($ko % 2 );++$ko;?>
			<dl><dt><?php echo $vo['name']; ?></dt><dd><?php echo $vo['value']; ?></dd></dl>
			<?php endforeach; endif; else: echo "" ;endif; ?>
			</div>
		  </hgroup>
		  <hgroup>
			<h1>道路</h1>
			<h2></h2> 
		    </hgroup>

		<nav>
	        <ul>
	            <li>
					<p><img src="__PUBLIC__/weather/<?php echo $weather['icon']; ?>">
						<span><?php echo $weather['tmp_min']; ?>℃</span>
					</p>
					<p><?php echo $weather['weather']; ?></p>
					<p><?php echo $weather['tmp_min']; ?>℃ ~ <?php echo $weather['tmp_max']; ?>℃</p>
					<p>PM2.5 :  <?php echo $weather['pm2_5']; ?>   <?php echo $weather['quality']; ?></p>
	            </li>
	            <li>
	            <h1 id="time"><a><?php echo $variable; ?></a><?php echo $now; ?></h1>
	            <pre><?php echo $weather['date']; ?></pre>
	            <pre><?php echo $weather['week']; ?></pre>
					</li>
				<?php if(is_array($sha) || $sha instanceof \think\Collection): $i = 0; $__LIST__ = $sha;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>	
	            <li><b><?php echo $vo['name']; ?></b>
					<article>
						<?php if($vo['increase'] > 0): ?>
						最新指数:  <a class="red"><?php echo $vo['nowpri']; ?></a><br />
						指数涨跌:  <a class="red"><?php echo $vo['increPer']; ?>%</a><br />
						涨跌幅度:  <a class="red"><?php echo $vo['increase']; ?></a><br />
						<?php else: ?>
						最新指数:  <a class="green"><?php echo $vo['nowpri']; ?></a><br />
						指数涨跌:  <a class="green"><?php echo $vo['increPer']; ?>%</a><br />
						涨跌幅度:  <a class="green"><?php echo $vo['increase']; ?></a><br />
						<?php endif; ?>
						总成交量:  <a class="red"><?php echo $vo['dealNum']; ?></a>
					</article>
	            </li>
	            <?php endforeach; endif; else: echo "" ;endif; ?>
	            <li class="news">新闻资讯</li> 
	        </ul>
    	</nav>

	</header>

   <section>
   	<div id="china-map" ></div>
<!--     	<article>
	<header></header>
	<p>MAP</p>
	<footer></footer>
		</article> -->
   </section>

<aside>
	<nav class="lists">
	    <ul>
	        <h3>机场离港航班</h3>
	        <li class="title"><span>班次</span> <span>地点</span> <span>状态</span></li>
	        <?php if(is_array($air_info) || $air_info instanceof \think\Collection): $i = 0; $__LIST__ = $air_info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
	        	 <li><span><i><img src="__PUBLIC__<?php echo $vo['ICON']; ?>" height="30px" />&nbsp;</i>
                <?php echo $vo['FLIGHT_NO']; ?></span> <span><?php echo $vo['CITY']; ?></span> <span><?php echo $vo['REMARK_XML']; ?></span></li>
	        <?php endforeach; endif; else: echo "" ;endif; ?>

	        </ul>
    	</nav>
</aside>
<footer></footer>

<script src="__PUBLIC__/test/js/echarts/echarts.js"></script>
<script src="__PUBLIC__/test/js/echarts/china.json"></script>
<script src="__PUBLIC__/test/js/echarts/Statistics-pie.js"></script>
<script type="text/javascript">
	/* 参数初始化 */
	var statis_airjson= {},statis_trainjson={},air_from = [],air_to = [],city={};
    //统计数据
	statis_airjson = <?php echo $statis_airjson; ?>;
	statis_trainjson= <?php echo $statis_trainjson; ?>;

    //态势数据
    city = <?php echo $topcity; ?>; 

    var myChart1 = echarts.init(document.getElementById('echarts-pie'));
    myChart1.setOption(getEcharts_pie(statis_airjson));

    var myChart2 = echarts.init(document.getElementById('echarts-rose'));
    myChart2.setOption(getEcharts_rose(statis_trainjson));
</script>


<script src="__PUBLIC__/test/js/echarts-2.2.7/echarts.js"></script>
<script src="__PUBLIC__/test/js/map.js"></script>
<script type="text/javascript">
    geoCoord();//加载中国地图
    china_map(city);
</script>

<!--循环加载-->
<script type="text/javascript" src="__PUBLIC__/test/js/time.js"></script>
<script type="text/javascript" src="__PUBLIC__/test/js/public.js"></script>
<script type="text/javascript" src="__PUBLIC__/test/js/ajax.js"></script>
<script type="text/javascript" src="__PUBLIC__/test/js/index.js"></script>
<script type="text/javascript">
	//数据更新--航班统计
	 moredata.statis_air();
	 //数据更新--高铁统计
	 moredata.statis_train();
	 //数据更新--航班与地图
	 moredata.airmaplists();
	 //数据更新--高铁与地图
	 moredata.trainmaplists();

	nowtime();//客户端自动校时

	//每10秒更新一次缓存数据
	var page = 1;
	var refreshpage = setInterval(judge.refresh,10000);
	var refreshdata = setInterval(function(){
		 //数据更新--航班统计
		 moredata.statis_air();
		 //数据更新--高铁统计
		 moredata.statis_train();
		 //数据更新--航班与地图
		 moredata.airmaplists();
		 //数据更新--高铁与地图
		 moredata.trainmaplists();
	},30000);


</script>
</body>
</html>