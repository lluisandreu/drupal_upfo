<div id="page">
	<header id="header">
		<div class="row">
			<div class="large-3 medium-10 small-10 columns sitename">
				<a href="<?php print $front_page; ?>">UrbanPhotoFest <strong>Open</strong></a>
			</div>
			<div id="menu-toggler" class="small-2 columns hide-for-large-up menu-toggler">
				<a href="#" id="menu-toggler"><i class="fa fa-bars"></i></a>
			</div>
			<nav id="main-nav" role="navigation" class="medium-12 large-9 columns">
				<?php if($main_nav): ?>
					<?php print render($main_nav); ?>
				<?php endif; ?>
				<?php if($admin_menu && $is_admin || in_array("administrator", $user->roles)): ?>
					<div class="admin-menu">
					<?php print render($admin_menu); ?>
					</div>
				<?php endif; ?>
			</nav>
		</div>
	</header>
	<main id="main">
		<?php if(!$is_front): ?>
			<div class="row">
				<div class="large-9 column">
					<h1><?php print $title; ?></h1>
				</div>
			</div>
		<?php endif; ?>
		<div class="row">
			<div class="column">
				<?php print $messages; ?>
			</div>
		</div>
		<?php if (isset($tabs)): ?>
			<div class="row">
				<div class="tabs column"><?php print render($tabs); ?></div>
			</div>
		<?php endif; ?>
		<?php if(!$is_front): ?>
		<div class="row">
		<?php endif; ?>
			<?php if(!isset($node)): ?>
				<div class="column">
			<?php endif; ?>
			<?php print render($page['content']); ?>
			<?php if(!isset($node)): ?>
				</div>
			<?php endif; ?>
		<?php if(!$is_front): ?>
		</div>
		<?php endif; ?>
	</main>
	<footer id="footer">
		<div class="row">
			<div class="medium-5 columns footer-first">
				<?php print render($page['footer_firstcolumn']); ?>
				<br>
				<small>Website designed and developed by <a href="http://www.lluisandreu.com/" target="_blank">lluisandreu.com</a></small>
			</div>
			<div class="medium-7 columns footer-first">
				<?php print render($page['footer_secondcolumn']); ?>
			</div>
		</div>
	</footer>
</div>