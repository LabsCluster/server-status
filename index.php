<!DOCTYPE html>
<html lang="zh-CN">
	<head>
		<!--DGideas Server Status version 1.0-->
		<?php $title="Your Server Name" ?>
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
			font-family: 微软雅黑light,微软雅黑,方正细等线,方正等线,华文细黑,等线,黑体;
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
			      <a class="navbar-brand" href="#">Server Status</a>
			    </div>
						      <ul class="nav navbar-nav">
			        <li class="active"><a <?php //href="#" ?>><?php print($GLOBALS["title"]); ?><span class="sr-only">(current)</span></a></li>
			      </ul>
			  </div>
			</nav>
			<h1>System Release</h1>
			<pre>
			<?php passthru('uname -a'); ?>
			<?php passthru('ver'); ?>
			</pre>
			<h1>Disk Usage</h1>
			<pre>
			<?php passthru('df -h'); ?>
			<?php passthru('systeminfo'); ?>
			</pre>
			<h1>Process Info</h1>
			<pre>
			<?php passthru('ps -e'); ?>
			<?php passthru('tasklist'); ?>
			</pre>
	</div>
	</body>
</html>
