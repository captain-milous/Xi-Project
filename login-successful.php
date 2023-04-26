<!doctype html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Xi Project</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>
<body class="font-weight-bolder">

<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-6 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-1 mt-md-3 pb-5">

              <h2 class="fw-bold mb-1 text-uppercase">Přihlášení</h2>

              <?php
                if(isset($_POST["submit"])) {
                  $users = ["admin@email.cz", "milos@gmail.com", "zkouska@email.cz"]
                  $username = $_POST["typeEmailX"];
                  $password = $_POST["typePasswordX"];

                  if(in_array($username, $users)){
                    echo "Vítejte ".$username;
                    $registerForm = 'none';
                  } else {
                    echo "nepovedlo se přihlásit";
                    echo "Uživatel ".$username" neexistuje";
                    
                  }
                }
              ?>
              
            </div>

            <div id="main-page" style="display: <?= $registerForm?>">
              <p class="mb-0"><a href="index.php" class="btn btn-outline-light btn px-5">Zpět na hlavní stránku!</a>
              </p>
            </div>

            <div id="no-account">
              <p class="mb-0">Nemáte účet? <a href="register.php" class="text-white-50 fw-bold">Zaregistrujte se</a>
              </p>
            </div>

            <br>

            <div id="login-page">
              <p class="mb-0"><a href="login.php" class="btn btn-outline-light btn px-5">Zkus se znovu přihlásit!</a>
              </p>
            </div>

            <br>

            

            <br>
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