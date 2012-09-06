<?php
$this->breadcrumbs=array(
	'Attributes'=>array('index'),
	$model->attribute_id,
);

$this->menu=array(
	array('label'=>'List Attribute', 'url'=>array('index')),
	array('label'=>'Create Attribute', 'url'=>array('create')),
	array('label'=>'Update Attribute', 'url'=>array('update', 'id'=>$model->attribute_id)),
	array('label'=>'Delete Attribute', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->attribute_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Attribute', 'url'=>array('admin')),
);
?>

<h1>View Attribute #<?php echo $model->attribute_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'attribute_id',
		'attribute_code',
		'attribute_label',
	),
)); ?>
