<?php 
	/*
	Template Name: О нас
	Template Post Type: post, page, product
	*/
?>

<?php get_template_part('template-parts/head') ?>
<?php get_template_part('template-parts/header') ?>

	
	<section class="benefits" id="benefits">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h2 class="benefits-title">
						Преимущества LAB Consult
					</h2>
				</div>
				<div class="col-md-6">
					<p class="benefits-text">
						Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. 
					</p>
				</div>
				<div class="col-md-6">
					<p class="benefits-text">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat commodo consequat.
					</p>
				</div>
			</div>
			<div class="benefit benefit_top">
				<div class="row">
					<div class="col-12 col-sm-2 col-lg-1">
						<div class="benefit-icon">
								<img src="<?php bloginfo('template_directory') ?>/img/scale.png" alt="Scale" class="benefit__img">
						</div>
					</div>
					<div class="col-12 col-sm-10 col-lg-11">
						<div class="benefit-info">
							<h3 class="benefit-info__title">
								Первое весомое преимущество
							</h3>
							<p class="benefit-info__text">
								Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. 
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="benefit">
				<div class="row">
					<div class="col-12 col-sm-2 col-lg-1">
						<div class="benefit-icon">
								<img src="<?php bloginfo('template_directory') ?>/img/scale.png" alt="Scale" class="benefit__img">
						</div>
					</div>
					<div class="col-12 col-sm-10 col-lg-11">
						<div class="benefit-info">
							<h3 class="benefit-info__title">
								Второе сильное и мощное преимущество
							</h3>
							<p class="benefit-info__text">
								Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. 
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="benefit">
				<div class="row">
					<div class="col-12 col-sm-2 col-lg-1">
						<div class="benefit-icon">
								<img src="<?php bloginfo('template_directory') ?>/img/scale.png" alt="Scale" class="benefit__img">
						</div>
					</div>
					<div class="col-12 col-sm-10 col-lg-11">
						<div class="benefit-info">
							<h3 class="benefit-info__title">
								Третье и финальное сильное и мощное преимущество
							</h3>
							<p class="benefit-info__text">
								Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. 
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="facilities" id="facilities">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h2 class="facilities-title">
						Фото наших мощностей
					</h2>
				</div>
				<?php echo do_shortcode('[rl_gallery id="91"]'); ?>
				<!-- <div class="col-sm-3">
					<a href="<?php bloginfo('template_directory') ?>/img/loader.jpg" data-lightbox="facility" data-title="">
						<div class="facility">
							<img src="<?php bloginfo('template_directory') ?>/img/loader.jpg" alt="Loader" class="facility__img">
							<div class="facility__overlay">
								<i class="fa-solid fa-up-right-and-down-left-from-center arrow"></i>
							</div>
						</div>
					</a>
				</div>
				<div class="col-sm-3">
					<a href="<?php bloginfo('template_directory') ?>/img/trucks.jpg" data-lightbox="facility" data-title="">
						<div class="facility">
							<img src="<?php bloginfo('template_directory') ?>/img/trucks.jpg" alt="Trucks" class="facility__img">
							<div class="facility__overlay">
								<i class="fa-solid fa-up-right-and-down-left-from-center"></i>
							</div>
						</div>
					</a>
				</div>
				<div class="col-sm-3">
					<a href="<?php bloginfo('template_directory') ?>/img/american_truck.jpg" data-lightbox="facility" data-title="">
						<div class="facility">
							<img src="<?php bloginfo('template_directory') ?>/img/american_truck.jpg" alt="American Truck" class="facility__img">
							<div class="facility__overlay">
								<i class="fa-solid fa-up-right-and-down-left-from-center"></i>
							</div>
						</div>
					</a>
				</div>
				<div class="col-sm-3">
					<a href="<?php bloginfo('template_directory') ?>/img/ship.jpg" data-lightbox="facility" data-title="">
						<div class="facility">
							<img src="<?php bloginfo('template_directory') ?>/img/ship.jpg" alt="Ship" class="facility__img">
							<div class="facility__overlay">
								<i class="fa-solid fa-up-right-and-down-left-from-center"></i>
							</div>
						</div>
					</a>
				</div> -->
			</div>
		</div>
	</section>

<?php get_footer() ?>