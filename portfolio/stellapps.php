<?php
	$title = 'Stell Apps';
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
		<a href="<?= $baseURL; ?>">Back</a><a href="http://ixdtm.com/projects/stellapps/v02/" style="float:right; text-decoration:underline;" target="_blank">View Website</a>
		<img src="img/stellapps/1.jpg" alt="">
		<video width="400" autoplay loop muted playsinline>
		  <source src="img/stellapps/2.mp4" type="video/mp4">
		  Your browser does not support HTML5 video.
		</video>
		<video width="400" autoplay loop muted playsinline>
		  <source src="img/stellapps/3.mp4" type="video/mp4">
		  Your browser does not support HTML5 video.
		</video>
	</div>
</section>

<?php include('include/footer.php'); ?>