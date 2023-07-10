<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'Blockspare_Social_Sharing_Template_Block' ) ) {

	class Blockspare_Social_Sharing_Template_Block extends Blockspare_Import_Block_Base{
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
						'item'     => ['Social Sharing'],
						'key'      => 'bs_social_sharing_1',
						'name'     => esc_html__( 'Social Sharing 1', 'blockspare' ),
						'blockLink'=>"",
						'content'  => '<!-- wp:blockspare/blockspare-social-sharing {"custombackgroundColorOption":"#e74c3c","buttonShapes":"blockspare-social-icon-circle","uniqueClass":"blockspare-1cc8fd61-ac3e-4"} /-->',
                    ),
                    array(
						'type'     => 'block',
						'item'     => ['Social Sharing'],
						'key'      => 'bs_social_sharing_2',
						'name'     => esc_html__( 'Social Sharing 2', 'blockspare' ),
						'blockLink'=>"",
						'content'  => '<!-- wp:blockspare/blockspare-social-sharing {"buttonFills":"blockspare-social-icon-border","iconColorOption":"custom","customfontColorOption":"#8e44ad","custombackgroundColorOption":"#8e44ad","buttonShapes":"blockspare-social-icon-rounded","uniqueClass":"blockspare-8e15cdcc-54ba-4"} /-->',
                    ),
                    array(
						'type'     => 'block',
						'item'     => ['Social Sharing'],
						'key'      => 'bs_social_sharing_3',
						'name'     => esc_html__( 'Social Sharing 3', 'blockspare' ),
						'blockLink'=>"",
						'content'  => '<!-- wp:blockspare/blockspare-social-sharing {"buttonOptions":"blockspare-icon-with-texts","buttonFills":"blockspare-social-icon-border","iconColorOption":"custom","customfontColorOption":"#16a085","custombackgroundColorOption":"#16a085","buttonShapes":"blockspare-social-icon-rounded","uniqueClass":"blockspare-2feafb09-3a0d-4"} /-->',
                    ),
                    array(
						'type'     => 'block',
						'item'     => ['Social Sharing'],
						'key'      => 'bs_social_sharing_4',
						'name'     => esc_html__( 'Social Sharing 4', 'blockspare' ),
						'blockLink'=>"",
						'content'  => '<!-- wp:blockspare/blockspare-social-sharing {"buttonOptions":"blockspare-icon-with-texts","customfontColorOption":"#ffffff","custombackgroundColorOption":"#2c3e50","uniqueClass":"blockspare-940fdcbe-1780-4"} /-->',
					),
                    array(
						'type'     => 'block',
						'item'     => ['Social Sharing'],
						'key'      => 'bs_social_sharing_5',
						'name'     => esc_html__( 'Social Sharing 5', 'blockspare' ),
						'blockLink'=>"",
						'content'  => '<!-- wp:blockspare/blockspare-container {"enableGradient":true,"backgroundColor1":"#799f0c","backgroundColor2":"#ffe000","paddingBottom":80,"design":"wavy","height":188,"color":"#f7f7f7","enableBottomSeperator":true,"bottomWidth":2.4,"bottomHeight":174,"bottomColor":"#f7f7f7","shapeHorizontalFlip":true,"showBottomFront":true,"enableBottomGap":true,"uniqueClass":"blockspare-6d7221be-f9f0-4","imgURL":"http://blockspare.com/wp-content/uploads/2020/03/blue-white-ribbon-on-pink-box-45238-scaled.jpg","imgID":654,"imgAlt":"","opacityRatio":20,"backgroundFix":true,"separatorEnable":true,"showFront":true,"enableGap":true} -->
						<div class="wp-block-blockspare-blockspare-container alignfull blockspare-6d7221be-f9f0-4" blockspare-animation=""><style>.blockspare-6d7221be-f9f0-4 > .blockspare-block-container-wrapper{background-image:linear-gradient(-90deg,#799f0c 30%,#ffe000 70%);padding-top:20px;padding-right:20px;padding-bottom:80px;padding-left:20px;margin-top:30px;margin-right:0px;margin-bottom:30px;margin-left:0px;border-radius:0}.blockspare-6d7221be-f9f0-4 .blockspare-image-wrap{background-image:url(http://blockspare.com/wp-content/uploads/2020/03/blue-white-ribbon-on-pink-box-45238-scaled.jpg)}.blockspare-6d7221be-f9f0-4 .blockspare-top-separator{top:0px;z-index:20}.blockspare-6d7221be-f9f0-4 .blockspare-block-container-wrapper .blockspare-top-svg-wrap{color:#f7f7f7;height:188px}.blockspare-6d7221be-f9f0-4 .blockspare-block-container-wrapper .blockspare-bottom-separator{bottom:0px;z-index:20}.blockspare-6d7221be-f9f0-4 .blockspare-block-container-wrapper .blockspare-bottom-svg-wrap{color:#f7f7f7;height:174px}</style><div class="blockspare-block-container-wrapper has-gap-enable has-bottom-gap-enable blockspare-background-fix has-separator-top has-separator-bottom blockspare-hover-item"><div class="blockspare-container-background blockspare-image-wrap has-background-opacity-20 has-background-opacity"></div><div class="blockspare-top-separator blockspare-svg-show-front"><div class="blockspare-blocks blockspare-svg-wrapper blockspare-top-svg-wrap has-width-1 wp-block-blockspare-blockspare-container alignfull blockspare-6d7221be-f9f0-4 is-vertically-flipped"><div class="blockspare-svg-svg-inner blockspare-separator-wrapper"><svg class="wavy" preserveAspectRatio="none" aria-hidden="true" viewBox="0 0 100 10" xmlns="http://www.w3.org/2000/svg"><path d="M42.19 9.35c2.26.25 5.15-.04 7.55-.53 2.36-.49 7.09-2.35 10.05-3.57C67.37 2.03 73.16.8 79.05.28c2.36-.21 4.87-.35 10.34.25s10.62 2.56 10.62 2.56V10H0V6.97s7.2-3.26 15.84-3.05c3.92.07 9.28.67 13.4 2.24 2.12.81 5.22 1.82 7.97 2.42 2.72.63 3.95.67 4.98.77z"></path></svg></div></div></div><div class="blockspare-container"><div class="blockspare-inner-blocks blockspare-inner-wrapper-blocks"><!-- wp:blockspare/blockspare-section-header {"uniqueClass":"blockspare-43b857f4-7fd3-4","align":"wide","headerTitle":"Yesterdays the past, tomorrows the future, but today is a gift. Thats why its called the present.","titleFontSize":50,"headerSubTitle":"-\u003cem\u003e Bil Keane\u003c/em\u003e","headertitleColor":"#22303e","headersubtitleColor":"#22303e","headermarginBottom":0,"titleFontFamily":"Archivo Narrow","titleFontWeight":"700","titleFontSubset":"latin","titleFontSizeMobile":30,"titleFontSizeTablet":40,"titleLoadGoogleFonts":true,"subTitleFontSize":24,"subTitleFontFamily":"Archivo","subTitleFontWeight":"700","subTitleFontSubset":"latin","subTitleLoadGoogleFonts":true} -->
						<div class="wp-block-blockspare-blockspare-section-header alignwide blockspare-43b857f4-7fd3-4 blockspare-section-header-wrapper blockspare-blocks alignwide" blockspare-animation=""><style>.blockspare-43b857f4-7fd3-4 .blockspare-section-head-wrap{background-color:transparent;text-align:left;margin-top:30px;margin-right:0px;margin-bottom:0px;margin-left:0px}.blockspare-43b857f4-7fd3-4 .blockspare-section-head-wrap .blockspare-title{color:#22303e;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;font-size:50px;font-family:Archivo Narrow;font-weight:700}.blockspare-43b857f4-7fd3-4 .blockspare-section-head-wrap .blockspare-subtitle{color:#22303e;font-size:24px;font-family:Archivo;font-weight:700;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px}.blockspare-43b857f4-7fd3-4 .blockspare-section-head-wrap.blockspare-style2 .blockspare-title-dash,.blockspare-43b857f4-7fd3-4 .blockspare-section-head-wrap.blockspare-style4 .blockspare-title-dash,.blockspare-43b857f4-7fd3-4 .blockspare-section-head-wrap.blockspare-style5 .blockspare-title-dash,.blockspare-43b857f4-7fd3-4 .blockspare-section-head-wrap.blockspare-style6 .blockspare-title-dash,.blockspare-43b857f4-7fd3-4 .blockspare-section-head-wrap.blockspare-style7 .blockspare-title-dash,.blockspare-43b857f4-7fd3-4 .blockspare-section-head-wrap.blockspare-style8 .blockspare-title-dash,.blockspare-43b857f4-7fd3-4 .blockspare-section-head-wrap.blockspare-style9 .blockspare-title-dash,.blockspare-43b857f4-7fd3-4 .blockspare-section-head-wrap.blockspare-style16 .blockspare-title-wrapper .blockspare-lower-dash,.blockspare-43b857f4-7fd3-4 .blockspare-section-head-wrap.blockspare-style16 .blockspare-title-wrapper .blockspare-upper-dash{color:#8b249c}.blockspare-43b857f4-7fd3-4 .blockspare-section-head-wrap.blockspare-style10 .blockspare-title-wrapper .blockspare-lower-dash::before,.blockspare-43b857f4-7fd3-4 .blockspare-section-head-wrap.blockspare-style11 .blockspare-title-wrapper .blockspare-lower-dash,.blockspare-43b857f4-7fd3-4 .blockspare-section-head-wrap.blockspare-style13 .blockspare-title-wrapper .blockspare-upper-dash,.blockspare-43b857f4-7fd3-4 .blockspare-section-head-wrap.blockspare-style14 .blockspare-title-wrapper .blockspare-lower-dash,.blockspare-43b857f4-7fd3-4 .blockspare-section-head-wrap.blockspare-style15 .blockspare-title-wrapper .blockspare-lower-dash,.blockspare-43b857f4-7fd3-4 .blockspare-section-head-wrap.blockspare-style15.blockspare-center .blockspare-title-wrapper .blockspare-upper-dash,.blockspare-43b857f4-7fd3-4 .blockspare-section-head-wrap.blockspare-style17 .blockspare-title-wrapper .blockspare-title,.blockspare-43b857f4-7fd3-4 .blockspare-section-head-wrap.blockspare-style18 .blockspare-title-wrapper .blockspare-title,.blockspare-43b857f4-7fd3-4 .blockspare-section-head-wrap.blockspare-style17 .blockspare-title-wrapper .blockspare-title,.blockspare-43b857f4-7fd3-4 .blockspare-section-head-wrap.blockspare-style19 .blockspare-title-wrapper .blockspare-title:before,.blockspare-43b857f4-7fd3-4 .blockspare-section-head-wrap.blockspare-style20 .blockspare-title-wrapper .blockspare-lower-dash{background-color:#8b249c}.blockspare-43b857f4-7fd3-4 .blockspare-section-head-wrap.blockspare-style12 .blockspare-title-wrapper .blockspare-title,.blockspare-43b857f4-7fd3-4 .blockspare-section-head-wrap.blockspare-style18 .blockspare-title-wrapper .blockspare-lower-dash{border-bottom-color:#8b249c}.blockspare-43b857f4-7fd3-4 .blockspare-section-head-wrap.blockspare-style17 .blockspare-title-wrapper .blockspare-title:before{border-top-color:#8b249c}.blockspare-43b857f4-7fd3-4 .blockspare-section-head-wrap.blockspare-style10 .blockspare-title-wrapper .blockspare-lower-dash,.blockspare-43b857f4-7fd3-4 .blockspare-section-head-wrap.blockspare-style12 .blockspare-title-wrapper .blockspare-lower-dash,.blockspare-43b857f4-7fd3-4 .blockspare-section-head-wrap.blockspare-style13 .blockspare-title-wrapper .blockspare-lower-dash,.blockspare-43b857f4-7fd3-4 .blockspare-section-head-wrap.blockspare-style14 .blockspare-title-wrapper .blockspare-upper-dash{background-color:#E5EFE3}@media screen and (max-width:1025px){.blockspare-43b857f4-7fd3-4 .blockspare-section-head-wrap .blockspare-title{font-size:40px}.blockspare-43b857f4-7fd3-4 .blockspare-section-head-wrap .blockspare-subtitle{font-size:16px}}@media screen and (max-width:768px){.blockspare-43b857f4-7fd3-4 .blockspare-section-head-wrap .blockspare-title{font-size:30px}.blockspare-43b857f4-7fd3-4 .blockspare-section-head-wrap .blockspare-subtitle{font-size:14px}}</style><div class="blockspare-section-head-wrap blockspare-style1 blockspare-left blockspare-hover-item"><div class="blockspare-title-wrapper"><span class="blockspare-title-dash blockspare-upper-dash"></span><h2 class="blockspare-title">Yesterdays the past, tomorrows the future, but today is a gift. Thats why its called the present.</h2><span class="blockspare-title-dash blockspare-lower-dash"></span></div><div class="blockspare-subtitle-wrapper"><span class="blockspare-title-dash blockspare-upper-dash"></span><p class="blockspare-subtitle">-<em> Bil Keane</em></p><span class="blockspare-title-dash blockspare-lower-dash"></span></div></div></div>
						<!-- /wp:blockspare/blockspare-section-header -->
						
						<!-- wp:blockspare/blockspare-social-sharing {"buttonOptions":"blockspare-icon-with-texts","customfontColorOption":"#e74c3c","custombackgroundColorOption":"#ffffff","uniqueClass":"blockspare-b5708475-f96e-4"} /--></div></div><div class="blockspare-bottom-separator blockspare-svg-show-front"><div class="blockspare-blocks blockspare-svg-wrapper blockspare-bottom-svg-wrap has-width-2-4 wp-block-blockspare-blockspare-container alignfull blockspare-6d7221be-f9f0-4 is-bottom-horizontally-flipped"><div class="blockspare-svg-svg-inner blockspare-separator-wrapper"><svg class="double-wave" preserveAspectRatio="none" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1946 175"><path class="st0" d="M-.5 27.7v146.8h1946V10.7s-170.6 20.4-265 57.2c0 0-374.1 116.7-794.2 24.7 0 0-414.1-100.9-673.1-92-.1 0-102.9 5.2-213.7 27.1z"></path><path class="st1" d="M1945.5 69.9s-425.5-100-888 20.5c0 0-342.6 63.3-611.4 43.8 0 0-224.9-40.3-446.6-84.4V174h1946V69.9z"></path><path d="M-.5 88s425.5-100 888 20.5c0 0 342.6 63.3 611.4 43.8 0 0 224.9-20.2 446.6-64.3v87H-.5V88z"></path></svg></div></div></div></div></div>
						<!-- /wp:blockspare/blockspare-container -->',
					)
                
				);

            return array_merge_recursive( $blocks_lists, $block_library_list );
        }
	}
}
Blockspare_Social_Sharing_Template_Block::get_instance()->run();