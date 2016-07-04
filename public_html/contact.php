<!DOCTYPE html>
<html  lang="en"> 
    <head itemscope itemtype="http://schema.org/WebSite">
        <title>Contact Commercial Coding web design team</title>

        <link  rel="canonical" href="http://commercialcoding.com/contact" > 
        <link itemprop="url"  href="http://commercialcoding.com/contact" > 
        <meta charset="utf-8">
        <meta name="google-site-verification" content="FD7TP00A7PcJTCWREqr_HZLAiMSHZY-ixO7Oq0H5psU"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1, maximum-scale=1.0, user-scalable=no">
        
        
        <meta name="keywords" content="contact commercial coding, commercial coding, commercial coding web design team, commercial coding app design team, Send Commercial Coding a Message ">    
        
        
        <meta name="description" content="Contact Commercial Coding page. contact the commercial coding web design team or contact the commercial coding app design team by sending us a message.">
         <?php include("development/template/head.php") ?> 
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script> 
        <script type="text/javascript" src="https://www.google.com/jsapi"></script>
        <script type="text/javascript" src="development/js/mapScript.js" ></script>
    </head>
    <body>
        
        <?php include("development/template/branding.php") ?>

        <div id="mapBackground">
                <div id="map_div" class="actual"></div>
        </div>  
        
        <div id='pageContainer'>    
        <div class='wrapper'>
        <h1 class="contactTitle" style='display:block; text-align:center;'><span class="dash">-</span> Contact Commercial Coding<span class="dash">-</span></h1>
        <h2 class="contactTitle" style='display:block;  text-align:center;'>The Commercial coding Web design and app design team want to hear from you!</h2>
        <div class='clear'></div>  
        <div class=" fluid col-6 contact_deets">
           <div class="contactMargin"  itemscope itemtype="http://schema.org/LocalBusiness">
                <h3 class="address">Address:</h3>

                <div class="align_elements">
                    <h4> <span itemprop="legalName">Commercial Coding Ltd</span></h4>
                    <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                        <h4><span itemprop="streetAddress">14 Water Street</span></h4>
                        <h4><span itemprop="addressLocality">Macclesfield</span></h4>
                        <h4> <span itemprop="addressRegion">Cheshire</span></h4>
                        <h4><span itemprop="postalCode">SK11 6PH </span></h4>
                    </div>
                </div>
                <h3 class="phone">Telephone:</h3>
                <div class="align_elements">
                    <h4><span itemprop="telephone">07470 213155</span></h4>
                </div>
                    <h3 class="email">Email:</h3>
                <div class="align_elements">
                    <h4><span itemprop="email">info@commercialcoding.com</span></h4>
                </div>
            </div>
        </div>
        <hr class='dividerHR'>
        <div class="fluid col-6 contact_form">
            <h2 class="contactTitle"><span class="dash">-</span> Send Commercial Coding a Message <span class="dash">-</span></h2>
            <form method="post" action='development/endPoint.php' id="contactform">
                <div class="fluid col-12 row"><label class="fluid responsiveWidth col-3 ">Name: </label><input class="fluid col-6 responsiveWidth" type="text" name="name" ></div>
                <div class="fluid col-12 row"><label class="fluid col-3 responsiveWidth ">Email: </label><input  class="fluid col-6 responsiveWidth" type="text" name="email" ></div>
                <div class="fluid col-12 row"><label class="fluid col-3 responsiveWidth ">Telephone: </label><input  class="fluid col-6 responsiveWidth" type="text" name="phone" ></div>
                <div class="fluid col-12 row"><label class="fluid col-3 responsiveWidth ">Enquiry type: </label><select  class="fluid col-6 responsiveWidth" name="enq_type" ><option>General</option><option>Website query</option><option>App query</option></Select></div>
                <div class="fluid col-12 row"><label class="fluid col-3 responsiveWidth ">Message: </label><textarea  class="fluid col-6 responsiveWidth" id="message" name="message" ></textarea></div>
                <div class="fluid col-12 "><input type="submit" value="Submit"></div>
                <input type="hidden" name='method' value='contactUS'>
            </form>
        </div>
        <div class="clear"></div>
        </div>
        </div>
        <?php include("development/template/footer.php"); ?>
    </body>    
    
</html>
