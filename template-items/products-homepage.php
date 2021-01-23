<!-- ======= About Section ======= -->
<section id="products">
    <div class="container-fluid" >
        <div class="row">
        <?php
                $args	 = array( 
                    'post_type' 	 => 'product',
                    'orderby' => 'rand',
                    'order' => 'rand',
                    'posts_per_page' => 8,
                    );
                $loop	 = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post();
            ?>
            <div  class="col-lg-4 col-6" data-aos="fade-up" data-aos-delay="200" >   
                <?php 
                get_template_part( 'template-items/grid/type-1', get_post_type() );
                ?>
            </div>

            <?php endwhile; 
            
            wp_reset_query(); 
            ?>
        </div>
    </div>
</section>