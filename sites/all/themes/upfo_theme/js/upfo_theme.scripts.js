/* Implement custom javascript here */

/* Implement custom javascript here */

(function ($) {
    Drupal.behaviors.exampleModule = {
        attach: function (context, settings) {
            // Code to be run on page load, and
            // on ajax load added here
            jQuery(document).ready(function ($) {
                menuToggle();
                menuChildToggle();

            });

            $(window).load(function () {
                if ($('.front-carousel').size()) {
                    frontCarousel();
                }
            });

            function frontCarousel() {
                var frontCarosel = $('.front-carousel');
                frontCarosel.css('visibility', 'visible');
                frontCarosel.owlCarousel({
                    margin: 10,
                    items: 1,
                    loop: true,
                    animateOut: 'fadeOut',
                    responsive: {
                        1024: {
                            autoWidth: true,
                            items: 3,
                            center: true,
                        },
                        640: {
                            items: 2,
                            center: true,
                        },
                        0: {
                            items: 1,
                            autoHeight: true,
                        }

                    }
                });
            }


            function menuToggle() {
                var toggler = $('#menu-toggler');
                var nav = $('#main-nav');
                toggler.on('click', function (event) {
                    event.preventDefault();
                    nav.toggleClass('expanded');
                });
            }

            function menuChildToggle() {
                var expanded = $('#main-nav').find('.expanded');
                expanded.each(function (index, el) {
                    $(el).append('<span class="submenu-toggler">+</span>');
                });

                $('.submenu-toggler').on('click', function (event) {
                    $(this).toggleClass('open')
                        .siblings('ul')
                        .toggleClass('open');

                });
            }

        }
    };
}(jQuery));