<?php get_header(); ?>

<div class="">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php
                    while ( have_posts() ) :the_post();
                        
                        the_content();

                    endwhile;
                ?>                
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>