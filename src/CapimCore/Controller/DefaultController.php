<?php
namespace CapimCore\Controller;
use CapimPluginWP\Annotation\Action;
use CapimPluginWP\Controller\Controller;

class DefaultController extends Controller {

    /**
     * @Action( hook="init")
     */
    public function indexAction(){
        echo "SI VA TROPPO BELLO";
    }
}