<?php
    if(isset($_GET['sent'])){
        
    }
?>
<!DOCTYPE html>
<html  lang="en"> 
    <head itemscope itemtype="http://schema.org/WebSite">
        
        <link  rel="canonical" href="http://commercialcoding.com/contact.php" > 
        <link itemprop="url"  href="http://commercialcoding.com/contact.php" > 
        <meta charset="utf-8">
        <meta name="google-site-verification" content="FD7TP00A7PcJTCWREqr_HZLAiMSHZY-ixO7Oq0H5psU"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1, maximum-scale=1.0, user-scalable=no">
        <meta name="keywords" content="web design, web design macclesfield, iOS developer, android developer, app development macclesfield, app development manchester, web development macclesfield, mobile app developer, iphone developer, android developer, app design macclesfield, commercial coding">    
        <meta name="description" content="Commercial Coding Ltd are specialists in Website, iOS and Android development, operating out of macclesfield in Cheshire. We can design and develop mobile applications for Apple and Android devices, other services include website deign, web application development, bespoke CMS's and Website hosting.">
        
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script> 
        <script type="text/javascript" src="https://www.google.com/jsapi"></script>
        <title>Commercial Coding - Contact our mobile application and website developers today</title>
        <script type="text/javascript">
            google.charts.load("current", {packages:["map"]});
            google.charts.setOnLoadCallback(drawChart);
            function drawChart() {
              var data = google.visualization.arrayToDataTable([
                ['Lat', 'Long', 'Name'],
                [53.258581,-2.129295, 'Commercial Coding'],
              ]);
 
                var options = {
                    showtip:true,
                    zoomLevel: 13,
                    mapType: 'normal'
                 };
              var map = new google.visualization.Map(document.getElementById('map_div'));
              map.draw(data, options);
            }

    </script>
 <?php include("development/template/head.php") ?> 
    </head>
    <body>
        
        <?php include("development/template/branding.php") ?>

        <div id="mapBackground">
                <div id="map_div" class="actual"></div>
        </div>  
        
        <div id='pageContainer'>    
        <div class='wrapper'>
                
        <div class=" fluid col-6 contact_deets">
            <h2 class="contactTitle"><span class="dash">-</span> Contact <span class="dash">-</span></h2>
            <div class="contactMargin"  itemscope itemtype="http://schema.org/LocalBusiness">
                <h4 class="address">Address:</h4>

                <div class="align_elements">
                    <h4> <span itemprop="legalName">Commercial Coding Ltd</span></h4>
                    <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                        <h4><span itemprop="streetAddress">14 Water Street</span></h4>
                        <h4><span itemprop="addressLocality">Macclesfield</span></h4>
                        <h4> <span itemprop="addressRegion">Cheshire</span></h4>
                        <h4><span itemprop="postalCode">SK11 6PH </span></h4>
                    </div>
                </div>
                <h4 class="phone">Telephone:</h4>
                <div class="align_elements">
                    <h4><span itemprop="telephone">07470 213155</span></h4>
                </div>
                    <h4 class="email">Email:</h4>
                <div class="align_elements">
                    <h4><span itemprop="email">info@commercialcoding.com</span></h4>
                </div>
            </div>
        </div>
        <hr class='dividerHR'>
        <div class="fluid col-6 contact_form">
            <h2 class="contactTitle"><span class="dash">-</span> Leave a message <span class="dash">-</span></h2>
            <form method="post" action='development/endPoint.php' id="contactform">
                <div class="fluid col-12 row"><div class="fluid responsiveWidth col-6 "><label>Name: </label></div> <div class="fluid col-6 responsiveWidth "><input type="text" name="name" ></div></div>
                <div class="fluid col-12 row"> <div class="fluid col-6 responsiveWidth "><label>Email: </label></div><div class="fluid col-6 responsiveWidth "><input type="text" name="email" ></div></div>
                <div class="fluid col-12 row"> <div class="fluid col-6 responsiveWidth "><label>Telephone: </label></div><div class="fluid col-6 responsiveWidth "><input type="text" name="phone" ></div></div>
                <div class="fluid col-12 row"><div class="fluid col-6 responsiveWidth "><label>Enquiry type: </label></div><div class="fluid col-6 responsiveWidth "><select name="enq_type" ><option>General</option><option>Website query</option><option>App query</option></Select></div></div>
                <div class="fluid col-12 row"><div class="fluid col-6 responsiveWidth "><label>Message: </label></div><div class="fluid col-6 responsiveWidth "><textarea id="message" name="message" ></textarea></div></div>
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
