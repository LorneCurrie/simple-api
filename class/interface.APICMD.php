<?php
/**
 * Created by JetBrains PhpStorm.
 * User: lcurrie
 * Date: 14/08/12
 * Time: 14:24
 * To change this template use File | Settings | File Templates.
 */
interface APICMD
{
    public function setParameters($__arrParameters);
    public function getData();
    public function setSessionID($__sessionID);
    public function setUserName($__UserName);
    public function setDB($__IP, $__UN, $__PW, $__NM);

}
