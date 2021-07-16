<?php


header("Content-Type: application/json:");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods,Authorization");

$data = json_decode(file_get_contents("php://input"), true);

$ptitle =$data ["title"];
$pdescription = $data["description"];

require_once "dbconfig.php";
$query = "INSERT INTO post(post_title,post_description) VALUES('$ptitle','$pdescription')";
						
		
		if(mysqli_query($conn, $query) or die("Insert Query Failed"))
		{
			echo json_encode(array("message" => "Posted Successfully","status" => true));
		}
		
		
		else
		{
			echo json_encode(array("message" => "Failed","status" => false));
		}
		
?>		