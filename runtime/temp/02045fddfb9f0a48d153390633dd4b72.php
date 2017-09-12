<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:57:"G:\wamp64\www\ib5/application/index\view\login\index.html";i:1504769953;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">

<title>奕通iBeacon运营管理系统</title>

<!-- Bootstrap Core CSS -->
<link
	href="__PUBLIC__/bower_components/bootstrap/dist/css/bootstrap.min.css"
	rel="stylesheet">

<!-- MetisMenu CSS -->
<link
	href="__PUBLIC__/bower_components/metisMenu/dist/metisMenu.min.css"
	rel="stylesheet">

<!-- Custom CSS -->
<link href="__PUBLIC__/dist/css/sb-admin-2.css" rel="stylesheet">

<!-- Custom Fonts -->
<link
	href="__PUBLIC__/bower_components/fontawesome/css/font-awesome.min.css"
	rel="stylesheet" type="text/css">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

	<div class="container">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="login-panel panel panel-default">
					<div class="panel-heading">
						<h2 class="panel-title">管理员登录</h2>
					</div>
					<div class="panel-body">
						<form method="POST" action="<?php echo Url('index/login/dologin'); ?>"
							role="form">
							<fieldset>
								<div class="form-group">
									<input class="form-control" id="txtUserName" placeholder="用户名"
										name="usernamefld" type="text" autofocus>
								</div>
								<div class="form-group">
									<input class="form-control" id="txtUserPass" placeholder="密　码"
										name="passwordfld" type="password" value="">
								</div>
								<div class="checkbox">
									<label> <input name="remember" id="chkRememberPass"
										type="checkbox" value="Remember Me">Remember Me
									</label>
								</div>
								<button onclick="userLogin()" id="subLogin" type="submit"
									class="btn btn-lg btn-success btn-block">登 陆</button>

							</fieldset>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script language="javascript" type="text/javascript">
		function addCookie(name, value, days, path) {
			/**添加设置cookie**/
			var name = escape(name);
			var value = escape(value);
			var expires = new Date();
			expires.setTime(expires.getTime() + days * 3600000 * 24);
			//path=/，表示cookie能在整个网站下使用，path=/temp，表示cookie只能在temp目录下使用  
			path = path == "" ? "" : ";path=" + path;
			//GMT(Greenwich Mean Time)是格林尼治平时，现在的标准时间，协调世界时是UTC  
			//参数days只能是数字型  
			var _expires = (typeof days) == "string" ? "" : ";expires="
					+ expires.toUTCString();
			document.cookie = name + "=" + value + _expires + path;
		}

		function getCookieValue(name) {
			/**获取cookie的值，根据cookie的键获取值**/
			//用处理字符串的方式查找到key对应value  
			var name = escape(name);
			//读cookie属性，这将返回文档的所有cookie  
			var allcookies = document.cookie;
			//查找名为name的cookie的开始位置  
			name += "=";
			var pos = allcookies.indexOf(name);
			//如果找到了具有该名字的cookie，那么提取并使用它的值  
			if (pos != -1) { //如果pos值为-1则说明搜索"version="失败  
				var start = pos + name.length; //cookie值开始的位置  
				var end = allcookies.indexOf(";", start); //从cookie值开始的位置起搜索第一个";"的位置,即cookie值结尾的位置  
				if (end == -1)
					end = allcookies.length; //如果end值为-1说明cookie列表里只有一个cookie  
				var value = allcookies.substring(start, end); //提取cookie的值  
				return (value); //对它解码        
			} else { //搜索失败，返回空字符串  
				return "";
			}
		}

		function deleteCookie(name, path) {
			/**根据cookie的键，删除cookie，其实就是设置其失效**/
			var name = escape(name);
			var expires = new Date(0);
			path = path == "" ? "" : ";path=" + path;
			document.cookie = name + "=" + ";expires=" + expires.toUTCString()
					+ path;
		}

		/**实现功能，保存用户的登录信息到cookie中。当登录页面被打开时，就查询cookie**/
		window.onload = function() {
			var userNameValue = getCookieValue("userName");
			document.getElementById("txtUserName").value = userNameValue;
			var userPassValue = getCookieValue("userPass");
			document.getElementById("txtUserPass").value = userPassValue;
			var objChk = document.getElementById("chkRememberPass");
			objChk.checked = "checked";
		}

		function userLogin() {
			/**用户登录，其中需要判断是否选择记住密码**/
			//简单验证一下  
			var userName = document.getElementById("txtUserName").value;
			if (userName == '') {
				alert("请输入用户名。");
				return;
			}
			var userPass = document.getElementById("txtUserPass").value;
			if (userPass == '') {
				alert("请输入密码。");
				return;
			}
			var objChk = document.getElementById("chkRememberPass");
			if (objChk.checked) {
				//添加cookie  

				addCookie("userName", userName, 7, "/");
				addCookie("userPass", userPass, 7, "/");
				// alert("记住了你的密码登录。");  

			} else {
				//alert("不记密码登录。");  

			}
		}
	</script>

	<!-- jQuery -->
	<script src="public/bower_components/jquery/dist/jquery.min.js"></script>

	<!-- Bootstrap Core JavaScript -->
	<script
		src="public/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

	<!-- Metis Menu Plugin JavaScript -->
	<script src="public/bower_components/metisMenu/dist/metisMenu.min.js"></script>

	<!-- Custom Theme JavaScript -->
	<script src="public/dist/js/sb-admin-2.js"></script>

</body>

</html>