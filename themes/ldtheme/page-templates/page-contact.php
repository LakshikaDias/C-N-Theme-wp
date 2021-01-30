<?php 
/*
Template Name: Contact Us
*/
get_header();

    if(have_posts()): while(have_posts()):
        the_post();
?>

<div class="container-fluid">
    <div class = "row">
        <div class = "col">
            <img class = "img-fluid" src="<?php the_post_thumbnail_url('full')?>" alt="Contact Us"/>
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class = "row">
        <div class = "col-8">
            <h1><?php the_title(); ?></h1>
            <p><?php the_content();?></p>
        </div>
        <div class= "col-4">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126743.63162573037!2d79.
        78616475616336!3d6.921833528304163!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.
        1!3m3!1m2!1s0x3ae253d10f7a7003%3A0x320b2e4d32d3838d!2sColombo!5e0!3m2!1sen!2slk!4v1612028360606!5m2!1sen!2slk" 
        width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
        </iframe>
        </div>
    </div>
</div>
<?php

    endwhile;
endif;
get_footer();
?>