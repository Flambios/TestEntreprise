<div id="centre">
	<form action="index.php?uc=gestionEtudiants&action=moyenne" method="POST">


		<fieldset>
			<legend>
				<h1>Choisir un étudiant</h1>
			</legend>
			<tr>
				<td align="right">éleve </td>
				<td><select id="eleve" name="eleve" size="1" onchange="submit()">
						<option></option>
						<?php
						foreach ($lesEtudiants as $etudiant) {
							?>
							<option value="<?php echo $etudiant[0]; ?>"><?php echo $etudiant[1], " ", $etudiant[2]; ?></option>
											<?php
							}
							?>
					</select></td>
			</tr>
	</form></br>

	<?php
		$moyenne=0;
		if (isset($lesNotes)) 
		{
			foreach ($lesNotes as $note) 
			{
				echo $note[6],"=",$note[1],"</br>";
				$moyenne=$moyenne+($note[1]*$note[4]);
			}
			 $moyenne = $moyenne/6 ;
			 echo $moyenne;
		} 
	?>
	</fieldset>
	<a href="index.php?uc=gestionEtudiants&action=Liste"><br>Liste des étudiants</a>
</div>