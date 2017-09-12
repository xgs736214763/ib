<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:65:"G:\wamp64\www\ib5/application/index\view\apposition\position.html";i:1504502339;s:59:"G:\wamp64\www\ib5/application/index\view\Public\header.html";i:1501215050;s:59:"G:\wamp64\www\ib5/application/index\view\Public\footer.html";i:1501215044;}*/ ?>
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
			height: 600px;
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
						<b style="float: left">设备位置标注  场所：<?php echo $map['campus_name']; ?>'------'<?php echo $map['floor_name']; ?>'-----''设备位置'</b>
						<div id="divInfo">
							<b style="padding-left: 90px;">
								<input type="button" class="button button-success" id="success" value="触发"/></b>
							<b style="float: right">当前x坐标<span id="posX"></span> &nbsp;当前y坐标<span id="posY"></span></b>
						</div>
						<!-- /.panel-heading -->
						<div class="panel-body">
							<div class="dataTable_wrapper">
								<div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">

									<div class="row">
										<div class="navbar-header"></div>
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
				<!-- 画线的长度 -->
				<div class="hide" id="Expand">
					<div class="control-group span8">
						<label class="control-label" style=" padding-top: 0px;width:140px">路径的长度:</label>
						<div class="controls">
							<input type="text" id='length' class="input-normal control-text" style="height:30px;">
						</div>
					</div>
				</div>
				<!-- /.panel -->
			</div>
			<!-- /.col-lg-12 -->
			<!-- addap -->
			<div id="addap" class="hide">
				<form action="" method="get">
					<table class="content">
						<tr style="display: none;">
							<td>
								<input type="text" name="location" class="input-normal control-text" id="location" value="<?php if(isset($_GET['mac'])){echo $_GET['mac'];}?>" />
						</tr>
						<tr>
							<td>ap名称：</td>
							<td> <input type="text" name="apname" class="input-normal control-text" id="apname" class="store" value="<?php echo $apinfo['apname']; ?>" /></td>
						</tr>
						<tr>
							<td>mac：</td>
							<td> <input type="text" name="mac" class="input-normal control-text" id="mac" class="store" value="<?php echo $apinfo['mac']; ?>" /></td>
						</tr>
						<tr>
							<td>ip：</td>
							<td> <input type="text" name="ip" class="input-normal control-text" id="ip" class="store" value="<?php echo $apinfo['ip']; ?>" /></td>
						</tr>
						<tr>
							<td>厂商：</td>
							<td> <input type="text" name="vender" class="input-normal control-text" id="vender" class="store" value="<?php echo $apinfo['vender']; ?>" /></td>
						</tr>
					</table>
				</form>
			</div>
		</div>

	</div>
	<script type="text/javascript" src="__PUBLIC__/js/leaflet/MovingMarker.js">
	</script>
	<script src="__PUBLIC__/js/bui.js"></script>
	<script type="text/javascript">
		var Overlay = BUI.Overlay;
		var mymap = L.map('holder', {
					crs: L.CRS.Simple,
					//center: [<?php echo $map['floor_img_Y']; ?>/2 , <?php echo $map['floor_img_X']; ?>/2],
				    zoomSnap:0.5,
				    dragging:true,//地图拖动
				    touchZoom:true,//手机放大缩小
				    doubleClickZoom:false,//双击地图变大
				    animate:true
				});
		 var bounds = [[0, 0], [<?php echo $map['floor_img_Y']; ?>, <?php echo $map['floor_img_X']; ?>]];
         var image = L.imageOverlay('__PUBLIC__/<?php echo $map['floor_img_path']; ?>', bounds).addTo(mymap);
         //mymap.fitBounds(bounds);
         mymap.setView([<?php echo $map['floor_img_Y']; ?>/2 , <?php echo $map['floor_img_X']; ?>/2],<?php echo $map['magnification']; ?>);
       // mymap.setView([200,300],0.1);
		//定义图标
		var onicon = L.icon({
			iconUrl: '__PUBLIC__/js/leaflet/images/ap.png',
			iconSize: [20, 20],
			iconAnchor: [15, 15],
			popupAnchor: [10, 10],
			labelAnchor: [-10, -13] // as I want the label to appear 2px past the icon (18 + 2 - 6)
		});
		var oficon = L.icon({
			iconUrl: '__PUBLIC__/js/leaflet/images/ap_gray.png',
			iconSize: [20, 20],
			iconAnchor: [15, 15],
			popupAnchor: [5, 5],
			labelAnchor: [-10, -13] // as I want the label to appear 2px past the icon (18 + 2 - 6)
		});
		var aplist =<?php echo $aplist; ?>;
         $coefficienty = <?php echo $map['PhysicalSizeY']/$map['floor_img_Y']?>;//lat系数
         $coefficientx =<?php echo $map['PhysicalSizeX']/$map['floor_img_X']?>;//lng系数
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
 var position = [];
function savedata(lat,lng,mac,id){
	//alert(id);
    if(confirm('确认移动吗???')){
    	$.ajax({
    		type:"post",
    		url:"<?php echo Url('index/Apposition/savedate'); ?>",
    		dateType:'json',
    		data:{'lat':lat,'lng':lng,'mac':mac,'maxposX':<?php echo $map['PhysicalSizeX']; ?>,'id':id},
    		success:function(result){
    			if(result){
    				//alert(result);
    			}
    		}
    	});
    }else{
        window.location.reload();
    }
}

function onLocationFound(e,f,mac,apname,id) {
    L.marker([e,f],{draggable: true,icon:onicon})
     .bindLabel(apname, { noHide: true,className:'iconsize',opacity:0.5})
            .addTo(mymap)
            .on('dragend', function (event) {
                var marker = event.target;
                var latlng = marker.getLatLng();
                var lat = (<?php echo $map['floor_img_Y']; ?>-latlng.lat)*$coefficienty;
             	var lng = latlng.lng*$coefficientx;
                position.push([lat,lng]);
                savedata(lng,lat,mac,id);
               // alert(latlng);
            }).on('dblclick',function(e){
            	layer.open({
					  type: 2,
					  title: '编辑ap信息',
					  value:'pointY',
					  skin: 'layui-layer-rim', //加上边框
					  area: ['420px', '440px'], //宽高
					  content:"__URL__/addap?mac="+mac,
					});
				
            });

}
function ofLocationFound(e,f,mac,apname,id) {
    L.marker([e, f],{draggable: true,icon:oficon})
   .bindLabel(apname, { noHide: true ,className:'iconsize',opacity:0.5})
            .addTo(mymap)
            .on('dragend', function (event) {
                var marker = event.target;
                var latlng = marker.getLatLng();
                var lat = (<?php echo $map['floor_img_Y']; ?>-latlng.lat)*$coefficienty;
             	var lng = latlng.lng*$coefficientx;
               // position.push([lat,lng]);
                savedata(lng,lat,mac,id);
            }).on('dblclick',function(e){
            	//alert(mac);
            	layer.open({
					  type: 2,
					  title: '编辑ap信息',
					  value:'pointY',
					  skin: 'layui-layer-rim', //加上边框
					  area: ['420px', '440px'], //宽高
					  content:"__URL__/addap?mac="+mac,
					});
            });
}


//描点
function miaodian(e,f,mac,apname,id) {
    L.marker([e, f],{draggable: true,icon:oficon})
   .bindLabel(apname, { noHide: true ,className:'iconsize',opacity:0.5})
            .addTo(mymap)
            .on('dragend', function (event) {
                var marker = event.target;
                var latlng = marker.getLatLng();
                var lat = (<?php echo $map['floor_img_Y']; ?>-latlng.lat)*$coefficienty;
             	var lng = latlng.lng*$coefficientx;
               // position.push([lat,lng]);
                savedata(lng,lat,mac,id);
            })
}

var popup = L.popup();
function onMapClick(e) {
           $('#x').val(<?php echo $map['floor_img_Y']; ?>*$coefficienty-e.latlng.lat*$coefficienty);
		   $('#y').val(e.latlng.lng*$coefficientx);
		   var y = document.getElementById('x').value; 
		var x = document.getElementById('y').value;
	
var dialog = new Overlay.Dialog({
                title:'新增ap信息',
                width:350,
                height:200,
                closeAction : 'destroy', //每次关闭dialog释放
                contentId:'addap',
                 buttons:[
                  {
                    text:'提交',
                    elCls : 'button button-primary',
                    handler : function(){
                    		$floorId = document.getElementById('floor_id').value;
							$campus_id = document.getElementById('campus_id').value;
							$building_id = document.getElementById('building_id').value;
							$mac=$('#mac').val();
							$apname = $('#apname').val();
							$ip = $('#ip').val();
							$vender = $('#vender').val();
							$location = $('#location').val();
          						$.ajax({
          							url:'<?php echo Url('index/Apposition/saveapinfo'); ?>',
									type:'post',
									data:{'x':x,'y':y,'mac':$mac,'ip':$ip,'vender':$vender,'floor_id':$floorId,'campus_id':$campus_id,
                            'building_id':$building_id,'apname':$apname,'location':$location},
									dataType:'json',
									success:function(data){
										if(!data.apnames){
											L.marker([<?php echo $map['floor_img_Y']; ?>-y/$coefficienty, x/$coefficientx],{draggable: true,icon:onicon})
										.bindLabel($apname, { noHide: true ,className:'iconsize',opacity:0.5})
												.addTo(mymap)
												.on('dragend', function (event) {
													var marker = event.target;
													var latlng = marker.getLatLng();
													var lat = <?php echo $map['floor_img_Y']; ?>-latlng.lat;
													var lng = latlng.lng;
													position.push([lat,lng]);
													savedata(lng,lat,$mac,'');
												});
											dialog.close();
										}else{
											//dispoint("修改楼层信息失败");
											//console.log(data.apname);
											//	alert(data['apname']);
											alert('和'+data.apnames+'ap的名称或者mac或者ip冲突');
										}
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
              dialog.show();
}


var arr=[];

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
//画线
         function online(e) {
             var x = <?php echo $map['floor_img_Y']; ?>-e.latlng.lat;
             var y= e.latlng.lng;
             arr.push([<?php echo $map['floor_img_Y']; ?>-x, y]);
             // console.log(arr);
             if(arr.length==2){
                 polyline = L.polyline(arr, {color: 'red',clickable: false}).addTo(mymap);
               //  console.log(arr[0][1]);
                 var dialog = new Overlay.Dialog({
                     title:'定义长度',
                     width:300,
                     height:200,
                     closeAction : 'destroy', //每次关闭dialog释放
                     contentId:'Expand',
                     buttons:[
                         {
                             text:'提交',
                             elCls : 'button button-primary',
                             handler : function(){
                                 var lengths    =$('#length').val();
                                 $floor_id =<?php echo $_GET['floor_id']?>;
                                 $.post("<?php echo Url('index/Apposition/ajaxlength'); ?>",{'floor_id':$floor_id,'length':lengths,'x1':arr[0][0],
                                 'y1':arr[0][1],'x2':arr[1][0],'y2':arr[1][1]},function(data){
                                     if(data){
                                         dispoint("地图信息矫正完成");
                                         dialog.close();
                                         location.reload();
                                     }else{
                                         dispoint("地图信息矫正失败");
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
                 dialog.show();
             }
         }
//鼠标右键画线矫正
 mymap.on('contextmenu',online);
//双击添加ap
mymap.on('dblclick', onMapClick);
//鼠标滑过显示坐标
mymap.on('mousemove', onfocus);
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

		function dispoint(messge) {
			BUI.Message.Show({
				msg: messge,
				icon: 'success',
				buttons: [],
				autoHide: true,
				autoHideDelay: 1000

			});
		}
		//重置
		$('#success').click(function() {
			$.ajax({
				type: 'post',
				url: "<?php echo Url('index/Sys/udpresert'); ?>",
				success: function(result) {
					dispoint("触发成功！");
				}
			})
		})
	</script>

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