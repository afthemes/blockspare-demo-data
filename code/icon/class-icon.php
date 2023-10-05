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
						'item'     => ['Icon'],
						'key'      => 'bs_icon_1',
						'name'     => esc_html__( 'Icon 1', 'blockspare' ),
						'blockLink'=>"",
						'content'  => '',
						'imagePath'    => 'icon',
                    )
                
				);

            return array_merge_recursive( $blocks_lists, $block_library_list );
        }
	}
}
Blockspare_Icon_Template_Block::get_instance()->run();