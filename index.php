<?php
/**
 * Created by JetBrains PhpStorm.
 * User: lcurrie
 * Date: 21/08/12
 * Time: 09:28
 * To change this template use File | Settings | File Templates.
 */
include("./class/class.Api.php");
include_once ('./config/config.php');


$req = file_get_contents("php://input");
$req = json_decode($req);



$api = new Api($req->user_name, $req->access_token, $req->action, $req->parameters);
$api->setDB(DB_IP, DB_UID,DB_PWD,DB_NME);

$api->executeAPI();

?>