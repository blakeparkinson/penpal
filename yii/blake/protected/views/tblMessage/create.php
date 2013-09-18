<?php
/* @var $this TblMessageController */
/* @var $model TblMessage */

$this->breadcrumbs=array(
	'Tbl Messages'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TblMessage', 'url'=>array('index')),
	array('label'=>'Manage TblMessage', 'url'=>array('admin')),
);
?>

<h1>Create TblMessage</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>