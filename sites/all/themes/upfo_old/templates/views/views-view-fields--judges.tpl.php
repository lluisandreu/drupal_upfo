<?php print render($fields['field_judge_picture']->content); ?>
<div class="judge-name"><?php print render($fields['title']->content); ?></div>
<?php if(user_access('edit any judge content')): ?>
	<a href="<?php print url('node/' . $fields['nid']->content . '/edit'); ?>" class="button secondary tiny"><i class="fi-pencil"></i></a>
<?php endif; ?>
<div class="judge-job-title"><?php print render($fields['field_judge_jobtitle']->content); ?></div>
<div class="judge-description"><?php print render($fields['body']->content); ?></div>
