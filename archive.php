<?php get_header(); ?>

			<div id="ust-resim" class="hidden-phone">
			</div>
			<div id="icerik-ic" class="arsiv">
				<section class="container">
							<?php if (have_posts()) : ?>
					<div class="row">
						<div class="span12">
							<h1 id="index-baslik">Web Tasarım Blogundan Son Makaleler</h1>
							<?php if ( function_exists('yoast_breadcrumb') ) {
							yoast_breadcrumb('<p id="breadcrumbs">','</p>');
							} ?>
						</div>
					</div>
					<div class="row">
						<div class="span8">
							<?php while (have_posts()) : the_post(); ?>
								<article class="post" id="post-<?php the_ID(); ?>">

									<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?> sayfasını ziyaret etmek için tıklayın."><?php the_title(); ?></a></h2>
									<?php the_content('<br />Devamını Gör'); ?><!--
									<?php the_excerpt(); ?>
									<a href="<?php the_permalink(); ?>">devamını oku</a>-->
									<p class="post-bilgi">
										<?php the_time('j F Y, l') ?> günü
										<?php the_author_posts_link(); ?> tarafından yayınlandı.
									</p>
								</article>
							<?php endwhile; ?>
								<div class="navigation">
									<div class="alignright"><?php next_posts_link('Daha eski sonuçlar &raquo;') ?></div>
									<div class="alignleft"><?php previous_posts_link('&laquo; Daha yeni sonuçlar') ?></div>
								</div>
							<?php else : ?>
							<div class="row">
								<div class="span12">
									<h1 id="index-baslik">Yazı bulunamadı.</h1>
								</div>
							</div>
							<div class="row">
								<article class="span8">
										<p style="margin: 30px 0;">Bu arşiv için hiçbir yazı bulunamadı.</p>
								</article>
							<?php endif; ?>
						</div><!--span8-->

						<aside class="span4">
							<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('blog-sidebar') ) : endif; ?>
						</aside>
					</div>
				</section>



			</div>
		</div>


<?php get_footer(); ?>