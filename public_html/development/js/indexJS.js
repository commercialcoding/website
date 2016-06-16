var myJSarray =[];
var myDeviceJSarry =[];




function selectBox(boxToChange, featureClass){
    boxToChange.addClass('quoteTypeBoxSelected');
    boxToChange.addClass(featureClass);
    boxToChange.addClass("quoteFeatureBoxShadow");

}
function unselectBox(boxToChange, featureClass){
    boxToChange.removeClass('quoteTypeBoxSelected');
    boxToChange.removeClass(featureClass);
    boxToChange.removeClass("quoteFeatureBoxShadow");

}



function getWhiteClass(featureObject){
    var feature = featureObject;
    var my_feature ="";
    if(feature.indexOf(" ") > 0){
        my_feature = "white_" + feature.replace(" ", "_");
    }else{
        my_feature = "white_" + feature;
    } 
    return my_feature;
}

function addToArray(myObject){
    var feature = myObject.data('feature')
    var my_feature_class = getWhiteClass(feature);
    console.log(my_feature_class);
    
    
    if(myJSarray.indexOf(feature) >= 0){
        unselectBox(myObject, my_feature_class);
        myJSarray.splice(myJSarray.indexOf(feature),1);
    }else{
        myJSarray.push(feature);
        selectBox(myObject, my_feature_class);
    }   
    console.log(myJSarray);
} 
function addToDeviceArray(myObject){
    var feature = myObject.data('feature');
    var my_feature_class = getWhiteClass(feature);

    if(myDeviceJSarry.indexOf(feature) >= 0){
        unselectBox(myObject, my_feature_class);

        myDeviceJSarry.splice(myDeviceJSarry.indexOf(feature),1);
    }else{
        selectBox(myObject, my_feature_class);

        myDeviceJSarry.push(feature);
    }   
    console.log(myDeviceJSarry);
} 

$(".qSummary").click(function(){
    $('html,body').animate({
        scrollTop: $(".costBreakdown").offset().top-60},
    'slow');
});

window.confirmMessage = function(messagediv){
            var path = "development/";

    var name = messagediv.find("#name").val();
    var projectTitle = messagediv.find("#projectTitle").val();
    var telephoneNumber = messagediv.find("#phoneNumber").val();
    var qNote = messagediv.find("#quoteNote").val();
    var price = newQuote.total;
    var ref = newQuote.ref;
    console.log(name);
   
       $.post(path +"endPoint.php",{method:"postingQuote", name:name, phoneNumber:telephoneNumber ,projectTitle:projectTitle, quoteNote:qNote, price:price, ref:ref  },function(data) {
           alert("Your message has been sent.");

       
       });
       

   
};

function quote() {
    this.ptype = "";
    this.owner = "";
    this.size = "";
    this.devices = "";
    this.features = "";
    this.total = "";
    this.ref = "";
    this.addType = function(type){
        this.ptype = type;
    };
    this.addOwner = function(owner){
        this.owner = owner;
    };
    this.addSize = function(size){
        this.size = size;
    };
    this.addfeatures = function(features){
        this.features = features;
    };
    this.adddevices = function(devices){
        this.devices = devices;
    };
    this.addTotal = function(total){
        this.total = total;
    };
    this.addRef = function(ref){
        this.ref = ref;
    };
}
    var newQuote = new quote();


window.stagingFunction = function(mydiv){
        var path = "development/";

    var stage = mydiv.data("stage");
    var projectType = mydiv.data("projecttype");
    console.log(stage);
    console.log(projectType);
   
    

    $.post(path +"endPoint.php",{method:"staging", projType:projectType ,stage:stage},function(data) {
        console.log(data);
        var obj = JSON.parse(data);
        console.log(stage);
        if(stage === 1){
         var owner = mydiv.data("owner");
            newQuote.addOwner(owner);
            console.log("ptype: "+ newQuote.ptype + " owner: " + newQuote.owner);

            var myHTML = "";
            for (var i = 0; i < obj.length; i++) {
                myHTML = myHTML + "<div onclick='stagingFunction($(this));' data-projecttype='" + projectType + "' data-size='"+ obj[i] +"' data-stage='" + (stage +1) + "' class='col-2 quoteTypeBox quoteSizeBox " + obj[i] + "  staging'><p>"+ obj[i] +"</p></div>";
            }
            //console.log(myHTML);
            if(projectType === "mobileApp"){
                newQuoteQuestions(myHTML, "How many screens will your app need?");

            }else{
                newQuoteQuestions(myHTML, "How many pages will your website need?");

            }
        }else if(stage ===2){
            if(projectType === "website" || projectType==="webApp"){

                var size = mydiv.data("size");
                newQuote.addSize(size);
                console.log("ptype: "+ newQuote.ptype + " owner: " + newQuote.owner + " size: " + newQuote.size);

                var myHTML = "";
                for (var i = 0; i < obj.length; i++) {
                    myHTML = myHTML + "<div onclick='addToArray($(this));' data-feature='"+ obj[i] +"' data-projecttype='" + projectType + "' class='col-2 quoteTypeBox quoteFeatureBox  " + obj[i] + "  staging'><p>"+ obj[i] +"</p></div>";
                }
               // console.log(myHTML);
                newQuoteQuestions(myHTML, "Select features for your product and complete your quote");
                setTimeout(function(){
                    $(".completeQuote").addClass('showOpacity');
                    $(".submitQuote").addClass('showOpacity');
                },100); 
            }else if(projectType === "mobileApp"){
                
                var size = mydiv.data("size");
                newQuote.addSize(size);
                console.log("ptype: "+ newQuote.ptype + " owner: " + newQuote.owner + " size: " + newQuote.size);

                var myHTML = "";
                for (var i = 0; i < obj.length; i++) {
                    myHTML = myHTML + "<div onclick='addToDeviceArray($(this));' data-feature='"+ obj[i] +"'  data-stage='" + (stage +1) + "' data-projecttype='" + projectType + "' class='col-2 quoteSizeBox  " + obj[i] + "  quoteTypeBox staging'><p>"+ obj[i] +"</p></div>";
                }
               // console.log(myHTML);
                newQuoteQuestions(myHTML, "Which devices should your app run on?");
                setTimeout(function(){
                    $(".completeQuote").addClass('showOpacity');
                    $(".appFinalStage").addClass('showOpacity');
                },100); 
            }
        
        }
    });
};

        function newQuoteQuestions(myObjectValue, questionText){
            $('.quoteBoxHolder').addClass('disappear');
            $('.headlineQuestion').html(questionText);

            setTimeout(function(){
                $(".quoteBoxHolder").html(myObjectValue);
                $('.quoteBoxHolder').removeClass('disappear');
                $(document).scrollTop(0);

            }, 110);

        }


        function newQuoteQuestions(myObjectValue, questionText){
            $('.quoteBoxHolder').addClass('disappear');
            $('.headlineQuestion').html(questionText);

            setTimeout(function(){
                $(".quoteBoxHolder").html(myObjectValue);
                $('.quoteBoxHolder').removeClass('disappear');
                $(document).scrollTop(0);

            }, 110);

        }



$(document).ready(function(){

    $('.backToTop').on('click', function(){
        $('html,body').animate({
        scrollTop: 0},
        'slow');
    });
    var path = "development/";

    $(".submitQuote").click(function(){
        newQuote.addfeatures(myJSarray);
        console.log("ptype: "+ newQuote.ptype + " owner: " + newQuote.owner + " size: " + newQuote.size + " devices: " + newQuote.devices + " features: " + newQuote.features);
         $.post(path + "endPoint.php",{method:"calculateQuote", quote:newQuote},function(data) {
               newQuoteQuestions(data);
                var obj = JSON.parse(data);
                console.log(obj);
                $("#quoteWrapper").css("padding-top","0!important");
                var myHTML = "";
                var featuresLength = newQuote.features.length;
                var feats ="";
                newQuote.addTotal(obj['total']);
                newQuote.addRef(obj['ref']);
                for(j =0; j<featuresLength; j++){
                    feats += "<li class='fList'>" + newQuote.features[j] + "</li>";
                }

                    myHTML = myHTML + "<div class='commercialCodingMessage fluid col-8'><div class='ccmContainer'><h2 class='ccmTitle'>Quote Complete</h2>"+
                        "<h3>Your Quote</h3><h4>The estimated price of your " + newQuote.ptype + " is <b>£"+ obj['total'] +".00</b>. This estimate is calculated using the basic project requirements you chose.<span class='respSeeSummary'> To see the full summary of your quote please click <a href='#myanchor'>here.</a></span></h4>"+
                        "<h3>Get in touch</h3><h4>Thankyou for completing a quote. If you want to chat to us about this quoted project feel free to <a href='/contact.php'>get in touch</a> remembering to provide us with the reference number <b>" + obj['ref'] + "</b> for this quotation. </h4>"+
                        "<h3>We'll get back to you</h3><h4>Alternatively, If you would like to hear from us regarding your quotation please complete the form below and we will be in touch in two working days.</h4>"+
                        "<div class='quoteForm'><h3 class='ydTitle'>Your Details</h3><h4>Name</h4><input class='quoteInput' type='text' name='name' id='name'><h4>Telephone</h4><input  class='quoteInput' type='text' name='phoneNumber' id='phoneNumber'><h4>Project Title</h4><input  class='quoteInput' type='text' name='projectTitle' id='projectTitle'><h4>Leave us a note</h4><textarea name='quoteNote' id='quoteNote'></textarea><br><button onclick='confirmMessage($(this).parent());' class='quoteButton'>Submit</button></div>"+
                        "<h4 id='myanchor' class='disclaimer'>(Disclaimer - Please be aware this is not a work order and is a general estimate of cost for the work involved and may vary dependant on variety of content.)</h4></div></div>"+
                        "<div class='fluid col-4 costBreakdown'> <div class='cbContainer'><h1 class='quoteSumTitle'>Quote Summary</h1><h4>Project Type</h4><p>"+ 
                         newQuote.ptype +"</p><h4 class='normalSumTitle'>Project Owner</h4><p>"+ 
                         newQuote.owner +"</p><h4 class='normalSumTitle'>Project Size</h4><p>"+ 
                         newQuote.size +"</p><h4 class='normalSumTitle'>Project Features</h4><ul>"+
                         feats + "</ul><h4 class='normalSumTitle'>Project Estimated Cost</h4><p>£"+obj['total']+".00</p> <h4 class='normalSumTitle'>Reference No.</h4><p>" + obj['ref'] + "</p></div><div class='clear'></div>"
                         ;
                console.log(myHTML);
                $(".headlineQuestion").addClass("noM");
                $(".completeQuote").css('display', 'none');
                $("#quoteWrapper").css('padding-top', '0');
                newQuoteQuestions(myHTML, "");
            });
    });

    $(".appFinalStage").click(function(){
        $(document).scrollTop(0);
        var projectType = newQuote.ptype;
        console.log(projectType);
        newQuote.adddevices(myDeviceJSarry);
        $.post(path +"endPoint.php",{method:"staging", projType:projectType ,stage:"3"},function(data) {
            console.log(data);
            var obj = JSON.parse(data);
            
            var myHTML = "";
            for (var i = 0; i < obj.length; i++) {
                myHTML = myHTML + "<div onclick='addToArray($(this));' data-feature='"+ obj[i] +"'  data-stage='4' data-projecttype='" + projectType + "' class='col-2  " + obj[i] + "  quoteFeatureBox quoteTypeBox staging'><p>"+ obj[i] +"</p></div>";
            }
           // console.log(myHTML);
            newQuoteQuestions(myHTML, "Select features for your product and complete your quote");
            setTimeout(function(){
                $(".appFinalStage").css('display', 'none');
                $(".completeQuote").addClass('showOpacity');
                $(".submitQuote").addClass('showOpacity');
            },100); 
            
        });
    });


        
        
        $('.ptype').click(function(){
            var pType = $(this).data("projecttype");
            
            console.log("my ptype = " + pType);
            newQuote.addType(pType);
            console.log("qyote ptype"+newQuote.ptype);
            $.post(path + "endPoint.php",{method:"getMainTypes", pType:pType},function(data) {
                console.log(data);
                var obj = JSON.parse(data);
                
                console.log(obj[0] + " " + obj.length);
                var myHTML = "";
                if(obj.length > 3){
                    for (var i = 0; i < obj.length; i++) {
                        myHTML = myHTML + "<div onclick='stagingFunction($(this));' data-projecttype='" + pType + "' data-owner='"+ obj[i] +"' data-stage='1' class='col-2 quoteTypeBox " + obj[i] + " quoteSizeBox staging'><p>"+ obj[i] +"</p></div>";
                    }
                }else{
                     for (var i = 0; i < obj.length; i++) {
                        myHTML = myHTML + "<div onclick='stagingFunction($(this));' data-projecttype='" + pType + "' data-owner='"+ obj[i] +"' data-stage='1' class='col-2 quoteTypeBox  " + obj[i] + " staging'><p>"+ obj[i] +"</p></div>";
                     }
                }
               // console.log(myHTML);
                newQuoteQuestions(myHTML,"Who will own the product?");
            });
        });
        
        function newQuoteQuestions(myObjectValue, questionText){
            $('.quoteBoxHolder').addClass('disappear');
            setTimeout(function(){
                $(".quoteBoxHolder").html(myObjectValue);
                $('.quoteBoxHolder').removeClass('disappear');
                $('.headlineQuestion').html(questionText);
                $(document).scrollTop(0);


            }, 110);

        }
        
        
        
        
       $('.startQuoteButton').click(function(){
           $('.getStarted').addClass('disappear');
           $('.no-image').addClass('disappear');
            setTimeout(myFunction, 110);
            setTimeout(myFunction3, 110);
       });
        function  myFunction(){
            $('.getStarted').css('display', 'none');
            $('.no-image').css('display', 'none');
            $('#quoteApplication').addClass('showApplication');
            $('.headlineQuestion').html("What type of digital project do you need?");

        }

        function  myFunction3(){
            $('#quoteApplication').addClass('showOpacity');
        }
        
        $(".burgerButton").click(function(){
            if($("#burgerMainMenu").hasClass("dropDownMenu")){
                $(".menuBox").removeClass("menuBoxShadow");
                $("#burgerMainMenu").removeClass("dropDownMenu");
            }else{
                $("#burgerMainMenu").addClass("dropDownMenu");
                $(".menuBox").addClass("menuBoxShadow");
            }
        });
        
        var w = window.innerWidth;
        if(w < 750){//can do this with out JS just set display none at 750 for arrows
            $(".webHeadline .titleSpan").click(function(){
                if(!$(this).next().hasClass("respContentGrow")){
                    $(this).next().addClass("respContentGrow");                    
                    $(this).find(".arrowImage").addClass("arrowRotate");
                }else{
                    $(this).find(".arrowImage").removeClass("arrowRotate");
                    $(this).next().removeClass("respContentGrow");
                }
            }); 
        }
    });
    var height = ($(window).height());
    

                   
            
            
                //var scrolling = document.getElementById("bgBox").scrollTop;
                //var halfHeight = document.getElementById("bgBox").clientHeight/2;
               /* 
                if(scrolling === 0){
                    var $cache = $('.para2BG');
                    $cache.removeClass('fixedPos');
                    $cache.css('overflow','hidden');
                }
                
                
                
                
                if(scrolling < halfHeight ) {
                    $(".para2BG").removeClass("bg2");	
                    $(".para2BG").addClass("bg1");	

                }
                if(scrolling > halfHeight && scrolling < (halfHeight *3.5 )) {
                    $(".para2BG").removeClass("bg1");
                    $(".para2BG").removeClass("bg3");	
                    $(".para2BG").addClass("bg2");	
                }           
                if(scrolling > (halfHeight *3.5 ) && scrolling < (halfHeight *5 )) {
                    console.log("helloooo");
                    $(".para2BG").removeClass("bg2");	
                    $(".para2BG").addClass("bg3");	
                }
                var allThree = document.getElementById("bgBox").clientHeight*2;
                
                if(document.getElementById("bgBox").scrollTop === allThree){
                    alert("at top");
                }*/
            





        function showTopButton(){
            $(".backToTop").css('display','block');

            setTimeout(function(){
                $(".backToTop").addClass('showBackToTop');
            }, 110);
        }
        function hideTopButton(){
                $(".backToTop").removeClass('showBackToTop');
            setTimeout(function(){
                $(".backToTop").css('display','none');
            }, 410);
        }

  
  window.onscroll = function() { 
     

    if(window.scrollY > 350){
        if(!$(".backToTop").hasClass('showBackToTop')){
            showTopButton();
        }
    }else if(window.scrollY < 350){
        if($(".backToTop").hasClass('showBackToTop')){
            hideTopButton();
        }
    }





    var w = window.innerWidth;

    if(w <= 900 && w >= 651){
            
        if(window.scrollY <= 1050){
            $(".shadow").removeClass("scrolledShadow");
        }else if(window.scrollY >= 1050 && window.scrollY <= 1249 ){
            $(".shadow").addClass("scrolledShadow");
            $(".serviceTile.wd").removeClass("stColor");
        }else if(window.scrollY >= 1250 && window.scrollY <= 1749){
            $(".serviceTile.wd").addClass("stColor");
            $(".serviceTile.ad").removeClass("stColor");

        }else if(window.scrollY >= 1750 && window.scrollY <= 2249){
            $(".serviceTile.wd").removeClass("stColor");
            $(".serviceTile.ad").addClass("stColor");
            $(".serviceTile.cms").removeClass("stColor");

        }else if(window.scrollY >= 2250 && window.scrollY <= 2949){
            $(".serviceTile.ad").removeClass("stColor");
            $(".serviceTile.cms").addClass("stColor");
        }else if(window.scrollY >= 2950){
            $(".serviceTile.cms").removeClass("stColor");
        }
    }
    
    if(w > 750){
       if(window.scrollY >= 5) {
            console.log("NEW MENU!");
            $(".navContainer").addClass("scrolling");	
        } else if(window.scrollY < 120) {
            $(".navContainer").removeClass("scrolling");
        } 
    }
    
    
    
    
    if(w <= 650 && w >= 451){
        if(window.scrollY <= 2449){
            
            $(".shadow").removeClass("scrolledShadow");
        }else if(window.scrollY >= 2650 && window.scrollY <= 2949 ){
            $(".shadow").addClass("scrolledShadow");
            $(".serviceTile.wd").removeClass("stColor");
            
        }else if(window.scrollY >= 2950 && window.scrollY <= 3249){
            $(".serviceTile.wd").addClass("stColor");
            $(".serviceTile.ad").removeClass("stColor");

        }else if(window.scrollY >= 3250 && window.scrollY <= 3549){
            $(".serviceTile.wd").removeClass("stColor");
            $(".serviceTile.ad").addClass("stColor");
            $(".serviceTile.cms").removeClass("stColor");

        }else if(window.scrollY >= 3750 && window.scrollY <= 4049){
            $(".serviceTile.ad").removeClass("stColor");
            $(".serviceTile.cms").addClass("stColor");
        }else if(window.scrollY >= 4050){
            $(".serviceTile.cms").removeClass("stColor");
        }
    }
    
    if(w <= 450){
        if(window.scrollY <= 3000){
            
            $(".shadow").removeClass("scrolledShadow");
        }else if(window.scrollY >= 3150 && window.scrollY <= 3410 ){
            $(".shadow").addClass("scrolledShadow");
            $(".serviceTile.wd").removeClass("stColor");
            
        }else if(window.scrollY >= 3411 && window.scrollY <= 3871){
            $(".serviceTile.wd").addClass("stColor");
            $(".serviceTile.ad").removeClass("stColor");

        }else if(window.scrollY >= 3872 && window.scrollY <= 4131){
            $(".serviceTile.wd").removeClass("stColor");
            $(".serviceTile.ad").addClass("stColor");
            $(".serviceTile.cms").removeClass("stColor");

        }else if(window.scrollY >= 4132 && window.scrollY <= 4633){
            $(".serviceTile.ad").removeClass("stColor");
            $(".serviceTile.cms").addClass("stColor");
        }else if(window.scrollY >= 4594){
            $(".serviceTile.cms").removeClass("stColor");
        }
    }
    
    
    
};

    