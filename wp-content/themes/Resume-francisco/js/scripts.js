jQuery(document).ready(function(){
	
	


	function redimensionnement(e) {
		if("matchMedia" in window) {

			//menu fixed on scroll
			jQuery(window).scroll(function () {
				var height = jQuery('header').height();

				if (jQuery(window).scrollTop() > height) {
					jQuery('.scroll-top').css('opacity', '1');
				} else {
					jQuery('.scroll-top').css('opacity', '0');
				}

			});
		}
	}
	redimensionnement();



/*Initialize aos*/
jQuery(function() {
	AOS.init({
		// Global settings:
		disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
		startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
		initClassName: 'aos-init', // class applied after initialization
		animatedClassName: 'aos-animate', // class applied on animation
		useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
		disableMutationObserver: false, // disables automatic mutations' detections (advanced)
		debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
		throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)
		
	
		// Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
		offset: 50, // offset (in px) from the original trigger point
		delay: 0, // values from 0 to 3000, with step 50ms
		duration: 800, // values from 0 to 3000, with step 50ms
		easing: 'ease', // default easing for AOS animations
		once: true, // whether animation should happen only once - while scrolling down
		mirror: true, // whether elements should animate out while scrolling past them
		anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation
	
	});

  });

/*Initialize venobox*/
// Carousel nos soutiens
jQuery('.venobox').venobox({
	'share': false
	});
	

  //Preloader icon

  //Preloader
  preloaderFadeOutTime = 500;
  function hidePreloader() {
  var preloader = jQuery('.spinner');
  preloader.fadeOut(preloaderFadeOutTime);
  }
  hidePreloader();
  
  
}); 



	
