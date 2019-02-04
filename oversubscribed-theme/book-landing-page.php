<?php /* Template Name: Book Landing Page */ ?>

<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
        <!-- bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


		<meta charset="<?php bloginfo('charset'); ?>">
		<title>Oversubscribed: A Founder&rsquo;s Guide to Seed Fundraising</title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	
	<body class="book-landing-page">
	
        <div class="modal fade" id="buy-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <script src="https://gumroad.com/js/gumroad-embed.js"></script>
                <div class="gumroad-product-embed" data-gumroad-product-id="oversubscribed"><a href="https://gumroad.com/l/oversubscribed">Loading...</a></div>
              </div>
            </div>
          </div>
        </div>

		<!-- header -->
		<header class="header clear book-header" role="banner">

				<!-- logo -->
				<div class="logo">
					<a href="<?php echo home_url(); ?>">
						<img src="<?php echo get_template_directory_uri(); ?>/img/logotype.png" alt="Logo" class="logo-img">
					</a>
				</div>
				<!-- /logo -->

		</header>
		

        <div class="container oversubscribed-section">
            <div class="row">
                <div class="col-lg-1"></div>
                <div class="col-lg-4">
                    <a href="https://www.amazon.com/Oversubscribed-Founders-Guide-Seed-Fundraising-ebook/dp/B07JFS4BY7/ref=sr_1_1?ie=UTF8&qid=1539890141&sr=8-1&keywords=oversubscribed+mike+wilner/"><img src="<?php echo get_template_directory_uri(); ?>/img/oversubscribed-full.png" alt="Oversubscribed cover" class="oversubscribed-cover"></a>
                </div>
                <div class="col-lg-6">
                    <h1>Raising your first round doesn&rsquo;t have to suck.</h1>
                    <p class="medium">Too many founders struggle with fundraising because they don&rsquo;t understand how the seed fundraising ecosystem works and how to fundraise efficiently and effectively.</p>
                    <p class="medium">To raise a quick, successful round, you need to understand how to navigate the seed fundraising ecosystem effectively, how to use the dynamics of a round to your advantage, and how to act in a way that lines up with how investors make decisions.</p>
                    <p class="medium">This book shows you how.</p>
                    <p>
                        <a href="#" class="btn btn-yellow book-button" data-toggle="modal" data-target="#buy-modal">Buy Now - PDF</a>
                        <a href="https://www.amazon.com/Oversubscribed-Founders-Guide-Seed-Fundraising-ebook/dp/B07JFS4BY7/ref=sr_1_1?ie=UTF8&qid=1539890141&sr=8-1&keywords=oversubscribed+mike+wilner/" class="btn btn-yellow book-button">Buy Now - Kindle</a>
                    </p>
                    <p class="download-sub">Kindle readers: for a free PDF copy, send the receipt from your Kindle purchase to <a href="hello@oversubscribed.club">hello@oversubscribed.club</a>.</p>
                </div>
                <div class="col-lg-1"></div>
            </div><!--row-->
        
        <div class="row oversubscribed-row-2">
                <div class="col-md-1"></div><!--col-->
                <div class="col-md-5">
                    <p class="quote quote-small medium">Now that I’ve read this, I can’t believe it didn’t exist, and I feel so sorry for any founder who’s had to raise without it. It takes the process of fundraising from a mystery box to a paint-by-numbers.&rdquo;</p>
                    <p class="medium quote-attribution">&mdash;Astrid Schanz-Garbassi<br />Cofounder, Good Medicine Co.</p>
                </div><!--col-->
                <div class="col-md-5">
                    <p class="quote quote-small medium">In a world cluttered with fundraising resources and advice, <em>Oversubscribed</em> stands out as the best option&mdash;and it&rsquo;s not even close.&rdquo;</p>
                    <p class="medium quote-attribution">&mdash;Barry Conrad<br />Director of Entrepreneurship, Venture for America</p>
                </div><!--col-->
                <div class="col-md-1"></div><!--col-->
            </div><!--row-->

            <div class="row oversubscribed-row-2">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <h3>Just some of what&rsquo;s included...</h3>
                </div>
                <div class="col-md-1"></div>
            </div><!--row-->
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-5">
                    <ul class="book-included">
                        <li>The good and bad consequences of raising money and if/when you should do it</li>
                        <li>How to stack the chips in your favor so you can get momentum out of the gate</li>
                        <li>The different people who work at VC firms and how to engage each of them productively</li>
                        <li>How to create a sense of urgency for investors (especially a lead) to commit and write checks once you’ve pitched them</li>
                    </ul>
                </div>
                <div class="col-md-5">
                    <ul class="book-included">
                        <li>Angel and VC investor business models and the implications they have for you</li>
                        <li>How to find the angels and VCs who you and your startup are most likely to resonate with</li>
                        <li>How a typical VC investment process works, and how you should build and manage your fundraising funnel</li>
                    </ul>
                </div>
                <div class="col-md-1"></div>
            </div><!--row-->
            <div class="row oversubscribed-row-2">
                <div class="col-md-1"></div>
                <div class="col-md-7">
                    <h3>About the Authors</h3>
                    <p class="medium">We (Mike Wilner and Max Nussenbaum) met in Detroit in 2013, as early members of the <a href="http://ventureforamerica.org">Venture for America</a> fellowship program. By 2014, we had each started our own companies. As first-time founders, we faced the new challenge of fundraising. And at first, we were terrible at it. Which is no surprise&mdash;fundraising is really hard!</p>
                    <p class="medium">Although both of our companies eventually failed, we ended up becoming pretty good at early-stage fundraising along the way, raising a combined $4M from all sorts of investors: famous ones like <a href="https://www.khoslaventures.com/">Khosla Ventures</a>, <a href="https://svangel.com/">SV Angel</a>, and <a href="http://www.ycombinator.com/">Y Combinator</a>, but also tons of smaller angels and VCs you’ve probably never heard of.</p>
                    <p class="medium">Over the years, as other founders started coming to us for fundraising advice, we realized that there wasn’t a good source for the kind of guidance we’d have wanted to see when we were raising our companies’ first rounds.</p>
                    <p class="medium">And lots of the best advice out there came from VCs&mdash;nothing against VCs, but they’re not exactly neutral parties&mdash;or was written for people who already had connections. There wasn&rsquo;t much out there that felt targeted towards the types of founders we were&mdash;the types of founders most first-time founders are.</p>
                    <p class="medium">This book is the guide we wish we’d had when we were first starting out.</p>
                    <p>
                        <a href="#" class="btn btn-yellow book-button" data-toggle="modal" data-target="#buy-modal">Buy Now - PDF</a>
                        <a href="https://www.amazon.com/Oversubscribed-Founders-Guide-Seed-Fundraising-ebook/dp/B07JFS4BY7/ref=sr_1_1?ie=UTF8&qid=1539890141&sr=8-1&keywords=oversubscribed+mike+wilner/" class="btn btn-yellow book-button">Buy Now - Kindle</a>
                    </p>
                </div>
                <div class="col-md-3 mobile-hide">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/mike-and-max.png" alt="Mike and Max" class="mike-and-max">
                    <p class="caption">The authors</p>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/max-pitching.jpg" alt="Max pitching" class="max-pitching">
                    <p class="caption">Max at his first ever VC pitch</p>
                </div>
                <div class="col-md-1"></div>
            </div><!--row-->
            
            <div class="row oversubscribed-row-2">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                    <p class="quote large">As the founder of an early-stage VC firm, I was both humbled and inspired to read <em>Oversubscribed</em>.</p>
                    <p class="medium">Humbled, because there was so much information in the book I found useful and presented in a clear and fresh way, and inspired because the path they lay out will definitely increase the odds of success for any founder.</p>
                    <p class="medium">In the book they discuss all aspects of fundraising from various perspectives, so a founder will understand in better terms what an angel investor or VC will be looking for or expecting.</p>
                    <p class="medium">The book is primarily geared towards new founders, but VCs, angels, family offices, institutional investors and others in the startup world will benefit from reading it. Oversubscribed will become required reading at Chaac Ventures, and we will be distributing copies to our portfolio founders (both current and prospective).</p>
                    <p class="medium quote-attribution">&mdash;Luke Armour<br />Founder & Managing Partner, Chaac Ventures</p>
                </div>
                <div class="col-sm-2"></div>
            </div><!--row-->
            <div class="row oversubscribed-row-2">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                    <p class="quote medium"><em>Oversubscribed</em> demystifies the black box that is early-stage fundraising. It&rsquo;s filled with real-world case studies, strategic guidance, and advice that founders will actually find useful.</p>
                    <p class="medium quote-attribution">&mdash;Jon Salm<br />Businesss Development, SpokenLayer</p>
                </div>
                <div class="col-sm-2"></div>
            </div><!--row-->

        </div><!--container-->
    </div><!--bg-->

		<!-- footer -->
		<footer class="footer" role="contentinfo">
			<div class="footer-inner">Oversubscribed is by <a href="http://twitter.com/mwil20">Mike Wilner</a> and <a href="http://maxnuss.com">Max Nussenbaum</a>.</div>
		</footer>
		<!-- /footer -->

		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>

	</body>
</html>
