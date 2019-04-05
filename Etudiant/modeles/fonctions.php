<?php
function connexion()
{ 

  $hote="localhost";
  $login="root";
  $mdp="root";
  $bd="etudiant";
  $connexion= mysqli_connect($hote, $login, $mdp,$bd)or die("Erreur ");
   
  
   return $connexion;

}

function getLesEtudiants()
{
	$connexion = connexion();
	$req = "select * from etudiant";


	
	$result = mysqli_query($connexion,$req);
	
	if (!$result) 
	{
   		
		$message='Requête invalide';
    	die($message);
    }
    
   $lesEtudiants=mysqli_fetch_all($result);
	
    return $lesEtudiants;
}

function getLesMatiere()
{
    $connexion = connexion();
    $req = "select * from matiere";
    
    $result = mysqli_query($connexion,$req);
    
    if (!$result) 
	{
   		
		$message='Requête invalide';
    	die($message);
    }
    $LesMatiere=mysqli_fetch_all($result);
    return $LesMatiere;
}

function getLesNotes($eleve)
{
    $connexion = connexion();
    $req = "select * 
     from note INNER JOIN matiere ON note.id_matiere=matiere.id 
     where id_etudiant='$eleve' ORDER BY id_matiere";
    
    $result = mysqli_query($connexion,$req);
    
    if (!$result) 
	{
   		
		$message='Requête invalide';
    	die($message);
    }
    $LesNotes=mysqli_fetch_all($result);
    return $LesNotes;
}


function enregistrer($note,$id_etudiant,$id_matiere, $coeff)
{
  $connexion = connexion();


  if ($connexion)
  {
    //Controle si l'etudiant existe déjà
    $reqCount="Select count(*) as nbEtud 
          From note
          where id_etudiant='$id_etudiant' and id_matiere='$id_matiere'";
		  
    $res = mysqli_query($connexion,$reqCount) or die('<br>Erreur SQL !<br>'.$count.'<br>');
   
    $laligne = mysqli_fetch_array($res);
	
     if($laligne['nbEtud']==0)
	 
     {

        $laligne="insert into note(note, id_etudiant, id_matiere, coeff)  values('$note','$id_etudiant','$id_matiere', '$coeff')";
        $req = mysqli_query($connexion,$laligne) or die('<br>Erreur SQL !<br>'.$laligne.'<br>');
      
      }
    else
     {
      
		echo "<script>alert(\"$note est deja répertorié pour cette eleve\");</script>";
      }
  } 

}

?>
