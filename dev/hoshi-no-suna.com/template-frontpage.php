<?php
/**
 *Template Name: Frontpage
 *
 * @package OnePress
 */

$enable_notice = true;  // Notice有効化

get_header(); ?>

	<div id="content" class="site-content">
		<main id="main" class="site-main" role="main">
            <?php
            if ( $enable_notice ) {
                // section_notice();
								section_notice_20200809_campaign();
            }


            do_action( 'onepress_frontpage_before_section_parts' );

			if ( ! has_action( 'onepress_frontpage_section_parts' ) ) {

				$sections = apply_filters( 'onepress_frontpage_sections_order', array(
                    'features', 'about', 'news', 'services', 'videolightbox', 'gallery', 'counter', 'team', 'contact'
                ) );

				foreach ( $sections as $section ){
					/**
                     * Load section if active
                     *
					 * @since 2.1.1
					 */
				    if ( Onepress_Config::is_section_active( $section ) ) {
					    onepress_load_section( $section );
                    }

				}

			} else {
				do_action( 'onepress_frontpage_section_parts' );
			}

            do_action( 'onepress_frontpage_after_section_parts' );

			?>
		</main><!-- #main -->
	</div><!-- #content -->

<?php get_footer(); ?>
