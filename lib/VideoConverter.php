<?php
namespace Utils;

class VideoConverter
{
    private static $outDir="out/"; 
    private static $uploadDir="uploads/";

    public static function sample($dest,$start,$length,$fps){
        $uploadedFile = self::getVideo();
        $command = "scripts/vid2gif-sample $uploadedFile out/$dest $start $length $fps";
        exec($command,$output);
        self::recursiveDelete("upload");
        return "out/".$dest;
    }

    private static function getVideo(){
        self::recursiveDelete("upload");
        $allowedExts = array("jpg", "jpeg", "gif", "png", "mp3", "mp4", "wma");
        $extension = pathinfo($_FILES['fileToUpload']['name'], PATHINFO_EXTENSION);

        if ((($_FILES["fileToUpload"]["type"] == "video/mp4")
        || ($_FILES["fileToUpload"]["type"] == "audio/mp3")
        || ($_FILES["fileToUpload"]["type"] == "audio/wma")
        || ($_FILES["fileToUpload"]["type"] == "image/pjpeg")
        || ($_FILES["fileToUpload"]["type"] == "image/gif")
        || ($_FILES["fileToUpload"]["type"] == "image/jpeg"))

        && ($_FILES["fileToUpload"]["size"] < 100000000)
        && in_array($extension, $allowedExts))

        {
        if ($_FILES["fileToUpload"]["error"] > 0)
        {
            echo "Return Code: " . $_FILES["fileToUpload"]["error"] . "<br />";
        }
        else
        {
              

                if (file_exists("upload/" . $_FILES["fileToUpload"]["name"]))
                {
                echo $_FILES["fileToUpload"]["name"] . " already exists. ";
                }
                else
                {
                move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],
                "upload/" . $_FILES["fileToUpload"]["name"]);
             
                $outFilePath = "upload/" . $_FILES["fileToUpload"]["name"];
                return $outFilePath;
                }
                }
            }
            else
            {
                echo "Invalid file";
            }
        }
        
         /**
         * Delete a file or recursively delete a directory
         *
         * @param string $str Path to file or directory
         */
        private static function recursiveDelete($str) {
            if (is_file($str)) {
                return @unlink($str);
            }
            elseif (is_dir($str)) {
                $scan = glob(rtrim($str,'/').'/*');
                foreach($scan as $index=>$path) {
                    self::recursiveDelete($path);
                }
                return @rmdir($str);
            }
        }
}
