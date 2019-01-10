<?php
    header("Access-Control-Allow-Origin:http://10.30.29.87:63341");
    header("Access-Control-Allow-Credentials:true");
    header("Access-Control-Allow-Headers:Content-Type");

    session_start();
    $userName = $_SESSION['userName'];
    $data=array("userName"=>$userName);

    echo json_encode($data);
    ?>