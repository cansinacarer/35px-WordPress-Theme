<?php
/*
 * Template Name: İletişim Sayfası
 * Description: Sidebarsız, article ın span12 class ı olmayan sayfa şablonu
 */

get_header(); ?>

			<div id="ust-resim" class="hidden-phone">
			</div>
			<div id="icerik-ic">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<section class="container">
					<div class="row">
						<div class="span12">
							<h1 id="index-baslik"><?php the_title(); ?></h1>
							<?php if ( function_exists('yoast_breadcrumb') ) {
							yoast_breadcrumb('<p id="breadcrumbs">','</p>');
							} ?>
						</div>
					</div>
					<div class="row">
						<article>
							<?php the_content(); ?>
						</article>

				<?php endwhile; ?>
				<?php endif; ?>

					</div>
				</section>



			</div>
		</div>

<?php get_footer(); ?>