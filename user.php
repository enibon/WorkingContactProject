<?php

// if isset - თუ არსებობს ეს ცვლადები, მაშინ გაუშვი ექო // 

// if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['website'])){
//     echo "values are exist";
// }



if ($_SERVER["REQUEST_METHOD"] == "POST"){
  
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $website = $_POST['website'];
    $message = $_POST['message'];

     print_r($_POST);
    echo "information have been saved";
    file_put_contents('database.txt', "name: $name email:$email, phone: $phone, website: $website, message: $message");
}



?>