<?php
require_once(ROOT."bd/database.php");
function getAllclients(){
    $sql="SELECT * FROM client";
   return executeSelect($sql);
<<<<<<< HEAD
}
function getClientById($id){
    $sql="SELECT * FROM client where id_client=:id";
   return executeSelect($sql,["id"=>$id],true);
}



   return excuteSelect($sql);
=======
>>>>>>> 2c7bb97ccc03c9a1f1dac46979945e7d16bf9d4b
}

function getClientById($id){
    $sql="SELECT * FROM client where id_client=:id";
   return executeSelect($sql,["id"=>$id],true);
}



