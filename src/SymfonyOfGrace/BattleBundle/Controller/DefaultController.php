<?php

namespace SymfonyOfGrace\BattleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use SymfonyOfGrace\BattleBundle\Entity\Contact;

class DefaultController extends Controller
{
    /**
     * @Template()
    */
    public function indexAction()
    {
        return [];
    }

    /**
     * @Template()
     */
    public function contactAction()
    {
       // create a task and give it some dummy data for this example
        $contact = new Contact();

        $form = $this->createFormBuilder($contact)
            ->add('name', 'text')
            ->add('email', 'text')
            ->add('message', 'textarea')
            ->add('save', 'submit')
            ->getForm();
        return ['form' => $form->createView()];
    }
}
