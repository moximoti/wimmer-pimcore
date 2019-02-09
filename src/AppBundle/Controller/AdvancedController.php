<?php

namespace AppBundle\Controller;

use AppBundle\Form\ContactFormType;
use AppBundle\Form\PersonInquiryType;
use AppBundle\Entity\ContactFormModel;
use Pimcore\File;
use Pimcore\Mail;
use Pimcore\Model\Asset;
use Pimcore\Model\DataObject;
use Pimcore\Model\Document;
use Pimcore\Tool;
use Symfony\Component\HttpFoundation\Request;
use Zend\Paginator\Paginator;

class AdvancedController extends FrontendController
{
    
    public function contactFormAction(Request $request)
    {
        $success = false;

        // initialize form and handle request data
        $form = $this->createForm(ContactFormType::class);
        $form->handleRequest($request);

        
        if ($form->isSubmitted() && $form->isValid()) {
            $success = true;

            $data = $form->getData();

            $mail = new Mail();
            $mail->setIgnoreDebugMode(true);

            // To is used from the email document, but can also be set manually here (same for subject, CC, BCC, ...)
            //$mail->addTo("info@pimcore.org");

            $emailDocument = $this->document->getProperty('email');
            if (!$emailDocument) {
                $emailDocument = Document::getById(38);
            }

            $mail->setDocument($emailDocument);
            $mail->setParams($data);
            $mail->send();

            // add form data as view parameters
            $this->view->getParameters()->add($data);
        }

        $this->view->success = $success;

        // add the form view
        $this->view->form = $form->createView();
    }
}
