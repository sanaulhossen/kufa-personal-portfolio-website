<?php
session_start();
    require 'inc/db.php';
?>
<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Kufa - Personal Portfolio HTML5 Template</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" type="image/x-icon" href="/practice/frontend_assets/img/favicon.png">
        <!-- Place favicon.ico in the root directory -->
        <script src="https://kit.fontawesome.com/10dfd52df4.js" crossorigin="anonymous"></script>
		<!-- CSS here -->
        <link rel="stylesheet" href="/practice/frontend_assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="/practice/frontend_assets/css/animate.min.css">
        <link rel="stylesheet" href="/practice/frontend_assets/css/magnific-popup.css">
        <link rel="stylesheet" href="/practice/frontend_assets/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="/practice/frontend_assets/css/flaticon.css">
        <link rel="stylesheet" href="/practice/frontend_assets/css/slick.css">
        <link rel="stylesheet" href="/practice/frontend_assets/css/aos.css">
        <link rel="stylesheet" href="/practice/frontend_assets/css/default.css">
        <link rel="stylesheet" href="/practice/frontend_assets/css/style.css">
        <link rel="stylesheet" href="/practice/frontend_assets/css/responsive.css">
        
    </head>
    <body class="theme-bg">

        <!-- preloader -->
<!--         <div id="preloader">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <div class="object" id="object_one"></div>
                    <div class="object" id="object_two"></div>
                    <div class="object" id="object_three"></div>
                </div>
            </div>
        </div> -->
        <!-- preloader-end -->

        <!-- header-start -->
        <header>
            <div id="header-sticky" class="transparent-header">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="main-menu">
                                <nav class="navbar navbar-expand-lg">
                                    <a href="index.html" class="navbar-brand logo-sticky-none"><img src="/practice/frontend_assets/img/logo/logo.png" alt="Logo"></a>
                                    <a href="index.html" class="navbar-brand s-logo-none"><img src="/practice/frontend_assets/img/logo/s_logo.png" alt="Logo"></a>
                                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                                        data-target="#navbarNav">
                                        <span class="navbar-icon"></span>
                                        <span class="navbar-icon"></span>
                                        <span class="navbar-icon"></span>
                                    </button>
                                    <div class="collapse navbar-collapse" id="navbarNav">
                                        <ul class="navbar-nav ml-auto">
                                            <li class="nav-item active"><a class="nav-link" href="#home">Home</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#about">about</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#service">service</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#portfolio">portfolio</a></li>
                                            <li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                                        </ul>
                                    </div>
                                    <div class="header-search">
                                        <a href="#"><i class="fas fa-search"></i></a>
                                    </div>
                                    <div class="header-btn">
                                        <a href="#contact" class="btn">HIRE <span>NOW</span></a>
                                        <a href="#" class="off-canvas-menu menu-tigger"><i class="fas fa-bars"></i></a>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- offcanvas-start -->
            <div class="extra-info">
                <div class="close-icon menu-close">
                    <button>
                        <i class="far fa-window-close"></i>
                    </button>
                </div>
                <div class="logo-side mb-30">
                    <a href="index.html">
                        <img src="/practice/frontend_assets/img/logo/logo.png" alt="" />
                    </a>
                </div>
                <div class="side-info mb-30">
                    <div class="contact-list mb-30">
                        <h4>Office Address</h4>
                        <p>123/A, Miranda City Likaoli
                            Prikano, Dope</p>
                    </div>
                    <div class="contact-list mb-30">
                        <h4>Phone Number</h4>
                        <p>+0989 7876 9865 9</p>
                        <p>+(090) 8765 86543 85</p>
                    </div>
                    <div class="contact-list mb-30">
                        <h4>Email Address</h4>
                        <p><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="1c75727a735c79647d716c7079327f7371">[email&#160;protected]</a></p>
                        <p><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="ceabb6afa3bea2abe0a3afa7a28ea6bba3e0ada1a3">[email&#160;protected]</a></p>
                    </div>
                </div>
                <div class="side-instagram">
                    <a href="#"><img src="/practice/frontend_assets/img/project/p1.jpg" alt="img"></a>
                    <a href="#"><img src="/practice/frontend_assets/img/project/p2.jpg" alt="img"></a>
                    <a href="#"><img src="/practice/frontend_assets/img/project/p3.jpg" alt="img"></a>
                    <a href="#"><img src="/practice/frontend_assets/img/project/p4.jpg" alt="img"></a>
                    <a href="#"><img src="/practice/frontend_assets/img/project/p5.jpg" alt="img"></a>
                    <a href="#"><img src="/practice/frontend_assets/img/project/p1.jpg" alt="img"></a>
                </div>
                <div class="social-icon-right mt-20">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="offcanvas-overly"></div>
            <!-- offcanvas-end -->
        </header>
        <!-- header-end -->

        <!-- main-area -->
        <main>

            <!-- banner-area -->
            <section id="home" class="banner-area banner-bg fix">
                <div class="container">


                    <?php 
                        $read_hero_query = "SELECT * FROM hero_descriptions WHERE hero_status = 2 LIMIT 1";
                        $hero_datas = mysqli_query($db_connect,$read_hero_query);
                    ?>
                    <?php
                        foreach($hero_datas as $data):
                    ?>

                    <div class="row align-items-center">
                        <div class="col-xl-7 col-lg-6">
                            <div class="banner-content">
                                <h6 class="wow fadeInUp" data-wow-delay="0.2s">HELLO!</h6>
                                <h2 class="wow fadeInUp" data-wow-delay="0.4s">I am <?php echo $data['hero_name'] ?></h2>
                                <p class="wow fadeInUp" data-wow-delay="0.6s"><?php echo $data['hero_description'] ?></p>
                                <div class="banner-social wow fadeInUp" data-wow-delay="0.8s">

            <?php
                $hero_social_link_section_query = "SELECT * FROM hero_social_links WHERE social_status = 2 LIMIT 1";
                $hero_social_link_section_info_db = mysqli_query($db_connect,$hero_social_link_section_query);
                foreach($hero_social_link_section_info_db as $social_link):
            ?>

                <ul>
                    <li><a href="<?php echo $social_link['facebook_link'] ?>"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="<?php echo $social_link['twitter_link'] ?>"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="<?php echo $social_link['instagram_link'] ?>"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="<?php echo $social_link['pinterest_link'] ?>"><i class="fab fa-pinterest"></i></a></li>
                </ul>

            <?php endforeach; ?>

                                </div>
                                <a href="#" class="btn wow fadeInUp" data-wow-delay="1s">SEE PORTFOLIOS</a>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-6 d-none d-lg-block">
                            <div class="banner-img text-right">
                                <img src="/practice/uploads/hero/<?php echo $data['hero_image'] ?>" alt="">
                            </div>
                        </div>
                    </div>

                    <?php
                        endforeach;
                    ?>

                </div>
                <div class="banner-shape"><img src="/practice/frontend_assets/img/shape/dot_circle.png" class="rotateme" alt="img"></div>
            </section>
            <!-- banner-area-end -->

            <!-- about-area-->
            <section id="about" class="about-area primary-bg pt-120 pb-120">
                <div class="container">
                    <div class="row align-items-center">



                        <div class="col-lg-6">

                            <?php 
                                $read_about_query = "SELECT * FROM abouts WHERE about_status = 2 LIMIT 1";
                                $about_datas = mysqli_query($db_connect,$read_about_query);
                                foreach($about_datas as $data): 
                            ?>
                                <div class="about-img">
                                    <img src="/practice/uploads/about/<?php echo $data['about_image'] ?>" title="me-01" alt="<?php echo $data['about_image'] ?>">
                                </div>

                            <?php endforeach; ?>

                        </div>
                        <div class="col-lg-6 pr-90">
                            <div class="section-title mb-25">
                                <span>Introduction</span>
                                <h2>About Me</h2>
                            </div>
                            <?php 
                                $read_about_query_des = "SELECT * FROM abouts WHERE about_status = 2 LIMIT 1";
                                $about_datas_des = mysqli_query($db_connect,$read_about_query_des);
                                foreach($about_datas_des as $data_des):
                            ?>
                                <div class="about-content">
                                    <p><?php echo $data_des['about_description'] ?></p>
                                    <h3>Education:</h3>
                                </div>
                            <?php endforeach; ?>

                    <?php 
                        $education_query = "SELECT * FROM educations WHERE education_status = 2 LIMIT 4";
                        $education_datas = mysqli_query($db_connect,$education_query);
                        foreach($education_datas as $data):
                    ?>

                            <!-- Education Item -->
                            <div class="education">
                                <div class="year"><?php echo $data['passing_year'] ?></div>
                                <div class="line"></div>
                                <div class="location">
                                    <span><?php echo $data['subject'] ?></span>
                                    <div class="progressWrapper">
                                        <div class="progress">
                                            <div class="progress-bar wow slideInLefts" data-wow-delay="0.2s" data-wow-duration="2s" role="progressbar" style="width: <?php echo $data['result'] ?>%;" aria-valuenow="<?php echo $data['result'] ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Education Item -->

                    <?php endforeach; ?>

                        </div>
                    </div>
                </div>
            </section>
            <!-- about-area-end -->

            <!-- Services-area -->
            <section id="service" class="services-area pt-120 pb-50">
				<div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                            <div class="section-title text-center mb-70">
                                <span>WHAT WE DO</span>
                                <h2>Services and Solutions</h2>
                            </div>
                        </div>
                    </div>
					<div class="row">

                        <?php 
                            $service_query = "SELECT * FROM services WHERE service_status = 2  ORDER BY id DESC";
                            $service_datas = mysqli_query($db_connect,$service_query);
                            foreach($service_datas as $data):
                        ?>

						<div class="col-lg-4 col-md-6">
							<div class="icon_box_01 wow fadeInLeft" data-wow-delay="0.2s">
                                <i class="<?php echo $data['service_icon'] ?>"></i>
								<h3><?php echo $data['service_title'] ?></h3>
								<p><?php echo $data['service_description'] ?></p>
							</div>
						</div>

                        <?php endforeach; ?>

					</div>
				</div>
			</section>
            <!-- Services-area-end -->

            <!-- Portfolios-area -->
            <section id="portfolio" class="portfolio-area primary-bg pt-120 pb-90">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                            <div class="section-title text-center mb-70">
                                <span>Portfolio Showcase</span>
                                <h2>My Recent Best Works</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6 pitem">
                            <div class="speaker-box">
								<div class="speaker-thumb">
									<img src="/practice/frontend_assets/img/images/1.jpg" alt="img">
								</div>
								<div class="speaker-overlay">
									<span>Design</span>
									<h4><a href="portfolio-single.html">Hamble Triangle</a></h4>
									<a href="portfolio-single.html" class="arrow-btn">More information <span></span></a>
								</div>
							</div>
                        </div>
                        <div class="col-lg-4 col-md-6 pitem">
                            <div class="speaker-box">
								<div class="speaker-thumb">
									<img src="/practice/frontend_assets/img/images/2.jpg" alt="img">
								</div>
								<div class="speaker-overlay">
									<span>Video</span>
									<h4><a href="portfolio-single.html">Dark Beauty</a></h4>
									<a href="portfolio-single.html" class="arrow-btn">More information <span></span></a>
								</div>
							</div>
                        </div>
                        <div class="col-lg-4 col-md-6 pitem">
                            <div class="speaker-box">
								<div class="speaker-thumb">
									<img src="/practice/frontend_assets/img/images/3.jpg" alt="img">
								</div>
								<div class="speaker-overlay">
									<span>Audio</span>
									<h4><a href="portfolio-single.html">Gilroy Limbo.</a></h4>
									<a href="portfolio-single.html" class="arrow-btn">More information <span></span></a>
								</div>
							</div>
                        </div>
						<div class="col-lg-4 col-md-6 pitem">
                            <div class="speaker-box">
								<div class="speaker-thumb">
									<img src="/practice/frontend_assets/img/images/4.jpg" alt="img">
								</div>
								<div class="speaker-overlay">
									<span>Design</span>
									<h4><a href="portfolio-single.html">Ipsum which</a></h4>
									<a href="portfolio-single.html" class="arrow-btn">More information <span></span></a>
								</div>
							</div>
                        </div>
                        <div class="col-lg-4 col-md-6 pitem">
                            <div class="speaker-box">
								<div class="speaker-thumb">
									<img src="/practice/frontend_assets/img/images/5.jpg" alt="img">
								</div>
								<div class="speaker-overlay">
									<span>Creative</span>
									<h4><a href="portfolio-single.html">Eiusmod tempor</a></h4>
									<a href="portfolio-single.html" class="arrow-btn">More information <span></span></a>
								</div>
							</div>
                        </div>
                        <div class="col-lg-4 col-md-6 pitem">
                            <div class="speaker-box">
								<div class="speaker-thumb">
									<img src="/practice/frontend_assets/img/images/6.jpg" alt="img">
								</div>
								<div class="speaker-overlay">
									<span>UX/UI</span>
									<h4><a href="portfolio-single.html">again there</a></h4>
									<a href="portfolio-single.html" class="arrow-btn">More information <span></span></a>
								</div>
							</div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- services-area-end -->


            <!-- fact-area -->
            <section class="fact-area">
                <div class="container">
                    <div class="fact-wrap">
                        <div class="row justify-content-between">
                            <div class="col-xl-2 col-lg-3 col-sm-6">
                                <div class="fact-box text-center mb-50">
                                    <div class="fact-icon">
                                        <i class="fas fa-award"></i>
                                    </div>
                                    <div class="fact-content">
                                        <h2><span class="count">245</span></h2>
                                        <span>Feature Item</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-sm-6">
                                <div class="fact-box text-center mb-50">
                                    <div class="fact-icon">
                                        <i class="fas fa-heart"></i>
                                    </div>
                                    <div class="fact-content">
                                        <h2><span class="count">345</span></h2>
                                        <span>Active Products</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-sm-6">
                                <div class="fact-box text-center mb-50">
                                    <div class="fact-icon">
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                    <div class="fact-content">
                                        <h2><span class="count">39</span></h2>
                                        <span>Year Experience</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-sm-6">
                                <div class="fact-box text-center mb-50">
                                    <div class="fact-icon">
                                        <i class="fas fa-female"></i>
                                    </div>
                                    <div class="fact-content">
                                        <h2><span class="count">3</span>k</h2>
                                        <span>Our Clients</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- fact-area-end -->

            <!-- testimonial-area -->
            <section class="testimonial-area primary-bg pt-115 pb-115">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                            <div class="section-title text-center mb-70">
                                <span>testimonial</span>
                                <h2>happy customer quotes</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-xl-9 col-lg-10">
                            <div class="testimonial-active">


                            <?php 
                                $testimonial_query = "SELECT * FROM testimonials";
                                $testimonial_datas = mysqli_query($db_connect,$testimonial_query);
                                foreach($testimonial_datas as $testimonial):
                            ?>

                                <div class="single-testimonial text-center">
                                    <div class="testi-avatar">
                                        <img src="/practice/uploads/testimonial/<?php echo $testimonial['client_image'] ?>" alt="<?php echo $testimonial['client_image'] ?>">
                                    </div>
                                    <div class="testi-content">
                                        <h4><span>“</span> <?php echo $testimonial['client_review'] ?> <span>”</span></h4>
                                        <div class="testi-avatar-info">
                                            <h5><?php echo $testimonial['client_name'] ?></h5>
                                            <span><?php echo $testimonial['client_position'] ?></span>
                                        </div>
                                    </div>
                                </div>

                            <?php endforeach ?>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- testimonial-area-end -->

            <!-- brand-area -->
            <div class="barnd-area pt-100 pb-100">
                <div class="container">
                    <div class="row brand-active">
                        <div class="col-xl-2">
                            <div class="single-brand">
                                <img src="/practice/frontend_assets/img/brand/brand_img01.png" alt="img">
                            </div>
                        </div>
                        <div class="col-xl-2">
                            <div class="single-brand">
                                <img src="/practice/frontend_assets/img/brand/brand_img02.png" alt="img">
                            </div>
                        </div>
                        <div class="col-xl-2">
                            <div class="single-brand">
                                <img src="/practice/frontend_assets/img/brand/brand_img03.png" alt="img">
                            </div>
                        </div>
                        <div class="col-xl-2">
                            <div class="single-brand">
                                <img src="/practice/frontend_assets/img/brand/brand_img04.png" alt="img">
                            </div>
                        </div>
                        <div class="col-xl-2">
                            <div class="single-brand">
                                <img src="/practice/frontend_assets/img/brand/brand_img05.png" alt="img">
                            </div>
                        </div>
                        <div class="col-xl-2">
                            <div class="single-brand">
                                <img src="/practice/frontend_assets/img/brand/brand_img03.png" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- brand-area-end -->

            <!-- contact-area -->
            <section id="contact" class="contact-area primary-bg pt-120 pb-120">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="section-title mb-20">
                                <span>information</span>
                                <h2>Contact Information</h2>
                            </div>

                    <?php
                        $contact_section_query = "SELECT * FROM contacts WHERE contact_status = 2 LIMIT 1";
                        $contact_info_db = mysqli_query($db_connect,$contact_section_query);
                        foreach($contact_info_db as $contact):
                    ?>

                            <div class="contact-content">
                                <p><?php echo $contact['contact_info'] ?></p>
                                <h5>OFFICE IN <span>NEW YORK</span></h5>
                                <div class="contact-list">
                                    <ul>
                                        <li><i class="fas fa-map-marker"></i><span>Address :</span><?php echo $contact['address'] ?></li>
                                        <li><i class="fas fa-headphones"></i><span>Phone :</span><?php echo $contact['phone'] ?></li>
                                        <li><i class="fas fa-globe-asia"></i><span>e-mail :</span><?php echo $contact['email'] ?></li>
                                    </ul>
                                </div>
                            </div>

                    <?php endforeach; ?>

                        </div>
                        <div class="col-lg-6">
                          <?php if(isset($_SESSION['contact_success'])):?>

                            <div class="alert alert-danger">
                              <?= $_SESSION['contact_success'] ?>
                            </div>

                          <?php 
                            endif;
                            unset($_SESSION['contact_success']);
                          ?>
                            <div class="contact-form">
                                <form method="post" action="/practice/inc/contact_form/contact_form_back.php">
                                    <input type="text" placeholder="your name *" name="user_name">
                                    <input type="email" placeholder="your email *" name="user_email">
                                    <textarea id="message" placeholder="your message *" name="user_message"></textarea>
                                    <button class="btn">SEND</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- contact-area-end -->

        </main>
        <!-- main-area-end -->

        <!-- footer -->
        <footer>
            <div class="copyright-wrap">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <div class="copyright-text text-center">
                                <p>Copyright© <span>Kufa</span> | All Rights Reserved</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer-end -->





		<!-- JS here -->
        <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
        <script src="/practice/frontend_assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="/practice/frontend_assets/js/popper.min.js"></script>
        <script src="/practice/frontend_assets/js/bootstrap.min.js"></script>
        <script src="/practice/frontend_assets/js/isotope.pkgd.min.js"></script>
        <script src="/practice/frontend_assets/js/one-page-nav-min.js"></script>
        <script src="/practice/frontend_assets/js/slick.min.js"></script>
        <script src="/practice/frontend_assets/js/ajax-form.js"></script>
        <script src="/practice/frontend_assets/js/wow.min.js"></script>
        <script src="/practice/frontend_assets/js/aos.js"></script>
        <script src="/practice/frontend_assets/js/jquery.waypoints.min.js"></script>
        <script src="/practice/frontend_assets/js/jquery.counterup.min.js"></script>
        <script src="/practice/frontend_assets/js/jquery.scrollUp.min.js"></script>
        <script src="/practice/frontend_assets/js/imagesloaded.pkgd.min.js"></script>
        <script src="/practice/frontend_assets/js/jquery.magnific-popup.min.js"></script>
        <script src="/practice/frontend_assets/js/plugins.js"></script>
        <script src="/practice/frontend_assets/js/main.js"></script>
    </body>
</html>
