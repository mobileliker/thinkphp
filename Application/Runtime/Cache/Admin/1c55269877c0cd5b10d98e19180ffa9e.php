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
	<style type="text/css">
		*{margin: 0;padding: 0;font-family: Microsoft YaHei;;}
		.article{
			margin:10px auto;
			width: 1000px;
			overflow: hidden;
			display: block;
		}
		.article_datetime{
			text-align: right;
			font-size: 12px;
			
		}
		
	</style>
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
		<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="article">
		<div class="article_title"><h3><?php echo ($vo["title"]); ?></h3></div>
		<div class="article_tag">
			<?php if($vo["tag"] === '' ): ?><br>
			   <?php else: echo ($vo["tag"]); endif; ?>
		</div>
		<div class="article_content">
		<!-- <?php echo htmlspecialchars_decode($vo['content']);?> -->
		<?php echo (mb_substr(strip_tags(htmlspecialchars_decode($vo['content'])),0,200)); ?>
		</div>
		<div class="article_datetime">
			发表于<?php echo ($vo["create_datetime"]); ?>
		</div>
		<div>
			<a href="/index.php/Admin/Article/edit/id/<?php echo ($vo["id"]); ?>">编辑</a>
			<a href="javascript:if(confirm('确定要删除吗?')) location='<?php echo U('delete',array('id'=>$vo['id']));?>'">删除</a>
		</div>
	</div><?php endforeach; endif; else: echo "" ;endif; ?>
 	<div>
 		<?php echo ($page); ?>
 	</div>
	</div>
</body>
</html>