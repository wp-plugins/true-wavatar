<?php
/*
Plugin Name: True Wavatar
Plugin URI: http://mr.hokya.com/true-wavatar/
Description: Display true web thumbnail image of commentator's URL as avatar on comments template instead of using Gravatar
Version: 1.08
Author: Julian Widya Perdana
Author URI: http://mr.hokya.com/
*/


function wavatar () {
	echo '<img src = "http://open.thumbshots.org/image.pxf?url='.get_comment_author_url().'" width=120 height=120 />';
}

function wavatar_notice () {
	echo "<p>You currently using <a href='http://mr.hokya.com/true-wavatar/' target='_blank'>True Wavatar</a> as your avatar on your site</p>";
}

add_action('get_avatar', 'wavatar');
add_action('rightnow_end','wavatar_notice');

?>