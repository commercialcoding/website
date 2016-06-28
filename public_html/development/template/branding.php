<div id="page">
    <script>
        $(document).ready(function(){
            $(".showService").hover(function(){$(".serviceBlock").addClass("showServiceBlock");},function(){$(".serviceBlock").removeClass("showServiceBlock");});

            if(window.location.search.indexOf('smallBiz') > -1){
                console.log('yay');
                $('.promoBanner').css('display','block');
                $('.promoBannerScrolling').css('display','block');
                $('.navContainer').css('top','-120px');
                $('.navContainer').css('height','120px');
                $('header').css('height','120px');
                $('#mainMenu').css('height','50%');
                $('#Logo').css('height','50%');
                $('#insideLogo').css('height','50%');
                $('#notScrollingMainMenu').css('height','50%');
                
            }else{
                $('.promoBanner').css('display','none');
                $('.promoBannerScrolling').css('display','none');
            }
    
        });
    </script>
    <header>
    <div id="Logo" class="normal"></div>
    <div class="navContainer">
        <div id="insideLogo" class='black'></div>
        <nav id="notScrollingMainMenu">
            <ul>
                
            <li class="menuItem"><a href="http://www.commercialcoding.com">Home</a><div class="scrollDividerLine"></div></li>

            <li class="menuItem"><a  href="http://www.commercialcoding.com/services.php">Services</a><div class="scrollDividerLine"></div></li>

            <li class="menuItem"><a href="http://www.commercialcoding.com/contact.php">Contact</a><div class="scrollDividerLine"></div></li>

            <li class="menuItem"><a href="http://www.commercialcoding.com/about.php">About</a><div class="scrollDividerLine"></div></li>

            <li class="menuItem"><a href='http://commercialcoding.com/pricing.php'>Prices</a></li>
            </ul>
        </nav>
        <div class='promoBannerScrolling'><h1>New or Small Business offer - <span>£249</span></h1></div>

    </div>


    <nav id="mainMenu">
        <ul>
            <li class="menuItem"><a href="http://www.commercialcoding.com">Home</a><div class="dividerLine"></div></li>

            <li class="menuItem">
                <a href="http://www.commercialcoding.com/services.php">Services</a>
                <!--<ul>
                    <li><a href="http://www.commercialcoding.com/app_services.php">App Development</a></li>
                    <li><a href="http://www.commercialcoding.com/web_design_services.php">Website Design</a></li>
                </ul>-->
                <div class="dividerLine"></div></li>

            <li class="menuItem"><a href="http://www.commercialcoding.com/contact.php">Contact</a><div class="dividerLine"></div></li>

            <li class="menuItem"><a href="http://www.commercialcoding.com/about.php">About</a><div class="dividerLine"></div></li>

            <li class="menuItem"><a href='http://commercialcoding.com/pricing.php'>Prices</a></li>
        </ul>

      
    </nav>
    
    <nav id="burgerMainMenu">
        <div id="burgerLogo" class='normal'></div>

        <div class='burgerButton'>
            <div class='menuBox'>
                <div class='menuLine'></div>
                <div class='menuLine'></div>
                <div class='menuLine'></div>
                    
            </div>
        </div>
        <div class='dropDownMenu'>
            <ul>
                <li class="responsiveMenuItem"><a href="http://www.commercialcoding.com">Home</a></li>

                <li class="responsiveMenuItem"><a  href="http://www.commercialcoding.com/services.php">Services</a></li>

                <li class="responsiveMenuItem"><a href="http://www.commercialcoding.com/contact.php">Contact</a></li>

                <li class="responsiveMenuItem"><a href="http://www.commercialcoding.com/about.php">About</a></li>

                <li class="responsiveMenuItem"><a href='http://commercialcoding.com/pricing.php'>Prices</a></li>
            </ul>
        </div>
    </nav>
    <div class='promoBanner'><h1>New or Small Business offer - <span>£249</span></h1></div>

</header>
<div class='backToTop'><h1>Top</h1></div>
