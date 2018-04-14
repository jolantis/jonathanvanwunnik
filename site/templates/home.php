<?php snippet('html-head', array('criticalcss' => 'home',)); ?>

	<?php snippet('banner'); ?>

	<div class="hero">
		<div class="hero__text aligner aligner--stacked aligner--center-vertical section copy copy--contain">
			<h2 class="section__title"><?php echo $page->title()->smartypants()->widont(); ?></h2>
			<?php echo $page->text()->kirbytext()->widont(); ?>
		</div>
	</div>

	<main role="main">

		<?php foreach($pages->visible() as $section): ?>
			<section id="<?php echo $section->uid(); ?>" class="section">
				<?php snippet('section', ['section' => $section, 'limit' => 4]); ?>
			</section>
		<?php endforeach; ?>

	</main>

	<?php snippet('contentinfo'); ?>

<?php snippet('html-foot'); ?>
