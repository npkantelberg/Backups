<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/amanda/amanda.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/slick/slick-theme.css"/>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="scripts/parallax.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Arima+Madurai:200|Give+You+Glory|Montserrat|Zeyada" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/styles/compiled/styles.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/styles/compiled/gallery-styles.css" type="text/css" media="screen" />
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/slick/slick.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/scripts/scripts.js"></script>
    <title>Amanda Lea Photography</title>
  </head>
	<section id="primary" class="content-area">
		<main id="main" class="site-main">

		</main>
  </section>

<body class="home-page">

    <section class="jumbotron-section">
      <div class="jumbotron-outer">
        <div class="jumbotron-inner">
          <div class="jumbotron-overlay">
          </div>

          <div class="wrapper menu-wrapper">
            <div class="logo-outer">
              <img class="logo" src="<?php bloginfo('template_url'); ?>/images/LOGO_19_White_Resize.png" alt="Amanda Lea Logo">
            </div>
            <div class="menu-toggle">
              <div class="menu-delimiter"></div>
              <div class="menu-delimiter"></div>
              <div class="menu-delimiter"></div>
              <div class="menu-delimiter"></div>
            </div>
            <div class="menu-outer">
              <ul class="menu-inner">
                <li class="menu-item"><a href="/">Home</a></li>
                <li class="menu-item menu-item-fix"><span>Gallery</span>
                  <ul class="menu-sub-list">
                    <!--<li><a href="http://amandaleaphotography.com/clp/gallery.php" class="menu-sub-item">View All</a></li>-->
                    <li><a href="/seniors/" class="menu-sub-item">Seniors</a></li>
                    <li><a href="/weddings/" class="menu-sub-item">The Big Day</a></li>
                    <li><a href="/family/" class="menu-sub-item">Children/Family</a></li>
                    <!--<li><a href="http://amandaleaphotography.com/clp/portraits.php" class="menu-sub-item">Portraits</a></li>-->
                    <li><a href="/couples/" class="menu-sub-item">Couples</a></li>
                  </ul>
                </li>
                <li class="menu-item"><a href="/about-me/">About</a></li>
                <!-- <li class="menu-item menu-item-fix"><a href="http://amandaleaphotography.com/clp/investments.php">Investment</a></li> -->
                <!--<li class="menu-item"><a href="http://amandaleaphotography.com/clp/contact.php">Contact</a></li>-->
                <li class="menu-item"><a href="/investment/">Investment</a></li>
                <li class="menu-item menu-item-fix"><span>Extra! Extra!</span>
                <ul class="menu-sub-list">
                  <li><a href="/extra-extra/" class="menu-sub-item">Extras</a></li>
                  <!--<li><a href="http://amandaleaphotography.com/clp/gallery.php" class="menu-sub-item">Blog</a></li>-->
                  <li><a href="http://thegrazel.wixsite.com/athaessly" target="_blank" class="menu-sub-item">A.T.Haessly</a></li>
                </ul>
                </li>
              </ul>
            </div>
          </div>
          <div class="mobile-menu-dropdown expand">
            <ul class="mobile-menu-inner">
              <li class="mobile-menu-item"><a href="/">Home</a></li>
              <li class="mobile-menu-item inner-dropdown"><span>Gallery</span>
                <ul class="mobile-menu-sub-list">
                  <!--<li><a href="http://amandaleaphotography.com/clp/gallery.php" class="mobile-menu-sub-item">View All</a></li>-->
                  <li><a href="/seniors/" class="mobile-menu-sub-item">Seniors</a></li>
                  <li><a href="/weddings/" class="mobile-menu-sub-item">The Big Day</a></li>
                  <li><a href="/family/" class="mobile-menu-sub-item">Children/Family</a></li>
                  <!--<li><a href="http://amandaleaphotography.com/clp/portraits.php" class="mobile-menu-sub-item">Portraits</a></li>-->
                  <li><a href="/couples/" class="mobile-menu-sub-item">Couples</a></li>
                </ul>
              </li>
              <li class="mobile-menu-item"><a href="/about-me/">About</a></li>
              <!--<li class="mobile-menu-item"><a href="http://amandaleaphotography.com/clp/contact.php">Contact</a></li>-->
              <!--<li class="mobile-menu-item"><a href="http://amandaleaphotography.com/clp/misc.php">Investment</a></li>-->
              <li class="mobile-menu-item inner-dropdown"><a href="/investment/">Investment</a></li>
              <li class="mobile-menu-item inner-dropdown"><span>Extra! Extra!</span>
              <ul class="mobile-menu-sub-list">
                <li><a href="/extra-extra/" class="menu-sub-item">Extras</a></li>
                <!--<li><a href="http://amandaleaphotography.com/clp/gallery.php" class="menu-sub-item">Blog</a></li>-->
                <li><a href="http://thegrazel.wixsite.com/athaessly" target="_blank" class="menu-sub-item">A.T.Haessly</a></li>
              </ul>
              </li>
            </ul>
          </div>

          <div class="slogan-wrapper">
            <div class="slogan-box">
              <span>Every photo is a story, what would you like yours to say.</span>
            </div>
          </div>
					<!-- Slideshow container -->
					<div class="slideshow-container single-item-slide">

						<!-- Full-width images with number and caption text -->
						<div class="mySlides slide1">
						</div>
						<div class="mySlides slide2">
						</div>
						<div class="mySlides slide3">
						</div>
            <div class="mySlides slide4">
						</div>
            <div class="mySlides slide5">
						</div>
            <div class="mySlides slide6">
						</div>
            <div class="mySlides slide7">
						</div>
            <div class="mySlides slide8">
						</div>

					</div>
					<br>

					<!-- The dots/circles -->
					<div style="text-align:center">
						<span class="dot" onclick="currentSlide(1)"></span>
						<span class="dot" onclick="currentSlide(2)"></span>
						<span class="dot" onclick="currentSlide(3)"></span>
					</div>
        </div>
      </div>
    </section>

    <section class="about-section">
      <div class="about-wrapper">
        <div class="about-logo">
					<img class="logo" src="<?php bloginfo('template_url'); ?>/images/LOGO_19_Black_Resize.png" alt="Amanda Lea Logo">
        </div>
        <div class="about-content">
          <p>
          Welcome to Amanda Lea Photography. I hope you enjoy looking through my photos as much as I enjoy taking them. I don’t remember the first time I held a camera or the exact moment I fell in love with photography, I guess it has just always been a part of my life. After starting my business in high school, I went on to study studio arts and photography at UW-Green Bay and had such an amazing experience, especially with black and white film, but the day I shot my first wedding in 2014, I was hooked! This business has led me to meeting the most amazing people, seeing beautiful places, attending some crazy parties, and eating lots of delicious cake! Every one of these amazing people I meet is a new story I am able to tell. Just let me know what you want your story to be! 
           </p>
        </div>
      </div>
    </section>
    <section class="testimonials-section">
      <!--<div class="parallax-window" data-parallax="scroll" data-image-src="images/parallax.jpg"></div>-->
      <div class="testimonials-wrapper">
        <div class="testimonials-logo">
          <img class="logo" src="<?php bloginfo('template_url'); ?>/images/testimonials.png" alt="">
        </div>
        <div class="testimonials-box">
          <div class="single-item">
            <div>
              <span>
                -Cat (2017)
              </span>
              <p>
                She's a blast to have around, and did an amazing job with our wedding photos! She definitely has an artistic eye that you can't find just anywhere!!!
              </p>
            </div>
            <div>
              <span>
                ​-Denise (2016)
              </span>
              <p>
                Amanda did our 20th anniversary photos. Very professional and I loved how they turned out. She was very open to my ideas of what I wanted and didn't want for photos.
              </p>
            </div>
              <div>
                <span>
                  -Shane (2016)
                </span>
                <p>
                  Fantastic photo shoot today. Amanda was flexible and scheduled a site visit to our business. She took my basic ideas and built on them, combining our industry and product into my professional head shots. I recommend Amanda for your photo shoot.
                </p>
            </div>
            <div>
              <span>
                -Kayla (2015)
              </span>
              <p>
                Amanda did an amazing job on these pictures! We are so happy the way that they turned out. Can't wait to see the rest and the pictures she will take on our wedding day!
              </p>
            </div>
            <div>
              <span>
                ​-Sue (2015)
              </span>
              <p>
                These pictures of Charlie & Kayla are the best I've seen in a long time. I can't pick out a "favorite" one, they're all great!
              </p>
            </div>
            <div>
              <span>
                -Stephanie (2014)
              </span>
              <p>
                These are fantastic...It meant so much that you were there for our special day!
              </p>
            </div>
          </div>
        </div>
      </section>

      <section class="parallax-section">
        <div class="parallax-box">

        </div>
	  </section>


      <section class="contact-section">
        <div class="contact-logo">
          <img class="logo" src="<?php bloginfo('template_url'); ?>/images/contact.png" alt="">
        </div>

				<div class="contact-wrapper">
          <h2 style="text-align:center">Contact</h2>
          <?php echo do_shortcode('[wpforms id="1546" title="false" description="false"]'); ?>
        </div>

				<div class="cal-wrapper">
					<iframe src="https://calendar.google.com/calendar/embed?src=amandaleaphotograph%40gmail.com&ctz=America%2FChicago" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
				</div>

      </section>
<?php
get_footer();
