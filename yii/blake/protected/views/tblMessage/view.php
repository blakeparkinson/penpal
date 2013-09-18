<?php
/* @var $this TblMessageController */
/* @var $model TblMessage */

$this->breadcrumbs=array(
	'Tbl Messages'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List TblMessage', 'url'=>array('index')),
	array('label'=>'Create TblMessage', 'url'=>array('create')),
	array('label'=>'Update TblMessage', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete TblMessage', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TblMessage', 'url'=>array('admin')),
);
?>

<h1>View TblMessage #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'context',
	),
)); ?>
