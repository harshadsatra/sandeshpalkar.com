<?php
	$title = 'Sandesh Palkar | Branding, Illustration and Design lover';
	$discription = 'With several years of experience, starting from the concept up to final result.I\'m a branding, illustration and design lover.';
	$keyword ='branding,illustration,design,mumbai';
	$image='';
	$pageClasses='homePage';
	$pageId='homePage';

	include('include/header.php');
	include('include/profile.php');
?>
<section class="main">
	<div class="topBar">
		<h1>This is the sort of work<br>I like to do.</h1>
		<div class="projectFilter btn-filter-wrap">
			<button class="btn-filter btn-active" data-filter=".all">All,</button>
			<button class="btn-filter" data-filter=".website">Website,</button>
			<button class="btn-filter" data-filter=".branding">Branding.</button>
		</div>
	</div>
	<div id="projects" class="nonloop owl-carousel home-carousel">
		<div class="item website">
			<a href="byteprophecy.php"><img src="img/byteprophecy/1.jpg"></a>
		</div>
		<div class="item website">
			<a href="kochertech.php"><img src="img/kochertech/1.jpg"></a>
		</div>
		<div class="item website">
			<a href="stellapps.php"><img src="img/stellapps/1.jpg"></a>
		</div>
		<div class="item website">
			<a href="knowmax.php"><img src="img/knowmax/1.jpg"></a>
		</div>
		<div class="item website">
			<a href="jaro.php"><img src="img/JARO-1.jpg"></a>
		</div>
		<div class="item website">
			<a href="tea-society.php"><img src="img/Tea-society-1.jpg"></a>
		</div>
		<div class="item branding">
			<a href="papacream.php"><img src="img/papacream1.jpg"></a>
		</div>
		<div class="item branding">
			<a href="weekend-club.php"><img src="img/WeekendClub-01.jpg"></a>
		</div>
		<div class="item branding">
			<a href="cciki.php"><img src="img/Cciki_1.jpg"></a>
		</div>
		<div class="item branding">
			<a href="business-doctors.php"><img src="img/Business-Doctor-1.jpg"></a>
		</div>
	</div>
</section>
<p class='developer'>Developed by <a href='https://harshadsatra.in' target='_blank'>Harshad Satra</a></p>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/jQuery.js"></script>
<script src="js/plugins.js"></script>
<script src="js/script.js"></script>
</body>
</html>