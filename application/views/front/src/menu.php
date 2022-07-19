<header class="header">
            <div class="header-inner">
                <!-- Navbar Starts -->
                <nav class="navbar">
                    <!-- Logo Starts -->
                    <div class="logo">
                        <a data-toggle="collapse" data-target=".navbar-collapse.show" class="navbar-brand" href="<?php echo base_url() ?>">
                            <!-- Logo White Starts -->
                            <img id="logo-light" class="logo-light" src="<?php echo base_url() ?>frontAssets/img/styleswitcher/logos/yellow.png" alt="logo-light" />
                            <!-- Logo White Ends -->
                            <!-- Logo Black Starts -->
                            <img id="logo-dark" class="logo-dark" src="<?php echo base_url() ?>frontAssets/img/styleswitcher/logos/logos-dark/yellow.png" alt="logo-dark" />
                            <!-- Logo Black Ends -->
                        </a>
                    </div>
                    <!-- Logo Ends -->
					<!-- Toggle Icon for Mobile Starts -->
					<button class="navbar-toggle navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span id="icon-toggler">
						  <span></span>
						  <span></span>
						  <span></span>
						  <span></span>
						</span>
					</button>
					<!-- Toggle Icon for Mobile Ends -->
					<div id="navbarSupportedContent" class="collapse navbar-collapse navbar-responsive-collapse">
						<!-- Main Menu Starts -->
						<ul class="nav navbar-nav" id="main-navigation">
							<li class="active"><a href="<?php echo base_url() ?>"> Home</a></li>
							<li><a href="<?php echo base_url()?>Welcome/about">About Us</a></li>
							<li><a href="<?php echo base_url()?>Welcome/project"> Project</a></li>
							<li><a href="<?php echo base_url()?>Welcome/blog"> Blog</a></li>
							
							
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-file-text-o"></i> pages <i class="fa fa-angle-down icon-angle"></i></a>
								<ul class="dropdown-menu" role="menu">
									<li><a href="register.html">Register page</a></li>
									<li><a href="login.html">Login page</a></li>
									<li><a href="pricing.html">Pricing</a></li>                                        
									<li><a href="shopping-cart.html">Shopping cart</a></li>
									<li><a href="shopping-checkout.html">shopping checkout</a></li>
									<li><a href="coming-soon.html">Coming Soon</a></li>
									<li><a href="404.html">404 Page</a></li>
									<li><a href="503.html">Server Error Page</a></li>
									<li><a href="faq.html">FAQ page</a></li>
									<li><a href="terms-of-services.html">Terms of Services</a></li>
								</ul>
							</li>
							<li><a href="contact.html"><i class="fa fa-envelope"></i> Contact</a></li>
							<!-- Cart Icon Starts -->
							<li class="cart hidden-xs hidden-sm"><a href="shopping-cart.html"><i class="fa fa-shopping-cart"></i></a></li>
							<!-- Cart Icon Starts -->
							<!-- Search Icon Starts -->
							<li class="search hidden-xs hidden-sm"><button id="search-button" class="fa fa-search"></button></li>
							<!-- Search Icon Ends -->
						</ul>
						<!-- Main Menu Ends -->
					</div>
					<!-- Search Input Starts -->
					<div class="site-search hidden-xs">
						<div class="search-container">
							<input id="search-input" type="text" placeholder="type your keyword and hit enter ...">
							<span class="close">×</span>
						</div>
					</div>
					<!-- Search Input Ends -->
                    <!-- Navigation Menu Ends -->
                </nav>
                <!-- Navbar Ends -->
            </div>
        </header>