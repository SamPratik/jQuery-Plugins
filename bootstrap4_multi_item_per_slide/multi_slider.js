$('#mySlider').on('slide.bs.carousel', function (e) {

    var $e = $(e.relatedTarget);

    $('.active, .active-next').addClass('sliding');

    $e.removeClass('active-next');

    var $next = $e.next();
    var $nextnext = $e.next().next();

    if ($next.length===0){
      $next = $('.carousel-item').eq(0);
    }

    if ($nextnext.length===0){
      $nextnext = $('.carousel-item').eq(1);
    }

    $next.addClass('active-next');
    $nextnext.addClass('active-next');

    setTimeout(function(){
        $('.active, .active-next').removeClass('sliding');
    },1000);

});
