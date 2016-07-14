<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script type="text/javascript" src="/tp3/Public/jquery.min.js"></script>
	<script type="text/javascript">
		$(function(){
			$('.sub').click(function(){
				$.ajax({
					url: '<?php echo U("Index/search");?>',
					type: 'post',
					dataType: 'json',
					data: {
						search: $(".search").val(),
						type: $('select').val()
					},
					success:function(data){
						console.log(data);
						if (!data) {
							alert('查找失败，请确定搜索信息是否正确!')
						}
						var src = '';
						for (var i = 0; i < data.length; i++) {
							src += 'name:'+data[i].name+'<br>danwei:'+data[i].name+'<br>num:'+data[i].num+'<br>imgpath:<img src="'+data[i].imgpath+'" alt=""><br>';
						}
						$('.show').append(src);
					},
					error:function(){
						alert('ajax Error');
					}
				})
			})
			
		})
	</script>
</head>
<body>
	<select>
		<option value="1">按证书名字查找</option>
		<option value="2">按证书单位查找</option>
		<option value="3">按证书编号查找</option>
		<input type="text" class="search" name="search" value="" placeholder="请输入证书信息">
		<input type="submit" class="sub" name="" value="search">
	</select>
	<div class="show">
	
	</div>
</body>
</html>