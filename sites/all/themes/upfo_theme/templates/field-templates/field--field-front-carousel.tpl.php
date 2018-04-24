<div class="front-carousel owl-theme owl-carousel" style="visibility: hidden;">
	<?php foreach ($items as $delta => $item): ?>
		<div class="front-carousel-item">
			<?php if(isset($item['#item']['field_link']['und'][0]['value'])): ?>
				<a href="<?php print url($item['#item']['field_link']['und'][0]['safe_value']); ?>">
					<?php print render($item); ?>
				</a>
			<?php else: ?>
				<?php print render($item); ?>
			<?php endif; ?>
		</div>
	<?php endforeach; ?>
</div>
<p class="text-center"><small>© All images the copyright of the authors</small></p>