<!DOCTYPE html>
<html>

<head>
	<?php include('head.php'); ?>
	<title>404</title>
</head>

<body>

	<div class="wrapper">
		<div class="content">
			<?php include('header.php'); ?>

			<section class='error-404'>
				<div class='container'>
					<div class='error-404__inner'>
						<h1 class="error-404__title">Страница не найдена</h1>
						<div class="error-404__desc">
						Запрошенная вами страница не сайте не найдена. <br>
Попробуйте вернуться назад, или найти нужную страницу самостоятельно.
						</div>
						<a href="index.php" class="error-404__link btn btn-blue shadow">
							<span>ПЕРЕЙТИ НА ГЛАВНУЮ</span>
						</a>
					</div>
				</div>
			</section>

		</div>

		<?php include('footer.php'); ?>
	</div>




	<?php include('modal.php'); ?>

</body>

</html>