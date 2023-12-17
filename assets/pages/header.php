<!-- header.php -->

<?php

$liensHeader = [
    ['text' => 'Accueil', 'href' => '#'],
    ['text' => 'Connexion', 'href' => '#'],
    ['text' => 'Inscription', 'href' => '#'],
    ['text' => 'Contact', 'href' => '#'],
    
   
];

$adresseLienRgpd = "";
adressLien();

function adressLien()
{
    global $adresseLienRgpd;
    $cheminActuel = $_SERVER['REQUEST_URI'];
    if ($cheminActuel === "/index.html") {
        $adresseLienRgpd = '../assets/php/page/mentions-legales.php';
    } else {
        $adresseLienRgpd = './mentions-legales.php';
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
  

    <title>Vetotoil</title>
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" id="navbar">
     
        <div class="container-fluid">
          <div class="d-flex align-items-center">
            <img src="./assets/images/logo.png" alt="logo-vetotoil" height="30px" width="30px" class="me-3">
            <a class="navbar-brand" href="#">VETOTOIL</a>
          </div>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll mx-auto" style="--bs-scroll-height: 100px;">
              <?php
        foreach ($liensHeader as $lien) {
            echo "<li class='nav-item'>";
            echo "<a class='nav-link active' aria-current='page' href='{$lien['href']}'>-{$lien['text']}-</a>";
            echo "</li>\n";
        }
        ?>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
    </header>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
