<?php
/**
 * The single template file
 *
 * @package Fiberr
 */

get_header();
?>
<main style="margin-top: 80px;">
    <div class="theme-main-wrap">
<<<<<<< HEAD
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

=======
        <div class="theme-center-section">
          <div class="container">
            <div class="theme-center-wrap">
              <div class="theme-center-left">
                <section class="single-post-section">
                  <div class="one-column-wrap single-post">
                    <article>
                      <header class="entry-header">
                        <h2 class="entry-title"><a href="#" rel="bookmark">Get better visibility into supper diversity on upwork</a></h2> 
                        <div class="entry-meta">
                          <div class="author-img">
                            <img src="assets/img/author.jpg" alt="">
                          </div>
                          <div class="author-wrap">
                            <span class="author vcard"><a href="#">admin</a></span>
                            <a href="#/" rel="bookmark"><time class="entry-date published">August 2, 2021</time></a>
                          </div>
                        </div><!-- .entry-meta -->
                      </header><!-- .entry-header -->

                      <!-- Post thumbnail -->
                      <a class="post-thumbnail" href="#">
                        <img src="assets/img/future-post.jpeg">
                      </a>
          
                      <div class="entry-content">
                        <p>Aliquip nulla nisi in excepteur qui occaecat cillum ullamco magna dolor sit in velit sint anim duis exercitation in minim aliquip aute ad ullamco eiusmod sit et officia minim sunt non reprehenderit esse dolore eiusmod reprehenderit laboris nisi eiusmod ut voluptate minim sed tempor eiusmod cupidatat consectetur pariaturadipisicing dolore laborum consequat eu dolore amet exercitation aliquip esse veniam sed consequat <a href="#">sunt aliqua velit magna veniam minim</a> culpa ut esse aliquip culpa esse sunt ad commodo excepteur voluptate tempor consequat amet culpa aute dolor elit dolor ea proident nostrud ut magna duis anim nulla irure voluptate laboris fugiat pariatur laborum eu do ullamco sint tempor excepteur eiusmod dolore irure consectetur in proident sit magna ut magna aliqua magna aute ut nulla labore excepteur sunt veniam incididunt ullamco eu sunt id adipisicing dolore laborum consequat eu dolore amet exercitation aliquip esse veniam sed consequat <a href="#">sunt aliqua velit magna veniam minim</a> culpa ut esse aliquip culpa esse sunt ad commodo excepteur voluptate tempor consequat amet culpa aute dolor elit dolor ea proident nostrud ut magna duis anim nulla irure voluptate laboris fugiat pariatur laborum.
                        </p>
                      </div><!-- .entry-content -->
          
                      <footer class="entry-footer">
                        <div class="author-img">
                          <img src="assets/img/author.jpg">
                        </div>
                        <div class="author-about">
                          <h4>helal hossain</h4>
                          <p>Amy Sept (@amysept) is an independent writer, editor, and content marketing strategist who’s dedicated to helping businesses of all sizes navigate the future of work. As a Canadian military spouse and slow traveller, she has a lot of hands-on experience with remote work, productivity hacks, and learning how to "go with the flow."</p>
                        </div> 
                      </footer><!-- .entry-footer -->
                    </article>
                  </div>
                </section><!-- .single-post-section -->
              </div>
                <?php get_sidebar(); ?>
            </div>
          </div><!-- .container -->
        </div>      
    </div>
  </main><!-- End Main Section -->
>>>>>>> 8be673f08c04f903a14e0b983ef7e05d7902df86
<?php
get_footer();
