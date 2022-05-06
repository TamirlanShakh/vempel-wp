<?php get_header();?>
			<div class="content">
				<div class="category">
				<h1><?php single_cat_title();?></h1>
				
					<?php if( have_posts()):?>
					<?php while( have_posts()): the_post();?>
					<div class="cat_single_list">
					
					<h1 class="cat_single_title"><?php the_title();?></h1>
					<div class="cat_single_text"><?php the_content();?></div>
					<div class="cat_single_photo" style="background: url('<?php echo get_field('картинка');?>')no-repeat center/cover"></div>
					</div>
					<?php endwhile; ?>
					<?php else:?>
					<p>Материалов пока нет</p>
					<?php endif; ?>
					
				</div>
			</div>
<?php get_footer();?>			