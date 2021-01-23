<?php

global $product; ?>

<a href="<?php echo get_permalink( $loop->post->ID ) ?>" >
    <div id="content-product">
    <?php if ( has_post_thumbnail( $loop->post->ID ) ) {
            echo get_the_post_thumbnail( $loop->post->ID, 'shop_catalog', array('class' => 'card-img-top img-fluid'));
        } else {
            echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) 
    . '/img/thumbnail-0.jpg" alt="Izy Shop " />';
        }
        ?>
        <div class="d-block text-center">
            <h2><?php echo the_title_attribute(); ?></h2>
            <span><?php echo $product->get_price_html(); ?></span>
        </div>
    </div>
</a>