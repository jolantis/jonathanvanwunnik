<?php ///////////////////////////////////////////////////////
// ----------------------------------------------------------
// PARTIAL
// ----------------------------------------------------------
// The $limit parameter is optional and can be passed to
// this snippet to display only a specified amount of
// projects, like this:
//
// snippet($section->uid(), ['section' => $section]);
// ----------------------------------------------------------

// Grab section (page) title
$page_title = ($section->long_title()->exists() && $section->long_title()->isNotEmpty() && $section->uid() != 'about') ? $section->long_title()->smartypants() : $section->title()->smartypants();

// Limit (number) of projects
$limit = (isset($limit) && $limit != false) ? $limit : false;

////////////////////////////////////////////////////////// ?>

<?php if($section->uid() == 'projects'): ?>

	<div class="copy copy--contain">
		<h2 class="section__title"><?php echo $page_title; ?></h2>

		<?php if($section->intro()->exists() && $section->intro()->isNotEmpty()): ?>
			<?php echo $section->intro()->kirbytext(); ?>
		<?php endif; ?>
	</div>

	<div class="grid grid--gutter contain-padding">

		<?php $i=1; foreach($section->children()->visible() as $project): ?>

			<?php $project_image = ($project->images()->filterBy('filename','*=','main')->first()) ? $project->images()->filterBy('filename','*=','main')->first() : $project->images()->sortBy('sort', 'asc')->first(); ?>

			<article class="grid__cell medium-1of2" id="<?php echo $project->slug(); ?>">
				<a href="<?php echo $project->url(); ?>" class="bg-image bg-image--link"<?php echo ($project->page_color()) ? ' style="background-color: ' . $project->page_color() . ';"' : ''; ?>>
					<?php // echo $project_image->imageset('grid'); ?>
					<?php echo $project_image->imageset('grid', ['output' => 'bgcover']); ?>
					<span class="bg-text aligner aligner--stacked aligner--bottom">
						<h3 class="bg-text__title"><?php echo $project->title()->smartypants()->widont(); ?></h3>
						<p class="bg-text__meta">
							Interaction and visual design, front-end
						</p>
					</span>
				</a>
			</article>

			<?php if($i == $limit) break; ?>

		<?php $i++; endforeach ?>

	</div>

	<?php if($limit != false && $limit < $section->children()->visible()->count()): ?>

		<div class="section__link copy copy--contain space-leader-m">
			<?php //if($i == $limit && $i != $section->children()->visible()->count()): ?>
				<a href="<?php echo $section->url() ?>">See more projects</a>
			<?php //endif; ?>
		</div>

	<?php endif; ?>

<?php endif; ///////////////////////////////////////////// ?>

<?php if($section->uid() == 'about'): ?>

	<div class="copy copy--contain">
		<h2 class="section__title"><?php echo $page_title; ?></h2>

		<?php if($section->intro()->exists() && $section->intro()->isNotEmpty()): ?>
			<?php echo $section->intro()->kirbytext(); ?>
		<?php endif; ?>

		<p><a href="<?php echo $section->url(); ?>">See my full résumé</a></p>

	</div>

<?php endif; ///////////////////////////////////////////// ?>

<?php if($section->uid() == 'contact'): ?>

	<div class="copy copy--contain">
		<h2 class="section__title"><?php echo $page_title; ?></h2>

		<?php if($section->text()->exists() && $section->text()->isNotEmpty()): ?>
			<?php echo $section->text()->kirbytext(); ?>
		<?php endif; ?>

	</div>

<?php endif; ///////////////////////////////////////////// ?>
