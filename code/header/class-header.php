<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'Blockspare_Header_Template_Block' ) ) {

	class Blockspare_Header_Template_Block extends Blockspare_Import_Block_Base{
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
						'type'     => 'header',
						'item'     => ['Header'],
						'key'      => 'bs_header_1',
						'name'     => esc_html__( 'Agency Header', 'blockspare' ),
						'blockLink'=>"https://blockspare.com/demo/default/agency/",
						'content'  => '<!-- wp:group {"align":"wide","style":{"border":{"bottom":{"color":"#cccccc","width":"1px"}},"spacing":{"padding":{"top":"30px","bottom":"30px"}}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
                        <div class="wp-block-group alignwide has-base-background-color has-background" style="border-bottom-color:#cccccc;border-bottom-width:1px;padding-top:30px;padding-bottom:30px"><!-- wp:columns {"verticalAlignment":"center","align":"wide"} -->
                        <div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"70%"} -->
                        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:70%"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                        <div class="wp-block-group"><!-- wp:site-logo {"shouldSyncIcon":true} /-->
                        
                        <!-- wp:navigation {"ref":662,"style":{"typography":{"fontStyle":"normal","fontWeight":"500","textTransform":"capitalize"}}} /--></div>
                        <!-- /wp:group --></div>
                        <!-- /wp:column -->
                        
                        <!-- wp:column {"verticalAlignment":"center","width":"30%"} -->
                        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:30%"><!-- wp:group {"layout":{"type":"constrained","justifyContent":"right"}} -->
                        <div class="wp-block-group"><!-- wp:blockspare/blockspare-buttons {"sectionAlignment":"right","uniqueClass":"blockspare-758c16ad-5210-4","buttonBackgroundColor":"#2e947d","buttonShape":"blockspare-button-shape-square","marginTop":0,"marginBottom":0} -->
                        <div class="wp-block-blockspare-blockspare-buttons blockspare-758c16ad-5210-4 blockspare-block-button-wrap" blockspare-animation=""><style>.blockspare-758c16ad-5210-4 .blockspare-block-button{text-align:right;margin-top:0px;margin-bottom:0px;margin-left:0px;margin-right:0px}.blockspare-758c16ad-5210-4 .blockspare-block-button span{color:#fff;border-width:2px}.blockspare-758c16ad-5210-4 .blockspare-block-button .blockspare-button{background-color:#2e947d}.blockspare-758c16ad-5210-4 .blockspare-block-button .blockspare-button:visited{background-color:#2e947d}.blockspare-758c16ad-5210-4 .blockspare-block-button .blockspare-button:focus{background-color:#2e947d}.blockspare-758c16ad-5210-4 .blockspare-block-button span,.blockspare-758c16ad-5210-4 .blockspare-block-button i{font-size:16px}.blockspare-758c16ad-5210-4 .blockspare-block-button a{padding-top:12px;padding-bottom:12px;padding-right:22px;padding-left:22px}@media screen and (max-width:1025px){.blockspare-758c16ad-5210-4 .blockspare-block-button span,.blockspare-758c16ad-5210-4 .blockspare-block-button i{font-size:14px}}@media screen and (max-width:768px){.blockspare-758c16ad-5210-4 .blockspare-block-button span,.blockspare-758c16ad-5210-4 .blockspare-block-button i{font-size:14px}}</style><div class="blockspare-block-button"><a class="blockspare-button blockspare-button-shape-square blockspare-button-size-small"><span>Get Started</span></a></div></div>
                        <!-- /wp:blockspare/blockspare-buttons --></div>
                        <!-- /wp:group --></div>
                        <!-- /wp:column --></div>
                        <!-- /wp:columns --></div>
                        <!-- /wp:group -->',
						'imagePath'    => 'header',
                    ),
					array(
						'type'     => 'header',
						'item'     => ['Header'],
						'key'      => 'bs_header_2',
						'name'     => esc_html__( 'Lawyer Header', 'blockspare' ),
						'blockLink'=>"https://blockspare.com/demo/default/lawyer/",
						'content'  => '<!-- wp:blockspare/blockspare-container {"paddingTop":0,"paddingRight":0,"paddingBottom":0,"paddingLeft":0,"marginTop":0,"marginBottom":0,"uniqueClass":"blockspare-8e37aa95-6584-4","backGroundColor":"#f6f6f6"} -->
                        <div class="wp-block-blockspare-blockspare-container alignfull blockspare-8e37aa95-6584-4" blockspare-animation=""><style>.blockspare-8e37aa95-6584-4 > .blockspare-block-container-wrapper{background-color:#f6f6f6;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px;border-radius:0}.blockspare-8e37aa95-6584-4 .blockspare-image-wrap{background-image:none}</style><div class="blockspare-block-container-wrapper blockspare-hover-item"><div class="blockspare-container-background blockspare-image-wrap has-background-opacity-100 has-background-opacity"></div><div class="blockspare-container"><div class="blockspare-inner-blocks blockspare-inner-wrapper-blocks"><!-- wp:group {"style":{"border":{"bottom":{"color":"#cccccc","width":"1px"}},"color":{"background":"#f5f5ef"}},"layout":{"type":"constrained"}} -->
                        <div class="wp-block-group has-background" style="border-bottom-color:#cccccc;border-bottom-width:1px;background-color:#f5f5ef"><!-- wp:columns {"verticalAlignment":"center","align":"wide"} -->
                        <div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"70%"} -->
                        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:70%"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                        <div class="wp-block-group"><!-- wp:site-logo {"shouldSyncIcon":true} /-->
                        
                        <!-- wp:navigation {"ref":1895,"style":{"typography":{"fontStyle":"normal","fontWeight":"500","textTransform":"capitalize"}}} /--></div>
                        <!-- /wp:group --></div>
                        <!-- /wp:column -->
                        
                        <!-- wp:column {"verticalAlignment":"center","width":"30%"} -->
                        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:30%"><!-- wp:group {"layout":{"type":"constrained","justifyContent":"right"}} -->
                        <div class="wp-block-group"><!-- wp:blockspare/blockspare-buttons {"sectionAlignment":"right","uniqueClass":"blockspare-c87b3294-bd44-4","buttonText":"Take Appointment","buttonBackgroundColor":"#b69d74","buttonStyle":"solid","borderColor":"#b69d74"} -->
                        <div class="wp-block-blockspare-blockspare-buttons blockspare-c87b3294-bd44-4 blockspare-block-button-wrap" blockspare-animation=""><style>.blockspare-c87b3294-bd44-4 .blockspare-block-button{text-align:right;margin-top:30px;margin-bottom:30px;margin-left:0px;margin-right:0px}.blockspare-c87b3294-bd44-4 .blockspare-block-button span{color:#404040}.blockspare-c87b3294-bd44-4 .blockspare-button{border-color:#b69d74;border-style:solid;border-width:2px}.blockspare-c87b3294-bd44-4 .blockspare-block-button .blockspare-button{background-color:transparent}.blockspare-c87b3294-bd44-4 .blockspare-block-button span,.blockspare-c87b3294-bd44-4 .blockspare-block-button i{font-size:16px}.blockspare-c87b3294-bd44-4 .blockspare-block-button a{padding-top:12px;padding-bottom:12px;padding-right:22px;padding-left:22px}@media screen and (max-width:1025px){.blockspare-c87b3294-bd44-4 .blockspare-block-button span,.blockspare-c87b3294-bd44-4 .blockspare-block-button i{font-size:14px}}@media screen and (max-width:768px){.blockspare-c87b3294-bd44-4 .blockspare-block-button span,.blockspare-c87b3294-bd44-4 .blockspare-block-button i{font-size:14px}}</style><div class="blockspare-block-button"><a class="blockspare-button blockspare-button-shape-rounded blockspare-button-size-small"><span>Take Appointment</span></a></div></div>
                        <!-- /wp:blockspare/blockspare-buttons --></div>
                        <!-- /wp:group --></div>
                        <!-- /wp:column --></div>
                        <!-- /wp:columns --></div>
                        <!-- /wp:group --></div></div></div></div>
                        <!-- /wp:blockspare/blockspare-container -->',
						'imagePath'    => 'header',
                    ),
					array(
						'type'     => 'header',
						'item'     => ['Header'],
						'key'      => 'bs_header_3',
						'name'     => esc_html__( 'Restaurant Header', 'blockspare' ),
						'blockLink'=>"https://blockspare.com/demo/default/restaurant/",
						'content'  => '<!-- wp:blockspare/blockspare-container {"paddingTop":0,"paddingRight":0,"paddingBottom":0,"paddingLeft":0,"marginTop":0,"marginBottom":0,"uniqueClass":"blockspare-be6a4281-9221-4"} -->
                        <div class="wp-block-blockspare-blockspare-container alignfull blockspare-be6a4281-9221-4" blockspare-animation=""><style>.blockspare-be6a4281-9221-4 > .blockspare-block-container-wrapper{background-color:#f9f9f9;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px;border-radius:0}.blockspare-be6a4281-9221-4 .blockspare-image-wrap{background-image:none}</style><div class="blockspare-block-container-wrapper blockspare-hover-item"><div class="blockspare-container-background blockspare-image-wrap has-background-opacity-100 has-background-opacity"></div><div class="blockspare-container"><div class="blockspare-inner-blocks blockspare-inner-wrapper-blocks"><!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"10px","bottom":"10px"}}},"backgroundColor":"contrast","layout":{"type":"constrained"}} -->
                        <div class="wp-block-group alignfull has-contrast-background-color has-background" style="padding-top:10px;padding-bottom:10px"><!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} -->
                        <div class="wp-block-columns alignwide are-vertically-aligned-center" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} -->
                        <div class="wp-block-column is-vertically-aligned-center" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:navigation {"ref":3049,"textColor":"base","style":{"typography":{"textTransform":"capitalize"}},"fontSize":"small"} /--></div>
                        <!-- /wp:column -->
                        
                        <!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} -->
                        <div class="wp-block-column is-vertically-aligned-center" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:blockspare/blockspare-social-links {"sectionAlignment":"right","uniqueClass":"blockspare-bdbfbd86-96f3-4","iconColorOption":"custom","customfontColorOption":"#000000","custombackgroundColorOption":"#ffffff","buttonShapes":"blockspare-social-icon-rounded","marginTop":0,"marginBottom":0} -->
                        <div class="wp-block-blockspare-blockspare-social-links blockspare-bdbfbd86-96f3-4 blockspare-socaillink-block blockspare-sociallinks-right" blockspare-animation=""><style>.blockspare-bdbfbd86-96f3-4 .blockspare-social-wrapper{text-align:right;margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px}.blockspare-bdbfbd86-96f3-4 .blockspare-social-wrapper .blockspare-social-links a .blockspare-social-icons{color:#000000;background-color:#ffffff}</style><div class="blockspare-social-wrapper"><ul class="blockspare-social-links custom blockspare-social-icon-rounded blockspare-social-icon-small blockspare-icon-only blockspare-social-icon-solid blockspare-social-links-horizontal"><li class="blockspare-hover-item"><a href="https://facebook.com" class="" target="_blank" rel="noopener noreferrer"><span class="blockspare-social-icons"><i class="fab fa-facebook-f"></i> <span class="screen-reader-text">Facebook</span></span></a></li><li class="blockspare-hover-item"><a href="https://twitter.com" class="" target="_blank" rel="noopener noreferrer"><span class="blockspare-social-icons"><i class="fab fa-twitter"></i><span class="screen-reader-text">Twitter</span></span></a></li><li class="blockspare-hover-item"><a href="https://instagram.com" class="" target="_blank" rel="noopener noreferrer"><span class="blockspare-social-icons"><i class="fab fa-instagram"></i><span class="screen-reader-text">Instagram</span></span></a></li></ul></div></div>
                        <!-- /wp:blockspare/blockspare-social-links --></div>
                        <!-- /wp:column --></div>
                        <!-- /wp:columns --></div>
                        <!-- /wp:group -->
                        
                        <!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"30px","bottom":"30px"}}},"layout":{"type":"constrained"}} -->
                        <div class="wp-block-group alignwide" style="padding-top:30px;padding-bottom:30px"><!-- wp:columns {"verticalAlignment":"center","align":"wide"} -->
                        <div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"33.33%"} -->
                        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.33%"><!-- wp:site-logo {"width":232,"shouldSyncIcon":true} /--></div>
                        <!-- /wp:column -->
                        
                        <!-- wp:column {"verticalAlignment":"center","width":"66.66%"} -->
                        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%"><!-- wp:navigation {"ref":2814,"customTextColor":"#404040","overlayBackgroundColor":"base","customOverlayTextColor":"#404040","layout":{"type":"flex","justifyContent":"right"},"style":{"typography":{"fontStyle":"normal","fontWeight":"600","textTransform":"uppercase"}}} /--></div>
                        <!-- /wp:column --></div>
                        <!-- /wp:columns --></div>
                        <!-- /wp:group --></div></div></div></div>
                        <!-- /wp:blockspare/blockspare-container -->',
						'imagePath'    => 'header',
                    ),
					array(
						'type'     => 'header',
						'item'     => ['Header'],
						'key'      => 'bs_header_4',
						'name'     => esc_html__( 'Apps Header', 'blockspare' ),
						'blockLink'=>"https://blockspare.com/demo/default/apps/",
						'content'  => '<!-- wp:group {"align":"wide","style":{"border":{"bottom":{"color":"#cccccc","width":"1px"}},"spacing":{"padding":{"top":"30px","bottom":"30px"}}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
                        <div class="wp-block-group alignwide has-base-background-color has-background" style="border-bottom-color:#cccccc;border-bottom-width:1px;padding-top:30px;padding-bottom:30px"><!-- wp:columns {"verticalAlignment":"center","align":"wide"} -->
                        <div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"70%"} -->
                        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:70%"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                        <div class="wp-block-group"><!-- wp:site-logo {"shouldSyncIcon":true} /-->
                        
                        <!-- wp:navigation {"ref":227,"style":{"typography":{"fontStyle":"normal","fontWeight":"700","textTransform":"capitalize"}}} /--></div>
                        <!-- /wp:group --></div>
                        <!-- /wp:column -->
                        
                        <!-- wp:column {"verticalAlignment":"center","width":"30%"} -->
                        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:30%"><!-- wp:group {"layout":{"type":"constrained","justifyContent":"right"}} -->
                        <div class="wp-block-group"><!-- wp:blockspare/blockspare-buttons {"sectionAlignment":"right","uniqueClass":"blockspare-8abca1bf-fbe0-4","buttonBackgroundColor":"#ea4b50","buttonShape":"blockspare-button-shape-circular","buttonFontFamily":"Poppins","buttonFontWeight":"400","buttonLoadGoogleFonts":true,"marginTop":0,"marginBottom":0} -->
                        <div class="wp-block-blockspare-blockspare-buttons blockspare-8abca1bf-fbe0-4 blockspare-block-button-wrap" blockspare-animation=""><style>.blockspare-8abca1bf-fbe0-4 .blockspare-block-button{text-align:right;margin-top:0px;margin-bottom:0px;margin-left:0px;margin-right:0px}.blockspare-8abca1bf-fbe0-4 .blockspare-block-button span{color:#fff;border-width:2px;font-family:Poppins;font-weight:400}.blockspare-8abca1bf-fbe0-4 .blockspare-block-button .blockspare-button{background-color:#ea4b50}.blockspare-8abca1bf-fbe0-4 .blockspare-block-button .blockspare-button:visited{background-color:#ea4b50}.blockspare-8abca1bf-fbe0-4 .blockspare-block-button .blockspare-button:focus{background-color:#ea4b50}.blockspare-8abca1bf-fbe0-4 .blockspare-block-button span,.blockspare-8abca1bf-fbe0-4 .blockspare-block-button i{font-size:16px}.blockspare-8abca1bf-fbe0-4 .blockspare-block-button a{padding-top:12px;padding-bottom:12px;padding-right:22px;padding-left:22px}@media screen and (max-width:1025px){.blockspare-8abca1bf-fbe0-4 .blockspare-block-button span,.blockspare-8abca1bf-fbe0-4 .blockspare-block-button i{font-size:14px}}@media screen and (max-width:768px){.blockspare-8abca1bf-fbe0-4 .blockspare-block-button span,.blockspare-8abca1bf-fbe0-4 .blockspare-block-button i{font-size:14px}}</style><div class="blockspare-block-button"><a class="blockspare-button blockspare-button-shape-circular blockspare-button-size-small"><span>Get Started</span></a></div></div>
                        <!-- /wp:blockspare/blockspare-buttons --></div>
                        <!-- /wp:group --></div>
                        <!-- /wp:column --></div>
                        <!-- /wp:columns --></div>
                        <!-- /wp:group -->',
						'imagePath'    => 'header',
                    ),
					array(
						'type'     => 'header',
						'item'     => ['Header'],
						'key'      => 'bs_header_5',
						'name'     => esc_html__( 'Education Header', 'blockspare' ),
						'blockLink'=>"https://blockspare.com/demo/default/education/",
						'content'  => '<!-- wp:blockspare/blockspare-container {"paddingTop":0,"paddingRight":0,"paddingBottom":0,"paddingLeft":0,"marginTop":0,"marginBottom":0,"uniqueClass":"blockspare-1a73d078-1a32-4","imgURL":"https://blockspare.com/demo/default/education/wp-content/uploads/sites/6/2021/09/banner4.jpg","imgID":709,"imgAlt":"","opacityRatio":30,"backGroundColor":"#000000"} -->
                        <div class="wp-block-blockspare-blockspare-container alignfull blockspare-1a73d078-1a32-4" blockspare-animation=""><style>.blockspare-1a73d078-1a32-4 > .blockspare-block-container-wrapper{background-color:#000000;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px;border-radius:0}.blockspare-1a73d078-1a32-4 .blockspare-image-wrap{background-image:url(https://blockspare.com/demo/default/education/wp-content/uploads/sites/6/2021/09/banner4.jpg)}</style><div class="blockspare-block-container-wrapper blockspare-hover-item"><div class="blockspare-container-background blockspare-image-wrap has-background-opacity-30 has-background-opacity"></div><div class="blockspare-container"><div class="blockspare-inner-blocks blockspare-inner-wrapper-blocks"><!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"10px","bottom":"10px"}}},"backgroundColor":"contrast","layout":{"type":"constrained"}} -->
                        <div class="wp-block-group alignfull has-contrast-background-color has-background" style="padding-top:10px;padding-bottom:10px"><!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} -->
                        <div class="wp-block-columns alignwide are-vertically-aligned-center" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} -->
                        <div class="wp-block-column is-vertically-aligned-center" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:navigation {"ref":2257,"textColor":"base","style":{"typography":{"textTransform":"capitalize"}},"fontSize":"small"} /--></div>
                        <!-- /wp:column -->
                        
                        <!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} -->
                        <div class="wp-block-column is-vertically-aligned-center" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:blockspare/blockspare-social-links {"sectionAlignment":"right","uniqueClass":"blockspare-f133f2d7-4c04-4","buttonFills":"blockspare-social-icon-none","iconColorOption":"custom","customfontColorOption":"#ffffff","custombackgroundColorOption":"#ffffff","buttonShapes":"blockspare-social-icon-rounded","marginTop":0,"marginBottom":0} -->
                        <div class="wp-block-blockspare-blockspare-social-links blockspare-f133f2d7-4c04-4 blockspare-socaillink-block blockspare-sociallinks-right" blockspare-animation=""><style>.blockspare-f133f2d7-4c04-4 .blockspare-social-wrapper{text-align:right;margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px}.blockspare-f133f2d7-4c04-4 .blockspare-social-wrapper .blockspare-social-links a .blockspare-social-icons{color:#ffffff}</style><div class="blockspare-social-wrapper"><ul class="blockspare-social-links custom blockspare-social-icon-rounded blockspare-social-icon-small blockspare-icon-only blockspare-social-icon-none blockspare-social-links-horizontal"><li class="blockspare-hover-item"><a href="https://facebook.com" class="" target="_blank" rel="noopener noreferrer"><span class="blockspare-social-icons"><i class="fab fa-facebook-f"></i> <span class="screen-reader-text">Facebook</span></span></a></li><li class="blockspare-hover-item"><a href="https://twitter.com" class="" target="_blank" rel="noopener noreferrer"><span class="blockspare-social-icons"><i class="fab fa-twitter"></i><span class="screen-reader-text">Twitter</span></span></a></li><li class="blockspare-hover-item"><a href="https://instagram.com" class="" target="_blank" rel="noopener noreferrer"><span class="blockspare-social-icons"><i class="fab fa-instagram"></i><span class="screen-reader-text">Instagram</span></span></a></li></ul></div></div>
                        <!-- /wp:blockspare/blockspare-social-links --></div>
                        <!-- /wp:column --></div>
                        <!-- /wp:columns --></div>
                        <!-- /wp:group -->
                        
                        <!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"50px","bottom":"50px"}}},"layout":{"type":"constrained"}} -->
                        <div class="wp-block-group alignwide" style="padding-top:50px;padding-bottom:50px"><!-- wp:site-logo {"width":148,"shouldSyncIcon":true,"align":"center"} /--></div>
                        <!-- /wp:group -->
                        
                        <!-- wp:group {"style":{"color":{"background":"#275be2"},"spacing":{"padding":{"top":"15px","right":"15px","bottom":"15px","left":"15px"}}},"layout":{"type":"constrained"}} -->
                        <div class="wp-block-group has-background" style="background-color:#275be2;padding-top:15px;padding-right:15px;padding-bottom:15px;padding-left:15px"><!-- wp:navigation {"ref":2255,"textColor":"base","align":"full","layout":{"type":"flex","justifyContent":"center","orientation":"horizontal"},"style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} /--></div>
                        <!-- /wp:group --></div></div></div></div>
                        <!-- /wp:blockspare/blockspare-container -->',
						'imagePath'    => 'header',
                    ),
					array(
						'type'     => 'header',
						'item'     => ['Header'],
						'key'      => 'bs_header_6',
						'name'     => esc_html__( 'Fitness Header', 'blockspare' ),
						'blockLink'=>"https://blockspare.com/demo/default/fitness/",
						'content'  => '<!-- wp:blockspare/blockspare-container {"paddingTop":0,"paddingRight":0,"paddingBottom":0,"paddingLeft":0,"marginTop":0,"marginBottom":0,"uniqueClass":"blockspare-7f2036ec-2fb4-4","imgURL":"https://blockspare.com/demo/default/fitness/wp-content/uploads/sites/7/2021/10/ROPE.jpg","imgID":571,"imgAlt":"","opacityRatio":30,"backGroundColor":"#000000"} -->
                        <div class="wp-block-blockspare-blockspare-container alignfull blockspare-7f2036ec-2fb4-4" blockspare-animation=""><style>.blockspare-7f2036ec-2fb4-4 > .blockspare-block-container-wrapper{background-color:#000000;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px;border-radius:0}.blockspare-7f2036ec-2fb4-4 .blockspare-image-wrap{background-image:url(https://blockspare.com/demo/default/fitness/wp-content/uploads/sites/7/2021/10/ROPE.jpg)}</style><div class="blockspare-block-container-wrapper blockspare-hover-item"><div class="blockspare-container-background blockspare-image-wrap has-background-opacity-30 has-background-opacity"></div><div class="blockspare-container"><div class="blockspare-inner-blocks blockspare-inner-wrapper-blocks"><!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"10px","bottom":"10px"}}},"backgroundColor":"contrast","layout":{"type":"constrained"}} -->
                        <div class="wp-block-group alignfull has-contrast-background-color has-background" style="padding-top:10px;padding-bottom:10px"><!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} -->
                        <div class="wp-block-columns alignwide are-vertically-aligned-center" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} -->
                        <div class="wp-block-column is-vertically-aligned-center" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:navigation {"ref":1136,"textColor":"base","style":{"typography":{"textTransform":"capitalize"}},"fontSize":"small"} /--></div>
                        <!-- /wp:column -->
                        
                        <!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} -->
                        <div class="wp-block-column is-vertically-aligned-center" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:blockspare/blockspare-social-links {"sectionAlignment":"right","uniqueClass":"blockspare-3c25d9cd-4fc6-4","buttonFills":"blockspare-social-icon-none","iconColorOption":"custom","customfontColorOption":"#ffffff","custombackgroundColorOption":"#ffffff","buttonShapes":"blockspare-social-icon-rounded","marginTop":0,"marginBottom":0} -->
                        <div class="wp-block-blockspare-blockspare-social-links blockspare-3c25d9cd-4fc6-4 blockspare-socaillink-block blockspare-sociallinks-right" blockspare-animation=""><style>.blockspare-3c25d9cd-4fc6-4 .blockspare-social-wrapper{text-align:right;margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px}.blockspare-3c25d9cd-4fc6-4 .blockspare-social-wrapper .blockspare-social-links a .blockspare-social-icons{color:#ffffff}</style><div class="blockspare-social-wrapper"><ul class="blockspare-social-links custom blockspare-social-icon-rounded blockspare-social-icon-small blockspare-icon-only blockspare-social-icon-none blockspare-social-links-horizontal"><li class="blockspare-hover-item"><a href="https://facebook.com" class="" target="_blank" rel="noopener noreferrer"><span class="blockspare-social-icons"><i class="fab fa-facebook-f"></i> <span class="screen-reader-text">Facebook</span></span></a></li><li class="blockspare-hover-item"><a href="https://twitter.com" class="" target="_blank" rel="noopener noreferrer"><span class="blockspare-social-icons"><i class="fab fa-twitter"></i><span class="screen-reader-text">Twitter</span></span></a></li><li class="blockspare-hover-item"><a href="https://instagram.com" class="" target="_blank" rel="noopener noreferrer"><span class="blockspare-social-icons"><i class="fab fa-instagram"></i><span class="screen-reader-text">Instagram</span></span></a></li></ul></div></div>
                        <!-- /wp:blockspare/blockspare-social-links --></div>
                        <!-- /wp:column --></div>
                        <!-- /wp:columns --></div>
                        <!-- /wp:group -->
                        
                        <!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"50px","bottom":"50px"}}},"layout":{"type":"constrained"}} -->
                        <div class="wp-block-group alignwide" style="padding-top:50px;padding-bottom:50px"><!-- wp:site-logo {"width":197,"shouldSyncIcon":true,"align":"center"} /--></div>
                        <!-- /wp:group -->
                        
                        <!-- wp:group {"style":{"color":{"background":"#e42024"},"spacing":{"padding":{"top":"15px","right":"15px","bottom":"15px","left":"15px"}}},"layout":{"type":"constrained"}} -->
                        <div class="wp-block-group has-background" style="background-color:#e42024;padding-top:15px;padding-right:15px;padding-bottom:15px;padding-left:15px"><!-- wp:columns {"verticalAlignment":"center","align":"wide"} -->
                        <div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"75%"} -->
                        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:75%"><!-- wp:navigation {"ref":1135,"textColor":"base","align":"full","layout":{"type":"flex","justifyContent":"left","orientation":"horizontal"},"style":{"spacing":{"blockGap":"var:preset|spacing|30"},"typography":{"textTransform":"capitalize","fontStyle":"normal","fontWeight":"600"}}} /--></div>
                        <!-- /wp:column -->
                        
                        <!-- wp:column {"verticalAlignment":"center","width":"25%"} -->
                        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:25%"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"layout":{"type":"constrained"}} -->
                        <div class="wp-block-group" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:blockspare/search {"align":"wide","searchStyle":"icon","sectionAlign":"right","iconColor":"#ffffff","uniqueClass":"blockspare-60eab4b2-46b6-4"} /--></div>
                        <!-- /wp:group --></div>
                        <!-- /wp:column --></div>
                        <!-- /wp:columns --></div>
                        <!-- /wp:group --></div></div></div></div>
                        <!-- /wp:blockspare/blockspare-container -->',
						'imagePath'    => 'header',
                    ),
					array(
						'type'     => 'header',
						'item'     => ['Header'],
						'key'      => 'bs_header_7',
						'name'     => esc_html__( 'Real Estate Header', 'blockspare' ),
						'blockLink'=>"https://blockspare.com/demo/default/real-eastate/",
						'content'  => '<!-- wp:blockspare/blockspare-container {"paddingTop":0,"paddingRight":0,"paddingBottom":0,"paddingLeft":0,"marginTop":0,"marginBottom":0,"uniqueClass":"blockspare-09e39e4c-a1c0-4","imgURL":"https://blockspare.com/demo/default/real-estate/wp-content/uploads/sites/8/2021/09/1.jpg","imgID":76,"imgAlt":"","opacityRatio":30,"backGroundColor":"#000000"} -->
                        <div class="wp-block-blockspare-blockspare-container alignfull blockspare-09e39e4c-a1c0-4" blockspare-animation=""><style>.blockspare-09e39e4c-a1c0-4 > .blockspare-block-container-wrapper{background-color:#000000;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px;border-radius:0}.blockspare-09e39e4c-a1c0-4 .blockspare-image-wrap{background-image:url(https://blockspare.com/demo/default/real-estate/wp-content/uploads/sites/8/2021/09/1.jpg)}</style><div class="blockspare-block-container-wrapper blockspare-hover-item"><div class="blockspare-container-background blockspare-image-wrap has-background-opacity-30 has-background-opacity"></div><div class="blockspare-container"><div class="blockspare-inner-blocks blockspare-inner-wrapper-blocks"><!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"10px","bottom":"10px"}}},"backgroundColor":"contrast","layout":{"type":"constrained"}} -->
                        <div class="wp-block-group alignfull has-contrast-background-color has-background" style="padding-top:10px;padding-bottom:10px"><!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} -->
                        <div class="wp-block-columns alignwide are-vertically-aligned-center" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} -->
                        <div class="wp-block-column is-vertically-aligned-center" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:navigation {"ref":2040,"textColor":"base","style":{"typography":{"textTransform":"capitalize"}},"fontSize":"small"} /--></div>
                        <!-- /wp:column -->
                        
                        <!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} -->
                        <div class="wp-block-column is-vertically-aligned-center" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:blockspare/blockspare-social-links {"sectionAlignment":"right","uniqueClass":"blockspare-be293740-22a6-4","buttonFills":"blockspare-social-icon-none","iconColorOption":"custom","customfontColorOption":"#ffffff","custombackgroundColorOption":"#ffffff","buttonShapes":"blockspare-social-icon-rounded","marginTop":0,"marginBottom":0} -->
                        <div class="wp-block-blockspare-blockspare-social-links blockspare-be293740-22a6-4 blockspare-socaillink-block blockspare-sociallinks-right" blockspare-animation=""><style>.blockspare-be293740-22a6-4 .blockspare-social-wrapper{text-align:right;margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px}.blockspare-be293740-22a6-4 .blockspare-social-wrapper .blockspare-social-links a .blockspare-social-icons{color:#ffffff}</style><div class="blockspare-social-wrapper"><ul class="blockspare-social-links custom blockspare-social-icon-rounded blockspare-social-icon-small blockspare-icon-only blockspare-social-icon-none blockspare-social-links-horizontal"><li class="blockspare-hover-item"><a href="https://facebook.com" class="" target="_blank" rel="noopener noreferrer"><span class="blockspare-social-icons"><i class="fab fa-facebook-f"></i> <span class="screen-reader-text">Facebook</span></span></a></li><li class="blockspare-hover-item"><a href="https://twitter.com" class="" target="_blank" rel="noopener noreferrer"><span class="blockspare-social-icons"><i class="fab fa-twitter"></i><span class="screen-reader-text">Twitter</span></span></a></li><li class="blockspare-hover-item"><a href="https://instagram.com" class="" target="_blank" rel="noopener noreferrer"><span class="blockspare-social-icons"><i class="fab fa-instagram"></i><span class="screen-reader-text">Instagram</span></span></a></li></ul></div></div>
                        <!-- /wp:blockspare/blockspare-social-links --></div>
                        <!-- /wp:column --></div>
                        <!-- /wp:columns --></div>
                        <!-- /wp:group -->
                        
                        <!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"50px","bottom":"50px"}}},"layout":{"type":"constrained"}} -->
                        <div class="wp-block-group alignwide" style="padding-top:50px;padding-bottom:50px"><!-- wp:columns {"verticalAlignment":"center","align":"wide"} -->
                        <div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"33.33%"} -->
                        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.33%"><!-- wp:site-logo {"width":273,"shouldSyncIcon":true} /--></div>
                        <!-- /wp:column -->
                        
                        <!-- wp:column {"verticalAlignment":"center","width":"66.66%"} -->
                        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%"><!-- wp:image {"align":"right","id":1158,"sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":["rgb(0, 0, 0)","#efb83e"]}}} -->
                        <figure class="wp-block-image alignright size-full"><img src="https://blockspare.com/demo/default/fitness/wp-content/uploads/sites/7/2023/06/banner-promos-2.jpeg" alt="" class="wp-image-1158"/></figure>
                        <!-- /wp:image --></div>
                        <!-- /wp:column --></div>
                        <!-- /wp:columns --></div>
                        <!-- /wp:group -->
                        
                        <!-- wp:group {"style":{"color":{"background":"#05233c"},"spacing":{"padding":{"top":"15px","right":"15px","bottom":"15px","left":"15px"}}},"layout":{"type":"constrained"}} -->
                        <div class="wp-block-group has-background" style="background-color:#05233c;padding-top:15px;padding-right:15px;padding-bottom:15px;padding-left:15px"><!-- wp:navigation {"ref":2038,"textColor":"base","align":"full","layout":{"type":"flex","justifyContent":"left","orientation":"horizontal"},"style":{"spacing":{"blockGap":"var:preset|spacing|30"},"typography":{"textTransform":"capitalize","fontStyle":"normal","fontWeight":"600"}}} /--></div>
                        <!-- /wp:group --></div></div></div></div>
                        <!-- /wp:blockspare/blockspare-container -->',
						'imagePath'    => 'header',
                    ),
					array(
						'type'     => 'header',
						'item'     => ['Header'],
						'key'      => 'bs_header_8',
						'name'     => esc_html__( 'Medical Header', 'blockspare' ),
						'blockLink'=>"https://blockspare.com/demo/default/medical/",
						'content'  => '<!-- wp:group {"align":"wide","style":{"border":{"top":{"color":"#cccccc","width":"1px"},"bottom":{"color":"#cccccc","width":"1px"}},"spacing":{"padding":{"top":"10px","bottom":"10px"}},"color":{"gradient":"linear-gradient(180deg,rgb(250,250,250) 0%,rgb(240,240,240) 100%)"}},"layout":{"type":"constrained"}} -->
                        <div class="wp-block-group alignwide has-background" style="border-top-color:#cccccc;border-top-width:1px;border-bottom-color:#cccccc;border-bottom-width:1px;background:linear-gradient(180deg,rgb(250,250,250) 0%,rgb(240,240,240) 100%);padding-top:10px;padding-bottom:10px"><!-- wp:columns {"verticalAlignment":"center","align":"wide"} -->
                        <div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"25%"} -->
                        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:25%"><!-- wp:site-logo {"width":221,"shouldSyncIcon":true,"align":"left"} /--></div>
                        <!-- /wp:column -->
                        
                        <!-- wp:column {"verticalAlignment":"center","width":"75%"} -->
                        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:75%"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"right","orientation":"horizontal"}} -->
                        <div class="wp-block-group"><!-- wp:navigation {"ref":1372,"layout":{"type":"flex","justifyContent":"right"},"style":{"typography":{"fontStyle":"normal","fontWeight":"500","textTransform":"capitalize"}}} /-->
                        
                        <!-- wp:blockspare/blockspare-buttons {"sectionAlignment":"right","uniqueClass":"blockspare-b4baee32-ca70-4","buttonBackgroundColor":"#009abb"} -->
                        <div class="wp-block-blockspare-blockspare-buttons blockspare-b4baee32-ca70-4 blockspare-block-button-wrap" blockspare-animation=""><style>.blockspare-b4baee32-ca70-4 .blockspare-block-button{text-align:right;margin-top:30px;margin-bottom:30px;margin-left:0px;margin-right:0px}.blockspare-b4baee32-ca70-4 .blockspare-block-button span{color:#fff;border-width:2px}.blockspare-b4baee32-ca70-4 .blockspare-block-button .blockspare-button{background-color:#009abb}.blockspare-b4baee32-ca70-4 .blockspare-block-button .blockspare-button:visited{background-color:#009abb}.blockspare-b4baee32-ca70-4 .blockspare-block-button .blockspare-button:focus{background-color:#009abb}.blockspare-b4baee32-ca70-4 .blockspare-block-button span,.blockspare-b4baee32-ca70-4 .blockspare-block-button i{font-size:16px}.blockspare-b4baee32-ca70-4 .blockspare-block-button a{padding-top:12px;padding-bottom:12px;padding-right:22px;padding-left:22px}@media screen and (max-width:1025px){.blockspare-b4baee32-ca70-4 .blockspare-block-button span,.blockspare-b4baee32-ca70-4 .blockspare-block-button i{font-size:14px}}@media screen and (max-width:768px){.blockspare-b4baee32-ca70-4 .blockspare-block-button span,.blockspare-b4baee32-ca70-4 .blockspare-block-button i{font-size:14px}}</style><div class="blockspare-block-button"><a class="blockspare-button blockspare-button-shape-rounded blockspare-button-size-small"><span>Get Started</span></a></div></div>
                        <!-- /wp:blockspare/blockspare-buttons --></div>
                        <!-- /wp:group --></div>
                        <!-- /wp:column --></div>
                        <!-- /wp:columns --></div>
                        <!-- /wp:group -->',
						'imagePath'    => 'header',
                    ),
					array(
						'type'     => 'header',
						'item'     => ['Header'],
						'key'      => 'bs_header_9',
						'name'     => esc_html__( 'Charity Header', 'blockspare' ),
						'blockLink'=>"https://blockspare.com/demo/default/charity/",
						'content'  => '<!-- wp:blockspare/blockspare-container {"paddingTop":0,"paddingRight":0,"paddingBottom":0,"paddingLeft":0,"marginTop":0,"marginBottom":0,"uniqueClass":"blockspare-7b8453c2-55eb-4","backGroundColor":"#000000"} -->
                        <div class="wp-block-blockspare-blockspare-container alignfull blockspare-7b8453c2-55eb-4" blockspare-animation=""><style>.blockspare-7b8453c2-55eb-4 > .blockspare-block-container-wrapper{background-color:#000000;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px;border-radius:0}.blockspare-7b8453c2-55eb-4 .blockspare-image-wrap{background-image:none}</style><div class="blockspare-block-container-wrapper blockspare-hover-item"><div class="blockspare-container-background blockspare-image-wrap has-background-opacity-100 has-background-opacity"></div><div class="blockspare-container"><div class="blockspare-inner-blocks blockspare-inner-wrapper-blocks"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"5px","bottom":"5px","right":"5px","left":"5px"},"blockGap":"0"}},"backgroundColor":"tertiary","layout":{"type":"constrained"}} -->
                        <div class="wp-block-group alignwide has-tertiary-background-color has-background" style="padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px"><!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"blockGap":{"top":"0","left":"0"},"margin":{"top":"0","bottom":"0"}}}} -->
                        <div class="wp-block-columns alignwide are-vertically-aligned-center" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column {"verticalAlignment":"center","width":"66.66%","style":{"spacing":{"blockGap":"0","padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"layout":{"type":"default"}} -->
                        <div class="wp-block-column is-vertically-aligned-center" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;flex-basis:66.66%"><!-- wp:blockspare/date-time {"uniqueClass":"blockspare-51bdc4a5-14a0-4","time":true,"align":"wide","dateColor":"#777777","timeColor":"#777777","timeIconColor":"#000000","dateFontSize":14,"dateFontFamily":"Helvetica","timeFontSize":14,"timeFontFamily":"Helvetica","marginTop":0,"marginBottom":0} /--></div>
                        <!-- /wp:column -->
                        
                        <!-- wp:column {"verticalAlignment":"center","width":"33.33%","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"blockGap":"0"}}} -->
                        <div class="wp-block-column is-vertically-aligned-center" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;flex-basis:33.33%"><!-- wp:blockspare/blockspare-social-links {"sectionAlignment":"right","uniqueClass":"blockspare-ac0d748a-106c-4","buttonFills":"blockspare-social-icon-none","iconColorOption":"custom","customfontColorOption":"#eb5310","marginTop":0,"marginBottom":0} -->
                        <div class="wp-block-blockspare-blockspare-social-links blockspare-ac0d748a-106c-4 blockspare-socaillink-block blockspare-sociallinks-right" blockspare-animation=""><style>.blockspare-ac0d748a-106c-4 .blockspare-social-wrapper{text-align:right;margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px}.blockspare-ac0d748a-106c-4 .blockspare-social-wrapper .blockspare-social-links a .blockspare-social-icons{color:#eb5310}</style><div class="blockspare-social-wrapper"><ul class="blockspare-social-links custom blockspare-social-icon-square blockspare-social-icon-small blockspare-icon-only blockspare-social-icon-none blockspare-social-links-horizontal"><li class="blockspare-hover-item"><a href="https://facebook.com" class="" target="_blank" rel="noopener noreferrer"><span class="blockspare-social-icons"><i class="fab fa-facebook-f"></i> <span class="screen-reader-text">Facebook</span></span></a></li><li class="blockspare-hover-item"><a href="https://twitter.com" class="" target="_blank" rel="noopener noreferrer"><span class="blockspare-social-icons"><i class="fab fa-twitter"></i><span class="screen-reader-text">Twitter</span></span></a></li><li class="blockspare-hover-item"><a href="https://instagram.com" class="" target="_blank" rel="noopener noreferrer"><span class="blockspare-social-icons"><i class="fab fa-instagram"></i><span class="screen-reader-text">Instagram</span></span></a></li></ul></div></div>
                        <!-- /wp:blockspare/blockspare-social-links --></div>
                        <!-- /wp:column --></div>
                        <!-- /wp:columns --></div>
                        <!-- /wp:group -->
                        
                        <!-- wp:group {"style":{"spacing":{"padding":{"top":"20px","bottom":"20px"}}},"layout":{"type":"constrained"}} -->
                        <div class="wp-block-group" style="padding-top:20px;padding-bottom:20px"><!-- wp:site-logo {"width":153,"shouldSyncIcon":true,"align":"center"} /--></div>
                        <!-- /wp:group -->
                        
                        <!-- wp:group {"style":{"color":{"background":"#eb5310"},"spacing":{"padding":{"top":"10px","bottom":"10px"}}},"layout":{"type":"constrained"}} -->
                        <div class="wp-block-group has-background" style="background-color:#eb5310;padding-top:10px;padding-bottom:10px"><!-- wp:columns {"verticalAlignment":"center","align":"wide"} -->
                        <div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"66.66%"} -->
                        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%"><!-- wp:navigation {"ref":1504,"textColor":"base","style":{"typography":{"fontStyle":"normal","fontWeight":"500","textTransform":"uppercase"}}} /--></div>
                        <!-- /wp:column -->
                        
                        <!-- wp:column {"verticalAlignment":"center","width":"33.33%"} -->
                        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.33%"><!-- wp:blockspare/blockspare-buttons {"sectionAlignment":"right","uniqueClass":"blockspare-665b59eb-0c08-4","buttonBackgroundColor":"#ffffff","buttonTextColor":"#eb5310","buttonHoverEffect":"hover-style-2","buttonFontFamily":"Helvetica","marginTop":0,"marginBottom":0} -->
                        <div class="wp-block-blockspare-blockspare-buttons blockspare-665b59eb-0c08-4 blockspare-block-button-wrap" blockspare-animation=""><style>.blockspare-665b59eb-0c08-4 .blockspare-block-button{text-align:right;margin-top:0px;margin-bottom:0px;margin-left:0px;margin-right:0px}.blockspare-665b59eb-0c08-4 .blockspare-block-button span{color:#eb5310;border-width:2px;font-family:Helvetica}.blockspare-665b59eb-0c08-4 .blockspare-block-button .blockspare-button{background-color:#ffffff}.blockspare-665b59eb-0c08-4 .blockspare-block-button .blockspare-button:visited{background-color:#ffffff}.blockspare-665b59eb-0c08-4 .blockspare-block-button .blockspare-button:focus{background-color:#ffffff}.blockspare-665b59eb-0c08-4 .blockspare-block-button span,.blockspare-665b59eb-0c08-4 .blockspare-block-button i{font-size:16px}.blockspare-665b59eb-0c08-4 .blockspare-block-button a{padding-top:12px;padding-bottom:12px;padding-right:22px;padding-left:22px}@media screen and (max-width:1025px){.blockspare-665b59eb-0c08-4 .blockspare-block-button span,.blockspare-665b59eb-0c08-4 .blockspare-block-button i{font-size:14px}}@media screen and (max-width:768px){.blockspare-665b59eb-0c08-4 .blockspare-block-button span,.blockspare-665b59eb-0c08-4 .blockspare-block-button i{font-size:14px}}</style><div class="blockspare-block-button"><a class="blockspare-button blockspare-button-shape-rounded blockspare-button-size-small hover-style-2"><span>Get Started</span></a></div></div>
                        <!-- /wp:blockspare/blockspare-buttons --></div>
                        <!-- /wp:column --></div>
                        <!-- /wp:columns --></div>
                        <!-- /wp:group --></div></div></div></div>
                        <!-- /wp:blockspare/blockspare-container -->',
						'imagePath'    => 'header',
                    ),
					array(
						'type'     => 'header',
						'item'     => ['Header'],
						'key'      => 'bs_header_10',
						'name'     => esc_html__( 'Sport Header', 'blockspare' ),
						'blockLink'=>"https://blockspare.com/demo/default/sport-news/",
						'content'  => '<!-- wp:blockspare/blockspare-container {"paddingTop":0,"paddingRight":0,"paddingBottom":0,"paddingLeft":0,"marginTop":0,"marginBottom":0,"uniqueClass":"blockspare-c3063110-b14b-4","imgURL":"https://blockspare.com/demo/default/sport-news/wp-content/uploads/sites/12/2021/06/cropped-pexels-digital-buggu-186241.jpg","imgID":255,"imgAlt":"","opacityRatio":60,"backGroundColor":"#000000"} -->
                        <div class="wp-block-blockspare-blockspare-container alignfull blockspare-c3063110-b14b-4" blockspare-animation=""><style>.blockspare-c3063110-b14b-4 > .blockspare-block-container-wrapper{background-color:#000000;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px;border-radius:0}.blockspare-c3063110-b14b-4 .blockspare-image-wrap{background-image:url(https://blockspare.com/demo/default/sport-news/wp-content/uploads/sites/12/2021/06/cropped-pexels-digital-buggu-186241.jpg)}</style><div class="blockspare-block-container-wrapper blockspare-hover-item"><div class="blockspare-container-background blockspare-image-wrap has-background-opacity-60 has-background-opacity"></div><div class="blockspare-container"><div class="blockspare-inner-blocks blockspare-inner-wrapper-blocks"><!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"10px","bottom":"10px"}}},"backgroundColor":"contrast","layout":{"type":"constrained"}} -->
                        <div class="wp-block-group alignfull has-contrast-background-color has-background" style="padding-top:10px;padding-bottom:10px"><!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} -->
                        <div class="wp-block-columns alignwide are-vertically-aligned-center" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} -->
                        <div class="wp-block-column is-vertically-aligned-center" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:blockspare/date-time {"uniqueClass":"blockspare-e803768f-90d5-4","dateIconToggle":false,"dateColor":"#ffffff","marginTop":0,"marginBottom":0} /--></div>
                        <!-- /wp:column -->
                        
                        <!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} -->
                        <div class="wp-block-column is-vertically-aligned-center" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:blockspare/blockspare-social-links {"sectionAlignment":"right","uniqueClass":"blockspare-71068dc1-cf36-4","buttonFills":"blockspare-social-icon-none","iconColorOption":"custom","customfontColorOption":"#ffffff","custombackgroundColorOption":"#ffffff","buttonShapes":"blockspare-social-icon-rounded","marginTop":0,"marginBottom":0} -->
                        <div class="wp-block-blockspare-blockspare-social-links blockspare-71068dc1-cf36-4 blockspare-socaillink-block blockspare-sociallinks-right" blockspare-animation=""><style>.blockspare-71068dc1-cf36-4 .blockspare-social-wrapper{text-align:right;margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px}.blockspare-71068dc1-cf36-4 .blockspare-social-wrapper .blockspare-social-links a .blockspare-social-icons{color:#ffffff}</style><div class="blockspare-social-wrapper"><ul class="blockspare-social-links custom blockspare-social-icon-rounded blockspare-social-icon-small blockspare-icon-only blockspare-social-icon-none blockspare-social-links-horizontal"><li class="blockspare-hover-item"><a href="https://facebook.com" class="" target="_blank" rel="noopener noreferrer"><span class="blockspare-social-icons"><i class="fab fa-facebook-f"></i> <span class="screen-reader-text">Facebook</span></span></a></li><li class="blockspare-hover-item"><a href="https://twitter.com" class="" target="_blank" rel="noopener noreferrer"><span class="blockspare-social-icons"><i class="fab fa-twitter"></i><span class="screen-reader-text">Twitter</span></span></a></li><li class="blockspare-hover-item"><a href="https://instagram.com" class="" target="_blank" rel="noopener noreferrer"><span class="blockspare-social-icons"><i class="fab fa-instagram"></i><span class="screen-reader-text">Instagram</span></span></a></li></ul></div></div>
                        <!-- /wp:blockspare/blockspare-social-links --></div>
                        <!-- /wp:column --></div>
                        <!-- /wp:columns --></div>
                        <!-- /wp:group -->
                        
                        <!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"50px","bottom":"50px"}}},"layout":{"type":"constrained"}} -->
                        <div class="wp-block-group alignwide" style="padding-top:50px;padding-bottom:50px"><!-- wp:columns {"verticalAlignment":"center","align":"wide"} -->
                        <div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"33.33%"} -->
                        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.33%"><!-- wp:site-logo {"width":193,"shouldSyncIcon":true} /--></div>
                        <!-- /wp:column -->
                        
                        <!-- wp:column {"verticalAlignment":"center","width":"66.66%"} -->
                        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%"><!-- wp:image {"align":"right","id":343,"sizeSlug":"large","linkDestination":"none","style":{"color":{"duotone":"unset"}}} -->
                        <figure class="wp-block-image alignright size-large"><img src="https://blockspare.com/demo/default/sport-news/wp-content/uploads/sites/12/2022/09/green-banner-1024x109.png" alt="" class="wp-image-343"/></figure>
                        <!-- /wp:image --></div>
                        <!-- /wp:column --></div>
                        <!-- /wp:columns --></div>
                        <!-- /wp:group -->
                        
                        <!-- wp:group {"style":{"spacing":{"padding":{"top":"15px","right":"15px","bottom":"15px","left":"15px"}},"color":{"background":"#047e2b"}},"layout":{"type":"constrained"}} -->
                        <div class="wp-block-group has-background" style="background-color:#047e2b;padding-top:15px;padding-right:15px;padding-bottom:15px;padding-left:15px"><!-- wp:navigation {"ref":459,"textColor":"base","align":"wide","layout":{"type":"flex","justifyContent":"left","orientation":"horizontal"},"style":{"spacing":{"blockGap":"var:preset|spacing|30"},"typography":{"textTransform":"capitalize","fontStyle":"normal","fontWeight":"600"}}} /--></div>
                        <!-- /wp:group --></div></div></div></div>
                        <!-- /wp:blockspare/blockspare-container -->',
						'imagePath'    => 'header',
                    ),
					array(
						'type'     => 'header',
						'item'     => ['Header'],
						'key'      => 'bs_header_11',
						'name'     => esc_html__( 'Pet Care Header', 'blockspare' ),
						'blockLink'=>"https://blockspare.com/demo/default/puppycare/",
						'content'  => '<!-- wp:blockspare/blockspare-container {"marginTop":0,"marginBottom":0,"uniqueClass":"blockspare-dd3a5912-aba0-4","backGroundColor":"#ff7e22"} -->
                        <div class="wp-block-blockspare-blockspare-container alignfull blockspare-dd3a5912-aba0-4" blockspare-animation=""><style>.blockspare-dd3a5912-aba0-4 > .blockspare-block-container-wrapper{background-color:#ff7e22;padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px;margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px;border-radius:0}.blockspare-dd3a5912-aba0-4 .blockspare-image-wrap{background-image:none}</style><div class="blockspare-block-container-wrapper blockspare-hover-item"><div class="blockspare-container-background blockspare-image-wrap has-background-opacity-100 has-background-opacity"></div><div class="blockspare-container"><div class="blockspare-inner-blocks blockspare-inner-wrapper-blocks"><!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
                        <div class="wp-block-group alignwide"><!-- wp:columns {"verticalAlignment":"center","align":"wide"} -->
                        <div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"33.33%"} -->
                        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.33%"><!-- wp:site-logo {"width":101,"shouldSyncIcon":true} /--></div>
                        <!-- /wp:column -->
                        
                        <!-- wp:column {"verticalAlignment":"center","width":"66.66%"} -->
                        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%"><!-- wp:navigation {"ref":38,"textColor":"base","layout":{"type":"flex","justifyContent":"right"},"style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"500"}}} /--></div>
                        <!-- /wp:column --></div>
                        <!-- /wp:columns --></div>
                        <!-- /wp:group --></div></div></div></div>
                        <!-- /wp:blockspare/blockspare-container -->',
						'imagePath'    => 'header',
                    ),
					array(
						'type'     => 'header',
						'item'     => ['Header'],
						'key'      => 'bs_header_12',
						'name'     => esc_html__( 'Gadgets Header', 'blockspare' ),
						'blockLink'=>"https://blockspare.com/demo/default/tech-gadgets/",
						'content'  => '<!-- wp:blockspare/blockspare-container {"paddingTop":0,"paddingRight":0,"paddingBottom":0,"paddingLeft":0,"marginTop":0,"marginBottom":0,"uniqueClass":"blockspare-fbe1f930-f5f4-4","imgURL":"https://blockspare.com/demo/default/tech-gadgets/wp-content/uploads/sites/22/2023/05/mod678ern-stationary-collection-arrangement1.jpg","imgID":9,"imgAlt":"","opacityRatio":10,"backGroundColor":"#000000"} -->
                        <div class="wp-block-blockspare-blockspare-container alignfull blockspare-fbe1f930-f5f4-4" blockspare-animation=""><style>.blockspare-fbe1f930-f5f4-4 > .blockspare-block-container-wrapper{background-color:#000000;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px;border-radius:0}.blockspare-fbe1f930-f5f4-4 .blockspare-image-wrap{background-image:url(https://blockspare.com/demo/default/tech-gadgets/wp-content/uploads/sites/22/2023/05/mod678ern-stationary-collection-arrangement1.jpg)}</style><div class="blockspare-block-container-wrapper blockspare-hover-item"><div class="blockspare-container-background blockspare-image-wrap has-background-opacity-10 has-background-opacity"></div><div class="blockspare-container"><div class="blockspare-inner-blocks blockspare-inner-wrapper-blocks"><!-- wp:group {"style":{"color":{"background":"#4c4c4c"},"spacing":{"padding":{"top":"5px","bottom":"5px"}}},"layout":{"type":"constrained"}} -->
                        <div class="wp-block-group has-background" style="background-color:#4c4c4c;padding-top:5px;padding-bottom:5px"><!-- wp:columns {"verticalAlignment":"center","align":"wide"} -->
                        <div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"66.66%"} -->
                        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%"><!-- wp:blockspare/date-time {"uniqueClass":"blockspare-4837629b-8e74-4","dateIconToggle":false,"dateColor":"#ffffff","marginTop":0,"marginBottom":0} /--></div>
                        <!-- /wp:column -->
                        
                        <!-- wp:column {"verticalAlignment":"center","width":"33.33%"} -->
                        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.33%"><!-- wp:blockspare/blockspare-social-links {"sectionAlignment":"right","uniqueClass":"blockspare-55617de3-6d23-4","buttonFills":"blockspare-social-icon-none","iconColorOption":"custom","marginTop":0,"marginBottom":0} -->
                        <div class="wp-block-blockspare-blockspare-social-links blockspare-55617de3-6d23-4 blockspare-socaillink-block blockspare-sociallinks-right" blockspare-animation=""><style>.blockspare-55617de3-6d23-4 .blockspare-social-wrapper{text-align:right;margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px}.blockspare-55617de3-6d23-4 .blockspare-social-wrapper .blockspare-social-links a .blockspare-social-icons{color:#fff}</style><div class="blockspare-social-wrapper"><ul class="blockspare-social-links custom blockspare-social-icon-square blockspare-social-icon-small blockspare-icon-only blockspare-social-icon-none blockspare-social-links-horizontal"><li class="blockspare-hover-item"><a href="https://facebook.com" class="" target="_blank" rel="noopener noreferrer"><span class="blockspare-social-icons"><i class="fab fa-facebook-f"></i> <span class="screen-reader-text">Facebook</span></span></a></li><li class="blockspare-hover-item"><a href="https://twitter.com" class="" target="_blank" rel="noopener noreferrer"><span class="blockspare-social-icons"><i class="fab fa-twitter"></i><span class="screen-reader-text">Twitter</span></span></a></li><li class="blockspare-hover-item"><a href="https://instagram.com" class="" target="_blank" rel="noopener noreferrer"><span class="blockspare-social-icons"><i class="fab fa-instagram"></i><span class="screen-reader-text">Instagram</span></span></a></li></ul></div></div>
                        <!-- /wp:blockspare/blockspare-social-links --></div>
                        <!-- /wp:column --></div>
                        <!-- /wp:columns --></div>
                        <!-- /wp:group -->
                        
                        <!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"50px","bottom":"50px"}}},"layout":{"type":"constrained"}} -->
                        <div class="wp-block-group alignwide" style="padding-top:50px;padding-bottom:50px"><!-- wp:site-logo {"width":443,"shouldSyncIcon":true,"align":"center"} /--></div>
                        <!-- /wp:group -->
                        
                        <!-- wp:group {"style":{"color":{"background":"#14b171"},"spacing":{"padding":{"top":"10px","bottom":"10px"}}},"layout":{"type":"constrained"}} -->
                        <div class="wp-block-group has-background" style="background-color:#14b171;padding-top:10px;padding-bottom:10px"><!-- wp:navigation {"textColor":"base","align":"wide","style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"700"}}} -->
                        <!-- wp:page-list /-->
                        <!-- /wp:navigation --></div>
                        <!-- /wp:group --></div></div></div></div>
                        <!-- /wp:blockspare/blockspare-container -->',
						'imagePath'    => 'header',
                    ),
					array(
						'type'     => 'header',
						'item'     => ['Header'],
						'key'      => 'bs_header_13',
						'name'     => esc_html__( 'Construction Header', 'blockspare' ),
						'blockLink'=>"https://blockspare.com/demo/default/constructions/",
						'content'  => '<!-- wp:blockspare/blockspare-container {"paddingTop":0,"paddingRight":0,"paddingBottom":0,"paddingLeft":0,"marginTop":0,"marginBottom":0,"uniqueClass":"blockspare-8bc18f7a-fc91-4","imgURL":"https://blockspare.com/demo/default/constructions/wp-content/uploads/sites/23/2023/05/civil-en213gineer-construction-worker-architects-wearing-hardhats-safety-vests-are-working-together-construction-site-building-home-cooperation-teamwork-concept.jpg","imgID":16,"imgAlt":"","opacityRatio":10,"backGroundColor":"#ffffff"} -->
                        <div class="wp-block-blockspare-blockspare-container alignfull blockspare-8bc18f7a-fc91-4" blockspare-animation=""><style>.blockspare-8bc18f7a-fc91-4 > .blockspare-block-container-wrapper{background-color:#ffffff;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px;border-radius:0}.blockspare-8bc18f7a-fc91-4 .blockspare-image-wrap{background-image:url(https://blockspare.com/demo/default/constructions/wp-content/uploads/sites/23/2023/05/civil-en213gineer-construction-worker-architects-wearing-hardhats-safety-vests-are-working-together-construction-site-building-home-cooperation-teamwork-concept.jpg)}</style><div class="blockspare-block-container-wrapper blockspare-hover-item"><div class="blockspare-container-background blockspare-image-wrap has-background-opacity-10 has-background-opacity"></div><div class="blockspare-container"><div class="blockspare-inner-blocks blockspare-inner-wrapper-blocks"><!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"10px","bottom":"10px"}}},"backgroundColor":"contrast","layout":{"type":"constrained"}} -->
                        <div class="wp-block-group alignfull has-contrast-background-color has-background" style="padding-top:10px;padding-bottom:10px"><!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} -->
                        <div class="wp-block-columns alignwide are-vertically-aligned-center" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} -->
                        <div class="wp-block-column is-vertically-aligned-center" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:paragraph {"style":{"typography":{"fontSize":"14px"}},"textColor":"base"} -->
                        <p class="has-base-color has-text-color" style="font-size:14px">Welcome to Construction site</p>
                        <!-- /wp:paragraph --></div>
                        <!-- /wp:column -->
                        
                        <!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} -->
                        <div class="wp-block-column is-vertically-aligned-center" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:blockspare/blockspare-social-links {"sectionAlignment":"right","uniqueClass":"blockspare-9166eb81-8031-4","buttonFills":"blockspare-social-icon-none","iconColorOption":"custom","customfontColorOption":"#ffffff","custombackgroundColorOption":"#ffffff","buttonShapes":"blockspare-social-icon-rounded","marginTop":0,"marginBottom":0} -->
                        <div class="wp-block-blockspare-blockspare-social-links blockspare-9166eb81-8031-4 blockspare-socaillink-block blockspare-sociallinks-right" blockspare-animation=""><style>.blockspare-9166eb81-8031-4 .blockspare-social-wrapper{text-align:right;margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px}.blockspare-9166eb81-8031-4 .blockspare-social-wrapper .blockspare-social-links a .blockspare-social-icons{color:#ffffff}</style><div class="blockspare-social-wrapper"><ul class="blockspare-social-links custom blockspare-social-icon-rounded blockspare-social-icon-small blockspare-icon-only blockspare-social-icon-none blockspare-social-links-horizontal"><li class="blockspare-hover-item"><a href="https://facebook.com" class="" target="_blank" rel="noopener noreferrer"><span class="blockspare-social-icons"><i class="fab fa-facebook-f"></i> <span class="screen-reader-text">Facebook</span></span></a></li><li class="blockspare-hover-item"><a href="https://twitter.com" class="" target="_blank" rel="noopener noreferrer"><span class="blockspare-social-icons"><i class="fab fa-twitter"></i><span class="screen-reader-text">Twitter</span></span></a></li><li class="blockspare-hover-item"><a href="https://instagram.com" class="" target="_blank" rel="noopener noreferrer"><span class="blockspare-social-icons"><i class="fab fa-instagram"></i><span class="screen-reader-text">Instagram</span></span></a></li></ul></div></div>
                        <!-- /wp:blockspare/blockspare-social-links --></div>
                        <!-- /wp:column --></div>
                        <!-- /wp:columns --></div>
                        <!-- /wp:group -->
                        
                        <!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"50px","bottom":"50px"}}},"layout":{"type":"constrained"}} -->
                        <div class="wp-block-group alignwide" style="padding-top:50px;padding-bottom:50px"><!-- wp:columns {"verticalAlignment":"center","align":"wide"} -->
                        <div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"33.33%"} -->
                        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.33%"><!-- wp:site-title {"style":{"elements":{"link":{"color":{"text":"#384260"}}},"color":{"text":"#384260"},"typography":{"fontSize":"36px","fontStyle":"normal","fontWeight":"600"}}} /-->
                        
                        <!-- wp:site-tagline {"style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} /--></div>
                        <!-- /wp:column -->
                        
                        <!-- wp:column {"verticalAlignment":"center","width":"66.66%"} -->
                        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%"><!-- wp:image {"align":"right","id":1158,"width":458,"height":110,"sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":["#384260","#ffffff"]}}} -->
                        <figure class="wp-block-image alignright size-full is-resized"><img src="https://blockspare.com/demo/default/fitness/wp-content/uploads/sites/7/2023/06/banner-promos-2.jpeg" alt="" class="wp-image-1158" width="458" height="110"/></figure>
                        <!-- /wp:image --></div>
                        <!-- /wp:column --></div>
                        <!-- /wp:columns --></div>
                        <!-- /wp:group -->
                        
                        <!-- wp:group {"style":{"spacing":{"padding":{"top":"10px","right":"10px","bottom":"10px","left":"10px"}}},"backgroundColor":"luminous-vivid-amber","layout":{"type":"constrained"}} -->
                        <div class="wp-block-group has-luminous-vivid-amber-background-color has-background" style="padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px"><!-- wp:columns {"verticalAlignment":"center","align":"wide"} -->
                        <div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"80%"} -->
                        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:80%"><!-- wp:navigation {"ref":54,"customTextColor":"#384260","align":"full","layout":{"type":"flex","justifyContent":"left","orientation":"horizontal"},"style":{"spacing":{"blockGap":"var:preset|spacing|30"},"typography":{"textTransform":"capitalize","fontStyle":"normal","fontWeight":"700"}}} /--></div>
                        <!-- /wp:column -->
                        
                        <!-- wp:column {"verticalAlignment":"center","width":"33.33%"} -->
                        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.33%"><!-- wp:blockspare/search {"buttonBgColor":"#000000","searchFormPaddingTop":0,"searchFormPaddingBottom":0,"searchFormPaddingRight":0,"searchFormPaddingLeft":0,"uniqueClass":"blockspare-5b0d47a8-9ee3-4"} /--></div>
                        <!-- /wp:column --></div>
                        <!-- /wp:columns --></div>
                        <!-- /wp:group --></div></div></div></div>
                        <!-- /wp:blockspare/blockspare-container -->',
						'imagePath'    => 'header',
					)
				);

            return array_merge_recursive( $blocks_lists, $block_library_list );
        }
	}
}
Blockspare_Header_Template_Block::get_instance()->run();