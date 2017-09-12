<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:58:"G:\wamp64\www\ib5/application/index\view\place\square.html";i:1504769781;s:59:"G:\wamp64\www\ib5/application/index\view\Public\header.html";i:1504773227;s:59:"G:\wamp64\www\ib5/application/index\view\Public\footer.html";i:1504769960;}*/ ?>
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
					<b>广场管理</b>
				</div>
				<!-- /.panel-heading -->
				<div class="panel-body">
					<div class="dataTable_wrapper">
						<div id="dataTables-example_wrapper"
							class="dataTables_wrapper form-inline dt-bootstrap no-footer">
							<div class="row">

								<div class="col-sm-6">
									<form action="<?php echo Url('index/Place/square'); ?>" method="get">
										<div class="dataTables_filter" style="float: left;">
											<label>广场名称: <input type="search" name="name"
												class="form-control input-sm" placeholder="">
											</label>
											<button class='btn btn-primary'>查询</button>
										</div>
									</form>
									<button class='btn btn-success'
										style="float: left; margin-left: 6px" onclick="addsquare()">添加广场</button>
								</div>
								<div class="row">
									<div class="col-sm-12">
										<table id=""
											class="table table-striped table-bordered table-hover dataTable no-footer">
											<thead>
												<tr role="row">
													<th tabindex="0" style="width: 40px; text-align: center;">所属城市</th>
													<th style="width: 80px; text-align: center;">广场名称</th>

													<th tabindex="0" style="width: 80px; text-align: center;">ap数量</th>

													<th tabindex="0" style="width: 80px; text-align: center;">操作</th>

												</tr>
											</thead>
											<tbody>
												<?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
												<tr class="gradeA odd" role="row">
													<td><?php echo $vo['location_name']; ?></td>
													<td><?php echo $vo['campus_name']; ?></td>
													<td><?php if(!(empty($vo['cnt']) || (($vo['cnt'] instanceof \think\Collection || $vo['cnt'] instanceof \think\Paginator ) && $vo['cnt']->isEmpty()))): ?> <?php echo $vo['cnt']; else: ?>0 <?php endif; ?></td>
													<td><a href="javascript:void(0)"
														onclick="eduitsquare('<?php echo $vo['id']; ?>','<?php echo $vo['campus_name']; ?>','<?php echo $vo['campus_address']; ?>','<?php echo $vo['location_id']; ?>','<?php echo $vo['parent_location_id']; ?>','<?php echo $vo['ip']; ?>','<?php echo $vo['dataport']; ?>','<?php echo $vo['rtcport']; ?>')">编辑</a>
														| <a href="javascript:void(0)"
														onclick="deletesquare('<?php echo $vo['id']; ?>')">删除</a></td>
												</tr>
												<?php endforeach; endif; else: echo "" ;endif; ?>

											</tbody>
										</table>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12">
										<div class='pages'><?php echo $list->render(); ?></div>
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
	<!-- 添加广场信息-->
	<div id="addsquare" class="hide">
		<form class="form-horizontal">
			<div class="row">
				<div class="control-group span8">

					<label class="control-label" style="width: 80px; padding-top: 0px;">广场名称：</label>
					<div class="controls">
						<input type="text" style="width: 200px; height: 30px;"
							name="square" id="square" class="form-control input-sm" />
					</div>
					<!--   <div class="control-group span11">

                  <label class="control-label" style="width: 80px; padding-top: 0px;">服务器IP：</label>
                  <div class="controls">
                      <input type="text" style="width:200px;height:30px;"  name="ip" id="ip"  class="form-control input-sm"/>
                  </div>
              </div>
              <div class="control-group span11">

                  <label class="control-label" style="width: 80px; padding-top: 0px;">数据端口：</label>
                  <div class="controls">
                      <input type="text" style="width:200px;height:30px;" id="dataport" placeholder="数据端口" name="dataport"  class="form-control input-sm"/>
                  </div>
              </div>
              <div class="control-group span11">

                  <label class="control-label" style="width: 80px; padding-top: 0px;">配置端口：</label>
                  <div class="controls">
                      <input type="text" style="width:200px;height:30px;" id="rtcport" placeholder="配置端口号" name="rtcport"  class="form-control input-sm"/>
                  </div>
              </div> -->
					<div class="control-group span12">
						选择地区： <select name="pro" id="pro">
							<option>请选择</option> <?php if(is_array($pro) || $pro instanceof \think\Collection || $pro instanceof \think\Paginator): $i = 0; $__LIST__ = $pro;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>

							<option value="<?php echo $vo['location_id']; ?>">
										<?php echo $vo['location_name']; ?>
									</option> <?php endforeach; endif; else: echo "" ;endif; ?>

						</select> <select name="city" id="city">
						</select>
					</div>
					<div class="control-group span8">

						<label class="control-label"
							style="width: 80px; padding-top: 0px;">详细地址：</label>
						<div class="controls">
							<input type="text" style="width: 200px; height: 30px;"
								name="campus_address" id="campus_address"
								class="form-control input-sm" />
						</div>
					</div>
		</form>
	</div>

	<!--编辑广场信息-->
	<div id="eduitsquare" class="hide">
		<form class="form-horizontal">
			<div class="row">
				<div class="control-group span8">

					<label class="control-label" style="width: 80px; padding-top: 0px;">广场名称：</label>
					<div class="controls">
						<input type="text" name="square1"
							style="width: 220px; height: 30px;" id="square1"
							class="input-normal control-text" />
					</div>
					<div class="control-group span11">

						<label class="control-label"
							style="width: 80px; padding-top: 0px;">服务器IP：</label>
						<div class="controls">
							<input type="text" style="width: 200px; height: 30px;" name="ip1"
								id="ip1" class="form-control input-sm" />
						</div>
					</div>
					<div class="control-group span11">

						<label class="control-label"
							style="width: 80px; padding-top: 0px;">数据端口：</label>
						<div class="controls">
							<input type="text" style="width: 200px; height: 30px;" id="port1"
								name="port1" class="form-control input-sm" />
						</div>
					</div>
					<div class="control-group span11">

						<label class="control-label"
							style="width: 80px; padding-top: 0px;">配置端口：</label>
						<div class="controls">
							<input type="text" style="width: 200px; height: 30px;"
								id="rtcport1" name="rtcport1" class="form-control input-sm" />
						</div>
					</div>
					<div class="control-group span12">
						选择地区: <select name="pro1" id="pro1"> <?php if(is_array($pro) || $pro instanceof \think\Collection || $pro instanceof \think\Paginator): $i = 0; $__LIST__ = $pro;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>

							<option value="<?php echo $vo['location_id']; ?>">
											<?php echo $vo['location_name']; ?>
										</option> <?php endforeach; endif; else: echo "" ;endif; ?>

						</select> <select name="city1" id="city1">
						</select>
					</div>
					<div class="control-group span8">

						<label class="control-label"
							style="width: 80px; padding-top: 0px;">详细地址：</label>
						<div class="controls">
							<input type="text" style="width: 220px; height: 30px;"
								name="campus_address1" id="campus_address1"
								class="input-normal control-text" />
						</div>
					</div>
				</div>
		</form>
	</div>

	<script src="__PUBLIC__/js/jquery.js" type="text/javascript"></script>
	<script src="__PUBLIC__/js/bui.js"></script>
	<script type="text/javascript">
		//添加建筑
		var Overlay = BUI.Overlay;

		function addsquare() {
			var dialog = new Overlay.Dialog({
				title : '新增广场信息',
				width : 550,
				height : 400,
				closeAction : 'destroy', //每次关闭dialog释放
				contentId : 'addsquare',
				buttons : [ {
					text : '确定',
					elCls : 'button button-primary',
					handler : function() {
						$location_id = $('#city').val();
						$campus_name = $('#square').val();
						$campus_address = $('#campus_address').val();
						$ip = $('#ip').val();
						$port = $('#dataport').val();
						$rtcport = $('#rtcport').val();
						$.post('<?php echo Url("index/Place/ajaxsquare"); ?>', {
							'location_id' : $location_id,
							'campus_name' : $campus_name,
							'ip' : $ip,
							'rtcport' : $rtcport,
							'dataport' : $port,
							'campus_address' : $campus_address
						}, function(data) {
							if (data) {
								dispoint("新增广场信息成功");
								dialog.close();
								location.reload();
							} else {
								dispoint("新增广场信息失败");
							}
						})
					}
				}, {
					text : '取消',
					elCls : 'button',
					handler : function() {
						this.close();
					}
				} ]
			});
			dialog.show();
		}

		//编辑

		//编辑
		function eduitsquare(id, campus_name, campus_address, location_id,
				parent_location_id, ip, dataport, rtcport) {
			// alert(parent_location_id);
			$('#pro1').val(parent_location_id);
			getcity(parent_location_id, location_id);
			$('#city1').val(location_id);
			$('#square1').val(campus_name);
			$('#campus_address1').val(campus_address);
			$('#ip1').val(ip);
			$('#port1').val(dataport);
			$('#rtcport1').val(rtcport);
			var dialog = new Overlay.Dialog({
				title : '修改广场信息',
				width : 450,
				height : 400,
				closeAction : 'destroy', //每次关闭dialog释放
				contentId : 'eduitsquare',
				buttons : [ {
					text : '提交修改',
					elCls : 'button button-primary',
					handler : function() {
						$location_id = $('#city1').val();
						$campus_name = $('#square1').val();
						$campus_address = $('#campus_address1').val();
						$ip = $('#ip1').val();
						$port = $('#port1').val();
						$rtcport = $('#rtcport1').val();
						$.post("<?php echo Url('index/Place/ajaxeduitsquare'); ?>", {
							'id' : id,
							'campus_name' : $campus_name,
							'campus_address' : $campus_address,
							'ip' : $ip,
							'dataport' : $port,
							'rtcport' : $rtcport,
							'location_id' : $location_id
						}, function(data) {
							if (data) {
								dispoint("修改广场信息成功");
								dialog.close();
								location.reload();
							} else {
								dispoint("修改广场信息失败");
							}
						})
					}
				}, {
					text : '取消',
					elCls : 'button',
					handler : function() {
						this.close();
					}
				} ]
			});
			dialog.show();
		}

		//删除
		function deletesquare(id) {
			$.ajax({
				type : "post",
				url : "<?php echo Url('index/Place/ajaxdeletesquare'); ?>",
				async : true,
				dataType : 'json',
				data : {
					'id' : id
				},
				success : function(result) {
					if (result) {
						dispoint("删除广场信息成功");
						window.location.reload();
					}
				}
			});
		}

		$('#pro')
				.click(
						function() {
							$location_id = $('#pro').val();
							$city = $('#city');
							$city.empty();
							$
									.ajax({
										type : "post",
										url : "<?php echo Url('index/Place/ajaxGetAreasByCityId'); ?>",
										async : true,
										dataType : 'json',
										data : {
											'location_id' : $location_id
										},
										success : function(result) {
											$
													.each(
															result,
															function(index,
																	array) {

																var option = "<option value='" + array['location_id'] + "'>"
																		+ array['location_name']
																		+ "</option>";
																$city
																		.append(option);
															});
										}
									});
						})
		//
		$(function() {
			getcity();
		})

		$('#pro1').click(function() {
			getcity();
		})

		function getcity(parent_location_id, location_id) {
			if (parent_location_id) {
				$location_id = parent_location_id;
			} else {
				$location_id = $('#pro1').val();
			}
			if (location_id) {
				$location_ids = location_id;
			} else {
				$location_ids = '';
			}

			$city1 = $('#city1');
			$city1.empty();
			$
					.ajax({
						type : "post",
						url : "<?php echo Url('index/Place/ajaxGetAreasByCityId'); ?>",
						async : true,
						dataType : 'json',
						data : {
							'location_id' : $location_id
						},
						success : function(result) {
							$
									.each(
											result,
											function(index, array) {
												if (array['location_id'] == $location_ids) {
													var option = "<option selected='selected'  value='" + array['location_id'] + "'>"
															+ array['location_name']
															+ "</option>";
												} else {
													var option = "<option  value='" + array['location_id'] + "'>"
															+ array['location_name']
															+ "</option>";
												}

												$city1.append(option);
											});
						}
					});
		}

		function dispoint(messge) {
			BUI.Message.Show({
				msg : messge,
				icon : 'success',
				buttons : [],
				autoHide : true,
				autoHideDelay : 1000

			});
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