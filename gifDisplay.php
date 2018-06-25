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
            <img src="<?= $gifFile; ?>" alt="gifImage"/>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
