<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
</head>
<body>
<?php if(is_array($result)): $i = 0; $__LIST__ = array_slice($result,1,3,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; echo ($vo["id"]); ?>:<?php echo ($vo["category_name"]); ?>
<br><?php endforeach; endif; else: echo "" ;endif; ?>
</body>
</html>