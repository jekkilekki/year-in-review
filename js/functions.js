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
