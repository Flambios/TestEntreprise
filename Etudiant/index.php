<?php
session_start();
require_once("modeles/fonctions.php");
include("vues/v_entete.php") ;
include("vues/v_bandeau.php") ;

if(!isset($_REQUEST['uc']))
     $uc = 'accueil';
else
	$uc = $_REQUEST['uc'];


switch($uc)
{
	case 'accueil':
		{include("vues/v_accueil.php");
		break;
		} 
		
	case 'gestionEtudiants' :
		{
			include("controleurs/c_voirEtudiant.php");
		 	break;
		}
}
include("vues/v_pied.php") ;
?>

