<?php 

  require_once "./factory.php";
  use Factory\VintageFactory;

  $supplier = new VintageFactory();
  $result =  $supplier ->createChair()->hasLegs();
  

  if($_SERVER["REQUEST_METHOD"] == "GET"){
    echo json_encode(array("reuslt" => "success" , "a"=> $result));
  }

?>