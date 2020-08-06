<?php
require_once "../configdb/db_connector.php";
require_once "../models/modelmailadmin.php";
if (isset($_GET['event']) || !empty($_GET['event'])) {

    $event = $_GET['event'];

    switch ($event) {

        
            case 'delete':
              
                $mail = new Mail();
                
                $mail->id = $_GET['idMail'];
                $mail->delete();
             
    
                break;
        
            }
        
        
    
  
} else {
    echo "<h1 style='color:red'>You Are not allowed !</h1>";
}



?>