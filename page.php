<?php
/**
 * The main template file
 * index page
 * 
 */
    get_header(); 
?>

<!-- ======= About Section ======= -->
<section id="content-page">    
    <div class="container-fluid">
        <header class="section-header">
            <h3><?php the_title(); ?></h3>
        </header>

        <div class="row">
            <div class="col-12 px-5">
            <?php
	        if (have_posts()) {
	        		        
	        while ( have_posts()) : the_post() ;

	        	the_content();
	        	
	        endwhile;

	        }
 			?>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();