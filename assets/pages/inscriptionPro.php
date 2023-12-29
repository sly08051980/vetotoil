<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../js/inscriptionPro.js" defer></script>
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto+Serif:ital,opsz,wght@0,8..144,100;0,8..144,200;0,8..144,300;0,8..144,400;0,8..144,500;0,8..144,600;0,8..144,800;0,8..144,900;1,8..144,100;1,8..144,200;1,8..144,300;1,8..144,400;1,8..144,500;1,8..144,600;1,8..144,700;1,8..144,800;1,8..144,900&display=swap"
        rel="stylesheet">
</head>

<body>
    <header>
        <?php include "./header.php" ?>

    </header>

    <main>
        <div class="container pt-5">
            <div class="row">
                <div class="col-12 justify-content-center py-5">
                    <h1 class="text-center">Inscription</h1>
                </div>
            </div>
            <div class="row justify-content-center">
                <form class="col-lg-8">
                    <div class="row">
                        <!-- Colonnes de gauche -->
                        <div class="col-lg-5">
                        <div class="mb-3">
                                <label for="siret" class="form-label">Numero Siret</label>
                                <input type="text" class="form-control" id="siret" aria-describedby="siret">
                                <button type="button" class=".btn-custom" id="button">Rechercher</button>
                            </div>
                            <div class="mb-3">
                                <label for="nomSociete" class="form-label">Nom Société</label>
                                <input type="text" class="form-control" id="nomSociete" aria-describedby="nomSociete">
                            </div>
                            <div class="mb-3">
                            <label for="profession" class="form-label">Profession</label>
                <select class="form-select" id="profession" aria-label="Sélectionnez une option">
                    <option selected>Choisissez...</option>
                    <option value="Vétérinaire">Vétérinaire</option>
                    <option value="Toiletteur">Toiletteur</option>
                   
                </select>
                            </div>
                            <div class="mb-3">
                                <label for="nomDirigeant" class="form-label">Nom du Dirigeant</label>
                                <input type="text" class="form-control" id="nomDirigeant" aria-describedby="nomDirigeant">
                                <ul id="list"></ul></label>
                            </div>
                            <div class="mb-3">
                                <label for="adresse" class="form-label">Adresse</label>
                                <input type="text" class="form-control" id="adresse"
                                    aria-describedby="adresse">
                            </div>
                            <div class="mb-3">
                                <label for="complementAdresse" class="form-label">Complément Adresse</label>
                                <input type="text" class="form-control" id="complementAdresse"
                                    aria-describedby="complementAdresse">
                            </div>
                            <div class="mb-3">
                                <label for="codePostal" class="form-label">Code Postal</label>
                                <input type="text" class="form-control" id="codePostal" aria-describedby="codePostal">
                            </div>
                        </div>

                        <!-- Colonnes de droite -->
                        <div class="col-lg-5">
                            <div class="mb-3">
                                <label for="ville" class="form-label">Ville</label>
                                <input type="text" class="form-control" id="ville" aria-describedby="ville">
                            </div>
                            <div class="mb-3">
                                <label for="telephoneSociete" class="form-label">Téléphone Société</label>
                                <input type="tel" class="form-control" id="telephoneSociete" aria-describedby="telephoneSociete" pattern="[0-9]{10}">
                            </div>
                            <div class="mb-3">
                                <label for="telephoneDirigeant" class="form-label">Téléphone Dirigeant</label>
                                <input type="tel" class="form-control" id="telephoneDirigeant" aria-describedby="telephoneDirigeant" pattern="[0-9]{10}">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" aria-describedby="email">
                            </div>
                            <div class="mb-3">

                                <label for="password" class="form-label">Mot de passe</label>
                                <input type="password" class="form-control" id="password">
                            </div>
                            <div class="mb-3">
                                <label for="repassword" class="form-label">Confirmer le mot de passe</label>
                                <input type="password" class="form-control" id="repassword">
                            </div>
                        </div>
                    </div>
            </div>

            <!-- Bouton au bas du milieu -->
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
            </form>
        </div>
        </div>
    </main>

    <footer>
        <?php include "./footer.php" ?>


    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>