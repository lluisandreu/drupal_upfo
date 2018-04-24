<?php if (!empty($title)): ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>
<?php foreach ($rows as $id => $row): ?>
  <div<?php if ($classes_array[$id]) { print ' class="' . $classes_array[$id] .' columns medium-4"';  } ?>>
    <?php print $row; ?>
  </div>
<?php endforeach; ?>
