<!--  NAVIGATION Mobile -->
<div class="nav-mobile" id="nav-mobile">
	<header>
		<div class="button"><i class="fa fa-bars fa-2x"></i>Menus</div>
		<ul>
			<li><h3>World Wildlife Day</h3></li>
			<li>3rd March</li>
		</ul>
	</header>
<!-- 		<div id="menus-mobile"> -->
			<?php if ($main_menu): ?>
				<?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('id' => 'menus-mobile'))); ?>
			<?php endif; ?>
<!-- 			<ul>
				<li class="columns"><a href="#home" class="selected">Home</a></li>
				<li class="columns"><a class="link" href="#about">About</a></li>
				<li class="columns"><a class="link" href="#events">Events</a></li>
				<li class="columns"><a class="link" href="#ambassadors">Goodwill ambassadors</a></li>
				<li class="columns"><a class="link" href="#partners">Campaign partners</a></li>
			</ul> -->
<!-- 		</div> -->
</div>
<!-- NAVIGATION Desktop -->
<?php
if (drupal_is_front_page()) { ?>
    <div class="page-front">
    <nav class="top-bar nav-desktop" data-magellan>
		<div class="wrap">
			<div class="logo top-bar-left">
				<a href="<?php print $front_page;?>"><img id="logo-image" src="/<?php print $directory;?>/img/logo-WWD_en_304x140.png" alt="<?php print $site_name;?>"></a>
			</div>
			<div class="top-bar-right">
				<?php if ($main_menu): ?>
					<?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('id' => 'main-menu', 'class' => 'horizontal menu'))); ?>
				<?php endif; ?>
			</div>
		</div>
	</nav>
    </div>
<?php } else { ?>
	<div class="page">
	<nav class="top-bar nav-desktop" data-magellan>
		<div class="wrap">
			<div class="logo top-bar-left">
				<a href="<?php print $front_page;?>">
					<img id="logo-image-white" src="/<?php print $directory;?>/img/logo-WWD_en_304x140.png" alt="<?php print $site_name;?>">
					<img id="logo-image-black" src="/<?php print $directory;?>/img/logo-WWD_en_nb_304x140.png" alt="<?php print $site_name;?>">
				</a>
			</div>
			<div class="top-bar-right">
				<?php if ($main_menu): ?>
					<?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('id' => 'main-menu', 'class' => 'horizontal menu'))); ?>
				<?php endif; ?>
			</div>
		</div>
	</nav>
	</div>
<?php } ?>