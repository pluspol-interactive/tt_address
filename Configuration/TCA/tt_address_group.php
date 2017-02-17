<?php
defined('TYPO3_MODE') or die();

return [
    'ctrl' => [
        'title'                    => 'LLL:EXT:tt_address/locallang_tca.xml:tt_address_group',
        'label'                    => 'title',
        'tstamp'                   => 'tstamp',
        'crdate'                   => 'crdate',
        'cruser_id'                => 'cruser_id',
        'sortby'                   => 'sorting',
        'delete'                   => 'deleted',
        'treeParentField'          => 'parent_group',
        'transOrigPointerField'    => 'l18n_parent',
        'transOrigDiffSourceField' => 'l18n_diffsource',
        'languageField'            => 'sys_language_uid',
        'enablecolumns'            => [
            'disabled' => 'hidden',
            'fe_group' => 'fe_group',
        ],
        'iconfile'                 => 'EXT:tt_address/icon_tt_address_group.gif',
    ],
    'interface' => [
        'showRecordFieldList' => 'hidden,fe_group,title,parent_group,description',
    ],
    'columns' => [
        'hidden' => [
            'l10n_mode' => 'mergeIfNotBlank',
            'exclude'   => 1,
            'label'     => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
            'config'    => [
                'type'    => 'check',
                'default' => '1',
            ],
        ],
        'fe_group' => [
            'exclude' => 1,
            'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.fe_group',
            'config'  => [
                'type'  => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['', 0],
                    ['LLL:EXT:lang/locallang_general.xml:LGL.hide_at_login', -1],
                    ['LLL:EXT:lang/locallang_general.xml:LGL.any_login', -2],
                    ['LLL:EXT:lang/locallang_general.xml:LGL.usergroups', '--div--'],
                ],
                'foreign_table' => 'fe_groups',
            ],
        ],
        'title' => [
            'exclude' => 1,
            'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.title',
            'config'  => [
                'type' => 'input',
                'size' => '30',
                'eval' => 'required',
            ]
        ],
        'parent_group' => [
            'exclude' => 1,
            'label'   => 'LLL:EXT:tt_address/locallang_tca.xml:tt_address_group.parent_group',
            'config'  => [
                'type'          => 'select',
                'form_type'     => 'user',
                'userFunc'      => 'tx_ttaddress_treeview->displayGroupTree',
                'treeView'      => 1,
                'size'          => 1,
                'autoSizeMax'   => 10,
                'minitems'      => 0,
                'maxitems'      => 2,
                'foreign_table' => 'tt_address_group',
            ],
        ],
        'description' => [
            'exclude' => 1,
            'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.description',
            'config'  => [
                'type' => 'text',
                'cols' => '30',
                'rows' => '5',
            ],
        ],
        'sys_language_uid' => [
            'exclude' => 1,
            'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.language',
            'config'  => [
                'type'                => 'select',
                'renderType'          => 'selectSingle',
                'foreign_table'       => 'sys_language',
                'foreign_table_where' => 'ORDER BY sys_language.title',
                'items'               => [
                    ['LLL:EXT:lang/locallang_general.php:LGL.allLanguages', -1],
                    ['LLL:EXT:lang/locallang_general.php:LGL.default_value', 0],
                ],
            ],
        ],
        'l18n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'exclude'     => 1,
            'label'       => 'LLL:EXT:lang/locallang_general.xml:LGL.l18n_parent',
            'config'      => [
                'type'  => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['', 0],
                ],
                'foreign_table'       => 'tt_address_group',
                'foreign_table_where' => 'AND tt_address_group.uid=###REC_FIELD_l18n_parent### AND tt_address_group.sys_language_uid IN (-1,0)',
            ],
        ],
        'l18n_diffsource' => [
            'config'=> [
                'type' => 'passthrough',
            ],
        ],
    ],
    'types' => [
        '0' => [
            'showitem' =>
                'hidden,
                --palette--;;1,
                title,parent_group,description',
        ],
    ],
    'palettes' => [
        '1' => ['showitem' => 'fe_group'],
    ]
];
