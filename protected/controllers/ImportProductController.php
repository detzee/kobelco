<?php

class ImportProductController extends Controller
{
	/**
	 * Display an input file to browse the data
	 * @return ImportProductController
	 */
	public function actionIndex(){
		$this->breadcrumbs=array(
			'Import Products'
		);		
		$form = new ImportProductForm;		
	    if (isset($_POST['ImportProductForm'])) {
	        if ($form->validate()) {
	            $form->csv = CUploadedFile::getInstance($form, 'csv');
	            $file = $form->uploadFolder . DIRECTORY_SEPARATOR . $form->getPrefixFilename() . $form->csv->name;	            
	            $form->csv->saveAs($file);
	            chmod($file, 0777);
	            $log = new ImportFile;
	            $data = array('file_name' => $file,'datetime' => date('Y-m-d H:i:s'));
	            $log->attributes = $data;
	            $log->save();
	            Yii::app()->user->setFlash('success', "Your file has been uploaded!");
	            $this->redirect(array('importProduct/uploaded'));       
	        }
	    }
	    $this->render('upload', array('form'=>$form));
	}
	
	/**
	 * Listing uploaded files. user can select one of them and click next button to continue
	 * @return unknown_type
	 */
	public function actionUploaded() {
		$this->breadcrumbs=array(
			'Uploaded files'
		);
		
		$uploadedFiles = ImportFile::model()->findAll();
		
		$this->render('uploaded', array(
			'uploadedFiles' => $uploadedFiles
		));
	}
	
	public function actionImport() {
		if(!isset($_POST['Import'])) $this->redirect(array('importProduct/uploaded'));		
		$profileId = $_POST['Import']['import_id'];
		$profile = ImportFile::model()->findByPk($profileId);
		
		Yii::import('application.extensions.*');
		require_once 'Varien/File/Csv.php';
		$csv = new Varien_File_Csv;
		
		$data = $csv->getData($profile->file_name);
		$headers = array_shift($data);
		
		$importer = new Product_Importer($headers, $data);
		
		//$importer->importAttributes();
		
		//$importer->createProductIndexTable();
		
		$importer->importData();
		
	}
}