<?php
$con = new PDO("mysql:host=110.4.45.178;dbname=vmmsolut_ben;","vmmsolut_admin","123qwe!@#");

$receives_data= json_decode(file_get_contents("php://input"));	
 
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

