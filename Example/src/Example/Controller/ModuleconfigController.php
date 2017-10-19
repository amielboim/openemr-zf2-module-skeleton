<?php

namespace Example\Controller;

use Zend\View\Model\ViewModel;

class ModuleconfigController
{

    public function getHookConfig()
    {
        //NAME KEY SPECIFIES THE NAME OF THE HOOK FOR UNIQUELY IDENTIFYING IN A MODULE.
        //TITLE KEY SPECIFIES THE TITLE OF THE HOOK TO BE DISPLAYED IN THE CALLING PAGES.
        //PATH KEY SPECIFIES THE PATH OF THE RESOURCE, SHOULD SPECIFY THE CONTROLLER
        //AND IT’S ACTION IN THE PATH, (INCLUDING INDEX ACTION)
        $hooks = array (
            // hook for patient screen low security
            array (
                'name' => "example",
                'title' => "PUT NAME HERE",
                'path' => "public/example",
            ),

        );
        return $hooks;
    }

    public function getDependedModulesConfig()
    {
        return array();
    }

    public function getAclConfig()
    {
        //new acl rule for disallow using in the General setting screen
        $acl = array(
                array (
                    'section_id' => "example",
                    'section_name' => "example",
                    'parent_section' => "",
                )
            );
            return $acl;

      }

}