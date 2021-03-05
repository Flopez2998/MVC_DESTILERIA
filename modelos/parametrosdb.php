<?php
/**
 * PHP Version 5
 * Parametros Generales
 *
 * @category Utilidades
 * @package  modelos
 * @author   Fernando Lopez
 * @license  Comercial http://
 *
 * @version 1.0.0
 *
 * @link http://url.com
 */
$servidor"127.0.0.1";
$usario = "destileria2021";
$contraseña = "destileria2021";
$db = "destileria2021";
$puerto = "3306";

$emailHost = 'email-smtp.us-west-2.amazonaws.com';
$smtpUser = 'amazonwebuserkey';
$smtpSecret = 'smtpscreteer';
$smtpPort = "587";

$host_server = 'http://localhost/Pratica2021/';
if (isset($_SERVER["SERVER_MVC"])) {
    $host_server = $_SERVER["SERVER_MVC"];
}

?>
