<?php

declare(strict_types=1);

require_once('../app.php');

?>

<!DOCTYPE html>
<html lang="uk-UA">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	
	<title>Художня ковка: флюгера, шпилі, ворота, огорожі та інші ковані вироби. Замовити в Дрогобичі.</title>
	<meta name="description" content="Виготовлення на замовлення кованих скульптур та інших виробів з металу, зокрема флюгерів та шпилів. Художня обробка металу. &#9743; 8 (068) 961 16 63. Дрогобич" />
	
	<link rel="icon" href="favicon.ico">
	<link rel="apple-touch-icon" sizes="180x180" href="/images/favicons/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/images/favicons/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/images/favicons/favicon-16x16.png">
	<link rel="manifest" href="/images/favicons/site.webmanifest">
	
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Manrope&family=Russo+One&display=swap" rel="stylesheet">
	
	<link rel="stylesheet" href="css/style.css">
	
	<script defer src="js/gallery.js"></script>
	
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-YZHKL87ZP3"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'G-YZHKL87ZP3');
	</script>
</head>

<body>
	
	<div class="container">

		<header>
			<div id="company-title">
				СТАЛЕВЕ НЕБО
			</div>

			<h1>
				художня ковка
			</h1>

			<div>
				флюгера, шпилі
				та&nbsp;інші ковані вироби
			</div>

			<h1>
				<a href="tel:+380689611663" id="tel">
					068 96 11 663
				</a>
			</h1>

			<address>
				<div>
					Володимир Шатинський
				</div>
				<div>
					<a href="mailto:shatynskyj@gmail.com">
						shatynskyj&shy;@gmail.com
					</a>
				</div>
				<div>
					м.&nbsp;Дрогобич
				</div>
			</address>
		</header>
		
		<div id="first-half-of-line" class="line"></div>
		<div id="second-half-of-line" class="line"></div>

		<section id="first-half-of-selected-projects" class="first-half">
			<?php renderProjects($db, 4, 0, true); ?>
		</section>

		<section id="second-half-of-selected-projects" class="second-half">
			<?php renderProjects($db, 4, 4, true); ?>
		</section>

		<section id="first-text" class="first-half">
			<?php renderText($db, 1); ?>
		</section>
		
		<section id="second-text" class="second-half">
			<?php renderText($db, 2); ?>
		</section>

		<section id="first-half-of-other-projects" class="first-half">
			<?php renderProjects($db, 8, 8, false); ?>
		</section>
		
		<section id="second-half-of-other-projects" class="second-half">
			<?php renderProjects($db, 8, 16, false); ?>
		</section>

		<footer>
			<div class="contact">	
			<h1>
				<a href="tel:+380689611663" id="tel">
					068 96 11 663
				</a>
			</h1>
			<div>
				<a href="mailto:shatynskyj@gmail.com">
					shatynskyj&shy;@gmail.com
				</a>
			</div>	
			</div>	
			<div class="image"></div>	
		</footer>

	</div>

</body>

</html>