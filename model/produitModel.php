<?php
<<<<<<< HEAD
=======
require_once(ROOT."bd/database.php");
>>>>>>> 2c7bb97ccc03c9a1f1dac46979945e7d16bf9d4b
function getAllProduits(){
    $sql="SELECT * FROM produit";
   return executeSelect($sql);
}