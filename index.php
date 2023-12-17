<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="./assets/js/script.js" defer></script>
<link rel="stylesheet" href="./assets/css/style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
  
    <title>Vetotoil</title>
</head>

<body>
    <header>
        <?php include "./assets/pages/header.php" ?>
    </header>
    <main class="pt-4">
        <h1 class="text-center py-5">VETOTOIL</h1>
        <div class="container text-center">
            <p>Vous rechercher un <span id="choix">Vétérinaire</span></p>
            <p>Facilitez la planification des rendez-vous pour le bien-être de votre compagnon adoré avec notre service dédié. </p>
            <p>   Nous mettons à votre disposition une plateforme intuitive et conviviale pour organiser aisément les rendez-vous nécessaires à la santé et au bonheur de votre animal préféré. </p>
            <p>   Profitez d'une expérience simple et efficace, où chaque clic rapproche votre compagnon de soins attentifs et personnalisés.</p>
            <p>    Parce que la santé de votre animal compte autant pour nous que pour vous, simplifiez la prise de rendez-vous et offrez-lui une vie épanouissante</p>
            <p>Pensez à vous <strong>enregistrer</strong> ou a vous <strong>connectez</strong> pour prendre rendez-vous en ligne avec votre professionnel </p>
        </div>
        <div class="containerCarroussel">
            <div id="carouselExampleIndicators" class="carousel carousel-dark slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                        class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                        aria-label="Slide 4"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4"
                        aria-label="Slide 5"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5"
                        aria-label="Slide 6"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="./assets/images/Chien chez le vétérinaire.png" class="d-block w-100"
                            alt="Chien chez le vétérinaire">
                    </div>
                    <div class="carousel-item">
                        <img src="./assets/images/dog at the groomer.png" class="d-block w-100"
                            alt="Chien chez le toiletteur">
                    </div>
                    <div class="carousel-item">
                        <img src="./assets/images/Chien chez le vétérinaire1.png" class="d-block w-100"
                            alt="Chien chez le vétérinaire">
                    </div>
                    <div class="carousel-item">
                        <img src="./assets/images/dog at the groomer1.png" class="d-block w-100"
                            alt="Chien chez le toiletteur">
                    </div>

                    <div class="carousel-item">
                        <img src="./assets/images/Chien chez le vétérinaire2.png" class="d-block w-100"
                            alt="Chien chez le vétérinaire">
                    </div>
                    <div class="carousel-item">
                        <img src="./assets/images/dog at the groomer2.png" class="d-block w-100"
                            alt="Chien chez le toiletteur">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div class="container-info pt-4 mx-4">
            <h2 class="text-center">Vous êtes un particulier ?</h2>
            <p class="pt-4">Il existe <strong>7 vaccins</strong> qui, s'ils ne sont pas obligatoires, sont très
                fortement recommandés car ils servent à prévenir des maladies souvent mortelles.</p>
            <p>Le toilettage est une <strong>étape obligatoire</strong> afin de veiller à la bonne hygiène de votre
                chien. Grâce au savoir-faire des toiletteurs, il sera traité en fonction de ses spécificités, son pelage
                ou sa race</p>
        </div>

        <div class="container">
            <div class="row">
                <h2 class="text-center py-4">Vous êtes praticien ?</h2>
                <div class="col">
                    <p> <img src="assets/images/montre.png" class="taille-image"><strong>Libérez</strong> du temps
                        médical grâce à la prise de rendez-vous en ligne</p>
                </div>
            </div>
            <div class="row">

                <div class="col">
                    <p><img src="assets/images/oeil.png" class="taille-image"><strong>Développez</strong> l'activité de
                        votre cabinet/salon selon vos besoins grâce à une meilleure visibilité en ligne</p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p><img src="assets/images/telephone.png" class="taille-image"><strong>Gagnez</strong> en confort de
                        travail au quotidien en réduisant les appels téléphoniques à votre cabinet</p>
                </div>
            </div>
            <div class="row">
                <div class="d-grid gap-2 col-6 mx-auto my-4">
                    <button class="btn btn-primary" type="button">Découvrir VETOTOIL Pour professionnel</button>
                </div>
            </div>
        </div>

    </main>
    <footer>
    <?php include "./assets/pages/footer.php" ?>


    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>