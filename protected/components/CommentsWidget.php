<?php

class CommentsWidget extends CWidget {
	public $storyID;
	public function init() {
		return parent::init();
	}
	public function run() {
		$model = new Comments();
		if(isset($_POST['Comments'])) {
			$model->attributes = $_POST['Comments'];
			$this->storyID = substr(Yii::app()->getRequest()->getUrl(),-1);
			$model->setAttribute('story', $this->storyID);
			$model->setAttribute('author', Yii::app()->user->getId());
			if($model->save())
				$this->controller->redirect(array('view','id'=>$this->storyID));
		}
		$this->renderFile(Yii::getPathOfAlias('application.views.stories'). '/_comments.php',array(
			'model' => $model,
			'storyID' => $this->storyID,
		));
	}
}
?>
