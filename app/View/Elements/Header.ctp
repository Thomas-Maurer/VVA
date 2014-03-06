<?php
	echo $this->Html->div('Header');
	echo $this->Html->div('row');
	echo $this->Html->div('headerImage');
	echo '<div class="connexion">';
	echo $this->Html->div('pull-right');
	echo $this->Html->div('loginMenu loginbox');
	echo '</div>';
?>


<?php echo $this->Form->create('utilisateur',array('action' => 'login'));?>
	<div class="form-group">
                <?php echo $this->Form->input('LOGIN_UTIL', array('type' => 'txt','label' => 'Nom d\'utilisateur  ','class'=>'textboite'));
        echo $this->Form->input('MDP_UTIL', array('type' => 'password','label' => 'Mot de passe ','class'=>'textboite'));
    ?>
	</div>
	<?php echo $this->Form->end(array('class' => 'boutonConnect', 'label' => 'Connexion'));?>
</div>
</div>
</div>
</div>
</div>
<!--Fin Header-->

