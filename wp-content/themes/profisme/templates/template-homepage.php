<?php 
/**
Template Name: Homepage Default
*/
 
get_header();
do_action( 'profisme_sections', false );
get_template_part('sections/profisme','banner');
get_template_part('sections/profisme','about');
get_template_part('sections/profisme','service');
get_template_part('sections/profisme','blog');
get_template_part('sections/profisme','client');
get_template_part('sections/profisme','hpcontent');
get_footer();