<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'Blockspare_Icon_list_Template_Block' ) ) {

	class Blockspare_Icon_list_Template_Block extends Blockspare_Import_Block_Base{
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
						'item'     => ['Icon List'],
						'key'      => 'bs_icon_list_1',
						'name'     => esc_html__( 'Icon list 1', 'blockspare' ),
                        'blockLink'=>"https://www.blockspare.com/block/icon-list/",
						'content'  => '<!-- wp:blockspare/blockspare-list {"uniqueClass":"blockspare-20514f22-b564-4","sectionAlignment":"center","listBackGroundColor":"#e74c3c","color":"#f7f7f7","descriptionIconColor":"#f7f7f7","borderRadius":15,"descriptionFontSize":20,"descriptionFontFamily":"Source Sans Pro","descriptionFontWeight":"400","descriptionFontSubset":"latin","descriptionLoadGoogleFonts":true,"marginTop":100,"marginBottom":100,"paddingTop":15,"paddingBottom":15,"enableBoxShadow":true} -->
                        <div class="wp-block-blockspare-blockspare-list aligncenter blockspare-20514f22-b564-4 blockspare-block-iconlist-wrap" blockspare-animation=""><style>.blockspare-20514f22-b564-4 .blockspare-list-wrap{background-color:#e74c3c;border-radius:15px;box-shadow:0px 6px 12px -10px #000;margin-top:100px;margin-bottom:100px;padding-top:15px;padding-right:0px;padding-bottom:15px;padding-left:0px}.blockspare-20514f22-b564-4 .blockspare-list-wrap .listDescription li{color:#f7f7f7;text-align:center;font-size:20px;font-family:Source Sans Pro;font-weight:400!important}.blockspare-20514f22-b564-4 .blockspare-list-wrap .listDescription li:before{color:#f7f7f7}.blockspare-20514f22-b564-4 .listDescription li:before{font-size:18px}@media screen and (max-width:1025px){.blockspare-20514f22-b564-4 .listDescription li{font-size:14px}.blockspare-20514f22-b564-4 .listDescription li:before{font-size:18px}}@media screen and (max-width:768px){.blockspare-20514f22-b564-4 .listDescription li{font-size:12px}.blockspare-20514f22-b564-4 .listDescription li:before{font-size:18px}}</style><div class="blockspare-blocks blockspare-list-wrap blockspare-hover-item"><ul class="blockspare-list-check listDescription"><li>Vestibulum ac diam sit amet</li><li>Vestibulum ac diam sit amet</li><li>Vestibulum ac diam sit amet</li></ul></div></div>
                        <!-- /wp:blockspare/blockspare-list -->',
                        'imagePath'    => 'icon-list',
                    ),
                    array(
						'type'     => 'block',
						'item'     => ['Icon List'],
						'key'      => 'bs_icon_list_2',
						'name'     => esc_html__( 'Icon list 2', 'blockspare' ),
                        'blockLink'=>"https://www.blockspare.com/block/icon-list/",
						'content'  => '<!-- wp:blockspare/blockspare-list {"uniqueClass":"blockspare-03fa7a40-d846-4","color":"#6d6d6d","descriptionFontSize":14} -->
                        <div class="wp-block-blockspare-blockspare-list aligncenter blockspare-03fa7a40-d846-4 blockspare-block-iconlist-wrap" blockspare-animation=""><style>.blockspare-03fa7a40-d846-4 .blockspare-list-wrap{border-radius:0px;margin-top:30px;margin-bottom:30px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px}.blockspare-03fa7a40-d846-4 .blockspare-list-wrap .listDescription li{color:#6d6d6d;text-align:left;font-size:14px;font-weight:500!important}.blockspare-03fa7a40-d846-4 .blockspare-list-wrap .listDescription li:before{color:#404040}.blockspare-03fa7a40-d846-4 .listDescription li:before{font-size:12px}@media screen and (max-width:1025px){.blockspare-03fa7a40-d846-4 .listDescription li{font-size:14px}.blockspare-03fa7a40-d846-4 .listDescription li:before{font-size:12px}}@media screen and (max-width:768px){.blockspare-03fa7a40-d846-4 .listDescription li{font-size:12px}.blockspare-03fa7a40-d846-4 .listDescription li:before{font-size:12px}}</style><div class="blockspare-blocks blockspare-list-wrap blockspare-hover-item"><ul class="blockspare-list-check listDescription"><li>Aenean eu leo quam ornare curabitur blandit temp.</li><li>Etiam porta sem malesuada magna mollis euismod.</li><li>Fermentum massa vivamus faucibus amet euismod.</li></ul></div></div>
                        <!-- /wp:blockspare/blockspare-list -->',
                        'imagePath'    => 'icon-list',
                    ),
                    array(
						'type'     => 'block',
						'item'     => ['Icon List'],
						'key'      => 'bs_icon_list_3',
						'name'     => esc_html__( 'Icon list 3', 'blockspare' ),
                        'blockLink'=>"https://www.blockspare.com/block/icon-list/",
						'content'  => '<!-- wp:blockspare/blockspare-container {"enableGradient":true,"backgroundColor1":"#8ed1fc","backgroundColor2":"#0693e3","paddingBottom":0,"uniqueClass":"blockspare-76c1b9ff-989b-4"} -->
                        <div class="wp-block-blockspare-blockspare-container alignfull blockspare-76c1b9ff-989b-4" blockspare-animation=""><style>.blockspare-76c1b9ff-989b-4 .blockspare-block-container-wrapper{background-image:linear-gradient(-90deg,#8ed1fc 30%,#0693e3 70%);padding-top:20px;padding-right:0px;padding-bottom:0px;padding-left:0px;margin-top:30px;margin-right:0px;margin-bottom:30px;margin-left:0px;border-radius:0}.blockspare-76c1b9ff-989b-4 .blockspare-image-wrap{background-image:none}</style><div class="blockspare-block-container-wrapper blockspare-hover-item"><div class="blockspare-container-background blockspare-image-wrap has-background-opacity-100 has-background-opacity"></div><div class="blockspare-container"><div class="blockspare-inner-blocks blockspare-inner-wrapper-blocks"><!-- wp:columns {"align":"wide"} -->
                        <div class="wp-block-columns alignwide"><!-- wp:column {"width":"66.66%"} -->
                        <div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:image {"id":668,"sizeSlug":"large"} -->
                        <figure class="wp-block-image size-large"><img src="http://blockspare.com/wp-content/uploads/2020/07/man-wearing-black-zip-up-jacket-near-beach-smiling-at-the-736716-scaled-e1596092925726-1024x1024.jpg" alt="" class="wp-image-668"/></figure>
                        <!-- /wp:image -->
                        
                        <!-- wp:paragraph -->
                        <p></p>
                        <!-- /wp:paragraph --></div>
                        <!-- /wp:column -->
                        
                        <!-- wp:column {"width":"33.33%"} -->
                        <div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:blockspare/blockspare-section-header {"uniqueClass":"blockspare-07a48935-5f19-4","sectionAlignment":"left","headerTitle":"Why Me?","titleFontSize":45,"headerSubTitle":"MY SKILLS","headertitleColor":"#f7f7f7","headersubtitleColor":"#f7f7f7","headermarginTop":100,"headermarginBottom":0,"headerlayoutOption":"blockspare-style4","subtitlePaddingBottom":10,"dashColor":"#f7f7f7"} -->
                        <div class="wp-block-blockspare-blockspare-section-header aligncenter blockspare-07a48935-5f19-4 blockspare-section-header-wrapper blockspare-blocks aligncenter" blockspare-animation=""><style>.blockspare-07a48935-5f19-4 .blockspare-section-head-wrap{background-color:transparent;text-align:left;margin-top:100px;margin-right:30px;margin-bottom:0px;margin-left:30px}.blockspare-07a48935-5f19-4 .blockspare-section-head-wrap .blockspare-title{color:#f7f7f7;font-size:45px;font-weight:500;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px}.blockspare-07a48935-5f19-4 .blockspare-section-head-wrap .blockspare-subtitle{color:#f7f7f7;font-size:18px;font-weight:500;padding-top:0px;padding-right:0px;padding-bottom:10px;padding-left:0px}.blockspare-07a48935-5f19-4 .blockspare-section-head-wrap.blockspare-style2 .blockspare-title-dash,.blockspare-07a48935-5f19-4 .blockspare-section-head-wrap.blockspare-style4 .blockspare-title-dash,.blockspare-07a48935-5f19-4 .blockspare-section-head-wrap.blockspare-style5 .blockspare-title-dash,.blockspare-07a48935-5f19-4 .blockspare-section-head-wrap.blockspare-style6 .blockspare-title-dash,.blockspare-07a48935-5f19-4 .blockspare-section-head-wrap.blockspare-style7 .blockspare-title-dash,.blockspare-07a48935-5f19-4 .blockspare-section-head-wrap.blockspare-style8 .blockspare-title-dash,.blockspare-07a48935-5f19-4 .blockspare-section-head-wrap.blockspare-style9 .blockspare-title-dash,.blockspare-07a48935-5f19-4 .blockspare-section-head-wrap.blockspare-style16 .blockspare-title-wrapper .blockspare-lower-dash,.blockspare-07a48935-5f19-4 .blockspare-section-head-wrap.blockspare-style16 .blockspare-title-wrapper .blockspare-upper-dash{color:#f7f7f7}.blockspare-07a48935-5f19-4 .blockspare-section-head-wrap.blockspare-style10 .blockspare-title-wrapper .blockspare-lower-dash,.blockspare-07a48935-5f19-4 .blockspare-section-head-wrap.blockspare-style11 .blockspare-title-wrapper .blockspare-title:after,.blockspare-07a48935-5f19-4 .blockspare-section-head-wrap.blockspare-style13 .blockspare-title-wrapper .blockspare-upper-dash,.blockspare-07a48935-5f19-4 .blockspare-section-head-wrap.blockspare-style14 .blockspare-title-wrapper .blockspare-lower-dash,.blockspare-07a48935-5f19-4 .blockspare-section-head-wrap.blockspare-style15 .blockspare-title-wrapper .blockspare-lower-dash,.blockspare-07a48935-5f19-4 .blockspare-section-head-wrap.blockspare-style15.blockspare-center .blockspare-title-wrapper .blockspare-upper-dash,.blockspare-07a48935-5f19-4 .blockspare-section-head-wrap.blockspare-style17 .blockspare-title-wrapper .blockspare-title,.blockspare-07a48935-5f19-4 .blockspare-section-head-wrap.blockspare-style18 .blockspare-title-wrapper .blockspare-title,.blockspare-07a48935-5f19-4 .blockspare-section-head-wrap.blockspare-style17 .blockspare-title-wrapper .blockspare-title,.blockspare-07a48935-5f19-4 .blockspare-section-head-wrap.blockspare-style19 .blockspare-title-wrapper .blockspare-title:before{background-color:#f7f7f7}.blockspare-07a48935-5f19-4 .blockspare-section-head-wrap.blockspare-style12 .blockspare-title-wrapper .blockspare-title,.blockspare-07a48935-5f19-4 .blockspare-section-head-wrap.blockspare-style18 .blockspare-title-wrapper{border-bottom-color:#f7f7f7}.blockspare-07a48935-5f19-4 .blockspare-section-head-wrap.blockspare-style17 .blockspare-title-wrapper .blockspare-title:before{border-top-color:#f7f7f7}.blockspare-07a48935-5f19-4 .blockspare-section-head-wrap.blockspare-style10 .blockspare-title-wrapper .blockspare-upper-dash,.blockspare-07a48935-5f19-4 .blockspare-section-head-wrap.blockspare-style12 .blockspare-title-wrapper .blockspare-lower-dash,.blockspare-07a48935-5f19-4 .blockspare-section-head-wrap.blockspare-style13 .blockspare-title-wrapper .blockspare-lower-dash,.blockspare-07a48935-5f19-4 .blockspare-section-head-wrap.blockspare-style14 .blockspare-title-wrapper .blockspare-upper-dash{background-color:#E5EFE3}@media screen and (max-width:1025px){.blockspare-07a48935-5f19-4 .blockspare-section-head-wrap .blockspare-title{font-size:26px}.blockspare-07a48935-5f19-4 .blockspare-section-head-wrap .blockspare-subtitle{font-size:16px}}@media screen and (max-width:768px){.blockspare-07a48935-5f19-4 .blockspare-section-head-wrap .blockspare-title{font-size:20px}.blockspare-07a48935-5f19-4 .blockspare-section-head-wrap .blockspare-subtitle{font-size:14px}}</style><div class="blockspare-section-head-wrap blockspare-style4 blockspare-left blockspare-hover-item"><div class="blockspare-title-wrapper"><span class="blockspare-title-dash blockspare-upper-dash"></span><h2 class="blockspare-title">Why Me?</h2><span class="blockspare-title-dash blockspare-lower-dash"></span></div><div class="blockspare-subtitle-wrapper"><span class="blockspare-title-dash blockspare-upper-dash"></span><p class="blockspare-subtitle">MY SKILLS</p><span class="blockspare-title-dash blockspare-lower-dash"></span></div></div></div>
                        <!-- /wp:blockspare/blockspare-section-header -->
                        
                        <!-- wp:paragraph {"textColor":"base"} -->
                        <p class="has-base-color has-text-color">Maecenas nec odio et ante tincidunt tempus. Phasellus volutpat, metus eget egestas mollis, lacus lacus blandit dui, id egestas quam mauris ut lacus. Suspendisse non nisl sit amet velit hendrerit rutrum. Phasellus blandit leo ut odio. Fusce fermentum.</p>
                        <!-- /wp:paragraph -->
                        
                        <!-- wp:blockspare/blockspare-list {"uniqueClass":"blockspare-f07997e5-9d99-4","color":"#f7f7f7","descriptionIconColor":"#f7f7f7","descriptionFontSize":18,"descriptionFontFamily":"Source Sans Pro","descriptionFontWeight":"300","descriptionFontSubset":"latin","descriptionLoadGoogleFonts":true} -->
                        <div class="wp-block-blockspare-blockspare-list aligncenter blockspare-f07997e5-9d99-4 blockspare-block-iconlist-wrap" blockspare-animation=""><style>.blockspare-f07997e5-9d99-4 .blockspare-list-wrap{border-radius:0px;margin-top:30px;margin-bottom:30px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px}.blockspare-f07997e5-9d99-4 .blockspare-list-wrap .listDescription li{color:#f7f7f7;text-align:left;font-size:18px;font-family:Source Sans Pro;font-weight:300!important}.blockspare-f07997e5-9d99-4 .blockspare-list-wrap .listDescription li:before{color:#f7f7f7}.blockspare-f07997e5-9d99-4 .listDescription li:before{font-size:16px}@media screen and (max-width:1025px){.blockspare-f07997e5-9d99-4 .listDescription li{font-size:14px}.blockspare-f07997e5-9d99-4 .listDescription li:before{font-size:16px}}@media screen and (max-width:768px){.blockspare-f07997e5-9d99-4 .listDescription li{font-size:12px}.blockspare-f07997e5-9d99-4 .listDescription li:before{font-size:16px}}</style><div class="blockspare-blocks blockspare-list-wrap blockspare-hover-item"><ul class="blockspare-list-check listDescription"><li>Vestibulum ac diam sit amet</li><li>Vestibulum ac diam sit amet</li><li>Vestibulum ac diam sit amet</li><li>Praesent ac sem eget estlutpat.</li><li>Praesent ac est egestas volutpat.</li><li>Praesent ac sem eget est egestas volutpat.</li></ul></div></div>
                        <!-- /wp:blockspare/blockspare-list --></div>
                        <!-- /wp:column --></div>
                        <!-- /wp:columns --></div></div></div></div>
                        <!-- /wp:blockspare/blockspare-container -->',
                        'imagePath'    => 'icon-list',
                    )
				);

            return array_merge_recursive( $blocks_lists, $block_library_list );
        }
	}
}
Blockspare_Icon_list_Template_Block::get_instance()->run();