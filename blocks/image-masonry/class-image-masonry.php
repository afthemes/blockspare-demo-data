<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'Blockspare_Image_Masonry_Template_Block' ) ) {

	class Blockspare_Image_Masonry_Template_Block extends Blockspare_Import_Block_Base{
		public static function get_instance() {

			static $instance = null;
			if ( null === $instance ) {
				$instance = new self();
			}
			return $instance;

		}
        public function add_block_template_library( $blocks_lists ){

            $block_library_list = array(
					array(
						'type'     => 'block',
						'key'      => 'bs_image_masonry_1',
						'name'     => esc_html__( 'Image Masonry 1', 'blockspare' ),
						'content'  => '<!-- wp:blockspare/blockspare-masonry {"align":"wide","gutter":30,"gridSize":"lrg","className":"blockspare-eff638b6-a16e-4 blockspare-83bccd2f-e1b5-4"} -->
                        <div class="blockspare-blocks blockspare-masonry-wrapper blockspare-original wp-block-blockspare-blockspare-masonry alignwide blockspare-eff638b6-a16e-4 blockspare-83bccd2f-e1b5-4 blockspare-ea20941b-9126-4"><style>.blockspare-ea20941b-9126-4 .blockspare-gutter-wrap{padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;margin-top:30px;margin-bottom:30px}</style><div class="has-gutter blockspare-gutter-wrap"><ul class="has-grid-lrg has-gutter-30"><li class="blockspare-gallery-item"><figure class="blockspare-gallery-figure"><img src="https://blockspare.com/demo/default/wp-content/uploads/2021/07/pexels-charlotte-may-5947065.jpg" alt="" data-id="101" data-imglink="" data-link="https://blockspare.com/demo/default/home/pexels-charlotte-may-5947065/" class="wp-image-101"/></figure></li><li class="blockspare-gallery-item"><figure class="blockspare-gallery-figure"><img src="https://blockspare.com/demo/default/wp-content/uploads/2021/07/pexels-vlad-chețan-1915714-1024x682.jpg" alt="" data-id="189" data-imglink="" data-link="https://blockspare.com/demo/default/home/pexels-vlad-chet%cc%a6an-1915714/" class="wp-image-189"/></figure></li><li class="blockspare-gallery-item"><figure class="blockspare-gallery-figure"><img src="https://blockspare.com/demo/default/wp-content/uploads/2021/07/pexels-j-lee-7155157-683x1024.jpg" alt="" data-id="174" data-imglink="" data-link="https://blockspare.com/demo/default/home/pexels-j-lee-7155157/" class="wp-image-174"/></figure></li><li class="blockspare-gallery-item"><figure class="blockspare-gallery-figure"><img src="https://blockspare.com/demo/default/wp-content/uploads/2021/07/pexels-neosiam-4498792.jpg" alt="" data-id="109" data-imglink="" data-link="https://blockspare.com/demo/default/home/pexels-neosiam-4498792/" class="wp-image-109"/></figure></li><li class="blockspare-gallery-item"><figure class="blockspare-gallery-figure"><img src="https://blockspare.com/demo/default/wp-content/uploads/2021/07/pexels-caio-60202-1024x680.jpg" alt="" data-id="188" data-imglink="" data-link="https://blockspare.com/demo/default/home/pexels-caio-60202/" class="wp-image-188"/></figure></li><li class="blockspare-gallery-item"><figure class="blockspare-gallery-figure"><img src="https://blockspare.com/demo/default/wp-content/uploads/2021/07/pexels-magda-ehlers-1340185-1024x682.jpg" alt="" data-id="186" data-imglink="" data-link="https://blockspare.com/demo/default/home/pexels-magda-ehlers-1340185/" class="wp-image-186"/></figure></li></ul></div></div>
                        <!-- /wp:blockspare/blockspare-masonry -->',
						'category' => [ esc_html__( 'image masonry', 'blockspare' ) ],
						'keywords' => [
							esc_html__( 'image masonry', 'blockspare' ),
							
						],
						'image'    => BLOCKSPARE_BLOCK_LIBRARY_URL.'image-masonry/image-masonry-1.png',
						
                    )
				);

            return array_merge_recursive( $blocks_lists, $block_library_list );
        }
	}
}
Blockspare_Image_Masonry_Template_Block::get_instance()->run();