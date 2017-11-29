<?php get_header();?>

      <div class="row">

        <div class="col-sm-8 blog-main">
        <?php if(have_posts()):?>
        <?php while(have_posts()) : the_post();?>
          <div class="row blog-post">
            <h2 class="content-post-title"> 
                <?php the_title();?>
            </h2>
            <p class="blog-post-meta">
                <?php the_time('F j,Y ( g:i a)');?> 
                by 
                <!--getting all posts on an author-->
                <a href="<?php echo get_author_posts_url(get_the_author_meta('ID'));?>">
                <!--getting author name-->
                <?php the_author();?>
                </a>
                <?php echo " in : ";the_category();?>
              </p>
                <?php if(has_post_thumbnail()):?>
                  <div class="content-post-thumb">
                      <?php the_post_thumbnail();?>
                  </div>
                <?php endif;?>

                <!--getting a limited number of words from a post-->
                    <?php the_content();?>
            <hr>
              <div class="author-meta well">
                <h3>About The Author</h3>
                <h4><?php the_author_meta('first_name');echo " ";the_author_meta('last_name');?></h4>
                <?php echo get_avatar( get_the_author_meta('ID'),32);?>
                <?php the_author_meta('description');?>
              </div>
            <!--comments section-->
              <div class="well">
                <?php comments_template();?>
              </div>
            </div><!-- /.blog-post -->
          <?php endwhile;?>
          <?php else:?>
              <p><?php __('No Posts Found');?></p>
          <?php endif;?>
      

          <nav>
            <ul class="pager">
              <li><a href="#">Previous</a></li>
              <li><a href="#">Next</a></li>
            </ul>
          </nav>

        </div><!-- /.blog-main -->

<?php get_footer();?>