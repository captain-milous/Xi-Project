<!doctype html>
<?php
session_start();
?>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Incredible Combo Twins</title>
  <link rel="icon" type="image/x-icon" href="images/black-logo.png">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="Styles/original.css">
  
</head>
<body class="font-weight-bolder">
  <?php
    include_once 'header.php'; 
  ?>

<br>
<br>

  <main style="margin: auto; text-align: center;">

<?php
  if(!isset($_SESSION["id"])) {
?>
      <div class="container my-4">
        <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg bg-light">
          <div class="col-lg-12 p-3 p-lg-5 pt-lg-3">
            <h1 class="display-5 fw-bold lh-1">Nejsi přihlášen!</h1>
            <br>
            <p class="lead">Pro zobrazení veškerého kontextu se musíš nejprve přihlásit!</p>
            <p class="lead">Pokud ještě u nás nemáš účet tak se musíš zaregistrovat ;)</p>
            <br>
            <br>
            <div class="d-grid gap-2 d-md-flex justify-content-center mb-4 mb-lg-3">
              <a href="login.php" type="button" class="btn btn-primary btn-lg px-3 me-md-2 fw-bold">Přihlásit se</a>
              <a href="register.php" type="button" class="btn btn-secondary btn-lg px-3 me-md-2 fw-bold">Zaregistrovat se</a>
            </div>
          </div>
        </div>
      </div>
    </main>
<?php

  include_once 'footer.php';

  } else {

?>

    <div class="container my-4">
      <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg bg-light">
        <div class="col-lg-12 p-3 p-lg-5 pt-lg-3">
          <h1 class="display-5 fw-bold lh-1">Vítejte v našem Baru!</h1>
          <br>
          <p class="lead">Ahoj, přátelé! Jsme Miloš a Šolim, dvojčata a hrdí majitelé tohoto úžasného baru. Rádi bychom vás pozvali na nezapomenutelný zážitek plný skvělých drinků, jedinečné atmosféry a zábavy, kterou najdete jen u nás.</p>
          <br>
        </div>
      </div>
    </div>
    
    <div class="container my-4">
      <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg bg-light">
        <div class="col-lg-12 p-3 p-lg-5 pt-lg-3">

        <div class="card flex-row">
          <img class="card-img-left example-card-img-responsive" style="height: 400px; width: 400px; border-radius: 5px; margin: 2px;" src="Images/milos.jpg"/>
          <div class="card-body">
            <br>
            <br>
            <h2 class="card-title h4-sm">Miloš</h2>
            <small>Mistr míchání drinků</small>
            <br>
            <br>
            <p class="card-text">Miloš je náš tajný zbraň v kategorii mixologie. Jeho schopnost umíchat jakýkoli drink tak, aby perfektně vyhovoval přesně vám, je opravdu ohromující. S vášní a precizností mixuje ingredience, ať už se jedná o klasické koktejly nebo vlastní originální recepty. Jeho cílem je potěšit vaše chuťové buňky a poskytnout vám skvělý pití, které vás nadchne.</p>
          </div>
        </div>

        <br>
        <br>

        <div class="card flex-row">
          <div class="card-body">
          <br>
            <br>
            <h2 class="card-title h4-sm">Šolim</h2>
            <small>Neuvěřitelný showman</small>
            <br>
            <br>
            <p class="card-text">Šolim je ten, kdo se postará o to, abyste se v našem baru nikdy nenudili. Je neuvěřitelný showman a umí rozproudit atmosféru jakýmkoli netradičním způsobem. Jeho interakce s hosty a představení neobvyklých triků a vtipů jsou jeho specialitou. Věřte nám, s ním se nikdy nenudíte a budete se smát až do rána!</p>
          </div>
          <img class="card-img-right example-card-img-responsive" style="height: 400px; width: 400px; border-radius: 5px; margin: 2px;" src="Images/solim.jpg"/>
        </div>

        </div>
      </div>
    </div>

    <div class="container my-4">
      <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg bg-light">
        <div class="col-lg-12 p-3 p-lg-5 pt-lg-3">
          <h1 class="display-5 fw-bold mh-1">Těšíme se na vaši návštěvu!</h1>
          <br>
          <br>
          <div class="d-grid gap-2 d-md-flex justify-content-center mb-4 mb-lg-3">
            <a href="reservation.php" type="button" class="btn btn-primary btn-lg px-3 me-md-2 fw-bold">Rezervace stolu</a>
          </div>
        </div>
      </div>
    </div>

  </main>

<br>
<br>
<br>
<br>
<br>
<br>

<?php
  }
    include_once 'footer.php';
  ?>
</body>
</html>