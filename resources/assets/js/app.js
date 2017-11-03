
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
import Buefy from 'buefy';
Vue.use(Buefy);

Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('contactform', require('./components/ContactFormComponent.vue'));

const app = new Vue({
    el: '#app'
});


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

    // ----- Animating japan emoticon in footer -----
    // ----------------------------------------------
    // $('.fck-trigger').on('mouseenter', function(){
    //    $('.fck').addClass('bounceInUp');
    // });
    //  $('.fck-trigger').on('mouseleave', function(){
    //      $('.fck').removeClass('bounceInUp');
    //  });
});
