<?php ///////////////////////////////////////////////////////
// ----------------------------------------------------------
// PARTIAL
// ----------------------------------------------------------
////////////////////////////////////////////////////////// ?>

<?php // snippet('nav-main'); ?>

<div role="contentinfo" class="contentinfo">

	<div class="contain-padding">
		<?php $photography = site()->find('photography'); ?>

		<h3 class="alpha-heading is-hidden-visuallyX space-trailer-s"><?php echo ($photography->long_title()->exists() && $photography->long_title()->isNotEmpty()) ? $photography->long_title()->smartypants() : $photography->title()->smartypants(); ?></h3>

		<?php // echo $photography->text()->kirbytext(); ?>

		<div class="grid grid--gutter space-trailer-s">
			<?php foreach($photography->images()->shuffle()->limit(4) as $image): ?>

				<div class="grid__cell small-1of2 medium-1of4">
					<a href="https://jonathanvanwunnik.com" class="bg-image--link">
						<?php echo $image->imageset('grid', ['output' => 'bgcover']); ?>
					</a>
				</div>

			<?php endforeach; ?>
		</div>

		<?php echo $photography->text()->kirbytext(); ?>
	</div>

	<footer class="medium-aligner contain-padding">
		<p>&copy; <?php echo '2002&ndash;' . date("Y"); ?> <a href="https://jonathanvanwunnik.com" rel="me"><?php echo $site->copyright()->smartypants(); ?></a></p>
		<p class="medium-aligner__item--right">All contents licensed under a <a rel="license" href="https://creativecommons.org/licenses/by-nc-nd/4.0/" title="Creative Commons Attribution-Non-Commercial-No-Derivs 4.0 International">CC BY-NC-ND license</a></p>
	</footer>
</div>
