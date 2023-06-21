<?php
class Blocksspare_Block_Library {


    public static function instance() {

        static $instance = null;
        if ( null === $instance ) {
            $instance = new self();

            if ( !defined( 'BLOCKSPARE_BLOCK_LIBRARY_PATH' ) ) {
                define( 'BLOCKSPARE_BLOCK_LIBRARY_PATH', BLOCKSPARE_PLUGIN_DIR . 'inc/template-library/blocks/' );
                define( 'BLOCKSPARE_BLOCK_LIBRARY_URL', BLOCKSPARE_PLUGIN_URL . 'inc/template-library/blocks/' );
            }
        }
        return $instance;
    }


    public function run() {
        $this->load_dependencies();
    }

    private function load_dependencies() {
        
        
        /*Block Library*/
           require_once BLOCKSPARE_BLOCK_LIBRARY_PATH .'accordion/class-accordion.php';
          require_once BLOCKSPARE_BLOCK_LIBRARY_PATH .'buttons/class-buttons.php';
          require_once BLOCKSPARE_BLOCK_LIBRARY_PATH .'call-to-action/class-cta.php';
          require_once BLOCKSPARE_BLOCK_LIBRARY_PATH .'container/class-container.php';
          require_once BLOCKSPARE_BLOCK_LIBRARY_PATH .'content-box/class-content-box.php';
          require_once BLOCKSPARE_BLOCK_LIBRARY_PATH .'counter/class-counter.php';
          require_once BLOCKSPARE_BLOCK_LIBRARY_PATH .'icon/class-icon.php';
          require_once BLOCKSPARE_BLOCK_LIBRARY_PATH .'icon-list/class-icon-list.php';
        //   require_once BLOCKSPARE_BLOCK_LIBRARY_PATH .'image-masonry/class-image-masonry.php';
          require_once BLOCKSPARE_BLOCK_LIBRARY_PATH .'logo-grid/class-logo-grid.php';
          require_once BLOCKSPARE_BLOCK_LIBRARY_PATH .'notice-bar/class-notice-bar.php';
          require_once BLOCKSPARE_BLOCK_LIBRARY_PATH .'pages/class-pages.php';
          require_once BLOCKSPARE_BLOCK_LIBRARY_PATH .'price-list/class-price-list.php';
          require_once BLOCKSPARE_BLOCK_LIBRARY_PATH .'pricing-table/class-pricing-table.php';
          require_once BLOCKSPARE_BLOCK_LIBRARY_PATH .'progressbar/class-progressbar.php';
          require_once BLOCKSPARE_BLOCK_LIBRARY_PATH .'sections/class-sections.php';
          require_once BLOCKSPARE_BLOCK_LIBRARY_PATH .'section-header/class-section-header.php';
          require_once BLOCKSPARE_BLOCK_LIBRARY_PATH .'services/class-services.php';
          require_once BLOCKSPARE_BLOCK_LIBRARY_PATH .'shape-divider/class-shape-divider.php';
          require_once BLOCKSPARE_BLOCK_LIBRARY_PATH .'tabs/class-tabs.php';
          require_once BLOCKSPARE_BLOCK_LIBRARY_PATH .'testimonials/class-testimonial.php';
         

         
         
         
         
         //require_once BLOCKSPARE_BLOCK_LIBRARY_PATH .'image-carousel/class-image-carousel.php';
         //
        // require_once BLOCKSPARE_BLOCK_LIBRARY_PATH .'image-slider/class-image-slider.php';
        // require_once BLOCKSPARE_BLOCK_LIBRARY_PATH .'section-header/class-section-header.php';
        
        // require_once BLOCKSPARE_BLOCK_LIBRARY_PATH .'social-links/class-social-links.php';
        // require_once BLOCKSPARE_BLOCK_LIBRARY_PATH .'social-sharing/class-social-sharing.php';
        // require_once BLOCKSPARE_BLOCK_LIBRARY_PATH .'star-rating/class-star-rating.php';
         
        // require_once BLOCKSPARE_BLOCK_LIBRARY_PATH .'post-grid/class-post-grid.php';
        // require_once BLOCKSPARE_BLOCK_LIBRARY_PATH .'post-list/class-post-list.php';
        // require_once BLOCKSPARE_BLOCK_LIBRARY_PATH .'post-carousel/class-post-carousel.php';
        // require_once BLOCKSPARE_BLOCK_LIBRARY_PATH .'shape-divider/class-shape-divider.php';
    }
}

Blocksspare_Block_Library::instance()->run();