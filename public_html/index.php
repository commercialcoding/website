<?php if('http://'.$_SERVER["SERVER_NAME"] == "http://www.commercialcoding.com"){
    header('Location:http://commercialcoding.com');
}
if(isset($_GET['offer'])){
    header('Location:http://www.commercialcoding.com/promotion.php?offer=smallBiz');
}
function getUrl() {
  $url  = @( $_SERVER["HTTPS"] != 'on' ) ? 'http://'.$_SERVER["SERVER_NAME"] :  'https://'.$_SERVER["SERVER_NAME"];
  var_dump($url);
  return $url;
}?><!DOCTYPE html>
<html lang="en">        
    <head itemscope itemtype="http://schema.org/WebSite">
        <meta charset="UTF-8">
        <title  itemprop='name'>Commercial Coding | Macclesfield Web Design, Mobile App Design</title>
       
        
        <link  rel="canonical" href="http://commercialcoding.com" > 
        <link itemprop="url"  href="http://commercialcoding.com" > 
        <meta name="google-site-verification" content="FD7TP00A7PcJTCWREqr_HZLAiMSHZY-ixO7Oq0H5psU"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1, maximum-scale=1.0, user-scalable=no">
        
        <meta name="description" content="Commercial Coding Ltd are specialists in Website design, mobile app development for iOS and Android devices, operating out of macclesfield in Cheshire.">
       
        <meta name="keywords" content="Macclesfield Digital Design Agency, Web Design, App Design, Promoting, Web Development, App Development, commercial coding, website design, mobile app development">    
       
        <link rel="stylesheet" type="text/css" href="development/slider/slitSlider/css/demo.css" />
        <link rel="stylesheet" type="text/css" href="development/slider/slitSlider/css/style.css" />
        <link rel="stylesheet" type="text/css" href="development/slider/slitSlider/css/custom.css" />
        <script type="text/javascript" src="development/slider/slitSlider/js/modernizr.custom.79639.js"></script>  
        <?php include("development/template/head.php") ?> 
        <script type="application/ld+json">
            {
              "@context": "http://schema.org",
              "@type": "WebSite",
              "url": "http://commercialcoding.com/",
              "potentialAction": {
                "@type": "SearchAction",
                "target": "http://query.commercialcoding.com/search?q={search_term_string}",
                "query-input": "required name=search_term_string"
              }
            }
    </script>
    </head>
    <body>
        <?php include("development/template/branding.php") ?>
        <div id="background"></div>   
        <div class="tint">
            <div class='headLineImage'> </div>
            <div class="headlineDiv">
                <h2 class="headline">Web Design | Mobile App Design</h2>
                <h3 class="headline speech">'Commercial Coding is mobile app development <br>at its very best' </h3>
            </div>
            <div class='clear'></div>
            <div class='scrollDownButton'></div>
        </div>
        <div id='pageContainer'>
            <div class='indexDiv white'>
                <div class='wrapper'>
                    <div id='welcome' class='fluid col-12'>
                        <h1 class='indexSectionTitle'>Macclesfield Website Design & App Design Agency</h1>
                        <h4><span>FRESH.</span><span class="tagLineBlue">CREATIVE.</span><span class="tagLineGrey">SIMPLE.</span></h4>
                        <h3>Commercial Coding offer Engaging website design and contemporary mobile app development</h3>
                        <p >
                            we're a Macclesfield based digital development agency, providing creative digital services to our clients in need of digital growth.
                            Our team use a wealth of experience to help you reach your business targets by developing affordable creative, digital media. 
                            And it doesn't stop there...
                            <span class='hideExtraText'>Commercial Coding will be able to help your business at both ends of the spectrum from designing a clean, engaging website to building a brand and marketing it so wider audiences are discovered increasing business awareness.</span>   
                        </p>
                    </div>
                    <div class='clear'></div>
                    <div class='indexSectionDivider col-9 fluid'></div>
                    <div class='quickOptions fluid col-12'>
                        <div class='fluid col-3 qoDesign'>

                            <div class='indexCircle'><img src='development/images/all-icons/corrected-features/white_logoDesign_quoteIcon.png' alt='web design icon'  /></div>

                            <h2>Web Design</h2>
                            <div class='dashDivider'></div>
                            <ul>
                                <li>Website Design</li>
                                <li>Mobile Design</li>
                                <li>Logo Design</li>
                                <li>Branding</li>
                            </ul>
                        </div>
                        <div class='fluid col-3 qoDevelopment'>
                            <div class='indexCircle'><img src='development/images/all-icons/corrected-features/white-admin-quoteIcon.png' alt='web development icon'  /></div>
                            <h2>Web Development</h2>
                            <div class='dashDivider'></div>
                            <ul>
                                <li>CMS</li>
                                <li>Web Applications</li>
                                <li>E-Commerce</li>
                                <li>API Programming</li>
                            </ul>
                        </div>
                        <div class='fluid col-3 qoApps'>
                              <div class='indexCircle'><img src='development/images/all-icons/corrected-features/appDevIcon.png' alt='app design icon'  /></div>
                            <h2>App Design</h2>
                            <div class='dashDivider'></div>
                            <ul>
                                <li>iOS App's</li>
                                <li>Android App's</li>
                                <li>Controller App's</li>
                                <li>App support</li>
                            </ul>
                        </div>
                        <div class='fluid col-3 qoMarket'>
                            <div class='indexCircle'><img src='development/images/all-icons/corrected-features/white-social-login.png' alt='marketing icon'  /></div>
                            <h2>Promoting</h2>
                            <div class='dashDivider'></div>
                            <ul>
                                <li>SEO</li>
                                <li>Social Media Marketing</li>
                                <li>Pay Per Click</li>
                                <li>Branding</li>
                            </ul>
                        </div>
                </div>
                <div class='clear'></div>

                                    <div class='indexSectionDivider col-9 fluid'></div>

                </div>
        </div>

        <div class='clear'></div>
        <div class="container demo-1"  style='position:relative!important; height:100vh;'>
            <div id="slider" class="sl-slider-wrapper">
                <div class="sl-slider">
                    <div class="sl-slide bg-1" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
                        <div class="sl-slide-inner">
                            <div class="deco" data-icon="slide1"></div>
                            <h6>Digital Media To Meet Any Requirement</h6>
                            <blockquote>
                                <p>
                                    Our team can handle all types of projects at any stage in the development process from requirements elicitation all the way through to implementation and deployment.
                                    <br>
                                    Feel free to get in touch today to discuss your digital requirements.
                                </p>
                            </blockquote>
                        </div>
                    </div>
                    <div class="sl-slide bg-2" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
                            <div class="sl-slide-inner">
                                    <div class="deco" data-icon="slide2"></div>
                                    <h6>New Or Existing Business</h6>
                                    <blockquote>
                                        <p itemscope itemtype="http://schema.org/Service" >
                                            Starting a new business? You'll need an online presence to stay ahead of the competition. 
                                            We design and <span itemprop="serviceType">develop bespoke websites</span>, with your business goals in mind.
                                            We can help with outdated websites too, through our <span itemprop="name">website refresh</span> services. The 
                                            <span itemprop="provider" itemscope itemtype="http://schema.org/LocalBusiness"><span itemprop="name">Commercial Coding</span></span> team can even develop content publishing systems 
                                            to make sure your sites always up to date. 
                                        </p>
                                    </blockquote>
                            </div>
                    </div>

                    <div class="sl-slide bg-3" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
                            <div class="sl-slide-inner">
                                    <div class="deco" data-icon="slide3"></div>
                                    <h6>An Interesting Project</h6>
                                    <blockquote>
                                        <p itemscope itemtype="http://schema.org/Service">
    Working on diverse or bespoke projects can be tough, so let us make them easier for you... By letting us build a web application specifically for your project. Our development team can design clean, easy user experience and at the same time program a robust business logic to make sure your application is lighting fast and providing increased productivity.                                                            </p>
                                    </blockquote>
                            </div>
                    </div>

                    <div class="sl-slide bg-4" data-orientation="vertical" data-slice1-rotation="-5" data-slice2-rotation="25" data-slice1-scale="2" data-slice2-scale="1">
                            <div class="sl-slide-inner">
                                    <div class="deco" data-icon="slide4"></div>
                                    <h6>Concept Or Idea</h6>
                                    <blockquote>
                                        <p >
                                            If you just want to explore an idea, Our team will be happy to hear about it, we can give you advice
                                            on the best way to take the next step. If its something you really want to move to the next stage the 
                                            Commercial Coding team can help you transform your concept from an idea to a marketable product.
                                        </p>
                                    </blockquote>
                            </div>
                    </div>

                        <div class="sl-slide bg-5" data-orientation="horizontal" data-slice1-rotation="-5" data-slice2-rotation="10" data-slice1-scale="2" data-slice2-scale="1">
                                <div class="sl-slide-inner">
                                        <div class="deco" data-icon="slide5"></div>
                                        <h6>Get In Touch</h6>
                                        <blockquote>
                                            <p>
                                                To get started or just to have a general chat about your project <a href='http://commercialcoding.com/contact' >give us a call </a> 
                                            </p>
                                        </blockquote>
                                </div>
                        </div>
                    <div class='clear'></div>
                </div>
                <nav id="nav-arrows" class="nav-arrows">
                    <span class="nav-arrow-prev">Previous</span>
                    <span class="nav-arrow-next">Next</span>
                </nav>
                <nav id="nav-dots" class="nav-dots">
                    <span class="nav-dot-current"></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </nav>
                <div class='clear'></div>
            </div>
            <div class='clear'></div>
        </div>
        <script type="text/javascript" src="development/slider/slitSlider/js/jquery.ba-cond.min.js"></script>
        <script type="text/javascript" src="development/slider/slitSlider/js/jquery.slitslider.js"></script>
        <script type="text/javascript" src="development/slider/slitSlider/js/sliderSmallScript.js"></script>   
        <div class='clear'></div>
        
        <div class='indexDiv supportGrey supportIndex'>
            <div class='wrapper'> 
                <span class="tagSupportheadLine">SUPPORT FOR YOU</span>
                <p class="tagSupportP1">Once we've built your site we will always be on hand for any issues you might have.</p>
                <p class=' tagSupportP2 hideExtraText'>Our technical support team work up until 7:00PM and guarantee to respond within one hour of your support request.</p>
                <button>E-mail Support</button>
                <div class='clear'></div>
            </div>
        </div>
        <div class='clear'></div>
                    <div class='quickIndexMessage'>
            <div class='wrapper'>
                <div class='weDoApps fluid col-4'>
                    <h3>We Do Apps</h3>
                    <p>Commercial Coding offer a full service when it comes to mobile app development.<br>Our app developers can design, build and launch a bespoke iOS or Android app to match your needs to the letter.  <span style='font-weight: 700; color:#fff;'>Get in touch</span> to discuss yours.</p>
                </div>
                <div class='weDoWebsites fluid col-8'>
                    <h3>We Design Websites</h3>
                    <p>We're a website design company at the heart of it. We've taken the time to learn the in's and out's of web design so we can produce high quality websites for our clients. We know what brings customers back to a website time and time again and we understand the marketing behind getting them there in the first place.<br /><br /> Don't hesitate to pick up the phone so we can guide you through your project step by step, <span style='font-weight: 700; color:#fff;'>get in touch today</span>.  </p>
                </div>
            </div>
            <div class='clear'></div>

        </div>
        
        <div class='clear'></div>
        </div>
        <?php include("development/template/footer.php"); ?>
    </body>
</html>