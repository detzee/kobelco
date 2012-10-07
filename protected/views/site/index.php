<?php 
$pageTitle= "Công ty máy nén khí Kobelco Việt Nam";
?>
<?php $this->pageTitle=Yii::t('site', $pageTitle)?>
<?php 
$this->widget('application.components.Slider');
?>
<div class='clear' style='clear: both;'></div>
<div class="news">
	<?php $this->widget('application.components.TodaysNews')?>
</div>
<div class="list-sp">
	<?php $this->widget('application.components.CategoriesProducts')?>
</div>
<div class="paragraph">
	<ul>
		<li class="welcome">
			<h3><?php echo CHtml::link(Yii::t('site', 'Welcome to Kobelco'),array('site/page', 'view' => 'about'))?></h3>
			<p><?php echo Yii::t('site', 'Kobelco is a group of multidisciplinary industrial manufacturing multinationals with revenues of over 20 billion dollars per year, which was founded in 1905 in Tokyo, Japan, with three main business segments: iron and steel production,aluminum, and mechanical engineering. In the field of mechanical engineering, production and sales department compressor dominant position.')?></p>
			<!--  <div class="text">
				<?php echo CHtml::link(Yii::t('site','View more'), array('site/page', 'view' => 'about'), array('class' => 'viewmore'))?>	
			</div> -->
		</li>
		<li class="services same">
			<h3><?php echo CHtml::link(Yii::t('site','Services'),array('site/page','view' => 'services')) ?></h3>
			<p>Adoption of High Efficiency Interior Permanent </p>
			<p>Magnet Motors (IPM Motor) than the ones of other</p>
			<p>Possible to perform much better energy saving effects by using IPM high-speed motor + specifically</p>
			<p>Higher efficiency by minimizing energy loss thanks to adoption of built-In overhang direct-coupling construction between screw unit & motor.</p>
			<!--  <div class="text">
				<?php echo CHtml::link(Yii::t('site','View more'), array('site/page', 'view' => 'services'), array('class' => 'viewmore'))?>	
			</div> -->
		</li>
		<li class="support same">
			<h3><?php echo CHtml::link(Yii::t('site','Support'),array('site/page','view' => 'support')) ?></h3>
			<p>Adoption of High Efficiency Interior Permanent </p>
			<p>Magnet Motors (IPM Motor) than the ones of other</p>
			<p>Possible to perform much better energy saving effects by using IPM high-speed motor + specifically</p>
			<p>Higher efficiency by minimizing energy loss thanks to adoption of built-In overhang direct-coupling construction between screw unit & motor.</p>
			<!-- <div class="text">
				<?php echo CHtml::link(Yii::t('site','View more'), array('site/page', 'view' => 'support'), array('class' => 'viewmore'))?>	
			</div> -->
		</li>
	</ul>
</div>
