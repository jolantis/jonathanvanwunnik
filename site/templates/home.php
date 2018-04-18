<?php snippet('html-head', array('criticalcss' => 'home',)); ?>

	<?php snippet('banner'); ?>

	<div class="hero">
		<div class="hero__text aligner aligner--stacked aligner--bottom section copy copy--contain">
			<span class="section__title"><?php echo $page->title()->smartypants()->widont(); ?></span>
			<?php echo $page->text()->kirbytext()->widont(); ?>
		</div>
		<?php
			$page_color_1 = ($page->page_color()) ? $page->page_color() : 'rgb(33,155,219)';
			$page_color_2 = ($page->page_color()) ? $page->page_color() : 'rgb(234,179,6)';
			$page_color_2 = ($page_color_2 == $page_color_1) ? $page->page_color() : $page_color_2;
		?>
		<svg role="presentation" x="0" y="0" width="100%" height="100%" preserveAspectRatio="none">
			<rect width="100%" height="100%" fill="url(#gradient)" />
			<defs>
				<linearGradient id="gradient" x1="0" y1="100%" y2="100%">
					<stop offset="0%" stop-color="<?php echo $page_color_1; ?>" stop-opacity=".8">
						<animate attributeName="stop-color" values="<?php echo $page_color_1; ?>;<?php echo $page_color_1; ?>;<?php echo $page_color_1; ?>;<?php echo $page_color_2; ?>;<?php echo $page_color_1; ?>;<?php echo $page_color_1; ?>" dur="14s" repeatCount="indefinite" />
					</stop>
					<stop offset="100%" stop-color="<?php echo $page_color_1; ?>" stop-opacity=".7">
						<animate attributeName="stop-color" values="<?php echo $page_color_1; ?>;<?php echo $page_color_2; ?>;<?php echo $page_color_1; ?>;<?php echo $page_color_1; ?>;<?php echo $page_color_2; ?>;<?php echo $page_color_1; ?>" dur="14s" repeatCount="indefinite" />
						<animate attributeName="offset" values=".60;.70;.50;.40;.60;.60;.40;.30;.40" dur="18s" repeatCount="indefinite" />
					</stop>
				</linearGradient>
			</defs>
		</svg>
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
