<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title><?php echo $title; ?></title>
		<meta name="descripnion" content="UnitStore - інтернет магазин"></meta>
		<meta name="keyword" content="магазин, електронна комерція, товари"></meta>
		<link rel="stylesheet" href='/public/styles/style.css'>
		<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
	</head>
	<body>
	<div class="main">

		<div class="header">
			<div class="logo">
				<div id="user_office">
					<?php
						if (empty($_SESSION['user_id'])) {
							echo '<a href="/account/login"><img class="header_img" src="/public/images/login.png" alt=""></a><br>';
							echo '<a href="/account/register"><img class="header_img" src="/public/images/register.png" alt=""></a><br>';
						}
						if (!empty($_SESSION['user_id']))
							echo '<a href="/account/logout"><img class="header_img" src="/public/images/out.svg" alt="" ></a><br>';
						if (!empty($_SESSION['user_id']) && $_SESSION['user_type'] == 0) {
							echo '<a href="/store/basket"';
							if ((!empty($_SESSION['basket'])) && count($_SESSION['basket']) > 0)
								echo' class="header_basket" count="'. ((!empty($_SESSION['basket'])) ? count($_SESSION['basket']) : 0) .'"';
							echo'><img class="header_img" src="/public/images/basket.svg" alt=""></a>';
						}
					?>
					
				</div>
				<div class="logo_text">
					<h1><a class="" href="/">OK_Market</a></h1>
					<h2>OK_Market - інновації для вас</h2>	
				</div>

			</div>
			<div class="menubar">
				<ul class="menu">
					<?php 
						if (!empty($_SESSION['user_id']) && !empty($_SESSION['user_type'])) {
							echo '<li class="selected"><a href="/">Головна</a></li>';
							echo '<li class="selected"><a href="/manager/client">Користувачі</a></li>';
							echo '<li class="selected"><a href="/manager/item">Товари</a></li>';
							echo '<li class="selected"><a href="/manager/sales">Історія продажів</a></li>';
						}
					?>
				</ul>
			</div>

		</div>
		<div class="content">
			<?php echo $content; ?>
			
		</div>
		<div class="footer">
			<p>© Oleksii Khersoiuk | <br> oleksii.khersoniuk@gmail.com | <br>2019</p>
		</div>
	</div>
	</body>
</html>