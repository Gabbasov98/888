<!DOCTYPE html>
<html>

	<head>
		<?php include('head.php'); ?>
	</head>

	<body >
		<style>
			.jlist {
				padding-top: 40px;
			}

			.jcont li {
				display: block;
				margin-bottom: 10px;
			}

			li a {
				color: #000000;
				font-size: 14px;
			}	/* background: #000; */
			
		</style>
		
		<div class="page_wrapper">
			<div class="page_wrapper_content">
				<section class="jlist">
					<div class="container">
					<div class="jcont">
						<ul>
							<li>
								<a href="index.php" target="_blank">
									Index
								</a>
							</li>
							
							<li>
								<a href="404.php" target="_blank">
									404
								</a>
							</li>
							<li>
								<a href="about.php" target="_blank">
									About
								</a>
							</li>
							<li>
								<a href="catalog.php" target="_blank">
									catalog
								</a>
							</li>
							<li>
								<a href="catalog-item.php" target="_blank">
									catalog-item
								</a>
							</li>
							<li>
								<a href="catalog-raw-item.php" target="_blank">
									catalog-raw-item
								</a>
							</li>
							<li>
								<a href="catalog-list.php" target="_blank">
									catalog-list
								</a>
							</li>
							<li>
								<a href="catalog-raw-list.php" target="_blank">
									catalog-raw-list
								</a>
							</li>
							<li>
								<a href="catalog-raw-category.php" target="_blank">
									catalog-raw-category
								</a>
							</li>
							<li>
								<a href="catalog-category.php" target="_blank">
									catalog-category
								</a>
							</li>
							<li>
								<a href="contacts.php" target="_blank">
									contacts
								</a>
							</li>
							<li>
								<a href="info.php" target="_blank">
									info
								</a>
							</li>
							<li>
								<a href="search.php" target="_blank">
									search
								</a>
							</li>
							<li>
								<a href="textpage.php" target="_blank">
									textpage
								</a>
							</li>
							
						</ul>
						<button style="border:1px solid black; margin-top: 20px; margin-left: 20px; width: 300px; height: 50px;" type="button" data-toggle="modal" data-target="#modal1">modal1</button>
						<button style="border:1px solid black; margin-top: 20px; margin-left: 20px; width: 300px; height: 50px;" type="button" data-toggle="modal" data-target="#modal2">modal2</button>
						<button style="border:1px solid black; margin-top: 20px; margin-left: 20px; width: 300px; height: 50px;" type="button" data-toggle="modal" data-target="#modal3">modal3</button>
						<button style="border:1px solid black; margin-top: 20px; margin-left: 20px; width: 300px; height: 50px;" type="button" data-toggle="modal" data-target="#modal4">modal4</button>

						
					</div></div>
				</section>
			</div>
			<?php include('modal.php'); ?>
		</div>
		<script src="js/jquery-1.11.3.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.nice-select.min.js"></script>
		<script src="js/jquery.maskedinput.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.fancybox.min.js"></script>
		<script src='js/jquery.mCustomScrollbar.concat.min.js'></script>
		<script src="js/swiper.js"></script>
		<script src="js/index.js"></script>
	</body>

</html>