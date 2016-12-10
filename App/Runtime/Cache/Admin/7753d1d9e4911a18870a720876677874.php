<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="/house/Public/Admin/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/house/Public/Admin/css/system.css" />
</head>
<body>	
<div class="sysinfo" style="margin-left:5px;">

<form action="/house/admin.php/Slider/add" method="post" enctype="multipart/form-data">
	<table class="table table-hover table-bordered table-condensed table-responsive" >
		<tr class="info" style="text-align:center;">
			<td colspan="3">
				添加轮播
				<span style="float:right;"> [ <a href="/house/admin.php/Slider/index">列表</a> ] </span>
			</td>
		</tr>
		<tr>
			<td>轮播图片</td> 
			<td><input type="file" name="img"> </td>
		</tr>

		<tr>
			<td width="10%">轮播标题</td> 
			<td><input type="text"name="title" value=""></td>
		</tr>
		<tr>
			<td width="10%">链接地址</td> 
			<td><input type="text" name="link" value=""></td>
		</tr>
		<tr>
			<td width="10%">排序id</td> 
			<td><input type="text" name="sort_id" value="10"></td>
		</tr>
		<tr>
			<td width="10%">是否显示</td> 
			<td>
				隐藏<input type="radio"name="status" value="0">
				显示<input type="radio"name="status" value="1" checked="checked">
			</td>
		</tr>
		<tr style="text-align:center;">
			<td colspan="2">
				<input class="execbtn" type="submit" value="确定" />
				<input class="execbtn" type="reset" value="重置" />
			</td>
		</tr>	

	</table>	
</form>

</div>


</body>
</html>