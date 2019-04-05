<html>
<fieldset>
	<legend>Liste des etudiants</legend>
	<table border=1>

		<tr>
			<th>Numero</th>
			<th>Nom</th>
			<th>Prenom</th>
			<th>Ajouté note</th>
		</tr>

		<?php
		//traitement données dans le tableau

		foreach ($lesEtudiants as $unEtudiant) {
			?>
			<tr>
				<td><?php echo $unEtudiant[0]; ?></td>
				<td><?php echo $unEtudiant[1]; ?></td>
				<td><?php echo $unEtudiant[2]; ?></td>
				<td><a href="index.php?uc=gestionEtudiants&action=demandeCreation&num=<?php echo$unEtudiant[0]?>">Ajouter des notes</a></td>
			 </tr> <?php
			}
			?>
		</table>
</fieldset>

</html>