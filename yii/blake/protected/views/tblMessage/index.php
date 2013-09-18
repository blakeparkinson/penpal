<?php
/* @var $this TblMessageController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tbl Messages',
);

$this->menu=array(
	array('label'=>'Create TblMessage', 'url'=>array('create')),
	array('label'=>'Manage TblMessage', 'url'=>array('admin')),
);
?>

<h1>Tbl Messages</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
