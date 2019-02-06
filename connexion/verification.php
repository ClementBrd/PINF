<?php

/* verification.php
 * -> Fichier pour vérifier la connexion de l'utilisateur, voir le compte rendu afin d'avoir une explication complète en plus des
 *    commentaires sur le code.
 *
 * Version 1
 *
 * TESSON Lucas (LE2 - TDB)
 *
 */

session_start();
include_once ("../libs/maLibSQL.pdo.php");
include_once("../libs/maLibUtils.php");
include_once("../libs/maLibForms.php");
include_once("../libs/maLibBootstrap.php");

if(isset($_GET['username']) && isset($_GET['password']))    //Si les variables GET "username" (nom de l'user) et "password" existent
{

    $username = $_GET["username"];  //cette affectation permet de rendre un code + lisible
    $password = $_GET["password"];

    if($username !== "" && $password !== "")
    {
        $sql = "SELECT * FROM utilisateur WHERE nom_util='".$_GET["username"]."' AND mdp_util='".$_GET["password"]."';";

        if(SQLSelect($sql) != false){

            $listeData = parcoursRs(SQLSelect($sql));

            //On met toutes ces variables en variable de sessions afin de les utiliser plus tard dans d'autres fichiers.

            $_SESSION["connect"] = true;                       //Permet de savoir si l'utilisateur est connecté
            $_SESSION["premium"] = $listeData[0]["premium"];   //Permet de savoir si l'utilisateur est premium ou non
            $_SESSION["username"] = $_GET["username"];
            header('Location: ../explorateur.php');     //On retourne dans le fichier explorateur.php
        }
        else
        {
            header('Location: login.php?erreur=1'); // utilisateur ou mot de passe incorrect
        }
    }
    else
    {
        header('Location: login.php?erreur=2'); // utilisateur ou mot de passe vide (impossible normalement car il y a un required
    }
}
else
{
    header('Location: login.php');
}
?>