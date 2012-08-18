<li>
	<span>[<?php echo date("d-m-Y", strtotime($data->created))?>] <?php echo CHtml::link($data->title, array('news/view', 'id' => $data->news_id))?></span>
</li>