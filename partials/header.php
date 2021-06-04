<?php if (!isset($menuEnabled)) {
	$menuEnabled = true;
} ?>
<header>
	<h2 class="center white"><?= $title; ?></h2>
	<?php if ($menuEnabled) { ?>
		<i class="fas fa-bars"></i>
	<?php } ?>
</header>