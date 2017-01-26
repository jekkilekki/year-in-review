/**
 * -----------------------------------------------------------------------------
 * D3 Tree Diagram
 * @link http://codepen.io/netkuy/pen/qZGdoj?editors=0010 (Tree - simpler use)
 * -----------------------------------------------------------------------------
 */
var treeData = [
  {
    'name': 'Life',
    'children': [
      {
        'name': 'Internal',
        'children': [
          { 'name': 'Physical' },
          { 'name': 'Mental' },
          { 'name': 'Spiritual' }
        ]
      },
      {
        'name': 'External',
        'children': [
          { 'name': 'Family' },
          { 'name': 'Relationships' },
          { 'name': 'Lifestyle' }
        ]
      },
      {
        'name': 'Success',
        'children': [
          { 'name': 'Career' },
          { 'name': 'Financial' }
        ]
      }
    ]
  }
];

var margin = { top:20, right:140, bottom:20, left:20 },
    width = 360 - margin.right - margin.left,
    height = 260 - margin.top - margin.bottom;

var svg = d3.select( '#d3-tree' ).append( 'svg' )
    .attr( 'class', 'd3-tree' )
    .attr( 'width', width + margin.right + margin.left )
    .attr( 'height', height + margin.top + margin.bottom )
  .append( 'g' )
    .attr( 'transform', 'translate(20,40)' );

var root = d3.hierarchy(treeData[0]),
    tree = d3.tree().size([height, width]);

tree( root );

var l = svg.selectAll( '.link' )
  .data(root.descendants().slice(1))
  .enter().append('path')
    .attr( 'class', 'link' )
    .attr( 'd', function(d) {
      return 'M' + d.y + ',' + d.x
          + 'C' + (d.y + d.parent.y) / 2 + ',' + d.x
          + ' ' + (d.y + d.parent.y) / 2 + ',' + d.parent.x
          + ' ' + d.parent.y + ',' + d.parent.x;
    })
    .attr( 'fill', 'none' )
    .attr( 'stroke', 'black' );

var n = svg.selectAll('.node')
  .data(root.descendants())
  .enter().append('g')
    .attr( 'class', function(d) { return 'node' + (d.children ? ' node-internal' : ' node-leaf'); })
    .attr( 'transform', function(d) { return 'translate(' + d.y + ',' + d.x + ')'; });

n.append( 'circle' ).attr( 'r', 3 );

n.append('text')
  .attr('dy', 0)
  .attr('x', function(d) { return d.children ? 0 : 8; })
  .attr('y', function(d) { return d.children ? -6 : 4; })
  .style('text-anchor', function(d) { return d.children ? 'middle' : 'start'; })
  .text( function(d) { return d.data.name; });

/**
 * -----------------------------------------------------------------------------
 * D3 Barchart : Lynda Authors
 * -----------------------------------------------------------------------------
 */

/**
 * Data and Variables
 */
var dataArray = [
        { author: 'Morten Rand-Hendriksen', fname: 'Morten', lname: 'Rand-Hendriksen', num: 18, img: 'assets/images/lynda_morten_thumb.jpg', url: 'https://www.lynda.com/Morten-Rand-Hendriksen/725535-1.html' },
        { author: 'Ray Villalobos',   fname: 'Ray',     lname: 'Villalobos',  num: 7, img: 'assets/images/lynda_ray_thumb.jpg', url: 'https://www.lynda.com/Ray-Villalobos/832401-1.html' },
        { author: 'Kevin Skoglund',   fname: 'Kevin',   lname: 'Skoglund',    num: 8, img: 'assets/images/lynda_kevin_thumb.jpg', url: 'https://www.lynda.com/Kevin-Skoglund/104-1.html' },
        { author: 'David Powers',     fname: 'David',   lname: 'Powers',      num: 5, img: 'assets/images/lynda_david_thumb.jpg', url: 'https://www.lynda.com/David-Powers/310454-1.html' },
        { author: 'Simon Allardice',  fname: 'Simon',   lname: 'Allardice',   num: 3, img: 'assets/images/lynda_simon_thumb.jpg', url: 'https://www.lynda.com/Simon-Allardice/21-1.html' },
        { author: 'James Williamson', fname: 'James',   lname: 'Williamson',  num: 5, img: 'assets/images/lynda_james_thumb.jpg', url: 'https://www.lynda.com/James-Williamson/128-1.html' } ],
    margin = { top: 20, left: 20, bottom: 40, right: 0 },
    width = $( '.best-authors' ).innerWidth() - margin.left - margin.right,
    height = 400 - margin.top - margin.bottom,
    offset = 0.2;

/**
 * Scales and Axes
 */
var x = d3.scaleBand()
            .domain(dataArray.map(function(d) { return d.fname; }))
            .rangeRound( [ 0, width ] )
            .padding( offset ),
    xAxis = d3.axisBottom(x),
    x2 = d3.scaleBand()
            .domain(dataArray.map(function(d) { return d.lname; }))
            .rangeRound( [ 0, width ] )
            .padding( offset ),
    x2Axis = d3.axisBottom(x2),
    y = d3.scaleLinear()
            .domain([0, d3.max(dataArray, function(d) { return d.num; })])
            .rangeRound( [ height, 0 ] ),
    yAxis = d3.axisLeft(y);

// Tooltip
var tooltip = d3.select( 'body' ).append( 'div' )
    .attr( 'class', 'chart-label' );

tooltip.style( 'opacity', 0 );

/**
 * Chart Creation
 */
var chart = d3.select( "div.d3-barchart" ).append( "svg" )
            .attr( "class", "author-chart" )
            .attr( "height", height + margin.top + margin.bottom )
            .attr( "width", width + margin.left + margin.right );

// Append a group that translates the whole chart over by our margins
// to make room for the axes
var g = chart.append( 'g' )
            .attr( 'transform', 'translate(' + margin.left + ',' + margin.top + ')');

// Add x-axis
g.append( 'g' )
    .attr( 'class', 'axis x-axis' )
    .attr( 'transform', 'translate(0,' + height + ')' )
    .call( xAxis );

// Add sub-x-axis (author last names - until I figure out line-breaking...)
g.append( 'g' )
    .attr( 'class', 'axis sub-axis x-sub-axis x-axis' )
    .attr( 'transform', 'translate(0,' + ( height + 10 ) + ')' )
    .call( x2Axis );

// Add y-axis
g.append( 'g' )
    .attr( 'class', 'axis y-axis' )
    .call( yAxis );

    // Add a tooltip for the bar chart
    var bartool = d3.selectAll( 'body' ).append( 'div' )
        .attr( 'id', 'chartlabel' )
        .attr( 'class', 'hidden' )
        .append( 'p' )
            .attr( 'id', 'chartvalue' );

// Add bars
g.selectAll( "rect" )
    .data( dataArray )
    .enter().append( "rect" )
            .attr( 'class', 'barchart-bar' )
            .attr( "height", 0 )
            .attr( "width", x.bandwidth() )
            .attr( "x", function(d) { return x(d.fname); } )
            .attr( "y", height )
            .attr( "fill", function( d,i ) {
                    // if( (100/(i+1)) < 20 ) {
                    //   return "white";
                    // } else {
                      return "rgba(0,0,0," + (100/(i+1))/100 + ")";
                    // }
                  })

            .on( 'mouseover', function(d) {
                d3.select( '#chartlabel' )
                     .style( 'left', d3.event.pageX + 'px' )
                     .style( 'top', d3.event.pageY + 'px' )
                     .style( 'opacity', 1 )
                     .select( '#chartvalue' )
                       .text( d.num + ' courses' );
            })
            .on( 'mouseout', function(d) {
                d3.select( '#chartlabel' )
                    .style( 'opacity', 0 )
            })
            .transition()
                 .attr( 'height', function(d) { return height - y(d.num); })
                 .attr( 'y', function(d) { return y(d.num); })
                 .delay( function(d,i) { return i * 100; })
                 .duration( 1000 );

/**
 * -----------------------------------------------------------------------------
 * D3 Pie Chart : Book Categories
 * -----------------------------------------------------------------------------
 */

/**
 * Data and Variables
 */
var piedata = [
        { type: 'Business', quantity: 12 },
        { type: 'Personal Development', quantity: 6 },
        { type: 'Biography', quantity: 4 },
        { type: 'Psychology', quantity: 3 },
        { type: 'Fiction', quantity: 2 } ];

var fullWidth = $( '.book-categories .col-2' ).innerWidth(),
    width = 360,
    height = width,
    radius = Math.min(300, height) / 2;

var pie = d3.pie()
    .value( function(d) {
        return d.quantity;
    });

var arc = d3.arc()
    .outerRadius( radius )
    .innerRadius( radius - 70 );

var pieChart = d3.select( '#piechart' ).append( 'svg' )
    .attr( 'width', width )
    .attr( 'height', height )
    .append( 'g' )
        .attr( 'transform', 'translate(' + width / 2 + ',' + height / 2 + ')' )
        .selectAll( 'path' ).data( pie(piedata) )
        .enter().append( 'g' )
            .attr( 'class', 'slice' );

var slices = d3.selectAll( 'g.slice' ).append( 'path' )
    .attr( 'fill', function(d,i) { return 'rgba(0,0,0,' + 1/(++i) + ')'; })
    .attr( 'stroke', 'white' )
    .attr( 'stroke-width', '2px' )
    .transition().delay(function(d,i) { return i*300; }).duration(300)
    .attrTween('d', function(d) {
        var i = d3.interpolate(d.startAngle, d.endAngle);
        return function(t) {
            d.endAngle = i(t);
            return arc(d);
        }
    });

var labels = d3.selectAll( 'g.slice' ).append( 'text' )
    .attr( 'class', 'chart-label' )
    .attr( 'text-anchor', 'middle' )
    .attr( 'fill', 'white' )
    .transition().delay(1000)
        .text( function(d,i) {
            return d.value;
        })
    .attr( 'transform', function(d) {
        d.innerRadius = 0;
        d.outerRadius = radius;
        return 'translate(' + arc.centroid(d) + ')'
    });

// Add a tooltip for the pie chart
var pietool = d3.selectAll( 'body' ).append( 'div' )
    .attr( 'id', 'chartlabel' )
    .attr( 'class', 'hidden' )
    .append( 'p' )
        .attr( 'id', 'chartvalue' );

pieChart.on( 'mouseover', function(d) {
  d3.select( '#chartlabel' )
      .style( 'left', d3.event.pageX + 'px' )
      .style( 'top', d3.event.pageY + 'px' )
      .style( 'opacity', 1 )
      .select( '#chartvalue' )
        .text( d.data.type + ' books' );
        })
        .on( 'mouseout', function(d) {
          d3.select( '#chartlabel' )
              .style( 'opacity', 0 )
        });

/**
 * -----------------------------------------------------------------------------
 * D3 Radar Chart : Life Satisfaction
 * -----------------------------------------------------------------------------
 */

 /**
  * Additional help: http://bl.ocks.org/nbremer/21746a9668ffdf6d8242
  */

 /**
  * Vars
  */
 var margin = { top:120, right:70, bottom:70, left:70 },
      //width = 800 - margin.left - margin.right,
      //height = 600 - margin.top - margin.bottom,
      space = document.getElementById( 'reflection' ).offsetWidth,     // the horizontal space of our article
      width = Math.min(1000, space - 10) - margin.left - margin.right, // fill the screen up to 1000px
 	  height = Math.min(width/1.5, window.innerHeight - margin.top - margin.bottom - 20),
      color = d3.scaleOrdinal(d3.schemeCategory20),   // chart color
      dotcolor = d3.scaleOrdinal(d3.schemeCategory20),// dots color (not bound to the lines yet...)
      circleConstraint = d3.min([ height, width ]),   // max size of circle
      radius = d3.scaleLinear().range([ 0, (circleConstraint / 2) ]),
      radians = 2 * Math.PI,  // radians - used to calculate the angles
      centerX = width / 2 + margin.left,  // X center of the chart
      centerY = height / 2 + margin.top;  // Y center of the chart

 // http://www.cs.middlebury.edu/~hnowicki/radarChartImplementation.html
 // Finds the x coordinate to place a point
 var getX = function(r, angle) {
   var adj = Math.sin(angle) * r;
   var xCoord = adj;
   //console.log( 'x: ' + xCoord );
   return xCoord;
 }

 // Finds the y coordinate to place a point
 var getY = function(r, angle) {
   var opposite = -Math.cos(angle)*r;
   var yCoord = opposite;
   //console.log( 'y: ' + yCoord );
   return yCoord;
 }

 /**
  * SVG
  */
 var svg = d3.select( '#radar' ).append( 'svg' )
    .attr( 'class', 'radar-chart' )
   .style( 'background', 'rgba(0,0,0,0.1)' )
   .attr( 'width', width + margin.left + margin.right )
   .attr( 'height', height + margin.top + margin.bottom )
   .append( 'g' )
     .attr( 'class', 'radar' )
     .attr( 'transform', 'translate(' + centerX + ',' + centerY + ')');

 d3.csv( 'https://gist.githubusercontent.com/jekkilekki/2ab5c008ce2d861621c2089a5f3b75c0/raw/cf9eaa09afb52d6fb9f2d2d444caa228c6ff3f2c/lifeData.csv', function( error, data ) {
   var maxValue = 10; // set to 10 as its the max for the evaluations

   var topValue = maxValue, // just in case we don't set max as 10, we could read in the data to determine the max value instead (original implementation - from the book)
       ticks = [];

   // To create the circular rings
   for( var i = 10; i >= 0; i-- ) {
     ticks[i] = topValue * i / 10;
   }

   radius.domain([ 0, topValue ]);

   /**
    * Radar Grid
    */
   var circleAxes = svg.selectAll( '.circle-ticks' ).data(ticks)
     .enter().append( 'g' )
       .attr( 'class', 'circle-ticks' );

   // Circle Grid
   circleAxes.append( 'circle' )
     .attr( 'r', function(d) { return radius(d); })
     .attr( 'class', 'circle' )
     .attr( 'stroke', 'rgba(0,0,0,0.5)' )
     .attr( 'fill', 'rgba(255,255,255,0.3)' );

   // Numeric labels for Circle grid
   circleAxes.append( 'text' )
     .attr( 'class', 'level' )
     .attr( 'text-anchor', 'middle' )
     .attr( 'dy', function(d) { return radius(d) - 5; })
     .text( String );

   /**
    * Radar Spokes
    */
   var lineAxes = svg.selectAll( '.line-ticks' ).data( data )
     .enter().append( 'g')
       .attr( 'transform', function(d,i) {
         return 'rotate(' + (( i / data.length * 360 ) - 90 ) + ')translate(' + radius(topValue + 1.125) + ')';
       })
       .attr( 'class', 'line-ticks' );

   // Spoke lines
   lineAxes.append( 'line' )
     .attr( 'x2', -1 * radius(topValue + 2) )
     .style( 'stroke', 'rgba(0,0,0,0.1)' )
     .style( 'fill', 'none' );

   // Spoke line labels
   lineAxes.append( 'text' )
     .text( function(d) { return d.section; })
     .attr( 'text-anchor', function(d,i) {
       if( i < 8 && i > 4 ) { return 'end'; }
       else if ( i == 0 || i == 4 ) { return 'middle'; }
       else { return 'start'; }
     })
     .attr( 'transform', function(d,i) {
       return 'rotate(' + ( 90 - ( i * 360 / data.length )) + ')';
     })
     .attr( 'dy', '0.3em' );

   /**
    * Radar Data
    */
   var series = d3.keys( data[0] )
     .filter( function(key) { return key !== 'section'; })
     .filter( function(key) { return key !== ''; });

   color.domain( series );

   var lines = color.domain().map(function( name ) {
     return (data.concat( data[0])).map( function(d) {
       //console.log( +d[name] );
       return +d[name];
     });
   });

   /**
    * Radar Data Sets
    */
   var sets = svg.selectAll( '.series' )
     .data(series)
     .enter().append( 'g' )
       .attr( 'class', 'series' ),
       rad = [], ang = [];

   // Lines and area inside the lines
   // (use fill-opacity so we can control both - rather than creating double blobs)
   sets.append( 'path' ).data(lines)
     .attr( 'class', 'line area' )
     .attr( 'd', d3.radialLine()
           .curve( d3.curveCardinal )
           .radius( function(d, i) {
             //console.log( "Radius: " + radius(d) );
             rad.push( radius(d) );
             return radius(d);
           })
           .angle(function(d,i) {
             //console.log( "Angle: " + ((i/data.length ) * radians) );
             ang.push((i/data.length) * radians );
             return ( i / data.length ) * radians;
           }))
     .data( series )
       .style( 'stroke-width', 3 )
       .style( 'fill-opacity', 0.5 )
       .style( 'fill', function(d,i) {
         return color(d); } )
       .style( 'stroke', function(d,i) {
         //console.log( "Stroke color " + d);
         return color(d);
       });

    //console.log( "Radius: " + rad + "\n" + "Angle: " + ang);
    var point;
   // This data needs BOUND to their lines - not free-standing
   // dots are right, but not bound to their lines properly
   for( var k = 0; k < 3; k++ ) {
     for( var j = k * 9; j < k * 9 + 9; j++ ) {
       if ( j < 1 ) {
         // do nothing with 0,0 - point-0, or it draws twice
       } else {
        point = sets.data(series).append( 'circle' )
          .attr( 'class', function(d,i) { return 'dot line-' + (k+1) + ' point-' + j; })
          .attr( 'cx', function(d) { return getX( rad[j], ang[j] )})
          .attr( 'cy', function(d) { return getY( rad[j], ang[j] )})
          .attr( 'r', 6 )
          .attr( 'radius', rad[j] )
          .attr( 'angle', ang[j] )
          .style( 'fill', function(i) {
             //console.log( "Color " + i );
             //console.log( "Color: " + k );
             //if( j < rad.length/2 ) { return color(i); }
             //else {
              //var col = k-3;
               return dotcolor(k);
             //}
           });
        } // end else
      } // end for loop j
   } // end for loop k

   // Hover effects for the Series blobs
   sets.on( 'mouseover', function(d,i) {
       // Dim all series
       d3.selectAll( '.series' )
         .transition().duration(200)
         .style( 'opacity', 0.2 )
      // Dim all dots
      d3.selectAll( '.dot' )
        .transition().duration(200)
        .style( 'opacity', 0.2 )
       // Bring back the hovered series
       d3.select( this )
         .transition().duration(200)
         .style( 'opacity', 1 )
        .style( 'fill-opacity', 1 )
      // Bring back the hovered series dots
      d3.selectAll( '.line-' + (i+1) )
        .transition().duration(200)
        .style( 'opacity', 1 )
     })
     .on( 'mouseout', function(d,i) {
       // Bring back all series
       d3.selectAll( '.series' )
         .transition().duration(200)
         .style( 'opacity', 0.8 )
      // Bring back all dots
      d3.selectAll( '.dot' )
        .transition().duration(200)
        .style( 'opacity', 1 )
     });

   /**
    * Radar Legend
    */
   var legend = svg.selectAll( '.legend' ).data(series)
     .enter().append( 'g' )
       .attr( 'class', 'legend' )
       .attr( 'transform', function(d,i) {
         return 'translate(0,' + i * -20 + ')';
       });

   legend.append( 'rect' )
     .attr( 'x', width/2 )
     .attr( 'y', height/2 )
     .attr( 'width', 18 )
     .attr( 'height', 18 )
     .style( 'fill', function(d,i) { return color(d); });

   legend.append( 'text' )
     .attr( 'x', width/2 - 4 )
     .attr( 'y', height/2 - 4 )
     .attr( 'dy', '1.2em' )
     .style( 'text-anchor', 'end' )
     .text( function(d) {
       return '20' + d.substr(-2);
     });

   /**
    * Radar Chart Title
    */
   var title = d3.select( 'svg.radar-chart' ).append( 'g' )
     .attr( 'transform', 'translate(' + margin.left + ',' + margin.top + ')')
     .attr( 'class', 'title' );

   title.append( 'text' )
     .attr( 'x', width/2 )
     .attr( 'y', -60 )
     .attr( 'text-anchor', 'middle' )
     .style( 'font-size', '1.6em' )
     .text( 'Life Satisfaction Chart' );


     // Add a tooltip for the radar chart
     var radartool = d3.selectAll( 'body' ).append( 'div' )
         .attr( 'id', 'chartlabel' )
         .attr( 'class', 'hidden' )
         .append( 'p' )
             .attr( 'id', 'chartvalue' );

     point.on( 'mouseover', function(d) {
         //console.log( 'num' + d.num );
         //console.log( 'value' + d.value );
         //console.log( 'data' + d.data.type);
         console.log( 'x' + d.x);
         console.log( 'y' + d.y);
         console.log( 'd' + d );
         //console.log('only data' + d.data);
       d3.select( '#chartlabel' )
           .style( 'left', d3.event.pageX + 'px' )
           .style( 'top', d3.event.pageY + 'px' )
           .style( 'opacity', 1 )
           .select( '#chartvalue' )
             .text( d.num );
             })
             .on( 'mouseout', function(d) {
               d3.select( '#chartlabel' )
                   .style( 'opacity', 0 )
             });

 });
