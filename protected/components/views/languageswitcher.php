<?php 
if(!count($this->languages)) return;
?>
<ul class="language-switcher">
	<?php foreach($this->languages as $code => $name):?>
		<?php echo CHtml::link($name, $this->getOwner()->createMultilanguageReturnUrl($code))?>
	<?php endforeach?>
</ul>


