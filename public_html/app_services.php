<?php
?>
<!DOCTYPE html>
<html  lang="en">
    <head itemscope itemtype="http://schema.org/WebSite">
        <meta charset="UTF-8">
        
        <link  rel="canonical" href="http://commercialcoding.com/app_services.php" > 
        <link itemprop="url"  href="http://commercialcoding.com/app_services.php" > 
        <title itemprop='name'>Commercial Coding - iOS and Android app services</title>
        <meta name="google-site-verification" content="FD7TP00A7PcJTCWREqr_HZLAiMSHZY-ixO7Oq0H5psU"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1, maximum-scale=1.0, user-scalable=no">
        <meta name="keywords" content="web design, web design macclesfield, iOS developer, android developer, app development macclesfield, app development manchester, web development macclesfield, mobile app developer, iphone developer, android developer, app design macclesfield, commercial coding">    
        <meta name="description" content="Commercial Coding Ltd are specialists in Website, iOS and Android development, operating out of macclesfield in Cheshire. We can design and develop mobile applications for Apple and Android devices, other services include website deign, web application development, bespoke CMS's and Website hosting.">
        <?php include("development/template/head.php") ?> 
    </head>
    <body>
        
        <script>
        $(document).ready(function(){
         
                $(".devTypeBox").click(function(){
                    $(this).find("h2").addClass("jqMoveH2");
                    $(this).find(".text").addClass("jqMoveText");
                });
         
         
         
         
        $(".iosService").click(function() {
            $('html,body').animate({
                scrollTop: $(".iosDiv").offset().top-60},
                'slow');
        });  
        
        $(".androidService").click(function() {
            $('html,body').animate({
                scrollTop: $(".androidDiv").offset().top-60},
                'slow');
        });  
        
        $(".cmsService").click(function() {
            $('html,body').animate({
                scrollTop: $(".cmsDiv").offset().top-60},
                'slow');
        });  
        
        $(".extraService").click(function() {
            $('html,body').animate({
                scrollTop: $(".extraDiv").offset().top-60},
                'slow');
        });  
           
        });
        </script>
        <?php include("development/template/branding.php") ?>
        <div class="appBG"></div>   
        <div class="tintApp">
            <div class="fluid col-6 appTile alphaBlack iosService">
                <h2>iOS Apps</h2>      
            </div>
            <div class="fluid col-6 appTile alphaBlack androidService">
                <h2>Android Apps</h2>
            </div>
            <div class="fluid col-6 appTile alphaBlack cmsService">
                <h2>Mobile Apps and CMS</h2>
            </div>
            <div class="fluid col-6 appTile alphaBlack extraService">
                <h2>The Extra's</h2>
            </div> 
        </div>
        
        <div id='pageContainer'>
            <div class="indexDiv iosDiv ">
                <div class='wrapper'>
                    <div itemscope itemtype="http://schema.org/Service" class='fluid col-9 iOSDesc'>
                        <h1 itemprop="name">iOS App Development</h1>
                        <p>
                            <span  itemprop="provider" itemscope itemtype="http://schema.org/LocalBusiness" ><span itemprop="name">Commercial Coding</span></span> can develop <span>iOS mobile application</span>s to suit you. 
                            Our <span  itemprop="description" >mobile app development</span> services start with <span itemprop="serviceType">iOS mobile application development</span> 
                            <br>
                            <br>
                        </p>
                        <ul class='iosList'>
                            <li class="featureBox cal"><h4>Calendars</h4></li> 
                            <li class="featureBox gal"><h4>Gallery</h4></li> 
                            <li class="featureBox cam"><h4>Photos/Video</h4></li> 
                            <li class="featureBox ecom"><h4>App-commerce</h4></li> 
                        </ul>
                         <p>
                             If you'd like to talk to us about your apple based iOS app <a href="/contact.php"><b>get in touch</b> </a>today or if you want an initial estimate on your app, try our <a href="/pricing.php"><b>quoting application</b></a>.
                        </p>
                    </div>
                    <div class='fluid col-3 iosHolder'>
                        <div class='iphoneImage'>
                        </div>
                    </div>
                </div>
                <div class='clear'></div>
            </div>
            
            
            <div class="alternateIndexDiv process ">
                <div class='wrapper'>
                    <div class='devProcess fluid col-12'>
                        <h1 class="whiteText" style="margin-bottom:0;">What You Can Expect</h1>
                        <h4>Our mobile app development process can vary depending on the project</h4>
                        <div class="typesHolder">
                            <div class="devTypeBox">
                                <h2>Hands On</h2>
                                <p class="text">If you want to be really hands on with the development process by helping us with tweaks and edits as we go thats fine by us.
                                        we'll work with you every step of the way to make sure your app is just right for you.
                                </p>
                            </div>
                            <div class="devTypeBox">
                                <h2>Let Us Do It All</h2>
                                <p class="text">If you want to sit back and let us do all the hard work, we're ok with that too.                             
                            Our development team can asses your app requirements and build an intricate specification that we'll follow to the letter.</p>
                            </div>
                        </div>
                        
                    </div>

                    <div class='clear'></div>
                </div>
            </div>
            <div class="indexDiv white androidDiv">
                <div class='wrapper'>
                    <div class='fluid col-3 samsungHolder'>
                        <div class='samsungImage'>
                        </div>
                    </div>
                    <div itemscope itemtype="http://schema.org/Service"  class='fluid col-9 iOSDesc androidDesc'>
                        <h1 itemprop="name" > Android App Development</h1>
                        <p>
                            Our <span itemprop="description">mobile app development</span> services also include Android apps. 
                            The <span  itemprop="provider" itemscope itemtype="http://schema.org/LocalBusiness" ><span itemprop="name">Commercial Coding</span></span> 
                            team know the best  <span  itemprop="serviceType">Android mobile application development</span> practices which 
                            help us deliver the highest quality products.
                            <br>
                            <br>
                            we'll make sure the app's work exactly the same on both platforms, with no deprecations
                            in the quality of either software product. 
                            <br >
                            <br >
                        </p>
                        <ul class='iosList'>
                            <li class="featureBox user"><h4>User Profiles</h4></li>
                            <li class="featureBox loc "><h4>Geo-Location</h4></li>
                            <li class="featureBox activity"><h4>Activity Feed</h4></li>
                            <li class="featureBox maps"><h4>Maps</h4></li>
                        </ul>
                        <p>
                        If you'd like to have a chat about your projects potential Android app options please feel free to <a href="/contact.php"><b>get in touch</b> </a> today.
                        </p>
                    </div>

                </div>
                <div class='clear'></div>

            </div>
            
            
            <div class="alternateIndexDiv servicesBG">
                <div class='wrapper'>
                    <div class='devProcess fluid col-12 right respCenter'>
                        <h1 class="whiteText CATitle ">Our Service Packages</h1>
                        <div class="right">   
                            <h4 class="sPackage">Starter Package - Single platform mobile application </h4>
                            <br>
                            <h4 class="sPackage">Multi Package - iOS & Android mobile application</h4>
                            <br >
                            <h4 class="sPackage" style='margin-bottom:30px;'>App & CMS Package - App development plus integrated content management.</h4> 
                        </div> 
                    </div>
                    <div class='fluid col-3'></div>
                    <div class='clear'></div>
                </div>
            </div>
            
            <div class="indexDiv white cmsDiv">
                <div itemscope itemtype="http://schema.org/Service" class='wrapper iOSDesc cmsTint '>
                    <h1>Apps + CMS Package</h1>
                    <p class='cmsContent'>
                        Managing the content for your app can cost a small fortune. 
                        <span  itemprop="provider" itemscope itemtype="http://schema.org/LocalBusiness" ><span itemprop="name">Commercial Coding</span></span>'s '<span itemprop='name'>app + CMS</span>' package includes an <span itemprop='description'>integrated content management system. </span>This lets you be in control by letting publish your 
                        own updates to your app, hassle free. 
                        <br>
                        <br>
                        <span itemprop='serviceType'>Content Management System development</span> requires us to build an API for your web service which automatically sends updates to your app when you've created new content. 
                        This way your app can be updated as much or as little as you like, and always kept fresh with new content.
                    </p>
                </div>
            </div>
            
            <div class="alternateIndexDiv extraBG extraDiv">
                <div class='wrapper'>
                    <div class='devProcess fluid col-5 extras'>
                        <h1 class="whiteText CATitle ">The Extra's</h1>
                        <div class="packageHolder">   
                            <h4 class="sPackage">Support and Maintenance Contract's </h4> 
                            <h4 class="sPackage">App Redesigns</h4>
                            <h4 class="sPackage">App Service Hosting</h4>
                            <h4 class="sPackage" style='margin-bottom:30px;'>Controller Apps</h4>
                            
                            <div class='clear'></div>

                        </div> 
                    </div>
                    <div class='clear'></div>

            </div>
        </div>
        <div class='clear'></div>
        </div>
        <?php include("development/template/footer.php"); ?>
    </body>    
    
</html>