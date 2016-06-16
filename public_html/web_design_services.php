<?php
?>
<!DOCTYPE html>

<html lang="en">
    <head itemscope itemtype="http://schema.org/WebSite">
        
        
        <link  rel="canonical" href="http://commercialcoding.com/web_design_services.php" > 
        <link itemprop="url"  href="http://commercialcoding.com/web_design_services.php" > 
        <meta charset="utf-8">
        <meta name="google-site-verification" content="FD7TP00A7PcJTCWREqr_HZLAiMSHZY-ixO7Oq0H5psU"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1, maximum-scale=1.0, user-scalable=no">
        <meta name="keywords" content="mobile app development, web design, macclesfield ,web design macclesfield, iOS developer, android developer, app development macclesfield, app development manchester, web development macclesfield, mobile app developer, iphone developer, android developer, app design macclesfield, commercial coding">    
        <meta name="description" content="Commercial Coding Ltd are specialists in Website, iOS and Android development, operating out of macclesfield in Cheshire. We can design and develop mobile applications for Apple and Android devices, other services include website deign, web application development, bespoke CMS's and Website hosting.">
        <title>Commercial Coding - Website and web application design and development</title>   
        <?php include("development/template/head.php") ?> 
        <link rel="stylesheet" type="text/css" href="development/template/css/optionSelectorCSS.css">

        <style>
            .fixedImage{
                width:100%;
                background-color:lightblue;
                position:absolute;
            }

            
            .scrollingOverlay{
                padding-bottom:100px;
                width:100%;
                background-color:transparent;
                z-index:10;

            }
            
            .scrollingDiv{
                height:100vh;
            }
            
            
            .firstDiv{                
                margin:100px auto 0px auto;
                width:30%;
                padding-bottom:30%;
                border-radius:50%;
                display:inline-block;
                background-image: url('../../development/images/stacked.jpg');
                background-size:100% 100%;
                background-position: center;
                background-repeat:no-repeat;
                border:5px solid #fff;

                
            }
            .secondDiv{
                background-image: url('../../development/images/respDesigns.png');
                background-size:cover;
                background-position: center;
                background-repeat:no-repeat;
            }
            .thirdDiv{
                background-image: url('../../development/images/cms2_tra1.png');
                background-size: 120% 90%;
                background-position: center;
                background-repeat:no-repeat;
            }
            .forthDiv{
                background-image: url('../../development/images/api.jpg');
                background-size: cover;
                background-position: center;
                background-repeat:no-repeat;
            }
            .fifthDiv{
                background-image: url('../../development/images/servers.jpg');
                background-size: cover;
                background-position: center;
                background-repeat:no-repeat;
            }

            .secondDiv, .thirdDiv, .forthDiv, .fifthDiv{
                margin:20px auto 0px auto;
                width:30%;
                padding-bottom:30%;
                border-radius:50%;
                background-color:rgba(255, 255, 255,0.8);
                display:inline-block;
                border:5px solid #fff;
            }

            .holderResponsive{
                position:relative;
                background-color:rgba(255,255,255,0.0);
                border-radius:3em;
                width:100%;
                padding:20px;
                text-align:left;
            }   
                        
           

            .scrollingLine{
                width:2px;
                background-color:#fff;
                height:200px;
                margin:20px 0px 20px 50%;
                z-index:999;
                position:relative; 
                
            }

            
            .bottomPageContainer{
                width:100%;
                height:100vh;
                background-color:whitesmoke;
            }

   
            
            .fixedPos{
                position:fixed;
                top:25px;
            }
            
            .fixedBG{
                z-index:-3;
                height:105vh;
                width:100%;
                position:fixed;
                top:0;
                left:0;
                right:0;
                background-image:url('development/images/fullbackground.jpg');
                background-size:cover;
                transition:ease-in all 600ms;
                opacity:1;
            }
            
            .designImagebg{
                opacity:0!important;
            }
            
            .underFixedBg{
                z-index:-4;
                height:105vh;
                width:100%;
                position:fixed;
                top:0;
                left:0;
                right:0;
                background-image:url('development/images/web-designbg.jpg');
                background-size:cover; 
                opacity:1;
                transition:ease-in all 300ms;
            }
            .underFixedBg2{
                z-index:-5;
                height:105vh;
                width:100%;
                position:fixed;
                top:0;
                left:0;
                right:0;
                background-image:url('development/images/www2.png');
                background-size:cover; 
                opacity:1;

            }
            
     
            
            .tint_web{
                background-color: rgba(0, 0, 0, 0.4);
                background: rgba(0, 0, 0, 0.4);
                width:100%;
                height:100vh;
                text-align:center;
                transition:ease-in all 600ms;
                opacity:1
            }
            
            .tint_web_removed{
                background-color: rgba(0, 0, 0, 0.0);
                background: rgba(0, 0, 0, 0.0);  
                opacity:0;
            }
            
            
            .webHeadline{
                display: inline-block;
    background-color: rgba(255,255,255,0.8);
    color: grey;
    font-size: 22px;
    font-family: 'Open Sans Condensed', sans-serif;
    padding: 20px;
    height: auto;
    font-weight: 300;
    padding-bottom: 100px;

            }
            
            .selectHeadline{
                position:absolute;
                top:100px;
                display:block;
                font-family: 'Open Sans Condensed', sans-serif;
                font-weight:300;
                padding: 20px 20px;



            }

            
            .map-text{
                text-align: left;
                display: inline-block;
                padding: 20px;
                padding-bottom:100px;
                font-weight: 700;
                font-size: 28px;
                color:rgba(60, 173, 156, 0.9);
                font-family: 'Open Sans Condensed', sans-serif;
                background-color: rgba(255,255,255,0.8);
                margin:0 0 0 20px;
                font-family: 'Open Sans Condensed', sans-serif;

  
            }
/*                font-family: 'Mr Dafoe', cursive;
*/            
            
            
            .lastTH{
                height:350px!important;
            }
            
            .textholder{
                display:inline-block;
                width:65%;
                float:right;
                margin-top:80px;
                height: auto;

            }
            

            .noMarginTop{
                margin-top:0;
            }
            
            .topbox{
                display:block;
                height:40%;
                
            }
            .topleftRadius{
                border-top-left-radius: 25px;
            }
            .toprightRadius{
                border-top-right-radius: 25px;

            }
            .bottomleftRadius{
                border-bottom-left-radius: 25px;
               
            }
            .bottomrightRadius{
                border-bottom-right-radius: 25px;
               
            }
            
            .titleSpan{
                display:block;
                font-weight: 700;
                font-size: 26px;
                margin-bottom:10px;
                color: rgba(60, 173, 156, 0.9);
            }
            
            .checkService{
                display: block;
                background-color: rgba(60, 173, 156, 0.9);
                color: #fff;
                position: absolute;
                bottom: 0;
                right: 0;
                left: 0;
                padding: 5px 80px 5px 18px;
                height: 64px;
            }
            
            .arrow-right {
                width: 0; 
                height: 0; 
                border-top: 20px solid transparent;
                border-bottom: 20px solid transparent;
                border-left: 20px solid #fff;
                position:absolute;
                right:20px;
                bottom:20px;
            }
            
            .sList{
                display:block;
                margin-left:15px;
            }
            
        </style>
        
    </head>
    <body>
        <script>
            window.onscroll = function() { 
                var width = $(window).width();
                console.log("my width: " +width);
                if(window.scrollY >= 5) {
                    $(".navContainer").addClass("scrolling");	
                } else if(window.scrollY < 120) {
                    $(".navContainer").removeClass("scrolling");
                }

                if(width <500){
                    if(window.scrollY >= 100) {
                        $(".fixedBG").addClass('designImagebg'); 
                        $(".tint_web").addClass('tint_web_removed'); 
                    }else{
                        $(".fixedBG").removeClass('designImagebg'); 
                        $(".tint_web").removeClass('tint_web_removed'); 
                    } 

                    var height = $(window).height()/3;
                    console.log("scroll y " + window.scrollY + " > " + height);
                    if(window.scrollY >= height) {
                        $(".underFixedBg").addClass('designImagebg'); 
                    }else{
                        $(".underFixedBg").removeClass('designImagebg'); 
                    }
                }else{
                    if(window.scrollY >= 20) {
                        $(".fixedBG").addClass('designImagebg'); 
                        $(".tint_web").addClass('tint_web_removed'); 
                    }else{
                        $(".fixedBG").removeClass('designImagebg'); 
                        $(".tint_web").removeClass('tint_web_removed'); 
                    } 

                    var height = $(window).height()/3;
                    console.log("scroll y " + window.scrollY + " > " + height);
                    if(window.scrollY >= height) {
                        $(".underFixedBg").addClass('designImagebg'); 
                    }else{
                        $(".underFixedBg").removeClass('designImagebg'); 
                    }    
                }
            
            };
            
            
            
            $(document).ready(function(){
               var width = $(window).innerWidth();
                
                if(width > 500){
                $(".design").hover(function(){
                    $(".opt1").addClass("opt1Animate");
                    $(".desText").css("display", "block");
                    $(".selectHeadline").css("display", "none");
                    
                },function(){
                    $(".opt1").removeClass("opt1Animate");
                    $(".desText").css("display", "none");
                    $(".selectHeadline").css("display", "block");

                });
            $(".responsive").hover(function(){
                    $(".opt2").addClass("opt2Animate");
                    $(".resText").css("display", "block");
                    $(".selectHeadline").css("display", "none");


                },function(){
                    $(".opt2").removeClass("opt2Animate");
                    $(".resText").css("display", "none");
                    $(".selectHeadline").css("display", "block");

                });
            $(".webCMS").hover(function(){
                    $(".opt3").addClass("opt3Animate");
                    $(".cmsText").css("display", "block");
                    $(".selectHeadline").css("display", "none");

                },function(){
                    $(".opt3").removeClass("opt3Animate");
                    $(".cmsText").css("display", "none");
                     $(".selectHeadline").css("display", "block");

                });
                $(".webAPI").hover(function(){
                    $(".opt4").addClass("opt4Animate");
                    $(".apiText").css("display", "block");
                    $(".selectHeadline").css("display", "none");

                },function(){
                    $(".opt4").removeClass("opt4Animate");
                    $(".apiText").css("display", "none");
                    $(".selectHeadline").css("display", "block");

                });
                $(".webHosting").hover(function(){
                    $(".opt5").addClass("opt5Animate"); 
                    $(".hostingText").css("display", "block");
                    $(".selectHeadline").css("display", "none");

                },function(){
                    $(".opt5").removeClass("opt5Animate");
                    $(".hostingText").css("display", "none");
                    $(".selectHeadline").css("display", "block");

                });
            } 
            
        
                $(".webServiceList.design").click(function() {
                    $('html,body').animate({
                        scrollTop: $(".firstAnchor").offset().top-100},
                        'slow');
                });   
                $(".opt.opt1").click(function() {
                    $('html,body').animate({
                        scrollTop: $(".firstAnchor").offset().top-100},
                        'slow');
                });  
                
                
                $(".webServiceList.responsive").click(function() {
                    $('html,body').animate({
                        scrollTop: $(".secAnchor").offset().top-100},
                        'slow');
                });   
                $(".opt.opt2").click(function() {
                    $('html,body').animate({
                        scrollTop: $(".secAnchor").offset().top-100},
                        'slow');
                });  
                
                
                $(".webServiceList.webCMS").click(function() {
                    $('html,body').animate({
                        scrollTop: $(".thirdAnchor").offset().top-100},
                        'slow');
                });   
                $(".opt.opt3").click(function() {
                    $('html,body').animate({
                        scrollTop: $(".thirdAnchor").offset().top-100},
                        'slow');
                });                

                
                $(".webServiceList.webAPI").click(function() {
                    $('html,body').animate({
                        scrollTop: $(".forthAnchor").offset().top-100},
                        'slow');
                });   
                $(".opt.opt4").click(function() {
                    $('html,body').animate({
                        scrollTop: $(".forthAnchor").offset().top-100},
                        'slow');
                }); 
                $(".webServiceList.webHosting").click(function() {
                    $('html,body').animate({
                        scrollTop: $(".fifthAnchor").offset().top-100},
                        'slow');
                });   
                $(".opt.opt5").click(function() {
                    $('html,body').animate({
                        scrollTop: $(".fifthAnchor").offset().top-100},
                        'slow');
                });                

            });
           
   

        </script>
        <?php include("development/template/branding.php"); ?> 

                        
        <div class="fixedBG"></div>
        <div class="underFixedBg"></div>
        <div class="underFixedBg2"></div>
        <div class="tint_web">
            
            <div class="optionHolder">
                
                <div class="serviceSelector fluid col-5 ">
                    
                    <div class="opt opt1"></div>
                    <div class="opt opt2"></div>
                    <div class="opt opt3"></div>
                    <div class="opt opt4"></div>
                    <div class="opt opt5"></div>
                    <div class="opt opt6"></div>
                    
                    <div class="serviceHolder"> 
                        <h2 class="webServiceList design">Website Design</h2>
                        <h2 class="webServiceList responsive">Responsive Website</h2>
                        <h2 class="webServiceList webCMS">CMS</h2>
                        <h2 class="webServiceList webAPI">Website API </h2>
                        <h2 class="webServiceList webHosting">Web Hosting</h2>
                    </div>
                </div>
                <div class="fluid col-7 quickContentSelected" >
                    <h1 class="selectHeadline">Select a service to find out more</h1>
                    <div class="quickContent">
                        <p class="desText">We can design and develop all types of websites to suit you, from Wordpress to bespoke sites made with only you in mind.</p>
                        <p class="resText">We can offer full mobile platform support, to ensure your site is optimized for all screen sizes allowing it to be viewable on a multitude of devices. </p>
                        <p class="cmsText">Content Management Systems are a great way to manage the content on your website without the help of a development team. We can develop a bespoke easy to use CMS just for you, giving you complete control of the content on your website.</p>
                        <p class="apiText">Your website might require an API to handle its business logic or manage its database, either way we can develop and implement a bespoke API to help your website run as smooth as ever.</p>
                        <p class="hostingText">We offer website hosting for all websites we develop, This will ensure your website will be online straight away.</p>                            
                    </div>
                </div>
            </div>
            
        </div>
        
            <div class="scrollingOverlay">

                <div class="wrapper">
                    <div class="holderResponsive firstAnchor">
                        <div class="firstDiv"></div>
                        <div class='noMarginTop textholder'>
                                <h2 class='fluid col-6 webHeadline '>
                                    <span class='titleSpan'><span class="arrowImage"></span>Its a Digital Age</span> 
                                    <span class="respContent">We've gone from the stone age to the digital age, where online digital media 
                                    has embedded itself into our culture and every day life. This makes it the most 
                                    the effective method of commercialisation and recognition for business today. 
                                    </span>
                                    <span class='titleSpan'><span class="arrowImage"></span>Online Presence</span> 
                                    <span class="respContent">
                                        To get noticed in the digital age you need to build a significant online presence by 
                                        establishing a brand and provoking your target market to reach out. This is where we
                                        come in, we can design all styles of websites from corporate to funky fresh. 
                                    </span>

                                    <span class="respServiceSpan">  
                                        <span class="respTitleSpan">Our Web Design Services</span>
                                        <span class='sList'>Logo Design</span>
                                        <span class='sList'>Website Design</span>
                                        <span class='sList'>Brand Development</span>
                                    </span> 

                                    <a href='http://www.commercialcoding.com/pricing.php'>
                                        <span class='checkService'> <span class='repsBigScreenCheck'>Check the web design services we offer to help you get started</span><span class='getQuoteTitleSpan'>Click here for a web design quote</span><span class='arrow-right'></span></span>
                                    </a>

                                </h2>
                                <p class="fluid col-3 map-text ">
                                    Services:
                                    <span class='sList'>Logo Design</span>
                                    <span class='sList'>Website Design</span>
                                    <span class='sList'>Brand Development</span>
                                    
                                    <a href='http://www.commercialcoding.com/pricing.php'>
                                        <span class='checkService getQuote '>Get A Quote</span>
                                    </a>
                                    
                                    <!-- These days people not only want online digital media but they expect it! -->
                                </p>                          
      
                        </div>
                        <div class='clear'></div>
                    </div>
                    <div class="scrollingLine"></div>
                    <div class="holderResponsive secAnchor">
                        <div class=" secondDiv"></div>
                          <div class='noMarginTop textholder'>
                            <h2 class='fluid col-6 webHeadline '>
                                <span class='titleSpan'><span class="arrowImage"></span>Media On The Go</span> 
                                <span class="respContent">

                                A strong online presence doesn't end with a well designed website, if you 
                                really want to increase interest in your business people need to be able 
                                to see what you've got on offer all the time and that means on the go too.                                    
                                </span>
                                
                                <span class='titleSpan'><span class="arrowImage"></span>Our Responsive Designs</span>
                                <span class="respContent">
                                    Our responsive designs allow your website to present seamlessly across all 
                                    screen sizes and resolutions including  4k and retina display for tablets, 
                                    phones and big screen TV's
                                </span>
                                <span class="respServiceSpan">
                                    <span class="respTitleSpan">Our Responsive Design Services: </span>
                                    <span class='sList'>Fully Responsive websites</span>
                                    <span class='sList'>Slide out menus</span>
                                    <span class='sList'>Multiple device websites</span>  
                                    
                                </span>    

                                <a href='http://www.commercialcoding.com/pricing.php'>
                                    <span class='checkService '>  <span class='repsBigScreenCheck'>Check the responsive design services we offer.</span><span class='getQuoteTitleSpan'>Click here for a responsive design quote</span><span class='arrow-right'></span></span>
                                </a>
                            </h2>
                            <p class="fluid col-3 map-text ">
                                    Services:
                                    <span class='sList'>Fully Responsive</span>
                                    <span class='sList'>Slide out menus</span>
                                    <span class='sList'>Multiple devices</span>
                                    <a href='http://www.commercialcoding.com/pricing.php'>
                                        <span class='checkService getQuote'>Get A Quote</span>
                                    </a>
                                    
                                    <!-- We've gone from the stone age to the digital age, where online media is part of day to day life. -->
                                </p>
                           </div>
                        <div class='clear'></div>

                    </div>
                    <div class="scrollingLine"></div>
                    <div class="holderResponsive thirdAnchor">
                        <div class=" thirdDiv"></div>
                          <div class='noMarginTop textholder'>
                            <h2 class='fluid col-6 webHeadline '>
                                <span class='titleSpan'><span class="arrowImage"></span>Keep your Website Fresh</span> 
                                <span class="respContent">
                                 There's nothing worse than a out of date website thats not been maitained,
                                or the latest post is from three years ago. Its important to keep your site updated with new
                                content to let your customers know your still in business. 
                                </span>
                                <span class='titleSpan'><span class="arrowImage"></span>Content Management Systems</span> 
                                <span class="respContent">
                                Our content management systems can be developed with you in mind, allowing you to update your website 
                                when you want to with out any help from anyone.
                                </span>     
                                <span class="respServiceSpan">
                                    <span class="respTitleSpan">Our CMS Services</span> 
                                    <span class='sList'>Bespoke CMS</span>
                                    <span class='sList'>Full content control</span>
                                        
                                </span>    
                                <a href='http://www.commercialcoding.com/pricing.php'>
                                    <span class='checkService '> <span class='repsBigScreenCheck'>Check the CMS services we offer</span><span class='getQuoteTitleSpan'>Click here for a CMS quote</span><span class='arrow-right'></span></span>
                                </a>
                            </h2>
                            <p  class="fluid col-3 map-text ">
                               Services:
                                    <span class='sList'>Bespoke CMS</span>
                                    <span class='sList'>Full content control</span>
                                    <span class='sList'></span>
                                <!-- We've gone from the stone age to the digital age, where online media is part of our very existence.    --> 
                            
                                    <a href='http://www.commercialcoding.com/pricing.php'>
                                        <span class='checkService getQuote '>Get A Quote</span>
                                    </a>
                            </p>            
                        </div>
                        <div class='clear'></div>

                    </div>
                             
                    <div class="scrollingLine"></div>
                    <div class="holderResponsive forthAnchor">
                        <div class=" forthDiv"></div>
                          <div class='noMarginTop textholder'>
                            <h2 class='fluid col-6 webHeadline '>
                                <span class='titleSpan'><span class="arrowImage"></span>Web Services</span> 
                                 <span class="respContent">
                                    Web applications rely heavily on web services to handle their business logic. Web services 
                                    are used to send and receive data between the client browser and database, they also handle 
                                    calculations and data manipulation.
                                 </span>
                                <span class='titleSpan'><span class="arrowImage"></span>API Programming</span>
                                <span class="respContent">
                                    Web services implement Application programming Interface's. This is the endpoint which receives
                                    requests from the client browser, and handles the request data and directs data to storage. We have great experience 
                                    developing web service API's for all types of mobile and web applications. 
                                </span>
                                <span class="respServiceSpan">
                                    <span class="respTitleSpan">Our API services: </span>
                                    <span class='sList'>Web Services</span>
                                    <span class='sList'>Web Service hosting</span>
                                    <span class='sList'>API Development</span>
                                        
                                </span>    
                                <a href='http://www.commercialcoding.com/pricing.php'>
                                    <span class='checkService '> <span class='repsBigScreenCheck'> Check the API services.</span><span class='getQuoteTitleSpan'>Click here for a API quote</span><span class='arrow-right'></span></span>
                                </a>    
                            </h2>
                            <p  class="fluid col-3 map-text ">
                                Services:
                                    <span class='sList'>Web Services</span>
                                    <span class='sList'>Web Service hosting</span>
                                    <span class='sList'>API Development</span>
                                    
                                    <a href='http://www.commercialcoding.com/pricing'>
                                        <span class='checkService getQuote'>Get A Quote</span>
                                    </a>
                            </p>              
                        </div>
                        <div class='clear'></div>

                    </div>

                    <div class="scrollingLine"></div>
                        <div class="holderResponsive fifthAnchor">
                            <div class=" fifthDiv"></div>
                            <div class='noMarginTop textholder lastTH'>
                                <h2 class='fluid col-6 webHeadline  '>
                                <span class='titleSpan'><span class="arrowImage"></span>Web Hosting</span> 
                                <span class="respContent">
                                A web hosting is a type of Internet hosting service that allows 
                                individuals and organizations to make their website accessible via the World Wide Web. 
                                </span>                    
                                <span class="respServiceSpan">
                                    <span class="respTitleSpan">Our Hosting Services</span> 
                                    <span class='sList'>Website Hosting</span>
                                    <span class='sList'>Web Application Hosting</span>
                                    <span class='sList'>Web Service Hosting</span>
                                        
                                </span>               
                                <a href='http://www.commercialcoding.com/pricing.php'>
                                    <span class='checkService '>  <span class='repsBigScreenCheck'>Check the Hosting services we offer on the right.</span><span class='getQuoteTitleSpan'>Click here for a Hosting quote</span><span class='arrow-right'></span></span>
                                </a>
                            </h2>
                            <p  class="fluid col-3 map-text">
                                Services:
                                    <span class='sList'>Website Hosting</span>
                                    <span class='sList'>Web Application Hosting</span>
                                    <span class='sList'>Web Service Hosting</span>   
                            
                                    <a href='http://www.commercialcoding.com/pricing.php'>
                                        <span class='checkService getQuote'>Get A Quote</span>
                                    </a>
                            </p>    
                            </div>
                            <div class='clear'></div>

                    </div>
                 
                </div>
            </div>
            <?php include("development/template/footer.php"); ?>

    </body>
</html>