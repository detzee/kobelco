<?php if(!count($this->posts)) return;?>
<div class="related-news-container">
	<ul id="related-news">		
		<?php foreach($this->posts as $post):?>
		<li>
			<?php echo CHtml::link($post->title, array('news/view', 'id' => $post->news_id))?>
		</li>
		<?php endforeach?>		
	</ul>
</div>
