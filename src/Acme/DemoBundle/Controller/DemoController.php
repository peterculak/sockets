<?php

namespace Acme\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Acme\DemoBundle\Form\ContactType;
use Symfony\Component\HttpFoundation\Session\Session;

// these import the "@Route" and "@Template" annotations
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DemoController extends Controller
{
    /**
     * @Route("/", name="_demo")
     * @Template()
     */
    public function indexAction()
    {
        return array();
    }

    /**
     * @Route("/hello/{name}", name="_demo_hello")
     * @Template()
     */
    public function helloAction($name)
    {
        return array('name' => $name);
    }

    /**
     * @Route("/sockets", name="_sockets")
     * @Template()
     */
    public function socketsAction()
    {
        $session = $this->getSession();
        $url = 'http://' . $this->container->parameters['site_host'] . ':' . $this->container->parameters['site_port'] . '/demo/sockets/' . $session->getId();

        return array(
            'sessionId' => $session->getId(),
            'qrCodeUrl' => $url
        );
    }

    /**
     * @Route("/sockets/{sessionIdFromRemote}", name="_demo_socket_session")
     * @Template()
     */
    public function socketsSessionAction($sessionIdFromRemote)
    {
        return array(
            'sessionId' => $sessionIdFromRemote,
        );
    }

    /**
     * @Route("/contact", name="_demo_contact")
     * @Template()
     */
    public function contactAction(Request $request)
    {
        $form = $this->createForm(new ContactType());
        $form->handleRequest($request);

        if ($form->isValid()) {
            $mailer = $this->get('mailer');

            // .. setup a message and send it
            // http://symfony.com/doc/current/cookbook/email.html

            $request->getSession()->getFlashBag()->set('notice', 'Message sent!');

            return new RedirectResponse($this->generateUrl('_demo'));
        }

        return array('form' => $form->createView());
    }

    private function getSession()
    {
        $session = $this->getRequest()->getSession(); // Get started session
        if (!$session->isStarted()) {
            $session = new Session(); // if there is no session, start it
            $session->start();
        }
        return $session;
    }
}
