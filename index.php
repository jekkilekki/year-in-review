<?php
// Year in Review: 2016
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://s.w.org/wp-includes/css/dashicons.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:300,300i,400,400i,500,500i,700,700i" rel="stylesheet">
    <link href="style.css" rel="stylesheet" type="text/css">
    <link href="calendar.css" rel="stylesheet" type="text/css">
    <!-- Include the GitHub calendar library. -->
    <script src="https://cdn.rawgit.com/IonicaBizau/github-calendar/gh-pages/dist/github-calendar.min.js"></script>
    <title>Year in Review: 2016</title>
</head>
<body>
    <header>
      <hgroup>
        <h1 class="page-title">Year in Review</h1>
        <h2 class="page-subtitle">2016</h2>
      </hgroup>
      <p class="haiku"></p>
      <nav class="main-navigation">
        <ul>
          <li>2016</li>
          <li>2015</li>
          <li>2014</li>
          <li>2013</li>
          <li>2012</li>
          <li>2011</li>
          <li>2010</li>
          <li>2009</li>
        </ul>
      </nav>
      <ul class="find-me">
        <li><a href="">Website</a></li>
        <li><a href="">LinkedIn</a></li>
        <li><a href="">GitHub</a></li>
        <li><a href="">Codepen</a></li>
        <li><a href="">Facebook</a></li>
        <li><a href="">Twitter</a></li>
      </ul>
    </header>
    <main>
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
            echo "<i class='fa fa-graduation-cap'></i>&nbsp;";
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
        <article class="wp-contributions">
          <h3 class="article-title">Contributions to WordPress</h3>
          <div class="row">
          <div class="col-2 wp-cert">
            <p>WordPress Themes</p>
            <p class="huge-number">1/3<i class="dashicons dashicons-admin-appearance"></i></p>
            <p class="article-description"><strong>One</strong> Theme <a href="">in the WP.org repository.</a>
              <br><strong>Three</strong> Themes contributed to (plus <a href="">one more submitted</a> for Theme Review).</p>
          </div>
          <div class="col-2 php-cert">
            <p>WordPress Plugins</p>
            <p class="huge-number">2/9<i class="dashicons dashicons-admin-plugins"></i></p>
            <p class="article-description"><strong>Two</strong> new Plugins <a href="">released on WP.org.</a>
              <br><strong>Nine</strong> total Plugins contributed to (and <a href="">one ready for submission</a> to WP.org).</p>
          </div>
          </div>
        </article>
        <article class="wp-contributions">
          <h3 class="article-title">Contributions to GitHub</h3>
          <img class="github-calendar-full" src="http://ghchart.rshah.org/2a4170/jekkilekki" alt="2016rshah's Github chart" />
          <!-- Prepare a container for your calendar. -->
          <div class="github-calendar">
              <!-- Loading stuff -->
              Loading GitHub data.
          </div>
          <div class="clear"></div>
        </article>
        <article class="websites">
          <h3 class="article-title">New Sites Built</h3>

        </article>
        <article class="audible">
          <h3 class="article-title">Books "Read"</h3>
          <p>I do most of my "reading" via the Audible app on my 1 hour work commute.</p>
          <?php
          $books = 26;
          echo "<p class='huge-number'>$books</p>";
          echo "<p>";
          for( $i = 0; $i < $books; $i++ ) {
            echo "<i class='fa fa-2x fa-book'></i>&nbsp;";
          }
          echo "</p>";
          ?>
        </article>
        <article class="audible">
          <h3 class="article-title">Books Designed &amp; Published</h3>

        </article>
        <article class="audible row">
          <div class="col-3">
            <h3 class="article-title">KM Cycled</h3>
          </div>
          <div class="col-3">
            <h3 class="article-title">Protein Consumed</h3>
          </div>
          <div class="col-3">
            <h3 class="article-title">Weight Lost</h3>
          </div>
        </article>
        <article class="audible">
          <h3 class="article-title">Technology Courses Taught</h3>

        </article>
      </div><!-- .section-content -->
    </div><!-- .row -->
      </section>
      <section id="career">
        <aside class="stick-it">

        </aside>
        <article class="wordpress">

        </article>
        <article class="freelance">

        </article>
        <article class="teaching">

        </article>
      </section>
      <section id="family">
        <aside class="stick-it">

        </aside>
        <article class="sarah">

        </article>
        <article class="kids">

        </article>
      </section>
    </main>
    <footer>

    </footer>
    <script>
        GitHubCalendar(".github-calendar", "jekkilekki");
    </script>
</body>
</html>
