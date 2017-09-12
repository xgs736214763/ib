<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:59:"G:\wamp64\www\ib5/application/index\view\ibeacon\addap.html";i:1501214993;}*/ ?>
<!DOCTYPE html>
<html>

	<head lang="en">
		<meta charset="UTF-8">
		<title></title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<style type="text/css">
			body,
			html {
				margin: 0;
				padding: 0;
				box-sizing: border-box;
				font-family: "Microsoft YaHei";
				width: 100%;
				height: 100%;
				overflow: hidden;
			}
			
			input[type="text"],
			input[type="button"],
			input[type="submit"],
			input[type="reset"] {
				-webkit-appearance: none;
			}
			
			textarea {
				-webkit-appearance: none;
			}
			
			input,
			button,
			select,
			textarea {
				outline: none;
				border: 0;
			}
			
			.content {
				margin: 0 auto;
				margin-top: 10%;
			}
			
			.store {
				box-sizing: border-box;
				text-align: left;
				font-size: 1.2em;
				height: 1.5em;
				border-radius: 4px;
				border: 1px solid #c8cccf;
				color: #6a6f77;
				-web-kit-appearance: none;
				-moz-appearance: none;
				outline: 0;
				text-decoration: none;
			}
			
			.button {
				color: #fff;
				background-color: #5cb85c;
				display: inline-block;
				padding: 6px 12px;
				margin-top: 3%;
				margin-bottom: 0;
				font-size: 16px;
				font-weight: 400;
				text-align: center;
				vertical-align: inherit;
				cursor: pointer;
				width: 100%;
				border-radius: 4px;
				float: right;
				transition: all 1s ease;
				-moz-transition: all 1s ease;
				-webkit-transition: all 1s ease;
				-o-transition: all 1s ease;
			}
			
			.button:hover {
				background: #449d44;
			}
		</style>
		<script type="text/javascript" src="__PUBLIC__/js/jquery.js"></script>
		<script type="text/javascript">
		</script>
	</head>

	<body>
		<form action="" method="get">
			<table class="content">
				<tr style="display: none;">
					<td>
						<input type="text" name="location" id="location" value="<?php echo $_GET['mac']?>" />
						<input type="text" name="id" id="id" value="<?php echo $apinfo['id']; ?>" />
				</tr>
				<tr>
					<td>Ibeacon名称：</td>
					<td> <input type="text" name="ibname" id="ibname" class="store" value="<?php echo $apinfo['ibname']; ?>" /></td>
				</tr>
				<tr>
					<td>mac：</td>
					<td> <input type="text" name="mac" id="mac" class="store" value="<?php echo $apinfo['mac']; ?>" /></td>
				</tr>
				<tr>
					<td>ip：</td>
					<td> <input type="text" name="ip" id="ip" class="store" value="<?php echo $apinfo['ip']; ?>" /></td>
				</tr>
				<tr>
					<td>uuid：</td>
					<td> <input type="text" name="uuid" id="uuid" class="store" value="<?php echo $apinfo['uuid']; ?>" /></td>
				</tr>
				<tr>
					<td>major：</td>
					<td> <input type="text" name="major" id="major" class="store" value="<?php echo $apinfo['major']; ?>" /></td>
				</tr>
				<tr>
					<td>minor：</td>
					<td> <input type="text" name="minor" id="minor" class="store" value="<?php echo $apinfo['minor']; ?>" /></td>
				</tr>
				<tr>
					<td>厂商：</td>
					<td> <input type="text" name="vender" id="vender" class="store" value="<?php echo $apinfo['vender']; ?>" /></td>
				</tr>
				<tr>
					<td>位置X坐标：</td>
					<td> <input type="text" name="posX" id="posX" class="store" value="<?php echo $apinfo['posX']; ?>" /></td>
				</tr>
				<tr>
					<td>位置Y坐标：</td>
					<td> <input type="text" name="posY" id="posY" class="store" value="<?php echo $apinfo['posY']; ?>" /></td>
				</tr>
				<tr>
					<td><input type="button" id="btn" class="button" value='提交按钮' /></td>
				</tr>

			</table>
		</form>
		<script type="text/javascript">
			$('#btn').click(function() {
				var y = parent.document.getElementById('x').value;
				var x = parent.document.getElementById('y').value;
				$floorId = parent.document.getElementById('floor_id').value;
				$campus_id = parent.document.getElementById('campus_id').value;
				$building_id = parent.document.getElementById('building_id').value;
				$mac = $('#mac').val();
				$ibname = $('#ibname').val();
				$ip = $('#ip').val();
				$vender = $('#vender').val();
				$location = $('#location').val();
				$posX = $('#posX').val();
				$posY = $('#posY').val();
				$id = $('#id').val();
				$.ajax({
					type: "post",
					url: "__URL__/saveapinfo",
					async: true,
					data: {
						'x': x,
						'y': y,
						'mac': $mac,
						'ip': $ip,
						'vender': $vender,
						'floor_id': $floorId,
						'campus_id': $campus_id,
						'building_id': $building_id,
						'ibname': $ibname,
						'location': $location,
						'id': $id,
						'posX': $posX,
						'posY': $posY
					},
					dataType: 'json',
					success: function(date) {
						if(date.ibname) {
							alert('mac地址，或apname或ip和' + date.ibname + '重复');
							var index = parent.layer.getFrameIndex(window.name); //先得到当前iframe层的索引
							//parent.layer.close(index); //再执行关闭  
							//parent.location.reload();
							console.log(date);
						} else if(date.status == 1) {
							var index = parent.layer.getFrameIndex(window.name); //先得到当前iframe层的索引
							parent.layer.close(index); //再执行关闭
							//parent.location.reload();
						}
					}
				})
			})
		</script>
	</body>

</html>