<?php

class Food{
    public $username;
    public $price;
     public $image;
    





    function insert()
    {
        $base = connect_to_db();
    
        $requette = "INSERT INTO tablenormalfood VALUES (null,'$this->username',$this->price,'$this->image');";

        $rowInserted = $base->exec($requette);

        if ($rowInserted == 1) {
            header('location:../admins/tableNormalFood.php');
        } else {
            echo "SQL Error !";
        }
    }
    function delete()
    {
        $base = connect_to_db();
      
        $requette = "DELETE from  tablenormalfood where id=$this->id;";
      
        $rowDeleted = $base->exec($requette);
    
        if ($rowDeleted == 1) {
            header('location:../admins/tableNormalFood.php');
        } else {
            echo "SQL Error !";
        }
    }


    function edit(){
        $base = connect_to_db();

        $requette = "UPDATE tablenormalfood set 
         name='$this->username',
        price=$this->price,
          image='$this->image' 
        ";


        $rowUpdated = $base->exec($requette) or die(print_r($base->errorInfo(), true));;
        if ($rowUpdated == 1) {
            header('location:../admins/tableNormalFood.php');
        }else {
            echo "SQL Error !";
        }
    }
}

?>