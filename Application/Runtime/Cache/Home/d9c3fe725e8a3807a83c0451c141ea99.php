<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="/Public/static/css/public.css">
	<link rel="stylesheet" type="text/css" href="/Public/static/css/home/frame.css">
</head>
<body>
		<div class="header">
		<p class="header_title">aa的个人博客</p>
		<div class="header_login_container">
			<a class="header_login" href=<?php echo U("Admin/login/login");?>>Sign in</a>
		</div>
	</div>
	<div class="nav">
		<ul>
			<li><a href=<?php echo U("index");?>>首页</a></li>
			<li><a href=<?php echo U("category");?>>分类</a></li>
		</ul>
	</div>
	<div>
		
	</div>
</body>
</html>