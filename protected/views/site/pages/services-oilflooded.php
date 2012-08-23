<?php 

	$page = Page::model()->find(array(
	'condition' => "SKU = 'services-oil-flooded' AND language = :language",
	'params' => array(':language' => Yii::app()->language)
));
	
	$pageName = "Oil Flooded";
	include "include/services-breadcrumbs.php";
	include "include/services-menu.php";
	$this->pageTitle=Yii::app()->name .' - ' . $page->name;
?>
<div class="services-oilflooded-content article-content">
	<div class="col-left">
		<?php $this->widget('zii.widgets.CMenu', array('items'=> $servicesMenuItems)); ?>
	</div>
	<div class="article-paragraph">
		<h1><?php echo Yii::t('site', $page->name); ?></h1>
		<div class="col-right">
			<?php echo $page->content; ?>
		</div>
	</div>
</div>