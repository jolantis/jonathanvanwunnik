<?php snippet('html-head', array('criticalcss' => 'projects')); ?>

	<?php snippet('banner'); ?>

	<main role="main">

		<div <div class="copy copy--contain<?php echo ($page->text()->isNotEmpty()) ? ' space-trailer-m' : ''; ?>">
			<h1>
				<?php echo ($page->long_title()->exists() && $page->long_title()->isNotEmpty()) ? $page->long_title()->smartypants()->widont() : $page->title()->smartypants()->widont(); ?>
			</h1>

			<?php if($page->text()->isNotEmpty()): ?>
				<?php echo $page->text()->kirbytext(); ?>
			<?php endif; ?>
		</div>

		<div class="contain-padding">

			<div class="grid grid--gutter">
				<?php foreach ($page_items as $page_item) : ?>

					<?php $page_item_image = ($page_item->images()->filterBy('filename','*=','main')->first()) ? $page_item->images()->filterBy('filename','*=','main')->first() : $page_item->images()->sortBy('sort', 'asc')->first(); ?>

					<article class="grid__cell medium-1of2" id="<?php echo $page_item->slug(); ?>">
						<a href="<?php echo $page_item->url(); ?>" class="bg-image bg-image--link"<?php echo ($page_item->page_color()) ? ' style="background-color: ' . $page_item->page_color() . ';"' : ''; ?>>
							<?php // echo $page_item_image->imageset('grid'); ?>
							<?php echo $page_item_image->imageset('grid', ['output' => 'bgcover']); ?>
							<span class="bg-text aligner aligner--stacked aligner--bottom">
								<h2 class="bg-text__title"><?php echo $page_item->title()->smartypants()->widont(); ?></h2>
								<p class="bg-text__meta">
									<?php echo $page_item->project_roles()->widont(); ?>
								</p>
							</span>
						</a>
					</article>

				<?php endforeach; ?>
			</div>

			<?php $page = site()->find('contact') ?>
			<aside id="<?php echo $page->uid(); ?>" class="section copy space-leader-xl">
				<h2 class="section__title"><?php echo ($page->long_title()->exists() && $page->long_title()->isNotEmpty()) ? $page->long_title()->smartypants() : $page->title()->smartypants(); ?></h2>
				<?php if($page->text()->exists() && $page->text()->isNotEmpty()): ?>
					<?php echo $page->text()->kirbytext(); ?>
				<?php endif; ?>
			</aside>

		</div>

	</main>

	<?php snippet('contentinfo'); ?>

<?php snippet('html-foot'); ?>
