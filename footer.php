    </div>
    <footer>
    	<div class="footer-content">
    		<div class="footer-menu">
    			<hr class="footer-menu__hr"color="#c5c8d0" size="3px" />
	            <div class="footer-menu__column footer-menu__column_first">
            		<div class="footer-menu__production">
	            		<a class="footer-menu__header" href="production/">Продукция</a>
		                <br />
		                <a href="production/">Водоводяные подогреватели</a>
		                <br />
		                <a href="production/">Пароводяные подогреватели</a>
		                <br />
		                <a href="production/">Трубные системы</a>
		                <br />
		                <a href="production/">Емкостное оборудование</a>
		                <br />
		                <a href="production/">Пластинчатые теплообменник</a>
		                <br />
		                <a href="production/">Конвекторы</a>
		                <br />
		                <a href="production/">Регистры отопительные</a>
		                <br />
		                <a href="production/">Грязевик</a>
		                <br />
		                <a href="production/">Воздухосборники А1И</a>
		                <br />
		                <a href="production/">Элеваторы</a>
		            </div>
            	</div><!--
            	--><div class="footer-menu__column">
            		<div class="footer-menu__plant">
            			<font class="footer-menu__header">Завод</font>
	            		<br />
						<a href="plant/">Новости</a>
						<br />
						<a href="plant/">Фотогалерея</a>
						<br />
						<a href="plant/">Документация</a>
						<br />
						<a href="plant/">Награды</a>
						<br />
						<a href="plant/">Работа на заводе</a>
					</div>
				</div><!--
				--><div class="footer-menu__column">
					<div class="footer-menu__deals">
						<a class="footer-menu__header" href="deals/">Спецпредложения</a>
					</div>
					<div class="footer-menu__clients">
						<a class="footer-menu__header" href="clients/">Клиенты</a>
					</div>
					<div class="footer-menu__feedback">
						<font class="footer-menu__header">Обратная связь</font>
						<br />
						<a href="feedback/">Контакты</a>
						<br />
						<a href="feedback/">Представительства</a>
						<br />
						<a href="feedback/">Вопросы и ответы</a>
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
    </footer>
    <?php wp_footer(); ?>
</body>
</html>