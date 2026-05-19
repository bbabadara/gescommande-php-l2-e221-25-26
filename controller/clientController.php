<?php
require_once ROOT."/model/clientModel.php";
$liste=function(){
<<<<<<< HEAD
$clients = getAllclients();

    var_dump(getAllProduits());
=======
>>>>>>> 2c7bb97ccc03c9a1f1dac46979945e7d16bf9d4b
$clients = getAllclients();
$total_client= countTable("client");
loadView("clients/liste",["clients"=>$clients,"total_client"=>$total_client]);
};

$ajout=function(){
loadView("clients/ajout",[],"side");
};

$detail=function(){
echo "je detail un client";
};

$modifier=function(){
echo "je modifie un client";
};

$supprimer=function(){
echo "je supprime un client";
};


$actions=[
    "liste"=>$liste,
    "ajout"=>$ajout,
    "detail"=>$detail,
    "modifier"=>$modifier,
    "supprimer"=>$supprimer
    
];
 $action=$_REQUEST["action"]??"liste";
 
 if (array_key_exists($action, $actions)) {
         $actions[$action]();
     }
     else{
         echo "page introuvable c client";
         exit();
}
         
