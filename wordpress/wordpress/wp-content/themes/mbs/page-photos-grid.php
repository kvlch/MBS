<?php
/**
 * The template Name: photos-grid
 * @package MBS
 */
 
 /*Custom Fields*/
 $nav_home	= get_post_meta(10,nav_home,true);
 $nav_works	= get_post_meta(10,nav_works,true);
 $nav_moving	= get_post_meta(10,nav_moving,true);
 $nav_contact	= get_post_meta(10,nav_contact,true);
 
get_header(); ?>

	<!-- nav bar fixed top-->
	  <div class="navbar-wrapper">
		  <nav class="navbar navbar-dark navbar-inverse fixed-top" role="navigation" style="opacity:0.9;background-color:white" >
			  <a class="navbar-brand" href="<?php echo $nav_home; ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo.png" alt="Mattia Baldi Studio"></a>
			  <!--View layout icons -->
			  <div class="container" id="viewlayout_wrapper">
				<div class="row" style="position:absolute; right:30px; top:1em">
				  <a class="fa fa-table fa-2x" href="photos-grid" style="padding-right:10px; color:grey"></a><!--grid layout-->
				  <a class="fa fa-columns fa-2x" href="photos-gallery" style="padding-right:10px; color:grey"></a><!--gallery layout-->
					<!--Toggle Menu -->
				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
					  <span class="fa fa-navicon fa-1x" style="color:grey"></span>
				  </button>
				</div>
			  </div><!-- END ==== container-->
			  <div class="collapse navbar-collapse" id="navbarCollapse">
				  <ul class="navbar-nav mr-auto">
					  <li class="nav-item active">
						  <center><a class="nav-link" href="<?php echo $nav_works; ?>">WORKS</a></center>
					  </li>
					  <li class="nav-item">
						  <center><a class="nav-link" href="<?php echo $nav_moving; ?>">MOVING</a></center>
					  </li>
					  <li class="nav-item">
						  <center><a class="nav-link" href="<?php echo $nav_contact; ?>">CONTACT</a></center>
					  </li>
					  <!-- social icons with the 3x size and on the center-->
					  <li>
						<div class = "row"><div class="span6" style="float: none; margin: 0 auto;">
						  <!--facebook icon -->
						  <a href="https://facebook.com/mattiabaldi" class="badge social facebook" target="_blank">
							  <span class="fa-stack fa-lg fa-3x">
								  <span><i class="fa fa-circle fa-stack-2x" style = "color:black"></i></span>
								  <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
							  </span>
						  </a>
						  <!--instagram icon -->
						  <a href="http://instagram.com/mattiabaldi_studio" class="badge social instragram" target="_blank">
							  <span class="fa-stack fa-lg fa-3x">
								  <span><i class="fa fa-circle fa-stack-2x" style = "color:black"></i></span>
								  <i class="fa fa-instagram fa-stack-1x fa-inverse"></i>
							  </span>
						  </a>
						</div></div>
					  </li>	<!-- END ============ social icons-->
				  </ul>
			  </div>
		  </nav>
		</div>
              
            <!--placeholder div to prevent jumpy content when nav gets pinned-->
            <div style="padding:2em;" data-0="display:none;" data-top-top="display:block;" data-anchor-target="#nav" data-edge-strategy="set">&nbsp;</div>
          
        <!-- Photo Contents -->
		<ul class="grid row masonry" data-rows style="margin-left:2em;">
			<!-- <div class="grid-sizer"></div> -->
			<!-- <div class="gutter-sizer"></div> -->
				<li class="grid-item"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/MBtest1.png">
				</li>	
				<li class="grid-item"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/MBtest2.png">
				</li>
				<li class="grid-item"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/MBtest3.png" height="580px">
				</li>
				<li class="grid-item"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/MBtest1.png">
				</li>
				<li class="grid-item"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/MBtest2.png">
				</li>
				<li class="grid-item"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/MBtest3.png">
				</li>
		</ul>
        <!--END ========= Photo Contents -->
          
          
          
          
          <footer>
              
              <!-- nav bar-->
              <div class="navbar-wrapper">
                  <nav class="navbar navbar-expand-md navbar-dark navbar-inverse bg-dark" role="navigation">
                      <ul class="navbar-nav mr-auto">
                          <li class="nav-item">
                              <center><a class="nav-link" href="<?php echo $nav_home; ?>">HOME<span class="sr-only">HOME</span></a></center>
                          </li>
                          <li class="nav-item active">
                              <center><a class="nav-link" href="<?php echo $nav_works; ?>">WORKS</a></center>
                          </li>
                          <li class="nav-item">
                              <center><a class="nav-link" href="<?php echo $nav_moving; ?>">MOVING</a></center>
                          </li>
                          <li class="nav-item">
                              <center><a class="nav-link" href="<?php echo $nav_contact; ?>">CONTACT</a></center>
                          </li>
                          
                      </ul>
                      <!--name on the footer-->
                      <p style = "color:white">&copy;2017 Mattia Baldi Studio</p>
                  </nav>
              </div>
          </footer>

<?php get_footer(); ?>