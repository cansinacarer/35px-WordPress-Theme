<?php get_header(); ?>

			<div id="ust-resim" class="hidden-phone">
			</div>
			<div id="icerik-ic" class="arama">
				<section class="container">
							<?php if (have_posts()) : ?>
					<div class="row">
						<div class="span12">
							<h1 id="index-baslik">"<?php echo $s ?>" için arama sonuçları:</h1>
						</div>
					</div>
					<div class="row">
						<article class="span8">
							<?php while (have_posts()) : the_post(); ?>
								<div class="post" id="post-<?php the_ID(); ?>">

									<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?> sayfasını ziyaret etmek için tıklayın."><?php the_title(); ?></a></h2>
									<?php
									if ( function_exists('the_excerpt') && is_search() ) {
										the_excerpt();
									} ?>
									<p class="post-bilgi">
										<?php the_time('j F Y, l') ?> günü
										<?php the_author_posts_link(); ?> tarafından
										<!--<?php the_category(', ');
											if($post->comment_count > 0) { 
													echo ' &nbsp;|&nbsp; ';
													comments_popup_link('', '1 Comment', '% Comments'); 
											}
										?>--> yayınlandı.
									</p>
								</div>
							<?php endwhile; ?>
								<div class="navigation">
									<div class="alignright"><?php next_posts_link('Daha eski sonuçlar &raquo;') ?></div>
									<div class="alignleft"><?php previous_posts_link('&laquo; Daha yeni sonuçlar') ?></div>
								</div>
							<?php else : ?>
					<div class="row">
						<div class="span12">
							<h1 id="index-baslik">"<?php echo $s ?>" arama sorgusu hiçbir sonuç bulunamadı.</h1>
						</div>
					</div>
					<div class="row">
						<article class="span8">
								<p style="margin: 30px 0;">"<?php echo $s ?>" arama sorgusu için hiçbir sonuç bulunamadı. Lütfen daha kısa bir anahtar kelime ile aramayı deneyin.</p>
							<?php endif; ?>
						</article>

						<aside class="span4">
							<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('genel-sidebar') ) : endif; ?>
						</aside>
					</div>
				</section>



			</div>
		</div>


<?php get_footer(); ?>