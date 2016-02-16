<?php 
/*
Template Name: About
*/
get_header() ?>

<main id="about" class="clearfix">
	<section class="titleSection">
			<h1>ABOUT</h1>
	</section>
	
	<section id="bioSection">
		<div class="container">
			<div class="row">
				<div class="seven columns">
					<h1>Bio</h1>
					<p>Chris is a graduate of Sheridan College's Musical Theatre Performance program. Performance credits include Fulgens and Lucres (PLS), Recurring John, Paradises Lost (SummerWorks Festival), and Audrey II in Little Shop of Horrors (Lower Ossington Theatre and T3 productions). Musical Direction credits include A Misfortune (Next Stage Festival), HAIR (FirstAct Productions), One Song Glory '10 '11 & '12 (ActingUp Stage), A Joyful Noise (co-composer/lyricist, Smile Theatre), Mickey & Judy (Toronto Fringe), and bare: the Canadian Premiere (WatersEdge Productions).  Chris has also worked as an accompanist and teacher at Sheridan College, Randolph Academy and George Brown College.  He has toured extensively with the Nathaniel Dett Chorale as a singer and with Sharron Matthews as an accompanist/arranger (Sharron's Big Broadway Show, Jesus Thinks I'm Funny, GOLD, Full Dark). He can also be seen in his biannual "Chris-terical" series of cabarets at Buddies in Bad Times Theatre.</p>
				</div>	

				<div class="five columns">
					<div>
						<img src="<?php bloginfo('template_directory') ?>/img/kidchris.jpg" class="u-pull-right">
					</div>
				</div>
			</div> <!-- row -->
		</div>
	</section>

	<section id="performerSection">
		<div class="container">
			<div class="row">
				<div class="seven columns">
					<h1>Performer</h1>
					<p>Best known for his "Chris-terical" series of cabarets, Chris Tsujiuchi has also performed in musicals, plays, operas, and several choirs including the Nathaniel Dett Chorale and Univox. For a PDF of his performance resume, <a href="#"><span class="linkColor">click here</span></a></p>
				</div>	

				<div class="five columns">
					<div>
						<img src="<?php bloginfo('template_directory') ?>/img/performer1.jpg" class="u-pull-right">
					</div>
				</div>
			</div> <!-- row -->
		</div> <!-- container -->
	</section> <!-- performerSection -->

	<section id="vocalSection">
		<div class="container">
			<div class="row">
				<div class="seven columns">
					<h1>Vocal Coach</h1>
					<p>Chris offers private vocal coachings at the esteemed Big Voice Studio in the East end of Toronto as well as at his house in the West end of Toronto. For more information about coachings, you can contact him directly <a href="#"><span class="linkColor">here.</a> </p>
				</div>
				<div class="five columns">
					<img src="<?php bloginfo('template_directory') ?>/img/vocalcoach.jpg" class="u-pull-right">
				</div>		
			</div> <!-- row -->
		</div> <!-- container -->
	</section>


	<section id="pianistSection">
		<div class="container">
			<div class="row">
				<div class="seven columns">
					<h1>Pianist</h1>
					<p>Chris is frequently accompanying singers in Toronto and abroad. He has toured internationally as a piano player with cabaret powerhouse Sharron Matthews, and can be seen in Toronto playing open mic nights at Statlers, with the St. Royals, at vocal masterclasses, musical theatre auditions, cabarets, concerts, fundraisers, weddings, and more!
					<br><br> For more information regarding Chris' services as an accompanist, you can contact him <a href="#"><span class="linkColor">here.</a></p>
				</div>	
				<div class="five columns">
					<img src="<?php bloginfo('template_directory') ?>/img/keys.jpg">
				</div>	
			</div> <!-- row -->
		</div> <!-- container -->
	</section> <!-- pianistSection -->

	<section id="directorSection">
		<div class="container">
			<div class="row">
				<div class="seven columns">
					<h1>Music Director</h1>
					<p>An extremely accomplished music director and arranger, Tsujiuchi has "MD'd" shows and cabarets for / in ActingUp Stage, the Toronto Fringe Festival, Next Stage Theatre Festival, CATS Mainstage, First Act Productions, and performers such as Sharron Matthews, Thom Alison, Gavin Crawford, Shawn Hitchins, Jenny Weisz, and Kevin Morris. 
					<br><br>
					For more information about Chris' services as a music director / arranger, you can contact him <a href="#"><span class="linkColor">here.</span></a></p>
				</div>
				<div class="five columns">
					<img src="<?php bloginfo('template_directory') ?>/img/sheetmusic.jpg">
				</div>		
			</div> <!-- row -->
		</div> <!-- container -->

	</section> <!-- directorSection -->

	<section id="pressSection">
		<div class="container">
			<div class="row">
				<div class="seven columns">
					<h1>Press</h1>
					<p>
	
						<q>Toronto's newest Cabaret sensation</q> <br>&nbsp;&nbsp;&nbsp;&nbsp; <span class="quoteColor">- Xtra!</span><br><br>
							

						<q>Superstar!!</q> <br>&nbsp;&nbsp;&nbsp;&nbsp; <span class="quoteColor">- twisitheatreblog.com</span><br><br>

						<q>Nothing is ever quite as entertaining as a Chris-terical Cabaret.</q> <br>&nbsp;&nbsp;&nbsp;&nbsp; <span class="quoteColor">- myentertainmentworld.ca </span><br><br>


						<q>A prolific and exuberant performer, music director and composer, Chris Tsujiuchi’s bi-annual “Chris-terical Cabaret” series brings down the house at Buddies in Bad Times every June and December.</q> <br>&nbsp;&nbsp;&nbsp;&nbsp; <span class="quoteColor">- myentertainmentworld.ca </span><br><br>

						<q>Even Kanye would agree that Tsujiuchi's cover of Britney Spears' "Hit Me Baby, One More Time," was by far the best, of all time. Audience members vacillated between awestruck admiration of the cabaret performer's fine motor skills on the piano and the primal urge to pee themselves over his artfully blithe sense of humour.</q> <br>&nbsp;&nbsp;&nbsp;&nbsp; <span class="quoteColor">- indecentxposure.com </span><br><br>

					</p>
				</div>
				<div class="five columns">
					<img src="<?php bloginfo('template_directory') ?>/img/press.jpg">
				</div>		
			</div> <!-- row -->
		</div> <!-- container -->
	</section> <!-- pressSection -->


	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<?php endwhile; else : ?>
			<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<?php endif; ?>

</main>

<?php get_sidebar() ?>
<?php get_footer() ?>
