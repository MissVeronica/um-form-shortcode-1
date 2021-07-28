
/*
*       [my_human_time_diff meta_key="meta_key_time_name" format="My label text %s ago"]
*/

add_shortcode( 'my_human_time_diff', 'my_human_time_diff' );

    function my_human_time_diff( $atts ) {

        if( is_array( $atts ) && isset( $atts['meta_key'] )) {
             
            um_fetch_user( um_profile_id());
            $meta_value = um_user( $atts['meta_key'] );

            if( is_numeric( $meta_value )) {                
                $first_time = $meta_value;
            } else {
                if( is_string( $meta_value )) $first_time = strtotime( $meta_value );
                else $first_time = false;
            }

            if( $first_time ) {

                $time_diff = human_time_diff( $first_time, strtotime( wp_date( 'Y-m-d H:i:s' )));
                
                if( isset( $atts['format'] )) $format = $atts['format'];
                else $format = '%s ago';                
                
                return '<div>' . sprintf( $format, $time_diff ) . '</div>';

            } else return '';

        } else return '<div>Shortcode parameter error</div>';
    }
