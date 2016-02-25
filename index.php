<!DOCTYPE html>
<html>
    <head>
        <title>Hello users! Web development & creative design </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="Content-Language" content="en">
        <meta name="Description" content="I'm Stan, a junior web developer in freelance offering website development services that include website development, custom programming, web hosting, SEO and more.">
        <meta name="Subject" content="Web developement & creative design ">
        <meta name="Copyright" content="Stanislas kerné">
        <meta name="Author" content="Stanislas Kerné">
        <meta name="Publisher" content="Stanislas Kerné">
        <meta property="og:title" content="HELLO USERS !" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="http://hello-users.com" />
        <meta property="og:image" content="http://hello-users.com/img/assets/og-image-en.png" />
        <meta property="fb:admins" content="604567118"/>
        <meta property="fb:app_id" content="1648843565390239"/>
        <meta property="og:description" content="Hey there! I'm Stan, a junior web programmer in freelance offering website development services that include full website development, custom programming, web hosting, SEO and more. Click me to see more!" /> 
        <meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
        <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" type="text/css" href="css/animate.css" />
        <script src="js/jquery.min.js"></script> 
        <script src="js/waypoint.js"></script>
        <script src="js/stellar.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/isotope.js"></script>
    </head>
    <body onload="setTimeout(function(){ $('#loader').fadeOut( 'slow', function() {}); });">
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          appId      : '1648843565390239',
          xfbml      : true,
          version    : 'v2.5'
        });
      };

      (function(d, s, id){
         var js, fjs = d.getElementsByTagName(s)[0];
         if (d.getElementById(id)) {return;}
         js = d.createElement(s); js.id = id;
         js.src = "//connect.facebook.net/en_US/sdk.js";
         fjs.parentNode.insertBefore(js, fjs);
       }(document, 'script', 'facebook-jssdk'));
    </script>

        <div id="loader">
          <div class="loader">
            <div class="loader-inner ball-pulse">
              <div></div>
              <div></div>
              <div></div>
            </div>
          </div>
        </div>

         <a id="hamburger-icon" title="Menu">
          <span class="line line-1"></span>
          <span class="line line-2"></span>
          <span class="line line-3"></span>
        </a>

        <div class="menu fullpage">
            <div class="container">
                <ul class="categories">
                    <li id="menu-home"><a class="is-active scrollTo" href="#intro"><span class="text">Home</span></a></li>
                    <li id="menu-services"><a class="scrollTo" href="#welcome"><span class="text">Services</span></a></li>
                    <li id="menu-prices"><a class="scrollTo" href="#prices"><span class="text">Prices</span></a></li>
                    <li id="menu-portfolio"><a class="scrollTo" href="#portfolio"><span class="text">Portfolio</span></a></li>
                    <li id="menu-clients"><a class="scrollTo" href="#clients"><span class="text">Clients</span></a></li>
                    <li id="menu-about"><a class="scrollTo" href="#aboutme"><span class="text">About me</span></a></li>
                    <li id="menu-contact"><a class="scrollTo" href="#contact"><span class="text">Contact</span></a></li>
                </ul>
            </div>
            <ul class="lang">
                <li class="fr"><a href="fr/">FR</a></li>
                <li>|</li>
                <li class="en"><a href="root">EN</a></li>
            </ul>
        </div>
        
        <div id="total-container">

            <div id="body-background" class="fullpage"></div>

            <div id="effects-layer" class="effects-layer">
                <div id="rays" class="rays-container">
                    <div class="rays rays-1"></div>
                    <div class="rays rays-2"></div>
                </div>
            </div>
            <div id="intro" class="fullpage">
                <canvas id="animated-cursor"></canvas>
                <div class="main-title">
                    <h1>hello</h1>
                    <ul>
                      <li>world <span class="white">!</span></li>
                      <li>users <span class="white">!</span></li>
                      <li>you <span class="white">!</span></li>
                    </ul>
                </div>
                <div id="intro-text">
                    <div class="separator"></div>
                    <div class="main-title-text thin">WEB DEVELOPEMENT <span class="blue">&</span> CREATIVE DESIGN</div>
                </div>
                <a class="pointDown scrollTo" href="#welcome"><span>↓</span></a>
            </div>
            
            <div id="welcome">
                <div class="container">
                    <div class="col-xs-12 animated" data-orientation="fadeInUp">
                        <h2><span class="blue thin">Get your</span> own website</h2>
                        <br/><br/>
                        <p class="thin"> I am a junior web programmer in freelance offering website development services that include full website development, custom programming, web hosting, SEO and more.</p>
                    </div>
                    <!--<div id="bg-wood"><img src="img/wood.jpg" class="wood-background" data-stellar-ratio="0.3" alt="Wood background"></div> -->
                </div>
            </div>
            <div id="services-choices">
                <div id="owl" class="owl-carousel owl-theme">
                    <div class="item active">
                        <a id="overview-icn" class="scrollTo" data-part="overview" href="#services-choices" onclick="return true">
                            <img src="img/services/overview.png" class="services-icn not-active" alt="overview icn" style="display:none;">
                            <img src="img/services/overview-select.png" class="services-icn active" alt="overview icn" style="display:inline;">
                            <br/>Overview
                        </a>
                    </div>
                    <div class="item">
                        <a id="shops-icn" class="scrollTo" data-part="shops" href="#services-choices" onclick="return true">    
                            <img src="img/services/shop.png" class="services-icn not-active" alt="shop icn">
                            <img src="img/services/shop-select.png" class="services-icn active" alt="shop icn">
                            <br/>shops
                        </a>
                    </div>
                    <div class="item">
                        <a id="photographers-icn" class="scrollTo" data-part="photographers" href="#services-choices" onclick="return true">
                            <img src="img/services/photographer.png" class="services-icn not-active" alt="photographers icn">
                            <img src="img/services/photographer-select.png" class="services-icn active" alt="photographers icn">
                            <br/>Photographers
                        </a>
                    </div>
                    <div class="item">
                        <a id="bloggers-icn" class="scrollTo" data-part="bloggers" href="#services-choices">
                            <img src="img/services/blog.png" class="services-icn not-active" alt="boggers icn">
                            <img src="img/services/blog-select.png" class="services-icn active" alt="boggers icn">
                            <br/>Bloggers
                        </a>
                    </div>
                    <div class="item">
                        <a id="artists-icn" class="scrollTo" data-part="artists" href="#services-choices">
                            <img src="img/services/artist.png" class="services-icn not-active" alt="artists icn">
                            <img src="img/services/artist-select.png" class="services-icn active" alt="artists icn">
                            <br/>Artists
                        </a>
                    </div>
                    <div class="item">
                        <a id="restaurants-icn" class="scrollTo" data-part="restaurants" href="#services-choices">
                            <img src="img/services/restaurant.png" class="services-icn not-active" alt="restaurants icn">
                            <img src="img/services/restaurant-select.png" class="services-icn active" alt="restaurants icn">
                            <br/>Restaurants
                        </a>
                    </div>
                    <div class="item">
                        <a id="musicians-icn" class="scrollTo" data-part="musicians" href="#services-choices">
                            <img src="img/services/musician.png" class="services-icn not-active" alt="musicians icn">
                            <img src="img/services/musician-select.png" class="services-icn active" alt="musicians icn">
                            <br/>Musicians
                        </a>
                    </div>
                    <div class="item">
                        <a id="weddings-icn" class="scrollTo" data-part="weddings" href="#services-choices">
                            <img src="img/services/wedding.png" class="services-icn not-active" alt="weddings icn">
                            <img src="img/services/wedding-select.png" class="services-icn active" alt="weddings icn">
                            <br/>Weddings
                        </a>
                    </div>
                </div>
            </div>
            <div id="services-header">

                <div id="overview" class="service-slider active">
                    <div class="container">
                        <div class="col-xs-12 animated bg-dark" data-orientation="fadeIn">
                            <h2 class="animated" data-orientation="fadeIn">EVERYTHING <span class="blue thin">YOU NEED</span></h2>
                            <p class="animated" data-orientation="fadeIn thin">Whether you need simple pages, striking galleries, a professional blog, or an online store, it's all possible with my services. Best of all, I can develop everything mobile-ready right from the start.</p>
                        </div>
                        <div id="bg-overview-mobile" class="bg-services-mobile">
                            <img id="bg-overview" src="img/backgrounds/bg-overview.jpg" class="service-background" data-stellar-ratio="0.5" alt="Overview background">
                        </div>                    
                    </div>
                </div>
            
                <div id="shops" class="service-slider">
                    <div class="container">
                        <div class="col-xs-12 bg-dark">
                            <h2 class="animated" data-orientation="fadeIn">PROMOTE <span class="blue thin">YOUR SHOP</span></h2>
                            <p class="animated" data-orientation="fadeIn thin">There are so many ways you can promote and advertise your shop. Select those that you are comfortable with and start your internet marketing now.</p>
                        </div>
                        <div id="bg-shops-mobile" class="bg-services-mobile">
                            <img id="bg-shops" src="img/backgrounds/bg-shops.jpg" class="service-background" data-stellar-ratio="0.5" alt="Shops background">
                        </div>
                    </div>
                    <div class="info"><a href="https://www.facebook.com/pages/LH-CONCEPT-STORE/226383204081032" target="blank">Photo credit: LH CONCEPT STORE</a></div>
                </div> 
            
                <div id="photographers" class="service-slider">
                    <div class="container">
                        <div class="col-xs-12 bg-dark">
                            <h2 class="animated" data-orientation="fadeIn"> <span class="blue thin">SHOW</span> YOUR PICTURES</h2>
                            <p class="animated" data-orientation="fadeIn thin">Striking galleries, are the best ways to show to the world your pictures. Let your fans and people discover your work with a nice website accesible everywhere. </p>
                        </div>
                        <div id="bg-photographers-mobile" class="bg-services-mobile">
                            <img id="bg-photographers" src="img/backgrounds/bg-photographers.jpg" class="service-background" data-stellar-ratio="0.5" alt="Photographers background">
                        </div>
                    </div>
                    <div class="info"><a href="http://www.jr-art.net/" target="blank">Photo credit: JR artist</a></div>
                </div> 
            
                <div id="bloggers" class="service-slider">
                    <div class="container">
                        <div class="col-xs-12 bg-dark">
                            <h2 class="animated" data-orientation="fadeIn"> <span class="blue thin">SHARE</span> YOUR STORIES</h2>
                            <p class="animated" data-orientation="fadeIn thin">Let your content speak for itself. You would like to share your stories and/or experiences? I can create best-in-class blogging platform and superb media management with real-time comments.</p>
                        </div>
                        <div id="bg-bloggers-mobile" class="bg-services-mobile">
                           <img id="bg-bloggers" src="img/backgrounds/bg-bloggers.jpg" class="service-background" data-stellar-ratio="0.5" alt="Photographers background">
                        </div>
                    </div>
                </div> 
            
                <div id="artists" class="service-slider">
                    <div class="container">
                        <div class="col-xs-12 bg-dark">
                            <h2 class="animated" data-orientation="fadeIn">EXPOSE <span class="blue thin">YOUR WORK</span></h2>
                            <p class="animated" data-orientation="fadeIn thin">Let your content speak for itself. I can create best-in-class blogging platform features LayoutEngine, superb media management, and real-time comments.</p>
                        </div>
                        <div id="bg-artists-mobile" class="bg-services-mobile">
                            <img id="bg-artists" src="img/backgrounds/bg-artists.jpg" class="service-background" data-stellar-ratio="0.5" alt="Artists background">
                        </div>
                    </div>
                    <div class="info"><a href="http://iangamache.com/blog/" target="blank">Photo credit: Ian Gamache artist</a></div>
                </div> 
            
                <div id="restaurants" class="service-slider">
                    <div class="container">
                        <div class="col-xs-12 bg-dark">
                            <h2 class="animated" data-orientation="fadeIn">BOOST <span class="blue thin">YOUR RESTAURANT</span></h2>
                            <p class="animated" data-orientation="fadeIn thin">You want to increase your restaurant sales by : increase number of new customers, increase frequency of existing customers, increase spend and increase rate of table turn/flow-through ? Start with a website!</p>
                        </div>
                        <div id="bg-restaurants-mobile" class="bg-services-mobile">
                            <img id="bg-restaurants" src="img/backgrounds/bg-restaurants.jpg" class="service-background" data-stellar-ratio="0.5" alt="Restaurants background">
                        </div>
                    </div>
                </div>   
            
                <div id="musicians" class="service-slider">
                    <div class="container">
                        <div class="col-xs-12 bg-dark">
                            <h2 class="animated" data-orientation="fadeIn">GROW <span class="blue thin">YOUR LISTENERS</span></h2>
                            <p class="animated" data-orientation="fadeIn thin">Let your music traveling around the world! Increase your online audience, share new songs, information about your group and let people know about your upcoming tour dates. </p>
                        </div>
                        <div id="bg-musicians-mobile" class="bg-services-mobile">
                            <img id="bg-musicians" src="img/backgrounds/bg-musicians.jpg" class="service-background" data-stellar-ratio="0.5" alt="Musicians background">
                        </div>
                    </div>
                </div>  
            
                <div id="weddings" class="service-slider">
                    <div class="container">
                        <div class="col-xs-12 bg-dark">
                            <h2 class="animated" data-orientation="fadeIn"><span class="blue thin">REMEMBER</span> YOUR HAPPIEST DAY</h2>
                            <p class="animated" data-orientation="fadeIn thin">You are preparing your wedding and you want to share it with your friends and family or just simplify your preparations by creating a website to announce important events and dates related to the happiest day of your life? I can help you to do that!</p>
                        </div>
                        <div id="bg-weddings-mobile" class="bg-services-mobile">
                            <img id="bg-weddings" src="img/backgrounds/bg-weddings.jpg" class="service-background" data-stellar-ratio="0.5" alt="Musicians background">
                        </div>
                    </div>
                </div>        
            </div>
            
            <div id="services-details">
                <div class="container">
                    <div class="col-sm-12 col-sm-6 col-md-4 animated" data-orientation="fadeInUp">
                      <div class="templates"><div class="icon"><img src="img/services/template.png" alt="template"></div></div>
                      <h3>Templates</h3>
                      <p>
                        My websites are created with modern browsers and mobile devices in mind. They employ the latest HTML, CSS and Javascript techniques.
                      </p>
                    </div>

                    <div class="col-sm-12 col-sm-6 col-md-4 animated" data-orientation="fadeInUp">
                      <div class="customization"><div class="icon"><img src="img/services/customization.png" alt="customization"></div></div>
                      <h3>Customization</h3>
                      <p>
                        I provide some basics template style then we make any design your own. Personalize fonts, colors, and layouts to create the custom look you want.
                      </p>
                    </div>

                    <div class="col-sm-12 col-sm-6 col-md-4 animated" data-orientation="fadeInUp">
                      <div class="domains"><div class="icon"><img src="img/services/domain.png" alt="domain"></div></div>
                      <h3>Domains</h3>
                      <p>
                        You have an idea for your futur website name? I create for you a custom domain name and link it to your brand new website.
                      </p>
                    </div>
                    <div class="clearfix visible-md"></div>
                    <div class="col-sm-12 col-sm-6 col-md-4 animated" data-orientation="fadeInUp">
                      <div class="social"><div class="icon"><img src="img/services/social.png" alt="social"></div></div>
                      <h3>Social</h3>
                      <p>
                        Import. Sync. Publish. Make your website the center of your online identity on the web with powerful social integrations.
                      </p>
                    </div>

                    <div class="col-sm-12 col-sm-6 col-md-4 animated" data-orientation="fadeInUp">
                      <div class="seo"><div class="icon"><img src="img/services/seo.png" alt="seo"></div></div>
                      <h3>SEO</h3>
                      <p>
                        My websites are loved by search engines. They include clean article links, proper tagging, XML sitemaps, and valid XHTML code.
                      </p>
                    </div>

                    <div class="col-sm-12 col-sm-6 col-md-4 animated" data-orientation="fadeInUp">
                      <div class="analytics"><div class="icon"><img src="img/services/analytics.png" alt="analytics"></div></div>
                      <h3>Analytics</h3>
                      <p>
                        View the traffic and behavior of visitors in real-time. Learn where they're coming from, and what search keywords they are using to find you.
                      </p>
                    </div>
                    <div class="col-sm-12 col-sm-6 col-md-4 animated" data-orientation="fadeInUp">
                      <div class="hosting"><div class="icon"><img src="img/services/hosting.png" alt="hosting"></div></div>
                      <h3>Hosting</h3>
                      <p>
                        With my reliable and scalable cloud infrastructure provided by OVH, there's no downtime, and nothing to install, patch, or upgrade. Ever.
                      </p>
                    </div>

                    <div class="col-sm-12 col-sm-6 col-md-4 animated" data-orientation="fadeInUp">
                      <div class="support"><div class="icon"><img src="img/services/customer.png" alt="customer"></div></div>
                      <h3>Customer Service</h3>
                      <p>
                        Rest easy knowing that I'm ready to help you whenever you want. I'm an experienced user knowing how to explain things to people who doesn't really understand websites.
                      </p>
                    </div>

                    <div class="col-sm-12 col-sm-6 col-md-4 animated" data-orientation="fadeInUp">
                      <div class="more"><div class="icon"><img src="img/services/more.png" alt="more"></div></div>
                      <h3>More</h3>
                      <p>
                        You want something specific ? Get in touch with me and I'll do everything I can to help you.
                        <br />
                        <br />
                        <a class="scrollTo" href="#contact">Drop me a line</a>
                      </p>
                    </div>
                </div>
            </div>

            <div id="text-separator-timers">
                <div class="container">
                    <div class="col-xs-12 animated" data-orientation="fadeInUp">
                        <h2 class="part-title"><span class="thin">SOME </span>INTERESTING FACTS</h2>
                        <div class="separator"></div>                                      
                        <p class="thin">Each completed project makes me even more hungry, hungry for more designs, more code and at least some more happiness. As a result I deliver a better web experience.</p>
                    </div>                     
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-3 text-center timerWrapper animated" data-orientation="fadeIn">
                            <img src="img/facts/ideas.png" alt="ideas">
                            <h1>
                                <span class="timer1">0</span>
                            </h1>
                            <p>Ideas</p>
                        </div>

                        <div class="col-xs-6 col-sm-6 col-md-3 text-center timerWrapper animated" data-orientation="fadeIn">
                            <img src="img/facts/project.png" alt="ideas">
                            <h1>
                                <span class="timer2">0</span> +
                            </h1>
                            <p>Projects</p>
                        </div>


                        <div class=" col-xs-6 col-sm-6 col-md-3 text-center timerWrapper animated" data-orientation="fadeIn">
                            <img src="img/facts/coffee.png" alt="ideas">
                            <h1>
                                <span class="timer3">0</span>
                            </h1>
                            <p>Coffee consummed</p>
                        </div>

                        <div class="col-xs-6 col-sm-6 col-md-3 text-center timerWrapper animated" data-orientation="fadeIn">
                            <img src="img/facts/working.png" alt="ideas">
                            <h1>
                                <span class="timer4">0</span>
                            </h1>
                            <p>Working hours</p>
                        </div>
                    </div>
                </div>
            </div>

            <div id="prices">
                <div class="container">
                    <div class="col-xs-12">
                        <h2 class="part-title animated" data-orientation="fadeIn">Price <span class="thin">List</span></h2>
                        <div class="separator"></div>
                    </div>
                    <div class="price-box col-xs-12 col-sm-6 col-md-3">
                        <div class="price-box-content">
                            <div class="ribbon ribbon__left-top"><span>Delivered in 15 days</span></div>
                            <h3>Basic</h3>
                            <h4 class="prices-option">Included:</h4>
                            <ul>
                                <li>3 pages</li>
                                <li>Contact form</li>
                                <li>Search Engine Optimization</li>
                                <li class="not-included">Hosting not included * </li>                        
                            </ul>
                            <h4 class="prices-option">Options:</h4>
                            <ul>
                                <li>Animations</li>
                                <li>Responsive</li>
                                <li>Social media optimization</li>
                            </ul>

                            <div class="ribbon-st">
                                <h4>Starting at 900€</h4>
                            </div>
                        </div>
                    </div>
                    <div class="price-box col-xs-12 col-sm-6 col-md-3">
                        <div class="price-box-content">
                            <div class="ribbon ribbon__left-top"><span>Delivered in 30 days</span></div>
                            <h3>Standard</h3>
                            <h4 class="prices-option">Included:</h4>
                            <ul>
                                <li>6 pages and more</li>
                                <li>Contact form</li>
                                <li>Search Engine Optimization</li>
                                <li>Animations</li>
                                <li>UX-UI Custom desgin</li>
                                <li>Social media optimization</li>
                                <li class="not-included">Hosting not included * </li>                        
                            </ul>
                            <h4 class="prices-option">Options:</h4>
                            <ul>
                                <li>Responsive</li>
                                <li>Back office</li>
                                <li>Newsletter</li>
                            </ul>
                            <div class="ribbon-st">
                                <h4>Starting at 1500€</h4>
                            </div>
                        </div>
                    </div>
                    <div class="price-box col-xs-12 col-sm-6 col-md-3">
                        <div class="price-box-content">
                            <h3>Custom</h3>
                            <ul>
                                <li>E-shop</li>
                                <li>Blog</li>
                                <li>Personal project</li>
                                <li>Unique design</li>
                                <li>Specials ideas</li>
                                <li>...</li>
                                <h4><a class="scrollTo btn" href="#contact">Write me</a></h4>
                            </ul>
                        </div>
                    </div>
                    <div class="price-box col-xs-12 col-sm-6 col-md-3">
                        <div class="price-box-content">
                            <h3>Freelance</h3>
                            <ul class="freelance">
                                <li>HTML5 / Css - Sass - Scss</li>
                                <ul>
                                    <li class="active"></li>
                                    <li class="active"></li>
                                    <li class="active"></li>
                                    <li class="active"></li>
                                    <li class="active"></li>
                                </ul>
                                <li>Responsive Design</li>
                                <ul>
                                    <li class="active"></li>
                                    <li class="active"></li>
                                    <li class="active"></li>
                                    <li class="active"></li>
                                    <li class="active"></li>
                                </ul>
                                <li>Javascript - JQuery</li>
                                <ul>
                                    <li class="active"></li>
                                    <li class="active"></li>
                                    <li class="active"></li>
                                    <li class="active"></li>
                                    <li></li>
                                </ul>
                                <li>PHP</li>
                                <ul>
                                    <li class="active"></li>
                                    <li class="active"></li>
                                    <li class="active"></li>
                                    <li></li>
                                    <li></li>

                                </ul>

                                <div class="ribbon-st">
                                    <h4>300€/Day</h4>
                                </div>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 animated" data-orientation="fadeIn">
                        *: l'hebergement peut etre a la charge du client
                    </div>
                </div>
            </div>

            <div id="portfolio">
                <div class="container">
                    <div class="col-xs-12">
                        <h2 class="part-title animated" data-orientation="fadeIn"><span class="thin">my</span> portfolio </h2>
                        <div class="separator"></div>
                        <p class="thin">I design and build websites, applications, and mobile solutions.</p>
                        <p class="thin">Here is some of my favorites projects I worked on:</p>
                        <br/>
                    </div>
                </div>

                <div id="portfolio-block">
                    <div class="example">
                        
                        <figure class="item item-w2 item-h2 cotefoot animated" data-orientation="fadeIn">
                            <figcaption>
                                <div class="project-title"><span class="thin blue">ON A TOUS UN</span><br/>CÔTÉ FOOT</div>
                                <div class="project-button"><a href="https://www.onatousuncotefoot.fr" target="blank" class="btn">View it</a></div>
                            </figcaption>
                        </figure>
                        <figure class="item item-w1 item-h2 cafe-lomi animated" data-orientation="fadeIn">
                            <figcaption>
                                <div class="project-title"><span class="thin blue">Café Lomi</span><br/> Artisan torréfacteur</div>
                                <div class="project-button"><a href="http://cafelomi.com" target="blank" class="btn">View it</a></div>
                            </figcaption>
                        </figure>   
                        <figure class="item item-w2 item-h3 over-graph animated" data-orientation="fadeIn">
                            <figcaption>
                                <div class="project-title"><span class="thin blue">Over</span>-Graph</div>
                                <div class="project-button"><a href="http://over-graph.com" target="blank" class="btn">View it</a></div>
                            </figcaption>
                        </figure>                    
                        <figure class="item item-w1 item-h2 investor-group animated"  data-orientation="fadeIn">
                            <figcaption>
                                <div class="project-title"><span class="thin blue">Private client</span><br/> investor group</div>
                                <div class="project-button"><a href="#" class="btn">View it</a></div>
                            </figcaption>
                        </figure>
                        <figure class="item item-w2 item-h2 newrestaurants animated" data-orientation="fadeIn">
                            <figcaption>
                                <div class="project-title"><span class="thin blue">Canada's best new</span><br/>restaurants</div>
                                <div class="project-button"><a href="http://enroute.aircanada.com/canadas-best-new-restaurants-2014/" target="blank" class="btn">View it</a></div>
                            </figcaption>
                        </figure>
                        <figure class="item item-w2 item-h3 community animated" data-orientation="fadeIn">
                            <figcaption>
                                <div class="project-title"><span class="thin blue">Altitude</span> Community</div>
                                <div class="project-button"><a href="https://altitude-community.aircanada.com/" target="blank" class="btn">View it</a></div>
                            </figcaption>
                        </figure>
                        <figure class="item item-w2 item-h2 animated maison" data-orientation="fadeIn">
                            <figcaption>
                                <div class="project-title"><span class="thin blue">Maison</span> bord de mer</div>
                                <div class="project-button"><a href="http://maison-en-espagne.fr" target="blank" class="btn">View it</a></div>
                            </figcaption>
                        </figure>
                        <figure class="item item-w1 item-h3 animated chefseries" data-orientation="fadeIn">
                            <figcaption>
                                <div class="project-title"><span class="thin blue">Chef</span> Series</div>
                                <!-- <p>In partnership with GE Monogram, Air Canada's enRoute caught up with some of Canada's top chefs to chat about their love of food.</p> -->
                                <div class="project-button"><a href="http://enroute.aircanada.com/ge-chefseries" target="blank" class="btn">View it</a></div>
                            </figcaption>
                        </figure>
                        <figure class="item item-w2 item-h2 animated spafax"  data-orientation="fadeIn">
                            <figcaption>
                                <div class="project-title"><span class="thin blue">spafax</span> content on the go</div>
                                <p>At Spafax we create engaging and entertaining media products  and connect.</p>
                                <div class="project-button"><a href="http://spafax.com" target="blank" class="btn">View it</a></div>
                            </figcaption>
                        </figure>
                        <figure class="item item-w1 item-h3 animated filmfest14"  data-orientation="fadeIn">
                            <figcaption>
                                <div class="project-title"><span class="thin blue">enRoute film</span><br/>festival 2014</div>
                                <div class="project-button"><a href="http://enroute.aircanada.com/en/film-festival" target="blank" class="btn">View it</a></div>
                            </figcaption>
                        </figure>
                        <figure class="item item-w2 item-h2 animated gofar" data-orientation="fadeIn">
                            <figcaption>
                                <div class="project-title"><span class="thin blue">Air canada's blog</span> Go far</div>
                                <div class="project-button"><a href="http://gofar.aircanada.com" target="blank" class="btn">View it</a></div>
                            </figcaption>
                        </figure>   
                        <figure class="item item-w1 item-h2 animated filmfest12"  data-orientation="fadeIn">
                            <figcaption>
                                <div class="project-title"><span class="thin blue">enRoute film</span><br/>festival 2012</div>
                                <div class="project-button"><a href="http://enroute.aircanada.com/en/film-festival-2012" target="blank" class="btn">View it</a></div>
                            </figcaption>
                        </figure>   
                        <figure class="item item-w1 item-h2 animated claudemauffette"  data-orientation="fadeIn">
                            <figcaption>
                                <div class="project-title"><span class="thin blue">Industrial</span><br/> Designer</div>
                                <div class="project-button"><a href="http://claudemauffette.com" target="blank" class="btn">View it</a></div>
                            </figcaption>
                        </figure>                              
                    </div>
                </div>
            </div>

            <div id="clients">
                <div class="container">
                    <div class="col-xs-12">
                        <h2 class="part-title animated" data-orientation="fadeIn"><span class="thin">My</span> clients</h2>
                        <div class="separator"></div>
                    </div>

                    <div class="logo col-xs-12 col-sm-6 col-md-4 animated" data-orientation="fadeInLeft">
                       <a href="http://www.chevignon.com/" target="_blank"><img src="img/logos/chevignon.png" alt="Chevignon logo"></a>
                    </div>
                    <div class="logo col-xs-12 col-sm-6 col-md-4 animated" data-orientation="fadeInDown">
                       <a href="http://www.wedostudios.fr" target="_blank"><img src="img/logos/wedostudio.png" alt="wedo studio logo"></a>
                    </div>
                    <div class="logo col-xs-12 col-sm-6 col-md-4 animated" data-orientation="fadeInRight">
                       <a href="http://www.misterbingbang.com" target="_blank"><img src="img/logos/misterbigbang.png" alt="misterbigbang logo"></a>
                    </div>
                    <div class="logo col-xs-12 col-sm-6 col-md-4 animated" data-orientation="fadeInLeft">
                       <a href="http://www.adeliegestion.fr" target="_blank"><img src="img/logos/adelie.png" alt="adelie gestion logo"></a>
                    </div>
                    <div class="logo col-xs-12 col-sm-6 col-md-4 animated" data-orientation="fadeInDown">
                       <a href="http://over-graph.com" target="_blank"><img src="img/logos/over-graph.png" alt="over-graph logo"></a>
                    </div>
                    <div class="logo col-xs-12 col-sm-6 col-md-4 animated" data-orientation="fadeInRight">
                        <a href="http://909c.fr" target="_blank"><img src="img/logos/909c.png" alt="909c logo"></a>
                    </div>
                    <div class="logo col-xs-12 col-sm-6 col-md-4 animated" data-orientation="fadeInLeft">
                        <a href="http://spafax.com" target="_blank"><img src="img/logos/spafax.png" alt="Spafax logo"></a>
                    </div>
                    <div class="logo col-xs-12 col-sm-6 col-md-4 animated" data-orientation="fadeInDown">
                        <a href="http://enroute.aircanada.com" target="_blank"><img src="img/logos/enroute.png" alt="enRoute logo"></a>
                    </div>
                    <div class="logo col-xs-12 col-sm-6 col-md-4 animated" data-orientation="fadeInRight">
                        <a href="http://bombardier.com" target="_blank"><img src="img/logos/bombardier.png" alt="Bombardier logo"></a>
                    </div>

                    <div class="more-clients">
                        <div class="logo col-xs-12 col-sm-6 col-md-4 animated" data-orientation="fadeInLeft">
                            <a href="http://enroute.aircanada.com/ge-chefseries/" target="_blank"><img src="img/logos/monogram.png" alt="Ge Monogram logo"></a>
                        </div>
                        <div class="logo col-xs-12 col-sm-6 col-md-4 animated" data-orientation="fadeInDown">
                            <a href="http://apex.aero/" target="_blank"><img src="img/logos/apex.png" alt="APEX logo"></a>
                        </div>
                        <div class="logo col-xs-12 col-sm-6 col-md-4 animated" data-orientation="fadeInRight">
                            <a href="http://claudemauffette.com" target="_blank"><img src="img/logos/mauffette.png" alt="Claude Mauffette logo"></a>
                        </div>
                        <div class="logo col-xs-12 animated" data-orientation="fadeInLeft">
                            <a href="http://maison-en-espagne.fr" target="_blank"><img src="img/logos/maison.png" alt="Maison en espagne logo"></a>
                        </div>
                    </div>

                    <div class="logo col-xs-12 animated" data-orientation="fadeIn">
                        <a class="btn show-more-clients">show more</a>
                    </div>
                
                </div>
            </div>

            <div id="aboutme">
                <div class="container">
                    <div class="col-xs-12">
                        <h2 class="part-title animated" data-orientation="fadeIn">About <span class="thin">me</span></h2>
                        <div class="separator"></div>
                    </div>
                    <div class="col-xs-12">
                        <!-- The Timeline -->
                        <div class="logo-timeline">
                            <img src="img/logo-signature.png" class="logo" alt="Logo Hello-Users">
                        </div>
                        <ul class="timeline">
                            
                            <li class="date 2015"><span>2015</span></li>

                            <!-- Item 1 -->
                            <li>
                                <div class="direction-r">
                                    <div class="flag-wrapper">
                                        <span class="flag">Freelancer</span>
                                        <span class="time-wrapper"><span class="time">Paris</span></span>
                                    </div>
                                    <div class="desc">November 2015 - present I created HELLO USERS ! and I work for it since </div>
                                </div>
                            </li>
                          
                            <!-- Item 2 -->
                            <li>
                                <div class="direction-l">
                                    <div class="flag-wrapper">
                                        <span class="flag">909c</span>
                                        <span class="time-wrapper"><span class="time">September - Novembre 2015</span></span>
                                    </div>
                                    <div class="desc">909c, agence Social Media, conçoit et met en place des stratégies de communication de Marque dans une logique d'innovation et de performance autour des différentes API des réseaux sociaux. </div>
                                </div>
                            </li>

                            <!-- Item 3 -->
                            <li>
                                <div class="direction-r">
                                    <div class="flag-wrapper">
                                        <span class="flag">OVER-GRAPH</span>
                                        <span class="time-wrapper"><span class="time">April - September 2015</span></span>
                                    </div>
                                    <div class="desc">Over-Graph is a Social Media Marketing Solution, created to help and ease community management. Publish content to your Facebook & Twitter communities. Respond to your communities' interactions. Analyze your SocialProfiles' activity and find who's the most engage with your content.</div>
                                </div>
                            </li>

                            <li class="date 2014"><span>2014</span></li>

                            <!-- Item 4 -->
                            <li class="2014">
                                <div class="direction-l">
                                    <div class="flag-wrapper">
                                        <span class="flag">SPAFAX</span>
                                        <span class="time-wrapper"><span class="time">April 2014 - February 2015</span></span>
                                    </div>
                                    <div class="desc">Spafax create engaging and entertaining media products across all channels that help brands and customers converse and connect. Spafax is specialize in marketing, entertaining and communicating with the global transumer — the consumer in transit.</div>
                                </div>
                            </li>
                            <!-- Item 3 -->

                            <li class="2014">
                                <div class="direction-r">
                                    <div class="flag-wrapper">
                                        <span class="flag">Master 2</span>
                                        <span class="time-wrapper"><span class="time">April - February 2015</span></span>
                                    </div>
                                    <div class="desc">A description of all the lectures and courses I have taken and my final degree?</div>
                                </div>
                            </li>
                            <!-- Item 3 -->
                            <li class="2014">
                                <div class="direction-r">
                                    <div class="flag-wrapper">
                                        <span class="flag">SPAFAX</span>
                                        <span class="time-wrapper"><span class="time"> - February 2015</span></span>
                                    </div>
                                    <div class="desc">A description of all the lectures and courses I have taken and my final degree?</div>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>


            <div id="contact-button">
                <div class="container">
                    <div class="col-xs-12 col-sm-6">
                        <a href="documents/StanislasKerneCV2015-FR.pdf" target="_blank" class="btn">Download my resume</a>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <a href="mailto:stan.kerne@gmail.com?Subject=Hello,%20do%20you%20want%20to%20work%20for%20me?" class="btn">Hire me</a>
                    </div>
                </div>
            </div>   
            
            <div id="contact">
                <div class='bg-contact'></div>
                <div class="container">

                    <div class="col-xs-12">
                        <h2 class="part-title animated" data-orientation="fadeIn">Contact</h2>
                        <div class="separator"></div>
                        <h3 class="thin animated" data-orientation="fadeIn">Get in touch with me!</h3>
                    </div>
                    <div class="col-sm-6 animated" data-orientation="fadeInUp">
                        <h4>GET STARTED</h4>
                        <p class="contact-info-intro">If you have a project you would like to talk to me about, drop me a line. I'll be happy to answer you as quick as possible.</p>
                        <div class="contact-info">
                            <div class="header"><p>Drop me a line.</p></div>
                            <div class="method">
                                <div class="label">P</div>
                                <div class="details">+33 7 63 43 67 98</div>
                            </div>
                            <div class="method">
                                <div class="label">E</div>
                                <div class="details"><a href="#" target="_blank">stan.kerne@me.com</a></div>
                            </div>
                            <div class="method">
                                <div class="label">A</div>
                                <div class="details">45&nbsp;rue&nbsp;Boussingault<br>75013 Paris<br>FRANCE</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 animated form" data-orientation="fadeInUp">
                        <?php
                            $erreur=0;
                            if (isset($_POST["auteur"]))
                            {
                                if ($_POST['auteur']!="" && $_POST['email']!="" && $_POST['question']!="" )
                                {
                                    $objet = " Hello users ! Message. De la part de ".$_POST['auteur'];
                                    $contenu = $_POST['question'];
                                    $header = "Coucou Stan!\n \n".$_POST['auteur']." t'as envoye un mail pour le developpment d'un site! \n \n Son email est ".$_POST['email']." \n Son telephone est ".$_POST['phone']."\n \n ATTENTION, ce mail est automatique donc ni repond pas directement. \n \n Voici son message: \n";
                                    mail('stan.kerne@gmail.com', stripslashes($objet), stripslashes ($contenu), stripslashes ( htmlspecialchars ($header)));
                                    $erreur = 2;
                                }
                                else{$erreur = 1;}
                            }
                        ?> 
                        <form name="question" method="post">
                            <label>Full Name <span class="blue">*</span></label>
                            <input name="auteur" type="text" required>

                            <label>Email <span class="blue">*</span></label>
                            <input name="email" type="email" required>
                            
                            <label>Phone</label>
                            <input name="phone" type="tel" pattern="^((\+\d{1,3}(-| )?\(?\d\)?(-| )?\d{1,5})|(\(?\d{2,6}\)?))(-| )?(\d{3,4})(-| )?(\d{4})(( x| ext)\d{1,5}){0,1}$">

                            <label>Message <span class="blue">*</span></label>
                            <textarea name="question" rows="10" cols="50" required></textarea>
         
                            <input type="reset" name="Reset" class="btn" value="Clear">          
                            <input type="submit" name="envoi" class="btn" value="Send">
                        </form>
                    </div>
                </div>
                <footer>
                    <img src="img/assets/logo.png" class="logo" alt="Logo Hello-Users">
                    <p>HELLO <span class="blue">USERS</span> <span class="thin">!</span></p>
                    <a href="https://www.linkedin.com/profile/view?id=302779683" target="blank"><img src="img/footer/linkedin.png" alt="linkedin"></a>
                    <a href="https://www.facebook.com/hell0.users/" target="blank"><img src="img/footer/facebook.png" alt="facebook"></a>
                    <a href="https://plus.google.com/112960872940467893500" target="blank"><img src="img/footer/googleplus.png" alt="googleplus"></a>
                    <a href="https://github.com/Stankerne/hello-users" target="blank"><img src="img/footer/github.png" alt="github"></a>
                    <a href="http://validator.w3.org/check?uri=http%3A%2F%2Fhello-users.com%2F" target="blank"><img src="img/footer/w3c.png" alt="w3c"></a>

                    <br/>

                    <div class="fb-like" data-href="https://www.facebook.com/hell0.users/" data-layout="button_count" data-show-faces="false"></div>
                        &nbsp;
                    <div class="fb-share-button" data-href="http://hello-users.com" data-layout="button"></div>

                    <p>Designed & Developed by Stanislas Kerné with ♡ <br/>| &nbsp;&nbsp; All Rights Reserved © 2016 &nbsp;&nbsp; |</p>
                    </footer>
                </footer>
            </div>
             <?php
                if ($erreur == 1)
                {
                    echo "<div id='error'><p> <strong>Ouups! </strong> <br/> Please, verify fields...</p></div>";
                }
                elseif ($erreur==2)
                {
                    echo "<div id='success'><p><strong>Thank you!</strong> <br/> Your message has been sent.</strong></p></div>";
                }
            ?>                 
        </div>


        <script type="text/javascript">
            // Analytics
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})
            (window,document,'script','//www.google-analytics.com/analytics.js','ga');
            ga('create', 'UA-60570212-1', 'auto');
            ga('send', 'pageview');
        </script>
        <script src="js/main.js"></script>
        <script src="js/TweenLite.min.js"></script>
        <script src="js/EasePack.min.js"></script>
        <script src="js/animatedCursor.js"></script>
    </body>
</html>