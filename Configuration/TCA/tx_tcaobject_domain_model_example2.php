<?php

use ThomasLudwig\Tcaobject\TCA\DefaultTCA;
use ThomasLudwig\Tcaobject\TCA\Inputs\TCAInputInput;

$tca = new DefaultTCA('tx_tcaobject_domain_model_example2');
$tca->setTitle('Example2');
$tca->setLabel('input2');
$tca->setIconFile('EXT:tcaobject/Resources/Public/Icons/tx_tcaobject_domain_model_example.gif');

$input2 = new TCAInputInput();
$input2->setName('input2');
$input2->setLabel('Input 2');

$tca->addInput($input2);

return $tca->asArray();
