<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:60:"G:\wamp64\www\ib5/application/index\view\account\xiugai.html";i:1504769887;s:59:"G:\wamp64\www\ib5/application/index\view\Public\header.html";i:1504771462;s:59:"G:\wamp64\www\ib5/application/index\view\Public\footer.html";i:1504769960;}*/ ?>
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
			<style>
			.select {
				opacity: 1.0
			}
			
			.unselect {
				opacity: 0.1
			}
			</style>

		</div>
		<div class="row" style="margin-left: 20%;">
			<div class="col-lg-6">
				<div class="panel panel-default">
					<div class="panel-heading">
						<b>修改密码</b>
					</div>
					<!-- /.panel-heading -->
					<div class="panel-body">
						<div class="dataTable_wrapper">
							<div id="dataTables-example_wrapper"
								class="dataTables_wrapper form-inline dt-bootstrap no-footer">
								<div class="row">
									<div class="col-sm-4">
										<div class="dataTables_length">
											<table>
												<tr>
													<td>原密码: <input type="password" id="password" /></td>
												</tr>
												<tr>
													<td>新密码: <input type="password" id="password1" /></td>
												</tr>
												<tr>
													<td>确认密码: <input type="password" id="password2" /></td>
												</tr>
												<tr>
													<td style="padding-top: 5px;"><input type="button"
														id="btn" value="提交"></td>
												</tr>
											</table>

										</div>
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

</div>
</form>
</div>

<script src="__PUBLIC__/js/jquery-1.8.3.min.js" type="text/javascript">
	
</script>
<script type="text/javascript">
	$(document).ready(function() {

		$("#checkedAll").click(function() {
			if ($(this).prop('checked')) { // 全选 
				$("input[name='checkbox_name']").each(function() {
					$(this).prop('checked', true);
				});
			} else { // 取消全选 
				$("input[name='checkbox_name']").each(function() {
					$(this).prop('checked', false);
					;
				});
			}
		});

	});

	// function link(){
	//      var checkedList = new Array();
	//      $("input[name='checkbox_name']:checked").each(function(){
	//          checkedList.push($(this).val());
	//      });
	//      alert(checkedList);
	//    }
</script>
<script src="__PUBLIC__/js/bui.js"></script>
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

	function dispoint_err(messge) {
		BUI.Message.Show({
			msg : messge,
			icon : 'error',
			buttons : [],
			autoHide : true,
			autoHideDelay : 3000

		});
	}

	function show(hidden) {
		BUI.Message.Confirm('确认要删除？', function() {
			setTimeout(function() {
				$.ajax({
					type : 'get',
					url : '__URL__/delFreerMac?id=' + hidden,
					success : function(msg) {
						if (msg == 'ok') {
							dispoint("删除成功！");
							location.reload();
						} else {
							dispoint("删除失败！");
						}

					}
				});

				//BUI.Message.Alert('这只是简单的错误信息','error');
			});

		}, 'question');
	}

	$('#btn').click(function() {
		// alert(123);return;
		$password = $('#password').val();
		$password1 = $('#password1').val();
		$password2 = $('#password2').val();
		$.ajax({
			type : 'post',
			url : '__URL__/ajaxupdatepassword',
			data : {
				'password' : $password,
				'password1' : $password1,
				'password2' : $password2
			},
			dataType : 'json',
			success : function(result) {
				if (result.msg == 3) {
					dispoint('老密码输入错误');
				} else if (result.msg == 2) {
					dispoint('两次密码输入不一致');
				} else if (result.msg == 1) {
					dispoint('密码修改成功');
					//   dialog.close();
				} else {
					dispoint('密码修改失败');
				}
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
<script
	src="__PUBLIC__/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script
	src="__PUBLIC__/bower_components/metisMenu/dist/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="__PUBLIC__/dist/js/sb-admin-2.js"></script>

</body>

</html>
