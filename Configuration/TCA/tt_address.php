<?php
defined('TYPO3_MODE') or die();

$extConf = unserialize($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['tt_address']);

$nameFileds = 'first_name, middle_name, last_name';
$label = 'last_name';
$labelAlt = 'first_name';
$labelAltForce = true;
$defaultOrderBy = 'last_name, first_name, middle_name';

if (!$extConf['disableCombinedNameField']) {
    $nameFileds  = 'name, ' . $nameFileds;
    $label = 'name';
    $labelAlt = 'email';
    $labelAltForce = false;
    $defaultOrderBy = 'name';
}

return [
    'ctrl' => [
        'label'             => $label,
        'label_alt'         => $labelAlt,
        'label_alt_force'   => $labelAltForce,
        'default_sortby'    => 'ORDER BY ' . $defaultOrderBy,
        'tstamp'            => 'tstamp',
        'prependAtCopy'     => 'LLL:EXT:lang/locallang_general.xml:LGL.prependAtCopy',
        'delete'            => 'deleted',
        'title'             => 'LLL:EXT:tt_address/locallang_tca.xml:tt_address',
        'thumbnail'         => 'image',
        'enablecolumns'     => [
            'disabled' => 'hidden',
        ],
        'iconfile'          => 'EXT:tt_address/ext_icon.gif',
        'searchFields'      => $nameFileds . 'email'
    ],
    'feInterface' => [
        'fe_admin_fieldList' => 'pid,hidden,gender,' . $nameFileds . ',title,address,building,room,birthday,phone,fax,mobile,www,email,city,zip,company,region,country,image,description',
    ],
    'interface' => [
        'showRecordFieldList' => $nameFileds . ',address,building,room,city,zip,region,country,phone,fax,email,www,title,company,image',
    ],
    'columns' => [
        'hidden' => [
            'exclude' => 1,
            'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
            'config'  => [
                'type' => 'check'
            ]
        ],
        'gender' => [
            'label'  => 'LLL:EXT:tt_address/locallang_tca.xml:tt_address.gender',
            'config' => [
                'type'    => 'radio',
                'default' => 'm',
                'items'   => [
                    ['LLL:EXT:tt_address/locallang_tca.xml:tt_address.gender.m', 'm'],
                    ['LLL:EXT:tt_address/locallang_tca.xml:tt_address.gender.f', 'f'],
                ],
            ],
        ],
        'name' => [
            'label'  => 'LLL:EXT:lang/locallang_general.xml:LGL.name',
            'config' => [
                'type' => 'input',
                'size' => '40',
                'eval' => 'trim',
                'max'  => '255',
            ],
        ],
        'first_name' => [
            'exclude' => 0,
            'label'   => 'LLL:EXT:tt_address/locallang_tca.xml:tt_address.first_name',
            'config'  => [
                'type' => 'input',
                'size' => '40',
                'eval' => 'trim',
                'max'  => '255',
            ],
        ],
        'middle_name' => [
            'exclude' => 0,
            'label'   => 'LLL:EXT:tt_address/locallang_tca.xml:tt_address.middle_name',
            'config'  => [
                'type' => 'input',
                'size' => '40',
                'eval' => 'trim',
                'max'  => '255',
            ],
        ],
        'last_name' => [
            'exclude' => 0,
            'label'   => 'LLL:EXT:tt_address/locallang_tca.xml:tt_address.last_name',
            'config'  => [
                'type' => 'input',
                'size' => '40',
                'eval' => 'trim',
                'max'  => '255',
            ],
        ],
        'birthday' => [
            'exclude' => 1,
            'label'   => 'LLL:EXT:tt_address/locallang_tca.xml:tt_address.birthday',
            'config'  => [
                'type' => 'input',
                'eval' => 'date',
                'size' => '8',
                'max'  => '20',
            ],
        ],
        'title' => [
            'exclude' => 1,
            'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.title_person',
            'config'  => [
                'type' => 'input',
                'size' => '20',
                'eval' => 'trim',
                'max'  => '255',
            ],
        ],
        'address' => [
            'label'  => 'LLL:EXT:lang/locallang_general.xml:LGL.address',
            'config' => [
                'type' => 'text',
                'cols' => '20',
                'rows' => '3',
            ],
        ],
        'building' => [
            'label'  => 'LLL:EXT:tt_address/locallang_tca.xml:tt_address.building',
            'config' => [
                'type' => 'input',
                'eval' => 'trim',
                'size' => '20',
                'max'  => '20',
            ],
        ],
        'room' => [
            'label'  => 'LLL:EXT:tt_address/locallang_tca.xml:tt_address.room',
            'config' => [
                'type' => 'input',
                'eval' => 'trim',
                'size' => '20',
                'max'  => '15',
            ],
        ],
        'phone' => [
            'label'  => 'LLL:EXT:lang/locallang_general.xml:LGL.phone',
            'config' => [
                'type' => 'input',
                'eval' => 'trim',
                'size' => '20',
                'max'  => '30',
            ],
        ],
        'fax' => [
            'exclude' => 1,
            'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.fax',
            'config'  => [
                'type' => 'input',
                'size' => '20',
                'eval' => 'trim',
                'max'  => '30',
            ],
        ],
        'mobile' => [
            'exclude' => 1,
            'label'   => 'LLL:EXT:tt_address/locallang_tca.xml:tt_address.mobile',
            'config'  => [
                'type' => 'input',
                'eval' => 'trim',
                'size' => '20',
                'max'  => '30',
            ],
        ],
        'www' => [
            'exclude' => 1,
            'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.www',
            'config'  => [
                'type' => 'input',
                'eval' => 'trim',
                'size' => '20',
                'max'  => '255',
                'wizards' => [
                    'link' => [
                        'type' => 'popup',
                        'title' => 'LLL:EXT:cms/locallang_ttc.xml:header_link_formlabel',
                        'icon' => 'actions-wizard-link',
                        'module' => [
                            'name' => 'wizard_link',
                        ],
                        'JSopenParams' => 'width=800,height=600,status=0,menubar=0,scrollbars=1',
                    ],
                ],
                'softref' => 'typolink',
            ],
        ],
        'email' => [
            'label'  => 'LLL:EXT:lang/locallang_general.xml:LGL.email',
            'config' => [
                'type' => 'input',
                'size' => '40',
                'eval' => 'trim',
                'max'  => '255',
            ],
        ],
        'company' => [
            'exclude' => 1,
            'label'   => 'LLL:EXT:tt_address/locallang_tca.xml:tt_address.organization',
            'config'  => [
                'type' => 'input',
                'eval' => 'trim',
                'size' => '20',
                'max'  => '255',
            ],
        ],
        'city' => [
            'label'  => 'LLL:EXT:lang/locallang_general.xml:LGL.city',
            'config' => [
                'type' => 'input',
                'size' => '20',
                'eval' => 'trim',
                'max'  => '255',
            ],
        ],
        'zip' => [
            'label'  => 'LLL:EXT:lang/locallang_general.xml:LGL.zip',
            'config' => [
                'type' => 'input',
                'eval' => 'trim',
                'size' => '10',
                'max'  => '20',
            ],
        ],
        'region' => [
            'exclude' => 1,
            'label'   => 'LLL:EXT:tt_address/locallang_tca.xml:tt_address.region',
            'config'  => [
                'type' => 'input',
                'size' => '20',
                'eval' => 'trim',
                'max'  => '255',
            ],
        ],
        'country' => [
            'exclude' => 1,
            'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.country',
            'config'  => [
                'type' => 'input',
                'size' => '20',
                'eval' => 'trim',
                'max'  => '128',
            ],
        ],
        'image' => [
            'exclude' => 1,
            'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.image',
            'config'  => [
                'type'          => 'group',
                'internal_type' => 'file',
                'allowed'       => $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext'],
                'max_size'      => '1000',
                'uploadfolder'  => 'uploads/pics',
                'show_thumbs'   => '1',
                'size'          => '3',
                'maxitems'      => 6,
                'minitems'      => '0',
            ],
        ],
        'description' => [
            'exclude' => 1,
            'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.description',
            'config'  => [
                'type' => 'text',
                'rows' => 5,
                'cols' => 48,
            ],
        ],
        'addressgroup' => [
            'exclude' => 1,
            'label'   => 'LLL:EXT:tt_address/locallang_tca.xml:tt_address.addressgroup',
            'config'  => [
                'type'          => 'select',
                'form_type'     => 'user',
                'userFunc'      => 'tx_ttaddress_treeview->displayGroupTree',
                'treeView'      => 1,
                'foreign_table' => 'tt_address_group',
                'size'          => 5,
                'autoSizeMax'   => 25,
                'minitems'      => 0,
                'maxitems'      => 50,
                'MM'            => 'tt_address_group_mm',
            ],
        ],
    ],
    'types' => [
        '1' => [
            'showitem' =>
                'hidden,gender,
                --palette--;;2,'
                . $nameFileds
                . ',birthday,address,
                --palette--;;6,
                zip,city,
                --palette--;;3,
                email,
                --palette--;;5,
                phone,
                --palette--;;4,
                image,description,addressgroup
                '
        ],
    ],
    'palettes' => [
        '2' => ['showitem' => 'title, company'],
        '3' => ['showitem' => 'country, region'],
        '4' => ['showitem' => 'mobile, fax'],
        '5' => ['showitem' => 'www'],
        '6' => ['showitem' => 'building, room']
    ]
];
