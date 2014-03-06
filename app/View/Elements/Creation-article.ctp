<?php echo $this->Html->script('../tinymce/tinymce.min.js');?>

<script type="text/javascript">
tinymce.init({
	language : 'fr_FR',
	plugins: ["advlist autolink lists link image charmap print preview anchor searchreplace visualblocks code fullscreen responsivefilemanager"],
	toolbar: "undo redo | styleselect | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link responsivefilemanager",
    selector: "textarea",
	image_advtab: true ,
	external_filemanager_path:"filemanager/",
    filemanager_title:"Gestionnaire d'upload" ,
    


 });
</script>

<div class="col-md-offset-1 col-xs-9 col-md-8 col-lg-9  panel Article">
        		<div class="panel"style="background:none">
                	<h5> Création d'articles </h5>
                </div>
                <div class="panel" style="background:none">
                	<p>
<?php echo $this->Form->create('article',array('action' => 'add')); ?>
<?php
echo $this->Form->input('article.TITRE_ARTICLE', array('type' => 'txt','label' => 'Titre de l\'article:  ','class'=>''));
?>

 <?php echo $this->Form->input('article.DATECREATION_ARTICLE', array( 'type' => 'hidden', 'label' => 'Date de création', 'value' => strftime("%Y-%m-%d %H:%M:%S")));?>

<?php
echo "<b>Visible: </b>";
echo $this->Form->input('article.VISIBLE_ARTICLE', array(
     'div' => false,
     'label' => true,
     'type' => 'radio',
	  'legend' => false,
     'options' => array(1 => 'Oui    ', 0 => 'Non')
));
  ?>

<?php 

$listeRubriquesParents = array();
foreach($rubriques_parents as $rub){
	$listeRubriquesParents[$rub['rubrique']['id']] =  $rub['rubrique']['NOM_RUBRIQUE'];
}
$listeRubriquesParentsFilles = array();
foreach($rubriques_parents as $rub){

	$listeRubriquesParents[$rub['rubrique']['id']] =  $rub['rubrique']['NOM_RUBRIQUE'];
}
$listeRubriquesFilles = array();
foreach($rubriques_filles as $rub){
	$listeRubriquesFilles[$rub['rubrique']['id']] = $rub['rubrique']['NOM_RUBRIQUE'];}


	
echo $this->Form->input('contient.ID_RUBRIQUE', array('label' => 'Rubrique:  ','options' => $listeRubriquesParents)); ?>

<?php echo $this->Form->input('contient.Sousrubrique', array('label' => 'Sous-rubrique:  ','id'=>'sousrubriques','options' => $listeRubriquesFilles)); ?>



 <?php echo $this->Form->textarea('article.CONTENU_ARTICLE');?>
<?php     $this->Js->get('#contientIDRUBRIQUE')->event('change',
        $this->Js->request(
            array('controller' => 'rubriques', 'action' => 'ajax_rubriques'),
                array(
                    'update' => '#sousrubriques',
                    'dataExpression' => true,
                    'type' => 'json',
                    'data' => $this->Js->serializeForm(array('isForm' => false, 'inline' => true)),
            )
        )
    ); echo $this->Js->writeBuffer();?>
<?php echo $this->Form->end(array('class' => 'btn btn-default', 'label' => 'Envoyer')); ?>




</div>
</div>

			
