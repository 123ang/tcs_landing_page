<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token');
include "config.php";
date_default_timezone_set("Asia/Kuala_Lumpur");
$con = new PDO("mysql:host=110.4.45.178;dbname=vmmsolut_ben;","vmmsolut_admin","123qwe!@#");
mysqli_query($con, "SET character_set_client=utf8");
mysqli_query($con, "SET character_set_connection=utf8");

$receives_data= json_decode(file_get_contents("php://input"))	
 
$data = array();
if($receives_data->action == 'fetchall'){
    $query = "SELECT * FROM event";
    $statement = $con->prepare($query);
    
    while($row = $statement->fetch(PDO::FETCH_ASSOC)){
        $data[] = $row;
    }
    echo json_decode($data);
} 
?>

