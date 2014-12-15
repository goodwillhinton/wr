<?php print $doctype; ?>
<html lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"<?php print $rdf->version . $rdf->namespaces; ?>>
<head<?php print $rdf->profile; ?>>
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>  
  <?php print $styles; ?>
<link rel="stylesheet" href="/sites/all/themes/decatur/css/flexslider.css" type="text/css">
  <?php print $scripts; ?>
<script src="/sites/all/themes/decatur/js/jquery.flexslider.js"></script>
  <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<script type="text/javascript" charset="utf-8">
(function ($) {
  $(window).load(function() {
    $('.flexslider').flexslider({
		slideshow: false,
	});
  });
})(jQuery);
</script>
</head>
<body<?php print $attributes;?>>
  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  </div>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
</body>
</html>