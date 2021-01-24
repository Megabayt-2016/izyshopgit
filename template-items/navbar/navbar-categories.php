<?php
    if ( has_nav_menu( 'categories' ) ) { 

?>
    
    
<!-- ======= Nav bar categories ======= -->
    <section id="navbar-categories">
        <div class="container-fluid">
        <div class="d-flex justify-content-center">

      <nav id="nav-button" class="main-nav d-none d-lg-block ">
      <?php 
      
      wp_nav_menu( array(
        'menu'                 => 'categories',
        'container'            => '',
        'container_class'      => '',
        'container_id'         => '',
        'container_aria_label' => '',
        'menu_class'           => 'menu',
        'menu_id'              => '',
        'echo'                 => true,
        'fallback_cb'          => 'wp_page_menu',
        'before'               => '',
        'after'                => '',
        'link_before'          => '',
        'link_after'           => '',
        'items_wrap'           => '<ul id="%1$s" class="%2$s">%3$s</ul>',
        'item_spacing'         => 'preserve',
        'depth'                => 0,
        'walker'               => '',
        'theme_location'       => '',
    )
     ); ?>
          
        </nav>
    </div>
    </div>
</section>
<?php
}
?>