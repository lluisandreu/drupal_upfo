<div class="row">
	<?php foreach ($rows as $id => $row): ?>
	  <div<?php if ($classes_array[$id]) { print ' class="' . $classes_array[$id] .' medium-6 columns"';  } ?>>
	    <?php print $row; ?>
	  </div>
	<?php endforeach; ?>
</div>