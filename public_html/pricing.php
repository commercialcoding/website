<?php
    //require 'development/inc/classLoader.php';
    //$qb = new quoteBuilder();
    session_start();    
    $_SESSION['myQuoteArray'];
?>
<!DOCTYPE html>
<html  lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="google-site-verification" content="FD7TP00A7PcJTCWREqr_HZLAiMSHZY-ixO7Oq0H5psU"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1, maximum-scale=1.0, user-scalable=no">
        <meta name="keywords" content="web design, web design macclesfield, iOS developer, android developer, app development macclesfield, app development manchester, web development macclesfield, mobile app developer, iphone developer, android developer, app design macclesfield, commercial coding">    
        <meta name="description" content="Commercial Coding Ltd are specialists in Website, iOS and Android development, operating out of macclesfield in Cheshire. We can design and develop mobile applications for Apple and Android devices, other services include website deign, web application development, bespoke CMS's and Website hosting.">
        <link rel="stylesheet" type="text/css" href="development/template/css/iconCSS.css">
        <title>Commercial Coding - prices page </title>
    <?php include("development/template/head.php") ?> 
        <script>
        $(document).ready(function(){
         
         
        $(".wdLink").click(function() {
            $('html,body').animate({
                scrollTop: $(".pp1").offset().top-60},
                'slow');
        });  
        
        $(".oqLink").click(function() {
            $('html,body').animate({
                scrollTop: $(".tryQuotingApp").offset().top-60},
                'slow');
        });  
        
        $(".oLink").click(function() {
            $('html,body').animate({
                scrollTop: $(".Promotions").offset().top-60},
                'slow');
        });  
        
        $(".appLink").click(function() {
            $('html,body').animate({
                scrollTop: $(".pp2").offset().top-60},
                'slow');
        });  
           
        });
        
        </script>
        
        <style>
        
            
        </style>
            
        
        
    </head>
    <body>
        
        <?php include("development/template/branding.php") ?>
        <div id='pageContainer'>
            <div class='pricingBanner fluid col-12'>
                <div class='wrapper '>
                    <div class='col-3' style="padding-top:30px;">
                        <h1>Find the <span>perfect plan</span><br> for your business</h1>
                        <h3>Our plans are designed to fit any business size, from large organisations to starts up and small teams. </h3>
                    </div>
                    <div class='pricePageNav'>
                        <ul>
                            <li class='wdLink'>Web Design</li>
                            <li class='oqLink'>Online Quote</li>
                            <li class='oLink'>Offers</li>
                            <li class='appLink'>App Design</li>
                        </ul>
                    </div>
                </div>  
                <div class="clear"></div>
            </div>
            <div class='pricePlans pp1 fluid col-12'>
                <div class='wrapper'>
                    <h4>Web Design Packages</h4>
                    <div class='planBlock col-3 fluid'>
                        <h2>Essential Package</h2>
                        <h3>Our website design package for personal or small business requirements.</h3>
                        <div class='price'><span>£395</span></div>
                        <p class='dep'>*25% Deposit required</p>
                        <div class='includes'>
                            <p>Includes:</p>
                            <ul>
                                <li>Up to 5 pages</li>
                                <li>1yr Free Hosting</li>
                                <li>Responsive Design</li>
                                <li>Logo Design</li>
                                <li>Multimedia Integration</li>
                                <li>5 E-mail Accounts</li>
                                <li>Standard SEO</li>
                            </ul>
                        </div>
                    </div>
                    <div class='planBlock col-3 fluid'>
                        <h2>Team Package</h2>
                        <h3>Our website design package for medium businesses with an intention to grow.</h3>
                        <div class='price'><span>£795</span></div>
                        <p class='dep'>*25% Deposit required</p>
                        <div class='includes'>
                            <p>Includes:</p>
                            <ul>
                                <li>Up to 10 pages</li>
                                <li>1yr Free Hosting</li>
                                <li>Responsive Design</li>
                                <li>Logo Design</li>
                                <li>Multimedia Integration</li>
                                <li>10 E-mail Accounts</li>
                                <li>Standard SEO</li>
                                <li>Database With API</li>
                            </ul>
                        </div>
                    </div>
                    <div class='planBlock col-3 fluid'>
                        <h2>Enterprise Package</h2>
                        <h3>Our website design package for large business with business logic requirements.</h3>
                        <div class='price'><span>£1495</span></div>
                        <p class='dep'>*25% Deposit required</p>
                        <div class='includes'>
                            <p>Includes:</p>
                            <ul>
                                <li>11+ pages</li>
                                <li>Integrated CMS</li>
                                <li>1yr Free Hosting</li>
                                <li>Responsive Design</li>
                                <li>Logo Design</li>
                                <li>Multimedia Integration</li>
                                <li>20 E-mail Accounts</li>
                                <li>Advanced SEO</li>
                                <li>Database With API</li>
                            </ul>
                        </div>
                    </div>
                    <div class="clear"></div>
                    <div class='moreOptions fluid'>
                        <h1>Optional Extra's</h1>
                        <ul>
                            <li>Google Analytics</li>
                            <li>Location Services</li>
                            <li>Parallax Scrolling</li>
                            <li>Social Media</li>
                            <li>User Profiles</li>
                            <li>Admin Access</li>
                            <li>Catalog</li>
                            <li>Calendar</li>
                            <li>Interactive Gallery</li>
                            <li>Email Notification</li>
                            <li>E-commerce</li>
                            <li>Charts and Graphs</li>

                            
                        </ul>
                        
                    </div>
                
                </div>
                <div class="clear"></div>

            </div>
            <div class="clear"></div>
            
            
            <div class='tryQuotingApp'>
                <h1>Not the droids your looking for?</h1>
                <h2>T&nbsp;&nbsp;R&nbsp;&nbsp;Y&nbsp;&nbsp;&nbsp;O&nbsp;&nbsp;U&nbsp;&nbsp;R&nbsp;&nbsp;&nbsp;Q&nbsp;&nbsp;U&nbsp;&nbsp;O&nbsp;&nbsp;T&nbsp;&nbsp;I&nbsp;&nbsp;N&nbsp;&nbsp;G&nbsp;&nbsp;&nbsp;A&nbsp;&nbsp;P&nbsp;&nbsp;P</h2>

                <h3><span class='hideExtraText'>If you cant find a package to suit your needs, </span>our online app can give you a bespoke quote for your project.</h3>

                <a href='http://www.commercialcoding.com/get_quote.php'><button>Quote Application</button></a>
            </div>
            
            <div class='Promotions'>
                <h1>We've got a protomotion on!</h1>
                <a href='promotion.php?offer=smallBiz'>
                    <div class='offerBox'>
                        <img src='development/images/rs_app_background.jpg' />
                        <div class='figCaption'>
                            <h2>Small or New <br>Business Offer</h2>
                            <p>8 Page website with 1 year free hosting</p>
                            <p>£249</p>
                        </div>
                    </div>
                </a>
                
                
                <h2><a href='http://www.commercialcoding.com/get_quote.php'>Click an offer to find out more</a></h2>
            </div>
            
            <div class='pricePlans pp2 fluid col-12'>
                <div class='wrapper'>
                    <h4>App Design Packages</h4>
                    <div class='planBlock col-3 fluid'>
                        <h2>Starter Package</h2>
                        <h3>Our basic mobile app development package for a single mobile platform. <br><br>Price's start at -</h3>
                        <div class='price'><span>£1200</span></div>
                        <p class='dep'>*25% Deposit required</p>
                        <div class='includes'>
                            <p>Includes:</p>
                            <ul>
                                <li>Single Platform</li>
                                <li>Minimum 4 Screens</li>
                                <li>Logo Design</li>
                                <li>Pre-release Testing</li>
                                <li>Phone and Tablet</li>
                            </ul>
                        </div>
                    </div>
                    <div class='planBlock col-3 fluid'>
                        <h2>Multi Package</h2>
                        <h3>A mobile app development package for deployment on both iOS and Android. <br><br>Price's start at -</h3>
                        <div class='price'><span>£2000</span></div>
                        <p class='dep'>*25% Deposit required</p>
                        <div class='includes'>
                            <p>Includes:</p>
                            <ul>
                                <li>iOS and Android Platforms</li>
                                <li>Minimum 4 Screens</li>
                                <li>Logo Design</li>
                                <li>Pre-release Testing</li>
                                <li>Phone and Tablet</li>

                                
                            </ul>
                        </div>
                    </div>
                    <div class='planBlock col-3 fluid'>
                        <h2>App-CMS Package</h2>
                        <h3>A Mobile app development pacakge for app's that require content publishing. <br><br>Price's start at -</h3>
                        <div class='price'><span>£1500</span></div>
                        <p class='dep'>*25% Deposit required</p>
                        <div class='includes'>
                            <p>Includes:</p>
                            <ul>
                                <li>Single Platform</li>
                                <li>Minimum 4 Screens</li>
                                <li>Phone and Tablet</li>
                                <li>Logo Design</li>
                                <li>Pre-release Testing</li>
                                <li>Admin Website</li>
                                <li>Database Integration</li>
                                <li>Web Service</li>
                                <li>API</li>
                                
                            </ul>
                        </div>
                    </div>
                <div class="clear"></div>
                </div>
                <div class="clear"></div>

            </div>
            <div class="clear"></div>
            
        </div>
        <?php include("development/template/footer.php"); ?>

    </body>
</html>