<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--[if IE]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  <title>Belajar CRUD BUKU</title>
 </head>
 <body>
 <div id="wrapper">
   <div id="header">
  		<div id="logo">CRUD</div>
  		Belajar CRUD Sederhana
  </div>
  <div id="menu">
  <a href="#">| Data Suplier |</a>
  <a href="#">| Data Penerbit |</a>
  <a href="#">| Data Kategori |</a>
  <a href="#">| Data Buku |</a>
  </div>
  <div id="isi">
        <div id="content">
        <?php echo $content; ?>
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
