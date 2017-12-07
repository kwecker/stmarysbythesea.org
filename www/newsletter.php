<?php $section = 'Times & Tides Monthly Newsletter'; ?>
<?php include('common/header.php'); ?>

	<div id="picture_group_container">
		<div id="picture_group_home" class="picture_group"></div>
		<div class="changing_picture">
			<img src="images/picture_groups/picture_group_newsletter_1.jpg" alt="" height="317" width="397">
			<img src="images/picture_groups/picture_group_home_3.jpg" alt="" height="317" width="397">
		</div>
		<div class="quote">
			<img src="images/quote.png" alt="&#8220;...for my house shall be called a house of prayer for all people.&#8221; Isaiah 56:7">
		</div>
	</div>
	<div id="content_container" class="group">
		<div id="main_content">

			<h1>Times &amp; Tides Monthly Newsletter</h1>
			<h2>November 2017</h2>

				<!-- Current Nesletter -->
				<div class="newsletter current">
					<a href="newsletters/2017_November_TT.pdf" class="newsletter_link">
						<img src="images/newsletters/2017_nov.png" alt="November 2017 Newsletter" width="99" height="124">
						<span class="download_newsletter">Download PDF</span>
					</a>
				</div>
				<!-- End Current Newsletter -->

			<div class="hr"><hr></div>

			<div class="newsletter-signup">
				<h2>Subscribe to our eNewsletter!</h2>
				<form method="post" action="http://oi.vresp.com?fid=3a256fc759" target="vr_optin_popup" onsubmit="window.open( 'http://www.verticalresponse.com', 'vr_optin_popup', 'scrollbars=yes,width=600,height=450' ); return true;" >
					<p>
						<label>Email:</label>
						<input name="email_address" type="email" required />
					</p>
					<input type="submit" value="Join Now" class="button" />
				</form>
			</div>

			<div class="hr"><hr></div>

			<div class="archive-links">
				<h2>Archived Newsletters</h2>
				<ul>
					<li><a href="newsletter_archive/current_year.php">2017 Newsletters</a></li>
					<li><a href="newsletter_archive/past_years.php">Previous Years Newsletters</a></li>
				</ul>

			</div>
			<div class="hr hr_bottom"><hr class="bottom"></div>
		</div>

		<?php include_once("common/sidebar.php"); ?>

	</div>

<?php include('common/footer.php'); ?>