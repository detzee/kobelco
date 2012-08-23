<?php 
$pageName = "Oil Free";
$page = Page::model()->find(array(
	'condition' => "SKU = 'services-oil-free' AND language = :language",
	'params' => array(':language' => Yii::app()->language)
));
	include "include/services-menu.php";
	include "include/services-breadcrumbs.php";
	$this->pageTitle=Yii::app()->name.' - '.$page->name;
?>
<div class="services-oilfree-content article-content">
	<div class="col-left">
		<?php $this->widget('zii.widgets.CMenu', array('items' => $servicesMenuItems)); ?>
	</div>
	<div class="article-paragraph">
		<h1><?php echo $page->name; ?></h1>
		<div class="col-right">
			<?php echo $page->content ?>
		</div>
	</div>
</div>