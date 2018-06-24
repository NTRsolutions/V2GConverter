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
            <div class="form-group mb-4">
              <label for="fileToUpload">Files to upload</label> 
              <input  class="form-control-file" type="file" size="70" name="fileToUpload" id="fileToUpload"/>
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
