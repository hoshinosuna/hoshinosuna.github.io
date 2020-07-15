<?php
/**
 *Template Name: Frontpage-English
 *
 * @package OnePress
 */

$enable_notice = false;  // Notice有効化

get_header();

?>

	<div id="content" class="site-content">
		<main id="main" class="site-main" role="main">
            <?php
            if ( $enable_notice ) {
                section_notice();
            }

//            $page_data = get_page_by_path('access');
//            $page = get_post($page_data);
//            $content = $page -> post_content;
//
//            // 本文を表示する
//            echo $content;

            do_action( 'onepress_frontpage_before_section_parts' );

			if ( ! has_action( 'onepress_frontpage_section_parts' ) ) {

//				$sections = apply_filters( 'onepress_frontpage_sections_order', array(
//                    'features', 'about', 'news', 'services', 'videolightbox', 'gallery', 'counter', 'team', 'contact'
//                ) );
                $sections = apply_filters( 'onepress_frontpage_sections_order', array(
                     'hero', 'en/about'
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



            // ABOUT(en) ページを表示する
            $id = url_to_postid('en/about');
            $page = get_page( $id );
            echo $page -> post_content;



            // ACCESS(en) ページを表示する
            $id = url_to_postid('en/access');
            $page = get_page( $id );
            echo $page -> post_content;


            // Contact(en) ページを表示する
            $id = url_to_postid('en/contact');
            $page = get_page( $id );
            echo $page -> post_content;

			echo do_shortcode('[contact-form-7 id="960" title="Contact"]');


//            do_action( 'onepress_frontpage_before_section_parts' );
//
//			if ( ! has_action( 'onepress_frontpage_section_parts' ) ) {
//
//				$sections = apply_filters( 'onepress_frontpage_sections_order', array(
//                    'features', 'about', 'news', 'services', 'videolightbox', 'gallery', 'counter', 'team', 'contact'
//                ) );
//
//				foreach ( $sections as $section ){
//					/**
//                     * Load section if active
//                     *
//					 * @since 2.1.1
//					 */
//				    if ( Onepress_Config::is_section_active( $section ) ) {
//					    onepress_load_section( $section );
//                    }
//
//				}
//
//			} else {
//				do_action( 'onepress_frontpage_section_parts' );
//			}
//
//            do_action( 'onepress_frontpage_after_section_parts' );

			?>
		</main><!-- #main -->
	</div><!-- #content -->

<?php get_footer(); ?>
