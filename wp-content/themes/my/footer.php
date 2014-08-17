    </div>
    <footer>
    	<div class="footer-content">
    		<div class="footer-menu">
    			<?php
                $representation_url = get_home_url().'/representation';
                $photos_url = get_home_url().'/photos';
                $contacts_url = get_home_url().'/contacts';
                ?>
    			<div class="footer-menu__hr"></div>
	            <div class="footer-menu__column footer-menu__column_first">
            		<div class="footer-menu__production">
	            		<a class="footer-menu__header" href="<?php echo get_category_link(4); ?>">Продукция</a>
		                <br />
		                <a href="<?php echo get_category_link(9); ?>">Водоводяные подогреватели</a>
		                <br />
		                <a href="<?php echo get_category_link(10); ?>">Пароводяные подогреватели</a>
		                <br />
		                <a href="<?php echo get_category_link(11); ?>">Трубные системы</a>
		                <br />
		                <a href="<?php echo get_category_link(12); ?>">Емкостное оборудование</a>
		                <br />
		                <a href="<?php echo get_category_link(13); ?>">Пластинчатые теплообменники</a>
		                <br />
		                <a href="<?php echo get_category_link(14); ?>">Конвекторы</a>
		                <br />
		                <a href="<?php echo get_category_link(15); ?>">Регистры отопительные</a>
		                <br />
		                <a href="<?php echo get_category_link(16); ?>">Грязевик</a>
		                <br />
		                <a href="<?php echo get_category_link(17); ?>">Воздухосборники А1И</a>
		                <br />
		                <a href="<?php echo get_category_link(18); ?>">Элеваторы</a>
		            </div>
            	</div><!--
            	--><div class="footer-menu__column">
            		<div class="footer-menu__plant">
            			<font class="footer-menu__header">Завод</font>
	            		<br />
						<a href="<?php echo get_category_link(3); ?>">Новости</a>
						<br />
						<a  href="<?php echo $photos_url ?>">Фотогалерея</a>
						<br />
						<a href="<?php echo get_category_link(8); ?>">Документация</a>
					</div>
				</div><!--
				--><div class="footer-menu__column">
					<div class="footer-menu__clients">
						<a class="footer-menu__header" href="<?php echo get_category_link(5); ?>">Клиенты</a>
					</div>
					<div class="footer-menu__feedback">
						<font class="footer-menu__header">Обратная связь</font>
						<br />
						<a href="<?php echo $contacts_url; ?>">Контакты</a>
						<br />
						<a href="<?php echo $representation_url; ?>">Представительства</a>
						<br />
						<a href="<?php echo get_category_link(6); ?>">Вопросы и ответы</a>
					</div>
				</div><!--
				--><div class="footer-menu__column">
					<div class="footer-menu__letter">
						<font class="footer-menu__header">Написать письмо</font>
						<form class="letter-form" method="POST" action="/">
							<select class="letter-form__whom" size="1" name="whom">
								<option value="director" selected>Директору</option>
								<option value="add">Добавить</option>
							</select>
							<input class="letter-form__email" type="email" placeholder="Ваш E-mail" required />
							<textarea class="letter-form__message" name="message" placeholder="Ваше сообщение" required maxlength="1000"></textarea>
							<input class="letter-form__submit" type="submit" value="Отправить" />
						</form>
					</div>
				</div>
	        </div>
	        <div class="footer-inform">
	        	<div class="footer-inform__copyright">© 2013 Завод Триумф</div>
	        	<div class="footer-inform__counter">
	        		<!--LiveInternet counter-->
	        		<script type="text/javascript">
	        			<!--
						document.write("<a href='//www.liveinternet.ru/click' "+
						"target=_blank><img src='//counter.yadro.ru/hit?t26.2;r"+
						escape(document.referrer)+((typeof(screen)=="undefined")?"":
						";s"+screen.width+"*"+screen.height+"*"+(screen.colorDepth?
						screen.colorDepth:screen.pixelDepth))+";u"+escape(document.URL)+
						";"+Math.random()+
						"' alt='' title='LiveInternet: показано число посетителей за"+
						" сегодня' "+
						"border='0' width='88' height='15'><\/a>")
						//-->
					</script>
					<!--/LiveInternet-->
	        	</div>
				<div class="footer-inform__social-networks">
					<a href="http://facebook.com/" class="footer-social-networks__facebook">
						<img src="<?php bloginfo('template_url'); ?>/images/facebook.png" alt="facebook.com" />
					</a>
					<a href="http://vk.com/" class="footer-social-networks__vk">
						<img src="<?php bloginfo('template_url'); ?>/images/vk.png" alt="vk.com" />
					</a>
					<a href="http://twitter.com/" class="footer-social-networks__twitter">
						<img src="<?php bloginfo('template_url'); ?>/images/twitter.png" alt="twitter.com" />
					</a>
					<a href="http:///youtube.com/" class="footer-social-networks__youtube">
						<img src="<?php bloginfo('template_url'); ?>/images/youtube.png" alt="youtube.com" />
					</a>
				</div>
	        </div>
    	</div>
    	<?php wp_footer(); ?>
    </footer>
    <script type="text/javascript">
        (function($){
        	var phone = $('#phone');
            $('.phone__a-modal').bind('click', function(){
            	if (phone.css("display") == 'none')
                	phone.css({'display':'block'});
            });
            $('.modal__a-close').bind('click', function(){
                phone.css({'display':'none'});
            });
            var content = $('.content');
            content.on('click', '.wp-pagenavi a', function(e){
            	e.preventDefault();
		        var link = $(this).attr('href');
				if ($('.current').contents().text() < $(this).contents().text()) {
	  				$('.posts').stop().animate({left : -980}, 300, function() {
			        	content.load(link+' .content', function() {
			        		$('.posts').stop().css({'left' : '980px'}).animate({left : 0}, 300);
			        	});
			    	});
			    }
  				else {
  					$('.posts').stop().animate({left: 980}, 300, function() {
			        	content.load(link+' .content', function() {
			        		$('.posts').stop().css({'left' : '-980px'}).animate({left : 0}, 300);
			        	});
			    	})
  				};
	    	});
        })(jQuery);
    </script>
</div>
</body>
</html>
