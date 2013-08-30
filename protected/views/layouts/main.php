<!DOCTYPE html>
<html lang="en-US">
<head>
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>

	<link rel="shortcut icon" href="<?php echo Yii::app()->request->baseUrl; ?>/favicon.ico?" type="image/x-icon" />
</head>

<body>
<div>

	<div>
		<div><?php echo CHtml::encode(Yii::app()->name); ?></div>
	</div>

	<div id="mainmenu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/site/index')),
				array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Contact', 'url'=>array('/site/contact')),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>
	</div>

	<?php echo $content; ?>

	<div>
		Copyright &copy; <?php echo date('Y'); ?> GhostHuntAR ltd.<br>
	</div>

</div>
</body>
</html>