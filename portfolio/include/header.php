<?php
	$baseURL ='http://sandeshpalkar.com/portfolio/';
	$author = 'Sandesh Palkar';
	if($image==''){
		$image = 'http://sandeshpalkar.com/portfolio/img/sandesh.jpg';
	}
?>
<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="https://fonts.googleapis.com/css?family=Arvo:400,700" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">
	<title><?= $title ?></title>
	<meta name="robots" content="index, follow" />
	<meta name="description" content="<?= $discription ?>">
	<meta name="keyword" content="<?= $keyword ?>">
	<meta name="author" content="<?= $author ?>">
	<meta property="og:image" content="<?= $image ?>"/>
</head>
<body class="<?= $pageClasses ?>" id='<?= $pageId ?>'>