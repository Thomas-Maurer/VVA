   <div class="panel"style="background:none">
		<?php 
			echo '<div class="location">';
			echo $this->Html->link('Vilgenis' ,array('controller' => '','action' => "index", 'full_base' => true));
			for ($i = 0; $i < count($location_nom); $i++){
			echo " > ";
			echo $this->Html->link($location_nom[$i] ,array('controller' => $location_type[$i],'action' => "$location_lien[$i]", 'full_base' => true));
			}
			echo '</div>';
		if(count($articles) !=0){
			echo '<h5>';
			echo $articles['article']['TITRE_ARTICLE'];
			echo '</h5>';
			echo '</div>';
			echo '<div class="panel" style="background:none">';
			echo $articles['article']['CONTENU_ARTICLE'];
		}
		else{
			echo '<br><p>Cette rubrique ne contient aucun article assossié.</p>';
			echo '<p><big>'.$this->Html->link('Retour à l acceuil' ,array('controller' => '','action' => "index", 'full_base' => true)).'</big><p>';
		}
		?>
    </div>
