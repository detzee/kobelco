<h1>Import Products for Kobelco</h1>
<p class="description">
	Browse the CSV file
</p>
<div class="form">
<?php echo CHtml::form('', 'post', array('enctype'=>'multipart/form-data','name'=>'importData')); ?>
 
<?php echo CHtml::errorSummary($form); ?>
 
<div class="simple">
<?php echo CHtml::activeLabel($form,'Csv File'); ?>
<?php echo CHtml::activeFileField($form, 'csv'); ?>
<br/>
<?php echo CHtml::submitButton('Upload'); ?>
</div>
 
<?php echo CHtml::endForm(); ?>
 
</div>