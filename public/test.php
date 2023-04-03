<?php

declare(strict_types=1);

require_once('../app.php');

?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>Художня ковка: флюгера, шпилі, ворота, огорожі та інші ковані вироби. Замовити в Дрогобичі.</title>
	<meta name="description" content="Виготовлення на замовлення кованих скульптур та інших виробів з металу, зокрема флюгерів та шпилів. Художня обробка металу. &#9743; 8 (068) 961 16 63. Дрогобич" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Manrope&family=Russo+One&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
	<div class="container">

		<div id="top">
		</div>

		<header>
			<div id="company_title">
				СТАЛЕВЕ НЕБО
			</div>

			<h1>
				художня ковка
			</h1>

			<div>
				флюгера, шпилі
				та&nbspінші ковані вироби
			</div>

			<h1>
				<a href="tel:+380689611663" id="tel">
					068 961 16 63
				</a>
			</h1>

			<address>
				<div>
					Володимир&nbspШатинський
				</div>
				<div>
					<a href="mailto:shatynskyj@gmail.com">
						shatynskyj@gmail.com
					</a>
				</div>
				<div>
					м.&nbspДрогобич
				</div>
			</address>
		</header>

		<div id="left">
			<div class="line"></div>
			<div class="main">
				<?php renderProjects($db, 4, 0, true); ?>
			</div>
		</div>

		<div id="right">
			<div class="line"></div>
			<div class="main">
				<?php renderProjects($db, 4, 4, true); ?>
			</div>
		</div>

	</div>

	<footer>
	</footer>

</body>

</html>