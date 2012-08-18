<?php 
$menu = array(
		array('label'=>'Home', 'url'=>array('/site/index')),
		array('label'=>'About Us', 'url'=>array('/site/page', 'view'=>'about')),
		array('label'=>'Products', 'url'=>array('/product/index')),
		array('label'=>'Services', 'url'=>array('/site/page', 'view'=>'services')),
		array('label'=>'News', 'url'=>array('news/index', 'view'=>'news')),
		array('label'=>'Support', 'url'=>array('/site/page', 'view'=>'support')),
		array('label'=>'Career', 'url'=>array('/site/page', 'view'=>'career')),
		array('label'=>'Contact', 'url'=>array('/site/contact')),
		
	);
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
	<!--[if lte IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl?>/js/jquery.min.js"></script>
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body class="<?php echo $this->id?$this->id . '-' . $this->getAction()->id:'site-index' ?>">

<div id="outer_wrapper">
			<div id="main_wrapper">
				<div id="content_wrapper">
						<div id="inner_wrapper">
							<div id="header">
								<div class="top-header">
									<div id="logo">
										<div class="image-holder">
											<a href="<?php echo CHtml::normalizeUrl(array('site/index'))?>"><img alt="Kobelco" src="<?php echo Yii::app()->request->baseUrl; ?>/images/logo.png" /></a>
										</div>
									</div>
									<div id="col-right-header">
										<div class="language">																						
											<?php $this->widget('application.components.LanguageSwitcher')?>
										</div>
										<div id="search">
											<input type="text" name="search" class="input" maxlength="20" placeholder="Search.." />
										</div>
										<div class="clearfix"><!-- --></div>
									</div> <!-- #col-right-header -->
									<div id="main-menu">
										
										<?php $this->widget('zii.widgets.CMenu',array(
											'items'=> $menu
										)); ?>

									</div> <!-- #main-menu -->
								</div> <!-- .top-header -->
							</div> <!-- #header -->
							
	
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>
	
	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		<div class="logo">
			<img alt="<?php echo Yii::app()->name?>" src="<?php echo Yii::app()->request->baseUrl; ?>/images/logo-footer.png" />
		</div>
		<div class="link">
			<?php $this->widget('zii.widgets.CMenu',array(
				'items'=> $menu
			)); ?>
		</div>
	</div><!-- footer -->

</div><!-- page -->
</div></div></div>
</body>
</html>
