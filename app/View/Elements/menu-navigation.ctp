           <!--Début Menu gauche-->
	<div class="row"> 
        <div class="Horiz">
            
                <ul class="panel nav nav-tabs  gradient leftmenuFontColor ">  
                    <?php 
                    			$iduser = 0;

								echo '<li>'.$this->Html->link( 'Batiments' ,array('controller' => 'Batiments_user','action' => "showBat/$iduser", 'full_base' => true)).'</li>';
					?>
                </ul>  
            </div>
        </div>
    
 <!--Fin Menu gauche-->
 
