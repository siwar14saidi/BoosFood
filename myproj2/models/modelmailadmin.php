<?php

class Mail{
    public $username;
    public $email;
     public $phone;
     public $messages;
    






    function delete()
    {
        $base = connect_to_db();
      
        $requette = "DELETE from  mail where id=$this->id;";
      
        $rowDeleted = $base->exec($requette);
    
        if ($rowDeleted == 1) {
            header('location:../admins/mailadmin.php');
        } else {
            echo "SQL Error !";
        }
    }


 
    }

?>