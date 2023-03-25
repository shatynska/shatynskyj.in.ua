<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>Художня ковка: флюгера, шпилі, огорожі, балкони: Шатинський Володимир. Дрогобич.</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Manrope&family=Russo+One&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">
	<style>
		* {
			padding: 0;
			margin: 0;
			border: 0;
		}

		body {
			background-color: rgba(28, 28, 28, 1);
			font-family: 'Manrope', sans-serif;
			font-size: 16px;
			color: rgba(255, 255, 255, 1);
		}

		header {
			grid-area: center;
			text-align: center;
			background-color: rgba(63, 67, 70, 1);
			color: rgba(255, 255, 255, 1);
			padding: 20px;
			display: flex;
			flex-direction: column;
			gap: 32px;
		}

		header address {
			display: flex;
			flex-direction: column;
			gap: 16px;
		}

		footer {
			grid-area: footer;
			background-color: #585C5F;
		}

		a {
			color: #ffffff;
			text-decoration: none;
		}

		h1 {
			font-size: 28px;
			line-height: 32px;
		}

		.container {
			display: grid;
			grid-template-areas:
				'top top top'
				'left center right'
				'footer footer footer';
			grid-template-columns: 1fr 232px 1fr;
			grid-template-rows: 340px 1fr 24px;
			margin: 0 auto;
			max-width: 1374px;
			min-height: 100vh;
		}

		#top {
			grid-area: top;
			height: 340px;
			width: 100%;
			margin: 0 auto;
			background: no-repeat top center url("images/sky-fon.jpg");
		}

		#left {
			grid-area: left;
			margin-left: 40px;
		}

		#right {
			grid-area: right;
			margin-right: 40px;
		}

		.main {
			background-color: rgba(255, 255, 255, 1);
			color: rgba(28, 28, 28, 1);
			margin-top: 40px;
			padding: 20px;
		}

		#company_title {
			font-family: 'Russo One', sans-serif;
			font-size: 40px;
			line-height: 40px;
		}
	</style>
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

			<div>
				Володимир&nbspШатинський
			</div>

			<address>
				<div>
					м.&nbspДрогобич
				</div>
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
			</address>
		</header>

		<div id="left">
			<div class="main">
			</div>
		</div>

		<div id="right">
			<div class="main">
			</div>
		</div>

		<footer>
		</footer>

	</div>

</body>

</html>