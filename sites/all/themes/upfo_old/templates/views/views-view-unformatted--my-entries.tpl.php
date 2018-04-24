<?php if (!empty($title)): ?>
<h3><?php print $title; ?></h3>
<?php endif; ?>
<ul class="large-block-grid-4 medium-block-grid-2 small-block-grid-1">
<?php
// We will show the number of available entries per user depending on their membership
if ( arg(0) == 'user' && is_numeric(arg(1)) ) {
	$theuser = user_load(arg(1));
	if(in_array("member", $theuser->roles)) {
		$user_node_limit = 4;
		if(isset($theuser->field_user_membership_type['und'][0]['value'])) {
			$user_node_limit = $theuser->field_user_membership_type[LANGUAGE_NONE][0]['value'];
		}
		for ($i = 0; $i <= ($user_node_limit - 1); $i++) {
			if(isset($rows[$i])) {
				print '<li>' .$rows[$i]. '</li>';
			} else {
				print '<li><div class="panel add-one"><a href="' . url('node/add/entry'). '"><i class="fi-camera"></i> Submit image</a></div></li>';
			}
		}
	} else {
		foreach ($rows as $id => $row) {
			print '<li>' .$row. '</li>';
		}
	}
}
?>
</ul>