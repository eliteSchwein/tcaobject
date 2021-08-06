<?php

use ThomasLudwig\Tcaobject\TCA\DefaultTCA;

$tca = new DefaultTCA();
$tca->setTitle('LLL:EXT:tcaobject/Resources/Private/Language/locallang_db.xlf:tx_tcaobject_domain_model_example');
$tca->setLabel('string_example');

$stringInput = new \ThomasLudwig\Tcaobject\TCA\Inputs\TCAInputInput();
$stringInput->setDatasetName('string_example');
$stringInput->setLabel('LLL:EXT:tcaobject/Resources/Private/Language/locallang_db.xlf:tx_tcaobject_domain_model_example.string_example');

$tca->addInput($stringInput);

return $tca->asArray();
