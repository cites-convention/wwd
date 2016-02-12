<body data-magellan-target="home" id="home">

<!--  NAVIGATION -->
<body data-magellan-target="home" id="home">
	<nav class="navigation">
		<?php include_once  $directory .'/partials/navigation.tpl.php'; ?>
	</nav>
<!--  Scroll to top button  -->
<div class="scroll-to-Top hide-for-small-only" data-magellan>
	<a href="#home"><i class="fa fa-angle-double-up fa-2x"></i></a>
</div>
<!--  Slogan text  -->
<?php include_once  $directory .'/partials/slogan.tpl.php'; ?>
<!--  HERO  -->
<section class="hero">

	<div id="carousel">
			<div class="item splash"><img class="" src="<?php print $directory;?>/img/bg-top-images/top-bg-1.jpg" alt=""></div>
			<div class="item splash"><img class="" src="<?php print $directory;?>/img/bg-top-images/top-bg-2.jpg" alt=""></div>
			<div class="item splash"><img class="" src="<?php print $directory;?>/img/bg-top-images/top-bg-3.jpg" alt=""></div>
			<div class="item splash"><img class="" src="<?php print $directory;?>/img/bg-top-images/top-bg-4.jpg" alt=""></div>
	</div>

	<div class="intro-hero">
		<div class="wrap row">	
			<ul class="msg columns small-8 medium-10 large-9">
				<li class="animated fadeInUp">
					<a data-open="Ban-Ki-moon_welcome-panel" href="#">
						<img src="<?php print $directory;?>/img/Ban-Ki-moon-SG-UN1r.jpg" alt="Ban Ki-moon">
					</a>
					<h6>Ban Ki-moon Secretary-General United Nations</h6>
				</li>
				<li class="animated fadeInUp">
					<a data-open="John_Scanlon_welcome-panel" href="#">
						<img src="<?php print $directory;?>/img/John_Scanlon_SG_CITES.jpg" alt="John Scanlon">
					</a>
					<h6>John E. Scanlon Secretary-General CITES Secretariat</h6>
				</li>
			</ul>
			<ul class="social-medias columns small-4 medium-2 large-3">
				<li><a target="_blank" href="https://twitter.com/WildlifeDay"><i class="fa fa-twitter"> </i></a></li>
				<li><a target="_blank" href="https://www.facebook.com/WorldWildlifeDay"><i class="fa fa-facebook"> </i></a></li>
				<li><a target="_blank" href="https://www.flickr.com/photos/worldwildlifeday/"><i class="fa fa-flickr"> </i></a></li>
				<li><a target="_blank" href="https://www.youtube.com/user/WorldWildlifeDay"><i class="fa fa-youtube-play"> </i></a></li>
			</ul>
		</div>
	</div>
	</div>
	<div class="twitts">
		<?php include_once  $directory .'/partials/twitts-feed.tpl.php'; ?>
	</div>

</section>

	
<!-- Welcome messages REVEAL -->

<?php print render($page['welcome_msgs']); ?>

<section class="introduction wrap small-up-1 medium-up-1">
	<div class="reveal welcomeMessage columns" id="Ban-Ki-moon_welcome-panel" data-reveal data-overlay="false">
			
			<?php print render($page['welcome_msgs_1st']); ?>
			
		
			<button class="close-button" data-close aria-label="Close reveal" type="button">
				<span aria-hidden="true">&times;</span>
			</button>
	</div>
	<div class="reveal welcomeMessage columns" id="John_Scanlon_welcome-panel" data-reveal data-overlay="false">
			
			<?php print render($page['welcome_msgs_2nd']); ?>
			
			<button class="close-button" data-close aria-label="Close reveal" type="button">
				<span aria-hidden="true">&times;</span>
			</button>
	</div>

</section>

<!--End Welcome messages REVEAL-->
<!--  ABOUT #EXP  -->
	<section class="wrap row" id="about" data-magellan-target="about_us">
		<h2>About</h2>
		<hr>
		<?php print render($page['about_us']); ?>
		<a class="button" href="/about">More</a>
	</section>
<!--  EVENTS  -->
<section class="wrap row" id="events" data-magellan-target="events">
	<h2>Events</h2>
	<hr>
	<?php include_once  $directory .'/partials/google-map.tpl.php'; ?>
</section>



<!--  PARTNERS AREA  -->
	<section class="wrap row" id="partners" data-magellan-target="partners">
		<h2>Partners</h2>
		<hr>
		<?php print render($page['partners']); ?>
	</section>

<!--Footer Region-->
<footer>
    <?php include_once  $directory .'/partials/footer.tpl.php'; ?>
</footer>

</body>