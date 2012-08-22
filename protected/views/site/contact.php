<?php
$this->pageTitle=Yii::app()->name . ' - '.Yii::t('site', 'Contact');
$this->breadcrumbs=array(
	Yii::t('site', 'Contact'),
);
?>
<div class="article-content">
	<div class="col-left">
		<div class="callout-image">
			<img width="210" src="<?php echo Yii::app()->request->baseUrl?>/images/ContactUs.jpg" alt="Contact Us" />
		</div>
	</div>
	<div class="col-main" style="float:right;width:880px">
		<h1><?php echo Yii::t('site', 'Contact us') ?></h1>
		
		<?php if(Yii::app()->user->hasFlash('contact')): ?>
		
		<div class="flash-success">
			<?php echo Yii::app()->user->getFlash('contact'); ?>
		</div>
		
		<?php else: ?>
		
		<p>
		<?php echo Yii::t('site', 'If you have business inquiries or other questions, please fill out the following form to contact us. Thank you.') ?>
		
		</p>
		
		<div class="form">
		
		<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'contact-form',
			'enableClientValidation'=>true,
			'clientOptions'=>array(
				'validateOnSubmit'=>true,
			),
		)); ?>
		
			<p class="note"><?php echo Yii::t('site', 'Fields with'."<span style='color: red;'> *</span>".' are required.') ?></p>
		
			<?php echo $form->errorSummary($model); ?>
		
			<div class="row">
				<?php echo $form->labelEx($model,Yii::t('site', 'Name')."<span style='color: red;'> *</span>"); ?>
				<?php echo $form->textField($model,'name'); ?>
				<?php echo $form->error($model,'name'); ?>
			</div>
		
			<div class="row">
				<?php echo $form->labelEx($model,Yii::t('site', 'Email')."<span style='color: red;'> *</span>"); ?>
				<?php echo $form->textField($model,'email'); ?>
				<?php echo $form->error($model,'email'); ?>
			</div>
		
			<div class="row">
				<?php echo $form->labelEx($model,Yii::t('site', 'Subject')."<span style='color: red;'> *</span>"); ?>
				<?php echo $form->textField($model,'subject',array('size'=>60,'maxlength'=>128)); ?>
				<?php echo $form->error($model,'subject'); ?>
			</div>
		
			<div class="row">
				<?php echo $form->labelEx($model,Yii::t('site', 'Body')."<span style='color: red;'> *</span>"); ?>
				<?php echo $form->textArea($model,'body',array('rows'=>6, 'cols'=>50)); ?>
				<?php echo $form->error($model,'body'); ?>
			</div>
		
			<?php if(CCaptcha::checkRequirements()): ?>
			<div class="row">
				<?php echo $form->labelEx($model,Yii::t('site', 'Verification Code')); ?>
				<div>
				<?php $this->widget('CCaptcha'); ?>
				<?php echo $form->textField($model,'verifyCode'); ?>
				</div>
				<div class="hint">
					<?php echo Yii::t('site', 'Please enter the letters as they are shown in the image above. Letters are not case-sensitive.') ?>
				</div>
				<?php echo $form->error($model,'verifyCode'); ?>
			</div>
			<?php endif; ?>
		
			<div class="row buttons">
				<?php echo CHtml::submitButton('Submit'); ?>
			</div>
		
		<?php $this->endWidget(); ?>
		
		</div><!-- form -->
		
		<?php endif; ?>
	</div>
</div>