<?php
include "include/about-menu.php";
	
$this->pageTitle=Yii::app()->name .' - '.Yii::t('site', 'About us');
$this->breadcrumbs=array(
	Yii::t('site', 'About us'),
);
?>
<div class="about-content article-content">

	<div class="col-left">
		<div class="menu">
			<?php $this->widget('zii.widgets.CMenu',array('items'=> $aboutMenuItems)); ?>
		</div>
	</div>
	<div class="col-main">		
		<div class="article-paragraph">
			<h1><?php echo Yii::t('site', 'About us')?></h1>
			<p>Kobelco consists of Kobe Steel, Ltd. (KSL), Kobelco Compressors America, Inc. (KCA), Kobelco Compressors Manufacturing of Indiana (KCMI) and Kobelco Machinery Asia Pte, Ltd. (KMA).</p>

			<p>Kobelco is a global, diversified industrial corporation with annual revenues in excess of $20 billion (USD). Established in 1905, Kobelco is based in Tokyo, Japan, with manufacturing, sales and support locations worldwide. The Company operates in three main business sectors: Steel & Iron, Aluminum & Copper and Machinery. Kobelco's Compressor Division is a major business unit within the Machinery Sector.</p>

			<p>Kobelco began manufacturing compressors in 1915 and remains Japan’s oldest compressor company. Today, the Company operates worldwide and is a leader in compressor technology, engineering and innovation.</p>

			<p>Kobelco provides both process gas and standard air compressors.</p>

			<p>Kobelco is unique in that it provides all three major types of gas compressors: rotary screw, reciprocating and centrifugal. As a result, Kobelco has the ability to engineer the best possible compressor solution for each application. For customers, the results are optimum performance and lowest overall costs of ownership.</p>

			<p>Ask KOBELCO! The Best Solution for Any Gas Compression.</p>

		</div>
	</div>
</div>
