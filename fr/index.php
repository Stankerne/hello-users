<!DOCTYPE html>
<html>
    <head>
        <title>Hello users ! Développement web & design créatif </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="Content-Language" content="fr">
        <meta name="Description" content="Hey je suis Stan, un développeur web junior en freelance qui vous offre la possibilité de développer votre site web complet, personnalisé, référencé, hébergé et plus.">
        <meta name="Subject" content="Web developement & creative design ">
        <meta name="Copyright" content="Stanislas kerné">
        <meta name="Author" content="Stanislas Kerné">
        <meta name="Publisher" content="Stanislas Kerné">
        <meta property="og:title" content="HELLO USERS !" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="http://hello-users.com/fr/" />
        <meta property="og:image" content="http://hello-users.com/img/assets/og-image.png" />
        <meta property="fb:admins" content="604567118"/>
        <meta property="fb:app_id" content="1648843565390239"/>
        <meta property="og:description" content="Hey there! Je suis un développeur web junior en freelance qui vous offre la possibilité de développer votre site web complet, personnalisé, référencé, hébergé et plus. Cliquez moi pour en savoir plus!" /> 
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
    <?php /*
$lc = ""; 
if(isset($_SERVER['HTTP_ACCEPT_LANGUAGE'])){
    $lc = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
}
// Now we simply evaluate that variable to detect specific languages
if($lc == "fr"){
    echo "France";
    // header("location: index_french.php");
    // exit();
} else if($lc == "de"){
    echo "anglais";
    // header("location: index_german.php");
    // exit();
}
*/
?>
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
             js.src = "//connect.facebook.net/fr_FR/sdk.js";
             fjs.parentNode.insertBefore(js, fjs);
           }(document, 'script', 'facebook-jssdk'));
        </script>
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
                    <li id="menu-portfolio"><a class="scrollTo" href="#prices"><span class="text">Tarifs</span></a></li>
                    <li id="menu-portfolio"><a class="scrollTo" href="#portfolio"><span class="text">Portfolio</span></a></li>
                    <li id="menu-clients"><a class="scrollTo" href="#clients"><span class="text">Clients</span></a></li>
                    <li id="menu-about"><a class="scrollTo" href="#aboutme"><span class="text">À propos</span></a></li>
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
                        <h2><span class="blue thin">Obtenez votre</span> site web</h2>
                        <br/><br/>

                        <p class="thin">Je suis un développeur web junior en freelance qui vous offre la possibilité de développer votre site web complet, personnalisé, référencé, hébergé et plus.</p>
                        <br/>
                        <p class="thin">
                            Vous avez déjà un site web que vous voulez remettre au goût du jour ?
                            <br/>
                            Je peux aussi vous accompagner dans le développement d'évolutions et la refonte intégrale ou partielle de votre site.
                        </p>
                    </div>
                </div>
            </div>
            <div id="services-choices">
                <div id="owl" class="owl-carousel owl-theme">
                    <div class="item active">
                        <a id="overview-icn" class="scrollTo" data-part="overview" href="#services-choices" onclick="return true">
                            <img src=" ../img/services/overview.png" class="services-icn not-active" alt="overview icn" style="display:none;">
                            <img src=" ../img/services/overview-select.png" class="services-icn active" alt="overview icn" style="display:inline;">
                            <br/>Globalement
                        </a>
                    </div>
                    <div class="item">
                        <a id="shops-icn" class="scrollTo" data-part="shops" href="#services-choices" onclick="return true">    
                            <img src=" ../img/services/shop.png" class="services-icn not-active" alt="shop icn">
                            <img src=" ../img/services/shop-select.png" class="services-icn active" alt="shop icn">
                            <br/>Boutiques
                        </a>
                    </div>
                    <div class="item">
                        <a id="photographers-icn" class="scrollTo" data-part="photographers" href="#services-choices" onclick="return true">
                            <img src=" ../img/services/photographer.png" class="services-icn not-active" alt="photographers icn">
                            <img src=" ../img/services/photographer-select.png" class="services-icn active" alt="photographers icn">
                            <br/>Photographes
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
                            <br/>Artistes
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
                            <br/>Musiciens
                        </a>
                    </div>
                    <div class="item">
                        <a id="weddings-icn" class="scrollTo" data-part="weddings" href="#services-choices">
                            <img src=" ../img/services/wedding.png" class="services-icn not-active" alt="weddings icn">
                            <img src=" ../img/services/wedding-select.png" class="services-icn active" alt="weddings icn">
                            <br/>Mariages
                        </a>
                    </div>
                </div>
            </div>
            <div id="services-header">

                <div id="overview" class="service-slider active">
                    <div class="container">
                        <div class="col-xs-12 animated bg-dark" data-orientation="fadeIn">
                            <h2 class="animated" data-orientation="fadeIn"><span class="blue thin">tout ce dont</span> vous avez besoin</h2>
                            <p class="animated" data-orientation="fadeIn thin">Que vous ayez besoin d'une simple page, d'une galerie d'images, d'un site vitrine, d'une boutique en ligne ou d'un blog, tout est possible. J'étudie vos besoins et vous conseille les meilleures solutions à mettre en place pour la réussite de votre projet.</p>
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
                            <p class="animated" data-orientation="fadeIn thin">

                            Il y a beaucoup de manières différentes pour faire la promotion et la publicité de votre boutique sur le web. 
                            Les sites mais aussi les comptes et pages sociales sont importants. 
                            Sélectionnons ensemble celle que vous souhaitez et commencez votre marketing sur internet maintenant.

                            Les sites sont tous différents, qu'ils soient des e-commerce

                            Que 

                            </p>
                        
                        </div>
                        <div id="bg-shops-mobile" class="bg-services-mobile">
                            <img id="bg-shops" src=" ../img/backgrounds/bg-shops.jpg" class="service-background" data-stellar-ratio="0.5" alt="Shops background">
                        </div>
                    </div>
                    <div class="info"><a href="https://www.facebook.com/pages/LH-CONCEPT-STORE/226383204081032" target="blank">Crédit Photo: LH CONCEPT STORE</a></div>
                </div> 
            
                <div id="photographers" class="service-slider">
                    <div class="container">
                        <div class="col-xs-12 bg-dark">
                            <h2 class="animated" data-orientation="fadeIn"> <span class="blue thin">exposez</span> vos photos</h2>
                            <p class="animated" data-orientation="fadeIn thin">Une belle galerie est l'une des meilleures façons de montrer au monde vos photos. Laissez vos admirateurs et le grand public découvrir votre travail avec un site web accessible de n'importe où. Et pourquoi ne pas vendre vos oeuvres depuis cette même plateforme ?</p>
                        </div>
                        <div id="bg-photographers-mobile" class="bg-services-mobile">
                            <img id="bg-photographers" src=" ../img/backgrounds/bg-photographers.jpg" class="service-background" data-stellar-ratio="0.5" alt="Photographers background">
                        </div>
                    </div>
                    <div class="info"><a href="http://www.jr-art.net/" target="blank">Crédit photo: JR artist</a></div>
                </div> 
            
                <div id="bloggers" class="service-slider">
                    <div class="container">
                        <div class="col-xs-12 bg-dark">
                            <h2 class="animated" data-orientation="fadeIn"> <span class="blue thin">partagez</span> vos histoires</h2>
                            <p class="animated" data-orientation="fadeIn thin">Laissez parler votre contenu pour vous. Vous souhaitez partager vos histoires et/ou des expériences&nbsp;? Je peux vous aider à créer votre blog personalisé avec la gestion des médias, la possibilité d'être relié aux réseaux sociaux en temps réel.</p>
                        </div>
                        <div id="bg-bloggers-mobile" class="bg-services-mobile">
                           <img id="bg-bloggers" src=" ../img/backgrounds/bg-bloggers.jpg" class="service-background" data-stellar-ratio="0.5" alt="Photographers background">
                        </div>
                    </div>
                </div> 
            
                <div id="artists" class="service-slider">
                    <div class="container">
                        <div class="col-xs-12 bg-dark">
                            <h2 class="animated" data-orientation="fadeIn">Dévoilez <span class="blue thin">vos oeuvres</span></h2>
                            <p class="animated" data-orientation="fadeIn thin">Let your content speak for itself. I can create best-in-class blogging platform features LayoutEngine, superb media management, and real-time comments.</p>
                        </div>
                        <div id="bg-artists-mobile" class="bg-services-mobile">
                            <img id="bg-artists" src=" ../img/backgrounds/bg-artists.jpg" class="service-background" data-stellar-ratio="0.5" alt="Artists background">
                        </div>
                    </div>
                    <div class="info"><a href="http://iangamache.com/blog/" target="blank">Crédit photo: Ian Gamache artist</a></div>
                </div> 
            
                <div id="restaurants" class="service-slider">
                    <div class="container">
                        <div class="col-xs-12 bg-dark">
                            <h2 class="animated" data-orientation="fadeIn">boostez <span class="blue thin">votre restaurant</span></h2>
                            <p class="animated" data-orientation="fadeIn thin">Vous voulez accroître vos ventes en augmentant le nombre de clients, la fréquence des clients habitués ? Commencez avec un site web ! Si vous en avez déjà un, pourquoi ne pas le faire évoluer en vous lançant dans la vente et la livraison à domicile en ligne ?</p>
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
                      <h3>Structure</h3>
                      <p>
                        Mes sites web sont créés et optimisés pour les navigateurs modernes et peuvent l'être pour les appareils mobiles. Ils utilisent les dernières techniques HTML, CSS et Javascript.
                      </p>
                    </div>

                    <div class="col-sm-12 col-sm-6 col-md-4 animated" data-orientation="fadeInUp">
                      <div class="customization"><div class="icon"><img src=" ../img/services/customization.png" alt="customization"></div></div>
                      <h3>Personalisation</h3>
                      <p>
                        En partant d'idées, de wireframes, de templates ou de maquettes graphiques, nous élaborons ensemble la structure du site. Personalisez le style pour créer le look que vous voulez.
                      </p>
                    </div>

                    <div class="col-sm-12 col-sm-6 col-md-4 animated" data-orientation="fadeInUp">
                      <div class="domains"><div class="icon"><img src=" ../img/services/domain.png" alt="domain"></div></div>
                      <h3>Domaine</h3>
                      <p>
                        Vous avez une idée du nom de votre futur site? Je peux vous le reserver<span class="blue">*</span>, le créer et le relier à votre tout nouveau site. <br /> <span class="imp"><span class="blue">*</span> Dans la limite des disponibilités</span>
                      </p>
                    </div>
                    <div class="clearfix visible-md"></div>
                    <div class="col-sm-12 col-sm-6 col-md-4 animated" data-orientation="fadeInUp">
                      <div class="social"><div class="icon"><img src=" ../img/services/social.png" alt="social"></div></div>
                      <h3>Social</h3>
                      <p>
                        La création de pages et comptes sociaux pour votre projet est peut être nécessaire. Importer, synchroniser, publier. Faites de votre site le centre de votre identité en ligne grâce à l'intégration d'outils sociaux. 
                      </p>
                    </div>

                    <div class="col-sm-12 col-sm-6 col-md-4 animated" data-orientation="fadeInUp">
                      <div class="seo"><div class="icon"><img src=" ../img/services/seo.png" alt="seo"></div></div>
                      <h3>SEO</h3>
                      <p>
                        Mes sites web sont aimés des moteurs de recherche. Ils incluent des liens d'articles clairs, des tags propres, des sitemaps XML et du code XHTML valide.
                      </p>
                    </div>

                    <div class="col-sm-12 col-sm-6 col-md-4 animated" data-orientation="fadeInUp">
                      <div class="analytics"><div class="icon"><img src=" ../img/services/analytics.png" alt="analytics"></div></div>
                      <h3>Analytics</h3>
                      <p>
                        Analyser le trafic et le comportement de vos visiteurs en temps réel. Savoir d'où ils viennent, combien de temps restent-ils, quelles pages sont les plus visitées et bien plus...
                      </p>
                    </div>
                    <div class="col-sm-12 col-sm-6 col-md-4 animated" data-orientation="fadeInUp">
                      <div class="hosting"><div class="icon"><img src=" ../img/services/hosting.png" alt="hosting"></div></div>
                      <h3>Hébergement</h3>
                      <p>
                        Avec mon infrastructure fiable et évolutive sur le cloud fourni par OVH, il n'y a aucun temps d'arrêt, rien à installer et à mettre à jour.
                      </p>
                    </div>

                    <div class="col-sm-12 col-sm-6 col-md-4 animated" data-orientation="fadeInUp">
                      <div class="support"><div class="icon"><img src=" ../img/services/customer.png" alt="customer"></div></div>
                      <h3>Service Clients</h3>
                      <p>
                        Sachez que je suis prêt à vous aider quand vous le voulez. Je suis un utilisateur expérimenté qui peut vous initier aux fonctionnalités de votre site. Calmement et simplement.
                      </p>
                    </div>

                    <div class="col-sm-12 col-sm-6 col-md-4 animated" data-orientation="fadeInUp">
                      <div class="more"><div class="icon"><img src=" ../img/services/more.png" alt="more"></div></div>
                      <h3>Un peu plus</h3>
                      <p>
                        Vous voulez quelque chose de spécifique? Contactez-moi et je ferai tout ce que je peux pour vous aider.                        <br />
                        <br />
                        <a class="scrollTo" href="#contact">Envoyez moi un petit mot ;)</a>
                      </p>
                    </div>
                </div>
            </div>

            <div id="text-separator-timers">
                <div class="container">
                    <div class="col-xs-12 animated" data-orientation="fadeInUp">
                        <h2 class="part-title"><span class="thin">QUELQUES </span>FAITS intéressants</h2>
                        <div class="separator"></div>                                      
                        <p class="thin">
                            Chaque projet me donne envie d'en faire plus, de concevoir davantage et d'avoir le plaisir de donner vie à mon code. Ainsi, j'offre une meilleure expérience du web.</p>
                    </div>                     
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-3 text-center timerWrapper animated" data-orientation="fadeIn">
                            <img src=" ../img/facts/ideas.png" alt="ideas">
                            <h1>
                                <span class="timer1">0</span>
                            </h1>
                            <p>Idées</p>
                        </div>

                        <div class="col-xs-6 col-sm-6 col-md-3  text-center timerWrapper animated" data-orientation="fadeIn">
                            <img src=" ../img/facts/project.png" alt="ideas">
                            <h1>
                                <span class="timer2">0</span> +
                            </h1>
                            <p>Projets</p>
                        </div>


                        <div class="col-xs-6 col-sm-6 col-md-3   text-center timerWrapper animated" data-orientation="fadeIn">
                            <img src=" ../img/facts/coffee.png" alt="ideas">
                            <h1>
                                <span class="timer3">0</span>
                            </h1>
                            <p>Cafés bus</p>
                        </div>

                        <div class="col-xs-6 col-sm-6 col-md-3 text-center timerWrapper animated" data-orientation="fadeIn">
                            <img src=" ../img/facts/working.png" alt="ideas">
                            <h1>
                                <span class="timer4">0</span>
                            </h1>
                            <p>Heures travaillées</p>
                        </div>
                    </div>
                </div>
            </div>

             <div id="prices">
                <div class="container">
                    <div class="col-xs-12">
                        <h2 class="part-title animated" data-orientation="fadeIn"><span class="thin">Les</span> Tarifs</h2>
                        <div class="separator"></div>
                    </div>
                    <div class="price-box col-xs-12 col-sm-6 col-md-3">
                        <div class="price-box-content">
                            <div class="ribbon ribbon__left-top"><span>Livré en 15 jours</span></div>
                            <h3>Basique</h3>
                            <h4 class="prices-option">Inclu:</h4>
                            <ul>
                                <li>3 pages</li>
                                <li>Design personalisé</li>
                                <li>Formulaire de contact</li>
                                <li>SEO</li>
                                <li class="not-included">Hébergement non inclu*</li>                        
                            </ul>
                            <h4 class="prices-option">Options:</h4>
                            <ul>
                                <li>Animations</li>
                                <li>Responsive</li>
                                <li>Social media optimization</li>
                            </ul>

                            <div class="ribbon-st">
                                <h4>À partir de 900€</h4>
                            </div>
                        </div>
                    </div>
                    <div class="price-box col-xs-12 col-sm-6 col-md-3">
                        <div class="price-box-content">
                            <div class="ribbon ribbon__left-top"><span>Livré en 30 jours</span></div>
                            <h3>Standard</h3>
                            <h4 class="prices-option">Inclu:</h4>
                            <ul>
                                <li>6 pages et plus</li>
                                <li>Desgin personalisé</li>
                                <li>Formulaire de contact</li>
                                <li>SEO</li>
                                <li>Animations</li>
                                <li>UX-UI poussé</li>
                                <li>Social media optimization</li>
                                <li class="not-included">Hébergement non inclu*</li>                        
                            </ul>
                            <h4 class="prices-option">Options:</h4>
                            <ul>
                                <li>Responsive</li>
                                <li>Back office</li>
                                <li>Newsletter</li>
                            </ul>
                            <div class="ribbon-st">
                                <h4>À partir de 1500€</h4>
                            </div>
                        </div>
                    </div>
                    <div class="price-box col-xs-12 col-sm-6 col-md-3">
                        <div class="price-box-content">
                            <h3>Personalisé</h3>
                            <ul>
                                <li>E-shop</li>
                                <li>Blog</li>
                                <li>Projet perso</li>
                                <li>Design</li>
                                <li>Idées particulières</li>
                                <li>...</li>
                                <h4><a class="scrollTo btn" href="#contact">Ecrivez-moi</a></h4>
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
                                    <h4>300€/jour</h4>
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
                        <h2 class="part-title animated" data-orientation="fadeIn"><span class="thin">mon</span> portfolio</h2>
                        <div class="separator"></div>
                        <p class="thin">Je conçois et construis des sites web, des applications et des solutions mobiles.</p>
                        <p class="thin">Voici certains de mes projets préférés sur lesquels j'ai eu la chance de travailler:</p>
                        <br/>
                    </div>
                </div>

                <div id="portfolio-block">
                    <div class="example">
                         <figure class="item item-w2 item-h2 cafe-lomi animated" data-orientation="fadeIn">
                            <figcaption>
                                <div class="project-title"><span class="thin blue">Café Lomi</span><br/> Artisan torréfacteur</div>
                                <div class="project-button"><a href="http://cafelomi.com" target="blank" class="btn">View it</a></div>
                            </figcaption>
                        </figure>   
                        <figure class="item item-w1 item-h2 over-graph animated" data-orientation="fadeIn">
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
                        <figure class="item item-w2 item-h3 newrestaurants animated" data-orientation="fadeIn">
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
                        <h2 class="part-title animated" data-orientation="fadeIn"><span class="thin">Mes</span> clients</h2>
                        <div class="separator"></div>
                    </div>
                    <div class="logo col-xs-12 col-sm-6 col-md-4 animated" data-orientation="fadeInLeft">
                       <a href="http://www.chevignon.com/" target="_blank"><img src="../img/logos/chevignon.png" alt="Chevignon logo"></a>
                    </div>
                    <div class="logo col-xs-12 col-sm-6 col-md-4 animated" data-orientation="fadeInDown">
                       <a href="http://www.wedostudios.fr" target="_blank"><img src="../img/logos/wedostudio.png" alt="wedo studio logo"></a>
                    </div>
                    <div class="logo col-xs-12 col-sm-6 col-md-4 animated" data-orientation="fadeInRight">
                       <a href="http://www.misterbingbang.com" target="_blank"><img src="../img/logos/misterbigbang.png" alt="misterbigbang logo"></a>
                    </div>
                    <div class="logo col-xs-12 col-sm-6 col-md-4 animated" data-orientation="fadeInLeft">
                       <a href="http://www.adeliegestion.fr" target="_blank"><img src="../img/logos/adelie.png" alt="adelie gestion logo"></a>
                    </div>
                    <div class="logo col-xs-12 col-sm-6 col-md-4 animated" data-orientation="fadeInDown">
                       <a href="http://over-graph.com" target="_blank"><img src="../img/logos/over-graph.png" alt="over-graph logo"></a>
                    </div>
                    <div class="logo col-xs-12 col-sm-6 col-md-4 animated" data-orientation="fadeInRight">
                        <a href="http://909c.fr" target="_blank"><img src="../img/logos/909c.png" alt="909c logo"></a>
                    </div>
                    <div class="logo col-xs-12 col-sm-6 col-md-4 animated" data-orientation="fadeInLeft">
                        <a href="http://spafax.com" target="_blank"><img src="../img/logos/spafax.png" alt="Spafax logo"></a>
                    </div>
                    <div class="logo col-xs-12 col-sm-6 col-md-4 animated" data-orientation="fadeInDown">
                        <a href="http://enroute.aircanada.com" target="_blank"><img src="../img/logos/enroute.png" alt="enRoute logo"></a>
                    </div>
                    <div class="logo col-xs-12 col-sm-12 col-md-4 animated" data-orientation="fadeInRight">
                        <a href="http://bombardier.com" target="_blank"><img src="../img/logos/bombardier.png" alt="Bombardier logo"></a>
                    </div>

                    <div class="more-clients">
                        <div class="logo col-xs-12 col-sm-6 col-md-4 animated" data-orientation="fadeInLeft">
                            <a href="http://enroute.aircanada.com/ge-chefseries/" target="_blank"><img src="../img/logos/monogram.png" alt="Ge Monogram logo"></a>
                        </div>
                        <div class="logo col-xs-12 col-sm-6 col-md-4 animated" data-orientation="fadeInDown">
                            <a href="http://apex.aero/" target="_blank"><img src="../img/logos/apex.png" alt="APEX logo"></a>
                        </div>
                        <div class="logo col-xs-12 col-sm-6 col-md-4 animated" data-orientation="fadeInRight">
                            <a href="http://claudemauffette.com" target="_blank"><img src="../img/logos/mauffette.png" alt="Claude Mauffette logo"></a>
                        </div>
                        <div class="logo col-xs-12 col-sm-6 col-md-4 animated" data-orientation="fadeInLeft">
                            <a href="http://maison-en-espagne.fr" target="_blank"><img src="../img/logos/maison.png" alt="Maison en espagne logo"></a>
                        </div>
                    </div>

                    <div class="logo col-xs-12 animated" data-orientation="fadeIn">
                        <a class="btn show-more-clients fr">plus</a>
                    </div>
                </div>
            </div>

            <div id="aboutme">
                <div class="container">
                    <div class="col-xs-12">
                        <h2 class="part-title animated" data-orientation="fadeIn">À propos <span class="thin">de moi</span></h2>
                        <div class="separator"></div>
                    </div>
                    <div class="col-xs-12 animated" data-orientation="fadeInUp">
                        <p>
                            Mon nom est Stan, je viens du Havre en Normandie, France. J'ai étudié à SUPINFO Institute of Information Technology. Mon école, initialement uniquement française, offre une qualification certifiée par l'Etat français au plus haut niveau I (niveau Bac + 5, Ingénieur, Master). SUPINFO est une école d'informatique leader en France, qui peut être trouvée dans de nombreux campus à travers le monde (France, Canada, Royaume-Uni, Maroc, États-Unis, Chine ...).
                        </p>
                        <p>Chaque étudiant peut bénéficier de la mobilité offerte par ce réseau international.</p>
                        <p>
                            C'est pourquoi j'ai vécu à Caen pour ma première année d'étude. J'ai fais ma deuxième et troisième année à Montréal puis, j'ai demenagé en Chine pendant un an. Je suis ensuite retourné à Montréal pour y compléter mon cursus. Je suis rentré en France en 2015 et je suis maintenant à la recherche de projets depuis Paris.                      
                        </p>
                    </div>
                </div>
                <ul class="timeline" id="timeline">
                  <li class="li complete">
                    <div class="timestamp">
                      <span class="author">Le Havre</span>
                      <span class="date">d'où je viens<span>
                    </div>
                    <div class="status">
                      <h4> Shift Created </h4>
                    </div>
                  </li>
                  <li class="li complete">
                    <div class="timestamp">
                      <span class="author">Caen</span>
                      <span class="date">2009 - 2010<span>
                    </div>
                    <div class="status">
                      <h4>Première année</h4>
                    </div>
                  </li>
                  <li class="li complete">
                    <div class="timestamp">
                      <span class="author">Montréal</span>
                      <span class="date">2010 - 2011<span>
                    </div>
                    <div class="status">
                      <h4>Deuximème année</h4>
                    </div>
                  </li>
                  <li class="li">
                    <div class="timestamp">
                      <span class="author">Montréal</span>
                      <span class="date">2011 - 2012<span>
                    </div>
                    <div class="status">
                      <h4>Troisième année</h4>
                    </div>
                  </li>
                  <li class="li">
                    <div class="timestamp">
                      <span class="author">Chine</span>
                      <span class="date">2012 - 2013<span>
                    </div>
                    <div class="status">
                      <h4>Master 1</h4>
                    </div>
                  </li>
                  <li class="li">
                    <div class="timestamp">
                      <span class="author">Montréal</span>
                      <span class="date">2013 - 2014<span>
                    </div>
                    <div class="status">
                      <h4>Master 2</h4>
                    </div>
                  </li>
                  <li class="li">
                    <div class="timestamp">
                      <span class="author">Paris</span>
                      <span class="date">2015 - ...<span>
                    </div>
                    <div class="status">
                      <h4>Freelance</h4>
                    </div>
                  </li>

                 </ul>  
            </div>


            

            <!-- <div id="cities">
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
                                <p>2013<br>↓<br>2015</p> 
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
            </div> -->

            <div id="contact-button">
                <div class="container">
                    <div class="col-xs-12 col-sm-6">
                        <a href="../documents/StanislasKerneCV2015-FR.pdf" target="_blank" class="btn">Télécharger mon cv</a>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <a href="mailto:stan.kerne@gmail.com?Subject=Hello,%20do%20you%20want%20to%20work%20for%20me?" class="btn">Embauchez-moi</a>
                    </div>
                </div>
            </div>   
            
            <div id="contact">
                <div class='bg-contact'></div>
                <div class="container">

                    <div class="col-xs-12">
                        <h2 class="part-title animated" data-orientation="fadeIn">Contact</h2>
                        <div class="separator"></div>
                        <h3 class="thin animated" data-orientation="fadeIn">Prenez contact avec moi!</h3>
                    </div>
                    <div class="col-sm-6 animated" data-orientation="fadeInUp">
                        <h4>POUR COMMENCER</h4>
                        <p class="contact-info-intro">Si vous avez un projet dont vous aimeriez me parler, laissez moi un message. Je serai heureux de vous répondre aussi vite que possible.</p>
                        <div class="contact-info">
                            <div class="header"><p>Contactez-moi</p></div>
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
                            <label>Nom <span class="blue">*</span></label>
                            <input name="auteur" type="text" required>

                            <label>Email <span class="blue">*</span></label>
                            <input name="email" type="email" required>
                            
                            <label>Téléphone</label>
                            <input name="phone" type="tel" pattern="^((\+\d{1,3}(-| )?\(?\d\)?(-| )?\d{1,5})|(\(?\d{2,6}\)?))(-| )?(\d{3,4})(-| )?(\d{4})(( x| ext)\d{1,5}){0,1}$">

                            <label>Message <span class="blue">*</span></label>
                            <textarea name="question" rows="10" cols="50" required></textarea>
         
                            <input type="reset" name="Reset" class="btn" value="Effacer">          
                            <input type="submit" name="envoi" class="btn" value="Envoyer">
                        </form>
                    </div>
                </div>
                 <footer>
                    <img src="../img/assets/logo.png" class="logo" alt="Logo Hello-Users">
                    <p>HELLO <span class="blue">USERS</span></p>
                    <a href="https://www.linkedin.com/profile/view?id=302779683" target="blank"><img src="../img/footer/linkedin.png" alt="linkedin"></a>
                    <a href="https://www.facebook.com/pages/Hello-users/1569401276676593" target="blank"><img src="../img/footer/facebook.png" alt="facebook"></a>
                    <a href="https://plus.google.com/112960872940467893500" target="blank"><img src="../img/footer/googleplus.png" alt="googleplus"></a>
                    <a href="https://github.com/Stankerne" target="blank"><img src="../img/footer/github.png" alt="github"></a>
                    <a href="http://validator.w3.org/check?uri=http%3A%2F%2Fhello-users.com%2F" target="blank"><img src="../img/footer/w3c.png" alt="w3c"></a>
                   
                    <br/>
                   
                    <div class="fb-like" data-href="https://www.facebook.com/hell0.users/" data-layout="button_count" data-show-faces="false"></div>
                        &nbsp;
                    <div class="fb-share-button" data-href="http://hello-users.com" data-layout="button"></div>

                    <p>Designé et développé par Stanislas Kerné avec ♡  <br/>| &nbsp;&nbsp; Tous droits réservés © 2015 &nbsp;&nbsp; |</p></footer>
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