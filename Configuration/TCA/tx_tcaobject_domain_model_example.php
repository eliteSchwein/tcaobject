<?php

use ThomasLudwig\Tcaobject\TCA\DefaultTCA;
use ThomasLudwig\Tcaobject\TCA\Inputs\TCAInputInput;

$tca = new DefaultTCA('tx_tcaobject_domain_model_example');
$tca->setTitle('LLL:EXT:tcaobject/Resources/Private/Language/locallang_db.xlf:tx_tcaobject_domain_model_example');
$tca->setLabel('example');
$tca->setIconFile('EXT:tcaobject/Resources/Public/Icons/tx_tcaobject_domain_model_example.gif');

$stringInput = new TCAInputInput();
$stringInput->setDatasetName('string_example');
$stringInput->setLabel('LLL:EXT:tcaobject/Resources/Private/Language/locallang_db.xlf:tx_tcaobject_domain_model_example.string_example');

$tca->addInput($stringInput);

$array = $tca->asArray();
return $array;
