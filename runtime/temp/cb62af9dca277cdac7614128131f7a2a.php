<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:66:"G:\wamp64\www\ib5/application/index\view\updatepoint\position.html";i:1501215078;s:59:"G:\wamp64\www\ib5/application/index\view\Public\header.html";i:1501215050;}*/ ?>
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

	<input type="text" id="x" style="display: none;" />
	<input type="text" id="y" style="display: none;" />
	<input type="text" id="floor_id" value="<?php echo $map['id']; ?>" style="display: none;" />
	<input type="text" id="campus_id" value="<?php echo $map['campus_id']; ?>" style="display: none;" />
	<input type="text" id="building_id" value="<?php echo $map['building_id']; ?>" style="display: none;" />

	<div id="page-wrapper">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header" style="margin-top: 0px;"></h1>
			</div>
			<!-- /.col-lg-12 -->
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<b>设备位置标注  场所：<?php echo $map['campus_name']; ?>'------'<?php echo $map['floor_name']; ?>'-----''设备位置'</b>
						<div id="divInfo">
							<b style="float: right">当前x坐标<span id="posX"></span> &nbsp;当前y坐标<span id="posY"></span></b>
						</div>
						<!-- /.panel-heading -->
						<div class="panel-body">
							<div class="dataTable_wrapper">
								<div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">

									<div class="row">
										<div class="navbar-header">
										</div>
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
					center: [<?php echo $map['floor_img_Y']; ?>/2 , <?php echo $map['floor_img_X']; ?>/2],
		    zoomSnap:0.5,
		    dragging:true,//地图拖动
		    touchZoom:true,//手机放大缩小
		    doubleClickZoom:false,//双击地图变大
		    animate:false
		});
		 var bounds = [[0, 0], [<?php echo $map['floor_img_Y']; ?>, <?php echo $map['floor_img_X']; ?>]];
         var image = L.imageOverlay('__PUBLIC__/<?php echo $map['floor_img_path']; ?>', bounds).addTo(mymap);
         mymap.fitBounds(bounds);
       //  mymap.setView([<?php echo $map['floor_img_Y']; ?>/2, <?php echo $map['floor_img_X']; ?>/2],1);
		//定义图标
		var onicon = L.icon({
			iconUrl: '__PUBLIC__/js/leaflet/images/ap.png',
			iconSize: [20, 20],
			iconAnchor: [15, 15],
			popupAnchor: [10, 10],
			labelAnchor: [-10, -13]
		});
         $coefficienty = <?php echo $map['PhysicalSizeY']/$map['floor_img_Y']?>;
        $coefficientx =<?php echo $map['PhysicalSizeX']/$map['floor_img_X']?>;
		var oficon = L.icon({
			iconUrl: '__PUBLIC__/js/leaflet/images/10.png',
			iconSize: [10, 10],
			iconAnchor: [15, 15],
			popupAnchor: [5, 5],
			labelAnchor: [-10, -13]
		});
		var aplist =<?php echo $aplist; ?>;
		
		returnList=  eval(aplist);
		if(aplist != null){
		muCnt=aplist.length;
		for(i=0;i<muCnt;i++){
            mymap.on('locationfound', miaodian(<?php echo $map['floor_img_Y']; ?>-aplist[i].posY/$coefficienty,aplist[i].posX/$coefficientx,i));

		}
	}
       
//拖拽保存
function savedata(lat,lng,i){
	$.ajax({
		type:"post",
		url:"__URL__/savedate",
		dateType:'json',
		data:{'lat':lat,'lng':lng,'maxposX':<?php echo $map['floor_img_X']; ?>,'i':i,'id':<?php echo $_GET['floor_id']?>},
		success:function(result){
			if(result){
			}
		}
	});
}

//描点
function miaodian(e,f,i) {
    L.marker([e, f],{draggable: true,icon:oficon}).addTo(mymap)
            .on('dragend', function (event) {
                var marker = event.target;
                var latlng = marker.getLatLng();
                var lat = (<?php echo $map['floor_img_Y']; ?>-latlng.lat)*$coefficienty;
                var lng = latlng.lng*$coefficientx;//
             //   position.push([lat,lng]);
                savedata(lng,lat,i);
            })
}

var popup = L.popup();


//添加点位的ajax
var arr=[];
function oncontextmenu(e){

	var x = <?php echo $map['floor_img_Y']; ?>-e.latlng.lat;
	var y= e.latlng.lng;
	$.ajax({
		type:"post",
		url:"__URL__/ajaxinsertpoint",
		dataType:'json',
		data:{'x':x,'y':y,'floor_id':<?php echo $_GET['floor_id']?>},
		async:true,
		success:function(result){
			if(result){
                var y1= result.y;
                var x1 =result.x;
                x1 = parseInt(x1);
                x1=x1+4;
               // alert(x1);
                L.marker([<?php echo $map['floor_img_Y']; ?>-y1-6, x1],{draggable: true,icon:oficon}).addTo(mymap);
			   // alert("[<?php echo $map['floor_img_Y']; ?>-result.y-4");
            }
		}
	});
}

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
        function online(e) {
            var x = <?php echo $map['floor_img_Y']; ?>-e.latlng.lat;
            var y= e.latlng.lng;
            arr.push([<?php echo $map['floor_img_Y']; ?>-x, y]);
            // console.log(arr);
            if(arr.length==2){
                polyline = L.polyline(arr, {color: 'red',clickable: false}).addTo(mymap);
               // console.log(arr[0][1]);
            }
        }
        mymap.on('mousemove', onfocus);
mymap.on('dblclick', oncontextmenu);
//mymap.on('contextmenu',online);
	</script>

	<!--<script src="__PUBLIC__/js/jquery-1.js" type="text/javascript">
    
</script>                     -->
	<script type="text/javascript">
		$(document).ready(function() {

			$("#checkedAll").click(function() {
				if($(this).prop('checked')) { // 全选 
					$("input[name='checkbox_name']").each(function() {
						$(this).prop('checked', true);
					});
				} else { // 取消全选 
					$("input[name='checkbox_name']").each(function() {
						$(this).prop('checked', false);;
					});
				}
			});

		});
	</script>
	<script src="__PUBLIC__/js/bui.js"></script>

	<include file="Public:footer" />