<?php
/**
 * The template for displaying Home
 *
 * This is the template that display Home.
 *
 * @package WordPress
 * @subpackage Theme_Luapp
 * @author Descubra
 * @since Theme Luapp 1.0
 */

get_header();?>
<div class="container-fluid">
  <div class="row">
    <div class="submenu" id="submenu">
      <div class="acessorios">
        <ul>
          <li id="acessorios">+Acessórios</li>
          <img src="<?php bloginfo('template_directory'); ?>/public/img/separador.jpg" alt="">
        </ul>
      </div>
      <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'main-navigation', 'menu' => 'Menu 2', 'menu_id' => 'menu-menu-2', 'fallback_cb' => 'wp_bootstrap_navwalker::fallback',  'depth' => 2, 'walker' => new wp_bootstrap_navwalker()) ); ?>
    </div>
  </div>
</div>
<div class="container-fluid">
  <div class="row">
    <div class="conteudo">
      <?php
      	$args = array( 'post_type' => 'post');
      	$query_post = new WP_Query( $args );
      ?>
      <?php $counter = 0; ?>
      <?php if ( $query_post->have_posts() ) : ?>
        <?php while ( $query_post->have_posts() ) : $query_post->the_post(); ?>
          <?php if( $counter == 0 ): ?>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <div class="destaque">
                <?php the_post_thumbnail();?>
                <h1><?php the_title();?></h1>
                <?php the_category(); ?>
              </div>
            </div>
          <?php endif;?>
          <?php if($counter == 1): ?> <!--começo do contador -->
            <div class="direita">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"> <!-- começo principal da direita -->
              <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <div class="img-sub">
                    <?php the_post_thumbnail();?>
                    <h1><?php the_title();?></h1>
                    <?php the_category(); ?>
                  </div>
                </div>
          <?php endif;?>
          <?php if($counter == 2 ): ?>
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="img-sub-2">
                  <img src="<?php bloginfo('template_directory'); ?>/public/img/publicidade.jpg" alt="">
                </div>
              </div>
              </div>
              <?php $counter ++; ?>
          <?php if($counter == 3) ?>
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
              <div class="img-sub">
                <?php the_post_thumbnail();?>
                <h1><?php the_title();?></h1>
                <?php the_category(); ?>
              </div>
            </div>
          <?php endif;?>
          <?php if($counter == 4): ?> <!-- fim do contador -->
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="img-sub-2">
                <?php the_post_thumbnail();?>
                <h1><?php the_title();?></h1>
                <?php the_category(); ?>
              </div>
            </div>
          </div>
          </div><!-- fim principal da direita -->
        </div>
          <?php endif;?>
          <?php if( $counter >= 5 && $counter <= 8): ?>
            <div class="inferiores">
              <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="img-inferior">
                  <?php the_post_thumbnail();?>
                  <h1><?php the_title();?></h1>
                  <?php the_category(); ?>
                  <?php the_excerpt(); ?>
                </div>
              </div>
            </div>
          <?php endif; ?>
          <?php $counter ++; ?>
  			 <?php endwhile;  ?>
  		 <?php endif; ?>
       <?php wp_reset_postdata(); ?>
  		<?php wp_reset_query(); ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>
