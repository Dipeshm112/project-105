<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <title>PHP Project</title>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">PHP PROJECT</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>

      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>
  <?php

  $clubs = [
    "RM" => [
      "name" => "Real Madrid",
      "country" => array(
        "name" => "Spain",
      ),
      "player" => array(
        "Benzema",
        "Kroos",
        "Modric"
      ),
      "description" => "Real Madrid is Spanish professional football soccer club based in Madrid.",
      "manager" => "Carlo Ancelotti",
      "legend" => array(
        "Zidane",
        "Ronaldo",
        "Figo",
        "Casilas"
      ),
      "logo" => "upload-images/rm.png",
      "img" => "upload-images/images.png"
    ],
    "FCB" => [
      "name" => "Barcelona",
      "country" => array(
        "name" => "Spain",
      ),
      "player" => [
        "Pedri",
        "Ferran",
        "Rapinha"
      ],
      "description" => "Futbol Club Barcelona is a Spanish professional football club from Barcelona.",
      "manager" => "Xavi",
      "legend" => array(
        "Xavi",
        "Inesta",
        "Ronaldinho",
        "mascherano"
      ),
      "logo" => "upload-images/Barcelona.png",
      "img" => "upload-images/images.png"
    ],
    "PSG" => [
      "name" => "Paris Saint Germain",
      "country" => array(
        "name" => "France"
      ),
      "player" => array(
        "Messi",
        "Neymar",
        "Mbappe"
      ),
      "description" => "Paris Saint-Germain Football Club French pronunciation.",
      "manager" => "Christophe Galtier",
      "legend" => array(
        "Mustapha Dahleb",
        "Bernard Lama",
        "Pauleta",
        "Zlatan Ibrahimović"
      ),
      "logo" => "upload-images/paris.png",
      "img" => "upload-images/french-flag.png"
    ],
  ];

  echo "<pre>";
  print_r($clubs);
  echo "</pre>";


  //  foreach($clubs as $key){
  //  echo $key['name'] . "<br>";
  //  echo $key['country'] . "<br>";
  //  echo $key['player'] . "<br>";
  //  }

  // $json = json_encode($clubs);
  // echo ($json);
  ?>
  <div class="container mt-4">
    <div class="row">
      <?php foreach ($clubs as $key => $value) { ?>
        <div class="col-md-4">
          <div class="card w-auto" style="width:400px">
            <img class="card-img-top" src="<?php echo $value['logo']; ?>" alt="Card image">
            <img class="card-img-top" src="<?php echo $value['img']; ?>" width="50px" alt="Card image">
            <div class="card-body">
              <h4 class="card-title"><?php echo $value['name']; ?></h4>
              <p class="card-text"><?php echo $value['description']; ?></p>
              <p class="card-text"><?php echo $value['manager']; ?></p>
              <p>
                Country :
                <?php foreach ($value['country'] as $player) { ?>
                  <span class="badge badge-primary"><?php echo $player; ?></span>
                <?php } ?><br>
                Players :
                <?php foreach ($value['player'] as $player) { ?>
                  <span class="badge badge-primary"><?php echo $player; ?></span>
                <?php } ?><br>
                Legendary Players :
                <?php foreach ($value['legend'] as $player) { ?>
                  <span class="badge badge-primary"><?php echo $player; ?></span>
                <?php } ?>
              </p>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>