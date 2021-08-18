<?php
/**
 * SINGLE CONTENT 
 * 
 * Featured, Blog list, Single post. All type of post item will be display 
 *
 * @package Fiberr
 */

?>
  <article id="post-<?php the_ID(); ?>" <?php
      if( is_singular() ) :
        post_class( 'one-column' );
      else : post_class( 'two-column' );
      endif;
    ?>> 

    <header class="entry-header">
      <h1 class="entry-title"><?php the_title(); ?></h1>
      <div class="entry-meta">
        <div class="author-img">
         <?php echo get_avatar( get_the_author_meta( 'ID' ), 32 ); ?>
        </div>
        <div class="author-wrap">
          <span class="author vcard"><?php the_author_link(); ?></span>
          <a href="#/" rel="bookmark"><time class="entry-date published"><?php echo get_the_date(); ?></time></a>
        </div>
      </div><!-- .entry-meta -->
    </header><!-- .entry-header -->

    <!-- Post thumbnail -->
    <?php fiberr_post_thumbnail() ?>

    <div class="entry-content">
      <?php
      the_content(
        sprintf(
          wp_kses(
            /* translators: %s: Name of current post. Only visible to screen readers */
            __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'fiber' ),
            array(
              'span' => array(
                'class' => array(),
              ),
            )
          ),
          wp_kses_post( get_the_title() )
        )
      );

      wp_link_pages(
        array(
          'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'fiber' ),
          'after'  => '</div>',
        )
      );
      ?>
    </div><!-- .entry-content -->
    <?php
      if( is_singular() ) :
        ?>
        <footer class="entry-footer">
          <div class="author-img">
          <?php echo get_avatar( get_the_author_meta( 'ID' ), 32 ); ?>
          </div>
          <div class="author-about">
            <h4><?php the_author(); ?></h4>
            <p><?php the_author_description(  ); ?></p>
          </div> 
        </footer><!-- .entry-footer -->
        <?php
        endif;
    ?>
  </article>