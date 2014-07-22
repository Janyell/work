<!doctype html>
<html>
<head>
    <meta http-equiv="Content-type" content="text/html; charset=<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <title><?php wp_title('«', true, 'right'); ?> <?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/reset.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <!--link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,300" type="text/css"-->
    <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
    <![endif]-->
    <!--?php wp_head(); ?-->
    <script src="http://localhost:8000/wordpress/jquery.min.js"></script>
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
                    <a href="#" class="phone__a-modal">+7 (351) 729-99-47</a>
                </div>
            </div>
            <img class="header-inform-shadow" src="<?php bloginfo('template_url'); ?>/images/shadow.png" />
            <ul class="header-menu">
                <?php $cat_ID = get_query_var('cat');
                $cur_url = get_url();
                $representation_url = 'representation';
                $photos_url = 'photos';
                $contacts_url = '/contacts';
                ?>
                <li class="header-menu__production">
                    <a class="header-menu__header header-menu__header_first <?php if ($cat_ID == 4 || $cat_ID >= 9 && $cat_ID <= 18) echo "header-item_active"; ?>" href="<?php echo get_category_link(4); ?>">Продукция</a>
                </li>
                <li class="header-menu__clients">
                    <a class="header-menu__header <?php if ($cat_ID == 5) echo "header-item_active"; ?>" href="<?php echo get_category_link(5); ?>">Клиенты</a>
                </li>
                <li class="header-menu__plant">
                    <div class="header-menu__header">Завод</div>
                    <ul class="header-menu__submenu">
                        <li>
                            <a class="header-submenu__item header-submenu__item_first <?php if ($cat_ID == 3) echo "header-item_active"; ?>" href="<?php echo get_category_link(3); ?>">Новости</a>
                        </li>
                        <li>
                            <a class="header-submenu__item  <?php if ($cur_url == $photos_url)  echo "header-item_active"; ?>" href="<?php echo get_home_url().'/'.$photos_url ?>">Фотогалерея</a>
                        </li>
                        <li>
                            <a class="header-submenu__item header-submenu__item_last <?php if ($cat_ID == 8) echo "header-item_active"; ?>" href="<?php echo get_category_link(8); ?>">Документация</a>
                        </li>
                    </ul>
                </li>
                <li class="header-menu__feedback">
                    <div class="header-menu__header">Обратная связь</div>
                    <ul class="header-menu__submenu">
                        <li>
                            <a class="header-submenu__item header-submenu__item_first <?php if ($cat_ID == 6)  echo "header-item_active"; ?>" href="<?php echo get_category_link(6); ?>">Вопросы-ответы</a>
                        </li>
                        <li>
                            <a class="header-submenu__item <?php if ($cur_url == $contacts_url)  echo "header-item_active"; ?>" href="<?php echo get_home_url().'/'.$contacts_url; ?>">Контакты</a>
                        </li> 
                        <li>
                            <a class="header-submenu__item header-submenu__item_last <?php if ($cur_url == $representation_url)  echo "header-item_active"; ?>" href="<?php echo get_home_url().'/'.$representation_url; ?>">Представительства</a>
                        </li>
                    </ul>
                </li>   
            </ul>
            <img class="header-logo" src="<?php bloginfo('template_url'); ?>/images/logo.png" />
        </div>
        <?php get_modal_window(
        $phone_code = "351", 
        $phones = "729-99-47,  729-99-48,  247-63-64,  777-20-72", 
        $email = "opt@zavodtriumf.ru", 
        $address = "ООО «Завод Триумф», г. Челябинск, ул. Автодорожная, д. 3",
        $id = 'phone'
        );
        ?>    
    </header>
    <div class="wrapper">
