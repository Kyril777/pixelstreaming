<?php include('header.php'); ?>

	<!-- Top Container -->
	<section class="top-container">

		<!-- Showcase. -->
		<header class="showcase" style="background: url('background.png'); background-size: cover; background-repeat: no-repeat; background-position: center center;">
			<div class="video-section">
				<video id="video-elem" preload="auto" autoplay="true" loop="loop" muted="muted" poster="videoGIF.gif"> 
				<source src="http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/BigBuckBunny.mp4" type="video/mp4">
						Video not supported
				</video>
			</div>
		</header>

		<!-- Top box A. -->
		<div class="top-box top-box-a">
			<h4>Membership</h4>
			<p class="price">$9.99/mo</p>
			<a href="#membership" class="btn modal-open-1">Subscribe Now</a>
			<div class="modal-1" id="membership">	
				<div class="modal-content-1">
					<a href="#" class="modal-close-1">&times;</a>
					<h2 class="modal-heading-1">Membership</h2>
					<p class="modal-paragraph-1">In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus.</p>
					<p class="price">$9.99/mo</p>
				</div>
			</div>
		</div>

		<!-- Top box B. -->
		<div class="top-box top-box-b">
			<h4>Pro Membership</h4>
			<p class="price">$19.99/mo</p>
			<a href="#promembership" class="btn modal-open-2">Subscribe Now</a>
			<div class="modal-2" id="promembership">	
				<div class="modal-content-2">
					<a href="#" class="modal-close-2">&times;</a>
					<h2 class="modal-heading-2">Pro Membership</h2>
					<p class="modal-paragraph-2">Tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium. </p>
					<p class="price">$19.99/mo</p>
				</div>
			</div>
		</div>
	</section>

	<!-- Info Section -->
	<section class="info">
		<img src="cartoon-family.png" alt="Cartoon Family" class="cartoon-family">
		<div>
			<h2>For Everyone to Enjoy</h2>
			<p>Consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. </p>
			<a href="about.php" class="btn">Learn More</a>
		</div>
	</section>

	<!-- Portfolio. -->
	<section class="portfolio">
		<img src="crunchyroll.jpeg" alt="">
		<img src="sumos.jpeg" alt="">
		<img src="satoshi.jpg" alt="">
		<img src="jonnyquest.jpg" alt="">
		<img src="dc_comics.jpg" alt="">
		<img src="ragnarok.jpeg" alt="">
		<img src="my4faces.jpg" alt="">
		<img src="sabaton.jpg" alt="">
		<img src="conan.jpg" alt="">
		<img src="bettyboop.jpg" alt="">
	</section>

<?php include('footer.php'); ?>