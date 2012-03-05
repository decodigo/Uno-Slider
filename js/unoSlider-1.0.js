(function($){
	$.fn.unoSlider = function(options) {
	    // support multiple elements
	    if (this.length > 1){
	        this.each(function() { $(this).unoSlider(options) });
	        return this;
	    }
	
	    // setup options
	    var defaults = {
	                            //default options go here.
	                            animSpeed: 250,
	                            speed: 5,	//seconds
	                            auto: true,
	                            easing: 'swing',
	                            next: false,
	                            prev: false,
	                            prev: false,
	                            //todo: add slider controls
	                            
	                            pause: false,
	                            bullets: false,
	                            callback: function(){}
	                            };
	                            
	    var options = $.extend({}, defaults, options);
	    
	    // SETUP private variabls;
	    var s = this;
		s.$views = $( s.find('li') ).addClass('sliderView');
		s.$nav = $( s.find('.unoSliderNav') );
		s.navItems = [];
		s.viewWidth = s.width();
		s.animTimer = options.animSpeed;
		s.timerSpeed = options.speed*1000;
		s.easing = options.easing;
		
		//Set the current Slide
		s.current = s.$views[0];
		s.addClass('unoSlider');
	
	
		//Loop through each view
		for(var i=0; i < s.$views.length; i++){
			var	$view 			= $(s.$views[i]);
				$bullet 				= $('<span>&bull;</span>');		//Create a bullet
			
			//Create a jQuery object out of the view
			s.$views[i] = $view;
			
			//Add the index as data to each view and bullet
			$view.add($bullet).data('idx', i);
			
			
			
			//Add bullets to nav and collect them in an array
			s.$nav.append($bullet);
			s.navItems[i]= $bullet;
			
			//Bullet Click events
			$bullet.bind('click', function(){ navClick($(this)); });	
		}//For each views
				
				
		//Bullets click Handler
		var navClick = function($b){
			var	next = $b.data('idx'), //Current Bullet's index	
					prev = s.current.data('idx');		
					
			initSlide(prev, next); //pass in previous index 
			s.resetTimer();
		}	//Bullets Click
		
		
		//Set Current
		var setCurrent = function(idx){
			//remove the "current" class from all elements
			s.$views.add(s.navItems).each(function(){
				this.removeClass('current');
			})
			
			//Add "current" class to the items with the index that was passe in
			$(s.$views[idx]).add($(s.navItems[idx])).addClass('current');
			//Set current
			s.current = s.$views[idx];
		} //Set Current
		
		var initSlide = function(prev, next){
			//If this is the last view, set next as the first view so that it loops around
			if(next >= s.$views.length){
				next = 0;
			}else if( next < 0  ){
				next = s.$views.length-1
			}
			
			if( prev < next ){
				//Animate Prev out
				s.$views[prev].stop().animate({
						'left': (s.viewWidth*-1)/4+'px',
						'opacity': '0'
					},s.animTimer, s.easing ,function(){
						s.$views[prev].css({'left':s.viewWidth+'px'});
					});
				
				//Animate next in
				s.$views[next].css({'left':s.viewWidth/4+'px'}).stop().animate({
					'left':'0',
					'opacity':'1'
				  },s.animTimer, s.easing, function(){
				  	//setCurrent(next);
				  });
			} else if (prev > next){
			
					//Animate prev out
					s.$views[prev].stop().animate({
							'left':s.viewWidth/4+'px',
							'opacity':'0'
						},s.animTimer, s.easing, function(){
							s.$views[prev].css({'left': s.viewWidth/4+'px'});
						});
						
					//Animate Next in					
					s.$views[next].css({'left': (s.viewWidth*-1)/4+'px'}).stop().animate({
								'left':'0',
								'opacity': '1'
							},s.animTimer, s.easing, function(){
								//setCurrent(next);
							});
			} //if else prev >next 
			
			if (typeof options.callback == 'function') { // make sure the callback is a function
		       options.callback.call(next); // passback the current index
		    }
			setCurrent(next);
		}	//initSlide
		
		if(options.next){
			$(options.next).live('click', function(e) {
			  // Live handler called.
			  e.preventDefault()
			  s.goForward();
			});
		}
		
		if(options.prev){
			$(options.prev).live('click', function(e) {
			  // Live handler called.
			  e.preventDefault()
			  s.goBack();
			});
		}
	
		/***************************************
		Public Functions
		***************************************/      
	    s.initialize = function() {
	    	//first run? set the current as the first item
	        setCurrent(0);
	        s.startTimer();
	        return this;
	    };
	    
	    s.startTimer = function(){
	    	s.t = setInterval(function(){
	    		if(options.auto){
	    			s.goForward();
	    		}
				
			}, s.timerSpeed);
	    }
	    s.killTimer = function(){
	    	clearInterval(s.t)
	    }
	    s.resetTimer = function(){
	    	s.killTimer();
	    	s.startTimer();
	    }
	    
	    s.goForward = function(){
	    	//go forward one view forward
	    	var	prev = s.current.data('idx'),
	    			next = prev+1; //Current Bullet's index	
					
			initSlide(prev, next);
	    }
	    
	    s.goBack = function(){
	    	//go back one view forward
	    	var	prev = s.current.data('idx'),
	    			next = prev-1; //Current Bullet's index	
					
			initSlide(prev, next);
	    }
	    
	    s.goTo = function(i /*num*/){
	    	//go specific view
	    	var	prev = s.current.data('idx'),
	    			next = i-1; //Current Bullet's index	
					
			initSlide(prev, next);
	    }
	
	    return this.initialize();
	}//End namespace $.fn.unoSlider
	

	
})(jQuery);