<?php snippet('html-head', array('criticalcss' => 'about')); ?>

	<?php snippet('banner'); ?>

	<main role="main">

		<div class="copy copy--contain">
			<h1>
				<?php echo ($page->long_title()->exists() && $page->long_title()->isNotEmpty()) ? $page->long_title()->smartypants()->widont() : $page->title()->smartypants()->widont(); ?>
			</h1>

			<?php echo $page->text()->kirbytext(); ?>
		</div>

		<?php $page = site()->find('contact') ?>
		<aside id="<?php echo $page->uid(); ?>" class="section copy copy--contain space-leader-xl">
			<h2 class="section__title"><?php echo ($page->long_title()->exists() && $page->long_title()->isNotEmpty()) ? $page->long_title()->smartypants() : $page->title()->smartypants(); ?></h2>
			<?php if($page->text()->exists() && $page->text()->isNotEmpty()): ?>
				<?php echo $page->text()->kirbytext(); ?>
			<?php endif; ?>
		</aside>

	</main>

	<?php snippet('contentinfo'); ?>

<?php snippet('html-foot'); ?>
