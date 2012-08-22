<ul class="language-switcher">
	<li class="text">
		<div id="selected-language"><?php echo $this->languages[Yii::app()->language]?></div>
		<div id="language-box">
		<?php foreach($this->languages as $code => $name):$active=$code==Yii::app()->language?array('class'=>'active'):null?>
			<?php echo CHtml::link($name, $this->getOwner()->createMultilanguageReturnUrl($code), $active)?>
		<?php endforeach?>
		</div>
	</li>
	<li class="img">
		<a href="#" id="show-language-box">
			<img src="<?php echo Yii::app()->request->baseUrl  ?>/images/world.png" alt="country-map"/>
		</a>
	</li>
</ul>
<script type="text/javascript">
<!--
$(function(){
	$(".language-switcher").hover(function(){
		$("#language-box").show();
	},function(){
		$("#language-box").hide();
	});
});
//-->
</script>


