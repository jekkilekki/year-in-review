<div class="color-change">
<section id="coding">
  <div class="row">
  <aside class="section-aside">
      <div class="aside-content">
        <h1 class="section-title">Coding</h1>
        <h2 class="section-subtitle">The Year of PHP</h2>
        <p>
          Although I majored in Computer Science in university (2006), it wasn't until around
          2010 when I started getting into web development and graphic design that I
          really became passionate about coding again. I love how I can combine both my
          talents (art and computers) to create meaningful designs and services that
          communicate effectively and work intuitively.
        </p>
        <p>
            After a brief stint into static HTML/CSS sites, then into Joomla and Moodle for
            a few months, I fell in love with WordPress and haven't looked back since. Each
            year, I push myself to build new things better, with technologies and techniques
            I've never learned before. For example:
        </p>
        <ul>
            <li>2010: WordPress Essentials</li>
            <li>2011: Branding (Media Design MFA)</li>
            <li>2012: WP Custom Post Types &amp; Taxonomies</li>
            <li>2013: Platform building &amp; Blogging, WP Multisite</li>
            <li>2014: WP plugin development, git, GitHub, SVN</li>
            <li>2015: WP theme development, Sass, Grunt</li>
            <li>2016: WP REST API, React.js, D3.js, SVG Icons</li>
            <li>2017? WP apps, DC.js, PostCSS, Gulp, Browserify, Angular.js</li>
        </ul>
    </div>
  </aside>
  <div class="section-content">
  <article class="wp-contributions">
    <h3 class="article-title">Contributions to WordPress</h3>
    <div class="row">
    <div class="col-2 wp-cert">
      <p>WordPress Themes</p>
      <p class="huge-number">1/2/3<i class="dashicons dashicons-admin-appearance"></i></p>
      <ul class="article-description">
          <li><strong>One</strong> Theme <a href="http://wordpress.org/themes/jkl/">in the WP.org repository.</a></li>
          <li><strong>Two</strong> new themes built with Underscores &amp; Foundation (<a href="https://themes.trac.wordpress.org/ticket/35576">one more submitted</a> for Review).</li>
          <li><strong>Three</strong> Child Themes built.</p></li>
      </ul>
    </div>
    <div class="col-2 php-cert">
      <p>WordPress Plugins</p>
      <p class="huge-number">2/9<i class="dashicons dashicons-admin-plugins"></i></p>
      <ul class="article-description">
          <li><strong>Two</strong> <a href="https://wordpress.org/plugins/jkl-timezone-converter/">new Plugins</a> <a href="https://wordpress.org/plugins/jkl-unit-converter/">released on WP.org.</a></li>
          <li><strong>Nine</strong> total Plugins contributed to (and <a href="https://github.com/jekkilekki/plugin-jkl-primary-categories">one more ready for submission</a> to WP.org).</p></li>
    </div>
    </div>
  </article>

    <article class="wp-theme">
        <h3 class="article-title">My FIRST WordPress.org Theme!</h3>
        <figure>
            <img class="wp-theme-full" src="assets/images/01-jkl-screenshot.jpg" alt="JKL WordPress Theme" />
        </figure>
        <p class="article-description">This is my FIRST WordPress.org theme! I submitted it in February and it was approved in November.</p>
    </article>

  <article class="github-contributions">
    <h3 class="article-title">Contributions to GitHub</h3>
    <img class="github-calendar-full" src="assets/images/github-contrib-2016-color.png" alt="Jekkilekki's Github chart" />
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

  <article class="site-descriptions">
      <h3 class="article-title">These are a few of my Favorite Things</h3>
      <p>
          I've spent this second half of the last year learning more and more about
          these technologies, and it's been a blast. The last time I remember having
          such fun learning new technology was when I first began programming in
          WordPress back in 2012.
      </p>
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

  <article class="websites">
    <h3 class="article-title">New WordPress Themes &amp; Child Themes</h3>
  </article>
</section>

<section class="site-images wp full-width">
  <article>
    <?php
    $wp_sites = array(
        // array(
        //     'name'  => 'JKL',
        //     'type' => 'theme',
        //     'url' => 'https://wordpress.org/themes/jkl/',
        //     'repo' => 'https://github.com/jekkilekki/theme-jkl',
        //     'description' => 'My very first theme in the WP.org repository! A simple black and white modern blog theme with left, right, or no sidebar options, a centered logo with split navigation, and some custom page templates. Template is fully responsive.'
        // ),
        array(
            'name'  => 'Jinn',
            'type' => 'theme',
            'url' => 'https://themes.trac.wordpress.org/ticket/35576',
            'repo' => 'https://github.com/jekkilekki/theme-jin',
            'description' => 'A simple portfolio theme built with Sass and Foundation. It is based on Underscores Components and includes support for Jetpack Portfolio and Testimonial Post Types.'
        ),
        array(
            'name' => 'Covies',
            'type' => 'child theme',
            'url' => 'http://coviescebu.com/',
            'repo' => 'https://github.com/jekkilekki/child-covies',
            'description' => 'This site was built as an upgrade from a Wix site one of my co-workers was running for a school he co-owns in the Philippines.'
        ),
        array(
            'name'  => 'MarsX',
            'type' => 'child theme',
            'url' => '',
            'repo' => 'https://github.com/jekkilekki/theme-marsx',
            'description' => 'MarsX is an underground construction company (start-up) in Korea. This first design was something unique and "space-age" styled.'
        ),
        array(
            'name' => 'MarsXI',
            'type' => 'child theme',
            'url' => 'https://marsx.kr',
            'repo' => 'https://github.com/jekkilekki/theme-marsxi',
            'description' => 'Ultimately, MarsX wanted something simpler (more like SpaceX). This second design is a Child Theme of Automattic\'s TwentySeventeen.'
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

<section class="site-images non-wp full-width">
  <article>
    <?php
    $site_links = array(
        'http://practicalenglishwriting.com',
        'http://gpa.justkeeplearning.xyz',
        'http://jekkilekki.com/lab/trumpinator/',
        'http://tesol4korea.com',
        'http://gpa.justkeeplearning.xyz/yearbook/',
        'http://www.aaronsnowberger.com/site-demos/deanne/',
        'http://www.aaronsnowberger.com/site-demos/sqirl-capital/',
        'http://codepen.io/jekkilekki/pen/yVpeBy'
    );

    // Site Image directory
        $site_image_dir = 'assets/images/sites/www';
        $site_images = get_images( $site_image_dir );

      for( $i = 0; $i < count( $site_images ); $i++ ) { ?>

        <figure>
            <img src="<?php echo $site_images[$i]; ?>">
            <span>
                <a class="repo-link chart-label" href="<?php echo $site_links[$i]; ?>">Go &rarr;</a>
            </span>
        </figure>

    <?php } ?>
  </article>
</section>
</div>
