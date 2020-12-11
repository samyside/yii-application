<?php 
use yii\helpers\Html;
?>

<p>
	Welcome, <? Html::encode($model->name) ?>
	<li>
		<label>Your email:</label> <? Html::encode($model->email)?>
	</li>
</p>
