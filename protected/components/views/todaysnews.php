<?php if(!count($this->posts)) return;?>
<div class="left">
	<h3 style="text-transform: uppercase;"><?php echo CHtml::link(Yii::t('site', 'News'),array('news/index'))?></h3>
</div>
<div class="right">
	<ul>
		<?php foreach($this->posts as $post):?>
		<li>
			<?php echo CHtml::link($post->title, array('news/view', 'id' => $post->news_id))?>
		</li>
		<?php endforeach?>
		<!-- <li><a href="<?php echo CHtml::normalizeUrl(array('news/index'))?>" class="viewall"><?php echo Yii::t('site', 'View all')?></a></li> -->
	</ul>

</div>
