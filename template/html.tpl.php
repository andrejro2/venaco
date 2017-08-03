<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="ie6 ie" lang="<?php print $language->language; ?>"
      dir="<?php print $language->dir; ?>"> <![endif]-->
<!--[if IE 7]>
<html class="ie7 ie" lang="<?php print $language->language; ?>"
      dir="<?php print $language->dir; ?>"> <![endif]-->
<!--[if IE 8]>
<html class="ie8 ie" lang="<?php print $language->language; ?>"
      dir="<?php print $language->dir; ?>"> <![endif]-->
<!--[if gt IE 8]> <!-->
<html class="" lang="<?php print $language->language; ?>"
      dir="<?php print $language->dir; ?>"> <!--<![endif]-->
<head>
  <?php print $head; ?>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="author" content="axweb.sk">
  <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700|Roboto+Condensed:300,400,700&amp;subset=latin-ext" rel="stylesheet">   
  <title><?php print $head_title; ?></title>

  <?php print $styles; ?>
  <?php print $scripts; ?>
  <!--[if lt IE 9]>
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <script src="js/respond.min.js"></script>
  <![endif]-->
</head>

<body class="<?php print $classes; ?>" <?php print $attributes; ?>>
<a id="simple-menu" href="#sidr" class="visible-xs visible-sm"><?php print t('Toggle menu')?></a>
<div class="wrapper">
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
</div>
</body>
</html>