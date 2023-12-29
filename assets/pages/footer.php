<?php
$liensFooterContact = [
    ['text' => 'Connexion', 'href' => 'connexion.php'],
    ['text' => 'Inscription', 'href' => 'inscription.php'],
    ['text' => 'Contact', 'href' => '#'],
   
];




$chemin = $_SERVER['REQUEST_URI'];
// echo "nom". $chemin;
$liensGeneres = [];

$liensGeneresMention=[];
foreach ($liensFooterContact as $lienFooterContact) {
    if ($chemin == "/vetotoil/") {
        if ($lienFooterContact['text'] == 'Connexion') {
            $aFooterHref = "href=assets/pages/{$lienFooterContact['href']}";
        } elseif ($lienFooterContact['text'] == 'Inscription') {
            $aFooterHref = "href=assets/pages/{$lienFooterContact['href']}";

        } else {

            $aFooterHref = "";
        }

    } else {
       if ($lienFooterContact['text'] == 'Connexion') {
            $aFooterHref = "href={$lienFooterContact['href']}";
        } elseif ($lienFooterContact['text'] == 'Inscription') {
            $aFooterHref = "href={$lienFooterContact['href']}";
        }

    }

    $liensGeneres[] = "<li><a class='text-dark' $aFooterHref>{$lienFooterContact['text']}</a></li>";

}

$liensFooterMention=[
    ['text' => 'Politique de Confidentialité', 'href' => 'politiqueConfidentialite.php'],
    ['text' => 'RGPD', 'href' => 'rgpd.php'],
    ['text' => 'Inscription', 'href' => 'inscription.php'],
];

foreach ($liensFooterMention as $lienFooterMention) {
    if ($chemin == "/vetotoil/") {
        if ($lienFooterMention['text'] == 'Politique de Confidentialité') {
            $aFooterHref = "href=assets/pages/{$lienFooterMention['href']}";
        } elseif ($lienFooterMention['text'] == 'RGPD') {
            $aFooterHref = "href=assets/pages/{$lienFooterMention['href']}";
        } elseif ($lienFooterMention['text'] == 'Inscription') {
            $aFooterHref = "href=assets/pages/{$lienFooterMention['href']}";

        } else {

            $aFooterHref = "";
        }

    } else {
        if ($lienFooterMention['text'] == 'Politique de Confidentialité') {
            $aFooterHref = "href={$lienFooterMention['href']}";
        } elseif ($lienFooterMention['text'] == 'RGPD') {
            $aFooterHref = "href={$lienFooterMention['href']}";
        } elseif ($lienFooterMention['text'] == 'Inscription') {
            $aFooterHref = "href={$lienFooterMention['href']}";
        }

    }

    $liensGeneresMention[] = "<li><a class='text-dark' $aFooterHref>{$lienFooterMention['text']}</a></li>";

}

$adresseImages1 = "";
adressLien1();

function adressLien1()
{
    global $adresseImages1;
    $cheminActuel1 = $_SERVER['REQUEST_URI'];
    if ($cheminActuel1 === "/vetotoil/"||$cheminActuel1 == "/vetotoil/index.php") {
        $adresseImages1 = './assets';
    } else {
        $adresseImages1 = '..';
    }
}

?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
</head>

<body>
    <footer class="bg-transparent text-center pb-4">
        <div class="container text-center text-md-left">
            <div class="row text-center text-md-left">
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                    <div class="d-flex justify-content-center">
                        <img src="<?php echo $adresseImages1;?>/images/logo.png" alt="logo-vetotoil" height="30px" width="30px" class="me-3">
                        <h5 class="text-uppercase mb-4 font-weight-bold ">Vetotoil</h5>
                    </div>
                    <p>Pour la prise de rendez vous de votre animal préféré</p>

                </div>
                <div class="col-md-2 col-lg-2 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold ">Mes services</h5>
                    <?php

                    echo "<ul class='list-unstyled text-center'>";
                    foreach ($liensGeneres as $lienGenere) {
                        echo $lienGenere;
                    }
                    echo "</ul>";
                    ?>

                </div>
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto pt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold">Mention Légale</h5>
                    <?php

echo "<ul class='list-unstyled text-center'>";
foreach ($liensGeneresMention as $lienGenereMention) {
    echo $lienGenereMention;
}
echo "</ul>";
?>
                </div>
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold">Siège Social</h5>
                    <p><i class="bi bi-house mr-3"></i>6 avenue du Maréchal Ney 13011 Marseille</p>
                    <p><i class="bi bi-envelope mr-3"></i>regnier.sylvain.afpa@gmail.com</p>
                    <p><i class="bi bi-phone mr-3"></i>06.20.94.17.45</p>



                </div>

            </div>
            <hr class="mb-4">
            <div class="row align-item-center">
                <div class="col-md-7 col-lg-8">
                    <p>Copyright &copy; Regnier Syvain pour VETOTOIL</p>
                </div>
                <div class="col-md-5 col-lg-4">
                    <div class="text-center text-md-right">
                        <ul class="list-unstyled list-inline d-flex">
                            <li class="social"><a href="#" class="btn-floating btn-sm text-white bg-primary"
                                    style="font-size: 23px;"><i class="bi bi-facebook"></i></a></li>
                            <li class="social"><a href="#" class="btn-floating btn-sm text-white bg-dark"
                                    style="font-size: 23px;"><i class="bi bi-twitter-x"></i></a></li>
                            <li class="social">
                                <div class="bg-instagram"><a href="#" class="btn-floating btn-sm text-white"
                                        style="font-size: 23px;"><i class="bi bi-instagram"></i></a></div>
                            </li>
                            <li class="social"><a href="#" class="btn-floating btn-sm text-white bg-primary"
                                    style="font-size: 23px;"><i class="bi bi-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>

    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>