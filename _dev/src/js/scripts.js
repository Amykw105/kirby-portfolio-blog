jQuery(document).ready(function($) {
  
  $('.site-navigation').slicknav({
    prependTo: '.main-header'
  });
  $('.slicknav_btn').click(function (event) {
     $('.main-header').toggleClass('open-fixed');
   });
    window.sr = ScrollReveal();
    sr.reveal('.text-section .page-title');

   $('.swipeboxs').Chocolat();
 });