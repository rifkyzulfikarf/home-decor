<?php
	date_default_timezone_set('Asia/Jakarta');
	set_time_limit(0);
	
	require 'blob.php';
	
	include('header.php');
	
	if (isset($_REQUEST['no_spa']) && $_REQUEST['no_spa']<>"" && file_exists( d_url($_REQUEST['no_spa']))) {
		include d_url($_REQUEST['no_spa']);
	} else {
		include('home.php');
	}
	
	include('footer.php');
?>