<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'Blockspare_Post_Flash_Template_Block' ) ) {

	class Blockspare_Post_Flash_Template_Block extends Blockspare_Import_Block_Base{
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
						'item'     => ['Post Flash'],
						'key'      => 'bs_post_flash_1',
						'name'     => esc_html__( 'Post Flash 1', 'blockspare' ),
                        'imagePath'    => 'post-flash',
						'blockLink'=>"https://blockspare.com/demo/default/sport-news/",
						'content'  => '<!-- wp:blockspare/latest-posts-flash {"uniqueClass":"blockspare-cae2fcad-5179-4","postTitleColor":"#ffffff","backGroundColor":"#26512a","titleOnHoverColor":"#F6F6F6","exclusiveText":"Live Update","exclusiveSubtitle":true,"newsColor":"#ffffff"} /-->',
                    ),
					array(
						'type'     => 'block',
						'item'     => ['Post Flash'],
						'key'      => 'bs_post_flash_2',
						'name'     => esc_html__( 'Post Flash 2', 'blockspare' ),
                        'imagePath'    => 'post-flash',
						'blockLink'=>"https://blockspare.com/demo/default/fashion-news/",
						'content'  => '<!-- wp:blockspare/latest-posts-flash {"uniqueClass":"blockspare-e57a692b-96a1-4","postTitleColor":"#e8eaed","exclusiveColor":"#ffffff","exclusiveBgColor":"#4db2ec","backGroundColor":"#444444","titleOnHoverColor":"#ffffff","exclusiveText":"Trending Now","exclusiveSubtitleText":"Today","newsBgColor":"#000000"} /-->',
                    )
				);

            return array_merge_recursive( $blocks_lists, $block_library_list );
        }
	}
}
Blockspare_Post_Flash_Template_Block::get_instance()->run();