<?php
/**
 * Get Images
 *
 * Function to retrieve image filenames from a given directory and any subdirectories.
 *
 * @param   String  $dir  The name of the image directory
 * @return  array         Returns an array of image filenames (including the directory path)
 * @since   1.0.0
 */
function get_images( $dir ) {
  if( is_dir( $dir ) && is_readable( $dir ) ) {
    // Get an array of files and folders without the dot files
    $files = array_diff( scandir( $dir ), array( '.', '..' ) );
  }
  $images = array();
  $subdirs = array();
  foreach( $files as $file ) {
    // Add images and subdirectories to separate arrays
    if( preg_match( '/\.(?:jpg|gif|png)$/i', $file ) ) {
      $images[] = $dir . '/' . $file;
    } elseif( is_dir( $dir . '/' . $file ) ) {
      $subdirs[] = $dir . '/' . $file;
    }
  }
  // Loop through subdirectories calling getImages() recursively
  foreach( $subdirs as $sub ) {
    $images = array_merge( $images, get_images( $sub ) );
  }
  return $images;
}

/**
 * Extract CSV
 *
 * Create associative array of data from CSV.
 * Allows for some extra markup and data handling.
 *
 * @param   String  $filename   The name of the CSV file
 * @param   bool    $titles     Whether or not the first row in the CSV file contains header information (defaults to true)
 * @param   array   $options    Allows for passing in different arguments for PHP's fgetcsv() function
 * @return  array               Returns an associative array of data to be used later
 * @since   1.0.0
 */
function extract_csv( $filename, $titles = true, $options = null ) {
  if ( ! file_exists( $filename ) ) { echo 'no file'; return false; }
  else if ( ! is_readable( $filename ) ) { echo 'not readable'; return false; }
  else {
    // Get passed in options for fgetcsv() OR set defaults
    $options['length'] = ( isset( $options['length'] ) ) ? $options['length'] : 0;
    $options['delimiter'] = ( isset( $options['delimiter'] ) ) ? $options['delimiter'] : ',';
    $options['enclosure'] = ( isset( $options['enclosure'] ) ) ? $options['enclosure'] : '"';
    $options['escape'] = ( isset( $options['escape'] ) ) ? $options['escape'] : '\\';

    $file = fopen( $filename, 'r' );
    while( ( $rows[] = fgetcsv( $file, $options['length'], $options['delimiter'], $options['enclosure'], $options['escape'] ) ) !== false ) {}

    if( $titles ) {
      $headers = array_shift( $rows );
      foreach( $rows as $row ) {
        if( is_array( $row ) ) {
          $csv[] = array_combine( $headers, $row );
        }
      }
      return $csv;
    } else {
      return $rows;
    }
  }
}

function make_time( $time ) {
  $hours = floor( $time / 60 );
  $min = ( $time % 60 ) < 10 ? '0' . $time % 60 : $time % 60;
  return "$hours<span class='minutes'>:$min</span>";
}

function array_orderby() {
    $args = func_get_args();
    $data = array_shift( $args );
    foreach( $args as $n => $field ) {
        if( is_string( $field ) ) {
            $tmp = array();
            foreach( $data as $key => $row ) {
                $tmp[$key] = $row[$field];
            }
            $args[$n] = $tmp;
        }
    }
    $args[] = &$data;
    call_user_func_array( 'array_multisort', $args );
    return array_pop( $args );
}

/**
 * Associative Array Count Values
 *
 * Returns an array containing the number of values for a given $key in a given associative $array
 *
 * @param   array   $array  The associative array to count values for
 * @param   String  $key    The key to count values for
 * @return  array           A new array containing the counted values for the key in the original associative array
 */
function assc_array_count_values( $array, $key ) {
    foreach( $array as $row ) {
        $new_array[] = $row[$key];
    }
    return array_count_values( $new_array );
}

function simplify_category_count( $array ) {

    $simplified = array();
    $other = 0;
    foreach( $array as $category => $num ) {
        if ( $num < 3 ) {
            $other++;
        } else {
            $simplified[$category] = $num;
        }
    }
    $simplified['Other'] = $other;

    return $simplified;
}


function sub_array_ify( $associative_array, $key, $category_array ) {

}
