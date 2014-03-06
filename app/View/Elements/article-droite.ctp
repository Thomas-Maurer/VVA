  <div class="panel"style="background:none">
		<h5>Articles précédents</h5>
    </div>
    <div class="panel" style="background:none" >
		<table>
		<?php foreach($lastarticles as $article){
			echo '<tr><td style= "vertical-align:text-top">';
			$idarticle =  $article['article']['id'];
			echo '<small><span class="glyphicon glyphicon-chevron-right"></span> </small>';
			echo '</td><td>';
			echo $this->Html->link($article['article']['TITRE_ARTICLE'] ,array('controller' => 'articles','action' => "display/$idarticle", 'full_base' => true));
			echo'</br>';
			echo '</td></tr>';
			};
			?>
		</table>
	</div>
