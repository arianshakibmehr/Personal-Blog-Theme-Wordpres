<?php

    function blog_register_styles(){
        wp_enqueue_style('blog-header', get_template_directory_uri()."/style.css", array(),'1.0', 'all'); 
    }

    add_action('wp_enqueue_scripts','blog_register_styles');

?>