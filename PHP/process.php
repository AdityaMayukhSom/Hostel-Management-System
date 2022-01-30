<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Credentials: true');
header('Access-Control-Allow-Methods: GET,POST');
header('content-type:application/json');

if (isset($_GET["name"]))
{
    $connect = new PDO("mysql:host=localhost; dbname=testing", "root", "");
    $data = array(
        ':name' => $_GET["name"],
        ':fatherName' => $_GET["fatherName"],
        ':motherName' => $_GET["motherName"],
        ':address' => $_GET["address"],
        ':city' => $_GET["city"],
        ':district' => $_GET["district"],
        ':state' => $_GET["state"],
        ':pincode' => $_GET["pincode"],
        ':gender' => $_GET["gender"],
        ':department' => $_GET["department"],
        ':roll' => $_GET["roll"],
        ':birthday' => $_GET["birthday"],
        ':bloodGroup' => $_GET["bloodGroup"],
        ':contactNumber' => $_GET["contactNumber"],
        ':email' => $_GET["email"],
    );

    $query = "INSERT INTO data_sample 
    (name, fatherName , motherName , address , city , district , state , pincode , gender , department , roll , birthday , bloodGroup , contactNumber , email) 
    VALUES (:name , :fatherName , :motherName , :address , :city , :district , :state , :pincode , :gender , :department , :roll , :birthday , :bloodGroup , :contactNumber , :email )";

    $statement = $connect->prepare($query);
    $statement->execute($data);
    echo 'success';
}
?>