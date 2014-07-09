<?php if(isset($_REQUEST['data_key'])) echo "abc",$_REQUEST['data_key'];?>
<html>
	<head>
		<style type="text/css">
			body{ padding:20px;}
			a{ font-size:30px;}
		</style>

	</head>
	<body>
		<form action="" method="post">
			<label>Input: </label><input type="text" style="width: 300px" name="data_key">
			<input type="submit" value="Cal">

		</form>
		<img src="" onmouseover="alert('test')">
		<div style="background-image: url(javascript:alert('XSS'))"></div>
		<IMG SRC="javascript:alert('test2')">
		<!-- <a href="helloworld://192.168.1.96:8888/?data_key=1">test</a> -->
	</body>
</html>