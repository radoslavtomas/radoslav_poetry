document.addEventListener('DOMContentLoaded', function () {

    // ----- Mobile navigation handler -----
    // -------------------------------------
    document.body.classList.remove('loading');

    // Get all "navbar-burger" elements
    var $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

    // Check if there are any navbar burgers
    if ($navbarBurgers.length > 0) {

        // Add a click event on each of them
        $navbarBurgers.forEach(function ($el) {
            $el.addEventListener('click', function () {

                // Get the target from the "data-target" attribute
                var target = $el.dataset.target;
                var $target = document.getElementById(target);

                // Toggle the class on both the "navbar-burger" and the "navbar-menu"
                $el.classList.toggle('is-active');
                $target.classList.toggle('is-active');

            });
        });
    }

    // ----- Changing src attribute on logo -----
    // ------------------------------------------
    document.querySelector('.animLogo').addEventListener('mouseenter', function() {
        document.querySelector('.logo').classList.add('bounceOut');
        document.querySelector('.logo').addEventListener('animationend', function() {
            document.querySelector('.logo').src = '/img/logo-2.png';
            document.querySelector('.logo').classList.remove('bounceOut');
        });

    });
    document.querySelector('.animLogo').addEventListener('mouseleave', function() {
        document.querySelector('.logo').src = '/img/logo-1.png';
    });


});