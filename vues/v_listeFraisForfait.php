 <div id="titrecategorie">
 	 <h2><span class="label label-default">Renseigner ma fiche de frais du mois <?php echo $numMois."-".$numAnnee ?></span></h2>
</div> 
<div id="contenu">
         
      <form method="POST"  action="index.php?uc=gererFrais&action=validerMajFraisForfait">
      <div class="form-group">
          
          <fieldset>
            <legend>Eléments forfaitisés
            </legend>
			<?php
				foreach ($lesFraisForfait as $unFrais)
				{
					$idFrais = $unFrais['idfrais'];
					$libelle = $unFrais['libelle'];
					$quantite = $unFrais['quantite'];
			?>
					<p>
						<label for="idFrais"><?php echo $libelle ?></label>

						<div class="col-sm-5">
							<input type="txt" class="form-control" id="idFrais" name="lesFrais[<?php echo $idFrais?>]" size="10" maxlength="5" value="<?php echo $quantite?>" >
						</div>
					</p>
			
			<?php
				}
			?>

			
           
          </fieldset>

		<div class="form-group">

						<label for="inputNom" class="col-sm-3 control-label">Identifiant</label>

						<div class="col-sm-5">

							<input type="txt" class="form-control" id="inputNom" name="inscription[identifiant]">

						</div>

					</div>

      </div>
      <div class="piedForm">
      <p>
      	<input class="btn btn-default" role="button" id="ok" type="submit" value="Valider" size="20" />
        <input class="btn btn-default" role="button" id="annuler" type="reset" value="Effacer" size="20" />
      </p> 
      </div>
        
      </form>
</div>


<?php /* <input type="text" id="idFrais" name="lesFrais[<?php echo $idFrais?>]" size="10" maxlength="5" value="<?php echo $quantite?>" >









 <div id="titrecategorie">
 	 <h2><span class="label label-default">Renseigner ma fiche de frais du mois <?php echo $numMois."-".$numAnnee ?></span></h2>
</div> 
<div id="contenu">
         
      <form method="POST"  action="index.php?uc=gererFrais&action=validerMajFraisForfait">
      <div class="corpsForm">
          
          <fieldset>
            <legend>Eléments forfaitisés
            </legend>
			<?php
				foreach ($lesFraisForfait as $unFrais)
				{
					$idFrais = $unFrais['idfrais'];
					$libelle = $unFrais['libelle'];
					$quantite = $unFrais['quantite'];
			?>
					<p>
						<label for="idFrais"><?php echo $libelle ?></label>

						
							<input type="text" id="idFrais" name="lesFrais[<?php echo $idFrais?>]" size="10" maxlength="5" value="<?php echo $quantite?>" >
						
					</p>
			
			<?php
				}
			?>





*/ ?>