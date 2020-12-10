<?php 
namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\EntryForm;

/**
 * 
 */
class SiteController extends Controller
{
	public function actionEntry()
	{
		$model = new EntryForm();

		if ($model->load(Yii::$app->request->post()) && $model->validate()) {
			// data in $model has been pass

			// here we can do something in $model
			return $this->render('entry-confirm', ['model' => $model]);
		} else {
			// display this page when incorrect input data
			return $this->render('entry', ['model' => $model]);
		}
	}
}
 ?>