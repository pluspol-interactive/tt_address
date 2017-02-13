<?php
defined('TYPO3_MODE') or die();

return array (
    'ctrl' => array (
        'label'             => 'name',
        'label_alt'         => 'email',
        'default_sortby'    => 'ORDER BY name',
        'tstamp'            => 'tstamp',
        'prependAtCopy'     => 'LLL:EXT:lang/locallang_general.xml:LGL.prependAtCopy',
        'delete'            => 'deleted',
        'title'             => 'LLL:EXT:tt_address/locallang_tca.xml:tt_address',
        'thumbnail'         => 'image',
        'enablecolumns'     => array (
            'disabled' => 'hidden'
        ),
        'iconfile'          => 'EXT:tt_address/ext_icon.gif',
        'searchFields'		=> 'name, first_name, middle_name, last_name, email'
    ),
    'feInterface' => array (
        'fe_admin_fieldList' => 'pid,hidden,gender,name,title,address,building,room,birthday,phone,fax,mobile,www,email,city,zip,company,region,country,image,description'
    ),
    'interface' => array (
        'showRecordFieldList' => 'name,address,building,room,city,zip,region,country,phone,fax,email,www,title,company,image'
    ),
    'columns' => array (
        'hidden' => array (
            'exclude' => 1,
            'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
            'config'  => array (
                'type' => 'check'
            )
        ),
        'gender' => array (
            'label'  => 'LLL:EXT:tt_address/locallang_tca.xml:tt_address.gender',
            'config' => array (
                'type'    => 'radio',
                'default' => 'm',
                'items'   => array(
                    array('LLL:EXT:tt_address/locallang_tca.xml:tt_address.gender.m', 'm'),
                    array('LLL:EXT:tt_address/locallang_tca.xml:tt_address.gender.f', 'f')
                )
            )
        ),
        'name' => array (
            'label'  => 'LLL:EXT:lang/locallang_general.xml:LGL.name',
            'config' => array (
                'type' => 'input',
                'size' => '40',
                'eval' => 'trim',
                'max'  => '255'
            )
        ),
        'first_name' => array (
            'exclude' => 0,
            'label'   => 'LLL:EXT:tt_address/locallang_tca.xml:tt_address.first_name',
            'config'  => array (
                'type' => 'input',
                'size' => '40',
                'eval' => 'trim',
                'max'  => '255'
            )
        ),
        'middle_name' => array (
            'exclude' => 0,
            'label'   => 'LLL:EXT:tt_address/locallang_tca.xml:tt_address.middle_name',
            'config'  => array (
                'type' => 'input',
                'size' => '40',
                'eval' => 'trim',
                'max'  => '255'
            )
        ),
        'last_name' => array (
            'exclude' => 0,
            'label'   => 'LLL:EXT:tt_address/locallang_tca.xml:tt_address.last_name',
            'config'  => array (
                'type' => 'input',
                'size' => '40',
                'eval' => 'trim',
                'max'  => '255'
            )
        ),
        'birthday' => array (
            'exclude' => 1,
            'label'   => 'LLL:EXT:tt_address/locallang_tca.xml:tt_address.birthday',
            'config'  => array (
                'type' => 'input',
                'eval' => 'date',
                'size' => '8',
                'max'  => '20'
            )
        ),
        'title' => array (
            'exclude' => 1,
            'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.title_person',
            'config'  => array (
                'type' => 'input',
                'size' => '20',
                'eval' => 'trim',
                'max'  => '255'
            )
        ),
        'address' => array (
            'label'  => 'LLL:EXT:lang/locallang_general.xml:LGL.address',
            'config' => array (
                'type' => 'text',
                'cols' => '20',
                'rows' => '3'
            )
        ),
        'building' => array (
            'label'  => 'LLL:EXT:tt_address/locallang_tca.xml:tt_address.building',
            'config' => array (
                'type' => 'input',
                'eval' => 'trim',
                'size' => '20',
                'max'  => '20'
            )
        ),
        'room' => array (
            'label'  => 'LLL:EXT:tt_address/locallang_tca.xml:tt_address.room',
            'config' => array (
                'type' => 'input',
                'eval' => 'trim',
                'size' => '20',
                'max'  => '15'
            )
        ),
        'phone' => array (
            'label'  => 'LLL:EXT:lang/locallang_general.xml:LGL.phone',
            'config' => array (
                'type' => 'input',
                'eval' => 'trim',
                'size' => '20',
                'max'  => '30'
            )
        ),
        'fax' => array (
            'exclude' => 1,
            'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.fax',
            'config'  => array (
                'type' => 'input',
                'size' => '20',
                'eval' => 'trim',
                'max'  => '30'
            )
        ),
        'mobile' => array (
            'exclude' => 1,
            'label'   => 'LLL:EXT:tt_address/locallang_tca.xml:tt_address.mobile',
            'config'  => array (
                'type' => 'input',
                'eval' => 'trim',
                'size' => '20',
                'max'  => '30'
            )
        ),
        'www' => array (
            'exclude' => 1,
            'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.www',
            'config'  => array (
                'type' => 'input',
                'eval' => 'trim',
                'size' => '20',
                'max'  => '255',
                'wizards' => array(
                    'link' => array(
                        'type' => 'popup',
                        'title' => 'LLL:EXT:cms/locallang_ttc.xml:header_link_formlabel',
                        'icon' => 'actions-wizard-link',
                        'module' => [
                            'name' => 'wizard_link',
                        ],
                        'JSopenParams' => 'width=800,height=600,status=0,menubar=0,scrollbars=1'
                    ),
                ),
                'softref' => 'typolink'
            )
        ),
        'email' => array (
            'label'  => 'LLL:EXT:lang/locallang_general.xml:LGL.email',
            'config' => array (
                'type' => 'input',
                'size' => '40',
                'eval' => 'trim',
                'max'  => '255'
            )
        ),
        'company' => array (
            'exclude' => 1,
            'label'   => 'LLL:EXT:tt_address/locallang_tca.xml:tt_address.organization',
            'config'  => array (
                'type' => 'input',
                'eval' => 'trim',
                'size' => '20',
                'max'  => '255'
            )
        ),
        'city' => array (
            'label'  => 'LLL:EXT:lang/locallang_general.xml:LGL.city',
            'config' => array (
                'type' => 'input',
                'size' => '20',
                'eval' => 'trim',
                'max'  => '255'
            )
        ),
        'zip' => array (
            'label'  => 'LLL:EXT:lang/locallang_general.xml:LGL.zip',
            'config' => array (
                'type' => 'input',
                'eval' => 'trim',
                'size' => '10',
                'max'  => '20'
            )
        ),
        'region' => array (
            'exclude' => 1,
            'label'   => 'LLL:EXT:tt_address/locallang_tca.xml:tt_address.region',
            'config'  => array (
                'type' => 'input',
                'size' => '20',
                'eval' => 'trim',
                'max'  => '255'
            )
        ),
        'country' => array (
            'exclude' => 1,
            'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.country',
            'config'  => array (
                'type' => 'input',
                'size' => '20',
                'eval' => 'trim',
                'max'  => '128'
            )
        ),
        'image' => array (
            'exclude' => 1,
            'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.image',
            'config'  => array (
                'type'          => 'group',
                'internal_type' => 'file',
                'allowed'       => $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext'],
                'max_size'      => '1000',
                'uploadfolder'  => 'uploads/pics',
                'show_thumbs'   => '1',
                'size'          => '3',
                'maxitems'      => 6,
                'minitems'      => '0'
            )
        ),
        'description' => array (
            'exclude' => 1,
            'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.description',
            'config'  => array (
                'type' => 'text',
                'rows' => 5,
                'cols' => 48
            )
        ),
        'addressgroup' => array(
            'exclude' => 1,
            'label'   => 'LLL:EXT:tt_address/locallang_tca.xml:tt_address.addressgroup',
            'config'  => array(
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
            )
        )
    ),
    'types' => array (
        '1' => array('showitem' => 'hidden,gender,name,birthday,address,zip,city,email,phone,image,description,addressgroup')
    ),
    'palettes' => array (
        '2' => array('showitem' => 'title, company'),
        '3' => array('showitem' => 'country, region'),
        '4' => array('showitem' => 'mobile, fax'),
        '5' => array('showitem' => 'www'),
        '6' => array('showitem' => 'building, room')
    )
);
