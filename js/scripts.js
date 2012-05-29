(function(d){
	$(d).ready(function() {

		//Analytics for the Download btn
		$('.download-btn').live('click', function() {
			// Click Handler for .download-btn.
			_gaq.push(['_trackPageview', '/download/']);
		});

		window.npSlide = $('#slider1').unoSlider({
		  	speed: 10
		}); //default 5 seconds

		window.npSlide2 = $('#slider2').unoSlider({ 
			animSpeed: 400, 
			easing: 'easeInOutCirc', 
			next: '#slider2Next', 
			prev: '#slider2Back',
			speed: 8
			// transition: 'fade'
		});
		  
		window.npSlide3 = $('#slider3').unoSlider({ 
			animSpeed: 400, 
			easing: 'linear',
			speed: 5
		});
		
		window.npSlide4 = $('#slider4').unoSlider({ 
			animSpeed: 1, 
			speed: 3
		});
		
		window.ticker = $('#ticker').unoSlider();
		
		
		//Tabs
		window.docTabs = $('.tab-content').unoSlider({ 
			auto: false,
			animSpeed: 120,
			callback: function(){
				docTabs.setHeight(parseInt(this));
			}
		});
		docTabs.cont = $('.tab-content');
		docTabs.setHeight = function(i){
			var h = docTabs.$views[i].height();
			docTabs.cont.animate({
				height: h+20
			}, 600);
		}
		docTabs.tabs = [];
		$.each($('.tabs li'), function(){
			var tab = $(this);
			tab.bind('click', function() {
				var idx= this.getAttribute('data-tab');
				$.each(docTabs.tabs, function(){
					this.removeClass('current')
				})
				docTabs.tabs[idx-1].addClass('current');
				docTabs.goTo(idx);
			});
			docTabs.tabs.push(tab);
		});
		docTabs.setHeight(0);

	});
})(document)