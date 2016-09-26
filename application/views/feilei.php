<meta charset="UTF-8">
<base href="<?php echo site_url();?>">

<?php foreach($feilei as $v){?>
	
	<a href="blog/index/<?php echo $v->catalog_id?>"><?php echo $v->catalog_name?></a>
	<br />
<?php }?>