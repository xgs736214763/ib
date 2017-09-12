<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:61:"G:\wamp64\www\ib5/application/index\view\account\members.html";i:1504842393;s:59:"G:\wamp64\www\ib5/application/index\view\Public\header.html";i:1504773227;}*/ ?>
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
					<b>建筑管理</b>
				</div>
				<!-- /.panel-heading -->
				<div class="panel-body">
					<div class="dataTable_wrapper">
						<div id="dataTables-example_wrapper"
							class="dataTables_wrapper form-inline dt-bootstrap no-footer">
							<div class="row">

								<div class="col-sm-6">
									<form action="<?php echo Url('Place/building'); ?>" method="get">
										<div class="dataTables_filter" style="float: left;">
											<label>建筑名称: <input type="search" name="name"
												class="form-control input-sm" placeholder="">
											</label>
											<button class='btn btn-primary'>查询</button>
										</div>
									</form>
									<button class='btn btn-success'
										style="float: left; margin-left: 6px" onclick="addbuilding()">添加建筑</button>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									<table id="yao_table"
										class="table table-striped table-bordered table-hover dataTable no-footer">
										<thead>
											<tr role="row">
												<th style="text-align: center;">用户名</th>
												<th style="text-align: center;">管理员类型</th>
												<th style="text-align: center;">操作</th>

											</tr>
										</thead>
										<tbody>
											<?php if(is_array($lists) || $lists instanceof \think\Collection || $lists instanceof \think\Paginator): $i = 0; $__LIST__ = $lists;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
											<tr class="gradeA odd" role="row">
												<td style="text-align: center;"><?php echo $vo['loginName']; ?></td>
												<td style="text-align: center;"><?php if($vo['mark'] == 1): ?> <span style="color: red">超级管理员</span>
													<?php else: ?> 管理员 <?php endif; ?>
												</td> <?php if($vo['mark'] != 1): ?>
												<td><a class="eduitbuilding"
													href="<?php echo url('account/rules'); ?>?id=<?php echo $vo['id']; ?>">分配权限</a> |
													<a class="deletebuilding" href="javascript:void(0)"
													onclick="deleteadmin('<?php echo $vo['id']; ?>')">删除</a></td> <?php else: ?>
												<td><span style="color: red">超级管理员不可操作</span></td> <?php endif; ?>
											</tr>
											<?php endforeach; endif; else: echo "" ;endif; ?>

										</tbody>
									</table>
								</div>
							</div>

							<div class="row">
								<div class="col-sm-12">
									<div class='pages'><?php echo $lists->render(); ?></div>
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
<script src="__PUBLIC__/js/jquery-1.8.3.min.js" type="text/javascript"></script>
<script src="__PUBLIC__/js/bui.js"></script>
<script type="text/javascript">
	var Overlay = BUI.Overlay;


	function deleteadmin(id) {
		BUI.Message.Confirm('确认要删除？', function() {
			setTimeout(function() {
				$.ajax({
					type : 'post',
					url : '<?php echo Url("Account/ajaxdeleteadnin"); ?>',
					data : {
						'id' : id
					},
					dataType : 'json',
					success : function(msg) {
						if(msg.status =='success'){
							dispoint("删除成功！");
							location.reload();
						}else{
							dispoint("删除失败！");
						}
						
					}
				});

				//BUI.Message.Alert('这只是简单的错误信息','error');
			});

		}, 'question');
	}
</script>

<!-- 删除用户 -->
<script type="text/javascript">
	//消息消失
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
<include file="Public:footer" />