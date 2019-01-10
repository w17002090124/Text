<?php
    header("Access-Control-Allow-Origin:http://10.30.29.87:63341");
    header("Access-Control-Allow-Credentials:true");
    header("Access-Control-Allow-Headers:Content-Type");
    header("Content-type:text/json");
    $message = array('message'=>'success');
    echo json_encode($message);
    session_start();
    session_destroy();
?>