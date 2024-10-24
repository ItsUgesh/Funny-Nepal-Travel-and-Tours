jQuery(document).ready(function($) {


    new WOW().init();

    // Scroll Reduce Margin Top
    $(window).scroll(function() {
        if ($(window).scrollTop() >= 120) {
            $('.page-header').css('margin-top', '-77px');
            $('.single-header').css('margin-top', '61px');
        } else {
            $('.page-header').attr('style', '');
            $('.single-header').attr('style', '');
        }
    });

    // Back to top button
    $(document).ready(function() {
        $(window).scroll(function() {
            if ($(this).scrollTop() > 100) {
                $('.back-to-top').fadeIn();
            } else {
                $('.back-to-top').fadeOut();
            }
        });
    });

    $('.back-to-top').click(function() {
        $('body,html').animate({
            scrollTop: 0
        }, 800);
        return false;
    });


    // Tool Tip
    const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
    const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))

    // counter plugin
    jQuery(function($) {
        $.fn.countTo = function(options) {
            options = options || {};

            return $(this).each(function() {
                // set options for current element
                var settings = $.extend({}, $.fn.countTo.defaults, {
                    from: $(this).data('from'),
                    to: $(this).data('to'),
                    speed: $(this).data('speed'),
                    refreshInterval: $(this).data('refresh-interval'),
                    decimals: $(this).data('decimals')
                }, options);

                // how many times to update the value, and how much to increment the value on each update
                var loops = Math.ceil(settings.speed / settings.refreshInterval),
                    increment = (settings.to - settings.from) / loops;

                // references & variables that will change with each update
                var self = this,
                    $self = $(this),
                    loopCount = 0,
                    value = settings.from,
                    data = $self.data('countTo') || {};

                $self.data('countTo', data);

                // if an existing interval can be found, clear it first
                if (data.interval) {
                    clearInterval(data.interval);
                }
                data.interval = setInterval(updateTimer, settings.refreshInterval);

                // initialize the element with the starting value
                render(value);

                function updateTimer() {
                    value += increment;
                    loopCount++;

                    render(value);

                    if (typeof(settings.onUpdate) == 'function') {
                        settings.onUpdate.call(self, value);
                    }

                    if (loopCount >= loops) {
                        // remove the interval
                        $self.removeData('countTo');
                        clearInterval(data.interval);
                        value = settings.to;

                        if (typeof(settings.onComplete) == 'function') {
                            settings.onComplete.call(self, value);
                        }
                    }
                }

                function render(value) {
                    var formattedValue = settings.formatter.call(self, value, settings);
                    $self.text(formattedValue);
                }
            });
        };

        $.fn.countTo.defaults = {
            from: 0, // the number the element should start at
            to: 0, // the number the element should end at
            speed: 1000, // how long it should take to count between the target numbers
            refreshInterval: 100, // how often the element should be updated
            decimals: 0, // the number of decimal places to show
            formatter: formatter, // handler for formatting the value before rendering
            onUpdate: null, // callback method for every time the element is updated
            onComplete: null // callback method for when the element finishes updating
        };

        function formatter(value, settings) {
            return value.toFixed(settings.decimals);
        }
    });

    // target elements and init counter plugin
    jQuery(function($) {

        // start all the timers
        $('.timer').each(count);

        // restart a timer when a button is clicked
        $(window).scroll(function() {
            //console.log($(window).scrollTop());
            if ($(window).scrollTop() > 300 && $(window).scrollTop() < 2850) {
                $('.timer').each(count);
            }
        });

        function count(options) {
            var $this = $(this);
            options = $.extend({}, options || {}, $this.data('countToOptions') || {});
            $this.countTo(options);
        }
    });


    // Featured Carousel
    $('#owl-cat').owlCarousel({
            loop: true,
            rtl: false,
            autoplay: true,
            margin: 30,
            responsiveClass: true,
            nav: false,
            responsive: {
                0: {
                    items: 1,
                    nav: true
                },
                600: {
                    items: 2,
                    nav: true
                },
                1000: {
                    items: 4,
                    nav: true
                }
            }
        })
        // Featured Carousel
    $('#owl-trips').owlCarousel({
        loop: true,
        rtl: false,
        autoplay: true,
        margin: 30,
        responsiveClass: true,
        nav: true,
        responsive: {
            0: {
                items: 1,
                nav: true
            },
            600: {
                items: 2,
                nav: true
            },
            1000: {
                items: 3,
                nav: true
            }
        }
    })

    //parallax js
    $(document).ready(function() {
        var $window = $(window);
        $('section[data-type="background"]').each(function() {
            var $bgobj = $(this); // assigning the object

            $(window).scroll(function() {
                var yPos = -($window.scrollTop() / $bgobj.data('speed'));

                // Put together our final background position
                var coords = '50% ' + yPos + 'px';

                // Move the background
                $bgobj.css({ backgroundPosition: coords });
            });
        });
    });

    // Single Nav
    $(window).scroll(function() {

        if ($(this).scrollTop() > 150) {
            $('#single-nav').fadeIn();
        } else {
            $('#single-nav').fadeOut();
        }
    });

    // Steller
    $('.parallax').stellar();
    $.stellar({
        // Set scrolling to be in either one or both directions
        horizontalScrolling: true,
        verticalScrolling: true,

        // Set the global alignment offsets
        horizontalOffset: 50,
        verticalOffset: 0,

        // Refreshes parallax content on window load and resize
        responsive: false,

        // Select which property is used to calculate scroll.
        // Choose 'scroll', 'position', 'margin' or 'transform',
        // or write your own 'scrollProperty' plugin.
        scrollProperty: 'scroll',

        // Select which property is used to position elements.
        // Choose between 'position' or 'transform',
        // or write your own 'positionProperty' plugin.
        //positionProperty: 'position',

        // Enable or disable the two types of parallax
        parallaxBackgrounds: true,
        // parallaxElements: true,

        // Hide parallax elements that move outside the viewport
        hideDistantElements: true,

        // Customise how elements are shown and hidden
        //hideElement: function($elem) { $elem.hide(); },
        //showElement: function($elem) { $elem.show(); }
    });

    // Fancy box
    Fancybox.bind('[data-fancybox="gallery"]', {
        //
    });

});