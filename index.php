<?php
$lang = $_GET['lang'] ? $_GET['lang'] : 'en';
include_once($_SERVER['DOCUMENT_ROOT'] . "/lang/" . $lang . '.php');
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

	<link rel="stylesheet" href="css/jquery.pagepiling.min.css?v=<?= strtotime('now') ?>"/>
	<link rel="stylesheet" href="css/style.css?v=<?= strtotime('now') ?>">
	<link rel="stylesheet" href="css/responsive.css?v=<?= strtotime('now') ?>">
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

<div id="page-loader" class="loader-wrap">
	<div class="loader"></div>
</div>

<header class="header-wrap">
	<div class="header container">
		<div class="lang">
			<div class="lang__item <?= ($lang == 'en') ? 'lang__item_active' : '' ?>"><a href="/?lang=en">EN</a></div>
			<div class="lang__item <?= ($lang == 'ru') ? 'lang__item_active' : '' ?>"><a href="/?lang=ru">RU</a></div>
		</div>
		<nav class="menu navigation">
			<div data-menuanchor="home" class="active menu__item"><a href="#home"><?= HOME ?></a></div>
			<div data-menuanchor="site-ico" class="menu__item"><a href="#site-ico"><?= SERVICES ?></a></div>
			<div data-menuanchor="team" class="menu__item"><a href="#team"><?= TEAM ?></a></div>
			<div data-menuanchor="contacts" class="menu__item"><a href="#contacts"><?= CONTACTS ?></a></div>
		</nav>
		<div class="mob-nav">
			<input type="checkbox" id="mNav" style="display: none">
			<label for="mNav" class="menustate"><span></span></label>
			<nav>
				<ul>
					<li><a href="#home">Home</a></li>
					<li><a href="#site-ico">Services</a></li>
					<li><a href="#team">Team</a></li>
					<li><a href="#contacts">Contacts</a></li>
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
				<img class="service__img" src="img/services/icon-1.svg">
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
				<img class="service__img" src="img/services/icon-2.svg">
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
				<img class="service__img" src="img/services/icon-3.svg">
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
				<img class="service__img" src="img/services/icon-4.svg">
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
					<img class="team__img" src="img/team/1.jpg" alt="face">
					<div class="team__name">Konstantin Kalinouski</div>
					<div class="team__separator">●</div>
					<div class="team__position">CEO & CO - Founder</div>
				</div>
				<div class="team__item">
					<img class="team__img" src="img/team/2.jpg" alt="face">
					<div class="team__name">Nikita Melnikov</div>
					<div class="team__separator">●</div>
					<div class="team__position">CTO & CO - Founder</div>
				</div>
				<div class="team__item">
					<img class="team__img" src="img/team/6.jpg" alt="face">
					<div class="team__name">Elena Samoylova</div>
					<div class="team__separator">●</div>
					<div class="team__position">Product manager</div>
				</div>
				<div class="team__item">
					<img class="team__img" src="img/team/7.jpg" alt="face">
					<div class="team__name">Yuliya Fray</div>
					<div class="team__separator">●</div>
					<div class="team__position">UX/UI Designer</div>
				</div>
				<div class="team__item">
					<img class="team__img" src="img/team/5.jpg" alt="face">
					<div class="team__name">Andrey Petrunin</div>
					<div class="team__separator">●</div>
					<div class="team__position">Marketing Manager</div>
				</div>
				<div class="team__item">
					<img class="team__img" src="img/team/3.jpg" alt="face">
					<div class="team__name">Anton Sirchov</div>
					<div class="team__separator">●</div>
					<div class="team__position">Blockchain developer</div>
				</div>
				<div class="team__item">
					<img class="team__img" src="img/team/4.jpg" alt="face">
					<div class="team__name">Artem Began</div>
					<div class="team__separator">●</div>
					<div class="team__position">Back-and Developer</div>
				</div>
				<div class="team__item">
					<img class="team__img" src="img/team/8.jpg" alt="face">
					<div class="team__name">Sergey Bekish</div>
					<div class="team__separator">●</div>
					<div class="team__position">UX/UI Designer</div>
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
						<a class="phone" target="_blank" href="tel:+79811257276">+7 (981) 125 7276</a>
                        <?= CONTACTS_TEXT2 ?>
						<div class="contacts__soc">
							Telegram — <a class="link" target="_blank" href="https://t.me/loftchain">@loftchain</a>
							<br>Skype — <a class="link" target="_blank" href="skype:loftchain@hotmail.com">live:loftchain</a>
							<br>E-Mail — <a class="link" target="_blank" href="mailto:support@loftchain.io">support@loftchain.io</a>
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
	<a class="menu-services__item" href="#site-ico" data-menuanchor="site-ico"><?= SERVICE1_TITLE ?></a>
	<a class="menu-services__item" href="#back-office" data-menuanchor="back-office"><?= SERVICE2_TITLE ?></a>
	<a class="menu-services__item" href="#smart-contract" data-menuanchor="smart-contract"><?= SERVICE3_TITLE ?></a>
	<a class="menu-services__item" href="#audit-smart-contract"
	   data-menuanchor="audit-smart-contract"><?= SERVICE4_TITLE ?></a>
</nav>

<div class="icon-scroll"></div>

<script src="js/jquery.min.js"></script>
<script>
	var isMobile = window.innerWidth <= 767;

	if (!isMobile) {
		document.write('<scr' + 'ipt defer src="js/three.min.js"></scr' + 'ipt>');
		document.write('<scr' + 'ipt defer src="js/TweenMax.min.js"></scr' + 'ipt>');
		document.write('<scr' + 'ipt defer src="js/sphere.js"></scr' + 'ipt>');
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

</script>

</body>
</html>
