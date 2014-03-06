           <!--Début Menu Admin-->
		   

        <div class="leftMenu">
            <div class="col-xs-4 col-md-2 col-lg-2 ">  
                <ul class=" panel nav nav-pills nav-stacked gradient leftmenuFontColor">  
					<?php
								echo '<li>'.$this->Html->link('Création d\'article' ,array('controller' => '','action' => "admin", 'full_base' => true)).'</li>';
								echo '<li>'.$this->Html->link('Modification d\'article' ,array('controller' => '','action' => "admin", 'full_base' => true)).'</li>';
								echo '<li>'.$this->Html->link('Suppression d\'article' ,array('controller' => '','action' => "admin", 'full_base' => true)).'</li>';
								echo '<li>'.$this->Html->link('Création d\'utilisateur' ,array('controller' => 'utilisateurs','action' => "create", 'full_base' => true)).'</li>';
								echo '<li>'.$this->Html->link('Déconnexion' ,array('controller' => 'utilisateurs','action' => "logout", 'full_base' => true)).'</li>';
					?>
                </ul>  
            </div>
		</div>

    
 <!--Fin Menu gauche-->
 
