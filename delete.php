<?php
header("Content-Type: application/json:");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: DELETE");
header("Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods,Authorization");

$data = json_decode(file_get_contents("php://input"), true);

$pid = $data["id"];

require_once "dbconfig.php";

 echo $query = "DELETE FROM post WHERE post_id = '$pid'";

if(mysqli_query($conn, $query) or die("Insert Query Failed"))
		{
			echo json_encode(array("message" => "Posted Deleted Successfully","status" => true));
		}
		
		else
		{
			echo json_encode(array("message" => "Deletion Failed","status" => false));
		}
		
?>		