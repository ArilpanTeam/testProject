<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script type="text/javascript" src="/tp3/Public/jquery.min.js"></script>
	<script type="text/javascript">
		/*$(function(){
			$('#searchB').click(function(){
				var search = $("#search").val();
				$.ajax({
					url: '<?php echo U("Index/search");?>',
					type: 'POST',
					dataType: 'json',
					data: {search: search},
					success:function(data){
						alert('提交成功');
						window.location = '<?php echo U("Index/search");?>';
					},
					error:function(data){
						alert('ajax出错');
					},
				})
			})
		})*/
	</script>
</head>
<body>
<form action="<?php echo U('Index/search');?>" method="post" accept-charset="utf-8">
	<input name="search" id="search" style="text-align:center" type="text" placeholder="搜点什么呢..." >
	<input type="submit" name="" value="search">  
</form>
	
</body>
</html>