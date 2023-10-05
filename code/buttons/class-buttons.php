<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'Blockspare_Buttons_Template_Block' ) ) {

	class Blockspare_Buttons_Template_Block extends Blockspare_Import_Block_Base{
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
							'item'     => ['Button'],
							'key'      => 'bs_button_1',
							'name'     => esc_html__( 'Button 1', 'blockspare' ),
							'blockLink'=>"https://blockspare.com/demo/default/education/",
							'content'  => '<!-- wp:blockspare/blockspare-buttons {"sectionAlignment":"left","uniqueClass":"blockspare-afb17de8-49c0-4","buttonBackgroundColor":"#275be2","buttonFontFamily":"Helvetica","enableButtonIcon":true,"buttonIcon":"fas fa-hand-point-right","marginTop":0} -->
							<div class="wp-block-blockspare-blockspare-buttons blockspare-afb17de8-49c0-4 blockspare-block-button-wrap" blockspare-animation=""><style>.blockspare-afb17de8-49c0-4 .blockspare-block-button{text-align:left;margin-top:0px;margin-bottom:30px;margin-left:0px;margin-right:0px}.blockspare-afb17de8-49c0-4 .blockspare-block-button i{color:#fff}.blockspare-afb17de8-49c0-4 .blockspare-block-button span{color:#fff;border-width:2px;font-family:Helvetica}.blockspare-afb17de8-49c0-4 .blockspare-block-button .blockspare-button{background-color:#275be2}.blockspare-afb17de8-49c0-4 .blockspare-block-button .blockspare-button:visited{background-color:#275be2}.blockspare-afb17de8-49c0-4 .blockspare-block-button .blockspare-button:focus{background-color:#275be2}.blockspare-afb17de8-49c0-4 .blockspare-block-button span,.blockspare-afb17de8-49c0-4 .blockspare-block-button i{font-size:16px}.blockspare-afb17de8-49c0-4 .blockspare-block-button a{padding-top:12px;padding-bottom:12px;padding-right:22px;padding-left:22px}@media screen and (max-width:1025px){.blockspare-afb17de8-49c0-4 .blockspare-block-button span,.blockspare-afb17de8-49c0-4 .blockspare-block-button i{font-size:14px}}@media screen and (max-width:768px){.blockspare-afb17de8-49c0-4 .blockspare-block-button span,.blockspare-afb17de8-49c0-4 .blockspare-block-button i{font-size:14px}}</style><div class="blockspare-block-button"><a class="blockspare-button blockspare-button-shape-rounded blockspare-button-size-small btn-icon-left"><i class="fas fa-hand-point-right"></i><span>Get Started</span></a></div></div>
							<!-- /wp:blockspare/blockspare-buttons -->',
							'imagePath'    => 'buttons',
						)
				);

            return array_merge_recursive( $blocks_lists, $block_library_list );
        }
	}
}
Blockspare_Buttons_Template_Block::get_instance()->run();