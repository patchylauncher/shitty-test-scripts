<?php 
// very cool test api that totally sucks dick
// copyright Marisa 2021
header('Content-type: application/json');
$uuid = $_GET["uuid"];
$metadata = array("model" => "slim");
$skin =  array("url" => "http://192.168.1.99/fuck.png", "metadata" => $metadata);
$cape = array("url" => "http://192.168.1.99/dank.png");
$data = array("timestamp" => "420", "profileId" => $uuid, "profileName" => "e", "textures" => array("SKIN" => $skin, "CAPE" => $cape));
echo json_encode($data);


?>
