<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>kiss</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link href="/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon">

<!-- build:remove -->
	<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=PT+Serif:400,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
<!-- /build -->
<!-- build:css inline ../../../dev/css/meta.min.css -->
	<link href="/css/meta.css" rel="stylesheet">
<!-- /build -->
<!-- build:remove -->
	<link href="/css/style.css" rel="stylesheet">
<!-- /build -->
<!-- build:template
	<script>
	(function(u){function loadCSS(e,t,n){"use strict";function r(){for(var t,i=0;i<d.length;i++)d[i].href&&d[i].href.indexOf(e)>-1&&(t=!0);t?o.media=n||"all":setTimeout(r)}var o=window.document.createElement("link"),i=t||window.document.getElementsByTagName("script")[0],d=window.document.styleSheets;return o.rel="stylesheet",o.href=e,o.media="only x",i.parentNode.insertBefore(o,i),r(),o}for(var i in u){loadCSS(u[i]);}}(['http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300&subset=latin,cyrillic','http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800&subset=latin,cyrillic','http://fonts.googleapis.com/css?family=PT+Serif:400,700&subset=latin,cyrillic']));
	</script>
<!-- /build -->
<script>function menu(){document.getElementById('cd-primary-nav').classList.toggle('nav-is-visible');document.getElementById('cd-main-header').classList.toggle('nav-is-visible');return false;}</script>
</head>
<body>

<header class="header">
	<div class="home-fon"></div>
	<ul class="nav nav-tabs nav-justified">
		<li><a href="javascript:void(0);"><img src="/img/logo-header.png" class="header-logo" alt="kiss logo"></a></li>
		<li><a href="javascript:void(0);">Частным клиентам</a></li>
		<li><a href="javascript:void(0);">Организациям</a></li>
		<li><a href="javascript:void(0);">Частному сектору</a></li>
		<li><a href="tel:+74923264809">(49232) 64-809</a></li>
		<li><button type="button" class="navbar-toggle" id="menu-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button></li>
	</ul>
</header>

<div class="home">
	<img class="home-fon" src="/img/homepage/premium.png" alt="Фон kiss">
	<div class="container home-block">
		<h2 class="home-h2">Больше интернета</h2>
		<p class="home-text">За меньшие деньги</p>
		<img class="home-img">
		<div class="home-btn"><a href="javascript:void(0);" class="home-href">Попробовать неделю<br>интернета бесплатно</a></div>
	</div>
</div>

<div class="tarif">
	<img class="tarif-fon" src="/img/homepage/tarif1.png" alt="Фон kiss">
	<div class="container">
<?php $tarif=json_decode('[
	{"url":"","img":"","h2":"Тариф стартовый","span":"Пора начать","text":"Тариф \"Стартовый\" повзоляет вам с полным комфортом использовать социальные сети, искать всю важную информацию, а также пользоваться электронной почтой","speed":"10 Мб/с","cost":"250"},
	{"url":"","img":"","h2":"Тариф второй","span":"Пора начать","text":"Тариф \"Стартовый\" повзоляет вам с полным комфортом использовать социальные сети, искать всю важную информацию, а также пользоваться электронной почтой","speed":"10 Мб/с","cost":"250"},
	{"url":"","img":"","h2":"Тариф третий","span":"Пора начать","text":"Тариф \"Стартовый\" повзоляет вам с полным комфортом использовать социальные сети, искать всю важную информацию, а также пользоваться электронной почтой","speed":"10 Мб/с","cost":"250"},
	{"url":"","img":"","h2":"Тариф четвертый","span":"Пора начать","text":"Тариф \"Стартовый\" повзоляет вам с полным комфортом использовать социальные сети, искать всю важную информацию, а также пользоваться электронной почтой","speed":"10 Мб/с","cost":"250"}
]',true);
foreach ($tarif as $row) { ?>
		<div class="tarif-block">
			<img src="<?php echo $row['img'];?>" alt="<?php echo $row['text'];?>">
			<p><?php echo $row['text'];?></p>
		</div>
		<div class="slider">
			<div class="slider-btn"></div>
			<div class="slider-left"></div>
			<div class="slider-right"></div>
		</div>
<?php } ?>
	</div>
</div>

<div class="premium">
	<img class="premium-fon" src="/img/homepage/premium.png" alt="Фон kiss">
	<div class="container"><div class="row">
<?php $premium=json_decode('[
	{"img":"","text":"Стабильная работа"},
	{"img":"","text":"Круглосуточная тех. поддержка"},
	{"img":"","text":"С нами легко и удобно связаться VK, OK, MAIL, FB и т.д."},
	{"img":"","text":"Чистый монтаж"},
	{"img":"","text":"Подключение интернета в день обращения"},
	{"img":"","text":"Уже более 6000 абонентов"}
]',true);
foreach ($premium as $row) { ?>
		<div class="col-md-4 text-center">
			<img src="<?php echo $row['img'];?>" alt="<?php echo $row['text'];?>" class="premium-img">
			<p class="premium-text"><?php echo $row['text'];?></p>
		</div>
<?php } ?>
	</div></div>
</div>

<div class="about">
	<img class="about-fon" src="/img/homepage/about.png" alt="Фон kiss">
	<div class="container text-center">
		<h2 class="about-h2">Добрый день.</h2>
		<p class="about-text">Мы искренне верим, что любовь к своему делу, способна дать людям что-то большее чем просто хороший продукт.<br>Философия и жизненный опыт художника может вдохнуть в его продукт душу.<br>Человеческое лицо и душа хорошего продукта всегда будет привлекать людей к нему.</p>
	</div>
</div>

<footer class="footer">
	<div class="container"><div class="row">
		<div class="col-sm-4"><p class="text-right">
			<a href="http://creative-seo.ru" class="footer-href">Creative SEO</a>
		</p></div>
		<div class="col-sm-4"><p class="text-center">
			<img src="/img/logo-footer.png" class="footer-logo" alt="kiss logo"><br>
			<a href="tel:+74923264809">(49232) 64-809</a>
		</p></div>
		<div class="col-sm-4"><ul class="list-unstyled">
		  	<li><a href="javascript:void(0);" class="footer-href"><i class="fa fa-vk fa-stack-1x"></i></a></li>
		    <li><a href="javascript:void(0);" class="footer-href"><i class="fa fa-odnoklassniki fa-stack-1x"></a></li>
		    <li><a href="javascript:void(0);" class="footer-href"><i class="fa fa-facebook fa-stack-1x"></a></li>
		    <li><a href="javascript:void(0);" class="footer-href"><i class="fa fa-google-plus fa-stack-1x"></a></li>
  		</ul></div>
		<div class="col-sm-12"><p class="text-center">
			2015
		</p></div>
	</div></div>
</footer>

<!-- build:remove -->
<script src="/libs/jquery/dist/jquery.min.js"></script>
<script src="/libs/bootstrap-sass/assets/javascripts/bootstrap.js"></script>
<script src="/libs/mega-site-navigation/js/main.js"></script>
<script src="/js/common.js"></script>
<!-- /build -->

<!-- build:template
<script>
var ms=document.createElement("link");ms.rel="stylesheet";
ms.href="/css/style.min.css";document.getElementsByTagName("head")[0].appendChild(ms);
</script>
<script>
var scr = {"scripts":[{"src" : "/js/scripts.min.js", "async" : false}]};
!function(t,n,r){"use strict";var c=function(t){if("[object Array]"!==Object.prototype.toString.call(t))return!1;for(var r=0;r<t.length;r++){var c=n.createElement("script"),e=t[r];c.src=e.src,c.async=e.async,n.body.appendChild(c)}return!0};t.addEventListener?t.addEventListener("load",function(){c(r.scripts);},!1):t.attachEvent?t.attachEvent("onload",function(){c(r.scripts)}):t.onload=function(){c(r.scripts)}}(window,document,scr);
</script>
/build -->

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!--<script src="/js/bootstrap.min.js"></script>-->
       <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</body>
</html>
