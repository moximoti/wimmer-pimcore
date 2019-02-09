<?php

namespace AppBundle\Controller;

use Pimcore\Controller\FrontendController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Event\FilterControllerEvent;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class WidefaultController extends FrontendController
{
    public function onKernelController(FilterControllerEvent $event)
    {
        // enable twig view auto-rendering
        $this->setViewAutoRender($event->getRequest(), true, 'twig');
    }
    public function defaultAction(Request $request)
    {
    	// Standardseite bestehend aus Head, Lead, Wysiwyg.
    }
    /*
    public function customAction(Request $request)
    {
    	// Frei zusammenbaubar mit Inhaltsmodulen
    }
    public function startpageAction(Request $request)
    {
    	// Fest konfigurierte Startseite. Bild muss austauschbar sein, kann evtl auch Video sein.
    }
    public function galleryAction(Request $request)
    {
    	Bildergallerie aus Ordner. Mit custom Head Text.
    }
    public function mapAction(Request $request)
    {
    	Map im Headerbereich. (Zusammenlegen mit AdvancedController/contactAction)
    }
    */
}
