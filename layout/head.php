<html>
<head>
	<meta charset="utf-8">
	<?php 
		$uri_full = $_SERVER[REQUEST_URI];
		$uri = str_replace("/", "", $uri_full);
		$title = "";
		if($uri !== "" && $uri !== "index"){
			$title =  ucfirst(str_replace("-", " ", $uri));
		}else{
			$title = "Beranda";
		}
		
	?>
	<title><?php echo $title;?></title>
	<meta name="description" content="">

	<meta name="robots" content="all">
	<meta name="generator" content="LubakWeb">
	<!-- <meta http-equiv="Cache-Control" content="must-revalidate, max-age=0, public"> -->
	<!-- <meta http-equiv="Expires" content="-1"> -->
	<link href="<?php echo base_url;?>asset/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo base_url;?>asset/css/ekko-lightbox.min.css">
	<link rel="stylesheet" href="<?php echo base_url;?>asset/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url;?>asset/css/style.min.css">

</head>