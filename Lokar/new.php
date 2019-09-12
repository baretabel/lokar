<?php
$servername = "localhost";
$username = "VendeurVendu";
$password = "Simplon974!";
$dbname = "lokar";
$nom=$_POST['nom'];
echo $nom;
$pnom=$_POST['pnom'];
$mail=$_POST['mail'];
$cmail=$_POST['cmail'];
$age=$_POST['age'];
$age=(int)$age;
$pass=$_POST['pass'];
$cpass=$_POST['cpass'];
$date= date("Y-m-d");
if($mail==$cmail){
    if($pass==$cpass){
        try{
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt=" SELECT Email FROM menbre WHERE Email='$mail'";
    echo $stmt;
    $conn->exec($stmt);
    $resultat = $stmt->fetch();
    echo $resultat['Email'];
    if($resultat['Email']!=$mail){
    $req = " INSERT INTO menbre(ID, Nom, Prenom, Email, Age, Pass, Date) VALUES (null,'$nom','$pnom','$mail','$age','$pass','$date');";
           echo $req;
    $conn->exec($req);
          //  header('location: admin.php');
    }else{
    echo "erreur1";
}}catch(PDOException $e){
    echo $sql . "<br>" . $e->getMessage();
}
    }else{ echo "erreur";}
}else{echo "erreur";} 

?>