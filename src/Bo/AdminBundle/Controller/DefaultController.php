<?php

namespace Bo\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller {

    /**
     * @Route("/hello/{name}", name="accueil")
     * @Template()
     */
    public function indexAction($name) {
        return array('name' => $name);
    }

    /**
     * @Route("/aide", name="admin.aide")
     * @Template()
     */
    public function aideAction() {
        return array();
    }
    
    /**
     * @Template()
     */
    public function calculAction(){
         $nbrArticles = rand(11,99999);
         return array('nbr_articles' => $nbrArticles);
    }
}
