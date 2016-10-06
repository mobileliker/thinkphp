<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="/Public/static/css/frame.css">
	<link rel="stylesheet" type="text/css" href="/Public/static/css/public.css">
	<link rel="stylesheet" type="text/css" href="/Public/static/css/blog.css">
</head>
<body>
 		<div class="header">
 		<div class="login_choice">
 			<a href= <?php echo U('Admin/Login/login');?> >登录</a>
 		</div>
	 	<div class="header_choice">
	 		<a href= <?php echo U('index');?> >首页</a>
	 		<a href= <?php echo U('blog');?> >博文分类</a>	
 		</div>
 	</div>
 	<div class="box">
 		<div class="cata_choice">
 			<ul>
 				<li><a href="#">所有</a></li>
 				<?php if(is_array($category)): foreach($category as $key=>$vo): ?><li><a href="#"><?php echo ($vo["category_name"]); ?></a></li><?php endforeach; endif; ?>
 					<!-- <li><a href="#">数据库</a></li> -->
 			</ul>
 		</div>
 		<div class="articles_container">
 			<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="box_article">
		 			<a class="redirect" href=<?php echo U('');?>>  
			 			<h3><?php echo ($vo["title"]); ?></h3>
			 			<p><?php echo (mb_substr(strip_tags(htmlspecialchars_decode($vo['content'])),0,200)); ?></p>
			 			<p class="date">发布于 <?php echo ($vo["create_datetime"]); ?> </p>
		 			</a>
		 		</div><?php endforeach; endif; else: echo "" ;endif; ?>
 		</div>
 		<!-- <div class="box_article">
 			<a href="#">
	 			<h3>MySQL索引详解大全</h3>
	 			<p>什么是索引？ 1、索引 索引是表的目录，在查找内容之前可以先在目录中查找索引位置，以此快速定位查询数据。对于索引，会保存在额外的文件中。 2. 索引，是数据库中专门用于帮助用户快速查询数据的一种数据结构。类似于字典中的目录，查找字典内容时可以根据目录查找到数据的存放位置，然后直接获取即可。 索引由数 ...</p>
	 			<p class="date">发布于 2016-08-06 14:45 </p>
 			</a>
 		</div> -->
 		
 		<div class="box_page">
 			<?php echo ($page); ?>
 		</div>
 	</div>
</body>
</html>