<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Bizimle Öğrenmek Eğlenceilidir</title>
        <meta name="description" content="Multipurpose Responsive Site Theme">
        <meta name="author" content="pixel-industry">
        <meta name="viewport" content="initial-scale=1, maximum-scale=1">
        <meta name="viewport" content="width=device-width">

        <!-- favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
        <link rel="icon" type="image/x-icon" href="favicon.ico" />

        <!-- stylesheets -->
        <link rel="stylesheet" href="css/basic.css" />
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="css/nivo-slider.css" />
        <link rel="stylesheet" href="css/prettyPhoto.css" />

        <!--[if IE 8]>
            <link rel="stylesheet" href="css/ie8.css" media="screen" />
        <![endif]-->

        <!-- navigation icons using "font awesome" -->
        <link rel="stylesheet" href="Font-Awesome/css/font-awesome.css" />

        <!-- google web fonts -->
        <link href='http://fonts.googleapis.com/css?family=Arimo' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>

        <!-- js files -->
        <script  src="js/jquery-1.7.2.js"></script> <!-- jQuery 1.7.2 -->
        <script  src="js/jquery.placeholder.min.js"></script><!-- jQuery placeholder fix for old browsers -->
        <script  src="js/jquery.nivo.slider.js"></script><!-- nivo slider -->
        <script  src="js/portfolio.js"></script> <!-- portfolio custom options -->
        <script  src="js/jquery.prettyPhoto.js"></script><!-- prettyPhoto -->
        <script  src="js/jquery.tweetscroll.js"></script> <!-- jQuery tweetscroll plugin -->
        <script  src="js/socialstream.jquery.js"></script> <!-- Social Networks Feeds -->
        <script  src="js/jquery.carouFredSel-6.0.0-packed.js"></script><!-- CarouFredSel carousel plugin -->
        <script  src="js/include.js"></script> <!-- jQuery custom options -->

        <!--[if (gte IE 6)&(lte IE 8)]>
            <script type="text/javascript" src="js/selectivizr.js"></script>
        <![endif]-->
        <!--[if lt IE 9]>
            <script src="js/html5shiv.js"></script>
        <![endif]-->
    </head>

    <body>
        <!-- header start -->
        <header id="header" class="clearfix">

            <!-- logo start -->
            <section id="logo">
                <a href="index.php">
                    <img src="img/logo2.png" alt="logo"/>
                </a>
            </section><!-- #logo end -->

            <!-- nav container start -->
            <section id="nav-container">

                <!-- main navigation start  -->
                <nav id="nav">
                    <ul class="nav nav-list">
                        <li class="active">
                            <a href="index-2.php" class="active">
                                <i class="icon-nav icon-home"></i>
                                Anasayfa
                            </a>

                            <ul>
                                <li><a href="index-2.php">Home default</a></li>
                                <li><a href="home-alt.html">Home Alternative</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="icon-nav icon-star"></i>
                                Biz Kimiz? +</a>
                            <ul>
                                <li><a href="about.html">About us</a></li>
                                <li><a href="services.html">Our services</a></li>
                                <li><a href="page-sidebar-left.html">Page with sidebar left</a></li>
                                <li><a href="page-sidebar-right.html">Page with sidebar right</a></li>
                                <li><a href="404.html">404 page</a></li>
                                <li><a href="products.php">Products page</a></li>
                                <li><a href="product-details.html">Product details</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="icon-nav icon-map-marker"></i>
                                Bize Ulaşın! +</a>
                            <ul>
                                <li><a href="contact.html">Contact default</a></li>
                                <li><a href="contact-simple.html">Contact simple</a></li>
                            </ul>
                        </li>
                    </ul> 
                </nav><!-- main navigation end -->

                <!-- responsive navigation start -->
                <select id="nav-responsive">
                    <option selected="" value="">Site Navigation...</option>

                    <option value="">Anasayfa</option>
                    <option value="index.html">- Home default</option>
                    <option value="home-alt.html">- Home alternative</option>

                    <option value="">Biz Kimiz?</option>
                    <option value="about.html">- About us</option>
                    <option value="services.html">- Services</option>
                    <option value="page-sidebar-left.html">- Page with sidebar left</option>
                    <option value="page-sidebar-right.html">- Page with sidebar right</option>
                    <option value="404.html">- 404 page</option>
                    <option value="products.html">- Products page</option>
                    <option value="product-details.html">- Product details</option>


                    

                    

                    

                  <option value="">Bize Ulaşın!</option>
                    <option value="contact.html">- Contact default</option>
                    <option value="contact-simple.html">- Contact simple</option>
                </select> <!-- responsive navigation end -->

            </section><!-- nav container end -->

            <!-- search start -->
            <section id="search">
                <form action="#" method="get">
                    <input id="search-submit" type="submit" />
                    <input id="search-bkg" type="text" placeholder="Aranılacak..." />                   
                </form>
            </section><!-- search end -->

        </header><!-- header end -->

        <!-- slider start -->
        <div class="slider-wrapper">

            <div class="shadow-top"></div>


            <div id="slider" class="nivoSlider home-slider">
                <img src="img/slider/slider8.png" alt="slider" 
                     title="#htmlcaption1"/>

                <img src="img/slider/slider9.png" alt="slider" 
                     title="#htmlcaption2"/>

                <img src="img/slider/slider5.jpeg" alt="slider" 
                     title="#htmlcaption3"/>
            </div>



            <!-- image captions start -->
            <div id="htmlcaption1">
                <p class="nivo-caption-title">
                    This is a perfect place for some cool image title.
                </p>

                <div class="nivo-caption-subtitle">
                    With it's clean design and uniqlly designed pages, you'll be 
                    able to find the perfect combination that suits your needs.
                </div>
            </div><!-- image captions end -->

            <!-- Second image captions start -->
            <div id="htmlcaption2">
                <p class="nivo-caption-title">
                    Perfect place for showcasing your best work.
                </p>

                <div class="nivo-caption-subtitle">
                    Sed ut perspiciatis unde omnis iste natus error sit 
                    voluptatem accusantium doloremque laudantium, totam rem.
                </div>
            </div><!-- image captions end -->

            <!-- Thirs image captions start -->
            <div id="htmlcaption3">
                <p class="nivo-caption-title">
                    Clean and simple design that will sure suit your needs.
                </p>

                <div class="nivo-caption-subtitle">
                    Sed ut perspiciatis unde omnis iste natus error sit 
                    voluptatem accusantium doloremque laudantium, totam rem.
                </div>
            </div><!-- image captions end -->

            <!-- slider images shadow -->
            <div class="slider-shadow"></div>

            <div class="shadow-bottom"></div>
        </div>


        <!-- content start -->
        <div id="content-wrapper">

            <div class="container_12">

                <!-- entry note start -->
                <section class="enter-note grid_12">
                    <p class="light">
                        Hazırsan Öğrenmeye Başlayalım!
                    </p>
                </section>
                <!-- entry note end -->

                <!-- services wrapper start --><!-- #services-wrap end -->


                <!-- portfolio title -->
                <div class="divider-with-title grid_12">                    
                    <div class="title">
                        <h1>Eğitim İçeriği</h1>
                        <span class="subtitle">
                            <center>Diller</center>
                        </span>
                    </div>
                </div> <!-- portfolio title end -->

                <!-- portfolio items start -->
                <ul>
                    <li class="grid_3">
                        <figure class="portfolio">
                            <a class="portfolio-image" href="portfolio3.html"><img src="img/portfolio/thumb/portfolio1.jpg" alt="portfolio" width="220"/></a>

                            <figcaption>
                                <div class="caption-title">
                                    <p class="title">
                                        Manhattan
                                    </p>
                                    <p class="subtitle">
                                        Photography
                                    </p>
                                </div>


                                <ul class="caption-hover">
                                    <li class="portfolio-zoom">
                                        <a class="thumb" href="img/portfolio/large/portfolio1.jpg" 
                                           data-gal="prettyPhoto[pp_gallery]">zoom
                                        </a>
                                    </li>

                                    <li class="portfolio-single">
                                        <a href="portfolio-single.html">single</a>
                                    </li>
                                </ul>
                            </figcaption>
                        </figure>
                    </li>

                    <li class="grid_3">
                        <figure class="portfolio">
                            <a href="portfolio3.html"><img src="img/portfolio/thumb/portfolio2.jpg" alt="portfolio" width="220"/></a>

                            <figcaption>
                                <div class="caption-title">
                                    <p class="title">
                                        Sofa in the sky
                                    </p>
                                    <p class="subtitle">
                                        Graphic design
                                    </p>
                                </div>


                                <ul class="caption-hover">
                                    <li class="portfolio-zoom">
                                        <a class="thumb" href="img/portfolio/large/portfolio2.jpg" 
                                           data-gal="prettyPhoto[pp_gallery]">zoom
                                        </a>
                                    </li>

                                    <li class="portfolio-single">
                                        <a href="portfolio-single.html">single</a>
                                    </li>
                                </ul>
                            </figcaption>
                        </figure>
                    </li>

                    <li class="grid_3">
                        <figure class="portfolio">
                            <img class="ribbon" src="img/portfolio/ribbon.png" alt="ribbon"/>

                            <a href="portfolio3.html"><img src="img/portfolio/thumb/portfolio3.jpg" alt="portfolio" width="220"/></a>

                            <figcaption>
                                <div class="caption-title">
                                    <p class="title">
                                        Time to relax
                                    </p>
                                    <p class="subtitle">
                                        Motion Graphics
                                    </p>
                                </div>


                                <ul class="caption-hover">
                                    <li class="portfolio-zoom">
                                        <a class="thumb" href="img/portfolio/large/portfolio3.jpg" 
                                           data-gal="prettyPhoto[pp_gallery]">zoom
                                        </a>
                                    </li>

                                    <li class="portfolio-single">
                                        <a href="portfolio-single.html">single</a>
                                    </li>
                                </ul>
                            </figcaption>
                        </figure>
                    </li>

                    <li class="grid_3">
                        <figure class="portfolio">
                            <a href="portfolio3.html"><img src="img/portfolio/thumb/portfolio4.jpg" alt="portfolio" width="220"/></a>

                            <figcaption>
                                <div class="caption-title">
                                    <p class="title">
                                        Going up
                                    </p>
                                    <p class="subtitle">
                                        Photography
                                    </p>
                                </div>


                                <ul class="caption-hover">
                                    <li class="portfolio-zoom">
                                        <a class="thumb" href="img/portfolio/large/portfolio4.jpg" 
                                           data-gal="prettyPhoto[pp_gallery]">zoom
                                        </a>
                                    </li>

                                    <li class="portfolio-single">
                                        <a href="portfolio-single.html">single</a>
                                    </li>
                                </ul>
                            </figcaption>
                        </figure>
                    </li>
                </ul><!-- portfolio items end -->


                <!-- scrolling twitter feed start -->
                <article class="tweets-feed grid_12">
                  <div class="tweets-home">
                      <div class="tweets-list-container">
                        </div>
                    </div>
                </article><!-- scrolling twitter feed end -->

            </div><!-- container_12 end -->
        </div><!-- content wrapper end -->


        <!-- footer wrapper start -->
        <div id="footer-wrapper">

            <div class="shadow-top"></div>

            <footer id="footer" class="container_12">

                <!-- sliding text article start --><!-- sliding text article end -->

                <!-- latest blog entries start --><!-- latest blog entries end -->

                <!-- instagram feed start --><!-- instagram feed end -->


                <!-- contact start -->
                <article class="grid_3">
                    <h4>İletişim</h4>
                    <p>
                        You can reach us on social networks, or send us a message 
                        through our contact form <a href="contact.html" class="text-red">here.</a>
                    </p>

                    <ul class="social">
                        <li class="dribbble">
                            <a href="#">dribbble</a>
                        </li>

                        <li class="facebook">
                            <a href="#">facebook</a>
                        </li>

                        <li class="pinterest">
                            <a href="#">pinterest</a>
                        </li>

                        <li class="twitter">
                            <a href="#">twitter</a>
                        </li>
                    </ul>
                </article><!-- contact end -->
            </footer><!-- footer end -->

            <!-- copyright container start -->
            <section class="copyright-container">

                <div class="copyright container_12">
                    <p>
                        Copyright rabia 2023. All rights reserved. Theme by 
                        <span class="text-red">Codemioo.</span>
                    </p>

                    <ul class="breadcrumbs">
                        <li class="active">
                            <a href="index-2.php">anasayfa</a>
                        </li>
                        <li>
                            <a href="about.html">Biz Kimiz?</a>
                        <li>
                            <a href="contact.html">Bize Ulaşın!</a>
                        </li>
                    </ul> 
                </div>
            </section><!-- copyright container end -->
        </div><!-- footer wrapper end -->

        <script>
            $(window).load(function() {
                $('#slider').nivoSlider();
            });
            
            /* ================ TWEETS SCROLL ================ */
            $('.tweets-list-container').tweetscroll({
                username: 'pixel_industry', 
                time: true, 
                limit: 11, 
                replies: true, 
                position: 'append',
                date_format: 'style2',
                animation: 'slide_up',
                visible_tweets: 1
            });
            
            $("#foo3").carouFredSel({
                items: 1,
                auto: true,
                scroll: 1,
                pagination  : "#foo3_pag"
            });

            //placeholder fix
            $('input[placeholder], textarea[placeholder]').placeholder();
            
        </script>
    </body>
</html>
