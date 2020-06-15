<!DOCTYPE html >
<html>
<head>
	<?php
	if(isset($_REQUEST['pg'])){
	$page = $_REQUEST['pg'];	
	} else {
	$page = NULL;
	}

	if($page<>NULL) {
	$seo_titile = str_replace("-", " ", $page);
	?>
	<title><?php echo ucwords($seo_titile); ?> | Test Ovulation</title>
	<meta name="description" content="<?php echo ucwords($seo_titile);?>, " />
	<?php }
	else{ ?>
	<title>Test Ovulation</title>
	<meta name="description" content="" />

	<?php } ?>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/jquery.fancybox.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">
    <link rel="stylesheet" media="all" href="/css/style.css" type="text/css">
	<script src="/js/jquery.min.js"></script>
	<script src="/js/bootstrap.min.js"></script>
    <script src="/js/jquery.fancybox.js"></script>
    <script src="/js/core.js"></script> 
    
    
</head>
<body>


		