$(function(){$("a[href*=#]:not([href=#])").click(function(){if(location.pathname.replace(/^\//,"")==this.pathname.replace(/^\//,"")&&location.hostname==this.hostname){var e=$(this.hash);if(e=e.length?e:$("[name="+this.hash.slice(1)+"]"),e.length)return $("html,body").animate({scrollTop:e.offset().top},1e3),!1}})}),$(".owl-carousel").owlCarousel({loop:!0,margin:10,nav:!1,dots:!0,dotsEach:!0,responsive:{0:{items:1},600:{items:1},1e3:{items:1}}}),$(document).ready(function(){$("html").niceScroll({cursorcolor:"#f74d65",scrollspeed:"100",cursorborder:"1px solid #f74d65",horizrailenabled:"false",cursorborderradius:"0px"})}),(new WOW).init(),$(window).load(function(){$("#status").fadeOut(),$("#preloader").delay(350).fadeOut("slow"),$("body").delay(350).css({overflow:"visible"})});