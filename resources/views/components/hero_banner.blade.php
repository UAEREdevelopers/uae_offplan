<?php 
	$hero_path = "images/hero/hero.webp?v=".time();

	$hero_mobile_path = "images/hero/hero_mobile.jpg?v=".time();
?>
<section class="banner-section-two mobile-hide" style="background-image: url('{{asset("$hero_path")}}');height: 800px;">
		<div class="auto-container">
			<div class="outer-container">
				<!-- <div class="content">
					<div class="upper-content">
						 <div class="title">Kids involvement using technologies</div>
						<h2>Off Plan<span>Properties and Projects in Dubai</span></h2>
						<h1 class="text-uppercase">SAVE MONEY - Enquire Directly to Developer- No Commision</h1>
						
					</div>
				</div> -->
			</div>
		</div>
	</section>

	<section class="banner-section-two hide-desktop" style="background-image: url('{{asset("$hero_mobile_path")}}');height: 455px;">
		<div class="auto-container">
			<div class="outer-container">
				<!-- <div class="content">
					<div class="upper-content">
						 <div class="title">Kids involvement using technologies</div>
						<h2>Off Plan<span>Properties and Projects in Dubai</span></h2>
						<h1 class="text-uppercase">SAVE MONEY - Enquire Directly to Developer- No Commision</h1>
						
					</div>
				</div> -->
			</div>
		</div>
	</section>