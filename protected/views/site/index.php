<?php $this->pageTitle=Yii::t('site', 'Home')?>
<?php 
$this->widget('application.components.Slider');
?>
<div class="news">
	<?php $this->widget('application.components.TodaysNews')?>
</div>
<div class="list-sp">
	<ul>
	<li class="kobelcoks">
		<div class="col-left">
			<img alt="KOBELCO KS" src="images/kobelco-ks-logo.png" />
			<p>22-75kW Class<br/>Discharge air volume:<br/>4.18-15.0m³/min(0.8-<br/>0.6MPa)</p>
		</div>
		<div class="col-right">
			<img alt="KOBELCO KS" src="images/kobelco-ks-icon.png" />
		</div>
		<div class="text">
			<a href="#" class="viewmore"><?php echo Yii::t('site', 'View more')?></a>	
		</div>
	</li>
	<li class="kobelion-vs-ag-sg">
		<div class="col-left">
			<img alt="KOBELION-VS-AG-SG" src="images/KobelionII.png" />
			<p>22-75kW Class<br/>Discharge air volume:<br/>4.18-15.0m³/min(0.8-<br/>0.6MPa)</p>
		</div>
		<div class="col-right">
			<img alt="KOBELION-VS-AG-SG" src="images/kobelion2-icon.png" />
		</div>
		<div class="text">
			<a href="#" class="viewmore"><?php echo Yii::t('site', 'View more')?></a>	
		</div>
	</li>
	<li class="kobelion-xg">
		<div class="col-left">
			<img alt="KOBELION XG" src="images/kobelion-xg.png" />
			<p>22-75kW Class<br/>Discharge air volume:<br/>4.18-15.0m³/min(0.8-<br/>0.6MPa)</p>
		</div>
		<div class="col-right">
			<img alt="KOBELION XG" src="images/kobelion-xg-icon.png" />
		</div>
		<div class="text">
			<a href="#" class="viewmore"><?php echo Yii::t('site', 'View more')?></a>	
		</div>
	</li>
</ul>
</div>
<div class="paragraph">
	<ul>
		<li class="welcome">
			<h3><?php echo Yii::t('site', 'Welcome to Kobelco')?></h3>
			<p>Adoption of High Efficiency Interior Permanent Magnet Motors (IPM Motor) than the ones of other inverter com-pressors having normal induction motor. Possible to perform much better energy saving effects by using IPM high-speed motor + specifically designed inverter than the ones of other compressors having normal induction motor.</p>
			<div class="text">
				<?php echo CHtml::link(Yii::t('site','View more'), array('site/page', 'view' => 'about'), array('class' => 'viewmore'))?>	
			</div>
		</li>
		<li class="services same">
			<h3><?php echo Yii::t('site', 'Services')?></h3>
			<p>Adoption of High Efficiency Interior Permanent </p>
			<p>Magnet Motors (IPM Motor) than the ones of other</p>
			<p>Possible to perform much better energy saving effects by using IPM high-speed motor + specifically</p>
			<p>Higher efficiency by minimizing energy loss thanks to adoption of built-In overhang direct-coupling construction between screw unit & motor.</p>
			<div class="text">
				<?php echo CHtml::link(Yii::t('site','View more'), array('site/page', 'view' => 'services'), array('class' => 'viewmore'))?>	
			</div>
		</li>
		<li class="support same">
			<h3><?php echo Yii::t('site', 'Support')?></h3>
			<p>Adoption of High Efficiency Interior Permanent </p>
			<p>Magnet Motors (IPM Motor) than the ones of other</p>
			<p>Possible to perform much better energy saving effects by using IPM high-speed motor + specifically</p>
			<p>Higher efficiency by minimizing energy loss thanks to adoption of built-In overhang direct-coupling construction between screw unit & motor.</p>
			<div class="text">
				<?php echo CHtml::link(Yii::t('site','View more'), array('site/page', 'view' => 'support'), array('class' => 'viewmore'))?>	
			</div>
		</li>
	</ul>
</div>
