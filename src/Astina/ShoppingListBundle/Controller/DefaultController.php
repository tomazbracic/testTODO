<?php

namespace Astina\ShoppingListBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ShoppingListBundle:Default:index.html.twig', array('name' => $name));
    }
}
