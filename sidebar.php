        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
          <div class="sidebar-module sidebar-module-inset">
            <h4>About</h4>
            <p>I'm japanese. Live in Tokyo.</p>
          </div>


        <?php if ( ! dynamic_sidebar( 'primary' ) ) : ?>

            <div id="search" class="sidebar-module">
                <?php get_search_form(); ?>
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