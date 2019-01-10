<?php
    header("Access-Control-Allow-Origin:http://10.30.29.87:63341");
    header("Access-Control-Allow-Credentials:true");
    header("Content-type:text/json");
    session_start();
    $message = array('message'=>'success');
    if(!isset($_SESSION['name'])){
        $message['message']='errors';
        echo json_encode($message);
    }else{
        echo json_encode($message);
    }
?>