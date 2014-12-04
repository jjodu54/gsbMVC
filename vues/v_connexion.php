 <div id="titrecategorie">
   <h2><span class="label label-default">Identification utilisateur</span></h2>
</div> 

<div id="contenu">



<form php method="POST" action="index.php?uc=connexion&action=valideConnexion">
   
    
			<p>
       <label for="nom">Login*</label>
       <input id="login" type="text" name="login"  size="30" maxlength="45">
      </p>
			<p>
				<label for="mdp">Mot de passe*</label>
			  <input id="mdp"  type="password"  name="mdp" size="30" maxlength="45">
      </p>
         <input class="btn btn-default" role="button" id="ok" type="submit" value="Valider" size="20" />
        <input class="btn btn-default" role="button" id="annuler" type="reset" value="Effacer" size="20" />
      </p>
</form>

</div>