<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'Blockspare_Accordion_Template_Block' ) ) {

	class Blockspare_Accordion_Template_Block extends Blockspare_Import_Block_Base{
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
						'key'      => 'bs_accrodion_1',
						'name'     => esc_html__( 'Accordion', 'blockspare' ),
						'content'  => '<!-- wp:blockspare/blockspare-container {"paddingTop":38,"paddingBottom":82,"marginTop":0,"marginBottom":0,"uniqueClass":"blockspare-0639da35-947b-4","backGroundColor":"#efefef"} -->
						<div class="wp-block-blockspare-blockspare-container alignfull blockspare-0639da35-947b-4"><style>.blockspare-0639da35-947b-4 .blockspare-block-container-wrapper{background-color:#efefef;padding-top:38px;padding-right:0px;padding-bottom:82px;padding-left:0px;margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px;border-radius:null}.blockspare-0639da35-947b-4 .blockspare-image-wrap{background-image:}</style><div class="blockspare-block-container-wrapper alignfull"><div class="blockspare-container-background blockspare-image-wrap has-background-opacity-100 has-background-opacity"></div><div class="blockspare-container"><div class="blockspare-inner-blocks blockspare-inner-wrapper-blocks"><!-- wp:blockspare/blockspare-section-header {"uniqueClass":"blockspare-c036b23a-614a-4","align":"wide","headerTitle":"Frequently Asked Question","titleFontSize":40,"headerSubTitle":"Frequently Asked Question","headertitleColor":"#000000","headerpaddingTop":0,"headerpaddingLeft":0,"headermarginTop":0,"titlePaddingTop":0} -->
						<div class="wp-block-blockspare-blockspare-section-header alignwide blockspare-c036b23a-614a-4 blockspare-section-header-wrapper blockspare-blocks alignwide"><style>.blockspare-c036b23a-614a-4 .blockspare-section-head-wrap{background-color:transparent;text-align:center;padding-top:0px;padding-right:20px;padding-bottom:10px;margin-top:0px;margin-bottom:30px;padding-left:0px}.blockspare-c036b23a-614a-4 .blockspare-section-head-wrap .blockspare-title{color:#000000;font-size:40px;font-family:Default;padding-top:0px;padding-bottom:5px}.blockspare-c036b23a-614a-4 .blockspare-section-head-wrap .blockspare-subtitle{color:#6d6d6d;font-size:18px;font-family:Default;padding-top:5px;padding-bottom:5px}.blockspare-c036b23a-614a-4 .blockspare-title-dash{color:#8b249c}@media screen and (max-width:1025px){.blockspare-c036b23a-614a-4 .blockspare-section-head-wrap .blockspare-title{font-size:undefinedpx}.blockspare-c036b23a-614a-4 .blockspare-section-head-wrap .blockspare-subtitle{font-size:undefinedpx}}@media screen and (max-width:768px){.blockspare-c036b23a-614a-4 .blockspare-section-head-wrap .blockspare-title{font-size:undefinedpx}.blockspare-c036b23a-614a-4 .blockspare-section-head-wrap .blockspare-subtitle{font-size:undefinedpx}}</style><div class="blockspare-section-head-wrap blockspare-style1 blockspare-center"><div class="blockspare-title-wrapper"><span class="blockspare-title-dash blockspare-upper-dash"></span><h2 class="blockspare-title">Frequently Asked Question</h2><span class="blockspare-title-dash blockspare-lower-dash"></span></div><div class="blockspare-subtitle-wrapper"><span class="blockspare-title-dash blockspare-upper-dash"></span><p class="blockspare-subtitle">Frequently Asked Question</p><span class="blockspare-title-dash blockspare-lower-dash"></span></div></div></div>
						<!-- /wp:blockspare/blockspare-section-header -->
						
						<!-- wp:blockspare/blockspare-accordion {"uniqueId":"d5ad69","align":"center"} -->
						<div class="aligncenter blockspare-block-accordion blockspare-block blockspare-block-d5ad69" data-item-toggle="true"><!-- wp:blockspare/accordion-item {"uniqueId":"7be692","itemNumber":0,"heading":"How to update new features?","defaultText":"Ipsam per dolores minus natoque? Rutrum dolorem voluptates euismod pharetra! Rhoncus distinctio cupiditate accusantium. Cillum aliquid.","name":"fa fa-plus-circle","panelColor":"#000000","panelActiveColor":"#d3d3d3","textColor":"#ffffff","activeTextColor":"#000000"} -->
						<div class="wp-block-blockspare-accordion-item blockspare-block-7be692"><div class="blockspare-accordion-item blockspare-type-fill " data-act-color="#000000" data-txt-color="#ffffff" data-active="#d3d3d3" data-pan="#000000" style="margin-bottom:10px"><div class="blockspare-accordion-panel  blockspare-right" style="background-color:#000000"><span class="blockspare-accordion-panel-handler" role="button" style="color:#ffffff"><span class="blockspare-accordion-icon fa fa-plus-circle"></span><span class="blockspare-accordion-panel-handler-label">How to update new features?</span></span></div><div class="blockspare-accordion-body" style="background-color:#fff" data-bg="#fff"><!-- wp:paragraph {"fontSize":"small"} -->
						<p class="has-small-font-size">Ipsam per dolores minus natoque? Rutrum dolorem voluptates euismod pharetra! Rhoncus distinctio cupiditate accusantium. Cillum aliquid.</p>
						<!-- /wp:paragraph --></div></div></div>
						<!-- /wp:blockspare/accordion-item -->
						
						<!-- wp:blockspare/accordion-item {"uniqueId":"92ff7a","itemNumber":1,"heading":"How to connect with the support?","defaultText":"Ipsam per dolores minus natoque? Rutrum dolorem voluptates euismod pharetra! Rhoncus distinctio cupiditate accusantium. Cillum aliquid.","name":"fa fa-plus-circle","panelColor":"#000000","panelActiveColor":"#d3d3d3","textColor":"#ffffff","activeTextColor":"#000000"} -->
						<div class="wp-block-blockspare-accordion-item blockspare-block-92ff7a"><div class="blockspare-accordion-item blockspare-type-fill " data-act-color="#000000" data-txt-color="#ffffff" data-active="#d3d3d3" data-pan="#000000" style="margin-bottom:10px"><div class="blockspare-accordion-panel  blockspare-right" style="background-color:#000000"><span class="blockspare-accordion-panel-handler" role="button" style="color:#ffffff"><span class="blockspare-accordion-icon fa fa-plus-circle"></span><span class="blockspare-accordion-panel-handler-label">How to connect with the support?</span></span></div><div class="blockspare-accordion-body" style="background-color:#fff" data-bg="#fff"><!-- wp:paragraph {"fontSize":"small"} -->
						<p class="has-small-font-size">Ipsam per dolores minus natoque? Rutrum dolorem voluptates euismod pharetra! Rhoncus distinctio cupiditate accusantium. Cillum aliquid.</p>
						<!-- /wp:paragraph --></div></div></div>
						<!-- /wp:blockspare/accordion-item -->
						
						<!-- wp:blockspare/accordion-item {"uniqueId":"ce8dd8","itemNumber":2,"heading":"How to import demos?","defaultText":"Ipsam per dolores minus natoque? Rutrum dolorem voluptates euismod pharetra! Rhoncus distinctio cupiditate accusantium. Cillum aliquid.","name":"fa fa-plus-circle","panelColor":"#000000","panelActiveColor":"#d3d3d3","textColor":"#ffffff","activeTextColor":"#000000"} -->
						<div class="wp-block-blockspare-accordion-item blockspare-block-ce8dd8"><div class="blockspare-accordion-item blockspare-type-fill " data-act-color="#000000" data-txt-color="#ffffff" data-active="#d3d3d3" data-pan="#000000" style="margin-bottom:10px"><div class="blockspare-accordion-panel  blockspare-right" style="background-color:#000000"><span class="blockspare-accordion-panel-handler" role="button" style="color:#ffffff"><span class="blockspare-accordion-icon fa fa-plus-circle"></span><span class="blockspare-accordion-panel-handler-label">How to import demos?</span></span></div><div class="blockspare-accordion-body" style="background-color:#fff" data-bg="#fff"><!-- wp:paragraph {"fontSize":"small"} -->
						<p class="has-small-font-size">Ipsam per dolores minus natoque? Rutrum dolorem voluptates euismod pharetra! Rhoncus distinctio cupiditate accusantium. Cillum aliquid.</p>
						<!-- /wp:paragraph --></div></div></div>
						<!-- /wp:blockspare/accordion-item --></div>
						<!-- /wp:blockspare/blockspare-accordion --></div></div></div></div>
						<!-- /wp:blockspare/blockspare-container -->',
						'category' => [ esc_html__( 'accordion', 'blockspare' ) ],
						'keywords' => [
							esc_html__( 'accordion', 'blockspare' ),
							
						],
						'image'    => BLOCKSPARE_BLOCK_LIBRARY_URL.'accordion/accordion-1.png',
				),
				array(
					'type'     => 'block',
					'key'      => 'bs_accrodion_2',
					'name'     => esc_html__( 'Accordion 2', 'blockspare' ),
					'content'  => '<!-- wp:blockspare/blockspare-accordion {"uniqueId":"b6cd03"} -->
					<div class="blockspare-block-accordion blockspare-block blockspare-block-b6cd03" data-item-toggle="true"><!-- wp:blockspare/accordion-item {"uniqueId":"768099","itemNumber":0,"heading":"Collect Ideas","defaultText":"Ipsam per dolores minus natoque? Rutrum dolorem voluptates euismod pharetra! Rhoncus distinctio cupiditate accusantium. Cillum aliquid.","panelColor":"#cffbf1","panelActiveColor":"#cffbf1","textColor":"#2e947d","activeTextColor":"#2e947d"} -->
					<div class="wp-block-blockspare-accordion-item blockspare-block-768099"><div class="blockspare-accordion-item blockspare-type-fill " data-act-color="#2e947d" data-txt-color="#2e947d" data-active="#cffbf1" data-pan="#cffbf1" style="margin-bottom:10px"><div class="blockspare-accordion-panel  blockspare-right" style="background-color:#cffbf1"><span class="blockspare-accordion-panel-handler" role="button" style="color:#2e947d"><span class="blockspare-accordion-icon fa fa-plus"></span><span class="blockspare-accordion-panel-handler-label">Collect Ideas</span></span></div><div class="blockspare-accordion-body" style="background-color:#fff" data-bg="#fff"><!-- wp:paragraph -->
					<p>Ipsam per dolores minus natoque? Rutrum dolorem voluptates euismod pharetra! Rhoncus distinctio cupiditate accusantium. Cillum aliquid.</p>
					<!-- /wp:paragraph --></div></div></div>
					<!-- /wp:blockspare/accordion-item -->
					
					<!-- wp:blockspare/accordion-item {"uniqueId":"55f919","itemNumber":1,"heading":"Data Analysis","defaultText":"Ipsam per dolores minus natoque? Rutrum dolorem voluptates euismod pharetra! Rhoncus distinctio cupiditate accusantium. Cillum aliquid.","panelColor":"#cffbf1","panelActiveColor":"#cffbf1","textColor":"#2e947d","activeTextColor":"#2e947d"} -->
					<div class="wp-block-blockspare-accordion-item blockspare-block-55f919"><div class="blockspare-accordion-item blockspare-type-fill " data-act-color="#2e947d" data-txt-color="#2e947d" data-active="#cffbf1" data-pan="#cffbf1" style="margin-bottom:10px"><div class="blockspare-accordion-panel  blockspare-right" style="background-color:#cffbf1"><span class="blockspare-accordion-panel-handler" role="button" style="color:#2e947d"><span class="blockspare-accordion-icon fa fa-plus"></span><span class="blockspare-accordion-panel-handler-label">Data Analysis</span></span></div><div class="blockspare-accordion-body" style="background-color:#fff" data-bg="#fff"><!-- wp:paragraph -->
					<p>Ipsam per dolores minus natoque? Rutrum dolorem voluptates euismod pharetra! Rhoncus distinctio cupiditate accusantium. Cillum aliquid.</p>
					<!-- /wp:paragraph --></div></div></div>
					<!-- /wp:blockspare/accordion-item -->
					
					<!-- wp:blockspare/accordion-item {"uniqueId":"caeeff","itemNumber":2,"heading":"Finalize Product","defaultText":"Ipsam per dolores minus natoque? Rutrum dolorem voluptates euismod pharetra! Rhoncus distinctio cupiditate accusantium. Cillum aliquid.","panelColor":"#cffbf1","panelActiveColor":"#cffbf1","textColor":"#2e947d","activeTextColor":"#2e947d"} -->
					<div class="wp-block-blockspare-accordion-item blockspare-block-caeeff"><div class="blockspare-accordion-item blockspare-type-fill " data-act-color="#2e947d" data-txt-color="#2e947d" data-active="#cffbf1" data-pan="#cffbf1" style="margin-bottom:10px"><div class="blockspare-accordion-panel  blockspare-right" style="background-color:#cffbf1"><span class="blockspare-accordion-panel-handler" role="button" style="color:#2e947d"><span class="blockspare-accordion-icon fa fa-plus"></span><span class="blockspare-accordion-panel-handler-label">Finalize Product</span></span></div><div class="blockspare-accordion-body" style="background-color:#fff" data-bg="#fff"><!-- wp:paragraph -->
					<p>Ipsam per dolores minus natoque? Rutrum dolorem voluptates euismod pharetra! Rhoncus distinctio cupiditate accusantium. Cillum aliquid.</p>
					<!-- /wp:paragraph --></div></div></div>
					<!-- /wp:blockspare/accordion-item -->
					
					<!-- wp:blockspare/accordion-item {"uniqueId":"0712c5","itemNumber":2,"heading":"Submit Product ","defaultText":"Ipsam per dolores minus natoque? Rutrum dolorem voluptates euismod pharetra! Rhoncus distinctio cupiditate accusantium. Cillum aliquid.","panelColor":"#cffbf1","panelActiveColor":"#cffbf1","textColor":"#2e947d","activeTextColor":"#2e947d"} -->
					<div class="wp-block-blockspare-accordion-item blockspare-block-0712c5"><div class="blockspare-accordion-item blockspare-type-fill " data-act-color="#2e947d" data-txt-color="#2e947d" data-active="#cffbf1" data-pan="#cffbf1" style="margin-bottom:10px"><div class="blockspare-accordion-panel  blockspare-right" style="background-color:#cffbf1"><span class="blockspare-accordion-panel-handler" role="button" style="color:#2e947d"><span class="blockspare-accordion-icon fa fa-plus"></span><span class="blockspare-accordion-panel-handler-label">Submit Product </span></span></div><div class="blockspare-accordion-body" style="background-color:#fff" data-bg="#fff"><!-- wp:paragraph -->
					<p>Ipsam per dolores minus natoque? Rutrum dolorem voluptates euismod pharetra! Rhoncus distinctio cupiditate accusantium. Cillum aliquid.</p>
					<!-- /wp:paragraph --></div></div></div>
					<!-- /wp:blockspare/accordion-item --></div>
					<!-- /wp:blockspare/blockspare-accordion -->',
					'category' => [ esc_html__( 'accordion', 'blockspare' ) ],
					'keywords' => [
						esc_html__( 'accordion', 'blockspare' ),
						
					],
					'image'    => BLOCKSPARE_BLOCK_LIBRARY_URL.'accordion/accordion-2.png',
				),
				array(
					'type'     => 'block',
					'key'      => 'bs_accrodion_3',
					'name'     => esc_html__( 'Accordion 3', 'blockspare' ),
					'content'  => '<!-- wp:blockspare/blockspare-accordion {"uniqueId":"282d4e"} -->
					<div class="blockspare-block-accordion blockspare-block blockspare-block-282d4e" data-item-toggle="true"><!-- wp:blockspare/accordion-item {"uniqueId":"4e0a36","itemNumber":0,"heading":"Quality Food","defaultText":"Ipsam per dolores minus natoque? Rutrum dolorem voluptates euismod pharetra! Rhoncus distinctio cupiditate accusantium. Cillum aliquid.","panelColor":"#ebd489","panelActiveColor":"#a90409","textColor":"#000000"} -->
					<div class="wp-block-blockspare-accordion-item blockspare-block-4e0a36"><div class="blockspare-accordion-item blockspare-type-fill " data-act-color="#fff" data-txt-color="#000000" data-active="#a90409" data-pan="#ebd489" style="margin-bottom:10px"><div class="blockspare-accordion-panel  blockspare-right" style="background-color:#ebd489"><span class="blockspare-accordion-panel-handler" role="button" style="color:#000000"><span class="blockspare-accordion-icon fa fa-plus"></span><span class="blockspare-accordion-panel-handler-label">Quality Food</span></span></div><div class="blockspare-accordion-body" style="background-color:#fff" data-bg="#fff"><!-- wp:paragraph -->
					<p>Ipsam per dolores minus natoque? Rutrum dolorem voluptates euismod pharetra! Rhoncus distinctio cupiditate accusantium. Cillum aliquid.</p>
					<!-- /wp:paragraph --></div></div></div>
					<!-- /wp:blockspare/accordion-item -->
					
					<!-- wp:blockspare/accordion-item {"uniqueId":"f40c68","itemNumber":0,"heading":"Skills Chef","defaultText":"Ipsam per dolores minus natoque? Rutrum dolorem voluptates euismod pharetra! Rhoncus distinctio cupiditate accusantium. Cillum aliquid.","panelColor":"#ebd489","panelActiveColor":"#a90409","textColor":"#000000"} -->
					<div class="wp-block-blockspare-accordion-item blockspare-block-f40c68"><div class="blockspare-accordion-item blockspare-type-fill " data-act-color="#fff" data-txt-color="#000000" data-active="#a90409" data-pan="#ebd489" style="margin-bottom:10px"><div class="blockspare-accordion-panel  blockspare-right" style="background-color:#ebd489"><span class="blockspare-accordion-panel-handler" role="button" style="color:#000000"><span class="blockspare-accordion-icon fa fa-plus"></span><span class="blockspare-accordion-panel-handler-label">Skills Chef</span></span></div><div class="blockspare-accordion-body" style="background-color:#fff" data-bg="#fff"><!-- wp:paragraph -->
					<p>Ipsam per dolores minus natoque? Rutrum dolorem voluptates euismod pharetra! Rhoncus distinctio cupiditate accusantium. Cillum aliquid.</p>
					<!-- /wp:paragraph --></div></div></div>
					<!-- /wp:blockspare/accordion-item -->
					
					<!-- wp:blockspare/accordion-item {"uniqueId":"96c607","itemNumber":1,"heading":"Management ","defaultText":"Ipsam per dolores minus natoque? Rutrum dolorem voluptates euismod pharetra! Rhoncus distinctio cupiditate accusantium. Cillum aliquid.","panelColor":"#ebd489","panelActiveColor":"#a90409","textColor":"#000000"} -->
					<div class="wp-block-blockspare-accordion-item blockspare-block-96c607"><div class="blockspare-accordion-item blockspare-type-fill " data-act-color="#fff" data-txt-color="#000000" data-active="#a90409" data-pan="#ebd489" style="margin-bottom:10px"><div class="blockspare-accordion-panel  blockspare-right" style="background-color:#ebd489"><span class="blockspare-accordion-panel-handler" role="button" style="color:#000000"><span class="blockspare-accordion-icon fa fa-plus"></span><span class="blockspare-accordion-panel-handler-label">Management </span></span></div><div class="blockspare-accordion-body" style="background-color:#fff" data-bg="#fff"><!-- wp:paragraph -->
					<p>Ipsam per dolores minus natoque? Rutrum dolorem voluptates euismod pharetra! Rhoncus distinctio cupiditate accusantium. Cillum aliquid.</p>
					<!-- /wp:paragraph --></div></div></div>
					<!-- /wp:blockspare/accordion-item --></div>
					<!-- /wp:blockspare/blockspare-accordion -->',
					'category' => [ esc_html__( 'accordion', 'blockspare' ) ],
					'keywords' => [
						esc_html__( 'accordion', 'blockspare' ),
						
					],
					'image'    => BLOCKSPARE_BLOCK_LIBRARY_URL.'accordion/accordion-3.png',
				)
		
                
				);

            return array_merge_recursive( $blocks_lists, $block_library_list );
        }
	}
}
Blockspare_Accordion_Template_Block::get_instance()->run();