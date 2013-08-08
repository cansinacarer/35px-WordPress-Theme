	
		<div id="push"></div>
	</div><!--wrap-->
	<footer>
		<div class="container">
			<div class="row">
				<div class="span6">
					<a href="//www.35pixel.com/iletisim/" class="btn3d"><span class="icon-tags icon-white"></span> Fiyat Teklifi Talep Edin</a>
					<br />
					<a href="//demo.35pixel.com/" rel="nofollow" target="_blank" class="btn3d"><span class="icon-play icon-white"></span> Yönetim Panelimizi Ücretsiz Deneyin</a>
				</div>
				<div class="span6">
					<div class="text-logo pull-right visible-desktop"><span>35</span><span>pixel</span></div>
					<img src="<?php print temaDizin; ?>img/logo-beyaz.png" alt="35pixel Web Tasarım" id="alt-logo" class="hidden-desktop pull-right">
				</div>
			</div>
			<div class="row">
				<div class="span4" id="social">
					<div>
						<a id="facebook" href="https://www.facebook.com/35pixelajans" target="_blank">
							<img src="<?php print temaDizin; ?>img/social/fb.png" alt="Facebook' ta 35pixel Web Tasarım">
						</a>
						<a id="twitter" href="https://twitter.com/35pixelajans" target="_blank">
							<img src="<?php print temaDizin; ?>img/social/tw.png" alt="Twitter' da 35pixel Web Tasarım">
						</a>
						<a id="google-plus" href="https://plus.google.com/114382320401005783648" target="_blank" rel="publisher">
							<img src="<?php print temaDizin; ?>img/social/gp.png" alt="Google Plus' ta 35pixel Web Tasarım">
						</a>
						<a id="linkedin" href="//www.linkedin.com/company/35pixelajans" target="_blank">
							<img src="<?php print temaDizin; ?>img/social/lnk.png" alt="Linkedin' de 35pixel Web Tasarım">
						</a>
						<a href="https://plus.google.com/102464376242339106861/" rel="author" title="Yazar"></a>

					</div>
					
				</div>
				<div class="span8">
					<a class="pull-right" href="//nibbler.silktide.com/reports/www.35pixel.com" target="_blank" rel="nofollow">
						<img width="88" height="31" alt="Nibbler report for 35pixel.com" src="<?php print temaDizin; ?>img/nibbler.png">
					</a>
					<a href="//www.w3.org/html/logo/" style="float: right; width: 90px; margin-top: -2px; " target="_blank" rel="nofollow">
						<img src="//www.w3.org/html/logo/badge/html5-badge-h-css3-semantics.png" width="165" height="64" alt="HTML5 Powered with CSS3 / Styling, and Semantics" title="HTML5 Powered with CSS3 / Styling, and Semantics">
					</a>
					<a class="pull-right" style="margin-right:10px; padding-top: 4px;" href="//validator.w3.org/check?uri=http%3A%2F%2Fwww.35pixel.com%2F;ss=1" target="_blank" rel="nofollow">
						<img width="80" height="15" alt="Valid html5 Badge" src="<?php print temaDizin; ?>img/w3c-valid-html5.png">
					</a>
					<div id="credits" class="pull-right">
						<p>
							<a href="mailto:iletisim@35pixel.com">iletisim@35pixel.com</a> | <a href="//www.35pixel.com" title="Web Tasarım" rel="license">www.35pixel.com</a> | &copy; <?php echo date("Y"); ?> 35pixel Dijital Medya Ajansı - İzmir
						</p>
					</div>
				</div>
			</div><!--row-->
		</div>
<!--Yukarı Tuşu-->
<script type="text/javascript">

// Back to top
	$(document).ready(function(){
	    BackToTop();/*simple BackToTop plugin called*/BackToTop({/* more complex BackToTop plugin called*/
	        text : 'Başa dön',
	        autoShow : true,
	        timeEffect : 2000,
	        autoShowOffset : 300,
	        effectScroll : 'easeOutQuint',
	    });
	});

// 2. formda submit butona da bootstrap css si ver 
$( "input[type=submit]" ).addClass( "btn" );

// 2. ve 3. formda submit butona extra attribute ver
$( "#gform_submit_button_2" ).addClass( "btn-primary pull-right" );
$( "#gform_submit_button_3" ).addClass( "btn-primary pull-right" );

// mobile menu, ilk tıklayıştaki yükseklik fix 
$(".dropdown-toggle").click(function () {
$(".nav-collapse").css('height', 'auto')
});


// submenu tıklanamama sorunun çözümü
$('.dropdown-toggle').click(function(e) {
  e.preventDefault();
  setTimeout($.proxy(function() {
    if ('ontouchstart' in document.documentElement) {
      $(this).siblings('.dropdown-backdrop').off().remove();
    }
  }, this), 0);
});

// diğer linkler için smooth scroll
$('a[href*=#]:not([href=#],[href=#mansetler])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
        || location.hostname == this.hostname) {

        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
           if (target.length) {
             $('html,body').animate({
                 scrollTop: target.offset().top
            }, 1000);
            return false;
        }
    }
});


//slider
$('.carousel').carousel({
  interval: 5000, // in milliseconds
});


// Yüklenince ekranı kaydır
$(function() {
	var viewport = $( window ).width();
	if ( viewport >= 768 ) {
		var ustResimYuksekligi = $("#ust-resim").height();
		$("html, body").delay(1000).animate({ scrollTop: ustResimYuksekligi }, 1000);
	}
});

</script>


<!-- Quantcast Tag, part 2 -->
<script type="text/javascript">
_qevents.push( { qacct:"p-D1H_STRKy7vaq"} );
</script>
<noscript>
<div style="display: none;"><img src="//pixel.quantserve.com/pixel/p-test123.gif" height="1" width="1" alt="Quantcast"/></div>
</noscript>
<!-- Quantcast Tag, part 2 -->


	</footer>
<?php wp_footer(); ?>
</body>
</html>