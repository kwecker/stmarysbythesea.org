<?php
	function check_active($test, $current) {
		if ($test == $current) {
			return '_over';
		}
		return '';
	}
?>
<div id="navigation">
	<ul>
		<li><a href="/"><img src="/images/nav/home<?=check_active('Home', $section)?>.png" alt="Home" class="rollover" width="51" height="45"></a></li><!--
	 --><li><a href="/aboutus.php"><img src="/images/nav/about_us<?=check_active('About Us', $section)?>.png" alt="About Us" class="rollover" width="80" height="45"></a></li><!--
	 --><li><a href="/history.php"><img src="/images/nav/history<?=check_active('History', $section)?>.png" alt="History" class="rollover" width="72" height="45"></a></li><!--
	 --><li><a href="/ministries.php"><img src="/images/nav/ministries<?=check_active('Ministries', $section)?>.png" alt="Ministries" class="rollover" width="89" height="45"></a></li><!--
	 --><li><a href="/newsandevents.php"><img src="/images/nav/news_events<?=check_active('News & Events', $section)?>.png" alt="News &amp; Events" class="rollover" width="119" height="45"></a></li><!--
	 --><li><a href="/weddings.php"><img src="/images/nav/weddings<?=check_active('Weddings', $section)?>.png" alt="Weddings" class="rollover" width="87" height="45"></a></li><!--
	 --><li><a href="/education.php"><img src="/images/nav/education<?=check_active('Education', $section)?>.png" alt="Education" class="rollover" width="93" height="45"></a></li><!--
	 --><li><a href="/outreach.php"><img src="/images/nav/outreach<?=check_active('Outreach', $section)?>.png" alt="Outreach" class="rollover" width="87" height="45"></a></li><!--
	 --><li><a href="/links.php"><img src="/images/nav/links<?=check_active('Links', $section)?>.png" alt="Links" class="rollover" width="52" height="45"></a></li><!--
	 --><li><a href="/contact.php"><img src="/images/nav/contact<?=check_active('Contact', $section)?>.png" alt="Contact" class="rollover" width="79" height="45"></a></li>
	</ul>
</div>