<!--from https://blog.osk.sh/index.php -->


<!DOCTYPE html>
<html>

<head>
	<title>osk blog</title>
	<link rel="stylesheet" type="text/css" href="index.css">
	<link rel="alternate" type="application/rss+xml" href="/feed/" title="RSS feed for the osk blog">
	<meta charset="utf-8">
	<script src="index.js"></script>
	<noscript>
		<style>
			.stars {
				pointer-events: none;
			}
		</style>
	</noscript>
	<!-- Matomo -->
	<script type="text/javascript">
		var _paq = window._paq || [];
		/* tracker methods like "setCustomDimension" should be called before "trackPageView" */
		_paq.push(["setDocumentTitle", document.domain + "/" + document.title]);
		_paq.push(["setCookieDomain", "*.osk.sh"]);
		_paq.push(["setDomains", ["*.osk.sh"]]);
		_paq.push(['trackPageView']);
		_paq.push(['enableLinkTracking']);
		(function () {
			var u = "//moon.kagari.moe/";
			_paq.push(['setTrackerUrl', u + 'matomo.php']);
			_paq.push(['setSiteId', '1']);
			var d = document, g = d.createElement('script'), s = d.getElementsByTagName('script')[0];
			g.type = 'text/javascript'; g.async = true; g.defer = true; g.src = u + 'matomo.js'; s.parentNode.insertBefore(g, s);
		})();
	</script>
	<noscript>
		<p><img src="//moon.kagari.moe/matomo.php?idsite=1&amp;rec=1" style="border:0;" alt="" /></p>
	</noscript>
	<!-- End Matomo Code -->
</head>

<body>
	<header>
		<a href="https://osk.sh/"><img src="https://osk.sh/osk.svg" id="logo" /></a>
		<a href="https://blog.osk.sh/"><span id="blogtitle">blog</span></a>
		<span id="mastermode">master mode</span>
	</header>
	
	<!--訂閱-->
	<div id="floatbuttons">
		<a href='/feed/' type='application/rss+xml'>subscribe</a>
	</div>


	<main>
		<!--一個表單，上船後會傳到/do/create.php-->
		<form id="np" method='post' action='/do/create.php'>
			<div id="newpost">
				<input id="nptitle" name="title" placeholder="Title" autocomplete="off">
				<textarea id="npcontent" class="form" name="content" placeholder="Write something..."
					autocomplete="off"><p></p></textarea>
				<input type="password" id="npkey" name="key" placeholder="Key" autocomplete="off">
				<input id="nptags" name="tags" placeholder="Tags separated by spaces" autocomplete="off">
				<input id="npoptions" name="options" placeholder="Options separated by spaces (nocomments, hidden)"
					autocomplete="off">
				<input class='submit' type='submit' value='SUBMIT'>
				<div id="nppreview">preview</div>
			</div>
		</form>
		<!--文章列表-->
		<div class='entry' data-id='62c204ae6d73b0.48103499'>
			<div class='header'>
				<a href='post.php?p=62c204ae6d73b0.48103499'>
					<h1>The osk knowledge base: updated promotional kit policy, and new ToS/privacy policy</h1>
				</a>
				<h2>by <span title='osk#00000000000000000000000000000000000000000000000000000000000000ae' class='author-span'
						style='--hue: 244.6875;'>osk</span> at <span class='ts' data-ts='1656882350'>2022/07/03 (Sun) 9:05:50
						pm</span> <span class='ts-title' data-ts='1656882624'
						title='2022/07/03 (Sun) 9:10:24 pm'>(edited)</span><span class='tags'><a href='/?t=official'
							class='tag tag-official'>OFFICIAL</a><a href='/?t=tetr.io' class='tag tag-tetr_io'>TETR.IO</a><a
							href='/?t=oskware' class='tag tag-oskware'>OSKWARE</a><a href='/?t=update'
							class='tag tag-update'>UPDATE</a></span></h2>
			</div>
			<div class='content'>
				<p>For a while, I've had multiple policy documents kinda randomly thrown around my websites. For example,
					branding information on a subdomain, the promotional kit policy on the blog... And, even though I use Matomo
					on all my sites, there wasn't really a formal
					privacy policy or ToS on them, it was simply implied the same as the TETR.IO one would be followed. (This is
					true, albeit slimmed down, since there's no ads etc. on them.)</p>
				<p>For this reason, there is now a <a href="https://txt.osk.sh/" target="_blank">proper knowledge base over at
						txt.osk.sh</a>! It hosts the branding information (unchanged), the promotional kit policy (changed due to
					abuse, see below), and a new overarching Terms of Service and Privacy Policy pair.</p>

				<h1>The osk General Terms of Service and Privacy Policy</h1>
				<p>From today on, all osk services will be governed by the <a href="https://txt.osk.sh/terms-of-service/"
						target="_blank">General Terms of Service</a>. The ToS is very simple, and is very similar to what you're
					used to on TETR.IO (no liability, no guarantee of fitness for any purpose, reservation of right of removal and
					cessation).</p>
				<p>In addition, all osk services will follow the <a href="https://txt.osk.sh/privacy-policy/"
						target="_blank">General Privacy Policy</a>. It, too, is very simple — I use Matomo to get analytics, and
					that's it. I don't sell that data.</p>
				<p>These documents act as a fallback for if no other document is specified. For example, on TETR.IO, its own <a
						href="https://tetr.io/about/terms/" target="_blank">terms of service</a> take precedence. As such, on
					TETR.IO, you agree to both the osk GToS and the TETR.IO-specific ToS. If any TETR.IO-specific clause were to
					clash with the GToS, the TETR.IO-specific clause takes precedence. Pretty simple, right?</p>

				<h1>The Promotional Kit Policy</h1>
				<p>From today on, the distribution of native advertisements on TETR.IO (the "promotional kit") is governed by
					the <a href="https://txt.osk.sh/tetrio-promotional-kit/" target="_blank">new TETR.IO promotional kit
						policy</a>. The previous <a href="https://blog.osk.sh/post.php?p=61cd13b9792515.77114685"
						target="_blank">blogpost</a> is now deprecated. In addition, a <a
						href="https://txt.osk.sh/tetrio-promotions/" target="_blank">new page</a> helps shed light on the nature of
					the promotional kit for players.</p>
				<p>The most important and notable changes to the kit include:</p>
				<ul>
					<li><b>All sponsors and advertisements related to your event/advertisement must be declared.</b> This means,
						if you plan to run a tournament, and there's any sponsors, you must declare who your sponsors are, the
						associated deals, and how this impacts any of your content (will you be doing sponsored segments? giveaways?
						etc.). Failure to declare a sponsor or advertisement is deemed fraud.</li>
					<li>In the case of events where smurfing could pose a threat, <b>sign-ups must close at least 24 hours before
							tournament start</b>. This to ensure you have the time to go through user lists and weed out bad actors
						before they're stuck in your bracket. TETR.IO staff can help you with this.</li>
					<li>From now on, there are <b>no exceptions</b> to the "all information must be handed in 14 days prior to
						flight date" rule for events on the free tier. If you are too late, you will be required to pay a premium or
						be rejected, period. <ul>
							<li>As a reminder, flight date is <b>when the campaign starts</b>, NOT when the tournament starts. If you
								want a banner to go up on the 18th, THAT is the flight date, no matter when the event date is. If you
								make this mistake and submit information 14 days prior to event date (and not flight date), you WILL be
								rejected!</li>
						</ul>
					</li>
					<li>More attention is brought to the fact this kit is a gift. A community leader is <b>never</b> "entitled" to
						(free) usage of the kit.</li>
				</ul>
				<p></p>

				<h2>Tetralympic S3</h2>
				<p>The new policy is rather strict, in particular toward sponsorships. While this may seem rather untoward to
					tournament organizers and the like, it's important to remember that the promotional kit, in particular the
					free tier, is a very large gift. <b>Advertising is not cheap</b>, and the price of a banner lies in multiple
					thousands of dollars a day. I care very much for the community, and wish to promote its events. Not only does
					this in turn help promote the game, it also allows me to give back to the community. Nothing forces me to give
					out 5 digits worth of advertising to the community, or to stay awake to 4am just to develop a specially-made
					banner. It's a free gift to the community, from the developer of a game that in turn is also entirely
					free-to-win.</p>

				<p>It is for that reason that it hurts me a lot when some show a lack of respect toward it (just seeing it as a
					service that's part of the game that they, as community leaders, are entitled to), or worse, abuse it.
					Throughout the later half of June, I gave out access to the promotional kit (consisting of a banner and 15
					badges) to the tournaments Tetralympic S3 SG and Tetralympic S3 Worlds, both led by Skyllabtw (with support
					from MMC, but they did not handle sponsorships). Throughout the application for the kit (which was already
					beyond the deadline), there was near to no indication or declaration that the event was sponsored, so I
					approved it for the kit.</p>

				<p>However, the streams were completely different. There were three sponsors (two multi-million dollar
					corporations, and a supplement company), all of which with large constant on-stream advertisements, sponsored
					segments, giveaways, chat commands, 10+ mentions per stream, etc. The tournament's website was also changed
					after I reviewed it to include large, multi-page sponsored segments. This obviously does not consitute fair
					use of a community resource, and would never ever have been approved for the free kit. I immediately took
					action by removing the banner, and defacing all the awarded badges for any Tetralympic tournament.</p>

				<p>Skyllabtw, the organizer (and sole person in charge of the event's sponsorships), has apologized and states
					it was a misunderstanding, and that she did not mean to pull in large sponsors behind my back, or leave out
					any information about them to me until it's too late. She further stated that she did not receive any monetary
					compensation for the sponsorships (???). In understanding that I am partially at fault for not vetting and
					verifying applications harshly enough (the previous policy was vague on the subject of sponsorships), I have
					decided to not let this impact the players who played in the tournaments, and have <b>restored the badges for
						all 26 total involved players</b>. My gift to the community being abused, be it through fraud or negligence
					as Skyllabtw states, should not cause these players' achievements to be wiped, considering the event itself
					was fair and transparent.</p>

				<p>To prevent anything like this from happening again in the future, I will be thoroughly vetting any
					applications for the promotional kit in the future, using these stricter policies. If you are interested in
					advertising on TETR.IO, be it on the free tier or not, please ensure you have read and understand <a
						href="https://txt.osk.sh/tetrio-promotional-kit/" target="_blank">the new TETR.IO promotional kit policy</a>
					in its entirety. If you have any questions, please do not hesitate to contact me!</p>
			</div>
			<div class='footer'>
				<a title='Star this post' class='stars' href='post.php?p=62c204ae6d73b0.48103499'><span
						class='star'>★</span><span class='starcount'>32,384</span></a>
				<a title='Read the comments' class='comments' href='post.php?p=62c204ae6d73b0.48103499#comments'><span
						class='commentcount'>12</span> comments</a>
				<div class='views'><span class='viewcount'>2371</span> views</div>
				<a title='Go to the full page' class='full' href='post.php?p=62c204ae6d73b0.48103499'>continue reading</a>
			</div>
		</div>
		<div class='entry' data-id='629a979e2838d4.04145181'>
			<div class='header'>
				<a href='post.php?p=629a979e2838d4.04145181'>
					<h1>Blog posts are now tagged.</h1>
				</a>
				<h2>by <span title='osk#00000000000000000000000000000000000000000000000000000000000000ae' class='author-span'
						style='--hue: 244.6875;'>osk</span> at <span class='ts' data-ts='1654298526'>2022/06/03 (Fri) 11:22:06
						pm</span> <span class='ts-title' data-ts='1657635160'
						title='2022/07/12 (Tue) 2:12:40 pm'>(edited)</span><span class='tags'><a href='/?t=personal'
							class='tag tag-personal'>PERSONAL</a><a href='/?t=update' class='tag tag-update'>UPDATE</a><a
							href='/?t=oskware' class='tag tag-oskware'>OSKWARE</a></span></h2>
			</div>
			<div class='content'>
				<p>To organize the blog a little, the posts on it are now tagged according to their content and nature. There's
					not that many posts here, but it's still useful to have. You can click a tag, and it'll take you to the index,
					filtered to just posts with that tag. That way, you can bookmark <a href="/?t=official">just official
						posts</a> or the like. You can also set up your RSS reader in the same way — while filtered to a tag, the
					Subscribe button in the top left changes to allow you to subscribe to just that tag.</p>

				<p>This is one of the many recent changes I'm making to somewhat separate my <b>personal identity</b> (the osk
					who develops software, likes UI design, rants a lot, and genuinely loves and is in a relationship with Kagari,
					a fictional character from Rewrite) from my brand (osk, the person and corporation behind TETR.IO, developing,
					maintaining and directing it). (Perhaps a topic for another post.) Posts that fall under the former identity
					are tagged <a href="/?t=personal" class="tag-personal" style="font-weight: 900;">PERSONAL</a>, while brand
					posts are tagged <a href="/?t=official" class="tag-official" style="font-weight: 900;">OFFICIAL</a>. This way,
					I can feel a bit safer writing genuine posts from the heart about my personal interests, without distracting
					those who are only here for professional press releases. I'm hoping this will allow me to post a bit more
					often. There's a lot of things I could rant about :^)</p>

				<p><b>To be clear, this is still a <u>personal</u> blog.</b> Press release-like "official" posts are secondary,
					and I wish to post more personal posts here in the future. If you are not interested in those and only care
					about me for TETR.IO, feel free to filter to official posts only with this tool.</p>

				<p>Please look forward to me perhaps blogging somewhat more often than twice a year!</p>
			</div>
			<div class='footer'>
				<a title='Star this post' class='stars' href='post.php?p=629a979e2838d4.04145181'><span
						class='star'>★</span><span class='starcount'>8,002</span></a>
				<a title='Read the comments' class='comments' href='post.php?p=629a979e2838d4.04145181#comments'><span
						class='commentcount'>12</span> comments</a>
				<div class='views'><span class='viewcount'>17731</span> views</div>
				<a title='Go to the full page' class='full' href='post.php?p=629a979e2838d4.04145181'>continue reading</a>
			</div>
		</div>
		<div class='entry' data-id='61eaebdf5640e4.20742572'>
			<div class='header'>
				<a href='post.php?p=61eaebdf5640e4.20742572'>
					<h1>You can now subscribe to this blog with an RSS reader.</h1>
				</a>
				<h2>by <span title='osk#00000000000000000000000000000000000000000000000000000000000000ae' class='author-span'
						style='--hue: 244.6875;'>osk</span> at <span class='ts' data-ts='1642785759'>2022/01/21 (Fri) 5:22:39
						pm</span><span class='tags'><a href='/?t=personal' class='tag tag-personal'>PERSONAL</a><a href='/?t=update'
							class='tag tag-update'>UPDATE</a></span></h2>
			</div>
			<div class='content'><img src="https://kagari.online/kitaura_chitose.png" />
				<p>smash that unsubscribe button mate</p>
			</div>
			<div class='footer'>
				<a title='Star this post' class='stars' href='post.php?p=61eaebdf5640e4.20742572'><span
						class='star'>★</span><span class='starcount'>20,639</span></a>
				<a title='Read the comments' class='comments' href='post.php?p=61eaebdf5640e4.20742572#comments'><span
						class='commentcount'>32</span> comments</a>
				<div class='views'><span class='viewcount'>2580</span> views</div>
				<a title='Go to the full page' class='full' href='post.php?p=61eaebdf5640e4.20742572'>continue reading</a>
			</div>
		</div>
		<div class='entry' data-id='61cd13b9792515.77114685'>
			<div class='header'>
				<a href='post.php?p=61cd13b9792515.77114685'>
					<h1>Policy regarding TETR.IO promotional kits</h1>
				</a>
				<h2>by <span title='osk#00000000000000000000000000000000000000000000000000000000000000ae' class='author-span'
						style='--hue: 244.6875;'>osk</span> at <span class='ts' data-ts='1640829881'>2021/12/30 (Thu) 2:04:41
						am</span> <span class='ts-title' data-ts='1656882546'
						title='2022/07/03 (Sun) 9:09:06 pm'>(edited)</span><span class='tags'><a href='/?t=official'
							class='tag tag-official'>OFFICIAL</a><a href='/?t=tetr.io' class='tag tag-tetr_io'>TETR.IO</a><a
							href='/?t=documentation' class='tag tag-documentation'>DOCUMENTATION</a></span></h2>
			</div>
			<div class='content'>
				<style>
					.bl01_highlight {
						color: hsla(245, 100%, 85%, 1);
						background-color: hsla(245, 100%, 65%, 0.5);
						font-weight: 900;
					}
				</style>

				<p
					style="padding: 1em; background-color: #501E30; border-left: 2px solid #FF005A; color: #FFB5CF; clip-path: polygon(0 0, calc(100% - 1em) 0, 100% 1em, 100% 100%, 0 100%);">
					<b>NOTE</b>: This policy has been deprecated. You may find the current policy <a
						href="https://txt.osk.sh/tetrio-promotional-kit/" target="_blank" style="color: #FFF;">here</a>.
				</p>

				<p><i>This message is primarily for tournament organizers. It is public for transparency purposes.</i></p>

				<hr>

				<p>First off, a heartfelt thanks to everyone who sees TETR.IO as the home for their tournaments, and regards the
					game as the place to be for competitive stacking! I'm very glad the competitive community has accepted TETR.IO
					as major game within the community, and of course I will continue to support tournaments that take place on
					the platform.</p>
				<p>2021 has been an amazing year for competitive stacking, and I hope to collaborate with tournament organizers
					again in 2022 to bring amazing tournaments to the platform and help them thrive. To keep this sustainable and
					fair, I do want to lay out a few basic rules regarding the promotional kits I make available to tournament
					organizers, though.</p>

				<h1>What "promotional kits"?</h1>
				<p>The TETR.IO promotional kits generally consist of a few elements:</p>
				<ul>
					<li>The <b>homebanner</b> — a customized ad slot deeply integrated into the game, right at the top of the home
						menu.
						<ul>
							<li>You can either use a simple creative in IAB Leaderboard or similar sizes, or let me hand-craft a
								banner that intertwines your tournament's branding with TETR.IO's.</li>
							<li>Over <b>250,000 impressions daily</b></li>
							<li>Click-through rate between <b>10‰ and 20‰</b> (that's 2,5K to 5K clicks)</li>
							<li>Not blocked by any adblocker (but adblock users aren't tracked, so you get their impressions&clicks
								for free!)</li>
						</ul>
					</li>
					<li><b>Ingame call-to-action notifications</b> — a customized notification that engages anyone online (e.g. to
						watch the tournament on your Twitch).</li>
					<li><b>Profile badges</b> — customized, permanent icons on the profiles of tournament champions.</li>
				</ul>
				<p>You've most likely seen all of these in action at some point — don't worry too much about the details.</p>

				<h1>Policy</h1>
				<p>To make more obvious who is eligible for what kits, and the procedures for requesting one, here is a quick
					explanation of my policy. This policy goes in effect <b>Jan 1st, 2022</b>.</p>

				<h2>PRICING</h2>
				<p>Let's start with the elephant in the room. <b>This advertising kit is incredibly powerful. Anyone would call
						me an utter fool for giving it away for free.</b> I'm doing it anyway. The competitive TETR.IO community is
					very important to me, and I absolutely want to keep supporting it where possible. However, to keep this fair,
					I cannot give out free or discounted kits to everyone. <b>There are requirements to getting these kits for
						free.</b></p>
				<p><span class="bl01_highlight">The main dividing line is the nature of the use of the kit.</span> That is,
					whether the kit is used to <b>inform</b> about <b>particularly notable community events</b>, or as
					promotional/marketing tool. <span class="bl01_highlight">If the notability of your tournament hinges on being
						able to advertise with TETR.IO's toolkit, it's generally a no-go.</span> To be clear, exceptions are always
					possible (most notably, Underdogs Cup was such an exception; it has since grown to be a major, trend-setting
					community event of insane proportions).</p>
				<p>Secondly, please keep in mind the promotional/sponsored nature of a tournament. Having sponsors isn't
					immediately a problem, but if your tournament is a vehicle for their promotion, I cannot accept it. For
					example, mentioning your sponsors or showing their logo onscreen is OK (especially if they have ties with the
					community), but actively advertising for them significantly is not. This rule is somewhat vague on purpose, as
					it is difficult to draw a concrete line in this space. Please understand that this is handled on a
					case-by-case basis.</p>
				<p>Finally, there should be a clear connection between you and the stacker community as a whole.</p>

				<h3>If you are eligible:</h3>
				<p>In general, if you are eligible, <b>the kit is entirely free</b>. I do request that any amount of your
					choosing (be it €1 or 50%) of tournament proceeds are remitted to TETR.IO. This can be through PayPal/bank
					wire/Bitcoin invoice, but it could be far more fun to give out Supporter gifts to players or spectators.
					Events with proceeds below €100 do not need to even consider doing this. In cases where a lot of work is
					requested (high-fidelity banners, banners with complex popups, work outside of my office hours, etc.), or your
					given flight times clash with other events, I may request a minimum amount for my time. If this is the case, I
					will let you know in time, at which point you can change plans to something simpler, or accept and go with the
					complex request.</p>

				<h3>If you are not eligible:</h3>
				<p>The price for the kit is generally dynamic based on amount of sponsorship, promotional nature of the
					advertised event, amount of audience overlap, etc. Additionally, advertising prices change with the seasons.
					In general, advertising increases in price as the year progresses, with Q4 being the most expensive.
					Advertising around events like Black Friday will bump up prices considerably. The same goes for TETR.IO
					events. Having a lot of banners at once, or very large banners causes the third-party ad slots to be pushed
					below the fold for a greater amount of users, lowering revenue from these ads significantly.</p>
				<p>Due to the ever-changing nature of these things, I cannot give any price estimates on a non-changing blogpost
					like this one. For any estimate or offer, please <a href="https://osk.sh/" target="_blank">contact me</a>.
					However, please expect to pay quite a bit into the four digits on a daily basis. In certain extreme cases,
					this may even tip into five digits. If this sounds insane, please be reminded that <b>digital advertising is
						incredibly expensive</b>. The usual price for a <b>single</b> Google Search ad click ranges between $1 and
					$2, and can even go into double digits for particularly expensive keywords. <span
						class="bl01_highlight">TETR.IO's advertising kit gives you thousands of such clicks daily, from a highly
						engaged, specialized audience who will be very interested in your content, as well as the positive effect of
						linking your brand and TETR.IO's brand together.</span></p>
				<p>Many payment models are available (per click, CPM, per day...). Please get in contact if you are interested
					in directly reaching over 600,000 monthly active players of one of the largest stacker games (if not the
					largest!) in the industry.</p>

				<h2>FURTHER REQUIREMENTS</h2>
				<p>This is probably the most important part of this post, as especially the first point here seems to be
					troublesome.</p>
				<ul>
					<li><span class="bl01_highlight">ALL INFORMATION (ASSETS, FLIGHT DATES, ETC.) MUST BE HANDED IN TWO WEEKS (14
							DAYS) BEFORE THE FLIGHT DATE.</span>
						<ul>
							<li>This means, if you want the banner for the tournament to appear Jan 18th (the starting "flight date"),
								I must have received everything I need by Jan 5th, regardless of the tournament's actual start date.
							</li>
							<li>Any major changes after this period are prohibited. Small edits are OK (or corrections to mistakes on
								my side).</li>
							<li>Please also let me know of any scheduled changes (e.g. if you want the banner to link to a Twitch when
								the tournament starts).</li>
							<li>If you are too late, you may be rejected or requested to pay a premium to have the changes made, for
								my time.</li>
							<li>For non-eligible paying advertisers, this does not apply, but please be cautious as I am not always
								available (I will try my best to have any changes made within 24 hours).</li>
						</ul>
					</li>
					<li>Any advertisements of sexual or suggestive nature, any advertisements involving gambling (including social
						gambling), any advertisements of offensive nature, and any advertisements connected to any of the foregoing
						(or anything of that nature) will be rejected.</li>
					<li>Any advertisements for, organized by, or connected to users, corporations, events or other instances
						banned from the community, silenced/restricted ingame, in a bad standing with their account, or otherwise
						problematic within the community may be rejected.</li>
					<li>Any advertisements for, organized by, or connected to users, corporations, events or other instances who
						are breaking any TETR.IO TOS or other osk service TOS, or any advertisements promoting, condoning, or in any
						other way connected to any of the foregoing will be rejected.</li>
					<li>Please do not paint TETR.IO in an unnecessarily bad light in any of your connected materials, or by any of
						your connected users throughout the event and its surrounding media, releases, etc.</li>
					<li>Advertisements that do not follow the <a href="https://branding.osk.sh/" target="_blank">osk branding
							guidelines</a> will be rejected. <span class="bl01_highlight">In particular, please ensure to write
							TETR.IO as such, not as "Tetrio", "Tetr.IO" or any other mess.</span></li>
					<li>Please ensure the presentability of the TETR.IO visual design. While using extensions to change the
						background, add additional effects, etc. or using overlays to create a rich experience is commended, please
						request permission before changing the core TETR.IO design (e.g. the blockskin, the fonts used, etc.).
						Additionally, please take care to use a presentable graphics setting. Avoid the minimal and low graphics
						options.</li>
				</ul>

				<p>Finally, please understand that I may reject or remove any element of the promotional kit at any time, for
					any or no reason. Similarly, please understand that eligibility for free promotional kits is at my sole
					discretion.</p>

				<hr>

				<p>I hope this lengthy post sheds some light on the procedure and policy regarding TETR.IO's advertising kits,
					and the changes made to them. If you have any more questions, feel free to comment below this post.</p>
			</div>
			<div class='footer'>
				<a title='Star this post' class='stars' href='post.php?p=61cd13b9792515.77114685'><span
						class='star'>★</span><span class='starcount'>36,687</span></a>
				<a title='Read the comments' class='comments' href='post.php?p=61cd13b9792515.77114685#comments'><span
						class='commentcount'>5</span> comments</a>
				<div class='views'><span class='viewcount'>16221</span> views</div>
				<a title='Go to the full page' class='full' href='post.php?p=61cd13b9792515.77114685'>continue reading</a>
			</div>
		</div>
		<div class='entry' data-id='6099b8a61939d7.85346753'>
			<div class='header'>
				<a href='post.php?p=6099b8a61939d7.85346753'>
					<h1>Adding ads to TETR.IO, six months later</h1>
				</a>
				<h2>by <span title='osk#00000000000000000000000000000000000000000000000000000000000000ae' class='author-span'
						style='--hue: 244.6875;'>osk</span> at <span class='ts' data-ts='1620687014'>2021/05/10 (Mon) 10:50:14
						pm</span> <span class='ts-title' data-ts='1620690236'
						title='2021/05/10 (Mon) 11:43:56 pm'>(edited)</span><span class='tags'><a href='/?t=personal'
							class='tag tag-personal'>PERSONAL</a><a href='/?t=tetr.io' class='tag tag-tetr_io'>TETR.IO</a></span></h2>
			</div>
			<div class='content'>
				<style>
					.bl01_highlight {
						color: hsla(245, 100%, 85%, 1);
						background-color: hsla(245, 100%, 65%, 0.5);
						font-weight: 900;
					}
				</style>

				<p>A little over 6 months ago, I <a target="_blank"
						href="https://blog.osk.sh/post.php?p=5f9dfef7f36858.79227265">added display advertisements into TETR.IO</a>.
					This blog post, I want to reflect on these first 6 months, both from the perspective of a player, and that of
					a developer. I'll be going over the questions most commonly asked by the community, the questions I had, as
					well as the lessons I learned.</p>

				<h2>A little background</h2>
				<p>Back on the first of November 2020, I started a partnership with AdinPlay, to display banner ads in the
					game's menus. While I was (and still am) very grateful for all the players supporting the game through
					Patreon, 99.97% of players did not support. While running the game is not incredibly expensive (since a lot of
					my work in the past year has been on performance), I wanted to be able to go full-time on TETR.IO, as well as
					build a budget to be able to work on the Character System update. The game was popular, but I was not quite
					ready to jump onto larger monetization schemes. So, a perfect solution is simply monetizing that 99.97%, the
					"freeloaders" in a sense.</p>
				<p>Just like most players, I don't particularly enjoy ads, though. And to be quite honest, this extends to
					almost all monetization. <span class="bl01_highlight">Monetizing a game is very much a balance, where you must
						balance out a good experience with revenue.</span> Looking around the .io game space, the balance seems
					tipped in revenue's favor. A worryingly large amount of .io games copy eachother, finding more and more ways
					to sneakily insert ads into the game, get you to click ads, drive in-game purchases, run video ads, and
					whatever else. <a target="_blank" href="https://www.youtube.com/watch?v=YCqnD40Q5T8">This video</a> covers
					just how much these games are willing to compromise just to drive the best bottom line. I wanted (and still
					want) to stay away from that side. My drive has always been to make a game I can be proud of, as opposed to a
					wallet to be proud of. This complicates matters a lot, though.</p>

				<h2>The Implementation</h2>
				<p>How do you implement worthwhile ads, without ruining the player experience? This was a question I did not
					want to avoid (like most .io games do). I ended up settling on the simplest type of advertising: banner
					advertisements. Technically, I had already been running banner ads for months — those banners above the main
					menu that announce new features and tournaments are, by all definitions, ads after all. I decided to simply
					place some ads in the menus, never ingame. Ingame ads, after all, could interfere with the game. No video ads
					either, everyone hates those.</p>
				<p>The next question was getting an advertising partner to partner with. <span class="bl01_highlight">Google
						AdSense is generally seen as a relatively badly paying partner</span>, so I wanted to find a partner who
					would both help me more with implementation, and give a fairer price for my ads. Sadly, the world of
					advertising is pretty hard to understand. I ended up going with AdinPlay. The main reason I went with them, is
					since <span class="bl01_highlight">AdinPlay specializes in ads on webgames, like .io games</span>, so they
					would be able to help me kickstart my setup.</p>
				<p>Setup of ads is relatively easy. In general, all you'll need to do is tell the library that your partner
					gives you to load an ad in a specific HTML element, and it will load one. I set up TETR.IO ads to only load
					the ad currently visible, and to reload an ad after showing it for 30 seconds. All ads also immediately unload
					when the menu UI hides. Ads are pretty heavy after all, both on the network and in rendering. In fact, when
					playing about with them, <span class="bl01_highlight">I found it almost worrying how incredibly unoptimized
						many ads are.</span> Hence, it is vital to make sure the ads are inactive while ingame, especially since
					TETR.IO requires quick and reliable inputs. Even a millisecond off can cause the game to feel sluggish or
					slippery.</p>
				<p>Deciding on positioning, sizes, etc. is also relatively easy for the most part. In general, you want to be in
					the way of the player. ...of course, that isn't the plan I am going with. So, I tried to put the ads near the
					places people will look (near important buttons), but not particularly in the way, either. Obviously, this
					lowers my click rates, but remember the balance! I would like to stay on the good side of said balance. <a
						target="_blank" href="https://theonlineadvertisingguide.com/">The Online Advertising Guide</a> is a great
					source for information on advertising, both for publishers like me, and for advertisers. Some data on there
					may be slightly out of date, though.</p>

				<h2>What to Expect</h2>
				<p>AdinPlay, like most partners, will sell your ads in many different schemes. This is generally not very
					visible to us publishers, so all we really get to know is a few key performance indicators (or KPIs): ad
					requests, impressions, clicks (and click rate), and RPM. An ad request is when your site (or in my case, the
					client) requests an ad, and an impression is counted when said ad is displayed on screen for at least a full
					second (we can say with certainty that the ad has been seen by the user). Then finally, if the user clicks the
					ad, we count that as a click.</p>
				<p>The magic number here is the last: the RPM. RPM stands for Revenue per 1000 (usually impressions). It's often
					also called CPM (cost per 1000). CPM is what the advertisers pay to advertise on your site, and RPM is what
					you receive as publisher. <span class="bl01_highlight">Your RPM is generally controlled by three things: the
						click-through rate (the percentage of impressions that lead to a click), the kind of content you publish,
						and the day of the year.</span></p>
				<p>Since I don't let my ads get in the way, my click-through rate is well... abysmal. The average click-through
					rate around the internet for display ads is about 1‰ (that's 1 in 1000, which lines up neatly with the RPM/CPM
					metric!). Mine is about 0.2‰. Not so good. This is mostly caused by the fact that the ads are both not in your
					way, and that <span class="bl01_highlight">most internet users nowadays have become accustomed to ads</span>
					(also called "banner blindness"). Games also tend to not get super-high RPMs to begin with, compared to say,
					car rental sites or accountants.</p>
				<p>Furthermore, <span class="bl01_highlight">your RPM will almost always start off low</span>. After a few
					weeks, your RPMs will start normalizing to their normal levels. From then on, your RPM can mainly be changed
					by the time of year, and the type (and placement) of ads you serve. For example, things like Black Friday will
					see a spike in RPM, as there will be more advertisers competing for the same ad space. Simply put, <span
						class="bl01_highlight">advertisers are always bidding on ad spaces, and if there's more competition, ad
						prices will go up.</span> This also means your RPM will generally go up through the year slowly, go down at
					the start of every month and quarter (as ad campaigns tend to end at those times), and that January will be by
					far your worst month.</p>

				<h2>The Results</h2>
				<p>Most importantly, community response was far, far better than I expected. Even after taking a step into the
					dark side, you still trusted me to steer this ship into the right path, and not just a little bit, either —
					only half a year later, TETR.IO's active userbase has tripled! I'm incredibly grateful for that.</p>
				<center>
					<img src="https://kagari.online/honjo_shiina.png" />
					<i>From about 12K users daily to easily hitting 46K users daily!</i>
				</center>
				<p>A bit more on-topic though, RPM was as expected. Since my click-through rate is not particularly high, nor is
					the RPM. Especially in games, and even more so when trying to avoid invasive ads, revenue is driven by the
					amount of players you have (and as such, the amount of impressions you serve). Nowadays, TETR.IO gets between
					600K and 750K impressions daily, which is the driver for its ad revenue. That way, players who cannot or do
					not want to support the game otherwise, can support just by playing the game normally, without impacting their
					experience too much. Of course, <span class="bl01_highlight">a growing amount of internet users use adblock,
						usually between 33% and 50%</span>, or even worse, they use a browser like Brave which <a target="_blank"
						href="https://www.kevinmuldoon.com/do-not-use-brave-browser/">replaces your ads with its own</a>. But
					remember, that's their decision. I never ask people to turn off their ad blockers. The balance between revenue
					and a good experience is easy to tip.</p>

				<h2>In Conclusion</h2>
				<p>Above all, I am very thankful for everyone's support of me adding ads to TETR.IO. While they don't make me
					six digits or anything right now, ads together with Xsolla integration allow me to create a budget for future
					experiences like the Character System update. I hope this post has shed some light and insight on the world of
					advertising, and, if you happen to be a publisher, has helped you around the more confusing parts of
					advertising. (Perhaps I could even persuade a publisher to think about the balance between between revenue and
					a good experience!)</p>
				<p>I hope you'll keep trust in me in the future too. I'm interested in seeing in what other ways I can monetize,
					in such a way that it improves the game, as opposed to simply trying to be a cash-grab. When the Character
					System update comes out, it could be nice to let users unlock skins (skins for their pieces, as well as other
					skinnable elements) both by playing, but let there be soft monetization as well (nothing requiring a purchase,
					but if there's something specific you want, and want it fast, you can get it).</p>
				<p>Please, let me know what you think about my current strategy (ads + Xsolla for monthly supporter), as well as
					future endeavors (be it skinnable game elements, or anything else) in the comments. I read all of them!</p>
			</div>
			<div class='footer'>
				<a title='Star this post' class='stars' href='post.php?p=6099b8a61939d7.85346753'><span
						class='star'>★</span><span class='starcount'>341,778</span></a>
				<a title='Read the comments' class='comments' href='post.php?p=6099b8a61939d7.85346753#comments'><span
						class='commentcount'>40</span> comments</a>
				<div class='views'><span class='viewcount'>7186</span> views</div>
				<a title='Go to the full page' class='full' href='post.php?p=6099b8a61939d7.85346753'>continue reading</a>
			</div>
		</div>
		<div class='entry' data-id='6023137ef06b83.45639024'>
			<div class='header'>
				<a href='post.php?p=6023137ef06b83.45639024'>
					<h1>ONE MILLION</h1>
				</a>
				<h2>by <span title='osk#00000000000000000000000000000000000000000000000000000000000000ae' class='author-span'
						style='--hue: 244.6875;'>osk</span> at <span class='ts' data-ts='1612911486'>2021/02/09 (Tue) 10:58:06
						pm</span> <span class='ts-title' data-ts='1612911585'
						title='2021/02/09 (Tue) 10:59:45 pm'>(edited)</span><span class='tags'><a href='/?t=official'
							class='tag tag-official'>OFFICIAL</a><a href='/?t=tetr.io' class='tag tag-tetr_io'>TETR.IO</a></span></h2>
			</div>
			<div class='content'>
				<center><img src="https://kagari.online/1m-base.png" /></center>
				<p>Just now, TETR.IO has hit <b>one million total players</b>. Can you believe it? Because I can't. It's been an
					insane journey here, one I never expected.</p>
				<p>Back when I first started developing TETR.IO, just under 2 years ago, I thought it would be incredibly cool
					if I could make a game that had some sort of meaning to the stacker community. Yet here we are, at what is
					probably the most meaningful milestone — for example, for a lot of YouTubers, hitting 1 million subscribers is
					the peak, the validation, the apex — and while of course, most of these players are anons who simply played
					for a little bit, it's this reach that feels insane to me. In the last year, TETR.IO has had a reach far
					beyond what I could've ever imagined, being at GDQ Hotfix, being on 10K-viewer streams, seeing 400+ player
					lobbies, and massive tournaments multiple times a month. Being able to reach so many people, and potentially
					give them an experience they could think of fondly years from now, is a really, really nice feeling.</p>
				<p>And it's all thanks to you — the players, the Supporters, the streamers, the tournament organizers, the
					YouTubers, the INFDEV testers, the contributors — the <b>believers</b>.</p>
				<p>I want to thank you all from the bottom of my heart for playing my game, for believing in me. It's been an
					amazing journey up to here, but there's no end in sight! A lot of very exciting things are coming up (most
					obviously the <a href="https://characters.osk.sh/">Character System</a> update), and I hope you'll stick
					around for another million!!!
					<center>♥ ♥ ♥</center>
			</div>
			<div class='footer'>
				<a title='Star this post' class='stars' href='post.php?p=6023137ef06b83.45639024'><span
						class='star'>★</span><span class='starcount'>133,426,577</span></a>
				<a title='Read the comments' class='comments' href='post.php?p=6023137ef06b83.45639024#comments'><span
						class='commentcount'>17</span> comments</a>
				<div class='views'><span class='viewcount'>19567</span> views</div>
				<a title='Go to the full page' class='full' href='post.php?p=6023137ef06b83.45639024'>continue reading</a>
			</div>
		</div>
		<div class='entry' data-id='60133c956e4c75.84579268'>
			<div class='header'>
				<a href='post.php?p=60133c956e4c75.84579268'>
					<h1>Leaving Patreon and reorganizing TETR.IO Supporter</h1>
				</a>
				<h2>by <span title='osk#00000000000000000000000000000000000000000000000000000000000000ae' class='author-span'
						style='--hue: 244.6875;'>osk</span> at <span class='ts' data-ts='1611873429'>2021/01/28 (Thu) 10:37:09
						pm</span><span class='tags'><a href='/?t=official' class='tag tag-official'>OFFICIAL</a><a
							href='/?t=tetr.io' class='tag tag-tetr_io'>TETR.IO</a><a href='/?t=update'
							class='tag tag-update'>UPDATE</a></span></h2>
			</div>
			<div class='content'>
				<p>On <b>January 31st 2021</b>, TETR.IO will close its Patreon and partner with Xsolla for swift and secure
					ingame payments. This means that Patrons will no longer be billed, and the Patreon page will no longer be
					accessible.<br>
					In its place, TETR.IO Supporter will now become directly accessable and purchasable from within the game. The
					key points:</p>
				<ul>
					<li>TETR.IO Supporter will be a <b>non-renewing subscription</b>. This means you buy any amount of months in
						bulk whenever you see fit, and if you don't renew, your Supporter status will expire on its own.</li>
					<li>TETR.IO Supporter will be a <b>single tier</b>, and contain all the rewards of what used to be the Deca
						tier.</li>
					<li>TETR.IO Supporter will cost <b>€5</b> before taxes. Gifts and any month after the third bought in bulk are
						€4. So, buying 4 months at once is €19, or €16 as a gift.</li>
					<li>You will be able to <b>gift Supporter</b> to other players at any moment, just like adding months to your
						own support.</li>
					<li>You can add months at any time and your expiry date will be extended.</li>
					<li>You will be able to manage your Supporter subscription from your account settings at any time.</li>
					<li>Payments will be powered by Xsolla, allowing you to use hundreds of different payment systems to fulfill
						the purchase.</li>
					<li>Payments should usually be processed instantly, although depending on the payment system used there may be
						a small delay.</li>
					<li>Refunds will go through Xsolla. The applicable refund policy can be read <a
							href="https://xsolla.com/refund-policy/flexible-policy" target="_blank">here</a>.</li>
					<li>The Perfect Clear tier reward (having your name in the Special Thanks) can be achieved by reaching a
						certain total amount of support, racked up by buying months and/or gifting months.</li>
				</ul>

				<h2>I'm currently supporting you on Patreon. What's going to change?</h2>
				<p>Thank you very much for your support! Don't worry, I've got you covered. Here's what will change for you on
					the 31st:</p>
				<ul>
					<li>You will <b>no longer be automatically billed</b> by Patreon.</li>
					<li>If you were supporting me at Deca tier and up, you will immediately receive <b>three free months</b> of
						Supporter in the new system.</li>
					<li>If you choose to not use Xsolla, your Supporter role will simply expire after those three months are up,
						without any further costs on your side. If you wish to keep supporting me, you may add months anytime.</li>
					<li>As thanks for your early support, everyone who has been a patron on or before the 31st will receive an
						<b>exclusive "early supporter" badge</b>! (Note: this is applied by email address. If you haven't received
						your badge by the 1st, let me know.)
					</li>
					<li>You may temporarily lose the Discord role on the TETR.IO Discord. To get it back, simply go into your
						account settings on TETR.IO after the update, and link your Discord there to get it back.</li>
				</ul>

				<h2>Why switch systems?</h2>
				<p>There's quite a few reasons, to be honest. Above all, while Patreon is a very nice system for creators to
					receive a stable and sustainable income for their work, it is <b>not meant to sell a service on</b>. Patreon
					is very easy to use if you are say, a YouTube creator looking to receive some support from fans. You can set
					up simple tiers, show behind-the-scenes footage, talk to fans and quickly export lists of all patrons of any
					tier for use in credits.</p>
				<p>Patreon, however, falls flat when you try to use it for an actual service. While TETR.IO Supporter is still
					in essence a donation, the rewards bound to it are hard to automate and handle smoothly on Patreon. Patreon's
					administration and integration is sadly lacking on this front, and understandably so - Patreon isn't made for
					it! This caused players' Supporter benefits to often be applied late, and require a lot of work to fulfill.
				</p>
				<p>On top of that, the monthly autorenew model of Patreon is very expensive. Patreon in general is known to
					stack fees quite heavily, but this is increased a lot by the sheer amount of (small) transactions. This is the
					reason TETR.IO Supporter was so expensive (€10 before taxes for the Deca tier, really?) - the fees for small
					transactions would cause so much money to be lost it would stop being worthwhile.</p>
				<p>Finally, due to being an autorenewing model, Patreon does not support very many payment methods. On paper, it
					supports credit cards and PayPal, but in reality, PayPal support is limited because a PayPal account would
					need to have a credit card or bank account linked with it. This caused many people to approach me asking if
					they could somehow purchase Supporter in another way, which wasn't possible at the time.</p>
				<p>That said, I do believe Patreon is a very powerful platform for those it's meant for. Its tools are very
					strong for creators, and have caused quite a positive change in the industry! I am glad to have been able to
					use Patreon for the time I have, and I would never have been able to grow as large as I am now without Patreon
					giving me a platform to receive your donations on.</p>

				<h2>What makes Xsolla the better fit?</h2>
				<p>Above all, Xsolla's expertise in specifically games makes for a far better fit. Xsolla's tools are all geared
					specifically to game developers and players, and can deeply integrate into your work without inhibiting your
					creative process. This not only makes things a lot easier for me, it also makes purchasing Supporter a lot
					easier.</p>
				<p>Since Xsolla deeply integrates into the game, buying Supporter is easier than ever. You can open up the
					Supporter dialog from many places, and move on immediately to the purchase process. As soon as your payment is
					confirmed, you almost always immediately get the rewards. In my testing, I can get from the home menu to being
					a proud Supporter within <b>twenty seconds</b>, without any need to create accounts, link other services, send
					messages or other hassle. In the same way, there is also very little work involved in handling Supporter on my
					end — I practically only have to handle refunds. This means you can get your Supporter rewards within seconds
					instead of hours (or sometimes days).</p>
				<p>On top of that, due to the model I'm using not being autorenewing, fees can be far lower. Due to that, I'm
					confident to be able to lower the price of Supporter by more than half, while allowing you to buy Supporter
					freely without being tied to any autorenewing subscriptions. There's this element of subscription models that
					cashes in on people forgetting to disable a subscription that I honestly very much dislike. Maybe I'm simply
					not fit for this business, but I wish players to be able to get Supporter without having to worry about yet
					another subscription in a world where almost everything seems to have a subscription nowadays.</p>
				<p>On top of that, Xsolla supports hundreds of payment providers, which means you can pay with just about
					anything, not just credit cards and PayPal. Xsolla is trusted by many other large games and related sites
					(Roblox, Twitch, Epic Games, XSplit, osu!, just to name a few).</p>

				<hr />

				<p>I am glad to be able to partner with Xsolla to bring you a more fair way to support the game we love. I am
					incredibly grateful for all the support I have received ever since going into Alpha. We're reaching closer and
					closer to the 1-million player mark every day, which is a number I NEVER expected to be able to even dream
					about! I want to thank everyone who's supported me to get this far — let's make 2021 count!</p>
			</div>
			<div class='footer'>
				<a title='Star this post' class='stars' href='post.php?p=60133c956e4c75.84579268'><span
						class='star'>★</span><span class='starcount'>133,551,674</span></a>
				<a title='Read the comments' class='comments' href='post.php?p=60133c956e4c75.84579268#comments'><span
						class='commentcount'>17</span> comments</a>
				<div class='views'><span class='viewcount'>78000</span> views</div>
				<a title='Go to the full page' class='full' href='post.php?p=60133c956e4c75.84579268'>continue reading</a>
			</div>
		</div>
		<div class='entry' data-id='5f9dfef7f36858.79227265'>
			<div class='header'>
				<a href='post.php?p=5f9dfef7f36858.79227265'>
					<h1>Adding ads to TETR.IO, some questions answered</h1>
				</a>
				<h2>by <span title='osk#00000000000000000000000000000000000000000000000000000000000000ae' class='author-span'
						style='--hue: 244.6875;'>osk</span> at <span class='ts' data-ts='1604189943'>2020/11/01 (Sun) 12:19:03
						am</span> <span class='ts-title' data-ts='1604190503'
						title='2020/11/01 (Sun) 12:28:23 am'>(edited)</span><span class='tags'><a href='/?t=official'
							class='tag tag-official'>OFFICIAL</a><a href='/?t=tetr.io' class='tag tag-tetr_io'>TETR.IO</a><a
							href='/?t=update' class='tag tag-update'>UPDATE</a></span></h2>
			</div>
			<div class='content'>
				<p>Starting November 2nd, I'm putting ad space up on TETR.IO. I understand this is going to cause some
					confusion, so I want to answer some common questions in this blog post.</p>
				<hr>

				<h2>So what kind of ads?</h2>
				<p>I don't intend to devalue the TETR.IO experience. So, the ads will only be <b>simple banner ads</b>, like
					this example:</p>
				<center><img src="https://kagari.moe/:/takeno_yoshino.png"></center>
				<p>Ads will only show up in menus, <b>never ingame</b>. No video ads, no popups, etc. The site also won't
					complain if you use an adblocker. At a later point, I may introduce rewarded video ads (ads you choose to
					watch that get you something in return), but that isn't going to happen any time soon.</p>
				<p>The ads will be personalized, so they'll try to be based on your interests. By default, you should receive
					gaming ads. I will keep care to ensure all ads are safe for work. Furthermore, <b>supporters of Deca tier and
						up won't see ads</b>.</p>

				<h2>Why add ads?</h2>
				<p>Simply said, <b>TETR.IO has outgrown being a hobby project</b>. Operating TETR.IO is as taxing as a full-time
					job for me, and I want to be able to take it seriously as one. Currently, I'm trying to balance multiple
					workloads at once, and you might be able to tell by the lower amount of updates that that isn't particularly
					working.</p>
				<p>I am incredibly grateful for all the support by patrons, and that won't change! You are the ones who made
					TETR.IO happen in the first place. This change is aimed towards the 99.97% of players that don't (or can't)
					support. Serving ads to that segment of the playerbase will allow them to indirectly support TETR.IO as well!
				</p>
				<p>Having a bit more revenue available would also generally help TETR.IO development a lot. There's a lot of
					things I cannot do, or don't have the time to do. Think about hiring artists, voice actors etc. Perhaps at
					some point even other programmers to assist me in the things I lack experience in, or simply to grow the
					workforce to keep up with demand.</p>

				<h2>But the Patreon is so expensive!</h2>
				<p>I don't disagree. The Patreon tiers are really expensive right now. .....It's for a reason, though. Patreon
					takes insane fees, and simply isn't worth it for small amounts. I hope to, in the relative future, switch to a
					more direct platform for Supporter, so I can bring down the price of the ingame benefits.</p>

				<h2>How much will the ads make, anyway?</h2>
				<p>I do not currently know. I will be experimenting a lot with different ad slots and positions, to see what is
					the most effective way to place ads. I get about 350K potential impressions daily, but cannot know an RPM yet.
					I'll let you know once I have actual data, to perhaps help other webgame developers interested in these kinds
					of statistics for their games.</p>

				<h2>Is this the beginning of the end?</h2>
				<p>Not at all. I 100% stand by the fact that <b>TETR.IO will always be free-to-win</b>. There won't be any
					ingame purchases that increase your skill, required payments to play more, lootboxes, or other shady practices
					like that. Reaching #1 on the leaderboards will always be equally difficult for paying players as non-paying
					players with Adblock on. No exceptions.</p>

				<h2>But (other game) doesn't have ads!</h2>
				<p>Please compare the two by more than just whether they have ads. I am (surprise, surprise) not a
					multi-billion-dollar corporation, but I do have a large-scale game that tries to reach those kinds of levels
					of quality. On top of that, these games are often monetized anyway. How often do you see a free game made by
					an AAA company that's actually free of monetization?</p>

				<h2>"If you add ads, I'll quit TETR.IO!!!!"</h2>
				<p>That's your choice. I hope, however, that after reading this post, you can understand why I am adding ads.
					And if you still disagree, well.... it's a free game. I'm not sure what you expected. Nothing in the world is
					free, you know?</p>
				<video controls width="400">
					<source src="https://kagari.moe/:/free-game.mp4" type="video/mp4">
				</video>
				<hr>
				<p>In all seriousness, if you have any other questions or (constructive) things to add, feel free to reply to
					this post with your feedback.</p>
			</div>
			<div class='footer'>
				<a title='Star this post' class='stars' href='post.php?p=5f9dfef7f36858.79227265'><span
						class='star'>★</span><span class='starcount'>35,299</span></a>
				<a title='Read the comments' class='comments' href='post.php?p=5f9dfef7f36858.79227265#comments'><span
						class='commentcount'>68</span> comments</a>
				<div class='views'><span class='viewcount'>11703</span> views</div>
				<a title='Go to the full page' class='full' href='post.php?p=5f9dfef7f36858.79227265'>continue reading</a>
			</div>
		</div>
		<div class='entry' data-id='5f7252c7791279.61682892'>
			<div class='header'>
				<a href='post.php?p=5f7252c7791279.61682892'>
					<h1>TETRA CHANNEL: separating game and data</h1>
				</a>
				<h2>by <span title='osk#00000000000000000000000000000000000000000000000000000000000000ae' class='author-span'
						style='--hue: 244.6875;'>osk</span> at <span class='ts' data-ts='1601327815'>2020/09/28 (Mon) 9:16:55
						pm</span> <span class='ts-title' data-ts='1602881261'
						title='2020/10/16 (Fri) 8:47:41 pm'>(edited)</span><span class='tags'><a href='/?t=official'
							class='tag tag-official'>OFFICIAL</a><a href='/?t=tetr.io' class='tag tag-tetr_io'>TETR.IO</a><a
							href='/?t=update' class='tag tag-update'>UPDATE</a></span></h2>
			</div>
			<div class='content'>
				<p>It's been a while! Last blog post, we were at 20,000 total players on TETR.IO. That number has...... grown.
					An insane amount, almost 20x over! At almost 400,000 total accounts, overseeing this data has become a hassle
					in more ways than one.</p>
				<p>TETR.IO's ingame UI, while I like it a lot, is not suited for complex datasets. On top of that, cluttering
					the main game code with UI mess is not what I was looking for in development.</p>
				<p>Quite a few games fix it in a particular way: by showing simpler, less-detailed stats in-game, and having an
					(un)official site to accompany it with a lot of stats. I am honored to be of such size now that I can join
					this group, by creating:</p>
				<hr>
				<p><b><a href="https://ch.tetr.io/">TETRA CHANNEL, THE STANDALONE SITE</a></b></p>
				<hr>
				<p>This site currently allows you to browse all the leaderboards seamlessly, view user stats, with avatars and
					banners, and more. I hope to in the future also add a bunch of extra statistics - like your TR progression,
					singleplayer score progression, recent TETRA LEAGUE matches, etc. All those sorts of datasets would be
					impossible to ever display ingame!</p>
				<p>I hope you'll stay tuned for what's next in store!</p>
			</div>
			<div class='footer'>
				<a title='Star this post' class='stars' href='post.php?p=5f7252c7791279.61682892'><span
						class='star'>★</span><span class='starcount'>22,717</span></a>
				<a title='Read the comments' class='comments' href='post.php?p=5f7252c7791279.61682892#comments'><span
						class='commentcount'>14</span> comments</a>
				<div class='views'><span class='viewcount'>3706</span> views</div>
				<a title='Go to the full page' class='full' href='post.php?p=5f7252c7791279.61682892'>continue reading</a>
			</div>
		</div>
		<div class='entry' data-id='5e9b1d5715abe3.14669647'>
			<div class='header'>
				<a href='post.php?p=5e9b1d5715abe3.14669647'>
					<h1>TETR.IO TETRA LEAGUE OPEN TO ALL!</h1>
				</a>
				<h2>by <span title='osk#00000000000000000000000000000000000000000000000000000000000000ae' class='author-span'
						style='--hue: 244.6875;'>osk</span> at <span class='ts' data-ts='1587223895'>2020/04/18 (Sat) 3:31:35
						pm</span><span class='tags'><a href='/?t=official' class='tag tag-official'>OFFICIAL</a><a
							href='/?t=tetr.io' class='tag tag-tetr_io'>TETR.IO</a><a href='/?t=update'
							class='tag tag-update'>UPDATE</a></span></h2>
			</div>
			<div class='content'>
				<center><img src="https://kagari.moe/:/league-big.png" /></center>
				<hr>
				<p>...Can you believe it's only been a month? TETRA LEAGUE, TETR.IO's 1v1 ranked matchmaker, is now live for all
					to play! You can play it <a href="https://tetr.io/">here</a>!</p>
				<p>Once again, I'd like to thank all <b>testers</b> in helping me shape this feature within such a short period.
					And of course, all <a href="https://patreon.com/tetrio"><b>Patreon supporters</b></a>! Without the support, I
					would not have had the time, drive or money to work on it!</p>
				<p>Other prominents I'd like to thank are <a href="https://www.twitch.tv/garbocan_">Garbo</a> and <a
						href="https://www.twitch.tv/doremy_puyotet">Doremy</a> for their extensive feedback!</p>
				<hr>
				<p>Have fun, and go rise those ranks!</p>
			</div>
			<div class='footer'>
				<a title='Star this post' class='stars' href='post.php?p=5e9b1d5715abe3.14669647'><span
						class='star'>★</span><span class='starcount'>7,866,203</span></a>
				<a title='Read the comments' class='comments' href='post.php?p=5e9b1d5715abe3.14669647#comments'><span
						class='commentcount'>13</span> comments</a>
				<div class='views'><span class='viewcount'>5370</span> views</div>
				<a title='Go to the full page' class='full' href='post.php?p=5e9b1d5715abe3.14669647'>continue reading</a>
			</div>
		</div>
		<div class='entry' data-id='5e76725469c492.94375614'>
			<div class='header'>
				<a href='post.php?p=5e76725469c492.94375614'>
					<h1>TETR.IO PUBLIC ALPHA RELEASED!</h1>
				</a>
				<h2>by <span title='osk#00000000000000000000000000000000000000000000000000000000000000ae' class='author-span'
						style='--hue: 244.6875;'>osk</span> at <span class='ts' data-ts='1584820820'>2020/03/21 (Sat) 8:00:20
						pm</span><span class='tags'><a href='/?t=official' class='tag tag-official'>OFFICIAL</a><a
							href='/?t=tetr.io' class='tag tag-tetr_io'>TETR.IO</a><a href='/?t=update'
							class='tag tag-update'>UPDATE</a></span></h2>
			</div>
			<div class='content'>
				<center><img src="https://kagari.moe/outer_assets/blog/completion/alpha.png" alt="TETR.IO ALPHA"></center>
				<hr>
				<p>TETR.IO has reached the ALPHA development stage, and is now accessible to everyone! After almost two months
					of INFDEV with a team of testers I cannot be more thankful of, I am now able to unveil TETR.IO to the entire
					world!</p>
				<center><a href="https://tetr.io/"><img src="https://kagari.moe/outer_assets/blog/completion/alpha-jn.png"
							alt="PLAY NOW"></a></center>
				<hr>
				<img src="https://kagari.moe/outer_assets/blog/completion/alpha-pu.png" alt="PROGRESS UPDATE">
				<ul>
					<li><img src="https://kagari.moe/outer_assets/blog/completion/planned.png" alt="Planned for later"
							title="Planned for later"> <b>Planned for later</b>: this won't be available until after release. But, it
						is something I hope to do.</li>
					<li><img src="https://kagari.moe/outer_assets/blog/completion/0.png" alt="Development has not yet started"
							title="Development has not yet started"> <b>Development has not yet started</b>: this is planned, but work
						on the feature has not yet started.</li>
					<li><img src="https://kagari.moe/outer_assets/blog/completion/1.png" alt="Development has started"
							title="Development has started"> <b>Development has started</b>: this feature has its framework set up and
						is being worked on.</li>
					<li><img src="https://kagari.moe/outer_assets/blog/completion/2.png" alt="Development underway"
							title="Development underway"> <b>Development underway</b>: this feature is starting to become reality and
						has minor functionality ready to implement.</li>
					<li><img src="https://kagari.moe/outer_assets/blog/completion/3.png" alt="Development nearing completion"
							title="Development nearing completion"> <b>Development nearing completion</b>: most of this feature is
						implemented, but it is not yet ready for release.</li>
					<li><img src="https://kagari.moe/outer_assets/blog/completion/4.png" alt="Rough version complete"
							title="Rough version complete"> <b>Rough version complete</b>: this feature is fully implemented, but may
						be overhauled - it's ready for an alpha release, but should be polished more.</li>
					<li><img src="https://kagari.moe/outer_assets/blog/completion/5.png" alt="Fully complete"
							title="Fully complete"> <b>Fully complete</b>: this feature is fully implemented and polished!</li>
				</ul>
				<hr>
				<h1>5. Custom Multiplayer Rules <img src="https://kagari.moe/outer_assets/blog/completion/2.png"
						alt="Development underway" title="Development underway"><img
						src="https://kagari.moe/outer_assets/blog/completion/to.png"><img
						src="https://kagari.moe/outer_assets/blog/completion/4.png" alt="Rough version complete"
						title="Rough version complete"></h1>
				<p>There are now many multiplayer tweaks that can be applied, from hold on/off to garbage travel speed, to
					custom DAS!</p>
				<h1>9. Chat with players <img src="https://kagari.moe/outer_assets/blog/completion/3.png"
						alt="Development nearing completion" title="Development nearing completion"><img
						src="https://kagari.moe/outer_assets/blog/completion/to.png"><img
						src="https://kagari.moe/outer_assets/blog/completion/4.png" alt="Rough version complete"
						title="Rough version complete"></h1>
				<p>Chat is complete, and a swear word filter has been implemented!</p>
				<h1>21. Profile w/ personal best displayed <img src="https://kagari.moe/outer_assets/blog/completion/3.png"
						alt="Development nearing completion" title="Development nearing completion"><img
						src="https://kagari.moe/outer_assets/blog/completion/to.png"><img
						src="https://kagari.moe/outer_assets/blog/completion/4.png" alt="Rough version complete"
						title="Rough version complete"></h1>
				<p>TETR.IO now displays detailed info about a player whenever you wish to view their profiles!</p>
				<h1>22. Simple accounts system w/o hassle <img src="https://kagari.moe/outer_assets/blog/completion/3.png"
						alt="Development nearing completion" title="Development nearing completion"><img
						src="https://kagari.moe/outer_assets/blog/completion/to.png"><img
						src="https://kagari.moe/outer_assets/blog/completion/4.png" alt="Rough version complete"
						title="Rough version complete"></h1>
				<p>You can now easily create accounts and, if you have set an email, even recover their passwords!</p>
				<h1>25. EXP <img src="https://kagari.moe/outer_assets/blog/completion/planned.png" alt="Planned for later"
						title="Planned for later"><img src="https://kagari.moe/outer_assets/blog/completion/to.png"><img
						src="https://kagari.moe/outer_assets/blog/completion/4.png" alt="Rough version complete"
						title="Rough version complete"></h1>
				<p>I wasn't planning to implement this as early as now, but EXP is available now, so you can progress as you
					develop your skills!</p>
				<h1>39. Dazzling graphics <img src="https://kagari.moe/outer_assets/blog/completion/3.png"
						alt="Development nearing completion" title="Development nearing completion"><img
						src="https://kagari.moe/outer_assets/blog/completion/to.png"><img
						src="https://kagari.moe/outer_assets/blog/completion/4.png" alt="Rough version complete"
						title="Rough version complete"></h1>
				<p>All the effects and tweaks I'd like to implement by Alpha have been implemented, with hopefully more polish
					coming soon!</p>
				<h1>40. Custom wallpapers <img src="https://kagari.moe/outer_assets/blog/completion/1.png"
						alt="Development has started" title="Development has started"><img
						src="https://kagari.moe/outer_assets/blog/completion/to.png"><img
						src="https://kagari.moe/outer_assets/blog/completion/4.png" alt="Rough version complete"
						title="Rough version complete"></h1>
				<p>You can now set custom wallpapers, or even a collection of custom wallpapers. A better UI is planned, but for
					now this works well ^^</p>
				<hr>
				<img src="https://kagari.moe/outer_assets/blog/completion/alpha-wn.png" alt="WHAT'S NEXT?">
				<p>We're only in Alpha stage right now, so there's still a lot to be done. However, I do have plans for many
					cool things to come.</p>
				<p>Right now, Quick Play is just one big room. This is great and all, but as soon as one pro joins, others will
					have to make way. I hope to be able to add 1v1 matchmaking as soon as possible, once the userbase is large
					enough to support such a feature.</p>
				<p>The only online mode right now is ELIMINATION. This is the de facto online mode in most stackers, but I'd
					like to also implement TIMED and RACE modes.</p>
				<p>It's impossible to spectate a match that's already begun right now. I'd like to make it possible to do so -
					it just requires a bit of headache code-wise.</p>
				<p>Of course, I'd like to add more single-player fun too - above all, a ZEN mode that can be played inbetween
					matches as well, and a longer MARATHON-esque mode.</p>
				<p>And, of course, I still want to look into making performance as smooth as possible on as many devices as
					possible.</p>
				<p>For the most part, the 44-FACT-FRENZY still holds up. While I do not know in which order I will tackle
					everything, I hope to be able to, together with your support, make TETR.IO something we can all enjoy!</p>
				<hr>
				<p>I want to extend my gratitude and thankfulness to everyone who helped test the INFDEV builds. Without your
					extensive support, I would not have been able to make TETR.IO what it is today. Going Alpha, however, doesn't
					mean I'll stop developing and fixing bugs. I hope all of you, and all newcomers, will help us make TETR.IO
					ever better!</p>
				<p>With the launch of Alpha, I'd like to also announce I now have a <b>Patreon</b>! This will hopefully help pay
					the servers, and be another way to support TETR.IO. Depending on the tier you choose, you can get pretty cool
					rewards, including an <b>ingame badge</b> and a <b>permanent position in the game's About page</b>! I would be
					incredibly grateful if you checked it out here: <a href="https://patreon.com/tetrio">TETR.IO Patreon</a></p>
				<p>Furthermore, I'd also like to remind everyone reading to join the <b>TETR.IO Discord</b>! This is the #1
					place to get updates and changelogs as they roll in: <a href="https://discord.gg/ufDb2XJ">TETR.IO Discord</a>
				</p>
				<p>Finally, I'd like to thank the <b>Hard Drop community</b> for helping me develop the game, giving feedback
					and reporting bugs. If you haven't yet, check out <a href="https://discord.gg/harddrop">Hard Drop</a> now!</p>
				<hr>
				<p>Thank you very much for reading, and have fun!</p>
			</div>
			<div class='footer'>
				<a title='Star this post' class='stars' href='post.php?p=5e76725469c492.94375614'><span
						class='star'>★</span><span class='starcount'>62,595,178</span></a>
				<a title='Read the comments' class='comments' href='post.php?p=5e76725469c492.94375614#comments'><span
						class='commentcount'>15</span> comments</a>
				<div class='views'><span class='viewcount'>4733</span> views</div>
				<a title='Go to the full page' class='full' href='post.php?p=5e76725469c492.94375614'>continue reading</a>
			</div>
		</div>
		<div class='entry' data-id='5e6fdfdbcfaf79.52975549'>
			<div class='header'>
				<a href='post.php?p=5e6fdfdbcfaf79.52975549'>
					<h1>TETR.IO will launch into PUBLIC ALPHA in just FIVE DAYS!</h1>
				</a>
				<h2>by <span title='osk#00000000000000000000000000000000000000000000000000000000000000ae' class='author-span'
						style='--hue: 244.6875;'>osk</span> at <span class='ts' data-ts='1584390107'>2020/03/16 (Mon) 8:21:47
						pm</span><span class='tags'><a href='/?t=official' class='tag tag-official'>OFFICIAL</a><a
							href='/?t=tetr.io' class='tag tag-tetr_io'>TETR.IO</a></span></h2>
			</div>
			<div class='content'>
				<center><img src="https://kagari.moe/:/rels.png" /></center>
				<hr>
				<p>Just <b>five days</b> left until TETR.IO is released to the world!</p>
				<p>When that time comes, I'll post a larger blog post with all information!</p>
				<p>IP requests will close a day or 2 prior.</p>
			</div>
			<div class='footer'>
				<a title='Star this post' class='stars' href='post.php?p=5e6fdfdbcfaf79.52975549'><span
						class='star'>★</span><span class='starcount'>54,692,984</span></a>
				<a title='Read the comments' class='comments' href='post.php?p=5e6fdfdbcfaf79.52975549#comments'><span
						class='commentcount'>8</span> comments</a>
				<div class='views'><span class='viewcount'>4041</span> views</div>
				<a title='Go to the full page' class='full' href='post.php?p=5e6fdfdbcfaf79.52975549'>continue reading</a>
			</div>
		</div>
		<div class='entry' data-id='5e376cb50d4638.45190945'>
			<div class='header'>
				<a href='post.php?p=5e376cb50d4638.45190945'>
					<h1>I'm now selfhosting email</h1>
				</a>
				<h2>by <span title='osk#00000000000000000000000000000000000000000000000000000000000000ae' class='author-span'
						style='--hue: 244.6875;'>osk</span> at <span class='ts' data-ts='1580690613'>2020/02/03 (Mon) 12:43:33
						am</span><span class='tags'><a href='/?t=personal' class='tag tag-personal'>PERSONAL</a><a href='/?t=update'
							class='tag tag-update'>UPDATE</a></span></h2>
			</div>
			<div class='content'>
				<p>Hi! Up to now, my email provider has always been ProtonMail. However, for some projects I need a mailserver,
					so I decided to set one up. Please do not contact me on my old ProtonMail account (@pm.me), but use my new
					email:</p>
				<img src="https://kagari.moe/outer_assets/blog/memail.png" alt="me [AT] osk [DOT] sh" />
				<p>Thank you!</p>
			</div>
			<div class='footer'>
				<a title='Star this post' class='stars' href='post.php?p=5e376cb50d4638.45190945'><span
						class='star'>★</span><span class='starcount'>21,243</span></a>
				<a title='Read the comments' class='comments' href='post.php?p=5e376cb50d4638.45190945#comments'><span
						class='commentcount'>8</span> comments</a>
				<div class='views'><span class='viewcount'>3424</span> views</div>
				<a title='Go to the full page' class='full' href='post.php?p=5e376cb50d4638.45190945'>continue reading</a>
			</div>
		</div>
		<div class='entry' data-id='5e34bfcc1382d7.10604193'>
			<div class='header'>
				<a href='post.php?p=5e34bfcc1382d7.10604193'>
					<h1>TETR.IO is now in INFDEV!</h1>
				</a>
				<h2>by <span title='osk#00000000000000000000000000000000000000000000000000000000000000ae' class='author-span'
						style='--hue: 244.6875;'>osk</span> at <span class='ts' data-ts='1580515276'>2020/02/01 (Sat) 12:01:16
						am</span> <span class='ts-title' data-ts='1580515352'
						title='2020/02/01 (Sat) 12:02:32 am'>(edited)</span><span class='tags'><a href='/?t=official'
							class='tag tag-official'>OFFICIAL</a><a href='/?t=tetr.io' class='tag tag-tetr_io'>TETR.IO</a><a
							href='/?t=update' class='tag tag-update'>UPDATE</a></span></h2>
			</div>
			<div class='content'>
				<center><img src="https://kagari.moe/outer_assets/blog/completion/tetrioinfdev.png" alt="TETR.IO INFDEV">
				</center>
				<hr>
				<p>TETR.IO has reached the INFDEV development stage! This means that I am now giving out access to test it on a
					wider scale to select people. This to allow more and more diverse people to play it and give their feedback on
					TETR.IO, without opening it fully to the public yet (and having to worry about making a bad first impression).
				</p>
				<p>Want to try out TETR.IO? <a href="https://osk.sh/?/social">Contact me</a> with your IP and why you would like
					to try out TETR.IO, and I'll add you to the whitelist!</p>
				<hr>
				<img src="https://kagari.moe/outer_assets/blog/completion/infdevpu.png" alt="PROGRESS UPDATE">
				<ul>
					<li><img src="https://kagari.moe/outer_assets/blog/completion/planned.png" alt="Planned for later"
							title="Planned for later"> <b>Planned for later</b>: this won't be available until after release. But, it
						is something I hope to do.</li>
					<li><img src="https://kagari.moe/outer_assets/blog/completion/0.png" alt="Development has not yet started"
							title="Development has not yet started"> <b>Development has not yet started</b>: this is planned, but work
						on the feature has not yet started.</li>
					<li><img src="https://kagari.moe/outer_assets/blog/completion/1.png" alt="Development has started"
							title="Development has started"> <b>Development has started</b>: this feature has its framework set up and
						is being worked on.</li>
					<li><img src="https://kagari.moe/outer_assets/blog/completion/2.png" alt="Development underway"
							title="Development underway"> <b>Development underway</b>: this feature is starting to become reality and
						has minor functionality ready to implement.</li>
					<li><img src="https://kagari.moe/outer_assets/blog/completion/3.png" alt="Development nearing completion"
							title="Development nearing completion"> <b>Development nearing completion</b>: most of this feature is
						implemented, but it is not yet ready for release.</li>
					<li><img src="https://kagari.moe/outer_assets/blog/completion/4.png" alt="Rough version complete"
							title="Rough version complete"> <b>Rough version complete</b>: this feature is fully implemented, but may
						be overhauled - it's ready for an alpha release, but should be polished more.</li>
					<li><img src="https://kagari.moe/outer_assets/blog/completion/5.png" alt="Fully complete"
							title="Fully complete"> <b>Fully complete</b>: this feature is fully implemented and polished!</li>
				</ul>
				<hr>
				<h1>3. Multiplayer Lobbies <img src="https://kagari.moe/outer_assets/blog/completion/3.png"
						alt="Development nearing completion" title="Development nearing completion"><img
						src="https://kagari.moe/outer_assets/blog/completion/to.png"><img
						src="https://kagari.moe/outer_assets/blog/completion/4.png" alt="Rough version complete"
						title="Rough version complete"></h1>
				<p>The feature to join a room by URL has been implemented (it makes short URLs like https://tetr.io/#7YhaIs6),
					completing the feature!</p>
				<h1>4. Quick Play <img src="https://kagari.moe/outer_assets/blog/completion/1.png" alt="Development has started"
						title="Development has started"><img src="https://kagari.moe/outer_assets/blog/completion/to.png"><img
						src="https://kagari.moe/outer_assets/blog/completion/4.png" alt="Rough version complete"
						title="Rough version complete"></h1>
				<p>Quick Play has been implemented - join Quick Play and the room will automatically start an infinite loop of
					games as long as at least 2 people are in Quick Play!</p>
				<h1>9. Chat with players <img src="https://kagari.moe/outer_assets/blog/completion/1.png"
						alt="Development has started" title="Development has started"><img
						src="https://kagari.moe/outer_assets/blog/completion/to.png"><img
						src="https://kagari.moe/outer_assets/blog/completion/3.png" alt="Development nearing completion"
						title="Development nearing completion"></h1>
				<p>Chat is nearly complete, but a swear word filter has yet to be implemented, and a few hotkeys may still be
					swapped around.</p>
				<h1>16. TETRA CHANNEL <img src="https://kagari.moe/outer_assets/blog/completion/2.png"
						alt="Development underway" title="Development underway"><img
						src="https://kagari.moe/outer_assets/blog/completion/to.png"><img
						src="https://kagari.moe/outer_assets/blog/completion/4.png" alt="Rough version complete"
						title="Rough version complete"></h1>
				<p>All basic functionality of TETRA CHANNEL has been implemented. Stuff like MAPS and a list of players may be
					added later, but is not on the roadmap for Alpha (see the TETR.IO 44-Fact-Frenzy page for more info).</p>
				<h1>17. Personal Best <img src="https://kagari.moe/outer_assets/blog/completion/1.png"
						alt="Development has started" title="Development has started"><img
						src="https://kagari.moe/outer_assets/blog/completion/to.png"><img
						src="https://kagari.moe/outer_assets/blog/completion/5.png" alt="Fully complete" title="Fully complete">
				</h1>
				<p>TETRA CHANNEL now happily saves your top 10 plays in all categories.</p>
				<h1>18. Global records <img src="https://kagari.moe/outer_assets/blog/completion/2.png"
						alt="Development underway" title="Development underway"><img
						src="https://kagari.moe/outer_assets/blog/completion/to.png"><img
						src="https://kagari.moe/outer_assets/blog/completion/5.png" alt="Fully complete" title="Fully complete">
				</h1>
				<p>Likewise, TETRA CHANNEL now happily saves the top 1000 plays in all categories (note: the client only
					displays 100, but the standalone site will display all 1000).</p>
				<h1>19. Replays saved and can be watched <img src="https://kagari.moe/outer_assets/blog/completion/3.png"
						alt="Development nearing completion" title="Development nearing completion"><img
						src="https://kagari.moe/outer_assets/blog/completion/to.png"><img
						src="https://kagari.moe/outer_assets/blog/completion/4.png" alt="Rough version complete"
						title="Rough version complete"></h1>
				<p>All plays are saved at least temporarily, and a nice replay link can be shared!</p>
				<h1>20. Custom game options <img src="https://kagari.moe/outer_assets/blog/completion/2.png"
						alt="Development underway" title="Development underway"><img
						src="https://kagari.moe/outer_assets/blog/completion/to.png"><img
						src="https://kagari.moe/outer_assets/blog/completion/4.png" alt="Rough version complete"
						title="Rough version complete"></h1>
				<p>The CUSTOM GAME mode has been implemented, and already allows for lots of experimentation most other games
					don't provide. However, I hope to add more options to it in the future.</p>
				<h1>21. Profile w/ personal best displayed <img src="https://kagari.moe/outer_assets/blog/completion/0.png"
						alt="Development has not yet started" title="Development has not yet started"><img
						src="https://kagari.moe/outer_assets/blog/completion/to.png"><img
						src="https://kagari.moe/outer_assets/blog/completion/3.png" alt="Development nearing completion"
						title="Development nearing completion"></h1>
				<p>TETR.IO displays nice badges of a user's scores when you click them. I hope to still add some extra info,
					like join date, before Alpha. More info could potentially go to the TETRA CHANNEL site.</p>
				<h1>41. Music by Hurt Record <img src="https://kagari.moe/outer_assets/blog/completion/2.png"
						alt="Development underway" title="Development underway"><img
						src="https://kagari.moe/outer_assets/blog/completion/to.png"><img
						src="https://kagari.moe/outer_assets/blog/completion/4.png" alt="Rough version complete"
						title="Rough version complete"></h1>
				<p>I believe to have added most music I want to, but I can always add more when I find a purpose for it.</p>
				<h1>42. Controller support <img src="https://kagari.moe/outer_assets/blog/completion/planned.png"
						alt="Planned for later" title="Planned for later"><img
						src="https://kagari.moe/outer_assets/blog/completion/to.png"><img
						src="https://kagari.moe/outer_assets/blog/completion/4.png" alt="Rough version complete"
						title="Rough version complete"></h1>
				<p>Its implementation is rather basic, but I decided to add it already. Only the in-game controls work with
					controller (all else must still be done w/ mouse), but it's better than nothing (hence it does not get the
					polished icon).</p>
				<hr>
				<h1>Still to be done before Alpha...</h1>
				<ul>
					<li><img src="https://kagari.moe/outer_assets/blog/completion/2.png" alt="Development underway"
							title="Development underway"> <b>5. Custom Multiplayer Rules</b></li>
					<li><img src="https://kagari.moe/outer_assets/blog/completion/3.png" alt="Development nearing completion"
							title="Development nearing completion"> <b>9. Chat with players</b></li>
					<li><img src="https://kagari.moe/outer_assets/blog/completion/3.png" alt="Development nearing completion"
							title="Development nearing completion"> <b>21. Profile w/ personal best displayed</b></li>
					<li><img src="https://kagari.moe/outer_assets/blog/completion/3.png" alt="Development nearing completion"
							title="Development nearing completion"> <b>22. Simple accounts system w/o hassle</b></li>
					<li><img src="https://kagari.moe/outer_assets/blog/completion/3.png" alt="Development nearing completion"
							title="Development nearing completion"> <b>39. Dazzling graphics</b></li>
					<li><img src="https://kagari.moe/outer_assets/blog/completion/1.png" alt="Development has started"
							title="Development has started"> <b>40. Custom wallpapers</b></li>
				</ul>
				<hr>
				<p>Thank you for reading. If you're planning on becoming a tester, have fun!</p>
			</div>
			<div class='footer'>
				<a title='Star this post' class='stars' href='post.php?p=5e34bfcc1382d7.10604193'><span
						class='star'>★</span><span class='starcount'>25,971</span></a>
				<a title='Read the comments' class='comments' href='post.php?p=5e34bfcc1382d7.10604193#comments'><span
						class='commentcount'>31</span> comments</a>
				<div class='views'><span class='viewcount'>8355</span> views</div>
				<a title='Go to the full page' class='full' href='post.php?p=5e34bfcc1382d7.10604193'>continue reading</a>
			</div>
		</div>
		<div class='entry' data-id='5e06044d3e0027.75824918'>
			<div class='header'>
				<a href='post.php?p=5e06044d3e0027.75824918'>
					<h1>There's now a view count next to blog posts.</h1>
				</a>
				<h2>by <span title='osk#00000000000000000000000000000000000000000000000000000000000000ae' class='author-span'
						style='--hue: 244.6875;'>osk</span> at <span class='ts' data-ts='1577452621'>2019/12/27 (Fri) 1:17:01
						pm</span><span class='tags'><a href='/?t=personal' class='tag tag-personal'>PERSONAL</a><a href='/?t=update'
							class='tag tag-update'>UPDATE</a></span></h2>
			</div>
			<div class='content'>
				<p><img src="https://kagari.moe/:/2019-12-27_14-14-53.png" /><br><i>I should really cool it with this
						crystallize effect.</i></p>
				<p>It might impact the server negatively, so let's see how well it works, right? It's only triggered when you
					view a post's own page, not the homepage.</p>
			</div>
			<div class='footer'>
				<a title='Star this post' class='stars' href='post.php?p=5e06044d3e0027.75824918'><span
						class='star'>★</span><span class='starcount'>11,610</span></a>
				<a title='Read the comments' class='comments' href='post.php?p=5e06044d3e0027.75824918#comments'><span
						class='commentcount'>7</span> comments</a>
				<div class='views'><span class='viewcount'>3087</span> views</div>
				<a title='Go to the full page' class='full' href='post.php?p=5e06044d3e0027.75824918'>continue reading</a>
			</div>
		</div>
		<div class='entry' data-id='5e055b57708ef4.95577394'>
			<div class='header'>
				<a href='post.php?p=5e055b57708ef4.95577394'>
					<h1>Even less useful: PeakGadget</h1>
				</a>
				<h2>by <span title='osk#00000000000000000000000000000000000000000000000000000000000000ae' class='author-span'
						style='--hue: 244.6875;'>osk</span> at <span class='ts' data-ts='1577409367'>2019/12/27 (Fri) 1:16:07
						am</span><span class='tags'><a href='/?t=personal' class='tag tag-personal'>PERSONAL</a><a
							href='/?t=oskware' class='tag tag-oskware'>OSKWARE</a></span></h2>
			</div>
			<div class='content'><img src="https://kagari.moe/outer_assets/peakgadget/peakgadget.png" />
				<p>This time, to address a bug I face in my antiquated Windows 7 install where the sidebar gadgets would stop
					being "topmost" (above all other windows) and get hidden. It's a stupidly simple program, but hey - can add it
					to my portfolio, right?</p>
				<p>If you happen to be impacted by this bug as well, the program can be retrieved (and its source seen) <a
						href="https://peakgadget.osk.sh">over here</a>.</p>
			</div>
			<div class='footer'>
				<a title='Star this post' class='stars' href='post.php?p=5e055b57708ef4.95577394'><span
						class='star'>★</span><span class='starcount'>8,030</span></a>
				<a title='Read the comments' class='comments' href='post.php?p=5e055b57708ef4.95577394#comments'><span
						class='commentcount'>5</span> comments</a>
				<div class='views'><span class='viewcount'>2099</span> views</div>
				<a title='Go to the full page' class='full' href='post.php?p=5e055b57708ef4.95577394'>continue reading</a>
			</div>
		</div>
		<div class='entry' data-id='5dfd5e7753e5f7.10431000'>
			<div class='header'>
				<a href='post.php?p=5dfd5e7753e5f7.10431000'>
					<h1>WindowSmasher: "simple" window management</h1>
				</a>
				<h2>by <span title='osk#00000000000000000000000000000000000000000000000000000000000000ae' class='author-span'
						style='--hue: 244.6875;'>osk</span> at <span class='ts' data-ts='1576885879'>2019/12/20 (Fri) 11:51:19
						pm</span><span class='tags'><a href='/?t=personal' class='tag tag-personal'>PERSONAL</a><a
							href='/?t=oskware' class='tag tag-oskware'>OSKWARE</a></span></h2>
			</div>
			<div class='content'>
				<p>My right monitor always does something weird when I turn it on - it throws all my windows out of whack. I
					needed a way to put them back into place easily. Tools like Fancy Zones exist, but I wanted to make something
					different, so I whipped up WindowSmasher. It's a small tool that allows you to define up to 10 presets to sort
					your windows into. Its code isn't the greatest, but I open-sourced it as well.</p>
				<img src="https://kagari.moe/outer_assets/windowsmasher/windowsmasher.png" />
				<p><b><a href="https://windowsmasher.osk.sh/">Get it now!</a></b></p>
				<hr>
				<p>I also open-sourced Kurumi for your viewing pleasure. Its code isn't any better, but you know. <a
						href="https://github.com/o5k/kurumi">You can get it here.</a></p>
			</div>
			<div class='footer'>
				<a title='Star this post' class='stars' href='post.php?p=5dfd5e7753e5f7.10431000'><span
						class='star'>★</span><span class='starcount'>5,802</span></a>
				<a title='Read the comments' class='comments' href='post.php?p=5dfd5e7753e5f7.10431000#comments'><span
						class='commentcount'>1</span> comment</a>
				<div class='views'><span class='viewcount'>2524</span> views</div>
				<a title='Go to the full page' class='full' href='post.php?p=5dfd5e7753e5f7.10431000'>continue reading</a>
			</div>
		</div>
		<div class='entry' data-id='5df9463f716867.05060790'>
			<div class='header'>
				<a href='post.php?p=5df9463f716867.05060790'>
					<h1>TETR.IO Forty-Four Fact Frenzy!</h1>
				</a>
				<h2>by <span title='osk#00000000000000000000000000000000000000000000000000000000000000ae' class='author-span'
						style='--hue: 244.6875;'>osk</span> at <span class='ts' data-ts='1576617535'>2019/12/17 (Tue) 9:18:55
						pm</span> <span class='ts-title' data-ts='1576618281'
						title='2019/12/17 (Tue) 9:31:21 pm'>(edited)</span><span class='tags'><a href='/?t=official'
							class='tag tag-official'>OFFICIAL</a><a href='/?t=tetr.io' class='tag tag-tetr_io'>TETR.IO</a></span></h2>
			</div>
			<div class='content'>
				<center><img src="https://kagari.moe/outer_assets/blog/completion/44ff.png" alt="TETR.IO 44-FACT FRENZY" />
				</center>
				<hr>

				<p>It's been too long since I reported on TETR.IO. Therefore, with the TETR.IO FORTY-FOUR FACT FRENZY (don't
					take the name too seriously) I hope to shed some light on what I have been working on, what you can expect,
					and how far I am in its development.</p>
				<p>As for development, every item has an indicator of its development status. I will reuse those indicators in
					later updates as well to show the evolution of the project. Here they all are:</p>
				<ul>
					<li><img src="https://kagari.moe/outer_assets/blog/completion/planned.png" alt="Planned for later"
							title="Planned for later" /> <b>Planned for later</b>: this won't be available until after release. But,
						it is something I hope to do.</li>
					<li><img src="https://kagari.moe/outer_assets/blog/completion/0.png" alt="Development has not yet started"
							title="Development has not yet started" /> <b>Development has not yet started</b>: this is planned, but
						work on the feature has not yet started.</li>
					<li><img src="https://kagari.moe/outer_assets/blog/completion/1.png" alt="Development has started"
							title="Development has started" /> <b>Development has started</b>: this feature has its framework set up
						and is being worked on.</li>
					<li><img src="https://kagari.moe/outer_assets/blog/completion/2.png" alt="Development underway"
							title="Development underway" /> <b>Development underway</b>: this feature is starting to become reality
						and has minor functionality ready to implement.</li>
					<li><img src="https://kagari.moe/outer_assets/blog/completion/3.png" alt="Development nearing completion"
							title="Development nearing completion" /> <b>Development nearing completion</b>: most of this feature is
						implemented, but it is not yet ready for release.</li>
					<li><img src="https://kagari.moe/outer_assets/blog/completion/4.png" alt="Rough version complete"
							title="Rough version complete" /> <b>Rough version complete</b>: this feature is fully implemented, but
						may be overhauled - it's ready for an alpha release, but should be polished more.</li>
					<li><img src="https://kagari.moe/outer_assets/blog/completion/5.png" alt="Fully complete"
							title="Fully complete" /> <b>Fully complete</b>: this feature is fully implemented and polished!</li>
				</ul>
				<p>If you find anything you want to give your opinion on, the comments are here for you. Anything here is still
					up for debate! Thank you for taking the time to read through them. Without further ado, forty-four facts about
					TETR.IO, coming your way!</p>

				<hr>

				<img src="https://kagari.moe/outer_assets/blog/completion/multiplayer.png" alt="Multiplayer" />

				<h1>1. Unlimited players <img src="https://kagari.moe/outer_assets/blog/completion/4.png"
						alt="Rough version complete" title="Rough version complete" /></h1>
				<p>In TETR.IO, you'll be able to play with as many players as you please! Not 99, not 6, but the exact size you
					want! (I've been able to get stable 60FPS with 500 test players, but don't know how much the server and client
					can take in real situations yet. There's no hard limits though!)</p>

				<h1>2. Elimination Mode <img src="https://kagari.moe/outer_assets/blog/completion/4.png"
						alt="Rough version complete" title="Rough version complete" /></h1>
				<p>The standard multiplayer mode will be ELIMINATION! Be the last man standing by knocking out all other
					players!</p>

				<h1>3. Multiplayer Lobbies <img src="https://kagari.moe/outer_assets/blog/completion/3.png"
						alt="Development nearing completion" title="Development nearing completion" /></h1>
				<p>Normal multiplayer will take place in lobbies of any size! A registered player makes a public or private
					room, and gives others a short link to join the fun! Public lobbies can be easily joined from the room
					listing!</p>

				<h1>4. Quick Play <img src="https://kagari.moe/outer_assets/blog/completion/1.png" alt="Development has started"
						title="Development has started" /></h1>
				<p>Don't want to mess about with rooms and just get to playing? QUICK PLAY will throw you in a big room with all
					sorts of players of all sorts of skill levels! (Later, this may be expanded so players can find others of
					their skill more easily.)</p>

				<h1>5. Custom Multiplayer Rules <img src="https://kagari.moe/outer_assets/blog/completion/2.png"
						alt="Development underway" title="Development underway" /></h1>
				<p>Play by your rules! Hold or no Hold? Super-fast or beginner-friendly? You define the rules of a multiplayer
					lobby!</p>

				<h1>6. Multiple Rounds <img src="https://kagari.moe/outer_assets/blog/completion/5.png" alt="Fully complete"
						title="Fully complete" /></h1>
				<p>Play as many rounds per game as you want by changing from KNOCKOUT (first to 1) to another score target!</p>

				<h1>7. Spiced up Garbage <img src="https://kagari.moe/outer_assets/blog/completion/4.png"
						alt="Rough version complete" title="Rough version complete" /></h1>
				<p>TETR.IO changes the Garbage table. It weakens boring single-line combos like the Four-wide and instead adds a
					smart multiplier onto the table! Finish off a combo with a powerful move and destroy your opponent!</p>

				<h1>8. Smart anti-cheat <img src="https://kagari.moe/outer_assets/blog/completion/5.png" alt="Fully complete"
						title="Fully complete" /></h1>
				<p>TETR.IO's codebase is shared perfectly between client and server, so the server can check precisely what a
					potential cheater may be doing - one discrepancy and you're out!</p>

				<h1>9. Chat with players <img src="https://kagari.moe/outer_assets/blog/completion/1.png"
						alt="Development has started" title="Development has started" /></h1>
				<p>Talk with other players before starting a game, or bathe in salt after a heated match with optional chat!
					(May be changed. By default, a swear word filter will be applied.)</p>

				<h1>10. Planned for later: Competitive matchmaking <img
						src="https://kagari.moe/outer_assets/blog/completion/planned.png" alt="Planned for later"
						title="Planned for later" /></h1>
				<p>When we're ready for it and have a strong userbase, we hope to be able to test your true skill in a
					one-on-one environment! Play as many duels as you can imagine with people of your skill, and rank up as you
					gain skill!</p>

				<h1>11. Planned for later: Tournament mode <img
						src="https://kagari.moe/outer_assets/blog/completion/planned.png" alt="Planned for later"
						title="Planned for later" /></h1>
				<p>When we're ready for it, we can create a tournament mode where you can play a big array of games together
					with your friends to find your true CHAMPION!</p>

				<h1>12. Planned for later: Race mode <img src="https://kagari.moe/outer_assets/blog/completion/planned.png"
						alt="Planned for later" title="Planned for later" /></h1>
				<p>Aside from ELIMINATION mode, we hope to also add a RACE mode where you can see who can reach a certain target
					faster!</p>

				<h1>13. Planned for later: Spectate in-progress matches <img
						src="https://kagari.moe/outer_assets/blog/completion/planned.png" alt="Planned for later"
						title="Planned for later" /></h1>
				<p>When our code is ready for it, we hope to allow you to spectate games that are already in progress!</p>

				<hr>

				<img src="https://kagari.moe/outer_assets/blog/completion/singleplayer.png" alt="Singleplayer" />

				<h1>14. 40L mode <img src="https://kagari.moe/outer_assets/blog/completion/5.png" alt="Fully complete"
						title="Fully complete" /></h1>
				<p>Clear forty lines as fast as you can imagine to reach the leaderboards! A true test of your speed an insight!
				</p>

				<h1>15. BLITZ mode <img src="https://kagari.moe/outer_assets/blog/completion/5.png" alt="Fully complete"
						title="Fully complete" /></h1>
				<p>Rack up as many points as you can within TWO MINUTES! Do cool tricks, get All Clears and bring your best game
					to reach higher levels and gain more points!</p>

				<h1>16. TETRA CHANNEL <img src="https://kagari.moe/outer_assets/blog/completion/2.png"
						alt="Development underway" title="Development underway" /></h1>
				<p>See how you stack up against the world in TETRA CHANNEL, the hub for records, leaderboards and all sorts of
					other content!</p>

				<h1>17. Personal Best <img src="https://kagari.moe/outer_assets/blog/completion/1.png"
						alt="Development has started" title="Development has started" /></h1>
				<p>TETRA CHANNEL will store your best plays and allow you to see how you fare!</p>

				<h1>18. Global records <img src="https://kagari.moe/outer_assets/blog/completion/2.png"
						alt="Development underway" title="Development underway" /></h1>
				<p>But, TETRA CHANNEL will also store the world's best records! Play well, and you'll be rewarded a spot on the
					TETRA CHANNEL LEADERBOARD!</p>

				<h1>19. Replays saved and can be watched <img src="https://kagari.moe/outer_assets/blog/completion/3.png"
						alt="Development nearing completion" title="Development nearing completion" /></h1>
				<p>All records on TETRA CHANNEL are verifiable and have full replays available! See where you can improve, and
					see how others achieve their scores!</p>

				<h1>20. Custom game options <img src="https://kagari.moe/outer_assets/blog/completion/2.png"
						alt="Development underway" title="Development underway" /></h1>
				<p>Choose your own game by adding custom game options! Ever wanted to play a 1000-line game at maximum gravity?
					You can now!</p>

				<h1>21. Profile w/ personal best displayed <img src="https://kagari.moe/outer_assets/blog/completion/0.png"
						alt="Development has not yet started" title="Development has not yet started" /></h1>
				<p>Rep your skill right on your profile! Your personal bests and, if applicable, global rankings will be
					displayed on your profile!</p>

				<h1>22. Simple accounts system w/o hassle <img src="https://kagari.moe/outer_assets/blog/completion/3.png"
						alt="Development nearing completion" title="Development nearing completion" /></h1>
				<p>Joining TETR.IO is easy - just send in a username, password and optional email, and you're ready to enter the
					game! (If you don't specify an email, we can't reset your password!) Want to join a friend's room or just play
					for fun? A username is all you need for a temporary anonymous account!</p>

				<h1>23. Planned for later: TETRA CHANNEL website <img
						src="https://kagari.moe/outer_assets/blog/completion/planned.png" alt="Planned for later"
						title="Planned for later" /></h1>
				<p>When it's ready, we hope to unveil a website where you can quickly see detailed stats on players, scores and
					the such, far more detailed than the in-game views!</p>

				<h1>24. Planned for later: MARATHON <img src="https://kagari.moe/outer_assets/blog/completion/planned.png"
						alt="Planned for later" title="Planned for later" /></h1>
				<p>After some testing, we should be able to get a MARATHON mode up, where you get to 150 lines with as many
					points as possible! (Or perhaps, something a bit more different?)</p>

				<h1>25. Planned for later: EXP <img src="https://kagari.moe/outer_assets/blog/completion/planned.png"
						alt="Planned for later" title="Planned for later" /></h1>
				<p>Progress as you play with a simple experience system!</p>

				<h1>26. Planned for later: Maps <img src="https://kagari.moe/outer_assets/blog/completion/planned.png"
						alt="Planned for later" title="Planned for later" /></h1>
				<p>When we're ready, create and play on MAPS! Create a map, and try to clear it as fast as you can!</p>

				<h1>27. Planned for later: FEVER mode <img src="https://kagari.moe/outer_assets/blog/completion/planned.png"
						alt="Planned for later" title="Planned for later" /></h1>
				<p>Those MAPS can also be used to create a FEVER MODE! Clear as many simple maps as fast as you can, and gain
					extra points if you can get a higher combo than the map intended!</p>

				<h1>28. Planned for later: TUTORIAL mode <img src="https://kagari.moe/outer_assets/blog/completion/planned.png"
						alt="Planned for later" title="Planned for later" /></h1>
				<p>We hope to get this in pretty fast for those not used to modern stackers - the TUTORIAL MODE will breeze you
					through the game, from learning the controls to more intricate pro moves, to mastering the rules of online
					play!</p>

				<hr>

				<img src="https://kagari.moe/outer_assets/blog/completion/engine.png" alt="Engine" />

				<h1>29. Powerful JavaScript engine <img src="https://kagari.moe/outer_assets/blog/completion/4.png"
						alt="Rough version complete" title="Rough version complete" /></h1>
				<p>TETR.IO runs on the fastest, most advanced JavaScript stacker engine! It's custom made for the job, and
					shared between server and client for super-fast anti-cheat!</p>

				<h1>30. Runs in all modern browsers <img src="https://kagari.moe/outer_assets/blog/completion/4.png"
						alt="Rough version complete" title="Rough version complete" /></h1>
				<p>TETR.IO is engineered to run in all modern browsers! Currently tested browsers are Firefox 56 and up, and
					Chrome 67 and up! I will make sure to test other browsers and see how much support I can create! The graphics
					can be turned down so the game runs on as many devices as possible!</p>

				<h1>31. Rebindable keyboard controls <img src="https://kagari.moe/outer_assets/blog/completion/5.png"
						alt="Fully complete" title="Fully complete" /></h1>
				<p>By default, TETR.IO supports the standard arrow key controls, and a more optimized WASD control set. But, if
					you like neither of them, you can set up your own controls!</p>

				<h1>32. GPU-accelerated with Pixi.JS <img src="https://kagari.moe/outer_assets/blog/completion/4.png"
						alt="Rough version complete" title="Rough version complete" /></h1>
				<p>TETR.IO looks splendid with GPU-accelerated graphics in the browsers that support it, using the WebGL library
					Pixi.JS!</p>

				<h1>33. SRS rotation <img src="https://kagari.moe/outer_assets/blog/completion/5.png" alt="Fully complete"
						title="Fully complete" /></h1>
				<p>TETR.IO will use the time-tested Super Rotation System to make many pro moves possible! There's a lot of
					reading material and tutorials on how it works already, and the pros already know it, so it's the best choice
					for the deal!</p>

				<h1>34. Zero Delay <img src="https://kagari.moe/outer_assets/blog/completion/5.png" alt="Fully complete"
						title="Fully complete" /></h1>
				<p>TETR.IO will let you unlock your true potential. No line clear delay, "are" spawn delays, or any other
					delays. Play as fast as you can for as high of a skill ceiling as you can imagine!</p>

				<h1>35. Adjustable DAS, ARR speeds <img src="https://kagari.moe/outer_assets/blog/completion/5.png"
						alt="Fully complete" title="Fully complete" /></h1>
				<p>Get comfortable and tune the controls exactly to what feels right to you. If you're precise enough, turn up
					ARR and DAS to move left to right faster!</p>

				<h1>36. T-Spin, B2B and All Clear recognition <img src="https://kagari.moe/outer_assets/blog/completion/5.png"
						alt="Fully complete" title="Fully complete" /></h1>
				<p>As expected of a modern stacker, TETR.IO will recognize and reward common skill moves like T-Spins,
					Back-To-Back clears and All Clears for extra points or garbage.</p>

				<h1>37. Guideline Formula <img src="https://kagari.moe/outer_assets/blog/completion/5.png" alt="Fully complete"
						title="Fully complete" /></h1>
				<p>It takes little effort to learn TETR.IO if you know another stacker. TETR.IO mostly follows the Guideline
					formula, with minor changes. Experienced players will feel right at home, while new players will have tons of
					tutorials already created by the awesome stacker community!</p>

				<h1>38. Higher piece spawn location <img src="https://kagari.moe/outer_assets/blog/completion/5.png"
						alt="Fully complete" title="Fully complete" /></h1>
				<p>One of the exceptions is that TETR.IO spawns tetrominoes up to 2 tiles higher than a Guideline game. This to
					make it harder to get stuck in the way the SRS rotation system works.</p>

				<h1>39. Dazzling graphics <img src="https://kagari.moe/outer_assets/blog/completion/3.png"
						alt="Development nearing completion" title="Development nearing completion" /></h1>
				<p>By utilizing your GPU and modern JavaScript, TETR.IO can bring amazing graphics to your retinas - from a
					swaying board, to particle effects, to an ambient background. Of course, if you or your computer don't like
					the effects, you can easily turn them off!</p>

				<h1>40. Custom wallpapers <img src="https://kagari.moe/outer_assets/blog/completion/1.png"
						alt="Development has started" title="Development has started" /></h1>
				<p>Make TETR.IO yours by adding a custom wallpaper and many other forms of customization!</p>

				<h1>41. Music by Hurt Record <img src="https://kagari.moe/outer_assets/blog/completion/2.png"
						alt="Development underway" title="Development underway" /></h1>
				<p>TETR.IO will feature awesome music created by the artists at HURT RECORD!</p>

				<h1>42. Planned for later: Controller support <img
						src="https://kagari.moe/outer_assets/blog/completion/planned.png" alt="Planned for later"
						title="Planned for later" /></h1>
				<p>No matter what your preferred way to play is, we hope to be able to support it! While the alpha will start
					out with only keyboard support, we hope to add XInput controller support (and perhaps even Switch controller
					support depending on browser support) soon after!</p>

				<h1>43. Planned for later: Standalone client <img
						src="https://kagari.moe/outer_assets/blog/completion/planned.png" alt="Planned for later"
						title="Planned for later" /></h1>
				<p>Since TETR.IO is all JavaScript, it should be possible to use as a desktop application as well! When I've got
					the time, I will definitely see what can be done in this regard, to make a nice standalone client work (and
					perhaps integrate with other platforms).</p>

				<h1>44. Planned for later: Mobile support <img src="https://kagari.moe/outer_assets/blog/completion/planned.png"
						alt="Planned for later" title="Planned for later" /></h1>
				<p>Later on, I'd like to also add touchscreen controls for mobile support. That way, you can even play TETR.IO
					on the go!</p>

				<hr>

				<p>Thank you very much for reading the forty-four facts I laid out. If there's anything you want to give your
					opinion on, please do so in the comments! I look forward to hearing your opinions! If you know someone else
					who might be interested, be sure to let them know!</p>
				<p>Please look forward to TETR.IO!</p>
			</div>
			<div class='footer'>
				<a title='Star this post' class='stars' href='post.php?p=5df9463f716867.05060790'><span
						class='star'>★</span><span class='starcount'>18,161</span></a>
				<a title='Read the comments' class='comments' href='post.php?p=5df9463f716867.05060790#comments'><span
						class='commentcount'>22</span> comments</a>
				<div class='views'><span class='viewcount'>7166</span> views</div>
				<a title='Go to the full page' class='full' href='post.php?p=5df9463f716867.05060790'>continue reading</a>
			</div>
		</div>
		<div class='entry' data-id='5dd346071df7e8.64180084'>
			<div class='header'>
				<a href='post.php?p=5dd346071df7e8.64180084'>
					<h1>Kurumi: sync time without the bullshit</h1>
				</a>
				<h2>by <span title='osk#00000000000000000000000000000000000000000000000000000000000000ae' class='author-span'
						style='--hue: 244.6875;'>osk</span> at <span class='ts' data-ts='1574127111'>2019/11/19 (Tue) 1:31:51
						am</span> <span class='ts-title' data-ts='1574127147'
						title='2019/11/19 (Tue) 1:32:27 am'>(edited)</span><span class='tags'><a href='/?t=personal'
							class='tag tag-personal'>PERSONAL</a><a href='/?t=oskware' class='tag tag-oskware'>OSKWARE</a></span></h2>
			</div>
			<div class='content'>
				<p>I run a Windows installation which has a very restrictive firewall. One of the things it blocks is Windows'
					NTP ("Network Time Protocol") service. This is the service that automatically synchronizes your system time to
					that of a specialized time server. If it's disabled, your clock will slowly desync over time, or, in my case,
					within a few days. My usual setup to deal with this is to just go to say, <a
						href="https://time.is/">time.is</a> and adjust the time manually. But, that requires effort, and after all,
					they say the best ideas arise out of laziness, right?</p>
				<p>Jokes aside, I've created a tiny (66KB) tool that will synchronize your system clock for you, in case you
					don't want to use the built-in service. It's very simple and doesn't ask questions - just run it, and it'll
					tell you how badly out of sync you are, then offer to fix it. Hit "Fix" and all your problems will go away!
				</p>
				<p><b>If you're interested, you can pick it up <a href="https://kurumi.osk.sh/">here</a>.</b></p>
				<p><i>If you find any bugs, this is the place to report them!</i></p>
			</div>
			<div class='footer'>
				<a title='Star this post' class='stars' href='post.php?p=5dd346071df7e8.64180084'><span
						class='star'>★</span><span class='starcount'>8,849</span></a>
				<a title='Read the comments' class='comments' href='post.php?p=5dd346071df7e8.64180084#comments'><span
						class='commentcount'>6</span> comments</a>
				<div class='views'><span class='viewcount'>2427</span> views</div>
				<a title='Go to the full page' class='full' href='post.php?p=5dd346071df7e8.64180084'>continue reading</a>
			</div>
		</div>
		<div class='entry' data-id='5dd1c870b102d0.61430434'>
			<div class='header'>
				<a href='post.php?p=5dd1c870b102d0.61430434'>
					<h1>Welcome!</h1>
				</a>
				<h2>by <span title='osk#00000000000000000000000000000000000000000000000000000000000000ae' class='author-span'
						style='--hue: 244.6875;'>osk</span> at <span class='ts' data-ts='1574029424'>2019/11/17 (Sun) 10:23:44
						pm</span> <span class='ts-title' data-ts='1574040742'
						title='2019/11/18 (Mon) 1:32:22 am'>(edited)</span><span class='tags'><a href='/?t=personal'
							class='tag tag-personal'>PERSONAL</a><a href='/?t=update' class='tag tag-update'>UPDATE</a></span></h2>
			</div>
			<div class='content'>
				<p>Here I will post project updates, sneak peeks, and whatever else is on my mind at the time. Don't expect
					super-frequent updates, but hey - there's something new every once in a while. Please note that this blog is
					personal space. Please respect that (and as such, my interests).</p>
				<p>You can <b>star</b> posts and comments you enjoy as much as you like, a bit like how Flipnote Hatena and
					Medium work. There's no limit to how many stars you can give something, but please don't bot it (I will throw
					sharp glances at you).</p>
				<p>You can also <b>comment</b> on posts, and on replies to those posts. Your name and color is randomized (bound
					to IP). There's no CAPTCHA or anything like that right now, so see it as a bit of an experiment. Be civil,
					okay? I reserve the right to delete anything for any reason. If it ends up being an issue, I can always add
					CAPTCHA later or turn off comments. As long as your IP does not change, you can delete your comments with the
					DEL button next to it.</p>
				<p>Happy sightseeing!</p>
			</div>
			<div class='footer'>
				<a title='Star this post' class='stars' href='post.php?p=5dd1c870b102d0.61430434'><span
						class='star'>★</span><span class='starcount'>55,085</span></a>
				<a title='Read the comments' class='comments' href='post.php?p=5dd1c870b102d0.61430434#comments'><span
						class='commentcount'>14</span> comments</a>
				<div class='views'><span class='viewcount'>3228</span> views</div>
				<a title='Go to the full page' class='full' href='post.php?p=5dd1c870b102d0.61430434'>continue reading</a>
			</div>
		</div>

		<!--尾端-->
		<p id="copyright">&copy; 2019&mdash;2023 <a href="https://osk.sh/">osk</a><span><a
					href="https://txt.osk.sh/terms-of-service/">terms</a> · <a
					href="https://txt.osk.sh/privacy-policy/">privacy</a></span></p>
	</main>
</body>

</html>