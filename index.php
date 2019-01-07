<?php
    header("Access-Control-Allow-Origin:http://10.30.29.87:63341");
    header("Access-Control-Allow-Credentials:true");
    header("Context-Type:text/json");
    $userName=array("userName"=>1);

    echo json_encode($userName);
    ?>