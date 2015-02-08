     <?php get_header(); ?>

        <div class="col-sm-8 blog-main">
            <h1 class="archive-title">
            <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
            <?php if (is_category()) { ?>
                <?php echo single_cat_title(); ?>
            <?php } elseif( is_tag() ) { ?>
                <?php _e( 'Posts Tagged:', 'wp-theme-high5' ); ?> <?php single_tag_title(); ?>

            <?php } elseif (is_day()) { ?>
                <?php _e( 'Archive for', 'wp-theme-high5' ); ?> <?php echo get_the_date(); ?>

            <?php } elseif (is_month()) { ?>
                <?php _e( 'Archive for', 'wp-theme-high5' ); ?> <?php echo get_the_date( _x( 'F Y', 'monthly archives date format', 'wp-theme-high5' ) ) ?>

            <?php } elseif (is_year()) { ?>
                <?php _e( 'Archive for', 'wp-theme-high5' ); ?> <?php echo get_the_date( _x( 'Y', 'yearly archives date format', 'wp-theme-high5' ) ) ?>

            <?php } elseif (is_search()) { ?>
                <?php _e( 'Search Results', 'wp-theme-high5' ); ?>
                <?php printf( __( 'Search Results for: %s', 'wp-theme-high5' ), get_search_query() ); ?>
            <?php } elseif (is_author()) { ?>
                <?php _e( 'Author Archive', 'wp-theme-high5' ); ?>
            <?php } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
                <?php _e( 'Blog Archives', 'wp-theme-high5' ); ?>
            <?php } ?>
            </h1>


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
              <li class="pull-left"><?php next_posts_link( __( '&larr; Older Posts', 'wp-theme-high5' ) ); ?></li>
              <li class="pull-right"><?php previous_posts_link( __( 'Newer Posts &rarr;', 'wp-theme-high5' ) ); ?></li>
            </ul>
          </nav>

        </div><!-- /.blog-main -->

        <?php get_sidebar(); ?>



      </div><!-- /.row -->

    </div><!-- /.container -->



    <?php get_footer(); ?>

