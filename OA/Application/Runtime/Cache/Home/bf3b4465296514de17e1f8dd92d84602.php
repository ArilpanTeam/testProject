<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>name:<?php echo ($vo["name"]); ?><br>
		danwei:<?php echo ($vo["danwei"]); ?><br>
		bianhao:<?php echo ($vo["num"]); ?><br>
		img:<img src="<?php echo ($vo["imgpath"]); ?>" alt=""><?php endforeach; endif; else: echo "" ;endif; ?>
</body>
</html>