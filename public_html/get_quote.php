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
        <title>Commercial Coding - Web, iOS and Android design</title>
    <?php include("development/template/head.php") ?> 
    </head>
    <body>
        
        <?php include("development/template/branding.php") ?>
        <div id='pageContainer'>
            
            <div id="quoteApplication">
                <div id="quoteWrapper">
                    <div><h1 class="headlineQuestion"></h1></div>
                    <div class="quoteBoxHolder">    
                        <div data-projecttype="website" class=" bgimage_websiteProject col-2 quoteTypeBox ptype"><p>Website project</p></div>
                        <div data-projecttype='mobileApp'  class="bgimage_appProject col-2 quoteTypeBox ptype"><p>Mobile App project</p></div>
                        <div  data-projecttype='webApp' class="bgimage_webAppProject col-2 quoteTypeBox  ptype"><p>Web App project</p></div>
                    </div>
                    <div class="clear"></div>
                    <div class="completeQuote"><button class="submitQuote">Complete Quote</button><button class="appFinalStage">Selection Complete</button></div>
                </div>
                <div class="clear"></div>

            </div>
            <div id="background" class="no-image">
                <h1 class="tagLine">Get An Initial Quote</h1>
            </div> 
            
            <div class="getStarted" style="margin-top:150px;">
                <h2>Our online quoting application can give you a no-obligation initial estimate for your project.</h2>
                <h2>Click the start button to begin</h2>
                <button class="startQuoteButton">Start</button>
            </div>
            <div class="clear"></div>

        </div>
        <?php include("development/template/footer.php"); ?>

    </body>
</html>