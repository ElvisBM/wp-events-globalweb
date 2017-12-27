<?php
/**
 * Plugin Name: Events Global Web
 * Plugin URI: https://github.com/ElvisBM/wp-events-globalweb
 * Description: Plugin Create for Test Global Web
 * Version: 1.0.0
 * Author: Elvis B. Martins
 * Author URI: https://github.com/ElvisBM/
 * License: GPL2
 */

function events_globalweb_shortocode_display($atts){

	if ( !empty($atts['count']) && $atts['count'] != 'inherit' ){
		$count = $atts['count'];
	}else{
		$count = 10;
	}

	$today = date("Y-m-d");
	$hour = date('H:i');
	$args = array(
		'post_type' 	 => 'events-globalweb',
        'posts_per_page' => $count,
        'meta_query' => array(
        	'date_event' => array (
        		'key'     => 'date_event',
				'value'   => $today,
				'compare' => '>',
				'type' => 'DATE',
        	),
        	'relation' => 'OR',
    		'hour_today_event' => array(
    			array(
					'key'     => 'date_event',
					'value'   => $today,
					'compare' => '=',
					'type' => 'DATE',
				),
				array(
					'key'     => 'hour_event',
					'value'   => $hour,
					'compare' => '>=',
					'type' => 'TIME',
				),
			),
		),
		'orderby' => array(
			'date_event' => 'ASC',
	        'hour_today_event' => 'ASC',
	    ),
    );
    $loop_events = new WP_Query($args);

    $template = '<div class="events-globalweb">';
    $template .= '<div class="servidor-data" >Data do Servidor: ' . date("d/m/Y") . " - " . date('H:i') . "</div>";
	if ( $loop_events->have_posts() ) {
	    while ($loop_events->have_posts()) : $loop_events->the_post();

	    	$date_event = get_metadata('post', get_the_ID(), 'date_event', true);
	    	$date_event = new DateTime($date_event);

	    	$hour_event = get_metadata('post', get_the_ID(), 'hour_event', true);

	    	$template .= "<div class='event' >"; 
	    	$template .= "<h3>". get_the_title() ."</h3>";
	    	$template .= "<p>" . $date_event->format('d/m/Y') . " - " . $hour_event . "</p>";
	    	$template .= "<a href='" . get_permalink(). "'> Veja Mais </a>";
	    	$template .= "<hr />";
	    	$template .= "</div>";

	   	endwhile;
	}else{
		$template .= "<p>Aguarde, ainda não temos eventos programados no momento.</p>";
	}
    wp_reset_query();

     $template .= '</div>';

    return $template;
};


//add easy events globalweb shortcode
add_shortcode('events-globalweb','events_globalweb_shortocode_display');
