<<<<<<< HEAD
<!-- FEATURED POSTS -->
<section class="theme-feature-section">
    <div class="container">
    <div class="one-column-wrap feature-post"> 
        <div class="row">
        <div class="col-12">
            <article>    
            <!-- Post thumbnail -->
            <a class="post-thumbnail pr-lg-4 py-lg-2 py-xl-0" href="#">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/future-post.jpeg" alt="feature-post">
            </a>
            <header class="entry-header pl-lg-4">
                <div class="category-list py-3 pt-lg-0"><strong>Freelancer</strong></div>
                <h2 class="entry-title"><a href="#" rel="bookmark">Why Finding A Freelance Community Is Essential For Niche Freelancers</a></h2>
                <div class="entry-meta">
                <span class="author vcard"><a href="#">admin</a></span>
                <a href="#/" rel="bookmark"><time class="entry-date published">August 2, 2021</time></a>
                </div><!-- .entry-meta -->
            </header><!-- .entry-header -->     
            </article>
        </div>
        </div><!-- .row -->
    </div>
=======
<?php
/**
 * Featured section 
 *
 * @package Fiberr
 */
?>
<section class="theme-feature-section">
    <div class="container">
        <div class="one-column-wrap feature-post">
            <div class="row">
                        <div class="col-12">
                            <article>  
                                <!-- Post thumbnail -->
                                <a class="post-thumbnail pr-lg-4 py-lg-2 py-xl-0" href="<?php the_permalink();?>">
                                    <?php the_post_thumbnail('large'); ?>
                                </a>
                                <header class="entry-header pl-lg-4">
                                    <div class="category-list py-3 pt-lg-0"><strong>Freelancer</strong></div>
                                    <h2 class="entry-title"><a href="#" rel="bookmark"><?php the_title() ?></a></h2>
                                    <div class="entry-meta">
                                    <span class="author vcard"><a href="#"><?php the_author() ?></a></span>
                                    <a href="#/" rel="bookmark"><time class="entry-date published"><?php the_date() ?></time></a>
                                    </div><!-- .entry-meta -->
                                </header><!-- .entry-header -->      
                            </article>
                        </div>
            </div><!-- .row -->
        </div>
>>>>>>> 8be673f08c04f903a14e0b983ef7e05d7902df86
    </div><!-- .container --> 
</section><!-- .theme-feature-section -->