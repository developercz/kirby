<footer>
  <div class="container-fluid">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 col-6"> <img src="assets/images/logo-white.svg">
          <ul class="listdisc mt-25">
            <li><a href="#">Vývoj softwaru</a></li>
            <li><a href="#">Mobilní aplikace</a></li>
            <li><a href="#">Webové prezentace</a></li>
            <li><a href="#">Cloudové řešení</a></li>
          </ul>
        </div>
        <div class="col-lg-2 col-md-6 col-sm-6 col-6">
          <h3>Menu</h3>
          <ul class="mt-30">
            <li><a href="#">Služby</a></li>
            <li><a href="#">Reference</a></li>
            <li><a href="#">O nás</a></li>
            <li><a href="#">Kontakt</a></li>
          </ul>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-4">
          <h3>??????????</h3>
          <ul class="mt-30">
            <li><a href="#">??????</a></li>
            <li><a href="#">??????</a></li>
            <li><a href="#">??????</a></li>
            <li><a href="#">??????</a></li>
          </ul>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 col-8"> <img class="map" src="assets/images/map-footer.svg"> </div>
      </div>
    </div>
    <div class="container copyright">
      <div class="row">
        <div class="col-12">
          <p>All rights reserved | UNICO Europe | Privacy Policy | Terms of service | EULA</p>
        </div>
      </div>
    </div>
  </div>
</footer>
<?= js('assets/js/jquery.min.js') ?>
<?= js('assets/js/bootstrap.bundle.min.js') ?>
<?= js('assets/js/owl.carousel.min.js') ?>
<script>
$(document).ready(function() {
  $('.demo-2').owlCarousel({
	loop:true,
	dots: true,
	nav:true,
	loop:true,
	margin:30,
	autoplay:false,
	autoplayTimeout:2000,
	autoplayHoverPause:true,
	responsive:{
		0:{
			items:1
		},
		600:{
			items:2
		},
		1000:{
			items:4
			}
		}
	});
})
</script>
</body>
</html>