<?php
	include('includes/config.php');
	// loginCheck();

	include('includes/header.php');
  include('includes/nav.php');
?>
<h1 class="stats-heading">Stats</h1>

<p class="stats-subheading">
	Here you can see your poop stats!!
</p>
<div class="stats-wraper">


	<div class="stats-container">

	  <section class="stats-shade">
	    <h1>poop-shade</h1>
			<br>
				<h2>Brown Poop</h2>
				<div class="brown" style='width:<?php echo showStats($mainUserId, 1); ?>'>
					<p><?php echo showStats($mainUserId, 1); ?></p>
				</div>
				<h2>Green Poop</h2>
				<div class="green" style='transition: width 1s 3s ease-in-out; width:<?php echo showStats($mainUserId, 2); ?>'>
					<p><?php echo showStats($mainUserId, 2); ?></p>
				</div>
				<h2>Yellow Poop</h2>
				<div class="yellow" style='transition: width 1s 3s ease-in-out; width:<?php echo showStats($mainUserId, 3); ?>'>
					<p><?php echo showStats($mainUserId, 3); ?></p>
				</div>
				<h2>Black Poop</h2>
				<div class="black" style='transition: width 1s 3s ease-in-out; width:<?php echo showStats($mainUserId, 4); ?>'>
					<p><?php echo showStats($mainUserId, 4); ?></p>
				</div>
				<h2>White Poop</h2>
				<div class="white" style='transition: width 1s 3s ease-in-out; width:<?php echo showStats($mainUserId, 5); ?>'>
					<p><?php echo showStats($mainUserId, 5); ?></p>
				</div>
				<h2>Red Poop</h2>
				<div class="red" style='transition: width 1s 3s ease-in-out; width:<?php echo showStats($mainUserId, 6); ?>'>
					<p><?php echo showStats($mainUserId, 6); ?></p>
				</div>
	  </section>
		<section class="stats-texture">
			<h1>poop-texture</h1>
			<br>
				<h2>Separated hard</h2>
				<div class="texture" style='width:<?php echo showTextureStats($mainUserId, 1); ?>'>
					<p><?php echo showTextureStats($mainUserId, 1); ?></p>
				</div>
				<h2>Sausage-shaped</h2>
				<div class="texture" style='width:<?php echo showTextureStats($mainUserId, 2); ?>'>
					<p><?php echo showTextureStats($mainUserId, 2); ?></p>
				</div>
				<h2>Watery</h2>
				<div class="texture" style='width:<?php echo showTextureStats($mainUserId, 6); ?>'>
					<p><?php echo showTextureStats($mainUserId, 6); ?></p>
				</div>
				<h2>Saugage lumpy</h2>
				<div class="texture" style='width:<?php echo showTextureStats($mainUserId, 7); ?>'>
					<p><?php echo showTextureStats($mainUserId, 7); ?></p>
				</div>
				<h2>Soft blob </h2>
				<div class="texture" style='width:<?php echo showTextureStats($mainUserId, 8); ?>'>
					<p><?php echo showTextureStats($mainUserId, 8); ?></p>
				</div>
				<h2>Sausage cracked </h2>
				<div class="texture" style='width:<?php echo showTextureStats($mainUserId, 9); ?>'>
					<p><?php echo showTextureStats($mainUserId, 9); ?></p>
				</div>
				<h2>Fluffy</h2>
				<div class="texture" style='width:<?php echo showTextureStats($mainUserId, 10); ?>'>
					<p><?php echo showTextureStats($mainUserId, 10); ?></p>
				</div>
				<h2>Soft sticks </h2>
				<div class="texture" style='width:<?php echo showTextureStats($mainUserId, 10); ?>'>
					<p><?php echo showTextureStats($mainUserId, 10); ?></p>
				</div>
		</section>
	</div>
</div>





<?php include('includes/footer.php'); ?>
