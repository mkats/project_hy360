<?php
/* @var $this Site */

$this->pageTitle=Yii::app()->name;
?>

<h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

<p>Congratulations! You have successfully created your Yii application.</p>

<p>You may change the content of this page by modifying the following two files:</p>
<ul>
	<li>View file: <code><?php echo __FILE__; ?></code></li>
	<li>Layout file: <code><?php echo $this->getLayoutFile('main'); ?></code></li>
</ul>

<h2>List with all relations of the database</h2>
<ul>
<?php
//echo CHtml::link('Persons', $this->createAbsoluteUrl('persons/index',array('id'=>1)));
echo '<li>'; echo CHtml::link('AnsweredBy', $this->createAbsoluteUrl('AnsweredBy/index')); echo '</li>';
echo '<li>'; echo CHtml::link('Belongs', $this->createAbsoluteUrl('Belongs/index')); echo '</li>';
echo '<li>'; echo CHtml::link('Elected', $this->createAbsoluteUrl('Elected/index')); echo '</li>';
echo '<li>'; echo CHtml::link('Governments', $this->createAbsoluteUrl('Governments/index')); echo '</li>';
echo '<li>'; echo CHtml::link('Interpellations', $this->createAbsoluteUrl('Interpellations/index')); echo '</li>';
echo '<li>'; echo CHtml::link('Leads', $this->createAbsoluteUrl('Leads/index')); echo '</li>';
echo '<li>'; echo CHtml::link('MinisterParticipatesGovernment', $this->createAbsoluteUrl('MinisterParticipatesGovernment/index')); echo '</li>';
echo '<li>'; echo CHtml::link('Ministers', $this->createAbsoluteUrl('Ministers/index')); echo '</li>';
echo '<li>'; echo CHtml::link('Mps', $this->createAbsoluteUrl('Mps/index')); echo '</li>';
echo '<li>'; echo CHtml::link('ParliamentCycles', $this->createAbsoluteUrl('ParliamentCycles/index')); echo '</li>';
echo '<li>'; echo CHtml::link('ParliamentSessions', $this->createAbsoluteUrl('ParliamentSessions/index')); echo '</li>';
echo '<li>'; echo CHtml::link('Participate', $this->createAbsoluteUrl('Participate/index')); echo '</li>';
echo '<li>'; echo CHtml::link('Parties', $this->createAbsoluteUrl('Parties/index')); echo '</li>';
echo '<li>'; echo CHtml::link('PartyLeaders', $this->createAbsoluteUrl('PartyLeaders/index')); echo '</li>';
echo '<li>'; echo CHtml::link('PartyParticipatesGovernment', $this->createAbsoluteUrl('PartyParticipatesGovernment/index')); echo '</li>';
echo '<li>'; echo CHtml::link('Persons', $this->createAbsoluteUrl('Persons/index')); echo '</li>';
echo '<li>'; echo CHtml::link('PersonsOccupations', $this->createAbsoluteUrl('PersonsOccupations/index')); echo '</li>';
echo '<li>'; echo CHtml::link('Portfolios', $this->createAbsoluteUrl('Portfolios/index')); echo '</li>';
echo '<li>'; echo CHtml::link('PrimeMinisters', $this->createAbsoluteUrl('PrimeMinisters/index')); echo '</li>';

?>
</ul>

<p>For more details on how to further develop this application, please read
the <a href="http://www.yiiframework.com/doc/">documentation</a>.
Feel free to ask in the <a href="http://www.yiiframework.com/forum/">forum</a>,
should you have any questions.</p>
