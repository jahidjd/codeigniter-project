
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Portfolio, Amira - Creative Multipurpose Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.png">

    <!-- Template CSS Files -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>frontAssets/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>frontAssets/css/font-awesome.min.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>frontAssets/css/magnific-popup.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>frontAssets/css/style.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>frontAssets/css/skins/yellow.css" />

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

<body class="double-diagonal dark portfolio-page">
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
        <?php include('src/menu.php')?>
        <!-- Header Ends -->
        <!-- Banner Starts -->
        <section class="banner">
			<div class="content text-center">
				<div class="text-center top-text">
                    <!-- Main Heading Starts -->
					<div class="text-center top-text">
						<h1>portfolio</h1>
					</div> 
					<!-- Main Heading Ends -->
					<hr>
                    <!-- Breadcrumb Starts -->
					<ul class="breadcrumb">
						<li><a href="index-kenburns.html"> home</a></li>
						<li>portfolio 3 columns</li>
					</ul>
					<!-- Breadcrumb Ends -->
                </div>
			</div>
		</section>
		<!-- Banner Ends -->
		<!-- Portfolio Section Starts -->
        <section class="portfolio">
            <!-- Container Starts -->
            <div class="container">
                <!-- Filter Wrapper Starts -->
                <nav>
                    <ul class="simplefilter nav nav-pills">
                        <!-- Filter Wrapper Items Starts -->
                        <li class="active" data-filter="all"><i class="fa fa-reorder"></i> All Projects</li>
                        <li data-filter="1">Images</li>
                        <li data-filter="2">Videos</li>
                        <li data-filter="3">External Links</li>
                        <!-- Filter Wrapper Items Ends -->
                    </ul>
                </nav>
                <!-- Filter Wrapper Ends -->
                <div>
                    <div class="filtr-container">
                        <!-- Project Starts -->
                        <div class="col-xs-12 col-sm-4 col-md-3 filtr-item" data-category="1">
                            <div class="magnific-popup-gallery">
                                <!-- Thumbnail Starts -->
                                <figure class="thumbnail thumbnail__portfolio">
                                    <a class="image-wrap" href="img/projects/project-1.jpg" data-gal="magnific-pop-up[image]" title="Image project"><img class="img-responsive" src="img/projects/project-1.jpg" alt="Image Project" /><span class="zoom-icon"></span></a>
                                </figure>
                                <!-- Thumbnail Ends -->
                                <!-- Caption Starts -->
                                <div class="caption">
                                    <a class="title-link" href="image-project.html">
                                        <h3>Single Image</h3>
                                    </a>
                                    <p>dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi</p>
                                    <a class="custom-button" href="image-project.html">Read More</a>
                                </div>
                                <!-- Caption Ends -->
                            </div>
                        </div>
                        <!-- Project Ends -->
                        <!-- Project Starts -->
                        <div class="col-xs-12 col-sm-4 col-md-3 filtr-item" data-category="2">
                            <div class="magnific-popup-gallery">
                                <!-- Thumbnail Starts -->
                                <figure class="thumbnail thumbnail__portfolio">
                                    <a class="image-wrap mfp-youtube" href="https://www.youtube.com/watch?v=0gv7OC9L2s8"><img class="img-responsive" src="img/projects/project-2.jpg" alt="Gallery project" /><span class="zoom-icon video-icon"></span></a>
                                </figure>
                                <!-- Thumbnail Ends -->
                                <!-- Caption Starts -->
                                <div class="caption">
                                    <a class="title-link" href="youtube-project.html">
                                        <h3>Youtube Video</h3>
                                    </a>
                                    <p>dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi</p>
                                    <a class="custom-button" href="youtube-project.html">Read More</a>
                                </div>
                                <!-- Caption Ends -->
                            </div>
                        </div>
                        <!-- Project Ends -->
                        <!-- Project Starts -->
                        <div class="col-xs-12 col-sm-4 col-md-3 filtr-item" data-category="1">
                            <div class="magnific-popup-gallery">
                                <!-- Thumbnail Starts -->
                                <figure class="thumbnail thumbnail__portfolio">
                                    <a class="image-wrap" href="img/projects/project-3.jpg" data-gal="magnific-pop-up[gallery]" title="Gallery project"><img class="img-responsive" src="img/projects/project-3.jpg" alt="Gallery project" /><span class="zoom-icon gallery-icon"></span></a>
                                </figure>
                                <a href="img/projects/project-1.jpg" title="Gallery project" data-gal="magnific-pop-up[gallery]" style="display:none;"></a>
                                <a href="img/projects/project-2.jpg" title="Gallery project" data-gal="magnific-pop-up[gallery]" style="display:none;"></a>
                                <a href="img/projects/project-3.jpg" title="Gallery project" data-gal="magnific-pop-up[gallery]" style="display:none;"></a>
                                <a href="img/projects/project-4.jpg" title="Gallery project" data-gal="magnific-pop-up[gallery]" style="display:none;"></a>
                                <a href="img/projects/project-5.jpg" title="Gallery project" data-gal="magnific-pop-up[gallery]" style="display:none;"></a>
                                <a href="img/projects/project-6.jpg" title="Gallery project" data-gal="magnific-pop-up[gallery]" style="display:none;"></a>
                                <!-- Thumbnail Ends -->
                                <!-- Caption Starts -->
                                <div class="caption">
                                    <a class="title-link" href="gallery-project.html">
                                        <h3>Gallery Photos</h3>
                                    </a>
                                    <p>dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi</p>
                                    <a class="custom-button" href="gallery-project.html">Read More</a>
                                </div>
                                <!-- Caption Ends -->
                            </div>
                        </div>
                        <!-- Project Ends -->
                        <!-- Project Starts -->
                        <div class="col-xs-12 col-sm-4 col-md-3 filtr-item" data-category="3">
                            <div class="magnific-popup-gallery">
                                <!-- Thumbnail Starts -->
                                <figure class="thumbnail thumbnail__portfolio">
                                    <a class="image-wrap" href="image-project.html" title="portfolio"><img class="img-responsive" src="img/projects/project-4.jpg" alt="portfolio" /><span class="zoom-icon external-icon"></span></a>
                                </figure>
                                <!-- Thumbnail Ends -->
                                <!-- Caption Starts -->
                                <div class="caption">
                                    <a class="title-link" href="image-project.html">
                                        <h3>External Link</h3>
                                    </a>
                                    <p>dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi</p>
                                    <a class="custom-button" href="image-project.html">Read More</a>
                                </div>
                                <!-- Caption Ends -->
                            </div>
                        </div>
                        <!-- Project Ends -->
                        <!-- Project Starts -->
                        <div class="col-xs-12 col-sm-4 col-md-3 filtr-item" data-category="1">
                            <div class="magnific-popup-gallery">
                                <!-- Thumbnail Starts -->
                                <figure class="thumbnail thumbnail__portfolio">
                                    <a class="image-wrap" href="img/projects/project-5.jpg" data-gal="magnific-pop-up[image]" title="Image project"><img class="img-responsive" src="img/projects/project-5.jpg" alt="Image Project" /><span class="zoom-icon"></span></a>
                                </figure>
                                <!-- Thumbnail Ends -->
                                <!-- Caption Starts -->
                                <div class="caption">
                                    <a class="title-link" href="image-project.html">
                                        <h3>Single Image</h3>
                                    </a>
                                    <p>dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi</p>
                                    <a class="custom-button" href="image-project.html">Read More</a>
                                </div>
                                <!-- Caption Ends -->
                            </div>
                        </div>
                        <!-- Project Ends -->
                        <!-- Project Starts -->
                        <div class="col-xs-12 col-sm-4 col-md-3 filtr-item" data-category="2">
                            <div class="magnific-popup-gallery">
                                <!-- Thumbnail Starts -->
                                <figure class="thumbnail thumbnail__portfolio">
                                    <a class="image-wrap mfp-youtube" href="https://www.youtube.com/watch?v=O_C5CN1L3Xo"><img class="img-responsive" src="img/projects/project-6.jpg" alt="Gallery project" /><span class="zoom-icon video-icon"></span></a>
                                </figure>
                                <!-- Thumbnail Ends -->
                                <!-- Caption Starts -->
                                <div class="caption">
                                    <a class="title-link" href="youtube-project.html">
                                        <h3>Youtube Video</h3>
                                    </a>
                                    <p>dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi</p>
                                    <a class="custom-button" href="youtube-project.html">Read More</a>
                                </div>
                                <!-- Caption Ends -->
                            </div>
                        </div>
                        <!-- Project Ends -->
                        <!-- Project Starts -->
                        <div class="col-xs-12 col-sm-4 col-md-3 filtr-item" data-category="1">
                            <div class="magnific-popup-gallery">
                                <!-- Thumbnail Starts -->
                                <figure class="thumbnail thumbnail__portfolio">
                                    <a class="image-wrap" href="img/projects/project-7.jpg" data-gal="magnific-pop-up[image]" title="Image project"><img class="img-responsive" src="img/projects/project-7.jpg" alt="Image Project" /><span class="zoom-icon"></span></a>
                                </figure>
                                <!-- Thumbnail Ends -->
                                <!-- Caption Starts -->
                                <div class="caption">
                                    <a class="title-link" href="image-project.html">
                                        <h3>Single Image</h3>
                                    </a>
                                    <p>dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi</p>
                                    <a class="custom-button" href="image-project.html">Read More</a>
                                </div>
                                <!-- Caption Ends -->
                            </div>
                        </div>
                        <!-- Project Ends -->
                        <!-- Project Starts -->
                        <div class="col-xs-12 col-sm-4 col-md-3 filtr-item" data-category="2">
                            <div class="magnific-popup-gallery">
                                <!-- Thumbnail Starts -->
                                <figure class="thumbnail thumbnail__portfolio">
                                    <a class="image-wrap mfp-vimeo" href="https://vimeo.com/23534361"><img class="img-responsive" src="img/projects/project-8.jpg" alt="Gallery project" /><span class="zoom-icon video-icon"></span></a>
                                </figure>
                                <!-- Thumbnail Ends -->
                                <!-- Caption Starts -->
                                <div class="caption">
                                    <a class="title-link" href="vimeo-project.html">
                                        <h3>Vimeo Video</h3>
                                    </a>
                                    <p>dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi</p>
                                    <a class="custom-button" href="vimeo-project.html">Read More</a>
                                </div>
                                <!-- Caption Ends -->
                            </div>
                        </div>
                        <!-- Project Ends -->
                        <!-- Project Starts -->
                        <div class="col-xs-12 col-sm-4 col-md-3 filtr-item" data-category="1">
                            <div class="magnific-popup-gallery">
                                <!-- Thumbnail Starts -->
                                <figure class="thumbnail thumbnail__portfolio">
                                    <a class="image-wrap" href="img/projects/project-9.jpg" data-gal="magnific-pop-up[gallery]" title="Slider project"><img class="img-responsive" src="img/projects/project-9.jpg" alt="Slider project" /><span class="zoom-icon gallery-icon"></span></a>
                                </figure>
                                <a href="img/projects/project-1.jpg" title="Gallery project" data-gal="magnific-pop-up[gallery]" style="display:none;"></a>
                                <a href="img/projects/project-2.jpg" title="Gallery project" data-gal="magnific-pop-up[gallery]" style="display:none;"></a>
                                <a href="img/projects/project-6.jpg" title="Gallery project" data-gal="magnific-pop-up[gallery]" style="display:none;"></a>
                                <!-- Thumbnail Ends -->
                                <!-- Caption Starts -->
                                <div class="caption">
                                    <a class="title-link" href="slider-project.html">
                                        <h3>slider project</h3>
                                    </a>
                                    <p>dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi</p>
                                    <a class="custom-button" href="slider-project.html">Read More</a>
                                </div>
                                <!-- Caption Ends -->
                            </div>
                        </div>
                        <!-- Project Ends -->
                    </div>
                </div>
            </div>
            <!-- Container Ends -->
        </section>
        <!-- Portfolio Section Ends -->
        <!-- Footer Section Starts -->
        <?php include('src/footer.php')?>
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
	<script src="<?php echo base_url() ?>frontAssets/js/plugins/jquery.filterizr.js"></script>
	<script src="<?php echo base_url() ?>frontAssets/js/plugins/jquery.magnific-popup.min.js"></script>

    <!-- Live Style Switcher JS File - only demo -->
    <script src="<?php echo base_url() ?>frontAssets/js/styleswitcher.js"></script>

    <!-- Main JS Initialization File -->
    <script src="<?php echo base_url() ?>frontAssets/js/custom.js"></script>

</body>

</html>