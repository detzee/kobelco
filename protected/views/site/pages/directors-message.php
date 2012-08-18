<?php
include "include/about-menu.php";
$pageName = 'Director\'s Message';
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
			<p>As Director of the Kobelco Compressor Division, let me first express our sincere appreciation for the opportunity to serve your compression needs. Thanks to long-term relationships with our clients, cooperation with our suppliers, and the dedication of our employees, Kobelco’s compressor business continues to expand worldwide and our products continue to contribute to the global marketplace.</p>
			<p>The need for efficient, productive, environmentally responsible gas compression is growing rapidly. More than ever, global economies need the support of technologies that help reduce costs and better protect our environment. In that regard, Kobelco is setting the pace.</p>
			<p>Kobelco offers all types of gas compressors - rotary screw, reciprocating and centrifugal - enabling us to provide optimized solutions for unique customer requirements. Our customers are supported by worldwide manufacturing, sales and service facilities, as well as by the accumulated knowledge of an organization that has remained at the forefront of the industry since 1915.</p>
			<p>So, please contact us for any of your gas compression needs. We look forward to learning about your requirements and delivering the best solution for you.</p>
			<p>Sincerely yours,</p>
			<p>Takao Ohama<br /> Director<br /> Compressor Division, Machinery Business<br /> Kobe Steel, Ltd.</p>

		</div>
	</div>
</div>
