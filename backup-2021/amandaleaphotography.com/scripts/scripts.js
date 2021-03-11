$(document).ready(function(){
  /* menu toggle */
  $('.menu-item').click(function(){
    $(this).toggleClass('menu-item-dropdown');
    $(this).toggleClass('menu-item-click');
  });
  $('.menu-toggle').click(function(){
    $('.mobile-menu-dropdown').toggleClass('expand');
  });
  $('.inner-dropdown').click(function(){
    $(this).toggleClass('sub-expand');
  });

  if($('.normal-gallery').length > 0){
    
  }else{
    $('.ngg-gallery-thumbnail-box .ngg-gallery-thumbnail .ngg-simplelightbox').each(function(index, element){
      $altValue = $(this).find('img').attr("alt");
      
      $(this).attr("href", "/" + $altValue + "/");
      console.log($(this).find('img').attr("alt"));
      // $('.ngg-gallery-thumbnail-box .ngg-gallery-thumbnail .ngg-simplelightbox').click(function( event ) {
        
      // });
    })
  }
});

/* slick slider */
$(document).ready(function(){
  $('.testimonials-box .single-item').slick({ 
    autoplay: true, 
    dots: true,
    infinite: true,
    speed: 500
  });
});
$(document).ready(function(){
  $('.jumbotron-section .single-item-slide').slick({
    autoplay: true,
    dots: true,
    infinite: true,
    speed: 500,
  });
});