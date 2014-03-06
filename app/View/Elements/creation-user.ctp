<div class="col-xs-9 col-md-8 col-lg-9  panel Article">
        		<div class="panel"style="background:none">
                	<h5> Création d'utilisateurs </h5>
                </div>
                <div class="panel" style="background:none">
                	<p>
<?php echo $this->Form->create('utilisateur',array('action' => 'add')); ?>
<?php
echo $this->Form->input('utilisateur.LOGIN_UTIL', array('type' => 'txt','label' => 'Login Utilisateur:','class'=>'form-control'));
echo $this->Form->input('utilisateur.MDP_UTIL', array('type' => 'password','label' => 'Password Utilisateur:','class'=>'form-control'));
echo $this->Form->hidden('controle.ID_UTILISATEUR');
?>

<?php 

$listeRubriquesParents = array();
foreach($rubriques_parents as $rub){
	$listeRubriquesParents[$rub['rubrique']['id']] =  $rub['rubrique']['NOM_RUBRIQUE'];
}

	
echo $this->Form->input('controle.ID_RUBRIQUE', array('label' => 'Rubrique:','options' => $listeRubriquesParents)); ?>

<?php echo $this->Form->end(array('class' => 'btn btn-default', 'label' => 'Envoyer')); ?>




</div>
</div>
