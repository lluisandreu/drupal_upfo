<?php $useruid = arg(1); ?>
<ul class="button-group">
	<li><a href="<?php print url('user/' . $useruid . '/edit'); ?>" class="small button secondary"><i class="fi-pencil"></i> Edit</a></li>
	<li><a href="<?php print url('user/' . $useruid . '/cancel'); ?>" class="small button secondary"><i class="fi-trash"></i> Cancel Account</a></li>
	<li><a href="<?php print url('user/logout'); ?>" class="small button alert"><i class="fi-power"></i> Logout</a></li>
</ul>
<?php if (!empty($title)): ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>
<?php foreach ($rows as $id => $row): ?>
  <div<?php if ($classes_array[$id]) { print ' class="panel ' . $classes_array[$id] .'"';  } ?>>
    <?php print $row; ?>
  </div>
<?php endforeach; ?>