<section id="learning">
  <div class="row">
  <aside class="section-aside stick-it">
    <h1 class="section-title">Learning</h1>
    <h2 class="section-subtitle">The Year of PHP</h2>
    <img src="images/aaron-profile-2016-me-small.jpg">
    <p>
      Hi! My name's Aaron Snowberger and I'm an WordPress/PHP web developer
      who's living in Jeonju, South Korea. I teach ESL at <a href="">Jeonju University</a>,
      Computer Science and Graphic Design at <a href="">GPA International High School</a>,
      and do freelance work with <a href="">various clients</a> to help them achieve their
      objectives on the web and in design. This is a Review of my Year: 2016.
    </p>
    <p>
      I'm passionate about making the web a better place for everyone (<a href="">South
      Korean internet</a> drove me to that passion in the first place).
      To that end, I strive to create websites and projects that are beautiful,
      intuitive, and have a great user experience. I work hard to stick to
      well-established coding standards, use loads of comments, and document
      everything. With design, I strive to make things that are not only
      visually pleasing, but also communicate the design objectives effectively
      to their desired audience.
    </p>
    <p>
      In 2016, I made a number of key decisions that helped propel those visions
      forward. Two of the biggest were rejoining Lynda.com and
    </p>
  </aside>
  <div class="section-content">
  <article class="certifications">
    <h3 class="article-title">Lynda.com Learning Paths Completed</h3>
    <p>My primary goal for 2016 was: to <a href="">learn PHP deeply.</a> Here are the results.</p>
    <div class="row">
    <div class="col-2 wp-cert">
      <a href="https://linkedin.com/in/aaronsnowberger#certification-88629295"><img class="lynda-complete" src="images/lynda-path-complete.png"></a>
      <p class="article-description"><strong>Become a Junior WordPress Developer</strong>
        <br>Completion Date: July 2016</p>
    </div>
    <div class="col-2 php-cert">
      <a href="https://linkedin.com/in/aaronsnowberger#certification-1427257103"><img class="lynda-complete" src="images/lynda-path-complete.png"></a>
      <p class="article-description"><strong>Become a PHP Developer</strong>
        <br>Completion Date: December 2016</p>
    </div>
    </div>
  </article>
  <article class="lynda">
    <h3 class="article-title">Lynda.com Courses Completed</h3>
    <?php
    $courses = 71;
    echo "<p class='huge-number'>$courses</p>";
    echo "<p>";
    for( $i = 0; $i < $courses; $i++ ) {
      echo "<i class='fa fa-graduation-cap'></i> ";
    }
    echo "</p>";
    ?>
    <ul class="sort-courses">
      <li>WP Path</li>
      <li>PHP Path</li>
      <li>WordPress</li>
      <li>PHP</li>
      <li>JavaScript</li>
      <li>HTML</li>
      <li>CSS</li>
      <li>Graphic Design</li>
      <li>Other</li>
    </ul>
    <div class="course-info">
      <p>Some course name <span class="course-author">Some author</span> <span class="course-length">1:30</span></p>
    </div>
  </article>
  <article class="lynda-specs">
    <div class="row">
    <div class="col-3">
      <h3 class="article-title">WordPress Courses</h3>
      <p class="large-number">20</p>
      <p class="article-description">I've been learning WordPress since 2010:</p>
      <ul class="article-description">
        <li>2010: <a href="">1st WordPress site</a></li>
        <li>2012: 1st WP code mod</li>
        <li>2014: <a href="">1st plugin on .org</a></li>
        <li>2016: <a href="">1st theme on .org</a></li>
      </ul>
    </div>
    <div class="col-3">
      <h3 class="article-title">PHP Courses</h3>
      <p class="large-number">15</p>
      <p class="article-description">After a handful of "close but no cigar"
        WordPress and PHP job interviews, I decided to focus intently on mastering PHP this year.
        My ultimate goal is <a href="">Zend PHP Certification.</a></p>
    </div>
    <div class="col-3">
      <h3 class="article-title">JavaScript Courses</h3>
      <p class="large-number">5</p>
      <p class="article-description"><a href="">2017 will be my year to learn JavaScript deeply!</a>
        I've already worked on:</p>
        <ul class="article-description">
          <li>jQuery (obviously)</li>
          <li>React.js + Babble.js</li>
          <li>D3.js (these charts)</li>
        </ul>
    </div>
    </div>
  </article>
  <article class="best-authors">
    <h3 class="article-title">My Favorite Lynda Teachers</h3>
    <p>This is a list of my favorite Lynda.com teachers in 2016
      (based on how many courses I took from each).</p>
    <div class="barchart-container">
      <div class="barchart-title">
        <h4 class="article-subtitle">Courses taken per Lynda author</h4>
        <p>I like these guys.</p>
      </div>
      <div class="barchart-content">
        <div class="barchart-y-axis">
          <p class="barchart-top-label">20</p>
          <p class="barchart-bottom-label">0</p>
        </div>
        <div class="barchart-area" bar-spacing="50">
          <div bar-value="18" label="Morten Rand-Hendriksen" class="barchart-bar morten"></div>
          <div bar-value="7" label="Ray Villalobos" class="barchart-bar ray"></div>
          <div bar-value="8" label="Kevin Skoglund" class="barchart-bar kevin"></div>
          <div bar-value="5" label="David Powers" class="barchart-bar david"></div>
          <div bar-value="3" label="Simon Allardice" class="barchart-bar simon"></div>
          <div bar-value="5" label="James Williamson" class="barchart-bar james"></div>
        </div>
        <div class="barchart-x-axis"></div>
      </div>
    </div>
    <div class="d3-barchart"></div>
  </article>
  <article class="new-skills">
    <h3 class="article-title">Notable New Skills</h3>
    <p>Beyond my primary focus on PHP and WordPress, I also put together a few small
      projects utilizing the following cool new bits of web tech:</p>
    <div class="row spaced-image-row">
    <div class="col-2 spaced-image-description">
      <h4 class="article-subtitle">WP REST API</h4>
      <ul class="article-description">
        <li>Built a <a href="">Latest Posts plugin</a> with REST</li>
        <li>Built a <a href="">Simple Theme</a> with REST and AngularJS</li>
        <li>Built a <a href="">Codepen</a> that uses REST to pull posts</li>
        <li>Building an <a href="">Advent calendar</a> using REST and ReactJS</li>
      </ul>
    </div>
    <div class="col-2">
      <figure>
        <img src="images/rest-advent.png">
      </figure>
    </div>
    </div>
    <div class="row spaced-image-row">
    <div class="col-2">
      <figure>
        <img src="images/react-advent.png">
      </figure>
    </div>
    <div class="col-2 spaced-image-description">
      <h4 class="article-subtitle">React.JS</h4>
      <ul class="article-description">
        <li>Created a <a href="">Codepen Collection</a> using React</li>
        <li>Learned about using <a href="">React with Babble.js</a></li>
        <li>Built an <a href="">Advent calendar</a> with React Components</li>
      </ul>
    </div>
    </div>
  </article>
  <article class="audible">
    <h3 class="article-title">Books "Read"</h3>
    <p>I do most of my "reading" via the Audible app on my 1 hour work commute.
      But this year I also read my first book <em>entirely in Korean:</em> <a href="">Harry Potter
      and the Sorcerer's Stone.</a></p>
    <?php
    // Books Image directory
    $image_dir = 'images/books';
    $images = get_images( $image_dir );

    $books = count( $images );
    echo "<p class='huge-number'>$books</p>";
    echo "<p>";
    for( $i = 0; $i < $books; $i++ ) {
      if( $i == 0 ) {
        echo "<i class='fa fa-3x fa-book korean-book'></i> ";
      } else {
        echo "<i class='fa fa-2x fa-book'></i> ";
      }
    }
    echo "</p>";
    ?>
  </article>
</div><!-- .section-content -->
</div><!-- .row -->
</section>
<section class="book-images">
  <article>
    <?php
      for( $i = 0; $i < count( $images ); $i++ ) {
        echo '<figure>';
        echo '<img src="' . $images[$i] . '">';
        echo '</figure>';
      }
    ?>
  </article>
</section>
<section class="totals">
  <div class="row">
    <div class="section-content">
      <article class="book-categories">
        <h3 class="article-title">My Favorite Books</h3>
        <p>The books I choose to read or listen to typically all fall into the same types of categories.</p>
        <div class="row">
          <div class="col-2">
            <div class="piechart">
              <div class="common-chart chart-border"></div>
              <div class="common-chart chart-base"></div>
              <div class="common-chart chart-center"></div>
              <div class="common-chart chart-slice slice_1_c">
                <div class="common-chart chart-slice slice_1_w"></div>
              </div>
              <div class="common-chart chart-slice slice_2_c">
                <div class="common-chart chart-slice slice_2_w"></div>
              </div>
              <div class="common-chart chart-slice slice_3_c">
                <div class="common-chart chart-slice slice_3_w"></div>
              </div>
              <div class="common-chart chart-slice slice_4_c">
                <div class="common-chart chart-slice slice_4_w"></div>
              </div>
              <div class="common-chart chart-slice slice_5_c">
                <div class="common-chart chart-slice slice_5_w"></div>
              </div>
              <p class="chart-label slice_1_label">12 Business</p>
              <p class="chart-label slice_2_label">6 Personal Development</p>
              <p class="chart-label slice_3_label">4 Biography</p>
              <p class="chart-label slice_4_label">3 Psychology</p>
              <p class="chart-label slice_5_label">2 Fiction</p>
            </div>
          </div>
          <div class="col-2">
            <h4 class="article-subtitle">The Best Books in 2016</h4>
            <ul class="article-description">
              <li>Level Up Your Life</li>
              <li>So Good They Can't Ignore You</li>
              <li>Creativity, Inc.</li>
              <li>A Thousand Miles to Freedom</li>
              <li>Ready Player One</li>
              <li>Born a Crime</li>
            </ul>
          </div>
        </div>
      </article>
  <article class="time-spent">
    <div class="row">
      <div class="col-2">
        <h3 class="article-title">Lynda.com Courses</h3>
        <p class="large-number">185<span> hours</span></p>
        <p class="article-description">That's 4.6 work weeks!</p>
      </div>
      <div class="col-2">
        <h3 class="article-title">Audiobooks</h3>
        <p class="large-number">185<span> hours</span></p>
        <p class="article-description">That's excluding the time it took to read Harry Potter in Korean!</p>
      </div>
    </div>
  </article>
  </div>
</div><!-- .row -->
</section>
