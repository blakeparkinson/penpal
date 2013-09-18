<?php
/* @var $this TblMessageController */
/* @var $model TblMessage */

$this->breadcrumbs=array(
	'Tbl Messages'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TblMessage', 'url'=>array('index')),
	array('label'=>'Create TblMessage', 'url'=>array('create')),
	array('label'=>'View TblMessage', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TblMessage', 'url'=>array('admin')),
);
?>

<h1>Update TblMessage <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>