<?php
header("Access-Control-Allow-Origin:http://10.30.29.87:63341");
header("Access-Control-Allow-Credentials:true");
header("Access-Control-Allow-Headers:Content-Type");
header("Content-type:text/json");


$data=file_get_contents("php://input");
$data = json_decode($data);

$message=array('message'=>"success");

if($data->userName == 123 && $data->passWord == 123){

    $_SESSION["userName"]=$data->userName;
    $_SESSION["passWord"]=$data->passWord;

    echo json_encode($message);
//        echo $_SESSION["userName"];
//        echo $_SESSION["passWord"];
}else{
    $message['message']='error';
    echo json_encode($message);
}
?>