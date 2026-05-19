<?php
<<<<<<< HEAD
function openConnexion() {
function openConnection() {
=======

function openConnexion() {
>>>>>>> 2c7bb97ccc03c9a1f1dac46979945e7d16bf9d4b
    $con = null;
try
{
    $con = new PDO('mysql:host=localhost;dbname=gestion_commande_l2E221_25_26;charset=utf8', 'root', '');
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $con->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $con;

}catch (PDOException $e)
{
    echo ('Erreur : ' . $e->getMessage());
}


<<<<<<< HEAD
}

function closeConnexion($con){
    $con=null;
}

// function excuteSelect($sql,$one=false){
//       $datas=null;
//     $pdo=openConnexion();
//    $stm= $pdo->query($sql);
//     $datas=$one==true?$stm->fetch():$stm->fetchAll();
//     closeConnexion($pdo);
//     return  $datas;
    
// }

// function excuteUpdate($sql){

// }

function executeSelect(string $sql,array $data=[],$one=false) {
        $result=null;
        $conn=openConnexion();
        $statement = $conn->prepare($sql);
      count($data)==0?$statement->execute():$statement->execute($data);
      $result=$one==true?$statement->fetch():$statement->fetchAll();
        closeConnexion($conn);
        return $result ;
  
}


function executeUpdate(string $sql,array $data){
    $conn=openConnexion();
        $statement = $conn->prepare($sql);
        $statement->execute($data);
   closeConnexion($conn);
return $con;
=======
>>>>>>> 2c7bb97ccc03c9a1f1dac46979945e7d16bf9d4b
}

function closeConnexion($con){
    $con=null;
}

// function excuteSelect($sql,$one=false){
//       $datas=null;
//     $pdo=openConnexion();
//    $stm= $pdo->query($sql);
//     $datas=$one==true?$stm->fetch():$stm->fetchAll();
//     closeConnexion($pdo);
//     return  $datas;
    
// }

// function excuteUpdate($sql){

// }

function executeSelect(string $sql,array $data=[],$one=false) {
        $result=null;
        $conn=openConnexion();
        $statement = $conn->prepare($sql);
      count($data)==0?$statement->execute():$statement->execute($data);
      $result=$one==true?$statement->fetch():$statement->fetchAll();
        closeConnexion($conn);
        return $result ;
  
}


function executeUpdate(string $sql,array $data){
    $conn=openConnexion();
        $statement = $conn->prepare($sql);
        $statement->execute($data);
   closeConnexion($conn);
}
