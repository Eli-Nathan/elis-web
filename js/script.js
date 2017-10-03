var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-950065-32']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

$(document).ready(function () {
        $(".navbar li a").click(function(event) {
          $(".navbar-collapse").collapse('hide');
        });
      });
 window.sr = ScrollReveal({ reset: true });
            sr.reveal('.logoImg', {origin: 'top', distance: '200px', delay: 300, mobile : true });
            sr.reveal('.eli', {origin: 'left', distance: '200px', delay: 300, mobile : true });
            sr.reveal('.web', {origin: 'right', distance: '200px', delay: 300, mobile : true });
                sr.reveal('.serv-1', {origin: 'bottom', distance: '200px', delay: 200, duration: 600, mobile : true });
                sr.reveal('.serv-2', {origin: 'top', distance: '200px', delay: 300, duration: 600, mobile : true });
                sr.reveal('.serv-3', {origin: 'bottom', distance: '200px', delay: 200, duration: 600, mobile : true });
                sr.reveal('.serv-4', {origin: 'top', distance: '200px', delay: 300, duration: 600, mobile : true });
                sr.reveal('.box1', {opacity: 0, scale: 0, delay: 100, mobile : true });
                sr.reveal('.box2', {opacity: 0, scale: 0, delay: 200, mobile : true });
                sr.reveal('.box3', {opacity: 0, scale: 0, delay: 300, mobile : true });
                sr.reveal('.box4', {opacity: 0, scale: 0, delay: 400, mobile : true });
                sr.reveal('.box5', {opacity: 0, scale: 0, delay: 500, mobile : true });
                sr.reveal('.box6', {opacity: 0, scale: 0, delay: 600, mobile : true });
                sr.reveal('.chef', { origin: 'left', distance: '500px', delay: 300, mobile : true, easing: 'ease-in-out', duration: 600 });
                sr.reveal('.george', { origin: 'bottom', distance: '700px', delay: 500, mobile : true, easing: 'ease-in-out', duration: 600 });
                sr.reveal('.about-item-secondary', { origin: 'right', distance: '700px', delay: 600, mobile : true, easing: 'ease-in-out', duration: 600 });
                sr.reveal('.contact-form', { origin: 'left', distance: '200px', delay: 200, duration: 1000, mobile : true });
            sr.reveal('.contact-block-content', { origin: 'right', distance: '200px', delay: 200, duration: 1000, mobile : true });
            sr.reveal('.blogFull p, h3', {origin: 'left', distance: '200px', delay: 200, mobile : true });
sr.reveal('.postCon', {origin: 'left', distance: '200px', delay: 100, duration: 300, mobile : true });
                sr.reveal('.blog', {origin: 'right', distance: '200px', delay: 300, duration: 600, mobile : true });
 // SMOOTH SCROLL
$(function() {
  $('a[href*=#]:not([href=#myCarousel])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top -70
        }, 1000);
        return false;
      }
    }
  });
});
