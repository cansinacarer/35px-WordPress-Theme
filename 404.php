<?php get_header(); ?>

			<div id="ust-resim" class="hidden-phone">
				<img src="<?php print temaDizin; ?>img/kirik.png" alt="Kırık Link">
			</div>
			<div id="icerik-ic">
				<section class="container">
					<div class="row">
						<div class="span12">
							<h1 id="index-baslik" style="margin-bottom:30px">404 - Sayfa Bulunamadı</h1>
						</div>
					</div>
					<div class="row">
						<div class="span12">
							<p>Ulaşmak istediğiniz içerik bu sayfada değil. Ama sitemizde harika içerikleri keşfetmek için menüden sayfalarımızı dolaşabilir ya da aradığınız içeriğe hemen ulaşmak için aşağıdaki kutudan arama yapabilirsiniz.</p>
							<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
								<div class="arama-kutusu">
									<div style="max-width:500px; margin:auto">
								    	<label class="screen-reader-text" for="s" style="display:inline-block">Site içi arama:</label>
								        <input type="search" value="" name="s" id="s" />
								        <input type="submit" id="searchsubmit" value="Ara" />
								    </div>
								</div>
							</form>
						</div>
					</div>
				</section>
			</div>
		</div>

<?php get_footer(); ?>