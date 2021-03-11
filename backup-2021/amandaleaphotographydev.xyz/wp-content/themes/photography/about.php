<?php get_header(); ?>

  <body class="about-page">

    <section class="about-section">
      <div id="about-wrapper" class="about-wrapper">
        <div class="about-header">
          <img src="<?php bloginfo('template_url'); ?>/images/About/about-header.jpg" alt="About header">
        </div>
        <div class="about-content-left">
          <div class="about-content-image">
            <img src="<?php bloginfo('template_url'); ?>/images/About/amanda.jpg" alt="Photo of Amanda">
          </div>
        </div>
        <div class="about-content">
          <h2>About Amanda Lea</h2>
          <p>Welcome to Amanda Lea Photography! &nbsp;
          ​I hope you enjoy looking through the photos as much as I enjoy taking them. I recently graduated from UW-Green Bay with a Bachelors in Business Administration and a minor in Studio Arts-Photography.  In addition to my own work, I've also done studio photography in Appleton, WI. I love meeting new people, and each person I photograph is a new story I am able to tell. Just let me know what you want your story to be!</p>
        </div>

        <div class="about-content">
          <h2>My Work</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eleifend vitae ante a fermentum. Cras fermentum mauris vel egestas condimentum. Quisque facilisis erat nec consectetur ultricies. Vestibulum pretium ante in mauris tincidunt, vitae rhoncus ante dapibus. Sed aliquet sit amet mauris et ultricies. Curabitur lectus massa, aliquam venenatis tempor id, tempor vel nisl. Morbi dignissim auctor mauris. Aliquam erat volutpat. Ut accumsan lectus egestas velit posuere aliquet. Nunc egestas cursus volutpat. Duis ac augue eu leo scelerisque gravida eu nec nisl. Proin sed condimentum elit.</p>
        </div>
        <div class="about-content-right">
          <div class="about-content-image">
            <img src="<?php bloginfo('template_url'); ?>/images/About/my-work.jpg" alt="Photo of Amanda">
          </div>
        </div>
          </section>
        </div>
        <div class="about-ctas">
          <div class="about-cta"></div>
          <div class="about-cta"></div>
        </div>
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

		<?php get_footer(); ?>
