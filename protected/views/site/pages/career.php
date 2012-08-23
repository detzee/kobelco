<?php
$page = Page::model()->find(array(
	'condition' => "SKU = 'career' AND language = :language",
	'params' => array(':language' => Yii::app()->language)
));
$careerMenuItems = array(
	array('label' => 'Project Engineer', 'url' => '#project-engineer'),
	array('label' => 'Procurement Manager', 'url' => '#procurement-manager'),
	array('label' => 'Sales Application Engineer', 'url' => '#sales-application-engineer'),
);
	
$this->pageTitle=Yii::app()->name .' - ' . Yii::t('site', 'Career');
$this->breadcrumbs=array(
	Yii::t('site', 'Career'),
);
?>
<div class="about-content article-content">

	<div class="col-left">
		<div class="menu">
			<?php $this->widget('zii.widgets.CMenu',array('items'=> $careerMenuItems)); ?>
		</div>
	</div>
	<div class="col-main">		
		<div class="article-paragraph">
			<h1><?php echo Yii::t('site', $page->name)?></h1>
				<?php echo $page->content; ?>
			<p> </p>
		</div>
	</div>
</div>
