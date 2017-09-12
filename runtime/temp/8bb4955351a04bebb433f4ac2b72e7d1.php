<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:62:"G:\wamp64\www\ib5/application/index\view\datepoint\region.html";i:1504503046;s:59:"G:\wamp64\www\ib5/application/index\view\Public\header.html";i:1501215050;s:64:"G:\wamp64\www\ib5/application/index\view\Public\leafletdraw.html";i:1501215057;s:59:"G:\wamp64\www\ib5/application/index\view\Public\footer.html";i:1501215044;}*/ ?>
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
	<link rel="stylesheet" href="__PUBLIC__/js/leaflet/Leaflet.Pin/src/leaflet.pin.css">
	<script src="__PUBLIC__/js/jquery.js" type="text/javascript" charset="utf-8"></script>
	<script type="text/javascript" src="__PUBLIC__/js/layer/layer.js"></script>
	<!--<script src="http://cdn.leafletjs.com/leaflet/v1.0.0-rc.1/leaflet.js"></script>-->
	<script src="__PUBLIC__/js/leaflet/leaflet-src.js"></script>
	<script src="__PUBLIC__/js/leaflet/leaflet1.js"></script>
	<script src="__PUBLIC__/js/leaflet/src/leaflabel.js"></script>
	<link rel="stylesheet" href="__PUBLIC__/js/leaflet/leaflet.draw/src/leaflet.draw.css" />

<script src="__PUBLIC__/js/leaflet/leaflet.draw/src/Leaflet.draw.js"></script>
<script src="__PUBLIC__/js/leaflet/leaflet.draw/src/Leaflet.Draw.Event.js"></script>
<link rel="stylesheet" href="__PUBLIC__/js/leaflet/leaflet.draw/src/leaflet.draw.css" />

<script src="__PUBLIC__/js/leaflet/leaflet.draw/src/Toolbar.js"></script>
<script src="__PUBLIC__/js/leaflet/leaflet.draw/src/Tooltip.js"></script>
<script src="__PUBLIC__/js/leaflet/leaflet.draw/src/Control.Draw.js"></script>
<script src="__PUBLIC__/js/leaflet/leaflet.draw/src/draw/DrawToolbar.js"></script>
<script src="__PUBLIC__/js/leaflet/leaflet.draw/src/draw/handler/Draw.Feature.js"></script>
<script src="__PUBLIC__/js/leaflet/leaflet.draw/src/draw/handler/Draw.SimpleShape.js"></script>
<script src="__PUBLIC__/js/leaflet/leaflet.draw/src/draw/handler/Draw.Polyline.js"></script>
<script src="__PUBLIC__/js/leaflet/leaflet.draw/src/draw/handler/Draw.Circle.js"></script>
<script src="__PUBLIC__/js/leaflet/leaflet.draw/src/draw/handler/Draw.Marker.js"></script>
<script src="__PUBLIC__/js/leaflet/leaflet.draw/src/draw/handler/Draw.Polygon.js"></script>
<script src="__PUBLIC__/js/leaflet/leaflet.draw/src/draw/handler/Draw.Rectangle.js"></script>

<script src="__PUBLIC__/js/leaflet/leaflet.draw/src/ext/GeometryUtil.js"></script>
<script src="__PUBLIC__/js/leaflet/leaflet.draw/src/ext/LatLngUtil.js"></script>
<script src="__PUBLIC__/js/leaflet/leaflet.draw/src/ext/LineUtil.Intersect.js"></script>
<script src="__PUBLIC__/js/leaflet/leaflet.draw/src/ext/Polygon.Intersect.js"></script>
<script src="__PUBLIC__/js/leaflet/leaflet.draw/src/ext/Polyline.Intersect.js"></script>
<script src="__PUBLIC__/js/leaflet/leaflet.draw/src/ext/TouchEvents.js"></script>
<script src="__PUBLIC__/js/leaflet/leaflet.draw/src/edit/EditToolbar.js"></script>
<script src="__PUBLIC__/js/leaflet/leaflet.draw/src/edit/handler/EditToolbar.Edit.js"></script>
<script src="__PUBLIC__/js/leaflet/leaflet.draw/src/edit/handler/EditToolbar.Delete.js"></script>
<script src="__PUBLIC__/js/leaflet/leaflet.draw/src/edit/handler/Edit.Poly.js"></script>
	<script src="__PUBLIC__/js/leaflet/src/area.js"></script>
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

					<div class="panel panel-default">
						<div class="panel-heading">

							<!-- /.panel-heading -->
							<div class="panel-body">
								<div class="dataTable_wrapper">
									<div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">

										<div class="row">
											<div id="areaid" class="hide">
												<table class="content">
													<tr>
														<td>区域ID：</td>
														<td> <input type="text" class="input-normal control-text" id="areaids" class="store" /></td>
													</tr>

												</table>
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
		<!-- <script type="text/javascript" src="__PUBLIC__/js/leaflet/MovingMarker.js"> </script>-->
<script src="__PUBLIC__/js/bui.js"></script>
<script type="text/javascript">
	var Overlay = BUI.Overlay;
	var map = L.map('holder', {
		crs: L.CRS.Simple,
		drawControl: false,
		doubleClickZoom: false,
		collapsed: false
	});
	var bounds = [
			[0, 0],
			[<?php echo $map['floor_img_Y']; ?>, <?php echo $map['floor_img_X']; ?>]];
         var image = L.imageOverlay('__PUBLIC__/<?php echo $map['floor_img_path']; ?>', bounds).addTo(map);
        // map.fitBounds(bounds);
         map.setView([<?php echo $map['floor_img_Y']; ?>/2 , <?php echo $map['floor_img_X']; ?>/2],<?php echo $map['magnification']; ?>);
      drawnItems = L.featureGroup().addTo(map);
	  var oficon = L.icon({
				iconUrl: '__PUBLIC__/js/leaflet/images/10.png',
				iconSize: [10, 10],
				iconAnchor: [15, 15],
				popupAnchor: [5, 5],
				labelAnchor: [-10, -13]
			});
	    map.addControl(new L.Control.Draw({
	        edit: {
	            featureGroup: drawnItems,
	            poly: {
	                allowIntersection: false,
	                showArea: true
	            }
	        },
        draw: {
            polygon: {
                allowIntersection: false,
                showArea: true
            }
        }
	    }));
	$coefficienty = <?php echo $map['PhysicalSizeY']/$map['floor_img_Y']?>;//lat系数
  $coefficientx =<?php echo $map['PhysicalSizeX']/$map['floor_img_X']?>;//lng系数
    map.on(L.Draw.Event.CREATED, function (event) {
        var layer = event.layer;
       
        var jsons =layer._latlngs;
        var jsons1 =jsons.slice();
				console.log(jsons);
				var list = {};
				for(var i=0;i<jsons.length;i++){
						list["lng"+i] = jsons[i].lng*$coefficientx;
						list["lat"+i] = <?php echo $map['floor_img_Y']; ?>*$coefficienty-jsons[i].lat*$coefficienty;
				}
				drawnItems.addLayer(layer);
				for(var i=0;i<jsons1.length;i++){
					
						jsons1[i].lng = jsons[i].lng*$coefficientx;
						jsons1[i].lat = <?php echo $map['floor_img_Y']; ?>*$coefficienty-jsons[i].lat*$coefficienty;
				}
				layer._latlngs = jsons1;
				var area=(LGeo.area(layer)/1000000).toFixed(0);
				console.log(area);
				$.ajax({
					url:"__URL__/insertdata?floor_id=<?php echo input('floor_id/d')?>&area="+area,
					type:'post',
					data: list,
					dataType:'json',
					// traditional: true, 
					success:function(result){
						//console.log(layer);
					}
				});
        
    });
    var lists1 = {};
    var area;
    map.on('draw:edited', function (e) {
    	//console.log(e);
         var layers = e.layers;
         //console.log(layers);
         layers.eachLayer(function (layer) {
         			var jsons =layer.editing.latlngs;
         			var jsons1 =jsons.slice();
         			
							for(var i=0;i<jsons[0].length;i++){
									lists1["lngs"+i] = jsons[0][i].lng*$coefficientx;
									lists1["lats"+i] = <?php echo $map['floor_img_Y']; ?>*$coefficienty-jsons[0][i].lat*$coefficienty;
							}
							for(var i=0;i<jsons1[0].length;i++){
					
									jsons1[0][i].lng = jsons[0][i].lng*$coefficientx;
									jsons1[0][i].lat = <?php echo $map['floor_img_Y']; ?>*$coefficienty-jsons[0][i].lat*$coefficienty;
							}
							console.log(jsons1);
							 area=(LGeo.area(layer)/1000000).toFixed(0);
							console.log(area);
							dialogs.show();
         });
     });
     //删除
      map.on('draw:deleted ', function (e) {
         var layers = e.layers;
         layers.eachLayer(function (layer) {
         			var jsons =layer.editing.latlngs;
         			console.log(jsons);
         			var lists = {};
							for(var i=0;i<jsons[0].length;i++){
									lists["lngs"+i] = jsons[0][i].lng*$coefficientx;
									lists["lats"+i] = <?php echo $map['floor_img_Y']; ?>*$coefficienty-jsons[0][i].lat*$coefficienty;
							}
							$.ajax({
								url:"__URL__/deletepoints?floor_id=<?php echo input('floor_id/d')?>",
								type:'post',
								data: lists,
								dataType:'json',
								// traditional: true, 
								success:function(result){
									//console.log(layer);
									window.location.reload();
								}
							});
         });
     });
 var pointlist =<?php echo $pointlist; ?>;
 
 if(pointlist !=''){
 	pointlist1 = JSON.stringify(pointlist).replace(/\"/g,"");
	pointlist=  eval(pointlist1);  
	var arr=[];
	for($i=0;$i<pointlist.length;$i++){
		pointlists= pointlist[$i];
		var polygon= polygon+$i;
		var polygon = new L.Polygon(pointlists).addTo(drawnItems);
		var i = arr[$i];
		//console.log(i);
		<?php if(!(empty($id) || (($id instanceof \think\Collection || $id instanceof \think\Paginator ) && $id->isEmpty()))): if(is_array($id) || $id instanceof \think\Collection || $id instanceof \think\Paginator): $i = 0; $__LIST__ = $id;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
			arr.push(<?php echo $vo; ?>) ;
			if($i==<?php echo $key; ?>){
				//console.log($i);
				L.marker(pointlists[0], {
					icon: oficon
				}).bindLabel("<?php echo $id[$key]?>").addTo(map).showLabel();
				// polygon.bindPopup("<?php echo $id[$key]?>");
			}
		<?php endforeach; endif; else: echo "" ;endif; endif; ?>
	 }


} 


//倒计时
var timer =110;
function Countdown() {
	$('#curtime').text(timer);
    if (timer >= 1) {
        timer -= 1;
        setTimeout(function() {
            Countdown();
        }, 1000);
    }else{
    	timer =110;
    }
}
//双击弹出
var lats;//定义xy ajax传值
var lngs;
function oncontextmenu(e){
	Countdown();
	var lng = e.latlng.lng*$coefficientx;
	var lat = <?php echo $map['floor_img_Y']; ?>*$coefficienty-e.latlng.lat*$coefficienty;
	
	lng = Math.round(lng*100);
	lngs =lng;
	
	lat = Math.round(lat*100);
	lats= lat;
	dialog.show();    			
}
drawnItems.on('dblclick', oncontextmenu);
map.on('dblclick', oncontextmenu);

//指纹采集区域
 var dialog = new Overlay.Dialog({
     title:'输入区域ID',
     width:300,
     height:200,
    // closeAction : 'destroy', //每次关闭dialog释放
     contentId:'areaid',
     buttons:[
         {
             text:'提交',
             elCls : 'button button-primary',
             handler : function(){
             	$areaid = $('#areaids').val();
             		openshow();
                $.ajax({
								 //  url:'__URL__/udpsends',
								   url:'<?php echo Url("Fingerprint/udpsends","floor_id=".input("floor_id/d")); ?>',
								   data:{'areaid':$areaid,'lat':lats,'lng':lngs},
								   dataType:'json',
								   type:'post',
								   success:function(){
								   		dialog.close();
								   }
								})
                 
             }
         },{
             text:'取消',
             elCls : 'button',
             handler : function(){
                 this.close();
             }
         }]
 });
// 编辑区域输入id
 var dialogs = new Overlay.Dialog({
     title:'输入编辑区域ID',
     width:300,
     height:200,
   //  closeAction : 'destroy', //每次关闭dialog释放
     contentId:'areaid',
     buttons:[
         {
             text:'提交',
             elCls : 'button button-primary',
             handler : function(){
             	$areaid = $('#areaids').val();
                $.ajax({
								url:"__URL__/updatepoints?floor_id=<?php echo input('floor_id/d')?>&areaid="+$areaid+'&area='+area,
								type:'post',
								data: lists1,
								dataType:'json',
								// traditional: true, 
								success:function(result){
									dialogs.close();
								}
							});
                 
             }
         },{
             text:'取消',
             elCls : 'button',
             handler : function(){
                 dialogs.close();
             }
         }]
 });

function openshow(){
			layer.open({
			  type: 1
			  ,title: false //不显示标题栏
			  ,closeBtn: false
			  ,area: '300px;'
			  ,shade: 0.8
			  ,time:timer*1000
			  ,id: 'LAY_layuipro' //设定一个id，防止重复弹出
			  ,resize: false
			  ,btnAlign: 'c'
			  ,moveType: 1 //拖拽模式，0或者1
			  ,content: '<div style="padding: 50px; line-height: 22px; background-color: #393D49; color: #fff; font-weight: 300;">指纹采集中，请稍后<span style="color:red" id="curtime"></span>秒</div>'
			  ,success: function(layero){
			    
			  }
			});
}
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