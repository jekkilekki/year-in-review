/**
 * Vanilla JS Functions
 * @link http://youmightnotneedjquery.com
 */

function ready(fn) {
  if( document.readyState != 'loading' ) {
    fn();
  } else {
    document.addEventListener( 'DOMContentLoaded', fn );
  }
}

function fn() {
  var body = document.querySelector( "body" ),
      learning = document.getElementById( "learning" ),
      coding = document.getElementById( "coding" ),
      design = document.getElementById( "design" ),
      life = document.getElementById( "life" ),
      newyear = document.getElementById( "newyear" ),
      learningOffset = document.getElementById( "learning" ).getBoundingClientRect(),
      codingOffset = document.getElementById( "coding" ).getBoundingClientRect(),
      designOffset = document.getElementById( "design" ).getBoundingClientRect(),
      lifeOffset = document.getElementById( "life" ).getBoundingClientRect(),
      newyearOffset = document.getElementById( "newyear" ).getBoundingClientRect(),
      windowHeight = window.innerHeight;

      // alert(windowHeight);
  /**
   * Scrolling functions
   */
  document.onscroll = function() {
    if( document.body.scrollTop - learningOffset.top > windowHeight ) {
      if( body.classList ) {
        body.classList.add( 'bg-learning' );
        body.classList.remove( 'bg-coding' );
        body.classList.remove( 'bg-design' );
        body.classList.remove( 'bg-life' );
        body.classList.remove( 'bg-newyear' );
      } else {
        body.className += 'bg-learning';
      }
    } else {
      body.classList.remove( 'bg-learning' );
    }
    if( document.body.scrollTop - codingOffset.top > windowHeight ) {
      if( body.classList ) {
        body.classList.remove( 'bg-learning' );
        body.classList.add( 'bg-coding' );
        body.classList.remove( 'bg-design' );
        body.classList.remove( 'bg-life' );
        body.classList.remove( 'bg-newyear' );
      } else {
        body.className += 'bg-coding';
      }
    } else {
      body.classList.remove( 'bg-coding' );
    }
    if( document.body.scrollTop - designOffset.top > windowHeight ) {
      if( body.classList ) {
        body.classList.remove( 'bg-learning' );
        body.classList.remove( 'bg-coding' );
        body.classList.add( 'bg-design' );
        body.classList.remove( 'bg-life' );
        body.classList.remove( 'bg-newyear' );
      } else {
        body.className += 'bg-design';
      }
    } else {
      body.classList.remove( 'bg-design' );
    }
    if( document.body.scrollTop - lifeOffset.top > windowHeight ) {
      if( body.classList ) {
        body.classList.remove( 'bg-learning' );
        body.classList.remove( 'bg-coding' );
        body.classList.remove( 'bg-design' );
        body.classList.add( 'bg-life' );
        body.classList.remove( 'bg-newyear' );
      } else {
        body.className += 'bg-life';
      }
    } else {
      body.classList.remove( 'bg-life' );
    }
    if( document.body.scrollTop - newyearOffset.top > windowHeight ) {
      if( body.classList ) {
        body.classList.remove( 'bg-learning' );
        body.classList.remove( 'bg-coding' );
        body.classList.remove( 'bg-design' );
        body.classList.remove( 'bg-life' );
        body.classList.add( 'bg-newyear' );
      } else {
        body.className += 'bg-newyear';
      }
    } else {
      body.classList.remove( 'bg-newyear' );
    }
  }
}

ready(fn);

/**
 * jQuery Stuff
 */
$( document ).ready( function() {

    $( 'i.WordPress' ).addClass( 'active' );
    $( '.sort-courses li:first-child' ).addClass( 'active' );

    /**
     * Social Navigation Menu
     */
    $( '.find-me' ).on( 'click mouseout mouseover', function() {
        if( $( '.open-social' ).hasClass( 'active' ) ) {
            $( '.open-social' ).removeClass( 'active' );
            $( '.social-menu' ).removeClass( 'active' );
        } else {
            $( '.open-social' ).addClass( 'active' );
            $( '.social-menu' ).addClass( 'active' );
        }

    });

    /**
     * Lynda Course Individual Categories
     */
    $( '.course' ).on( 'click', function() {
        var id = $(this).attr( 'data-id' );
        if( ! $( this ).hasClass( 'highlight' ) ) {
            $( '.course' ).removeClass( 'active' );
        }
        $( this ).addClass( 'active' );
        $( '.course' ).css( 'textShadow', 'none' );
        $( this ).css( 'textShadow', '0px 0px 10px steelblue' );
        $( '.course-info' ).css( 'visibility', 'visible' );
        $( '.course-info p' ).css( 'display', 'none' );
        $( '.course-' + id ).css( 'display', 'block' );
    });

    /**
     * Lynda Course Category List
     */
    $( '.sort-courses li' ).on( 'click', function() {
        var category = $(this).text().split( " " )[0];
        $( '.sort-courses li' ).removeClass( 'active' );
        $( this ).addClass( 'active' );
        $( '.course' ).css( 'textShadow', 'none' );
        $( '.course-info' ).css( 'visibility', 'hidden' );
        $( '.course-info p' ).css( 'display', 'none' );
        $( '.lynda i' ).removeClass( 'active' );
        $( '.lynda i.' + category ).addClass( 'active highlight' );
    });

    /**
     * Stick-It Functions
     */
    var learning = $( '#learning' ),
        learningAside = $( '#learning .stick-it' ),
        coding = $( '#coding' ),
        codingAside = $( '#coding .stick-it' ),
        design = $( '#design' ),
        designAside = $( '#design .stick-it' ),
        life = $( '#life' ),
        lifeAside = $( '#life .stick-it' ),
        newyear = $( '#newyear' ),
        newyearAside = $( '#newyear .stick-it' ),
        top = document.body.scrollTop;

    $.fn.visible = function(partial) {
        var $t = $(this),
            $w = $(window),
            viewTop = $w.scrollTop(),
            viewBottom = viewTop + $w.height(),
            _top = $t.offset().top,
            _bottom = _top + $t.height(),
            compareTop = partial === true ? _bottom : _top,
            compareBottom = partial === true ? _top : _bottom;

        return (( compareBottom <= viewBottom ) && ( compareTop >= viewTop ));
    };

    $(window).scroll(function(e) {

        var sectionNum = 0,
            sectionClass = [
                'bg-home', 'bg-learning', 'bg-coding', 'bg-design', 'bg-life', 'bg-newyear'
            ],
            thisSecHeight;

        // Function for EVERY section
        $( '.color-change' ).each(function( i, el ) {
            var sec = $(el);

            // If a section is visible (first peek from the bottom)
            if( sec.visible( true )) {
                // increment the section number
                sectionNum++;
                // and add that section number's class to the <body> tag
                $( 'body' ).addClass( sectionClass[i] );

                // Then, start dealing with the asides
                var id = sec.children( 'section' ),
                    aside = sec.find( '.aside-content' ),
                    content = sec.find( '.section-content' );

                if( content.visible( true ) ) {
                    // Get the height of this current aside
                    var asideHeight = aside.height(),
                        contentHeight = content.height(),
                        fromTop = $(window).scrollTop(),
                        location = content.offset().top;

                        var str = aside.css( 'padding-top' ), i=0,
                            offset = str.substr(0, str.length-2);

                    // If the aside is at the top of the screen (48px down), stick it
                    if ( aside.offset().top < fromTop + 48 ) {
                        var width = aside.width();
                        aside.addClass( 'stick-it' );
                        aside.css( 'width', width + 'px' );
                    }
                    // OR, if we scroll back to the header area, UN-stick it
                    else if ( $('header').height() + 260 > fromTop ) {
                        aside.removeClass( 'stick-it' );
                    }

                    // OR, if we get to the end of a section
                    else if ( location + contentHeight < fromTop + asideHeight + 120 ) {
                        aside.css( 'position', 'absolute' );
                        aside.css( 'padding-top', contentHeight - asideHeight - 120 + 'px' );
                        aside.removeClass( 'stick-it' );
                    }

                    // OR, if we go scroll back UP after a section absolutely positions this
                    //else if ( aside.offset().top + aside.css( 'padding-top' ) ) {


                    else if( location + contentHeight > fromTop + asideHeight + 120 ) {
                        aside.css( 'position', 'fixed' );
                        aside.css( 'padding-top', '0' );
                        aside.addClass( 'stick-it' );
                    }
                }

            } else {
                $( 'body' ).removeClass( sectionClass[i] );
            }
        });

    });
});
