<?php 

function news() {
	
?>

<div class="cat_list">
					
	<div class="cat_photo" style="background: url('<?php echo get_field('картинка');?>')no-repeat center/cover"></div>
	<div class="cat_title"><?php echo get_field('заголовок');?></div>
	<div class="cat_text"><?php echo get_field('описание');?></div>
	<a href="<?php the_permalink();?>">Читать полностью</a>
</div>

<?php };?>

<?php 

function uslugi() {
	
?>

<div class="cat_uslugi_list" style="background: url('<?php echo get_field('картинка');?>')no-repeat top">
					
	<div class="cat_uslugi_photo" ></div>
	<a class="cat_uslugi_title" href="<?php the_permalink();?>"><?php the_title ();?></a>
	
	
</div>

<?php };?>