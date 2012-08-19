<div class="col-left">
	<h3 class="news-title"><?php echo Yii::t('site', 'Lastest news')?></h3>
	<?php $this->widget('application.components.RelatedNews')?>
</div>
<div class="col-main article-holder col-right">
	<h3 class="title"><?php echo Yii::t('site', 'News')?></h3>
	<div class="article-body">
		<?php echo $news->content?>
	</div>
</div>