<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="/Public/static/css/frame.css">
	<link rel="stylesheet" type="text/css" href="/Public/static/css/public.css">
	<link rel="stylesheet" type="text/css" href="/Public/static/css/article.css">
</head>
<body>
		<div class="header">
 		<div class="login_choice">
 			<a href= <?php echo U('Admin/Login/login');?> >登录</a>
 		</div>
	 	<div class="header_choice">
	 		<a href= <?php echo U('index');?> >首页</a>
	 		<a href= <?php echo U('category');?> >博文分类</a>	
 		</div>
 	</div>
	<div class="article_box">
		<div class="article_box_title">
			<h2><?php echo ($article["title"]); ?></h2>
		</div>
		<div class="artcile_box_date">
			<p>发表于<?php echo ($article["create_datetime"]); ?></p>
		</div>
		<div class="article_box_tag">
			<p>标签：<?php echo ($article["tag"]); ?> 分类：<?php echo ($category["category_name"]); ?></p>
		</div>
		<div class="article_box_content">
			<?php echo (stripcslashes(htmlspecialchars_decode($article["content"]))); ?>
		</div>
		<div class="article_box_guide">
			<a class="pre" href="">上一篇：</a><br>
			<a class="next" href="">下一篇：</a>
		</div>
	</div>
	<div class="message_release">
		<form action="/index.php/Home/Index/create" method="post">
			请留下你的名字：<input type="text" name="author"><br>
			请留下你的email：<input type="text" name="email"><br>
			<textarea name="content"></textarea>
			<input type="hidden" name="article_id" value=<?php echo ($article["id"]); ?>>
			<input type="hidden" name="pre_id" value=null>
			<input type="hidden" name="sort" value="50">
			<input type="submit">
		</form>
	</div>
	<div class="message_show">
		<div class="message_show_info">
			<span><img src="/Public/static/images/head.png"></span>
			<p class="message_show_name">成龙</p>
			<p class="message_show_datetime">2016-7-15</p>
		</div>
		<div class="rate_detail_item_content">
		据俄罗斯卫星网14日报道，俄总统新闻秘书佩斯科夫表示，英国任命新首相给俄英关系的改变带来一定希望。7月13日英国女王伊丽莎白二世任命特雷莎·梅(此前任内务部长)为英国首相。英国脱欧活动领导人之一、前伦敦市长约翰逊担任新任外交大臣。佩斯科夫在回答记者提问时表示，“很可惜，我们在双边关系领域没有任何成就值得称赞，因此每一个新的开始都带来一定的希望。”佩斯科夫指出，俄罗斯认为，目前双边关系的状态不符合双方潜力。
		</div>
	</div>
</body>
</html>