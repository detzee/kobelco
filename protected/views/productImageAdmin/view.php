<?php
$this->breadcrumbs=array(
	'Product Images'=>array('index'),
	$model->image_id,
);

$this->menu=array(
	array('label'=>'List ProductImage', 'url'=>array('index')),
	array('label'=>'Create ProductImage', 'url'=>array('create')),
	array('label'=>'Update ProductImage', 'url'=>array('update', 'id'=>$model->image_id)),
	array('label'=>'Delete ProductImage', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->image_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ProductImage', 'url'=>array('admin')),
);
?>

<h1>View ProductImage #<?php echo $model->image_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'image_id',
		'product_id',
		'image_file',
	),
)); ?>
