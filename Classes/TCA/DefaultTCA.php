<?php

namespace ThomasLudwig\Tcaobject\TCA;

use ThomasLudwig\Tcaobject\TCA\Inputs\TCAInputCheck;
use ThomasLudwig\Tcaobject\TCA\Inputs\TCAInputDateTimeInteger;

class DefaultTCA extends TCA
{
    protected array $inputs = [];
    public function __construct()
    {
        parent::__construct();
        $hidden = new TCAInputCheck();
        $hidden->setDatasetName('hidden');
        $hidden->setLabel('LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.visible');
        $hidden->addItem(0, '');
        $hidden->addItem(1, '');
        $hidden->addItem('invertStateDisplay', true);

        $starttime = new TCAInputDateTimeInteger();
        $starttime->setDatasetName('starttime');
        $starttime->setLabel('LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime');
        $starttime->addBehavior('allowLanguageSynchronization', true);

        $endtime = new TCAInputDateTimeInteger();
        $endtime->setDatasetName('endtime');
        $endtime->setLabel('LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime');
        $endtime->addBehavior('upper', mktime(0, 0, 0, 1, 1, 2038));
        $endtime->addBehavior('allowLanguageSynchronization', true);

        $this->addInput($hidden);
        $this->addInput($starttime);
        $this->addInput($endtime);

        $this->addEnableColumn('hidden');
        $this->addEnableColumn('starttime');
        $this->addEnableColumn('endtime');
    }
}
