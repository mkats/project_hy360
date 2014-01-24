<?php
/* @var $this Site */

$this->pageTitle=Yii::app()->name;
?>

<h1><?php echo Yii::t('app','Welcome to the').' <i>'.CHtml::encode(Yii::t('app','Parliament Information System')).'</i>'; ?></i></h1>

<?php
	// Current parliament_cycle
	$criteria = new CDbCriteria;
	$criteria->order= "start_timestamp DESC";
	$criteria->limit= 1;
	$currParliamentCycles = ParliamentCycles::model()->findAll($criteria);
	$currParliamentCycle = $currParliamentCycles[0];
	
	// Current gevernement
	$currGovernment= $currParliamentCycle->governments[0];
	
	// Last parliament session
	$parliamentSessions = $currParliamentCycle->parliamentSessions;
	$lastParliamentSession= $parliamentSessions[0];
	foreach ($parliamentSessions as $parliamentSession) {
		if ($parliamentSession->timestamp > $lastParliamentSession) {
			$lastParliamentSession= $parliamentSession;
		}
	}
	?>

<h2><?php echo Yii::t('app','Current overview') ?></h2>
<p><strong><?php echo Yii::t('app','Parliament cycle') ?></strong>: <?php echo $currParliamentCycle->title ?></p>
<p><strong><?php echo Yii::t('app','Government') ?></strong>:<ul>
		<li><?php echo Yii::t('app','Prime Minister') ?>: <?php echo $currGovernment->primeMinister->person->name ?></li><br/>
		<li><?php echo Yii::t('app','Ministers') ?><ul>
		<?php
		//print_r(new CDbExpression("NOW()"));
		//echo date("Y-m-d H:i:s");
		foreach($currGovernment->ministerParticipatesGovernments as $mpg) {
			//array_push($currMinisters, $mpg->minister);
			if($mpg->start_timestamp <= date("Y-m-d H:i:s") &&  (date("Y-m-d H:i:s") <= $mpg->end_timestamp || $mpg->end_timestamp == "0000-00-00 00:00:00")) {
				echo '<li>'.$mpg->minister->person->name.' ('.$mpg->minister->portfolioses[0]->subject.')</li>';
			}
		}
		?>
		</ul></li></ul></p>

<p><strong><?php echo Yii::t('app','Parties in parliament') ?></strong>:<ul>		
		<?php
		foreach($currParliamentCycle->participates as $partyParticipation) {
			if($partyParticipation->electoral_percentage > 3) {
				echo '<li>'.$partyParticipation->party->name.' ('.$partyParticipation->electoral_percentage.' %)</li>';
			}
		}
		?>		
	</ul></p>
	
	<p><strong><?php echo Yii::t('app','Last parliament session') ?></strong>: <?php echo explode(' ', $lastParliamentSession->timestamp)[0];  ?>


<!--<p>Congratulations! You have successfully created your Yii application.</p>

<p>You may change the content of this page by modifying the following two files:</p>
<ul>
	<li>View file: <code><?php echo __FILE__; ?></code></li>
	<li>Layout file: <code><?php echo $this->getLayoutFile('main'); ?></code></li>
</ul>-->

<!--
<h2>List with all relations of the database</h2>
<ul>
<?php
//echo CHtml::link('Persons', $this->createAbsoluteUrl('persons/index',array('id'=>1)));
echo '<li>'; echo CHtml::link(Yii::t('app','Answered Bies'), $this->createAbsoluteUrl('AnsweredBy/index')); echo '</li>';
echo '<li>'; echo CHtml::link(Yii::t('app','Belongs'), $this->createAbsoluteUrl('Belongs/index')); echo '</li>';
echo '<li>'; echo CHtml::link(Yii::t('app','Electeds'), $this->createAbsoluteUrl('Elected/index')); echo '</li>';
echo '<li>'; echo CHtml::link(Yii::t('app','Governments'), $this->createAbsoluteUrl('Governments/index')); echo '</li>';
echo '<li>'; echo CHtml::link(Yii::t('app','Interpellations'), $this->createAbsoluteUrl('Interpellations/index')); echo '</li>';
echo '<li>'; echo CHtml::link(Yii::t('app','Leads'), $this->createAbsoluteUrl('Leads/index')); echo '</li>';
echo '<li>'; echo CHtml::link(Yii::t('app','Minister Participates Governments'), $this->createAbsoluteUrl('MinisterParticipatesGovernment/index')); echo '</li>';
echo '<li>'; echo CHtml::link(Yii::t('app','Ministers'), $this->createAbsoluteUrl('Ministers/index')); echo '</li>';
echo '<li>'; echo CHtml::link(Yii::t('app','Mps'), $this->createAbsoluteUrl('Mps/index')); echo '</li>';
echo '<li>'; echo CHtml::link(Yii::t('app','Parliament Cycles'), $this->createAbsoluteUrl('ParliamentCycles/index')); echo '</li>';
echo '<li>'; echo CHtml::link(Yii::t('app','Parliament Sessions'), $this->createAbsoluteUrl('ParliamentSessions/index')); echo '</li>';
echo '<li>'; echo CHtml::link(Yii::t('app','Participates'), $this->createAbsoluteUrl('Participate/index')); echo '</li>';
echo '<li>'; echo CHtml::link(Yii::t('app','Parties'), $this->createAbsoluteUrl('Parties/index')); echo '</li>';
echo '<li>'; echo CHtml::link(Yii::t('app','Party Leaders'), $this->createAbsoluteUrl('PartyLeaders/index')); echo '</li>';
echo '<li>'; echo CHtml::link(Yii::t('app','Party Participates Governments'), $this->createAbsoluteUrl('PartyParticipatesGovernment/index')); echo '</li>';
echo '<li>'; echo CHtml::link(Yii::t('app','Persons'), $this->createAbsoluteUrl('Persons/index')); echo '</li>';
echo '<li>'; echo CHtml::link(Yii::t('app','Persons Occupations'), $this->createAbsoluteUrl('PersonsOccupations/index')); echo '</li>';
echo '<li>'; echo CHtml::link(Yii::t('app','Portfolioses'), $this->createAbsoluteUrl('Portfolios/index')); echo '</li>';
echo '<li>'; echo CHtml::link(Yii::t('app','Prime Ministers'), $this->createAbsoluteUrl('PrimeMinisters/index')); echo '</li>';
?>
</ul>
-->

<!--<p>For more details on how to further develop this application, please read
the <a href="http://www.yiiframework.com/doc/">documentation</a>.
Feel free to ask in the <a href="http://www.yiiframework.com/forum/">forum</a>,
should you have any questions.</p>-->
