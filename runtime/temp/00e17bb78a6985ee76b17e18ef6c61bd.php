<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:57:"G:\wamp64\www\ib5/application/index\view\place\floor.html";i:1504769642;s:59:"G:\wamp64\www\ib5/application/index\view\Public\header.html";i:1504773227;s:59:"G:\wamp64\www\ib5/application/index\view\Public\footer.html";i:1504769960;}*/ ?>
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
								<a href="#"><i class="fa fa-wrench"></i> &nbsp;&nbsp;系统配置项<span class="fa arrow"></span></a>
								<ul class="nav nav-second-level">
									<li>
										<a href="<?php echo Url('Sys/basic'); ?>">系统配置</a>

									</li>
								</ul>
							</li>

							<li>
								<a href="#"><i class="fa  fa-won"></i>　实时位置查看<span class="fa arrow"></span></a>
								<ul class="nav nav-second-level">
									<li>
										<a href="<?php echo Url('Datepoint/floor'); ?>">单用户位置</a>

									</li>
								</ul>
							</li>
							<li>
								<a href="#"><i class="fa  fa-cog"></i>　ap位置标注<span class="fa arrow"></span></a>
								<ul class="nav nav-second-level">
									<li>
										<a href="<?php echo Url('Apposition/floor'); ?>">ap位置标注　</a>

									</li>
								</ul>

							</li>
							<li>
								<a href="#"><i class="fa  fa-female"></i>　路径矫正<span class="fa arrow"></span></a>
								<ul class="nav nav-second-level">
									<li>
										<a href="<?php echo Url('Updatepoint/floor'); ?>">路径矫正　</a>

									</li>
								</ul>

							</li>
							<li>
								<a href="#"><i class="fa  fa-cogs"></i>　Ibeacon管理<span class="fa arrow"></span></a>
								<ul class="nav nav-second-level">
									<li>
										<a href="<?php echo Url('Place/floor?status=1'); ?>">ibeacon设备　</a>

									</li>
								</ul>

							</li>
							<li>
								<a href="#"><i class="fa  fa-hand-o-right"></i>　WIFI指纹采集<span class="fa arrow"></span></a>
								<ul class="nav nav-second-level">
									<li>
										<a href="<?php echo Url('Place/floor?status=2'); ?>">指纹采集　</a>

									</li>
								</ul>
							</li>
							<?php if(session('mark') == 1): ?>
							<li>
								<a href="#"><i class="fa  fa-rocket"></i>　权限管理<span class="fa arrow"></span></a>
								<ul class="nav nav-second-level">
									<li>
										<a href="<?php echo Url('Account/member'); ?>">添加管理员</a>

									</li>

									<li>
										<a href="<?php echo Url('Account/memberlist'); ?>">管理员列表</a>

									</li>
								</ul>
							</li>
							<?php endif; ?>
							<li>
								<a href="<?php echo Url('Account/xiugai'); ?>"><i class="fa  fa-unlock-alt"></i>　 密码修改<span class="fa arrow"></span></a>

							</li>
						</ul>
					</div>
					<!-- /.sidebar-collapse -->
				</div>
				<!-- /.navbar-static-side -->
			</nav>
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
						<b>楼层管理</b>
					</div>
					<!-- /.panel-heading -->
					<div class="panel-body">
						<div class="dataTable_wrapper">
						<div id="dataTables-example_wrapper"
							class="dataTables_wrapper form-inline dt-bootstrap no-footer">
							<div class="row">
								<div class="col-sm-8">
									<form action="<?php echo Url('Place/floor'); ?>" method="get">
										<div class="dataTables_filter" style="float: left;">
											<label>楼层名称: <input type="search" name="name"
												class="form-control input-sm" placeholder="">
											</label> <select name="campus_id" id="campus_id" class="required">
												<option value="">请选择广场</option> <?php if(is_array($squarelist) || $squarelist instanceof \think\Collection || $squarelist instanceof \think\Paginator): $i = 0; $__LIST__ = $squarelist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
												<option value="<?php echo $vo['id']; ?>">
															<?php echo $vo['campus_name']; ?>
														</option> <?php endforeach; endif; else: echo "" ;endif; ?>
											</select>
											<button class='btn btn-primary'>查询</button>

										</div>
									</form>
									<button class='btn btn-success'
										style="float: left; margin-left: 6px" onclick="addFloor()">添加楼层</button>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									<table id="yao_table"
										class="table table-striped table-bordered table-hover dataTable no-footer">
										<thead>
											<tr role="row">
												<th style="text-align: center;">所属城市</th>
												<th style="text-align: center;">广场名称</th>
												<th style="text-align: center;">建筑名称</th>
												<th style="text-align: center;">楼层名称</th>
												<th style="text-align: center;">地图放大倍数</th>
												<th style="text-align: center;">ap数量</th>
												<th style="text-align: center;">地图是否上传</th>
												<th style="text-align: center;">操作</th>

											</tr>
										</thead>
										<tbody>
											<?php if(is_array($floorlist) || $floorlist instanceof \think\Collection || $floorlist instanceof \think\Paginator): $i = 0; $__LIST__ = $floorlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
											<tr class="gradeA odd" role="row">
												<td><?php echo $vo['location_name']; ?></td>
												<td><?php echo $vo['campus_name']; ?></td>
												<td><?php echo $vo['building_name']; ?></td>
												<td><?php echo $vo['floor_name']; ?></td>
												<td><?php echo $vo['magnification']; ?></td>
												<td><?php if(!(empty($vo['cnt']) || (($vo['cnt'] instanceof \think\Collection || $vo['cnt'] instanceof \think\Paginator ) && $vo['cnt']->isEmpty()))): ?> <?php echo $vo['cnt']; else: ?>0
													<?php endif; ?></td>
												<td><?php if(empty($vo['floor_img_path']) || (($vo['floor_img_path'] instanceof \think\Collection || $vo['floor_img_path'] instanceof \think\Paginator ) && $vo['floor_img_path']->isEmpty())): ?><span
													style="color: red;">未上传</span> <?php else: ?><span
													style="color: green;">已上传</span> <?php endif; ?>
												</td>
												<td><a
													href="<?php echo Url('Apposition/position'); ?>?floor_id=<?php echo $vo['id']; ?>">ap位置标注</a>
													| <a
													href="<?php echo Url('Ibeacon/position?floor_id='.$vo['id'].'&campus_id='.$vo['campus_id']); ?>">Ibeacon设备</a>
													| <a
													href="<?php echo Url('Datepoint/region?floor_id='.$vo['id'].'&campus_id='.$vo['campus_id']); ?>">指纹采集</a>
													| <a href="javascript:void(0)"
													onclick="ediFloor('<?php echo $vo['floor_name']; ?>','<?php echo $vo['id']; ?>','<?php echo $vo['campus_id']; ?>','<?php echo $vo['floor_img_X']; ?>','<?php echo $vo['floor_img_Y']; ?>','<?php echo $vo['magnification']; ?>')">编辑</a>
													| <a href="javascript:void(0)"
													onclick="deletefloor(<?php echo $vo['id']; ?>)"><span
														style="color: red;">删除</span>&nbsp;|</a> <a
													href="javascript:void(0)"
													onclick="upload('<?php echo $vo['floor_name']; ?>','<?php echo $vo['building_id']; ?>',<?php echo $vo['id']; ?>,<?php echo $vo['campus_id']; ?>)">地图上传</a>
												</td>

											</tr>
											<?php endforeach; endif; else: echo "" ;endif; ?>

										</tbody>
									</table>
								</div>
							</div>

							<div class="row">
								<div class="col-sm-12">
									<div class='pages'><?php echo $page; ?></div>
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

	<!-- 添加楼层信息-->
	<div id="addFloor1" class="hide">
		<form class="form-horizontal">
			<div class="row">
				<div class="col-sm-12">
					<label class="col-sm-12">选择广场</label>
					<div class="col-sm-12">
						<select id="campus_ids">

							<?php if(is_array($squarelist) || $squarelist instanceof \think\Collection || $squarelist instanceof \think\Paginator): $i = 0; $__LIST__ = $squarelist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
								<option value="<?php echo $v['id']; ?>">
									<?php echo $v['campus_name']; ?>
								</option>
								<?php endforeach; endif; else: echo "" ;endif; ?>
						</select>
						<select id="building_id">

						</select>
					</div>
				</div>
				<div class="control-group span8">
					<label class="control-label" style=" padding-top: 0px;">楼层名称：</label>
					<div class="controls">
						<input type="text" id="floor_name" class="input-normal control-text" style="height:30px;">
					</div>
				</div>
			</div>
		</form>
	</div>

	<!--     <form method="post" enctype="multipart/form-data" action="__URL__/upload">
        附件：<input type="file" name="image" />
    <input type="submit" value="提交">
    </form> -->

	<!-- 编辑楼层-->
	<div id="ediFloor1" class="hide">
		<!--     action+"__URL__/upload" enctype="multipart/form-data" method="post" -->
		<form class="form-horizontal">
			<div class="row">
				<div class="control-group span10">
					<label class="control-label" style=" padding-top: 0px;width:140px">广场名称：</label>
					<div class="controls">
						<select id="campus_id1">
							<?php if(is_array($squarelist) || $squarelist instanceof \think\Collection || $squarelist instanceof \think\Paginator): $i = 0; $__LIST__ = $squarelist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
								<option value="<?php echo $v['id']; ?>">
									<?php echo $v['campus_name']; ?>
								</option>
								<?php endforeach; endif; else: echo "" ;endif; ?>
						</select>
					</div>
				</div>
				<div class="control-group span10">
					<label class="control-label" style=" padding-top: 0px;width:140px">建筑名称：</label>
					<div class="controls">
						<select id="building_id2">

						</select>
					</div>
				</div>
				<div class="control-group span8">
					<label class="control-label" style=" padding-top: 0px;width:140px">楼层名称：</label>
					<div class="controls">
						<input type="text" id="floor_name1" class="input-normal control-text" style="height:30px;">
					</div>
				</div>
				<div class="control-group span8">
					<label class="control-label" style=" padding-top: 0px;width:140px">地图放大倍数：</label>
					<div class="controls">
						<input type="text" id="magnification" class="input-normal control-text" style="height:30px;">
					</div>
				</div>

			</div>
		</form>
	</div>
	<!-- 上传图片-->
	<div id="upload1" class="hide">
		<form method="post" class="form-horizontal" enctype="multipart/form-data" action="<?php echo Url('Place/upload'); ?>">
			<div class="row">

				<div class="control-group span8">
					<label class="control-label" style=" padding-top: 0px;">楼层地图：</label>
					<div class="controls">
						<input type="hidden" id="building_id_up" name="building_id_up">
						<input type="hidden" id="floor_id_up" name="floor_id_up">
						<input type="hidden" id="campus_id_up" name="campus_id_up">
						<input type="file" name="image" class="input-normal control-text" style="height:30px;" />
					</div>
					<input type="text" style="display: none;" name="page" id="p" value="<?php echo isset($_GET['page'])?$_GET['page']:1;?>" />
				</div>
				<div class="control-group span8">
					<label class="control-label" style=" padding-top: 0px;width:140px">楼层的物理宽度(厘米)：</label>
					<div class="controls">
						<input type="text" name="floorXSize" id='floorXSize' class="input-normal control-text" style="height:30px;">
					</div>
				</div>
				<div class="control-group span8">
					<label class="control-label" style=" padding-top: 0px;width:140px">楼层的物理高度(厘米)：</label>
					<div class="controls">
						<input type="text" name="floorYSize" id='floorYSize' class="input-normal control-text" style="height:30px;">
					</div>
				</div>
			</div>
			<input type="submit" class="button button-primary" value="提交">
		</form>
		<!-- <form method="post" enctype="multipart/form-data" action="__URL__/upload">
        附件：<input type="file" name="image" />
    <input type="submit" value="提交">
    </form> -->
	</div>

	<script src="__PUBLIC__/js/jquery-1.8.3.min.js" type="text/javascript">
	</script>
	<script type="text/javascript">
		$(document).ready(function() {

			$("#checkedAll").click(function() {
				if($(this).prop('checked')) { // 全选 
					$("input[name='checkbox_name']").each(function() {
						$(this).prop('checked', true);
					});
				} else { // 取消全选 
					$("input[name='checkbox_name']").each(function() {
						$(this).prop('checked', false);
					});
				}
			});

		});
	</script>
	<script src="__PUBLIC__/js/bui.js"></script>
	<!-- 删除用户 -->
	<script type="text/javascript">
		//消息消失
		function dispoint(messge) {
			BUI.Message.Show({
				msg: messge,
				icon: 'success',
				buttons: [],
				autoHide: true,
				autoHideDelay: 1000

			});
		}

		function show(hidden) {
			BUI.Message.Confirm('确认要删除？', function() {
				setTimeout(function() {
					$.ajax({
						type: 'get',
						url: "<?php echo Url('Place/delCommager','id='); ?>" + hidden,
						success: function(msg) {
							dispoint("删除成功！");
							location.reload();
						}
					});

					//BUI.Message.Alert('这只是简单的错误信息','error');
				});

			}, 'question');
		}
	</script>
	<!-- 编辑和添加用户js -->
	<script type="text/javascript">
		var Overlay = BUI.Overlay;
		//添加楼层信息
		function addFloor() {
			var dialog = new Overlay.Dialog({
				title: '添加楼层信息',
				width: 450,
				height: 250,
				closeAction: 'destroy', //每次关闭dialog释放
				contentId: 'addFloor1',
				buttons: [{
					text: '保存',
					elCls: 'button button-primary',
					handler: function() {
						var campus_id = $("#campus_ids").val();
						var building_id = $('#building_id').val();
						var floor_name = $("#floor_name").val();
						//alert(building_id);return;
						$.post("<?php echo Url('Place/ajaxAddFloor'); ?>", {
							'campus_id': campus_id,
							'floor_name': floor_name,
							'building_id': building_id
						}, function(data) {
							if(data == 'ok') {
								dispoint("添加楼层信息成功");
								dialog.close();
								location.reload();
							} else {
								dispoint("添加楼层信息失败");
							}
						})
					}
				}, {
					text: '取消',
					elCls: 'button',
					handler: function() {
						this.close();
					}
				}]
			});
			dialog.show();
		}
		//修改楼层信息
		function ediFloor(f_name, id, campus_id, floor_img_X, floor_img_Y,magnification) {
			//alert(realWidth);
			var sec_id = campus_id;
			var sec_obj = $("#campus_id1");
			jsSelectIsExitItem(sec_obj, sec_id); //自定义函数
			$("#floor_name1").val(f_name);
			$("#magnification").val(magnification);
			//   $("#floor_img_Y1").val(floor_img_Y);
			var dialog = new Overlay.Dialog({
				title: '修改楼层信息',
				width: 450,
				height: 300,
				closeAction: 'destroy', //每次关闭dialog释放
				contentId: 'ediFloor1',
				buttons: [{
					text: '提交修改',
					elCls: 'button button-primary',
					handler: function() {
						//  var floor_img_X   = $("#floor_img_X1").val();
						//  var floor_img_Y  = $("#floor_img_Y1").val();
						var floor_name1 = $('#floor_name1').val();
						var building_id = $('#building_id2').val();
						var campus_id = $('#campus_id1').val();
						var floor_name = $('#floor_name1').val();
						var magnification = $("#magnification").val();
						$.post("<?php echo Url('Place/ajaxEdiFloor'); ?>", {
							'id': id,
							'campus_id': campus_id,
							'building_id': building_id,
							'floor_name': floor_name,
							'magnification' : magnification
						}, function(data) {
							if(data == 'ok') {
								dispoint("修改楼层信息成功");
								dialog.close();
								location.reload();
							} else {
								dispoint("修改楼层信息失败");
							}
						})
					}
				}, {
					text: '取消',
					elCls: 'button',
					handler: function() {
						this.close();
					}
				}]
			});
			dialog.show();
		}

		function upload(floor_name, building_id, id, campus_id) {
			$("#building_id_up").val(building_id);
			$("#floor_id_up").val(id);
			$("#campus_id_up").val(campus_id);
			var dialog = new Overlay.Dialog({
				title: '添加楼层地图',
				width: 500,
				height: 300,
				closeAction: 'destroy', //每次关闭dialog释放
				contentId: 'upload1',
				buttons: [{
					text: '取消',
					elCls: 'button',
					handler: function() {
						this.close();
					}
				}]
			});
			dialog.show();
		}

		// 1.判断select选项中 是否存在Value="paraValue"的Item  
		function jsSelectIsExitItem(objSelect, objItemValue) {
			for(var i = 0; i < objSelect[0].length; i++) {
				if(objSelect[0][i].value == objItemValue) {
					objSelect[0][i].selected = true;
					break;
				}
			}

		}

		$('#campus_ids').click(function() {
			getbuildingajax();
		})
		$('#campus_id1').click(function() {
			getbuildingajaxs();
		})
		$(function() {
			//getbuildingajax();
			getbuildingajaxs();
		})
		$(function() {
			getbuildingajax();
			//getbuildingajaxs();
		})

		function getbuildingajax() {

			$id = $('#campus_ids').val();
			//alert($id);
			$building_id = $('#building_id');
			$building_id.empty();
			$.ajax({
				type: "post",
				url: "<?php echo Url('Place/getbuilding'); ?>",
				dataType: 'json',
				data: {
					'id': $id
				},
				async: true,
				success: function(result) {
					if(result) {
						$.each(result, function(index, array) {

							var option = "<option value='" + array['id'] + "'>" + array['building_name'] + "</option>";
							$building_id.append(option);
						});
					}
				}
			});
		}
		//
		function getbuildingajaxs() {

			$id = $('#campus_id1').val();
			//alert($id);
			$building_ids = $('#building_id2');
			$building_ids.empty();
			$.ajax({
				type: "post",
				url: "<?php echo Url('Place/getbuildings'); ?>",
				dataType: 'json',
				data: {
					'id': $id
				},
				async: true,
				success: function(result) {
					if(result) {
						$.each(result, function(index, array) {

							var option = "<option value='" + array['id'] + "'>" + array['building_name'] + "</option>";
							$building_ids.append(option);
						});
					}
				}
			});
		}
		//删除楼层
		function deletefloor(id) {
			BUI.Message.Confirm('确认要删除？', function() {
				setTimeout(function() {
					$.ajax({
						type: "post",
						url: "<?php echo Url('Place/deletefloor'); ?>",
						async: true,
						data: {
							'id': id
						},
						dataType: 'json',
						success: function(re) {
							if(re) {
								dispoint("删除成功！");
								location.reload();
							}
						}
					});

					//BUI.Message.Alert('这只是简单的错误信息','error');
				});

			}, 'question');

		}
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
<script
	src="__PUBLIC__/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script
	src="__PUBLIC__/bower_components/metisMenu/dist/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="__PUBLIC__/dist/js/sb-admin-2.js"></script>

</body>

</html>