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
    
    if(isset($_POST["out"]) && isset($_POST["start"]) && isset($_POST["length"])){
        $out = htmlspecialchars($_POST["out"]);
        $start = htmlspecialchars($_POST["start"]);
        $length = htmlspecialchars($_POST["length"]);
        $fps = htmlspecialchars($_POST["fps"]);;
        $gifFile =  VideoConverter::sample("$out.gif",$start,$length,$fps); 
    }
    require 'gifDisplay.php';
}
