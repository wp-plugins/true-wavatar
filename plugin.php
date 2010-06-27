<?php
/*
Plugin Name: True Wavatar
Plugin URI: http://mr.hokya.com/true-wavatar/
Description: Display true web thumbnail image of commentator's URL as avatar on comments template instead of using Gravatar
Version: 2.08
Author: Julian Widya Perdana
Author URI: http://mr.hokya.com/
*/


function wavatar () {
	echo '<img src = "http://images.websnapr.com/?size=size&key=QL08tdG4tTmC&url='.get_comment_author_url().'" width=120 height=120 />';
}

function wavatar_notice () {
	echo "<p>You currently using <a href='http://mr.hokya.com/true-wavatar/' target='_blank'>True Wavatar</a> as your avatar on your site</p>";
}

add_action('get_avatar', 'wavatar');
add_action('rightnow_end','wavatar_notice');

?>