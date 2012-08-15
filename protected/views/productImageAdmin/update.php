<?php
$this->breadcrumbs=array(
	'Product Images'=>array('index'),
	$model->image_id=>array('view','id'=>$model->image_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ProductImage', 'url'=>array('index')),
	array('label'=>'Create ProductImage', 'url'=>array('create')),
	array('label'=>'View ProductImage', 'url'=>array('view', 'id'=>$model->image_id)),
	array('label'=>'Manage ProductImage', 'url'=>array('admin')),
);
?>

<h1>Update ProductImage <?php echo $model->image_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>