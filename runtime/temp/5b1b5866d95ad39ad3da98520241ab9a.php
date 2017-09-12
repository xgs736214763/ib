<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:62:"G:\wamp64\www\ib5/application/index\view\apposition\floor.html";i:1504769903;s:59:"G:\wamp64\www\ib5/application/index\view\Public\header.html";i:1504771462;s:59:"G:\wamp64\www\ib5/application/index\view\Public\footer.html";i:1504769960;}*/ ?>
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
					<b>设备位置标注</b>
				</div>
				<!-- /.panel-heading -->
				<div class="panel-body">
					<div class="dataTable_wrapper">
						<div id="dataTables-example_wrapper"
							class="dataTables_wrapper form-inline dt-bootstrap no-footer">
							<div class="row">

								<div class="col-sm-6">
									<form action="<?php echo Url('Apposition/floor'); ?>" method="get">
										<div class="dataTables_filter">
											<label>选择广场:</label> <select name="campus_id" id="campus_id"
												class="required">
												<option value="">请选择广场</option> <?php if(is_array($squarelist) || $squarelist instanceof \think\Collection || $squarelist instanceof \think\Paginator): $i = 0; $__LIST__ = $squarelist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
												<option value="<?php echo $vo['id']; ?>">
															<?php echo $vo['campus_name']; ?>
														</option> <?php endforeach; endif; else: echo "" ;endif; ?>
											</select>

											<button class='btn btn-primary'>查询</button>

										</div>
									</form>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									<table
										class="table table-striped table-bordered table-hover dataTable no-footer">
										<thead>
											<tr role="row">
												<!-- <th style="width: 30px;text-align: center;"  >
                                                <input type="checkbox" name="checkedAll" id="checkedAll"/>
                                            </th> -->
												<th tabindex="0" style="width: 40px; text-align: center;">所属城市</th>
												<th style="width: 60px; text-align: center;">广场名称</th>
												<th style="width: 40px; text-align: center;">楼层名称</th>
												<th tabindex="0" style="width: 40px; text-align: center;">操作</th>

											</tr>
										</thead>
										<tbody>
											<?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
											<tr class="gradeA odd" role="row">
												<td><?php echo $vo['location_name']; ?></td>
												<td><?php echo $vo['campus_name']; ?></td>
												<td><?php echo $vo['floor_name']; ?></td>
												<td><a
													href="<?php echo Url('Apposition/position'); ?>?floor_id=<?php echo $vo['id']; ?>&campus_id=<?php echo $vo['campus_id']; ?>&building_id=<?php echo $vo['building_id']; ?>">ap位置标注</a>
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

<!-- 此节点内部的内容会在弹出框内显示,默认隐藏此节点-->
<div id="content" class="hide">
	<form class="form-horizontal">
		<div class="row">
			<div class="control-group span8">
				<label class="control-label" style="padding-top: 0px;">登陆名：</label>
				<div class="controls">
					<input type="text" id="username" name="username"
						class="input-normal control-text" style="height: 30px;">
				</div>
			</div>
			<!-- <div class="control-group span8">
            <label class="control-label" style=" padding-top: 0px;">登陆密码：</label>
            <div class="controls">
              <input type="text"  name="password" class="input-normal control-text" style="height:30px;">
            </div>
          </div> -->
			<div class="control-group span8">
				<label class="control-label" style="padding-top: 0px;">登陆密码：</label>
				<div class="controls">
					<input type="text" name='passwd' class="input-normal control-text"
						style="height: 30px;">
				</div>
			</div>
		</div>
	</form>
</div>

<script src="public/js/jquery-1.8.3.min.js" type="text/javascript">
	
</script>
<script type="text/javascript">
	$(function() {
		$location_id = $('#pro').val();
		$city = $('#city');
		$city.empty();
		$
				.ajax({
					type : "post",
					url : "__URL__/ajaxGetAreasByCityId",
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

											var option = "<option value='" + array['location_id'] + "'>"
													+ array['location_name']
													+ "</option>";
											$city.append(option);
										});
					}
				});
	})
	$('#pro')
			.click(
					function() {
						$location_id = $('#pro').val();
						$city = $('#city');
						$city.empty();
						$
								.ajax({
									type : "post",
									url : "__URL__/ajaxGetAreasByCityId",
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

															var option = "<option value='" + array['location_id'] + "'>"
																	+ array['location_name']
																	+ "</option>";
															$city
																	.append(option);
														});
									}
								});
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
<script
	src="__PUBLIC__/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script
	src="__PUBLIC__/bower_components/metisMenu/dist/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="__PUBLIC__/dist/js/sb-admin-2.js"></script>

</body>

</html>
