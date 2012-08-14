<?php
include "include/about-menu.php";

$pageName = 'Factories';
	
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
			<h1><?php echo $pageName?></h1>
			<p>Kobelco operates manufacturing centers in two locations:</p>
			<h5>Kobe Steel Ltd. (KSL) <br /> Takasago, Japan</h5>
			<p> </p>
			<h5>Kobelco Compressors America, Inc. (KCA)<br /> Corona, CA, USA</h5>
			<p> </p>
		</div>
	</div>
</div>
