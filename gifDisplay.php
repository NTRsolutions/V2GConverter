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
          <h4  class="display-9">a simple video to gif converter</h2>
          <hr class="my-4"> 
          <div class="text-center">
            <img class="img-fluid" src="<?= $gifFile; ?>" alt="gifImage"/>
            <p>
              <a href="<?= $gifFile; ?>" class="btn btn-outline-success btn-lg" role="button" aria-pressed="true" download>Download</a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
