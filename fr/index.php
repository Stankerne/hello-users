<!DOCTYPE html>
<html>
    <head>
        <title>Hello users !</title>
        <meta name="description" content="Web development & creative design">
        <meta property="og:title" content="Hello users !" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="http://www.hello-users.com" />
        <meta property="og:image" content="http://hello-users.com/img/backgrounds/bg-social.png" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
        <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../css/style.css" />
        <link rel="stylesheet" type="text/css" href="../css/animate.css" />
        <script src="../js/jquery.min.js"></script> 
        <script src="../js/waypoint.js"></script>
        <script src="../js/stellar.min.js"></script>
        <script src="../js/owl.carousel.min.js"></script>
        <script src="../js/wow.min.js"></script>
        <script src="../js/isotope.js"></script>
    </head>
    <body>
        <a id="hamburger-icon" title="Menu">
          <span class="line line-1"></span>
          <span class="line line-2"></span>
          <span class="line line-3"></span>
        </a>

        <div class="menu fullpage">
            <div class="container">
                <ul class="categories">
                    <li id="menu-home"><a class="is-active scrollTo" href="#intro"><span class="text">Accueil</span></a></li>
                    <li id="menu-services"><a class="scrollTo" href="#welcome"><span class="text">Services</span></a></li>
                    <li id="menu-portfolio"><a class="scrollTo" href="#portfolio"><span class="text">Portfolio</span></a></li>
                    <li id="menu-clients"><a class="scrollTo" href="#clients"><span class="text">Clients</span></a></li>
                    <li id="menu-about"><a class="scrollTo" href="#aboutme"><span class="text">À PROPOS</span></a></li>
                    <li id="menu-contact"><a class="scrollTo" href="#contact"><span class="text">Contact</span></a></li>
                </ul>
                <ul class="lang">
                    <li class="fr"><a href="/fr/">FR</a></li>
                    <li>|</li>
                    <li class="en"><a href="../">EN</a></li>
                </ul>
            </div>
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
                    <h1>Hello</h1>
                    <ul>
                      <li>world <span class="white">!</span></li>
                      <li>users <span class="white">!</span></li>
                      <li>you <span class="white">!</span></li>
                    </ul>
                </div>
                <div id="intro-text">
                    <div class="separator"></div>
                    <div class="main-title-text thin">DÉVELOPPEMENT WEB <span class="blue">&</span> DESIGN CRÉATIF</div>
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
                    <!--<div id="bg-wood"><img src=" ../img/wood.jpg" class="wood-background" data-stellar-ratio="0.3" alt="Wood background"></div> -->
                </div>
            </div>
            <div id="services-choices">
                <div id="owl" class="owl-carousel owl-theme">
                    <div class="item active">
                        <a id="overview-icn" class="scrollTo" data-part="overview" href="#services-choices" onclick="return true">
                            <img src=" ../img/services/overview.png" class="services-icn not-active" alt="overview icn" style="display:none;">
                            <img src=" ../img/services/overview-select.png" class="services-icn active" alt="overview icn" style="display:inline;">
                            <br/>Overview
                        </a>
                    </div>
                    <div class="item">
                        <a id="shops-icn" class="scrollTo" data-part="shops" href="#services-choices" onclick="return true">    
                            <img src=" ../img/services/shop.png" class="services-icn not-active" alt="shop icn">
                            <img src=" ../img/services/shop-select.png" class="services-icn active" alt="shop icn">
                            <br/>shops
                        </a>
                    </div>
                    <div class="item">
                        <a id="photographers-icn" class="scrollTo" data-part="photographers" href="#services-choices" onclick="return true">
                            <img src=" ../img/services/photographer.png" class="services-icn not-active" alt="photographers icn">
                            <img src=" ../img/services/photographer-select.png" class="services-icn active" alt="photographers icn">
                            <br/>Photographers
                        </a>
                    </div>
                    <div class="item">
                        <a id="bloggers-icn" class="scrollTo" data-part="bloggers" href="#services-choices">
                            <img src=" ../img/services/blog.png" class="services-icn not-active" alt="boggers icn">
                            <img src=" ../img/services/blog-select.png" class="services-icn active" alt="boggers icn">
                            <br/>Bloggers
                        </a>
                    </div>
                    <div class="item">
                        <a id="artists-icn" class="scrollTo" data-part="artists" href="#services-choices">
                            <img src=" ../img/services/artist.png" class="services-icn not-active" alt="artists icn">
                            <img src=" ../img/services/artist-select.png" class="services-icn active" alt="artists icn">
                            <br/>Artists
                        </a>
                    </div>
                    <div class="item">
                        <a id="restaurants-icn" class="scrollTo" data-part="restaurants" href="#services-choices">
                            <img src=" ../img/services/restaurant.png" class="services-icn not-active" alt="restaurants icn">
                            <img src=" ../img/services/restaurant-select.png" class="services-icn active" alt="restaurants icn">
                            <br/>Restaurants
                        </a>
                    </div>
                    <div class="item">
                        <a id="musicians-icn" class="scrollTo" data-part="musicians" href="#services-choices">
                            <img src=" ../img/services/musician.png" class="services-icn not-active" alt="musicians icn">
                            <img src=" ../img/services/musician-select.png" class="services-icn active" alt="musicians icn">
                            <br/>Musicians
                        </a>
                    </div>
                    <div class="item">
                        <a id="weddings-icn" class="scrollTo" data-part="weddings" href="#services-choices">
                            <img src=" ../img/services/wedding.png" class="services-icn not-active" alt="weddings icn">
                            <img src=" ../img/services/wedding-select.png" class="services-icn active" alt="weddings icn">
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
                            <img id="bg-overview" src=" ../img/backgrounds/bg-overview.jpg" class="service-background" data-stellar-ratio="0.5" alt="Overview background">
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
                            <img id="bg-shops" src=" ../img/backgrounds/bg-shops.jpg" class="service-background" data-stellar-ratio="0.5" alt="Shops background">
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
                            <img id="bg-photographers" src=" ../img/backgrounds/bg-photographers.jpg" class="service-background" data-stellar-ratio="0.5" alt="Photographers background">
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
                           <img id="bg-bloggers" src=" ../img/backgrounds/bg-bloggers.jpg" class="service-background" data-stellar-ratio="0.5" alt="Photographers background">
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
                            <img id="bg-artists" src=" ../img/backgrounds/bg-artists.jpg" class="service-background" data-stellar-ratio="0.5" alt="Artists background">
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
                            <img id="bg-restaurants" src=" ../img/backgrounds/bg-restaurants.jpg" class="service-background" data-stellar-ratio="0.5" alt="Restaurants background">
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
                            <img id="bg-musicians" src=" ../img/backgrounds/bg-musicians.jpg" class="service-background" data-stellar-ratio="0.5" alt="Musicians background">
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
                            <img id="bg-weddings" src=" ../img/backgrounds/bg-weddings.jpg" class="service-background" data-stellar-ratio="0.5" alt="Musicians background">
                        </div>
                    </div>
                </div>        
            </div>
            
            <div id="services-details">
                <div class="container">
                    <div class="col-sm-12 col-sm-6 col-md-4 animated" data-orientation="fadeInUp">
                      <div class="templates"><div class="icon"><img src=" ../img/services/template.png" alt="template"></div></div>
                      <h3>Templates</h3>
                      <p>
                        My websites are created with modern browsers and mobile devices in mind. They employ the latest HTML, CSS and Javascript techniques.
                      </p>
                    </div>

                    <div class="col-sm-12 col-sm-6 col-md-4 animated" data-orientation="fadeInUp">
                      <div class="customization"><div class="icon"><img src=" ../img/services/customization.png" alt="customization"></div></div>
                      <h3>Customization</h3>
                      <p>
                        I provide some basics template style then we make any design your own. Personalize fonts, colors, and layouts to create the custom look you want.
                      </p>
                    </div>

                    <div class="col-sm-12 col-sm-6 col-md-4 animated" data-orientation="fadeInUp">
                      <div class="domains"><div class="icon"><img src=" ../img/services/domain.png" alt="domain"></div></div>
                      <h3>Domains</h3>
                      <p>
                        You have an idea for your futur website name? I create for you a custom domain name and link it to your brand new website.
                      </p>
                    </div>
                    <div class="clearfix visible-md"></div>
                    <div class="col-sm-12 col-sm-6 col-md-4 animated" data-orientation="fadeInUp">
                      <div class="social"><div class="icon"><img src=" ../img/services/social.png" alt="social"></div></div>
                      <h3>Social</h3>
                      <p>
                        Import. Sync. Publish. Make your website the center of your online identity on the web with powerful social integrations.
                      </p>
                    </div>

                    <div class="col-sm-12 col-sm-6 col-md-4 animated" data-orientation="fadeInUp">
                      <div class="seo"><div class="icon"><img src=" ../img/services/seo.png" alt="seo"></div></div>
                      <h3>SEO</h3>
                      <p>
                        My websites are loved by search engines. They include clean article links, proper tagging, XML sitemaps, and valid XHTML code.
                      </p>
                    </div>

                    <div class="col-sm-12 col-sm-6 col-md-4 animated" data-orientation="fadeInUp">
                      <div class="analytics"><div class="icon"><img src=" ../img/services/analytics.png" alt="analytics"></div></div>
                      <h3>Analytics</h3>
                      <p>
                        View the traffic and behavior of visitors in real-time. Learn where they're coming from, and what search keywords they are using to find you.
                      </p>
                    </div>
                    <div class="col-sm-12 col-sm-6 col-md-4 animated" data-orientation="fadeInUp">
                      <div class="hosting"><div class="icon"><img src=" ../img/services/hosting.png" alt="hosting"></div></div>
                      <h3>Hosting</h3>
                      <p>
                        With my reliable and scalable cloud infrastructure provided by OVH, there's no downtime, and nothing to install, patch, or upgrade. Ever.
                      </p>
                    </div>

                    <div class="col-sm-12 col-sm-6 col-md-4 animated" data-orientation="fadeInUp">
                      <div class="support"><div class="icon"><img src=" ../img/services/customer.png" alt="customer"></div></div>
                      <h3>Customer Service</h3>
                      <p>
                        Rest easy knowing that I'm ready to help you whenever you want. I'm an experienced user knowing how to explain things to people who doesn't really understand websites.
                      </p>
                    </div>

                    <div class="col-sm-12 col-sm-6 col-md-4 animated" data-orientation="fadeInUp">
                      <div class="more"><div class="icon"><img src=" ../img/services/more.png" alt="more"></div></div>
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
                        <div class="col-xs-12 col-sm-6 col-md-3 text-center timerWrapper animated" data-orientation="fadeIn">
                            <img src=" ../img/facts/ideas.png" alt="ideas">
                            <h1>
                                <span class="timer1">0</span>
                            </h1>
                            <p>Ideas</p>
                        </div>

                        <div class="col-md-3 col-sm-6 col-xs-12 text-center timerWrapper animated" data-orientation="fadeIn">
                            <img src=" ../img/facts/project.png" alt="ideas">
                            <h1>
                                <span class="timer2">0</span> +
                            </h1>
                            <p>Projects</p>
                        </div>


                        <div class="col-md-3 col-sm-6 col-xs-12 text-center timerWrapper animated" data-orientation="fadeIn">
                            <img src=" ../img/facts/coffee.png" alt="ideas">
                            <h1>
                                <span class="timer3">0</span>
                            </h1>
                            <p>Coffee consummed</p>
                        </div>

                        <div class="col-md-3 col-sm-6 col-xs-12 text-center timerWrapper animated" data-orientation="fadeIn">
                            <img src=" ../img/facts/working.png" alt="ideas">
                            <h1>
                                <span class="timer4">0</span>
                            </h1>
                            <p>Working hours</p>
                        </div>
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
                        <figure class="item item-w2 item-h3 community animated" data-orientation="fadeIn">
                            <figcaption>
                                <div class="project-title"><span class="thin blue">Altitude</span> Community</div>
                                <p>Share your world. Make connections. Gain Altitude.</p>
                                <div class="project-button"><a href="https://altitude-community.aircanada.com/" target="blank" class="btn">View it</a></div>
                            </figcaption>
                        </figure>
                        <figure class="item item-w1 item-h2 investor-group animated"  data-orientation="fadeIn">
                            <figcaption>
                                <div class="project-title"><span class="thin blue">Private client</span><br/> investor group</div>
                                <div class="project-button"><a href="#" class="btn">View it</a></div>
                            </figcaption>
                        </figure>
                        <figure class="item item-w2 item-h3 newrestaurants animated" data-orientation="fadeIn">
                            <figcaption>
                                <div class="project-title"><span class="thin blue">Canada's best new</span><br/>restaurants</div>
                                <div class="project-button"><a href="http://enroute.aircanada.com/canadas-best-new-restaurants-2014/" target="blank" class="btn">View it</a></div>
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
                        <figure class="item item-w1 item-h2 animated filmfest14"  data-orientation="fadeIn">
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
                                <div class="project-title"><span class="thin blue">Industrial</span> Designer</div>
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
                       <a href="http://over-graph.com" target="_blank"><img src=" ../img/logos/over-graph.png" alt="over-graph logo"></a>
                    </div>
                    <div class="logo col-xs-12 col-sm-6 col-md-4 animated" data-orientation="fadeInDown">
                        <a href="http://909c.fr" target="_blank"><img src=" ../img/logos/909c.png" alt="909c logo"></a>
                    </div>
                    <div class="logo col-xs-12 col-sm-6 col-md-4 animated" data-orientation="fadeInRight">
                        <a href="http://spafax.com" target="_blank"><img src=" ../img/logos/spafax.png" alt="Spafax logo"></a>
                    </div>
                    <div class="logo col-xs-12 col-sm-6 col-md-4 animated" data-orientation="fadeInLeft">
                        <a href="http://enroute.aircanada.com" target="_blank"><img src=" ../img/logos/enroute.png" alt="enRoute logo"></a>
                    </div>
                    <div class="logo col-xs-12 col-sm-6 col-md-4 animated" data-orientation="fadeInDown">
                        <a href="http://bombardier.com" target="_blank"><img src=" ../img/logos/bombardier.png" alt="Bombardier logo"></a>
                    </div>
                    <div class="logo col-xs-12 col-sm-6 col-md-4 animated" data-orientation="fadeInRight">
                        <a href="http://enroute.aircanada.com/ge-chefseries/" target="_blank"><img src=" ../img/logos/monogram.png" alt="Ge Monogram logo"></a>
                    </div>
                    <div class="logo col-xs-12 col-sm-6 col-md-4 animated" data-orientation="fadeInLeft">
                        <a href="http://apex.aero/" target="_blank"><img src=" ../img/logos/apex.png" alt="APEX logo"></a>
                    </div>
                    <div class="logo col-xs-12 col-sm-6 col-md-4 animated" data-orientation="fadeInDown">
                        <a href="http://claudemauffette.com" target="_blank"><img src=" ../img/logos/mauffette.png" alt="Claude Mauffette logo"></a>
                    </div>
                    <div class="logo col-xs-12 col-sm-6 col-md-4 animated" data-orientation="fadeInRight">
                        <a href="http://maison-en-espagne.fr" target="_blank"><img src=" ../img/logos/maison.png" alt="Maison en espagne logo"></a>
                    </div>
                </div>
            </div>

            <div id="aboutme">
                <div class="container">
                    <div class="col-xs-12">
                        <h2 class="part-title animated" data-orientation="fadeIn">About <span class="thin">me</span></h2>
                        <div class="separator"></div>
                    </div>
                    <div class="col-xs-12 animated" data-orientation="fadeInUp">
                        <p>
                            My name is Stan, I come from Le Havre in Normandy, France.
                            I studied at SUPINFO Institute of Information Technology. My school, initially only French, delivers a qualification certified by the French State at the highest level, I (level: Bac+5, Engineer, Master). SUPINFO is a worldwide IT school, leader in France, which can be found on many SUPINFO International University campuses throughout the world (France, Canada, the United Kingdom, Morocco, the United States, China, etc.).
                        </p>
                        <p>Every student can benefit from the possibility of mobility offered by the international network.</p>
                        <p>
                            That why I lived in Caen for my first study year. I completed my second and third year in Montreal then, I moved to China for one year. I finished my last school year at Montreal. I just came back to France and I'm now looking for jobs in Paris.
                        </p>
                    </div>
                </div>
            </div>

            <div id="cities">
                <ul class="ch-grid animated" data-orientation="fadeInUp">
                    <li>
                        <div class="ch-item">   
                            <div class="ch-info lh">
                                <h3>Le Havre</h3>
                                <p>Where I<br>come<br>from</p>
                            </div>
                            <div class="ch-thumb lh" onclick="return true"></div>
                        </div>
                    </li>
                    <li>
                        <div class="ch-item">   
                            <div class="ch-info caen">
                                <h3>Caen</h3>
                                <p>2009<br>↓<br>2010</p>
                            </div>
                            <div class="ch-thumb caen" onclick="return true"></div>
                        </div>
                    </li>                    <li>
                        <div class="ch-item">
                            <div class="ch-info mtl0">
                                <h3>Montréal</h3>
                                <p>2010<br>↓<br>2012</p>
                            </div>
                            <div class="ch-thumb mtl0" onclick="return true"></div>
                        </div>
                    </li>
                    <li>
                        <div class="ch-item">
                            <div class="ch-info tianjin">
                                <h3>Tianjin</h3>
                                <p>2012<br>↓<br>2013</p>
                            </div>
                            <div class="ch-thumb tianjin" onclick="return true"></div>
                        </div>
                    </li>
                    <li>
                        <div class="ch-item">
                            <div class="ch-info mtl1">
                                <h3>Montréal</h3>
                                <p>2013<br>↓<br>2015</p> <!--<a href="#">Link to ...</a> -->
                            </div>
                            <div class="ch-thumb mtl1" onclick="return true"></div>
                        </div>
                    </li>
                    <li>
                        <div class="ch-item">   
                            <div class="ch-info paris">
                                <h3>Paris</h3>
                                <p>2015<br>↓<br>...</p>
                            </div>
                            <div class="ch-thumb paris" onclick="return true"></div>
                        </div>
                    </li>                
                </ul>
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
                <div class="container">
                    <!-- particles.js container -->
                    <div id="particles-js"></div>

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
                                <div class="details">97 rue Manin<br>75019 Paris<br>FRANCE</div>
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
                    <img src=" ../img/logo.png" class="logo" alt="Logo Hello-Users">
                    <p>HELLO <span class="blue">USERS</span> | All Rights Reserved © 2015</p>
                    <a href="https://www.linkedin.com/profile/view?id=302779683" target="blank"><img src=" ../img/footer/linkedin.png" alt="linkedin"></a>
                    <a href="https://www.facebook.com/pages/Hello-users/1569401276676593" target="blank"><img src=" ../img/footer/facebook.png" alt="facebook"></a>
                    <a href="https://plus.google.com/112960872940467893500" target="blank"><img src=" ../img/footer/googleplus.png" alt="googleplus"></a>
                    <a href="https://github.com/Stankerne" target="blank"><img src=" ../img/footer/github.png" alt="github"></a>
                    <a href="http://validator.w3.org/check?uri=http%3A%2F%2Fhello-users.com%2F" target="blank"><img src=" ../img/footer/w3c.png" alt="w3c"></a>
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
            $( document ).ready(function() {
            });

            // Analytics
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})
            (window,document,'script','//www.google-analytics.com/analytics.js','ga');
            ga('create', 'UA-60570212-1', 'auto');
            ga('send', 'pageview');

        </script>
        <script src="../js/main.js"></script>
        <script src="../js/TweenLite.min.js"></script>
        <script src="../js/EasePack.min.js"></script>
        <script src="../js/animatedCursor.js"></script>
        <script src="../js/device.min.js"></script>
        <script src="../js/cssBrowser.js"></script>
    </body>
</html>