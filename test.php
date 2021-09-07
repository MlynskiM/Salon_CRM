<?php



if($_SERVER["REQUEST_METHOD"] == "POST"){

    $day = $_POST['day'];
    $hour = $_POST['hour'];
    $message = "Zarezerwowałeś wizytę w salonie która odbędzie się :".$day ." o godzinie: ".$hour;
    
    echo "<script type='text/javascript'>alert('$message');</script>";
  
}else{
    echo "Something went wrong :(";
}



?>