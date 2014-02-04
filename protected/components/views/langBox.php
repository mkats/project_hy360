<?php echo CHtml::form(); ?>
    <div id="langdrop">
        <?php echo CHtml::dropDownList('_lang', $currentLang, array(
            'en_us' => 'English', 'el-GR' => 'Ελληνικά'), array('submit' => '')); ?>
    </div>
<?php echo CHtml::endForm(); ?>