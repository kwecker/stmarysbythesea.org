<?php $section = 'News & Events'; ?>
<?php include('common/header.php'); ?>

	<div id="picture_group_container">
		<div id="picture_group_news" class="picture_group"></div>
		<div class="changing_picture">
			<img src="images/picture_groups/picture_group_news_1.jpg" alt="" height="317" width="397">
			<img src="images/picture_groups/picture_group_news_2.jpg" alt="" height="317" width="397">
			<img src="images/picture_groups/picture_group_news_3.jpg" alt="" height="317" width="397">
		</div>
		<div class="quote">
			<img src="images/quote.png" alt="&#8220;...for my house shall be called a house of prayer for all people.&#8221; Isaiah 56:7">
		</div>
	</div>
	<div id="content_container" class="group">
		<div id="main_content">
			<h1>News &amp; Events</h1>
			<p>
				<a href="newsletter.php">View Tides &amp; Times Newsletters</a>
			</p>
			<h3>Jump to section:</h3>
			<ul class="bulletless">
				<li><a href="#featured">Featured Events</a></li>
				<li><a href="#calendar">Calendar of Events</a></li>
				<!-- <li><a href="#latestnews">Latest News</a></li> -->
				<li><a href="#archive">News Archive</a></li>
			</ul>

			<div id="featured">

				<div class="hr"><hr></div>

				<h2>Featured Events</h2>

				<!-- <p>No upcoming events.</p> -->

				<!--<div class="featured-events-category">
					<h3>Save The Dates</h3>

					<div class="featured-event group">
						<p class="date"><em>July 7th&ndash;9th</em></p>
						<h4>St. Mary&#8217;s by-the-Sea • Diamond Jubilee • 60th Annual Antiques &amp; Collectibles Show</h4>
						<p>
							<img src="images/events/2017/Antiques-Show-Front-View.jpg" alt="" width="540" height="341">
						</p>
						<p>
							Friday &amp; Saturday, July 7th &amp; July 8th, 10AM&ndash;5PM<br>
							Sunday, July 9th, 11AM&ndash;4PM
						</p>
						<p>
							$5 donation • $15 patio lunch with a beverage &amp; dessert
						</p>
						<p>
							The 60th Annual St. Mary&#8217;s by-the-Sea Antiques &amp; Collectibles Show offers superior antiques and vintage collectibles to the Monterey Peninsula. With a $5 donation you can attend all three days of the event. See and purchase antiques and vintage treasures from over 30 vendors and the church Thrift Shop. Items include clothing, jewelry, art, glassware, fine silver, books, toys, porcelain, furniture and more.
						</p>
						<p>
							You&#8217;ll also find free Classical, Celtic, and Organ concerts inside the historic church. There will be a silent auction, served lunches and a Bistro Bar on the outdoor patio.
						</p>
						<p>
							St. Mary&#8217;s is close to the Monterey Bay Aquarium, Cannery Row, and the beautiful Lovers Point Beach, so fill the weekend with fun!
						</p>
						<p>
							Visit us on Facebook: <a href="https://www.facebook.com/stmarysantiquescollectables">https://www.facebook.com/stmarysantiquescollectables</a>
						</p>
					</div>
				</div>-->

				<div class="featured-events-category">
					<h3>Upcoming Concerts</h3>

					<div class="featured-event group">
						<p class="date"><em>December 22nd</em> @ 7:30PM</p>
						<h4>Winterdance with Molly's Revenge</h4>
						<p>
							The 12th annial Celtic Christmas Celebration with vocalist Christa Burch and irish dancers.
						</p>
						<p>
							Advanced tickets $25 per person available at <a href="http://www.celticsociety.org">celticsociety.org</a>. Tickets at the door $28 per person. Discount for Celtic Society members.
						</p>
						<p>
							For information call or text 831-224-3819 or email <a href="mailto:fiddlejamjp@gmail.com">fiddlejamjp@gmail.com</a>.
						</p>
						<p>
							<a href="/docs/concerts/2017/Winterdance_Flyer_2017.pdf">Download Flyer</a>
						</p>
					</div>
				</div>

				<!-- <div id="special-services">
					<div class="hr"><hr></div>
					<h2>Holy Week Schedule</h2>

					<div class="featured-events-category">
						<div class="featured-event">
							<p><a href="docs/2016-St_Marys-Holy_Week_Schedule.jpg" target="_blank">Download Flyer of Events</a></p>
						</div>
					</div>
				</div> -->

			</div>

			<div id="calendar">
				<div class="hr"><hr></div>

				<h2>Calendar of Events</h2>

				<?php include('common/calendar.html'); ?>

				<p>
					<em>Celtoid Kids continues every Tuesday:<br />
					Beginners 4PM&ndash;5PM<br />
					Advanced 5PM&ndash;6PM</em>
				</p>

			</div>

			<!-- <div id="latestnews">

				<div class="hr"><hr></div>

				<h2>Latest News</h2>

				<div class="news_clipping">
					<h3></h2>
					<p class="news_date"></p>
					<p></p>
				</div>
			</div> -->

			<div id="archive">

				<div class="hr"><hr></div>

				<h2>Archived News &amp; Events</h2>

				<h3>2012-2016</h3>
				<ul class="bulletless">
					<li><a href="news-archive/2015.php">2016</a></li>
					<li><a href="news-archive/2015.php">2015</a></li>
					<li><a href="news-archive/2014.php">2014</a></li>
					<li><a href="news-archive/2013.php">2013</a></li>
					<li><a href="news-archive/2012.php">2012</a></li>
				</ul>
			</div>

			<div class="hr hr_bottom"><hr class="bottom"></div>
		</div>

		<?php include_once("common/sidebar.php"); ?>

	</div>

<?php include('common/footer.php'); ?>