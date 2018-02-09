<?php

namespace CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CoreController extends Controller
{
    public function indexAction()
    {
        return $this->render('@Core/core/index.html.twig');
    }
    
    public function menuAction()
    {
        $navItems = array(
            array(
                "name" => "Home",
                "link" => "/",
                "active" => "active"
            ),
            array(
                "name" => "Back to sashalaurent.com",
                "link" => "http://www.sashalaurent.com",
                "active" => ""
            )
        );

        return $this->render('@Core/core/menu.html.twig', array(
            "navItems" => $navItems
        ));
    }
    
    public function footerAction()
    {
        return $this->render('@Core/core/footer.html.twig', array(
        ));
    }
}
