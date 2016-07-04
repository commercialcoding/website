<?php
?>
<!DOCTYPE html>
<html  lang="en">

    <head>
        <meta charset="utf-8">
        <link  rel="canonical" href="http://commercialcoding.com/services" > 

        <meta name="google-site-verification" content="FD7TP00A7PcJTCWREqr_HZLAiMSHZY-ixO7Oq0H5psU"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1, maximum-scale=1.0, user-scalable=no">
        <meta name="keywords" content="app development, iOS development, Android development, web design, promotion, web development, Commercial Coding, Services list, bespoke websites, services "> 
        <meta name="description" content="Commercial Coding Services list includes app development including iOS development and Android development, web design, promotion and web development">
        <title>Digital Development services - app design, web design</title> 
        <?php include("development/template/head.php") ?> 
        <link rel="stylesheet" type="text/css" href="development/tiltedSS/css/normalize.css" />
        <link rel="stylesheet" type="text/css" href="development/tiltedSS/css/demo.css" />
        <link rel="stylesheet" type="text/css" href="development/tiltedSS/css/component.css" />
        <link rel="stylesheet" type="text/css" href="development/template/css/typographyCSS.css" />
        <link rel="stylesheet" type="text/css" href="development/NestedAccordion/css/default.css" />
        <link rel="stylesheet" type="text/css" href="development/NestedAccordion/css/component.css" />
        <script src="development/NestedAccordion/js/jquery.cbpNTAccordion.min.js" />
        
        
        <script>
            
        </script>
        <style>
            .slideshow{
                margin:0;
            }
            .colorChanger{
                background-color:#fff;
                animation: background-color 8s infinite alternate

                /*
                -webkit-animation: color_change 900s infinite alternate;
                -moz-animation: color_change 1s infinite alternate;
                -ms-animation: color_change 1s infinite alternate;
                -o-animation: color_change 1s infinite alternate;
                animation: color_change 8s infinite alternate;*/
            }
            @-webkit-keyframes color_change {
                from { background-color: #2C53D0; }
                to { background-color:    #33ccff; }
            }
            
            .sliderTitle{
                padding:40px 0px 20px 0px;
                color:White;
            }
            h1.sliderTitle, h2.sliderTitle{
                padding: 20px 0px;
                font-family: 'Open Sans Condensed', sans-serif;
                font-size: 38px;
                display: inline-block;
                margin: 0;
            }
            
            .white{
                background-image: url('development/images/halfSlide.png');
                background-size:50%;
                background-repeat: no-repeat;
                background-color:#fff!important;
            }
            .description p{
                color:lightgray;
                font-size:18px;
                width:80%;
            }
            
            .bigNavContainer{
                text-align:center;
                padding-bottom:0px;
            }
            .bigNavCards{
                text-align:center;
                background-color:#222;
            }
            
            .bigNavCards ul{
                margin:0 auto;
                display: inline-block;
                padding: 0;
                list-style-type: none;
                font-weight: 400;
                font-size: 20px;
            }
            .bigNavCards span{
                height:100%;
                width:2px;
                background-color: #000;
                display:inline-block;
            }
            .bigNavCards ul li {
                display:inline-block;
                padding:100px 60px 30px 60px;
                color:#fff;
                font-weight:400;
                text-transform: uppercase;
                font-size:15px;
                line-height:15px;
                position:relative;
            }
            
            .bigNavCards ul li:hover{
                background-color:#000!important;
                cursor:pointer;
                
            }
            
            
            .bigNavCards ul li img{
                position:absolute;
                top:20px;
                right:0;
                left:0;
                margin:0 auto;
                height:70px;
                width:70px;
                opacity:1;
                transition:ease-in 200ms all;
            }
            
            .lockNewBar{
                position:fixed;
                top:0px;
                width:100%;
                z-index:999;
            }
            .hideMyImage{
                opacity:0!important;
            }
            
            .addScrollMargin{
                margin-top:130px;
            }
            
            .sectionContent{
                padding:60px 0px;
                text-align:left;
                
            }
            .sectionContent h2{
                font:14px/1.75 'Roboto', sans-serif;
                font-size:2em;
                font-weight:400;
                color:#2C53D0;
                padding:0;
                margin:10px 0px;
                display:block;
            }
            .sectionContent h3{
                font-family: 'Roboto', sans-serif;
                font-weight:400;
                color:grey;
                font-size:27px;
                padding:0;
                margin:10px 0px;
                display:block;
            }
            
            .parallaxBG{
                position:fixed;
                left:0;
                top:0;
                right:0;
                background-image:url(development/images/proj_2.jpg);
                background-size:cover;
                background-repeat: no-repeat;
                z-index:1;
                height:100%;
                
            }
            
            .overlay{
                position:relative;
                z-index:777;
            }
            .centerDesign{
                float: none;
                margin: 0 auto;
                width:60%!important;
                height:auto;
                padding:60px 0px;
            }
            
            .centerDesign h3{
                margin-top:20px;

            }
            
            .sideNav{
                display:inline-block;
                min-width:120px;
                margin:0px 0px 0px 40px;
                padding:0;
                list-style-type: none;
                background-color:rgba(0,0,0,0);
                float:left;
                
            }
            
            .sideNav li{
                margin-bottom: 12px;
                padding: 0;
                line-height: 120px;
                height: 120px;
                width: 120px;
                background-color: #222;
                color: #fff;
                text-align: center;
                border: 1px solid #fff;
            }
            
            .sideNav li:hover{
                cursor:pointer;
                background-color:#000;
                
            }
            .webdevelopment{
                width:70%;
                background-color:rgba(0,0,0,0.8);
                height:520px;
                display:inline-block;
                margin-left:40px;
                float:left;
                padding:50px 90px;
                border: 1px solid #fff;

            }
            .webdevelopment div{
                display:none;
                opacity:0;
                transition:ease-in 300ms all;
            }
            .currentWDDiv{
                opacity:1!important;
                display:block!important;
            }
            
            
            .currentContent{
                background-color:#000!important;
            }
            
            .promosDiv{
                height:auto;
                background-color:#fff;
                text-align:center;
                color:#2C53D0;
                padding:20px 0px 40px  0px;
            }
            
            .promosDiv h2{
                margin-top:0px;
                font-size:34px;
                font-weight:400;
                color:#2C53D0;
                font-family: 'Roboto', sans-serif;
            }
            .promosDiv h3.cbp-nttrigger{
                font-size:24px;
                font-weight:400;
                color:#999;
                margin-bottom:0;
                margin-top:0px;
                font-family: 'Roboto', sans-serif;
            }
            
            .cmsContent, .cmsContent h2, .cmsContent p{
                text-align:center;
                color:#fff;
                
                
            }
            .cmsContent p{
                font-weight:100;
                font-size:20px;

            }
            .cmsContent h2, .cmsContent p{
                margin:0px 0px 50px 0px;
            }
            
            
            .webDevList{
                padding:0;
                list-style-type: none;
                text-align:left;
            }

            .webDevList li {
                width: 44%;
                padding-left: 60px;
                display: inline-block;
                margin-bottom: 20px;
                margin-left:30px;
                color: #fff;
                text-align: left!important;
                height: 100px;
                float: left;
                position:relative;
            }
            .webDevList li span{
                height:50px;
                width:50px;
                background-color:#fff;
                border-radius:50px;
                position:absolute;
                left:0;
                top:0px;
                  
            }
            
            .csText2{
                background-image:url("development/images/appsDevelopment.jpg");
                background-size:cover;
                height:900px!important;
                
                background-color:rgba(0,0,0,0.6)!important;
                
                
            }
        </style>
    </head>
    
    <div class='parallaxBG'></div>
    <div class='overlay'>

        <?php include("development/template/branding.php") ?>
            <div class="slideshow" id="slideshow">
                <ol    class="white slides">
                    <li class="current">
                        <div class="description">
                            <h1 class='sliderTitle'>Commercial Coding's digital development services</h1>
                                <p>
                                    We can offer a full suite of online digital development services, including website design, branding for your online presence, mobile apps and web-based business applications.
                                </p>
                                <p>
                                   Find out more... 
                                </p>
                        </div>
                        <div class="tiltview col">                           
                            <a href="#topOfPage"><img  style='width:70%; max-width:100%;' src="development/images/servicesbackground_t.png" alt="banner background"/></a>
                        </div>
                    </li>
                    
                    <li>
                        <div class="description">
                                <h2 class='sliderTitle'>Creative Web Design Services</h2>
                                <p>
                                    Let us design an interactive, fresh and creative website for you. We'll make sure its built to engage your customers in a way that keeps them coming back.
                                    <br><br>Find out more...
                                </p>
                        </div>
                        <div class="tiltview col">
                            <a href="#topOfPage"><img alt="web design background" src="development/images/ser_wd.png"/></a>
                        </div>
                    </li>
                    <li>
                        <div class="description">
                                <h2 class='sliderTitle'>Clever Application Development Services</h2>
                                <p>
                                    Web applications with intelligent business logic can revolutionize the way your company does business, from optimizing business processes to analyzing data.
                                    <br><br>Find out more...
                                </p>
                        </div>
                        <div class="tiltview row">
                            <a href="#topOfPage"><img alt="webapp services" style='width:180%; max-width:180%;' src="development/images/webAppServices.png"/></a>
                        </div>
                    </li>
                    <li>
                        <div class="description">
                                <h2 class='sliderTitle'>Contemporary Mobile App Development Services</h2>
                                <p>
                                    Because we've got a keen eye for design, All app development projects always finish looking modern, slick and funky! 
                                    <br><br>Find out more...
                                </p>
                        </div>
                        <div class="tiltview row">
                                <a href="#topOfPage"><img alt="mobile apps background" style='width:180%; max-width:180%;' src="development/images/test_mb.png"/></a>
                        </div>
                    </li>
                    <li>
                        <div class="description">
                                <h2 class='sliderTitle' >Effective Online Promotion Services</h2>
                                <p>
                                    We know there's no point having a website if no one knows its there, thats why we offer promoting services like social media advertising, search engine indexing and offsite SEO services for your website. 
                                    <br><br>Find out more...
                                </p>
                        </div>
                        <div class="tiltview row">
                                <a href="#topOfPage"><img alt="promotions background" style='width:180%; max-width:180%;' src="development/images/promos.png"/></a>
                        </div>
                    </li>
                </ol>
            </div>
               
            <div id="topOfPage" class='bigNavContainer '>
                <div class='bigNavCards'>
                    <ul>
                        <li class="wdSection"><img src='development/images/all-icons/corrected-features/white_logoDesign_quoteIcon.png' alt='web design icon'/>Web Design</li>
                        <li class="wdevSection"><img src='development/images/all-icons/corrected-features/white-admin-quoteIcon.png' alt='web development icon'/>Web Development</li>
                        <li class="pSection"><img src='development/images/all-icons/corrected-features/white-social-login.png' alt='promos icon'/>Promos</li>
                        <li class="apdSection"><img src='development/images/all-icons/corrected-features/appDevIcon.png' alt='app design icon'/>App Design</li>
                    </ul>
                </div>
            </div>
            <div class="restOfPage fluid col-12" >
                <div class="desWebSection" style='padding:60px 0px; width:100%; height:auto; text-align:center; background-color:#fff;'>
                        <h2 class="cs-text">
                                <span class="showLetter">W</span>
                                <span class="showLetter">E</span>
                                <span class="showLetter">B</span>
                                <span class="showLetter">D</span>
                                <span class="showLetter">E</span>
                                <span class="showLetter">S</span>
                                <span class="showLetter">I</span>
                                <span class="showLetter">G</span>
                                <span class="showLetter">n</span>
                                <span class=" wdLogoIcon img1"></span>
                        </h2> 
                    
                    
                    <div class="sectionContent centerDesign fluid col-8">
                        <div class='wrapper'>
                            <ul id="cbp-ntaccordion" class="cbp-ntaccordion">
                                <li class='openFirst'>
                                    <h3 class="cbp-nttrigger">Bespoke Website's</h3>
                                    <div class="cbp-ntcontent">
                                        <p>We design, develop and deploy bespoke website's that not only look slick, but also provide a cost effective business solution for companies in need of an online presence. 
                                         Our website's are designed from the ground up to make sure a product is original and built to directly engage with the owners customer base and target demographic. <br/><br/>On top of that, we'd like you to know we only build customer websites using the latest and greatest in standardised web technologies, this make sure our products are AAA quality. If you'd like to know more about the tech we use, check out the list below.</p>
                                        <ul class="cbp-ntsubaccordion">
                                            <li>
                                                <h4 class="cbp-nttrigger">HTML5</h4>
                                                <div class="cbp-ntcontent">
                                                    <p style='font-size:1em; color:#000;'>Our websites are built with latest HTML 5 framework, providing all manner of benefits that ensure your web pages are fast, reliable, mobile ready and have excellent cross browsers support. HTML5 also has a ton more optimisations over its predecessor which make it easier for developers to program in a more efficient and effective way and that suits us perfectly. </p>
                                                   
                                                </div>
                                            </li>
                                            <li>
                                                <h4 class="cbp-nttrigger">CSS3</h4>
                                                <div class="cbp-ntcontent">
                                                    <p style='font-size:1em; color:#000;'>Cascading Style Sheet 3 or as the web development community call it CSS3 has introduced a large number of features, enhancing the way designers style web pages. With so many new additions including transitions, gradients, animations, textures, shadows and more, designers can produce web pages that are interactive and creative with  minimal JavaScript, resulting in lightweight builds, that load fast and don't require plugin libraries.</p>
                                                </div>
                                            </li>
                                            <li>
                                                <h4 class="cbp-nttrigger">JAVASCRIPT</h4>
                                                <div class="cbp-ntcontent">
                                                    <p style='font-size:1em; color:#000;'>Javascript libraries and frameworks are used in everything these days from automating tasks with Gulp to displaying dynamic content on a website with JQuery. Javascript is great for websites that need tactile programming either client or server side.</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>

                                </li>
                                <div class='clear'></div>

                                <li>
                                    <h3 class="cbp-nttrigger">Responsive Website Design</h3>
                                    <div class="cbp-ntcontent">
                                        <p >A strong online presence doesn't end with a well designed website. Smart phones are everywhere these days and if you really want to increase business awareness people need to be able to see what you've got on offer all the time and that means on the go too.
                                            <br/><br/>We make sure our websites are optimised for all devices including tablets, phones, UHD devices so your website can reach as many potential customers as possible.</p>
                                        
                                    </div>
                                </li>
                                <li>
                                    <h3 class="cbp-nttrigger">Logo Design</h3>
                                    <div class="cbp-ntcontent">
                                        <p>High quality branding and impeccable company image is crucial to commercial success and the first step to building that image is displaying an outstanding logo that reflects its business and appeals to customers. Our logo design service is optional and provides our customers with 5 designs for them to choose from. </p>
                                    </div>
                                </li>
                                
                                <li>
                                    <h3 class="cbp-nttrigger">Interactive Website Design</h3>
                                    <div class="cbp-ntcontent">
                                        <p>We pride ourselves on our approach to providing high quality UX, we do this by producing creative designs that grab consumer attention and focus it on whats important. But it's not all about making designs look good and fun to use, studies have shown well composed and intuitive design's are the backbone of a successful websites that bring customers back again and again.<br/><br/> Some of the key aspects of engaging designs we focus on include reducing user drop off rates, analyzing drop out points, page flow, exploitation of high interest page points etc...</p>
                                        
                                    </div>
                                </li>
                                <div class='clear'></div>

                            </ul>
                            <div class='clear'></div>
                        </div>
                        <div class='clear'></div>

                    </div>
                    <div class='clear'></div>

                </div>
                
                <div class='indexDiv supportGrey supportIndex'>
                    <div class='wrapper'> 
                        <span class="tagSupportheadLine">SUPPORT FOR YOU</span>
                        <p class="tagSupportP1">We offer support contracts for all types of web projects that we develop, so you can rest assured that if any problems arise we will be on hand</p>
                        <p class=' tagSupportP2 hideExtraText'>Our technical support team work up until 7:00PM and guarantee to respond within one hour of your support request.</p>
                        <button>E-mail Support</button>
                        <div class='clear'></div>
                    </div>
                </div>
                <div class='clear'></div>
                <div  class="webDevSection"  style='width:100%; height:auto; text-align:center; background-color:rgba(0,0,0,0.4); box-shadow:#000 5px 0px; '>
                    <div class='wrapper'>
                        <link rel="stylesheet" type="text/css" href="development/cutter/css/style.css" />
                        <script type="text/javascript" src="development/cutter/js/modernizr.custom.79639.js"></script> 
                        <script type="text/javascript" src="development/cutter/js/jquery.lettering.js"></script>
                        <div style='position:relative;'>
                            <h2 class="cs-text-cutter">
                                    <span class="cs-text-cut">Web</span>
                                    <span class="cs-text-mid">Development</span>
                                    <span class="cs-text-cut">Web</span>
                            </h2>
                        </div>
                        <h3 style='margin-bottom:100px; color:#fff; font-size:20px; text-align:center;  font-weight:100;'>Integrating intelligent web applications can revolutionize the way you do business</h3>
                        <ul class='webDevList'>
                            <li><span></span>Content management systems allow web masters to publish new content to a website with out any programming.   </li>
                            <li><span></span>Web apps are great way to handle data, store customer or product information and more.</li>
                            <li><span></span>We can program an API to act as the business logic behind clever web applications. </li>
                            <li><span></span>Starting an online business or expanding to become a click and mortar, we can help. Let us develop an e-commerce system for you.</li>
                            <li><span></span>We can host all types of websites and web applications so don't worry about someone taking care of it, just leave it to us.</li>
                        </ul>
                        <div class='clear'></div>

                    </div>
                                    <div class='clear'></div>

                </div>
                <div class='clear'></div>
                <div class="promosDiv ">
                    <div class="fluid col-8 centerDesign">
                        <h2>We Promote</h2>
                        <ul id="cbp-ntaccordion" class="cbp-ntaccordion">
                            <li class='openFirst'>
                                <h3 class="cbp-nttrigger">Search Engine Optimisation</h3>
                                <div class="cbp-ntcontent">
                                    <p>SEO (Search Engine Optimisation) is more important than ever, Search engines serve millions of users per day looking for solutions to problems they encounter. From a commercial perspective, if you have a website, SEO essentially provides businesses with the ability to grow and meet business objectives. This can be achieved through organic online traffic being pushed to your website resulting in the realization of business services. </p>
                                    <p>There are two main stages of Search Engine Optimisation: Onsite SEO and Offsite SEO. To find out more choose from the list below.</p>
                                    <ul class="cbp-ntsubaccordion">
                                        <li>
                                            <h4 class="cbp-nttrigger">Onsite SEO</h4>
                                            <div class="cbp-ntcontent">
                                                <p style='font-size:1em;'>Onsite search engine optimisation is a combination of rules, which when followed optimize the way your website is found by search engines. well that's kind of obvious, but what does this mean - it can be interpreted in so many ways but from a strictly technical perspective it involves tweaking page content such as meta titles and descriptions, including the right amount of keywords or important information in the HTML content and essentially ensuring page content is consistently inline with explicit definitions that are expressed to a search engine.</p>
                                            </div>
                                        </li>
                                        <li>
                                            <h4 class="cbp-nttrigger">Offsite SEO</h4>
                                            <div class="cbp-ntcontent">
                                                <p style='font-size:1em;'>Offsite search engine optimisation is the process of link building or website promotion. This requires incomming links to your site that are reliable and trustworthy, as search engines don't want to provide search results filled with bad quality websites. Incomming links are like a job reference, they are vouching for your website to say its reliable, making search engines keen to rank you higher in their search results because they know your content is of a high standard.</p>
                                            </div>
                                        </li>

                                    </ul>
                                </div>
                                <div class='clear'></div>

                            </li>
                            <div class='clear'></div>

                            <li  class='openFirst'>
                                <h3 class="cbp-nttrigger">Social Media Marketing</h3>
                                <div class="cbp-ntcontent">
                                    <p>We can provide intelligent social media marketing options to boost your websites interest, bring in increased levels of web traffic and improve conversion rates of your customers. We will target the correct demographic for your website and business to ensure your business reaches the right customers.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="clear"></div>
                <div class="csText2" style='padding:60px 0px; width:100%; height:auto; text-align:center; '>
                    <h2 class="cs-text">
                                <span class="showLetter2">A</span>
                                <span class="showLetter2">P</span>
                                <span class="showLetter2">P</span>
                                <span class="showLetter2">D</span>
                                <span class="showLetter2">E</span>
                                <span class="showLetter2">S</span>
                                <span class="showLetter2">I</span>
                                <span class="showLetter2">G</span>
                                <span class="showLetter2">n</span>
                                <span class="adLogoIcon img2"></span>
                        </h2> 
                    
                    
                    <div class="sectionContent centerDesign fluid col-8">
                        <div class='wrapper'>
                            <ul id="cbp-ntaccordion" class="cbp-ntaccordion">
                                <li class='openFirst'>
                                    <h3 class="cbp-nttrigger">Mobile App Design</h3>
                                    <div class="cbp-ntcontent">
                                        <p style='color:#fff;'>We can deliver excellent and diverse mobile applications from corporate business tools to dating apps. Not only that but we'll make sure your app is delivered on time and stays under budget.</p>
                                        <ul class="cbp-ntsubaccordion">
                                            <li>
                                                <h4 class="cbp-nttrigger">Android & iOS Apps</h4>
                                                <div class="cbp-ntcontent">
                                                    <p style='font-size:1em; color:#fff;'>We'll design and develop your iOS or Android mobile app from start to finish, and everything in between. we've got great experience on both platforms and are happy to go through each stage of development process with you one step at a time. </p>
                                                </div>
                                            </li>     
                                              
                                        </ul>
                                    </div>
                                    <div class='clear'></div>

                                </li>
                                
                                <li class='openFirst'>
                                    <h3 class="cbp-nttrigger">Mobile App Support</h3>
                                    <div class="cbp-ntcontent">
                                        <p style='color:#fff;'>We'll offer to maintain your app for as long as you need, so if theres something you don't like 3 months down the line and need a change, with our support contract in place we'll edit the app as soon as you give us the go ahead. </p>
                                        
                                    </div>
                                </li>
                                <div class='clear'></div>

                            </ul>
                            <div class='clear'></div>
                        </div>
                        <div class='clear'></div>

                    </div>
                    
                    
                </div>
                
                
                
            </div>
            <div class='clear'></div>

        <script src="development/tiltedSS/js/classie.js"></script>
        <script src="development/tiltedSS/js/modernizr.custom.js"></script>
        <script src="development/tiltedSS/js/tiltSlider.js"></script>
        <?php include("development/template/footer.php"); ?>
        </div>

        <script type="text/javascript">
            $(function() {$('.cbp-ntaccordion' ).cbpNTAccordion();});
            new TiltSlider( document.getElementById( 'slideshow' ) );
        </script>
        
    
