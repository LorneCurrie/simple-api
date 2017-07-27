<?php
/**
 * Created by JetBrains PhpStorm.
 * User: lcurrie
 * Date: 14/08/12
 * Time: 14:16
 * To change this template use File | Settings | File Templates.
 */

include_once('../conf/company.settings.conf.php');
include_once('class.list.php');

class Api
{

    private $userName;
    private $accessToken;
    private $action;
    private $arrParameters;

    private $DB_IP;
    private $DB_UN;
    private $DB_PW;
    private $DB_NM;

    function __construct($__userName, $__accessToken, $__action, $__arrParameters = array()){
        $this->action = $__action;
        $this->userName = $__userName;
        $this->accessToken = $__accessToken;
        $this->arrParameters = $__arrParameters;
    }

    public function executeAPI(){

        $className = ucfirst($this->action);
        //use the command as the class to instantiate
        $objCMD = new $className;
        $objCMD->setDB( $this->DB_IP, $this->DB_UN,$this->DB_PW,$this->DB_NM);
        $objCMD->setSessionID($this->accessToken);
        $objCMD->setUserName($this->userName);
        $objCMD->setParameters($this->arrParameters);
        $arrReturn = $objCMD->getData();
        echo json_encode($arrReturn);
    }

    public function setDB($__IP, $__UN, $__PW, $__NM){
        $this->DB_IP = $__IP;
        $this->DB_UN = $__UN;
        $this->DB_PW = $__PW;
        $this->DB_NM = $__NM;
    }

    public function setHostFile($__hostFile){

    }

    public static function getRandomString($__length){
        $result = "";
        $charPool = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        for($p = 0; $p<$__length; $p++) {
            $result .= $charPool[mt_rand(0,strlen($charPool)-1)];
        }
        return $result;
    }

}
