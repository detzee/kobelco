<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'attribute-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'attribute_code'); ?>
		<?php echo $form->textField($model,'attribute_code',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'attribute_code'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'attribute_label'); ?>
		<?php echo $form->textField($model,'attribute_label',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'attribute_label'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->