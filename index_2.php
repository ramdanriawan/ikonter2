<?php 


if (!isset($_POST["to"])) {
	http_response_code(404);
} else {
$nohp = $_POST["to"];
$message = $_POST["message"];
$rand = rand(1, 1000000000);
$data[] = ["id" => $rand,
		  "to" => $nohp,
		  "message" => $message];

$event = "\"event\":\"send\"";

$message = "\"messages\":". json_encode($data);

$hasil = "[{".$event.",".$message . "}]";

$hasil2 = "{\"events\":".$hasil."}";

echo $hasil2;


}
?>