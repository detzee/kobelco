<?php
include "include/about-menu.php";

$page = Page::model()->find(array(
	'condition' => "SKU = 'kobelco-structure' AND language = :language",
	'params' => array(':language' => Yii::app()->language)
));

$pageName = Yii::t('site', 'Kobelco\'s Structure');
	
$this->pageTitle=Yii::app()->name .' - ' . $pageName;
include "include/about-breadcrumbs.php";
?>
<div class="about-content article-content">

	<div class="col-left">
		<div class="menu">
			<?php $this->widget('zii.widgets.CMenu',array('items'=> $aboutMenuItems)); ?>
		</div>
	</div>
	<div class="col-main">		
		<div class="article-paragraph">
			<h1><?php echo $page->name?></h1>
				<img src="<?php echo Yii::app()->request->baseUrl."/".$page->content?>" />
		</div>
	</div>
</div>
