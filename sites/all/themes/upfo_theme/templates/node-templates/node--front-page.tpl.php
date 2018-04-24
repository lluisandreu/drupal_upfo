<section id="front-carousel">
	<?php print render($content['field_front_carousel']); ?>
</section>
<section id="front-intro">
	<div class="row">
		<div class="column">
			<h1><?php print $title; ?></h1>
			<?php if($content['field_front_edition']): ?>
				<h3><i><?php print render($content['field_front_edition']); ?></i></h3>
			<?php endif; ?>
			<?php if($content['field_front_subtitle']): ?>
				<h2><?php print render($content['field_front_subtitle']); ?></h2>
			<?php endif; ?>
		</div>
	</div>
	<?php if($content['field_front_abstract']): ?>
		<div class="row">
			<div class="columns large-9 front-abstract">
				<?php print render($content['field_front_abstract']); ?>
			</div>
		</div>
	<?php endif; ?>
	<?php if($content['body']): ?>
		<div class="row">
			<div class="column">
				<?php print render($content['body']); ?>
			</div>
		</div>
	<?php endif; ?>
</section>
<section id="front-features">
	<div class="row">
		<div class="medium-4 small-12 columns">
			<?php print block_render('block', 1); ?>
		</div>
		<div class="medium-4 small-12 columns">
			<?php print block_render('block', 2); ?>
		</div>
		<div class="medium-4 small-12 columns">
			<?php print block_render('block', 3); ?>
		</div>
	</div>
</section>
<section id="front-latest-entries">
	<div class="row">
		<div class="medium-5 columns front-latest-news">
			<?php print block_render('block', 5); ?>
		</div>
		<div class="medium-7 columns front-latest-entries">
			<div class="row">
				<div class="column">
					<h2>Latest two entries</h2>
				</div>
			</div>
			<?php print block_render('views', "competition_categories-block_1"); ?>
		</div>
	</div>
</section>
<hr>
<section id="front-judges">
	<div class="row">
		<div class="column">
			<h2>Meet our judges</h2>
		</div>
	</div>
	<div class="row">
		<?php print block_render('views', 'judges-block_2'); ?> 
	</div>
</section>