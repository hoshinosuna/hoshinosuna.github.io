<?php
/**
 * Template Name: FAQ
 *
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package OnePress
 */

get_header();

// $layout = onepress_get_layout();
$layout = 'no-sidebar';


/**
 * @since 2.0.0
 * @see onepress_display_page_title
 */
do_action( 'onepress_page_before_content' );

?>

<?php
/**
	 csv import
 */
 $url  = esc_url( home_url( '/' )) . 'wp-content/themes/onepress/assets/csv/faq.csv';

 $file = new NoRewindIterator( new SplFileObject( $url ));
 $file->setFlags(SplFileObject::READ_CSV);
 $i = 0;

 ?>
	<div id="content" class="site-content">
        <?php onepress_breadcrumb(); ?>
		<div id="content-inside" class="container <?php echo esc_attr( $layout ); ?>">
			<div id="primary" class="content-area">
				<main id="main" class="site-main" role="main">
					<section id="faq">
					  <h1>FAQ</h1>

					  <div class="faq-area">
							<dl class="faq-box">
							<?php
							// ファイル取得
						  foreach ($file as $key => $line) {
						 	 // ヘッダを取得
						 	 if ( $i === 0 ) {
						 		 $csv_heads = $line;
						 		 $csv_heads_key = array_flip($csv_heads);
						 		 $head_count = count($csv_heads);
						 		 $i ++;
						 		 continue;
						 	 }

								if ($line[$csv_heads_key['No']] === 'head-line') {
									// 見出し
									?>
									<h2><?php echo $line[$csv_heads_key['remark']]; ?></h2>
								<?php
								} else {
									// FAQ list
								?>
							<div id="question<?php echo $line[$csv_heads_key['No']]; ?>" class="faq-column">
							<dt class="question" onclick="toggleAnswer('<?php echo $line[$csv_heads_key['No']]; ?>');">
					          <span class="ttl"><?php echo 'Q' . $line[$csv_heads_key['No']]; ?></span>
					          <span class="txt"><?php echo $line[$csv_heads_key['question']]; ?></span></dt>
								<dd class="answer"><?php echo $line[$csv_heads_key['answer']]; ?></dd></div>
									<?php
								}
								$i++;
							 }
							 ?>
						 </dl><!-- #faq-box -->
					 </div><!-- #faq-area -->
					</section><!-- #faq -->
				</main><!-- #main -->
			</div><!-- #primary -->
		</div><!--#content-inside -->
	</div><!-- #content -->

<?php get_footer(); ?>
