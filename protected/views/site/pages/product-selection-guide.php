<?php 
$pageName = "Product Selection Guide";
$page = Page::model()->find(array(
	'condition' => "SKU = 'product-selection-guide' AND language = :language",
	'params' => array(':language' => Yii::app()->language)
));
	include "include/support-menu.php";
	include "include/support-breadcrumbs.php";
	$this->pageTitle=Yii::app()->name.' - '.$page->name;
?>
<div class="product-selection-guide-content article-content">

	<div class="col-left">

	
			<?php $this->widget('zii.widgets.CMenu', array('items'=> $supportMenuItems)) ?>

	</div>
	<div class="col-main">	
	<h1><?php echo $page->name?></h1>	
		<div class="article-paragraph">
			
				<?php echo $page->content?>
		</div>
	</div>
</div>