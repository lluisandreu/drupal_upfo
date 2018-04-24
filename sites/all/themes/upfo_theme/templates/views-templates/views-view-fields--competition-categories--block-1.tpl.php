<div class="entry-row">
	<?php print render($fields['field_entry_images']->content); ?>
	<div class="entry-overlay">
		<span class="entry-id"><strong>#<?php print render($fields['nid']->content); ?></strong></span>
		<span> - </span>
		<span class="entry-date">Submitted <em><?php print render($fields['created']->content); ?> ago</em></span>
	</div>
	<p>In <?php print render($fields['field_entry_category']->content); ?></p>
</div>