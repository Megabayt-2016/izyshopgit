<?php
/**
 * The main template file
 * index page
 * 
 */

get_header(); ?>

<!-- ======= About Section ======= -->
<section id="content-page">    
    <div class="container">
        <section class="breadcrumbs">
                <div class="d-flex justify-content-between align-items-center">
                <?php woocommerce_breadcrumb(); ?>
            </div>
        </section><!-- Breadcrumbs Section -->

        <div class="row">
            <div class="col-12">
            <?php 
                if ( have_posts() ) : while ( have_posts() ) : the_post();
                    the_content();
                endwhile;
                else:
                    "<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>";
                endif;
                ?>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();