<?php

declare(strict_types=1);

/*
 * This file is part of Contao demo bundle.
 *
 * (c) Jrockenbauer
 *
 * @license LGPL-3.0-or-later
 */

namespace Jrockenbauer\ContaoFormconfirmation\EventListener;

use Contao\Email;

class ProcessFormDataListener
{
    public function onProcessFormData(
        array $submittedData,
        array $formData,
        ?array $files,
        array $labels,
        \Contao\Form $form
    ): void {

        $fieldNameRecipient = !empty($formData['formConfirmationFieldNameRecipient']) ? $formData['formConfirmationFieldNameRecipient'] : 'email';

        if ($formData['formConfirmationMailCheck'] == 1 && $submittedData[$fieldNameRecipient] != '') {
            $objEmail = new Email();
            $objEmail->from = $formData['formConfirmationMailSender'];
            $objEmail->fromName = $formData['formConfirmationMailSenderName'];
            $objEmail->replyTo($formData['formConfirmationMailAnswer']);
            $objEmail->subject = $formData['formConfirmationMailSubject'];
            $objEmail->text = strip_tags($formData['formConfirmationMailText']);

            if($formData['formConfirmationMailHtml']) {
                $objEmail->html = $formData['formConfirmationMailHtml'];
            }

            $objEmail->sendTo(str_replace(["\n"], '', $submittedData[$fieldNameRecipient]));
        }
    }
}
