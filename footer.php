<div class="footer">
			<div class="footer_tittle">
				<div class="footer_tittle_fix">
					<div class="footer_tittle_answers"><span>Остались вопросы?</span><br>Оставьте заявку и мы вам перезвоним.</div>
					<div class="footer_tittle_form">
						<?php echo do_shortcode('[contact-form-7 id="5" title="Контактная форма 1"]');?>

					</div>
				</div>
			</div>
			<?php $contacts = get_field('контакты',45); $c=count($contacts);?>
			<div class="footer_contacts" style=" background: url('<?php echo get_field('фон',45)?>')no-repeat center;">
				<div class="footer_contacts_fix">
					
					<div class="footer_contacts_information">
						
						<div class="footer_contacts_tittle">КОНТАКТЫ</div>
						<?php $i = 0; while($i<$c):?> 
						<div class="footer_contacts_numbers"><?php echo $contacts[$i]['текст'];?></div>
						<?php $i++; endwhile;?>
						<?php $adress = get_field('почта',45);?><div class="footer_contacts_adress"><?php echo $adress[0]['адрес'];?></div>
						<div class="footer_contacts_timing"><?php echo get_field('расписание',45);?></div>
						<div class="footer_contacts_inst"><a href="<?php echo get_field('инстаграм',45);?>">Мы в инстаграм</a></div>
					</div>
				</div>
			</div>
			<div class="footer_menu">
				
				<div class="footer_menu_fix">
					<?php $foot_logo = get_field('подвал',45);?>
					
					<div class="footer_menu_emblem" style="background: url('<?php echo $foot_logo[0]['лого'];?>')no-repeat left">
					<?php echo $foot_logo[0]['текст'];?></div>
					<div class="footer_menu_menu">
						<a href="<?php echo get_home_url();?>">Главная<br></a>
						<a href="<?php the_permalink(8);?>">О компании</a>
						<a href="<?php echo get_category_link(3);?>">Новости</a>
						<a href="<?php the_permalink(10);?>">Контакты</a>
					</div>
					<a href="#openModal" class="consul_foot">Получить консультацию</a>
					<div class="footer_menu_source">Разработка сайта - <a href="">TRONIUM</a></div>

				</div>
			</div>
			<div class="footer_copyrights">
				<div class="footer_copyrights_fix">Copyright © 2020</div>
			</div>	
		</div>
	</div>
<?php wp_footer();?>	
</body>
</html>