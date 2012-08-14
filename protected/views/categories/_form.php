<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'categories-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'category_name'); ?>
		<?php echo $form->textField($model,'category_name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'category_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'category_image'); ?>
		<?php echo $form->textField($model,'category_image',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'category_image'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'category_alias'); ?>
		<?php echo $form->textField($model,'category_alias',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'category_alias'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->