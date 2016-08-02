<!DOCTYPE html>
<html lang="zh-CN">
	<head>
		<?php //DGideas Server Status 1.2 ?>
		<?php $title="Server name" ?>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<meta name="renderer" content="webkit">
		<title><?php print($GLOBALS["title"]); ?></title>
	    <link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css">
	    <link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
	    <script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
	    <script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<style type="text/css">
		body { 
			padding-top: 70px;
			font-family: consolas,consola,微软雅黑light,微软雅黑;
		 }
		</style>
	</head>
	<body>
		<div class="container">
			<nav class="navbar navbar-inverse navbar-fixed-top">
			  <div class="container-fluid">
			    <div class="navbar-header">
			      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
					</button>
					<span class="glyphicon glyphicon-object-align-left navbar-brand" aria-hidden="true"></span> 
				<a class="navbar-brand"><?php print($GLOBALS["title"]); ?></a>
				</div>
				</div>
			</nav>
			<h1><?php print($GLOBALS["title"]); ?> >> Server Status</h1>
			<hr />
			<h2>System Temperature</h2>
			<pre><?php passthru('cat /sys/class/thermal/thermal_zone0/temp'); ?></pre>
			<h2>System Info</h2>
			<pre><?php passthru('uname -a'); ?><?php passthru('ver'); ?></pre>
			<h2>Disk Usage</h2>
			<pre><?php passthru('df -Th'); ?><?php passthru('systeminfo'); ?></pre>
			<h2>Process Info</h2>
			<pre><?php passthru('ps -e'); ?><?php passthru('tasklist'); ?></pre>
	</div>
	</body>
</html>
