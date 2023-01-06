<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'Blockspare_Icon_Template_Block' ) ) {

	class Blockspare_Icon_Template_Block extends Blockspare_Import_Block_Base{
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
						'key'      => 'bs_icon_1',
						'name'     => esc_html__( 'Icon 1', 'blockspare' ),
						'content'  => '<!-- wp:blockspare/blockspare-iconset {"uniqueClass":"blockspare-20d71d34-ebfb-4","name":"fab fa-wordpress","iconBackgroundColor":"#d8fff1","iconColor":"#05047e","borderRadius":0,"marginTop":0,"marginBottom":0} -->
                        <div class="wp-block-blockspare-blockspare-iconset blockspare-20d71d34-ebfb-4 blockspare-blocks"><style>.blockspare-20d71d34-ebfb-4 .blockspare-block-icon-wrapper{text-align:center;margin-top:0px;margin-bottom:0px}.blockspare-20d71d34-ebfb-4 .blockspare-block-icon-wrapper .blockspare-block-icon{background-color:#d8fff1;border-color:#8b249c;color:#05047e;border-radius:0%}</style><div class="blockspare-block-icon-wrapper"><div class="blockspare-block-icon blockspare-icon-size-small blockspare-icon-style2"><i class="fab fa-wordpress"></i></div></div></div>
                        <!-- /wp:blockspare/blockspare-iconset -->',
						'category' => [ esc_html__( 'icon', 'blockspare' ) ],
						'keywords' => [
							esc_html__( 'icon', 'blockspare' ),
							
						],
						'image'    => BLOCKSPARE_BLOCK_LIBRARY_URL.'Icon/icon-1.png',
						
                    ),
                    array(
						'type'     => 'block',
						'key'      => 'bs_icon_2',
						'name'     => esc_html__( 'Icon 2', 'blockspare' ),
						'content'  => '<!-- wp:blockspare/blockspare-iconset {"sectionAlignment":"left","uniqueClass":"blockspare-b4cb8332-a83f-4","name":"fas fa-location-arrow","iconBackgroundColor":"#2e947d","iconColor":"#ffffff","marginTop":0,"marginBottom":0} -->
                        <div class="wp-block-blockspare-blockspare-iconset blockspare-b4cb8332-a83f-4 blockspare-blocks"><style>.blockspare-b4cb8332-a83f-4 .blockspare-block-icon-wrapper{text-align:left;margin-top:0px;margin-bottom:0px}.blockspare-b4cb8332-a83f-4 .blockspare-block-icon-wrapper .blockspare-block-icon{background-color:#2e947d;border-color:#8b249c;color:#ffffff;border-radius:50%}</style><div class="blockspare-block-icon-wrapper"><div class="blockspare-block-icon blockspare-icon-size-small blockspare-icon-style2"><i class="fas fa-location-arrow"></i></div></div></div>
                        <!-- /wp:blockspare/blockspare-iconset -->',
						'category' => [ esc_html__( 'icon', 'blockspare' ) ],
						'keywords' => [
							esc_html__( 'icon', 'blockspare' ),
							
						],
						'image'    => BLOCKSPARE_BLOCK_LIBRARY_URL.'Icon/icon-2.png',
						
                    ),
                    array(
						'type'     => 'block',
						'key'      => 'bs_icon_3',
						'name'     => esc_html__( 'Icon 3', 'blockspare' ),
						'content'  => '<!-- wp:blockspare/blockspare-iconset {"uniqueClass":"blockspare-c765d6af-0104-4","name":"fas fa-dumbbell","iconSize":"blockspare-icon-size-large","iconStyles":"blockspare-icon-style3","iconBackgroundColor":"#cf2e2e","iconBorderColor":"#cf2e2e","iconColor":"#cf2e2e","borderRadius":25,"marginTop":0,"marginBottom":0} -->
                        <div class="wp-block-blockspare-blockspare-iconset blockspare-c765d6af-0104-4 blockspare-blocks"><style>.blockspare-c765d6af-0104-4 .blockspare-block-icon-wrapper{text-align:center;margin-top:0px;margin-bottom:0px}.blockspare-c765d6af-0104-4 .blockspare-block-icon-wrapper .blockspare-block-icon{background-color:transparent;border-color:#cf2e2e;color:#cf2e2e;border-radius:25%}</style><div class="blockspare-block-icon-wrapper"><div class="blockspare-block-icon blockspare-icon-size-large blockspare-icon-style3"><i class="fas fa-dumbbell"></i></div></div></div>
                        <!-- /wp:blockspare/blockspare-iconset -->',
						'category' => [ esc_html__( 'icon', 'blockspare' ) ],
						'keywords' => [
							esc_html__( 'icon', 'blockspare' ),
							
						],
						'image'    => BLOCKSPARE_BLOCK_LIBRARY_URL.'Icon/icon-3.png',
						
                    ),
                    array(
						'type'     => 'block',
						'key'      => 'bs_icon_4',
						'name'     => esc_html__( 'Icon 4', 'blockspare' ),
						'content'  => '<!-- wp:blockspare/blockspare-iconset {"uniqueClass":"blockspare-c51b00ef-901a-4","name":"fas fa-cart-arrow-down","iconSize":"blockspare-icon-size-large","iconStyles":"blockspare-icon-style1","iconBackgroundColor":"#cf2e2e","iconBorderColor":"#cf2e2e","iconColor":"#d96512","borderRadius":25,"marginTop":0,"marginBottom":0} -->
                        <div class="wp-block-blockspare-blockspare-iconset blockspare-c51b00ef-901a-4 blockspare-blocks"><style>.blockspare-c51b00ef-901a-4 .blockspare-block-icon-wrapper{text-align:center;margin-top:0px;margin-bottom:0px}.blockspare-c51b00ef-901a-4 .blockspare-block-icon{color:#d96512}</style><div class="blockspare-block-icon-wrapper"><div class="blockspare-block-icon blockspare-icon-size-large blockspare-icon-style1"><i class="fas fa-cart-arrow-down"></i></div></div></div>
                        <!-- /wp:blockspare/blockspare-iconset -->',
						'category' => [ esc_html__( 'icon', 'blockspare' ) ],
						'keywords' => [
							esc_html__( 'icon', 'blockspare' ),
							
						],
						'image'    => BLOCKSPARE_BLOCK_LIBRARY_URL.'Icon/icon-4.png',
						
						)
                
				);

            return array_merge_recursive( $blocks_lists, $block_library_list );
        }
	}
}
Blockspare_Icon_Template_Block::get_instance()->run();