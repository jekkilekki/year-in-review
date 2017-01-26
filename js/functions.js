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

//ready(fn);

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
});
