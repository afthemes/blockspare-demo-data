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
						'key'      => 'bs_button_1',
						'name'     => esc_html__( 'Button 1', 'blockspare' ),
						'content'  => '<!-- wp:blockspare/blockspare-buttons {"uniqueClass":"blockspare-d96c1768-bf4c-4","buttonText":"Watch Demos","buttonTextColor":"#ffffff","buttonShape":"blockspare-button-shape-circular","enableGradient":true,"backgroundColor1":"#f180be","backgroundColor2":"#719eb6","gradientAngle":90,"colorLocation1":0,"colorLocation2":100,"buttonFontSize":25,"buttonFontFamily":"Georgia","marginTop":50,"marginBottom":100} -->
						<div class="wp-block-blockspare-blockspare-buttons blockspare-d96c1768-bf4c-4 blockspare-block-button-wrap"><style>.blockspare-d96c1768-bf4c-4 .blockspare-block-button{text-align:center;margin-top:50px;margin-bottom:100px}.blockspare-d96c1768-bf4c-4 .blockspare-block-button span{color:#ffffff;border-width:1px;font-size:25px;font-family:Georgia}.blockspare-d96c1768-bf4c-4.wp-block-blockspare-blockspare-buttons .blockspare-block-button .blockspare-button{background-image:linear-gradient(90deg,#f180be 0%,#719eb6 100%)}.blockspare-d96c1768-bf4c-4.wp-block-blockspare-blockspare-buttons .blockspare-block-button .blockspare-button:visited{background-image:linear-gradient(90deg,#f180be 0%,#719eb6 100%)}.blockspare-d96c1768-bf4c-4.wp-block-blockspare-blockspare-buttons .blockspare-block-button .blockspare-button:focus{background-image:linear-gradient(90deg,#f180be 0%,#719eb6 100%)}@media screen and (max-width:1025px){.blockspare-d96c1768-bf4c-4 .blockspare-block-button span{font-size:undefinedpx}}@media screen and (max-width:768px){.blockspare-d96c1768-bf4c-4 .blockspare-block-button span{font-size:undefinedpx}}</style><div class="blockspare-block-button"><a class="blockspare-button blockspare-button-shape-circular blockspare-button-size-small"><span>Watch Demos</span></a></div></div>
						<!-- /wp:blockspare/blockspare-buttons -->',
						'category' => [ esc_html__( 'button', 'blockspare' ) ],
						'keywords' => [
							esc_html__( 'button', 'blockspare' ),
							
						],
						'image'    => BLOCKSPARE_BLOCK_LIBRARY_URL.'buttons/button-1.png',
						
						),

						array(
							'type'     => 'block',
							'key'      => 'bs_button_2',
							'name'     => esc_html__( 'Button 2', 'blockspare' ),
							'content'  => '<!-- wp:blockspare/blockspare-buttons {"uniqueClass":"blockspare-c85881f7-c52f-4","buttonText":"Buy Now","buttonTextColor":"#f7f7f7","buttonShape":"blockspare-button-shape-circular","enableGradient":true,"backgroundColor1":"#39c706","backgroundColor2":"#40e405","buttonHoverEffect":"hover-style-2","marginTop":50,"marginBottom":100} -->
							<div class="wp-block-blockspare-blockspare-buttons blockspare-c85881f7-c52f-4 blockspare-block-button-wrap"><style>.blockspare-c85881f7-c52f-4 .blockspare-block-button{text-align:center;margin-top:50px;margin-bottom:100px}.blockspare-c85881f7-c52f-4 .blockspare-block-button span{color:#f7f7f7;border-width:1px;font-size:16px;font-family:Default}.blockspare-c85881f7-c52f-4.wp-block-blockspare-blockspare-buttons .blockspare-block-button .blockspare-button{background-image:linear-gradient(-90deg,#39c706 30%,#40e405 70%)}.blockspare-c85881f7-c52f-4.wp-block-blockspare-blockspare-buttons .blockspare-block-button .blockspare-button:visited{background-image:linear-gradient(-90deg,#39c706 30%,#40e405 70%)}.blockspare-c85881f7-c52f-4.wp-block-blockspare-blockspare-buttons .blockspare-block-button .blockspare-button:focus{background-image:linear-gradient(-90deg,#39c706 30%,#40e405 70%)}@media screen and (max-width:1025px){.blockspare-c85881f7-c52f-4 .blockspare-block-button span{font-size:undefinedpx}}@media screen and (max-width:768px){.blockspare-c85881f7-c52f-4 .blockspare-block-button span{font-size:undefinedpx}}</style><div class="blockspare-block-button"><a class="blockspare-button blockspare-button-shape-circular blockspare-button-size-small hover-style-2"><span>Buy Now</span></a></div></div>
							<!-- /wp:blockspare/blockspare-buttons -->',
							'category' => [ esc_html__( 'button', 'blockspare' ) ],
							'keywords' => [
								esc_html__( 'button', 'blockspare' ),
								
							],
							'image'    => BLOCKSPARE_BLOCK_LIBRARY_URL.'buttons/button-2.png',
						),
						array(
							'type'     => 'block',
							'key'      => 'bs_button_3',
							'name'     => esc_html__( 'Button 3', 'blockspare' ),
							'content'  => '<!-- wp:blockspare/blockspare-buttons {"uniqueClass":"blockspare-dd233d15-a6aa-4","buttonBackgroundColor":"#05047e","buttonShape":"blockspare-button-shape-square"} -->
							<div class="wp-block-blockspare-blockspare-buttons blockspare-dd233d15-a6aa-4 blockspare-block-button-wrap"><style>.blockspare-dd233d15-a6aa-4 .blockspare-block-button{text-align:center;margin-top:30px;margin-bottom:30px}.blockspare-dd233d15-a6aa-4 .blockspare-block-button span{color:#fff;border-width:1px;font-size:16px;font-family:Default}.blockspare-dd233d15-a6aa-4.wp-block-blockspare-blockspare-buttons .blockspare-block-button .blockspare-button{background-color:#05047e}.blockspare-dd233d15-a6aa-4.wp-block-blockspare-blockspare-buttons .blockspare-block-button .blockspare-button:visited{background-color:#05047e}.blockspare-dd233d15-a6aa-4.wp-block-blockspare-blockspare-buttons .blockspare-block-button .blockspare-button:focus{background-color:#05047e}@media screen and (max-width:1025px){.blockspare-dd233d15-a6aa-4 .blockspare-block-button span{font-size:undefinedpx}}@media screen and (max-width:768px){.blockspare-dd233d15-a6aa-4 .blockspare-block-button span{font-size:undefinedpx}}</style><div class="blockspare-block-button"><a class="blockspare-button blockspare-button-shape-square blockspare-button-size-small"><span>Get Started</span></a></div></div>
							<!-- /wp:blockspare/blockspare-buttons -->',
							'category' => [ esc_html__( 'button', 'blockspare' ) ],
							'keywords' => [
								esc_html__( 'button', 'blockspare' ),
								
							],
							'image'    => BLOCKSPARE_BLOCK_LIBRARY_URL.'buttons/button-3.png',
						),
						array(
							'type'     => 'block',
							'key'      => 'bs_button_4',
							'name'     => esc_html__( 'Button 4', 'blockspare' ),
							'content'  => '<!-- wp:blockspare/blockspare-buttons {"uniqueClass":"blockspare-4c093d90-de68-4","buttonText":"Free Consultation","buttonBackgroundColor":"#e42024","buttonTextColor":"#ffffff","marginTop":80} -->
							<div class="wp-block-blockspare-blockspare-buttons blockspare-4c093d90-de68-4 blockspare-block-button-wrap"><style>.blockspare-4c093d90-de68-4 .blockspare-block-button{text-align:center;margin-top:80px;margin-bottom:30px}.blockspare-4c093d90-de68-4 .blockspare-block-button span{color:#ffffff;border-width:1px;font-size:16px;font-family:Default}.blockspare-4c093d90-de68-4.wp-block-blockspare-blockspare-buttons .blockspare-block-button .blockspare-button{background-color:#e42024}.blockspare-4c093d90-de68-4.wp-block-blockspare-blockspare-buttons .blockspare-block-button .blockspare-button:visited{background-color:#e42024}.blockspare-4c093d90-de68-4.wp-block-blockspare-blockspare-buttons .blockspare-block-button .blockspare-button:focus{background-color:#e42024}@media screen and (max-width:1025px){.blockspare-4c093d90-de68-4 .blockspare-block-button span{font-size:undefinedpx}}@media screen and (max-width:768px){.blockspare-4c093d90-de68-4 .blockspare-block-button span{font-size:undefinedpx}}</style><div class="blockspare-block-button"><a class="blockspare-button blockspare-button-shape-rounded blockspare-button-size-small"><span>Free Consultation</span></a></div></div>
							<!-- /wp:blockspare/blockspare-buttons -->',
							'category' => [ esc_html__( 'button', 'blockspare' ) ],
							'keywords' => [
								esc_html__( 'button', 'blockspare' ),
								
							],
							'image'    => BLOCKSPARE_BLOCK_LIBRARY_URL.'buttons/button-4.png',
						)
                
				);

            return array_merge_recursive( $blocks_lists, $block_library_list );
        }
	}
}
Blockspare_Buttons_Template_Block::get_instance()->run();