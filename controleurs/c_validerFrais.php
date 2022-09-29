<?php
include("vues/v_sommaire.php");
$action = $_REQUEST['action'];
$idUtilisateur = $_SESSION['idUtilisateur'];
switch($action){
    case 'validerFrais':{
        $lesVisiteurs = $pdo->getVisiteurs();
        $lesMois = $pdo->getLesMoisDisponibles('a55');
        $lesCles = array_keys($lesMois);
        $moisASelectionner = $lesCles[0];
        include("vues/v_validerFrais.php");
    }

}
?>