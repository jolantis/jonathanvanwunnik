<?php ///////////////////////////////////////////////////////
// ----------------------------------------------------------
// SNIPPET
// ----------------------------------------------------------

$loc = isset($loc) ? $loc : false;

////////////////////////////////////////////////////////// ?>


<div role="navigation" class="nav-main compact-aligner__item--right">
	<ul class="nav-main__list aligner aligner--wrap aligner--center aligner--justify">
		<?php /*
		<li class="nav-main__item"><a rel="home" href="<?php echo $site->url(); ?>">Home</a></li>
		*/ ?>
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
