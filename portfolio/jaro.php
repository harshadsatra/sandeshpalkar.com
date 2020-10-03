<?php
	$title = 'Jaro Education';
	$discription = 'With several years of experience, starting from the concept up to final result.I\'m a branding, illustration and design lover.';
	$keyword ='branding,illustration,design,mumbai';
	$image='';
	$pageClasses='';
	$pageId='homePage';

	include('include/header.php');
	include('include/profile.php');
?>
<section>
	<div class="porfolioImages">
		<a href="<?= $baseURL; ?>">Back</a>
		<img src="img/JARO-1.jpg" alt="">
		<img src="img/JARO-2.jpg" alt="">
		<img src="img/JARO-3.jpg" alt="">
		<img src="img/JARO-4.jpg" alt="">
		<img src="img/JARO-5.jpg" alt="">
		<video autoplay loop muted="" controls id="video">
			<source src="img/JARO-6.mp4" type="video/mp4">
			<p class="warning">Your browser does not support HTML5 video.</p>
		</video>
	</div>
</section>

<?php include('include/footer.php'); ?>