<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'Blockspare_Progressbar_Template_Block' ) ) {

	class Blockspare_Progressbar_Template_Block extends Blockspare_Import_Block_Base{
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
						'key'      => 'bs_progressbar_1',
						'name'     => esc_html__( 'Progressbar 1', 'blockspare' ),
						'content'  => '<!-- wp:blockspare/blockspare-linearprogressbar {"uniqueId":"eaa0db"} -->
                        <div class="blockspare-block-progress-bar blockspare-block-interaction blockspare-block-eaa0db blockspare-eaa0db3a-eb31-4"><style>.blockspare-block-progress-bar{padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;margin-top:30px;margin-bottom:30px}</style><!-- wp:blockspare/blockspare-skillbar {"uniqueClass":"blockspare-033be5fc-c473-4","title":"JavaScripts","percentageTextColor":"#05047e","percentage":75,"barColor":"#05047e"} -->
                        <div class="wp-block-blockspare-blockspare-skillbar blockspare-033be5fc-c473-4 blockspare-progressbar-wrap"><style>.blockspare-033be5fc-c473-4 .blockspare-title{text-align:left;color:#404040;font-size:20px!important;font-family:Default;font-weight:}.blockspare-033be5fc-c473-4 .blockspare_progress-bar-label{color:#05047e}.blockspare-033be5fc-c473-4 .blockspare-skillbar{background-color:#f6f6f6}.blockspare-033be5fc-c473-4 .blockspare-skillbar-bar{background-color:#05047e}@media screen and (max-width:1025px){.blockspare-033be5fc-c473-4 .blockspare-title{font-size:undefinedpx!important}}@media screen and (max-width:768px){.blockspare-033be5fc-c473-4 .blockspare-title{font-size:undefinedpx!important}}</style><div class="blockspare_progress-bar-container"><div class="blockspare-precent-text-wrap"><div class="blockspare-title blockspare-progress-title">JavaScripts</div><div class="blockspare_progress-bar-label">75%</div></div><div class="blockspare-skillbar-item" data-percent="75"><div class="blockspare-skillbar barthickness-2"><div class="blockspare-skillbar-bar"></div></div></div></div></div>
                        <!-- /wp:blockspare/blockspare-skillbar -->
                        
                        <!-- wp:blockspare/blockspare-skillbar {"uniqueClass":"blockspare-d9d5c08b-a72d-4","title":"HTML","percentage":90,"barColor":"#8b249c"} -->
                        <div class="wp-block-blockspare-blockspare-skillbar blockspare-d9d5c08b-a72d-4 blockspare-progressbar-wrap"><style>.blockspare-d9d5c08b-a72d-4 .blockspare-title{text-align:left;color:#404040;font-size:20px!important;font-family:Default;font-weight:}.blockspare-d9d5c08b-a72d-4 .blockspare_progress-bar-label{color:#8b249c}.blockspare-d9d5c08b-a72d-4 .blockspare-skillbar{background-color:#f6f6f6}.blockspare-d9d5c08b-a72d-4 .blockspare-skillbar-bar{background-color:#8b249c}@media screen and (max-width:1025px){.blockspare-d9d5c08b-a72d-4 .blockspare-title{font-size:undefinedpx!important}}@media screen and (max-width:768px){.blockspare-d9d5c08b-a72d-4 .blockspare-title{font-size:undefinedpx!important}}</style><div class="blockspare_progress-bar-container"><div class="blockspare-precent-text-wrap"><div class="blockspare-title blockspare-progress-title">HTML</div><div class="blockspare_progress-bar-label">90%</div></div><div class="blockspare-skillbar-item" data-percent="90"><div class="blockspare-skillbar barthickness-2"><div class="blockspare-skillbar-bar"></div></div></div></div></div>
                        <!-- /wp:blockspare/blockspare-skillbar -->
                        
                        <!-- wp:blockspare/blockspare-skillbar {"uniqueClass":"blockspare-ed66a128-5183-4","title":"PHP","percentageTextColor":"#ec3c04","percentage":50,"barColor":"#ec3c04"} -->
                        <div class="wp-block-blockspare-blockspare-skillbar blockspare-ed66a128-5183-4 blockspare-progressbar-wrap"><style>.blockspare-ed66a128-5183-4 .blockspare-title{text-align:left;color:#404040;font-size:20px!important;font-family:Default;font-weight:}.blockspare-ed66a128-5183-4 .blockspare_progress-bar-label{color:#ec3c04}.blockspare-ed66a128-5183-4 .blockspare-skillbar{background-color:#f6f6f6}.blockspare-ed66a128-5183-4 .blockspare-skillbar-bar{background-color:#ec3c04}@media screen and (max-width:1025px){.blockspare-ed66a128-5183-4 .blockspare-title{font-size:undefinedpx!important}}@media screen and (max-width:768px){.blockspare-ed66a128-5183-4 .blockspare-title{font-size:undefinedpx!important}}</style><div class="blockspare_progress-bar-container"><div class="blockspare-precent-text-wrap"><div class="blockspare-title blockspare-progress-title">PHP</div><div class="blockspare_progress-bar-label">50%</div></div><div class="blockspare-skillbar-item" data-percent="50"><div class="blockspare-skillbar barthickness-2"><div class="blockspare-skillbar-bar"></div></div></div></div></div>
                        <!-- /wp:blockspare/blockspare-skillbar --></div>
                        <!-- /wp:blockspare/blockspare-linearprogressbar -->',
						'category' => [ esc_html__( 'progressbar', 'blockspare' ) ],
						'keywords' => [
							esc_html__( 'progressbar', 'blockspare' ),
							
						],
						'image'    => BLOCKSPARE_BLOCK_LIBRARY_URL.'progressbar/progressbar-1.png',
						
                    )
				);

            return array_merge_recursive( $blocks_lists, $block_library_list );
        }
	}
}
Blockspare_Progressbar_Template_Block::get_instance()->run();