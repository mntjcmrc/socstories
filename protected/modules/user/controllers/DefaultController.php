<?php

class DefaultController extends Controller
{
	
	/**
	 * Lists all registered user not banned, if current user is Admin
	 */
	public function actionIndex()
	{
		if(Yii::app()->user->isGuest) {
			//redirect to login
			$this->redirect(Yii::app()->controller->module->loginUrl);
		}
		else {
			if (Yii::app()->getModule('user')->isAdmin()) {
		
		$dataProvider=new CActiveDataProvider('User', array(
			'criteria'=>array(
		        'condition'=>'status>'.User::STATUS_BANNED,
		    ),
			'pagination'=>array(
				'pageSize'=>Yii::app()->controller->module->user_page_size,
			),
		));

		$this->render('/user/index',array(
			'dataProvider'=>$dataProvider,
		));
			}
			else {
				throw new CHttpException(403, "You are not authorized to perform that.");
			}
		}
	}
}
