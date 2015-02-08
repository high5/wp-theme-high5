        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
          <div class="sidebar-module sidebar-module-inset">
            <h4>About</h4>
            <p>I'm a Software Engineer located in Tokyo with over 8 years of proven experience developing various small and large web applications.</p>
          </div>


        <?php if ( ! dynamic_sidebar( 'primary' ) ) : ?>

            <div id="search" class="sidebar-module">
                <?php get_search_form(); ?>
            </div>

            <div id="categories" class="sidebar-module"><h4>Recent Posts</h4>
                <ol class="list-unstyled">
                    <?php wp_get_recent_posts(); ?>
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <li><a href="<?php the_permalink() ?>"><?php the_title() ?></a></li>
                    <?php endwhile; endif; ?>
                </ol>
            </div>

            <div id="categories" class="sidebar-module"><h4>Categories</h4>
                <ol class="list-unstyled">
                    <?php wp_list_categories( 'title_li=' ); ?>
                </ol>
            </div>

            <div id="archives" class="sidebar-modulet"><h4>Archives</h4>
                <ol class="list-unstyled">
                    <?php wp_get_archives( 'type=monthly' ); ?>
                </ol>
            </div>

            <div id="subscribe" class="sidebar-module"><h4>Subscribe</h4>
                <ol class="list-unstyled">
                    <li><a href="<?php bloginfo( 'rss2_url' ); ?>">Entries (RSS)</a></li>
                    <li><a href="<?php bloginfo( 'comments_rss2_url' ); ?>">Comments (RSS)</a></li>
                </ol>
            </div>

           <div class="sidebar-module">
              <h4>Elsewhere</h4>
              <ol class="list-unstyled">
              <li><a href="http://github.com/high5">GitHub</a></li>
              <li><a href="http://twitter.com/high5">Twitter</a></li>
              </ol>
            </div>


        <?php endif; ?>

        </div><!-- /.blog-sidebar -->