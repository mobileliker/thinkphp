<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="/Public/static/css/public.css">
	<link rel="stylesheet" type="text/css" href="/Public/static/css/index.css">
</head>
<body>
	<div class="header">
	<a href="/index.php/admin/index/index">首页</a>
	<a href="<?php echo U('logout');?>">退出</a>
</div>
	<div class="left_nav">
	<dl>
		<dt>评论管理</dt>
		<dd><a class="link" href=<?php echo U("Admin/Message/show");?>>评论列表</a></dd>
		<dt>文章管理</dt>
		<dd><a class="link" href="/index.php/admin/article/add">增添文章</a></dd>
		<dd><a class="link" href="/index.php/admin/article/show">文章列表</a></dd>
		<dt>分类管理</dt>
		<dd><a class="link" href="/index.php/admin/category/add">增添分类</a></dd>
		<dd><a class="link" href="/index.php/admin/category/show">分类列表</a></dd>
	</dl>
</div>
	<div class="right_box">
		<p>Hello,<?php echo ($result["username"]); ?></p>
	</div>
</body>
</html>