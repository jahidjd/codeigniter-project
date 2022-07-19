
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Blog, Amira - Creative Multipurpose Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.png">

    <!-- Template CSS Files -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>frontAssets/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>frontAssets/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>frontAssets/css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/skins/yellow.css" />

    <!-- Live Style Switcher - demo only -->
    <link rel="alternate stylesheet" type="text/css" title="blue" href="<?php echo base_url() ?>frontAssets/css/skins/blue.css" />
    <link rel="alternate stylesheet" type="text/css" title="blueviolet" href="<?php echo base_url() ?>frontAssets/css/skins/blueviolet.css" />
    <link rel="alternate stylesheet" type="text/css" title="goldenrod" href="<?php echo base_url() ?>frontAssets/css/skins/goldenrod.css" />
    <link rel="alternate stylesheet" type="text/css" title="green" href="<?php echo base_url() ?>frontAssets/css/skins/green.css" />
    <link rel="alternate stylesheet" type="text/css" title="magenta" href="<?php echo base_url() ?>frontAssets/css/skins/magenta.css" />
    <link rel="alternate stylesheet" type="text/css" title="orange" href="<?php echo base_url() ?>frontAssets/css/skins/orange.css" />
    <link rel="alternate stylesheet" type="text/css" title="purple" href="<?php echo base_url() ?>frontAssets/css/skins/purple.css" />
    <link rel="alternate stylesheet" type="text/css" title="red" href="<?php echo base_url() ?>frontAssets/css/skins/red.css" />
    <link rel="alternate stylesheet" type="text/css" title="yellow" href="<?php echo base_url() ?>frontAssets/css/skins/yellow.css" />
    <link rel="alternate stylesheet" type="text/css" title="yellowgreen" href="<?php echo base_url() ?>frontAssets/css/skins/yellowgreen.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>frontAssets/css/styleswitcher.css" />

    <!-- Template JS Files -->
    <script src="<?php echo base_url() ?>frontAssets/js/modernizr.js"></script>

</head>

<body class="double-diagonal dark blog-page">
    <!-- Preloader Starts -->
    <div class="preloader" id="preloader">
        <div class="logopreloader">
            <img src="<?php echo base_url() ?>frontAssets/img/styleswitcher/logos/yellow.png" alt="logo-black">
        </div>
        <div class="loader" id="loader"></div>
    </div>
    <!-- Preloader Ends -->
    <!-- Live Style Switcher Starts - demo only -->
    <div id="switcher" class="">
        <div class="content-switcher">
            <h4>STYLE SWITCHER</h4>
            <ul>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('blue'); document.getElementById('logo-light').src='<?php echo base_url() ?>frontAssets/img/styleswitcher/logos/blue.png'; document.getElementById('logo-dark').src='<?php echo base_url() ?>frontAssets/img/styleswitcher/logos/logos-dark/blue.png';" title="blue" class="color"><img src="<?php echo base_url() ?>frontAssets/img/styleswitcher/blue.png" alt="" width="30" height="30" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('blueviolet'); document.getElementById('logo-light').src='<?php echo base_url() ?>frontAssets/img/styleswitcher/logos/blueviolet.png'; document.getElementById('logo-dark').src='<?php echo base_url() ?>frontAssets/img/styleswitcher/logos/logos-dark/blueviolet.png';" title="blueviolet" class="color"><img src="<?php echo base_url() ?>frontAssets/img/styleswitcher/blueviolet.png" alt="" width="30" height="30" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('goldenrod'); document.getElementById('logo-light').src='<?php echo base_url() ?>frontAssets/img/styleswitcher/logos/goldenrod.png'; document.getElementById('logo-dark').src='<?php echo base_url() ?>frontAssets/img/styleswitcher/logos/logos-dark/goldenrod.png';" title="goldenrod" class="color"><img src="<?php echo base_url() ?>frontAssets/img/styleswitcher/goldenrod.png" alt="" width="30" height="30" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('green'); document.getElementById('logo-light').src='<?php echo base_url() ?>frontAssets/img/styleswitcher/logos/green.png'; document.getElementById('logo-dark').src='<?php echo base_url() ?>frontAssets/img/styleswitcher/logos/logos-dark/green.png';" title="green" class="color"><img src="<?php echo base_url() ?>frontAssets/img/styleswitcher/green.png" alt="" width="30" height="30" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('magenta'); document.getElementById('logo-light').src='<?php echo base_url() ?>frontAssets/img/styleswitcher/logos/magenta.png'; document.getElementById('logo-dark').src='<?php echo base_url() ?>frontAssets/img/styleswitcher/logos/logos-dark/magenta.png';" title="magenta" class="color"><img src="<?php echo base_url() ?>frontAssets/img/styleswitcher/magenta.png" alt="" width="30" height="30" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('orange'); document.getElementById('logo-light').src='<?php echo base_url() ?>frontAssets/img/styleswitcher/logos/orange.png'; document.getElementById('logo-dark').src='<?php echo base_url() ?>frontAssets/img/styleswitcher/logos/logos-dark/orange.png';" title="orange" class="color"><img src="<?php echo base_url() ?>frontAssets/img/styleswitcher/orange.png" alt="" width="30" height="30" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('purple'); document.getElementById('logo-light').src='<?php echo base_url() ?>frontAssets/img/styleswitcher/logos/purple.png'; document.getElementById('logo-dark').src='<?php echo base_url() ?>frontAssets/img/styleswitcher/logos/logos-dark/purple.png';" title="purple" class="color"><img src="<?php echo base_url() ?>frontAssets/img/styleswitcher/purple.png" alt="" width="30" height="30" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('red'); document.getElementById('logo-light').src='<?php echo base_url() ?>frontAssets/img/styleswitcher/logos/red.png'; document.getElementById('logo-dark').src='<?php echo base_url() ?>frontAssets/img/styleswitcher/logos/logos-dark/red.png';" title="red" class="color"><img src="<?php echo base_url() ?>frontAssets/img/styleswitcher/red.png" alt="" width="30" height="30" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('yellow'); document.getElementById('logo-light').src='<?php echo base_url() ?>frontAssets/img/styleswitcher/logos/yellow.png'; document.getElementById('logo-dark').src='<?php echo base_url() ?>frontAssets/img/styleswitcher/logos/logos-dark/yellow.png';" title="yellow" class="color"><img src="<?php echo base_url() ?>frontAssets/img/styleswitcher/yellow.png" alt="" width="30" height="30" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('yellowgreen'); document.getElementById('logo-light').src='<?php echo base_url() ?>frontAssets/img/styleswitcher/logos/yellowgreen.png'; document.getElementById('logo-dark').src='<?php echo base_url() ?>frontAssets/img/styleswitcher/logos/logos-dark/yellowgreen.png';" title="yellowgreen" class="color"><img src="<?php echo base_url() ?>frontAssets/img/styleswitcher/yellowgreen.png" alt="" width="30" height="30" /></a>
                </li>
            </ul>

            <p>BODY SKIN</p>

            <label><input class="dark_switch" type="radio" name="color_style" id="is_light" value="light"  /> Light</label>
            <label><input class="dark_switch" type="radio" name="color_style" id="is_dark" value="dark" checked="checked" /> Dark</label>

            <hr />

            <p>LAYOUT STYLE</p>
            <label><input class="boxed_switch" type="radio" name="layout_style" id="is_wide" value="wide" checked="checked" /> Wide</label>
            <label><input class="boxed_switch" type="radio" name="layout_style" id="is_boxed" value="boxed" /> Boxed</label>

            <hr />

            <p class="separator">SEPARATOR <span class="hot">HOT</span></p>
            <span class="info">Select and scroll to see the changes</span>
            <label><input class="separator_switch" type="radio" name="separator_style" id="is_normal" value="normal"  /> <img alt="separator" width="20" height="20" src="<?php echo base_url() ?>frontAssets/img/styleswitcher/separators/1.jpg" /></label>
            <label><input class="separator_switch" type="radio" name="separator_style" id="is_skew" value="skew" /> <img alt="separator" width="20" height="20" src="<?php echo base_url() ?>frontAssets/img/styleswitcher/separators/2.jpg" /></label>
            <label><input class="separator_switch" type="radio" name="separator_style" id="is_reversed_skew" value="reversed-skew" /> <img alt="separator" width="20" height="20" src="<?php echo base_url() ?>frontAssets/img/styleswitcher/separators/3.jpg" /></label>
            <label><input class="separator_switch" type="radio" name="separator_style" id="is_double_diagonal" value="double-diagonal" checked="checked" /> <img alt="separator" width="20" height="20" src="<?php echo base_url() ?>frontAssets/img/styleswitcher/separators/4.jpg" /></label>
            <label><input class="separator_switch" type="radio" name="separator_style" id="is_big_triangle" value="big-triangle"  /> <img alt="separator" width="20" height="20" src="<?php echo base_url() ?>frontAssets/img/styleswitcher/separators/5.jpg" /></label>

            <hr />

            <a href="#" class="custom-button purchase">Purchase</a>
            <div id="hideSwitcher">&times;</div>

        </div>
    </div>
    <div id="showSwitcher" class="styleSecondColor"><i class="fa fa-cog fa-spin"></i></div>
    <!-- Live Style Switcher Ends - demo only -->
    <!-- Page Wrapper Starts -->
    <div class="wrapper">
        <!-- Header Starts -->
        <?php $this->load->view('front/src/menu'); ?>
        <!-- Header Ends -->
        <!-- Banner Starts -->
        <section class="banner">
			<div class="content text-center">
				<div class="text-center top-text">
                    <!-- Main Heading Starts -->
					<div class="text-center top-text">
						<h1>blog posts</h1>
					</div> 
					<!-- Main Heading Ends -->
					<hr>
                    <!-- Breadcrumb Starts -->
					<ul class="breadcrumb">
						<li><a href="index-kenburns.html"> home</a></li>
						<li>blog</li>
					</ul>
					<!-- Breadcrumb Ends -->
                </div>
			</div>
		</section>
		<!-- Banner Ends -->
        <!-- Section Content Starts -->
        <section class="blog">
			<div class="container">
				<div class="row">
					<div class="content col-xs-12 col-md-8">
						<!-- Article Starts -->
						<article>
							<a href="blog-post.html"><h4>How to be a good freelancer?</h4></a>
							<!-- Figure Starts -->
							<figure>
								<a href="blog-post.html">
									<img class="img-responsive" src="<?php echo base_url() ?>frontAssets/img/blog/blog-post-1.jpg" alt="">
								</a>
							</figure>
							<!-- Figure Ends -->
							<!-- Excerpt Starts -->
							<p class="excerpt-blog">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum ...</p>
							<!-- Excerpt Ends -->
							<a class="custom-button" href="blog-post.html">Read more</a>
							<!-- Meta Starts -->
							<div class="meta">
								<span><i class="fa fa-user"></i> <a href="#">admin</a></span>
								<span><i class="fa fa-calendar"></i> 9 November 2017</span>
								<span><i class="fa fa-commenting"></i> <a href="blog-post.html">18 comments</a></span>
								<span><i class="fa fa-tags"></i> freelance, market</span>
								<span><i class="fa fa-link"></i> <a href="blog-post.html">permalink</a></span>
							</div>
							<!-- Meta Ends -->
						</article>
						<!-- Article Ends -->
						<!-- Article Starts -->
						<article>
							<a href="blog-post.html"><h4>collaboration with envato</h4></a>
							<!-- Figure Starts -->
							<figure>
								<a href="blog-post.html">
									<img class="img-responsive" src="<?php echo base_url() ?>frontAssets/img/blog/blog-post-2.jpg" alt="">
								</a>
							</figure>
							<!-- Figure Ends -->
							<!-- Excerpt Starts -->
							<p class="excerpt-blog">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum ...</p>
							<!-- Excerpt Ends -->
							<a class="custom-button" href="blog-post.html">Read more</a>
							<!-- Meta Starts -->
							<div class="meta">
								<span><i class="fa fa-user"></i> <a href="#">admin</a></span>
								<span><i class="fa fa-calendar"></i> 11 October 2017</span>
								<span><i class="fa fa-commenting"></i> <a href="blog-post.html">29 comments</a></span>
								<span><i class="fa fa-tags"></i> success, life</span>
								<span><i class="fa fa-link"></i> <a href="blog-post.html">permalink</a></span>
							</div>
							<!-- Meta Ends -->
						</article>
						<!-- Article Ends -->
						<!-- Article Starts -->
						<article>
							<a href="blog-post.html"><h4>why themeforest is the best?</h4></a>
							<!-- Figure Starts -->
							<figure>
								<a href="blog-post.html">
									<img class="img-responsive" src="<?php echo base_url() ?>frontAssets/img/blog/blog-post-3.jpg" alt="">
								</a>
							</figure>
							<!-- Figure Ends -->
							<!-- Excerpt Starts -->
							<p class="excerpt-blog">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum ...</p>
							<!-- Excerpt Ends -->
							<a class="custom-button" href="blog-post.html">Read more</a>
							<!-- Meta Starts -->
							<div class="meta">
								<span><i class="fa fa-user"></i> <a href="#">admin</a></span>
								<span><i class="fa fa-calendar"></i> 11 October 2017</span>
								<span><i class="fa fa-commenting"></i> <a href="blog-post.html">29 comments</a></span>
								<span><i class="fa fa-tags"></i> themeforest, envato</span>
								<span><i class="fa fa-link"></i> <a href="blog-post.html">permalink</a></span>
							</div>
							<!-- Meta Ends -->
						</article>
						<!-- Article Ends -->
						<nav class="col-xs-12 text-center" aria-label="Page navigation">
						  <ul class="pagination">
							<li>
							  <a href="#" aria-label="Previous">
								<span aria-hidden="true"><i class="fa fa-angle-double-left"></i></span>
							  </a>
							</li>
							<li><a href="#">1</a></li>
							<li class="active"><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li>
							  <a href="#" aria-label="Next">
								<span aria-hidden="true"><i class="fa fa-angle-double-right"></i></span>
							  </a>
							</li>
						  </ul>
						</nav>
					</div>
					<!-- Sidebar Starts -->
					<div class="sidebar col-xs-12 col-md-4">
						<!-- Categories Widget Starts -->
						<div class="widget">
							<h3 class="widget-title">Categories</h3>
							<ul class="nav nav-tabs">
								<li><a href="#">javascript</a></li>
								<li><a href="#">wordpress</a></li>
								<li><a href="#">photoshop</a></li>
								<li><a href="#">jquery</a></li>
								<li><a href="#">prestashop</a></li>
								<li><a href="#">illustrator</a></li>
							</ul>
						</div>
						<!-- Categories Widget Ends -->
						<!-- Archives Widget Starts -->
						<div class="widget">
							<h3 class="widget-title">Archives</h3>
							<ul class="arrow nav nav-tabs">
								<li><a href="#">January 2018</a></li>
								<li><a href="#">December 2017</a></li>
								<li><a href="#">November 2017</a></li>
								<li><a href="#">October 2017</a></li>
								<li><a href="#">September 2017</a></li>
							</ul>
						</div>
						<!-- Archives Widget Ends -->
						<!-- Latest Posts Widget Ends -->
						<div class="widget recent-posts">
							<h3 class="widget-title">Recent Posts</h3>
							<ul class="unstyled clearfix">
							<!-- Recent Post Widget Starts -->
							<li>
								<div class="posts-thumb pull-left"> 
									<a href="blog-post.html">
										<img alt="img" src="img/blog/blog-post-thumb-1.jpg">
									</a>
								</div>
								<div class="post-info">
									<h4 class="entry-title">
										<a href="blog-post.html">how to be a good freelancer?</a>
									</h4>
									<p class="post-meta">
										<span class="post-date"><i class="fa fa-clock-o"></i> January 19, 2018</span>
									</p>
								</div>
								<div class="clearfix"></div>
							</li>
							<!-- Recent Post Widget Ends -->
							<!-- Recent Post Widget Starts -->
							<li>
								<div class="posts-thumb pull-left"> 
									<a href="blog-post-light.html">
										<img alt="img" src="img/blog/blog-post-thumb-2.jpg">
									</a>
								</div>
								<div class="post-info">
									<h4 class="entry-title">
										<a href="blog-post-light.html">Collaboration with Envato</a>
									</h4>
									<p class="post-meta">
										<span class="post-date"><i class="fa fa-clock-o"></i>  August 03, 2017</span>
									</p>
								</div>
								<div class="clearfix"></div>
							</li>
							<!-- Recent Post Widget Ends -->
							<!-- Recent Post Widget Starts -->
							<li>
								<div class="posts-thumb pull-left"> 
									<a href="blog-post-light.html">
										<img alt="img" src="<?php echo base_url() ?>frontAssets/img/blog/blog-post-thumb-3.jpg">
									</a>
								</div>
								<div class="post-info">
									<h4 class="entry-title">
										<a href="blog-post-light.html">why themeforest is best?</a>
									</h4>
									<p class="post-meta">
										<span class="post-date"><i class="fa fa-clock-o"></i>  March 27, 2017</span>
									</p>
								</div>
								<div class="clearfix"></div>
							</li>
							<!-- Recent Post Widget Ends -->
							</ul>
						</div>
						<!-- Latest Posts Widget Ends -->
						<!-- Tags Widget Starts -->
						<div class="widget widget-tags">
							<h3 class="widget-title">Popular Tags </h3>
							<ul class="unstyled clearfix">
								<li><a href="#">php</a></li>
								<li><a href="#">javascript</a></li>
								<li><a href="#">angular</a></li>
								<li><a href="#">html</a></li>
								<li><a href="#">css</a></li>
								<li><a href="#">footage</a></li>
								<li><a href="#">effects</a></li>
								<li><a href="#">photoshop</a></li>
							</ul>
						</div>
						<!-- Tags Widget Ends -->
					</div>
					<!-- Sidebar Ends -->
				</div>
			</div>
		</section>
		<!-- Section Content Ends -->
        <!-- Footer Section Starts -->
        <?php include('src/footer.php') ?>
        <!-- Footer Section Ends -->
        <!-- Back To Top Starts -->
        <div id="back-top-wrapper">
            <p id="back-top">
                <a href="#top"><span></span></a>
            </p>
        </div>
        <!-- Back To Top Ends -->
    </div>
    <!-- Wrapper Ends -->

    <!-- Template JS Files -->
    <script src="<?php echo base_url() ?>frontAssets/js/jquery-2.2.4.min.js"></script>
    <script src="<?php echo base_url() ?>frontAssets/js/plugins/jquery.easing.1.3.js"></script>
    <script src="<?php echo base_url() ?>frontAssets/js/plugins/bootstrap.min.js"></script>

    <!-- Live Style Switcher JS File - only demo -->
    <script src="<?php echo base_url() ?>frontAssets/js/styleswitcher.js"></script>

    <!-- Main JS Initialization File -->
    <script src="<?php echo base_url() ?>frontAssets/js/custom.js"></script>

</body>

</html>