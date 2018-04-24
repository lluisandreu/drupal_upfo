<a href="<?php print url('node/' . $fields['nid']->content); ?>">
	<?php print render($fields['field_blog_images']->content); ?>
</a>
<div class="blog-row-body clearfix">
	<h3><?php print render($fields['title']->content); ?></h3>
	<span class="blog-row-posted">Posted on <?php print render($fields['created']->content); ?></span>
	<?php print render($fields['body']->content); ?>
</div>