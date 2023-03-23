<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

get_header(); ?>
<section class="not-found">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-5 mb-5 text-center">
            <div class="error-404"><h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'twentyseventeen' ); ?></h1></div>
          </div>
          <div class="col-lg-3 mb-5 text-center">
            <div class="links-404">
              <h4>Helpful Links</h4>
              <ul>
                <li><i class="fa fa-arrow-right"></i><a href="https://www.computersolutionseast.com/it-services"> IT Services</a></li>
                <li><i class="fa fa-arrow-right"></i><a href="https://www.computersolutionseast.com/solutions"> Solutions</a></li>
                <li><i class="fa fa-arrow-right"></i><a href="https://www.computersolutionseast.com/industry"> Industry</a></li>
                <li><i class="fa fa-arrow-right"></i><a href="https://marketplace.computersolutionseast.com"> Shop</a></li>
                <li><i class="fa fa-arrow-right"></i><a href="https://www.computersolutionseast.com/blog"> Blogs</a></li>
                <li><i class="fa fa-arrow-right"></i><a href="https://www.computersolutionseast.com/contact-us"> Contact us</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-4 mb-5">
            <div class="search" style="display:none">
              <div class="search-form">
                <h4>Please try searching again</h4>
                <form action="" method="get" class="form-inline">
                  <div class="input-group input-group-lg">
                    <input type="text" aria-required="true" name="q" class="form-control widget-search-form"
                      placeholder="Search for pages...">
                    <div class="input-group-append">
                      <span class="input-group-btn">
                        <button type="submit" id="widget-widget-search-form-button" class="btn"><i
                            class="fa fa-search"></i></button>
                      </span>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
<?php
get_footer();
