<?php
namespace Utils;

class VideoConverter
{
    public static function full($src,$dest,$fps){

    }

    public static function sample($src,$dest,$start,$length,$fps){

    }

    public static function getFile(){
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
       
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        // Check if image file is a actual image or fake image
        if(isset($_POST["upload"])) {
  
         
        
        }

        return $imageFileType;
    }
  
}
