<?php
$lang = $_GET['lang'] ? $_GET['lang'] : 'en';
include_once($_SERVER['DOCUMENT_ROOT'] . "/lang/" . $lang . '.php');
$v = 0.1;
?>
<!DOCTYPE html>
<html lang="<?= $lang ?>">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
	<link rel="manifest" href="site.webmanifest">
	<link rel="mask-icon" href="safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="theme-color" content="#ffffff">

	<title><?= TITLE ?></title>

	<meta name="description"
		  content="LoftChain provides technical services for your ICO. Smart contracts, personal cabinets, white papers, landing and splash pages, websites."/>
	<meta itemprop="name" content="LoftChain">
	<meta itemprop="description"
		  content="LoftChain - expert technical services for ICOs. Order smart contract, personal cabinet, white paper, landing or website.">
	<meta itemprop="image" content="https://loftchain.io/img/logo-soc.jpg">
	<meta name="keywords"
		  content="LoftChain, ICO, smart contract, personal cabinet, white paper, landing, website, design, crypto, cryptogames, technical, services, etherium, bitcoin, blockchain"/>

	<!-- Twitter Card data -->
	<meta name="twitter:title" content="LoftChain – expert technical services for ICOs">
	<meta name="twitter:description"
		  content="LoftChain is a team of blockchain experts who will help you develop smart contract, personal cabinet, whitepaper, landing or website.">
	<meta name="twitter:image" content="https://loftchain.io/img/logo-soc.jpg">

	<!-- Open Graph data -->
	<meta property="og:title" content="LoftChain - expert technical services for ICOs"/>
	<meta property="og:type" content="article"/>
	<meta property="og:url" content="https://loftchain.io"/>
	<meta property="og:image" content="https://loftchain.io/img/logo-soc.jpg"/>
	<meta property="og:description"
		  content="LoftChain is a team of blockchain experts who will help you develop smart contract, personal cabinet, white paper, landing or website."/>
	<meta property="og:site_name" content="LoftChain"/>

	<script>
		var savedLang = localStorage.getItem('lang');
		var nowLang = '<?=$lang?>';
		if ( savedLang && savedLang != nowLang ) {
			location.href = '//loftchain.io?lang='+savedLang;
		}
	</script>

	<link rel="stylesheet" href="css/jquery.pagepiling.min.css?v=<?= $v ?>"/>
	<link rel="stylesheet" href="css/style.css?v=<?= $v ?>">
	<link rel="stylesheet" href="css/responsive.css?v=<?= $v ?>">
</head>
<body>
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
	(function (d, w, c) {
		(w[c] = w[c] || []).push(function () {
			try {
				w.yaCounter48285695 = new Ya.Metrika2({
					id: 48285695,
					clickmap: true,
					trackLinks: true,
					accurateTrackBounce: true,
					webvisor: true
				});
			} catch (e) {
			}
		});

		var n = d.getElementsByTagName("script")[0],
			s = d.createElement("script"),
			f = function () {
				n.parentNode.insertBefore(s, n);
			};
		s.type = "text/javascript";
		s.async = true;
		s.src = "https://mc.yandex.ru/metrika/tag.js";

		if (w.opera == "[object Opera]") {
			d.addEventListener("DOMContentLoaded", f, false);
		} else {
			f();
		}
	})(document, window, "yandex_metrika_callbacks2");
</script>
<noscript>
	<div><img src="https://mc.yandex.ru/watch/48285695" style="position:absolute; left:-9999px;" alt=""/></div>
</noscript>
<!-- /Yandex.Metrika counter -->

<!-- BEGIN JIVOSITE CODE {literal} -->
<script type='text/javascript'>
	(function(){ var widget_id = 'GaIpwQ6vtc';var d=document;var w=window;function l(){
		var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/geo-widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();</script>
<!-- {/literal} END JIVOSITE CODE -->

<div id="page-loader" class="loader-wrap">
	<div class="loader"></div>
</div>

<header class="header-wrap">
	<div class="header container">
		<div class="lang">
			<div class="lang__item <?= ($lang == 'en') ? 'lang__item_active' : '' ?>">
				<a href="/?lang=en" rel="nofollow" onclick="setLang('en')">ENG</a>
			</div>
			<div class="lang__item <?= ($lang == 'ru') ? 'lang__item_active' : '' ?>">
				<a href="/?lang=ru" rel="nofollow" onclick="setLang('ru')">РУС</a>
			</div>
			<div class="lang__item <?= ($lang == 'cn') ? 'lang__item_active' : '' ?>">
				<a href="/?lang=cn" rel="nofollow" onclick="setLang('cn')">中文</a>
			</div>
		</div>
		<nav class="menu navigation">
			<div data-menuanchor="home" class="active menu__item"><a href="#home" rel="nofollow" ><?= HOME ?></a></div>
			<div data-menuanchor="site-ico" class="menu__item"><a href="#site-ico" rel="nofollow" ><?= SERVICES ?></a></div>
			<div data-menuanchor="team" class="menu__item"><a href="#team" rel="nofollow" ><?= TEAM ?></a></div>
			<div data-menuanchor="contacts" class="menu__item"><a href="#contacts" rel="nofollow" ><?= CONTACTS ?></a></div>
		</nav>
		<div class="mob-nav">
			<input type="checkbox" id="mNav" style="display: none">
			<label for="mNav" class="menustate"><span></span></label>
			<nav>
				<ul>
					<li><a href="#home" rel="nofollow" ><?= HOME ?></a></li>
					<li><a href="#site-ico" rel="nofollow" ><?= SERVICES ?></a></li>
					<li><a href="#team" rel="nofollow" ><?= TEAM ?></a></li>
					<li><a href="#contacts" rel="nofollow" ><?= CONTACTS ?></a></li>
				</ul>
			</nav>
		</div>
	</div>
</header>

<div id="pagepiling">
	<div id="home" class="section">
		<div class="content">
			<div class="main-info">
				<img class="main-info__mob-img" src="img/mob-main-img.png" alt="main-img">
				<img class="logo" src="img/logo-big.png" alt="logo"><br/>
				<div class="description"><h1><?= DESCRIPTION ?></h1></div>
			</div>
			<canvas class="sphere scene scene--full" id="scene"></canvas>
			<script type="x-shader/x-vertex" id="wrapVertexShader">
				attribute float size;
				attribute vec3 color;
				varying vec3 vColor;
				void main() {
					vColor = color;
					vec4 mvPosition = modelViewMatrix * vec4( position, 1.0 );
					gl_PointSize = size * ( 350.0 / - mvPosition.z );
					gl_Position = projectionMatrix * mvPosition;
				}

			</script>
			<script type="x-shader/x-fragment" id="wrapFragmentShader">
				varying vec3 vColor;
				uniform sampler2D texture;
				void main(){
					vec4 textureColor = texture2D( texture, gl_PointCoord );
					if ( textureColor.a < 0.3 ) discard;
					vec4 color = vec4(vColor.xyz, 1.0) * textureColor;
					gl_FragColor = color;
				}

			</script>
		</div>
	</div>
	<div id="site-ico" class="section">
		<div class="container box_service">
			<div class="service">
				<img class="service__img" src="img/services/icon-1.png">
				<div class="service__info">
					<h2><?= SERVICE1_TITLE ?></h2>
					<div class="service__price"><?= SERVICE1_PRICE ?></div>
					<div class="service__description"><?= SERVICE1_DESC ?></div>
					<ul class="service__benefits"><?= SERVICE1_BENEFITS ?></ul>
				</div>
			</div>
		</div>
	</div>
	<div class="section">
		<div class="container box_service">
			<div class="service service_left">
				<img class="service__img" src="img/services/icon-2.png">
				<div class="service__info">
					<h2><?= SERVICE2_TITLE ?></h2>
					<div class="service__price"><?= SERVICE2_PRICE ?></div>
					<div class="service__description"><?= SERVICE2_DESC ?></div>
					<ul class="service__benefits"><?= SERVICE2_BENEFITS ?></ul>
				</div>
			</div>
		</div>
	</div>
	<div class="section">
		<div class="container box_service">
			<div class="service">
				<img class="service__img" src="img/services/icon-3.png">
				<div class="service__info">
					<h2><?= SERVICE3_TITLE ?></h2>
					<div class="service__price"><?= SERVICE3_PRICE ?></div>
					<div class="service__description"><?= SERVICE3_DESC ?></div>
					<ul class="service__benefits"><?= SERVICE3_BENEFITS ?></ul>
				</div>
			</div>
		</div>
	</div>
	<div class="section">
		<div class="container box_service">
			<div class="service service_left">
				<img class="service__img" src="img/services/icon-4.png">
				<div class="service__info">
					<h2><?= SERVICE4_TITLE ?></h2>
					<div class="service__price"><?= SERVICE4_PRICE ?></div>
					<div class="service__description"><?= SERVICE4_DESC ?></div>
					<ul class="service__benefits"><?= SERVICE4_BENEFITS ?></ul>
				</div>
			</div>
		</div>
	</div>
	<div id="team" class="section">
		<div class="container">
			<h2><?= TEAM ?></h2>
			<div class="team">
				<div class="team__item">
					<img class="team__img" src="img/team/1.jpg?v=2" alt="Nikita Melnikov">
					<div class="team__name">Nikita Melnikov</div>
					<div class="team__separator">●</div>
					<div class="team__position">CTO & co-founder</div>
				</div>
				<div class="team__item">
					<img class="team__img" src="img/team/2_kost.jpg" alt="Kalinouski Kanstantsin">
					<div class="team__name">Kalinouski Kanstantsin</div>
					<div class="team__separator">●</div>
					<div class="team__position">СTO(blockchain) & co-founder</div>
				</div>
				<div class="team__item">
					<img class="team__img" src="img/team/5.jpg?v=2" alt="Andrey Petrunin">
					<div class="team__name">Andrey Petrunin</div>
					<div class="team__separator">●</div>
					<div class="team__position">CMO</div>
				</div>
				<div class="team__item">
					<img class="team__img" src="img/team/6.jpg?v=2" alt="Elena Samoylova">
					<div class="team__name">Elena Samoylova</div>
					<div class="team__separator">●</div>
					<div class="team__position">COO</div>
				</div>
				<div class="team__item">
					<img class="team__img" src="img/team/7.jpg?v=2" alt="Yuliya Fray">
					<div class="team__name">Yuliya Fray</div>
					<div class="team__separator">●</div>
					<div class="team__position">Art Director</div>
				</div>
				<div class="team__item">
					<img class="team__img" src="img/team/3.jpg?v=2" alt="Alexander Shamekov">
					<div class="team__name">Alexander Shamekov</div>
					<div class="team__separator">●</div>
					<div class="team__position">Marketing manager (China)</div>
				</div>
				<div class="team__item">
					<img class="team__img" src="img/team/4.jpg?v=2" alt="Artem Began">
					<div class="team__name">Artem Began</div>
					<div class="team__separator">●</div>
					<div class="team__position">Senior back-end developer</div>
				</div>
				<div class="team__item">
					<img class="team__img" src="img/team/8.jpg?v=2" alt="Sergey Bekish">
					<div class="team__name">Sergey Bekish</div>
					<div class="team__separator">●</div>
					<div class="team__position">Senior front-end developer</div>
				</div>
			</div>
		</div>
	</div>
	<div id="contacts" class="section">
		<div class="container">
			<div class="contacts">
				<div class="contacts__info">
					<h2><?= CONTACTS ?></h2>
					<div class="contacts__desc">
                        <?= CONTACTS_TEXT1 ?>
						<a class="phone" target="_blank" rel="nofollow" href="tel:+79811257276">+7 (981) 125 7276</a>
                        <?= CONTACTS_TEXT2 ?>
						<div class="contacts__soc">
							Telegram — <a class="link" target="_blank" rel="nofollow" href="https://t.me/loftchain">@loftchain</a>
							<br>WhatsUp — <a class="link" target="_blank" rel="nofollow" href="https://api.whatsapp.com/send?phone=79811257276">79811257276</a>
							<br>WeChat — <a class="link" target="_blank" rel="nofollow" href="weixin://dl/chat?loftchain">loftchain</a>
							<br>Skype — <a class="link" target="_blank" rel="nofollow" href="skype:loftchain@hotmail.com">live:loftchain</a>
							<br>E-Mail — <a class="link" target="_blank" rel="nofollow" href="mailto:support@loftchain.io">support@loftchain.io</a>
						</div>
					</div>
				</div>
				<form class="feedback">
					<div id="form-loader" class="loader-wrap">
						<div class="loader"></div>
					</div>
					<input name="where" required type="text" placeholder="<?= INPUT1 ?>">
					<input name="name" type="text" placeholder="<?= INPUT2 ?>">
					<textarea name="msg" required rows="5"></textarea>
					<input class="btn" type="submit" value="<?= INPUT3 ?>">
				</form>
			</div>
		</div>
	</div>
</div>

<nav class="menu-services navigation">
	<a class="menu-services__item" rel="nofollow" href="#site-ico" data-menuanchor="site-ico"><?= SERVICE1_TITLE ?></a>
	<a class="menu-services__item" rel="nofollow" href="#back-office" data-menuanchor="back-office"><?= SERVICE2_TITLE ?></a>
	<a class="menu-services__item" rel="nofollow" href="#smart-contract" data-menuanchor="smart-contract"><?= SERVICE3_TITLE ?></a>
	<a class="menu-services__item" rel="nofollow" href="#audit-smart-contract"
	   data-menuanchor="audit-smart-contract"><?= SERVICE4_TITLE ?></a>
</nav>

<div class="icon-scroll"></div>

<script src="js/jquery.min.js"></script>
<script>
	var isMobile = window.innerWidth <= 767;

	if (!isMobile) {
		document.write('<scr' + 'ipt defer src="js/three.min.js"></scr' + 'ipt>');
		document.write('<scr' + 'ipt defer src="js/TweenMax.min.js"></scr' + 'ipt>');
		document.write('<scr' + 'ipt defer src="js/sphere.js?v=<?= $v ?>"></scr' + 'ipt>');
		document.write('<scr' + 'ipt defer src="js/jquery.pagepiling.min.js"></scr' + 'ipt>');
	}

	$(window).load(function () {
		$('#page-loader').hide();
	});

	$(document).ready(function () {
		if (!isMobile) {
			$('#pagepiling').pagepiling({
				direction: 'horizontal',
				menu: '.navigation',
				scrollingSpeed: 300,
				easing: 'swing',
				loopBottom: false,
				loopTop: false,
				css3: true,
				keyboardScrolling: true,
				anchors: ['home', 'site-ico', 'back-office', 'smart-contract', 'audit-smart-contract', 'team', 'contacts'],
				sectionsColor: ['#000', '#000', '#000', '#000', '#000', '#000', '#000'],
				navigation: false,
				onLeave: function (index, nextIndex, direction) {
					if (nextIndex !== 2 && nextIndex !== 3 && nextIndex !== 4 && nextIndex !== 5) {
						$('.menu-services').removeClass('menu-services_active');
						$('.menu .menu__item[data-menuanchor="site-ico"]').removeClass('active');
					}
				},
				afterRender: function (index) {
				},
				afterLoad: function (anchorLink, index) {
					if (index === 2 || index === 3 || index === 4 || index === 5) {
						$('.menu-services').addClass('menu-services_active');
						$('.menu .menu__item[data-menuanchor="site-ico"]').addClass('active');
					}
				}
			});
		} else {
			$('.mob-nav nav ul li a').click(function () {
				event.preventDefault();
				$('#mNav').click();
				$('html, body').animate({scrollTop:$(this.hash).offset().top - 60}, 700);
			});
		}

		$("form").submit(function () {
			$('form input[type=submit]').attr('disabled', 'disabled');
			$('#form-loader').show();
			$.ajax({
				type: "POST",
				url: "feedback.php",
				data: $(this).serialize()
			}).done(function (data) {
				console.log(data);
				$('#form-loader').hide();
				$('form').trigger('reset');
				$('form input[type=submit]').removeAttr('disabled');
				alert("<?=SEND_SUCCESS?>");
			});
			return false;
		});
	});

	window.onscroll = function() {
		var scrolled = window.pageYOffset || document.documentElement.scrollTop;
		if(scrolled > 0) {
			document.querySelector('.icon-scroll').style.display = 'none';
		} else {
			document.querySelector('.icon-scroll').style.display = 'block';
		}
	}

	function setLang(newLang, event) {
		event = event || window.event
		if (event.preventDefault) {
			event.preventDefault();
		} else {
			event.returnValue = false;
		}

		localStorage.setItem('lang', newLang);
		location.href = '//loftchain.io?lang='+newLang;
	}


</script>

</body>
</html>
