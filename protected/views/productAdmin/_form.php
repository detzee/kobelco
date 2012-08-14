<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'product-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'category_id'); ?>
		<?php echo $form->textField($model,'category_id'); ?>
		<?php echo $form->error($model,'category_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'product_name'); ?>
		<?php echo $form->textField($model,'product_name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'product_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'product_voltage'); ?>
		<?php echo $form->textField($model,'product_voltage',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'product_voltage'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'product_pressure'); ?>
		<?php echo $form->textField($model,'product_pressure',array('size'=>12,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'product_pressure'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'product_discharge_volume'); ?>
		<?php echo $form->textArea($model,'product_discharge_volume',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'product_discharge_volume'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'product_power'); ?>
		<?php echo $form->textField($model,'product_power',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'product_power'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'product_specification'); ?>
		<?php echo $form->textArea($model,'product_specification',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'product_specification'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'product_picture'); ?>
		<?php echo $form->textField($model,'product_picture',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'product_picture'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'product_download'); ?>
		<?php echo $form->textField($model,'product_download',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'product_download'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->