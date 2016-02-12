<!--  NAVIGATION -->
<body data-magellan-target="home" id="home">

	<?php include_once  $directory .'/partials/navigation.tpl.php'; ?>

	<!--  Scroll to top button  -->
	<div class="scroll-to-Top hide-for-small-only" data-magellan>
		<a href="#home"><i class="fa fa-angle-double-up fa-2x"></i></a>
	</div>

	<div class="containeur">
		<div class="wrap row">

		<?php print render($page['content']); ?>

		</div>
	</div>

	<!--Footer Region-->
	<footer>
		<?php
			include_once  $directory .'/partials/footer.tpl.php';
		?>
	</footer>

</body>