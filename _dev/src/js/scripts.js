jQuery(document).ready(function($) {
  
  $('.site-navigation').slicknav({
    prependTo: '.main-header'
  });
  $('.slicknav_btn').click(function (event) {
     $('.main-header').toggleClass('open-fixed');
   });
    // window.sr = ScrollReveal();
    // sr.reveal('.text-section .page-title');

   $('.swipeboxs').Chocolat();
   
   //$('.testimonial-slider').slick({}); 
   $('.main-carousel').flickity({
     pageDots: false,
     prevNextButtons: false,
     autoPlay: true,
     autoPlay: 6000,
     adaptiveHeight: true
    });
    $(window).scroll(function() {
      $('.greeting-icon').addClass('animated fadeIn');
    });

 }); 