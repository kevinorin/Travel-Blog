// menu dropdown link clickable
jQuery( document ).ready( function ( $ ) {
    $( '.navbar .dropdown > a, .dropdown-menu > li > a' ).click( function () {
        location.href = this.href;
    } );
} );

// scroll to top button
jQuery( document ).ready( function ( $ ) {
    $( "#back-top" ).hide();
    $( function () {
        $( window ).scroll( function () {
            if ( $( this ).scrollTop() > 100 ) {
                $( '#back-top' ).fadeIn();
            } else {
                $( '#back-top' ).fadeOut();
            }
        } );

        // scroll body to 0px on click
        $( '#back-top a' ).click( function () {
            $( 'body,html' ).animate( {
                scrollTop: 0
            }, 800 );
            return false;
        } );
    } );
} );
// Smart sidebar
jQuery( document ).ready( function ( $ ) {
    if ( $( "aside" ).hasClass( "td-sticky" ) ) {
        $( 'aside.td-sticky' ).hcSticky( {
            top: 35,
            offResolutions: -975,
            bottomEnd: 20
        } );
    }
} );
// Ad banner in single post
jQuery( document ).ready( function ( $ ) {
    if ( $( ".entry-content .sticky-ad" ).hasClass( "td-sticky" ) ) {
        $( '.entry-content .td-sticky' ).hcSticky( {
            top: 20,
            offResolutions: -975,
        } );
    }
} );
// Content slider in single post
jQuery( document ).ready( function ( $ ) {
    var myDiv = document.getElementById( 'custom-box' );
    if ( myDiv ) {
        $( window ).scroll( function () {
            var distanceTop = $( '#custom-box' ).offset().top - $( window ).height();

            if ( $( window ).scrollTop() > distanceTop )
                $( '#slidebox' ).animate( { 'right': '0px' }, 300 );
            else
                $( '#slidebox' ).stop( true ).animate( { 'right': '-430px' }, 100 );
        } );

        $( '#slidebox .close-me' ).bind( 'click', function () {
            $( this ).parent().remove();
        } );
    }
    ;
} );
// LazyLoad images
jQuery( document ).ready( function ( $ ) {
    if ( $( ".featured-thumbnail img" ).hasClass( "lazy" ) ) {
        $( "img.lazy" ).show().lazyload( {
            skip_invisible: true,
            effect: "fadeIn",
            load: function ( elements_left, settings ) {
                $( this ).siblings( ".spinner" ).remove();
            }
        } );
    }
} );

// FlexSlider
jQuery( document ).ready( function ( $ ) {
    $( window ).load( function () {
        $( '#slider' ).flexslider( {
            animation: "slide",
            controlNav: false,
            animationLoop: false,
            slideshow: false,
            start: function ( slider ) {
                slider.removeClass( 'slider-loading' );
            }
        } );
    } );
} );

// FlexSlider Carousel
jQuery( document ).ready( function ( $ ) {
    var $window = $( window ),
        flexslider;
    // tiny helper function to add breakpoints

    function getGridSize() {
        return ( window.innerWidth < 660 ) ? 1 :
            ( window.innerWidth < 1280 ) ? 2 :
            ( window.innerWidth < 1985 ) ? 3 : 4;
    }
    var interval = $( '#carousel-home' ).data( 'interval' );
    var items = $( '#carousel-home' ).data( 'move' );
    $( window ).load( function () {
        $( '#carousel-home' ).flexslider( {
            animation: "slide",
            controlNav: false,
            animationLoop: false,
            itemWidth: 660,
            itemMargin: 0,
            slideshowSpeed: interval,
            move: items,
            minItems: getGridSize(),
            maxItems: getGridSize(),
            start: function ( slider ) {
                flexslider = slider; //Initializing flexslider here.
                slider.removeClass( 'carousel-loading' );
            }
        } );
        $window.resize( function () {
            var gridSize = getGridSize();
            if ( flexslider ) {
                flexslider.vars.minItems = gridSize;
                flexslider.vars.maxItems = gridSize;
            }
        } );
    } );
     // set the timeout for the slider resize
    $( function () {
        var resizeEnd;
        $( window ).on( 'resize', function () {
            clearTimeout( resizeEnd );
            resizeEnd = setTimeout( function () {
                flexsliderResize();
            }, 100 );
        } );
    } );
    function flexsliderResize() {
        if ( $( '#carousel-home' ).length > 0 ) {
            $( '#carousel-home' ).data( 'flexslider' ).resize();
        }
    }
} );
// FlexSlider Carousel - related
jQuery( document ).ready( function ( $ ) {
    var $window = $( window ),
        flexslider;
    // tiny helper function to add breakpoints

    function getGridSize() {
        return ( window.innerWidth < 520 ) ? 1 :
            ( window.innerWidth < 768 ) ? 2 : 3;
    }
    $( window ).load( function () {
        $( '#carousel-related' ).flexslider( {
            animation: "slide",
            controlNav: false,
            animationLoop: false,
            slideshow: true,
            itemWidth: 234,
            itemMargin: 0,
            move: 1,
            minItems: getGridSize(),
            maxItems: getGridSize(),
            start: function ( slider ) {
                flexslider = slider; //Initializing flexslider here.
                slider.removeClass( 'carousel-loading' );
            }
        } );
        $window.resize( function () {
            var gridSize = getGridSize();
            if ( flexslider ) {
                flexslider.vars.minItems = gridSize;
                flexslider.vars.maxItems = gridSize;
            }
        } );
    } );
    $( function () {
        var resizeEnd;
        $( window ).on( 'resize', function () {
            clearTimeout( resizeEnd );
            resizeEnd = setTimeout( function () {
                flexsliderResize();
            }, 100 );
        } );
    } );
    function flexsliderResize() {
        if ( $( '#carousel-related' ).length > 0 ) {
            $( '#carousel-related' ).data( 'flexslider' ).resize();
        }
    }
} );
// FlexSlider Trending
jQuery( document ).ready( function ( $ ) {
    var $window = $( window ),
        flexslider;
    // tiny helper function to add breakpoints

    function getGridSize() {
        return ( window.innerWidth < 500 ) ? 2 :
            ( window.innerWidth < 900 ) ? 3 :
            ( window.innerWidth < 1200 ) ? 4 : 5;
    }
    $( window ).load( function () {
        $( '#trending-home' ).flexslider( {
            animation: "slide",
            controlNav: false,
            animationLoop: false,
            itemWidth: 200,
            itemMargin: 0,
            slideshowSpeed: 4000,
            move: 1,
            minItems: getGridSize(),
            maxItems: getGridSize(),
            start: function ( slider ) {
                flexslider = slider; //Initializing flexslider here.
                slider.removeClass( 'carousel-loading' );
            }
        } );
        $window.resize( function () {
            var gridSize = getGridSize();
            if ( flexslider ) {
                flexslider.vars.minItems = gridSize;
                flexslider.vars.maxItems = gridSize;
            }
        } );
    } );
} );
// Tooltip
jQuery( document ).ready( function ( $ ) {
    $( function () {
        $( '[data-toggle="tooltip"]' ).tooltip()
    } )
} );
