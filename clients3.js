$( document ).ready(function() {

    var _pointToScrollTo    =   $('.entry-latest').offset().top - 30,
        _viewport           =   $('html, body');


    _viewport.delay(500).animate({
        scrollTop: _pointToScrollTo
    }, 2000, 'easeInOutQuint');

    // http://stackoverflow.com/questions/8858994/let-user-scrolling-stop-jquery-animation-of-scrolltop
    _viewport.bind("scroll mousedown DOMMouseScroll mousewheel keyup", function(e){
        if ( e.which > 0 || e.type === "mousedown" || e.type === "mousewheel"){
            _viewport.stop().unbind('scroll mousedown DOMMouseScroll mousewheel keyup'); // This identifies the scroll as a user action, stops the animation, then unbinds the event straight after (optional)
        }
    });

});