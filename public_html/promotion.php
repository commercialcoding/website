<?php
    $offerName ='';
    if(isset($_GET['offer'])){
        $offerName = $_GET['offer'];
    }

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
        });
        
        </script>
        
        <style>
        
            .promoBanner{
                margin: 0;
                height: 50%;
                background-color: #fff;
            }
            .promoBannerScrolling{
                margin: 0;
                height: 50%;
            }
             .promoBannerScrolling h1 span{
                color:#2C53D0;
            }
            .promoBanner h1 span{
                font-weight:400;
                color:red;
            }
            .promoBanner h1, .promoBannerScrolling h1{
                color: #2C53D0;
                margin: 0;
                font-family: 'Roboto', sans-serif;
                font-weight: 100;
                font-size: 20px;
                text-align: center;
                padding-top: 15px;
            }
            
            .promoBannerScrolling h1{
                background-color:#000;
                height:80%;
                color: #fff;
                font-weight:400;
            }
            
            .saleBanner{
                padding:60px 0px 60px 0px;
                text-align:center;
                background-color:#2C53D0;
            }
            .saleBanner img{
                margin:0 auto;
                height:400px;
                width:640px;
                
            }
            .offerDetails{
                font-family: 'Roboto', sans-serif;
                font-weight:400;
                padding:0px;
            }
            .offerDetails h1{
                margin-top:40px;
                font-size:30px;
                color:#2C53D0;
                font-weight:400;
            }
            .offerDetails span{
                color:#000;
                font-size:13px;
            }
            
            .offerDetails h3{
                font-size:22px;
                padding-left:30px;
                font-weight:400;
            }
            
            .offerDetails .whatsIncluded ul{
                padding-left:90px;
                list-style-type:none;
                font-weight:400;
            }
            
            .offerDetails .whatsIncluded ul li{
                font-size: 14px;
                height: 30px;
                color: grey;
                display: inline-block;
                line-height: 30px;
                margin-bottom:25px;
                position: relative;
                width: 30%;
                padding-left: 40px;
                
            }
            
            .offerDetails .whatsIncluded ul li img{
                height: 30px;
                position: absolute;
                left: 0;
            }
            
            
            .offerDetails p{
                padding-left:0px;
                font-size:15px;
                color:grey;
                margin-top:10px;
                font-weight:400;
                width:85%;

            }
            
            .fixedBox{
                position:absolute;
                right:0;
                bottom:0;
                float:none;
                background-color:whitesmoke;
                
            }
            
            .fixedBox ul li {
                margin-bottom:20px;
                list-style-type: none;
            }
            
        </style>
    </head>
    <body>
        <?php include("development/template/branding.php") ?>
        <div id='pageContainer'>
            <div class='saleBanner fluid col-12'>
                <div class='wrapper '>
                    <img src='development/images/webSale.png' />
                </div>  
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
            <div class='offerDetails'>
                <?php include("promos/" . $offerName .".php"); ?>
            </div>
            <div class='clear'></div>
        </div>
        <?php include("development/template/footer.php"); ?>
    </body>
</html>