<?php

/**
 *
 * @author ITI Communication
 *
 */

$GLOBALS['TL_HOOKS']['prepareFormData'][] = [Jrockenbauer\ContaoFormconfirmation\Classes\FormExtended::class, 'onPrepareFormData'];
$GLOBALS['TL_HOOKS']['processFormData'][] = [Jrockenbauer\ContaoFormconfirmation\Classes\FormExtended::class, 'onProcessFormData'];
