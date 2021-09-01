<?php
/**
 * The single template file
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Fiberr
 */

get_header();
?>
  <main style="margin-top: 80px;">
    <div class="theme-main-wrap">
      <div class="theme-center-section">
        <div class="container">
          <div class="theme-center-wrap">
            <div class="theme-center-left">
              <!-- SINGLE POST -->
              <section class="single-post-section border">
                <div class="one-column-wrap single-post">
                  <?php 
                  while( have_posts(  )) :
                    the_post();
                    get_template_part( 'template-parts/content', get_post_type() );
                  endwhile;
                  ?>
                </div>
              </section><!-- .single-post-section -->
            </div>
            <!-- SIDEBAR SECTION -->
            <div class="theme-center-right text-center border border-primary"><h3>Sidebar</h3></div> 
          </div> <!-- .theme-center-right -->


          <!-- RELATED POST -->
          <div class="relative-post-wrap">
            <div class="theme-section-header">
              <h2>You might like</h2>
            </div>
            <div class="one-column-wrap blog-post">
              <div class="row">
                <div class="col-12 col-md-6 col-lg-4">
                  <article class="one-column mb-3 mb-md-0">    
                    <!-- Post thumbnail -->
                    <a class="post-thumbnail mb-3" href="#">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/post.jpeg">
                    </a>
                    <header class="entry-header">
                      <div class="category-list py-2"><strong>Freelancer</strong></div>
                      <h2 class="entry-title"><a href="#" rel="bookmark">Semi-Annual Small Business Needs Index: Strength and Optimism is Still Present</a></h2>
                      <div class="entry-meta">
                        <span class="author vcard"><a href="#">admin</a></span>
                        <a href="#/" rel="bookmark"><time class="entry-date published">August 2, 2021</time></a>
                      </div><!-- .entry-meta -->
                    </header><!-- .entry-header -->

                    <div class="entry-content d-none">
                      <p>Businesses are building back and finding new ways to reach their customers.</p>
                    </div><!-- .entry-content -->
                    <footer class="entry-footer">
                              
                    </footer><!-- .entry-footer -->      
                  </article>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
  
                </div>
                <div class="col-12 col-md-6 col-lg-4">

                </div>        
              </div><!--.row-->
            </div>
          </div><!-- End Relative Post -->

        </div><!-- .container -->
      </div><!-- .theme-center-section -->
    </div><!-- .theme-main-wrap -->
  </main>   

<?php
get_footer();
