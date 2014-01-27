<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::t('app','Parliament Information System')); ?></div>
		<?php $this->widget('LangBox'); ?>
	</div><!-- header -->

	<div id="mainmenu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>Yii::t('app','Home'), 'url'=>array('/site/index')),
				array('label'=>Yii::t('app','SQL queries'), 'url'=>array('/Query/index')),
				array('label'=>Yii::t('app','About'), 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>Yii::t('app','Contact'), 'url'=>array('/site/contact')),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>
	</div><!-- mainmenu -->
	<div id="secondmenu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>Yii::t('app','Answered Bies'), 'url'=>array('AnsweredBy/index')),
				array('label'=>Yii::t('app','Belongs'), 'url'=>array('Belongs/index')),
				array('label'=>Yii::t('app','Electeds'), 'url'=>array('Elected/index')),
				array('label'=>Yii::t('app','Governments'), 'url'=>array('Governments/index')),
				array('label'=>Yii::t('app','Interpellations'), 'url'=>array('Interpellations/index')),
				array('label'=>Yii::t('app','Leads'), 'url'=>array('Leads/index')),
				array('label'=>Yii::t('app','Minister Participates Governments'), 'url'=>array('MinisterParticipatesGovernment/index')),
				array('label'=>Yii::t('app','Ministers'), 'url'=>array('Ministers/index')),
				array('label'=>Yii::t('app','Mps'), 'url'=>array('Mps/index')),
				array('label'=>Yii::t('app','Parliament Cycles'), 'url'=>array('ParliamentCycles/index')),
				array('label'=>Yii::t('app','Parliament Sessions'), 'url'=>array('ParliamentSessions/index')),
				array('label'=>Yii::t('app','Participates'), 'url'=>array('Participate/index')),
				array('label'=>Yii::t('app','Parties'), 'url'=>array('Parties/index')),
				array('label'=>Yii::t('app','Party Leaders'), 'url'=>array('PartyLeaders/index')),
				array('label'=>Yii::t('app','Party Participates Governments'), 'url'=>array('PartyParticipatesGovernment/index')),
				array('label'=>Yii::t('app','Persons'), 'url'=>array('Persons/index')),
				array('label'=>Yii::t('app','Persons Occupations'), 'url'=>array('PersonsOccupations/index')),
				array('label'=>Yii::t('app','Portfolioses'), 'url'=>array('Portfolios/index')),
				array('label'=>Yii::t('app','Prime Ministers'), 'url'=>array('PrimeMinisters/index')),
			),
		)); ?>
	</div>
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Created by
		<a href="https://github.com/vagonar">Vaggelis Loutsetis</a>,
		<a href="https://github.com/stavrul">Irini Stavroulaki</a>, and
		<a href="https://github.com/mkats">Michalis Katsarakis</a><br/>
		for the needs of the course <a href="http://www.csd.uoc.gr/~hy360/">HY-360 "Files and Databases"</a>.</br>
		Source code available at <a href="https://github.com/mkats/project_hy360">GitHub</a>.
		
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
