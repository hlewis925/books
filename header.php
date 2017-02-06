<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php bloginfo('title')?></title>
<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url');?>"/>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script language="javascript" src="https://maps.googleapis.com/maps/api/js?v=3"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!--
References for images:
Header - Purple Dream by Wajahat Mahmood
purple thunder by Petr Kratochvil 
-->
<?php wp_head()?>
</head>
<body class="custom-background" >
<div id="wrapper">
	<div id="headstyle">

	<header>
		<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
		<h1 class="headcolor"><a href="<?php echo home_url('/')?>"><?php bloginfo('name')?></a></h1>
    	<p class="headcolor"><?php echo get_bloginfo('description');?></p>
    	
	</header>
	<nav>
		<div class="headcolor"><?php wp_nav_menu();?></div>
	</nav>
				
	</div>
