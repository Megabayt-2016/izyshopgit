<!-- ======= Header ======= -->
<header id="header" class="fixed-top positiontop">
    <div class="container">
      <div class="logo float-left">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php bloginfo('template_url') ?>/img/logo.png" id="img-logo" class="img-fluid"></a>
      </div>
      <nav class="float-right">
        <ul >
          <li>
            <div id="search">
              <form  action="/" method="get">
                <input type="search" name="s" id="search" placeholder="Search Here" value="<?php the_search_query(); ?>" />
                  <i class="fa fa-search"></i>
              </form>
            </div>
          </li>
        </ul>
      </nav>
    </div>    
</header>