
<ul>
<?php 
foreach($_REQUEST['erreurs'] as $erreur)
	{
		?><div class="alert alert-danger" role="alert"><?php echo "<li>$erreur</li>"; ?></div><?php
	}
?>
</ul>
