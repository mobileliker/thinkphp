<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="/Public/static/css/public.css">
	<link rel="stylesheet" type="text/css" href="/Public/static/css/index.css">
	<script type="text/javascript" src="/Public/static/js/jquery-2.2.2.min.js"></script>
	<script type="text/javascript">
	
	</script>
</head>
<body>
	<div class="header">
	<a href="/index.php/admin/index/index">首页</a>
	<a href="<?php echo U('logout');?>">退出</a>
</div>
	<div class="left_nav">
	<dl>
		<dt>文章管理</dt>
		<dd><a class="link" href="/index.php/admin/article/add">增添文章</a></dd>
		<dd><a class="link" href="/index.php/admin/article/show">文章列表</a></dd>
		<dt>分类管理</dt>
		<dd><a class="link" href="/index.php/admin/category/add">增添分类</a></dd>
		<dd><a class="link" href="/index.php/admin/category/show">分类列表</a></dd>
	</dl>
</div>
	<div class="right_box">
		<form action="/index.php/Admin/Category\create" method="post">
		分类名：<input type="text" name="category_name"><br>
		排序：<input type="text" name="sort" value="50"><br>
		<input type="hidden" value=<?php echo (session('user_id')); ?> name="user_id">
		<input type="submit" value="提交"><br>
	</form>
	</div>
</body>
</html>