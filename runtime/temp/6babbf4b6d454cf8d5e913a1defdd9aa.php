<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:64:"G:\wamp64\www\ib5/application/index\view\datepoint\position.html";i:1504502951;s:59:"G:\wamp64\www\ib5/application/index\view\Public\header.html";i:1501215050;s:59:"G:\wamp64\www\ib5/application/index\view\Public\footer.html";i:1501215044;}*/ ?>
<!DOCTYPE html>
<html lang="en">

	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">

		<title>无线定位管理系统</title>
		<link href="__PUBLIC__/css/dpl.css" rel="stylesheet">
		<link href="__PUBLIC__/css/bui.css" rel="stylesheet">
		<!-- Bootstrap Core CSS -->
		<link href="__PUBLIC__/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

		<!-- MetisMenu CSS -->
		<!-- <link href="__PUBLIC__/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet"> -->

		<!-- Timeline CSS -->
		<link href="__PUBLIC__/dist/css/timeline.css" rel="stylesheet">

		<!-- Custom CSS -->
		<link href="__PUBLIC__/dist/css/sb-admin-2.css" rel="stylesheet">

		<!-- Morris Charts CSS -->
		<link href="__PUBLIC__/bower_components/morrisjs/morris.css" rel="stylesheet">

		<!-- Custom Fonts -->
		<link href="__PUBLIC__/bower_components/fontawesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		<link href="__PUBLIC__/css/tp_pages.css" rel="stylesheet">

	</head>

	<body>

		<div id="wrapper">

			<!-- Navigation -->
			<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0;height:50px;">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
					<a class="navbar-brand" href="javascript:void(0)"> 无线定位管理系统</a>
				</div>
				<!-- /.navbar-header -->

				<ul class="nav navbar-top-links navbar-right" style="height:50px;">
					<!-- /.dropdown -->
					<li class="dropdown" style="float:left;">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#" style="padding-top: 0px; padding-bottom: 0px;">
							<i class="fa fa-user fa-fw" style="border-top-width: 7px; padding-top: 0px; margin-top: 16px;"></i>
							<i class="fa fa-caret-down"></i>
						</a>
						<ul class="dropdown-menu dropdown-user">
							<li>
								<a href="#"><i class="fa fa-user fa-fw"></i>
									<?php echo session( 'admin'); ?>
								</a>
							</li>

							<li class="divider"></li>
							<li>
								<a href="<?php echo Url('index/Login/loginOut'); ?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
							</li>
						</ul>
						<!-- /.dropdown-user -->
					</li>
					<!-- /.dropdown -->
				</ul>
				<!-- /.navbar-top-links -->

				<div class="navbar-default sidebar" role="navigation">
					<div class="sidebar-nav navbar-collapse">
						<ul class="nav" id="side-menu">

							<li>
								<a href="<?php echo Url('Index/index/index'); ?>"><i class="fa fa-dashboard fa-fw"></i>　系统状态</a>
							</li>

							<li>
								<a href="#"><i class="fa fa-building"></i>　广场基础信息<span class="fa arrow"></span></a>
								<ul class="nav nav-second-level">
									<li>
										<a href="<?php echo Url('place/square'); ?>">　广场管理</a>
									</li>
									<li>
										<a href="<?php echo Url('place/building'); ?>">　建筑管理</a>
									</li>
									<li>
										<a href="<?php echo Url('place/floor'); ?>">　楼层管理</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="#"><i class="fa fa-building"></i> &nbsp;&nbsp;系统配置项<span class="fa arrow"></span></a>
								<ul class="nav nav-second-level">
									<li>
										<a href="<?php echo Url('Sys/basic'); ?>">系统配置</a>

									</li>
								</ul>
							</li>

							<li>
								<a href="#"><i class="fa  fa-rocket"></i>　实时位置查看<span class="fa arrow"></span></a>
								<ul class="nav nav-second-level">
									<li>
										<a href="<?php echo Url('Datepoint/floor'); ?>">单用户位置</a>

									</li>
								</ul>
							</li>
							<li>
								<a href="#"><i class="fa  fa-rocket"></i>　ap位置标注<span class="fa arrow"></span></a>
								<ul class="nav nav-second-level">
									<li>
										<a href="<?php echo Url('Apposition/floor'); ?>">ap位置标注　</a>

									</li>
								</ul>

							</li>
							<li>
								<a href="#"><i class="fa  fa-rocket"></i>　路径矫正<span class="fa arrow"></span></a>
								<ul class="nav nav-second-level">
									<li>
										<a href="<?php echo Url('Updatepoint/floor'); ?>">路径矫正　</a>

									</li>
								</ul>

							</li>
							<li>
								<a href="#"><i class="fa  fa-rocket"></i>　Ibeacon管理<span class="fa arrow"></span></a>
								<ul class="nav nav-second-level">
									<li>
										<a href="<?php echo Url('Place/floor'); ?>">ibeacon设备　</a>

									</li>
								</ul>

							</li>
							<li>
								<a href="#"><i class="fa  fa-rocket"></i>　WIFI指纹采集<span class="fa arrow"></span></a>
								<ul class="nav nav-second-level">
									<li>
										<a href="<?php echo Url('Place/floor'); ?>">指纹采集　</a>

									</li>
								</ul>
							</li>

							<li>
								<a href="<?php echo Url('Account/xiugai'); ?>"><i class="fa  fa-unlock-alt"></i>　 密码修改<span class="fa arrow"></span></a>

							</li>
						</ul>
					</div>
					<!-- /.sidebar-collapse -->
				</div>
				<!-- /.navbar-static-side -->
			</nav>

	<link rel="stylesheet" href="__PUBLIC__/js/leaflet/leaflet.css" />
	<link rel="stylesheet" href="__PUBLIC__/css/leaflet.label.css" />

	<script src="__PUBLIC__/js/jquery.js" type="text/javascript" charset="utf-8"></script>
	<script type="text/javascript" src="__PUBLIC__/js/layer/layer.js"></script>
	<!--<script src="http://cdn.leafletjs.com/leaflet/v1.0.0-rc.1/leaflet.js"></script>-->
	<script src="__PUBLIC__/js/leaflet/leaflet-src.js"></script>

	<script src="__PUBLIC__/js/leaflet/src/Label.js"></script>
	<script src="__PUBLIC__/js/leaflet/src/BaseMarkerMethods.js"></script>
	<script src="__PUBLIC__/js/leaflet/src/Marker.Label.js"></script>
	<script src="__PUBLIC__/js/leaflet/src/Map.Label.js"></script>
	<style type="text/css">
		#holder {
			height: 500px;
		}
	</style>

	<div id="page-wrapper">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header" style="margin-top: 0px;"></h1>
			</div>
			<!-- /.col-lg-12 -->
		</div>
		<div class="panel-body">
			<div class="dataTable_wrapper">
				<div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
					<div class="row">

						<div class="row">
							<div class="col-lg-12">
								<div class="col-sm-6">
									<form action="__URL__/position" method="get" id="forms">
										<div class="dataTables_filter" style="float:left;">
											<label>终端mac:　<input type="search" name="mac" id="searchmac"  class="form-control input-sm" placeholder="请输入终端mac" >
                                </label>
											<input type="text" id="x" style="display: none;" />
											<input type="text" id="y" style="display: none;" />
											<input type="text" id="floor_id" name='floor_id' value="<?php echo $map['id']; ?>" style="display: none;" />
											<input type="text" id="campus_id" name="campus_id" value="<?php echo $map['campus_id']; ?>" style="display: none;" />
											<input type="text" id="building_id" name="building_id" value="<?php echo $map['building_id']; ?>" style="display: none;" />

											<input type="button" class='btn btn-primary' id="btn" value="查询" />
											<a id="show" href="#"><input type="button" id='shows' class='btn btn-success' value="ap显示" /></a>
										</div>
									</form>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<b>实时位置  <span id="cnt" style="color: red;"></span>场所：<?php echo $map['campus_name']; ?>--<?php echo $map['floor_name']; ?>--<span id="floornames" style="color: red;"></span>&nbsp;  当前x坐标<span id="posX1" style="color: red;"></span> &nbsp;当前y坐标<span id="posY1" style="color: red;"></span></b></br>
										<b>鼠标坐标:  x坐标<span id="posX"></span> &nbsp;y坐标<span id="posY"></span></b>
										<!-- /.panel-heading -->
										<div class="panel-body">
											<div class="dataTable_wrapper">
												<div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">

													<div class="row">

														<div class="col-sm-12">
															<div id="holder" style="cursor:default"></div>
														</div>
														<div style="clear:both;"></div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- /.panel-body -->
								</div>
								<!-- /.panel -->
							</div>
							<!-- /.col-lg-12 -->
						</div>
					</div>
<script type="text/javascript" src="__PUBLIC__/js/leaflet/MovingMarker.js">
</script>
<script type="text/javascript">
	var mymap = L.map('holder', {
				crs: L.CRS.Simple,
				//center: [<?php echo $map['floor_img_Y']; ?>/2 , <?php echo $map['floor_img_X']; ?>/2],
			    zoomSnap:0.5,
			    dragging:true,//地图拖动
			    touchZoom:true,//手机放大缩小
			    doubleClickZoom:false,//双击地图变大
			    animate:false
			});
		 var bounds = [[0, 0], [<?php echo $map['floor_img_Y']; ?>, <?php echo $map['floor_img_X']; ?>]];
         var image = L.imageOverlay('__PUBLIC__/<?php echo $map['floor_img_path']; ?>', bounds).addTo(mymap);
        // mymap.fitBounds(bounds);
          mymap.setView([<?php echo $map['floor_img_Y']; ?>/2 , <?php echo $map['floor_img_X']; ?>/2],<?php echo $map['magnification']; ?>);
        //定义图标
        var onicon = L.icon({
            iconUrl: '__PUBLIC__/js/leaflet/images/20.png',
            iconSize: [10, 10],
            iconAnchor: [0, 0]
        });
        var onicons = L.icon({
            iconUrl: '__PUBLIC__/js/leaflet/images/ap.png',
            iconSize: [20, 20],
            iconAnchor: [15, 15],
            popupAnchor: [10, 10],
            labelAnchor: [-10, -13] // as I want the label to appear 2px past the icon (18 + 2 - 6)
        });
        var oficons = L.icon({
            iconUrl: '__PUBLIC__/js/leaflet/images/ap_gray.png',
            iconSize: [20, 20],
            iconAnchor: [15, 15],
            popupAnchor: [5, 5],
            labelAnchor: [-10, -13] // as I want the label to appear 2px past the icon (18 + 2 - 6)
        });
     //地图系数
    $coefficienty = <?php echo $map['PhysicalSizeY']/$map['floor_img_Y']?>;
    $coefficientx =<?php echo $map['PhysicalSizeX']/$map['floor_img_X']?>;
    //鼠标移动
function  onfocus(e){
    var x = <?php echo $map['floor_img_Y']; ?>*$coefficienty-e.latlng.lat*$coefficienty;
    var y= e.latlng.lng*$coefficientx;

    //alert(x);
    y = Math.floor(y* 100) / 100;
    x= Math.floor(x* 100) / 100;
    $('#posX').html(y);
    $('#posY').html(x);
}
mymap.on('mousemove', onfocus);
//ap位置
var aplist =<?php echo $aplist; ?>;
returnList=  eval(aplist);
//console.log(returnList);
if(aplist != null){
    //mulist= returnList['mulist'];
    muCnt=aplist.length;
    //alert(muCnt);
    for(i=0;i<muCnt;i++){
        if(aplist[i].status==1)
        {
            //alert(aplist[i].Xcor);
            mymap.on('locationfound', onLocationFound(<?php echo $map['floor_img_Y']; ?>-aplist[i].Ycor/$coefficienty, aplist[i].Xcor/$coefficientx,aplist[i].mac,aplist[i].apname,aplist[i].id));
            //  mymap.on('locationfound', onLocationFound(mulist[i].locationY, mulist[i].locationX,mulist[i].mac,mulist[i].devType));
        }else
        {
            mymap.on('locationfound', ofLocationFound(<?php echo $map['floor_img_Y']; ?>-aplist[i].Ycor/$coefficienty, aplist[i].Xcor/$coefficientx,aplist[i].mac,aplist[i].apname,aplist[i].id));

        }


    }
}

//
function onLocationFound(e,f,mac,apname,id) {
    L.marker([e,f],{icon:onicons})
        .bindLabel(apname, { noHide: true,className:'iconsize',opacity:0.5})
        .addTo(mymap);

}
function ofLocationFound(e,f,mac,apname,id) {
    L.marker([e, f],{icon:oficons})
        .bindLabel(apname, { noHide: true ,className:'iconsize',opacity:0.5}).addTo(mymap);
}

        //实时位置
var ajaxarr =[];
var $i=0;//查询次数
var marker = L.marker([0, 0],{icon:onicon}).addTo(mymap);//定义一个marker 坐标点为0，0
function ajaxdata(){
	$data = $('#forms').serialize();
	$i++;
	$.ajax({
			type:'get',
			data:$data,
			dataType:'json',
			url:"<?php echo Url('Datepoint/ajaxpos'); ?>",
			success:function(data){
				var a1=ajaxarr;
			    ajaxarr=[<?php echo $map['floor_img_Y']; ?>- (data.y)/$coefficienty, data.x/$coefficientx];
                $('#cnt').html($i);
                $('#posX1').html(data.x);//udp返回的x坐标
                $('#posY1').html(data.y);//udp返回的y坐标
                $('#floornames').html(data.floor_name);
					if(ajaxarr.length>0){
                        marker.setLatLng([ajaxarr[0], ajaxarr[1]]);
					}		
			}
	})
						
}
$('#btn').click(function(){
	var ints=self.setInterval("ajaxdata()",5000);
})
//ap的显示与隐藏
$status = <?php echo isset($_GET['status'])?$_GET['status']:0;?>;

if($status!=0){
    $('#show').attr('href',"__URL__/position?status=0&floor_id=<?php echo $map['id']; ?>");
    $('#shows').attr('value',"ap隐藏");
}else{
    $('#show').attr('href',"__URL__/position?status=1&floor_id=<?php echo $map['id']; ?>");

}
$('#searchmac').val("<?php echo \think\Session::get('mac'); ?>");
					</script>

					<script src="__PUBLIC__/js/bui.js"></script>

					<!-- jQuery -->
<script src="__PUBLIC__/bower_components/jquery/dist/jquery.min.js"></script>

<!-- Morris Charts JavaScript 
     <script src="__PUBLIC__/bower_components/raphael/raphael-min.js"></script>
     -->
<!--
    <script src="__PUBLIC__/bower_components/morrisjs/morris.min.js"></script>
    <script src="__PUBLIC__/js/morris-data.js"></script>

    <!-- Bootstrap Core JavaScript -->
<script src="__PUBLIC__/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="__PUBLIC__/bower_components/metisMenu/dist/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="__PUBLIC__/dist/js/sb-admin-2.js"></script>

</body>

</html>