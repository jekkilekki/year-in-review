<section id="coding">
  <div class="row">
  <aside class="section-aside stick-it">
    <h1 class="section-title">Coding</h1>
    <h2 class="section-subtitle">The Year of PHP</h2>
    <p>
      Hi! My name's Aaron Snowberger and I'm an WordPress/PHP web developer
      who's living in Jeonju, South Korea. I teach ESL at <a href="">Jeonju University</a>,
      Computer Science and Graphic Design at <a href="">GPA International High School</a>,
      and do freelance work with <a href="">various clients</a> to help them achieve their
      objectives on the web and in design. This is a Review of my Year: 2016.
    </p>
  </aside>
  <div class="section-content">
  <article class="wp-contributions">
    <h3 class="article-title">Contributions to WordPress</h3>
    <div class="row">
    <div class="col-2 wp-cert">
      <p>WordPress Themes</p>
      <p class="huge-number">1/2/4<i class="dashicons dashicons-admin-appearance"></i></p>
      <ul class="article-description">
          <li><strong>One</strong> Theme <a href="">in the WP.org repository.</a></li>
          <li><strong>Two</strong> new themes built with Underscores &amp; Foundation (<a href="">one more submitted</a> for Review).</li>
          <li><strong>Four</strong> Child Themes contributed to.</p></li>
      </ul>
    </div>
    <div class="col-2 php-cert">
      <p>WordPress Plugins</p>
      <p class="huge-number">2/9<i class="dashicons dashicons-admin-plugins"></i></p>
      <ul class="article-description">
          <li><strong>Two</strong> new Plugins <a href="">released on WP.org.</a></li>
          <li><strong>Nine</strong> total Plugins contributed to (and <a href="">one ready for submission</a> to WP.org).</p></li>
    </div>
    </div>
  </article>
  <article class="wp-contributions">
    <h3 class="article-title">Contributions to GitHub</h3>
    <!-- <p>485 contributions in the last year</p> -->
    <img class="github-calendar-full" src="assets/images/github-contrib-2016-color.png" alt="Jekkilekki's Github chart" />
    <!-- <img class="github-calendar-full" src="http://ghchart.rshah.org/2a4170/jekkilekki" alt="2016rshah's Github chart" /> -->
    <!-- Prepare a container for your calendar. -->
    <!-- <div class="github-calendar"> -->
        <!-- Loading stuff -->
        <!-- Loading GitHub data. -->
    <!-- </div> -->
    <!-- <div class="clear"></div> -->
    <div class="row">
      <div class="col-3">
        <h3 class="article-title">Total Contributions</h3>
        <p class="large-number">485</p>
        <p class="article-description">Jan 1, 2016 - Jan 1, 2017</p>
      </div>
      <div class="col-3">
        <h3 class="article-title">Repositories</h3>
        <p class="large-number">28</p>
        <p class="article-description">21 *NEW* repositories</p>
      </div>
      <div class="col-3">
        <h3 class="article-title">Longest streak</h3>
        <p class="large-number">64<span> days</span></p>
        <p class="article-description">March 26 - May 28</p>
      </div>
    </div>
  </article>
  <article class="websites">
    <h3 class="article-title">New WordPress Themes &amp; Child Themes</h3>
  </article>
</section>

<section class="site-images wp">
  <article>
    <?php
    $wp_sites = array(
        array(
            'name'  => 'JKL',
            'type' => 'theme',
            'url' => 'https://wordpress.org/themes/jkl/',
            'repo' => 'https://github.com/jekkilekki/theme-jkl',
            'description' => 'My very first theme in the WP.org repository! A simple black and white modern blog theme with left, right, or no sidebar options, a centered logo with split navigation, and some custom page templates. Template is fully responsive.'
        ),
        array(
            'name'  => 'Jinn',
            'type' => 'theme',
            'url' => 'https://themes.trac.wordpress.org/ticket/35576',
            'repo' => 'https://github.com/jekkilekki/theme-jin',
            'description' => 'A simple portfolio theme built with Sass and Foundation.'
        ),
        array(
            'name' => 'Covies',
            'type' => 'child theme',
            'url' => '',
            'repo' => 'https://github.com/jekkilekki/child-covies',
            'description' => ''
        ),
        array(
            'name' => 'GPA',
            'type' => 'child theme',
            'url' => '',
            'repo' => '',
            'description' => ''
        ),
        array(
            'name'  => 'MarsX',
            'type' => 'child theme',
            'url' => '',
            'repo' => 'https://github.com/jekkilekki/theme-marsx',
            'description' => ''
        ),
        array(
            'name' => 'MarsXI',
            'type' => 'child theme',
            'url' => '',
            'repo' => 'https://github.com/jekkilekki/theme-marsxi',
            'description' => ''
        )
    );
    // Site Image directory
        $site_image_dir = 'assets/images/sites/wp';
        $site_images = get_images( $site_image_dir );

    ?>

    <?php for( $i = 0; $i < count( $site_images ); $i++ ) : ?>

        <figure>
            <img src="<?php echo $site_images[$i]; ?>">
            <span>
                <a href="<?php echo $wp_sites[$i]['url']; ?>">
                    <h4><?php echo $wp_sites[$i]['name'] . ' ' . ucwords( $wp_sites[$i]['type'] ); ?></h4>
                </a>
                <p class="site-description"><?php echo $wp_sites[$i]['description']; ?></p>
                <a class="repo-link chart-label" href="<?php echo $wp_sites[$i]['repo']; ?>">Visit repository</a>
            </span>
        </figure>

    <?php endfor; ?>

  </article>
</section>

<section class="site-images non-wp">
  <article>
    <?php
    // Site Image directory
        $site_image_dir = 'assets/images/sites/www';
        $site_images = get_images( $site_image_dir );

      for( $i = 0; $i < count( $site_images ); $i++ ) {
        echo '<figure>';
        echo '<img src="' . $site_images[$i] . '">';
        echo '</figure>';
     }
    ?>
  </article>
</section>

<section class="totals">
  <div class="row">
      <aside class="section-aside">
      </aside>
    <div class="section-content">
        <article class="site-descriptions">
            <h3 class="article-title">These are a few of my Favorite Things</h3>
            <ul class="favorite-coding row">
                <li class="col-4">
                    <figure>
                        <img src="assets/images/logo-wordpress.png">
                    </figure>
                </li>
                <li class="col-4">
                    <figure>
                    <img src="assets/images/logo-wp-rest-api.png">
                    </figure>
                </li>
                <li class="col-4">
                    <figure>
                    <img src="assets/images/logo-react.png">
                    </figure>
                </li>
                <li class="col-4">
                    <figure>
                    <img src="assets/images/logo-d3.png">
                    </figure>
                </li>
            </ul>
        </article>
    </div>
  </div>
</section>
