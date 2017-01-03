<section id="learning">
  <div class="row">
  <aside class="section-aside stick-it">
    <h1 class="section-title">Learning</h1>
    <h2 class="section-subtitle">The Year of PHP</h2>
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
      <a href=""><img class="lynda-complete" src="images/lynda-path-complete.png"></a>
      <p class="article-description"><strong>Become a Junior WordPress Developer</strong>
        <br>Completion Date: July 2016</p>
    </div>
    <div class="col-2 php-cert">
      <a href=""><img class="lynda-complete" src="images/lynda-path-complete.png"></a>
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
      <p class="article-description">And something</p>
    </div>
    <div class="col-3">
      <h3 class="article-title">PHP Courses</h3>
      <p class="large-number">15</p>
      <p class="article-description">My ultimate goal is Zend PHP Certification.</p>
    </div>
    <div class="col-3">
      <h3 class="article-title">JavaScript Courses</h3>
      <p class="large-number">5</p>
      <p class="article-description">2017 will be my year to learn JavaScript deeply!</p>
    </div>
    </div>
  </article>
  <article class="new-skills">
    <h3 class="article-title">Notable New Skills</h3>
    <p>Beyond my primary focus on PHP and WordPress, I also put together a few small projects utilizing the following cool new bits of tech:</p>
    <div class="row">
    <div class="col-2 wp-cert">
      <p>WP REST API</p>
    </div>
    <div class="col-2 wp-cert">
      <img>
    </div>
    </div>
    <div class="row">
    <div class="col-2 wp-cert">
      <img>
    </div>
    <div class="col-2 wp-cert">
      <p>React.JS</p>
    </div>
    </div>
  </article>
  <article class="audible">
    <h3 class="article-title">Books "Read"</h3>
    <p>I do most of my "reading" via the Audible app on my 1 hour work commute.</p>
    <?php
    $books = 26;
    echo "<p class='huge-number'>$books</p>";
    echo "<p>";
    for( $i = 0; $i < $books; $i++ ) {
      echo "<i class='fa fa-2x fa-book'></i> ";
    }
    echo "</p>";
    ?>
  </article>
</div><!-- .section-content -->
</div><!-- .row -->
</section>
