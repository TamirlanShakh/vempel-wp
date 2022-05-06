<?php get_header();?>
		<div class="menu">
			<div class="menu_tittle" style="background: url('<?php echo get_field('вымпел_фон',45)?>') no-repeat center top/cover">
				<div class="menu_tittle_fix">
					
					<div class="menu_tittle_textlogo">
						
						<?php $vympel_opis = get_field('описание_на_фоне',45); ?>

						<div class="menu_tittle_tittle"><?php echo $vympel_opis[0]['заголовок']?></div>
						<div class="menu_tittle_logo" style="background: url('<?php echo $vympel_opis[0]['логотип']?>') no-repeat center;"></div>
						<div class="menu_tittle_text"><?php echo $vympel_opis[0]['описание']?></span></div>
						
					</div>
				</div>
			</div>
			<div class="vympel_tsyfry">
				<div class="vympel_tsyfry_fix">
					<div class="vympel_tsyfry_tittle">«Вымпел» в цифрах</div>
					<div class="vympel_tsyfry_list">
						<?php $tsyfry = get_field('в_цифрах',45); $c=count($tsyfry);?>
						<ul>
							<?php $i = 0; while($i<$c):?>
							<li style="background: url('<?php echo $tsyfry[$i]['рамка']	?>')no-repeat center">
								<?php echo $tsyfry[$i]['описание']?></li>
							<?php $i++; endwhile;?>	
						</ul>
					</div>
				</div>
			</div>
			<div class="menu_about">
				<div class="menu_about_fix">
					<div class="menu_about_block">
						<div class="menu_about_tittle">О компании</div>
						<div class="menu_about_text"><?php echo get_field('о_компании',45);?></div>
					</div>
					<div class="menu_news_block">
						<?php $query = new WP_Query('cat=3&showposts=4')?>
						<?php if( $query->have_posts()):?>
						<?php while( $query->have_posts()): $query->the_post();?>
						<?php news();?>
						<?php endwhile; ?>
						<?php else:?>
						<p>Новостей пока нет</p>
						<?php endif; ?>
					</div>	
					<div class="news_tittle">Новости</div>
					<div class="all_news"><a  href="<?php echo get_category_link(3)?>">Читать все новости</a></div>
				</div>
			</div>
			<?php $partners = get_field('партнеры',45); $c=count($partners);?>

			<div class="nam_doveryayut">

				<div class="nam_doveryayut_fix">

					<div class="nam_doveryayut_tittle">Нам доверяют</div>
					<div class="nam_doveryayut_partners">
					
						
						<div class="nam_doveryayut_left"></div>
						
						<?php $i = 0; while($i<$c):?> 
						<a href='#'  class="nam_doveryayut_li" style="background: url('<?php echo $partners[$i]['иконка'];?>')no-repeat center"></a>
						
						<?php $i++; endwhile;?>
						<div class="nam_doveryayut_right"></div>
					</div>
					
				</div>
			</div>
		</div>	
<?php get_footer();?>