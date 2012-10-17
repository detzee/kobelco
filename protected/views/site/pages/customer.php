<?php

//include "include/about-menu.php";
$page = Page::model()->find(array(
	'condition' => "SKU = 'about-us' AND language = :language",
	'params' => array(':language' => Yii::app()->language)
));

$this->pageTitle=Yii::app()->name .' - '.Yii::t('site', $page->name);
$this->breadcrumbs=array(
	Yii::t('site', 'Customer'),
);
?>
<div class="about-content article-content">

	<div class="col-left">
		<div class="menu">
			<?php //$this->widget('zii.widgets.CMenu',array('items'=> $aboutMenuItems)); ?>
			<img width="200" src="<?php echo Yii::app()->request->baseUrl . '/images/construct.jpeg'?>"/>
		</div>
	</div>
	<div class="col-main">		
		<div class="article-paragraph">
			<h1><?php echo Yii::t('site', 'Customer')?></h1>
			Trang này đang được xây dựng.
		</div>
	</div>
</div>
