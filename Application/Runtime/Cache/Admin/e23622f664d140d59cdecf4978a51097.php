<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="/Public/static/css/frame.css">
	<link rel="stylesheet" type="text/css" href="/Public/static/css/public.css">
	<link rel="stylesheet" type="text/css" href="/Public/static/css/showArticle.css">
</head>
<body>
 	<div class="box">
 		<h3><?php echo ($item["title"]); ?></h3>
		<?php echo htmlspecialchars_decode($item['content']);?>
		<a href="/index.php/Admin/Article/edit/id/<?php echo ($item["id"]); ?>">编辑</a>
		<a href="/index.php/Admin/Article/delete/id/<?php echo ($item["id"]); ?>">删除</a>
		<div>上一篇:</div>
		<div>下一篇:</div>
 	</div>
</body>

</html>