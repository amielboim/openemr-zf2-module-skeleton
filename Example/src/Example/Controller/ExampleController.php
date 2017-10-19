<?php

namespace Example\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Example\Model\ExampleTable;
use Example\Form\ExampleForm;

/**
 * Description of AlbumController
 *
 * @author suleymanmelikoglu
 */
class ExampleController extends AbstractActionController{




    public function indexAction()
    {
        return $this->redirect()->toUrl('https://www.w3schools.com/');
    }

}
