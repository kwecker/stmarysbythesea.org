<?php
	$title = 'St. Mary&#8217;s by-the-Sea Episcopal Church';
	if (isset($subsection)) {
		$title = $subsection . ' | ' . $title;
	} else {
		if ($section != 'Home') {
			$title = $section . ' | ' . $title;
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?=$title?></title>
	<link rel="stylesheet" href="/css/main.css">
	<!--[if lt IE 8]>
	<style type="text/css">
		hr, hr.large_dots { visibility: hidden; }
		.hr { background: url("images/rules/horizontal_dots.png") center left repeat-x; }
		.hr_large { background-image: url("images/rules/horizontal_dots_large.png"); }
		.hr_bottom { background-position: bottom left; }
		.footer_nav, .footer_address { zoom: 1; display: inline; padding: 0 30px 0 20px; }
	</style>
	<![endif]-->
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script type="text/javascript" src="/scripts/jquery.actions.js"></script>
</head>
<body>
<div id="shadow_wrap">
<div id="container">
	<div id="header">
		<div id="header_links">
			<p><a href="/newsletter.php">MONTHLY NEWSLETTER</a> | <a href="/sponsors_donors.php">SPONSORS/DONORS</a> | <a href="https://e-giving.org/egivinglogin.asp?id=1435" class="em">DONATE!</a></p>
			<p class="social_links"><a href="https://www.facebook.com/StMarysPG" class="facebook" target="facebook">LIKE US ON FACEBOOK! <img src="/images/facebook.png" alt="Facebook"></a></p>
		</div>
		<a href="/"><img src="/images/logo.png" alt="Church Logo" id="logo" width="149" height="194"></a>
		<a href="/"><img src="/images/logotype.png" alt="St. Mary&#8217;s by-the-Sea Episcopal Church" id="logotype" width="630" height="38"></a>
		<img src="/images/tagline.png" alt="Serving the Episcopal Community of Pacific Grove and the Monterey Peninsula since 1887" id="tagline" width="570" height="19">
	</div>

	<?php include('navigation.php'); ?>