<?php

require_once('projects.php');

$leftProjects = [240, 130, 50, 250, 150, 40, 60, 200, 220, 70, 100, 80];
$rightProjects = [20, 30, 140, 120, 210, 160, 170, 180, 230, 190, 110, 90];

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

			<address>
				<div>
					<a href="tel:+380689611663" id="tel">
						+380689611663
					</a>
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
			<div>
				Володимир&nbspШатинський
			</div>
		</header>

		<div id="left">
			<div class="line"></div>
			<div class="main">
				<?php renderProjects($leftProjects); ?>
			</div>
		</div>

		<div id="right">
			<div class="line"></div>
			<div class="main">
				<?php renderProjects($rightProjects); ?>
			</div>
		</div>

		<footer>
		</footer>

	</div>

</body>

</html>