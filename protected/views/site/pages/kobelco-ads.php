<?php
include "include/about-menu.php";

$page = Page::model()->find(array(
	'condition' => "SKU = 'kobelco-ads' AND language = :language",
	'params' => array(':language' => Yii::app()->language)
));

$pageName = 'Kobelco Ads';
	
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
				<?php echo $page->content?>
		</div>
	</div>
</div>
