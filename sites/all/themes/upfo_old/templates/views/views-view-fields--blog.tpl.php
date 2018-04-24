<a href="<?php print url('node/' . $fields['nid']->content); ?>">
	<?php print render($fields['field_blog_images']->content); ?>
</a>
<div class="blog-row-body clearfix">
	<h3><?php print render($fields['title']->content); ?></h3>
	<p class="blog-row-posted">Posted on <?php print render($fields['created']->content); ?></p>
	<a href="<?php print url('node/' . $fields['nid']->content); ?>" class="right button secondary tiny"><i class="fi-eye"></i> View</a>
	<?php if(user_access('edit any blog content')): ?>
		<a href="<?php print url('node/' . $fields['nid']->content . '/edit'); ?>" class="right button secondary tiny"><i class="fi-pencil"></i> Edit</a>
	<?php endif; ?>
</div>