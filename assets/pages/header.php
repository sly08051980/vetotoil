<!-- header.php -->

<?php

$liensHeader = [
    ['text' => 'Accueil', 'href' => '#'],
    ['text' => 'Connexion', 'href' => '#'],
    ['text' => 'Inscription', 'href' => '#'],
    ['text' => 'Contact', 'href' => '#'],
    
   
];

$adresseImages = "";
adressLien();

function adressLien()
{
    global $adresseImages;
    $cheminActuel = $_SERVER['REQUEST_URI'];
    if ($cheminActuel === "/vetotoil/"||$cheminActuel == "/vetotoil/index.php") {
        $adresseImages = './assets';
    } else {
        $adresseImages = '..';
    }
}
?>

<!DOCTYPE html>
    <header>
      <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" id="navbar">
     
        <div class="container-fluid">
          <div class="d-flex align-items-center">
            <img src="<?php echo $adresseImages;?>/images/logo.png" alt="logo-vetotoil" height="30px" width="30px" class="me-3">
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

</html>
