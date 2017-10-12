<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/GoVoyage')) {
            if (0 === strpos($pathinfo, '/GoVoyage/Ho')) {
                // esprit_pidev_homepage
                if ($pathinfo === '/GoVoyage/Home') {
                    return array (  '_controller' => 'Esprit\\PIDEVBundle\\Controller\\DefaultController::indexAction',  '_route' => 'esprit_pidev_homepage',);
                }

                // esprit_pidev_hottours
                if ($pathinfo === '/GoVoyage/Hot_tours') {
                    return array (  '_controller' => 'Esprit\\PIDEVBundle\\Controller\\DefaultController::hottoursAction',  '_route' => 'esprit_pidev_hottours',);
                }

            }

            // esprit_pidev_specialoffers
            if ($pathinfo === '/GoVoyage/Special_offers') {
                return array (  '_controller' => 'Esprit\\PIDEVBundle\\Controller\\DefaultController::specialoffersAction',  '_route' => 'esprit_pidev_specialoffers',);
            }

            // esprit_pidev_blog
            if ($pathinfo === '/GoVoyage/Blog') {
                return array (  '_controller' => 'Esprit\\PIDEVBundle\\Controller\\DefaultController::blogAction',  '_route' => 'esprit_pidev_blog',);
            }

            // esprit_pidev_account
            if ($pathinfo === '/GoVoyage/Account') {
                return array (  '_controller' => 'Esprit\\PIDEVBundle\\Controller\\DefaultController::accountAction',  '_route' => 'esprit_pidev_account',);
            }

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
