<!doctype html>
<?php
  if(isset($_GET["mssg"])){
    $oo = $_GET["mssg"];
    ?>
        <script defer>
            alert("<?php echo $oo;?>");
        </script>
    <?php
}
?>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Xi Project</title>
  <link rel="icon" type="image/x-icon" href="images/black-logo.png">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>
<body class="font-weight-bolder">

<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-6 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-3 mt-md-3 pb-4">

              <h2 class="fw-bold mb-1 text-uppercase">Registrace</h2>
              <p class="text-white-50 mb-5">Pro registraci zadejte své údaje!</p>

              <form action="Scripts\register.php" method="post">

                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" id="typeFirstNameX" name="fname" class="form-control" />
                      <label class="form-label" for="typeFirstNameX">Jméno</label>
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" id="typeLastNameX" name="lname" class="form-control" />
                      <label class="form-label" for="typeLastNameX">Příjmení</label>
                    </div>
                  </div>
                </div>

                <div class="form-outline form-white mb-2">
                  <input type="email" id="typeEmailX" name="email" class="form-control form-control" />
                  <label class="form-label" for="typeEmailX">Email</label>
                </div>

                <div class="form-outline form-white mb-2">
                  <input type="password" id="typePasswordX" name="password1" class="form-control form-control" />
                  <label class="form-label" for="typePasswordX">Heslo</label>
                </div>

                <div class="form-outline form-white mb-2">
                  <input type="password" id="typePasswordX2" name="password2" class="form-control form-control" />
                  <label class="form-label" for="typePasswordX2">Heslo Znovu</label>
                </div>

                <button class="btn btn-outline-light btn px-5" type="submit">Zaregistrovat se</button>

              </form>              
            </div>

            <div>
              <p class="mb-0">Máte již účet? <a href="login.php" class="text-white-50 fw-bold">Přihlásit se</a>
              </p>
            </div>

            <br>
            <a href="https://github.com/captain-milous/Xi-Project" class="text-white em text-decoration-none">Copyright © Miloš Tesař C3b, 2023</a>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>

</body>
</html>