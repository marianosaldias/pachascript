<!-- Post -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<script src="js/viewportchecker.js"></script> 
<script type="text/javascript">
$(document).ready(function() {
	$('.fadIn').addClass("hiddenviewport").viewportChecker({
		classToAdd: 'visibleviewport animated fadeIn', // Class to add to the elements when they are visible
		offset: 150    
	   });   
	$('.fadInUp').addClass("hiddenviewport").viewportChecker({
		classToAdd: 'visibleviewport animated fadeInUp', // Class to add to the elements when they are visible
		offset: 150    
	   });   		      	   
	$('.fadInDown').addClass("hiddenviewport").viewportChecker({
		classToAdd: 'visibleviewport animated fadeInDown', // Class to add to the elements when they are visible
		offset: 150    
	   });   	
	$('.fadInLeft').addClass("hiddenviewport").viewportChecker({
		classToAdd: 'visibleviewport animated fadeInLeft', // Class to add to the elements when they are visible
		offset: 150    
	   });   	
	$('.fadInRight').addClass("hiddenviewport").viewportChecker({
		classToAdd: 'visibleviewport animated fadeInRight', // Class to add to the elements when they are visible
		offset: 150    
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
});            
</script>

<script src="js/pacha.js"></script>

<script type="text/javascript" src="js/skrollr.js"></script>
<script type="text/javascript">
	if( /Android|webOS|iPhone|iPod|iPad|BlackBerry/i.test(navigator.userAgent)) {
		console.log('I am a device');
	}
    else {
		console.log('computadora');			
        var s = skrollr.init();
	}
</script>

<!-- Include js plugin -->
<script src="js/owl.carousel.js"></script>
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
