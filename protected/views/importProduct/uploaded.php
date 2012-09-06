<h1>Uploaded files</h1>
<p class="description">
	Select the data file that you want to import.
</p>
<div class="form">
<?php echo CHtml::form(array('importProduct/import'), 'post', array('name'=>'pickup')); ?>
 
<?php foreach($uploadedFiles as $file):?>
	<?php $fileName = array_pop(explode(DIRECTORY_SEPARATOR, $file->file_name))?>
	<?php echo CHtml::radioButton('Import[import_id]', false, array('value' => $file->file_id, 'id' => 'file_' . $file->file_id))?>
	<?php echo CHtml::label($fileName, 'file_' . $file->file_id)?>
<?php endforeach?>
<?php echo CHtml::submitButton('Next'); ?>
 
<?php echo CHtml::endForm(); ?>
 
</div>