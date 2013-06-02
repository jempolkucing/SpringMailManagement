<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<script type="text/javascript" src="<?php echo base_url(); ?>data/js/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>data/js/ui/jquery-ui-1.8.17.custom.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>data/js/jquery.corner.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>data/js/jquery.validate.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>data/js/css_browser_selector.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>data/js/jqtransformplugin/jquery.jqtransform.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>data/js/jquery.jqplot.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>data/js/plugins/jqplot.highlighter.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>data/js/plugins/jqplot.cursor.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>data/js/plugins/jqplot.pieRenderer.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>data/js/plugins/jqplot.dateAxisRenderer.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>data/js/editor/jquery.cleditor.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>data/js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>data/js/fancybox/jquery.easing-1.4.pack.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>data/js/js.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>data/css/reset.css" type="text/css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>data/css/grid.css" type="text/css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>data/css/style.css" type="text/css" />
<link type="text/css" href="<?php echo base_url(); ?>data/js/ui/admincp/jquery-ui-1.8.17.custom.css" rel="stylesheet" />
<link rel="stylesheet" href="<?php echo base_url(); ?>data/js/plugins/jquery.jqplot.min.css" type="text/css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>data/js/editor/jquery.cleditor.css" type="text/css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>data/js/jqtransformplugin/jqtransform.css" type="text/css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>data/js/fancybox/jquery.fancybox-1.3.4.css" type="text/css" />
<title>Managemen Virtual User Mail Server ITATS</title>
</head>

<body onload="init()">

<div id="main" class="container_12"><!-- Body Wrapper Begin -->
		 <div id="header"><!-- Header Begin -->
			<div class="grid_3"><a href="<?php echo base_url(); ?>" id="logo" class="float_left">Management User Email</a></div>
		</div><!-- Header End -->
		<div class="clear"></div>
		<div id="userbar"><!-- Userbar Begin -->
			<div id="profile"><!-- Profile Begin -->
				<div id="avatar">
					<img src="<?php echo base_url(); ?>img/test_avatar.png" alt="Avatar" height="44" />
					<a href="<?php echo base_url(); ?>" id="unreadcount">12</a>
				</div>
				<div id="profileinfo" style="width:120px;">
					<h3 id="username">Arwani</h3>
					<?php
$ip = $_SERVER['REMOTE_ADDR'];
?>
					<span id="subline"><?php echo $ip; ?></span>
					<div class="clear"></div>
					<a href="<?php echo base_url(); ?>index.php/login/logout" class="profilebutton">Logout</a>
				</div>
			</div><!-- Userbar End -->
			<ul id="navigation"><!-- Main Navigation Begin -->
                                <li><a href="<?php echo base_url(); ?>home" class="icon_home">Home</a></li>
                                <li><a href="<?php echo base_url(); ?>dosen" class="icon_users">Data Dosen</a></li>
								<li><a href="<?php echo base_url(); ?>mahasiswa" class="icon_users">Data Mahasiswa</a></li>
                                <li><a href="<?php echo base_url(); ?>konten" class="icon_article">Konten</a></li>
								<li><a href="<?php echo base_url(); ?>login/logout" class="icon_logout">Logout</a></li>
			</ul><!-- Main Navigation End -->
		</div><!-- Userbar End -->
		<div class="clear"></div>
		
