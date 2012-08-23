<?php
include "include/services-menu.php";
$page = Page::model()->find(array(
	'condition' => "SKU = 'services' AND language = :language",
	'params' => array(':language' => Yii::app()->language)
));

$pageName = 'Services';
	
$this->pageTitle=Yii::app()->name .' - ' . Yii::t('site', 'Services');
$this->breadcrumbs=array(
	Yii::t('site', 'Services'),
);
?>
<div class="about-content article-content">

	<div class="col-left">
		<?php $this->widget('zii.widgets.CMenu', array('items'=> $servicesMenuItems)); ?>
	</div>
	<div class="col-main">		
		<div class="article-paragraph">
			<h1><?php echo $page->name?></h1>
				<?php echo $page->content?>
			<p> </p>
		</div>
	</div>
</div>
