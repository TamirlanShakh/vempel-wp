<?php get_header();?>
<body>
	<div class="main">
		<div class="category">
			<h1><?php single_cat_title();?></h1>
			<?php if(have_posts()):?>
			<?php while(have_posts()): the_post();?>
			<?php news();?>
			<?php endwhile;?>
			<?php endif;?>
		</div>
	</div>	
<?php get_footer();?>