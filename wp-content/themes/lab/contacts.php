<?php 
	/*
	Template Name: Контакты
	Template Post Type: post, page, product
	*/
?>


<?php get_template_part('template-parts/head') ?>
<?php get_template_part('template-parts/header') ?>


<section class="map">
		<div class="container-fluid">
			<div class="row">
				<div class="col">
					<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ab5a45fccb953bd71cbee0541bfbc4e01a5209d394da63d27d502cb2aa500f4dc&amp;width=100%25&amp;height=440&amp;lang=ru_RU&amp;scroll=true"></script>
				</div>
				<div class="col-xl-4">
					<div class="map-overlay">
						<div class="map-overlay__head d-flex">
							<h3 class="map-overlay__title">
								LAB Consulting
							</h3>
							<ul class="map-overlay__links d-flex">
								<li class="offer__item">
									<a href="#" class="map-overlay__link map-overlay__link_facebook">
										<i class="fa-brands fa-square-facebook"></i>
									</a>
								</li>
								<li class="map-overlay__item map-overlay__item_twitter">
									<a href="#" class="map-overlay__link map-overlay__link_twitter">
										<i class="fa-brands fa-twitter"></i>
									</a>
								</li>
								<li class="map-overlay__item">
									<a href="#" class="map-overlay__link map-overlay__link_telegram">
										<i class="fa-brands fa-telegram"></i>
									</a>
								</li>
							</ul>
						</div>
						<div class="map-overlay__content d-flex">
							<div class="map-overlay__contacts">
								<div class="map-overlay__phone">
									<i class="fa-solid fa-phone"></i>
									<a href="tel:380487542356">+38 (048) 754-23-56</a>
								</div>
								<div class="map-overlay__phone">
									<i class="fa-solid fa-phone"></i>
									<a href="tel:380487542356">+38 (048) 754-23-56</a>
								</div>
								<div class="map-overlay__location d-flex">
									<i class="fa-solid fa-location-arrow"></i>&nbsp;
									<div class="map-overlay__adress">
										65000,<br>
										Украина, г. Одесса<br>
										Ул Базарная, 36
									</div>
								</div>
								<a href="email:info@lab-consult.com" class="map-overlay__email">
									<i class="fa-solid fa-envelope"></i>
									info@lab-consult.com
								</a>
							</div>
							<div class="map-overlay__info">
								<p class="map-overlay__text">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
								</p>
								<p class="map-overlay__text">
									Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php get_footer() ?>