<div id="my-slideshow">
	<ul class="bjqs">
		<?php foreach($this->images as $image):?>
		<li><img src="<?php echo Yii::app()->request->baseUrl . $image['path']?>" /></li>
		<?php endforeach?>
	</ul>
</div>

<script type="text/javascript">
    $(window).load(function() {      
    	$('#my-slideshow').bjqs({
    	'width' : 999,
    	'height' : 373,
    	'showMarkers' : true,    	
    	'centerMarkers' : false,
    	'animation' : 'slide'
    	});
    });
</script>

