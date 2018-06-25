<!DOCTYPE html>
<html lang=fr dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="dist/css/master.css">
  <title><?= $title ?></title>
</head>
<body>
  <div class="container"> 
    <div class="row">
      <div class="col-sm-12">       
        <div class="jumbotron">   
          <h2  class="display-6"><?= $title ?></h2>
          <hr class="my-4"> 
          <form action="" method="post" enctype="multipart/form-data">
          <div class="form-row">
            <div class="form-group mb-6">
              <label for="fileToUpload">Files to upload</label> 
              <input  class="form-control-file" type="file" size="70" name="fileToUpload" id="fileToUpload" required/>
            </div> 

          
            <div class="form-group mb-6">
              <label for="out">Gif File Name</label> 
              <input  class="form-control" type="text" value="out" name="out" id="out" required/>
            </div> 
          </div>

          <div class="form-row">
            <div class="form-group mb-4">
              <label for="start">Start</label> 
              <input  class="form-control" type="number" value="0" min="0" name="start" id="start" required/>
            </div>   
            <div class="form-group mb-4">
              <label for="length">Duration</label> 
              <input  class="form-control" type="number" value="3" min="1" max="20" name="length" id="length" required/>
            </div>           

            <div class="form-group mb-4">
              <label for="fps">FPS</label> 
              <input  class="form-control" type="number"  value="10" min="1" max="15" name="fps" id="fps" required/>
            </div>   
          </div>

                  
            <button class="btn btn-primary" type="submit" value="Upload File" name="upload">Upload File</button>
            <input type="hidden" name="token" id="token" value="<?php echo $token; ?>" />
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
