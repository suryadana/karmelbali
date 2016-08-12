	<div class="container-fluid">
			<div class="row">
				<div class="wraper-footer">
					<div class="text-center">
						Copyright  © All Rights Reserved. Powerd by <a href="https://leakweb.github.io/">LeakWEB DEVELOPMENT</a>.
					</div>
				</div>
			</div>
		</div>
		</div>
	</div>
	<!-- Library -->
	<script src="<?php echo base_url;?>asset/js/jquery-2.2.3.min.js"></script>
	<script src="<?php echo base_url;?>asset/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url;?>asset/js/jquery.vticker.min.js"></script>
	<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCcpzaDlnAeXpOxjBULn3Gkv4BlfqPmEy8"></script>
	<script src="<?php echo base_url;?>asset/js/isotope.pkgd.js"></script>
	<script src="<?php echo base_url;?>asset/js/imagesloaded.pkgd.js"></script>
	<script src="<?php echo base_url;?>asset/js/ekko-lightbox.min.js"></script>
	<!-- For maps -->
	<script>
	function initialize() {
		var mapProp = {
			center:new google.maps.LatLng(-8.299914,115.179053),
			zoom:9,
			mapTypeId:google.maps.MapTypeId.ROADMAP
		};

		var map=new google.maps.Map(document.getElementById("karmelMap"),mapProp);
		
		var myLatLng = {lat: -8.299914, lng: 115.179053};
		var marker = new google.maps.Marker({
			position: myLatLng,
			map: map,
			title: 'Karmel Bali'
		});
	}
	google.maps.event.addDomListener(window, 'load', initialize);
	</script>
	<!-- antek-antek -->
	<script type="text/javascript">
	$(document).ready(function() {
		$('.carousel').carousel({
			interval: 3000,
			pause: 'hover',
		});

		jQuery(function($){
			$(function() {
				// slider vertical
				$('#slider-vertical').vTicker();
			});
		});
	});
	</script>
	<!-- for mansory -->
	<script>
	$(function(){
		// init Isotope
		var $grid = $('.grid').isotope({
			itemSelector: ".thumbnail"
		});
		// layout Isotope after each image loads
		$grid.imagesLoaded().progress( function() {
			$grid.isotope('layout');
		});
	});
	</script>
	<!-- ligthbox -->
	<script>
	$(document).delegate('*[data-toggle="lightbox"]', 'click', function(event) {
		event.preventDefault();
		$(this).ekkoLightbox();
	}); 
	</script>
	<!-- lazy load -->
	<script>
		(function(a){a.fn.lazyload=function(b){var c={threshold:0,failurelimit:0,event:"scroll",effect:"show",container:window};if(b){a.extend(c,b)}var d=this;if("scroll"==c.event){a(c.container).bind("scroll",function(b){var e=0;d.each(function(){if(a.abovethetop(this,c)||a.leftofbegin(this,c)){}else if(!a.belowthefold(this,c)&&!a.rightoffold(this,c)){a(this).trigger("appear")}else{if(e++>c.failurelimit){return false}}});var f=a.grep(d,function(a){return!a.loaded});d=a(f)})}this.each(function(){var b=this;if(undefined==a(b).attr("original")){a(b).attr("original",a(b).attr("src"))}if("scroll"!=c.event||undefined==a(b).attr("src")||c.placeholder==a(b).attr("src")||a.abovethetop(b,c)||a.leftofbegin(b,c)||a.belowthefold(b,c)||a.rightoffold(b,c)){if(c.placeholder){a(b).attr("src",c.placeholder)}else{a(b).removeAttr("src")}b.loaded=false}else{b.loaded=true}a(b).one("appear",function(){if(!this.loaded){a("<img />").bind("load",function(){a(b).hide().attr("src",a(b).attr("original"))[c.effect](c.effectspeed);b.loaded=true}).attr("src",a(b).attr("original"))}});if("scroll"!=c.event){a(b).bind(c.event,function(c){if(!b.loaded){a(b).trigger("appear")}})}});a(c.container).trigger(c.event);return this};a.belowthefold=function(b,c){if(c.container===undefined||c.container===window){var d=a(window).height()+a(window).scrollTop()}else{var d=a(c.container).offset().top+a(c.container).height()}return d<=a(b).offset().top-c.threshold};a.rightoffold=function(b,c){if(c.container===undefined||c.container===window){var d=a(window).width()+a(window).scrollLeft()}else{var d=a(c.container).offset().left+a(c.container).width()}return d<=a(b).offset().left-c.threshold};a.abovethetop=function(b,c){if(c.container===undefined||c.container===window){var d=a(window).scrollTop()}else{var d=a(c.container).offset().top}return d>=a(b).offset().top+c.threshold+a(b).height()};a.leftofbegin=function(b,c){if(c.container===undefined||c.container===window){var d=a(window).scrollLeft()}else{var d=a(c.container).offset().left}return d>=a(b).offset().left+c.threshold+a(b).width()};a.extend(a.expr[":"],{"below-the-fold":"$.belowthefold(a, {threshold : 0, container: window})","above-the-fold":"!$.belowthefold(a, {threshold : 0, container: window})","right-of-fold":"$.rightoffold(a, {threshold : 0, container: window})","left-of-fold":"!$.rightoffold(a, {threshold : 0, container: window})"})})(jQuery);$(function(){$("img").lazyload({placeholder:"<?php echo base_url;?>asset/icon/lazyload.gif",effect:"fadeIn",threshold:"-50"})});
	</script>


</body>
</html>