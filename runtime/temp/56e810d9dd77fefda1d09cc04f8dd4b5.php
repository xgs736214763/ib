<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:55:"G:\wamp64\www\ib5/application/index\view\sys\basic.html";i:1501215066;s:59:"G:\wamp64\www\ib5/application/index\view\Public\header.html";i:1504771462;s:59:"G:\wamp64\www\ib5/application/index\view\Public\footer.html";i:1504769960;}*/ ?>
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

									<li>
										<a href="<?php echo Url('Account/rules'); ?>">分配权限</a>

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
						<b>系统配置</b><b style="padding-left: 90px;">
                            <input type="button" class="button button-success" id="success" value="触发"/></b>
					</div>
					<!-- /.panel-heading -->
					<div class="panel-body">
						<div class="dataTable_wrapper">
							<div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
								<div class="row">

									<div class="row">
										<div class="col-sm-12">

											<table class="table table-striped table-bordered table-hover dataTable no-footer">
												<thead>
													<tr role="row">
														<th style="text-align: center;">配置名称</th>
														<th style="text-align: center;">对应值</th>
														<th style="text-align: center;">描述</th>
														<th style="text-align: center;">操作</th>

													</tr>
												</thead>
												<tbody>
													<?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
														<tr class="gradeA odd" role="row">
															<td style="text-align: center;">
																<?php echo $vo['name']; ?>
															</td>
															<td style="text-align: center;">
																<?php echo $vo['value']; ?>
															</td>
															<td style="text-align: center;">
																<?php echo $vo['temp']; ?>
															</td>
															<td style="text-align: center;">
																<a class="eduitsys" href="javascript:void(0)" onclick="eduitsys('<?php echo $vo['name']; ?>','<?php echo $vo['value']; ?>','<?php echo $vo['temp']; ?>')">编辑</a>
																|
																<a class="deletebuilding" href="javascript:void(0)" onclick="deletesys('<?php echo $vo['name']; ?>')">删除</a>
															</td>

														</tr>
														<?php endforeach; endif; else: echo "" ;endif; ?>

												</tbody>
											</table>
										</div>
									</div>

									<div class="row">
										<div class="col-sm-12">
											<div class='pages'></div>
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

		<!-- 编辑配置-->
		<div id="eduitsys" class="hide">
			<!--     action+"__URL__/upload" enctype="multipart/form-data" method="post" -->
			<form class="form-horizontal">
				<div class="row">
					<div class="control-group span10">
						<label class="control-label" style=" padding-top: 0px;width:140px">配置名称：</label>
						<div class="controls">
							<input type="text" id="name" class="input-normal control-text" readonly="readonly" style="height:30px;">
						</div>
					</div>
					<div class="control-group span8">
						<label class="control-label" style=" padding-top: 0px;width:140px">对应值：</label>
						<div class="controls">
							<input type="text" id="value" class="input-normal control-text" style="height:30px;">
						</div>
					</div>
					<div class="control-group span8">
						<label class="control-label" style=" padding-top: 0px;width:140px">描述：</label>
						<div class="controls">
							<input type="text" id="temp" class="input-normal control-text" style="height:30px;">
						</div>
					</div>
					<div class="control-group span8" style="display: none;">
						<label class="control-label" style=" padding-top: 0px;width:140px">ID：</label>
						<div class="controls">
							<input type="text" id="id" class="input-normal control-text">
						</div>
					</div>

				</div>
			</form>
		</div>

		<script src="__PUBLIC__/js/jquery-1.8.3.min.js" type="text/javascript">
		</script>
		<script src="__PUBLIC__/js/bui.js"></script>
		<script type="text/javascript">
			var Overlay = BUI.Overlay;
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
			//编辑
			function eduitsys(name, value, temp) {
				$('#name').val(name);
				$('#value').val(value);
				$('#temp').val(temp);
				var dialog = new Overlay.Dialog({
					title: '修改配置信息',
					width: 450,
					height: 400,
					closeAction: 'destroy', //每次关闭dialog释放
					contentId: 'eduitsys',
					buttons: [{
						text: '提交修改',
						elCls: 'button button-primary',
						handler: function() {
							$id = $('#id').val();
							$name = $('#name').val();
							$value = $('#value').val();
							$temp = $('#temp').val();
							$.post('__URL__/ajaxeduitsys', {
								'name': $name,
								'value': $value,
								'temp': $temp
							}, function(data) {
								if(data) {
									dispoint("修改配置信息成功");
									dialog.close();
									location.reload();
								} else {
									dispoint("修改配置信息失败");
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

			function deletesys(name) {
				BUI.Message.Confirm('确认要删除？', function() {
					setTimeout(function() {
						$.ajax({
							type: 'post',
							url: '__URL__/ajaxdeletesys',
							data: {
								'name': name
							},
							dataType: 'json',
							success: function(msg) {
								dispoint("删除成功！");
								location.reload();
							}
						});

						//BUI.Message.Alert('这只是简单的错误信息','error');
					});

				}, 'question');
			}
			//重置
			$('#success').click(function() {
				$.ajax({
					type: 'post',
					url: '__URL__/udpresert',
					success: function(result) {
						dispoint("触发成功！");
					}
				})
			})
		</script>

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
							url: '__URL__/delCommager?id=' + hidden,
							success: function(msg) {
								dispoint("删除成功！");
								location.reload();
							}
						});

						//BUI.Message.Alert('这只是简单的错误信息','error');
					});

				}, 'question');
			}

			$('.yaodel_btnShow').on('click', function() {
				var hidden = $(this).parent().prev().find("input").val();
				show(hidden);
			});
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