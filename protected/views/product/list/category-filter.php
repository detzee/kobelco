<?php 


$filters = array(
	array('id' => 'power', 'format' => '%s WH - %s KW', 'range' => array('0,5','5,10','10,99'))
);

$attributeLabels = ProductIndex::model()->attributeLabels();

/**
 * Render filter link from array
 * @param array $filter
 * @return array
 */
function renderFilter($filter) {
	$categoryId = Yii::app()->request->getQuery('id');
	$menu = array();
	foreach($filter['range'] as $range) {
		$_range = explode(",",$range);
		$text = sprintf($filter['format'], $_range[0], $_range[1]);
		$link = array();
		$link[] = 'product/category';
		if($categoryId) {
			$link['id'] = $categoryId;
		}
		$link[$filter['id']] = $range;
		$menu[] = array('label' => $text, 'url' => $link);
	}
	return $menu;
}
?>

<div class="filter_product">
	<div class="title"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/Product-select-section_16.png" /></div>

	<?php foreach($filters as $filter):?>
	<div class="<?php echo $filter['id']?>">	
		<span><?php echo $attributeLabels[$filter['id']]?>:</span>
		<ul class="<?php echo $filter['id']?>">
			<?php $this->widget('zii.widgets.CMenu',array(
				'items'=> renderFilter($filter)
			)); ?>
		</ul>
	</div>
	<?php endforeach?>
</div>
