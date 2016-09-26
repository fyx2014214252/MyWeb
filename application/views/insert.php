<meta charset='utf-8'>
<base href="<?php echo site_url();?>">
<form action="" method="post">
	标题:<input type="text" name="title">
	&nbsp; 文章分类:
	<select name='ca'>
		<?php foreach($catalog as $v){?>
			<option value="<?php echo $v->catalog_id?>"><?php echo $v->catalog_name;?></option>
		<?php }?>
	</select>
	<br />
	内容:<textarea rows=10 cols=30 name="con"></textarea><br />
	<input type="submit" name="sub" value="添加文章">
</form>