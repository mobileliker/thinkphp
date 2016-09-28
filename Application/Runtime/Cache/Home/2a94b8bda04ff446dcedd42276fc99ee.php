<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="/Public/static/css/public.css">
	<link rel="stylesheet" type="text/css" href="/Public/static/css/home/frame.css">
	<link rel="stylesheet" type="text/css" href="/Public/static/css/home/index.css">
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
	<div class="box">
		<div class="box_left">
			<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="box_left_article">
				<h3 class="title"><?php echo ($vo["title"]); ?></h3>
				<p class="author">作者：<span><?php echo ($user["username"]); ?></span>|发表于<?php echo ($vo["create_datetime"]); ?></p>
				<p class="content"><?php echo (mb_substr(strip_tags(htmlspecialchars_decode($vo['content'])),0,200)); ?></p>
					<div class="read">
						<a class="read_bottom" href="">阅读全文</a>
					</div>
				</div><?php endforeach; endif; else: echo "" ;endif; ?>
			<div class="box_left_page">
				<?php echo ($page); ?>
			</div>
		</div>
		<div class="box_right">
			<div class="pic"><img src="/Public/static/images/a.jpg"></div>
			<p class="name">aa</p>
			<p class="welcome">welcome to my blog</p>
			<div class="tagset">
				<div class="tag">
					<p><?php echo (count($list)); ?></p>
					<p>日志</p>
				</div>
				<div class="tag tag_mid">
					<p>3</p>
					<p>分类</p>
				</div>
			</div>
		</div>
	</div>
</body>
</html>