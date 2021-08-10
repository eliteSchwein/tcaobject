<?php

namespace ThomasLudwig\Tcaobject\TCA;

use ThomasLudwig\Tcaobject\TCA\Inputs\TCAInputCheck;
use ThomasLudwig\Tcaobject\TCA\Inputs\TCAInputCustom;
use ThomasLudwig\Tcaobject\TCA\Inputs\TCAInputDateTimeInteger;
use ThomasLudwig\Tcaobject\TCA\Inputs\TCAInputSelect;
use TYPO3\CMS\Backend\Utility\BackendUtility;

/**
 *
 */
class DefaultTCA extends TCA
{
    /**
     * @var array
     */
    protected array $inputs = [];

    /**
     * @param null $table
     */
    public function __construct($table = null)
    {
        parent::__construct();

        if($table === null) {
            return;
        }

        $this->setDatabaseTable($table);

        $sysLanguage = new TCAInputSelect();
        $sysLanguage->setVisible(false);
        $sysLanguage->setName('sys_language_uid');
        $sysLanguage->setLabel('LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language');
        $sysLanguage->setSpecial('languages');
        $sysLanguage->addItem('LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.allLanguages' ,
            -1,
            'flags-multiple');

        $ln10Parent = new TCAInputSelect();
        $ln10Parent->setVisible(null);
        $ln10Parent->setExclude(false);
        $ln10Parent->setName('l10n_parent');
        $ln10Parent->setDisplayCond('FIELD:sys_language_uid:>:0');
        $ln10Parent->setDefault(0);
        $ln10Parent->setLabel('LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent');
        $ln10Parent->addItem('', 0);
        $ln10Parent->setForeignTable($this->getDatabaseTable());
        $ln10Parent->setForeignTableWhere('AND {#'.$this->getDatabaseTable().'}.{#pid}=###CURRENT_PID### AND {#'.$this->getDatabaseTable().'}.{#sys_language_uid} IN (-1,0)');

        $ln10Diffsource = new TCAInputCustom();
        $ln10Diffsource->setVisible(null);
        $ln10Diffsource->setExclude(false);
        $ln10Diffsource->setName('l10n_diffsource');
        $ln10Diffsource->setType('passthrough');

        $hidden = new TCAInputCheck();
        $hidden->setVisible(true);
        $hidden->setName('hidden');
        $hidden->setLabel('LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.visible');
        $hidden->setLabel('LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.visible');
        $hidden->addItem([0 => ''], [1 => ''], ['invertStateDisplay' => true]);

        $starttime = new TCAInputDateTimeInteger();
        $starttime->setVisible(false);
        $starttime->setName('starttime');
        $starttime->setLabel('LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime');
        $starttime->addBehavior('allowLanguageSynchronization', true);

        $endtime = new TCAInputDateTimeInteger();
        $endtime->setVisible(false);
        $endtime->setName('endtime');
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
