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
						'blockLink'=>"https://blockspare.com/demo/default/agency/",
						'content'  => '<!-- wp:blockspare/blockspare-buttons {"sectionAlignment":"left","uniqueClass":"blockspare-deb04257-c66f-4","buttonBackgroundColor":"#2e947d","buttonShape":"blockspare-button-shape-square","marginBottom":0} -->
						<div class="wp-block-blockspare-blockspare-buttons blockspare-deb04257-c66f-4 blockspare-block-button-wrap" blockspare-animation=""><style>.blockspare-deb04257-c66f-4 .blockspare-block-button{text-align:left;margin-top:30px;margin-bottom:0px;margin-left:0px;margin-right:0px}.blockspare-deb04257-c66f-4 .blockspare-block-button span{color:#fff;border-width:2px}.blockspare-deb04257-c66f-4 .blockspare-block-button .blockspare-button{background-color:#2e947d}.blockspare-deb04257-c66f-4 .blockspare-block-button .blockspare-button:visited{background-color:#2e947d}.blockspare-deb04257-c66f-4 .blockspare-block-button .blockspare-button:focus{background-color:#2e947d}.blockspare-deb04257-c66f-4 .blockspare-block-button span,.blockspare-deb04257-c66f-4 .blockspare-block-button i{font-size:16px}.blockspare-deb04257-c66f-4 .blockspare-block-button a{padding-top:12px;padding-bottom:12px;padding-right:22px;padding-left:22px}@media screen and (max-width:1025px){.blockspare-deb04257-c66f-4 .blockspare-block-button span,.blockspare-deb04257-c66f-4 .blockspare-block-button i{font-size:14px}}@media screen and (max-width:768px){.blockspare-deb04257-c66f-4 .blockspare-block-button span,.blockspare-deb04257-c66f-4 .blockspare-block-button i{font-size:14px}}</style><div class="blockspare-block-button"><a class="blockspare-button blockspare-button-shape-square blockspare-button-size-small"><span>Get Started</span></a></div></div>
						<!-- /wp:blockspare/blockspare-buttons -->',
						'imagePath'    => 'buttons',
						),

						array(
							'type'     => 'block',
							'item'     => ['Button'],
							'key'      => 'bs_button_2',
							'name'     => esc_html__( 'Button 2', 'blockspare' ),
							'blockLink'=>"https://blockspare.com/demo/default/lawyer/contact-us-2/",
							'content'  => '<!-- wp:blockspare/blockspare-buttons {"uniqueClass":"blockspare-6c2f0ff6-e3f4-4","buttonBackgroundColor":"#b69d74","buttonHoverEffect":"hover-style-2"} -->
							<div class="wp-block-blockspare-blockspare-buttons blockspare-6c2f0ff6-e3f4-4 blockspare-block-button-wrap" blockspare-animation=""><style>.blockspare-6c2f0ff6-e3f4-4 .blockspare-block-button{text-align:center;margin-top:30px;margin-bottom:30px;margin-left:0px;margin-right:0px}.blockspare-6c2f0ff6-e3f4-4 .blockspare-block-button span{color:#fff;border-width:2px}.blockspare-6c2f0ff6-e3f4-4 .blockspare-block-button .blockspare-button{background-color:#b69d74}.blockspare-6c2f0ff6-e3f4-4 .blockspare-block-button .blockspare-button:visited{background-color:#b69d74}.blockspare-6c2f0ff6-e3f4-4 .blockspare-block-button .blockspare-button:focus{background-color:#b69d74}.blockspare-6c2f0ff6-e3f4-4 .blockspare-block-button span,.blockspare-6c2f0ff6-e3f4-4 .blockspare-block-button i{font-size:16px}.blockspare-6c2f0ff6-e3f4-4 .blockspare-block-button a{padding-top:12px;padding-bottom:12px;padding-right:22px;padding-left:22px}@media screen and (max-width:1025px){.blockspare-6c2f0ff6-e3f4-4 .blockspare-block-button span,.blockspare-6c2f0ff6-e3f4-4 .blockspare-block-button i{font-size:14px}}@media screen and (max-width:768px){.blockspare-6c2f0ff6-e3f4-4 .blockspare-block-button span,.blockspare-6c2f0ff6-e3f4-4 .blockspare-block-button i{font-size:14px}}</style><div class="blockspare-block-button"><a class="blockspare-button blockspare-button-shape-rounded blockspare-button-size-small hover-style-2"><span>Get Started</span></a></div></div>
							<!-- /wp:blockspare/blockspare-buttons -->',
							'imagePath'    => 'buttons',
						),
						array(
							'type'     => 'block',
							'item'     => ['Button'],
							'key'      => 'bs_button_3',
							'name'     => esc_html__( 'Button 3', 'blockspare' ),
							'blockLink'=>"https://blockspare.com/demo/default/restaurant/",
							'content'  => '<!-- wp:columns {"backgroundColor":"contrast"} -->
							<div class="wp-block-columns has-contrast-background-color has-background"><!-- wp:column {"width":"100%"} -->
							<div class="wp-block-column" style="flex-basis:100%"><!-- wp:blockspare/blockspare-buttons {"sectionAlignment":"left","uniqueClass":"blockspare-e5b42fc6-4a44-4","buttonText":"View Menu","buttonBackgroundColor":"#ffffff","buttonTextColor":"#000000","buttonHoverEffect":"hover-style-2","buttonFontFamily":"Roboto Condensed","buttonLoadGoogleFonts":true,"paddingTop":10,"paddingBottom":10} -->
							<div class="wp-block-blockspare-blockspare-buttons blockspare-e5b42fc6-4a44-4 blockspare-block-button-wrap" blockspare-animation=""><style>.blockspare-e5b42fc6-4a44-4 .blockspare-block-button{text-align:left;margin-top:30px;margin-bottom:30px;margin-left:0px;margin-right:0px}.blockspare-e5b42fc6-4a44-4 .blockspare-block-button span{color:#000000;border-width:2px;font-family:Roboto Condensed}.blockspare-e5b42fc6-4a44-4 .blockspare-block-button .blockspare-button{background-color:#ffffff}.blockspare-e5b42fc6-4a44-4 .blockspare-block-button .blockspare-button:visited{background-color:#ffffff}.blockspare-e5b42fc6-4a44-4 .blockspare-block-button .blockspare-button:focus{background-color:#ffffff}.blockspare-e5b42fc6-4a44-4 .blockspare-block-button span,.blockspare-e5b42fc6-4a44-4 .blockspare-block-button i{font-size:16px}.blockspare-e5b42fc6-4a44-4 .blockspare-block-button a{padding-top:10px;padding-bottom:10px;padding-right:22px;padding-left:22px}@media screen and (max-width:1025px){.blockspare-e5b42fc6-4a44-4 .blockspare-block-button span,.blockspare-e5b42fc6-4a44-4 .blockspare-block-button i{font-size:14px}}@media screen and (max-width:768px){.blockspare-e5b42fc6-4a44-4 .blockspare-block-button span,.blockspare-e5b42fc6-4a44-4 .blockspare-block-button i{font-size:14px}}</style><div class="blockspare-block-button"><a class="blockspare-button blockspare-button-shape-rounded blockspare-button-size-small hover-style-2"><span>View Menu</span></a></div></div>
							<!-- /wp:blockspare/blockspare-buttons --></div>
							<!-- /wp:column --></div>
							<!-- /wp:columns -->',
							'imagePath'    => 'buttons',
						),
						array(
							'type'     => 'block',
							'item'     => ['Button'],
							'key'      => 'bs_button_4',
							'name'     => esc_html__( 'Button 4', 'blockspare' ),
							'blockLink'=>"https://blockspare.com/demo/default/app/",
							'content'  => '<!-- wp:blockspare/blockspare-buttons {"sectionAlignment":"left","uniqueClass":"blockspare-c4d1d44e-39f8-4","buttonText":"Download","buttonBackgroundColor":"#ea4b50","buttonShape":"blockspare-button-shape-circular","buttonHoverEffect":"hover-style-4","buttonFontFamily":"Poppins","buttonFontWeight":"400","buttonFontSubset":"latin","buttonLoadGoogleFonts":true,"marginTop":0,"marginBottom":0} -->
							<div class="wp-block-blockspare-blockspare-buttons blockspare-c4d1d44e-39f8-4 blockspare-block-button-wrap" blockspare-animation=""><style>.blockspare-c4d1d44e-39f8-4 .blockspare-block-button{text-align:left;margin-top:0px;margin-bottom:0px;margin-left:0px;margin-right:0px}.blockspare-c4d1d44e-39f8-4 .blockspare-block-button span{color:#fff;border-width:2px;font-family:Poppins;font-weight:400}.blockspare-c4d1d44e-39f8-4 .blockspare-block-button .blockspare-button{background-color:#ea4b50}.blockspare-c4d1d44e-39f8-4 .blockspare-block-button .blockspare-button:visited{background-color:#ea4b50}.blockspare-c4d1d44e-39f8-4 .blockspare-block-button .blockspare-button:focus{background-color:#ea4b50}.blockspare-c4d1d44e-39f8-4 .blockspare-block-button span,.blockspare-c4d1d44e-39f8-4 .blockspare-block-button i{font-size:16px}.blockspare-c4d1d44e-39f8-4 .blockspare-block-button a{padding-top:12px;padding-bottom:12px;padding-right:22px;padding-left:22px}@media screen and (max-width:1025px){.blockspare-c4d1d44e-39f8-4 .blockspare-block-button span,.blockspare-c4d1d44e-39f8-4 .blockspare-block-button i{font-size:14px}}@media screen and (max-width:768px){.blockspare-c4d1d44e-39f8-4 .blockspare-block-button span,.blockspare-c4d1d44e-39f8-4 .blockspare-block-button i{font-size:14px}}</style><div class="blockspare-block-button"><a href="#" class="blockspare-button blockspare-button-shape-circular blockspare-button-size-small hover-style-4"><span>Download</span></a></div></div>
							<!-- /wp:blockspare/blockspare-buttons -->',
							'imagePath'    => 'buttons',
						),
						array(
							'type'     => 'block',
							'item'     => ['Button'],
							'key'      => 'bs_button_5',
							'name'     => esc_html__( 'Button 5', 'blockspare' ),
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