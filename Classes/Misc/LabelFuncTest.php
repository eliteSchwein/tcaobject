<?php

namespace ThomasLudwig\Tcaobject\Misc;

use TYPO3\CMS\Backend\Utility\BackendUtility;

class LabelFuncTest
{
    public function title(&$parameters)
    {
        $record = BackendUtility::getRecord($parameters['table'], $parameters['row']['uid']);
        $newTitle = $record['title'];
        $newTitle .= ' (' . substr(strip_tags($record['poem']), 0, 10) . '...)';
        $parameters['title'] = $newTitle;
    }
}
