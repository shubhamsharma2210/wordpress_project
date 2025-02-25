<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password,
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}

$twenty_twenty_one_comment_count = get_comments_number();
?>

<div id="comments" class="comments-area default-max-width <?php echo get_option( 'show_avatars' ) ? 'show-avatars' : ''; ?>">
<?php 
$comment_heading = get_field('comment_heading','option');
$comment_form_submit_button_text = get_field('comment_form_submit_button_text','option');
if($comment_form_submit_button_text){
	$translated_text =  $comment_form_submit_button_text;
}
else {
	$translated_text = 'Post Comment';
}

if($comment_heading) { ?><h2 class="comments-title"><?php echo $comment_heading; ?></h2><?php } ?>
<div class="CstCom-wrap">
	<?php if (is_user_logged_in()) {
	?>

  <div class="cst-icons-com"><i class="fas fa-comments"></i></div>

      <?php }
			comment_form(
				array(
					'title_reply'        => esc_html__( '', 'twentytwentyone' ),
					'title_reply_before' => '<h2 id="reply-title" class="comment-reply-title">',
					'title_reply_after'  => '</h2>',
					'label_submit' => $translated_text
				)
			);
	    ?>
		</div>
	<?php
	if ( have_comments() ) :
		?>
		<!-- <h2 class="comments-title">
			<?php if ( '1' === $twenty_twenty_one_comment_count ) : ?>
				<?php esc_html_e( '1 comment', 'twentytwentyone' ); ?>
			<?php else : ?>
				<?php
				printf(
					/* translators: %s: Comment count number. */
					esc_html( _nx( '%s comment', '%s comments', $twenty_twenty_one_comment_count, 'Comments title', 'twentytwentyone' ) ),
					esc_html( number_format_i18n( $twenty_twenty_one_comment_count ) )
				);
				?>
			<?php endif; ?>
		</h2> -->
		<!-- .comments-title -->
		<div class="commentList44">
		<div id="filter_comment">
		<ol class="comment-list commentList">
			<?php
			$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
			wp_list_comments(
				array(
					'avatar_size' => 60,
					'style'       => 'ul',
					'short_ping'  => true,
					'callback' => 'comments_custom',
					'per_page' => '2',
					'paged' => $paged,
				)
			);
			?>
				</ol>
		<!-- .comment-list -->
		
		</div>
		<?php
		the_comments_pagination(
			array(
				'next' => true,
				'prev' => true,
				'prev_text' => ('<'),
				'next_text' =>('>'),
				'mid_size' => 2,
			)
		);
		?>
		

		<?php if ( ! comments_open() ) : ?>
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'twentytwentyone' ); ?></p>
		<?php endif; ?>
		</div>
	<?php endif; ?>



</div><!-- #comments -->