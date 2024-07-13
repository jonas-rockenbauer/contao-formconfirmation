<?php

/**
 * Table tl_form.
 */

// fields
$GLOBALS['TL_DCA']['tl_form']['fields']['formConfirmationMailCheck'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_form']['formConfirmationMailCheck'],
    'exclude' => true,
    'filter' => true,
    'inputType' => 'checkbox',
    'eval' => ['helpwizard' => true, 'submitOnChange' => true],
    'sql' => "char(1) NOT NULL default ''",
];
$GLOBALS['TL_DCA']['tl_form']['fields']['formConfirmationMailSender'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_form']['formConfirmationMailSender'],
    'exclude' => true,
    'filter' => false,
    'inputType' => 'text',
    'eval' => ['mandatory' => true, 'maxlength' => 255, 'tl_class' => 'w50'],
    'sql' => "varchar(255) NOT NULL default ''",
];
$GLOBALS['TL_DCA']['tl_form']['fields']['formConfirmationFieldNameRecipient'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_form']['formConfirmationFieldNameRecipient'],
    'exclude' => true,
    'filter' => false,
    'inputType' => 'text',
    'eval' => ['mandatory' => true, 'maxlength' => 255, 'tl_class' => 'w50'],
    'sql' => "varchar(255) NOT NULL default 'email'",
];
$GLOBALS['TL_DCA']['tl_form']['fields']['formConfirmationMailSenderName'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_form']['formConfirmationMailSenderName'],
    'exclude' => true,
    'filter' => false,
    'inputType' => 'text',
    'eval' => ['mandatory' => true, 'maxlength' => 255, 'tl_class' => 'w50'],
    'sql' => "varchar(255) NOT NULL default ''",
];
$GLOBALS['TL_DCA']['tl_form']['fields']['formConfirmationMailAnswer'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_form']['formConfirmationMailAnswer'],
    'exclude' => true,
    'filter' => false,
    'inputType' => 'text',
    'eval' => ['mandatory' => false, 'maxlength' => 255, 'tl_class' => 'w50'],
    'sql' => "varchar(255) NOT NULL default ''",
];
$GLOBALS['TL_DCA']['tl_form']['fields']['formConfirmationMailSubject'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_form']['formConfirmationMailSubject'],
    'exclude' => true,
    'filter' => false,
    'inputType' => 'text',
    'eval' => ['mandatory' => true, 'maxlength' => 255, 'tl_class' => 'w50'],
    'sql' => "varchar(255) NOT NULL default ''",
];
$GLOBALS['TL_DCA']['tl_form']['fields']['formConfirmationMailText'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_form']['formConfirmationMailText'],
    'exclude' => true,
    'filter' => false,
    'inputType' => 'textarea',
    'eval' => ['mandatory' => true, 'rows' => 15, 'allowHTML' => false, 'tl_class' => 'clr'],
    'sql' => 'text NULL',
];
$GLOBALS['TL_DCA']['tl_form']['fields']['formConfirmationMailHtml'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_form']['formConfirmationMailHtml'],
    'exclude' => true,
    'filter' => false,
    'inputType' => 'textarea',
    'eval' => [
        'style' => 'min-height: 50px;',
        'preserveTags' => true,
        'decodeEntities' => true,
        'allowHtml' => true,
        'rte' => 'ace|html',
        'tl_class' => 'clr',
    ],
    'sql' => 'text NULL',
];

// Palettes
$GLOBALS['TL_DCA']['tl_form']['palettes']['__selector__'][] = 'formConfirmationMailCheck';
$GLOBALS['TL_DCA']['tl_form']['palettes']['default'] = str_replace(
    ['storeValues', 'sendViaEmail'],
    ['storeValues', 'sendViaEmail;{formConfirmationMail_legend:hide},formConfirmationMailCheck'],
    $GLOBALS['TL_DCA']['tl_form']['palettes']['default']
);

// Subpalettes
Contao\ArrayUtil::arrayInsert(
    $GLOBALS['TL_DCA']['tl_form']['subpalettes'],
    count($GLOBALS['TL_DCA']['tl_form']['subpalettes']),
    ['formConfirmationMailCheck' => 'formConfirmationFieldNameRecipient,formConfirmationMailSender,formConfirmationMailSenderName,formConfirmationMailAnswer,formConfirmationMailSubject,formConfirmationMailText,formConfirmationMailHtml']
);
