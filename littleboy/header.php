<html>
<head>
 <meta charset="UTF8">
 <title><?php bloginfo('name'); ?></title>
 <meta name="description" content="<?php bloginfo('description'); ?>"/>
 <meta property="og:image" content="http<?php bloginfo('template_url'); ?>/images/favicon.png"/>
 <meta name="viewport" content="width=device-width, initial-scale=1.0, height=device-height, minimum-scale=1.0 maximum-scale=1.0, user-scalable=no, minimal-ui"/>

 <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/font-awesome.min.css">
 <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/ermile.css">
 <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/favicon.png"/>
 <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
</head>
<body>
<header class="row">
	<div><?php wp_nav_menu(['theme_location' => 'menu_header']);?></div>
	<h1><?php bloginfo('name'); ?></h1>
</header>
