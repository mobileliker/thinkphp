<?php if (!defined('THINK_PATH')) exit();?>

<!DOCTYPE html>
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
	<a href="">退出</a>
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
		<form action="/index.php/Admin/Article/create" method="post">
		题目：<input type="text" name="title"><br>
		标签：<input type="text" name="tag"><br>
		分类:
		<select name="category_id">
			<?php if(is_array($result)): foreach($result as $key=>$vo): ?><option value =<?php echo ($vo["id"]); ?>> <?php echo ($vo["category_name"]); ?></option><?php endforeach; endif; ?>
 		</select>
 		<br>
		<input type="hidden" name="user_id" value="1">
		排序：<input type="text" name="sort" value="50"><br>
		本文内容：
		<!-- 加载编辑器的容器 -->
		<div>
		    <script id="container" name="content" type="text/plain">
		        这里写你的初始化内容
		    </script>
		    <!-- 配置文件 -->
		    <script type="text/javascript" src="/Public/ueditor/utf8-php/ueditor.config.js"></script>
		    <!-- 编辑器源码文件 -->
		    <script type="text/javascript" src="/Public/ueditor/utf8-php/ueditor.all.js"></script>
		    <!-- 实例化编辑器 -->
		    <script type="text/javascript">
		        var ue = UE.getEditor('container');
		    </script>
	    </div>
	    <input type="submit">
	</form>
	</div>
</body>
</html>