<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title></title>
<meta name="description" content="" />
<meta name="viewport" content="width=device-width">
<meta name="keywords" content="" />
<meta name="author" content="" />

<!-- Social Networks Meta -->
<meta itemprop="name" content="">
<meta itemprop="description" content="">
<meta itemprop="image" content="">

<meta property="og:title" content="">
<meta property="og:description" content="">
<meta property="og:url" content="">
<meta property="og:image" content="">

<link rel="stylesheet" href="<?= base_url(CSS."bootstrap.min.css");?>">
<link rel="stylesheet" href="<?= base_url(CSS."global.css?v=1.0.2");?>">

<!-- extra CSS-->
<?php foreach($css as $c):?>
<link rel="stylesheet" href="<?= base_url().CSS.$c; ?>">
<?php endforeach;?>

<!-- extra fonts-->
<?php foreach($fonts as $f):?>
<link href="http://fonts.googleapis.com/css?family=<?= $f; ?>" rel="stylesheet" type="text/css">
<?php endforeach;?>
<link rel="stylesheet" href="<?= base_url(FONTS."fontello/css/fontello.css"); ?>" type="text/css">

<script src="<?= base_url(JS."libs/modernizr-2.6.1-respond-1.1.0.min.js"); ?>"></script>

<!-- Le fav and touch icons -->
<link rel="shortcut icon" href="<?= base_url(IMAGES.'ico/favicon.ico'); ?>">
<link rel="apple-touch-icon" href="<?= base_url(IMAGES.'ico/apple-touch-icon-precompressed.png'); ?>">
<link rel="apple-touch-icon" sizes="57x57" href="<?= base_url(IMAGES.'ico/apple-touch-icon-57x57-precompressed.png'); ?>">
<link rel="apple-touch-icon" sizes="72x72" href="<?= base_url(IMAGES.'ico/apple-touch-icon-72x72-precompressed.png'); ?>">
<link rel="apple-touch-icon" sizes="114x114" href="<?= base_url(IMAGES.'ico/apple-touch-icon-114x114-precompressed.png'); ?>">

</head>
<body>    
	<?= $body; ?>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="<?= base_url(JS."libs/jquery-1.9.1.min.js");?>"><\/script>');</script>
	<script src="<?= base_url(JS."libs/underscore-min-1.4.4.js"); ?>"></script>
        <script src="<?= base_url(JS."libs/bootstrap.min.js"); ?>"></script>
	<script src="<?= base_url(JS."plugins.js"); ?>"></script>	     

	<!-- extra js-->
	<?php foreach($javascript as $js):?>
	<script defer src="<?= base_url().JS.$js; ?>"></script>
	<?php endforeach;?>          
</body>
</html>
