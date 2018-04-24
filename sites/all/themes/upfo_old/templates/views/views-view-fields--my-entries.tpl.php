<?php print render($fields['field_entry_images']->content); ?>
<div class="entry-options">
	<ul class="button-group">
		<li><a data-tooltip aria-haspopup="true" href="<?php print url('node/' . $fields['nid']->content . '/edit'); ?>" class="button tiny has-tip" title="Edit Picture"><i class="fi-pencil"></i></a></li>
		<li><a data-tooltip aria-haspopup="true" href="<?php print url('node/' . $fields['nid']->content . '/delete'); ?>" class="button tiny has-tip" title="Delete Picture"><i class="fi-trash"></i></a></li>
	</ul>
</div>