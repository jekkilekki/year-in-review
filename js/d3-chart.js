var dataArray = [], dataText = [];
//var x = d3.scale.ordinal().rangeRoundBands([0, 400], .1, 1);
//var y = d3.scale.linear().range([300, 0]);

$( '.barchart-area .barchart-bar' ).each( function( index ) {
  dataArray.push( $( this ).attr( 'bar-value' ) );
  dataText.push( $( this ).attr( 'label' ) );
});

var width = $( '.best-authors' ).innerWidth();

var chart = d3.select( "div.d3-barchart" ).append( "svg" )
                    .attr( "class", "author-chart" ).attr( "height", "360px" ).attr( "width", "100%" );

chart.selectAll( "rect" )
    .data( dataArray )
    .enter().append( "rect" )
                    .attr( "height", function( d,i ) { return d * 15; } )
                    .attr( "width", function(d,i) { return width/dataArray.length-10; } )
                    .attr( "x", function( d,i ) { return width/dataArray.length * i; } )
                    .attr( "y", function( d,i ) { return 300 -( d * 15 ); } )
                    .attr( "fill", function( d,i ) {
                            if( (100/(i+1)) < 20 ) {
                              return "white";
                            } else {
                              return "rgba(0,0,0," + (100/(i+1))/100 + ")";
                            }
                          });
chart.selectAll( ".bartext" )
    .data( dataText )
    .enter().append( "text" )
                    .attr( "class", "bartext" )
                    .attr( "text-anchor", "middle" )
                    .attr( "fill", "white" )
                    .attr( "width", "100" )
                    .attr( "x", function( d,i ) { return width/dataText.length * i; })
                    .attr( "y", "320" )
                    .text( function(d) { return d; } );
