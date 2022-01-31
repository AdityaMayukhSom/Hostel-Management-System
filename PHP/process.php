<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Credentials: true');
header('Access-Control-Allow-Methods: GET,POST');
header('Access-Control-Allow-Headers: X-Requested-With');
header('content-type:application/json');

if (isset($_POST["name"]))
{
    $connect = new PDO("mysql:host=localhost; dbname=testing", "root", "");
    $data = array(
        ':name' => $_POST["name"],
        ':fatherName' => $_POST["fatherName"],
        ':motherName' => $_POST["motherName"],
        ':address' => $_POST["address"],
        ':city' => $_POST["city"],
        ':district' => $_POST["district"],
        ':state' => $_POST["state"],
        ':pincode' => $_POST["pincode"],
        ':gender' => $_POST["gender"],
        ':department' => $_POST["department"],
        ':roll' => $_POST["roll"],
        ':birthday' => $_POST["birthday"],
        ':bloodGroup' => $_POST["bloodGroup"],
        ':contactNumber' => $_POST["contactNumber"],
        ':email' => $_POST["email"],
    );

    $query = "INSERT INTO data_sample 
    (name, fatherName , motherName , address , city , district , state , pincode , gender , department , roll , birthday , bloodGroup , contactNumber , email) 
    VALUES (:name , :fatherName , :motherName , :address , :city , :district , :state , :pincode , :gender , :department , :roll , :birthday , :bloodGroup , :contactNumber , :email )";

    $statement = $connect->prepare($query);
    $statement->execute($data);
    echo 'success';
}
?>