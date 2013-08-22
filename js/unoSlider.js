/*
 * UnoSlider
 * This script is a plugin for jQuery
 * Version: 1.0.4
 * Author: Nelson Polanco
 * http://unoslider.npmedia.net
 */

(function ($) {
    $.fn.unoSlider = function(options) {
        // Support multiple elements
        if (this.length > 1){
            this.each(function() { $(this).unoSlider(options); });
            return this;
        }

        // Setup options
        var defaults = {
            // Default options go here
            animSpeed: 250,
            speed: 5,   // Seconds
            auto: true,
            easing: 'swing',
            next: false,
            prev: false,
            transition: 'slide',
            pause: false,
            bullets: false,
            selector: 'li',
            callback: function(){},
            width: false
        };

        options = $.extend({}, defaults, options);

        // Setup private variables
        var s = this;
        s.$views = $( s.find(options.selector) ).addClass('sliderView');
        s.css({ width: options.width });
        s.$views.css({ width: options.width });
        s.$nav = $( s.find('.unoSliderNav') );
        s.navItems = [];
        s.viewWidth = s.width();
        s.animTimer = options.animSpeed;
        s.timerSpeed = options.speed*1000;
        s.easing = options.easing;
        s.transition = options.transition;

        // Set the current slide
        s.current = s.$views[0];
        s.addClass('unoSlider');

        var bulletClick = function(){
            navClick($(this));
        };

        // Loop through each view
        for(var i=0; i < s.$views.length; i++){
            var $view = $(s.$views[i]);
            var $bullet = $('<span>&bull;</span>'); // Create a bullet

            // Create a jQuery object out of the view
            s.$views[i] = $view;

            // Add the index as data to each view and bullet
            $view.add($bullet).data('idx', i);

            // Add bullets to nav and collect them in an array
            s.$nav.append($bullet);
            s.navItems[i]= $bullet;

            // Bullet click events
            $bullet.bind('click', bulletClick);
        } // For each views

        // Bullets click handler
        var navClick = function($b){
            var next = $b.data('idx'); // Current bullet's index
            var prev = s.current.data('idx');

            initSlide(prev, next); // Pass in previous index
            s.resetTimer();
        }; // Bullets click

        // Set current
        var setCurrent = function(idx){
            // Remove the "current" class from all elements
            s.$views.add(s.navItems).each(function(){
                this.removeClass('current');
            });

            // Add "current" class to the items with the index that was passed in
            $(s.$views[idx]).add($(s.navItems[idx])).addClass('current');
            // Set current
            s.current = s.$views[idx];
        }; // setCurrent

        var initSlide = function(prev, next){
            // If this is the last view, set next as the first view so that it loops around
            if(next >= s.$views.length){
                next = 0;
            }else if( next < 0  ){
                next = s.$views.length-1;
            }

            if( prev < next ){
                animateForward(prev, next);
            } else if (prev > next){
                animateBackwards(prev,next);
            } // if else prev > next

            if (typeof options.callback === 'function') { // Make sure the callback is a function
               options.callback.call(next); // Pass back the current index
            }

            setCurrent(next);
        }; // initSlide

        if(options.next){
            $(options.next).live('click', function(e) {
              // Live handler called
              e.preventDefault();
              s.goForward();
              s.resetTimer();
            });
        }

        if(options.prev){
            $(options.prev).live('click', function(e) {
              // Live handler called
              e.preventDefault();
              s.goBack();
              s.resetTimer();
            });
        }

        /***********************************
        Functions
        ***********************************/
        function animateForward(sl1, sl2){
            // Animate prev out
            s.$views[sl1].stop().animate({
                'left': (s.viewWidth*-1)/4+'px',
                'opacity': '0'
            },s.animTimer, s.easing ,function(){
                s.$views[sl1].css({'left':s.viewWidth+'px'});
            });

            // Animate next in
            s.$views[sl2].css({'left':s.viewWidth/4+'px'}).stop().animate({
                    'left':'0',
                    'opacity':'1'
                },s.animTimer, s.easing, function(){
            });

        }

        function animateBackwards(sl1, sl2){
            // Animate prev out
            s.$views[sl1].stop().animate({
                    'left':s.viewWidth/4+'px',
                    'opacity':'0'
                },s.animTimer, s.easing, function(){
                    s.$views[sl1].css({'left': s.viewWidth/4+'px'});
            });

            // Animate Next in
            s.$views[sl2].css({'left': (s.viewWidth*-1)/4+'px'}).stop().animate({
                    'left':'0',
                    'opacity': '1'
                },s.animTimer, s.easing, function(){
                // setCurrent(next);
            });
        }


        /***************************************
        Public Functions
        ***************************************/
        s.initialize = function() {
            // First run? Set the current as the first item
            if(this.length > 0){
                setCurrent(0);
                s.startTimer();
            }
            return this;
        };

        s.startTimer = function(){
            if(options.auto){
                s.t = window.setInterval(function(){
                        s.goForward();
                }, s.timerSpeed);
            }
        };

        s.killTimer = function(){
            window.clearInterval(s.t);
        };

        s.resetTimer = function(){
            s.killTimer();
            s.startTimer();
        };

        s.goForward = function(){
            // Go forward one view forward
            var prev = s.current.data('idx'),
                    next = prev+1; // Current bullet's index

            initSlide(prev, next);
        };

        s.goBack = function(){
            // Go back one view forward
            var prev = s.current.data('idx'),
            next = prev-1; // Current bullet's index

            initSlide(prev, next);
        };

        s.goTo = function(i /*num*/){
            // Go specific view
            var prev = s.current.data('idx'),
                    next = i-1; // Current bullet's index

            initSlide(prev, next);
        };

        return this.initialize();
    };  // End namespace $.fn.unoSlider

})(jQuery);