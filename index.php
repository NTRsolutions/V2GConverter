<?php
require_once 'lib/TokenManager.php';
require_once 'lib/VideoConverter.php';
use Utils\TokenManager;
use Utils\VideoConverter;

$title= "V2GConverter";

if(!isset($_POST["upload"])){
    $token = TokenManager::create();
    require 'form.php';
}elseif(TokenManager::check()){
    echo VideoConverter::getFile();    

}
