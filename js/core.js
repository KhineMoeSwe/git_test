(function($){
    $(document).ready(function(){
        $('ul.dropdown-menu [data-toggle=dropdown]').on('click',function(event){
            event.preventDefault();event.stopPropagation();
        $(this).parent().siblings().removeClass('open');
        $(this).parent().toggleClass('open');});



    });})(jQuery);
        
        $(document).ready(function(){$(window).scroll(function(){if($(this).scrollTop()>100){$('.scrollToTop').fadeIn();}else{$('.scrollToTop').fadeOut();}});$('.scrollToTop').click(function(){$('html, body').animate({scrollTop:0},800);return false;});



});

// to top right away
if ( window.location.hash ) scroll(0,0);
// void some browsers issue
setTimeout( function() { scroll(0,0); }, 1);

$(function() {

    // your current click function
    $('.scroll').on('click', function(e) {
        e.preventDefault();
        $('html, body').animate({
            scrollTop: $($(this).attr('href')).offset().top + 'px'
        }, 1000, 'swing');
    });

    // *only* if we have anchor on the url
    if(window.location.hash) {

        // smooth scroll to the anchor id
        $('html, body').animate({
            scrollTop: $(window.location.hash).offset().top + 'px'
        }, 1000, 'swing');
    }

});     


(function($){
$(document).ready(function(){
    $('ul.dropdown-menu [data-toggle=dropdown]').on('click', function(event) {
        event.preventDefault(); 
        event.stopPropagation(); 
        $(this).parent().siblings().removeClass('open');
        $(this).parent().toggleClass('open');
        });
        // hover dropdown menu
        $('ul.dropdown-menu [data-toggle=dropdown]').on('click', function(event) {
        event.preventDefault(); 
        event.stopPropagation(); 
        $(this).parent().siblings().removeClass('open');
        $(this).parent().toggleClass('open');
        });

        $("ul.navbar-nav  li.dropdown [data-toggle=dropdown]").mouseover(function(){
            $(this).parent().toggleClass('open');
        });
        $("ul.navbar-nav  li.dropdown").mouseleave(function(){
            $(this).removeClass('open');
        });

$('[data-fancybox]')
.fancybox({

  protect: true,

  buttons : [
    'zoom',
    'thumbs',
    'close'
  ]
});
});
});
      
// $('[data-fancybox="watermark"]').fancybox({
//   protect    : true,
//   slideClass : 'watermark',
//   toolbar    : false,
//   smallBtn   : true
// });

// Preload watermark image
// Please, use your own image
// (new Image()).src = "https://fancyapps.com/GJbkSPU.png";