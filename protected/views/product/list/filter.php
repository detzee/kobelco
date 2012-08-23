<?php 
$filters = array(
	array('id' => 'product_power', 'format' => '%s kW - %s kW', 'range' => array('22,75','33,85'))
);

$attributeLabels = Product::model()->attributeLabels();

/**
 * Render filter link from array
 * @param array $filter
 * @return array
 */
function renderFilter($filter) {
	$menu = array();
	foreach($filter['range'] as $range) {
		$_range = explode(",",$range);
		$text = sprintf($filter['format'], $_range[0], $_range[1]);
		$link = array();
		$link[] = 'product/list';
		if($categoryId = Yii::app()->request->getQuery('category')) {
			$link['category'] = $categoryId;
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