<?php
$this->pageTitle=Yii::app()->name .' - news';
$this->breadcrumbs=array(
	'news',
);
?>
<h1>News</h1>
	<div class="news-content">
		<ul class="news">
		<?php for($i=1; $i<=6; $i++){ ?>
			<li class="items">
				<img alt="news-thumbs" src="images/news-thumbs.png" />
				<div class="thumbs-content">
					<h4><a href="<?php echo CHtml::normalizeUrl(array('site/page','view'=>'news-detail'))?>" id="thumbs-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></h4>
					<p>3/8/1012<br/>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
					<div class="text"><a href="<?php echo CHtml::normalizeUrl(array('site/page','view'=>'news-detail'))?>">Read more</a></div>
				</div>
			</li>
			<?php };?>
			
		</ul>
	</div>
