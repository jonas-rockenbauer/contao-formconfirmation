<?php

// Register hooks
$GLOBALS['TL_HOOKS']['processFormData'][] = [Jrockenbauer\ContaoFormconfirmation\EventListener\ProcessFormDataListener::class, 'onProcessFormData'];
