<?php

require 'inc/classLoader.php';

//$json = file_get_contents("php://input");
$input = filter_input(INPUT_POST, 'method');
//$data = json_decode($input);

switch($input) {
    
        
    case "contactUS":
        $emailBody = "";
        $emailBody = "Client Name: " . $_POST['name'] . " \n";
        $emailBody = $emailBody . "Client email: " . $_POST['email'] . "  \n";
        $emailBody = $emailBody . "Client telephone: " . $_POST['phone'] . "  \n";
        $emailBody = $emailBody . "enquiry type: " . $_POST['enq_type'] . "  \n";
        $emailBody = $emailBody . "message: " . $_POST['message'] . "  \n";
        
        mail("jay.exton@live.co.uk", "Commercial Coding Enquiry", $emailBody);
        header('Location:http://www.commercialcoding.com/contact?sent=true');        
        break;
    
    
    case "getMainTypes":
        $pt = $_POST['pType'];
        //var_dump($pt);
        //echo  "my project type :" . $pt;
        $qb = new quoteBuilder();
        $results = $qb->getProjectTypes($pt);
        echo json_encode($results);
        
        
        break;
    
    case "staging":
        $projType = $_POST['projType'];
        $stage = $_POST['stage'];
        //var_dump($stage);
        $qb = new quoteBuilder();
        $results = $qb->projStaging($projType, $stage);
        echo json_encode($results);
        
        
        break;
    
    case "calculateQuote":
        $quoteObject = $stage = $_POST['quote'];
        //echo json_encode($quoteObject);
        $qb = new quoteBuilder();
        $results = $qb->calculateQuote($quoteObject);
        echo json_encode($results);
        break;
    
    case "postingQuote":
        $emailBody = "";
        $emailBody = "Client Name: " . $_POST['name'] . " \n";
        $emailBody = $emailBody . "Client Tel: " . $_POST['phoneNumber'] . "  \n";
        $emailBody = $emailBody . "Project Title: " . $_POST['projectTitle'] . "  \n";
        $emailBody = $emailBody . "Project Notes: " . $_POST['quoteNote'] . "  \n";
        $emailBody = $emailBody . "Quote Price: £" . $_POST['price'] . "  \n";
        $emailBody = $emailBody . "Quote Reference: " . $_POST['ref'];
        
        mail("jay.exton@live.co.uk", "*******New Commercial Coding Quote", $emailBody);
        exit();
        
    
    default: 
        return "no good";
        
}
	