<?php
session_start();
$_SESSION['email'];
?>
<!doctype html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="./css/Home.css">
    <link rel="stylesheet" type="text/css" href="./css/StuTea.css">
    <link rel="stylesheet" type="text/css" href="./css/btncss.css">
    <link rel="stylesheet" type="text/css" href="./css/Logout.css">
    <meta charset=utf-8>
    <title>Home</title>
</head>

<body>
    <?php
    require('config.php');
    $sql = " SELECT * FROM Students ORDER BY Nom";
    $result = $conn->query($sql);
    ?>
    <div id="dialog-logout">
        <div id="div-logout">
            <p style="text-align: center; margin-top: 7%;"> sûr de vouloir vous<br>déconnecter ?</p>
            <form action="">
                <button id="btndec">NON</button>
            </form>
            <form action="Logout.php">
                <button id="btndec" style="padding-right: 10px; padding-left: 10px;">OUI</button>
            </form>
        </div>
    </div>
    <div id="col1">
        <div id="Profil">
            <img src="./IconUtilisateur.png" id="img"><br>
            <div class="no"><?php echo $_SESSION['email'] ?>
            </div><br>
            <div class="js-page">
                <main class="js-document">
                    <form>
                        <button type="button" class="no" id="logout-button" aria-haspopup="dialog" aria-controls="dialog">Déconnexion</button>
                    </form>
                </main>
            </div>
        </div>
        <div class="barre"></div>
        <form action="Home.php">
            <button class="no" style="padding: 8%;">Accueil</button>
        </form>
        <div class="barre"></div>
        <form action="Students.php">
            <button class="no" style="padding: 8%;">Liste des étudiants</button>
        </form>
        <div class="barre"></div>
        <form action="Teachers.php">
            <button class="no" style="padding: 8%;">Liste des professeurs</button>
        </form>
        <div class="barre"></div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="rect">
                    <p class="textCUBE">Nombre<br>d'élève niveau<br>CM1</p>
                    <div class="cubN">
                        <?php
                        $sql = "SELECT count(*) FROM students where Class='CM1' ";
                        $result = $conn->query($sql);
                        $users = $result->fetch();
                        echo $users[0];
                        ?>
                        <!--Tout d'abord, il y a une ligne qui déclare une variable appelée "$sql". Cette variable contient une requête SQL qui sélectionne le nombre total d'enregistrements dans la table "students" où la colonne "Class" a la valeur "CM1".

                        Ensuite, il y a une ligne qui exécute cette requête SQL en utilisant la méthode "query" de l'objet "$conn". L'objet "$conn" représente probablement une connexion à une base de données.

                        La ligne suivante utilise la méthode "fetch" sur l'objet "$result" pour récupérer le résultat de la requête. La méthode "fetch" renvoie les résultats sous forme de tableau.

                        Enfin, il y a une ligne qui utilise la fonction "echo" pour afficher le premier élément du tableau "$users". Cela affiche donc le nombre total d'étudiants ayant la classe "CM1".

                        En résumé, ce script effectue une requête SQL pour compter le nombre d'étudiants dans la classe "CM1" et affiche ce nombre à l'aide de la fonction "echo".-->
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="rect">
                    <p class="textCUBE">Nombre<br>d'élève niveau<br>CM2</p>
                    <div class="cubN">
                        <?php
                        $sql = "SELECT count(*) FROM students where Class='CM2' ";
                        $result = $conn->query($sql);
                        $users = $result->fetch();
                        echo $users[0];
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <p id="titre2">Calendrier d'événement</p><br>

</body>
<html>
<script type="text/javascript" src="./js/Logout.js"></script>