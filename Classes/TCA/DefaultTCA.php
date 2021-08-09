<?php

namespace ThomasLudwig\Tcaobject\TCA;

use ThomasLudwig\Tcaobject\TCA\Inputs\TCAInputCheck;
use ThomasLudwig\Tcaobject\TCA\Inputs\TCAInputCustom;
use ThomasLudwig\Tcaobject\TCA\Inputs\TCAInputDateTimeInteger;
use ThomasLudwig\Tcaobject\TCA\Inputs\TCAInputSelect;

class DefaultTCA extends TCA
{
    protected array $inputs = [];
    public function __construct($table)
    {
        parent::__construct();

        $this->setDatabaseTable($table);

        $sysLanguage = new TCAInputSelect();
        $sysLanguage->setVisible(false);
        $sysLanguage->setDatasetName('sys_language_uid');
        $sysLanguage->setLabel('LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language');
        $sysLanguage->setSpecial('languages');
        $sysLanguage->addItem('LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.allLanguages' ,
            -1,
            'flags-multiple');

        $ln10Parent = new TCAInputSelect();
        $ln10Parent->setVisible(false);
        $ln10Parent->setExclude(null);
        $ln10Parent->setDatasetName('l10n_parent');
        $ln10Parent->setDisplayCond('FIELD:sys_language_uid:>:0');
        $ln10Parent->setDefault(0);
        $ln10Parent->setLabel('LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent');
        $ln10Parent->addItem('', 0);
        $ln10Parent->setForeignTable($this->getDatabaseTable());
        $ln10Parent->setForeignTableWhere('AND {#'.$this->getDatabaseTable().'}.{#pid}=###CURRENT_PID### AND {#'.$this->getDatabaseTable().'}.{#sys_language_uid} IN (-1,0)');

        $ln10Diffsource = new TCAInputCustom();
        $ln10Diffsource->setVisible(false);
        $ln10Diffsource->setExclude(null);
        $ln10Diffsource->setDatasetName('l10n_diffsource');
        $ln10Diffsource->setType('passthrough');

        $hidden = new TCAInputCheck();
        $hidden->setVisible(true);
        $hidden->setDatasetName('hidden');
        $hidden->setLabel('LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.visible');
        $hidden->setLabel('LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.visible');
        $hidden->addItem([0 => ''], [1 => ''], ['invertStateDisplay' => true]);

        $starttime = new TCAInputDateTimeInteger();
        $starttime->setVisible(false);
        $starttime->setDatasetName('starttime');
        $starttime->setLabel('LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime');
        $starttime->addBehavior('allowLanguageSynchronization', true);

        $endtime = new TCAInputDateTimeInteger();
        $endtime->setVisible(false);
        $endtime->setDatasetName('endtime');
        $endtime->setLabel('LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime');
        $endtime->addBehavior('upper', mktime(0, 0, 0, 1, 1, 2038));
        $endtime->addBehavior('allowLanguageSynchronization', true);

        $this->addInput($sysLanguage);
        $this->addInput($ln10Parent);
        $this->addInput($ln10Diffsource);
        $this->addInput($hidden);
        $this->addInput($starttime);
        $this->addInput($endtime);

        $this->addEnableColumn('disabled', 'hidden');
        $this->addEnableColumn('starttime', 'starttime');
        $this->addEnableColumn('endtime', 'endtime');
    }
}
