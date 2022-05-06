<?php get_header();?>
<body>
	<div class="main">
		<div class="page">
			<?php if(have_posts()):?>
			<?php while(have_posts()): the_post();?>	
			<h1 class="page_title"><?php the_title();?></h1>
			<div class="page_text"><?php the_content();?></div>
			<?php endwhile;?>
			<?php endif;?>
		</div>
		</div>	
<?php get_footer();?>