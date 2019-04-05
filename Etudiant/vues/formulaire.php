<div id="centre">
		<form  action="index.php?uc=gestionEtudiants&action=Creation"  method="POST" >


			 <fieldset>
             <legend><h1>Vos notes</h1></legend><br/>
                 <center>             
                        <table>
                            <p>
                                    <tr> <td align="right"><?php echo $lesMatiere[0][1] ?></td> <td><input type="number" size="50" name="math" value=""><br></td> <td><input type="number" size="50" name="mathc" value=""><br></td> </tr>
                                    <tr> <td align="right"><?php echo $lesMatiere[1][1] ?></td> <td><input type="number" size="50" name="anglais" value=""><br></td> <td><input type="number" size="50" name="anglaisc" value=""><br></td> </tr>
                                    <tr> <td align="right"><?php echo $lesMatiere[2][1] ?></td> <td><input type="number" size="50" name="eps" value=""><br></td> <td><input type="number" size="50" name="epsc" value=""><br></td> </tr>
                                    <tr> <td align="right"><?php echo $lesMatiere[3][1] ?></td> <td><input type="number" size="50" name="frs" value=""><br></td> <td><input type="number" size="50" name="frsc" value=""><br></td> </tr>
                                    <tr> <td align="right"><?php echo $lesMatiere[4][1] ?></td> <td><input type="number" size="50" name="hg" value=""><br></td> <td><input type="number" size="50" name="hgc" value=""><br></td> </tr>
                                    <tr> <td align="right"><?php echo $lesMatiere[5][1] ?></td> <td><input type="number" size="50" name="espa" value=""><br></td> <td><input type="number" size="50" name="espac" value=""><br></td> </tr>
                                    <tr hidden> <input type="text" name="num" value="<?php echo $_REQUEST['num'];?>" hidden><br></td> </tr>
                            </p>
                        </table>
                 </center>
            </fieldset>
        </br>


				<center>
					<input type="submit" name="save" value="Valider">
					<input type="reset" name="annul" value="Annuler">
				</center>
         </form>
         <a href="index.php?uc=gestionEtudiants&action=Liste"><br>Liste des étudiants</a>
</div>