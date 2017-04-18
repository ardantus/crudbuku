<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet" type="text/css" href="/crudbuku/assets/css/admin.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--[if IE]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body id="body">
	<div id="wrapper">
		<div id="header">
		<div id="logo">CRUD BUKU</div>
		Contoh CRUD Sederhana
		</div>
		<div id="menu">
			<a href="<?php echo site_url('admin/dashboard'); ?>">Dashboard</a>
			<a href="<?php echo site_url('admin/suplier'); ?>">Suplier</a>
			<a href="<?php echo site_url('admin/penerbit'); ?>">Penerbit</a>
			<a href="<?php echo site_url('admin/kategori'); ?>">Kategori</a>
			<a href="<?php echo site_url('admin/buku'); ?>">Buku</a>
			<a href="<?php echo site_url('admin/user/logout'); ?>">Logout</a>
		</div>
		<div id="isi">
			<div>
				<?php echo isset($content) ? $content : NULL; ?>
			</div>
		</div>
		<div id="footer">
			Copyleft &copy; Mukidi 2008-<?php echo date('Y'); ?><br> Powered By
  <a href="//www.emakemak.com" title="emakemak.com">www.emakemak.com</a> &amp; <a href="//www.emakemak.com" title="Emak Emak">Emak Emak</a>
		</div>
	</div>
<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script> -->
</body>
</html>