<?php

class NewsController extends Controller
{
	
	protected $categories = array();
	
	public function actionList()
	{
		$this->render('list');
	}

	public function actionIndex()
	{		
		$news = new CActiveDataProvider('News');
		$this->render('index', array('news' => $news));
	}
	
	public function actionView() 
	{
		$newsId = Yii::app()->request->getQuery('id');
		
		if(!$newsId) {
			$this->redirect(array('news/index'));
			exit;
		}

		$news = News::model()->findByPk($newsId);
		
		if(!is_object($news)) {
			$this->redirect(array('news/index'));
			return;
		}
		
		$this->breadcrumbs = array(
			'News' => array('news/index'),
			$news->title
		);
		
		$this->pageTitle = $news->title;
		
		$this->render('view', array(
			'news' => $news
		));
	}

	// -----------------------------------------------------------
	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}