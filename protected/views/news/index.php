<?php
$this->breadcrumbs=array(
	Yii::t('site', 'News'),
);
?>
<div class="news-content">
	<div class="col-left">
		<div class="callout-image">
			<img width="210" src="<?php echo Yii::app()->request->baseUrl?>/images/news.jpeg" alt="Kobelco News and Events" />
		</div>	
	</div>
	<div class="news-paragraph">
	<h1> <?php echo Yii::t('site', 'News')?></h1>
	<ul id="news-list">
	<?php
	$this->widget('zii.widgets.CListView', array(
		'dataProvider' => $news,
		'itemView' => 'list-row',
		'summaryText' => '',
		/**
		'sortableAttributes' => array(
			'title',
			'created' => 'Time'
		)
		**/
	));
	?>
	</ul>
	</div>
</div>


