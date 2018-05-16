$(function(){
    $('.menu-open').click(function() {
        $('.menu').addClass('d-block');
        $('.close').addClass('d-block')
    });

    $('.menu__close').click(function() {
        $('.menu').removeClass('d-block');
        $('.close').removeClass('d-block');
    });

    $('.equipment input').click(function() {
        var this_id   = $(this).attr('id');
        var traingles = $('.triangle');

        traingles.find('.equipment-img').removeClass('active');
        traingles.find('.equipment-img[data-id="'+this_id+'"]').addClass('active');
    });
    
    //open desc//
      $('.slide-3-item__btn').click(function() {
          $(this).siblings('.slide-3-item-desc').toggle('.d-block');
          $(this).find('.fa-angle-right').toggleClass('fa-angle-down');
      });

});