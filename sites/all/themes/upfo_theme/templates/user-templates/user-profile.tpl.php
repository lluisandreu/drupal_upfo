<?php
global $user;
$useruid = arg(1); 
$theuser = user_load($useruid);
if(isset($theuser->field_user_membership_type[LANGUAGE_NONE][0])) {
	$user_node_limit = $theuser->field_user_membership_type[LANGUAGE_NONE][0]['value'];
}
?>
<div class="profile"<?php print $attributes; ?>>
	<ul class="button-group">
		<li><a href="<?php print url('user/' . $useruid . '/edit'); ?>" class="small button secondary"><i class="fi-pencil"></i> Edit</a></li>
		<li><a href="<?php print url('user/' . $useruid . '/cancel'); ?>" class="small button secondary"><i class="fi-trash"></i> Cancel Account</a></li>
		<li><a href="<?php print url('user/logout'); ?>" class="small button alert"><i class="fi-power"></i> Logout</a></li>
	</ul>
	<div class="panel">
		<div class="profile-name"><h2><?php print $theuser->name; ?></h2></div>
		<div class="profile-email"><a href="mailto:<?php print $theuser->mail; ?>"><?php print $theuser->mail; ?></a></div>
		<?php if(isset($user_node_limit)): ?><div class="profile-membership">
			You can upload <strong><?php print format_plural($user_node_limit, "one image.", "@count images."); ?></strong>
		</div><?php endif; ?>
		<div class="profile-date">Member from <?php print date("d M Y", $theuser->created); ?></div>
		<?php if(user_access('View own orders of any type')): ?>
			<hr><a href="#" data-reveal-id="user-order"><i class="fi-info"></i> View user order and billing information</a>
		<?php endif; ?>
	</div>
</div>
<?php
$my_entries = views_embed_view('my_entries', 'block_1', $useruid);
if (!empty($my_entries)) {
	print '<h2>My Entries</h2>';
	print render($my_entries);
}

?>
<div id="user-order" class="profile-order reveal-modal" data-reveal aria-labelledby="user-order" aria-hidden="true" role="dialog">
<?php 
$user_order = views_embed_view('user_orders', 'default', $useruid);
print render($user_order);
?>
<a class="close-reveal-modal" aria-label="Close">&#215;</a>	
</div>