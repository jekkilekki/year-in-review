<section id="learning">
    <div class="row">

    <!-- Learning Intro & Description -->
    <aside class="section-aside stick-it">
        <h1 class="section-title">Learning</h1>
        <h2 class="section-subtitle">The Year of PHP</h2>
        <p>I'm passionate about making the web a better place for everyone.
            To that end, I strive to create websites and projects that are beautiful,
            intuitive, and have a great user experience. I work hard to stick to
            well-established coding standards, use loads of comments, and document
            everything. With design, I strive to make things that are not only
            visually pleasing, but also communicate the design objectives effectively
            to their desired audience.
        </p>
        <p>In 2016, I made a number of key decisions that helped propel those visions
            forward. Two of the biggest were rejoining Lynda.com and starting to
            put in job applications for a WordPress development position. Both of
            these challenged me to push myself beyond my perceived limitations.
        </p>
    </aside>

    <!-- Learning Section Start -->
    <div class="section-content">

        <!-- Certifications -->
        <article class="certifications">
            <h3 class="article-title">Lynda.com Learning Paths Completed</h3>
            <p>My primary goal for 2016 was: to <a href="">learn PHP deeply.</a> Here are the results.</p>

            <!-- Badges -->
            <div class="row badges">
                <div class="col-2 wp-cert">
                    <a href="https://linkedin.com/in/aaronsnowberger#certification-88629295">
                        <img class="lynda-complete" src="assets/images/lynda-path-complete.png">
                    </a>
                    <p class="article-description"><strong>Become a Junior WordPress Developer</strong>
                        <br>Completion Date: July 2016
                    </p>
                </div>
                <div class="col-2 php-cert">
                    <a href="https://linkedin.com/in/aaronsnowberger#certification-1427257103">
                        <img class="lynda-complete" src="assets/images/lynda-path-complete.png">
                    </a>
                    <p class="article-description"><strong>Become a PHP Developer</strong>
                        <br>Completion Date: December 2016
                    </p>
                </div>
            </div><!-- .row .badges -->
        </article><!-- .certifications -->

      <!-- Lynda courses -->
      <article class="lynda">
        <h3 class="article-title">Lynda.com Courses Completed</h3>

        <?php
        /**
         * Lynda Courses PHP
         */
        // Retrieve all our Courses from CSV as an Associative Array
        $courses = extract_csv( 'assets/files/2016_lynda.csv' );

        // Calculate total time spent (in minutes) viewing these courses
        $lynda_time = 0;
        foreach( $courses as $course ) {
          $lynda_time += $course['Hours']*60 + $course['Minutes'];
        }

        // Sort Courses by Course Category
        $sorted = array_orderby( $courses, 'Category', SORT_DESC, 'Month', SORT_ASC );
        // Count the number of Courses in each Category
        $num_categories = assc_array_count_values( $sorted, 'Category' );
        // Now, simplify the count by giving assigning "Other" to anything with fewer than 3 courses
        $simple_cats = simplify_category_count( $num_categories );

        // Create an associative array of sub arrays for each Category
        // $full_list = sub_array_ify( $sorted, $sorted['Category'], $simple_cats );

        // Display total number of courses and a graduation cap icon to represent each
        $num_courses = count( $sorted );
        echo "<p class='huge-number'>$num_courses</p>";
        echo "<p>";
        $i = 0;
        foreach( $sorted as $course ) {
            $other_cat = ! array_key_exists( $course['Category'], $simple_cats ) ? 'Other' : '';
            echo "<i data-id='" . ++$i . "' class='fa fa-graduation-cap course " . $course['Category'] . ' ' . $other_cat . "' data-title='" . $course['Title'] . "' data-category='" . $course['Category'] . "'></i> ";
        }
        echo "</p>";
        ?>

        <ul class="sort-courses">
            <?php
            $other = 0;
            foreach( $simple_cats as $category => $num ) {
                echo "<li>$category <span>( $num )</span></li>";
            }
            ?>
        </ul>

        <div class="course-info">
            <?php $i = 0; foreach( $sorted as $course ) { ?>
                <p class="course-<?php echo ++$i; ?>">
                    <a href="<?php echo $course['Course Link']; ?>"><?php echo $course['Title']; ?></a>
                    <br><span class="course-author"><?php echo $course['Author']; ?></span>
                    <span class="course-length"><?php echo ' (' . make_time( $course['Hours']*60 + $course['Minutes'] ) . ')'; ?></span>
                    <a class="view-cert" href="<?php echo $course['Certificate']; ?>">
                        <span class="fa-stack fa-lg">
                            <i class="fa fa-certificate fa-stack-2x"></i>
                            <i class="fa fa-star fa-stack-1x"></i>
                        </span>
                    </a>
                </p>
            <?php } ?>
        </div>

      </article><!-- .lynda -->

      <!-- Lynda Specs -->
      <article class="lynda-specs">
        <div class="row">
          <!-- First Third: WordPress Courses -->
          <div class="col-3">
            <h3 class="article-title">WordPress Courses</h3>
            <p class="large-number"><?php echo $num_categories['WordPress']; ?></p>
            <p class="article-description">I've been learning WordPress since 2010:</p>
            <ul class="article-description">
              <li>2010: <a href="">1st WordPress site</a></li>
              <li>2012: 1st WP code mod</li>
              <li>2014: <a href="">1st plugin on .org</a></li>
              <li>2016: <a href="">1st theme on .org</a></li>
            </ul>
          </div>
          <!-- Second Third: PHP Courses -->
          <div class="col-3">
            <h3 class="article-title">PHP Courses</h3>
            <p class="large-number"><?php echo $num_categories['PHP']; ?></p>
            <p class="article-description">Although I've been tinkering with WordPress and
                customizing code for a while, this year I decided to really hunker down
                and focus on <em>mastering</em> PHP.
            </p>
            <p class="article-description">
              My ultimate goal is <a href="">Zend PHP Certification.</a>
            </p>
          </div>
          <!-- Third Third: JavaScript Courses -->
          <div class="col-3">
            <h3 class="article-title">JavaScript Courses</h3>
            <p class="large-number"><?php echo $num_categories['JavaScript']; ?></p>
            <p class="article-description"><a href="">2017 will be my year to learn JavaScript deeply!</a>
              I've already worked on:
            </p>
              <ul class="article-description">
                <li>jQuery + "vanilla" JS</li>
                <li>React.js + Babble.js</li>
                <li>D3.js (these charts)</li>
              </ul>
          </div>
        </div><!-- .row -->
      </article><!-- .lynda-specs -->

      <!-- Best Lynda Authors -->
      <article class="best-authors">
        <h3 class="article-title">My Favorite Lynda Teachers</h3>
        <p>This is a list of my favorite Lynda.com teachers in 2016
          (based on how many of their courses I watched).</p>
        <div class="barchart-container">
          <div class="barchart-title">
            <h4 class="article-subtitle">Courses taken per Lynda author</h4>
          </div>
          <div class="d3-barchart"></div>
          <ul class="lynda-imgs">
              <li>
                  <a href=""><img src="assets/images/lynda_morten_thumb.jpg"></a>
              </li>
              <li>
                  <a href=""><img src="assets/images/lynda_ray_thumb.jpg"></a>
              </li>
              <li>
                  <a href=""><img src="assets/images/lynda_kevin_thumb.jpg"></a>
              </li>
              <li>
                  <a href=""><img src="assets/images/lynda_david_thumb.jpg"></a>
              </li>
              <li>
                  <a href=""><img src="assets/images/lynda_simon_thumb.jpg"></a>
              </li>
              <li>
                  <a href=""><img src="assets/images/lynda_james_thumb.jpg"></a>
              </li>
          </ul>
        </div>
      </article><!-- .best-authors -->

      <!-- New Skills -->
      <article class="new-skills">
        <h3 class="article-title">Notable New Skills</h3>
        <p>Beyond my primary focus on PHP and WordPress, I also put together a few small
          projects utilizing the following cool new (to me) bits of web tech:</p>
        <div class="row spaced-image-row">
            <div class="col-2 spaced-image-description">
              <h4 class="article-subtitle">WP REST API</h4>
              <ul class="article-description">
                <li>Built a <a href="">Latest Posts plugin</a> with REST</li>
                <li>Built a <a href="">Simple Theme</a> with REST and AngularJS</li>
                <li>Built a <a href="">Codepen</a> that uses REST to pull posts</li>
                <li>Build<em>ing</em> an <a href="">Advent calendar</a> using REST and ReactJS</li>
              </ul>
            </div>
            <div class="col-2">
              <figure>
                <img src="assets/images/react-advent2.png">
              </figure>
            </div>
        </div>
        <div class="row spaced-image-row">
            <div class="col-2">
              <figure>
                <img src="assets/images/react-advent.png">
              </figure>
            </div>
            <div class="col-2 spaced-image-description">
              <h4 class="article-subtitle">React.js</h4>
              <ul class="article-description">
                <li>Created a <a href="">Codepen Collection</a> using React</li>
                <li>Learned about using <a href="">React with Babble.js</a></li>
                <li>Built an <a href="">Advent calendar</a> with React Components</li>
              </ul>
            </div>
        </div>
        <div class="row spaced-image-row">
            <div class="col-2 spaced-image-description">
              <h4 class="article-subtitle">D3.js Charts</h4>
              <ul class="article-description">
                <li>Worked on numerous <a href="">Codepens</a> that utilize D3</li>
                <li>Coded <a href="">some Gists</a> to run on bl.ocks.org and tributary.io</li>
                <li>Created the D3 charts on this site
                    <ul>
                        <li>"Lynda.com Authors" bar chart</li>
                        <li>"Life Categories" tree chart</li>
                        <li>"Books Read" pie chart</li>
                        <li>"Life Satisfaction" radar chart</li>
                    </ul>
                </li>
              </ul>
            </div>
            <div class="col-2">
                <div id="d3-tree"></div>
                <!-- <div class="jq-piechart">
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
                </div> -->
            </div>
        </div>
        <div class="row spaced-image-row">
            <div class="col-2">
              <figure>
                  <a class="svg-demo" href="">
                  <?php include( 'content-svg.php' ); ?>
                  </a>
                  <!-- <img src="assets/images/code-svg.png"> -->
                <!-- <svg class="sqirl-svg"><use xlink:href="assets/images/symbol-defs.svg#sqirl-svg"></use></svg> -->
              </figure>
            </div>
            <div class="col-2 spaced-image-description">
              <h4 class="article-subtitle">SVG Icon Injection</h4>
              <ul class="article-description">
                <li>One project I built used <code>svgeezy.js</code> and <code>svg-injector.js</code> to inject SVG code into the specified <code>&lt;img&gt;</code> tags.</li>
                <li>The client of that project also wanted animation, so I animated the SVGs directly in the code with <code>&lt;animateTransform/&gt;</code> tags.</li>
                <li>This "Year in Review" site uses <code>svgxuse.js</code> to inject SVG code in a slightly different way using XML <code>&lt;use&gt;</code> tags.</li>
              </ul>
            </div>
        </div>
      </article><!-- .new-skills -->

      <!-- Audible -->
      <article class="audible">
        <h3 class="article-title">Books "Read"</h3>
        <p>I do most of my "reading" via the Audible app on my 1 hour work commute.
          But this year I also read my first book <em>entirely in Korean:</em> <a href="">Harry Potter
          and the Sorcerer's Stone.</a></p>
        <?php
        // Books Image directory
        $image_dir = 'assets/images/books';
        $images = get_images( $image_dir );

        $books = extract_csv( 'assets/files/2016-books.csv' );
        $num_books = count( $books );
        $books_time = 0;

        echo "<p class='huge-number'>$num_books</p>";
        echo "<p>";
        $i = 0;
        foreach( $books as $book ) {
          if( $i == 0 ) {
            echo "<i class='fa fa-3x fa-book korean-book'></i> ";
          } else {
            echo "<i class='fa fa-2x fa-book'></i> ";
          }
          $books_time += $book['Hours']*60 + $book['Minutes'];
          $i++;
        }
        echo "</p>";
        ?>
      </article><!-- .audible -->
    </div><!-- .section-content -->
  </div><!-- .row -->
</section>

<section class="book-images">
  <article>
    <?php
      for( $i = 0; $i < count( $images ); $i++ ) {
        echo '<figure>';
        echo '<img ';
            if( $i == 5 || $i == 6 || $i == 14 || $i == 20 || $i == 23 || $i == 25 ) {
                echo 'class="best-book" ';
            }
        echo 'src="' . $images[$i] . '">';
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
      <article class="book-categories">
        <h3 class="article-title">My Favorite Books</h3>
        <p>
            The books I choose to read or listen to typically fall into the same types of categories:
            Business, Personal Development, and Psychology. But this year, I started getting into
            Biographies for the first time, and added in a few Fiction books as well (for the first
            time in years).
        </p>
        <div class="row">
          <div class="col-2">
            <div id="piechart" class="piechart">
              <!-- <div class="common-chart chart-border"></div>
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
              <p class="chart-label slice_5_label">2 Fiction</p> -->
            </div>
          </div>
          <div class="col-2">
            <h4 class="article-subtitle">The Best Books in 2016</h4>
            <ul class="article-description">
              <li><a href="">Level Up Your Life</a></li>
              <li><a href="">So Good They Can't Ignore You</a> <span class="list-note">(which has become my life mantra)</span></li>
              <li><a href="">Creativity, Inc.</a></li>
              <li><a href="">A Thousand Miles to Freedom</a></li>
              <li><a href="">Ready Player One</a></li>
              <li><a href="">Born a Crime</a></li>
            </ul>
          </div>
        </div>
      </article>
  <article class="time-spent">
    <div class="row">
      <div class="col-2">
        <h3 class="article-title">Lynda.com Time</h3>
        <p class="large-number"><?php echo make_time( $lynda_time ); ?></p>
        <p class="article-description">That's <?php echo make_time( $lynda_time, true, true ); ?>!</p>
      </div>
      <div class="col-2">
        <h3 class="article-title">Audiobooks Time</h3>
        <p class="large-number"><?php echo make_time( $books_time ); ?></p>
        <p class="article-description">That's <?php echo make_time( $books_time, true, true ); ?>!</p>
      </div>
    </div>
  </article>
  <article class="total-time">
      <h3 class="article-title">Total Learning Time</h3>
      <p class="huge-number">
          <?php
          $total_time = $lynda_time + $books_time;
          echo make_time( $total_time, true );
          ?>
      </p>
  </article>
  </div>
</div><!-- .row -->
</section>
