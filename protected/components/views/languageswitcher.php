<?php 
if(!count($this->languages)) return;
?>
<ul class="language-switcher">
	<li class="text">
		<?php foreach($this->languages as $code => $name):?>
			<?php echo CHtml::link($name, $this->getOwner()->createMultilanguageReturnUrl($code))?>
		<?php endforeach?>
	</li>
	<li class="img">
		<img src="<?php echo Yii::app()->request->baseUrl  ?>/images/world.png" alt="country-map"  />
	</li>
</ul>


