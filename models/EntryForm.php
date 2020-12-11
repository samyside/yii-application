<?php 
namespace app\models;

use yii\base\Model;

/**
 * Enter custom user data
 */
class EntryForm extends Model
{
	public $name;
	public $email;

	public function rules()
	{
		return [
			[['name', 'email'], 'required'],
			['email', 'email'],
		];
	}
}
?>
