<?php

if(!isset($_REQUEST['action']))
     $action = 'Liste';
else
	$action = $_REQUEST['action'];
  
switch($action)
{
	case 'Liste':
	{
  	
  		$lesEtudiants =  getLesEtudiants();
		  
		include("vues/v_ListeEtudiants.php");
  		break;
	}
	
	case 'demandeCreation':
	{ 
    	if(isset($_GET['indicIncomp']))
		{
          echo "<script>alert(\"Les valeurs doivent être renseignées\");</script>";
		}
		$lesMatiere =  getLesMatiere();
		include("vues/formulaire.php");

  		break;
	}

	case 'demandeMoyenne':
	{
		if(isset($_GET['indicIncomp']))
		{
          echo "<script>alert(\"Les valeurs doivent être renseignées\");</script>";
		}
		$lesEtudiants =  getLesEtudiants();
		include("vues/moyenne.php");
		
  		break;
	}

	case 'moyenne':
	{
		$lesEtudiants =  getLesEtudiants();
		if(isset($_POST['eleve']))
		{
			$_SESSION['$eleve']=$_POST['eleve'];
			$eleve=$_POST['eleve'];
			$lesNotes = getLesNotes($eleve);
		}
		else
		{
			$_SESSION['$eleve']="";
		}
            include("vues/moyenne.php");
			
            break;
	}

	case 'moyenneC':
	{
		echo "<script>alert(\"Les notes ajouté\");</script>";	
	}
	
	case 'Creation':
	{   //vérification paramètres récupérés de la saisie
         if ($_POST['math']!="" && $_POST['anglais']!="" && $_POST['eps']!="" && $_POST['frs']!="" && $_POST['hg']!="" && $_POST['espa']!="" && $_POST['mathc']!="" && $_POST['anglaisc']!="" && $_POST['epsc']!="" && $_POST['frsc']!="" && $_POST['hgc']!="" && $_POST['espac']!="")
          {
				$num=$_POST['num'];
				$math=$_POST['math'];
				$anglais=$_POST['anglais'];
				$eps=$_POST['eps'];
				$frs=$_POST['frs'];
				$hg=$_POST['hg'];
				$espa=$_POST['espa'];

				$mathc=$_POST['mathc'];
				$anglaisc=$_POST['anglaisc'];
				$epsc=$_POST['epsc'];
				$frsc=$_POST['frsc'];
				$hgc=$_POST['hgc'];
				$espac=$_POST['espac'];

				if($math >=0 && $math < 21)
					enregistrer($math, $num, 1, $mathc);
				if($anglais >=0 && $anglais < 21)	
					enregistrer($anglais, $num, 2, $anglaisc);
				if($eps >=0 && $eps < 21)				
					enregistrer($eps, $num, 3, $epsc);
				if($frs >=0 && $frs < 21)
					enregistrer($frs, $num, 4, $frsc);
			    if($hg >=0 && $hg < 21)
					enregistrer($hg, $num, 5, $hgc);
				if($espa >=0 && $espa < 21)
					enregistrer($espa, $num, 6, $espac);

				echo "<script>alert(\"Les notes ajouté\");</script>";
				$lesEtudiants =  getLesEtudiants();
				include("vues/v_ListeEtudiants.php");

			}
			else
			{
				header("location:index.php?uc=gestionEtudiants&action=demandeCreation&indicIncomp=1");
			}
			break;

	}
	
}
?>

