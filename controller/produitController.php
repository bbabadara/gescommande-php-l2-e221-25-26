<?php
require_once ROOT."/model/produitModel.php";
$liste=function(){
$produits = getAllproduits();
<<<<<<< HEAD

require_once(ROOT."view/produits/liste.php");
};

$ajout=function(){
echo "je ajoute un produit";
=======
$total_produits=countTable("produit");
    loadView("produits/liste",["produits"=>$produits,"total_produits"=>$total_produits]);


};

$ajout=function(){
 loadView("produits/ajout",[],"side");

>>>>>>> 2c7bb97ccc03c9a1f1dac46979945e7d16bf9d4b
};

$detail=function(){
echo "je detail un produit";
};

$modifier=function(){
echo "je modifie un produit";
};

$supprimer=function(){
echo "je supprime un produit";
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
         echo "page introuvable c produit";
         exit();
}
         
