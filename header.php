<?php
	$data = new koneksi();
?>
<!DOCTYPE html>
<html lang="en-US">
<head>

<!-- Basic Page Head -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Welcome to Home Decor Furniture & Interior Design Official Site</title>
<meta name="description" content="Home Decor Furniture & Interior Official Site">
<meta name="author" content="FuzzyTech IT Solution">
<meta name="keywords" content="furniture, interior, interior design, home decor, homedecor, home decor indo, homedecorindo, semarang, indonesia">

<!-- Mobile Meta -->
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

<!-- Favicons -->
<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
<link rel="apple-touch-icon-precomposed" href="assets/img/apple-touch-icon-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/img/apple-touch-icon-72x72-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/img/apple-touch-icon-114x114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/img/apple-touch-icon-144x144-precomposed.png">

<!-- Css -->
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/prettyPhoto.css">
<link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="assets/css/owl.theme.css">
<link rel="stylesheet" type="text/css" href="assets/css/owl.transitions.css">
<link rel="stylesheet" type="text/css" href="assets/css/galleria.classic.css">
<link rel="stylesheet" type="text/css" href="assets/css/style.css">
<link rel="stylesheet" type="text/css" href="assets/css/responsive.css">

<!-- Google Fonts -->
<link href="http://fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700&amp;subset=latin,latin-ext" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,600,700&amp;subset=latin,latin-ext" rel="stylesheet" type="text/css">

</head>
<body>

<!-- Site Loader -->
<div class="site-loader">
	<img src="assets/img/loader.gif" alt="Loading">
</div>
<!-- Site Loader End -->

<!-- Site Back Top -->
<div class="site-back-top">
	<i class="fa fa-angle-up"></i>
</div>
<!-- Site Back Top End -->

<!-- Site Toggle -->
<div class="site-toggle">
	<i class="fa fa-bars"></i>
</div>
<!-- Site Toggle End -->

<!-- Site Header -->
<header id="header" class="site-header">
	<div class="header-wrap">
        <div class="header-top clearfix">
            <div class="header-logo">
                <a href="./" class="block"><img src="assets/img/logohd.png" alt="Leore"></a>
            </div>
            <nav class="header-menu">
                <ul>
                    <li><a href="./?no_spa=<?php echo e_url("about.php") ?>">ABOUT</a></li>
					<li><a href="./?no_spa=<?php echo e_url("contact.php") ?>">CONTACT</a></li>
					<?php
						$qMenu = "SELECT id, nama FROM menu_public WHERE hapus = '0';";
						if ($resMenu = $data->runQuery($qMenu)) {
							while ($rsMenu = $resMenu->fetch_array()) {
								echo "<li class='sub'><a href='#'>".$rsMenu['nama']."</a><ul>";
								$qKat = "SELECT id, nama FROM kategori WHERE id_menu = '".$rsMenu['id']."' AND hapus = '0';";
								if ($resKat = $data->runQuery($qKat)) {
									while ($rsKat = $resKat->fetch_array()) {
										echo "<li><a href='./?no_spa=".e_url('product.php')."&kat=".e_url($rsKat['nama'])."&id=".e_url($rsKat['id'])."'>".$rsKat['nama']."</a></li>";
									}
								}
								echo "</ul></li>";
							}
						}
					?>
                </ul>
            </nav>
        </div>
        <div class="header-bottom">
            <ul class="social-icons social-white nav-default">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-behance"></i></a></li>
            </ul>
            <p>COPYRIGHT <b>FUZZYTECH</b> IT SOLUTION.</p>
            <p>ALL RIGHTS RESERVED.</p>
        </div>
    </div>
</header>
<!-- Site Header End -->