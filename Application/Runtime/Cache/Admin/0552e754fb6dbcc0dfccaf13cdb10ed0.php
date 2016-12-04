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
		<div>
			<table cellspacing="0" cellpadding="0">
				<tr>
					<td>id</td>
					<td>分类名</td>
					<td>排序</td>
					<td>拥有者id</td>
					<td>编辑操作</td>
					<td>删除操作</td>
				</tr>
				<?php if(is_array($result)): $i = 0; $__LIST__ = $result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
					<td><?php echo ($vo["id"]); ?></td>
					<td><?php echo ($vo["category_name"]); ?> </td>
					<td><?php echo ($vo["sort"]); ?> </td>
					<td><?php echo ($vo["user_id"]); ?> </td>
					<td><a class="operation operation_edit" href="/index.php/Admin/Category/edit/id/<?php echo ($vo["id"]); ?>">编辑</a></td>
					<td><a class="operation operation_delete" href="javascript:if(confirm('确定要删除吗?')) location='<?php echo U('delete',array('id'=>$vo['id']));?>'">删除</a></td>
				</tr><?php endforeach; endif; else: echo "" ;endif; ?>
			</table>
		</div>
	</div>
</body>
</html>