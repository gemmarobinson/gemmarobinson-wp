<?php
    // returns full path for file in images folder with only file name being passed in
    function get_image_path($file) {
        return get_template_directory_uri().'/assets/images/'.$file;
    }

    // Inline SVG with check for non-URL / broken link...
    function get_inline_svg($file) {

        // Check the SVG file exists
        if ( file_exists( get_template_directory().'/assets/images/' . $file ) ) {

            // Load and return the contents of the file
            return file_get_contents( get_template_directory().'/assets/images/' . $file );
        }
        
    };

    // custom excerpt length
    function trax_excerpt($limit) {
        $excerpt = explode(' ', get_the_excerpt(), $limit);
        
        if (count($excerpt)>=$limit) {
            array_pop($excerpt);
            $excerpt = implode(" ",$excerpt).'...';
        } else {
            $excerpt = implode(" ",$excerpt);
        }	

        $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
        return $excerpt;
      }
