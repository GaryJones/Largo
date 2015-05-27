<div class="<?php echo $classes; ?>">
	<?php echo get_the_post_thumbnail($post->ID, 'full'); ?>
	<?php if (!empty($thumb_meta)) {
		if (!empty($thumb_meta['credit'])) { ?>
			<p class="wp-media-credit"><?php echo $thumb_meta['credit'];
				if (!empty($thumb_meta['organization'])) { ?>/<?php echo $thumb_meta['organization']; } ?></p>
		<?php }

		if (!empty($thumb_meta['caption'])) { ?>
			<p class="wp-caption-text"><?php echo $thumb_meta['caption']; ?></p>
		<?php }
	} ?>
</div>
