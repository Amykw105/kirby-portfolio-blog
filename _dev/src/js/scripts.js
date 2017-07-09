jQuery(document).ready(function($) {
  
  $('.site-navigation').slicknav({
    prependTo: '.main-header'
  });
  $('.slicknav_btn').click(function (event) {
     $('.main-header').toggleClass('open-fixed');
   });
   
   
   $('.count').each(function () {
    $(this).prop('Counter',0).animate({
        Counter: $(this).text()
    }, {
        duration: 4000,
        easing: 'swing',
        step: function (now) {
            $(this).text(Math.ceil(now));
        }
    });
});
   
 });