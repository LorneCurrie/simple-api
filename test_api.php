<?php
/**
 * Created by JetBrains PhpStorm.
 * User: lcurrie
 * Date: 16/08/12
 * Time: 15:37
 * To change this template use File | Settings | File Templates.
 */

include("./class/class.Api.php");
include_once ('./config/config.php');

$action = $_REQUEST['act'];

/*
 * $arr = array(
            "user_name"  => "",
            "access_token" => "",
            "action"    => "login",
            "parameters"  => array(
                "user_name" => "apiuser",
                "password"  => "qwerty"
            )
        );
 *
 *
 

switch($action){
    case "login":
        $arr = array(
            "user_name"  => "",
            "access_token" => "",
            "action"    => "login",
            "parameters"  => array(
                "user_name" => "lorne",
                "password"  => "l0rn32012"
            )
        );
        break;
    case "logout":
        $arr = array(
            "user_name"  => "test",
            "access_token" => "<Add access_token here from Login Action>",
            "action"    => "logout",
            "parameters"  => array()
        );
        break;

}


$req = json_encode($arr);
error_log($req);
$ch = curl_init("http://api.codeHobbit.com/api/index.php");
curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "$req");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec($ch);
print $response;
*/

/**
 * process:
 * Login -> collect you session ID
 * Use a command to preform a task
 * Logout -> to end session.  Session time out after 15 minutes of no activity.
 *
 */