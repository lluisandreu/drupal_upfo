<ul data-orbit>
<?php foreach ($rows as $id => $row): ?>
  <li<?php if ($classes_array[$id]) { print ' class="' . $classes_array[$id] .'"';  } ?>>
    <?php print $row; ?>
  </li>
<?php endforeach; ?>
</ul>
<div class="entries-copyright">
	<small>&copy; All images the copyright of the authors</small>
</div>