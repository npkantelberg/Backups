</body>
  <section class="instagram-section">
    <div class="instafeed" id="instafeed"></div>
  </section>
  <section class="footer-section">
    <div class="footer-wrapper">

      <div class="sitemap">
        <a href="/">Home</a>
        <!-- <a href="http://amandaleaphotography.com/clp/weddings.php">Gallery</a> -->
        <a href="/about-me/">About</a>
        <!--<a href="http://amandaleaphotaography.com/clp/contact.php">Contact</a>-->
        <a href="/invenstment/">Investment</a>
        <a href="/extra-extra/">Extra</a>
      </div>
      <div class="copyright">
        Amanda Lea Photography
      </div>
    </div>
  </section>
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/instafeed.js/1.4.1/instafeed.min.js"></script> -->

  <!-- <script>

  var userFeed = new Instafeed({
      get: 'user',
      userId: '1643058565',
      accessToken: '1643058565.1677ed0.6ce0cc99975c49878b336dfe5d60054e',
      template: '<a target="_blank" href="{{link}}"><img src="{{image}}" /></a>',
      limit: 10,
      resolution: 'standard_resolution'
  });
  userFeed.run();

  </script> -->

  <script>
  	$('.modal-dialog .modal-gallery-image').click(function(){
  		$(this).toggleClass('modal-gallery-image-expand');
  		$('.modal-gallery-image-expand').not(this).removeClass('modal-gallery-image-expand');
    });
    $('.image-click-box').click(function(){
      $('.modal-gallery-image').removeClass('modal-gallery-image-expand');
    });
  </script>
