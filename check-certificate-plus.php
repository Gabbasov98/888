<!DOCTYPE html>
<html>

<head>
	<?php include('head.php'); ?>
	<title>Проверка сертификата</title>
</head>

<body>

	<div class="wrapper">
		<div class="content">
			<?php include('header.php'); ?>

			<section class='certificate certificate--nobg'>
				<div class="breadcrumbs breadcrumbs--center">
					<div class="container">
						<h1 class="breadcrumbs__title">Проверка сертификата</h1>
						<div class='breadcrumbs__wrap'>
							<a class='breadcrumbs__item' href='index.php'>
								Главная
							</a>
							<a href="" class='breadcrumbs__item'>
								Сертификаты
							</a>
							<span class='breadcrumbs__item'>
								Проверка
							</span>
						</div>
					</div>
				</div>


				<div class='container'>
					<p class="certificate__desc">
						Для проверки данных по вашему подарочному сертификату - <br>
						введите его номер, <br>
						и проверочный код с обратной стороны.
					</p>
					<form action="" class="certificate__form">
						<div class="form-group">
							<input type="text">
							<label for="">номер сертификата</label>
						</div>
						<div class="form-group certificate__form-code">
							<input type="number">
							<label for="">контрольный код</label>
							<svg width="15" height="15" id="Слой_1" data-name="Слой 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.99 14.99">
								<circle fill="#474747" cx="7.5" cy="3.79" r="1.02"></circle>
								<path fill="#d6d6d6" d="M298.55,413h-9.11a2.94,2.94,0,0,0-2.94,2.94V425a2.94,2.94,0,0,0,2.94,2.94h9.11a2.94,2.94,0,0,0,2.94-2.94v-9.11A2.94,2.94,0,0,0,298.55,413ZM300.13,425a1.58,1.58,0,0,1-1.58,1.58h-9.11a1.58,1.58,0,0,1-1.58-1.58v-9.11a1.58,1.58,0,0,1,1.58-1.58h9.11a1.58,1.58,0,0,1,1.58,1.58Z" transform="translate(-286.5 -412.99)"></path>
								<path fill="#d6d6d6" d="M295.4,423.89h-.72v-5.45h-2a.68.68,0,0,0,0,1.36h.64v4.09h-.64a.69.69,0,0,0,0,1.37h2.73a.69.69,0,0,0,0-1.37Z" transform="translate(-286.5 -412.99)"></path>
							</svg>
						</div>
						<button class="certificate__form-btn btn btn-blue shadow">
							<span>ПРОВЕРИТЬ СЕРТИФИКАТ</span>
						</button>
						<span class="certificate__form-rect certificate__form-rect-left-top"></span>
						<span class="certificate__form-rect certificate__form-rect-left-bottom"></span>
						<span class="certificate__form-rect certificate__form-rect-right-top"></span>
						<span class="certificate__form-rect certificate__form-rect-right-bottom"></span>

						<div class="certificate__data">
							<div class="certificate__data-top">
								<div class="certificate__data-title">Данные подарочного сертификата</div>
								<button class="certificate__data-close">
									<svg width="17 " height="17 " id="Слой_1" data-name="Слой 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.72 14.79"><path fill="#909090" d="M301.34,414.18l-6.3,6.29,6.31,6.3-1,1-6.26-6.27-6.38,6.37-1-1.05,6.29-6.3-6.33-6.33,1-1,6.27,6.28,6.37-6.38Z" transform="translate(-286.64 -413.09)"></path></svg>
								</button>
							</div>
							<div class="certificate__data-row1">
								<div class="certificate__data-item">
									<div class="certificate__data-desc certificate__data-desc--big">15002142</div>
									<div class="certificate__data-title">номер сертификата</div>
								</div>
								<div class="certificate__data-item">
									<div class="certificate__data-desc">05.12.2021</div>
									<div class="certificate__data-title">дата продажи</div>
								</div>
								<div class="certificate__data-item">
									<div class="certificate__data-desc">05.06.2022</div>
									<div class="certificate__data-title">дата окончания действия</div>
								</div>
							</div>
							<div class="certificate__data-row2">
								<div class="certificate__data-item">
									<div class="certificate__data-title">Сумма сертификата:</div>
									<div class="certificate__data-desc certificate__data-desc--big">30 000 руб.</div>
								</div>
								<div class="certificate__data-item">
									<div class="certificate__data-title">На автомобиль:</div>
									<div class="certificate__data-desc certificate__data-desc--medium">Porsche Boxter S</div>
									<a href="" class="certificate__data-link btn btn-link">
										<span>детали по автомобилю</span>
										<svg width="16" height="7" id="Слой_1" data-name="Слой 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21.78 9.98">
											<path fill="#08b3c5" d="M283.07,420.33a.67.67,0,0,1,.63-.3h19.59l-.18-.18-3.45-3.46-.15-.15a.45.45,0,0,1,0-.62.43.43,0,0,1,.6,0l.21.2,4.32,4.31a.47.47,0,0,1,0,.73l-4.39,4.38a1,1,0,0,1-.19.17.43.43,0,0,1-.55,0,.44.44,0,0,1-.08-.56,1.24,1.24,0,0,1,.19-.21l3.44-3.44a1.27,1.27,0,0,1,.19-.13l-.05-.08H283.69a.64.64,0,0,1-.62-.31Z" transform="translate(-283.07 -415.5)"></path>
										</svg>
									</a>
								</div>
							</div>
						</div>
					</form>
					<a href="" class="certificate__rules btn btn-grey-outline">ПРАВИЛА СЕРТИФИКАТОВ</a>
					<div class="certificate__hint">Ответим на любые ваши вопросы по сертификатам:</div>
					<div class="certificate__contacts">
						<div class="certificate__contacts-phone">
							<svg width="11" height="19" id="Слой_1" data-name="Слой 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 10.6 16.96">
								<path fill="#ffffff" d="M297.7,412h-7.42a1.59,1.59,0,0,0-1.59,1.59v13.78a1.6,1.6,0,0,0,1.59,1.59h7.42a1.59,1.59,0,0,0,1.59-1.59V413.6A1.59,1.59,0,0,0,297.7,412Zm-5.3,1.06h3.18v.53a.53.53,0,0,1-.53.53h-2.12a.53.53,0,0,1-.53-.53Zm5.83,14.31a.53.53,0,0,1-.53.53h-7.42a.53.53,0,0,1-.53-.53V413.6a.53.53,0,0,1,.53-.53h1.06v.53a1.6,1.6,0,0,0,1.59,1.59h2.12a1.59,1.59,0,0,0,1.59-1.59v-.53h1.06a.52.52,0,0,1,.53.53Z" transform="translate(-288.69 -412.01)"></path>
								<path fill="#ffffff" d="M294.52,425.79h-1.06a.53.53,0,0,0-.53.53.53.53,0,0,0,.53.53h1.06a.53.53,0,0,0,.53-.53A.52.52,0,0,0,294.52,425.79Z" transform="translate(-288.69 -412.01)"></path>
							</svg>
							<div>
								<a href="">8 800 2014 888</a>
								<span>бесплатно по всей России</span>
							</div>
						</div>
						<div class="certificate__contacts-whatsapp">
							<a href="">8 924 259 0089</a>
							<svg width="13" height="13" id="Слой_1" data-name="Слой 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12.25 12.25">
								<path fill="#fff" d="M300.12,420.43A6.12,6.12,0,0,1,294,426.5h0a6.06,6.06,0,0,1-2.9-.73l-3.22.84.86-3.14a6.08,6.08,0,0,1,5.26-9.11,6,6,0,0,1,4.29,1.78A6.08,6.08,0,0,1,300.12,420.43Zm-1,0a5.07,5.07,0,1,0-9.37,2.69l.12.19-.51,1.86,1.91-.5.18.11a5,5,0,0,0,2.57.7A5.1,5.1,0,0,0,299.09,420.43Zm-2,1.45a1.42,1.42,0,0,1-.09.72,1.58,1.58,0,0,1-1,.73,3,3,0,0,1-1.83-.38,6.84,6.84,0,0,1-2.59-2.29,3.07,3.07,0,0,1-.62-1.57,1.74,1.74,0,0,1,.53-1.27.58.58,0,0,1,.41-.19h.29c.09,0,.22,0,.34.26s.43,1.05.47,1.12a.28.28,0,0,1,0,.27c-.29.58-.6.56-.44.83a4.05,4.05,0,0,0,2.06,1.8.23.23,0,0,0,.33,0c.09-.1.38-.44.48-.59s.2-.13.34-.08.89.42,1,.49S297,421.81,297.05,421.88Z" transform="translate(-287.87 -414.36)"></path>
							</svg>
							<span>WhatsApp</span>
						</div>
					</div>
				</div>
			</section>



		</div>

		<?php include('footer.php'); ?>
	</div>




	<?php include('modal.php'); ?>

</body>

</html>