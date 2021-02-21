<?php
$con = new PDO("mysql:host=110.4.45.178;dbname=vmmsolut_ben;","vmmsolut_admin","123qwe!@#");

$received_data= json_decode(file_get_contents("php://input"));	
 
$data = array();
if($received_data->actions == 'fetchall'){
    $query = "SELECT * FROM event";
    $statement = $con->prepare($query);
    $statement->execute();
    while($row = $statement->fetch(PDO::FETCH_ASSOC)){
        $data[] = $row;
    }
    echo json_decode($data);
} 
?>

