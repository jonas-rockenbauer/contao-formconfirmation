<?php

/**
 * Table tl_form
 */

// fields
$GLOBALS['TL_DCA']['tl_form']['fields']['formConfirmationMailCheck'] = array(
    'label' => &$GLOBALS['TL_LANG']['tl_form']['formConfirmationMailCheck'],
    'exclude' => true,
    'filter' => true,
    'inputType' => 'checkbox',
    'eval' => array('helpwizard' => true, 'submitOnChange' => true),
    'sql' => "char(1) NOT NULL default ''",
);
$GLOBALS['TL_DCA']['tl_form']['fields']['formConfirmationMailSender'] = array(
    'label' => &$GLOBALS['TL_LANG']['tl_form']['formConfirmationMailSender'],
    'exclude' => true,
    'filter' => false,
    'inputType' => 'text',
    'eval' => array('mandatory' => true, 'maxlength' => 255, 'tl_class' => 'w50'),
    'sql' => "varchar(255) NOT NULL default ''",
);
$GLOBALS['TL_DCA']['tl_form']['fields']['formConfirmationMailSenderName'] = array(
    'label' => &$GLOBALS['TL_LANG']['tl_form']['formConfirmationMailSenderName'],
    'exclude' => true,
    'filter' => false,
    'inputType' => 'text',
    'eval' => array('mandatory' => true, 'maxlength' => 255, 'tl_class' => 'w50'),
    'sql' => "varchar(255) NOT NULL default ''",
);
$GLOBALS['TL_DCA']['tl_form']['fields']['formConfirmationMailAnswer'] = array(
    'label' => &$GLOBALS['TL_LANG']['tl_form']['formConfirmationMailAnswer'],
    'exclude' => true,
    'filter' => false,
    'inputType' => 'text',
    'eval' => array('mandatory' => false, 'maxlength' => 255, 'tl_class' => 'w50'),
    'sql' => "varchar(255) NOT NULL default ''",
);
$GLOBALS['TL_DCA']['tl_form']['fields']['formConfirmationMailSubject'] = array(
    'label' => &$GLOBALS['TL_LANG']['tl_form']['formConfirmationMailSubject'],
    'exclude' => true,
    'filter' => false,
    'inputType' => 'text',
    'eval' => array('mandatory' => true, 'maxlength' => 255, 'tl_class' => 'w50'),
    'sql' => "varchar(255) NOT NULL default ''",
);
$GLOBALS['TL_DCA']['tl_form']['fields']['formConfirmationMailText'] = array(
    'label' => &$GLOBALS['TL_LANG']['tl_form']['formConfirmationMailText'],
    'exclude' => true,
    'filter' => false,
    'inputType' => 'textarea',
    'eval' => array('mandatory' => true, 'rows' => 15, 'allowHTML' => false, 'tl_class' => 'clr'),
    'sql' => "text NULL",
);


// Palettes
$GLOBALS['TL_DCA']['tl_form']['palettes']['__selector__'][] = 'formConfirmationMailCheck';
$GLOBALS['TL_DCA']['tl_form']['palettes']['default'] = str_replace(
    array('storeValues', 'sendViaEmail'),
    array('storeValues', 'sendViaEmail;{formConfirmationMail_legend:hide},formConfirmationMailCheck'),
    $GLOBALS['TL_DCA']['tl_form']['palettes']['default']
);

// Subpalettes
array_insert(
    $GLOBALS['TL_DCA']['tl_form']['subpalettes'],
    count($GLOBALS['TL_DCA']['tl_form']['subpalettes']),
    array('formConfirmationMailCheck' => 'formConfirmationMailSender,formConfirmationMailSenderName,formConfirmationMailAnswer,formConfirmationMailSubject,formConfirmationMailText')
);
