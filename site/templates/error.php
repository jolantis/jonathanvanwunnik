<?php snippet('html-head', array(/* 'criticalcss' => 'other_than_default' */)); ?>

	<?php snippet('banner'); ?>

	<main role="main" class="copy copy--contain">

		<h1>
			<?php echo ($page->long_title()->exists() && $page->long_title()->isNotEmpty()) ? $page->long_title()->smartypants()->widont() : $page->title()->smartypants()->widont(); ?>
		</h1>

		<?php if($page->intro()->isNotEmpty()): ?>
			<?php echo $page->intro()->kirbytext(); ?>
		<?php endif; ?>

		<?php echo $page->text()->kirbytext(); ?>

		<p>
			<a href="<?php echo site()->url(); ?>">Go to homepage</a>
		</p>

	</main>

	<?php snippet('contentinfo'); ?>

<?php snippet('html-foot'); ?>
