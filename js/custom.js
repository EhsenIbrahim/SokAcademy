$('.responsive').slick({
  dots: true,
  infinite: true,
  speed: 300,
  slidesToShow: 4,
  slidesToScroll: 4,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});


$(document).ready(function(){
  $('.owl-carousel').owlCarousel({
    loop: true, 
    dots: false,
    margin: 0,
    items: 1, 
    nav: true,
    animateOut: 'fadeOut',
    animateIn: 'fadeIn',
    autoplay:true,
    autoplayTimeout:6000,
    
  });
});

// Testimonial

// $(document).ready(function(){
//   $('.owl-carousel-testinomials').owlCarousel({
//     loop: true, 
//     dots: false,
//     margin: 0,
//     items: 6, 
//     nav: true,
    
//   });
// });






// Gallery
// 

$(document).ready(function(){

    $(".filter-button").click(function(){
        var value = $(this).attr('data-filter');
        
        if(value == "all")
        {
            //$('.filter').removeClass('hidden');
            $('.filter').show('1000');
        }
        else
        {
//            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
//            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
            $(".filter").not('.'+value).hide('3000');
            $('.filter').filter('.'+value).show('3000');
            
        }
    });
    
    if ($(".filter-button").removeClass("active")) {
$(this).removeClass("active");
}
$(this).addClass("active");

});




// Menu Js
(function($) {
$.fn.menumaker = function(options) {  
 var cssmenu = $(this), settings = $.extend({
   format: "dropdown",
   sticky: false
 }, options);
 return this.each(function() {
   $(this).find(".button").on('click', function(){
     $(this).toggleClass('menu-opened');
     var mainmenu = $(this).next('ul');
     if (mainmenu.hasClass('open')) { 
       mainmenu.slideToggle().removeClass('open');
     }
     else {
       mainmenu.slideToggle().addClass('open');
       if (settings.format === "dropdown") {
         mainmenu.find('ul').show();
       }
     }
   });
   cssmenu.find('li ul').parent().addClass('has-sub');
multiTg = function() {
     cssmenu.find(".has-sub").prepend('<span class="submenu-button"></span>');
     cssmenu.find('.submenu-button').on('click', function() {
       $(this).toggleClass('submenu-opened');
       if ($(this).siblings('ul').hasClass('open')) {
         $(this).siblings('ul').removeClass('open').slideToggle();
       }
       else {
         $(this).siblings('ul').addClass('open').slideToggle();
       }
     });
   };
   if (settings.format === 'multitoggle') multiTg();
   else cssmenu.addClass('dropdown');
   if (settings.sticky === true) cssmenu.css('position', 'fixed');
resizeFix = function() {
  var mediasize = 1000;
     if ($( window ).width() > mediasize) {
       cssmenu.find('ul').show();
     }
     if ($(window).width() <= mediasize) {
       cssmenu.find('ul').hide().removeClass('open');
     }
   };
   resizeFix();
   return $(window).on('resize', resizeFix);
 });
  };
})(jQuery);

(function($){
$(document).ready(function(){
$("#cssmenu").menumaker({
   format: "multitoggle"
});
});
})(jQuery);




// AOS.init({duration:800,});

// function animateValue(obj, start, end, duration) {
//   let startTimestamp = null;
//   const step = (timestamp) => {
//     if (!startTimestamp) startTimestamp = timestamp;
//     const progress = Math.min((timestamp - startTimestamp) / duration, 1);
//     obj.innerHTML = Math.floor(progress * (end + start) + start);
//     if (progress <1) {
//       window.requestAnimationFrame(step);
//     }
//   };
//   window.requestAnimationFrame(step);
// }

// const obj = document.getElementById("value1");
// animateValue(obj, 0, 560, 10000);

// const obj2 = document.getElementById("value2");
// animateValue(obj2, 0, 197, 10000);

// const obj3 = document.getElementById("value3");
// animateValue(obj3, 0, 268, 10000);

// const obj4 = document.getElementById("value4");
// animateValue(obj4, 0, 340, 10000);



// function openModal() {
//   document.getElementById("myModal").style.display = "block";
// }

// function closeModal() {
//   document.getElementById("myModal").style.display = "none";
// }

// var slideIndex = 1;
// showSlides(slideIndex);

// function plusSlides(n) {
//   showSlides(slideIndex += n);
// }

// function currentSlide(n) {
//   showSlides(slideIndex = n);
// }

// function showSlides(n) {
//   var i;
//   var slides = document.getElementsByClassName("mySlides");
//   var dots = document.getElementsByClassName("demo");
//   var captionText = document.getElementById("caption");
//   if (n > slides.length) {slideIndex = 1}
//   if (n < 1) {slideIndex = slides.length}
//   for (i = 0; i < slides.length; i++) {
//       slides[i].style.display = "none";
//   }
//   for (i = 0; i < dots.length; i++) {
//       dots[i].className = dots[i].className.replace(" active", "");
//   }
//   slides[slideIndex-1].style.display = "block";
//   dots[slideIndex-1].className += " active";
//   captionText.innerHTML = dots[slideIndex-1].alt;
// }



// scroll reveal animatoin


// var rafId = null;
// var delay = 100;
// var lTime = 0;

// function scroll() {
//   var scrollTop = $(window).scrollTop();
//   var height = $(window).height()
//   var visibleTop = scrollTop + height;
//   $('.reveal').each(function() {
//     var $t = $(this);
//     if ($t.hasClass('reveal_visible')) { return; }
//     var top = $t.offset().top;
//     if (top <= visibleTop) {
//       if (top + $t.height() < scrollTop) {
//         $t.removeClass('reveal_pending').addClass('reveal_visible');
//       } else {
//         $t.addClass('reveal_pending');
//         if (!rafId) requestAnimationFrame(reveal);  
//       }
//     }
//   });
// }
// function reveal() {
//   rafId = null;
//   var now = performance.now();
  
//   if (now - lTime > delay) {
//     lTime = now;
//     var $ts = $('.reveal_pending');
//     $($ts.get(0)).removeClass('reveal_pending').addClass('reveal_visible');  
//   }
  
  
//   if ($('.reveal_pending').length >= 1) rafId = requestAnimationFrame(reveal);
// }

// $(scroll);
// $(window).scroll(scroll);
// $(window).click(function() {
//   $('.reveal').removeClass('reveal_visible').removeClass('reveal_pending');
//   lTime = performance.now() + 500;
//   var top = $(window).scrollTop();
//   $(window).scrollTop(top === 0 ? 1 : top-1);
// });



var rafId = null;
var delay = 100;
var lTime = 0;
var isResetting = false; // Flag to indicate whether a reset is in progress

function scroll() {
  if (isResetting) return; // Don't perform scroll actions during reset
  var scrollTop = $(window).scrollTop();
  var height = $(window).height();
  var visibleTop = scrollTop + height;
  $('.reveal').each(function() {
    var $t = $(this);
    if ($t.hasClass('reveal_visible')) { return; }
    var top = $t.offset().top;
    if (top <= visibleTop) {
      if (top + $t.height() < scrollTop) {
        $t.removeClass('reveal_pending').addClass('reveal_visible');
      } else {
        $t.addClass('reveal_pending');
        if (!rafId) requestAnimationFrame(reveal);  
      }
    }
  });
}

function reveal() {
  rafId = null;
  var now = performance.now();
  
  if (now - lTime > delay) {
    lTime = now;
    var $ts = $('.reveal_pending');
    $($ts.get(0)).removeClass('reveal_pending').addClass('reveal_visible');  
  }
  
  if ($('.reveal_pending').length >= 1) rafId = requestAnimationFrame(reveal);
}

$(scroll);
$(window).scroll(scroll);
