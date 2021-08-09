<?php

use ThomasLudwig\Tcaobject\TCA\DefaultTCA;

$tca = new DefaultTCA('tx_tcaobject_domain_model_example');
$tca->setTitle('LLL:EXT:tcaobject/Resources/Private/Language/locallang_db.xlf:tx_tcaobject_domain_model_example');
$tca->setLabel('string_example');
$tca->setIconFile('EXT:tcaobject/Resources/Public/Icons/tx_tcaobject_domain_model_example.gif');

$stringInput = new \ThomasLudwig\Tcaobject\TCA\Inputs\TCAInputInput();
$stringInput->setName('string_example');
$stringInput->setLabel('LLL:EXT:tcaobject/Resources/Private/Language/locallang_db.xlf:tx_tcaobject_domain_model_example.string_example');

$tca->addInput($stringInput);

return $tca->asArray();
