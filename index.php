     <?php get_header(); ?>


        <div class="col-sm-8 blog-main">
            <?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>
            <div class="blog-post">
              <h2 class="blog-post-title"><?php the_title(); ?></h2>
              <p class="blog-post-meta"><?php the_time( 'F j, Y' ); ?> by <?php the_author_posts_link(); ?> in <?php the_category(', ');?></p>
                <?php the_content(); ?>
            </div>
            <?php endwhile; else: ?>
                <h2>Woops...</h2>
                <p>Sorry, no posts we're found.</p>
            <?php endif; ?>



          <nav>
            <ul class="pager">
              <li><a href="#">Previous</a></li>
              <li><a href="#">Next</a></li>
            </ul>
          </nav>

        </div><!-- /.blog-main -->

        <?php get_sidebar(); ?>



      </div><!-- /.row -->

    </div><!-- /.container -->



    <?php get_footer(); ?>

