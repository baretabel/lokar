<?php

$servername = "localhost";
$username = "VendeurVendu";
$password = "Simplon974!";
$dbname = "lokar";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $stmt = $conn->prepare("SELECT ID, Marque, Modele, Date_emission_Carte_Grise, Kilometrage, Immatriculation, Nombre_de_places, PrixJour, Motorisation, Boite_de_Vitesse, Climatiseur, Photo FROM Véhicules"); 
    $stmt->execute();
    
    // vérifier avec phpmyadmin
    }catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
		}
		
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>


    <title>Lokar</title>
</head>





<!-- la navbar-->





<div class="sticky-top">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
        <img src="images/logovoiture.png" width="60" height="60" alt="">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">


            </ul>
            <form class="form-inline my-2 my-lg-0" style="margin-right: 30%">
                <input class="form-control mr-sm-2" type="search" placeholder="Rechercher..." aria-label="Rechercher">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Rechercher</button>
            </form>
            <button type="button" class="btn btn-outline-success" style="margin: 5px" data-toggle="modal"
                data-target="#inscription" data-whatever="@fat">s'inscrire</button>
            <button type="button" class="btn btn-outline-success" style="margin: 5px" data-toggle="modal"
                data-target="#connection" data-whatever="@fat">se connecter</button>
        </div>
    </nav>
</div>







<!-- les modal -->






<div class="modal fade" id="connection" tabindex="-1" role="dialog" aria-labelledby="connection" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Se connecter</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Pseudo :</label>
                        <input type="text" class="form-control" id="recipient-name">

                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Mot De Passe :</label>
                        <input type="password" class="form-control" id="recipient-name">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                <button type="button" class="btn btn-primary">Login</button>
            </div>
        </div>
    </div>
</div>




<div class="modal fade" id="inscription" tabindex="-1" role="dialog" aria-labelledby="inscription" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">S'inscrire</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="new.php" method="post">

                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Nom :</label>
                        <input name="nom" type="text" class="form-control" id="recipient-name">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Prenom :</label>
                        <input name="pnom"type="text" class="form-control" id="recipient-name">

                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Age :</label>
                        <input name="age"type="number" class="form-control" id="recipient-name">

                    </div>



                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Email :</label>
                        <input name="mail"type="email" class="form-control" id="recipient-name">
</div>
<div class="form-group">
                        <label for="recipient-name" class="col-form-label">Confirmer l'email :</label>
                        <input name="cmail" type="email" class="form-control" id="recipient-name">
</div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Mot De Passe :</label>
                        <input name="pass"type="password" class="form-control" id="recipient-name">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Retaper Votre Mot De Passe :</label>
                        <input name="cpass"type="password" class="form-control" id="recipient-name">
                    </div>
               
            </div>
            <div class="modal-footer">
                
                <button type="submit" class="btn btn-primary">s'inscrire</button>
             </form><button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button></div>
        </div>
    </div>
</div>










<!--le titre-->




<h1 class="titre">LOKAR</h1>




<!--les div d'affichage-->

<?php
 while ($resultat = $stmt->fetch()) {
    echo "<div class=\"divaffichage\" style=\"margin-top: 5%\">\n";
    echo "    <div><img src=\"".$resultat['Photo']."\" alt=\"\" class=\"voiture\"></div>\n";
    echo "    <div class=\"column\">\n";
    echo "        <h3>".$resultat['Marque']." ".$resultat['Modele']."</h3>\n";
    echo "        <p><b>Motorisation: </b>".$resultat['Motorisation']." </p>\n";
    echo "        <p><b>Prix journalier: </b>".$resultat['PrixJour']."€ </p>\n";
    echo "        <p><b>Année: </b>".  substr($resultat['Date_emission_Carte_Grise'], 0, 4) ."</p>\n";
    echo "  <p><b>Transmission: </b>".$resultat['Boite_de_Vitesse']."</p>\n";
    echo "    </div>\n";
    echo "    <button type=\"button\" class=\"btn btn-secondary btn-lg\">Voir +</button>\n";
    echo "</div>\n";
    
 }
?>













</body>

</html>