<?php get_header(); ?>

			<div id="ust-resim" class="hidden-phone">
			</div>
			<div id="icerik-ic" class="arsiv">
				<section class="container">
					<div class="row">
						<div class="span12">
							<?php
							$curauth = (get_query_var('author_name')) ? get_user_by('slug', get_query_var('author_name')) : get_userdata(get_query_var('author'));
							?>
							<h1 id="index-baslik"><?php echo $curauth->display_name; ?></h1>
							<?php if ( function_exists('yoast_breadcrumb') ) {
							yoast_breadcrumb('<p id="breadcrumbs">','</p>');
							} ?>
						</div>
					</div>
					<div class="row">
						<div class="span8">
							<p>Bize ulaşmak için lütfen <a href="http://www.35pixel.com/iletisim/">iletişim sayfamızı</a> ziyaret ediniz.</p>
						</div>

						<aside class="span4">
							<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('blog-sidebar') ) : endif; ?>
						</aside>
					</div>
				</section>



			</div>
		</div>


<?php get_footer(); ?>