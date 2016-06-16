<?php
require '../classLoader.php';


/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of quoteObject
 *
 * @author James
 */
class quoteBuilder {
    private $projectType = array();
   // private $projectType = array();
    private $allFeaturesArray;
    private $sizeArrayCosts;
    private $deviceArrayCosts;        
            
    private $websiteType = array();
    private $websiteSize = array();
    private $websiteFeatures = array();
    
    private $webAppSize = array();
    private $webAppFeatures = array();
    
    private $mobileAppType = array();
    private $mobileAppFeatures = array();
    private $mobileAppSize;


        

    
    function getProjectTypes($pType){
        if($pType === "website"){
            $this->projectType = array("Personal", "Business", "Non-Profit");
            return $this->projectType;
        }else if($pType === "webApp"){
            $this->projectType = array("Project-Tool", "Business-Tool", "Educational-Tool");
            return $this->projectType;
        }else{            
            $this->projectType = array("Enterprise", "Small-Business", "Non-Profit", "Personal");
            return $this->projectType;
        }
    }
    
    function buildArrays($type, $app =false){
        if($type == "website"){
            $this->sizeArrayCosts = array(
                "Small"=>200,
                "Medium"=>400,
                "Large"=>900,
                "Extra-Large"=>1200
            );


            $this->allFeaturesArray = array("CMS"=>300, 
                "Parallax"=>100, 
                "Responsive Design"=>150, 
                "Portfolio"=>50, 
                "Gallery"=>50, 
                "Product Catalogue"=>100, 
                "E-commerce"=>800,
                "Google Analytics"=>50,
                "Logo Design"=>50,
                "Media Integration"=>70,
                "Calendar"=>100,
                "User Profiles"=>200,
                "Administrator Access"=>150,
                "Messaging System"=>200,
                "Social Media"=>50,
                "Address Book"=>150,
                "Location Services"=>150,
                "Databases" => 100
            );
        }else if($type == "mobileApp"){
            
            $this->sizeArrayCosts = array(
                "Small"=>500,
                "Medium"=>900,
                "Large"=>1700,
                "Extra-Large"=>2100
            );

            $this->deviceArrayCosts = array(
                "iPhone"=>1000,
                "iPad"=>1000,
                "Android Tablet"=>1000,
                "Android Phone"=>1000
            );


            $this->allFeaturesArray = array(
                "CMS"=>900, 
                "Animations"=>300, 
                "In-App Purchases"=>500, 
                "Location Services"=>400,  
                "Push Notifications"=>400, 
                "Email Login"=>200, 
                "User Profiles"=>200, 
                "RSS Feed"=>200, 
                "Forms"=>200, 
                "Social Login"=>100, 
                "Music"=>400, 
                "Calendar"=>100, 
                "Video"=>300, 
                "Gallery"=>100,
                "Address Book"=>200,
                "Product Catalogue"=>400,
                "Databases" =>300
                
            );
        }else if($type == "webApp"){
            $this->allFeaturesArray = array(
                "CMS" =>500,
                "Parallax" =>100,         
                "Charts and Graphs"=>300, 
                "Data Mining"=>400, 
                "Data Manipulation"=>300, 
                "Data Analysis"=>200,
                "Workflow Processes"=>250,
                "Responsive Design"=>150, 
                "Portfolio" =>50, 
                "Gallery"=>50, 
                "Product Catalogue"=>100,  
                "E-commerce"=>800, 
                "Google Analytics"=>50, 
                "Logo Design"=>50, 
                "Media Integration"=>70, 
                "Calendar"=>100, 
                "User Profiles"=>200, 
                "Administrator Access"=>150, 
                "Messaging System"=>200, 
                "Social Media"=>50, 
                "Location Services"=>150,
                "Address Book"=>150,
                "Databases" => 100

            );
            $this->sizeArrayCosts = array(
                "Small"=>300,
                "Medium"=>500,
                "Large"=>1000,
                "Extra-Large"=>1500
            );

        }
    }
    
    
    function calculateQuote($quoteObject){
        $runningTotal =0;
        //var_dump($quoteObject);    
        $type = $quoteObject["ptype"];
        $owner = $quoteObject["owner"];
        $size = $quoteObject["size"];
        $features = $quoteObject["features"];
        if($type== "mobileApp"){
            $devices = $quoteObject['devices'];
            $this->buildArrays($type, true);
            $runningTotal = $runningTotal + $this->sizeArrayCosts[$size];   
            
            foreach($devices as $key=>$item){
                $runningTotal = $runningTotal+ $this->deviceArrayCosts[$item];
            }
            foreach($features as $key=>$item){
                $runningTotal = $runningTotal+ $this->allFeaturesArray[$item];
            }        

            
        }else{
          
            $this->buildArrays($type);
            $runningTotal = $runningTotal + $this->sizeArrayCosts[$size];      
            foreach($features as $key=>$item){
                $runningTotal = $runningTotal+ $this->allFeaturesArray[$item];
            }
        }
        
        $quoteRef = mt_rand(100000,999999);

        $this->saveQuote($quoteObject, $runningTotal, $quoteRef);
        $quoteData = array("total"=>$runningTotal, "ref"=>$quoteRef);
        return $quoteData;
        
    }
    
    
    function saveQuote($quoteInfo,$price, $ref){
        $db = new db;
        $stmt = $db->db->prepare('INSERT INTO quoteTable (price, projectType, referenceNo, size, features, devices, owner, date) VALUES (:price, :projectType, :refNo, :size, :feats, :devs, :owner, :date)');
   
        $date =  date("F j, Y, g:i a");
        
        $stmt->bindValue(":date",$date);
        $stmt->bindValue(":price",$price);
        $stmt->bindValue(":projectType",$quoteInfo['ptype']);
        $stmt->bindValue(":refNo",$ref);
        $stmt->bindValue(":owner",$quoteInfo['owner']);
        $stmt->bindValue(":size",$quoteInfo['size']);
        if($quoteInfo['ptype'] === "mobileApp"){
            $devices = "";
            foreach($quoteInfo['devices'] as $key=>$item){
                if(strlen($devices) > 1){
                    $devices = $devices . ", " . $item;
                }else{
                    $devices =  $item;
                }
            }
            $stmt->bindValue(":devs",$devices."");
        }else{    
            $stmt->bindValue(":devs","N/A");
        }
        $features = "";
        foreach($quoteInfo['features'] as $key=>$item){
            if(strlen($features) > 1){
                $features = $features . ", " . $item;
            }else{
               $features =  $item;
            }
        }
        $stmt->bindValue(":feats",$features."");
        
        $stmt->execute();
        $db=null;   
    }
        
    
    
    
    
    
    
    function projStaging($type, $stage){
        //var_dump($type);
        //$myQuoteArray = $_SESSION['myQuoteArray'];
        
        if($type=="website"){
            switch($stage){
                case 1:
                    $this->websiteSize = array("Small", "Medium", "Large", "Extra-Large");
                    return $this->websiteSize;
                    break;
                case 2:
                    $this->websiteFeatures = array("CMS", 
                        "Parallax",         
                        "Responsive Design", 
                        "Portfolio", 
                        "Gallery", 
                        "Product Catalogue",  
                        "E-commerce", 
                        "Google Analytics", 
                        "Logo Design", 
                        "Media Integration", 
                        "Calendar", 
                        "User Profiles", 
                        "Administrator Access", 
                        "Messaging System", 
                        "Social Media", 
                        "Location Services",
                        "Databases",
                        "Address Book"
                    );
                    return $this->websiteFeatures;
                    break;
                default:
                    return "You broke it";
            }
        }else if($type=="mobileApp"){
            switch($stage){
                case 1:
                    $this->mobileAppSize = array("Small", "Medium", "Large", "Extra-Large");
                    
                    return $this->mobileAppSize;
                    break;
                case 2:
                    $this->mobileAppSize = array("iPhone", "iPad", "Android Phone", "Android Tablet");
                    return $this->mobileAppSize;
                    break;
                case 3:
                    $this->mobileAppFeatures = array("CMS", 
                        "Animations", 
                        "In-App Purchases", 
                        "Location Services",  
                        "Push Notifications", 
                        "Email Login", 
                        "User Profiles", 
                        "RSS Feed", 
                        "Forms", 
                        "Social Login", 
                        "Music", 
                        "Calendar", 
                        "Video", 
                        "Gallery",
                        "Address Book",
                        "Databases",
                        "Product Catalogue"
                    );
                    return $this->mobileAppFeatures;
                    break;
                default:
                    return "You broke it";
            }
        }else if($type=="webApp"){
            switch($stage){
                case 1:
                    $this->webAppSize = array("Small", "Medium", "Large", "Extra-Large");
                    return $this->webAppSize;
                    break;
                case 2:
                    $this->webAppFeatures = array("CMS", 
                        "Parallax",         
                        "Charts and Graphs", 
                        "Data Mining", 
                        "Data Manipulation", 
                        "Databases", 
                        "Data Analysis",
                        "Workflow Processes",
                        "Responsive Design", 
                        "Portfolio", 
                        "Gallery", 
                        "Product Catalogue",  
                        "E-commerce", 
                        "Google Analytics", 
                        "Logo Design", 
                        "Media Integration", 
                        "Calendar", 
                        "User Profiles", 
                        "Administrator Access", 
                        "Messaging System", 
                        "Social Media", 
                        "Location Services",
                        "Address Book"
                    );
                    return $this->webAppFeatures;
                    break;
                default:
                    return "You broke it";
            }
        }
        
        
        
    }
    
    
    
    
}   
