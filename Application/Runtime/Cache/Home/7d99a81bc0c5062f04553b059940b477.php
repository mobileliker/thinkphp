<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="/Public/static/css/public.css">
	<link rel="stylesheet" type="text/css" href="/Public/static/css/home/frame.css">
	<link rel="stylesheet" type="text/css" href="/Public/static/css/home/article.css">
	<script type="text/javascript" src="/Public/static/js/jquery-2.2.2.min.js"></script>
	<script type="text/javascript" src="/Public/static/js/article.js"></script>
</head>
<body>
		<div class="header">
		<p class="header_title">Ben的个人博客</p>
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
				<h2 class="title"><?php echo ($article["title"]); ?></h2>
				<p class="author">作者：<?php echo ($article["username"]); ?><span></span>|发表于 <?php echo ($article["create_datetime"]); ?></p>
				<p class="tag"><span>分类：<?php echo ($article["category_name"]); ?></span><span>标签：<?php echo ($article["tag"]); ?></span></p>
				<div class="content">
					<?php echo (stripcslashes(htmlspecialchars_decode($article["content"]))); ?>
				</div>
				<div class="article_nav">
					<p class="pre">上一篇：
						<?php if($pre['id'] !== null ): ?><a href=<?php echo U("article",array('id'=>$pre['id']));?>> <?php echo ($pre['title']); ?></a>
						<?php else: ?> 没有了<?php endif; ?>
					</p>
					<p class="next">下一篇：
						<?php if($next['id'] !== null ): ?><a href=<?php echo U("article",array('id'=>$next['id']));?>> <?php echo ($next['title']); ?></a>
						<?php else: ?> 没有了<?php endif; ?>
					</p>
				</div>
			</div>
			<div class="message_release">
				<h3>发表评论</h3>
				<form action="/index.php/Home/Index/create" method="post">
					<input type="hidden" name="article_id" value=<?php echo ($article["id"]); ?>>
					<div class="name_container">
						<span>请留下你的名字：<input type="text" name="author"></span>
						<span style="float:right;">请留下你的email：<input type="text" name="email"></span>
					</div>
					<p>请留下你的评论：</p>
					<div class="textarea_container">
						<textarea name="content" maxlength="200"></textarea>
					</div>
					<div class="submit_click_container">
						<input class="submit_click" type="submit" value="提交">
					</div>
				</form>
			</div>
		</div>
		<div class="message_box">
			<h2>评论区</h2>
			<?php if($message == null): ?><p style="text-align:center;font-size:20px;padding:10px 0;">该文章没有评论</p>
			<?php else: ?>
				<?php if(is_array($message)): foreach($message as $key=>$vo): ?><div class="message_item">
						<div class="item_left">
							<div class="pic">
							</div>
							<div><?php echo ($vo["author"]); ?></div>
						</div>
						<div class="item_right">
							<p><?php if($vo["pre_id"] != null): ?>回复<?php echo ($message[$vo['pre_id']]['author']); ?>的评论:<?php endif; echo ($vo["content"]); ?></p>
							<p class="datetime"><span class="reply">回复</span>发表于<?php echo ($vo["create_datetime"]); ?></p>
						</div>
						<div class="message_release invisible_item">
							<form action="/index.php/Home/Index/create" method="post">
								<input type="hidden" name="article_id" value=<?php echo ($article["id"]); ?>>
								<input type="hidden" name="pre_id" value=<?php echo ($vo["id"]); ?>>
								<div class="name_container">
									<span>请留下你的名字：<input type="text" name="author"></span>
									<span style="float:right;">请留下你的email：<input type="text" name="email"></span>
								</div>
								<p>请留下你的评论：</p>
								<div class="textarea_container">
									<textarea name="content" maxlength="200"></textarea>
								</div>
								<div class="submit_click_container">
									<input class="submit_click" type="submit" value="提交">
								</div>
							</form>
						</div>
					</div><?php endforeach; endif; endif; ?>
			<!-- <div class="message_item">
				<div class="item_left">
					<div class="pic">
					</div>
					<div>tom</div>
				</div>
				<div class="item_right">
					<p>什么是索引？ 1、索引 索引是表的目录，在查找内容之前可以先在目录中查找索引位置，以此快速定位查询数据。对于索引，会保存在额外的文件中。 2. 索引，是数据库中专门用于帮助用户快速查询数据的一种数据结构。类似于字典中的目录，查找字典内容时可以根据目录查找到数据的存放位置，然后直接获取即可。 索引由数 ...</p>
					<p class="datetime">发表于2016-1-1</p>
				</div>
			</div> -->
		</div>
	</div>
</body>
</html>