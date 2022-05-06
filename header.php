<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Вымпел</title>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet"> 
<?php wp_head();?>
</head>
<body>
	<div class="main">
		<div class="header">
			<div class="header_fix">
				<div class="header_menu_top1">
					<div class="header_menu_block1">
						<ul>
							<li><a href="<?php echo get_home_url();?>">Главная</a></li>
							<li><a href="<?php the_permalink(8);?>">О компании</a></li>
							<li><a href="<?php echo get_category_link(3);?>">Новости</a></li>
							<li><a href="<?php the_permalink(10);?>">Контакты</a></li>
						</ul>
					</div>

				<div class="header_menu_top2">
					<div class="header_menu_block2">
						<li class="header_contact"><a href="tel:<?php echo get_field('телефон',45);?>"><?php echo get_field('телефон',45);?></a></li>
						<li><a href="<?php echo get_field('инстаграм',45);?>" class="header_inst">Мы в инстаграм</a></li>
						<a href="#openModal" class="consul" id="consul_link">Получить консультацию</a>
						<div id="openModal" class="modal">
 							<div class="modal-dialog">
   							 	<div class="modal-content">
     								<div class="modal-header">
       							 		<h3 class="modal-title">Получить консультацию</h3>
       							 		<a href="#close" title="Close" class="close">×</a>
     							 	</div>
     								<div class="modal-body">    
       									<?php echo do_shortcode('[contact-form-7 id="5" title="Контактная форма 1"]');?>
      								</div>
    							</div>
  							</div>
						</div>
						
					</div>
				</div>	
					
				</div>
				
				<div class="header_menu_bottom">
						
					<ul>
						<?php $query_u = new WP_Query('cat=2&showposts=7&order=ASC')?>
						<?php if( $query_u->have_posts()):?>
						<?php while( $query_u->have_posts()): $query_u->the_post();?>
					
						<?php uslugi();?>
						
						<?php endwhile; ?>
						<?php else:?>
						<p>Новостей пока нет</p>
						<?php endif; ?>
					</ul>
				</div>
			</div>
		</div>
