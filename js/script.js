// event pada saat link di klik
$('.page-scroll').on('click', function(e){

     //ambil isi href
     var tujuan = $(this).attr('href');
     //tangkap elemen yang bersangkutan
     var elementujuan = $(tujuan);

     //pindahkan scroll
     $('body').animate({
     scrollTop: elementujuan.offset().top -50
     }, 1250,'easeInOutExpo');

    e.preventDefault();

});


// parallax about
$(window).on('load', function() {
    $('.pkiri').addClass('pmuncul');
    $('.pkanan').addClass('pmuncul');
});

$(window).scroll(function(){
    var wScroll = $(this).scrollTop();
    // parallax jumbotron
    $('.jumbotron img').css({
      'transform' : 'translate(0px,'+ wScroll/4 +'%)'
    });

    $('.jumbotron h1').css({
      'transform' : 'translate(0px,'+ wScroll/2 +'%)'
    });

    $('.jumbotron p').css({
      'transform' : 'translate(0px,'+ wScroll/1.2 +'%)'
    });

    // parallax portfolio
    if (wScroll > $('.portfolio').offset().top -250) {
      $('.portfolio .thumbnail').each(function(i){
        setTimeout(function(){
          $('.portfolio .thumbnail').eq(i).addClass('muncul');
        }, 400 * (i+1));
      });
    }

});


//slide foto
$(document).ready(function(){
  $('#imagecarousel').carousel();
});

// form
$(document).ready(function(){
  $('#nama').tooltip({
     trigger : 'hover',
     delay : 500
  });
});