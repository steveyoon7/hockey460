/* This uses masonry cascading grid layout library to organize content when 
shriking page to create responsive footer depending on the size of the screen */

/* Masonry settings to organize footer widgets. This conditional finds the footer 
widget id and then applies the monsory to any item that is in the footer widget */




// Masonry settings to organize footer widgets in order to fit properly in footer. This functiuon simply activates masonry
jQuery(document).ready(function($){
    var $container = $('#footer-widgets');
    var $masonryOn;
    var $columnWidth = 400;
    
    if ($(document).width() > 915) {;
        $masonryOn = true;
        runMasonry();
    };

/* If page width is less than 915px, then masonary is turned off. Similarto media query, if the document is bigger then 915px, then run mansonry. If the document is smaller then 915px, then mansonry is turned off. */

    $(window).resize( function() {
        if ($(document).width() < 915) {
            if ($masonryOn){
                $container.masonry('destroy');
                $masonryOn = false;
            }

        } else {
            $masonryOn = true;
            runMasonry();
        }
    });
    
    function runMasonry() {
        // initialize
        $container.masonry({
            columnWidth: $columnWidth,
            itemSelector: '.widget',
            isFitWidth: true,
            isAnimated: true
        });
    };
    
});


