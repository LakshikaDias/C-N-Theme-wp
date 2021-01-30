<?php
get_header();

if(have_posts()): while(have_posts()):
    the_post();

?>
<div class = "container">
<div class = "row">
<div class = "col">
    <h1><?php the_title(); ?></h1>
    </div>
    </div>
    <div class = "row">
<div class = "col">
    <p><?php the_content(); ?></p>
    </div>
    </div>
</div>

<?php

endwhile;
endif;
get_footer();
?>