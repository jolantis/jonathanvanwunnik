<?php ///////////////////////////////////////////////////////
// ----------------------------------------------------------
// SNIPPET
// ----------------------------------------------------------

$loc = isset($loc) ? $loc : false;

////////////////////////////////////////////////////////// ?>

<?php /*
<div role="navigation" class="nav-main compact-aligner__item--right">
	<ul class="nav-main__list aligner aligner--wrap aligner--center aligner--justify">
		<?php foreach($pages->visible() as $page_item): ?>
			<li class="nav-main__item">
				<?php if($page_item == 'contact'): ?>
					<a href="<?php echo '#' . $page_item->uid(); ?>"><?php echo $page_item->title(); ?></a>
				<?php else: ?>
					<a href="<?php echo $page_item->url(); ?>"<?php echo ($page_item->isOpen() && ($page->depth() === 1)) ? ' aria-current="page"' : ''; ?>><?php echo $page_item->title()->smartypants(); ?></a>
				<?php endif; ?>
			</li>
		<?php endforeach; ?>

	</ul>
</div>
*/ ?>

<?php if($page->isHomePage()): ?>
	<?php if($loc == 'header'): ?>
		<nav role="navigation" class="nav-main compact-aligner__item--right">
			<h2 class="is-hidden-visually">Main navigation</h2>
			<ul class="nav-main__list aligner aligner--wrap aligner--center">
			<?php /* <ul class="nav-main__list aligner aligner--wrap"> */ ?>
	<?php else: ?>
		<?php if($loc == 'footer'): ?>
			<div role="navigation" class="nav-main contain-padding">
				<ul class="nav-main__list aligner aligner--wrap">
		<?php else: ?>
			<div role="navigation" class="nav-main">
				<ul class="nav-main__list">
		<?php endif; ?>
	<?php endif; ?>
<?php else: ?>
	<?php if($loc == 'header'): ?>
		<div role="navigation" class="nav-main compact-aligner__item--right">
			<ul class="nav-main__list aligner aligner--wrap aligner--center">
			<?php /* <ul class="nav-main__list aligner aligner--wrap"> */ ?>
	<?php else: ?>
		<?php if($loc == 'footer'): ?>
			<nav role="navigation" class="nav-main contain-padding">
				<h2 class="is-hidden-visually">Main navigation</h2>
				<ul class="nav-main__list aligner aligner--wrap">
		<?php else: ?>
			<div role="navigation" class="nav-main">
				<ul class="nav-main__list">
		<?php endif; ?>
	<?php endif; ?>
<?php endif; ?>

		<?php if($loc == 'footer'): ?>
			<li class="nav-main__item"><a rel="home" href="<?php echo $site->url(); ?>">Home</a></li>
		<?php endif; ?>

		<?php foreach($pages->visible() as $page_item): ?>
			<li class="nav-main__item">
				<?php if($page_item == 'contact'): ?>
					<a href="<?php echo '#' . $page_item->uid(); ?>"><?php echo $page_item->title(); ?></a>
				<?php else: ?>
					<a href="<?php echo $page_item->url(); ?>"<?php echo ($page_item->isOpen() && ($page->depth() === 1)) ? ' aria-current="page"' : ''; ?>><?php echo $page_item->title()->smartypants(); ?></a>
				<?php endif; ?>
			</li>
		<?php endforeach; ?>

<?php if(($page->isHomePage() && $loc == 'header') || (!$page->isHomePage() && $loc == 'footer')): ?>
		</ul>
	</nav>
<?php else: ?>
		</ul>
	</div>
<?php endif; ?>
