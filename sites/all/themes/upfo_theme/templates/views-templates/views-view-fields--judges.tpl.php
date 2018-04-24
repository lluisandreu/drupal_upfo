<h4><?php print render($fields['title']->content); ?></h4>
<?php if(user_access('edit any judge content')): ?>
	<a href="<?php print url('node/' . $fields['nid']->content . '/edit'); ?>" class="button secondary tiny"><i class="fa fa-pencil"></i></a>
<?php endif; ?>
<?php if(isset($fields['field_judge_jobtitle']->content)): ?>
	<p><strong><?php print render($fields['field_judge_jobtitle']->content); ?></strong></p>
<?php endif; ?>
<p><?php print render($fields['body']->content); ?></p>
