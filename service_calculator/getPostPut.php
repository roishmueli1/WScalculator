<?php
    
    include('calc.php');

    $verb = $_SERVER['REQUEST_METHOD'];
    //$retVal=0;

    if ($verb == 'GET') {
        
        $num1 = (int)$_GET['num1'];
        $num2 = (int)$_GET['num2'];
        $num3 = (int)$_GET['num3'];
        
        if($_GET['func'] == 'sum'){
            $c = new sum($num1, $num2, $num3);
            $retVal = $c->calc();
        } 
        else if($_GET['func'] == 'avg'){
            $c = new avg($num1, $num2, $num3);
            $retVal = $c->calc();
        } 
        else if($_GET['func'] == 'mult'){
            $c = new mul($num1, $num2, $num3);
            $retVal = $c->calc();
        } 

        $a = array('retVal'=>$retVal);

        header('Content-Type: application/json');
        echo json_encode($a);        

    }elseif ($verb == 'POST') {
        
        $num1 = (int)$_POST['num1'];
        $num2 = (int)$_POST['num2'];
        $num3 = (int)$_POST['num3'];

        if($_POST['func'] == "sum") {
             $c = new sum($num1, $num2, $num3);
             $retVal = $c->calc();
        } 
        else if($_POST['func'] == "avg") {
             $c = new avg($num1, $num2, $num3);
             $retVal = $c->calc();
        } 
        else if($_POST['func'] == "mult") {
             $c = new mul($num1, $num2, $num3);
             $retVal = $c->calc();
        } 

        $a = array('retVal'=>$retVal);
        header('Content-Type: application/json');
        echo json_encode($a);

    }elseif ($verb == 'PUT') {
        
        parse_str(file_get_contents('php://input'), $_PUT);
        var_dump($_PUT); //$_PUT contains put fields 
        $num1 = (int)$_PUT['num1'];
        $num2 = (int)$_PUT['num2'];
        $num3 = (int)$_PUT['num3'];
        
        if($_PUT['func'] == "sum") {
             $c = new sum($num1, $num2, $num3);
             $retVal = $c->calc();
        } 
        else if($_PUT['func'] == "avg") {
             $c = new avg($num1, $num2, $num3);
             $retVal = $c->calc();
        } 
        else if($_PUT['func'] == "mult") {
             $c = new mul($num1, $num2, $num3);
             $retVal = $c->calc();
        } 

        $a = array('retVal'=>$retVal);
        header('Content-Type: application/json');
        echo json_encode($a);

    }
    
    


