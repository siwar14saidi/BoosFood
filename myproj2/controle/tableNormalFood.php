<?php
require_once "../configdb/db_connector.php";
require_once "../models/modelNormalFood.php";
if (isset($_GET['event']) || !empty($_GET['event'])) {

    $event = $_GET['event'];

    switch ($event) {
        case 'add':

            $food = new Food();

            $food->username    = $_POST['username'];
            $food->price    = $_POST['price'];
           
            //image
            $info = pathinfo($_FILES['image']['name']);
            $ext = $info['extension']; // get the extension of the file
            $newname = generateRandomString(). '.' . $ext;
            $target = 'uploads/'.$newname;
            move_uploaded_file( $_FILES['image']['tmp_name'], $target);
            $food->image = $newname;
            $food->insert();
            break;

            case 'delete':
              
                $food = new Food();
                
                $food->id = $_GET['idFood'];
                $food->delete();
             
    
                break;
        
                case 'edit':            
               
                    $Food = new Food();
                    $Food->username    = $_POST['username'];
                    $Food->price    = $_POST['price'];
                   
                    //image
                    $info = pathinfo($_FILES['image']['name']);
                    $ext = $info['extension']; // get the extension of the file
                    $newname = generateRandomString(). '.' . $ext;
                    $target = 'uploads/'.$newname;
                    move_uploaded_file( $_FILES['image']['tmp_name'], $target);
                    $Food->image = $newname;
                    $Food->edit();
                break;
                default:
                echo "<h1 style='color:red'>Invalid Action !</h1>";
                break;
            }
        
  
} else {
    echo "<h1 style='color:red'>You Are not allowed !</h1>";
}

function generateRandomString($length = 10)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}


?>