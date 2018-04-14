<?php snippet('html-head', array('criticalcss' => 'project')); ?>

	<?php snippet('banner'); ?>

	<main role="main">

		<div class="copy copy--contain">

			<h1 id="start">
				<?php echo ($page->long_title()->exists() && $page->long_title()->isNotEmpty()) ? $page->long_title()->smartypants()->widont() : $page->title()->smartypants()->widont(); ?>
			</h1>

			<?php echo $page->text()->kirbytext(); ?>

			<?php if($page->project_images()->isNotEmpty()): ?>

				<?php echo $page->project_images()->kirbytext(); ?>

			<?php else: ?>

				<?php foreach ($page->images()->filterBy('filename','!*=','main') as $image) : ?>
					<?php if($image->caption()) $caption = $image->caption(); ?>
					<figure class="figure-image">
						<?php echo $image->imageset('default'); ?>
						<?php if($caption): ?>
							<figcaption><?php echo $caption->smartypants(); ?></figcaption>
						<?php endif; ?>
					</figure>
				<?php endforeach; ?>

			<?php endif; ?>

		</div>

		<aside class="contain-padding space-leader-xl">
			<?php $projects = site()->find('projects'); ?>

			<h3 class="alpha-heading">Other projects</h3>

			<div class="grid grid--gutter space-trailer-s">
				<?php foreach($projects->children()->visible()->not(site()->activePage())->shuffle()->limit(2) as $project): ?>

					<?php $project_image = ($project->images()->filterBy('filename','*=','main')->first()) ? $project->images()->filterBy('filename','*=','main')->first() : $project->images()->sortBy('sort', 'asc')->first(); ?>

					<div class="grid__cell medium-1of2">
						<a href="<?php echo $project->url(); ?>" class="bg-image bg-image--link"<?php echo ($project->page_color()) ? ' style="background-color: ' . $project->page_color() . ';"' : ''; ?>>
							<?php echo $project_image->imageset('grid', ['output' => 'bgcover']); ?>
							<span class="bg-text aligner aligner--stacked aligner--bottom">
								<h4 class="bg-text__title"><?php echo $project->title()->smartypants()->widont(); ?></h4>
								<p class="bg-text__meta">
									Interaction and visual design, front-end
								</p>
							</span>
						</a>
					</div>

				<?php endforeach ?>
			</div>
		</aside>

		<?php $page = site()->find('contact') ?>
		<aside id="<?php echo $page->uid(); ?>" class="section copy copy--contain">
			<h2 class="section__title"><?php echo ($page->long_title()->exists() && $page->long_title()->isNotEmpty()) ? $page->long_title()->smartypants() : $page->title()->smartypants(); ?></h2>
			<?php if($page->text()->exists() && $page->text()->isNotEmpty()): ?>
				<?php echo $page->text()->kirbytext(); ?>
			<?php endif; ?>
		</aside>

	</main>

	<?php snippet('contentinfo'); ?>

<?php snippet('html-foot'); ?>
