</section>
<!-- CВЯЗАТЬСЯ С НАМИ -->
<div class="send pt-8 pb-6 md:py-3">
  <div class="container mx-auto px-4 md:px-0">
    <div class="block md:hidden mb-12">
      <a href="<?php echo home_url(); ?>">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/logo.svg" alt="Лого" class="mx-auto">
      </a>
    </div>
    <div class="flex flex-col md:flex-row md:justify-between items-start md:items-center">
      <div class="send_text mb-2 md:mb-0">
        <?php _e('Свяжитесь с нами', 'welbrix'); ?>
      </div>
      <div class="send_form">
        <form name="send_email">
          <div class="flex flex-row">
            <input type="text" name="Email" placeholder="<?php _e('Введите ваш email', 'welbrix'); ?>" required>
            <button type="submit" class="send_btn"><?php _e('Отправить', 'welbrix'); ?></button>
          </div>
        </form>
      </div>
      <div class="social hidden md:block opacity-75">
        <ul class="flex items-center -mx-3">
          <li class="pr-3"><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/facebook-icon.svg"></a></li>
          <li class="pr-3"><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/twitter-icon.svg" alt=""></a></li>
          <li class="pr-3"><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/instagram-icon.svg" alt=""></a></li>
          <li class="pr-3"><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/pinterest-icon.svg" alt=""></a></li>
        </ul>
      </div>
    </div> 
  </div>
</div>
<!-- END CВЯЗАТЬСЯ С НАМИ -->
<footer id="footer" class="footer hidden md:block bg-white py-10">
  <div class="container mx-auto">
  	<div class="flex flex-wrap -mx-4">
  		<!-- КАТЕГОРИИ -->
  		<div class="w-full md:w-1/3 lg:w-1/4 px-4">
  			<div class="footer_subtitle mb-5">
  				<?php _e('Категории', 'welbrix'); ?>
  			</div>
  			<div>
  				<?php wp_nav_menu([
            'theme_location' => 'footer_cat',
            'container' => 'ul',
          ]); ?>  
  			</div>
  		</div>
  		<!-- END КАТЕГОРИИ -->

  		<!-- ИНФОРМАЦИЯ -->
  		<div class="w-full md:w-1/3 lg:w-1/4 px-4">
  			<div class="footer_subtitle mb-5">
  				<?php _e('Информация', 'welbrix'); ?>
  			</div>
  			<div>
  				<?php wp_nav_menu([
            'theme_location' => 'footer_info',
            'container' => 'ul',
          ]); ?>  
  			</div>
  		</div>
  		<!-- END ИНФОРМАЦИЯ -->

  		<!-- ПОЛЕЗНЫЕ ССЫЛКИ -->
  		<div class="w-full md:w-1/3 lg:w-1/4 px-4">
  			<div class="footer_subtitle mb-5">
  				<?php _e('Полезные ссылки', 'welbrix'); ?>
  			</div>
  			<div>
  				<?php wp_nav_menu([
            'theme_location' => 'footer_links',
            'container' => 'ul',
          ]); ?>  
  			</div>
  		</div>
  		<!-- END ПОЛЕЗНЫЕ ССЫЛКИ -->

  		<!-- КОНТАКТЫ -->
  		<div class="w-full md:w-1/3 lg:w-1/4 px-4">
  			<div class="footer_subtitle mb-5">
  				<?php _e('Контакты', 'welbrix'); ?>
  			</div>
  			<div>
  				<li class="flex items-start">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/location-icon.svg" class="mr-2">
						<span><?php echo carbon_get_theme_option('crb_contact_address'); ?></span>
  				</li>
  				<li class="flex items-start">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/phone-transparent-icon.svg" class="mr-2">
						<div class="flex flex-col">
							<?php $phones = carbon_get_theme_option('crb_contact_phones');
							foreach ($phones as $phone): ?>
								<a href="tel:<?php echo $phone['crb_contact_phone']; ?>"><?php echo $phone['crb_contact_phone']; ?></a>
							<?php endforeach; ?>
						</div>
  				</li>
  				<li class="flex items-start">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/clock-transparent-icon.svg" class="mr-2">
						<span><?php _e('Без выходных 24/7', 'welbrix'); ?></span>
  				</li>
  				<li class="flex items-start">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/mail-icon.svg" class="mr-2">
						<a href="mailto:<?php echo carbon_get_theme_option('crb_contact_email'); ?>"><?php echo carbon_get_theme_option('crb_contact_email'); ?></a>
  				</li>
  			</div>
  		</div>
  		<!-- END КОНТАКТЫ -->
  	</div>
  </div>
</footer>
<div class="copyright py-2">
	<div class="container mx-auto px-4 md:px-0">
		<div class="flex justify-between">
			<div class="copyright_text">
				© 2021, Welbrix
			</div>
			<div class="flex items-center">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/visa-icon.svg" class="mr-2">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/mastercard-icon.svg">
			</div>
		</div>
	</div>
</div>
<?php wp_footer(); ?>

</body>
</html>