           <!--Début Menu gauche-->
	<?php if( !isset($rubriqueencours)){}else{ ?>
	<div class="leftMenu">
		 
			<ul class=" panel nav nav-pills nav-stacked gradient leftmenuFontColor">  
				<?php 
					$newR = 1;
					$RubasousRub = false;
					$fermebalise = false;
					foreach($rubriques_filles as $sousrub){
						if($sousrub['rubrique']['ID_RUBRIQUE_PARENT'] == $rubriqueencours['rubrique']['id']){
							$RubasousRub = true;			
							$fermebalise = true;										
						}else{ 
							$RubasousRub = false;
						}
						if ($RubasousRub and $newR == 1){
							$newR++;
							$id_rub = $sousrub['rubrique']['id'];
							echo '<li>'.$this->Html->link( $sousrub['rubrique']['NOM_RUBRIQUE'] ,array('controller' => 'rubriques','action' => "display/$id_rub", 'full_base' => true)).'</li>';
							continue;
						}else if($RubasousRub and $newR != 1){
							$id_rub = $sousrub['rubrique']['id'];
							echo '<li>'.$this->Html->link( $sousrub['rubrique']['NOM_RUBRIQUE'] ,array('controller' => 'rubriques','action' => "display/$id_rub", 'full_base' => true)).'</li>';
							continue;
						}
					}
					if ($newR ==1 and !$fermebalise){
						$id_rub = $rubriqueencours['rubrique']['id'];
						echo '<li>'.$this->Html->link($rubriqueencours['rubrique']['NOM_RUBRIQUE'] ,array('controller' => 'rubriques','action' => "display/$id_rub", 'full_base' => true)).'</li>';
					}
	}
					?>
			</ul>  
		</div>  
 <!--Fin Menu gauche-->
 
