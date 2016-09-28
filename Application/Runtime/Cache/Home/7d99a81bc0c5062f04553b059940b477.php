<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="/Public/static/css/public.css">
	<link rel="stylesheet" type="text/css" href="/Public/static/css/home/frame.css">
	<link rel="stylesheet" type="text/css" href="/Public/static/css/home/article.css">
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
	<div class="container">
		<div class="article_box">
			<div class="article_detail">
				<h2 class="title">第一篇博客--PHP环境搭建</h2>
				<p class="author">作者：<span>tom</span>|发表于 2016-09-21</p>
				<p class="tag"><span>分类：php</span><span>标签：环境搭建</span></p>
				<div class="content">
					<p>如何在本地搭建php是大家都关注的，php环境搭建可以说比较容易也可以说比较难，对于新手而言环境搭建就是要学习以及测试所用的。PHP网站调试就是高手所用了。不管你是新手还是老手本地环境搭建都是必须的。</p>
				</div>
				<div class="article_nav">
					<p class="pre">上一篇：<a href=""></a></p>
					<p class="next">下一篇：<a href=""></a></p>
				</div>
			</div>
			<div class="message_release">
				<h3>发表评论</h3>
				<form action="" method="post">
					<div>
						<span>请留下你的名字：<input type="text" name="author"></span>
						<span>请留下你的email：<input type="text" name="email"></span>
					</div>
					<p>请留下你的评论：</p>
					<div>
						<textarea>
							
						</textarea>
					</div>
					<input type="submit" value="提交">
				</form>
			</div>
		</div>
		<div class="message_box">
			<h2>评论区</h2>
			<div class="message_item">
				<div class="item_left">
					<div class="pic">
					</div>
					<div>tom</div>
				</div>
				<div class="item_right">
					<p>什么是索引？ 1、索引 索引是表的目录，在查找内容之前可以先在目录中查找索引位置，以此快速定位查询数据。对于索引，会保存在额外的文件中。 2. 索引，是数据库中专门用于帮助用户快速查询数据的一种数据结构。类似于字典中的目录，查找字典内容时可以根据目录查找到数据的存放位置，然后直接获取即可。 索引由数 ...</p>
					<p class="datetime">发表于2016-1-1</p>
				</div>
			</div>
			<div class="message_item">
				<div class="item_left">
					<div class="pic">
					</div>
					<div>tom</div>
				</div>
				<div class="item_right">
					<p>什么是索引？ 1、索引 索引是表的目录，在查找内容之前可以先在目录中查找索引位置，以此快速定位查询数据。对于索引，会保存在额外的文件中。 2. 索引，是数据库中专门用于帮助用户快速查询数据的一种数据结构。类似于字典中的目录，查找字典内容时可以根据目录查找到数据的存放位置，然后直接获取即可。 索引由数 ...什么是索引？ 1、索引 索引是表的目录，在查找内容之前可以先在目录中查找索引位置，以此快速定位查询数据。对于索引，会保存在额外的文件中。 2. 索引，是数据库中专门用于帮助用户快速查询数据的一种数据结构。类似于字典中的目录，查找字典内容时可以根据目录查找到数据的存放位置，然后直接获取即可。 索引由数 ...</p>
					<p class="datetime">发表于2016-1-1</p>
				</div>
			</div>
			<div class="message_item">
				<div class="item_left">
					<div class="pic">
					</div>
					<div>tom</div>
				</div>
				<div class="item_right">
					<p>什么是索引？ 1、索引 索引是表的目录，在查找内容之前可以先在目录中查找索引位置，以此快速定位查询数据。对于索引，会保存在额外的文件中。 2. 索引，是数据库中专门用于帮助用户快速查询数据的一种数据结构。类似于字典中的目录，查找字典内容时可以根据目录查找到数据的存放位置，然后直接获取即可。 索引由数 ...</p>
					<p class="datetime">发表于2016-1-1</p>
				</div>
			</div>
		</div>
	</div>
</body>
</html>