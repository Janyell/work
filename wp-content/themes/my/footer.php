    </div>
    <footer>
    	<div class="footer-content">
    		<div class="footer-menu">
    			<div class="footer-menu__hr"></div>
				<?php wp_nav_menu('menu=footer-menu'); ?><!--
				--><div class="footer-menu__column">
					<div class="footer-menu__letter">
						<font class="footer-menu__header">Написать письмо</font>
						<form class="letter-form" method="POST" action="">
							<select class="letter-form__whom" size="1" name="whom">
								<option value="director" selected>Директору</option>
								<option value="manager">Менеджеру</option>
							</select>
							<input class="letter-form__email" name="email" type="email" placeholder="Ваш E-mail" required />
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
	<?php 
		$mails = array(
		'director' => 'test1@mail.ru', 
		'manager' => 'test2@mail.ru',
		);
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$whom = $_POST['whom'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$to = $mails[$whom];
		$subject = 'Завод "Триумф": новое сообщение от '.$email;
		if (wp_mail( $to, $subject, $message)) {
			$msg_status = "Ваше сообщение успешно отправлено!";
		} 
		else {
			$msg_status = "Ваше сообщение не отправлено!";
		} ?>
		<div id="letter-form-status" class="modal modal_display_block modal_xs">
			<div class="modal__align-helper">
		        <div class="modal__message">
		            <?php echo $msg_status; ?>
		        </div>
		    </div>
		    <a class="modal__a-close">
		      <img class="modal__close" src="<?php bloginfo('template_url'); ?>/images/close.png" />
		   </a>
		</div>
	<?php } ?>
    <script type="text/javascript">
        (function($){
        	var phone = $('#phone');
            $('.phone__a-modal').bind('click', function(){
            	if (phone.css("display") == 'none')
                	phone.css({'display':'block'});
            });
            $('#phone .modal__a-close').bind('click', function(){
                phone.css({'display':'none'});
            });
            $('#letter-form-status .modal__a-close').bind('click', function(){
            	$('#letter-form-status').css({'display':'none'});
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
	    	$('#menu-header-menu > #menu-item-234 > a').bind('click', function(e) {
	    		e.preventDefault();
	    	});
	    	$('#menu-header-menu > #menu-item-238 > a').bind('click', function(e) {
	    		e.preventDefault();
	    	});
	    	$('#menu-footer-menu > #menu-item-254 > a').bind('click', function(e) {
	    		e.preventDefault();
	    	});
	    	$('#menu-footer-menu > #menu-item-258 > a').bind('click', function(e) {
	    		e.preventDefault();
	    	});
	    	$(document).ready(function() {
				if ($('#menu-header-menu > #menu-item-234 > .sub-menu > .menu-item.active').size()) {
					$('#menu-header-menu > #menu-item-234').addClass('active');
					$('#menu-header-menu > #menu-item-234 > .sub-menu').css({'display' : 'block'});
				}
				if ($('#menu-header-menu > #menu-item-238 > .sub-menu > .menu-item.active').size()) {
					$('#menu-header-menu > #menu-item-238').addClass('active');
					$('#menu-header-menu > #menu-item-238 > .sub-menu').css({'display' : 'block'});
					$('#menu-header-menu > #menu-item-234 > .sub-menu').css({'z-index' : '1'});
				}
			});
        })(jQuery);
    </script>
</div>
</body>
</html>
