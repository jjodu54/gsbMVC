 <div id="titrecategorie">
 	 <h2><span class="label label-default">Mes fiches de frais</span></h2>
</div> 

 <div id="contenu">
      <h3>Mois à sélectionner : </h3>
      <form action="index.php?uc=etatFrais&action=voirEtatFrais" method="post">
      <div class="corpsForm">
         
      <p>
	 

        <label for="lstMois" accesskey="n">Mois : </label>
        <select id="lstMois" name="lstMois">
            <?php
			foreach ($lesMois as $unMois)
			{
			    $mois = $unMois['mois'];
				$numAnnee =  $unMois['numAnnee'];
				$numMois =  $unMois['numMois'];
				if($mois == $moisASelectionner){
				?>
				<option selected value="<?php echo $mois ?>"><?php echo  $numMois."/".$numAnnee ?> </option>
				<?php 
				}
				else{ ?>
				<option value="<?php echo $mois ?>"><?php echo  $numMois."/".$numAnnee ?> </option>
				<?php 
				}
			
			}
           
		   ?>    
            
        </select>
      </p>
      </div>
      <div class="piedForm">
      <p>
        <input class="btn btn-default" role="button" id="ok" type="submit" value="Valider" size="20" />
        <input class="btn btn-default" role="button" id="annuler" type="reset" value="Effacer" size="20" />
      </p> 
      </div>
        
      </form>