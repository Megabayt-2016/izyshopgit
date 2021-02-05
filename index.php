<?php
/**
 * The main template file
 * index page
 * 
 */

get_header();


get_template_part( 'template-items/slider-homepage' ); 
?>
<div class="container">
<?php 
get_template_part( 'template-items/new-products' ); 
get_template_part( 'template-items/products-homepage' ); 

?>
</div>

<?php
get_footer();