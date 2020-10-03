<?php
	$title = 'Shah Travels';
	$discription = 'With several years of experience, starting from the concept up to final result.I\'m a branding, illustration and design lover.';
	$keyword ='branding,illustration,design,mumbai';
	$image='';
	$pageClasses='';
	$pageId='homePage';

	include('include/header.php');
	include('include/profile.php');
?>
<p class='developer'>Developed by <a href='https://harshadsatra.in' target='_blank'>Harshad Satra</a></p>
<section>
	<div class="porfolioImages">
		<a href="<?= $baseURL; ?>">Back</a>
		<img src="img/Shah-travels-1.jpg" alt="">
		<img src="img/Shah-travels-2.jpg" alt="">
		<img src="img/Shah-travels-3.gif" alt="">
		<img src="img/Shah-travels-4.jpg" alt="">
		<img src="img/Shah-travels-5.jpg" alt="">
		<img src="img/Shah-travels-6.gif" alt="">
		<img src="img/Shah-travels-7.jpg" alt="">
		<img src="img/Shah-travels-8.gif" alt="">
	</div>
</section>

<?php include('include/footer.php'); ?>