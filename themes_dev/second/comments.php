<div id="comment-area">
	<div class="comment-inner">
		<?php if(have_comments()): ?>
		<h2>Comments</h2>
		<ol class="commets-list">
		<?php wp_list_comments('avatar_size=48'); ?>
		</ol>
		<div class="border post-border"></div>
		<?php endif; ?>
		<?php $args = array(
			'title_reply' => 'Leave a Comment',
			'label_submit' => 'Submit Comment',
			'comment_notes_before' => '',
			'comment_notes_after'  => '',
			'fields' => array(
					'author' => '<p class="comment-form-author comment-form">' .
								'<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="40"' . $aria_req . ' placeholder="Name" /></p>',
					'email' => '<p class="comment-form-email comment-form">' .
								'<input id="email" name="email" ' . ( $html5 ? 'type="email"' : 'type="text"' ) . ' value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="40"' . $aria_req . 'placeholder="Email" /></p>',
					'url' => '<p class="comment-form-url">' .
								'<input id="url" name="url" ' . ( $html5 ? 'type="url"' : 'type="text"' ) . ' value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="40"' . $aria_req . 'placeholder="URL" /></p>',
					),
			'comment_field' => '<p class="comment-form-comment">' . '<textarea id="comment" name="comment" cols="50" rows="10" aria-required="true"' . $aria_req . ' placeholder="Comment" /></textarea></p>',
			);
		comment_form( $args ); ?>
	</div>
</div>