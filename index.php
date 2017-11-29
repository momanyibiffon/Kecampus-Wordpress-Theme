<?php get_header();?>
      <div class="row">

        <div class="col-sm-8 blog-main">
        <?php if(have_posts()):?>
        <?php while(have_posts()) : the_post();?>
          <div class="row blog-post">
            <h2 class="blog-post-title">
              <a href="<?php the_permalink();?>">  
                <?php the_title();?>
              </a>
            </h2>
            <div class="col-sm-4">
                <?php if(has_post_thumbnail()):?>
                  <div class="post-thumb">
                  <?php the_post_thumbnail();?>
                  </div>
                <?php endif;?>
            </div>
            
            <div class="col-sm-8 post-excerpt">
                <p class="blog-post-meta">
                  <?php the_time('F j,Y ( g:i a)');?> 
                  by 
                  <!--getting all posts on an author-->
                  <a href="<?php echo get_author_posts_url(get_the_author_meta('ID'));?>">
                  <!--getting author name-->
                  <?php the_author();?>
                  </a>
                    <i>in  </i> <?php echo ": ";?><?php the_category();?>
                </p>
                <!--getting a limited number of words from a post-->
                <?php the_excerpt();?>
                <a href="<?php the_permalink();?>"class="btn btn-primary">Full Story</a>
            </div>
            <hr>

            </div><!-- /.blog-post -->
          <?php endwhile;?>
          <?php else:?>
              <p><?php __('No Posts Found');?></p>
          <?php endif;?>
      

          <nav>
            <ul class="pager">
              <div class="nav-previous pull-left"><?php next_posts_link( 'Older posts' );?></div>
              <div class="nav-next pull-right"><?php previous_posts_link( 'Newer posts'); ?></div>

            </ul>
          </nav>

        </div><!-- /.blog-main -->



<?php get_footer();?>