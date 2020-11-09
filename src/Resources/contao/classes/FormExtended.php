<?php

declare(strict_types=1);

/*
 * This file is part of Contao demo bundle.
 *
 * (c) Jrockenbauer
 *
 * @license LGPL-3.0-or-later
 */

namespace Jrockenbauer\ContaoFormconfirmation\Classes;

class FormExtended
{
    /**
     * @Hook("prepareFormData")
     */
    public function onPrepareFormData(array &$submittedData, array $labels, array $fields, \Contao\Form $form): void
    {
        $tmpArray = $submittedData;
        $submittedData = [];
        foreach ($tmpArray as $key => $value) {
            $submittedData[$key] = $value."\n";
        }
    }

    public function onProcessFormData(
        array $submittedData,
        array $formData,
        ?array $files,
        array $labels,
        \Contao\Form $form
    ): void {
        if ($formData['formConfirmationMailCheck'] == 1 && $submittedData['email'] != "") {
            $objEmail = new \Email();
            $objEmail->from = $formData['formConfirmationMailSender'];
            $objEmail->fromName = $formData['formConfirmationMailSenderName'];;
            $objEmail->replyTo($formData['formConfirmationMailAnswer']);
            $objEmail->subject = $formData['formConfirmationMailSubject'];
            $objEmail->text = strip_tags($formData['formConfirmationMailText']);
            $objEmail->sendTo(str_replace(array("\n"), '', $submittedData['email']));
        }
    }
}
