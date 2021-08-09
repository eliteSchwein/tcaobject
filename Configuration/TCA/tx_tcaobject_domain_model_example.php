<?php

use ThomasLudwig\Tcaobject\TCA\DefaultTCA;
use ThomasLudwig\Tcaobject\TCA\Inputs\TCAInputInput;
use ThomasLudwig\Tcaobject\TCA\TCAPaletteBase;
use ThomasLudwig\Tcaobject\TCA\TCASpacer;

$tca = new DefaultTCA('tx_tcaobject_domain_model_example');
$tca->setTitle('LLL:EXT:tcaobject/Resources/Private/Language/locallang_db.xlf:tx_tcaobject_domain_model_example');
$tca->setLabel('string_example');
$tca->setIconFile('EXT:tcaobject/Resources/Public/Icons/tx_tcaobject_domain_model_example.gif');

$stringInput = new TCAInputInput();
$stringInput->setVisible(false);
$stringInput->setName('string_example');
$stringInput->setLabel('LLL:EXT:tcaobject/Resources/Private/Language/locallang_db.xlf:tx_tcaobject_domain_model_example.string_example');

$tca->addInput($stringInput);

$spacer = new TCASpacer();
$spacer->setName('spacer');

$tca->addSpacer($spacer);

$inputPalette = new TCAPaletteBase();
$inputPalette->setName('inputpalette');
$inputPalette->setLabel('Inputs');
$inputPalette->addItem($stringInput->getName());

$tca->addPalette($inputPalette);

return $tca->asArray();
