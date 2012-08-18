<?php 
if(!count($this->images)) return;
Yii::app()->getClientScript()->registerCssFile(Yii::app()->request->baseUrl . '/css/slider/themes/default/default.css');
Yii::app()->getClientScript()->registerCssFile(Yii::app()->request->baseUrl . '/css/slider/nivo-slider.css');
Yii::app()->getClientScript()->registerScriptFile(Yii::app()->request->baseUrl . '/js/jquery.nivo.slider.js');
?>
<div class="slider-wrapper theme-default">
	<div id="slider" class="nivoSlider">
		<?php foreach($this->images as $image):?>
		<img 
			src="<?php echo Yii::app()->request->baseUrl . $image['path']?>"
			data-thumb="<?php echo Yii::app()->request->baseUrl . $image['path']?>"
			alt="<?php echo $image['caption']?>" 
		/> 
		<?php endforeach?>	
	</div> <!-- #slider -->
</div>

<script type="text/javascript">
    $(window).load(function() {      
        $('#slider').nivoSlider();
    });
</script>

