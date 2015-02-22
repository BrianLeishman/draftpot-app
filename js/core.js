function toggleSlide(drawer, element)
{
    var drawer = drawer;
    var content = element;
    if ($(content).is(":hidden"))
    {
        // The order here is important, we must slide juste before starting blinding
        setTimeout(function ()
        {
            $(content).effect("slide", {direction: "up", mode: "show", easing: 'easeOutQuart'}, 500);
        }, 0);
        setTimeout(function ()
        {
            $(drawer).effect("blind", {direction: "vertical", mode: "show", easing: 'easeOutQuart'}, 490);

        }, 0);
    }
    else
    {
        setTimeout(function ()
        {
            $(drawer).effect("blind", {direction: "vertical", mode: "hide", easing: 'easeOutQuart'}, 500);
            // The previous blind effect hide the drawer
            // However we want it to be shown again, if not the next "drawer opening effect" won't play
            $(drawer).effect("blind", {direction: "vertical", mode: "show"}, 1);
        }, 0);
        setTimeout(function ()
        {
            $(content).effect("slide", {direction: "up", mode: "hide", easing: 'easeOutQuart'}, 460);
        }, 0);
    }
}

$(function () {
    /*
     * Replace all SVG images with inline SVG
     */
    $('img.svg').each(function () {
        var $img = jQuery(this);
        var imgID = $img.attr('id');
        var imgClass = $img.attr('class');
        var imgURL = $img.attr('src');

        jQuery.get(imgURL, function (data) {
            // Get the SVG tag, ignore the rest
            var $svg = jQuery(data).find('svg');

            // Add replaced image's ID to the new SVG
            if (typeof imgID !== 'undefined') {
                $svg = $svg.attr('id', imgID);
            }
            // Add replaced image's classes to the new SVG
            if (typeof imgClass !== 'undefined') {
                $svg = $svg.attr('class', imgClass + ' replaced-svg');
            }

            // Remove any invalid XML tags as per http://validator.w3.org
            $svg = $svg.removeAttr('xmlns:a');

            // Replace image with new SVG
            $img.replaceWith($svg);

        }, 'xml');

    });



    $('.header-button').click(function () {
        SlideHeaderUnderline($(this));
    });

});

function AnimateRotate(angle, e, start) {
    // caching the object for performance reasons

    // we use a pseudo object for the animation
    // (starts from `0` to `angle`), you can name it as you want
    $({deg: start}).animate({deg: angle}, {
        duration: 600,
        step: function (now) {
            // in the step-callback (that is fired each step of the animation),
            // you can use the `now` paramter which contains the current
            // animation-position (`0` up to `angle`)
            e.css({
                transform: 'rotate(' + now + 'deg)'
            });
        }
    },
    'easeOutQuart');
}

function EnableSlingSections() {
    $('.lineup-container').click(function () {
        _this = $(this);
        if (_this.next('.lineup-parent').is(':visible')) {
            _this.addClass('closed-background', 600, 'easeOutQuart');
            AnimateRotate('180', _this.find('.arrow'), 0);
        } else {
            _this.removeClass('closed-background', 600, 'easeOutQuart');
            AnimateRotate('360', _this.find('.arrow'), 180);
        }
        //toggleSlide(_this.next('.lineup-parent'), _this.next('.lineup-parent').find('.lineup-children'));
        _this.next('.lineup-parent').stop().clearQueue().toggle('blind', {direction: "up"}, 600, 'easeOutQuart');
    });
    $('.players-container').click(function () {
        _this = $(this);
        if (_this.next('.players-parent').is(':visible')) {
            AnimateRotate('180', _this.find('.down'), 0);
            _this.find('.down').animate({
                'opacity': '.3'
            }, 600, 'easeOutQuart');
        } else {
            _this.removeClass('closed-background', 600, 'easeOutQuart');
            AnimateRotate('360', _this.find('.down'), 180);
            _this.find('.down').animate({
                'opacity': '1'
            }, 600, 'easeOutQuart');
        }
        //toggleSlide(_this.next('.lineup-parent'), _this.next('.lineup-parent').find('.lineup-children'));
        _this.next('.players-parent').stop().clearQueue().toggle('blind', {direction: "up"}, 600, 'easeOutQuart');
    });
    $('.players-child').click(function () {
        _this = $(this);
        if (_this.next('.stats-parent').is(':visible')) {
            AnimateRotate('180', _this.find('.down'), 0);
            _this.find('.down').animate({
                'opacity': '.3'
            }, 600, 'easeOutQuart');
        } else {
            _this.removeClass('stats-background', 600, 'easeOutQuart');
            AnimateRotate('360', _this.find('.down'), 180);
            _this.find('.down').animate({
                'opacity': '1'
            }, 600, 'easeOutQuart');
        }
        //toggleSlide(_this.next('.lineup-parent'), _this.next('.lineup-parent').find('.lineup-children'));
        _this.next('.stats-parent').stop().clearQueue().toggle('blind', {direction: "up"}, 600, 'easeOutQuart');
    });
}


var SlideHeaderUnderlineElement = null;
/*
 * Moves the green bar underneath the headers to a differnt header object
 * e = jQuery header button object
 * Time = animation time. Default 600ms
 */
function SlideHeaderUnderline(e, Time) {
    (typeof Time == 'undefined') ? Time = 600 : Time = Time;
    SlideHeaderUnderlineElement = e;
    $('.header-underline').addClass('header-button-active').clearQueue().stop().animate({
        left: e.offset().left,
        width: e.width()
    }
    , Time, 'easeOutQuart');
}
