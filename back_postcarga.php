<!-- Post -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<script src="js/viewportchecker.js"></script> 
<script type="text/javascript">
$(document).ready(function() {
	if (document.documentElement.clientWidth > 900) {
		$('.fadIn').addClass("hiddenviewport").viewportChecker({
			classToAdd: 'visibleviewport animated fadeIn', // Class to add to the elements when they are visible
			offset: 200    
		   });   
		$('.fadInUp').addClass("hiddenviewport").viewportChecker({
			classToAdd: 'visibleviewport animated fadeInUp', // Class to add to the elements when they are visible
			offset: 200    
		   });   		      	   
		$('.fadInDown').addClass("hiddenviewport").viewportChecker({
			classToAdd: 'visibleviewport animated fadeInDown', // Class to add to the elements when they are visible
			offset: 200    
		   });   	
		$('.fadInLeft').addClass("hiddenviewport").viewportChecker({
			classToAdd: 'visibleviewport animated fadeInLeft', // Class to add to the elements when they are visible
			offset: 200    
		   });   	
		$('.fadInRight').addClass("hiddenviewport").viewportChecker({
			classToAdd: 'visibleviewport animated fadeInRight', // Class to add to the elements when they are visible
			offset: 200    
		   });   	
	
		$('.bounInUp').addClass("hiddenviewport").viewportChecker({
			classToAdd: 'visibleviewport animated bounceInUp', // Class to add to the elements when they are visible
			offset: 100    
		   }); 
		$('.bounInDown').addClass("hiddenviewport").viewportChecker({
			classToAdd: 'visibleviewport animated bounceInDown', // Class to add to the elements when they are visible
			offset: 100    
		   }); 	   
		$('.bounInLeft').addClass("hiddenviewport").viewportChecker({
			classToAdd: 'visibleviewport animated bounceInLeft', // Class to add to the elements when they are visible
			offset: 100    
		   }); 	   
		$('.bounInRight').addClass("hiddenviewport").viewportChecker({
			classToAdd: 'visibleviewport animated bounceInRight', // Class to add to the elements when they are visible
			offset: 100    
		   }); 	   	   	   
	}
});            
</script>

<script src="js/pacha.js"></script>

<script type="text/javascript" src="js/skrollr.js"></script>

<script type="text/javascript">
var s = skrollr.init({
	edgeStrategy: 'set',
	easing: {
		WTF: Math.random,
		inverted: function(p) {
			return 1-p;
		}
	}
});
</script>

<!-- Include js plugin -->
<script src="js/owl.carousel.js"></script>

<!-- Frontpage Demo -->
<script>
	$(document).ready(function($) {
	  $("#owl-example").owlCarousel();
	});
	$("body").data("page", "frontpage");
</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-61264059-1', 'auto');
  ga('send', 'pageview');

</script>




