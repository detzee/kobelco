<?php
$pageName = 'Support';

$page = Page::model()->find(array(
	'condition' => "SKU = 'support' AND language = :language",
	'params' => array(':language' => Yii::app()->language)
));
	
$this->pageTitle=Yii::app()->name .' - ' . Yii::t('site', 'Support');
$this->breadcrumbs=array(
	Yii::t('site', 'Support'),
);
?>
<div class="about-content article-content">

	<div class="col-left">
		<div class="callout-image">
			<img width="210" src="<?php echo Yii::app()->request->baseUrl?>/images/support.jpeg" alt="Kobelco Support" />
		</div>
	</div>
	<div class="col-main">		
		<div class="article-paragraph">
			<h1><?php echo $page->name?></h1>
				<?php echo $page->content?>
		</div>
	</div>
</div>
