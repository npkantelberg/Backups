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

  if($('.normal-gallery').length < 1){
  }else{
    $('.ngg-gallery-thumbnail-box .ngg-gallery-thumbnail .ngg-simplelightbox').each(function(index, element){
      $altValue = $(this).find('img').attr("alt");
      $(this).attr("href", "/" + $altValue + "/");
      $hoverText = $(this).attr("data-description");
      $(this).append("<span>" + $hoverText + "</span>")
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

$(document).ready(function(){
  $('.ngg-gallery-thumbnail-box .ngg-gallery-thumbnail .ngg-simplelightbox img').each(function(index, element){
    if($(this).height() > $(this).width()){
      $(this).parent().addClass("tall-image");
    } else{
      $(this).parent().addClass("wide-image");
    }
  })
  $('.ngg-navigation a').on('click', function(){
    setTimeout(function() {
      console.log('click 1');
      $('.ngg-gallery-thumbnail-box .ngg-gallery-thumbnail .ngg-simplelightbox img').each(function(index, element){
        if($(this).height() > $(this).width()){
          $(this).parent().addClass("tall-image");
        } else{
          $(this).parent().addClass("wide-image");
        }
      })
      changePage();
    }, 2000);
  })
});

function changePage(){
  $('.ngg-navigation a').on('click', function(){
    setTimeout(function() {
      console.log('click 2');
      $('.ngg-gallery-thumbnail-box .ngg-gallery-thumbnail .ngg-simplelightbox img').each(function(index, element){
        if($(this).height() > $(this).width()){
          $(this).parent().addClass("tall-image");
        } else{
          $(this).parent().addClass("wide-image");
        }
      })
      changePage();
    }, 2000);
  })
}
