<!doctype html>
<html>
<head>
    <meta http-equiv="Content-type" content="text/html; charset=<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <title><?php wp_title('«', true, 'right'); ?> <?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/reset.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,300" type="text/css">
    <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <!--script type="text/javascript" src="main.js"-->
    <script type="text/javascript">
        var cssFix = function(){   var u = navigator.userAgent.toLowerCase(),   addClass = function(el,val){     if(!el.className) {       el.className = val;     } else {       var newCl = el.className;       newCl+=(" "+val);       el.className = newCl;     }   },   is = function(t){return (u.indexOf(t)!=-1)};   addClass(document.getElementsByTagName('html')[0],[     (!(/opera|webtv/i.test(u))&&/msie (\d)/.test(u))?('ie ie'+RegExp.$1)       :is('firefox/2')?'gecko ff2'       :is('firefox/3')?'gecko ff3'       :is('gecko/')?'gecko'       :is('opera/9')?'opera opera9':/opera (\d)/.test(u)?'opera opera'+RegExp.$1       :is('konqueror')?'konqueror'       :is('applewebkit/')?'webkit safari'       :is('mozilla/')?'gecko':'',     (is('x11')||is('linux'))?' linux'       :is('mac')?' mac'       :is('win')?' win':''   ].join(" ")); }(); 
    </script>    
</head>
<body <?php body_class(); ?>>
    <header>
        <div class="header-content">
            <div class="header-inform">
                <div class="header-languages">
                    <a href="<?php bloginfo('template_url'); ?>/en/">English</a> 
                    <a href="<?php bloginfo('template_url'); ?>/de/">Deutsch</a> 
                    <a href="<?php bloginfo('template_url'); ?>">Русский</a>
                </div><!--
                --><div class="header-search"><!--
                    --><?php include(TEMPLATEPATH.'/searchform.php'); ?>
                </div><!--
                --><div class="header-description">
                    Производство  теплообменного и отопительного оборудования
                </div><!--
                --><div class="helper"></div>
                <div class="header-phone">
                    <img src="<?php bloginfo('template_url'); ?>/images/phone.png" alt="Телефон" class="header-phone__icon" />
                    <a href="#phone">+7 (351) 729-99-47</a>
                </div>
            </div>
            <img class="header-inform-shadow" src="<?php bloginfo('template_url'); ?>/images/shadow.png" />
            <ul class="header-menu">
                <li class="header-menu__production">
                    <a class="header-menu__header header-menu__header_first" href="production/">Продукция</a>
                </li>
                <li class="header-menu__deals">
                    <a class="header-menu__header" href="deals/">Спецпредложения</a>
                </li>
                <li class="header-menu__clients">
                    <a class="header-menu__header" href="clients/">Клиенты</a>
                </li>
                <li class="header-menu__plant">
                    <div class="header-menu__header">Завод</div>
                    <ul class="header-menu__submenu">
                        <li>
                            <a class="header-submenu__item header-submenu__item_first" href="plant/">Новости</a>
                        </li>
                        <li>
                            <a class="header-submenu__item" href="plant/">Фотогалерея</a>
                        </li>
                        <li>
                            <a class="header-submenu__item" href="plant/">Документация</a>
                        </li>
                        <li>
                            <a class="header-submenu__item" href="plant/">Награды</a>
                        </li>
                        <li>    
                            <a class="header-submenu__item header-submenu__item_last" href="plant/">Работа на заводе</a>
                        </li>
                    </ul>
                </li>
                <li class="header-menu__feedback">
                    <div class="header-menu__header">Обратная связь</div>
                    <ul class="header-menu__submenu">
                        <li>
                            <a class="header-submenu__item header-submenu__item_first" href="feedback/">Контакты</a>
                        </li>
                        <li>
                            <a class="header-submenu__item" href="feedback/">Представительства</a>
                        </li> 
                        <li>
                            <a class="header-submenu__item header-submenu__item_last" href="feedback/">Вопросы и ответы</a>
                        </li>
                    </ul>
                </li>   
            </ul>
            <img class="header-inform-logo" src="<?php bloginfo('template_url'); ?>/images/logo.png" />    
        </div>
        <!--script type="text/javascript">
            (function($){
                /&$('.header-menu__plant').bind('mouseover', function(){
                    $('.header-menu__header_plant').trigger('mouseover'); 
                });
                /*$('.header-menu__plant').bind('mouseout', function(){
                    $('.header-menu__plant > a').css({"display" : "inline-block"}) 
                });*/
            })(jQuery);
        </script-->    
    </header> 
    <div class="wrapper">   

