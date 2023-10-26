<?php
session_start();
$_SESSION['email'];
?>
<!DOCTYPE HTML>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="./css/StuTea.css">
    <link rel="stylesheet" type="text/css" href="./css/btncss.css">
    <link rel="stylesheet" type="text/css" href="./css/Logout.css">
    <meta charset=utf-8>
    <title>Teachers</title>
</head>

<body>
    <?php
    require('config.php');
    $sql = " SELECT * FROM Teachers ORDER BY Nom";
    $result = $conn->query($sql);
    if (isset($_GET['recherchebarre']) and !empty($_GET['recherchebarre'])) {
        $recherche = htmlspecialchars($_GET['recherchebarre']);
        $result = $conn->query('SELECT * FROM Teachers WHERE Nom LIKE "%' . $recherche . '%"');
    }
    ?>
    <!--
    Tout d'abord, il y a une ligne qui utilise la fonction "require" pour inclure le fichier "config.php". Cela suggère que ce fichier contient des informations de configuration nécessaires pour établir une connexion à la base de données.

    Ensuite, il y a une ligne qui définit la variable "$sql" avec une requête SQL. Cette requête sélectionne toutes les colonnes de la table "Teachers" et les trie par ordre alphabétique du nom.

    La ligne suivante exécute cette requête SQL en utilisant la méthode "query" de l'objet "$conn". L'objet "$conn" représente probablement une connexion à une base de données.

    Ensuite, il y a une condition "if" qui vérifie si le paramètre GET 'recherchebarre' est défini et si le paramètre GET 'recherchebarre' n'est pas vide. Cela suggère que ce script peut être utilisé pour effectuer une recherche dans la liste des enseignants.

    Si ces conditions sont remplies, le script récupère la valeur du paramètre GET 'recherchebarre', l'assigne à la variable "$recherche" après avoir appliqué la fonction "htmlspecialchars" pour éviter toute injection de code malveillant. Ensuite, le script exécute une autre requête SQL qui sélectionne les enseignants dont le nom correspond à la valeur recherchée (en utilisant l'opérateur LIKE avec des jokers %).

    En résumé, ce script récupère les données des enseignants depuis la table "Teachers", les trie par ordre alphabétique du nom, et peut également effectuer une recherche dans la liste des enseignants en fonction d'un paramètre GET 'recherchebarre'.-->
    <div id="dialog-add-student">
        <form action="FormStudents.php" method="POST" id="form-add-student">
            <h2>Ajouter un(e) élève</h2><br>
            <div>
                <label for="nom">Nom </label>
                <input name="nom" type="text" required style="margin-left: 150px;">
            </div><br>
            <div>
                <label for="prenom">Prenom </label>
                <input name="prenom" type="text" required style="margin-left: 130px;">
            </div><br>
            <div>
                <label for="num">Telephone </label>
                <input type="tel" name="num" required style="margin-left: 112px;">
            </div><br>
            <div>
                <label for="adress">Adress: </label>
                <input type="text" name="adress" required style="margin-left: 134px;">
            </div><br>
            <div>
                <label for="email">Email: </label>
                <input type="email" name="email" required style="margin-left: 143px;">
            </div><br>
            <div>
                <label for="class">Class: </label>
                <select type="text" name="class" required style="margin-left: 143px;">
                    <option value="CM1">CM1</option>
                    <option value="CM2">CM2</option>
                </select>
            </div><br>
            <div>
                <button type="submit">submit</button>
            </div>
        </form>
    </div>
    <div id="dialog-logout">
        <div id="div-logout">
            <p style="text-align: center; margin-top: 7%;"> sûr de vouloir vous<br>déconnecter ?</p>
            <form action="">
                <button id="btndec">NON</button>
            </form>
            <form action="Logout.php">
                <button id="btndec" style="padding-right: 10px; padding-left: 10px;">OUI</button>
            </form>
        </div> N
    </div>
    <div id="col1">
        <div id="Profil">
            <img src="./IconUtilisateur.png" id="img"><br>
            <div class="no"><?php echo $_SESSION['email'] ?></div><br>
            <div>
                <button type="button" class="no" id="logout-button" aria-haspopup="dialog" aria-controls="dialog">Déconnexion</button>
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
    <p id="titre">Liste des Professeur</p>

    <div id="blockbarreliste">
        <div>
            <form method="$_GET">
                <input type="search" placeholder="Recherche un professeurt" name="recherchebarre" id="barreIN">
                <button type="button" class="add-student" id="btnadd" aria-haspopup="dialog" aria-controls="dialog">Add</button>
            </form>
        </div>
        <section>
            <div id="Scrolable">
                <table id="TB">
                    <?php
                    if ($result->rowCount() > 0) {
                        while ($rows = $result->fetch(PDO::FETCH_ASSOC)) {
                    ?>
                            <tr>
                                <td><?php echo $rows['Nom']; ?></td>
                                <td><?php echo $rows['Prenom']; ?></td>
                                <td><?php echo $rows['Tel']; ?></td>
                                <td><?php echo $rows['Adresse']; ?></td>
                                <td><?php echo $rows['Email']; ?></td>
                                <td><?php echo $rows['Class']; ?></td>
                            </tr>
                        <?php
                        }
                    } else {
                        ?>
                        <p>Aucun professeur trouvé</p>
                    <?php
                    }
                    ?>
                </table>
            </div>
        </section>
    </div>
</body>

</html>
<script type="text/javascript" src="./js/btn.js"></script>
<script type="text/javascript" src="./js/Logout.js"></script>