<?php

namespace Esprit\PIDEVBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('EspritPIDEVBundle:Default:index.html.twig',array());
    }
    
    public function hottoursAction()
    {
        return $this->render('EspritPIDEVBundle:interface:hottours.html.twig',array());
    }
    
    public function specialoffersAction()
    {
        return $this->render('EspritPIDEVBundle:interface:specialoffers.html.twig',array());
    }
    
    public function blogAction()
    {
        return $this->render('EspritPIDEVBundle:interface:blog.html.twig',array());
    }
    
    public function accountAction()
    {
        return $this->render('EspritPIDEVBundle:interface:account.html.twig',array());
    }
}
