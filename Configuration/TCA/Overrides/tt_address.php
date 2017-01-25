<?php
defined('TYPO3_MODE') or die();

// start splitting name into first and last name
$extConf = unserialize($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['tt_address']);

// original values
$showitemOrig            = $GLOBALS['TCA']['tt_address']['types'][1]['showitem'];
$showRecordFieldListOrig = $GLOBALS['TCA']['tt_address']['interface']['showRecordFieldList'];

// shows both, the old and the new fields while converting to the new fields
$showItemReplace = ' name, first_name, middle_name, last_name;;2;;,';
$showRecordFieldListReplace = 'name,first_name,middle_name,last_name,';


if ($extConf['disableCombinedNameField']) {
    // shows only the new fields
    $showItemReplace            = ' first_name, middle_name;;;;, last_name;;2;;,';
    $showRecordFieldListReplace = 'first_name,middle_name,last_name,';

    $GLOBALS['TCA']['tt_address']['ctrl']['label']           = 'last_name';
    $GLOBALS['TCA']['tt_address']['ctrl']['label_alt']       = 'first_name';
    $GLOBALS['TCA']['tt_address']['ctrl']['label_alt_force'] = 1;
    $GLOBALS['TCA']['tt_address']['ctrl']['default_sortby']  = 'ORDER BY last_name, first_name, middle_name';
}

$showitemNew = str_replace(
    ' name;;2,',
    $showItemReplace,
    $showitemOrig
);
$showRecordFieldListNew = str_replace(
    'name,',
    $showRecordFieldListReplace,
    $showRecordFieldListOrig
);

$GLOBALS['TCA']['tt_address']['types'][1]['showitem'] = $showitemNew;
$GLOBALS['TCA']['tt_address']['interface']['showRecordFieldList'] = $showRecordFieldListNew;

// end splitting name
